<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Utils\TelegramUtil;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\Validator;
use TgWebValid\Exceptions\BotException;
use TgWebValid\Exceptions\ValidationException;
use TgWebValid\TgWebValid;

class TelegramController extends Controller
{
    public function index()
    {
        return view('telegram.index');
    }

    public function signed($user, Request $request)
    {
        if (! $request->hasValidSignature()) {
            abort(401);
        }
        $user = User::findOrFail($user);
        Auth::login($user);
        return redirect()->route('student.lesson.index');
    }

    public function api_login(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'initData' => 'required',
            'email' => 'required|email',
            'password' => 'required',
        ]);
        if($validator->fails()) {
            return response()->json(['status' => 'failed', 'errors' => $validator->errors()])->setStatusCode(200);
        }
        try {
            $tgWebValid = new TgWebValid(env('TELEGRAM_BOT_TOKEN'), true);
            $telegramUser = $tgWebValid->bot()->validateInitData($request->initData);
            $user = User::where('telegram', $telegramUser->user->id)->first();
            if (!$user) {
                if(!Auth::attempt(['email' => $request->email, 'password' =>$request->password])) {
                    return response()->json(['status' => 'failed'])->setStatusCode(200);
                }
                $user->telegram = $telegramUser->user->id;
                $user->save();
            }
            $token = $user->createToken('Telegram')->plainTextToken;
            $url = URL::temporarySignedRoute("telegram.signed", now()->addMinutes(120), ["user" => $user->id]);
            return response()->json(['user' => $user,'url' => $url, 'token' => $token,'status' => 'success']);

        } catch (ValidationException $e) {
            Log::error("Telegram Login:".$e->getMessage());
        } catch (BotException $e) {
            Log::error("Telegram Login:".$e->getMessage());
        } catch (Exception $e) {
            Log::error("Telegram Login:".$e->getMessage());
        }
        return response()->json(['status' => 'failed']);
    }
}

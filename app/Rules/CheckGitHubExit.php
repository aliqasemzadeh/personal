<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class CheckGitHubExit implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        try {
            $response = Http::get('https://api.github.com/users/'.$value);
            if($response->status() != "200") {
                $fail(__('Account not exit.'));
            }
        } catch (\Exception $e) {
            $fail(__('No Internet Connection'));
        }

    }
}

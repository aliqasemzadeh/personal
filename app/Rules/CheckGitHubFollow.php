<?php

namespace App\Rules;

use Closure;
use Illuminate\Contracts\Validation\ValidationRule;
use Illuminate\Support\Facades\Http;

class CheckGitHubFollow implements ValidationRule
{
    /**
     * Run the validation rule.
     *
     * @param  \Closure(string): \Illuminate\Translation\PotentiallyTranslatedString  $fail
     */
    public function validate(string $attribute, mixed $value, Closure $fail): void
    {
        try {
            $response = Http::get('https://api.github.com/users/'.$value.'/following/aliqasemzadeh');
            if($response->status() != "204") {
                $fail(__('Please follow teacher account.'));
            }
        }  catch (\Exception $e) {
            $fail(__('No Internet Connection'));
        }

    }
}

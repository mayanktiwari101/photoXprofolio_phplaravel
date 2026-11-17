<?php

namespace App\Http\Request\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Validation\ValidationException;
use Illuminate\Support\Str;

class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request
     */
    public function authorize(): bool
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     */
    public function rules(): array{
        return [
            'email' => 'required | string | email',
            'password' => 'required | string',
        ];
    }

    /**
     * Attemp to authenticate the request's credentials
     * 
     * //we have throw left to implement,
     */

    public function authenticate(): void 
    {
        $this->ensureIsNotRateLimited();
        if(!Auth::attempt($this->only('email', 'password'), $this->boolean('remember'))) {
            RateLimiter::hit($this->throttlekey());

            throw ValidationException::withMessage([
                'email' => __('auth.failed'),
            ]);
        }
        RateLimiter::clear($this->throttlekey());
    }

    /**
     * ensure the login request is not rate limited.
     * //we have throw is left to implement
     */

    public function ensureIsNotRateLimited(): void
    {
        if(!RateLimiter::tooManyAttempts($this->throttlekey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->thottlekey());

        throw ValidateException::withMessage([
            'email' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request
     */

    public function throttlekey(): string
    {
        return Str::lower($this->input('email')). '|'.$this->ip();
    }
}
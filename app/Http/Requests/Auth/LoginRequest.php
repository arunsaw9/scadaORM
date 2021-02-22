<?php

namespace App\Http\Requests\Auth;

use Illuminate\Auth\Events\Lockout;
use Illuminate\Foundation\Http\FormRequest;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\RateLimiter;
use Illuminate\Support\Str;
use Illuminate\Validation\ValidationException;
use Adldap\Laravel\Facades\Adldap;


class LoginRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()
    {
        return true;
    }

   

    public function rules()
    {
        return [
            'CPF_NO' => 'required|string',
            'password' => 'required|string',
        ];
    }

    public function authenticate()
    {
        $this->ensureIsNotRateLimited();

        $ldapUser = Adldap::search()->where('sAMAccountName', $this->CPF_NO)->first();
        $userDn = $ldapUser->distinguishedname[0];
        $provider = \Adldap::getProvider('default');

        // try {

        //     if ($provider->auth()->attempt($userDn, $this->password, true)) {
        //         echo json_encode(
        //             array (
        //                 'login' => true
        //             )
        //         );
        //     } else {
        //         echo json_encode(
        //             array (
        //                 'login' => false,
        //                 'message' => 'Error message here.'
        //             )
        //         );
        //     }
        // } catch (Adldap\Auth\UsernameRequiredException $e) {
        //     // The user didn't supply a username.
        // } catch (Adldap\Auth\PasswordRequiredException $e) {
        //     // The user didn't supply a password.
        // }

        // die;

        // if(Adldap::auth()->attempt($userDn, $this->password, true)) {
        //     dd('working'); 
        // }
        // else
        // {
        //     $provider = \Adldap::getProvider('default' );
        //     if ($provider->auth()->attempt($userDn, $this->password, true)) {
        //         echo "work";
        //     }else{
        //         echo "no";
        //         dd($provider);
        //     }
        //     // dd($provider->search()->users()->get(;));  //empty Collection
        //     // dd($provider->search()->all()); 
        // } 

        // die;

        $credentials = [
            'CPF_NO' => $this->CPF_NO,
            'password' => $this->password,
        ];

        if (! Auth::attempt($credentials, $this->filled('remember'))) {

            RateLimiter::hit($this->throttleKey());

            throw ValidationException::withMessages([
                'CPF_NO' => __('auth.failed'),
            ]);
        }
        RateLimiter::clear($this->throttleKey());
    }



    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    // public function rules()
    // {
    //     return [
    //         //'email' => 'required|string|email',
    //         'CPF_NO' => 'required',
    //         'password' => 'required|string',
    //     ];
    // }

    /**
     * Attempt to authenticate the request's credentials.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    // public function authenticate()
    // {
    //     $this->ensureIsNotRateLimited();

    //     if (! Auth::attempt($this->only('CPF_NO', 'password'), $this->filled('remember'))) {
    //         RateLimiter::hit($this->throttleKey());

    //         throw ValidationException::withMessages([
    //             'CPF_NO' => __('auth.failed'),
    //         ]);
    //     }

    //     // if (Auth::attempt($this->only(['CPF_NO', 'password']))) {

    //     //         // Returns \App\User model configured in `config/auth.php`.
    //     //         $user = Auth::user();
    //     //         dump($user);
    //     //         dd('Logged in!');
    //     // }

        
    //     RateLimiter::clear($this->throttleKey());
    // }

    /**
     * Ensure the login request is not rate limited.
     *
     * @return void
     *
     * @throws \Illuminate\Validation\ValidationException
     */
    public function ensureIsNotRateLimited()
    {
        if (! RateLimiter::tooManyAttempts($this->throttleKey(), 5)) {
            return;
        }

        event(new Lockout($this));

        $seconds = RateLimiter::availableIn($this->throttleKey());

        throw ValidationException::withMessages([
            'CPF_NO' => trans('auth.throttle', [
                'seconds' => $seconds,
                'minutes' => ceil($seconds / 60),
            ]),
        ]);
    }

    /**
     * Get the rate limiting throttle key for the request.
     *
     * @return string
     */
    public function throttleKey()
    {
        return Str::lower($this->input('email')).'|'.$this->ip();
    }
}


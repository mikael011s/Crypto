<?php

namespace App\Http\Controllers\Auth;

use App\Events\UserBalancePayedEvent;
use App\Events\UserRegisterEvent;
use App\Http\Controllers\Controller;
use App\Providers\RouteServiceProvider;
use App\Models\User;
use Illuminate\Foundation\Auth\RegistersUsers;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'name' => ['required', 'string', 'max:255'],
            'email' => ['required', 'string', 'email', 'max:255', 'unique:users'],
            'password' => ['required', 'string', 'min:8', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\Models\User
     */
    protected function create(array $data)
    {
//        event(new UserRegisterEvent($data));

        $referral = $this->getReferralId($data);

        $balance = 0;
        if ($referral !== null) {
            $balance = 0.05;
        }

        return User::create([
            'name' => $data['name'],
            'email' => $data['email'],
            'password' => Hash::make($data['password']),
            'referral_id' => $referral,
            'referral_code' => $this->generateReferralCode(),
            'balance' => $balance,
        ]);
    }

    /**
     * Генерация пригласительного кода
     * @return string
     */
    protected function generateReferralCode()
    {
        $permitted_chars = '0123456789abcdefghijklmnopqrstuvwxyz';
        $referralCode = substr(str_shuffle($permitted_chars), 0, 6);

        return strtoupper($referralCode);
    }

    /**
     * Проверка на приглашение реферала
     * @param $data
     * @return mixed|null
     */
    protected function getReferralId($data)
    {
        $referral = $_COOKIE['referral'] ?? null;

        if ($referral === null)
            $referral = $this->getReferralWithCode($data['referral_code']);

        return $referral;
    }

    /**
     * Получение реферала по пригласительному коду
     * @param $code
     * @return null
     */
    protected function getReferralWithCode($code)
    {
        $user = User::where('referral_code', $code)->first();
        return $user->id ?? null;
    }
}

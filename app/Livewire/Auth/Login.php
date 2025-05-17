<?php

namespace App\Livewire\Auth;

use Livewire\Component;
use Illuminate\Support\Facades\Auth;
use Livewire\Attributes\Title;

#[Title('Login')]
/**
 * Login Component
 *
 * This component handles the login functionality for users.
 * It validates the input fields and attempts to authenticate the user.
 * If successful, it redirects the user to their respective dashboard.
 */
class Login extends Component
{
    public $email, $password;

    protected $rules = [
        'email' => 'required|email',
        'password' => 'required|min:6',
    ];

    public function login()
    {
        $this->validate();

        if (Auth::attempt(['email' => $this->email, 'password' => $this->password])) {
            session()->regenerate();

            $user = Auth::user();
            return redirect()->to($user->role === 'petugas' ? '/dashboard/petugas' : '/dashboard/anggota');
        }

        $this->addError('email', 'Email atau password salah.');
    }
    public function render()
    {
        return view('livewire.auth.login');
    }
}

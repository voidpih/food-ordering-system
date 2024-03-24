<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\User;
use Illuminate\Support\Facades\Hash;


class SignIn extends Component
{
    public ?User $user = null;

    public $email = '';
    public $password = '';

    public function rules()
    {
        return [
            'email' => 'required|email',
            'password' => 'required',
        ];
    }

    public function signIn()
    {
        $this->validate();

        $user = User::where('email', $this->email)->first();

        if ($user && Hash::check($this->password, $user->password)) {
            auth()->login($user);
            return redirect()->to('/dashboard');
        }

        $this->addError('email', 'Email or password is incorrect');
    }

    public function render()
    {
        return view('livewire.sign-in');
    }
}

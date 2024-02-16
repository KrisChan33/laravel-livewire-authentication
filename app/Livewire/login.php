<?php

namespace App\Livewire;
use Livewire\Component;
class Login extends Component
{
    public $errorMessage = '';
    
    public function render()
    {
        return view('livewire.login');
    }
    public function login()
    {
        $this->validate([
            'username' => 'required|username|min:6',
            'password' => 'required|password|min:6',
        ]);
        if (!auth()->attempt(['username' => $this->username, 'password' => $this->password])) {
            return back()->with('error', 'Invalid username or password');
            $this->errorMessage = 'Invalid username or password';
        }
        return redirect()->to('/login');
    }
}
?>
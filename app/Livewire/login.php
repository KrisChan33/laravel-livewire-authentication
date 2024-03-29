<?php
namespace App\Livewire;
use Illuminate\Foundation\Auth\User;
use Livewire\Component;
use app\Http\Controllers\AdminController;
use function PHPSTORM_META\type;

class Login extends Component
{
    public $username = '';
    public $password = '';

    public $errorMessage = '';
    
    public function login()
    {
        $this->validate([
            'username' => 'required|min:6',
            'password' => 'required|min:6',
        ]);

        if (!auth()->attempt(['username' => $this->username, 'password' => $this->password])) {
            return back()->with('error', 'Invalid username or password');
            // $this->errorMessage = 'Invalid username or password';
            
        }
        if(auth()->User()->role =='member'){
        return redirect()->to('/dashboard');
        }
        else{
            return redirect()->route('livewire.admin.dashboard');
        }

        $this->dispatch(
            'alert',
            type:'success',
            title:'Login Successful',
            position:'center',
        );
        return redirect()->to('/dashboard');
    }
    public function render()
    {
    return view("livewire.login");
    }
}
?>
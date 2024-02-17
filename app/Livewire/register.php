<?php
namespace App\Livewire; 
use Livewire\Component;
use Illuminate\Validation\Rule;
use App\Models\Registration; // Import the Registrationmodel class

class Register extends Component
{
    #[Rule('required', 'max:50')]
    public $firstname='', $lastname='', $username='', $password='', $email='', $phone='', $address='', $city='', $state='';
        
    public $users=[];   
    
    public $message = '';
    public function register()
    {

        $validatedData = $this->validate(); // Validate the data

        Registration::create($validatedData);// Use the Registrationmodel class
        $this->reset(['firstname', 'lastname', 'username', 'password', 'email', 'phone', 'address', 'city', 'state']);
        return redirect()->to('/dashboard');
        
        session()->flash(message:'User Successfully Registered');
        
    }
    
    public function rules()
    {
        return [
            'firstname' => '',
            'lastname' => '',
            'username' => 'min:8|unique:user,username',
            'password' => 'min:8',
            // 'password_confirmation' => 'required',
            'email' => 'email|unique:user,email',
            'phone' => '',
            'address' =>'',
            'city' =>'',
            'state' =>'',
        ];
    }

    public function render()
    {
        $users = Registration::all(); // Use the User model to get all users
        return view('livewire.register', [
            'users' => $users // Pass the users to the view
        ]);
    }
}
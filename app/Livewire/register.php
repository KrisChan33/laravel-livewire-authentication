<?php
namespace App\Livewire; 
use Livewire\Component;
use App\Models\Registrationmodel; // Import the Registrationmodel class
class Register extends Component
{
    public $firstname, $lastname, $username, $password, $email, $phone, $address, $city, $state;
    public $users;
    
    public function register()
    {
        $validatedData = $this->validate(); // Validate the data

        Registrationmodel::create($validatedData
        );// Use the Registrationmodel class

        return redirect()->to('/dashboard');
    }


    public function rules()
    {
        return [
            'firstname' => 'required',
            'lastname' => 'required',
            'username' => 'required|min:6',
            'password' => 'required',
            'email' => 'required',
            'phone' => 'required',
            'address' => 'required',
            'city' => 'required',
            'state' => 'required',
        ];
    }

    public function render()
    {
        $users = Registrationmodel::all(); // Use the User model to get all users
        return view('livewire.register', [
            'user' => $users // Pass the users to the view
        ]);
    }
}
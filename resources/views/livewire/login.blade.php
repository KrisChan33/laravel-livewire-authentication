
<main>
{{-- @if ($errorMessage)
 
    <div class="alert alert-danger">
        {{ $errorMessage }}
        
    <div class="alert alert-danger">
        {{ $errorMessage }}
    </div>
@endif --}}

<div class="flex justify-center item-center h-screen bg-blue-200 ">

    <div class=" my-auto mx-auto p-8 bg-white shadow-lg rounded-xl">
        <h1 class=" text-4xl mb-3 text-center font-extrabold text-blue-600"></i>Login</h1>
        <hr class="border-1.5 w-80">

<div>
   <form class ="px-auto mx-auto flex justify-center"  wire:submit.prevent="login">
    <label class="justify-center">
      <span class="block mt-1 text-sm font-medium text-slate-700">Username</span>
      <input  wire:model="username" Placeholder="Enter Username..." type="text"  class="peer w-80 px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
      
        <span class="block mt-1 text-sm font-medium w-64 text-slate-700">Password</span>
      <input wire:model='password' Placeholder="Enter Password..." type="password" class="peer w-80 px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" />
    
    <div class="my-1 flex justify-between items-center">
          <div>
            <input wire:model='remember' type="checkbox" class="rounded border-2 border-gray-500" />
            <label class="text-xs font-medium text-slate-700">Remember me</label>
          </div > 
          
        <div>
            <a href="route{{'welcome'}}" class="text-xs font-medium hover:ui-monospace text-slate-700">Forgot Password?</a>
          </div> 
    </div>

    {{-- 
      <p class="mt-2 my-4 text-semibold invisible peer-invalid:visible text-center text-red-600 text-xs">
      Please provide a valid email address.
      </p> --}}

    <div class="flex justify-center space-x-14 my-2 items-center">
      {{-- <button class=" border-blue-500 rounded text-white font-semibold bg-blue-400 mx-5 px-3 py-1">BACK</button> --}}
      <button type="submit" class=" border-blue-500 rounded text-white text-lg font-semibold bg-blue-400 w-80 px-4 py-2">Login</button>
   </div>
   
  <div class="flex justify-center">
   <span class="text-xs font-mediumhover:ui-monospace text-slate-700">Not a member yet? </span> <a href="{{route('register')}} " class="text-xs font-mediumhover:ui-monospace text-blue-500  font-bold"> Create an Account</a>
      </div>

    </label>
</form>
</div>

    </div>
</div>

</main>

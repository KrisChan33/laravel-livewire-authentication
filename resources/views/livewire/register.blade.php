

<main>
<div class="flex justify-center item-center h-screen bg-blue-200 ">
<div class=" my-auto mx-auto p-8 bg-white shadow-lg rounded-xl">
        <h1 class=" text-4xl mb-3 text-center w-full font-extrabold text-blue-600"></i>Register</h1>
        <hr class="border-1.5 w-full">
        
        <form class ="px-auto mx-auto flex justify-center" wire:submit.prevent="register">
        <div class=" grid justify-center">
            <div class="grid md:grid-row-6 gap-2">

                <div class="col-span-2 pt-1">
                    <span class="block mt-1 text-sm font-medium text-slate-700">First Name</span>
                    <input  wire:model="firstname" Placeholder="Enter Firstname..." type="text"  class="peer   px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required  />
                </div>

                <div class="col-span-2 pt-1">
                    <span class="block mt-1 text-sm font-medium text-slate-700">Last Name</span>
                    <input  wire:model="lastname" Placeholder="Enter Lastname..." type="text"  class="peer w-full  px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required/>
                </div>

                <div class="col-span-2 ">
                    <span class="block mt-1 text-sm font-medium text-slate-700">Username</span>
                    <input  wire:model="username" Placeholder="Enter Username..." type="text"  class="peer w-full  px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required minlenght='8' max='16' />
                </div>

                <div class="col-span-2 ">
                    <span class="block mt-1 text-sm font-medium text-slate-700">Password</span>
                    <input wire:model='password' Placeholder="Enter Password..." type="password" class="peer w-full px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"required minlenght='8' maxlenght='16'/>
                </div>

                <div class="col-span-2">
                    <span class="block mt-1 text-sm font-medium text-slate-700">Email</span>
                    <input  wire:model="email" Placeholder="email@gmail.com" type="text" class="peer w-full px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required/>
                </div>

                <div class="col-span-2">
                    <span class="block mt-1 text-sm font-medium text-slate-700">Phone</span>
                    <input  wire:model="phone" Placeholder="####-###-####" type="text" class="peer w-full  px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"required />
                </div>

                <div class="col-span-4">
                    <span class="block mt-1 text-sm font-medium text-slate-700">Address</span>
                    <input  wire:model="address" Placeholder="Street Address..." type="text" class="peer w-full   px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"required />
                </div>

                <div class="col-span-2">
                    <span class="block mt-1 text-sm font-medium text-slate-700">City</span>
                    <input  wire:model="city" Placeholder="Enter City..." type="text" class="peer w-full px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"required />
                </div>

                <div class="col-span-2">
                    <span class="block mt-1 text-sm font-medium text-slate-700">State</span>
                    <input  wire:model="state" Placeholder="PH" type="text" class="peer w-full  px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"required />
                </div>

                {{-- Buttons --}}
                <div class="col-span-4 mt-2 space-x-14 mb-2 ">
                        <button class=" border-blue-500 w-full rounded text-white text-lg font-semibold bg-blue-400 w-80 px-4 py-2">Register Now</button>
                    <div wire:loading>
                        <svg>...</svg> 
                    </div>
                </div>

                <div class="col-span-4 flex justify-center ">
                <span class="text-xs font-mediumhover:ui-monospace text-slate-700">Not a member yet? </span> <a href="{{route('login')}} " class="text-xs font-mediumhover:ui-monospace text-blue-500  font-bold"> Create an Account</a>
                </div>
            </div>
        </div>
        </form>

    @foreach ($users as $user )
        <h3>{{$user->name}}</h3>
    @endforeach

</div>
</div>
</main>

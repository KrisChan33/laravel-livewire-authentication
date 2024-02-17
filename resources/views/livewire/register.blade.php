

<main>
<div class="relative"> <!-- Add a relative positioning context -->
        {{-- @error('email')
            <div class="absolute right-0 bg-red-100 border border-red-400 text-red-700 px-4 py-3 rounded" role="alert">
                <strong class="font-bold">Invalid Email!</strong>
                <span class="block sm:inline">{{ $message }}</span>
                <span class="absolute top-0 bottom-0 right-0 px-4 py-3">
                    <svg class="fill-current h-6 w-6 text-red-500" role="button" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><title>Close</title><path d="M14.348 14.849a1.2 1.2 0 0 1-1.697 0L10 11.819l-2.651 3.029a1.2 1.2 0 1 1-1.697-1.697l2.758-3.15-2.759-3.152a1.2 1.2 0 1 1 1.697-1.697L10 8.183l2.651-3.031a1.2 1.2 0 1 1 1.697 1.697l-2.758 3.152 2.758 3.15a1.2 1.2 0 0 1 0 1.698z"/></svg>
                </span>
            </div>
        @enderror --}}
    </div>
<div class="flex justify-center item-center h-screen bg-blue-200">
<div class=" my-auto mx-auto p-8 bg-white shadow-lg rounded-xl">
        <h1 class=" text-4xl mb-3 text-center w-full font-extrabold text-blue-600"></i>Register</h1>
        <hr class="border-1.5 w-full">
        
        <form class ="px-auto mx-auto block justify-center" wire:submit.prevent="register">
        <div class=" grid justify-center">
            <div class="grid md:grid-row-6 gap-4">

                <div class="col-span-2 pt-1">
                    <span class="block mt-1 text-sm font-medium text-slate-700">First Name</span>
                    <input  wire:model="firstname" Placeholder="Enter Firstname..." type="text"  class="peer px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required  />
                    
                        @error('firstname')
                            <span class="text-red-500 text-xs">{{$message}}</span>
                        @enderror
                </div>

                <div class="col-span-2 pt-1">
                    <span class="block mt-1 text-sm font-medium text-slate-700">Last Name</span>
                    <input  wire:model="lastname" Placeholder="Enter Lastname..." type="text"  class="peer w-full  px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required/>
                
                    @error('lastname')
                            <span class="text-red-500 block text-xs">{{ $message }}</span>
                        
                    @enderror
                </div>

                <div class="col-span-2 ">
                    <span class="block mt-1 text-sm font-medium text-slate-700">Username</span>
                    <input  wire:model="username" Placeholder="Enter Username..." type="text"  class="peer w-full  px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" required minlenght='8' max='16' />

                    @error('username')
                            <span class="text-red-500 block text-xs">{{ $message }}</span>
                        @enderror
                </div>

                <div class="col-span-2 ">
                    <span class="block mt-1 text-sm font-medium text-slate-700">Password</span>
                    <input wire:model='password' Placeholder="Enter Password..." type="password" class="peer w-full px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"required minlenght='8' maxlenght='16'/>
                
                    @error('password')
                            <span class="text-red-500 block text-xs">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-span-2">
                    <span class="block mt-1 text-sm font-medium text-slate-700">Email</span>
                    <input wire:model="email" Placeholder="email@gmail.com" type="text" class="peer w-full px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" email required/>
                @error('email')
                            <span class="text-red-500 block text-xs">{{ $message }}</span>
                        @enderror
                </div>

                <div class="col-span-2">
                    <span class="block mt-1 text-sm font-medium text-slate-700">Phone</span>
                    <input  wire:model="phone" Placeholder="####-###-####" type="text" class="peer w-full  px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"required />
                
                @error('phone')
                            <span class="text-red-500 block text-xs">{{ $message }}</span>
                @enderror
                </div>

                <div class="col-span-4">
                    <span class="block mt-1 text-sm font-medium text-slate-700">Address</span>
                    <input  wire:model="address" Placeholder="Street Address..." type="text" class="peer w-full   px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"required />
                
                @error('address')
                            <span class="text-red-500 block text-xs">{{ $message }}</span>
                @enderror
                </div>

                <div class="col-span-2">
                    <span class="block mt-1 text-sm font-medium text-slate-700">City</span>
                    <input  wire:model="city" Placeholder="Enter City..." type="text" class="peer w-full px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"required />
                
                @error('city')
                    <span class="text-red-500 block text-xs">{{ $message }}</span>
                @enderror
                </div>

                <div class="col-span-2">
                    <span class="block mt-1 text-sm font-medium text-slate-700">State</span>
                    <input  wire:model="state" Placeholder="PH" type="text" class="peer w-full  px-3 py-2 placeholder-gray-500 border rounded-md focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm"required />
                
                @error('state')
                    <span class="text-red-500 block text-xs">{{ $message }}</span>
                @enderror
                </div>

                {{-- Buttons --}}
                <div class="col-span-4 mt-2 space-x-14 mb-2 ">
                        <button class=" border-blue-500 w-full rounded text-white text-lg font-semibold bg-blue-400 w-80 px-4 py-2">Register Now</button>
                    <div wire:loading>
                        <svg>...</svg> 
                    </div>
                </div>

                <div class="col-span-4 flex justify-center ">
                <span class="text-xs font-mediumhover:ui-monospace text-slate-700">You Already have an Account? </span> <a href="{{route('login')}} " class="text-xs font-mediumhover:ui-monospace text-blue-500  font-bold"> Login</a>
                </div>
            </div>
        </div>
        </form>

{{-- <div class="flex justify-center">
    <div class="flex justify-center">
        @foreach ($users as $user)
            <h3>{{ $user->firstname }}</h3>
        @endforeach
    </div>
</div> --}}

</div>
</div>
</main>
@extends('layout')

@section('content')



<!-- create new devoloper form -->



<div




                    class="bg-gray-35 border border-gray-200 p-10 rounded max-w-lg mx-auto mt-24"
                >
                    <header class="text-center">
                        <h2 class="text-2xl font-bold uppercase mb-1">
                            Create a new devoloper
                        </h2>
                        
                    </header>

                    <form method="POST" action="{{route('Developers.store')}}"  > 
                        
                        @csrf
                        

                        <div class="mb-6">
                            <label
                                for="name"
                                class="inline-block text-lg mb-2"
                                > Devoloper Name</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="name"
                            />

                            @error('name')
                           <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>


                        <div class="mb-6">
        <label for="email" class="inline-block text-lg mb-2">
          Contact Email
        </label>
        <input type="text" class="border border-gray-200 rounded p-2 w-full" 
        name="email" value="{{old('email')}}" />

        @error('email')
                           <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        <div class="mb-6">
                            <label for="Position" class="inline-block text-lg mb-2"
                                >Position</label
                            >
                            <input
                                type="text"
                                class="border border-gray-200 rounded p-2 w-full"
                                name="Position"
                                placeholder="Example: Senior  Developer"
                            />
                            @error('Position')
                           <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

      
                        <div class="mb-6">
                            <label
                                for="about"
                                class="inline-block text-lg mb-2"
                            >
                                About
                            </label>
                            <textarea
                                class="border border-gray-200 rounded p-2 w-full"
                                name="about"
                                rows="10"
                                placeholder="Include tasks, requirements, salary, etc"
                            ></textarea>
                            @error('about')
                           <p class="text-red-500 text-xs mt-1">{{$message}}</p>
                            @enderror
                        </div>

                        <div class="mb-6">
                            <button
                              class="bg-laravel text-white rounded py-2 px-4 hover:bg-black"
                            >
                                Create Developer
                            </button>

                            <a href="/" class="text-black ml-4"> Back </a>
                        </div>
                       
                    </form>
                    <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright &copy; 2024, All Rights reserved</p>
            
            
        </footer>
                </div>

                @endsection
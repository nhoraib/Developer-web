@extends('layout')

@section('content')



<!-- when u click on any devoloper it will show this-->


<a href="/" class="inline-block text-black ml-4 mb-4"


                ><i class="fa-solid fa-arrow-left"></i> Back
            </a>
            
            

            <div class="mx-4">
                <div class="bg-gray-50 border border-gray-200 p-10 rounded">
                    <div
                        class="flex flex-col items-center justify-center text-center"
                    >
                        <img
                            class="w-48 mr-6 mb-6"
                            src="images/mainphoto.png"
                            alt=""
                        />
                        
                        <h3 class="text-2xl mb-2">Name</h3>
                        
                        <div class="text-lg my-4">
                            <i class="fa-solid fa-location-dot"></i> Position
                        </div>
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-3xl font-bold mb-4">
                                About  Devoloper
                            </h3>
                            
                            <div class="text-lg space-y-6">
                                <p>
                                    About him self what will do and how many programmer language had 
                                </p>
                                

                                <a
                                    href="mailto:test@test.com"
                                    class="block bg-laravel text-white mt-6 py-2 rounded-xl hover:opacity-80"
                                    ><i class="fa-solid fa-envelope"></i>
                                    Contact Employer</a
                                >

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
@endsection
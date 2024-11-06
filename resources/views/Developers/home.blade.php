 


@extends('layout')

@section('content')


<!-- Layout make all the pages show this theme -->




 <!-- import from another folder view -->
@include('partials._header') 
@include('partials._search')

<div
                class="lg:grid lg:grid-cols-2 gap-4 space-y-4 md:space-y-0 mx-4"
            > 

<!-- show each box of devoloper card and we have it on array 4 -->
 

<?php foreach($DevelopM as $DevelopM): ?> <!-- foreach is a loop -->
    
   <div class="bg-gray-50 border border-gray-200 rounded p-6">
                    <div class="flex">
                        <img
                            class="hidden w-48 mr-6 md:block"
                            src="images/iconOfperson.png"
                            alt=""
                        />
                        
                        <div>
                            <h3 class="text-2xl">
                                <a href="/Developers/aboutDeveloper">{{$DevelopM->name}} </a>
                            </h3>
                            <div class="text-xl font-bold mb-4">{{$DevelopM->Position}}</div>
                            
                            <div class="text-lg mt-4">
                                <i class="fa-solid fa-location-dot"></i> {{$DevelopM->about}}
                            </div>
                        </div>
                    </div>
                </div>
                <footer
            class="fixed bottom-0 left-0 w-full flex items-center justify-start font-bold bg-laravel text-white h-24 mt-24 opacity-90 md:justify-center"
        >
            <p class="ml-2">Copyright &copy; 2024, All Rights reserved</p>
            <a
                href="/Developers/create"
                class="absolute top-1/3 right-10 bg-black text-white py-2 px-5"
                >Post new devoloper</a 


            >
            
        </footer>

        
 <?php 
 endforeach;?>
</div>
 @endsection

@extends('layout')

@section('content')


<!-- when u click on learn more it will show this page format -->

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
                            src="images/who-we-are-icon.png"
                            alt=""
                        />

                        <h3 class="text-2xl mb-2">DEPARTMENT</h3>
                        
                        
                        <div class="border border-gray-200 w-full mb-6"></div>
                        <div>
                            <h3 class="text-4xl font-bold mb-4">
                                About us
                            </h3>
                            
                            <div class="text-lg space-y-6">
                                <h4 class="text-3xl font-bold mb-4">
                                    What Do Developer Do? </h4>
                                <p>
                                Software developers use their programming skills to create new software and improve existing software applications. 
                                They design and write the code used to build everything from operating systems to mobile apps to video games. Often, 
                                project managers provide software developers with an organisation's business goals, and they translate those needs
                                 into software requirements. 
                                </p>
                                <h5 class="text-3xl font-bold mb-4">
                                What is software development? </h5>
                                <p>
                                    Analysing the needs of software users

Designing, testing, and building software programs to meet user needs

Creating models and diagrams that outline the code needed to develop software and applications

Performing maintenance and testing to keep software functioning 

Documenting the process to provide the information required for upgrades and maintenance
                                </p>

                                

                               
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
            
            
@endsection
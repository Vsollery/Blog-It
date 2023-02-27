@extends('layouts.main')

@section('container')
       
<div class="card mb-5 ">
    

    @auth
        <div class="card-body text-center bg-info rounded">
            <main role="main" class="inner cover">
                <h1 class="card-title text-white">Welcome {{  auth()->user()->name }}</h1>
                <p class="fst-italic text-light">Online blog where an individual can presents a record of activities, thoughts, or beliefs</p>
            </main>

            <h5 class="text-white m-3">Start Exploring!</h5>
            <div>

                <a href="/posts" class="btn btn-lg btn-secondary btn-inline mt-3">Explore</a>
            </div>     
        </div>
    @else
        <div class="card-body text-center bg-info rounded">
            <main role="main" class="inner cover">
                <h1 class="card-title text-white">Welcome to E-Blog</h1>
                <p class="fst-italic text-light">Online blog where an individual can presents a record of activities, thoughts, or beliefs</p>
            </main>

            <h5 class="text-white m-3">Start Posting!</h5>
            <div>

                <a href="/login" class="btn btn-lg btn-secondary btn-inline mt-3">Login</a>
                <a href="/register" class="btn btn-lg btn-light btn-inline mt-3">Register</a>
            </div>     
        </div>
    @endauth


    
    
</div>
        
        
   

        
@endsection


    
  
     
   



    
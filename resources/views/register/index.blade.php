@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-lg-5">
            <main class="form-registration">
                <h1 class="h3 mb-3 font-weight-normal text-center mb-3">Register</h1>
                <form>
                    <label for="inputName" class="sr-only">Name</label>
                    <input type="text" id="inputName" name="name" class="form-control rounded-top" placeholder="Name" required>

                    <label for="inputUsername" class="sr-only">Username</label>
                    <input type="text" id="inputUsername" name ="username" class="form-control" placeholder="Username" required>
                    
                    <label for="inputEmail" class="sr-only">Email</label>
                    <input type="email" id="inputEmail" name="email" class="form-control" placeholder="Email" required>
                    
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" name = "password" class="form-control rounded-bottom" placeholder="Password" required>
                    
                    <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Already have an account? <a href="/login">Login</a></small>
            </main>
        </div>
    </div>

    
@endsection
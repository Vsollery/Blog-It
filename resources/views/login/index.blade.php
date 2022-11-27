@extends('layouts.main')

@section('container')
    <div class="row justify-content-center">
        <div class="col-md-5">
            <main class="form-signin">
                <h1 class="h3 mb-3 font-weight-normal text-center mb-3">Login</h1>
                <form>
                    <label for="inputEmail" class="sr-only">Email address</label>
                    <input type="email" id="inputEmail" class="form-control" placeholder="Email address" required autofocus>
                    <label for="inputPassword" class="sr-only">Password</label>
                    <input type="password" id="inputPassword" class="form-control" placeholder="Password" required>
                    <button class="btn btn-lg btn-primary btn-block mt-3" type="submit">Login</button>
                </form>
                <small class="d-block text-center mt-3">Don't have an account? <a href="/register">Register</a></small>
            </main>
        </div>
    </div>

    
@endsection
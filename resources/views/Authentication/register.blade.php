@extends('Template.navbar')
    
@section('title', 'Sign Up')

@section('content')
    <link rel="stylesheet" href="/css/loginStyle.css">
    <div class="center">
        <h1>Registration</h1>
        <form method="post">
            <div class="txt">
                <input type="text" required>
                <span></span>
                <label>Name</label>
            </div>
            <div class="txt">
                <input type="text" required>
                <span></span>
                <label>Email</label>
            </div>
            <div class="txt">
                <input type="password" required>
                <span></span>
                <label>Password</label>
            </div>
            <div class="txt">
                <input type="password" required>
                <span></span>
                <label>Confirm Password</label>
            </div>
            <div class="txt">
                <input type="text" required>
                <span></span>
                <label>Phone</label>
            </div>
            <div class="Gender">
                <label for="Gender" class="form-check-label mb-1" style="display: block">Gender</label>
                <input type="radio" class="form-check-input" id="gender" name="gender" value="Male"> Male
                <input type="radio" class="form-check-input" id="gender" name="gender" value="Female"> Female
            </div>
            <div class="dateofbirth">
                <label for="dob" class="form-label">Date of birth</label>
                <input type="date" class="form-control" id="dob" name="dob">
            </div>
            <div class="register">
                <p>Already have an account <a href="/login">Login</a></p>
            </div>
            <input type="submit" value="Submit">
        </form>
    </div>
@endsection

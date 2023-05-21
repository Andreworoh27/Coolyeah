@extends('Template.navbar')

@section('title', 'Profile Page')

@section('content')
<link rel="stylesheet" href="/css/profileStyle.css">
    <div><h1>Hello, {{auth()->user()->name}}</h1></div>
    <div class="container">
        <div class="row">
                <div class="col-12">
                    <!-- Page title -->
                    <div class="my-5">
                        <h3>My Profile</h3>
                        <hr>
                    </div>
                    <!-- Form START -->
                    <form class="file-upload">
                        <div class="row mb-5 gx-5">
                            <!-- Contact detail -->
                            <div class="col-xxl-8 mb-5 mb-xxl-0">
                                <div class="bg-secondary-soft px-4 py-5 rounded">
                                    <div class="row g-3">
                                        <h4 class="mb-4 mt-0">Contact detail</h4>
                                        <!-- First Name -->
                                        <div class="col-md-6">
                                            <label class="form-label">First Name *</label>
                                            <input type="text" class="form-control" placeholder="" aria-label="First name" value="Scaralet">
                                        </div>
                                        <!-- Last name -->
                                        <div class="col-md-6">
                                            <label class="form-label">Last Name *</label>
                                            <input type="text" class="form-control" placeholder="" aria-label="Last name" value="Doe">
                                        </div>
                                        <!-- Phone number -->
                                        <div class="col-md-6">
                                            <label class="form-label">Phone number *</label>
                                            <input type="text" class="form-control" placeholder="" aria-label="Phone number" value="(333) 000 555">
                                        </div>
                                        <!-- Mobile number -->
                                        <div class="col-md-6">
                                            <label class="form-label">Mobile number *</label>
                                            <input type="text" class="form-control" placeholder="" aria-label="Phone number" value="+91 9852 8855 252">
                                        </div>
                                        <!-- Email -->
                                        <div class="col-md-6">
                                            <label for="inputEmail4" class="form-label">Email *</label>
                                            <input type="email" class="form-control" id="inputEmail4" value="example@homerealty.com">
                                        </div>
                                    </div> <!-- Row END -->
                                </div>
                            </div>
                            <!-- Upload profile -->
                            <div class="col-xxl-4">
                                <div class="bg-secondary-soft px-4 py-5 rounded">
                                    <div class="row g-3">
                                        <h4 class="mb-4 mt-0">Upload your profile photo</h4>
                                        <div class="text-center">
                                            <!-- Image upload -->
                                            <div class="square position-relative display-2 mb-3">
                                                <i class="fas fa-fw fa-user position-absolute top-50 start-50 translate-middle text-secondary"></i>
                                            </div>
                                            <!-- Button -->
                                            <input type="file" id="customFile" name="file" hidden="">
                                            <label class="btn btn-success-soft btn-block" for="customFile">Upload</label>
                                            <button type="button" class="btn btn-danger-soft">Remove</button>
                                            <!-- Content -->
                                            <p class="text-muted mt-3 mb-0"><span class="me-1">Note:</span>Minimum size 300px x 300px</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Row END -->
                        <div class="gap-3 d-md-flex justify-content-md-end text-center">
                            <button type="button" class="btn btn-danger btn-lg">Delete Account</button>
                            <button type="button" class="btn btn-primary btn-lg">Update profile</button>
                        </div>
        
                        <!-- Social media detail -->
        
                            <!-- change password -->
                            <div class="col-xxl-6">
                                <div class="bg-secondary-soft px-4 py-5 rounded">
                                    <div class="row g-3">
                                        <h4 class="my-4">Change Password</h4>
                                        <!-- Old password -->
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword1" class="form-label">Old password *</label>
                                            <input type="password" class="form-control" id="exampleInputPassword1">
                                        </div>
                                        <!-- New password -->
                                        <div class="col-md-6">
                                            <label for="exampleInputPassword2" class="form-label">New password *</label>
                                            <input type="password" class="form-control" id="exampleInputPassword2">
                                        </div>
                                        <!-- Confirm password -->
                                        <div class="col-md-12">
                                            <label for="exampleInputPassword3" class="form-label">Confirm Password *</label>
                                            <input type="password" class="form-control" id="exampleInputPassword3">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div> <!-- Row END -->
                        <!-- button -->
                        <div class="gap-3 d-md-flex justify-content-md-end text-center">
                            <button type="button" class="btn btn-primary btn-lg">Update password</button>
                        </div>
                    </form> <!-- Form END -->
                </div>
            </div>
            </div>
@endsection

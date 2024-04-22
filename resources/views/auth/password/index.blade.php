
<x-password-layout>
    @section('title', 'Change Password')
        <!-- page title start -->
        @section('content')
        <section class="my-3 pt-3">
            <div class="text-center">
                <h1 class="fs-2 title">Change Password</h1>
            </div>
            <div class="underline mx-auto hr_line"></div>
        </section>
        <!-- page title end -->
        <!-- form start -->
        <section class="change_password_form_container mx-auto">
            <div class="row mx-auto">
                <form class="main_form p-4" method="POST" action="{{ route('user-password.update') }}">
                    @csrf
                    @method('PUT')

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-4">
                                <label class="form-label" for="current_password">Current Password<span class="star">*</span></label>
                                <div class="input_container d-flex align-items-center">
                                   
                                   
                                    <input type="password" style="width:100% !important;" class="form-control" id="current_password" placeholder="Enter Old Password" name="current_password" >
                                    <i class="fas fa-eye-slash toggle-password" onclick="togglePasswordVisibility('current_password')" style="position: absolute; right:8rem;"></i>
                                    
                                </div>
                                <p class="text-danger">{{ $errors->first('current_password') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-4">
                                <label class="form-label" for="password">New Password<span class="star">*</span></label>
                                <div class="input_container d-flex align-items-center">
                                    <input type="password" style="width:100% !important;" class="form-control"
                                        id="password" placeholder="Enter New Password" name="password">
                                    <i class="fas fa-eye-slash toggle-password"
                                        onclick="togglePasswordVisibility('password')"style="position: absolute; right:8rem;"></i>
                                    
                                </div>
                                <p class="text-danger">{{ $errors->first('password') }}</p>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-md-12">
                            <div class="mb-4">
                                <label class="form-label" for="password_confirmation">Confirm password<span
                                        class="star">*</span></label>
                                
                                    <div class="input_container d-flex align-items-center">
                                        <input type="password" style="width:100% !important;"
                                            class="form-control" id="password_confirmation"
                                            placeholder="Re-enter New Password" name="password_confirmation">
                                        <i class="fas fa-eye-slash toggle-password"
                                            onclick="togglePasswordVisibility('password_confirmation')" style="position: absolute; right:8rem;"></i>
                                    </div>
                                    <p class="text-danger">{{ $errors->first('password_confirmation') }}</p>
                            </div>
                        </div>
                    </div>
                    <center><button type="submit" class="btn btn-success mt-2">Change</button></center>
                </form>
            </div>
        </section>
        @endsection
</x-password-layout>
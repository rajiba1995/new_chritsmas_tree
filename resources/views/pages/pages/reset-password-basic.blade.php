
@extends('layouts.custom-master1')

@section('styles')



@endsection

@section('content')
	
        <div class="container">
            <div class="grid grid-cols-12 gap-x-6 authentication authentication-basic items-center h-full text-defaultsize text-defaulttextcolor">
              <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
              <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-6 sm:col-span-8 col-span-12">
                    <div class="my-[2.5rem] flex justify-center">
                        <a href="{{url('index')}}">
                            <img src="{{asset('build/assets/images/brand-logos/desktop-logo.png')}}" alt="logo" class="desktop-logo">
                            <img src="{{asset('build/assets/images/brand-logos/desktop-dark.png')}}" alt="logo" class="desktop-dark">
                        </a>
                    </div>
                    <div class="box">
                        <div class="box-body !p-[3rem]">
                            <p class="h5 font-semibold mb-2 text-center">Reset Password</p>
                            <p class="mb-4 text-[#8c9097] opacity-[0.7] font-normal text-center">Hello Jhon !</p>
                            <div class="grid grid-cols-12 gap-y-4">
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="reset-password" class="form-label text-default">Current Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg !rounded-tl-sm !rounded-bl-sm rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm" id="reset-password" placeholder="current password">
                                        <button class="ti-btn ti-btn-light !mb-0 !rounded-tl-none !rounded-bl-none !rounded-tr-sm !rounded-br-sm rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm !border !border-s-0 !border-defaultborder/10" type="button" onclick="createpassword('reset-password',this)" id="button-addon2"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <label for="reset-newpassword" class="form-label text-default">New Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg !rounded-tl-sm !rounded-bl-sm rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm" id="reset-newpassword" placeholder="new password">
                                        <button class="ti-btn ti-btn-light !mb-0 !rounded-tl-none !rounded-bl-none !rounded-tr-sm !rounded-br-sm rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm !border !border-s-0 !border-defaultborder/10" type="button" onclick="createpassword('reset-newpassword',this)" id="button-addon21"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12 mb-2">
                                    <label for="reset-confirmpassword" class="form-label text-default ">Confirm Password</label>
                                    <div class="input-group">
                                        <input type="password" class="form-control form-control-lg !rounded-tl-sm !rounded-bl-sm rtl:!rounded-tl-none rtl:!rounded-bl-none  rtl:!rounded-tr-sm rtl:!rounded-br-sm" id="reset-confirmpassword" placeholder="confirm password">
                                        <button class="ti-btn ti-btn-light !mb-0 !rounded-tl-none !rounded-bl-none !rounded-tr-sm !rounded-br-sm rtl:!rounded-tr-none rtl:!rounded-br-none  rtl:!rounded-tl-sm rtl:!rounded-bl-sm !border !border-s-0 !border-defaultborder/10" type="button" onclick="createpassword('reset-confirmpassword',this)" id="button-addon22"><i class="ri-eye-off-line align-middle"></i></button>
                                    </div>
                                    <div class="mt-4">
                                        <div class="form-check flex items-center gap-2">
                                            <input class="form-check-input" type="checkbox" value="" id="defaultCheck1">
                                            <label class="form-check-label text-[#8c9097] font-normal" for="defaultCheck1">
                                                Remember password ?
                                            </label>
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12 grid mt-2">
                                    <a href="{{url('sign-in-basic')}}" class="ti-btn ti-btn-lg bg-primary text-white !font-medium dark:border-defaultborder/10">Create</a>
                                </div>
                            </div>
                            <div class="text-center">
                                <p class="text-[0.75rem] text-[#8c9097] mt-4">Already have an account? <a href="{{url('sign-in-basic')}}" class="text-primary">Sign In</a></p>
                            </div>
                            <div class="text-center my-4 authentication-barrier">
                                <span>OR</span>
                            </div>
                            <div class="btn-list text-center">
                                <button class="ti-btn ti-btn-icon ti-btn-light me-[0.365rem]">
                                    <i class="ri-facebook-line font-bold text-dark opacity-[0.7]"></i>
                                </button>
                                <button class="ti-btn ti-btn-icon ti-btn-light me-[0.365rem]">
                                    <i class="ri-google-line font-bold text-dark opacity-[0.7]"></i>
                                </button>
                                <button class="ti-btn ti-btn-icon ti-btn-light">
                                    <i class="ri-twitter-x-line font-bold text-dark opacity-[0.7]"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="xxl:col-span-4 xl:col-span-4 lg:col-span-4 md:col-span-3 sm:col-span-2"></div>
            </div>
        </div>

@endsection

@section('scripts')
	
        <!-- Show Password JS -->
        <script src="{{asset('build/assets/show-password.js')}}"></script>

@endsection

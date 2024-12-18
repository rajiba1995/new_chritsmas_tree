
@extends('layouts.custom-master2')

@section('styles')



@endsection

@section('content')
	
        <div class="grid grid-cols-12 authentication p-[3rem] under-maintenance mx-0 text-defaulttextcolor text-defaultsize">
            <div class="xxl:col-span-5 xl:col-span-4 lg:col-span-4 lg:block hidden px-0">
                <div class="primary-background w-full h-full flex items-center justify-center under-maintenance-image-container">
                    <img src="{{asset('build/assets/images/authentication/8.png')}}" alt="" class="imig-fluid">
                </div>
            </div>
            <div class="xxl:col-span-7 xl:col-span-8 lg:col-span-8 col-span-12">
                <div class="grid grid-cols-12 items-center h-full text-center">
                    <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-2"></div>
                    <div class="xxl:col-span-6 xl:col-span-6 lg:col-span-6 md:col-span-6 sm:col-span-8 col-span-12">
                        <div class="mb-2 flex justify-center">
                            <a href="{{url('index')}}">
                                <img src="{{asset('build/assets/images/brand-logos/toggle-logo.png')}}" alt="" class="authentication-brand">
                            </a>
                        </div>
                        <p class="font-semibold text-[0.75rem] mb-1 opacity-[0.4]">STAY TUNED</p>
                        <h1 class="font-bold mb-4 text-[2.5rem] dark:text-defaulttextcolor/70">Under Maintenance</h1>
                        <p class="mb-4">Our website is under maintenance, wait for some time.</p>

                        <div class="grid grid-cols-12 mt-6 xxl:gap-y-0 gap-4 mb-[3rem]" id="timer">
                        </div>
                        
                        <div class="mt-[3rem]">
                            <div class="btn-list">
                                <button class="ti-btn ti-btn-icon bg-primary font-bold me-[0.365rem] text-white">
                                    <i class="ri-facebook-line font-bold"></i>
                                </button>
                                <button class="ti-btn ti-btn-icon bg-secondary font-bold me-[0.365rem] text-white">
                                    <i class="ri-twitter-x-line"></i>
                                </button>
                                <button class="ti-btn ti-btn-icon bg-warning font-bold me-[0.365rem] text-white">
                                    <i class="ri-instagram-line font-bold"></i>
                                </button>
                                <button class="ti-btn ti-btn-icon bg-success font-bold me-[0.365rem] text-white">
                                    <i class="ri-github-line font-bold"></i>
                                </button>
                                <button class="ti-btn ti-btn-icon bg-danger font-bold text-white">
                                    <i class="ri-youtube-line font-bold"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                    <div class="xxl:col-span-3 xl:col-span-3 lg:col-span-3 md:col-span-3 sm:col-span-2"></div>
                </div>
            </div>
        </div>

@endsection

@section('scripts')

	    <!-- Internal Under Maintenance JS -->
        <script src="{{asset('build/assets/under-maintenance.js')}}"></script>

@endsection

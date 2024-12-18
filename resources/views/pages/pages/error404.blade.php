
@extends('layouts.custom-master1')

@section('styles')



@endsection

@section('content')
	
        <div class="page error-bg dark:!bg-bodybg" id="particles-js">
            <!-- Start::error-page -->
            <div class="error-page">
            <div class="container text-defaulttextcolo dark:text-defaulttextcolor/70 text-defaultsize">
                <div class="text-center p-5 my-auto">
                <div class="flex items-center justify-center h-full !text-defaulttextcolor">
                    <div class="xl:col-span-3"></div>
                    <div class="xl:col-span-6 col-span-12">
                    <img src="{{asset('build/assets/images/authentication/1.png')}}" class="error-page-img" alt="error">
                    <p class="text-[1.125rem] font-semibold mb-4">Oopps. The page you were looking for doesn't exist.</p>
                    <div class="flex justify-center items-center mb-[3rem]">
                        <div class="xl:col-span-6 w-[50%]">
                        <p class="mb-0 opacity-[0.7]">You may have mistyped the address or the page may have moved..</p>
                        </div>
                    </div>
                    <a href="{{url('index')}}" class="ti-btn bg-primary text-white font-semibold"><i
                        class="ri-arrow-left-line align-middle inline-block"></i>BACK TO HOME</a>
                    </div>
                    <div class="xl:col-span-3"></div>
                </div>
                </div>
            </div>
            </div>
        </div>

@endsection

@section('scripts')
	
        <!-- Particles JS -->
        <script src="{{asset('build/assets/libs/particles.js/particles.js')}}"></script>

        <!-- Error JS -->
        @vite('resources/assets/js/error.js')

@endsection

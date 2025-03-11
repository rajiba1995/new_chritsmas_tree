@extends('layouts.custom-master1')

@section('styles')
@endsection

@section('content')

    <div class="page error-bg dark:!bg-bodybg" id="particles-js">
        <!-- Start::error-page -->
        <div class="error-page">
            <div class="container text-defaulttextcolor dark:text-defaulttextcolor/70 text-defaultsize">
                <div class="text-center p-5 my-auto">
                    <div class="flex items-center justify-center h-full !text-defaulttextcolor">
                        <div class="xl:col-span-3"></div>
                        <div class="xl:col-span-6 col-span-12">
                        
                            {{-- <div class="flex justify-center items-center mb-[3rem]">
                                <img src="{{asset('build/assets/images/authentication/404.png')}}" 
                                    class="error-page-img" alt="403 Forbidden">
                            </div> --}}
                            <h1 class="text-4xl font-bold text-red-500 mb-4">403 - Access Denied</h1>
                            <p class="text-lg text-gray-600 dark:text-gray-400 mb-6">
                                Sorry, you don’t have permission to access this page.
                            </p>
                            <a href="{{route('admin.dashboard')}}" 
                               class="ti-btn bg-primary text-white font-semibold">
                                <i class="ri-arrow-left-line align-middle inline-block"></i> BACK TO HOME
                            </a>
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

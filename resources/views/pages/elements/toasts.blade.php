
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Toasts</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Toasts 
                            </a> </li>
                        </ol>
                        </nav>
                    </div>

                    <div class="flex xl:my-auto right-content align-items-center">
                        <div class="pe-1 xl:mb-0">
                        <button type="button" class="ti-btn ti-btn-info-full text-white ti-btn-icon me-2 btn-b !mb-0">
                            <i class="mdi mdi-filter-variant"></i>
                        </button>
                        </div>
                        <div class="pe-1 xl:mb-0">
                        <button type="button" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0">
                            <i class="mdi mdi-star"></i>
                        </button>
                        </div>
                        <div class="pe-1 xl:mb-0">
                        <button type="button" class="ti-btn ti-btn-warning-full text-white  ti-btn-icon me-2 !mb-0">
                            <i class="mdi mdi-refresh"></i>
                        </button>
                        </div>
                        <div class="xl:mb-0">
                        <div class="hs-dropdown ti-dropdown">
                            <button class="ti-btn ti-btn-primary-full text-white dropdown-toggle !mb-0" type="button" id="dropdownMenuDate"
                            data-bs-toggle="dropdown" aria-expanded="false">
                            14 Aug 2019 <i class="bi bi-chevron-down text-[.6rem] font-semibold"></i>
                            </button>
                            <ul class="hs-dropdown-menu ti-dropdown-menu hidden !z-[100]" aria-labelledby="dropdownMenuDate">
                            <li><a class="ti-dropdown-item" href="javascript:void(0);">2015</a></li>
                            <li><a class="ti-dropdown-item" href="javascript:void(0);">2016</a></li>
                            <li><a class="ti-dropdown-item" href="javascript:void(0);">2017</a></li>
                            <li><a class="ti-dropdown-item" href="javascript:void(0);">2018</a></li>
                            </ul>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- Page Header Close -->

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-9 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Basic Toasts
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="lg:flex lg:space-x-3 rtl:space-x-reverse space-y-4 lg:space-y-0">
                                        <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                            <div class="flex p-4">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-4 w-4 text-primary mt-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" />
                                                    </svg>
                                                </div>
                                                <div class="ms-3">
                                                    <p class="text-sm text-gray-700 dark:text-textmuted">
                                                        This is a normal message.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                            <div class="flex p-4">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-4 w-4 text-green mt-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" />
                                                    </svg>
                                                </div>
                                                <div class="ms-3">
                                                    <p class="text-sm text-gray-700 dark:text-textmuted">
                                                        This is a success message.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                            <div class="flex p-4">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-4 w-4 text-red mt-0.5" xmlns="http://www.w3.org/2000/svg"
                                                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" />
                                                    </svg>
                                                </div>
                                                <div class="ms-3">
                                                    <p class="text-sm text-gray-700 dark:text-textmuted">
                                                        This is an error message.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                            <div class="flex p-4">
                                                <div class="flex-shrink-0">
                                                    <svg class="h-4 w-4 text-orange mt-0.5"
                                                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                                        fill="currentColor" viewBox="0 0 16 16">
                                                        <path
                                                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" />
                                                    </svg>
                                                </div>
                                                <div class="ms-3">
                                                    <p class="text-sm text-gray dark:text-textmuted">
                                                        This is a warning message.
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="lg:flex lg:space-x-3 rtl:space-x-reverse space-y-4 lg:space-y-0"&gt;
        &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
            &lt;div class="flex p-4"&gt;
                &lt;div class="flex-shrink-0"&gt;
                    &lt;svg class="h-4 w-4 text-primary mt-0.5"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16"&gt;
                        &lt;path
                            d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z" /&gt;
                    &lt;/svg&gt;
                &lt;/div&gt;
                &lt;div class="ms-3"&gt;
                    &lt;p class="text-sm text-gray-700 dark:text-textmuted"&gt;
                        This is a normal message.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
            &lt;div class="flex p-4"&gt;
                &lt;div class="flex-shrink-0"&gt;
                    &lt;svg class="h-4 w-4 text-green mt-0.5"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16"&gt;
                        &lt;path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z" /&gt;
                    &lt;/svg&gt;
                &lt;/div&gt;
                &lt;div class="ms-3"&gt;
                    &lt;p class="text-sm text-gray-700 dark:text-textmuted"&gt;
                        This is a success message.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
            &lt;div class="flex p-4"&gt;
                &lt;div class="flex-shrink-0"&gt;
                    &lt;svg class="h-4 w-4 text-red mt-0.5" xmlns="http://www.w3.org/2000/svg"
                        width="16" height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
                        &lt;path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM5.354 4.646a.5.5 0 1 0-.708.708L7.293 8l-2.647 2.646a.5.5 0 0 0 .708.708L8 8.707l2.646 2.647a.5.5 0 0 0 .708-.708L8.707 8l2.647-2.646a.5.5 0 0 0-.708-.708L8 7.293 5.354 4.646z" /&gt;
                    &lt;/svg&gt;
                &lt;/div&gt;
                &lt;div class="ms-3"&gt;
                    &lt;p class="text-sm text-gray-700 dark:text-textmuted"&gt;
                        This is an error message.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
            &lt;div class="flex p-4"&gt;
                &lt;div class="flex-shrink-0"&gt;
                    &lt;svg class="h-4 w-4 text-orange mt-0.5"
                        xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                        fill="currentColor" viewBox="0 0 16 16"&gt;
                        &lt;path
                            d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z" /&gt;
                    &lt;/svg&gt;
                &lt;/div&gt;
                &lt;div class="ms-3"&gt;
                    &lt;p class="text-sm text-gray dark:text-textmuted"&gt;
                        This is a warning message.
                    &lt;/p&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-3 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Condensed Toasts
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="dismiss-toast1" class="ti-toast hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-white  dark:bg-bodybg dark:border-white/10"
                                        role="alert">
                                        <div class="flex p-4">
                                            <p class="text-sm text-gray-700 dark:text-textmuted">
                                                Your email has been sent
                                            </p>

                                            <div
                                                class="ms-auto flex items-center space-x-3 rtl:space-x-reverse">
                                                <button type="button"
                                                    class="inline-flex justify-center items-center gap-2 rounded-sm border-transparent font-medium text-primary hover:underline focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm">
                                                    Undo
                                                </button>
                                                <button type="button"
                                                    class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                                    data-hs-remove-element="#dismiss-toast1">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="ti-toast hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 bg-white  dark:bg-bodybg dark:border-white/10"
    role="alert"&gt;
    &lt;div class="flex p-4"&gt;
        &lt;p class="text-sm text-gray-700 dark:text-textmuted"&gt;
            Your email has been sent
        &lt;/p&gt;

        &lt;div
            class="ms-auto flex items-center space-x-3 rtl:space-x-reverse"&gt;
            &lt;button type="button"
                class="inline-flex justify-center items-center gap-2 rounded-sm border-transparent font-medium text-primary hover:underline focus:outline-none focus:ring-0 focus:ring-primary focus:ring-offset-0 transition-all text-sm"&gt;
                Undo
            &lt;/button&gt;
            &lt;button type="button"
                class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white transition-all text-sm dark:focus:ring-white/10 dark:focus:ring-offset-white/10"&gt;
                &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                &lt;svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16"
                    fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                    &lt;path
                        d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                        fill="currentColor" /&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Solid Colored Toasts
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                        <div>
                                            <div id="dismiss-toast2" class="ti-toast bg-primary text-sm text-white " role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/50 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                                        data-hs-remove-element="#dismiss-toast2">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="dismiss-toast3" class="ti-toast bg-secondary text-sm text-white " role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/50 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                                        data-hs-remove-element="#dismiss-toast3">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="dismiss-toast4" class="ti-toast bg-info text-sm text-white" role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/50 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                                        data-hs-remove-element="#dismiss-toast4">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="dismiss-toast5" class="ti-toast bg-success text-sm text-white" role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/50 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                                        data-hs-remove-element="#dismiss-toast5">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="dismiss-toast6" class="ti-toast bg-warning text-sm text-white" role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/50 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                                        data-hs-remove-element="#dismiss-toast6">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="dismiss-toast7" class="ti-toast bg-danger text-sm text-white" role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/50 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                                        data-hs-remove-element="#dismiss-toast7">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="dismiss-toast8" class="ti-toast bg-purplemain text-sm !text-white" role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/50 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                                        data-hs-remove-element="#dismiss-toast8">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16"
                                                            fill="none" xmlns="http://www.w3.org/2000/svg">
                                                            <path
                                                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                fill="currentColor" />
                                                        </svg>
                                                    </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html"> &lt;div class="space-y-3"&gt;
    &lt;div&gt;
        &lt;div class="ti-toast bg-primary text-sm text-white " role="alert"&gt;
            &lt;div class="flex p-4"&gt;
                Hello, world! This is a toast message.

                &lt;div class="ms-auto"&gt;
                    &lt;button type="button"
                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/[.5]  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white/10 focus:ring-gray-600 transition-all text-sm dark:focus:ring-offset-white/10 dark:focus:ring-white/10"&gt;
                        &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                        &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                            viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path
                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                fill="currentColor" /&gt;
                        &lt;/svg&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div&gt;
        &lt;div class="ti-toast bg-secondary text-sm text-white " role="alert"&gt;
            &lt;div class="flex p-4"&gt;
                Hello, world! This is a toast message.

                &lt;div class="ms-auto"&gt;
                    &lt;button type="button"
                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/[.5]  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-gray-600 focus:ring-gray-500 transition-all text-sm dark:focus:ring-offset-white/10 dark:focus:ring-gray-500"&gt;
                        &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                        &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                            viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path
                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                fill="currentColor" /&gt;
                        &lt;/svg&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div&gt;
        &lt;div class="ti-toast bg-info text-sm text-white" role="alert"&gt;
            &lt;div class="flex p-4"&gt;
                Hello, world! This is a toast message.

                &lt;div class="ms-auto"&gt;
                    &lt;button type="button"
                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/[.5]  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-red-800 focus:ring-red-500 transition-all text-sm dark:focus:ring-offset-red-500 dark:focus:ring-red-700"&gt;
                        &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                        &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                            viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path
                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                fill="currentColor" /&gt;
                        &lt;/svg&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div&gt;
        &lt;div class="ti-toast bg-success text-sm text-white" role="alert"&gt;
            &lt;div class="flex p-4"&gt;
                Hello, world! This is a toast message.

                &lt;div class="ms-auto"&gt;
                    &lt;button type="button"
                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/[.5]  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-yellow-800 focus:ring-yellow-500 transition-all text-sm dark:focus:ring-offset-yellow-500 dark:focus:ring-yellow-700"&gt;
                        &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                        &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                            viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path
                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                fill="currentColor" /&gt;
                        &lt;/svg&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div&gt;
        &lt;div class="ti-toast bg-warning text-sm text-white" role="alert"&gt;
            &lt;div class="flex p-4"&gt;
                Hello, world! This is a toast message.

                &lt;div class="ms-auto"&gt;
                    &lt;button type="button"
                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/[.5]  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-green-800 focus:ring-green-500 transition-all text-sm dark:focus:ring-offset-green-500 dark:focus:ring-green-700"&gt;
                        &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                        &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                            viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path
                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                fill="currentColor" /&gt;
                        &lt;/svg&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div&gt;
        &lt;div class="ti-toast bg-danger text-sm text-white" role="alert"&gt;
            &lt;div class="flex p-4"&gt;
                Hello, world! This is a toast message.

                &lt;div class="ms-auto"&gt;
                    &lt;button type="button"
                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/[.5]  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-primary focus:ring-primary transition-all text-sm dark:focus:ring-offset-primary dark:focus:ring-primary"&gt;
                        &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                        &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                            viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path
                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                fill="currentColor" /&gt;
                        &lt;/svg&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;

    &lt;div&gt;
        &lt;div class="ti-toast bg-purple text-sm text-white" role="alert"&gt;
            &lt;div class="flex p-4"&gt;
                Hello, world! This is a toast message.

                &lt;div class="ms-auto"&gt;
                    &lt;button type="button"
                        class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-white/[.5]  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-indigo-800 focus:ring-indigo-500 transition-all text-sm dark:focus:ring-offset-indigo-500 dark:focus:ring-indigo-700"&gt;
                        &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                        &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                            viewBox="0 0 16 16" fill="none"
                            xmlns="http://www.w3.org/2000/svg"&gt;
                            &lt;path
                                d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                fill="currentColor" /&gt;
                        &lt;/svg&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Light Colored Toasts
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                        <div>
                                            <div id="dismiss-toast9" class="ti-toast bg-primary/10 text-sm text-primary" role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-primary  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white/10 focus:ring-gray-600 transition-all text-sm dark:focus:ring-offset-white/10 dark:focus:ring-white/10" data-hs-remove-element="#dismiss-toast9">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="w-3.5 h-3.5" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="dismiss-toast10" class="ti-toast bg-secondary/10 text-sm text-secondary" role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-secondary  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-gray-600 focus:ring-gray-500 transition-all text-sm dark:focus:ring-offset-white/10 dark:focus:ring-gray-500" data-hs-remove-element="#dismiss-toast10">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="w-3.5 h-3.5" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="dismiss-toast11" class="ti-toast bg-info/10 text-sm text-info" role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-info  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-red-800 focus:ring-red-500 transition-all text-sm dark:focus:ring-offset-red-500 dark:focus:ring-red-700" data-hs-remove-element="#dismiss-toast11">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="w-3.5 h-3.5" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="dismiss-toast12" class="ti-toast bg-success/10 text-sm text-success" role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-success  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-yellow-800 focus:ring-yellow-500 transition-all text-sm dark:focus:ring-offset-yellow-500 dark:focus:ring-yellow-700" data-hs-remove-element="#dismiss-toast12">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="w-3.5 h-3.5" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="dismiss-toast13" class="ti-toast bg-warning/10 text-sm text-warning" role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-warning  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-green-800 focus:ring-green-500 transition-all text-sm dark:focus:ring-offset-green-500 dark:focus:ring-green-700" data-hs-remove-element="#dismiss-toast13">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="w-3.5 h-3.5" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="dismiss-toast14" class="ti-toast bg-danger/10 text-sm text-danger" role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-danger  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-primary focus:ring-primary transition-all text-sm dark:focus:ring-offset-primary dark:focus:ring-primary" data-hs-remove-element="#dismiss-toast14">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="w-3.5 h-3.5" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <div>
                                            <div id="dismiss-toast15" class="ti-toast bg-purplemain/10 text-sm text-purplemain" role="alert">
                                                <div class="flex p-4">
                                                    Hello, world! This is a toast message.

                                                    <div class="ms-auto">
                                                        <button type="button"
                                                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-purple  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-indigo-800 focus:ring-indigo-500 transition-all text-sm dark:focus:ring-offset-indigo-500 dark:focus:ring-indigo-700" data-hs-remove-element="#dismiss-toast15">
                                                            <span class="sr-only">Close</span>
                                                            <svg class="w-3.5 h-3.5" width="16" height="16"
                                                                viewBox="0 0 16 16" fill="none"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path
                                                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                                    fill="currentColor" />
                                                            </svg>
                                                        </button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="space-y-3"&gt;
        &lt;div&gt;
            &lt;div class="ti-toast bg-primary/10 text-sm text-primary" role="alert"&gt;
                &lt;div class="flex p-4"&gt;
                    Hello, world! This is a toast message.

                    &lt;div class="ms-auto"&gt;
                        &lt;button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-primary  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-white/10 focus:ring-gray-600 transition-all text-sm dark:focus:ring-offset-white/10 dark:focus:ring-white/10"&gt;
                            &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                            &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                                viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg"&gt;
                                &lt;path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" /&gt;
                            &lt;/svg&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div&gt;
            &lt;div class="ti-toast bg-secondary/10 text-sm text-secondary" role="alert"&gt;
                &lt;div class="flex p-4"&gt;
                    Hello, world! This is a toast message.

                    &lt;div class="ms-auto"&gt;
                        &lt;button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-secondary  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-gray-600 focus:ring-gray-500 transition-all text-sm dark:focus:ring-offset-white/10 dark:focus:ring-gray-500"&gt;
                            &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                            &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                                viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg"&gt;
                                &lt;path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" /&gt;
                            &lt;/svg&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div&gt;
            &lt;div class="ti-toast bg-info/10 text-sm text-info" role="alert"&gt;
                &lt;div class="flex p-4"&gt;
                    Hello, world! This is a toast message.

                    &lt;div class="ms-auto"&gt;
                        &lt;button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-info  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-red-800 focus:ring-red-500 transition-all text-sm dark:focus:ring-offset-red-500 dark:focus:ring-red-700"&gt;
                            &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                            &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                                viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg"&gt;
                                &lt;path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" /&gt;
                            &lt;/svg&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div&gt;
            &lt;div class="ti-toast bg-success/10 text-sm text-success" role="alert"&gt;
                &lt;div class="flex p-4"&gt;
                    Hello, world! This is a toast message.

                    &lt;div class="ms-auto"&gt;
                        &lt;button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-success  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-yellow-800 focus:ring-yellow-500 transition-all text-sm dark:focus:ring-offset-yellow-500 dark:focus:ring-yellow-700"&gt;
                            &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                            &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                                viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg"&gt;
                                &lt;path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" /&gt;
                            &lt;/svg&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div&gt;
            &lt;div class="ti-toast bg-warning/10 text-sm text-warning" role="alert"&gt;
                &lt;div class="flex p-4"&gt;
                    Hello, world! This is a toast message.

                    &lt;div class="ms-auto"&gt;
                        &lt;button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-warning  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-green-800 focus:ring-green-500 transition-all text-sm dark:focus:ring-offset-green-500 dark:focus:ring-green-700"&gt;
                            &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                            &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                                viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg"&gt;
                                &lt;path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" /&gt;
                            &lt;/svg&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div&gt;
            &lt;div class="ti-toast bg-danger/10 text-sm text-danger" role="alert"&gt;
                &lt;div class="flex p-4"&gt;
                    Hello, world! This is a toast message.

                    &lt;div class="ms-auto"&gt;
                        &lt;button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-danger  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-primary focus:ring-primary transition-all text-sm dark:focus:ring-offset-primary dark:focus:ring-primary"&gt;
                            &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                            &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                                viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg"&gt;
                                &lt;path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" /&gt;
                            &lt;/svg&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;

        &lt;div&gt;
            &lt;div class="ti-toast bg-purple/10 text-sm text-purple" role="alert"&gt;
                &lt;div class="flex p-4"&gt;
                    Hello, world! This is a toast message.

                    &lt;div class="ms-auto"&gt;
                        &lt;button type="button"
                            class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-purple  focus:outline-none focus:ring-0 focus:ring-offset-0 focus:ring-offset-indigo-800 focus:ring-indigo-500 transition-all text-sm dark:focus:ring-offset-indigo-500 dark:focus:ring-indigo-700"&gt;
                            &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                            &lt;svg class="w-3.5 h-3.5" width="16" height="16"
                                viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg"&gt;
                                &lt;path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" /&gt;
                            &lt;/svg&gt;
                        &lt;/button&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->
                    
                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Toast Message with loading indicator
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                        <div class="flex items-center p-4">
                                            <div class="ti-spinner w-4 h-4 text-primary" role="status" aria-label="loading">
                                                <span class="sr-only">Loading...</span>
                                            </div>
                                            <p class="ms-3 text-sm text-gray-700 dark:text-textmuted">
                                                Action in progress
                                            </p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
        &lt;div class="flex items-center p-4"&gt;
            &lt;div class="ti-spinner w-4 h-4 text-primary" role="status" aria-label="loading"&gt;
                &lt;span class="sr-only"&gt;Loading...&lt;/span&gt;
            &lt;/div&gt;
            &lt;p class="ms-3 text-sm text-gray-700 dark:text-textmuted"&gt;
                Action in progress
            &lt;/p&gt;
        &lt;/div&gt;
        &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Toast with Dismiss button
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div id="dismiss-toast"
                                        class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 ti-toast bg-white dark:bg-bodybg dark:border-white/10"
                                        role="alert">
                                        <div class="flex p-4">
                                            <p class="text-sm text-gray-700 dark:text-textmuted">
                                                Your email has been sent
                                            </p>

                                            <div class="ms-auto">
                                                <button type="button"
                                                    class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                                                    data-hs-remove-element="#dismiss-toast">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16"
                                                        fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                                            fill="currentColor" />
                                                    </svg>
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
                                    <!-- Prism Code -->
                                    <pre class="language-html"><code class="language-html">&lt;div id="dismiss-toast"
        class="hs-removing:translate-x-5 hs-removing:opacity-0 transition duration-300 ti-toast bg-white dark:bg-bodybg dark:border-white/10"
        role="alert"&gt;
        &lt;div class="flex p-4"&gt;
            &lt;p class="text-sm text-gray-700 dark:text-textmuted"&gt;
                Your email has been sent
            &lt;/p&gt;

            &lt;div class="ms-auto"&gt;
                &lt;button type="button"
                    class="inline-flex flex-shrink-0 justify-center items-center h-4 w-4 rounded-sm text-gray-400 hover:text-gray-500 focus:outline-none focus:ring-0 focus:ring-gray-400 focus:ring-offset-0 focus:ring-offset-white text-sm dark:focus:ring-white/10 dark:focus:ring-offset-white/10"
                    data-hs-remove-element="#dismiss-toast"&gt;
                    &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                    &lt;svg class="w-3.5 h-3.5" width="16" height="16" viewBox="0 0 16 16"
                        fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                        &lt;path
                            d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                            fill="currentColor" /&gt;
                    &lt;/svg&gt;
                &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;</code></pre>
                                    <!-- Prism Code -->
                                </div>

                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!-- Start:: row-4 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Toast Stack</h5>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                <div class="relative min-h-[15rem]">
                                    <div class="absolute top-0 start-0">
                                    <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                        <div class="px-3 py-2">
                                        <h3 class="sm:!text-[0.75rem] text-[0.665rem]  font-semibold ">
                                            Top left
                                        </h3>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="absolute top-0 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2">
                                    <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                        <div class="px-3 py-2">
                                        <h3 class="sm:!text-[0.75rem] text-[0.665rem]  font-semibold ">
                                            Top center
                                        </h3>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="absolute top-0 end-0">
                                    <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                        <div class="px-3 py-2">
                                        <h3 class="sm:!text-[0.75rem] text-[0.665rem]  font-semibold ">
                                            Top right
                                        </h3>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="absolute top-1/2 start-1/2 transform -translate-y-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2">
                                    <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                        <div class="px-3 py-2">
                                        <h3 class="sm:!text-[0.75rem] text-[0.665rem]  font-semibold ">
                                            Center
                                        </h3>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="absolute bottom-0 start-0">
                                    <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                        <div class="px-3 py-2">
                                        <h3 class="sm:!text-[0.75rem] text-[0.665rem] font-semibold ">
                                            Bottom left
                                        </h3>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="absolute bottom-0 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2">
                                    <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                        <div class="px-3 py-2">
                                        <h3 class="sm:!text-[0.75rem] text-[0.665rem]  font-semibold">
                                            Bottom center
                                        </h3>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="absolute bottom-0 end-0">
                                    <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                        <div class="px-3 py-2">
                                        <h3 class="sm:!text-[0.75rem] text-[0.665rem] font-semibold">
                                            Bottom right
                                        </h3>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="relative min-h-[15rem]"&gt;
            &lt;div class="absolute top-0 start-0"&gt;
                &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
                &lt;div class="px-3 py-2"&gt;
                    &lt;h3 class="!text-[0.75rem]  font-semibold sm:text-base "&gt;
                    Top left
                    &lt;/h3&gt;
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="absolute top-0 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2"&gt;
                &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
                &lt;div class="px-3 py-2"&gt;
                    &lt;h3 class="!text-[0.75rem]  font-semibold sm:text-base "&gt;
                    Top center
                    &lt;/h3&gt;
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="absolute top-0 end-0"&gt;
                &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
                &lt;div class="px-3 py-2"&gt;
                    &lt;h3 class="!text-[0.75rem]  font-semibold sm:text-base "&gt;
                    Top right
                    &lt;/h3&gt;
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="absolute top-1/2 start-1/2 transform -translate-y-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2"&gt;
                &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
                &lt;div class="px-3 py-2"&gt;
                    &lt;h3 class="!text-[0.75rem]  font-semibold sm:text-base "&gt;
                    Center
                    &lt;/h3&gt;
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="absolute bottom-0 start-0"&gt;
                &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
                &lt;div class="px-3 py-2"&gt;
                    &lt;h3 class="!text-[0.75rem]  font-semibold sm:text-base "&gt;
                    Bottom left
                    &lt;/h3&gt;
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="absolute bottom-0 start-1/2 ltr:-translate-x-1/2 rtl:translate-x-1/2"&gt;
                &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
                &lt;div class="px-3 py-2"&gt;
                    &lt;h3 class="!text-[0.75rem]  font-semibold sm:text-base "&gt;
                    Bottom center
                    &lt;/h3&gt;
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="absolute bottom-0 end-0"&gt;
                &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
                &lt;div class="px-3 py-2"&gt;
                    &lt;h3 class="!text-[0.75rem]  font-semibold sm:text-base "&gt;
                    Bottom right
                    &lt;/h3&gt;
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Toast With actions</h5>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                    <div class="flex p-4">
                                    <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-gray-600 mt-1 /70" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                        <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                        </svg>
                                    </div>
                                    <div class="ms-4">
                                        <h3 class=" text-sm font-semibold ">
                                        App notifications
                                        </h3>
                                        <div class="mt-1 text-sm text-gray-600 /70">
                                        Notifications may include alerts, sounds and icon badges.
                                        </div>
                                        <div class="mt-4">
                                        <div class="flex space-x-3 rtl:space-x-reverse">
                                            <button type="button" class="ti-btn ti-btn-primary px-2 py-1">
                                            Don't allow
                                            </button>
                                            <button type="button" class="ti-btn ti-btn-primary px-2 py-1">
                                            Allow
                                            </button>
                                        </div>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
    &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
        &lt;div class="flex p-4"&gt;
            &lt;div class="flex-shrink-0"&gt;
            &lt;svg class="h-5 w-5 text-gray-600 mt-1 /70" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
                &lt;path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/&gt;
            &lt;/svg&gt;
            &lt;/div&gt;
            &lt;div class="ms-4"&gt;
            &lt;h3 class=" text-sm font-semibold "&gt;
                App notifications
            &lt;/h3&gt;
            &lt;div class="mt-1 text-sm text-gray-600 /70"&gt;
                Notifications may include alerts, sounds and icon badges.
            &lt;/div&gt;
            &lt;div class="mt-4"&gt;
                &lt;div class="flex space-x-3 rtl:space-x-reverse"&gt;
                &lt;button type="button" class="ti-btn ti-btn-primary px-2 py-1"&gt;
                    Don't allow
                &lt;/button&gt;
                &lt;button type="button" class="ti-btn ti-btn-primary px-2 py-1"&gt;
                    Allow
                &lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Toast Stack</h5>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show
                                            Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                <div class="space-y-3">
                                    <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                    <div class="flex p-4">
                                        <div class="flex-shrink-0">
                                        <svg class="h-5 w-5 text-gray-600 mt-1 /70" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/>
                                        </svg>
                                        </div>
                                        <div class="ms-4">
                                        <h3 class=" text-sm font-semibold ">
                                            App notifications
                                        </h3>
                                        <div class="mt-1 text-sm text-gray-600 /70">
                                            Notifications may include alerts, sounds and icon badges.
                                        </div>
                                        <div class="mt-4">
                                            <div class="flex space-x-3 rtl:space-x-reverse">
                                            <button type="button" class="ti-btn font-medium text-primary underline focus:ring-primary focus:ring-offset-transparent m-0 p-0">
                                                Don't allow
                                            </button>
                                            <button type="button" class="ti-btn font-medium text-primary underline focus:ring-primary focus:ring-offset-transparent m-0 p-0">
                                                Allow
                                            </button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    </div>

                                    <div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert">
                                    <div class="flex p-4">
                                        <div class="flex-shrink-0">
                                        <svg class="h-4 w-4 text-success mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                            <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/>
                                        </svg>
                                        </div>
                                        <div class="ms-3">
                                        <p class="text-sm text-gray-700 /70">
                                            Successfully updated!
                                        </p>
                                        </div>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
        &lt;div class="space-y-3"&gt;
            &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
                &lt;div class="flex p-4"&gt;
                &lt;div class="flex-shrink-0"&gt;
                    &lt;svg class="h-5 w-5 text-gray-600 mt-1 /70" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zM8 1.918l-.797.161A4.002 4.002 0 0 0 4 6c0 .628-.134 2.197-.459 3.742-.16.767-.376 1.566-.663 2.258h10.244c-.287-.692-.502-1.49-.663-2.258C12.134 8.197 12 6.628 12 6a4.002 4.002 0 0 0-3.203-3.92L8 1.917zM14.22 12c.223.447.481.801.78 1H1c.299-.199.557-.553.78-1C2.68 10.2 3 6.88 3 6c0-2.42 1.72-4.44 4.005-4.901a1 1 0 1 1 1.99 0A5.002 5.002 0 0 1 13 6c0 .88.32 4.2 1.22 6z"/&gt;
                    &lt;/svg&gt;
                &lt;/div&gt;
                &lt;div class="ms-4"&gt;
                    &lt;h3 class=" text-sm font-semibold "&gt;
                    App notifications
                    &lt;/h3&gt;
                    &lt;div class="mt-1 text-sm text-gray-600 /70"&gt;
                    Notifications may include alerts, sounds and icon badges.
                    &lt;/div&gt;
                    &lt;div class="mt-4"&gt;
                    &lt;div class="flex space-x-3 rtl:space-x-reverse"&gt;
                        &lt;button type="button" class="ti-btn font-medium text-primary underline focus:ring-primary focus:ring-offset-transparent m-0 p-0"&gt;
                        Don't allow
                        &lt;/button&gt;
                        &lt;button type="button" class="ti-btn font-medium text-primary underline focus:ring-primary focus:ring-offset-transparent m-0 p-0"&gt;
                        Allow
                        &lt;/button&gt;
                    &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;

            &lt;div class="ti-toast bg-white dark:bg-bodybg dark:border-white/10" role="alert"&gt;
                &lt;div class="flex p-4"&gt;
                &lt;div class="flex-shrink-0"&gt;
                    &lt;svg class="h-4 w-4 text-success mt-0.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
                    &lt;path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zm-3.97-3.03a.75.75 0 0 0-1.08.022L7.477 9.417 5.384 7.323a.75.75 0 0 0-1.06 1.06L6.97 11.03a.75.75 0 0 0 1.079-.02l3.992-4.99a.75.75 0 0 0-.01-1.05z"/&gt;
                    &lt;/svg&gt;
                &lt;/div&gt;
                &lt;div class="ms-3"&gt;
                    &lt;p class="text-sm text-gray-700 /70"&gt;
                    Successfully updated!
                    &lt;/p&gt;
                &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

        <!-- Toast JS -->
        @vite('resources/assets/js/Toasts.js')

@endsection

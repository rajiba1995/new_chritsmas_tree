
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Input Group</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Form Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Input Group 
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
                    
                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Input Group Sizes</h5>
                        </div>
                        <div class="box-body">
                            <div class="space-y-3">
                            <div>
                                <div class="flex rounded-sm">
                                <span
                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-black/20 dark:border-white/10 dark:text-white/70">Small</span>
                                <input type="text"
                                    class="py-2 px-3  ltr:pr-11 rtl:pl-11 ti-form-input rounded-none ltr:rounded-l-none rtl:rounded-r-none focus:z-10">
                                </div>
                            </div>

                            <div>
                                <div class="flex rounded-sm">
                                <span
                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-black/20 dark:border-white/10 dark:text-white/70">Default</span>
                                <input type="text"
                                    class="ti-form-input rounded-none  ltr:pr-11 rtl:pl-11 ltr:rounded-l-none rtl:rounded-r-none focus:z-10">
                                </div>
                            </div>

                            <div>
                                <div class="flex rounded-sm">
                                <span
                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-black/20 dark:border-white/10 dark:text-white/70">Large</span>
                                <input type="text"
                                    class="ti-form-input rounded-none  ltr:pr-11 rtl:pl-11 ltr:!rounded-l-none rtl:!rounded-r-none focus:z-10 sm:p-5">
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Input Group Sizes</h5>
                        </div>
                        <div class="box-body">
                            <div class="space-y-3">
                            <div>
                                <div class="sm:flex rounded-sm">
                                <span
                                    class="py-2 px-3 inline-flex items-center min-w-fit w-full border border-gray-200 bg-gray-50 text-sm text-gray-500 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm sm:w-auto ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0  ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm dark:bg-black/20 dark:border-white/10 dark:text-white/70">First
                                    and last name</span>
                                <input type="text"
                                    class="ti-form-input !rounded-none  ltr:pr-11 rtl:pl-11 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0  ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm relative focus:z-10">
                                <input type="text"
                                    class="ti-form-input rounded-none  ltr:pr-11 rtl:pl-11 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm ltr:sm:first:rounded-l-sm ltr:!rounded-tl-none rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0  ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm relative focus:z-10">
                                </div>
                            </div>

                            <div>
                                <div class="sm:flex rounded-sm">
                                <input type="text"
                                    class="ti-form-input rounded-none ltr:!rounded-br-none  ltr:pr-11 rtl:pl-11 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0  ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm relative focus:z-10">
                                <input type="text"
                                    class="ti-form-input !rounded-none  ltr:pr-11 rtl:pl-11 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0  ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm relative focus:z-10">
                                <span
                                    class="py-2 px-3 inline-flex items-center min-w-fit w-full border border-gray-200 bg-gray-50 text-sm text-gray-500 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm sm:w-auto ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0  ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm dark:bg-black/20 dark:border-white/10 dark:text-white/70">First
                                    and last name</span>
                                </div>
                            </div>

                            <div>
                                <div class="sm:flex rounded-sm">
                                <input type="text"
                                    class="ti-form-input rounded-none ltr:!rounded-br-none ltr:pr-11 rtl:pl-11 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0  ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm relative focus:z-10">
                                <span
                                    class="py-2 px-3 inline-flex items-center min-w-fit w-full border border-gray-200 bg-gray-50 text-sm text-gray-500 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm sm:w-auto ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0  ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm dark:bg-black/20 dark:border-white/10 dark:text-white/70">
                                    <svg class="hidden sm:block h-4 w-4 text-gray-500 dark:text-white/70"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M1 11.5a.5.5 0 0 0 .5.5h11.793l-3.147 3.146a.5.5 0 0 0 .708.708l4-4a.5.5 0 0 0 0-.708l-4-4a.5.5 0 0 0-.708.708L13.293 11H1.5a.5.5 0 0 0-.5.5zm14-7a.5.5 0 0 1-.5.5H2.707l3.147 3.146a.5.5 0 1 1-.708.708l-4-4a.5.5 0 0 1 0-.708l4-4a.5.5 0 1 1 .708.708L2.707 4H14.5a.5.5 0 0 1 .5.5z" />
                                    </svg>
                                    <svg class="sm:hidden mx-auto h-4 w-4 text-gray-500 dark:text-white/70"
                                    xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                                    viewBox="0 0 16 16">
                                    <path fill-rule="evenodd"
                                        d="M11.5 15a.5.5 0 0 0 .5-.5V2.707l3.146 3.147a.5.5 0 0 0 .708-.708l-4-4a.5.5 0 0 0-.708 0l-4 4a.5.5 0 1 0 .708.708L11 2.707V14.5a.5.5 0 0 0 .5.5zm-7-14a.5.5 0 0 1 .5.5v11.793l3.146-3.147a.5.5 0 0 1 .708.708l-4 4a.5.5 0 0 1-.708 0l-4-4a.5.5 0 0 1 .708-.708L4 13.293V1.5a.5.5 0 0 1 .5-.5z" />
                                    </svg>
                                </span>
                                <input type="text"
                                    class="ti-form-input rounded-none ltr:!rounded-tl-none ltr:pr-11 rtl:pl-11 -mt-px ltr:-ml-px rtl:-mr-px first:rounded-t-sm last:rounded-b-sm ltr:sm:first:rounded-l-sm rtl:sm:first:rounded-r-sm sm:mt-0 ltr:sm:first:ml-0 rtl:sm:first:mr-0  ltr:sm:first:rounded-tr-none rtl:sm:first:rounded-tl-none ltr:sm:last:rounded-bl-none rtl:sm:last:rounded-br-none ltr:sm:last:rounded-r-sm rtl:sm:last:rounded-l-sm relative focus:z-10">
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 md:col-span-6 xxl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Leading Icon</h5>
                        </div>
                        <div class="box-body">
                            <div>
                            <label for="hs-leading-icon" class="ti-form-label">Email address</label>
                            <div class="relative">
                                <input type="text" id="hs-leading-icon" name="hs-leading-icon"
                                class="ti-form-input rounded-sm ltr:pl-11 rtl:pr-11 focus:z-10" placeholder="you@site.com">
                                <div
                                class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none z-20 ltr:pl-4 rtl:pr-4">
                                <svg class="h-4 w-4 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                    d="M.05 3.555A2 2 0 0 1 2 2h12a2 2 0 0 1 1.95 1.555L8 8.414.05 3.555ZM0 4.697v7.104l5.803-3.558L0 4.697ZM6.761 8.83l-6.57 4.027A2 2 0 0 0 2 14h12a2 2 0 0 0 1.808-1.144l-6.57-4.027L8 9.586l-1.239-.757Zm3.436-.586L16 11.801V4.697l-5.803 3.546Z" />
                                </svg>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Trailing Icon</h5>
                        </div>
                        <div class="box-body">
                            <div>
                            <label for="hs-trailing-icon" class="ti-form-label">Card number</label>
                            <div class="relative">
                                <input type="number" id="hs-trailing-icon" name="hs-trailing-icon"
                                class="ti-form-input rounded-sm ltr:pr-11 rtl:pl-11 focus:z-10" placeholder="xxxx-xxxx-xxxx-xxxx">
                                <div
                                class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none z-20 ltr:pr-4 rtl:pl-4">
                                <svg class="h-4 w-4 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                    d="M11 5.5a.5.5 0 0 1 .5-.5h2a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-2a.5.5 0 0 1-.5-.5v-1z" />
                                    <path
                                    d="M2 2a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V4a2 2 0 0 0-2-2H2zm13 2v5H1V4a1 1 0 0 1 1-1h12a1 1 0 0 1 1 1zm-1 9H2a1 1 0 0 1-1-1v-1h14v1a1 1 0 0 1-1 1z" />
                                </svg>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Leading And Trailing Icon</h5>
                        </div>
                        <div class="box-body">
                            <div>
                            <label for="hs-input-with-leading-and-trailing-icon" class="ti-form-label">Price</label>
                            <div class="relative">
                                <input type="text" id="hs-input-with-leading-and-trailing-icon"
                                name="hs-input-with-leading-and-trailing-icon"
                                class="ti-form-input rounded-sm ltr:pl-9 ltr:pr-16 rtl:pr-9 rtl:pl-16 focus:z-10"
                                placeholder="0.00">
                                <div
                                class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none z-20 ltr:pl-4 rtl:pr-4">
                                <span class="text-gray-500 dark:text-white/70">$</span>
                                </div>
                                <div
                                class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none z-20 ltr:pr-4 rtl:pl-4">
                                <span class="text-gray-500 dark:text-white/70">USD</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Add-On</h5>
                        </div>
                        <div class="box-body">
                            <div>
                            <label for="hs-input-with-add-on-url"
                                class="block text-sm text-gray-700 font-medium dark:text-white">Website URL</label>
                            <div class="flex rounded-sm">
                                <div
                                class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                <span class="text-sm text-gray-500 dark:text-white/70">http://</span>
                                </div>
                                <input type="text" name="hs-input-with-add-on-url" id="hs-input-with-add-on-url"
                                class="ti-form-input rounded-none  ltr:pr-11 rtl:pl-11 ltr:rounded-l-none rtl:rounded-r-none focus:z-10"
                                placeholder="www.example.com">
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 md:col-span-6 xxl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Inline Add-On</h5>
                        </div>
                        <div class="box-body">
                            <div>
                            <label for="hs-inline-add-on" class="ti-form-label">Website URL</label>
                            <div class="relative">
                                <input type="text" id="hs-inline-add-on" name="hs-inline-add-on"
                                class="ti-form-input ltr:pl-16 rtl:pr-16 focus:z-10" placeholder="www.example.com">
                                <div
                                class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none z-20 ltr:pl-4 rtl:pr-4">
                                <span class="text-sm text-gray-500 dark:text-white/70">http://</span>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Inline Leading Select</h5>
                        </div>
                        <div class="box-body">
                            <div>
                            <label for="hs-inline-leading-select-label" class="ti-form-label">Phone number</label>
                            <div class="relative">
                                <input type="number" id="hs-inline-leading-select-label"
                                class="ti-form-input ltr:pl-20 rtl:pr-20 focus:z-10" placeholder="+1 (000) 000-0000">
                                <div
                                class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center text-gray-500 dark:text-white/70 ltr:pl-px rtl:pr-px">
                                <label for="hs-inline-leading-select-country" class="sr-only">Country</label>
                                <select id="hs-inline-leading-select-country" name="hs-inline-leading-select-country"
                                    class="block w-full border-defaultborder !py-1 !border-0 dark:border-defaultborder/10 focus:ring-primary focus:border-primary dark:bg-bodybg rtl:ps-2 rtl:pe-[2.25rem]">
                                    <option>US</option>
                                    <option>CA</option>
                                    <option>EU</option>
                                </select>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Inline Leading Add-On And Trailing Select</h5>
                        </div>
                        <div class="box-body">
                            <div>
                            <label for="hs-inline-leading-pricing-select-label" class="ti-form-label">Price</label>
                            <div class="relative">
                                <input type="text" id="hs-inline-leading-pricing-select-label"
                                class="ti-form-input ltr:pl-9 rtl:pr-9 ltr:pr-20 rtl:pl-20 focus:z-10" placeholder="0.00">
                                <div
                                class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none z-20 ltr:pl-4 rtl:pr-4">
                                <span class="text-gray-500 dark:text-white/70">$</span>
                                </div>
                                <div
                                class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center text-gray-500 dark:text-white/70 ltr:pr-px rtl:pl-px">
                                <label for="hs-inline-leading-select-currency" class="sr-only">Currency</label>
                                <select id="hs-inline-leading-select-currency" name="hs-inline-leading-select-currency"
                                    class="block w-full border-defaultborder !py-1 !border-0 dark:border-defaultborder/10 focus:ring-primary focus:border-primary dark:focus:border-defaultborder/10 dark:bg-bodybg rtl:ps-2 rtl:pe-[2.25rem]">
                                    <option>USD</option>
                                    <option>CAD</option>
                                    <option>EUR</option>
                                </select>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Checkbox and radios</h5>
                        </div>
                        <div class="box-body">
                            <div class="space-y-3">
                            <div>
                                <div class="flex rounded-sm">
                                <span
                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-black/20 dark:border-white/10 dark:text-white/70">
                                    <span class="flex">
                                    <input type="checkbox" class="form-check-input" id="hs-input-group-with-checkbox">
                                    <label for="hs-input-group-with-checkbox" class="sr-only">Checkbox</label>
                                    </span>
                                </span>
                                <input type="text" name="hs-input-with-add-on-url-checkbox" id="hs-input-with-add-on-url-checkbox"
                                    class="ti-form-input rounded-none ltr:pr-11 rtl:pl-11 ltr:rounded-l-none rtl:rounded-r-none focus:z-10"
                                    placeholder="Checkbox">
                                </div>
                            </div>

                            <div>
                                <div class="flex rounded-sm">
                                <span
                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-black/20 dark:border-white/10 dark:text-white/70">
                                    <span class="flex">
                                    <input type="radio" class="ti-form-radio" id="hs-input-group-with-radio">
                                    <label for="hs-input-group-with-radio" class="sr-only">Radio</label>
                                    </span>
                                </span>
                                <input type="text" name="hs-input-with-add-on-url-radio" id="hs-input-with-add-on-url-radio"
                                    class="ti-form-input rounded-none ltr:pr-11 rtl:pl-11 ltr:rounded-l-none rtl:rounded-r-none focus:z-10"
                                    placeholder="Radio">
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Multiple Add-On</h5>
                        </div>
                        <div class="box-body">
                            <div class="space-y-3">
                            <div>
                                <label for="hs-leading-multiple-add-on" class="sr-only">Multiple add-on</label>
                                <div class="flex rounded-sm">
                                <div
                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                    <span class="text-sm text-gray-500 dark:text-white/70">$</span>
                                </div>
                                <div
                                    class="px-4 inline-flex items-center min-w-fit border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                    <span class="text-sm text-gray-500 dark:text-white/70">0.00</span>
                                </div>
                                <input type="text" id="hs-leading-multiple-add-on"
                                    class=" ti-form-input ltr:rounded-l-none rtl:rounded-r-none focus:z-10"
                                    placeholder="www.example.com">
                                </div>
                            </div>

                            <div>
                                <label for="hs-trailing-multiple-add-on" class="sr-only">Multiple add-on</label>
                                <div class="flex rounded-sm">
                                <input type="text" id="hs-trailing-multiple-add-on"
                                    class=" ti-form-input ltr:rounded-r-none rtl:rounded-l-none focus:z-10"
                                    placeholder="www.example.com">
                                <div
                                    class="px-4 inline-flex items-center min-w-fit border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                    <span class="text-sm text-gray-500 dark:text-white/70">$</span>
                                </div>
                                <div
                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-none rtl:!rounded-tl-sm rtl:!rounded-bl-sm rtl:rounded-r-none border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 dark:bg-black/20 dark:border-white/10">
                                    <span class="text-sm text-gray-500 dark:text-white/70">0.00</span>
                                </div>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Trailing Button Add-Ons</h5>
                        </div>
                        <div class="box-body">
                            <div class="space-y-3">
                            <div>
                                <label for="hs-trailing-button-add-on-with-icon" class="sr-only">Label</label>
                                <div class="flex rounded-sm">
                                <input type="text" id="hs-trailing-button-add-on-with-icon"
                                    name="hs-trailing-button-add-on-with-icon"
                                    class="rtl:!rounded-tl-none rtl:!rounded-bl-none ti-form-input rounded-none ltr:!rounded-tr-none ltr:!rounded-br-none ltr:rounded-l-sm rtl:rounded-r-sm focus:z-10">
                                <button aria-label="button" type="button"
                                    class="inline-flex flex-shrink-0 justify-center items-center h-[2.875rem] w-[2.875rem] ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                                </div>
                            </div>

                            <div>
                                <label for="hs-trailing-button-add-on-with-leading-and-trailing" class="sr-only">Label</label>
                                <div class="flex rounded-sm">
                                <span
                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-l-sm rtl:rounded-r-sm border ltr:!rounded-tr-none ltr:!rounded-br-none ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 text-sm dark:bg-black/20 dark:border-white/10">
                                    <span class="text-sm text-gray-500 dark:text-white/70">http://</span>
                                </span>
                                <input type="text" id="hs-trailing-button-add-on-with-leading-and-trailing"
                                    name="hs-trailing-button-add-on-with-leading-and-trailing"
                                    class="ti-form-input !rounded-none focus:z-10">
                                <button aria-label="button" type="button"
                                    class="inline-flex flex-shrink-0 justify-center items-center h-[2.875rem] w-[2.875rem] ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                                </div>
                            </div>

                            <div>
                                <label for="hs-trailing-button-add-on-with-icon-and-button" class="sr-only">Label</label>
                                <div class="relative flex rounded-sm">
                                <input type="text" id="hs-trailing-button-add-on-with-icon-and-button"
                                    name="hs-trailing-button-add-on-with-icon-and-button"
                                    class="rtl:!rounded-tl-none rtl:!rounded-bl-none ltr:!rounded-tr-none ltr:!rounded-br-none ti-form-input ltr:pl-11 rtl:pr-11 rounded-none ltr:rounded-l-sm rtl:rounded-r-sm focus:z-10">
                                <div
                                    class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none z-20 ltr:pl-4 rtl:pr-4">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </div>
                                <button type="button"
                                    class="py-2 px-3 inline-flex flex-shrink-0 justify-center items-center ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">Search</button>
                                </div>
                            </div>

                            <div>
                                <label for="hs-trailing-button-add-on" class="sr-only">Label</label>
                                <div class="flex rounded-sm">
                                <input type="text" id="hs-trailing-button-add-on" name="hs-trailing-button-add-on"
                                    class="rtl:!rounded-tl-none rtl:!rounded-bl-none ti-form-input ltr:!rounded-tr-none ltr:!rounded-br-none rounded-none ltr:rounded-l-sm rtl:rounded-r-sm focus:z-10">
                                <button type="button"
                                    class="py-2 px-3 inline-flex flex-shrink-0 justify-center items-center gap-2 ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                    Button
                                </button>
                                </div>
                            </div>

                            <div>
                                <label for="hs-trailing-button-add-on-multiple-add-ons" class="sr-only">Label</label>
                                <div class="flex rounded-sm">
                                <input type="text" id="hs-trailing-button-add-on-multiple-add-ons"
                                    name="hs-trailing-button-add-on-multiple-add-ons"
                                    class="rtl:!rounded-tl-none rtl:!rounded-bl-none ti-form-input ltr:!rounded-tr-none ltr:!rounded-br-none rounded-none ltr:rounded-l-sm rtl:rounded-r-sm focus:z-10 ">
                                <button type="button"
                                    class="ltr:-ml-px rtl:-mr-px py-2 px-3 inline-flex justify-center items-center gap-2 border font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white">
                                    Button
                                </button>
                                <button type="button"
                                    class="py-2 px-3 inline-flex flex-shrink-0 justify-center items-center gap-2 ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                    Button
                                </button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Leading Button Add-Ons</h5>
                        </div>
                        <div class="box-body">
                            <div class="space-y-3">
                            <div>
                                <label for="hs-leading-button-add-on-with-icon" class="sr-only">Label</label>
                                <div class="flex rounded-sm">
                                <button aria-label="button" type="button"
                                    class="inline-flex  flex-shrink-0 justify-center items-center h-[2.875rem] w-[2.875rem] ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                                <input type="text" id="hs-leading-button-add-on-with-icon"
                                    name="hs-leading-button-add-on-with-icon"
                                    class=" ltr:!rounded-tl-none ltr:!rounded-bl-none ti-form-input rounded-none ltr:rounded-r-sm rtl:rounded-l-sm rtl:!rounded-tr-none rtl:!rounded-br-none focus:z-10">
                                </div>
                            </div>

                            <div>
                                <label for="hs-leading-button-add-on-with-leading-and-leading" class="sr-only">Label</label>
                                <div class="flex rounded-sm">
                                <button aria-label="button" type="button"
                                    class="inline-flex flex-shrink-0 justify-center items-center h-[2.875rem] w-[2.875rem] ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                    <svg class="h-4 w-4" xmlns="http://www.w3.org/2000/svg" width="16" height="16"
                                    fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </button>
                                <input type="text" id="hs-leading-button-add-on-with-leading-and-leading"
                                    name="hs-leading-button-add-on-with-leading-and-leading"
                                    class=" ti-form-input !rounded-none focus:z-10">
                                <span
                                    class="px-4 inline-flex items-center min-w-fit ltr:rounded-r-sm rtl:rounded-l-sm border ltr:border-l-0 rtl:border-r-0 border-gray-200 bg-gray-50 text-sm dark:bg-black/20 dark:border-white/10">
                                    <span class="text-sm text-gray-500 dark:text-white/70">http://</span>
                                </span>
                                </div>
                            </div>

                            <div>
                                <label for="hs-leading-button-add-on-with-icon-and-button" class="sr-only">Label</label>
                                <div class="relative flex rounded-sm">
                                <button type="button"
                                    class="py-2 px-3 inline-flex flex-shrink-0 justify-center items-center ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">Search</button>
                                <input type="text" id="hs-leading-button-add-on-with-icon-and-button"
                                    name="hs-leading-button-add-on-with-icon-and-button"
                                    class="rtl:!rounded-tr-none rtl:!rounded-br-none ltr:!rounded-tl-none ltr:!rounded-bl-none ti-form-input ltr:pr-11 rtl:pl-11 rounded-none ltr:rounded-r-sm rtl:rounded-l-sm focus:z-10">
                                <div
                                    class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none z-20 ltr:pr-4 rtl:pl-4">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </div>
                                </div>
                            </div>

                            <div>
                                <label for="hs-leading-button-add-on" class="sr-only">Label</label>
                                <div class="flex rounded-sm">
                                <button type="button"
                                    class="py-2 px-3 inline-flex flex-shrink-0 justify-center items-center gap-2 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                    Button
                                </button>
                                <input type="text" id="hs-leading-button-add-on" name="hs-leading-button-add-on"
                                    class="rtl:!rounded-tr-none rtl:!rounded-br-none ltr:!rounded-tl-none ltr:!rounded-bl-none ti-form-input rounded-none ltr:rounded-r-sm rtl:rounded-l-sm focus:z-10">
                                </div>
                            </div>

                            <div>
                                <label for="hs-leading-button-add-on-multiple-add-ons" class="sr-only">Label</label>
                                <div class="flex rounded-sm">
                                <button type="button"
                                    class="py-2 px-3 inline-flex flex-shrink-0 justify-center items-center gap-2 ltr:rounded-l-sm rtl:rounded-r-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                    Button
                                </button>
                                <button type="button"
                                    class="-mr-px py-2 px-3 inline-flex justify-center items-center gap-2 border font-medium bg-white text-gray-700 align-middle hover:bg-gray-50 focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm dark:bg-bodybg dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white">
                                    Button
                                </button>
                                <input type="text" id="hs-leading-button-add-on-multiple-add-ons"
                                    name="hs-leading-button-add-on-multiple-add-ons"
                                    class="rtl:!rounded-tr-none rtl:!rounded-br-none ltr:!rounded-tl-none ltr:!rounded-bl-none ti-form-input rounded-none ltr:rounded-r-sm rtl:rounded-l-sm focus:z-10">
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xxl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Search Box With Loading</h5>
                        </div>
                        <div class="box-body">
                            <div class="space-y-3">
                            <div>
                                <label for="hs-search-box-with-loading-1" class="ti-form-label">Search</label>
                                <div class="relative">
                                <input type="text" id="hs-search-box-with-loading-1" name="hs-search-box-with-loading-1"
                                    class="ti-form-input rounded-sm ltr:pl-11 rtl:pr-11 focus:z-10" placeholder="Input search">
                                <div
                                    class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none ltr:pl-4 rtl:pr-4">
                                    <div
                                    class="animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-primary rounded-full"
                                    role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                    </div>
                                </div>
                                </div>
                            </div>

                            <div>
                                <label for="hs-search-box-with-loading-2" class="ti-form-label">Search</label>
                                <div class="flex rounded-sm">
                                <input type="text" id="hs-search-box-with-loading-2" name="hs-search-box-with-loading-2"
                                    class="rtl:!rounded-tl-none rtl:!rounded-bl-none ltr:!rounded-tr-none ltr:!rounded-br-none ti-form-input rounded-none ltr:rounded-l-sm rtl:rounded-r-sm focus:z-10"
                                    placeholder="Input search">
                                <button type="button"
                                    class="inline-flex flex-shrink-0 justify-center items-center h-[2.875rem] w-[2.875rem] ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                    <span
                                    class="animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-white rounded-full"
                                    role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                    </span>
                                </button>
                                </div>
                            </div>

                            <div>
                                <label for="hs-search-box-with-loading-3" class="ti-form-label">Search</label>
                                <div class="flex rounded-sm">
                                <span
                                    class="px-4 inline-flex items-center min-w-fit ltr:!rounded-tr-none ltr:!rounded-br-none ltr:rounded-l-sm rtl:rounded-r-sm border ltr:border-r-0 rtl:border-l-0 border-gray-200 bg-gray-50 text-sm text-gray-500 dark:bg-black/20 dark:border-white/10 dark:text-white/70">http://</span>
                                <input type="text" id="hs-search-box-with-loading-3" name="hs-search-box-with-loading-3"
                                    class="rtl:!rounded-tl-none rtl:!rounded-bl-none ti-form-input !rounded-none focus:z-10"
                                    placeholder="Input search">
                                <button type="button"
                                    class="inline-flex flex-shrink-0 justify-center items-center h-[2.875rem] w-[2.875rem] ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                    <span
                                    class="animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-white rounded-full"
                                    role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                    </span>
                                </button>
                                </div>
                            </div>

                            <div>
                                <label for="hs-search-box-with-loading-4" class="ti-form-label">Search</label>
                                <div class="flex rounded-sm">
                                <input type="text" id="hs-search-box-with-loading-4" name="hs-search-box-with-loading-4"
                                    class="rtl:!rounded-tl-none rtl:!rounded-bl-none ltr:!rounded-tr-none ltr:!rounded-br-none ti-form-input rounded-none ltr:rounded-l-sm rtl:rounded-r-sm focus:z-10"
                                    placeholder="Input search">
                                <button type="button"
                                    class="py-2 px-3 inline-flex flex-shrink-0 justify-center items-center gap-2 ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                    <span
                                    class="animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-white rounded-full"
                                    role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                    </span>
                                    Search
                                </button>
                                </div>
                            </div>

                            <div>
                                <label for="hs-search-box-with-loading-5" class="ti-form-label">Search</label>
                                <div class="relative flex rounded-sm">
                                <input type="text" id="hs-search-box-with-loading-5" name="hs-search-box-with-loading-5"
                                    class="rtl:!rounded-tl-none rtl:!rounded-bl-none ltr:!rounded-tr-none ltr:!rounded-br-none rounded-none ti-form-input ltr:pl-11 rtl:pr-11 ltr:rounded-l-sm rtl:rounded-r-sm"
                                    placeholder="Input search">
                                <div
                                    class="absolute inset-y-0 ltr:left-0 rtl:right-0 flex items-center pointer-events-none ltr:pl-4 rtl:pr-4">
                                    <svg class="h-4 w-4 text-gray-500 dark:text-white/70" xmlns="http://www.w3.org/2000/svg"
                                    width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                    <path
                                        d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z" />
                                    </svg>
                                </div>
                                <button type="button"
                                    class="py-2 px-3 inline-flex flex-shrink-0 justify-center items-center gap-2 ltr:rounded-r-sm rtl:rounded-l-sm border border-transparent font-semibold bg-primary text-white hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 focus:ring-primary transition-all text-sm">
                                    <span
                                    class="animate-spin inline-block w-4 h-4 border-[3px] border-current border-t-transparent text-white rounded-full"
                                    role="status" aria-label="loading">
                                    <span class="sr-only">Loading...</span>
                                    </span>
                                    Search
                                </button>
                                </div>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-3 -->

@endsection

@section('scripts')
	


@endsection


@extends('layouts.master')

@section('styles')

        <!-- Color Picker Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/@simonwep/pickr/themes/nano.min.css')}}">
        <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Select2</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Forms <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Select2 
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

                    <div class="alert alert-solid-secondary alert-dismissible !text-[.9375rem] fade show mb-4 !rounded-md flex items-center justify-between"
                        id="dismiss-alert">
                        <div>
                            We Placed <strong class="text-black">Select2</strong> only in this page by using <strong
                                class="text-black">jquery</strong> cdn link.
                        </div>
                        <button type="button"
                            class="inline-flex  rounded-sm text-white focus:outline-none focus:ring-0 focus:ring-offset-0 rtl:pe-3"
                            data-hs-remove-element="#dismiss-alert">
                            <span class="sr-only">Dismiss</span>
                            <svg class="h-3 w-3" width="16" height="16" viewBox="0 0 16 16" fill="none"
                                xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
                                <path
                                    d="M0.92524 0.687069C1.126 0.486219 1.39823 0.373377 1.68209 0.373377C1.96597 0.373377 2.2382 0.486219 2.43894 0.687069L8.10514 6.35813L13.7714 0.687069C13.8701 0.584748 13.9882 0.503105 14.1188 0.446962C14.2494 0.39082 14.3899 0.361248 14.5321 0.360026C14.6742 0.358783 14.8151 0.38589 14.9468 0.439762C15.0782 0.493633 15.1977 0.573197 15.2983 0.673783C15.3987 0.774389 15.4784 0.894026 15.5321 1.02568C15.5859 1.15736 15.6131 1.29845 15.6118 1.44071C15.6105 1.58297 15.5809 1.72357 15.5248 1.85428C15.4688 1.98499 15.3872 2.10324 15.2851 2.20206L9.61883 7.87312L15.2851 13.5441C15.4801 13.7462 15.588 14.0168 15.5854 14.2977C15.5831 14.5787 15.4705 14.8474 15.272 15.046C15.0735 15.2449 14.805 15.3574 14.5244 15.3599C14.2437 15.3623 13.9733 15.2543 13.7714 15.0591L8.10514 9.38812L2.43894 15.0591C2.23704 15.2543 1.96663 15.3623 1.68594 15.3599C1.40526 15.3574 1.13677 15.2449 0.938279 15.046C0.739807 14.8474 0.627232 14.5787 0.624791 14.2977C0.62235 14.0168 0.730236 13.7462 0.92524 13.5441L6.59144 7.87312L0.92524 2.20206C0.724562 2.00115 0.611816 1.72867 0.611816 1.44457C0.611816 1.16047 0.724562 0.887983 0.92524 0.687069Z"
                                    fill="currentColor" />
                            </svg>
                        </button>
                    </div>

                    <!-- Start::row-1 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Basic Select2
                                    </div>
                                </div>
                                <div class="box-body">
                                    <select class="js-example-basic-single w-full" name="state">
                                        <option value="s-1">Selection-1</option>
                                        <option value="s-2">Selection-2</option>
                                        <option value="s-3">Selection-3</option>
                                        <option value="s-4">Selection-4</option>
                                        <option value="s-5">Selection-5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Multiple Select
                                    </div>
                                </div>
                                <div class="box-body">
                                    <select class="js-example-basic-multiple w-full" name="states[]" multiple="multiple">
                                        <option value="m-1" selected>Multiple-1</option>
                                        <option value="m-2">Multiple-2</option>
                                        <option value="m-3">Multiple-3</option>
                                        <option value="m-4">Multiple-4</option>
                                        <option value="m-5">Multiple-5</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Single Select With Placeholder
                                    </div>
                                </div>
                                <div class="box-body">
                                    <select class="js-example-placeholder-single js-states form-control">
                                        <option value="st-1" selected>Texas</option>
                                        <option value="st-2">Georgia</option>
                                        <option value="st-3">California</option>
                                        <option value="st-4">Washington D.C</option>
                                        <option value="st-5">Virginia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Multiple Select With Placeholder
                                    </div>
                                </div>
                                <div class="box-body">
                                    <select class="js-example-placeholder-multiple w-full js-states" multiple="multiple">
                                        <option value="fr-1">Texas</option>
                                        <option value="fr-2">Georgia</option>
                                        <option value="fr-3">Califonia</option>
                                        <option value="fr-4">Washington D.C</option>
                                        <option value="fr-5">Virginia</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Templating
                                    </div>
                                </div>
                                <div class="box-body">
                                    <select class="js-example-templating js-persons form-control">
                                        <option value="p-1">Andrew</option>
                                        <option value="p-2">Maya</option>
                                        <option value="p-3">Brodus Axel</option>
                                        <option value="p-4">Goldhens</option>
                                        <option value="p-5">Angelina</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Templating Selection
                                    </div>
                                </div>
                                <div class="box-body">
                                    <select class="select2-client-search form-control">
                                        <option value="p-1" selected>Andrew</option>
                                        <option value="p-2">Maya</option>
                                        <option value="p-3">Brodus Axel</option>
                                        <option value="p-4">Goldhens</option>
                                        <option value="p-5">Angelina</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Max Selections Limiting
                                    </div>
                                </div>
                                <div class="box-body">
                                    <select class="js-example-basic-multiple-limit-max form-control" multiple="multiple">
                                        <option value="p-1" selected>Andrew</option>
                                        <option value="p-2" selected>Maya</option>
                                        <option value="p-3">Brodus Axel</option>
                                        <option value="p-4">Goldhens</option>
                                        <option value="p-5">Angelina</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">
                                        Disabling a Select2 control
                                    </div>
                                </div>
                                <div class="box-body flex flex-col gap-3">
                                    <select class="js-example-disabled mb-3" name="state">
                                        <option value="s-1">Selection-1</option>
                                        <option value="s-2">Selection-2</option>
                                        <option value="s-3">Selection-3</option>
                                        <option value="s-4">Selection-4</option>
                                        <option value="s-5">Selection-5</option>
                                    </select>
                                    <select class="js-example-disabled-multi w-full" name="state" multiple="multiple">
                                        <option value="s-1" selected>Selection-1</option>
                                        <option value="s-2">Selection-2</option>
                                        <option value="s-3">Selection-3</option>
                                        <option value="s-4">Selection-4</option>
                                        <option value="s-5">Selection-5</option>
                                    </select>
                                    <div>
                                        <button class="ti-btn ti-btn-primary js-programmatic-enable">Enable</button>
                                        <button class="ti-btn ti-btn-primary-full js-programmatic-disable">Disable</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

@endsection

@section('scripts')
	
        <!-- Jquery Cdn -->
        <script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

        <!-- Select2 Cdn -->
        {{-- <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script> --}}

        <!-- Internal Select-2.js -->
        @vite('resources/assets/js/select2.js')

@endsection

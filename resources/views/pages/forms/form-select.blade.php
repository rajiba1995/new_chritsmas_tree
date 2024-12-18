
@extends('layouts.master')

@section('styles')

        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

        <!-- Tom Select Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/tom-select/css/tom-select.default.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Form Select</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Form Elements <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Form Select 
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
                    <div class="lg:col-span-6 xl:!col-span-6 xxl:!col-span-3 col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Default Select</h5>
                        </div>
                        <div class="box-body">
                            <select class="ti-form-select rounded-sm !py-2 !px-3">
                            <option selected>Open this select menu</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="lg:col-span-6 xl:!col-span-6 xxl:!col-span-3 col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Pilled Select</h5>
                        </div>
                        <div class="box-body">
                            <select class="ti-form-select  !py-2 !px-3 rounded-sm">
                            <option selected>Open this select menu</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:!col-span-3 xl:!col-span-6">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Disabled Select</h5>
                        </div>
                        <div class="box-body">
                            <select class="opacity-70 pointer-events-none ti-form-select rounded-sm !py-2 !px-3" disabled>
                            <option selected>Open this select menu</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6 xxl:!col-span-3 xl:!col-span-6">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Select With Hidden Label</h5>
                        </div>
                        <div class="box-body">
                            <label for="hs-hidden-select" class="sr-only">Label</label>
                            <select id="hs-hidden-select" class="ti-form-select rounded-sm !py-2 !px-3">
                            <option selected>Open this select menu</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 md:col-span-6 xl:!col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Select With Label</h5>
                        </div>
                        <div class="box-body">
                            <label for="hs-select-label" class="ti-form-select rounded-sm !py-2 !px-3-label">Label</label>
                            <select id="hs-select-label" class="ti-form-select rounded-sm !py-2 !px-3">
                            <option selected>Open this select menu</option>
                            <option>1</option>
                            <option>2</option>
                            <option>3</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 md:col-span-6 xl:!col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Select Sizes</h5>
                        </div>
                        <div class="box-body">
                            <div class="space-y-3">
                            <select class="ti-form-select rounded-sm !py-2 !px-3">
                                <option selected>Open this select menu</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>

                            <select class="ti-form-select rounded-sm !py-2 !px-3 sm:p-4">
                                <option selected>Open this select menu</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>

                            <select class="ti-form-select rounded-sm !py-2 !px-3 sm:p-5">
                                <option selected>Open this select menu</option>
                                <option>1</option>
                                <option>2</option>
                                <option>3</option>
                            </select>
                            </div>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 xl:col-span-4">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Select With Validation States</h5>
                        </div>
                        <div class="box-body">
                            <div class="space-y-3">
                            <div>
                                <label for="select-1" class="ti-form-select rounded-sm !py-2 !px-3-label">Label</label>
                                <div class="relative">
                                <select id="select-1" class="ti-form-select rounded-sm !py-2 !px-3 ltr:pr-16 rtl:pl-16 !border-red focus:border-red focus:ring-red">
                                    <option selected>Open this select menu</option>
                                    <option>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none ltr:pr-8 rtl:pl-8">
                                    <svg class="h-4 w-4 text-red" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                    <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                    </svg>
                                </div>
                                </div>
                                <p class="text-sm text-red mt-2">Please select a valid state.</p>
                            </div>

                            <div>
                                <label for="select-2" class="ti-form-select rounded-sm !py-2 !px-3-label">Label</label>
                                <div class="relative">
                                <select id="select-2" class="ti-form-select rounded-sm !py-2 !px-3 ltr:pr-16 rtl:pl-16 !border-green focus:border-green focus:ring-green">
                                    <option>Open this select menu</option>
                                    <option selected>1</option>
                                    <option>2</option>
                                    <option>3</option>
                                </select>
                                <div class="absolute inset-y-0 ltr:right-0 rtl:left-0 flex items-center pointer-events-none ltr:pr-8 rtl:pl-8">
                                    <svg class="h-4 w-4 text-green" width="16" height="16" viewBox="0 0 16 16" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M13.6091 3.41829C13.8594 3.68621 14 4.04952 14 4.42835C14 4.80718 13.8594 5.1705 13.6091 5.43841L6.93313 12.5817C6.68275 12.8495 6.3432 13 5.98916 13C5.63511 13 5.29556 12.8495 5.04518 12.5817L2.3748 9.72439C2.13159 9.45494 1.99701 9.09406 2.00005 8.71947C2.00309 8.34488 2.14351 7.98656 2.39107 7.72167C2.63862 7.45679 2.9735 7.30654 3.32359 7.30328C3.67367 7.30002 4.01094 7.44403 4.26276 7.70427L5.98916 9.55152L11.7211 3.41829C11.9715 3.15046 12.3111 3 12.6651 3C13.0191 3 13.3587 3.15046 13.6091 3.41829Z" fill="currentColor"/>
                                    </svg>
                                </div>
                                </div>
                                <p class="text-sm text-green mt-2">Looks good!</p>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12  md:col-span-6 xl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Tom Select Input</h5>
                        </div>
                        <div class="box-body">
                            <input type="text" class="ti-input" id="input-tags" autocomplete="off" placeholder="  Enter the Text">
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12  md:col-span-6 xl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Basic Tom Select</h5>
                        </div>
                        <div class="box-body">
                            <select class="ti-form-select rounded-sm !py-2 !px-3 !p-0" id="select-beast" autocomplete="off">
                            <option value="">Select a person...</option>
                            <option value="4">Thomas Edison</option>
                            <option value="1">Nikola</option>
                            <option value="3">Nikola Tesla</option>
                            <option value="5">Arnold Schwarzenegger</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12  md:col-span-6 xl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Disabled Tom Select</h5>
                        </div>
                        <div class="box-body">
                            <select class="ti-form-select rounded-sm !py-2 !px-3 !p-0" id="select-beast-disabled" autocomplete="off" disabled>
                            <option value="">Select a person...</option>
                            <option value="4">Thomas Edison</option>
                            <option value="1">Nikola</option>
                            <option value="3" selected>Nikola Tesla</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12  md:col-span-6 xl:!col-span-3">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Multiple Tom Select</h5>
                        </div>
                        <div class="box-body">
                            <select class="ti-form-select rounded-sm !py-2 !px-3 !p-0"  id="select-state" name="state[]" multiple autocomplete="off">
                            <option value="">Select a state...</option>
                            <option value="AL">Alabama</option>
                            <option value="AK">Alaska</option>
                            <option value="AZ">Arizona</option>
                            <option value="AR">Arkansas</option>
                            <option value="CA" selected>California</option>
                            <option value="CO">Colorado</option>
                            <option value="CT">Connecticut</option>
                            <option value="DE">Delaware</option>
                            <option value="DC">District of Columbia</option>
                            <option value="FL">Florida</option>
                            <option value="GA">Georgia</option>
                            <option value="HI">Hawaii</option>
                            <option value="ID">Idaho</option>
                            <option value="IL">Illinois</option>
                            <option value="IN">Indiana</option>
                            <option value="IA">Iowa</option>
                            <option value="KS">Kansas</option>
                            <option value="KY">Kentucky</option>
                            <option value="LA">Louisiana</option>
                            <option value="ME">Maine</option>
                            <option value="MD">Maryland</option>
                            <option value="MA">Massachusetts</option>
                            <option value="MI">Michigan</option>
                            <option value="MN">Minnesota</option>
                            <option value="MS">Mississippi</option>
                            <option value="MO">Missouri</option>
                            <option value="MT">Montana</option>
                            <option value="NE">Nebraska</option>
                            <option value="NV">Nevada</option>
                            <option value="NH">New Hampshire</option>
                            <option value="NJ">New Jersey</option>
                            <option value="NM">New Mexico</option>
                            <option value="NY">New York</option>
                            <option value="NC">North Carolina</option>
                            <option value="ND">North Dakota</option>
                            <option value="OH">Ohio</option>
                            <option value="OK">Oklahoma</option>
                            <option value="OR">Oregon</option>
                            <option value="PA">Pennsylvania</option>
                            <option value="RI">Rhode Island</option>
                            <option value="SC">South Carolina</option>
                            <option value="SD">South Dakota</option>
                            <option value="TN">Tennessee</option>
                            <option value="TX">Texas</option>
                            <option value="UT">Utah</option>
                            <option value="VT">Vermont</option>
                            <option value="VA">Virginia</option>
                            <option value="WA">Washington</option>
                            <option value="WV">West Virginia</option>
                            <option value="WI">Wisconsin</option>
                            <option value="WY">Wyoming</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-4 -->
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Choices Multiple Select</h5>
                        </div>
                        <div class="box-body">
                            <label class="ti-form-select rounded-sm !py-2 !px-3-label">Default Choices Select</label>
                            <select class="ti-form-select rounded-sm !py-2 !px-3" data-trigger name="choices-multiple-default" id="choices-multiple-default" multiple>
                            <option value="Choice 1" selected>Choice 1</option>
                            <option value="Choice 2">Choice 4</option>
                            <option value="Choice 3">Choice 5</option>
                            <option value="Choice 4" disabled>Choice 6</option>
                            </select>
                            <label class="ti-form-select rounded-sm !py-2 !px-3-label">With Remove Button</label>
                            <select class="ti-form-select rounded-sm !py-2 !px-3" name="choices-multiple-remove-button" id="choices-multiple-remove-button" multiple>
                            <option value="Choice 1" selected>Choice 1</option>
                            <option value="Choice 2">Choice 2</option>
                            <option value="Choice 3">Choice 3</option>
                            <option value="Choice 4">Choice 4</option>
                            </select>
                            <label class="ti-form-select rounded-sm !py-2 !px-3-label">Option groups</label>
                            <select class="ti-form-select rounded-sm !py-2 !px-3" name="choices-multiple-groups" id="choices-multiple-groups" multiple>
                                <option value="">Choose a city</option>
                                <optgroup label="UK">
                                <option value="London">London</option>
                                <option value="Manchester">Manchester</option>
                                <option value="Liverpool">Liverpool</option>
                                </optgroup>
                                <optgroup label="FR">
                                <option value="Paris">Paris</option>
                                <option value="Lyon">Lyon</option>
                                <option value="Marseille">Marseille</option>
                                </optgroup>
                                <optgroup label="DE" disabled>
                                <option value="Hamburg">Hamburg</option>
                                <option value="Munich">Munich</option>
                                <option value="Berlin">Berlin</option>
                                </optgroup>
                                <optgroup label="US">
                                <option value="New York">New York</option>
                                <option value="Washington" disabled>Washington</option>
                                <option value="Michigan">Michigan</option>
                                </optgroup>
                                <optgroup label="SP">
                                <option value="Madrid">Madrid</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Malaga">Malaga</option>
                                </optgroup>
                                <optgroup label="CA">
                                <option value="Montreal">Montreal</option>
                                <option value="Toronto">Toronto</option>
                                <option value="Vancouver">Vancouver</option>
                                </optgroup>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Single Select</h5>
                        </div>
                        <div class="box-body">
                            <label class="ti-form-select rounded-sm !py-2 !px-3-label">Default Single Choices Select</label>
                            <select class="ti-form-select rounded-sm !py-2 !px-3" data-trigger name="choices-single-default" id="choices-single-default">
                            <option value="">This is a placeholder</option>
                            <option value="Choice 1">Choice 1</option>
                            <option value="Choice 2">Choice 2</option>
                            <option value="Choice 3">Choice 3</option>
                            </select>
                            <label class="ti-form-select rounded-sm !py-2 !px-3-label">Option groups</label>
                            <select class="ti-form-select rounded-sm !py-2 !px-3" data-trigger name="choices-single-groups" id="choices-single-groups">
                            <option value="">Choose a city</option>
                            <optgroup label="UK">
                                <option value="London">London</option>
                                <option value="Manchester">Manchester</option>
                                <option value="Liverpool">Liverpool</option>
                            </optgroup>
                            <optgroup label="FR">
                                <option value="Paris">Paris</option>
                                <option value="Lyon">Lyon</option>
                                <option value="Marseille">Marseille</option>
                            </optgroup>
                            <optgroup label="DE" disabled>
                                <option value="Hamburg">Hamburg</option>
                                <option value="Munich">Munich</option>
                                <option value="Berlin">Berlin</option>
                            </optgroup>
                            <optgroup label="US">
                                <option value="New York">New York</option>
                                <option value="Washington" disabled>Washington</option>
                                <option value="Michigan">Michigan</option>
                            </optgroup>
                            <optgroup label="SP">
                                <option value="Madrid">Madrid</option>
                                <option value="Barcelona">Barcelona</option>
                                <option value="Malaga">Malaga</option>
                            </optgroup>
                            <optgroup label="CA">
                                <option value="Montreal">Montreal</option>
                                <option value="Toronto">Toronto</option>
                                <option value="Vancouver">Vancouver</option>
                            </optgroup>
                            </select>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-4 -->

                    <!-- Start::row-5 -->
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Passing Through Options</h5>
                        </div>
                        <div class="box-body">
                            <input class="ti-form-input" id="choices-text-preset-values" type="text" value="three">
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title"> Email Address Only</h5>
                        </div>
                        <div class="box-body">
                            <input class="ti-form-input" id="choices-text-email-filter" type="text">
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-5 -->

                    <!-- Start::row-6 -->
                    <div class="grid grid-cols-12 gap-x-6">
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title"> Options added via config with no search</h5>
                        </div>
                        <div class="box-body">
                            <select class="ti-form-select rounded-sm !py-2 !px-3" name="choices-single-no-search" id="choices-single-no-search">
                            <option value="0">Zero</option>
                            </select>
                        </div>
                        </div>
                    </div>
                    <div class="col-span-12 lg:col-span-6">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title"> Passing Unique Values</h5>
                        </div>
                        <div class="box-body">
                            <input class="ti-form-input custom class" id="choices-text-unique-values" type="text" value="child-1, child-2">
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-6 -->

@endsection

@section('scripts')
	
        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>
        @vite('resources/assets/js/choices.js')

        <!-- Tom Select JS -->
        <script src="{{asset('build/assets/libs/tom-select/js/tom-select.complete.min.js')}}"></script>
        @vite('resources/assets/js/tom-select.js')

@endsection

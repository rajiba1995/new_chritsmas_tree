
@extends('layouts.master')

@section('styles')

        <!-- Tabulator Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/tabulator-tables/css/tabulator.min.css')}}">

        <!-- Choices Css -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/choices.js/public/assets/styles/choices.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Data Tabels</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Tabels <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Data Tabels 
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
                    <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Basic DataTable</h5>
                        </div>
                        <div class="box-body">
                            <div class="overflow-auto table-bordered">
                            <div id="basic-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-1 -->

                    <!-- Start::row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Sortable DataTable</h5>
                        </div>
                        <div class="box-body space-y-3">
                            <div class="sortable-data">
                            <div class="sm:grid grid-cols-12 gap-6 space-y-2 sm:space-y-0">
                                <div class="col-span-12 lg:!col-span-2 sm:col-span-3">
                                <select id="sort-field" class="ti-form-select " data-trigger>
                                    <option value="name" selected>Name</option>
                                    <option value="progress">Position</option>
                                    <option value="gender">Office</option>
                                    <option value="rating">Age</option>
                                    <option value="col">Salary</option>
                                </select>
                                </div>
                                <div class="col-span-12 lg:!col-span-2 sm:col-span-3">
                                <select id="sort-direction" class="ti-form-select" data-trigger>
                                    <option value="asc" selected>asc</option>
                                    <option value="desc">desc</option>
                                </select>
                                </div>
                                <button type="button" class="ti-btn ti-btn-primary py-2 col-span-12 lg:!col-span-2 sm:col-span-3" id="sort-trigger">Trigger Sort</button>
                            </div>
                            </div>
                            <div class="overflow-hidden table-bordered">
                            <div id="sort-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-2 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Reactivity DataTable</h5>
                        </div>
                        <div class="box-body space-y-3">
                            <div class="reactivity-data">
                            <button type="button" class="ti-btn ti-btn-primary" id="reactivity-add">Add New Row</button>
                            <button type="button" class="ti-btn ti-btn-primary" id="reactivity-delete">Remove Row</button>
                            <button type="button" class="ti-btn ti-btn-primary" id="clear">Empty the table</button>
                            <button type="button" class="ti-btn ti-btn-primary" id="reset">Reset</button>
                            </div>
                            <div class="overflow-hidden table-bordered">
                            <div id="reactivity-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-3 -->

                    <!-- Start::row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                    <div class="col-span-12">
                        <div class="box">
                        <div class="box-header">
                            <h5 class="box-title">Download DataTable</h5>
                        </div>
                        <div class="box-body space-y-3">
                            <div class="download-data">
                                <button type="button" class="ti-btn ti-btn-primary" id="download-csv">Download CSV</button>
                                <button type="button" class="ti-btn ti-btn-primary" id="download-json">Download JSON</button>
                                <button type="button" class="ti-btn ti-btn-primary" id="download-xlsx">Download XLSX</button>
                                <button type="button" class="ti-btn ti-btn-primary" id="download-pdf">Download PDF</button>
                                <button type="button" class="ti-btn ti-btn-primary" id="download-html">Download HTML</button>
                            </div>
                            <div class="overflow-hidden table-bordered">
                            <div id="download-table" class="ti-custom-table ti-striped-table ti-custom-table-hover"></div>
                            </div>
                        </div>
                        </div>
                    </div>
                    </div>
                    <!-- End::row-3 -->

@endsection

@section('scripts')
	
        <!-- Tabulator JS -->
        <script src="{{asset('build/assets/libs/tabulator-tables/js/tabulator.min.js')}}"></script>

        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- XLXS JS -->
        <script src="{{asset('build/assets/libs/xlsx/xlsx.full.min.js')}}"></script>

        <!-- JSPDF JS -->
        <script src="{{asset('build/assets/libs/jspdf/jspdf.umd.min.js')}}"></script>
        <script src="{{asset('build/assets/libs/jspdf-autotable/jspdf.plugin.autotable.min.js')}}"></script>

        <!-- Tabulator Custom JS -->
        @vite('resources/assets/js/datatable.js')

@endsection

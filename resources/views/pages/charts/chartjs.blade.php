
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">ChatJs</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Charts <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">ChatJs 
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Chartjs Line Chart</div>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-line" class="chartjs-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Chartjs Bar Chart</div>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-bar" class="chartjs-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Chartjs Pie Chart</div>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-pie" class="chartjs-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Chartjs Doughnut Chart</div>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-doughnut" class="chartjs-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Chartjs Mixed Chart</div>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-mixed" class="chartjs-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Chartjs Polar Chart</div>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-polar" class="chartjs-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Chartjs Radial Chart</div>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-radar" class="chartjs-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Chartjs Scatter Chart</div>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-scatter" class="chartjs-chart"></canvas>
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header">
                                    <div class="box-title">Chartjs Bubble Chart</div>
                                </div>
                                <div class="box-body">
                                    <canvas id="chartjs-bubble" class="chartjs-chart"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	
        <!-- Chartjs Chart JS -->
        <script src="{{asset('build/assets/libs/chart.js/chart.min.js')}}"></script>

        <!-- Imternal Chartjs JS -->
        @vite('resources/assets/js/chartjs-charts.js')

@endsection

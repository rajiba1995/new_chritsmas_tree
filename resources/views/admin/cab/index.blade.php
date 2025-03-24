@extends('layouts.master')
@section('title', $pageTitle) <!-- This sets the page title dynamically -->
@section('content')
<div class="md:flex block items-center justify-between mb-6 mt-1  page-header-breadcrumb">
    <div class="my-auto">
        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0 uppercase">{{$childHeader}}</h5>
        <nav>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                        href="javascript:void(0);"> {{$parentHeader}} <i
                            class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                    </a> </li>
                <li class="text-[12px]"> <a class="flex items-center text-textmuted" href="javascript:void(0);">{{$childHeader}}
                    </a> </li>
            </ol>
        </nav>
    </div>
</div>
    <!-- Start:: row-10 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-8 col-span-12">
        <div class="box custom-box">
            <div class="box-body">
            <form method="GET">
                    <div class="input-group !mb-0"> 
                        <input type="text" name="cab" class="form-control form-control-sm" placeholder="Search by cab.."> 
                        <x-form-submit-button text="Search" class="change-text-button ti-btn ripple ti-btn-primary-full !mb-0" />
                        <a href="{{route('admin.cab.index')}}" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0">
                            <i class="mdi mdi-refresh"></i>
                        </a>
                    </div>
                </form>
                <div class="table-responsive">
                    <x-global-table 
                        :items="$cabs" 
                        :fields="['image', 'cab_title', 'Capacity', 'status']" 
                        dataType="cab" 
                        :extra="[]"
                    />
                    {{ $cabs->links() }}
                </div>
            </div>
        </div>
    </div>
    <div class="xl:col-span-4 col-span-12">
    @if(isset($update_item))
        <div class="bg-custom_card">
            <div class="box-header">
                <h6 class="uppercase text-black">Update {{$childHeader}}</h6>
            </div>
            <div class="box-body">
                <form action="{{route('admin.cab.update')}}" method="post" id="update_plan" enctype="multipart/form-data">
                    @csrf
                    <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <x-form-field 
                            type="text" 
                            name="title" 
                            label="Cab Title" 
                            :options="[]"
                            :value="old('title', $update_item->title ?? '')"
                            />
                        @error('title')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 mt-0">
                        <x-form-field 
                            type="number" 
                            name="capacity" 
                            label="Capacity(Seat)"
                            :options="[]"
                            :value="old('capacity', $update_item->capacity?? '')"
                            />
                            <span class="text-gray-500 text-xs">Just add the number of seats.</span><br>
                        @error('capacity')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>

                    <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 my-2">
                        <label for="image" class="block text-gray-700 font-medium">Image</label>
                        <div>
                            <label for="image" class="sr-only">Choose file</label>
                            <input type="file" name="image" id="image" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/50 file:border-0  file:bg-light file:me-4 file:py-2 file:px-4 dark:file:bg-black/20 dark:file:text-white/50">
                        </div>
                        <span class="text-gray-500 text-xs">Expected size:	130 × 80 px Approx</span><br>
                        @error('image')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                        <!-- Dynamic plan_item fields container -->
                    
                    <div class="flex justify-end">
                        <x-input-field type="hidden" name="id" value="{{$update_item->id}}" />
                        <a href="{{route('admin.cab.index')}}" class="ti-btn ti-btn-danger-full !py-1 !px-2 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-caret-left"></i>Back</a>
                        <x-form-submit-button text="Update" class="change-text-button ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave me-[0.375rem]" />
                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="box custom-box">
            <div class="box-header">
                <h6 class="uppercase">New Cab</h6>
            </div>
            <div class="box-body">
                <form action="{{route('admin.cab.store')}}" method="post" enctype="multipart/form-data">
                    @csrf
                    <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <x-form-field 
                            type="text" 
                            name="title" 
                            label="Cab Title" 
                            :options="[]"
                            :value="old('title')"
                            />
                        @error('title')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <label for="capacity" class="block text-gray-700 font-medium">Capacity</label>
                        <input type="number" class="form-control" name="capacity" id="capacity" value="{{old('capacity')}}" placeholder="Enter capacity">
                        <span class="text-gray-500 text-xs">Just add the number of seats.</span><br>
                        @error('capacity')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12 my-2">
                        <label for="image" class="block text-gray-700 font-medium">Image</label>
                        <div>
                            <label for="image" class="sr-only">Choose file</label>
                            <input type="file" name="image" id="image" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10 dark:text-white/50 file:border-0  file:bg-light file:me-4 file:py-2 file:px-4 dark:file:bg-black/20 dark:file:text-white/50">
                        </div>
                        <span class="text-gray-500 text-xs">Expected size:	130 × 80 px Approx</span><br>
                        @error('image')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                    <div class="flex justify-end">
                        <x-form-submit-button text="Submit" class="change-text-button ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave me-[0.375rem]" />
                    </div>
                   
                </form>
            </div>
        </div>
    @endif
    </div>
</div>
<!-- End:: row-10 -->
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection


@extends('layouts.master')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
@endsection
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
    {{-- <div class="ti-btn-list">
        <a href="{{route('admin.state.index')}}" class="ti-btn ti-btn-danger-full !py-1 !px-2 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-caret-left"></i>Back</a>
    </div> --}}
</div>
    <!-- Start:: row-10 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-8 col-span-12">
        <div class="box custom-box">
            <div class="box-body">
            <form method="GET">
                    <div class="input-group !mb-0"> 
                        
                        <input type="text" name="destination" class="form-control form-control-sm" placeholder="Search by division.."> 
                        <x-form-submit-button text="Search" class="change-text-button ti-btn ripple ti-btn-primary-full !mb-0" />
                        <a href="{{route('admin.state.index')}}" class="ti-btn ti-btn-danger-full text-white ti-btn-icon me-2 !mb-0">
                            <i class="mdi mdi-refresh"></i>
                        </a>
                    </div>
                </form>
                <div class="table-responsive">
                    <x-global-table 
                        :items="$states" 
                        :fields="['state_name','Country', 'status']" 
                        dataType="states" 
                        :extra="[]"
                    />
                    {{ $states->links() }}
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
                <form action="{{route('admin.state.update')}}" method="post" id="update_plan">
                    @csrf
                    <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <x-form-field 
                            type="select" 
                            name="country_code_id" 
                            label="Country" 
                            :options="$countries->pluck('country_name', 'id')" 
                            :value="old('country_code_id', $update_item->country_code_id ?? '')"
                            class="js-example-basic-single"
                        />
                        @error('country_code_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    
                    <x-form-field 
                        type="text" 
                        name="name" 
                        label="Name" 
                        :options="[]"
                        :value="old('name', $update_item->name ?? '')"
                        />
                    @error('name')
                        <span class="text-red-500 text-sm">{{ $message }}</span>
                    @enderror
                    </div>
                        <!-- Dynamic plan_item fields container -->
                    
                    <div class="flex justify-end">
                        <x-input-field type="hidden" name="id" value="{{$update_item->id}}" />
                        <a href="{{route('admin.state.index')}}" class="ti-btn ti-btn-danger-full !py-1 !px-2 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-caret-left"></i>Back</a>
                        <x-form-submit-button text="Update" class="change-text-button ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave me-[0.375rem]" />
                    </div>
                </form>
            </div>
        </div>
    @else
        <div class="box custom-box">
            <div class="box-header">
                <h6 class="uppercase">New Destination</h6>
            </div>
            <div class="box-body">
                <form action="{{route('admin.state.store')}}" method="post">
                    @csrf
                    <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                    <x-form-field 
                            type="select" 
                            name="country_code_id" 
                            label="Country" 
                            :options="$countries->pluck('country_name', 'id')" 
                            :value="old('country_code_id', $update_item->country_code_id ?? '')"
                            class="js-example-basic-single"
                            
                        />
                        @error('country_code_id')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    
                    <x-form-field 
                            type="text" 
                            name="name" 
                            label="Name" 
                            :options="[]"
                            :value="old('name')"
                            />
                        @error('name')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                        <div class="flex justify-end">
                            <x-form-submit-button text="Submit" class="change-text-button ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave me-[0.375rem]" />
                        </div>
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
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<!-- Select2 Cdn -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@vite('resources/assets/js/select2.js')
@endsection


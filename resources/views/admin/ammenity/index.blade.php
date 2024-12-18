@extends('layouts.master')
@section('styles')
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
        <a href="{{route('admin.ammenity.index')}}" class="ti-btn ti-btn-danger-full !py-1 !px-2 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-caret-left"></i>Back</a>
    </div> --}}
</div>
    <!-- Start:: row-10 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-8 col-span-12">
        <div class="box custom-box">
            <div class="box-body">
                
                <div class="table-responsive">
                    <x-global-table 
                        :items="$ammenities" 
                        :fields="['ammenity_name', 'status']" 
                        dataType="ammenities" 
                        :extra="[]"
                    />
                    {{ $ammenities->links() }}
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
                        <form action="{{route('admin.ammenity.update')}}" method="post" id="update_plan">
                            @csrf
                            <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <x-form-field 
                                type="text" 
                                name="name" 
                                label="Name" 
                                :options="[]"
                                :value="old('title', $update_item->name ?? '')"
                                />
                            @error('name')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                            </div>
                                <!-- Dynamic plan_item fields container -->
                            
                            <div class="flex justify-end">
                                <x-input-field type="hidden" name="id" value="{{$update_item->id}}" />
                                <a href="{{route('admin.ammenity.index')}}" class="ti-btn ti-btn-danger-full !py-1 !px-2 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-caret-left"></i>Back</a>
                                <x-form-submit-button text="Update" class="change-text-button ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave me-[0.375rem]" />
                            </div>
                        </form>
                    </div>
                </div>
            @else
                <div class="box custom-box">
                    <div class="box-header">
                        <h6 class="uppercase">{{$childHeader}}</h6>
                    </div>
                    <div class="box-body">
                        <form action="{{route('admin.ammenity.store')}}" method="post">
                            @csrf
                            <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
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
                                    <x-form-submit-button text="Submit" class="ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave me-[0.375rem]" />
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
<script>
  

    document.addEventListener('livewire:load', function () {
        Livewire.on('recordUpdated', () => {
            window.dispatchEvent(new CustomEvent('close-update-modal'));
            alert('Record updated successfully!');
        });
    });
</script>
@endsection


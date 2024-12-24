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
 
</div>
    <!-- Start:: row-10 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-8 col-span-12">
        <div class="box custom-box">
            <div class="box-body">
            <form method="GET" action="{{ route('admin.country.index') }}" class="mb-4">
                <div class="flex items-center">
                    <input 
                        type="text" 
                        name="country" 
                        value="{{ request('country') }}" 
                        placeholder="Search by Country Code or Name" 
                        class="form-control"
                    >
                    <button type="submit" class="btn btn-primary ml-2">Search</button>
                </div>
            </form>
            <div class="table-responsive">
                @if($country_codes->isEmpty())
                    <p class="text-center mt-4">No country codes found.</p>
                @else
                    <x-global-table 
                        :items="$country_codes" 
                        :fields="['country_code', 'country_name', 'phone_code','phone_length']" 
                        dataType="country_codes" 
                        :extra="[]"
                    />
                    {{ $country_codes->links() }}
                @endif
            </div>

            </div>
        </div>
    </div>
</div>
<!-- End:: row-10 -->
@endsection

@section('scripts')
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

@endsection


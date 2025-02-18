@extends('layouts.master')
@section('styles')
<link rel="stylesheet" href="{{ asset('build/assets/libs/dragula/dragula.min.css') }}">
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
                <div class="table-responsive">
                    <livewire:seasion-plan-table :seasionPlans="$data" />
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
                <form action="{{route('admin.hotel_seasion_plan_update')}}" method="post" id="update_plan">
                    @csrf
                    <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                        <x-form-field 
                        type="text" 
                        name="title" 
                        label="Title" 
                        :options="[]" 
                        :value="old('title', $update_item->title ?? '')"
                    />                    
                        @error('title')
                            <span class="text-red-500 text-sm">{{ $message }}</span>
                        @enderror
                    </div>
                     <!-- Dynamic plan_item fields container -->
                     <div id="plan-items-container">
                        @if(old('plan_item'))
                                @php
                                    $planItems = old('plan_item', ['']); // Default to one empty item if no old values
                                @endphp
                            
                            @foreach($planItems as $index => $item)
                                <div class="grid grid-cols-12 gap-2 mt-1">
                                    <div class="col-span-10">
                                        <input type="text" name="plan_item[]" class="form-control form-control-sm" placeholder="Enter Plan Item" value="{{$item}}">
                                        @error("plan_item.$index")
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    @if($index==0)
                                        <div class="col-span-2 flex items-end">
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-secondary !py-1 !px-2 ti-btn-wave !mb-5"><i class="ri-add-circle-line add-more-btn"></i></a>
                                        </div>
                                    @else
                                        <div class="col-span-2 flex items-end">
                                            <a href="javascript:void(0);" class="ti-btn ti-btn-danger !py-1 !px-2 ti-btn-wave !mb-5"><i class="ri-delete-back-2-line remove-btn"></i></a>
                                        </div>
                                    @endif
                                </div>
                            @endforeach
                        @else
                            @php
                                $value = explode(', ',$update_item->plan_item);
                            @endphp
                            <div class="mt-4 grid grid-cols-12 gap-4">
                                <!-- First plan_item input and Add More button -->
                                <div class="col-span-10">
                                    <x-form-field 
                                        type="text" 
                                        name="plan_item[]" 
                                        label="Plan Item" 
                                        :options="[]" 
                                         :value="old('plan_item.0', $value[0] ?? '')"
                                    />
                                    @error('plan_item.*')
                                        <span class="text-red-500 text-sm">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-span-2 flex items-end">
                                    <a href="javascript:void(0);" class="ti-btn ti-btn-secondary !py-1 !px-2 ti-btn-wave !mb-5"><i class="ri-add-circle-line add-more-btn"></i></a>
                                </div>
                            </div>
                            @foreach($value as $index => $item)
                                @if($index > 0)
                                <div class="grid grid-cols-12 gap-2 mt-1">
                                    <div class="col-span-10">
                                        <input type="text" name="plan_item[]" class="form-control form-control-sm" placeholder="Enter Plan Item" value="{{$item}}">
                                        @error("plan_item.$index")
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 flex items-end">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-danger !py-1 !px-2 ti-btn-wave !mb-5"><i class="ri-delete-back-2-line remove-btn"></i></a>
                                    </div>
                                </div>
                                @endif
                            @endforeach
                        @endif
                    </div>
                    <div class="flex justify-end">
                        <x-input-field type="hidden" name="id" value="{{$update_item->id}}" />
                        <a href="{{route('admin.hotel_seasion_plan')}}" class="ti-btn ti-btn-danger-full !py-1 !px-2 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-caret-left"></i>Back</a>
                        <x-form-submit-button text="Update" class="change-text-button ti-btn ti-btn-primary-full !py-1 !px-2 ti-btn-wave me-[0.375rem]" />
                    </div>
                </form>
            </div>
        </div>
        @else
            <div class="box custom-box">
                <div class="box-header">
                    <h6 class="uppercase">New {{$childHeader}}</h6>
                </div>
                <div class="box-body">
                    <form action="{{route('admin.hotel_seasion_plan_store')}}" method="post" id="create_plan">
                        @csrf
                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                            <x-form-field 
                                type="text" 
                                name="title" 
                                label="title" 
                                :options="[]"
                                :value="old('title')"
                                />
                            @error('title')
                                <span class="text-red-500 text-sm">{{ $message }}</span>
                            @enderror
                        </div>
                        <!-- Dynamic plan_item fields container -->
                        <div id="plan-items-container">
                            @if(old('plan_item'))
                                    @php
                                        $planItems = old('plan_item', ['']); // Default to one empty item if no old values
                                    @endphp
                                
                                @foreach($planItems as $index => $item)
                                    <div class="grid grid-cols-12 gap-2 mt-1">
                                        <div class="col-span-10">
                                            <input type="text" name="plan_item[]" class="form-control form-control-sm" placeholder="Enter Plan Item" value="{{$item}}">
                                            @error("plan_item.$index")
                                                <span class="text-red-500 text-sm">{{ $message }}</span>
                                            @enderror
                                        </div>
                                        @if($index==0)
                                            <div class="col-span-2 flex items-end">
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-secondary !py-1 !px-2 ti-btn-wave !mb-5"><i class="ri-add-circle-line add-more-btn"></i></a>
                                            </div>
                                        @else
                                            <div class="col-span-2 flex items-end">
                                                <a href="javascript:void(0);" class="ti-btn ti-btn-danger !py-1 !px-2 ti-btn-wave !mb-5"><i class="ri-delete-back-2-line remove-btn"></i></a>
                                            </div>
                                        @endif
                                    </div>
                                @endforeach
                            @else
                                <div class="mt-4 grid grid-cols-12 gap-4">
                                    <!-- First plan_item input and Add More button -->
                                    <div class="col-span-10">
                                        <x-form-field 
                                            type="text" 
                                            name="plan_item[]" 
                                            label="Plan Item" 
                                            :options="[]" 
                                            :value="old('plan_item.0')" 
                                            class="form-control-sm"
                                        />
                                        @error('plan_item.*')
                                            <span class="text-red-500 text-sm">{{ $message }}</span>
                                        @enderror
                                    </div>
                                    <div class="col-span-2 flex items-end">
                                        <a href="javascript:void(0);" class="ti-btn ti-btn-secondary !py-1 !px-2 ti-btn-wave !mb-5"><i class="ri-add-circle-line add-more-btn"></i></a>
                                    </div>
                                </div>
                            @endif
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

<script>
    document.addEventListener('DOMContentLoaded', function () {
        const container = document.getElementById('plan-items-container');

        // Add More button function
        document.addEventListener('click', function (event) {
            if (event.target && event.target.classList.contains('add-more-btn')) {
                const newField = document.createElement('div');
                newField.classList.add('grid', 'grid-cols-12', 'gap-4', 'mt-3');
                newField.innerHTML = `
                    <div class="col-span-10">
                       <input type="text" name="plan_item[]" class="form-control form-control-sm" placeholder="Enter Plan Item">
                    </div>
                    <div class="col-span-2 flex items-end">
                        <a href="javascript:void(0);" class="ti-btn ti-btn-danger !py-1 !px-2 ti-btn-wave !mb-5"><i class="ri-delete-back-2-line remove-btn"></i></a>
                    </div>
                `;
                container.appendChild(newField);
            }
        });

        // Remove button function
        container.addEventListener('click', function (event) {
            if (event.target && event.target.classList.contains('remove-btn')) {
                event.target.closest('.grid').remove();
            }
        });
    });
</script>
<!-- Make sure this script is loaded after Livewire Scripts -->

<script>
document.addEventListener('DOMContentLoaded', function () {
    // Check if we are dealing with the non-Livewire part
    const el = document.getElementById('sortable-body');
    if (!el) return; // Prevent reinitialization for non-Livewire sections

    let drake = dragula([el]);

    // Event listener for when an item is dropped
    drake.on('drop', function (el, target, source, sibling) {
        const order = Array.from(target.querySelectorAll('tr')).map(row => row.dataset.id);
        console.log('Order after drop:', order); // Debug log
        updateOrder(order);
    });

    // Function to update order via AJAX
    function updateOrder(order) {
        fetch('{{ route('admin.hotel_seasion_plan_order') }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ order: order }),
        })
            .then(response => {
                if (!response.ok) {
                    throw new Error('Failed to update order.');
                }
                return response.json();
            })
            .then(data => {
                console.log('Order updated successfully:', data);
            })
            .catch(error => {
                console.error('Error updating order:', error);
            });
    }

    // Reinitialize Dragula after Livewire updates
    document.addEventListener('livewire:update', function () {
        // Destroy the current Dragula instance
        drake.destroy();

        // Reinitialize Dragula
        initializeDragula();
    });

    // Function to initialize drag-and-drop after Livewire update
    function initializeDragula() {
        const el = document.getElementById('sortable-body');
        if (!el) return; // Prevent reinitialization if no element found
        drake = dragula([el]);

        // Re-attach the drop event handler
        drake.on('drop', function (el, target, source, sibling) {
            const order = Array.from(target.querySelectorAll('tr')).map(row => row.dataset.id);
            console.log('Order after drop:', order);
            updateOrder(order);
        });
    }
});



document.addEventListener('DOMContentLoaded', function () {
    document.querySelectorAll('.plan-items-container').forEach((container) => {
        const itemId = container.id.split('-').pop();

        new Sortable(container, {
            animation: 150,
            onEnd: function (event) {
                const order = Array.from(container.children).map(el => el.dataset.planIndex);
                updatePlanItemOrder(itemId, order);
            },
        });
    });

    function updatePlanItemOrder(itemId, order) {
        fetch('/update-plan-item-order', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': document.querySelector('meta[name="csrf-token"]').getAttribute('content'),
            },
            body: JSON.stringify({ itemId, order }),
        })
            .then(response => response.json())
            .then(data => {
                if (data.success) {
                    console.log('Plan item order updated successfully.');
                } else {
                    console.error('Failed to update plan item order:', data.message);
                }
            })
            .catch(error => console.error('Error updating plan item order:', error));
    }
});

</script>



@endsection


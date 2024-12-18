@extends('layouts.master')
@section('styles')
<link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet">
<link rel="stylesheet" href="{{ asset('build/assets/libs/dragula/dragula.min.css') }}">
@endsection
@section('title', $common['pageTitle']) <!-- This sets the page title dynamically -->
@section('content')
<div class="md:flex block items-center justify-between mb-6 mt-1  page-header-breadcrumb">
    <div class="my-auto">
        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0 uppercase">{{$common['childHeader']}}</h5>
        <nav>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                            class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                    </a> </li>
                <li class="text-[12px]"> <a class="flex items-center text-textmuted" href="javascript:void(0);">{{$common['childHeader']}}
                    </a> </li>
            </ol>
        </nav>
    </div>
    <div class="ti-btn-list">
        <a href="{{route('admin.hotel.create')}}" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-plus"></i>Add New Hotel</a>
    </div>
</div>
    <!-- Start:: row-10 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-12 col-span-12">
        <div class="box custom-box">
            <div class="box-body">
                <form method="GET" action="{{ route('admin.hotel.index') }}">
                    <table class="table whitespace-nowrap min-w-full">
                        <tbody>
                            <tr>
                                <td class="py-0 mt-0">
                                    <x-form-field 
                                        type="select" 
                                        name="destination" 
                                        label="Destination" 
                                        :options="$data['destinations']->pluck('name', 'id')->toArray()"
                                        :value="request('destination')"
                                        class="js-example-basic-single"
                                    />
                                </td>
                                <td class="py-0 mt-0">
                                    <x-form-field 
                                        type="select" 
                                        name="division" 
                                        label="Division" 
                                        :options="$data['divisions']->pluck('name', 'id')->toArray()"
                                        :value="request('division')"
                                        class="js-example-basic-single"
                                    />
                                </td>
                                <td class="py-0 mt-0">
                                    <x-form-field 
                                        type="select" 
                                        name="hotel_categories" 
                                        label="Hotel Category" 
                                        :options="$data['hotel_categories']->pluck('name', 'id')->toArray()"
                                        :value="request('hotel_categories')"
                                        class="js-example-basic-single"
                                    />
                                </td>
                                <td class="py-0 mt-0">
                                    <x-input-field 
                                        type="text" 
                                        name="quick_search" 
                                        id="quick_search" 
                                        placeholder="Quick search" 
                                        class="w-full p-3 border border-gray-300 rounded-lg focus:outline-none focus:border-indigo-500 form-control-sm" 
                                        value="{{ request('quick_search') }}"
                                    />
                                </td>
                                <td width="10%">
                                    <x-form-submit-button text="Search" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]" />
                                    <a href="{{ route('admin.hotel.index') }}" class="ti-btn ti-btn-danger-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]">
                                        <i class="mdi mdi-refresh"></i>
                                    </a>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </form>

                <div class="table-responsive">
                    <x-global-table 
                        :items="$data['hotels']" 
                        :fields="['Hotel Details','Room Details', 'status']" 
                        dataType="hotel" 
                        :extra="['hotel_seasion_plan'=>$data['hotel_seasion_plan']]"
                    />
                    {{ $data['hotels']->appends(request()->query())->links() }}
                </div>
            </div>
        </div>
    </div>
</div>
<!-- End:: row-10 -->
@endsection

@section('scripts')
<!-- Jquery Cdn -->
<script src="https://code.jquery.com/jquery-3.6.1.min.js" integrity="sha256-o88AwQnZB+VDvE9tvIXrMQaPlFFSUTR+nldQm1LuPXQ=" crossorigin="anonymous"></script>

<!-- Select2 Cdn -->
<script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
@vite('resources/assets/js/select2.js')
<script>
    function showAmenities(element) {
        // Retrieve the amenities from the data-title attribute
        const amenities = element.getAttribute('data-title');
        
        // Split the amenities into a list
        const amenitiesList = amenities.split(',').map(item => `<span class="badge gap-2 bg-danger/10 text-danger mr-2">${item.trim()}</span>`).join('');
        
        // Display the SweetAlert2 modal
        Swal.fire({
            title: "Room Amenities",
            html: `${amenitiesList}`,
            customClass: {
                title: "swal-title",
                htmlContainer: "swal-text"
            }
        });
    }

    function showImages(element) {
    // Retrieve the images from the data-images attribute (which contains a JSON string)
    const images = JSON.parse(element.getAttribute('data-images'));

    // Map the images into HTML img elements with the correct asset path
    const imagesList = images.map(filePath => {
        const imageUrl = "{{ asset('storage/') }}/" + filePath; // Combine the asset URL with the file path
        return `<img src="${imageUrl}" class="container mx-auto px-4" style="max-width: 150px;">`;
    }).join('');

    // Display the SweetAlert2 modal
    Swal.fire({
        title: "Hotel Images",
        html: `${imagesList}`,
        customClass: {
            title: "swal-title",
            htmlContainer: "swal-text"
        }
    });
}



    function openModal(modalId) {
        document.getElementById(modalId).classList.remove('hidden');
    }

    function closeModal(modalId) {
        document.getElementById(modalId).classList.add('hidden');
    }

    // Price Chart Modal Form submit
    function PriceChartFormSubmit(button, roomId) {
        // Find the form by ID
        const formId = `hotelPriceForm${roomId}`;
        const form = document.getElementById(formId);

        if (!form) {
            alert("Form not found.");
            return;
        }
        button.disabled = true;
        button.innerHTML = `<span>Please Wait</span> <span class="loading"><i class="ri-loader-2-fill text-[1rem]"></i></span>`;

        // Find or create the message container
        let messageContainer = form.querySelector('.form-message');
        if (!messageContainer) {
            messageContainer = document.createElement('div');
            messageContainer.className = 'form-message mt-4 text-sm';
            button.parentNode.insertBefore(messageContainer, button.nextSibling);
        }

        // Clear any existing messages
        messageContainer.innerHTML = '';

        // Create a FormData object from the form
        const formData = new FormData(form);

        // Send an AJAX request
        fetch("{{route('admin.hotel.room.price.store')}}", {
            method: "POST",
            headers: {
                'X-Requested-With': 'XMLHttpRequest',
                'X-CSRF-TOKEN': formData.get('_token')
            },
            body: formData
        })
        .then(response => {
            if (!response.ok) {
                throw response;
            }
            return response.json();
        })
        .then(data => {
            // Display success message
            messageContainer.innerHTML =  `<div class="text-success">
                        Form submitted successfully!<br>
                    </div>`;
            console.log(data);
        })
        .catch(async (error) => {
            // Display error message
            let errorMessage = 'An error occurred.';
            if (error.json) {
                const errorResponse = await error.json();
                if (errorResponse.errors) {
                    errorMessage = Object.values(errorResponse.errors).join('<br>');
                }
            }
            messageContainer.innerHTML = `<div class="text-danger">${errorMessage}</div>`;
        })
        .finally(() => {
            // Re-enable the button and reset its text
            button.disabled = false;
            button.innerHTML = `<span>Update</span>`;
        });
    }


</script>
@endsection

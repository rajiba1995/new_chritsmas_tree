@extends('layouts.master')

@section('styles')

<!-- Prism CSS -->
<link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')

<!-- Page Header -->
<div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
    <div class="my-auto">
        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Tabels</h5>
        <nav>
            <ol class="flex items-center whitespace-nowrap min-w-0">
                <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                        href="javascript:void(0);"> Tabels <i
                            class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                    </a> </li>
                <li class="text-[12px]"> <a class="flex items-center text-textmuted" href="javascript:void(0);">Tabels
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
                <button class="ti-btn ti-btn-primary-full text-white dropdown-toggle !mb-0" type="button"
                    id="dropdownMenuDate" data-bs-toggle="dropdown" aria-expanded="false">
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

<!-- Start:: row-1 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 !border-b flex justify-between">
                <div class="box-title">
                    Basic Tables
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full">
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">Name</th>
                                <th scope="col" class="text-start">Created On</th>
                                <th scope="col" class="text-start">Number</th>
                                <th scope="col" class="text-start">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Mark</th>
                                <td>21,Dec 2021</td>
                                <td>+1234-12340</td>
                                <td><span class="badge bg-outline-primary">Completed</span></td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Monika</th>
                                <td>29,April 2022</td>
                                <td>+1523-12459</td>
                                <td><span class="badge bg-outline-warning">Failed</span></td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Madina</th>
                                <td>30,Nov 2022</td>
                                <td>+1982-16234</td>
                                <td><span class="badge bg-outline-success">Successful</span></td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Bhamako</th>
                                <td>18,Mar 2022</td>
                                <td>+1526-10729</td>
                                <td><span class="badge bg-outline-secondary">Pending</span></td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Samantha Julia</th>
                                <td>18,May 2021</td>
                                <td>+1626-12759</td>
                                <td><span class="badge bg-outline-secondary">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;Name&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Created On&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Number&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Mark&lt;/th&gt;
                        &lt;td&gt;21,Dec 2021&lt;/td&gt;
                        &lt;td&gt;+1234-12340&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-outline-primary"&gt;Completed&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Monika&lt;/th&gt;
                        &lt;td&gt;29,April 2022&lt;/td&gt;
                        &lt;td&gt;+1523-12459&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-outline-warning"&gt;Failed&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Madina&lt;/th&gt;
                        &lt;td&gt;30,Nov 2022&lt;/td&gt;
                        &lt;td&gt;+1982-16234&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-outline-success"&gt;Successful&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Bhamako&lt;/th&gt;
                        &lt;td&gt;18,Mar 2022&lt;/td&gt;
                        &lt;td&gt;+1526-10729&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-outline-secondary"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Bordered Tables
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-bordered min-w-full">
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">User</th>
                                <th scope="col" class="text-start">Status</th>
                                <th scope="col" class="text-start">Email</th>
                                <th scope="col" class="text-start">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row">
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                        </span>Sukuro Kim
                                    </div>
                                </th>
                                <td><span class="badge bg-success/10 text-success">Active</span></td>
                                <td>kimosukuro@gmail.com</td>
                                <td>
                                    <div class="hstack gap-2 flex-wrap">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="text-info text-[.875rem] leading-none"><i
                                                class="ri-edit-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="text-danger text-[.875rem] leading-none"><i
                                                class="ri-delete-bin-5-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row">
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 offline avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                        </span>Hasimna
                                    </div>
                                </th>
                                <td><span class="badge bg-light text-dark">Inactive</span></td>
                                <td>hasimna2132@gmail.com</td>
                                <td>
                                    <div class="hstack gap-2 flex-wrap">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="text-info text-[.875rem] leading-none"><i
                                                class="ri-edit-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="text-danger text-[.875rem] leading-none"><i
                                                class="ri-delete-bin-5-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row">
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        </span>Azimo Khan
                                    </div>
                                </th>
                                <td><span class="badge bg-success/10 text-success">Active</span></td>
                                <td>azimokhan421@gmail.com</td>
                                <td>
                                    <div class="hstack gap-2 flex-wrap">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="text-info text-[.875rem] leading-none"><i
                                                class="ri-edit-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="text-danger text-[.875rem] leading-none"><i
                                                class="ri-delete-bin-5-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr>
                                <th scope="row">
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                        </span>Samantha Julia
                                    </div>
                                </th>
                                <td><span class="badge bg-success/10 text-success">Active</span></td>
                                <td>julianasams143@gmail.com</td>
                                <td>
                                    <div class="hstack gap-2 flex-wrap">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="text-info text-[.875rem] leading-none"><i
                                                class="ri-edit-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="text-danger text-[.875rem] leading-none"><i
                                                class="ri-delete-bin-5-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-bordered min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;User&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Email&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Action&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Sukuro Kim
                            &lt;/div&gt;
                        &lt;/th&gt;
                        &lt;td&gt;&lt;span class="badge bg-success/10 text-success"&gt;Active&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;kimosukuro@gmail.com&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack gap-2 flex-wrap"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="text-info text-[.875rem] leading-none"&gt;&lt;i
                                        class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="text-danger text-[.875rem] leading-none"&gt;&lt;i
                                        class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 offline avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Hasimna
                            &lt;/div&gt;
                        &lt;/th&gt;
                        &lt;td&gt;&lt;span class="badge bg-light text-dark"&gt;Inactive&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;hasimna2132@gmail.com&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack gap-2 flex-wrap"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="text-info text-[.875rem] leading-none"&gt;&lt;i
                                        class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="text-danger text-[.875rem] leading-none"&gt;&lt;i
                                        class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Azimo Khan
                            &lt;/div&gt;
                        &lt;/th&gt;
                        &lt;td&gt;&lt;span class="badge bg-success/10 text-success"&gt;Active&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;azimokhan421@gmail.com&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack gap-2 flex-wrap"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="text-info text-[.875rem] leading-none"&gt;&lt;i
                                        class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="text-danger text-[.875rem] leading-none"&gt;&lt;i
                                        class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row"&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Samantha Julia
                            &lt;/div&gt;
                        &lt;/th&gt;
                        &lt;td&gt;&lt;span class="badge bg-success/10 text-success"&gt;Active&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;julianasams143@gmail.com&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack gap-2 flex-wrap"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="text-info text-[.875rem] leading-none"&gt;&lt;i
                                        class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="text-danger text-[.875rem] leading-none"&gt;&lt;i
                                        class="ri-delete-bin-5-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>
<!-- End:: row-1 -->

<!-- Start:: row-2 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Bordered Primary
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table
                        class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full">
                        <thead>
                            <tr class="border-b !border-primary/30">
                                <th scope="col" class="text-start">Order</th>
                                <th scope="col" class="text-start">Date</th>
                                <th scope="col" class="text-start">Customer</th>
                                <th scope="col" class="text-start">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">
                                    #0007
                                </th>
                                <td>
                                    <span class="badge bg-light text-dark">26-04-2022</span>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                        </span>Mayor Kelly
                                    </div>
                                </td>
                                <td><span class="badge bg-primary/10 text-primary">Booked</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">
                                    #0008
                                </th>
                                <td>
                                    <span class="badge bg-light text-dark">15-02-2022</span>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                        </span>Wicky Kross
                                    </div>
                                </td>
                                <td><span class="badge bg-primary/10 text-primary">Booked</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">
                                    #0009
                                </th>
                                <td>
                                    <span class="badge bg-light text-dark">23-05-2022</span>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                        </span>Julia Cam
                                    </div>
                                </td>
                                <td><span class="badge bg-primary/10 text-primary">Booked</span></td>
                            </tr>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-bordered table-bordered-primary border-primary/10 min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-primary/10"&gt;
                        &lt;th scope="col" class="text-start"&gt;Order&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Date&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Customer&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Action&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-primary/10"&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            #0007
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;span class="badge bg-light text-dark"&gt;26-04-2022&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Mayor Kelly
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-primary/10 text-primary"&gt;Booked&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-primary/10"&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            #0008
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;span class="badge bg-light text-dark"&gt;15-02-2022&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Wicky Kross
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-primary/10 text-primary"&gt;Booked&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            #0009
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;span class="badge bg-light text-dark"&gt;23-05-2022&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Julia Cam
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-primary/10 text-primary"&gt;Booked&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Bordered Success
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-bordered table-bordered-success min-w-full">
                        <thead>
                            <tr class="border-b !border-success/30">
                                <th scope="col" class="text-start">Order</th>
                                <th scope="col" class="text-start">Date</th>
                                <th scope="col" class="text-start">Customer</th>
                                <th scope="col" class="text-start">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">
                                    #0011
                                </th>
                                <td>
                                    <span class="badge bg-light text-dark">07-01-2022</span>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                        </span>Helsenky
                                    </div>
                                </td>
                                <td><span class="badge bg-success/10 text-success">Delivered</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">
                                    #0012
                                </th>
                                <td>
                                    <span class="badge bg-light text-dark">18-05-2022</span>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                        </span>Brodus
                                    </div>
                                </td>
                                <td><span class="badge bg-success/10 text-success">Delivered</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">
                                    #0013
                                </th>
                                <td>
                                    <span class="badge bg-light text-dark">19-03-2022</span>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                        </span>Chikka Alen
                                    </div>
                                </td>
                                <td><span class="badge bg-success/10 text-success">Delivered</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-bordered table-bordered-success min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-success/10"&gt;
                        &lt;th scope="col" class="text-start"&gt;Order&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Date&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Customer&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-success/10"&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            #0011
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;span class="badge bg-light text-dark"&gt;07-01-2022&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Helsenky
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-success/10 text-success"&gt;Delivered&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-success/10"&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            #0012
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;span class="badge bg-light text-dark"&gt;18-05-2022&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Brodus
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-success/10 text-success"&gt;Delivered&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            #0013
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;span class="badge bg-light text-dark"&gt;19-03-2022&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Chikka Alen
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-success/10 text-success"&gt;Delivered&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Bordered warning
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-bordered table-bordered-warning min-w-full">
                        <thead>
                            <tr class="border-b !border-warning/30">
                                <th scope="col" class="text-start">Order</th>
                                <th scope="col" class="text-start">Date</th>
                                <th scope="col" class="text-start">Customer</th>
                                <th scope="col" class="text-start">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">
                                    #0014
                                </th>
                                <td>
                                    <span class="badge bg-light text-dark">21-02-2022</span>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                        </span>Sukuro Kim
                                    </div>
                                </td>
                                <td><span class="badge bg-warning/10 text-warning">Accepted</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">
                                    #0018
                                </th>
                                <td>
                                    <span class="badge bg-light text-dark">26-03-2022</span>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                        </span>Alex Carey
                                    </div>
                                </td>
                                <td><span class="badge bg-warning/10 text-warning">Accepted</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">
                                    #0020
                                </th>
                                <td>
                                    <span class="badge bg-light text-dark">14-03-2022</span>
                                </td>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>Pamila Anderson
                                    </div>
                                </td>
                                <td><span class="badge bg-warning/10 text-warning">Accepted</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-bordered table-bordered-warning min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr&gt;
                        &lt;th scope="col" class="text-start"&gt;Order&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Date&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Customer&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Action&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-warning/10"&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            #0014
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;span class="badge bg-light text-dark"&gt;21-02-2022&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Sukuro Kim
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-warning/10 text-warning"&gt;Accepted&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-warning/10"&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            #0018
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;span class="badge bg-light text-dark"&gt;26-03-2022&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Alex Carey
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-warning/10 text-warning"&gt;Accepted&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            #0020
                        &lt;/th&gt;
                        &lt;td&gt;
                            &lt;span class="badge bg-light text-dark"&gt;14-03-2022&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Pamila Anderson
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-warning/10 text-warning"&gt;Accepted&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>
<!-- End:: row-2 -->

<!-- Start:: row-3 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Table Without Borders
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-borderless min-w-full">
                        <thead>
                            <tr>
                                <th scope="col" class="text-start">User Name</th>
                                <th scope="col" class="text-start">Transaction Id</th>
                                <th scope="col" class="text-start">Created</th>
                                <th scope="col" class="text-start">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">Harshrath</th>
                                <td>#5182-3467</td>
                                <td>24 May 2022</td>
                                <td><span class="badge bg-primary text-white">Fixed</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Zozo Hadid</th>
                                <td>#5182-3412</td>
                                <td>02 July 2022</td>
                                <td><span class="badge bg-warning  text-white">In Progress</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Martiana</th>
                                <td>#5182-3423</td>
                                <td>15 April 2022</td>
                                <td><span class="badge bg-success  text-white">Completed</span></td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">Alex Carey</th>
                                <td>#5182-3456</td>
                                <td>17 March 2022</td>
                                <td><span class="badge bg-danger  text-white">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-borderless min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr&gt;
                        &lt;th scope="col" class="text-start"&gt;User Name&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Transaction Id&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Created&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;Harshrath&lt;/th&gt;
                        &lt;td&gt;#5182-3467&lt;/td&gt;
                        &lt;td&gt;24 May 2022&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-primary text-white"&gt;Fixed&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;Zozo Hadid&lt;/th&gt;
                        &lt;td&gt;#5182-3412&lt;/td&gt;
                        &lt;td&gt;02 July 2022&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-warning  text-white"&gt;In Progress&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;Martiana&lt;/th&gt;
                        &lt;td&gt;#5182-3423&lt;/td&gt;
                        &lt;td&gt;15 April 2022&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-success  text-white"&gt;Completed&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;Alex Carey&lt;/th&gt;
                        &lt;td&gt;#5182-3456&lt;/td&gt;
                        &lt;td&gt;17 March 2022&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-danger  text-white"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Table Group Divideres
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full ">
                        <thead>
                            <tr>
                                <th scope="col" class="text-start">Product</th>
                                <th scope="col" class="text-start">Seller</th>
                                <th scope="col" class="text-start">Sale Percentage</th>
                                <th scope="col" class="text-start">Quantity Sold</th>
                            </tr>
                        </thead>
                        <tbody class="table-group-divider dark:border-defaultborder/10">
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Smart Watch</th>
                                <td>Slowtrack.inc</td>
                                <td><a href="javascript:void(0);" class="text-success">24.23%<i
                                            class="ri-arrow-up-fill ms-1"></i></a></td>
                                <td>250/1786</td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">White Sneakers</th>
                                <td>American &amp; Co.inc</td>
                                <td><a href="javascript:void(0);" class="text-danger">12.45%<i
                                            class="ri-arrow-down-fill ms-1"></i></a></td>
                                <td>123/985</td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Baseball Bat</th>
                                <td>Sports Company</td>
                                <td><a href="javascript:void(0);" class="text-success">06.64%<i
                                            class="ri-arrow-up-fill ms-1"></i></a></td>
                                <td>124/232</td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Black Hoodie</th>
                                <td>Renonds Fabrics</td>
                                <td><a href="javascript:void(0);" class="text-success">14.42%<i
                                            class="ri-arrow-up-fill ms-1"></i></a></td>
                                <td>192/2456</td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Mens watch</th>
                                <td>Branded</td>
                                <td><a href="javascript:void(0);" class="text-success">14.42%<i
                                            class="ri-arrow-up-fill ms-1"></i></a></td>
                                <td>162/2256</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap min-w-full "&gt;
                &lt;thead&gt;
                    &lt;tr&gt;
                        &lt;th scope="col" class="text-start"&gt;Product&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Seller&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Sale Percentage&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Qunatity Sold&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody class="table-group-divider dark:border-defaultborder/10"&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Smart Watch&lt;/th&gt;
                        &lt;td&gt;Slowtrack.inc&lt;/td&gt;
                        &lt;td&gt;&lt;a href="javascript:void(0);" class="text-success"&gt;24.23%&lt;i
                                    class="ri-arrow-up-fill ms-1"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/td&gt;
                        &lt;td&gt;250/1786&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;White Sneakers&lt;/th&gt;
                        &lt;td&gt;American &amp; Co.inc&lt;/td&gt;
                        &lt;td&gt;&lt;a href="javascript:void(0);" class="text-danger"&gt;12.45%&lt;i
                                    class="ri-arrow-down-fill ms-1"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/td&gt;
                        &lt;td&gt;123/985&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Baseball Bat&lt;/th&gt;
                        &lt;td&gt;Sports Company&lt;/td&gt;
                        &lt;td&gt;&lt;a href="javascript:void(0);" class="text-success"&gt;06.64%&lt;i
                                    class="ri-arrow-up-fill ms-1"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/td&gt;
                        &lt;td&gt;124/232&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Black Hoodie&lt;/th&gt;
                        &lt;td&gt;Renonds Fabrics&lt;/td&gt;
                        &lt;td&gt;&lt;a href="javascript:void(0);" class="text-success"&gt;14.42%&lt;i
                                    class="ri-arrow-up-fill ms-1"&gt;&lt;/i&gt;&lt;/a&gt;&lt;/td&gt;
                        &lt;td&gt;192/2456&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>
<!-- End:: row-3 -->

<!-- Start:: row-4 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 !border-b flex justify-between">
                <div class="box-title">
                    Striped rows
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap ti-striped-table min-w-full">
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">ID</th>
                                <th scope="col" class="text-start">Date</th>
                                <th scope="col" class="text-start">Customer</th>
                                <th scope="col" class="text-start">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder ">
                                <th scope="row" class="text-start">2022R-01</th>
                                <td>27-010-2022</td>
                                <td>Moracco</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success-full btn-wave">
                                        <i class="ri-download-2-line align-middle me-2 inline-block"></i>Download
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">2022R-02</th>
                                <td>28-10-2022</td>
                                <td>Thornton</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success-full btn-wave">
                                        <i class="ri-download-2-line align-middle me-2 inline-block"></i>Download
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder ">
                                <th scope="row" class="text-start">2022R-03</th>
                                <td>22-10-2022</td>
                                <td>Larry Bird</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success-full btn-wave">
                                        <i class="ri-download-2-line align-middle me-2 inline-block"></i>Download
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">2022R-04</th>
                                <td>29-09-2022</td>
                                <td>Erica Sean</td>
                                <td>
                                    <button aria-label="button" type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success-full btn-wave">
                                        <i class="ri-download-2-line align-middle me-2 inline-block"></i>Download
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap ti-striped-table min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;ID&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Date&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Customer&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Action&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr  class="border-b border-defaultborder "&gt;
                        &lt;th scope="row" class="text-start"&gt;2022R-01&lt;/th&gt;
                        &lt;td&gt;27-010-2022&lt;/td&gt;
                        &lt;td&gt;Moracco&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success-full btn-wave"&gt;
                                &lt;i class="ri-download-2-line align-middle me-2 inline-block"&gt;&lt;/i&gt;Download
                            &lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr  class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;2022R-02&lt;/th&gt;
                        &lt;td&gt;28-10-2022&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success-full btn-wave"&gt;
                                &lt;i class="ri-download-2-line align-middle me-2 inline-block"&gt;&lt;/i&gt;Download
                            &lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder "&gt;
                        &lt;th scope="row" class="text-start"&gt;2022R-03&lt;/th&gt;
                        &lt;td&gt;22-10-2022&lt;/td&gt;
                        &lt;td&gt;Larry Bird&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success-full btn-wave"&gt;
                                &lt;i class="ri-download-2-line align-middle me-2 inline-block"&gt;&lt;/i&gt;Download
                            &lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;2022R-04&lt;/th&gt;
                        &lt;td&gt;29-09-2022&lt;/td&gt;
                        &lt;td&gt;Erica Sean&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button aria-label="button" type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success-full btn-wave"&gt;
                                &lt;i class="ri-download-2-line align-middle me-2 inline-block"&gt;&lt;/i&gt;Download
                            &lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 !border-b flex justify-between">
                <div class="box-title">
                    Striped columns
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-striped-columns min-w-full">
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">ID</th>
                                <th scope="col" class="text-start">Date</th>
                                <th scope="col" class="text-start">Customer</th>
                                <th scope="col" class="text-start">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">2022R-01</th>
                                <td>27-010-2022</td>
                                <td>Moracco</td>
                                <td>
                                    <button aria-label="button" type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave">
                                        <i class="ri-delete-bin-line align-middle me-2 inline-block"></i>Delete
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">2022R-02</th>
                                <td>28-10-2022</td>
                                <td>Thornton</td>
                                <td>
                                    <button aria-label="button" type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave">
                                        <i class="ri-delete-bin-line align-middle me-2 inline-block"></i>Delete
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">2022R-03</th>
                                <td>22-10-2022</td>
                                <td>Larry Bird</td>
                                <td>
                                    <button aria-label="button" type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave">
                                        <i class="ri-delete-bin-line align-middle me-2 inline-block"></i>Delete
                                    </button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">2022R-04</th>
                                <td>29-09-2022</td>
                                <td>Erica Sean</td>
                                <td>
                                    <button aria-label="button" type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave">
                                        <i class="ri-delete-bin-line align-middle me-2 inline-block"></i>Delete
                                    </button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-striped-columns min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;ID&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Date&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Customer&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Action&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;2022R-01&lt;/th&gt;
                        &lt;td&gt;27-010-2022&lt;/td&gt;
                        &lt;td&gt;Moracco&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button aria-label="button" type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave"&gt;
                                &lt;i class="ri-delete-bin-line align-middle me-2 inline-block"&gt;&lt;/i&gt;Delete
                            &lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;2022R-02&lt;/th&gt;
                        &lt;td&gt;28-10-2022&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button aria-label="button" type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave"&gt;
                                &lt;i class="ri-delete-bin-line align-middle me-2 inline-block"&gt;&lt;/i&gt;Delete
                            &lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;2022R-03&lt;/th&gt;
                        &lt;td&gt;22-10-2022&lt;/td&gt;
                        &lt;td&gt;Larry Bird&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button aria-label="button" type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave"&gt;
                                &lt;i class="ri-delete-bin-line align-middle me-2 inline-block"&gt;&lt;/i&gt;Delete
                            &lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;2022R-04&lt;/th&gt;
                        &lt;td&gt;29-09-2022&lt;/td&gt;
                        &lt;td&gt;Erica Sean&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button aria-label="button" type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger-full btn-wave"&gt;
                                &lt;i class="ri-delete-bin-line align-middle me-2 inline-block"&gt;&lt;/i&gt;Delete
                            &lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>
<!-- End:: row-4 -->

<!-- Start:: row-5 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Primary Table
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-primary !rounded-none min-w-full">
                        <thead>
                            <tr class="border-b border-primary/10">
                                <th scope="col" class="text-start">#</th>
                                <th scope="col" class="text-start">First</th>
                                <th scope="col" class="text-start">Last</th>
                                <th scope="col" class="text-start">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">3</th>
                                <td>Larry the Bird</td>
                                <td>Thornton</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-primary !rounded-none min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-primary/10"&gt;
                        &lt;th scope="col" class="text-start"&gt;#&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;First&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Last&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Handle&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;1&lt;/th&gt;
                        &lt;td&gt;Mark&lt;/td&gt;
                        &lt;td&gt;Otto&lt;/td&gt;
                        &lt;td&gt;@mdo&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;2&lt;/th&gt;
                        &lt;td&gt;Jacob&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;@fat&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;3&lt;/th&gt;
                        &lt;td&gt;Larry the Bird&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;@twitter&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Secondary Table
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-secondary  !rounded-none min-w-full">
                        <thead>
                            <tr class="border-b border-secondary/10">
                                <th scope="col" class="text-start">#</th>
                                <th scope="col" class="text-start">First</th>
                                <th scope="col" class="text-start">Last</th>
                                <th scope="col" class="text-start">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">3</th>
                                <td>Larry the Bird</td>
                                <td>Thornton</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-secondary  !rounded-none min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-secondary/10"&gt;
                        &lt;th scope="col" class="text-start"&gt;#&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;First&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Last&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Handle&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;1&lt;/th&gt;
                        &lt;td&gt;Mark&lt;/td&gt;
                        &lt;td&gt;Otto&lt;/td&gt;
                        &lt;td&gt;@mdo&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;2&lt;/th&gt;
                        &lt;td&gt;Jacob&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;@fat&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;3&lt;/th&gt;
                        &lt;td&gt;Larry the Bird&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;@twitter&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Warning Table
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-warning  !rounded-none min-w-full">
                        <thead>
                            <tr class="border-b border-warning/10">
                                <th scope="col" class="text-start">#</th>
                                <th scope="col" class="text-start">First</th>
                                <th scope="col" class="text-start">Last</th>
                                <th scope="col" class="text-start">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">3</th>
                                <td>Larry the Bird</td>
                                <td>Thornton</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-warning  !rounded-none min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-warning/10"&gt;
                        &lt;th scope="col" class="text-start"&gt;#&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;First&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Last&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Handle&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;1&lt;/th&gt;
                        &lt;td&gt;Mark&lt;/td&gt;
                        &lt;td&gt;Otto&lt;/td&gt;
                        &lt;td&gt;@mdo&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;2&lt;/th&gt;
                        &lt;td&gt;Jacob&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;@fat&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;3&lt;/th&gt;
                        &lt;td&gt;Larry the Bird&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;@twitter&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Danger Table
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-danger  !rounded-none min-w-full">
                        <thead>
                            <tr class="border-b border-danger/10">
                                <th scope="col" class="text-start">#</th>
                                <th scope="col" class="text-start">First</th>
                                <th scope="col" class="text-start">Last</th>
                                <th scope="col" class="text-start">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">3</th>
                                <td>Larry the Bird</td>
                                <td>Thornton</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-danger  !rounded-none min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-danger/10"&gt;
                        &lt;th scope="col" class="text-start"&gt;#&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;First&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Last&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Handle&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;1&lt;/th&gt;
                        &lt;td&gt;Mark&lt;/td&gt;
                        &lt;td&gt;Otto&lt;/td&gt;
                        &lt;td&gt;@mdo&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;2&lt;/th&gt;
                        &lt;td&gt;Jacob&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;@fat&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;3&lt;/th&gt;
                        &lt;td&gt;Larry the Bird&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;@twitter&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Dark Table
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-dark !rounded-none min-w-full">
                        <thead>
                            <tr class="border-b border-black/10 dark:border-black/[0.025];">
                                <th scope="col" class="text-start">#</th>
                                <th scope="col" class="text-start">First</th>
                                <th scope="col" class="text-start">Last</th>
                                <th scope="col" class="text-start">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">3</th>
                                <td>Larry the Bird</td>
                                <td>Thornton</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-dark !rounded-none min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-black/10 dark:border-black/[0.025];"&gt;
                        &lt;th scope="col" class="text-start"&gt;#&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;First&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Last&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Handle&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;1&lt;/th&gt;
                        &lt;td&gt;Mark&lt;/td&gt;
                        &lt;td&gt;Otto&lt;/td&gt;
                        &lt;td&gt;@mdo&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;2&lt;/th&gt;
                        &lt;td&gt;Jacob&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;@fat&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;3&lt;/th&gt;
                        &lt;td&gt;Larry the Bird&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;@twitter&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Success Table With Striped Rows
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-success table-striped  !rounded-none min-w-full">
                        <thead>
                            <tr class="border-b border-success/10">
                                <th scope="col" class="text-start">#</th>
                                <th scope="col" class="text-start">First</th>
                                <th scope="col" class="text-start">Last</th>
                                <th scope="col" class="text-start">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <th scope="row" class="text-start">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">2</th>
                                <td>Jacob</td>
                                <td>Thornton</td>
                                <td>@fat</td>
                            </tr>
                            <tr>
                                <th scope="row" class="text-start">3</th>
                                <td>Larry the Bird</td>
                                <td>Thornton</td>
                                <td>@twitter</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-success table-striped  !rounded-none min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-success/10"&gt;
                        &lt;th scope="col" class="text-start"&gt;#&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;First&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Last&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Handle&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;1&lt;/th&gt;
                        &lt;td&gt;Mark&lt;/td&gt;
                        &lt;td&gt;Otto&lt;/td&gt;
                        &lt;td&gt;@mdo&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;2&lt;/th&gt;
                        &lt;td&gt;Jacob&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;@fat&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr&gt;
                        &lt;th scope="row" class="text-start"&gt;3&lt;/th&gt;
                        &lt;td&gt;Larry the Bird&lt;/td&gt;
                        &lt;td&gt;Thornton&lt;/td&gt;
                        &lt;td&gt;@twitter&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>
<!-- End:: row-5 -->

<!-- Start:: row-6 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 !border-b flex justify-between">
                <div class="box-title">Hoverable Rows</div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-hover min-w-full ti-custom-table-hover">
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">Product Manager</th>
                                <th scope="col" class="text-start">Category</th>
                                <th scope="col" class="text-start">Team</th>
                                <th scope="col" class="text-start">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder ">
                                <td>
                                    <div class="flex items-center">
                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                        </div>
                                        <div>
                                            <div class="leading-none">
                                                <span>Joanna Smith</span>
                                            </div>
                                            <div class="leading-none">
                                                <span
                                                    class="text-[0.6875rem] text-textmuted">joannasmith14@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-primary/10 text-primary">Fashion</span></td>
                                <td>
                                    <div class="avatar-list-stacked flex items-center -space-x-2">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                            href="javascript:void(0);">
                                            +5
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary w-[52%]" aria-valuenow="52"
                                            aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder ">
                                <td>
                                    <div class="flex items-center">
                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </div>
                                        <div>
                                            <div class="leading-none">
                                                <span>Kara Kova</span>
                                            </div>
                                            <div class="leading-none">
                                                <span
                                                    class="text-[0.6875rem] text-textmuted">milesakara@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-warning/10 text-warning">Clothing</span></td>
                                <td>
                                    <div class="avatar-list-stacked flex items-center -space-x-2">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                            href="javascript:void(0);">
                                            +6
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary w-2/5" aria-valuenow="40" aria-valuemin="0"
                                            aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder ">
                                <td>
                                    <div class="flex items-center">
                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                        </div>
                                        <div>
                                            <div class="leading-none">
                                                <span>Donald Trimb</span>
                                            </div>
                                            <div class="leading-none">
                                                <span class="text-[0.6875rem] text-textmuted">donaldo21@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-black/10 text-black dark:text-white">Electronics</span>
                                </td>
                                <td>
                                    <div class="avatar-list-stacked flex items-center -space-x-2">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                            href="javascript:void(0);">
                                            +2
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary w-[17%]" aria-valuenow="17"
                                            aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder ">
                                <td>
                                    <div class="flex items-center">
                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img">
                                        </div>
                                        <div>
                                            <div class="leading-none">
                                                <span>Justin Gaethje</span>
                                            </div>
                                            <div class="leading-none">
                                                <span class="text-[0.6875rem] text-textmuted">justingae@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-danger/10 text-danger">Sports</span></td>
                                <td>
                                    <div class="avatar-list-stacked flex items-center -space-x-2">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                            href="javascript:void(0);">
                                            +5
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary w-[72%]" aria-valuenow="72"
                                            aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-hover min-w-full ti-custom-table-hover"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;Product Manager&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Category&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Team&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder "&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"&gt;
                                &lt;/div&gt;
                                &lt;div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span&gt;Joanna Smith&lt;/span&gt;
                                    &lt;/div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span
                                            class="text-[0.6875rem] text-textmuted"&gt;joannasmith14@gmail.com&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-primary/10 text-primary"&gt;Fashion&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center -space-x-2"&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                    href="javascript:void(0);"&gt;
                                    +5
                                &lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="progress progress-xs"&gt;
                                &lt;div class="progress-bar bg-primary w-[52%]" aria-valuenow="52" aria-valuemin="0"
                                    aria-valuemax="100"&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder "&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
                                &lt;/div&gt;
                                &lt;div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span&gt;Kara Kova&lt;/span&gt;
                                    &lt;/div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span
                                            class="text-[0.6875rem] text-textmuted"&gt;milesakara@gmail.com&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-warning/10 text-warning"&gt;Clothing&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center -space-x-2"&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                    href="javascript:void(0);"&gt;
                                    +6
                                &lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="progress progress-xs"&gt;
                                &lt;div class="progress-bar bg-primary w-2/5" aria-valuenow="40" aria-valuemin="0"
                                    aria-valuemax="100"&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder "&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img"&gt;
                                &lt;/div&gt;
                                &lt;div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span&gt;Donald Trimb&lt;/span&gt;
                                    &lt;/div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span
                                            class="text-[0.6875rem] text-textmuted"&gt;donaldo21@gmail.com&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-dark/10 text-black dark:text-white"&gt;Electronics&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center -space-x-2"&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                    href="javascript:void(0);"&gt;
                                    +2
                                &lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="progress progress-xs"&gt;
                                &lt;div class="progress-bar bg-primary w-[17%]" aria-valuenow="17" aria-valuemin="0"
                                    aria-valuemax="100"&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder "&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/13.jpg')}}" alt="img"&gt;
                                &lt;/div&gt;
                                &lt;div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span&gt;Justin Gaethje&lt;/span&gt;
                                    &lt;/div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span
                                            class="text-[0.6875rem] text-textmuted"&gt;justingae@gmail.com&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-danger/10 text-danger"&gt;Sports&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center -space-x-2"&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                    href="javascript:void(0);"&gt;
                                    +5
                                &lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="progress progress-xs"&gt;
                                &lt;div class="progress-bar bg-primary w-[72%]" aria-valuenow="72" aria-valuemin="0"
                                    aria-valuemax="100"&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 !border-b flex justify-between">
                <div class="box-title">
                    Hoverable rows With striped rows
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table
                        class="table whitespace-nowrap ti-striped-table table-hover min-w-full ti-custom-table-hover">
                        <thead>
                            <tr class="border-b border-defaultborder ">
                                <th scope="col" class="text-start">Invoice</th>
                                <th scope="col" class="text-start">Customer</th>
                                <th scope="col" class="text-start">Status</th>
                                <th scope="col" class="text-start">Date</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder ">
                                <th scope="row">IN-2032</th>
                                <td>
                                    <div class="flex items-center">
                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        </div>
                                        <div>
                                            <div class="leading-none">
                                                <span>Mark Cruise</span>
                                            </div>
                                            <div class="leading-none">
                                                <span
                                                    class="text-[0.6875rem] text-textmuted">markcruise24@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success/10 text-success"><i
                                            class="ri-check-fill align-middle me-1"></i>Paid</span></td>
                                <td>Jul 26,2022</td>
                            </tr>
                            <tr class="border-b border-defaultborder ">
                                <th scope="row">IN-2022</th>
                                <td>
                                    <div class="flex items-center">
                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                        </div>
                                        <div>
                                            <div class="leading-none">
                                                <span>Charanjeep</span>
                                            </div>
                                            <div class="leading-none">
                                                <span class="text-[0.6875rem] text-textmuted">charanjeep@gmail.in</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-success/10 text-success"><i
                                            class="ri-check-fill align-middle me-1"></i>Paid</span></td>
                                <td>Mar 14,2022</td>
                            </tr>
                            <tr class="border-b border-defaultborder ">
                                <th scope="row">IN-2014</th>
                                <td>
                                    <div class="flex items-center">
                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                        </div>
                                        <div>
                                            <div class="leading-none">
                                                <span>Samantha Julie</span>
                                            </div>
                                            <div class="leading-none">
                                                <span class="text-[0.6875rem] text-textmuted">julie453@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-danger/10 text-danger"><i
                                            class="ri-close-fill align-middle me-1"></i>Cancelled</span>
                                </td>
                                <td>Feb 1,2022</td>
                            </tr>
                            <tr class="border-b border-defaultborder ">
                                <th scope="row">IN-2036</th>
                                <td>
                                    <div class="flex items-center">
                                        <div class="avatar avatar-sm me-2 avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                        </div>
                                        <div>
                                            <div class="leading-none">
                                                <span>Simon Cohen</span>
                                            </div>
                                            <div class="leading-none">
                                                <span class="text-[0.6875rem] text-textmuted">simon@gmail.com</span>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td><span class="badge bg-light text-black dark:text-white"><i
                                            class="ri-reply-line align-middle me-1"></i>Refunded</span>
                                </td>
                                <td>Apr 24,2022</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap ti-striped-table table-hover min-w-full ti-custom-table-hover"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder "&gt;
                        &lt;th scope="col" class="text-start"&gt;Invoice&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Customer&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Date&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder "&gt;
                        &lt;th scope="row"&gt;IN-2032&lt;/th&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
                                &lt;/div&gt;
                                &lt;div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span&gt;Mark Cruise&lt;/span&gt;
                                    &lt;/div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span
                                            class="text-[0.6875rem] text-textmuted"&gt;markcruise24@gmail.com&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-success/10 text-success"&gt;&lt;i
                                    class="ri-check-fill align-middle me-1"&gt;&lt;/i&gt;Paid&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;Jul 26,2022&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder "&gt;
                        &lt;th scope="row"&gt;IN-2022&lt;/th&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img"&gt;
                                &lt;/div&gt;
                                &lt;div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span&gt;Charanjeep&lt;/span&gt;
                                    &lt;/div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span
                                            class="text-[0.6875rem] text-textmuted"&gt;charanjeep@gmail.in&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-success/10 text-success"&gt;&lt;i
                                    class="ri-check-fill align-middle me-1"&gt;&lt;/i&gt;Paid&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;Mar 14,2022&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder "&gt;
                        &lt;th scope="row"&gt;IN-2014&lt;/th&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"&gt;
                                &lt;/div&gt;
                                &lt;div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span&gt;Samantha Julie&lt;/span&gt;
                                    &lt;/div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span class="text-[0.6875rem] text-textmuted"&gt;julie453@gmail.com&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-danger/10 text-danger"&gt;&lt;i
                                    class="ri-close-fill align-middle me-1"&gt;&lt;/i&gt;Cancelled&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;Feb 1,2022&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder "&gt;
                        &lt;th scope="row"&gt;IN-2036&lt;/th&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;div class="avatar avatar-sm me-2 avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img"&gt;
                                &lt;/div&gt;
                                &lt;div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span&gt;Simon Cohen&lt;/span&gt;
                                    &lt;/div&gt;
                                    &lt;div class="leading-none"&gt;
                                        &lt;span class="text-[0.6875rem] text-textmuted"&gt;simon@gmail.com&lt;/span&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-light text-black dark:text-white"&gt;&lt;i
                                    class="ri-reply-line align-middle me-1"&gt;&lt;/i&gt;Refunded&lt;/span&gt;
                        &lt;/td&gt;
                        &lt;td&gt;Apr 24,2022&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>
<!-- End:: row-6 -->

<!-- Start:: row-7 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 flex justify-between">
                <div class="box-title">
                    Table Head Primary
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full">
                        <thead class="bg-primary/10">
                            <tr class="border-b border-primary/10">
                                <th scope="col" class="text-start">User Name</th>
                                <th scope="col" class="text-start">Transaction Id</th>
                                <th scope="col" class="text-start">Created</th>
                                <th scope="col" class="text-start">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-primary/10">
                                <th scope="row" class="text-start">Harshrath</th>
                                <td>#5182-3467</td>
                                <td>24 May 2022</td>
                                <td>
                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-success !rounded-full"><i
                                                class="ri-download-2-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-info !rounded-full"><i
                                                class="ri-edit-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-primary/10">
                                <th scope="row" class="text-start">Zozo Hadid</th>
                                <td>#5182-3412</td>
                                <td>02 July 2022</td>
                                <td>
                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-success !rounded-full"><i
                                                class="ri-download-2-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-info !rounded-full"><i
                                                class="ri-edit-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-primary/10">
                                <th scope="row" class="text-start">Martiana</th>
                                <td>#5182-3423</td>
                                <td>15 April 2022</td>
                                <td>
                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-success !rounded-full"><i
                                                class="ri-download-2-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-info !rounded-full"><i
                                                class="ri-edit-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-primary/10">
                                <th scope="row" class="text-start">Alex Carey</th>
                                <td>#5182-3456</td>
                                <td>17 March 2022</td>
                                <td>
                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-success !rounded-full"><i
                                                class="ri-download-2-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-info !rounded-full"><i
                                                class="ri-edit-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"><i
                                                class="ri-delete-bin-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap min-w-full"&gt;
                &lt;thead class="bg-primary/10"&gt;
                    &lt;tr class="border-b border-primary/10"&gt;
                        &lt;th scope="col" class="text-start"&gt;User Name&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Transaction Id&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Created&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-primary/10"&gt;
                        &lt;th scope="row" class="text-start"&gt;Harshrath&lt;/th&gt;
                        &lt;td&gt;#5182-3467&lt;/td&gt;
                        &lt;td&gt;24 May 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn ti-btn-sm ti-btn-success !rounded-full"&gt;&lt;i
                                        class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn ti-btn-sm ti-btn-info !rounded-full"&gt;&lt;i
                                        class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"&gt;&lt;i
                                        class="ri-delete-bin-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-primary/10"&gt;
                        &lt;th scope="row" class="text-start"&gt;Zozo Hadid&lt;/th&gt;
                        &lt;td&gt;#5182-3412&lt;/td&gt;
                        &lt;td&gt;02 July 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn ti-btn-sm ti-btn-success !rounded-full"&gt;&lt;i
                                        class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn ti-btn-sm ti-btn-info !rounded-full"&gt;&lt;i
                                        class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"&gt;&lt;i
                                        class="ri-delete-bin-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-primary/10"&gt;
                        &lt;th scope="row" class="text-start"&gt;Martiana&lt;/th&gt;
                        &lt;td&gt;#5182-3423&lt;/td&gt;
                        &lt;td&gt;15 April 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn ti-btn-sm ti-btn-success !rounded-full"&gt;&lt;i
                                        class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn ti-btn-sm ti-btn-info !rounded-full"&gt;&lt;i
                                        class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"&gt;&lt;i
                                        class="ri-delete-bin-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-primary/10"&gt;
                        &lt;th scope="row" class="text-start"&gt;Alex Carey&lt;/th&gt;
                        &lt;td&gt;#5182-3456&lt;/td&gt;
                        &lt;td&gt;17 March 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn ti-btn-sm ti-btn-success !rounded-full"&gt;&lt;i
                                        class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn ti-btn-sm ti-btn-info !rounded-full"&gt;&lt;i
                                        class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);"
                                    class="ti-btn ti-btn-sm ti-btn-danger !rounded-full"&gt;&lt;i
                                        class="ri-delete-bin-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 flex justify-between">
                <div class="box-title">
                    Table Head warning
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full">
                        <thead class="bg-warning/10">
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">User Name</th>
                                <th scope="col" class="text-start">Transaction Id</th>
                                <th scope="col" class="text-start">Created</th>
                                <th scope="col" class="text-start">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Harshrath</th>
                                <td>#5182-3467</td>
                                <td>24 May 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Pending</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Zozo Hadid</th>
                                <td>#5182-3412</td>
                                <td>02 July 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Pending</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Martiana</th>
                                <td>#5182-3423</td>
                                <td>15 April 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger">Rejected</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Alex Carey</th>
                                <td>#5182-3456</td>
                                <td>17 March 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success">Processed</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap min-w-full"&gt;
                &lt;thead class="bg-warning/10"&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;User Name&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Transaction Id&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Created&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Harshrath&lt;/th&gt;
                        &lt;td&gt;#5182-3467&lt;/td&gt;
                        &lt;td&gt;24 May 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary"&gt;Pending&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Zozo Hadid&lt;/th&gt;
                        &lt;td&gt;#5182-3412&lt;/td&gt;
                        &lt;td&gt;02 July 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary"&gt;Pending&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Martiana&lt;/th&gt;
                        &lt;td&gt;#5182-3423&lt;/td&gt;
                        &lt;td&gt;15 April 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger"&gt;Rejected&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Alex Carey&lt;/th&gt;
                        &lt;td&gt;#5182-3456&lt;/td&gt;
                        &lt;td&gt;17 March 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success"&gt;Processed&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 flex justify-between">
                <div class="box-title">
                    Table Head Success
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full">
                        <thead class="bg-success/10">
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">User Name</th>
                                <th scope="col" class="text-start">Transaction Id</th>
                                <th scope="col" class="text-start">Created</th>
                                <th scope="col" class="text-start">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row">Harshrath</th>
                                <td>#5182-3467</td>
                                <td>24 May 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Pending</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Zozo Hadid</th>
                                <td>#5182-3412</td>
                                <td>02 July 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Pending</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Martiana</th>
                                <td>#5182-3423</td>
                                <td>15 April 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger">Rejected</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Alex Carey</th>
                                <td>#5182-3456</td>
                                <td>17 March 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success">Processed</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap min-w-full"&gt;
                &lt;thead class="bg-success/10"&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;User Name&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Transaction Id&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Created&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;Harshrath&lt;/th&gt;
                        &lt;td&gt;#5182-3467&lt;/td&gt;
                        &lt;td&gt;24 May 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary"&gt;Pending&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Zozo Hadid&lt;/th&gt;
                        &lt;td&gt;#5182-3412&lt;/td&gt;
                        &lt;td&gt;02 July 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary"&gt;Pending&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Martiana&lt;/th&gt;
                        &lt;td&gt;#5182-3423&lt;/td&gt;
                        &lt;td&gt;15 April 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger"&gt;Rejected&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Alex Carey&lt;/th&gt;
                        &lt;td&gt;#5182-3456&lt;/td&gt;
                        &lt;td&gt;17 March 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success"&gt;Processed&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 flex justify-between">
                <div class="box-title">
                    Table Head Info
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full">
                        <thead class="bg-info/10">
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">User Name</th>
                                <th scope="col" class="text-start">Transaction Id</th>
                                <th scope="col" class="text-start">Created</th>
                                <th scope="col" class="text-start">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Harshrath</th>
                                <td>#5182-3467</td>
                                <td>24 May 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Pending</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Zozo Hadid</th>
                                <td>#5182-3412</td>
                                <td>02 July 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Pending</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Martiana</th>
                                <td>#5182-3423</td>
                                <td>15 April 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger">Rejected</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Alex Carey</th>
                                <td>#5182-3456</td>
                                <td>17 March 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success">Processed</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap min-w-full"&gt;
                &lt;thead class="bg-info/10"&gt;
                    &lt;tr  class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;User Name&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Transaction Id&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Created&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Harshrath&lt;/th&gt;
                        &lt;td&gt;#5182-3467&lt;/td&gt;
                        &lt;td&gt;24 May 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary"&gt;Pending&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Zozo Hadid&lt;/th&gt;
                        &lt;td&gt;#5182-3412&lt;/td&gt;
                        &lt;td&gt;02 July 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary"&gt;Pending&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Martiana&lt;/th&gt;
                        &lt;td&gt;#5182-3423&lt;/td&gt;
                        &lt;td&gt;15 April 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger"&gt;Rejected&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Alex Carey&lt;/th&gt;
                        &lt;td&gt;#5182-3456&lt;/td&gt;
                        &lt;td&gt;17 March 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success"&gt;Processed&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 flex justify-between">
                <div class="box-title">
                    Table Head Secondary
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive ">
                    <table class="table whitespace-nowrap min-w-full">
                        <thead class="bg-secondary/10">
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">User Name</th>
                                <th scope="col" class="text-start">Transaction Id</th>
                                <th scope="col" class="text-start">Created</th>
                                <th scope="col" class="text-start">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Harshrath</th>
                                <td>#5182-3467</td>
                                <td>24 May 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Pending</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Zozo Hadid</th>
                                <td>#5182-3412</td>
                                <td>02 July 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Pending</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Martiana</th>
                                <td>#5182-3423</td>
                                <td>15 April 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger">Rejected</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Alex Carey</th>
                                <td>#5182-3456</td>
                                <td>17 March 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success">Processed</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive "&gt;
            &lt;table class="table whitespace-nowrap min-w-full"&gt;
                &lt;thead class="bg-secondary/10"&gt;
                    &lt;tr  class="border-b border-defaultborder" &gt;
                        &lt;th scope="col" class="text-start"&gt;User Name&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Transaction Id&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Created&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr  class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Harshrath&lt;/th&gt;
                        &lt;td&gt;#5182-3467&lt;/td&gt;
                        &lt;td&gt;24 May 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary"&gt;Pending&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr  class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Zozo Hadid&lt;/th&gt;
                        &lt;td&gt;#5182-3412&lt;/td&gt;
                        &lt;td&gt;02 July 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary"&gt;Pending&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr  class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Martiana&lt;/th&gt;
                        &lt;td&gt;#5182-3423&lt;/td&gt;
                        &lt;td&gt;15 April 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger"&gt;Rejected&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr  class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Alex Carey&lt;/th&gt;
                        &lt;td&gt;#5182-3456&lt;/td&gt;
                        &lt;td&gt;17 March 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success"&gt;Processed&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 flex justify-between">
                <div class="box-title">
                    Table Head Danger
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full">
                        <thead class="bg-danger/10">
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">User Name</th>
                                <th scope="col" class="text-start">Transaction Id</th>
                                <th scope="col" class="text-start">Created</th>
                                <th scope="col" class="text-start">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Harshrath</th>
                                <td>#5182-3467</td>
                                <td>24 May 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Pending</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Zozo Hadid</th>
                                <td>#5182-3412</td>
                                <td>02 July 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary">Pending</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Martiana</th>
                                <td>#5182-3423</td>
                                <td>15 April 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger">Rejected</button>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Alex Carey</th>
                                <td>#5182-3456</td>
                                <td>17 March 2022</td>
                                <td>
                                    <button type="button"
                                        class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success">Processed</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap min-w-full"&gt;
                &lt;thead class="bg-danger/10"&gt;
                    &lt;tr  class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;User Name&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Transaction Id&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Created&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr  class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Harshrath&lt;/th&gt;
                        &lt;td&gt;#5182-3467&lt;/td&gt;
                        &lt;td&gt;24 May 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary"&gt;Pending&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr  class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Zozo Hadid&lt;/th&gt;
                        &lt;td&gt;#5182-3412&lt;/td&gt;
                        &lt;td&gt;02 July 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-primary"&gt;Pending&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr  class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Martiana&lt;/th&gt;
                        &lt;td&gt;#5182-3423&lt;/td&gt;
                        &lt;td&gt;15 April 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-danger"&gt;Rejected&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr  class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Alex Carey&lt;/th&gt;
                        &lt;td&gt;#5182-3456&lt;/td&gt;
                        &lt;td&gt;17 March 2022&lt;/td&gt;
                        &lt;td&gt;
                            &lt;button type="button" class="ti-btn !py-1 !px-2 !text-[0.75rem] ti-btn-success"&gt;Processed&lt;/button&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>
<!-- End:: row-7 -->

<!-- Start:: row-8 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 flex justify-between">
                <div class="box-title">
                    Table Foot
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full">
                        <thead class="bg-primary/10">
                            <tr class="border-b border-defaultborder">
                                <th scope="col">S.No</th>
                                <th scope="col">Team</th>
                                <th scope="col">Matches Won</th>
                                <th scope="col">Win Ratio</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row">
                                    01
                                </th>
                                <td>
                                    Manchester
                                </td>
                                <td>
                                    232
                                </td>
                                <td>
                                    <span class="badge bg-primary text-white">42%</span>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row">
                                    02
                                </th>
                                <td>
                                    Barcelona
                                </td>
                                <td>
                                    175
                                </td>
                                <td><span class="badge bg-primary text-white">58%</span></td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row">
                                    03
                                </th>
                                <td>
                                    Portugal
                                </td>
                                <td>
                                    126
                                </td>
                                <td><span class="badge bg-primary text-white">32%</span></td>
                            </tr>
                        </tbody>
                        <tfoot class="bg-primary/10">
                            <tr class="border-b border-defaultborder">
                                <th scope="row">
                                    Total
                                </th>
                                <td>
                                    United States
                                </td>
                                <td>
                                    558
                                </td>
                                <td><span class="badge bg-primary text-white">56%</span></td>
                            </tr>
                        </tfoot>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap min-w-full"&gt;
                &lt;thead class="bg-primary/10"&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col"&gt;S.No&lt;/th&gt;
                        &lt;th scope="col"&gt;Team&lt;/th&gt;
                        &lt;th scope="col"&gt;Matches Won&lt;/th&gt;
                        &lt;th scope="col"&gt;Win Ratio&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;
                            01
                        &lt;/th&gt;
                        &lt;td&gt;
                            Manchester
                        &lt;/td&gt;
                        &lt;td&gt;
                            232
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;span class="badge bg-primary text-white"&gt;42%&lt;/span&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;
                            02
                        &lt;/th&gt;
                        &lt;td&gt;
                            Barcelona
                        &lt;/td&gt;
                        &lt;td&gt;
                            175
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-primary text-white"&gt;58%&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;
                            03
                        &lt;/th&gt;
                        &lt;td&gt;
                            Portugal
                        &lt;/td&gt;
                        &lt;td&gt;
                            126
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-primary text-white"&gt;32%&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
                &lt;tfoot class="bg-primary/10"&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;
                            Total
                        &lt;/th&gt;
                        &lt;td&gt;
                            United States
                        &lt;/td&gt;
                        &lt;td&gt;
                            558
                        &lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-primary text-white"&gt;56%&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tfoot&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 !border-b flex justify-between">
                <div class="box-title">
                    Table With Caption
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full caption-bottom">
                        <caption class="!ps-3">Top 3 Countries</caption>
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">S.No</th>
                                <th scope="col" class="text-start">Country</th>
                                <th scope="col" class="text-start">Medals Won</th>
                                <th scope="col" class="text-start">No Of Athletes</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">01</th>
                                <td>United States</td>
                                <td>2012<i class="ri-medal-line mx-2"></i></td>
                                <td>1823</td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">02</th>
                                <td>United Kingdom</td>
                                <td>1012<i class="ri-medal-line mx-2"></i></td>
                                <td>992</td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">03</th>
                                <td>Germany</td>
                                <td>914<i class="ri-medal-line mx-2"></i></td>
                                <td>875</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden !border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap min-w-full caption-bottom"&gt;
                &lt;caption&gt;Top 3 Countries&lt;/caption&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;S.No&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Country&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Medals Won&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;No Of Athletes&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;01&lt;/th&gt;
                        &lt;td&gt;United States&lt;/td&gt;
                        &lt;td&gt;2012&lt;i class="ri-medal-line mx-2"&gt;&lt;/i&gt;&lt;/td&gt;
                        &lt;td&gt;1823&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;02&lt;/th&gt;
                        &lt;td&gt;United Kingdom&lt;/td&gt;
                        &lt;td&gt;1012&lt;i class="ri-medal-line mx-2"&gt;&lt;/i&gt;&lt;/td&gt;
                        &lt;td&gt;992&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;03&lt;/th&gt;
                        &lt;td&gt;Germany&lt;/td&gt;
                        &lt;td&gt;914&lt;i class="ri-medal-line mx-2"&gt;&lt;/i&gt;&lt;/td&gt;
                        &lt;td&gt;875&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-4 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 !border-b flex justify-between">
                <div class="box-title">
                    Table With Top Caption
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full caption-top">
                        <caption class="!ps-3 !border-b border-defaultborder dark:border-defaultborder/10">
                            Top IT Companies</caption>
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col">S.No</th>
                                <th scope="col">Name</th>
                                <th scope="col">Revenue</th>
                                <th scope="col">Country</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row">1</th>
                                <td>Microsoft</td>
                                <td>$170 billion</td>
                                <td>United States</td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row">2</th>
                                <td>HP</td>
                                <td>$72 billion</td>
                                <td>United States</td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row">3</th>
                                <td>IBM</td>
                                <td>$60 billion</td>
                                <td>United States</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden !border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap caption-top"&gt;
                &lt;caption&gt;Top IT Companies&lt;/caption&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col"&gt;S.No&lt;/th&gt;
                        &lt;th scope="col"&gt;Name&lt;/th&gt;
                        &lt;th scope="col"&gt;Revenue&lt;/th&gt;
                        &lt;th scope="col"&gt;Country&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;1&lt;/th&gt;
                        &lt;td&gt;Microsoft&lt;/td&gt;
                        &lt;td&gt;$170 billion&lt;/td&gt;
                        &lt;td&gt;United States&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;2&lt;/th&gt;
                        &lt;td&gt;HP&lt;/td&gt;
                        &lt;td&gt;$72 billion&lt;/td&gt;
                        &lt;td&gt;United States&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;3&lt;/th&gt;
                        &lt;td&gt;IBM&lt;/td&gt;
                        &lt;td&gt;$60 billion&lt;/td&gt;
                        &lt;td&gt;United States&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>
<!-- End:: row-8 -->

<!-- Start:: row-9 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 !border-b flex justify-between">
                <div class="box-title">
                    Active Tables
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full">
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">Name</th>
                                <th scope="col" class="text-start">Created On</th>
                                <th scope="col" class="text-start">Number</th>
                                <th scope="col" class="text-start">Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="table-active">
                                <th scope="row" class="text-start">Mark</th>
                                <td>21,Dec 2021</td>
                                <td>+1234-12340</td>
                                <td><span class="badge bg-primary text-white">Completed</span></td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Monika</th>
                                <td>29,April 2022</td>
                                <td>+1523-12459</td>
                                <td><span class="badge bg-warning text-white">Failed</span></td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Madina</th>
                                <td>30,Nov 2022</td>
                                <td class="table-active">+1982-16234</td>
                                <td><span class="badge bg-success text-white">Successful</span></td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Bhamako</th>
                                <td>18,Mar 2022</td>
                                <td>+1526-10729</td>
                                <td><span class="badge bg-secondary text-white">Pending</span></td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;Name&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Created On&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Number&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="table-active"&gt;
                        &lt;th scope="row" class="text-start"&gt;Mark&lt;/th&gt;
                        &lt;td&gt;21,Dec 2021&lt;/td&gt;
                        &lt;td&gt;+1234-12340&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-primary text-white"&gt;Completed&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Monika&lt;/th&gt;
                        &lt;td&gt;29,April 2022&lt;/td&gt;
                        &lt;td&gt;+1523-12459&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-warning text-white"&gt;Failed&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Madina&lt;/th&gt;
                        &lt;td&gt;30,Nov 2022&lt;/td&gt;
                        &lt;td class="table-active"&gt;+1982-16234&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-success text-white"&gt;Successful&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Bhamako&lt;/th&gt;
                        &lt;td&gt;18,Mar 2022&lt;/td&gt;
                        &lt;td&gt;+1526-10729&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-secondary text-white"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header !pb-3 !border-b flex justify-between">
                <div class="box-title">
                    Small Tables
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-sm min-w-full">
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start !ps-4 !py-3">Invoice</th>
                                <th scope="col" class="text-start !py-3">Created Date</th>
                                <th scope="col" class="text-start !py-3">Status</th>
                                <th scope="col" class="text-start !py-3">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start !ps-4">
                                    <div class="form-check flex items-center gap-2">
                                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm"
                                            checked>
                                        <label class="form-check-label" for="checkebox-sm">
                                            Zelensky
                                        </label>
                                    </div>
                                </th>
                                <td>25-Apr-2021</td>
                                <td><span class="badge bg-success/10 text-succes">Paid</span></td>
                                <td>
                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"><i
                                                class="ri-download-2-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"><i
                                                class="ri-edit-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start !ps-4">
                                    <div class="form-check flex items-center gap-2">
                                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm1">
                                        <label class="form-check-label" for="checkebox-sm1">
                                            Kim Jong
                                        </label>
                                    </div>
                                </th>
                                <td>29-April-2022</td>
                                <td><span class="badge bg-danger/10 text-danger">Pending</span></td>
                                <td>
                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"><i
                                                class="ri-download-2-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"><i
                                                class="ri-edit-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start !ps-4">
                                    <div class="form-check flex items-center gap-2">
                                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm2">
                                        <label class="form-check-label" for="checkebox-sm2">
                                            Obana
                                        </label>
                                    </div>
                                </th>
                                <td>30-Nov-2022</td>
                                <td><span class="badge bg-success/10 text-success">Paid</span></td>
                                <td>
                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"><i
                                                class="ri-download-2-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"><i
                                                class="ri-edit-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start !ps-4">
                                    <div class="form-check flex items-center gap-2">
                                        <input class="form-check-input" type="checkbox" value="" id="checkebox-sm3">
                                        <label class="form-check-label" for="checkebox-sm3">
                                            Sean Paul
                                        </label>
                                    </div>
                                </th>
                                <td>01-Jan-2022</td>
                                <td><span class="badge bg-success/10 text-success">Paid</span></td>
                                <td>
                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"><i
                                                class="ri-download-2-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"><i
                                                class="ri-edit-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-sm min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;Invoice&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Created Date&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Status&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Action&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            &lt;div class="form-check flex items-center gap-2"&gt;
                                &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm" checked&gt;
                                &lt;label class="form-check-label" for="checkebox-sm"&gt;
                                    Zelensky
                                &lt;/label&gt;
                            &lt;/div&gt;
                        &lt;/th&gt;
                        &lt;td&gt;25-Apr-2021&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-success/10 text-succes"&gt;Paid&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            &lt;div class="form-check flex items-center gap-2"&gt;
                                &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm1"&gt;
                                &lt;label class="form-check-label" for="checkebox-sm1"&gt;
                                    Kim Jong
                                &lt;/label&gt;
                            &lt;/div&gt;
                        &lt;/th&gt;
                        &lt;td&gt;29-April-2022&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-danger/10 text-danger"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            &lt;div class="form-check flex items-center gap-2"&gt;
                                &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm2"&gt;
                                &lt;label class="form-check-label" for="checkebox-sm2"&gt;
                                    Obana
                                &lt;/label&gt;
                            &lt;/div&gt;
                        &lt;/th&gt;
                        &lt;td&gt;30-Nov-2022&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-success/10 text-success"&gt;Paid&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            &lt;div class="form-check flex items-center gap-2"&gt;
                                &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm3"&gt;
                                &lt;label class="form-check-label" for="checkebox-sm3"&gt;
                                    Sean Paul
                                &lt;/label&gt;
                            &lt;/div&gt;
                        &lt;/th&gt;
                        &lt;td&gt;01-Jan-2022&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-success/10 text-success"&gt;Paid&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;
                            &lt;div class="form-check flex items-center gap-2"&gt;
                                &lt;input class="form-check-input" type="checkbox" value="" id="checkebox-sm4"&gt;
                                &lt;label class="form-check-label" for="checkebox-sm4"&gt;
                                    Karizma
                                &lt;/label&gt;
                            &lt;/div&gt;
                        &lt;/th&gt;
                        &lt;td&gt;14-Feb-2022&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-danger/10 text-danger"&gt;Pending&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-light"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>
<!-- End:: row-9 -->

<!-- Start:: row-10 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Color variants tables
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full">
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">Color</th>
                                <th scope="col" class="text-start">Client</th>
                                <th scope="col" class="text-start">State</th>
                                <th scope="col" class="text-start">Quantity</th>
                                <th scope="col" class="text-start">Total Price</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">Default</th>
                                <td>Rita Book</td>
                                <td><span class="badge bg-primary/10 text-primary">Processed</span></td>
                                <td>22</td>
                                <td>$2,012</td>
                            </tr>

                            <tr class="table-primary border-b border-defaultborder">
                                <th scope="row" class="text-start">Primary</th>
                                <td>Rhoda Report</td>
                                <td><span class="badge bg-primary text-white">Processed</span></td>
                                <td>22</td>
                                <td>$4,254</td>
                            </tr>
                            <tr class="table-secondary border-b border-defaultborder">
                                <th scope="row" class="text-start">Secondary</th>
                                <td>Rita Book</td>
                                <td><span class="badge bg-secondary text-white">Processed</span></td>
                                <td>26</td>
                                <td>$1,234</td>
                            </tr>
                            <tr class="table-success border-b border-defaultborder">
                                <th scope="row" class="text-start">Success</th>
                                <td>Anne Teak</td>
                                <td><span class="badge bg-success text-white">Processed</span></td>
                                <td>42</td>
                                <td>$2,623</td>
                            </tr>
                            <tr class="table-danger border-b border-defaultborder">
                                <th scope="row" class="text-start">Danger</th>
                                <td>Dee End</td>
                                <td><span class="badge bg-danger text-white">Processed</span></td>
                                <td>52</td>
                                <td>$32,132</td>
                            </tr>
                            <tr class="table-warning border-b border-defaultborder">
                                <th scope="row" class="text-start">Warning</th>
                                <td>Lee Nonmi</td>
                                <td><span class="badge bg-warning text-white">Processed</span></td>
                                <td>10</td>
                                <td>$1,434</td>
                            </tr>
                            <tr class="table-info border-b border-defaultborder">
                                <th scope="row" class="text-start">Info</th>
                                <td>Lynne Gwistic</td>
                                <td><span class="badge bg-info text-white">Processed</span></td>
                                <td>63</td>
                                <td>$1,854</td>
                            </tr>
                            <tr class="table-light border-b border-defaultborder">
                                <th scope="row" class="text-start">Light</th>
                                <td>Fran Tick</td>
                                <td><span class="badge bg-light text-dark">Processed</span></td>
                                <td>05</td>
                                <td>$823</td>
                            </tr>
                            <tr class="table-dark border-b border-defaultborder">
                                <th scope="row" class="text-start">Dark</th>
                                <td>Polly Pipe</td>
                                <td><span class="badge bg-black text-white">Processed</span></td>
                                <td>35</td>
                                <td>$1,832</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;Color&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Client&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;State&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Quantity&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Total Price&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Default&lt;/th&gt;
                        &lt;td&gt;Rita Book&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-primary/10 text-primary"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;22&lt;/td&gt;
                        &lt;td&gt;$2,012&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="table-primary border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Primary&lt;/th&gt;
                        &lt;td&gt;Rhoda Report&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-primary text-white"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;22&lt;/td&gt;
                        &lt;td&gt;$4,254&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="table-secondary border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Secondary&lt;/th&gt;
                        &lt;td&gt;Rita Book&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-secondary text-white"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;26&lt;/td&gt;
                        &lt;td&gt;$1,234&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="table-success border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Success&lt;/th&gt;
                        &lt;td&gt;Anne Teak&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-success text-white"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;42&lt;/td&gt;
                        &lt;td&gt;$2,623&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="table-danger border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Danger&lt;/th&gt;
                        &lt;td&gt;Dee End&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-danger text-white"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;52&lt;/td&gt;
                        &lt;td&gt;$32,132&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="table-warning border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Warning&lt;/th&gt;
                        &lt;td&gt;Lee Nonmi&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-warning text-white"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;10&lt;/td&gt;
                        &lt;td&gt;$1,434&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="table-info border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Info&lt;/th&gt;
                        &lt;td&gt;Lynne Gwistic&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-info text-white"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;63&lt;/td&gt;
                        &lt;td&gt;$1,854&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="table-light border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Light&lt;/th&gt;
                        &lt;td&gt;Fran Tick&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-light text-dark"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;05&lt;/td&gt;
                        &lt;td&gt;$823&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="table-dark border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;Dark&lt;/th&gt;
                        &lt;td&gt;Polly Pipe&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-black text-white"&gt;Processed&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;35&lt;/td&gt;
                        &lt;td&gt;$1,832&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
    <div class="xl:col-span-6 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Nesting
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap table-striped table-bordered min-w-full">
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="text-start">#</th>
                                <th scope="col" class="text-start">First</th>
                                <th scope="col" class="text-start">Last</th>
                                <th scope="col" class="text-start">Handle</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">1</th>
                                <td>Mark</td>
                                <td>Otto</td>
                                <td>@mdo</td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <td colspan="4">
                                    <table class="table whitespace-nowrap mb-0 min-w-full">
                                        <thead>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="col" class="text-start">Alphabets</th>
                                                <th scope="col" class="text-start">Users</th>
                                                <th scope="col" class="text-start">Email</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">A</th>
                                                <td>Dino King</td>
                                                <td>dinoking231@gmail.com</td>
                                            </tr>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">B</th>
                                                <td>Poppins sams</td>
                                                <td>pops@gmail.com</td>
                                            </tr>
                                            <tr class="border-b border-defaultborder">
                                                <th scope="row" class="text-start">C</th>
                                                <td>Brian Shaw</td>
                                                <td>swanbrian@gmail.com</td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">3</th>
                                <td>Larry</td>
                                <td>the Bird</td>
                                <td>@twitter</td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">4</th>
                                <td>Jimmy</td>
                                <td>the Ostrich</td>
                                <td>Dummy Text</td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row" class="text-start">5</th>
                                <td>Cobra Kai</td>
                                <td>the Snake</td>
                                <td>Another Name</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap table-striped table-bordered min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="text-start"&gt;#&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;First&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Last&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Handle&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;1&lt;/th&gt;
                        &lt;td&gt;Mark&lt;/td&gt;
                        &lt;td&gt;Otto&lt;/td&gt;
                        &lt;td&gt;@mdo&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;td colspan="4"&gt;
                            &lt;table class="table whitespace-nowrap mb-0 min-w-full"&gt;
                                &lt;thead&gt;
                                    &lt;tr class="border-b border-defaultborder"&gt;
                                        &lt;th scope="col" class="text-start"&gt;Aplhabets&lt;/th&gt;
                                        &lt;th scope="col" class="text-start"&gt;Users&lt;/th&gt;
                                        &lt;th scope="col" class="text-start"&gt;Email&lt;/th&gt;
                                    &lt;/tr&gt;
                                &lt;/thead&gt;
                                &lt;tbody&gt;
                                    &lt;tr class="border-b border-defaultborder"&gt;
                                        &lt;th scope="row" class="text-start"&gt;A&lt;/th&gt;
                                        &lt;td&gt;Dino King&lt;/td&gt;
                                        &lt;td&gt;dinoking231@gmail.com&lt;/td&gt;
                                    &lt;/tr&gt;
                                    &lt;tr class="border-b border-defaultborder"&gt;
                                        &lt;th scope="row" class="text-start"&gt;B&lt;/th&gt;
                                        &lt;td&gt;Poppins sams&lt;/td&gt;
                                        &lt;td&gt;pops@gmail.com&lt;/td&gt;
                                    &lt;/tr&gt;
                                    &lt;tr class="border-b border-defaultborder"&gt;
                                        &lt;th scope="row" class="text-start"&gt;C&lt;/th&gt;
                                        &lt;td&gt;Brian Shaw&lt;/td&gt;
                                        &lt;td&gt;swanbrian@gmail.com&lt;/td&gt;
                                    &lt;/tr&gt;
                                &lt;/tbody&gt;
                            &lt;/table&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;3&lt;/th&gt;
                        &lt;td&gt;Larry&lt;/td&gt;
                        &lt;td&gt;the Bird&lt;/td&gt;
                        &lt;td&gt;@twitter&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;4&lt;/th&gt;
                        &lt;td&gt;Jimmy&lt;/td&gt;
                        &lt;td&gt;the Ostrich&lt;/td&gt;
                        &lt;td&gt;Dummy Text&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row" class="text-start"&gt;5&lt;/th&gt;
                        &lt;td&gt;Cobra Kai&lt;/td&gt;
                        &lt;td&gt;the Snake&lt;/td&gt;
                        &lt;td&gt;Another Name&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>
<!-- End:: row-10 -->

<!-- Start:: row-11 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-12 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Always responsive
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table whitespace-nowrap min-w-full">
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col"><input class="form-check-input" type="checkbox" id="checkboxNoLabel"
                                        value="" aria-label="..."></th>
                                <th scope="col" class="text-start">Team Head</th>
                                <th scope="col" class="text-start">Category</th>
                                <th scope="col" class="text-start">Role</th>
                                <th scope="col" class="text-start">Gmail</th>
                                <th scope="col" class="text-start">Team</th>
                                <th scope="col" class="text-start">Work Progress</th>
                                <th scope="col" class="text-start">Revenue</th>
                                <th scope="col" class="text-start">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel1"
                                        value="" aria-label="..."></th>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                        </span>Mayor Kelly
                                    </div>
                                </td>
                                <td>Manufacturer</td>
                                <td><span class="badge bg-primary/10 text-primary">Team Lead</span></td>
                                <td>mayorkrlly@gmail.com</td>
                                <td>
                                    <div class="avatar-list-stacked flex items-center -space-x-2">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                            href="javascript:void(0);">
                                            +4
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary w-[52%]" aria-valuenow="52"
                                            aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                                <td>$10,984.29</td>
                                <td>
                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-success-full"><i
                                                class="ri-download-2-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info-full"><i
                                                class="ri-edit-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel2"
                                        value="" aria-label="..."></th>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img">
                                        </span>Andrew Garfield
                                    </div>
                                </td>
                                <td>Managing Director</td>
                                <td><span class="badge bg-warning/10 text-warning">Director</span></td>
                                <td>andrewgarfield@gmail.com</td>
                                <td>
                                    <div class="avatar-list-stacked flex items-center -space-x-2">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                            href="javascript:void(0);">
                                            +4
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary w-[91%]" aria-valuenow="91"
                                            aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                                <td>$1.4billion</td>
                                <td>
                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-success-full"><i
                                                class="ri-download-2-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info-full"><i
                                                class="ri-edit-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel3"
                                        value="" aria-label="..."></th>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                        </span>Simon Cowel
                                    </div>
                                </td>
                                <td>Service Manager</td>
                                <td><span class="badge bg-success/10 text-success">Manager</span></td>
                                <td>simoncowel234@gmail.com</td>
                                <td>
                                    <div class="avatar-list-stacked flex items-center -space-x-2">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                            href="javascript:void(0);">
                                            +10
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary w-[45%]" aria-valuenow="45"
                                            aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                                <td>$7,123.21</td>
                                <td>
                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-success-full"><i
                                                class="ri-download-2-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info-full"><i
                                                class="ri-edit-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <th scope="row"><input class="form-check-input" type="checkbox" id="checkboxNoLabel13"
                                        value="" aria-label="..."></th>
                                <td>
                                    <div class="flex items-center">
                                        <span class="avatar avatar-xs me-2 online avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img">
                                        </span>Mirinda Hers
                                    </div>
                                </td>
                                <td>Recruiter</td>
                                <td><span class="badge bg-danger/10 text-danger">Employee</span></td>
                                <td>mirindahers@gmail.com</td>
                                <td>
                                    <div class="avatar-list-stacked flex items-center -space-x-2">
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                        </span>
                                        <span class="avatar avatar-sm avatar-rounded">
                                            <img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img">
                                        </span>
                                        <a class="avatar avatar-sm bg-primary text-white avatar-rounded"
                                            href="javascript:void(0);">
                                            +6
                                        </a>
                                    </div>
                                </td>
                                <td>
                                    <div class="progress progress-xs">
                                        <div class="progress-bar bg-primary w-[21%]" aria-valuenow="21"
                                            aria-valuemin="0" aria-valuemax="100">
                                        </div>
                                    </div>
                                </td>
                                <td>$2,325.45</td>
                                <td>
                                    <div class="hstack flex gap-3 text-[.9375rem]">
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-success-full"><i
                                                class="ri-download-2-line"></i></a>
                                        <a aria-label="anchor" href="javascript:void(0);"
                                            class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info-full"><i
                                                class="ri-edit-line"></i></a>
                                    </div>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table whitespace-nowrap min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel" value="" aria-label="..."&gt;&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Team Head&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Category&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Role&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Gmail&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Team&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Work Progress&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Revenue&lt;/th&gt;
                        &lt;th scope="col" class="text-start"&gt;Action&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel1" value="" aria-label="..."&gt;&lt;/th&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Mayor Kelly
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;Manufacturer&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-primary/10 text-primary"&gt;Team Lead&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;mayorkrlly@gmail.com&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center -space-x-2"&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);"&gt;
                                    +4
                                &lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="progress progress-xs"&gt;
                                &lt;div class="progress-bar bg-primary w-[52%]" aria-valuenow="52" aria-valuemin="0" aria-valuemax="100"&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;$10,984.29&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-success-full"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info-full"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel2" value="" aria-label="..."&gt;&lt;/th&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/12.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Andrew Garfield
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;Managing Director&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-warning/10 text-warning"&gt;Director&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;andrewgarfield@gmail.com&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center -space-x-2"&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/1.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);"&gt;
                                    +4
                                &lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="progress progress-xs"&gt;
                                &lt;div class="progress-bar bg-primary w-[91%]" aria-valuenow="91" aria-valuemin="0" aria-valuemax="100"&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;$1.4billion&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-success-full"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info-full"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel3" value="" aria-label="..."&gt;&lt;/th&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Simon Cowel
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;Service Manager&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-success/10 text-success"&gt;Manager&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;simoncowel234@gmail.com&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center -space-x-2"&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/6.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/16.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);"&gt;
                                    +10
                                &lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="progress progress-xs"&gt;
                                &lt;div class="progress-bar bg-primary w-[45%]" aria-valuenow="45" aria-valuemin="0" aria-valuemax="100"&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;$7,123.21&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-success-full"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info-full"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="row"&gt;&lt;input class="form-check-input" type="checkbox" id="checkboxNoLabel13" value="" aria-label="..."&gt;&lt;/th&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center"&gt;
                                &lt;span class="avatar avatar-xs me-2 online avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/5.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;Mirinda Hers
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;Recruiter&lt;/td&gt;
                        &lt;td&gt;&lt;span class="badge bg-danger/10 text-danger"&gt;Employee&lt;/span&gt;&lt;/td&gt;
                        &lt;td&gt;mirindahers@gmail.com&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="flex items-center -space-x-2"&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/3.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;span class="avatar avatar-sm avatar-rounded"&gt;
                                    &lt;img src="{{asset('build/assets/images/faces/14.jpg')}}" alt="img"&gt;
                                &lt;/span&gt;
                                &lt;a class="avatar avatar-sm bg-primary text-white avatar-rounded" href="javascript:void(0);"&gt;
                                    +6
                                &lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="progress progress-xs"&gt;
                                &lt;div class="progress-bar bg-primary w-[21%]" aria-valuenow="21" aria-valuemin="0" aria-valuemax="100"&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                        &lt;td&gt;$2,325.45&lt;/td&gt;
                        &lt;td&gt;
                            &lt;div class="hstack flex gap-3 text-[.9375rem]"&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-success-full"&gt;&lt;i class="ri-download-2-line"&gt;&lt;/i&gt;&lt;/a&gt;
                                &lt;a aria-label="anchor" href="javascript:void(0);" class="ti-btn ti-btn-icon ti-btn-sm ti-btn-info-full"&gt;&lt;i class="ri-edit-line"&gt;&lt;/i&gt;&lt;/a&gt;
                            &lt;/div&gt;
                        &lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>
<!-- End:: row-11 -->

<!-- Start:: row-12 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-12 col-span-12">
        <div class="box custom-box">
            <div class="box-header flex justify-between">
                <div class="box-title">
                    Vertical alignment
                </div>
                <div class="prism-toggle">
                    <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !font-medium !text-[0.75rem]">Show
                        Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                </div>
            </div>
            <div class="box-body !p-0">
                <div class="table-responsive">
                    <table class="table align-middle min-w-full">
                        <thead>
                            <tr class="border-b border-defaultborder">
                                <th scope="col" class="w-[25%] text-start">Heading 1</th>
                                <th scope="col" class="w-[25%] text-start">Heading 2</th>
                                <th scope="col" class="w-[25%] text-start">Heading 3</th>
                                <th scope="col" class="w-[25%] text-start">Heading 4</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr class="border-b border-defaultborder">
                                <td>This cell inherits <code>vertical-align: middle;</code> from
                                    the
                                    table</td>
                                <td>This cell inherits <code>vertical-align: middle;</code> from
                                    the
                                    table</td>
                                <td>This cell inherits <code>vertical-align: middle;</code> from
                                    the
                                    table</td>
                                <td>This here is some placeholder text, intended to take up
                                    quite a
                                    bit of vertical space, to demonstrate how the vertical
                                    alignment
                                    works in the preceding cells.</td>
                            </tr>
                            <tr class="align-bottom border-b border-defaultborder">
                                <td>This cell inherits <code>vertical-align: bottom;</code> from
                                    the
                                    table row</td>
                                <td>This cell inherits <code>vertical-align: bottom;</code> from
                                    the
                                    table row</td>
                                <td>This cell inherits <code>vertical-align: bottom;</code> from
                                    the
                                    table row</td>
                                <td>This here is some placeholder text, intended to take up
                                    quite a
                                    bit of vertical space, to demonstrate how the vertical
                                    alignment
                                    works in the preceding cells.</td>
                            </tr>
                            <tr class="border-b border-defaultborder">
                                <td>This cell inherits <code>vertical-align: middle;</code> from
                                    the
                                    table</td>
                                <td>This cell inherits <code>vertical-align: middle;</code> from
                                    the
                                    table</td>
                                <td class="align-top">This cell is aligned to the top.</td>
                                <td>This here is some placeholder text, intended to take up
                                    quite a
                                    bit of vertical space, to demonstrate how the vertical
                                    alignment
                                    works in the preceding cells.</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="box-footer hidden border-t-0">
                <!-- Prism Code -->
                <pre class="language-html"><code class="language-html">
        &lt;div class="table-responsive"&gt;
            &lt;table class="table align-middle min-w-full"&gt;
                &lt;thead&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;th scope="col" class="w-[25%] text-start"&gt;Heading 1&lt;/th&gt;
                        &lt;th scope="col" class="w-[25%] text-start"&gt;Heading 2&lt;/th&gt;
                        &lt;th scope="col" class="w-[25%] text-start"&gt;Heading 3&lt;/th&gt;
                        &lt;th scope="col" class="w-[25%] text-start"&gt;Heading 4&lt;/th&gt;
                    &lt;/tr&gt;
                &lt;/thead&gt;
                &lt;tbody&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                            the
                            table&lt;/td&gt;
                        &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                            the
                            table&lt;/td&gt;
                        &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                            the
                            table&lt;/td&gt;
                        &lt;td&gt;This here is some placeholder text, intended to take up
                            quite a
                            bit of vertical space, to demonstrate how the vertical
                            alignment
                            works in the preceding cells.&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="align-bottom border-b border-defaultborder"&gt;
                        &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from
                            the
                            table row&lt;/td&gt;
                        &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from
                            the
                            table row&lt;/td&gt;
                        &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: bottom;&lt;/code&gt; from
                            the
                            table row&lt;/td&gt;
                        &lt;td&gt;This here is some placeholder text, intended to take up
                            quite a
                            bit of vertical space, to demonstrate how the vertical
                            alignment
                            works in the preceding cells.&lt;/td&gt;
                    &lt;/tr&gt;
                    &lt;tr class="border-b border-defaultborder"&gt;
                        &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                            the
                            table&lt;/td&gt;
                        &lt;td&gt;This cell inherits &lt;code&gt;vertical-align: middle;&lt;/code&gt; from
                            the
                            table&lt;/td&gt;
                        &lt;td class="align-top"&gt;This cell is aligned to the top.&lt;/td&gt;
                        &lt;td&gt;This here is some placeholder text, intended to take up
                            quite a
                            bit of vertical space, to demonstrate how the vertical
                            alignment
                            works in the preceding cells.&lt;/td&gt;
                    &lt;/tr&gt;
                &lt;/tbody&gt;
            &lt;/table&gt;
        &lt;/div&gt;</code></pre>
                <!-- Prism Code -->
            </div>
        </div>
    </div>
</div>
<!-- End:: row-12 -->

@endsection

@section('scripts')

<!-- Prism JS -->
<script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
@vite('resources/assets/js/prism-custom.js')

@endsection

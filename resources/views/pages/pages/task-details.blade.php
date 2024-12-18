
@extends('layouts.master')

@section('styles')



@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                    <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Task Details</h5>
                        <nav>
                        <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Task <i
                                class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                            </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Task Details 
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
                        <div class="xxl:col-span-9 xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between border-b pb-2">
                                    <div class="box-title">Task Summary</div>
                                    <div class="btn-list">
                                        <button aria-label="button" type="button"
                                            class="ti-btn bg-success !py-1 !px-2 !font-medium text-white !text-[0.75rem] me-0"><i
                                                class="ri-edit-line me-1 align-middle"></i>Edit Task</button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <h5 class="font-semibold mb-4 text-[1.25rem]">
                                        Update Valex new project design.
                                    </h5>
                                    <div class="text-[.9375rem] font-semibold mb-2">Task Description :</div>
                                    <p class="text-textmuted task-description">The current website design
                                        needs a refresh to improve user experience and enhance visual appeal. The goal is to
                                        create a modern and responsive design that aligns with the latest web design trends.
                                        The updated design should ensure seamless navigation, easy readability, and a
                                        cohesive visual identity.</p>
                                    <div class="text-[.9375rem] font-semibold mb-2">Key tasks :</div>
                                    <div>
                                        <ul class="task-details-key-tasks mb-0 !ps-8">
                                            <li>Conducting a comprehensive analysis of the existing website design.</li>
                                            <li>Collaborating with the UI/UX team to develop wireframes and mockups.</li>
                                            <li>Iteratively refining the design based on feedback.</li>
                                            <li>Implementing the finalized design changes using HTML, CSS, and JavaScript.
                                            </li>
                                            <li>Testing the website across different devices and browsers.</li>
                                            <li>Conducting a final review to ensure all design elements are consistent and
                                                visually appealing.</li>
                                        </ul>
                                    </div>
                                </div>
                                <div class="box-footer !border-defaultborder dark:!border-defaultborder/10">
                                    <div class="flex items-center justify-between gap-2 flex-wrap">
                                        <div>
                                            <span class="block text-textmuted text-[0.75rem]">Assigned
                                                By</span>
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-xs avatar-rounded">
                                                        <img src="{{asset('build/assets/images/faces/15.jpg')}}" alt="">
                                                    </span>
                                                </div>
                                                <span
                                                    class="block text-[.875rem] dark:text-defaulttextcolor/70 font-semibold">H.J.Taylor</span>
                                            </div>
                                        </div>
                                        <div>
                                            <span class="block text-textmuted text-[0.75rem]">Assigned
                                                Date</span>
                                            <span
                                                class="block text-[.875rem] font-semibold dark:text-defaulttextcolor/70">24,June
                                                2024</span>
                                        </div>
                                        <div>
                                            <span class="block text-textmuted text-[0.75rem]">Due
                                                Date</span>
                                            <span
                                                class="block text-[.875rem] font-semibold dark:text-defaulttextcolor/70">05,July
                                                2024</span>
                                        </div>
                                        <div class="task-details-progress">
                                            <span
                                                class="block text-textmuted text-[0.75rem] mb-1">Progress</span>
                                            <div class="flex items-center flex-wrap">
                                                <div class="progress progress-xs progress-animate flex-grow me-2"
                                                    aria-valuenow="70" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="progress-bar bg-primary w-[70%]"></div>
                                                </div>
                                            </div>
                                        </div>
                                        <div>
                                            <span
                                                class="block text-textmuted text-[0.75rem]">Efforts</span>
                                            <span
                                                class="block text-[.875rem]  dark:text-defaulttextcolor/70 font-semibold">45H
                                                : 35M : 45S</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="box">
                                <div class="box-header flex justify-between !border-b pb-4">
                                    <div class="box-title">Task Discussions</div>
                                </div>
                                <div class="box-body text-defaulttextcolor text-defaultsize">
                                    <ul class="list-none profile-timeline">
                                        <li>
                                            <div>
                                                <span
                                                    class="avatar avatar-sm bg-primary/10 !text-primary avatar-rounded profile-timeline-avatar">
                                                    E
                                                </span>
                                                <p class="mb-2">
                                                    <b>You</b> Commented on <b>Work Process</b> in this task <a
                                                        class="text-secondary" href="javascript:void(0);"><u>#New
                                                            Task</u></a>.<span
                                                        class="ltr:float-right rtl:float-left text-[.6875rem] text-textmuted">24,Dec
                                                        2024 - 14:34</span>
                                                </p>
                                                <p class="text-textmuted mb-0">
                                                    Task is important and need to be completed on time to meet company work
                                                    flow.
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="{{asset('build/assets/images/faces/11.jpg')}}" alt="">
                                                </span>
                                                <p class="text-textmuted mb-2">
                                                    <span class="text-default"><b>Json Smith</b> reacted to the task
                                                        👍</span>.<span
                                                        class="ltr:float-right rtl:float-left text-[.6875rem] text-textmuted">18,Dec
                                                        2024 - 12:16</span>
                                                </p>
                                                <p class="text-textmuted mb-0">
                                                    Lorem ipsum dolor sit amet consectetur adipisicing elit. Repudiandae,
                                                    repellendus rem rerum excepturi aperiam ipsam temporibus inventore ullam
                                                    tempora eligendi libero sequi dignissimos cumque, et a sint tenetur
                                                    consequatur omnis!
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="{{asset('build/assets/images/faces/4.jpg')}}" alt="">
                                                </span>
                                                <p class="text-textmuted mb-2">
                                                    <span class="text-default"><b>Alicia Keys</b> shared a document with
                                                        <b>you</b></span>.<span
                                                        class="ltr:float-right rtl:float-left text-[.6875rem] text-textmuted">21,Dec
                                                        2024 - 15:32</span>
                                                </p>
                                                <p class="profile-activity-media mb-0 flex items-center">
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                    </a>
                                                    <span
                                                        class="text-[.6875rem] text-textmuted">432.87KB</span>
                                                </p>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span
                                                    class="avatar avatar-sm bg-success/10 !text-success avatar-rounded profile-timeline-avatar">
                                                    P
                                                </span>
                                                <p class="text-textmuted mb-2">
                                                    <span class="text-default"><b>You</b> shared a post with 4 people <b
                                                            class="sm:text-sm text-[0.7rem]">Simon,Sasha,Anagha,Hishen</b></span>.<span
                                                        class="ltr:float-right rtl:float-left text-[.6875rem] text-textmuted">28,Dec
                                                        2024 - 18:46</span>
                                                </p>
                                                <p class="profile-activity-media mb-2">
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/media-18.jpg')}}" alt="">
                                                    </a>
                                                </p>
                                                <div>
                                                    <div class="avatar-list-stacked flex -space-x-2">
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                        </span>
                                                        <span class="avatar avatar-sm avatar-rounded">
                                                            <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                        </span>
                                                    </div>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div>
                                                <span class="avatar avatar-sm avatar-rounded profile-timeline-avatar">
                                                    <img src="{{asset('build/assets/images/media/media-39.jpg')}}" alt="">
                                                </span>
                                                <p class="mb-1">
                                                    <b>Json</b> Commented on Task post <a class="text-secondary"
                                                        href="javascript:void(0);"><u>#UI Technologies</u></a>.<span
                                                        class="ltr:float-right rtl:float-left text-[.6875rem] text-textmuted">24,Dec
                                                        2024 - 14:34</span>
                                                </p>
                                                <p class="text-textmuted">Technology id developing
                                                    rapidly keep up your work 👌</p>
                                                <p class="profile-activity-media mb-0 flex">
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/media-26.jpg')}}" alt="">
                                                    </a>
                                                    <a aria-label="anchor" href="javascript:void(0);">
                                                        <img src="{{asset('build/assets/images/media/media-29.jpg')}}" alt="">
                                                    </a>
                                                </p>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                                <div class="box-footer !border-defaultborder  dark:!border-defaultborder/10">
                                    <div class=" !p-0 !border-0">
                                        <div class="sm:flex items-center leading-none ">
                                            <div class="me-4">
                                                <span class="avatar avatar-md avatar-rounded">
                                                    <img src="{{asset('build/assets/images/faces/9.jpg')}}" alt="">
                                                </span>
                                            </div>
                                            <div class="flex-grow me-2">
                                                <div class="inline-flex !w-full">
                                                    <input type="text" class="form-control w-full !rounded-e-none"
                                                        placeholder="Post Anything"
                                                        aria-label="Recipient's username with two button addons">
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-light !rounded-none !mb-0"><i
                                                            class="bi bi-emoji-smile"></i></button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-light !rounded-none !mb-0"><i
                                                            class="bi bi-paperclip"></i></button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-light !rounded-none !mb-0"><i
                                                            class="bi bi-camera"></i></button>
                                                    <button class="ti-btn bg-primary text-white !rounded-s-none !mb-0"
                                                        type="button">Post</button>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="xxl:col-span-3 xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header !border-b pb-4">
                                    <div class="box-title">
                                        Additional Details
                                    </div>
                                </div>
                                <div class="box-body !p-0">
                                    <div class="table-responsive">
                                        <table class="table whitespace-nowrap min-w-full">
                                            <tbody>
                                                <tr class="border-b border-defaultborder">
                                                    <td><span class="font-semibold">Task ID :</span></td>
                                                    <td>SPK - 123</td>
                                                </tr>
                                                <tr class="border-b border-defaultborder">
                                                    <td><span class="font-semibold">Task Tags :</span></td>
                                                    <td>
                                                        <span class="badge bg-primary/10 text-primary cursor-default">UI/Ux</span>
                                                        <span class="badge bg-primary/10 text-primary cursor-default">Designing</span>
                                                        <span class="badge bg-primary/10 text-primary cursor-default">Development</span>
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-defaultborder">
                                                    <td><span class="font-semibold">Project Name :</span></td>
                                                    <td>
                                                        Valex admin &amp; dashboard template
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-defaultborder">
                                                    <td><span class="font-semibold">Project Status :</span></td>
                                                    <td>
                                                        <span class="font-semibold text-secondary">Inprogress</span>
                                                    </td>
                                                </tr>
                                                <tr class="border-b border-defaultborder">
                                                    <td><span class="font-semibold">Project Priority :</span></td>
                                                    <td>
                                                        <span class="badge bg-danger/10 text-danger">High</span>
                                                    </td>
                                                </tr>
                                                <tr>
                                                    <td><span class="font-semibold">Assigned To :</span></td>
                                                    <td>
                                                        <div class="avatar-list-stacked flex items-center -space-x-2">
                                                            <span
                                                                class="avatar avatar-sm avatar-rounded hs-tooltip ti-main-tooltip">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center  !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Simon
                                                                </span>
                                                            </span>
                                                            <span
                                                                class="avatar avatar-sm avatar-rounded hs-tooltip ti-main-tooltip">
                                                                <img src="{{asset('build/assets/images/faces/8.jpg')}}" alt="img">
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center  !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Sasha
                                                                </span>
                                                            </span>
                                                            <span
                                                                class="avatar avatar-sm avatar-rounded hs-tooltip ti-main-tooltip">
                                                                <img src="{{asset('build/assets/images/faces/2.jpg')}}" alt="img">
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center  !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Anagha
                                                                </span>
                                                            </span>
                                                            <span
                                                                class="avatar avatar-sm avatar-rounded hs-tooltip ti-main-tooltip">
                                                                <img src="{{asset('build/assets/images/faces/10.jpg')}}" alt="img">
                                                                <span
                                                                    class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !border-0 !bg-primary !text-center  !text-xs !font-medium !text-white shadow-sm "
                                                                    role="tooltip">
                                                                    Hishan
                                                                </span>
                                                            </span>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <div class="box overflow-hidden">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">Sub Tasks</div>
                                    <div> <button type="button"
                                            class="ti-btn ti-btn-primary !py-1 !px-2 !font-medium !text-[0.75rem]"><i
                                                class="ri-add-line  align-middle"></i>Sub Task</button> </div>
                                </div>
                                <div class="box-body">
                                    <ul class="ti-list-group">
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 flex items-center"><input class="form-check-input "
                                                        type="checkbox" value="" id="successChecked1" checked=""></div>
                                                <div class="font-semibold">Conduct Website Design Analysis</div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 flex items-center"><input class="form-check-input"
                                                        type="checkbox" value="" id="successChecked2"></div>
                                                <div class="font-semibold">Collaborate with UI/UX Team</div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 flex items-center"><input class="form-check-input"
                                                        type="checkbox" value="" id="successChecked3"></div>
                                                <div class="font-semibold">Refine Design Iteratively</div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 flex items-center"><input class="form-check-input"
                                                        type="checkbox" value="" id="successChecked4"></div>
                                                <div class="font-semibold">Implement Design Changes</div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 flex items-center"><input class="form-check-input"
                                                        type="checkbox" value="" id="successChecked6" checked=""></div>
                                                <div class="font-semibold">Review and Polish Design Elements</div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 flex items-center"><input class="form-check-input"
                                                        type="checkbox" value="" id="successChecked7" checked=""></div>
                                                <div class="font-semibold">Incorporate Branding Elements</div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 flex items-center"><input class="form-check-input"
                                                        type="checkbox" value="" id="successChecked8"></div>
                                                <div class="font-semibold">Documentation and Handover</div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="box overflow-hidden">
                                <div class="box-header pb-4">
                                    <div class="box-title">
                                        Attachments
                                    </div>
                                </div>
                                <div class="box-body !p-0">
                                    <ul class="ti-list-group ti-list-group-flush">
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2">
                                                    <span class="avatar avatar-rounded p-2 bg-light">
                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);"><span class="block font-semibold">Full
                                                            Project</span></a>
                                                    <span
                                                        class="block text-textmuted text-[0.75rem] font-normal">0.45MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-info me-[0.365rem]"><i
                                                            class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-danger"><i
                                                            class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-rounded bg-light">
                                                        <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);"><span
                                                            class="block font-semibold">assets.zip</span></a>
                                                    <span
                                                        class="block text-textmuted text-[0.75rem] font-normal">0.99MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-info me-[0.365rem]"><i
                                                            class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-danger"><i
                                                            class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-rounded p-2 bg-light">
                                                        <img src="{{asset('build/assets/images/media/file-manager/1.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);"><span
                                                            class="block font-semibold">image-1.png</span></a>
                                                    <span
                                                        class="block text-textmuted text-[0.75rem] font-normal">245KB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-info me-[0.365rem]"><i
                                                            class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-danger"><i
                                                            class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-rounded bg-light">
                                                        <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);"><span
                                                            class="block font-semibold">Docs.zip</span></a>
                                                    <span
                                                        class="block text-textmuted text-[0.75rem] font-normal">2MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-info me-[0.365rem]"><i
                                                            class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-danger"><i
                                                            class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                        <li class="ti-list-group-item">
                                            <div class="flex items-center flex-wrap">
                                                <div class="me-2 leading-none">
                                                    <span class="avatar avatar-rounded bg-light">
                                                        <img src="{{asset('build/assets/images/media/file-manager/3.png')}}" alt="">
                                                    </span>
                                                </div>
                                                <div class="flex-grow">
                                                    <a href="javascript:void(0);"><span
                                                            class="block font-semibold">landing.zip</span></a>
                                                    <span
                                                        class="block text-textmuted text-[0.75rem] font-normal">3.46MB</span>
                                                </div>
                                                <div class="btn-list">
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-info me-[0.365rem]"><i
                                                            class="ri-edit-line"></i></button>
                                                    <button aria-label="button" type="button"
                                                        class="ti-btn ti-btn-sm ti-btn-danger"><i
                                                            class="ri-delete-bin-line"></i></button>
                                                </div>
                                            </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!--End::row-1 -->

@endsection

@section('scripts')
	


@endsection

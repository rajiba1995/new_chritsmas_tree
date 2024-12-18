
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                        <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Modals</h5>
                        <nav>
                            <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Advanced Ui <i
                                    class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                                </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Modals 
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

                    <!-- Start:: row-1 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Basic Modal
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div>
                                        <a href="javascript:void(0);" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#todo-compose">Launch demo modal
                                        </a>
                                        <div id="todo-compose" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                            
                                            <div class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                                                <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Modal Title</h6>
                                                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#exampleModalScrollable">
                                                <span class="sr-only">Close</span>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </button>
                                            </div>
                                            <div class="p-4 overflow-y-auto">
                                                ...
                                            </div>
                                                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                                                <button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#todo-compose">
                                                    Close
                                                </button>
                                                <button type="button" class="ti-btn bg-primary text-white !font-medium">Save changes</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModal"&gt;
    Launch demo modal
    &lt;/button&gt;
    &lt;div class="modal fade" id="exampleModal" tabindex="-1"
    aria-labelledby="exampleModalLabel" aria-hidden="true"&gt;
    &lt;div class="modal-dialog"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalLabel1"&gt;Modal title&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
                &lt;button type="button" class="btn btn-primary"&gt;Save
                    changes&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Static backdrop
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div>
                                        <a href="javascript:void(0);" class="hs-dropdown-toggle ti-btn ti-btn-primary-full " data-hs-overlay="#staticBackdrop">Launch static backdrop modal
                                        </a>
                                        <div id="staticBackdrop" class="hs-overlay hidden ti-modal  [--overlay-backdrop:static]">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                                <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                    <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Modal title</h6>
                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#staticBackdrop">
                                                        <span class="sr-only">Close</span>
                                                        <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                        <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"></path>
                                                        </svg>
                                                    </button>
                                                </div>
                                                <div class="ti-modal-body px-4">
                                                    <p>I will not close if you click outside me. Don't even try to
                                                        press
                                                        escape key.</p>
                                                </div>
                                                <div class="ti-modal-footer">
                                                    <button type="button"
                                                    class="hs-dropdown-toggle ti-btn  ti-btn-secondary-full align-middle"
                                                    data-hs-overlay="#staticBackdrop
                                                    
                                                    ">
                                                    Close
                                                    </button>
                                                    <button type="button" class="ti-btn bg-primary text-white !font-[500]">Understood</button>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#staticBackdrop"&gt;
    Launch static backdrop modal
    &lt;/button&gt;
    &lt;div class="modal fade" id="staticBackdrop" data-bs-backdrop="static"
    data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel"
    aria-hidden="true"&gt;
    &lt;div class="modal-dialog"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="staticBackdropLabel"&gt;Modal title
                &lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                &lt;p&gt;I will not close if you click outside me. Don't even try to
                    press
                    escape key.&lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
                &lt;button type="button" class="btn btn-primary"&gt;Understood&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Scrolling long content
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div>
                                        <a href="javascript:void(0);" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#exampleModalScrollable"> Scrolling long content
                                        </a>
                                        <div id="exampleModalScrollable" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                            <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                            <div class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
                                                <div class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                                                    <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Modal Title</h6>
                                                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#exampleModalScrollable">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </button>
                                                </div>
                                                <div class="p-4 overflow-y-auto">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                    Libero
                                                    ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                                                    nisi
                                                    ipsa maiores fugiat deleniti quis reiciendis veritatis.</p>
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                                                    voluptatibus, ipsam quo est rerum modi quos expedita facere,
                                                    ex
                                                    tempore fuga similique ipsa blanditiis et accusamus
                                                    temporibus
                                                    commodi voluptas! Nobis veniam illo architecto expedita quam
                                                    ratione quaerat omnis. In, recusandae eos! Pariatur,
                                                    deleniti
                                                    quis ad nemo ipsam officia temporibus, doloribus fuga
                                                    asperiores
                                                    ratione distinctio velit alias hic modi praesentium aperiam
                                                    officiis eaque, accusamus aut. Accusantium assumenda,
                                                    commodi
                                                    nulla provident asperiores fugit inventore iste amet aut
                                                    placeat
                                                    consequatur reprehenderit. Ratione tenetur eligendi, quis
                                                    aperiam dolores magni iusto distinctio voluptatibus minus a
                                                    unde
                                                    at! Consequatur voluptatum in eaque obcaecati, impedit
                                                    accusantium ea soluta, excepturi, quasi quia commodi
                                                    blanditiis?
                                                    Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                                                    consequuntur quod quo veniam? Labore dignissimos reiciendis
                                                    accusamus recusandae est consequuntur iure.</p>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <br>
                                                <p>Lorem ipsum dolor sit amet.</p>

                                                </div>
                                                <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                                                <button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#exampleModalScrollable">
                                                    Close
                                                </button>
                                                <button type="button" class="ti-btn bg-primary text-white !font-medium">Save changes</button>
                                                </div>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModalScrollable"&gt;
    Scrolling long content
    &lt;/button&gt;
    &lt;div class="modal fade" id="exampleModalScrollable" tabindex="-1"
        aria-labelledby="exampleModalScrollable" data-bs-keyboard="false"
        aria-hidden="true"&gt;
        &lt;div class="modal-dialog modal-dialog-scrollable"&gt;
            &lt;div class="modal-content"&gt;
                &lt;div class="modal-header"&gt;
                    &lt;h6 class="modal-title" id="staticBackdropLabel1"&gt;Modal title
                    &lt;/h6&gt;
                    &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"&gt;&lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="modal-body"&gt;
                    &lt;p&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                        Libero
                        ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                        nisi
                        ipsa maiores fugiat deleniti quis reiciendis veritatis.&lt;/p&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                        voluptatibus, ipsam quo est rerum modi quos expedita facere,
                        ex
                        tempore fuga similique ipsa blanditiis et accusamus
                        temporibus
                        commodi voluptas! Nobis veniam illo architecto expedita quam
                        ratione quaerat omnis. In, recusandae eos! Pariatur,
                        deleniti
                        quis ad nemo ipsam officia temporibus, doloribus fuga
                        asperiores
                        ratione distinctio velit alias hic modi praesentium aperiam
                        officiis eaque, accusamus aut. Accusantium assumenda,
                        commodi
                        nulla provident asperiores fugit inventore iste amet aut
                        placeat
                        consequatur reprehenderit. Ratione tenetur eligendi, quis
                        aperiam dolores magni iusto distinctio voluptatibus minus a
                        unde
                        at! Consequatur voluptatum in eaque obcaecati, impedit
                        accusantium ea soluta, excepturi, quasi quia commodi
                        blanditiis?
                        Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                        consequuntur quod quo veniam? Labore dignissimos reiciendis
                        accusamus recusandae est consequuntur iure.&lt;/p&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;br&gt;
                    &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
                &lt;/div&gt;
                &lt;div class="modal-footer"&gt;
                    &lt;button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
                    &lt;button type="button" class="btn btn-primary"&gt;Save
                        Changes&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
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
                                        Vertically centered modal
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    
                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-vertically-centered-modal">
                                        Vertically centered modal
                                        </button>
                                        <div id="hs-vertically-centered-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                            <div class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
                                            <div class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                                                <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Modal Title</h6>
                                                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-vertically-centered-modal">
                                                <span class="sr-only">Close</span>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </button>
                                            </div>
                                            <div class="p-4 overflow-y-auto">
                                                <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                                                Libero
                                                ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                                                nisi
                                                ipsa maiores fugiat deleniti quis reiciendis veritatis.</p>                                          </div>
                                            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                                                <button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#hs-vertically-centered-modal">
                                                Close
                                                </button>
                                                <button type="button" class="ti-btn bg-primary text-white !font-medium">Save changes</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModalScrollable2"&gt;
    Vertically centered modal
    &lt;/button&gt;
    &lt;div class="modal fade" id="exampleModalScrollable2" tabindex="-1"
    aria-labelledby="exampleModalScrollable2" data-bs-keyboard="false"
    aria-hidden="true"&gt;
    &lt;!-- Scrollable modal --&gt;
    &lt;div class="modal-dialog modal-dialog-centered"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="staticBackdropLabel2"&gt;Modal title
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            &lt;p&gt;Lorem ipsum dolor sit, amet consectetur adipisicing elit.
                Libero
                ipsum quasi, error quibusdam debitis maiores hic eum? Vitae
                nisi
                ipsa maiores fugiat deleniti quis reiciendis veritatis.&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
            &lt;button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Save
                Changes&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Vertical Centered Scrollable
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                                        Vertically centered scrollable modal
                                        </button>
                                        <div id="hs-vertically-centered-scrollable-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                            <div class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
                                            <div class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                                                <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Modal Title</h6>
                                                <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                                                <span class="sr-only">Close</span>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                                </button>
                                            </div>
                                            <div class="p-4 overflow-y-auto">
                                                <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                                                voluptatibus, ipsam quo est rerum modi quos expedita facere,
                                                ex
                                                tempore fuga similique ipsa blanditiis et accusamus
                                                temporibus
                                                commodi voluptas! Nobis veniam illo architecto expedita quam
                                                ratione quaerat omnis. In, recusandae eos! Pariatur,
                                                deleniti
                                                quis ad nemo ipsam officia temporibus, doloribus fuga
                                                asperiores
                                                ratione distinctio velit alias hic modi praesentium aperiam
                                                officiis eaque, accusamus aut. Accusantium assumenda,
                                                commodi
                                                nulla provident asperiores fugit inventore iste amet aut
                                                placeat
                                                consequatur reprehenderit. Ratione tenetur eligendi, quis
                                                aperiam dolores magni iusto distinctio voluptatibus minus a
                                                unde
                                                at! Consequatur voluptatum in eaque obcaecati, impedit
                                                accusantium ea soluta, excepturi, quasi quia commodi
                                                blanditiis?
                                                Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                                                consequuntur quod quo veniam? Labore dignissimos reiciendis
                                                accusamus recusandae est consequuntur iure.</p>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <br>
                                            <p>Lorem ipsum dolor sit amet.</p>                                      </div>
                                            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                                                <button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#hs-vertically-centered-scrollable-modal">
                                                Close
                                                </button>
                                                <button type="button" class="ti-btn bg-primary text-white !font-medium">Save changes</button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModalScrollable3"&gt;
    Vertically centered scrollable modal
    &lt;/button&gt;
    &lt;div class="modal fade" id="exampleModalScrollable3" tabindex="-1"
    aria-labelledby="exampleModalScrollable3" data-bs-keyboard="false"
    aria-hidden="true"&gt;
    &lt;!-- Scrollable modal --&gt;
    &lt;div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="staticBackdropLabel3"&gt;Modal title
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ea
                voluptatibus, ipsam quo est rerum modi quos expedita facere,
                ex
                tempore fuga similique ipsa blanditiis et accusamus
                temporibus
                commodi voluptas! Nobis veniam illo architecto expedita quam
                ratione quaerat omnis. In, recusandae eos! Pariatur,
                deleniti
                quis ad nemo ipsam officia temporibus, doloribus fuga
                asperiores
                ratione distinctio velit alias hic modi praesentium aperiam
                officiis eaque, accusamus aut. Accusantium assumenda,
                commodi
                nulla provident asperiores fugit inventore iste amet aut
                placeat
                consequatur reprehenderit. Ratione tenetur eligendi, quis
                aperiam dolores magni iusto distinctio voluptatibus minus a
                unde
                at! Consequatur voluptatum in eaque obcaecati, impedit
                accusantium ea soluta, excepturi, quasi quia commodi
                blanditiis?
                Qui blanditiis iusto corrupti necessitatibus dolorem fugiat
                consequuntur quod quo veniam? Labore dignissimos reiciendis
                accusamus recusandae est consequuntur iure.&lt;/p&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;br&gt;
            &lt;p&gt;Lorem ipsum dolor sit amet.&lt;/p&gt;
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
            &lt;button type="button" class="btn btn-secondary"
                data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;button type="button" class="btn btn-primary"&gt;Save
                Changes&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Tooltips and popovers
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#exampleModalScrollable4">
                                        Launch demo modal
                                    </button>
                                    <div id="exampleModalScrollable4" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                        <div class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
                                            <div class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                                                <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Modal Title</h6>
                                            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#exampleModalScrollable4">
                                                <span class="sr-only">Close</span>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                            </button>
                                            </div>
                                            <div class="p-4 overflow-y-auto">
                                            <h5>Popover in a modal</h5>
                                            <div class="mb-4">This
                                                <div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:bottom]">
                                                    <a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-primary me-2" href="javascript:void(0);">button
                                                        <div class="hs-tooltip-content ti-main-tooltip-content bg-white dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip">
                                                            <div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]">
                                                            <h6>Popover Title</h6>
                                                            </div>
                                                            <p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start">Popover body content is set in this attribute.</p>
                                                        </div>
                                                    </a>
                                                </div>
                                                triggers a popover on click.</div>
                                            <h5>Tooltips in a modal</h5>
                                            <div>
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                <p class="text-muted mb-0">
                                                    <a href="javascript:void(0);">
                                                        <span class="hs-tooltip-toggle !text-primary">
                                                        This link
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                                role="tooltip">
                                                                Tooltip
                                                            </span>
                                                        </span>
                                                    </a>
                                                </p>
                                                </div> and
                                                <div class="hs-tooltip ti-main-tooltip [--placement:top]">
                                                <p class="text-muted mb-0"> <a href="javascript:void(0);">
                                                        <span class="hs-tooltip-toggle !text-primary">
                                                        That link
                                                            <span
                                                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                                                role="tooltip">
                                                                Tooltip
                                                            </span>
                                                        </span>
                                                    </a>
                                                </p>
                                                </div>
                                                have tooltips on hover.
                                            </div>
                                            </div>
                                            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                                            <button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#exampleModalScrollable4">
                                                Close
                                            </button>
                                            <button type="button" class="ti-btn bg-primary text-white !font-medium">Save Changes</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">
    &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#exampleModalScrollable4"&gt;
    Launch demo modal
    &lt;/button&gt;
    &lt;div id="exampleModalScrollable4" class="hs-overlay hidden ti-modal"&gt;
    &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out min-h-[calc(100%-3.5rem)] flex items-center"&gt;
        &lt;div class="ti-modal-content w-full"&gt;
        &lt;div class="ti-modal-header"&gt;
            &lt;h6 class="modal-title" id="staticBackdropLabel4"&gt;Modal title
            &lt;/h6&gt;
            &lt;button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#exampleModalScrollable4"&gt;
            &lt;span class="sr-only"&gt;Close&lt;/span&gt;
            &lt;svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg"&gt;
                &lt;path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/&gt;
            &lt;/svg&gt;
            &lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="ti-modal-body"&gt;
            &lt;h5&gt;Popover in a modal&lt;/h5&gt;
            &lt;div class="mb-4"&gt;This
                &lt;div class="hs-tooltip ti-main-tooltip [--trigger:click] [--placement:right]"&gt;
                    &lt;a class="hs-tooltip-toggle ti-main-tooltip-toggle ti-btn ti-btn-secondary me-2" href="javascript:void(0);"&gt;button
                        &lt;div class="hs-tooltip-content ti-main-tooltip-content dark:bg-bodybg !p-0 !max-w-[276px]" role="tooltip"&gt;
                            &lt;div  class="!border-b !border-solid dark:border-defaultborder/10 !rounded-t-md !py-2  !px-4 text-defaulttextcolor border-defaultborder text-start w-full text-[1rem]"&gt;
                            &lt;h6&gt;Popover Title&lt;/h6&gt;
                            &lt;/div&gt;
                            &lt;p class="!text-defaulttextcolor !text-[0.8rem] !py-4 !px-4 text-start"&gt;Popover body content is set in this attribute.&lt;/p&gt;
                        &lt;/div&gt;
                    &lt;/a&gt;
                &lt;/div&gt;
                triggers a popover on click.&lt;/div&gt;
            &lt;hr&gt;
            &lt;h5&gt;Tooltips in a modal&lt;/h5&gt;
            &lt;div&gt;
                &lt;div class="hs-tooltip ti-main-tooltip [--placement:top]"&gt;
                &lt;p class="text-muted mb-0"&gt;
                    &lt;a href="javascript:void(0);"&gt;
                        &lt;span class="hs-tooltip-toggle !text-primary"&gt;
                        This link
                            &lt;span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                role="tooltip"&gt;
                                Tooltip
                            &lt;/span&gt;
                        &lt;/span&gt;
                    &lt;/a&gt;
                &lt;/p&gt;
                &lt;/div&gt; and
                &lt;div class="hs-tooltip ti-main-tooltip [--placement:top]"&gt;
                &lt;p class="text-muted mb-0"&gt; &lt;a href="javascript:void(0);"&gt;
                        &lt;span class="hs-tooltip-toggle !text-primary"&gt;
                        That link
                            &lt;span
                                class="hs-tooltip-content ti-main-tooltip-content py-1 px-2 !bg-black !text-xs !font-medium !text-white shadow-sm"
                                role="tooltip"&gt;
                                Tooltip
                            &lt;/span&gt;
                        &lt;/span&gt;
                    &lt;/a&gt;
                &lt;/p&gt;
                &lt;/div&gt;
                have tooltips on hover.
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="ti-modal-footer"&gt;
            &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#exampleModalScrollable4"&gt;
            Close
            &lt;/button&gt;
            &lt;a class="ti-btn ti-btn-primary-full" href="javascript:void(0);"&gt;
            Save changes
            &lt;/a&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Using the grid
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#exampleModalgrid">
                                        Launch demo modal
                                    </button>
                                    <div id="exampleModalgrid" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                        <div class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
                                            <div class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                                                <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Modal Title</h6>
                                            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#exampleModalgrid">
                                                <span class="sr-only">Close</span>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                            </button>
                                            </div>
                                            <div class="p-4 overflow-y-auto">
                                            <div class="container-fluid">
                                                <div class="grid grid-cols-3 gap-4">
                                                <div class="rounded-sm bg-light border border-defaultborder dark:border-defaultborder/20 p-4">01</div>
                                                <div class="rounded-sm bg-light border border-defaultborder dark:border-defaultborder/20 p-4">02</div>
                                                <div class="rounded-sm bg-light border border-defaultborder dark:border-defaultborder/20 p-4">03</div>
                                                <div class="col-span-2 rounded-sm bg-light border border-defaultborder dark:border-defaultborder/20 p-4">04</div>
                                                <div class="rounded-sm bg-light border border-defaultborder dark:border-defaultborder/20 p-4">05</div>
                                                <div class="rounded-sm bg-light border border-defaultborder dark:border-defaultborder/20 p-4">06</div>
                                                <div class="col-span-2 rounded-sm bg-light border border-defaultborder dark:border-defaultborder/20 p-4">07</div>
                                                </div>
                                            </div>                                  </div>
                                            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                                            <button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#exampleModalgrid">
                                                Close
                                            </button>
                                            <button type="button" class="ti-btn bg-primary text-white !font-medium">Save changes</button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary" data-bs-toggle="modal"
    data-bs-target="#exampleModalScrollable5"&gt;
    Launch demo modal
    &lt;/button&gt;
    &lt;div class="modal fade" id="exampleModalScrollable5" tabindex="-1"
        aria-labelledby="exampleModalScrollable5" data-bs-keyboard="false"
        aria-hidden="true"&gt;
        &lt;div class="modal-dialog modal-dialog-centered modal-dialog-scrollable"&gt;
            &lt;div class="modal-content"&gt;
                &lt;div class="modal-header"&gt;
                    &lt;h6 class="modal-title" id="staticBackdropLabel5"&gt;Modal title
                    &lt;/h6&gt;
                    &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                        aria-label="Close"&gt;
                    &lt;/button&gt;
                &lt;/div&gt;
                &lt;div class="modal-body"&gt;
                    &lt;div class="container-fluid"&gt;
                        &lt;div class="row"&gt;
                            &lt;div class="col-md-4 bg-light border"&gt;.col-md-4&lt;/div&gt;
                            &lt;div class="col-md-4 ms-auto bg-light border"&gt;.col-md-4
                                .ms-auto&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="row mt-3"&gt;
                            &lt;div class="col-md-3 ms-auto bg-light border"&gt;.col-md-3
                                .ms-auto&lt;/div&gt;
                            &lt;div class="col-md-2 ms-auto bg-light border"&gt;.col-md-2
                                .ms-auto&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="row mt-3"&gt;
                            &lt;div class="col-md-6 ms-auto bg-light border"&gt;.col-md-6
                                .ms-auto&lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="row mt-3"&gt;
                            &lt;div class="col-sm-9 bg-light border"&gt;
                                Level 1: .col-sm-9
                                &lt;div class="row"&gt;
                                    &lt;div class="col-8 col-sm-6 bg-light border"&gt;
                                        Level 2: .col-8 .col-sm-6
                                    &lt;/div&gt;
                                    &lt;div class="col-4 col-sm-6 bg-light border"&gt;
                                        Level 2: .col-4 .col-sm-6
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="modal-footer"&gt;
                    &lt;button type="button" class="btn btn-secondary"
                        data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
                    &lt;button type="button" class="btn btn-primary"&gt;Save
                        Changes&lt;/button&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Toggle between modals
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-toggle-between-modals-first-modal">
                                        Open first modal
                                    </button>

                                    <div id="hs-toggle-between-modals-first-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                        <div class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
                                            <div class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                                                <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Modal 1</h6>
                                            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-toggle-between-modals-first-modal">
                                                <span class="sr-only">Close</span>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                            </button>
                                            </div>
                                            <div class="p-4 overflow-y-auto">
                                            <p class="mt-1 text-gray-800 dark:text-white/70">
                                                Show a second modal and hide this one with the button below.
                                            </p>                              </div>
                                            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                                            <button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-toggle-between-modals-second-modal">
                                                Open second modal
                                            </button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <div id="hs-toggle-between-modals-second-modal" class="hs-overlay hidden size-full fixed top-0 start-0 z-[80] overflow-x-hidden overflow-y-auto pointer-events-none">
                                        <div class="hs-overlay-open:mt-7 hs-overlay-open:opacity-100 hs-overlay-open:duration-500 mt-0 opacity-0 ease-out transition-all sm:max-w-lg sm:w-full m-3 sm:mx-auto">
                                        <div class="flex flex-col bg-white dark:bg-bodybg border border-defaultborder dark:border-defaultborder/10 shadow-sm rounded-sm pointer-events-auto">
                                            <div class="flex justify-between items-center py-3 px-4 border-b border-defaultborder dark:border-defaultborder/10">
                                                <h6 class="modal-title text-[1rem] font-semibold" id="mail-ComposeLabel">Modal 2</h6>
                                            <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-toggle-between-modals-second-modal">
                                                <span class="sr-only">Close</span>
                                                <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                            </button>
                                            </div>
                                            <div class="p-4 overflow-y-auto">
                                            <p class="mt-1 text-gray-800 dark:text-white/70">
                                                Hide this modal and show the first with the button below.
                                            </p>                            </div>
                                            <div class="flex justify-end items-center gap-x-2 py-3 px-4 border-t border-defaultborder dark:border-defaultborder/10">
                                            <button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-toggle-between-modals-first-modal">
                                                Back to first
                                            </button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    
                                </div>  
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;a class="btn btn-primary" data-bs-toggle="modal" href="#exampleModalToggle"
    role="button"&gt;Open first modal
    &lt;/a&gt;
    &lt;div class="modal fade" id="exampleModalToggle"
    aria-labelledby="exampleModalToggleLabel" tabindex="-1" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-dialog-centered"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="exampleModalToggleLabel"&gt;Modal 1
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            Show a second modal and hide this one with the button below.
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
            &lt;button class="btn btn-primary"
                data-bs-target="#exampleModalToggle2"
                data-bs-toggle="modal"&gt;Open second modal&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="modal fade" id="exampleModalToggle2"
    aria-labelledby="exampleModalToggleLabel2" tabindex="-1" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-dialog-centered"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="exampleModalToggleLabel2"&gt;Modal 2
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            Hide this modal and show the first with the button below.
        &lt;/div&gt;
        &lt;div class="modal-footer"&gt;
            &lt;button class="btn btn-primary" data-bs-target="#exampleModalToggle"
                data-bs-toggle="modal"&gt;Back to first&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Optional sizes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                        <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-extralarge-modal">
                                        Extra Large modal
                                        </button>
                                        <div id="hs-extralarge-modal" class="hs-overlay hidden ti-modal pointer-events-none">
                                            <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out lg:!max-w-4xl lg:w-full m-3 lg:!mx-auto">
                                                <div class="ti-modal-content">
                                                <div class="ti-modal-header">
                                                    <h6 class="ti-modal-title">
                                                    Modal title
                                                    </h6>
                                                    <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                    data-hs-overlay="#hs-extralarge-modal">
                                                    <span class="sr-only">Close</span>
                                                    <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                        xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                        d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                        fill="currentColor" />
                                                    </svg>
                                                    </button>
                                                </div>
                                                <div class="ti-modal-body">
                                                    <p class="mt-1 text-gray-800 dark:text-white/70">
                                                    ...
                                                    </p>
                                                </div>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-large-modal">
                                        Large modal
                                        </button>
                                        <div id="hs-large-modal" class="hs-overlay hidden ti-modal pointer-events-none">
                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out md:!max-w-2xl md:w-full m-3 md:mx-auto">
                                            <div class="ti-modal-content">
                                            <div class="ti-modal-header">
                                                <h6 class="ti-modal-title">
                                                Modal title
                                                </h6>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                data-hs-overlay="#hs-large-modal">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                    fill="currentColor" />
                                                </svg>
                                                </button>
                                            </div>
                                            <div class="ti-modal-body">
                                                <p class="mt-1 text-gray-800 dark:text-white/70">
                                                ...
                                                </p>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                        
                                        <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-primary-full" data-hs-overlay="#hs-small-modal">
                                        small modal
                                        </button>
                                        <div id="hs-small-modal" class="hs-overlay hidden ti-modal pointer-events-none">
                                        <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                            <div class="ti-modal-content">
                                            <div class="ti-modal-header">
                                                <h6 class="ti-modal-title">
                                                Modal title
                                                </h6>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"
                                                data-hs-overlay="#hs-small-modal">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none"
                                                    xmlns="http://www.w3.org/2000/svg">
                                                    <path
                                                    d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z"
                                                    fill="currentColor" />
                                                </svg>
                                                </button>
                                            </div>
                                            <div class="ti-modal-body">
                                                <p class="mt-1 text-gray-800 dark:text-white/70">
                                                ...
                                                </p>
                                            </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn btn-primary mb-sm-0 mb-1" data-bs-toggle="modal"
    data-bs-target="#exampleModalXl">Extra large modal&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary-light mb-sm-0 mb-1" data-bs-toggle="modal"
    data-bs-target="#exampleModalLg"&gt;Large modal&lt;/button&gt;
    &lt;button type="button" class="btn btn-primary-light" data-bs-toggle="modal"
    data-bs-target="#exampleModalSm"&gt;Small modal&lt;/button&gt;
    &lt;div class="modal fade" id="exampleModalXl" tabindex="-1"
    aria-labelledby="exampleModalXlLabel" style="display: none;" aria-hidden="true"&gt;
    &lt;div class="modal-dialog modal-xl"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="exampleModalXlLabel"&gt;Extra large
                modal&lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="modal fade" id="exampleModalLg" tabindex="-1"
    aria-labelledby="exampleModalLgLabel" aria-hidden="true"&gt;
    &lt;div class="modal-dialog modal-lg"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="exampleModalLgLabel"&gt;Large modal
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="modal fade" id="exampleModalSm" tabindex="-1"
    aria-labelledby="exampleModalSmLabel" aria-hidden="true"&gt;
    &lt;div class="modal-dialog modal-sm"&gt;
    &lt;div class="modal-content"&gt;
        &lt;div class="modal-header"&gt;
            &lt;h6 class="modal-title" id="exampleModalSmLabel"&gt;Small modal
            &lt;/h6&gt;
            &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                aria-label="Close"&gt;&lt;/button&gt;
        &lt;/div&gt;
        &lt;div class="modal-body"&gt;
            ...
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
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
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Fullscreen modal
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <button type="button" class="m-1 ml-0 ti-btn ti-btn-primary-full" data-hs-overlay="#hs-full-screen-modal">
                                        Full screen
                                    </button>
                    
                                    <div id="hs-full-screen-modal" class="hs-overlay hidden ti-modal pointer-events-none">
                                        <div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !m-0 !max-w-full !w-full">
                                        <div class="ti-modal-content !rounded-none">
                                            <div class="ti-modal-header">
                                            <h6 class="ti-modal-title">
                                                Modal title
                                            </h6>
                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                </svg>
                                            </button>
                                            </div>
                                            <div class="ti-modal-body">
                                            <p class="mt-1 text-gray-800 dark:text-white/70">
                                                ...
                                            </p>
                                            </div>
                                            <div class="ti-modal-footer">
                                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal">
                                                Close
                                            </button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                    
                                    <button type="button" class="m-1 ml-0 ti-btn ti-btn-secondary-full"  data-hs-overlay="#hs-full-screen-modal-below-sm">
                                        Full screen below sm
                                    </button>
                    
                                    <div id="hs-full-screen-modal-below-sm" class="hs-overlay hidden ti-modal pointer-events-none">
                                        <div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0 sm:hs-overlay-open:!mt-10 sm:!mt-0 sm:!max-w-lg sm:!mx-auto">
                                        <div class="ti-modal-content sm:border sm:rounded-sm sm:shadow-sm dark:bg-bgdark sm:dark:border-white/10">
                                            <div class="ti-modal-header">
                                            <h6 class="ti-modal-title">
                                                Modal title
                                            </h6>
                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn"  data-hs-overlay="#hs-full-screen-modal-below-sm">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                </svg>
                                            </button>
                                            </div>
                                            <div class="ti-modal-body">
                                            <p class="mt-1 text-gray-800 dark:text-white/70">
                                                ...
                                            </p>
                                            </div>
                                            <div class="ti-modal-footer">
                                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal">
                                                Close
                                                </button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                    
                                    <button type="button" class="m-1 ml-0 ti-btn ti-btn-warning-full" data-hs-overlay="#hs-full-screen-modal-below-md">
                                        Full screen below md
                                    </button>
                    
                                    <div id="hs-full-screen-modal-below-md" class="hs-overlay hidden ti-modal pointer-events-none">
                                        <div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0 md:hs-overlay-open:!mt-10 md:!mt-0 md:!max-w-lg md:!mx-auto">
                                        <div class="ti-modal-content md:border md:rounded-sm md:shadow-sm md:dark:border-white/10">
                                            <div class="ti-modal-header">
                                            <h6 class="ti-modal-title">
                                                Modal title
                                            </h6>
                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal-below-md">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                </svg>
                                            </button>
                                            </div>
                                            <div class="ti-modal-body">
                                            <p class="mt-1 text-gray-800 dark:text-white/70">
                                                ...
                                            </p>
                                            </div>
                                            <div class="ti-modal-footer">
                                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal">
                                                Close
                                                </button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                    
                                    <button type="button" class="m-1 ml-0 ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal-below-lg">
                                        Full screen below lg
                                    </button>
                    
                                    <div id="hs-full-screen-modal-below-lg" class="hs-overlay hidden ti-modal pointer-events-none">
                                        <div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0 lg:hs-overlay-open:!mt-10 lg:!mt-0 lg:!max-w-lg lg:!mx-auto">
                                        <div class="ti-modal-content lg:border lg:rounded-sm lg:shadow-sm lg:dark:border-white/10">
                                            <div class="ti-modal-header">
                                            <h6 class="ti-modal-title">
                                                Modal title
                                            </h6>
                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal-below-lg">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                </svg>
                                            </button>
                                            </div>
                                            <div class="ti-modal-body">
                                            <p class="mt-1 text-gray-800 dark:text-white/70">
                                                ...
                                            </p>
                                            </div>
                                            <div class="ti-modal-footer">
                                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal">
                                                Close
                                                </button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                    
                                    <button type="button" class="m-1 ml-0 ti-btn ti-btn-success-full" data-hs-overlay="#hs-full-screen-modal-below-xl">
                                        Full screen below xl
                                    </button>
                    
                                    <div id="hs-full-screen-modal-below-xl" class="hs-overlay hidden ti-modal pointer-events-none">
                                        <div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0  xl:hs-overlay-open:!mt-10 xl:!mt-0 xl:!max-w-xl xl:!mx-auto">
                                        <div class="ti-modal-content xl:border xl:rounded-sm xl:shadow-sm xl:dark:border-white/10">
                                            <div class="ti-modal-header">
                                            <h6 class="ti-modal-title">
                                                Modal title
                                            </h6>
                                            <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal-below-xl">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                </svg>
                                            </button>
                                            </div>
                                            <div class="ti-modal-body">
                                            <p class="mt-1 text-gray-800 dark:text-white/70">
                                                ...
                                            </p>
                                            </div>
                                            <div class="ti-modal-footer">
                                            <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal">
                                                Close
                                                </button>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                    <button type="button" class="m-1 ml-0 ti-btn ti-btn-danger-full" data-hs-overlay="#hs-full-screen-modal-below-xl">
                                        Full screen below xxl
                                    </button>
                        
                                        <div id="hs-full-screen-modal-below-xl" class="hs-overlay hidden ti-modal pointer-events-none">
                                        <div class="hs-overlay-open:mt-0 ti-modal-box mt-10 !max-w-full w-full !m-0  xl:hs-overlay-open:!mt-10 xl:!mt-0 xl:!max-w-xl xl:!mx-auto">
                                            <div class="ti-modal-content xl:border xl:rounded-sm xl:shadow-sm xl:dark:border-white/10">
                                            <div class="ti-modal-header">
                                                <h6 class="ti-modal-title">
                                                Modal title
                                                </h6>
                                                <button type="button" class="hs-dropdown-toggle ti-modal-close-btn" data-hs-overlay="#hs-full-screen-modal-below-xl">
                                                <span class="sr-only">Close</span>
                                                <svg class="w-3.5 h-3.5" width="8" height="8" viewBox="0 0 8 8" fill="none" xmlns="http://www.w3.org/2000/svg">
                                                    <path d="M0.258206 1.00652C0.351976 0.912791 0.479126 0.860131 0.611706 0.860131C0.744296 0.860131 0.871447 0.912791 0.965207 1.00652L3.61171 3.65302L6.25822 1.00652C6.30432 0.958771 6.35952 0.920671 6.42052 0.894471C6.48152 0.868271 6.54712 0.854471 6.61352 0.853901C6.67992 0.853321 6.74572 0.865971 6.80722 0.891111C6.86862 0.916251 6.92442 0.953381 6.97142 1.00032C7.01832 1.04727 7.05552 1.1031 7.08062 1.16454C7.10572 1.22599 7.11842 1.29183 7.11782 1.35822C7.11722 1.42461 7.10342 1.49022 7.07722 1.55122C7.05102 1.61222 7.01292 1.6674 6.96522 1.71352L4.31871 4.36002L6.96522 7.00648C7.05632 7.10078 7.10672 7.22708 7.10552 7.35818C7.10442 7.48928 7.05182 7.61468 6.95912 7.70738C6.86642 7.80018 6.74102 7.85268 6.60992 7.85388C6.47882 7.85498 6.35252 7.80458 6.25822 7.71348L3.61171 5.06702L0.965207 7.71348C0.870907 7.80458 0.744606 7.85498 0.613506 7.85388C0.482406 7.85268 0.357007 7.80018 0.264297 7.70738C0.171597 7.61468 0.119017 7.48928 0.117877 7.35818C0.116737 7.22708 0.167126 7.10078 0.258206 7.00648L2.90471 4.36002L0.258206 1.71352C0.164476 1.61976 0.111816 1.4926 0.111816 1.36002C0.111816 1.22744 0.164476 1.10028 0.258206 1.00652Z" fill="currentColor"/>
                                                </svg>
                                                </button>
                                            </div>
                                            <div class="ti-modal-body">
                                                <p class="mt-1 text-gray-800 dark:text-white/70">
                                                ...
                                                </p>
                                            </div>
                                            <div class="ti-modal-footer">
                                                <button type="button" class="hs-dropdown-toggle ti-btn ti-btn-secondary-full" data-hs-overlay="#hs-full-screen-modal">
                                                    Close
                                                </button>
                                            </div>
                                            </div>
                                        </div>
                                        </div>
                                    </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;div class="bd-example"&gt;
    &lt;button type="button" class="btn btn-primary mb-1" data-bs-toggle="modal"
        data-bs-target="#exampleModalFullscreen"&gt;Full screen&lt;/button&gt;
    &lt;button type="button" class="btn btn-secondary mb-1" data-bs-toggle="modal"
        data-bs-target="#exampleModalFullscreenSm"&gt;Full screen below sm&lt;/button&gt;
    &lt;button type="button" class="btn btn-warning mb-1" data-bs-toggle="modal"
        data-bs-target="#exampleModalFullscreenMd"&gt;Full screen below md&lt;/button&gt;
    &lt;button type="button" class="btn btn-info mb-1" data-bs-toggle="modal"
        data-bs-target="#exampleModalFullscreenLg"&gt;Full screen below lg&lt;/button&gt;
    &lt;button type="button" class="btn btn-success mb-1" data-bs-toggle="modal"
        data-bs-target="#exampleModalFullscreenXl"&gt;Full screen below xl&lt;/button&gt;
    &lt;button type="button" class="btn btn-danger mb-1" data-bs-toggle="modal"
        data-bs-target="#exampleModalFullscreenXxl"&gt;Full screen below
        xxl&lt;/button&gt;
    &lt;/div&gt;
    &lt;div class="modal fade" id="exampleModalFullscreen" tabindex="-1"
    aria-labelledby="exampleModalFullscreenLabel" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-fullscreen"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalFullscreenLabel"&gt;Full
                    screen modal&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="modal fade" id="exampleModalFullscreenSm" tabindex="-1"
    aria-labelledby="exampleModalFullscreenSmLabel" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-fullscreen-sm-down"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalFullscreenSmLabel"&gt;
                    Full
                    screen below sm&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="modal fade" id="exampleModalFullscreenMd" tabindex="-1"
    aria-labelledby="exampleModalFullscreenMdLabel" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-fullscreen-md-down"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalFullscreenMdLabel"&gt;
                    Full
                    screen below md&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="modal fade" id="exampleModalFullscreenLg" tabindex="-1"
    aria-labelledby="exampleModalFullscreenLgLabel" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-fullscreen-lg-down"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalFullscreenLgLabel"&gt;
                    Full
                    screen below lg&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="modal fade" id="exampleModalFullscreenXl" tabindex="-1"
    aria-labelledby="exampleModalFullscreenXlLabel" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-fullscreen-xl-down"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalFullscreenXlLabel"&gt;
                    Full
                    screen below xl&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="modal fade" id="exampleModalFullscreenXxl" tabindex="-1"
    aria-labelledby="exampleModalFullscreenXxlLabel" aria-hidden="true"
    style="display: none;"&gt;
    &lt;div class="modal-dialog modal-fullscreen-xxl-down"&gt;
        &lt;div class="modal-content"&gt;
            &lt;div class="modal-header"&gt;
                &lt;h6 class="modal-title" id="exampleModalFullscreenXxlLabel"&gt;
                    Full
                    screen below xxl&lt;/h6&gt;
                &lt;button type="button" class="btn-close" data-bs-dismiss="modal"
                    aria-label="Close"&gt;&lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="modal-body"&gt;
                ...
            &lt;/div&gt;
            &lt;div class="modal-footer"&gt;
                &lt;button type="button" class="btn btn-secondary"
                    data-bs-dismiss="modal"&gt;Close&lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:!col-span-3">
                            <div class="box">
                            <div class="box-header flex justify-between">
                                <h5 class="box-title">Stacked Overlays</h5>
                                <div class="prism-toggle">
                                <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body">
                                <button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-stacked-overlays">
                                Open modal
                                </button>
                                <div id="hs-stacked-overlays" class="hs-overlay hidden ti-modal pointer-events-none">
                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                    <div class="ti-modal-content pointer-events-auto">
                                    <div class="ti-modal-header">
                                        <h6 class="ti-modal-title">
                                        Modal title (level 1)
                                        </h6>
                                        <button type="button" class="ti-modal-close-btn !text-defaulttextcolor dark:!text-defaulttextcolor/70" data-hs-overlay="#hs-stacked-overlays">
                                        <span class="sr-only">Close</span>
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                        </button>
                                    </div>
                                
                                    <div class="ti-modal-body">
                                        <p class="mt-1 mb-2 text-gray-800 dark:text-white/70">
                                        Stacked Overlays modals are a user interface design concept where multiple overlay windows, or modals, are displayed on top of each other, typically in a web or app interface. These modals are often used to present additional information, confirm actions, or to guide users through multi-step processes. The key characteristic of Stacked Overlays is their layered appearance, where each new modal partially covers the previous one, creating a stack effect. This stacking can provide a visual cue to users about the depth of their interaction or the sequence of tasks. To maintain usability, these modals are designed with careful attention to transparency, size, and the ability to easily return to previous layers. They often incorporate animations for smooth transitions between layers and may include features like dimming the background to focus user attention on the active modal.
                                        </p>
                                
                                        <button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-stacked-overlays-2" data-hs-overlay-options='{
                                        "isClosePrev": false
                                        }'>
                                        Open modal
                                        </button>
                                    </div>
                                
                                    <div class="ti-modal-footer">
                                        <button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#hs-stacked-overlays">
                                        Close
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-primary-full">
                                        Save changes
                                        </button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div id="hs-stacked-overlays-2" class="hs-overlay hs-overlay-backdrop-open:bg-gray-900/70 hidden ti-modal z-[70] pointer-events-none">
                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                    <div class="ti-modal-content pointer-events-auto">
                                    <div class="ti-modal-header">
                                        <h6 class="ti-modal-title">
                                        Modal title (level 2)
                                        </h6>
                                        <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-overlay="#hs-stacked-overlays-2" data-hs-overlay-options='{
                                        "isClosePrev": false
                                        }'>
                                        <span class="sr-only">Close</span>
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                        </button>
                                    </div>
                
                                    <div class="ti-modal-body">
                                        <p class="mt-1 mb-2 text-gray-800 dark:text-white/70">
                                        Stacked Overlays modals represent a design approach in user interfaces, where several overlay windows, known as modals, are layered on top of one another. This is commonly seen in web or mobile application interfaces.
                                        </p>
                
                                        <button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-stacked-overlays-3" data-hs-overlay-options='{
                                        "isClosePrev": false
                                        }'>
                                        Open modal
                                        </button>
                                    </div>
                
                                    <div class="ti-modal-footer">
                                        <button type="button" class="ti-btn ti-btn-light" data-hs-overlay="#hs-stacked-overlays-2" data-hs-overlay-options='{
                                        "isClosePrev": false
                                        }'>
                                        Close
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-primary-full">
                                        Save changes
                                        </button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                                <div id="hs-stacked-overlays-3" class="hs-overlay hs-overlay-backdrop-open:bg-gray-900/80 hidden ti-modal z-[80] pointer-events-none">
                                <div class="hs-overlay-open:mt-7 ti-modal-box ease-out">
                                    <div class="ti-modal-content pointer-events-auto ">
                                    <div class="ti-modal-header">
                                        <h6 class="ti-modal-title">
                                        Modal title (level 3)
                                        </h6>
                                        <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-overlay="#hs-stacked-overlays-3" data-hs-overlay-options='{
                                        "isClosePrev": false
                                        }'>
                                        <span class="sr-only">Close</span>
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                        </button>
                                    </div>
                
                                    <div class="ti-modal-body">
                                        <p class="mt-1 text-gray-800 dark:text-white/70">
                                        Stacked Overlays: UI design with layered modals, often in web/apps, where each window overlays the previous one.
                                        </p>
                                    </div>
                
                                    <div class="ti-modal-footer">
                                        <button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#hs-stacked-overlays-3" data-hs-overlay-options='{
                                        "isClosePrev": false
                                        }'>
                                        Close
                                        </button>
                                        <button type="button" class="ti-btn ti-btn-primary-full">
                                        Save changes
                                        </button>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-stacked-overlays"&gt;
        Open modal
    &lt;/button&gt;
    &lt;div id="hs-stacked-overlays" class="hs-overlay hidden ti-modal pointer-events-none"&gt;
        &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out"&gt;
        &lt;div class="ti-modal-content pointer-events-auto"&gt;
            &lt;div class="ti-modal-header"&gt;
            &lt;h6 class="ti-modal-title"&gt;
                Modal title (level 1)
            &lt;/h6&gt;
            &lt;button type="button" class="ti-modal-close-btn !text-defaulttextcolor dark:!text-defaulttextcolor/70" data-hs-overlay="#hs-stacked-overlays"&gt;
                &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M18 6 6 18"/&gt;&lt;path d="m6 6 12 12"/&gt;&lt;/svg&gt;
            &lt;/button&gt;
            &lt;/div&gt;
    
            &lt;div class="ti-modal-body"&gt;
            &lt;p class="mt-1 mb-2 text-gray-800 dark:text-white/70"&gt;
                Stacked Overlays modals are a user interface design concept where multiple overlay windows, or modals, are displayed on top of each other, typically in a web or app interface. These modals are often used to present additional information, confirm actions, or to guide users through multi-step processes. The key characteristic of Stacked Overlays is their layered appearance, where each new modal partially covers the previous one, creating a stack effect. This stacking can provide a visual cue to users about the depth of their interaction or the sequence of tasks. To maintain usability, these modals are designed with careful attention to transparency, size, and the ability to easily return to previous layers. They often incorporate animations for smooth transitions between layers and may include features like dimming the background to focus user attention on the active modal.
            &lt;/p&gt;
    
            &lt;button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-stacked-overlays-2" data-hs-overlay-options='{
                "isClosePrev": false
            }'&gt;
                Open modal
            &lt;/button&gt;
            &lt;/div&gt;
    
            &lt;div class="ti-modal-footer"&gt;
            &lt;button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#hs-stacked-overlays"&gt;
                Close
            &lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-primary-full"&gt;
                Save changes
            &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="hs-stacked-overlays-2" class="hs-overlay hs-overlay-backdrop-open:bg-gray-900/70 hidden ti-modal z-[70] pointer-events-none"&gt;
        &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out"&gt;
        &lt;div class="ti-modal-content pointer-events-auto"&gt;
            &lt;div class="ti-modal-header"&gt;
            &lt;h6 class="ti-modal-title"&gt;
                Modal title (level 2)
            &lt;/h6&gt;
            &lt;button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-overlay="#hs-stacked-overlays-2" data-hs-overlay-options='{
                "isClosePrev": false
            }'&gt;
                &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M18 6 6 18"/&gt;&lt;path d="m6 6 12 12"/&gt;&lt;/svg&gt;
            &lt;/button&gt;
            &lt;/div&gt;

            &lt;div class="ti-modal-body"&gt;
            &lt;p class="mt-1 mb-2 text-gray-800 dark:text-white/70"&gt;
                Stacked Overlays modals represent a design approach in user interfaces, where several overlay windows, known as modals, are layered on top of one another. This is commonly seen in web or mobile application interfaces.
            &lt;/p&gt;

            &lt;button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-stacked-overlays-3" data-hs-overlay-options='{
                "isClosePrev": false
            }'&gt;
                Open modal
            &lt;/button&gt;
            &lt;/div&gt;

            &lt;div class="ti-modal-footer"&gt;
            &lt;button type="button" class="ti-btn ti-btn-light" data-hs-overlay="#hs-stacked-overlays-2" data-hs-overlay-options='{
                "isClosePrev": false
            }'&gt;
                Close
            &lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-primary-full"&gt;
                Save changes
            &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div id="hs-stacked-overlays-3" class="hs-overlay hs-overlay-backdrop-open:bg-gray-900/80 hidden ti-modal z-[80] pointer-events-none"&gt;
        &lt;div class="hs-overlay-open:mt-7 ti-modal-box ease-out"&gt;
        &lt;div class="ti-modal-content pointer-events-auto "&gt;
            &lt;div class="ti-modal-header"&gt;
            &lt;h6 class="ti-modal-title"&gt;
                Modal title (level 3)
            &lt;/h6&gt;
            &lt;button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-bodybg dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-white/10" data-hs-overlay="#hs-stacked-overlays-3" data-hs-overlay-options='{
                "isClosePrev": false
            }'&gt;
                &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M18 6 6 18"/&gt;&lt;path d="m6 6 12 12"/&gt;&lt;/svg&gt;
            &lt;/button&gt;
            &lt;/div&gt;

            &lt;div class="ti-modal-body"&gt;
            &lt;p class="mt-1 text-gray-800 dark:text-white/70"&gt;
                Stacked Overlays: UI design with layered modals, often in web/apps, where each window overlays the previous one.
            &lt;/p&gt;
            &lt;/div&gt;

            &lt;div class="ti-modal-footer"&gt;
            &lt;button type="button" class="ti-btn  ti-btn-light" data-hs-overlay="#hs-stacked-overlays-3" data-hs-overlay-options='{
                "isClosePrev": false
            }'&gt;
                Close
            &lt;/button&gt;
            &lt;button type="button" class="ti-btn ti-btn-primary-full"&gt;
                Save changes
            &lt;/button&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 sm:col-span-6 xl:!col-span-3">
                            <div class="box">
                            <div class="box-header flex justify-between">
                                <h5 class="box-title">Custom backdrop color</h5>
                                <div class="prism-toggle">
                                <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                            </div>
                            </div>
                            <div class="box-body">
                                <button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-custom-backdrop-modal">
                                Open modal
                                </button>
                                <div id="hs-custom-backdrop-modal" class="hs-overlay hs-overlay-backdrop-open:bg-primary/50 hidden ti-modal z-[80] pointer-events-none">
                                <div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out">
                                    <div class="ti-modal-content pointer-events-auto">
                                    <div class="ti-modal-header">
                                        <h6 class="ti-modal-title">
                                        Modal title
                                        </h6>
                                        <button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-custom-backdrop-modal">
                                        <span class="sr-only">Close</span>
                                        <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
                                        </button>
                                    </div>
                                    <div class="ti-modal-body">
                                        <p class="mt-1 text-gray-800 dark:text-white/70">
                                        This is a wider card with supporting text below as a natural lead-in to additional content.
                                        </p>
                                    </div>
                                    <div class="ti-modal-footer">
                                        <button type="button" class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white dark:bg-bodybg text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10" data-hs-overlay="#hs-custom-backdrop-modal">
                                        Close
                                        </button>
                                        <a class="ti-btn ti-btn-primary-full" href="javascript:void(0);">
                                        Save changes
                                        </a>
                                    </div>
                                    </div>
                                </div>
                                </div>
                            </div>
                            <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="ti-btn ti-btn-primary-full" data-hs-overlay="#hs-custom-backdrop-modal"&gt;
        Open modal
    &lt;/button&gt;
    &lt;div id="hs-custom-backdrop-modal" class="hs-overlay hs-overlay-backdrop-open:bg-primary/50 hidden ti-modal z-[80] pointer-events-none"&gt;
        &lt;div class="hs-overlay-open:mt-7 ti-modal-box mt-0 ease-out"&gt;
        &lt;div class="ti-modal-content pointer-events-auto"&gt;
            &lt;div class="ti-modal-header"&gt;
            &lt;h6 class="ti-modal-title"&gt;
                Modal title
            &lt;/h6&gt;
            &lt;button type="button" class="flex justify-center items-center size-7 text-sm font-semibold rounded-full border border-transparent text-gray-800 hover:bg-gray-100 disabled:opacity-50 disabled:pointer-events-none dark:text-white dark:hover:bg-gray-700 dark:focus:outline-none dark:focus:ring-1 dark:focus:ring-gray-600" data-hs-overlay="#hs-custom-backdrop-modal"&gt;
                &lt;span class="sr-only"&gt;Close&lt;/span&gt;
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M18 6 6 18"/&gt;&lt;path d="m6 6 12 12"/&gt;&lt;/svg&gt;
            &lt;/button&gt;
            &lt;/div&gt;
            &lt;div class="ti-modal-body"&gt;
            &lt;p class="mt-1 text-gray-800 dark:text-white/70"&gt;
                This is a wider card with supporting text below as a natural lead-in to additional content.
            &lt;/p&gt;
            &lt;/div&gt;
            &lt;div class="ti-modal-footer"&gt;
            &lt;button type="button" class="hs-dropdown-toggle ti-btn ti-border font-medium bg-white dark:bg-bodybg text-gray-700 shadow-sm align-middle hover:bg-gray-50 focus:ring-offset-white focus:ring-primary dark:bg-bgdark dark:hover:bg-black/20 dark:border-white/10 dark:text-white/70 dark:hover:text-white dark:focus:ring-offset-white/10" data-hs-overlay="#hs-custom-backdrop-modal"&gt;
                Close
            &lt;/button&gt;
            &lt;a class="ti-btn ti-btn-primary-full" href="javascript:void(0);"&gt;
                Save changes
            &lt;/a&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    </code></pre>
    <!-- Prism Code -->
                            </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->
                    
                    <!-- Start:: row-5 -->
                    <h6 class="mb-3">Close Buttons:</h6>
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Basic Close
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <button type="button" class="hs-dropdown-toggle !text-[1.5rem] !font-medium text-[#8c9097] hover:text-defaulttextcolor" data-hs-overlay="#formmodalmdo">
                                        <span class="sr-only">Close</span>
                                        <i class="bi bi-x"></i>
                                        </button>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn-close" aria-label="Close"&gt;&lt;/button&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Disabel state
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <button type="button" class="hs-dropdown-toggle !text-[1.5rem] !font-medium text-[#8c9097]/25 pointer-events-none" data-hs-overlay="#formmodalmdo">
                                        <span class="sr-only">Close</span>
                                        <i class="bi bi-x"></i>
                                        </button>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn-close" disabled aria-label="Close"&gt;&lt;/button&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-4 col-span-12">
                            <div class="box custom-box overflow-hidden">
                                <div class="box-header !pb-3 flex justify-between">
                                    <div class="box-title">
                                        White variant
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body bg-black">
                                    <button type="button" class="hs-dropdown-toggle !text-[1.5rem] !font-medium text-[#8c9097] hover:text-[#8c9097]" data-hs-overlay="#formmodalmdo">
                                        <span class="sr-only">Close</span>
                                        <i class="bi bi-x"></i>
                                        </button>
                                        <button type="button" class="hs-dropdown-toggle !text-[1.5rem] !font-medium text-[#8c9097]/55 pointer-events-none" data-hs-overlay="#formmodalmdo">
                                        <span class="sr-only">Close</span>
                                        <i class="bi bi-x"></i>
                                        </button>
                                </div>
                                <div class="box-footer hidden !border-t-0">
    <!-- Prism Code -->
    <pre class="language-html"><code class="language-html">&lt;button type="button" class="btn-close btn-close-white" aria-label="Close"&gt;&lt;/button&gt;
    &lt;button type="button" class="btn-close btn-close-white" disabled
        aria-label="Close"&gt;&lt;/button&gt;</code></pre>
    <!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

        @vite('resources/assets/js/modal.js')

@endsection

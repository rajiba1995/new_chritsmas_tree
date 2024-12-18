
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Form Layout</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Forms <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Form Layout 
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Vertical Forms
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="mb-4">
                                        <label for="form-text" class="form-label text-black">Enter name</label>
                                        <input type="text" class="form-control" id="form-text" placeholder="">
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-password" class="form-label  text-black">Enter
                                            Password</label>
                                        <input type="password" class="form-control" id="form-password" placeholder="">
                                    </div>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck"
                                           required>
                                        <label class="form-check-label" for="invalidCheck">
                                            Accept Policy
                                        </label>
                                    </div>
                                    <button class="ti-btn ti-btn-primary-full" type="button">Submit</button>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="mb-4"&gt;
        &lt;label for="form-text" class="form-label !text-[.875rem] text-black"&gt;Enter name&lt;/label&gt;
        &lt;input type="text" class="form-control" id="form-text" placeholder=""&gt;
    &lt;/div&gt;
    &lt;div class="mb-4"&gt;
        &lt;label for="form-password" class="form-label text-[.875rem] text-black"&gt;Enter
            Password&lt;/label&gt;
        &lt;input type="password" class="form-control" id="form-password" placeholder=""&gt;
    &lt;/div&gt;
    &lt;div class="form-check mb-4"&gt;
        &lt;input class="form-check-input" type="checkbox" value="" id="invalidCheck"
            required&gt;
        &lt;label class="form-check-label" for="invalidCheck"&gt;
            Accept Policy
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;button class="ti-btn ti-btn-primary-full" type="button"&gt;Submit&lt;/button&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Horizontal form
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <form>
                                        <div class="grid grid-cols-12 mb-4">
                                            <label for="inputEmail3"
                                                class="sm:col-span-2 col-span-12 col-form-label">Email</label>
                                            <div class="sm:col-span-10 col-span-12">
                                                <input type="email" class="form-control" id="inputEmail3">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12 mb-4">
                                            <label for="inputPassword3"
                                                class="sm:col-span-2 col-span-12 col-form-label">Password</label>
                                            <div class="sm:col-span-10 col-span-12">
                                                <input type="password" class="form-control" id="inputPassword3">
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12 mb-4">
                                            <div class=" sm:col-span-2 col-span-12 col-form-label pt-0">Qualified</div>
                                            <div class="sm:col-span-10 col-span-12 ">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="gridRadios" id="gridRadios1" value="option1"
                                                        checked>
                                                    <label class="form-check-label" for="gridRadios1">
                                                        Prelims
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio"
                                                        name="gridRadios" id="gridRadios2" value="option3"
                                                        disabled>
                                                    <label class="form-check-label" for="gridRadios2">
                                                        Mains
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="gridCheck1">
                                                    <label class="form-check-label" for="gridCheck1">
                                                        Certified
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="ti-btn ti-btn-primary-full">Sign in</button>
                                    </form>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;form&gt;
        &lt;div class="grid grid-cols-12 mb-4"&gt;
            &lt;label for="inputEmail3"
                class="sm:col-span-2 col-span-12 col-form-label"&gt;Email&lt;/label&gt;
            &lt;div class="sm:col-span-10 col-span-12"&gt;
                &lt;input type="email" class="form-control" id="inputEmail3"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="grid grid-cols-12 mb-4"&gt;
            &lt;label for="inputPassword3"
                class="sm:col-span-2 col-span-12 col-form-label"&gt;Password&lt;/label&gt;
            &lt;div class="sm:col-span-10 col-span-12"&gt;
                &lt;input type="password" class="form-control" id="inputPassword3"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="grid grid-cols-12 mb-4"&gt;
            &lt;div class=" sm:col-span-2 col-span-12 col-form-label pt-0"&gt;Qualified&lt;/div&gt;
            &lt;div class="sm:col-span-10 col-span-12 "&gt;
                &lt;div class="form-check"&gt;
                    &lt;input class="form-check-input" type="radio"
                        name="gridRadios" id="gridRadios1" value="option1"
                        checked&gt;
                    &lt;label class="form-check-label" for="gridRadios1"&gt;
                        Prelims
                    &lt;/label&gt;
                &lt;/div&gt;
                &lt;div class="form-check disabled"&gt;
                    &lt;input class="form-check-input" type="radio"
                        name="gridRadios" id="gridRadios2" value="option3"
                        disabled&gt;
                    &lt;label class="form-check-label" for="gridRadios2"&gt;
                        Mains
                    &lt;/label&gt;
                &lt;/div&gt;
                &lt;div class="form-check"&gt;
                    &lt;input class="form-check-input" type="checkbox"
                        id="gridCheck1"&gt;
                    &lt;label class="form-check-label" for="gridCheck1"&gt;
                        Certified
                    &lt;/label&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary-full"&gt;Sign in&lt;/button&gt;
    &lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-1 -->

                    <!-- Start:: row-2 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Vertical Forms with icon
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="mb-4">
                                        <label for="form-text1" class="form-label  text-black">Enter name</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ri-user-line"></i></div>
                                            <input type="text" class="form-control !border-s-0" id="form-text1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="mb-4">
                                        <label for="form-password1" class="form-label  text-black">Enter
                                            Password</label>
                                        <div class="input-group">
                                            <div class="input-group-text"><i class="ri-lock-line"></i></div>
                                            <input type="password" class="form-control  !border-s-0" id="form-password1" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="checkbox" value="" id="invalidCheck1"
                                           required>
                                        <label class="form-check-label" for="invalidCheck1">
                                            Accept Policy
                                        </label>
                                    </div>
                                    <button class="ti-btn ti-btn-primary-full !mb-0 mt-4" type="button">Submit</button>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="mb-4"&gt;
        &lt;label for="form-text1" class="form-label text-[.875rem] text-black"&gt;Enter name&lt;/label&gt;
        &lt;div class="input-group"&gt;
            &lt;div class="input-group-text"&gt;&lt;i class="ri-user-line"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;input type="text" class="form-control" id="form-text1" placeholder=""&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="mb-4"&gt;
        &lt;label for="form-password1" class="form-label text-[.875rem] text-black"&gt;Enter
            Password&lt;/label&gt;
        &lt;div class="input-group"&gt;
            &lt;div class="input-group-text"&gt;&lt;i class="ri-lock-line"&gt;&lt;/i&gt;&lt;/div&gt;
            &lt;input type="password" class="form-control" id="form-password1" placeholder=""&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="form-check mb-4"&gt;
        &lt;input class="form-check-input" type="checkbox" value="" id="invalidCheck1"
            required&gt;
        &lt;label class="form-check-label" for="invalidCheck1"&gt;
            Accept Policy
        &lt;/label&gt;
    &lt;/div&gt;
    &lt;button class="ti-btn ti-btn-primary-full !mb-0 mt-4" type="button"&gt;Submit&lt;/button&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Horizontal form With Icons
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <form>
                                        <div class="grid grid-cols-12 mb-4">
                                            <label for="inputEmail1"
                                                class="sm:col-span-2 col-span-12 col-form-label">Email</label>
                                            <div class="sm:col-span-10 col-span-12">
                                                <div class="input-group">
                                                    <input type="email" class="form-control  !border-e-0" id="inputEmail1">
                                                    <div class="input-group-text">
                                                        <i class="ri-mail-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12 mb-4">
                                            <label for="inputPassword1"
                                                class="sm:col-span-2 col-span-12 col-form-label">Password</label>
                                            <div class="sm:col-span-10 col-span-12">
                                                <div class="input-group">
                                                    <input type="password" class="form-control  !border-e-0" id="inputPassword1">
                                                    <div class="input-group-text">
                                                        <i class="ri-lock-line"></i>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="grid grid-cols-12 mb-4">
                                            <div class="col-form-label sm:col-span-2 col-span-12 pt-0">Qualified</div>
                                            <div class="sm:col-span-10 col-span-12">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="radio"
                                                        name="gridRadios" id="gridRadios4" value="option1"
                                                        checked>
                                                    <label class="form-check-label" for="gridRadios4">
                                                        Prelims
                                                    </label>
                                                </div>
                                                <div class="form-check disabled">
                                                    <input class="form-check-input" type="radio"
                                                        name="gridRadios" id="gridRadios3" value="option3"
                                                        disabled>
                                                    <label class="form-check-label" for="gridRadios3">
                                                        Mains
                                                    </label>
                                                </div>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="gridCheck2">
                                                    <label class="form-check-label" for="gridCheck2">
                                                        Certified
                                                    </label>
                                                </div>
                                            </div>
                                        </div>
                                        <button type="button" class="ti-btn ti-btn-primary-full">Sign in</button>
                                    </form>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;form&gt;
        &lt;div class="grid grid-cols-12 mb-4"&gt;
            &lt;label for="inputEmail1"
                class="sm:col-span-2 col-span-12 col-form-label"&gt;Email&lt;/label&gt;
            &lt;div class="sm:col-span-10 col-span-12"&gt;
                &lt;div class="input-group"&gt;
                    &lt;input type="email" class="form-control" id="inputEmail1"&gt;
                    &lt;div class="input-group-text"&gt;
                        &lt;i class="ri-mail-line"&gt;&lt;/i&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="grid grid-cols-12 mb-4"&gt;
            &lt;label for="inputPassword1"
                class="sm:col-span-2 col-span-12 col-form-label"&gt;Password&lt;/label&gt;
            &lt;div class="sm:col-span-10 col-span-12"&gt;
                &lt;div class="input-group"&gt;
                    &lt;input type="password" class="form-control" id="inputPassword1"&gt;
                    &lt;div class="input-group-text"&gt;
                        &lt;i class="ri-lock-line"&gt;&lt;/i&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="grid grid-cols-12 mb-4"&gt;
            &lt;div class="col-form-label sm:col-span-2 col-span-12 pt-0"&gt;Qualified&lt;/div&gt;
            &lt;div class="sm:col-span-10 col-span-12"&gt;
                &lt;div class="form-check"&gt;
                    &lt;input class="form-check-input" type="radio"
                        name="gridRadios" id="gridRadios4" value="option1"
                        checked&gt;
                    &lt;label class="form-check-label" for="gridRadios4"&gt;
                        Prelims
                    &lt;/label&gt;
                &lt;/div&gt;
                &lt;div class="form-check disabled"&gt;
                    &lt;input class="form-check-input" type="radio"
                        name="gridRadios" id="gridRadios3" value="option3"
                        disabled&gt;
                    &lt;label class="form-check-label" for="gridRadios3"&gt;
                        Mains
                    &lt;/label&gt;
                &lt;/div&gt;
                &lt;div class="form-check"&gt;
                    &lt;input class="form-check-input" type="checkbox"
                        id="gridCheck2"&gt;
                    &lt;label class="form-check-label" for="gridCheck2"&gt;
                        Certified
                    &lt;/label&gt;
                    &lt;form&gt;
                        &lt;div class="grid grid-cols-12 mb-4"&gt;
                            &lt;label for="inputEmail1"
                                class="sm:col-span-2 col-span-12 col-form-label"&gt;Email&lt;/label&gt;
                            &lt;div class="sm:col-span-10 col-span-12"&gt;
                                &lt;div class="input-group"&gt;
                                    &lt;input type="email" class="form-control" id="inputEmail1"&gt;
                                    &lt;div class="input-group-text"&gt;
                                        &lt;i class="ri-mail-line"&gt;&lt;/i&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="grid grid-cols-12 mb-4"&gt;
                            &lt;label for="inputPassword1"
                                class="sm:col-span-2 col-span-12 col-form-label"&gt;Password&lt;/label&gt;
                            &lt;div class="sm:col-span-10 col-span-12"&gt;
                                &lt;div class="input-group"&gt;
                                    &lt;input type="password" class="form-control" id="inputPassword1"&gt;
                                    &lt;div class="input-group-text"&gt;
                                        &lt;i class="ri-lock-line"&gt;&lt;/i&gt;
                                    &lt;/div&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="grid grid-cols-12 mb-4"&gt;
                            &lt;div class="col-form-label sm:col-span-2 col-span-12 pt-0"&gt;Qualified&lt;/div&gt;
                            &lt;div class="sm:col-span-10 col-span-12"&gt;
                                &lt;div class="form-check"&gt;
                                    &lt;input class="form-check-input" type="radio"
                                        name="gridRadios" id="gridRadios4" value="option1"
                                        checked&gt;
                                    &lt;label class="form-check-label" for="gridRadios4"&gt;
                                        Prelims
                                    &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;div class="form-check disabled"&gt;
                                    &lt;input class="form-check-input" type="radio"
                                        name="gridRadios" id="gridRadios3" value="option3"
                                        disabled&gt;
                                    &lt;label class="form-check-label" for="gridRadios3"&gt;
                                        Mains
                                    &lt;/label&gt;
                                &lt;/div&gt;
                                &lt;div class="form-check"&gt;
                                    &lt;input class="form-check-input" type="checkbox"
                                        id="gridCheck2"&gt;
                                    &lt;label class="form-check-label" for="gridCheck2"&gt;
                                        Certified
                                    &lt;/label&gt;
                                &lt;/div&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;button type="button" class="ti-btn ti-btn-primary-full"&gt;Sign in&lt;/button&gt;
                    &lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-2 -->

                    <!-- Start:: row-3 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Inline forms
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <form class="sm:grid grid-cols-4 gap-4 items-center">
                                        <div class="mb-4 sm:mb-0 input-group">
                                            <div class="input-group-text">@</div>
                                            <input type="text" class="form-control !border-s-0 placeholder:text-textmuted"
                                                id="inlineFormInputGroupUsername" placeholder="Username">
                                        </div>
                                        <select class="mb-4 sm:mb-0 form-select dark:!bg-light dark:!border-defaultborder/10 !py-3" id="inlineFormSelectPref">
                                            <option selected>Choose...</option>
                                            <option value="1">One</option>
                                            <option value="2">Two</option>
                                            <option value="3">Three</option>
                                        </select>
                                        <div class=" form-check flex items-center gap-2 !my-auto">
                                            <input class="form-check-input" type="checkbox"
                                                id="inlineFormCheck">
                                            <label class="form-check-label" for="inlineFormCheck">
                                                Remember me
                                            </label>
                                        </div>
                                        <button type="button" class="ti-btn ti-btn-primary-full !mb-0 mt-4">Submit</button>
                                    </form>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;form class="sm:grid grid-cols-4 gap-4 items-center"&gt;
        &lt;div class="mb-4 sm:mb-0 input-group"&gt;
            &lt;div class="input-group-text"&gt;@&lt;/div&gt;
            &lt;input type="text" class="form-control"
                id="inlineFormInputGroupUsername" placeholder="Username"&gt;
        &lt;/div&gt;
        &lt;select class="mb-4 sm:mb-0 form-select !py-3" id="inlineFormSelectPref"&gt;
            &lt;option selected&gt;Choose...&lt;/option&gt;
            &lt;option value="1"&gt;One&lt;/option&gt;
            &lt;option value="2"&gt;Two&lt;/option&gt;
            &lt;option value="3"&gt;Three&lt;/option&gt;
        &lt;/select&gt;
        &lt;div class=" form-check !my-auto"&gt;
            &lt;input class="form-check-input" type="checkbox"
                id="inlineFormCheck"&gt;
            &lt;label class="form-check-label" for="inlineFormCheck"&gt;
                Remember me
            &lt;/label&gt;
        &lt;/div&gt;
        &lt;button type="button" class="ti-btn ti-btn-primary-full !mb-0 mt-4"&gt;Submit&lt;/button&gt;
    &lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Column sizing
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 gap-4">
                                        <div class="sm:col-span-7 col-span-12">
                                            <input type="text" class="form-control placeholder:text-textmuted" placeholder="City"
                                                aria-label="City">
                                        </div>
                                        <div class="sm:col-span-3 col-span-12">
                                            <input type="text" class="form-control placeholder:text-textmuted" placeholder="State"
                                                aria-label="State">
                                        </div>
                                        <div class="sm:col-span-2 col-span-12">
                                            <input type="text" class="form-control placeholder:text-textmuted" placeholder="Zip"
                                                aria-label="Zip">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="grid grid-cols-12 gap-4"&gt;
        &lt;div class="sm:col-span-7 col-span-12"&gt;
            &lt;input type="text" class="form-control" placeholder="City"
                aria-label="City"&gt;
        &lt;/div&gt;
        &lt;div class="sm:col-span-3 col-span-12"&gt;
            &lt;input type="text" class="form-control" placeholder="State"
                aria-label="State"&gt;
        &lt;/div&gt;
        &lt;div class="sm:col-span-2 col-span-12"&gt;
            &lt;input type="text" class="form-control" placeholder="Zip"
                aria-label="Zip"&gt;
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
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Utilities
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="mb-4">
                                        <label for="formGroupExampleInput" class="form-label">Example label</label>
                                        <input type="text" class="form-control placeholder:text-textmuted" id="formGroupExampleInput"
                                            placeholder="Example input placeholder">
                                    </div>
                                    <div class="mb-1">
                                        <label for="formGroupExampleInput2" class="form-label">Another label</label>
                                        <input type="text" class="form-control placeholder:text-textmuted" id="formGroupExampleInput2"
                                            placeholder="Another input placeholder">
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="mb-4"&gt;
        &lt;label for="formGroupExampleInput" class="form-label"&gt;Example label&lt;/label&gt;
        &lt;input type="text" class="form-control" id="formGroupExampleInput"
            placeholder="Example input placeholder"&gt;
    &lt;/div&gt;
    &lt;div class="mb-1"&gt;
        &lt;label for="formGroupExampleInput2" class="form-label"&gt;Another label&lt;/label&gt;
        &lt;input type="text" class="form-control" id="formGroupExampleInput2"
            placeholder="Another input placeholder"&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Horizontal form label sizing
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 mb-4">
                                        <label for="colFormLabelSm"
                                            class="sm:col-span-2 col-span-12 col-form-label col-form-label-sm">Email</label>
                                        <div class="sm:col-span-10 col-span-12">
                                            <input type="email" class="form-control form-control-sm placeholder:text-textmuted"
                                                id="colFormLabelSm" placeholder="col-form-label-sm">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12 mb-4">
                                        <label for="colFormLabel" class="sm:col-span-2 col-span-12 col-form-label">Email</label>
                                        <div class="sm:col-span-10 col-span-12">
                                            <input type="email" class="form-control placeholder:text-textmuted" id="colFormLabel"
                                                placeholder="col-form-label">
                                        </div>
                                    </div>
                                    <div class="grid grid-cols-12">
                                        <label for="colFormLabelLg"
                                            class="sm:col-span-2 col-span-12 col-form-label col-form-label-lg text-[1.25rem]">Email</label>
                                        <div class="sm:col-span-10 col-span-12">
                                            <input type="email" class="form-control form-control-lg placeholder:text-textmuted"
                                                id="colFormLabelLg" placeholder="col-form-label-lg">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="grid grid-cols-12 mb-4"&gt;
        &lt;label for="colFormLabelSm"
            class="sm:col-span-2 col-span-12 col-form-label col-form-label-sm"&gt;Email&lt;/label&gt;
        &lt;div class="sm:col-span-10 col-span-12"&gt;
            &lt;input type="email" class="form-control form-control-sm"
                id="colFormLabelSm" placeholder="col-form-label-sm"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="grid grid-cols-12 mb-4"&gt;
        &lt;label for="colFormLabel" class="sm:col-span-2 col-span-12 col-form-label"&gt;Email&lt;/label&gt;
        &lt;div class="sm:col-span-10 col-span-12"&gt;
            &lt;input type="email" class="form-control" id="colFormLabel"
                placeholder="col-form-label"&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="grid grid-cols-12"&gt;
        &lt;label for="colFormLabelLg"
            class="sm:col-span-2 col-span-12 col-form-label col-form-label-lg text-[1.25rem]"&gt;Email&lt;/label&gt;
        &lt;div class="sm:col-span-10 col-span-12"&gt;
            &lt;input type="email" class="form-control form-control-lg"
                id="colFormLabelLg" placeholder="col-form-label-lg"&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-4 -->

                    <!-- Start:: row-5 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Auto sizing
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <form class="sm:grid grid-cols-12 block gap-y-2 gap-x-4 items-center mb-4">
                                        <div class="col-span-12 mb-4 sm:mb-0">
                                            <label class="hidden" for="autoSizingInput">Name</label>
                                            <input type="text" class="form-control placeholder:text-textmuted" id="autoSizingInput"
                                                placeholder="Jane Doe">
                                        </div>
                                        <div class="col-span-12 mb-4 sm:mb-0">
                                            <label class="hidden"
                                                for="autoSizingInputGroup">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control !border-s-0 placeholder:text-textmuted"
                                                    id="autoSizingInputGroup" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="col-span-12 mb-4 sm:mb-0">
                                            <label class="hidden"
                                                for="autoSizingSelect">Preference</label>
                                            <select class="form-select  dark:!bg-light dark:!border-defaultborder/10" id="autoSizingSelect">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="col-span-12">
                                            <div class="form-check flex items-center gap-2">
                                                <input class="form-check-input" type="checkbox"
                                                    id="autoSizingCheck">
                                                <label class="form-check-label" for="autoSizingCheck">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-span-12">
                                            <button type="button" class="ti-btn ti-btn-primary-full !mb-0 mt-4">Submit</button>
                                        </div>
                                    </form>
                                    <span class="font-semibold text-textmuted">You can then remix that once again with size-specific column
                                        classes.</span>
                                    <form class="grid grid-cols-12  gap-x-4 gap-y-2 items-center mt-2">
                                        <div class="sm:col-span-3 col-span-12">
                                            <label class="hidden"
                                                for="specificSizeInputName">Name</label>
                                            <input type="text" class="form-control placeholder:text-textmuted" id="specificSizeInputName"
                                                placeholder="Jane Doe">
                                        </div>
                                        <div class="sm:col-span-3 col-span-12">
                                            <label class="hidden"
                                                for="specificSizeInputGroupUsername">Username</label>
                                            <div class="input-group">
                                                <div class="input-group-text">@</div>
                                                <input type="text" class="form-control !border-s-0 placeholder:text-textmuted"
                                                    id="specificSizeInputGroupUsername" placeholder="Username">
                                            </div>
                                        </div>
                                        <div class="sm:col-span-3 col-span-12">
                                            <label class="hidden"
                                                for="specificSizeSelect">Preference</label>
                                            <select class="form-select  dark:!bg-light dark:!border-defaultborder/10 !py-[0.59rem]" id="specificSizeSelect">
                                                <option selected>Choose...</option>
                                                <option value="1">One</option>
                                                <option value="2">Two</option>
                                                <option value="3">Three</option>
                                            </select>
                                        </div>
                                        <div class="sm:col-span-3 col-span-12">
                                            <div class="form-check flex items-center gap-2 !my-auto">
                                                <input class="form-check-input" type="checkbox"
                                                    id="autoSizingCheck2">
                                                <label class="form-check-label" for="autoSizingCheck2">
                                                    Remember me
                                                </label>
                                            </div>
                                        </div>
                                        <div class="sm:col-span-3 col-span-12">
                                            <button type="button" class="ti-btn ti-btn-primary-full">Submit</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;form class="sm:grid grid-cols-12 block gap-y-2 gap-x-4 items-center mb-4"&gt;
        &lt;div class="col-span-12 mb-4 sm:mb-0"&gt;
            &lt;label class="hidden" for="autoSizingInput"&gt;Name&lt;/label&gt;
            &lt;input type="text" class="form-control" id="autoSizingInput"
                placeholder="Jane Doe"&gt;
        &lt;/div&gt;
        &lt;div class="col-span-12 mb-4 sm:mb-0"&gt;
            &lt;label class="hidden"
                for="autoSizingInputGroup"&gt;Username&lt;/label&gt;
            &lt;div class="input-group"&gt;
                &lt;div class="input-group-text"&gt;@&lt;/div&gt;
                &lt;input type="text" class="form-control"
                    id="autoSizingInputGroup" placeholder="Username"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-span-12 mb-4 sm:mb-0"&gt;
            &lt;label class="hidden"
                for="autoSizingSelect"&gt;Preference&lt;/label&gt;
            &lt;select class="form-select" id="autoSizingSelect"&gt;
                &lt;option selected&gt;Choose...&lt;/option&gt;
                &lt;option value="1"&gt;One&lt;/option&gt;
                &lt;option value="2"&gt;Two&lt;/option&gt;
                &lt;option value="3"&gt;Three&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
        &lt;div class="col-span-12"&gt;
            &lt;div class="form-check"&gt;
                &lt;input class="form-check-input" type="checkbox"
                    id="autoSizingCheck"&gt;
                &lt;label class="form-check-label" for="autoSizingCheck"&gt;
                    Remember me
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-span-12"&gt;
            &lt;button type="button" class="ti-btn ti-btn-primary-full !mb-0 mt-4"&gt;Submit&lt;/button&gt;
        &lt;/div&gt;
    &lt;/form&gt;
    &lt;span class="font-semibold text-textmuted"&gt;You can then remix that once again with size-specific column
        classes.&lt;/span&gt;
    &lt;form class="grid grid-cols-12  gap-x-4 gap-y-2 items-center mt-2"&gt;
        &lt;div class="sm:col-span-3 col-span-12"&gt;
            &lt;label class="hidden"
                for="specificSizeInputName"&gt;Name&lt;/label&gt;
            &lt;input type="text" class="form-control" id="specificSizeInputName"
                placeholder="Jane Doe"&gt;
        &lt;/div&gt;
        &lt;div class="sm:col-span-3 col-span-12"&gt;
            &lt;label class="hidden"
                for="specificSizeInputGroupUsername"&gt;Username&lt;/label&gt;
            &lt;div class="input-group"&gt;
                &lt;div class="input-group-text"&gt;@&lt;/div&gt;
                &lt;input type="text" class="form-control"
                    id="specificSizeInputGroupUsername" placeholder="Username"&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="sm:col-span-3 col-span-12"&gt;
            &lt;label class="hidden"
                for="specificSizeSelect"&gt;Preference&lt;/label&gt;
            &lt;select class="form-select !py-[0.59rem]" id="specificSizeSelect"&gt;
                &lt;option selected&gt;Choose...&lt;/option&gt;
                &lt;option value="1"&gt;One&lt;/option&gt;
                &lt;option value="2"&gt;Two&lt;/option&gt;
                &lt;option value="3"&gt;Three&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
        &lt;div class="sm:col-span-3 col-span-12"&gt;
            &lt;div class="form-check !my-auto"&gt;
                &lt;input class="form-check-input" type="checkbox"
                    id="autoSizingCheck2"&gt;
                &lt;label class="form-check-label" for="autoSizingCheck2"&gt;
                    Remember me
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="sm:col-span-3 col-span-12"&gt;
            &lt;button type="button" class="ti-btn ti-btn-primary-full"&gt;Submit&lt;/button&gt;
        &lt;/div&gt;
    &lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-5 -->

                    <!-- Start:: row-6 -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Form grid
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4">
                                        <div class="md:col-span-6 col-span-12 mb-4">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control placeholder:text-textmuted" placeholder="First name"
                                                aria-label="First name">
                                        </div>
                                        <div class="md:col-span-6 col-span-12 mb-4">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control placeholder:text-textmuted" placeholder="Last name"
                                                aria-label="Last name">
                                        </div>
                                        <div class="md:col-span-6 col-span-12 mb-4 sm:mb-0">
                                            <label class="form-label">Address</label>
                                            <div class="grid grid-cols-12 sm:gap-x-4">
                                                <div class="xl:col-span-12 col-span-12 mb-4">
                                                    <input type="text" class="form-control placeholder:text-textmuted" placeholder="Street"
                                                    aria-label="Street">
                                                </div>
                                                <div class="xl:col-span-12 col-span-12 mb-4">
                                                    <input type="text" class="form-control placeholder:text-textmuted" placeholder="Landmark"
                                                    aria-label="Landmark">
                                                </div>
                                                <div class="xxl:col-span-6 xl:col-span-12 col-span-12 mb-4">
                                                    <input type="text" class="form-control placeholder:text-textmuted" placeholder="City"
                                                    aria-label="City">
                                                </div>
                                                <div class="xxl:col-span-6 xl:col-span-12 col-span-12 mb-4">
                                                    <select id="inputState1" class="form-select  dark:!bg-light dark:!border-defaultborder/10 !py-[0.59rem]">
                                                        <option selected>State</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                                <div class="xxl:col-span-6 xl:col-span-12 col-span-12 xxl:mb-0 mb-4">
                                                    <input type="text" class="form-control placeholder:text-textmuted" placeholder="Postal/Zip code"
                                                    aria-label="Postal/Zip code">
                                                </div>
                                                <div class="xxl:col-span-6 xl:col-span-12 col-span-12">
                                                    <select id="inputCountry" class="form-select dark:!bg-light dark:!border-defaultborder/10 placeholder:text-textmuted !py-[0.59rem]">
                                                        <option selected>Country</option>
                                                        <option>...</option>
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6  col-span-12">
                                            <div class="grid grid-cols-12">
                                                <div class="xl:col-span-12 col-span-12 mb-4">
                                                    <label class="form-label">Email</label>
                                                    <input type="email" class="form-control placeholder:text-textmuted" placeholder="Email"
                                                    aria-label="email">
                                                </div>
                                                <div class="xl:col-span-12 col-span-12 mb-4">
                                                    <label class="form-label">D.O.B</label>
                                                    <input type="date" class="form-control"
                                                    aria-label="dateofbirth">
                                                </div>
                                                <div class="xl:col-span-12 col-span-12 mb-4">
                                                    <div class="grid grid-cols-12 gap-3">
                                                        <label class="form-label mb-1 xl:col-span-12 col-span-12">Maritial Status</label>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-check flex items-center gap-2">
                                                                <input class="form-check-input" type="radio" value="" id="status-married" name="status-married">
                                                                <label class="form-check-label" for="status-married">
                                                                    Married
                                                                </label>
                                                            </div>
                                                        </div>
                                                        <div class="xl:col-span-6 col-span-12">
                                                            <div class="form-check flex items-center gap-2">
                                                                <input class="form-check-input" type="radio" value="" id="status-unmarried" name="status-married" checked>
                                                                <label class="form-check-label" for="status-unmarried">
                                                                    Single
                                                                </label>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-12 col-span-12">

                                                </div>
                                            </div>
                                        </div>
                                        <div class="md:col-span-6 col-span-12 mb-4 sm:mb-0">
                                            <label class="form-label">Contact Number</label>
                                            <input type="number" class="form-control placeholder:text-textmuted" placeholder="Phone number"
                                                aria-label="Phone number">
                                        </div>
                                        <div class="md:col-span-6 col-span-12 mb-4 sm:mb-0">
                                            <label class="form-label">Alternative Contact</label>
                                            <input type="number" class="form-control placeholder:text-textmuted" placeholder="Phone number"
                                                aria-label="Phone number">
                                        </div>
                                        <div class="md:col-span-12 col-span-12 mb-4 sm:mb-0">
                                            <div class="form-check flex items-center gap-2 mb-4">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <div class="md:col-span-12 col-span-12">
                                            <button type="button" class="ti-btn ti-btn-primary-full !mb-0">Sign in</button>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="grid grid-cols-12 sm:gap-x-6 sm:gap-y-4"&gt;
        &lt;div class="md:col-span-6 col-span-12 mb-4"&gt;
            &lt;label class="form-label"&gt;First Name&lt;/label&gt;
            &lt;input type="text" class="form-control" placeholder="First name"
                aria-label="First name"&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-6 col-span-12 mb-4"&gt;
            &lt;label class="form-label"&gt;Last Name&lt;/label&gt;
            &lt;input type="text" class="form-control" placeholder="Last name"
                aria-label="Last name"&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-6 col-span-12 mb-4 sm:mb-0"&gt;
            &lt;label class="form-label"&gt;Address&lt;/label&gt;
            &lt;div class="grid grid-cols-12 sm:gap-x-4"&gt;
                &lt;div class="xl:col-span-12 col-span-12 mb-4"&gt;
                    &lt;input type="text" class="form-control" placeholder="Street"
                    aria-label="Street"&gt;
                &lt;/div&gt;
                &lt;div class="xl:col-span-12 col-span-12 mb-4"&gt;
                    &lt;input type="text" class="form-control" placeholder="Landmark"
                    aria-label="Landmark"&gt;
                &lt;/div&gt;
                &lt;div class="xxl:col-span-6 xl:col-span-12 col-span-12 mb-4"&gt;
                    &lt;input type="text" class="form-control" placeholder="City"
                    aria-label="City"&gt;
                &lt;/div&gt;
                &lt;div class="xxl:col-span-6 xl:col-span-12 col-span-12 mb-4"&gt;
                    &lt;select id="inputState1" class="form-select !py-[0.59rem]"&gt;
                        &lt;option selected&gt;State&lt;/option&gt;
                        &lt;option&gt;...&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/div&gt;
                &lt;div class="xxl:col-span-6 xl:col-span-12 col-span-12 xxl:mb-0 mb-4"&gt;
                    &lt;input type="text" class="form-control" placeholder="Postal/Zip code"
                    aria-label="Postal/Zip code"&gt;
                &lt;/div&gt;
                &lt;div class="xxl:col-span-6 xl:col-span-12 col-span-12"&gt;
                    &lt;select id="inputCountry" class="form-select !py-[0.59rem]"&gt;
                        &lt;option selected&gt;Country&lt;/option&gt;
                        &lt;option&gt;...&lt;/option&gt;
                    &lt;/select&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-6  col-span-12"&gt;
            &lt;div class="grid grid-cols-12"&gt;
                &lt;div class="xl:col-span-12 col-span-12 mb-4"&gt;
                    &lt;label class="form-label"&gt;Email&lt;/label&gt;
                    &lt;input type="email" class="form-control" placeholder="Email"
                    aria-label="email"&gt;
                &lt;/div&gt;
                &lt;div class="xl:col-span-12 col-span-12 mb-4"&gt;
                    &lt;label class="form-label"&gt;D.O.B&lt;/label&gt;
                    &lt;input type="date" class="form-control"
                    aria-label="dateofbirth"&gt;
                &lt;/div&gt;
                &lt;div class="xl:col-span-12 col-span-12 mb-4"&gt;
                    &lt;div class="grid grid-cols-12 gap-3"&gt;
                        &lt;label class="form-label mb-1 xl:col-span-12 col-span-12"&gt;Maritial Status&lt;/label&gt;
                        &lt;div class="xl:col-span-6 col-span-12"&gt;
                            &lt;div class="form-check"&gt;
                                &lt;input class="form-check-input" type="radio" value="" id="status-married" name="status-married"&gt;
                                &lt;label class="form-check-label" for="status-married"&gt;
                                    Married
                                &lt;/label&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                        &lt;div class="xl:col-span-6 col-span-12"&gt;
                            &lt;div class="form-check"&gt;
                                &lt;input class="form-check-input" type="radio" value="" id="status-unmarried" name="status-married" checked&gt;
                                &lt;label class="form-check-label" for="status-unmarried"&gt;
                                    Single
                                &lt;/label&gt;
                            &lt;/div&gt;
                        &lt;/div&gt;
                    &lt;/div&gt;
                &lt;/div&gt;
                &lt;div class="xl:col-span-12 col-span-12"&gt;
    
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-6 col-span-12 mb-4 sm:mb-0"&gt;
            &lt;label class="form-label"&gt;Contact Number&lt;/label&gt;
            &lt;input type="number" class="form-control" placeholder="Phone number"
                aria-label="Phone number"&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-6 col-span-12 mb-4 sm:mb-0"&gt;
            &lt;label class="form-label"&gt;Alternative Contact&lt;/label&gt;
            &lt;input type="number" class="form-control" placeholder="Phone number"
                aria-label="Phone number"&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-12 col-span-12 mb-4 sm:mb-0"&gt;
            &lt;div class="form-check mb-4"&gt;
                &lt;input class="form-check-input" type="checkbox" id="gridCheck"&gt;
                &lt;label class="form-check-label" for="gridCheck"&gt;
                    Check me out
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-12 col-span-12"&gt;
            &lt;button type="button" class="ti-btn ti-btn-primary-full !mb-0"&gt;Sign in&lt;/button&gt;
        &lt;/div&gt;
    &lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Gutters
                                    </div>
                                    <div class="prism-toggle">
                                        <button type="button" class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <form class="grid grid-cols-12 gap-4 mt-0">
                                        <div class="md:col-span-6 col-span-12">
                                            <label class="form-label">First Name</label>
                                            <input type="text" class="form-control placeholder:text-textmuted" placeholder="First name"
                                                aria-label="First name">
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <label class="form-label">Last Name</label>
                                            <input type="text" class="form-control placeholder:text-textmuted" placeholder="Last name"
                                                aria-label="Last name">
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <label for="inputEmail4" class="form-label">Email</label>
                                            <input type="email" class="form-control" id="inputEmail4">
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <label for="inputPassword4" class="form-label">Password</label>
                                            <input type="password" class="form-control" id="inputPassword4">
                                        </div>
                                        <div class="col-span-12">
                                            <label for="inputAddress" class="form-label">Address</label>
                                            <input type="text" class="form-control placeholder:text-textmuted" id="inputAddress"
                                                placeholder="1234 Main St">
                                        </div>
                                        <div class="col-span-12">
                                            <label for="inputAddress2" class="form-label">Address 2</label>
                                            <input type="text" class="form-control placeholder:text-textmuted" id="inputAddress2"
                                                placeholder="Apartment, studio, or floor">
                                        </div>
                                        <div class="md:col-span-6 col-span-12">
                                            <label for="inputCity" class="form-label">City</label>
                                            <input type="text" class="form-control" id="inputCity">
                                        </div>
                                        <div class="md:col-span-4 col-span-12">
                                            <label for="inputState" class="form-label">State</label>
                                            <select id="inputState" class="form-select dark:!bg-light dark:!border-defaultborder/10 !py-[0.59rem]">
                                                <option selected>Choose...</option>
                                                <option>...</option>
                                            </select>
                                        </div>
                                        <div class="md:col-span-2 col-span-12">
                                            <label for="inputZip" class="form-label">Zip</label>
                                            <input type="text" class="form-control" id="inputZip">
                                        </div>
                                        <div class="col-span-12 ">
                                            <div class="form-check flex items-center gap-2">
                                                <input class="form-check-input" type="checkbox" id="gridCheck3">
                                                <label class="form-check-label" for="gridCheck3">
                                                    Check me out
                                                </label>
                                            </div>
                                        </div>
                                        <div class="col-span-12">
                                            <button type="button" class="ti-btn ti-btn-primary-full">Sign in</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;form class="grid grid-cols-12 gap-4 mt-0"&gt;
        &lt;div class="md:col-span-6 col-span-12"&gt;
            &lt;label class="form-label"&gt;First Name&lt;/label&gt;
            &lt;input type="text" class="form-control" placeholder="First name"
                aria-label="First name"&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-6 col-span-12"&gt;
            &lt;label class="form-label"&gt;Last Name&lt;/label&gt;
            &lt;input type="text" class="form-control" placeholder="Last name"
                aria-label="Last name"&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-6 col-span-12"&gt;
            &lt;label for="inputEmail4" class="form-label"&gt;Email&lt;/label&gt;
            &lt;input type="email" class="form-control" id="inputEmail4"&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-6 col-span-12"&gt;
            &lt;label for="inputPassword4" class="form-label"&gt;Password&lt;/label&gt;
            &lt;input type="password" class="form-control" id="inputPassword4"&gt;
        &lt;/div&gt;
        &lt;div class="col-span-12"&gt;
            &lt;label for="inputAddress" class="form-label"&gt;Address&lt;/label&gt;
            &lt;input type="text" class="form-control" id="inputAddress"
                placeholder="1234 Main St"&gt;
        &lt;/div&gt;
        &lt;div class="col-span-12"&gt;
            &lt;label for="inputAddress2" class="form-label"&gt;Address 2&lt;/label&gt;
            &lt;input type="text" class="form-control" id="inputAddress2"
                placeholder="Apartment, studio, or floor"&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-6 col-span-12"&gt;
            &lt;label for="inputCity" class="form-label"&gt;City&lt;/label&gt;
            &lt;input type="text" class="form-control" id="inputCity"&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-4 col-span-12"&gt;
            &lt;label for="inputState" class="form-label"&gt;State&lt;/label&gt;
            &lt;select id="inputState" class="form-select !py-[0.59rem]"&gt;
                &lt;option selected&gt;Choose...&lt;/option&gt;
                &lt;option&gt;...&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
        &lt;div class="md:col-span-2 col-span-12"&gt;
            &lt;label for="inputZip" class="form-label"&gt;Zip&lt;/label&gt;
            &lt;input type="text" class="form-control" id="inputZip"&gt;
        &lt;/div&gt;
        &lt;div class="col-span-12 "&gt;
            &lt;div class="form-check"&gt;
                &lt;input class="form-check-input" type="checkbox" id="gridCheck3"&gt;
                &lt;label class="form-check-label" for="gridCheck3"&gt;
                    Check me out
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;div class="col-span-12"&gt;
            &lt;button type="button" class="ti-btn ti-btn-primary-full"&gt;Sign in&lt;/button&gt;
        &lt;/div&gt;
    &lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-6 -->

@endsection

@section('scripts')
        
        <!-- Choices JS -->
        <script src="{{asset('build/assets/libs/choices.js/public/assets/scripts/choices.min.js')}}"></script>

        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection

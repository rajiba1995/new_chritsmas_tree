
@extends('layouts.master')

@section('styles')

        <!-- Prism CSS -->
        <link rel="stylesheet" href="{{asset('build/assets/libs/prismjs/themes/prism-coy.min.css')}}">

@endsection

@section('content')
	
                    <!-- Page Header -->
                    <div class="md:flex block items-center justify-between mb-6 mt-[2rem]  page-header-breadcrumb">
                      <div class="my-auto">
                        <h5 class="page-title text-[1.3125rem] font-medium text-defaulttextcolor mb-0">Form Input</h5>
                        <nav>
                          <ol class="flex items-center whitespace-nowrap min-w-0">
                            <li class="text-[12px]"> <a class="flex items-center text-primary hover:text-primary"
                                href="javascript:void(0);"> Form Elements <i
                                  class="ti ti-chevrons-right flex-shrink-0 mx-3 overflow-visible text-textmuted rtl:rotate-180"></i>
                              </a> </li>
                            <li class="text-[12px]"> <a class="flex items-center text-textmuted"
                                href="javascript:void(0);">Form Input 
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
                    <div class="grid grid-cols-12 gap-6 text-defaultsize">
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Input Types
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="grid grid-cols-12 sm:gap-6">
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-label" class="form-label !font-normal">Basic Input:</label>
                                            <input type="text" class="form-control " id="input">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-label" class="form-label !mb-2">Form Input With Label</label>
                                            <input type="text" class="form-control " id="input-label">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-placeholder" class="form-label">Form Input With Placeholder</label>
                                            <input type="text" class="form-control  placeholder:text-textmuted" id="input-placeholder" placeholder="Placeholder">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-text" class="form-label">Type Text</label>
                                            <input type="text" class="form-control  placeholder:text-textmuted" id="input-text" placeholder="Text">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-number" class="form-label">Type Number</label>
                                            <input type="number" class="form-control  placeholder:text-textmuted" id="input-number" placeholder="Number">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-password" class="form-label">Type Password</label>
                                            <input type="password" class="form-control  placeholder:text-textmuted" id="input-password" placeholder="Password">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-email" class="form-label">Type Email</label>
                                            <input type="email" class="form-control  placeholder:text-textmuted" id="input-email" placeholder="Email@xyz.com">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-tel" class="form-label">Type Tel</label>
                                            <input type="tel" class="form-control  placeholder:text-textmuted" id="input-tel" placeholder="+1100-2031-1233">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-date" class="form-label">Type Date</label>
                                            <input type="date" class="form-control " id="input-date">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-week" class="form-label">Type Week</label>
                                            <input type="week" class="form-control " id="input-week">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-month" class="form-label">Type Month</label>
                                            <input type="month" class="form-control " id="input-month">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-time" class="form-label">Type Time</label>
                                            <input type="time" class="form-control " id="input-time">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-datetime-local" class="form-label">Type datetime-local</label>
                                            <input type="datetime-local" class="form-control " id="input-datetime-local">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-search" class="form-label">Type Search</label>
                                            <input type="search" class="form-control " id="input-search" placeholder="Search">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-submit" class="form-label">Type Submit</label>
                                            <input type="submit" class="form-control ti-btn " id="input-submit" value="Submit">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-reset" class="form-label">Type Reset</label>
                                            <input type="reset" class="form-control ti-btn " id="input-reset">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-button" class="form-label">Type Button</label>
                                            <input type="button" class="form-control  ti-btn !text-white !bg-primary" id="input-button"  value="Button">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <div class="grid grid-cols-12 gap-6">
                                                <div class="xl:col-span-3 col-span-12 flex flex-col ">
                                                    <label class="form-label">Type Color</label>
                                                    <input class="form-control form-input-color !rounded-md " type="color" value="#136bd0">
                                                </div>
                                                <div class="xl:col-span-5 col-span-12">
                                                    <div class="form-check">
                                                        <p class="mb-3 px-0 text-textmuted">Type Checkbox</p>
                                                        <input class="form-check-input ms-2 " type="checkbox" value="" checked="">
                                                    </div>
                                                </div>
                                                <div class="xl:col-span-4 col-span-12">
                                                    <div class="form-check">
                                                        <p class="mb-4 px-0 text-textmuted">Type Radio</p>
                                                        <input class="form-check-input  ms-2" type="radio" checked="">
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-file" class="form-label">Type File</label>
                                            <input type="file" name="file-input" id="file-input" class="block w-full border border-gray-200 focus:shadow-sm dark:focus:shadow-white/10 rounded-sm text-sm focus:z-10 focus:outline-0 focus:border-gray-200 dark:focus:border-white/10 dark:border-white/10
                                            file:border-0
                                           file:bg-gray-200 file:me-4
                                           file:py-3 file:px-4
                                           dark:file:bg-black/20 dark:file:text-white/50">  
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label class="form-label">Type Url</label>
                                            <input class="form-control  placeholder:text-textmuted" type="url"  name="website" placeholder="http://example.com">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-disabled" class="form-label">Type Disabled</label>
                                            <input type="text" id="input-disabled" class="form-control  placeholder:text-textmuted" placeholder="Disabled input" disabled="">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-readonlytext" class="form-label">Input Readonly Text</label>
                                            <input type="text" readonly="" class="form-control-plaintext " id="input-readonlytext" value="email@example.com">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="disabled-readonlytext" class="form-label">Disabled Readonly Input</label>
                                            <input class="form-control " type="text" value="Disabled readonly input" id="disabled-readonlytext" aria-label="Disabled input example" disabled="" readonly="">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label class="form-label">Type Readonly Input</label>
                                            <input class="form-control " type="text" value="Readonly input here..." aria-label="readonly input example" readonly="">
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="text-area" class="form-label">Textarea</label>
                                            <textarea class="form-control " id="text-area" rows="1"></textarea>
                                        </div>
                                        <div class="xl:col-span-4 lf:col-span-6 md:col-span-6 sm:col-span-12 col-span-12">
                                            <label for="input-DataList" class="form-label">Datalist example</label>
                                            <input class="form-control  placeholder:text-textmuted" list="datalistOptions" id="input-DataList" placeholder="Type to search...">
                                            <datalist id="datalistOptions">
                                                <option value="San Francisco">
                                                </option>
                                                <option value="New York">
                                                </option>
                                                <option value="Seattle">
                                                </option>
                                                <option value="Los Angeles">
                                                </option>
                                                <option value="Chicago">
                                                </option>
                                            </datalist>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="row gy-4"&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;p class="mb-2 text-muted"&gt;Basic Input:&lt;/p&gt;
        &lt;input type="text" class="form-control" id="input"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-label" class="form-label"&gt;Form Input With Label&lt;/label&gt;
        &lt;input type="text" class="form-control" id="input-label"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-placeholder" class="form-label"&gt;Form Input With Placeholder&lt;/label&gt;
        &lt;input type="text" class="form-control" id="input-placeholder" placeholder="Placeholder"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-text" class="form-label"&gt;Type Text&lt;/label&gt;
        &lt;input type="text" class="form-control" id="input-text" placeholder="Text"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-number" class="form-label"&gt;Type Number&lt;/label&gt;
        &lt;input type="number" class="form-control" id="input-number" placeholder="Number"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-password" class="form-label"&gt;Type Password&lt;/label&gt;
        &lt;input type="password" class="form-control" id="input-password" placeholder="Password"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-email" class="form-label"&gt;Type Email&lt;/label&gt;
        &lt;input type="email" class="form-control" id="input-email" placeholder="Email@xyz.com"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-tel" class="form-label"&gt;Type Tel&lt;/label&gt;
        &lt;input type="tel" class="form-control" id="input-tel" placeholder="+1100-2031-1233"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-date" class="form-label"&gt;Type Date&lt;/label&gt;
        &lt;input type="date" class="form-control" id="input-date"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-week" class="form-label"&gt;Type Week&lt;/label&gt;
        &lt;input type="week" class="form-control" id="input-week"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-month" class="form-label"&gt;Type Month&lt;/label&gt;
        &lt;input type="month" class="form-control" id="input-month"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-time" class="form-label"&gt;Type Time&lt;/label&gt;
        &lt;input type="time" class="form-control" id="input-time"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-datetime-local" class="form-label"&gt;Type datetime-local&lt;/label&gt;
        &lt;input type="datetime-local" class="form-control" id="input-datetime-local"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-search" class="form-label"&gt;Type Search&lt;/label&gt;
        &lt;input type="search" class="form-control" id="input-search" placeholder="Search"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-submit" class="form-label"&gt;Type Submit&lt;/label&gt;
        &lt;input type="submit" class="form-control" id="input-submit" value="Submit"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-reset" class="form-label"&gt;Type Reset&lt;/label&gt;
        &lt;input type="reset" class="form-control" id="input-reset"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-button" class="form-label"&gt;Type Button&lt;/label&gt;
        &lt;input type="button" class="form-control btn btn-primary" id="input-button"  value="Button"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;div class="row"&gt;
            &lt;div class="xl:col-span-4"&gt;
                &lt;label class="form-label"&gt;Type Color&lt;/label&gt;
                &lt;input class="form-control form-input-color" type="color" value="#136bd0"&gt;
            &lt;/div&gt;
            &lt;div class="xl:col-span-4"&gt;
                &lt;div class="form-check"&gt;
                    &lt;p class="mb-3 px-0 text-muted"&gt;Type Checkbox&lt;/p&gt;
                    &lt;input class="form-check-input ms-2" type="checkbox" value="" checked=""&gt;
                &lt;/div&gt;
            &lt;/div&gt;
            &lt;div class="col-xl-3"&gt;
                &lt;div class="form-check"&gt;
                    &lt;p class="mb-3 px-0 text-muted"&gt;Type Radio&lt;/p&gt;
                    &lt;input class="form-check-input ms-2" type="radio" checked=""&gt;
                &lt;/div&gt;
            &lt;/div&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-file" class="form-label"&gt;Type File&lt;/label&gt;
        &lt;input class="form-control" type="file" id="input-file"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label class="form-label"&gt;Type Url&lt;/label&gt;
        &lt;input class="form-control" type="url"  name="website" placeholder="http://example.com"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-disabled" class="form-label"&gt;Type Disabled&lt;/label&gt;
        &lt;input type="text" id="input-disabled" class="form-control" placeholder="Disabled input" disabled=""&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-readonlytext" class="form-label"&gt;Input Readonly Text&lt;/label&gt;
        &lt;input type="text" readonly="" class="form-control-plaintext" id="input-readonlytext" value="email@example.com"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="disabled-readonlytext" class="form-label"&gt;Disabled Readonly Input&lt;/label&gt;
        &lt;input class="form-control" type="text" value="Disabled readonly input" id="disabled-readonlytext" aria-label="Disabled input example" disabled="" readonly=""&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label class="form-label"&gt;Type Readonly Input&lt;/label&gt;
        &lt;input class="form-control" type="text" value="Readonly input here..." aria-label="readonly input example" readonly=""&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="text-area" class="form-label"&gt;Textarea&lt;/label&gt;
        &lt;textarea class="form-control" id="text-area" rows="1"&gt;&lt;/textarea&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-4 col-lg-6 col-md-6 col-sm-12"&gt;
        &lt;label for="input-DataList" class="form-label"&gt;Datalist example&lt;/label&gt;
        &lt;input class="form-control" list="datalistOptions" id="input-DataList" placeholder="Type to search..."&gt;
        &lt;datalist id="datalistOptions"&gt;
            &lt;option value="San Francisco"&gt;
            &lt;/option&gt;
            &lt;option value="New York"&gt;
            &lt;/option&gt;
            &lt;option value="Seattle"&gt;
            &lt;/option&gt;
            &lt;option value="Los Angeles"&gt;
            &lt;/option&gt;
            &lt;option value="Chicago"&gt;
            &lt;/option&gt;
        &lt;/datalist&gt;
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
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Input shapes
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body !-mt-4">
                                    <div class="row gy-3">
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="input-noradius" class="form-label">Input With No Radius</label>
                                            <input type="text" class="form-control mb-3 !rounded-none placeholder:text-textmuted" id="input-noradius" placeholder="No Radius">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="input-rounded" class="form-label">Input With Radius</label>
                                            <input type="text" class="form-control mb-3  placeholder:text-textmuted" id="input-rounded" placeholder="Default Radius">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="input-rounded-pill" class="form-label">Rounded Input</label>
                                            <input type="text" class="form-control  placeholder:text-textmuted !rounded-full" id="input-rounded-pill" placeholder="Rounded">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="row gy-3"&gt;
    &lt;div class="xl:col-span-12"&gt;
        &lt;label for="input-noradius" class="form-label"&gt;Input With No Radius&lt;/label&gt;
        &lt;input type="text" class="form-control rounded-0" id="input-noradius" placeholder="No Radius"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-12"&gt;
        &lt;label for="input-rounded" class="form-label"&gt;Input With Radius&lt;/label&gt;
        &lt;input type="text" class="form-control" id="input-rounded" placeholder="Default Radius"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-12"&gt;
        &lt;label for="input-rounded-pill" class="form-label"&gt;Rounded Input&lt;/label&gt;
        &lt;input type="text" class="form-control rounded-pill" id="input-rounded-pill" placeholder="Rounded"&gt;
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
                                        Input border Styles
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn  !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body !-mt-4">
                                    <div class="row gy-3">
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="input-rounded1" class="form-label">Default</label>
                                            <input type="text" class="form-control mb-3 placeholder:text-textmuted" id="input-rounded1" placeholder="Default">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="input-rounded2" class="form-label">Dotted Input</label>
                                            <input type="text" class="form-control mb-3 placeholder:text-textmuted border-dotted" id="input-rounded2" placeholder="Dotted">
                                        </div>
                                        <div class="xl:col-span-12 col-span-12">
                                            <label for="input-rounded3" class="form-label">Dashed Input</label>
                                            <input type="text" class="form-control  placeholder:text-textmuted border-dashed" id="input-rounded3" placeholder="Dashed">
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="row gy-3"&gt;
    &lt;div class="xl:col-span-12"&gt;
        &lt;label for="input-rounded1" class="form-label"&gt;Default&lt;/label&gt;
        &lt;input type="text" class="form-control" id="input-rounded1" placeholder="Default"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-12"&gt;
        &lt;label for="input-rounded2" class="form-label"&gt;Dotted Input&lt;/label&gt;
        &lt;input type="text" class="form-control border-dotted" id="input-rounded2" placeholder="Dotted"&gt;
    &lt;/div&gt;
    &lt;div class="xl:col-span-12"&gt;
        &lt;label for="input-rounded3" class="form-label"&gt;Dashed Input&lt;/label&gt;
        &lt;input type="text" class="form-control border-dashed" id="input-rounded3" placeholder="Dashed"&gt;
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
                        <div class="xl:col-span-12 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Input Sizing
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body !-mt-4">
                                    <input class="form-control form-control-sm mb-3 placeholder:text-textmuted" type="text"
                                    placeholder=".form-control-sm" aria-label=".form-control-sm example">
                                    <input class="form-control mb-3 placeholder:text-textmuted" type="text" placeholder="Default input"
                                        aria-label="default input example">
                                    <input class="form-control form-control-lg placeholder:text-textmuted" type="text"
                                    placeholder=".form-control-lg" aria-label=".form-control-lg example">
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;input class="form-control form-control-sm mb-3" type="text"
placeholder=".form-control-sm" aria-label=".form-control-sm example"&gt;
&lt;input class="form-control mb-3" type="text" placeholder="Default input"
    aria-label="default input example"&gt;
&lt;input class="form-control form-control-lg" type="text"
placeholder=".form-control-lg" aria-label=".form-control-lg example"&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End:: row-3 -->

                    <!--ROW-START-->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Overview
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body !-mt-4">
                                    <form>
                                        <div class="mb-3">
                                            <label for="exampleInputEmail1" class="form-label">Email
                                                address</label>
                                            <input type="email" class="form-control " id="exampleInputEmail1"
                                                aria-describedby="emailHelp">
                                            <div id="emailHelp" class="form-text">We'll
                                                never share your email
                                                with
                                                anyone else.</div>
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleInputPassword1" class="form-label">Password</label>
                                            <input type="password" class="form-control " id="exampleInputPassword1">
                                        </div>
                                        <div class="mb-3 form-check flex items-center gap-2">
                                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                            <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                        </div>
                                        <button type="submit" class="ti-btn ti-btn-primary-full mt-2">Submit</button>
                                    </form>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;form&gt;
    &lt;div class="mb-3"&gt;
        &lt;label for="exampleInputEmail1" class="form-label"&gt;Email
            address&lt;/label&gt;
        &lt;input type="email" class="form-control" id="exampleInputEmail1"
            aria-describedby="emailHelp"&gt;
        &lt;div id="emailHelp" class="form-text"&gt;We'll
            never share your email
            with
            anyone else.&lt;/div&gt;
    &lt;/div&gt;
    &lt;div class="mb-3"&gt;
        &lt;label for="exampleInputPassword1" class="form-label"&gt;Password&lt;/label&gt;
        &lt;input type="password" class="form-control" id="exampleInputPassword1"&gt;
    &lt;/div&gt;
    &lt;div class="mb-3 form-check"&gt;
        &lt;input type="checkbox" class="form-check-input" id="exampleCheck1"&gt;
        &lt;label class="form-check-label" for="exampleCheck1"&gt;Check
            me out&lt;/label&gt;
    &lt;/div&gt;
    &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
&lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="xl:col-span-6 col-span-12">
                            <div class="grid grid-cols-12">
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title">
                                                Form text
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body !-mt-4">
                                            <label for="inputPassword5" class="form-label">Password</label>
                                            <input type="password" id="inputPassword5" class="form-control "
                                                aria-describedby="passwordHelpBlock">
                                            <div id="passwordHelpBlock" class="form-text">
                                                Your password must be 8-20 characters long, contain letters and
                                                numbers,
                                                and
                                                must not contain spaces, special characters, or emoji.
                                            </div>
                                        </div>
                                        <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;label for="inputPassword5" class="form-label"&gt;Password&lt;/label&gt;
&lt;input type="password" id="inputPassword5" class="form-control"
    aria-describedby="passwordHelpBlock"&gt;
&lt;div id="passwordHelpBlock" class="form-text"&gt;
    Your password must be 8-20 characters long, contain letters and
    numbers,
    and
    must not contain spaces, special characters, or emoji.
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                                <div class="xl:col-span-12 col-span-12">
                                    <div class="box">
                                        <div class="box-header flex justify-between">
                                            <div class="box-title">
                                                Inline text can use any typical inline HTML element with nothing more
                                                than the <span class="text-danger">.form-text</span> class.
                                            </div>
                                            <div class="prism-toggle">
                                                <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                            </div>
                                        </div>
                                        <div class="box-body !-mt-4 flex items-center gap-4">
                                            <div class="flex gap-4 items-center">
                                                <label for="inputPassword6" class="col-form-label">Password</label>
                                                <input type="password" id="inputPassword6" class="form-control w-7" aria-describedby="passwordHelpInline">
                                            </div>
                                            <!-- <div class="col">
                                                
                                            </div> -->
                                            <div>
                                                <span id="passwordHelpInline" class="form-text h-5 w-full">
                                                    Must be 8-20 characters long.
                                                </span>
                                            </div>
                                            <!-- <div class="sm:grid grid-cols-5 gap-4 items-center">
                                                
                                            </div> -->
                                        </div>
                                        <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;div class="row g-3 align-items-center"&gt;
    &lt;div class="col-auto"&gt;
        &lt;label for="inputPassword6" class="col-form-label"&gt;Password&lt;/label&gt;
    &lt;/div&gt;
    &lt;div class="col-auto"&gt;
        &lt;input type="password" id="inputPassword6" class="form-control"
            aria-describedby="passwordHelpInline"&gt;
    &lt;/div&gt;
    &lt;div class="col-auto"&gt;
        &lt;span id="passwordHelpInline" class="form-text"&gt;
            Must be 8-20 characters long.
        &lt;/span&gt;
    &lt;/div&gt;
&lt;/div&gt;</code></pre>
<!-- Prism Code -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                    </div>
                    <!--ROW-END-->

                    <!-- Row-5: Start -->
                    <div class="grid grid-cols-12 gap-6">
                        <div class="xl:col-span-6 col-span-12">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <div class="box-title">
                                        Disabled forms
                                    </div>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body !-mt-4">
                                    <form>
                                        <fieldset disabled="">
                                            <legend class="legend-fieldset">Disabled fieldset example</legend>
                                            <div class="mb-3">
                                                <label for="disabledTextInput" class="form-label">Disabled
                                                    input</label>
                                                <input type="text" id="disabledTextInput" class="form-control  placeholder:text-textmuted"
                                                    placeholder="Disabled input">
                                            </div>
                                            <div class="mb-3">
                                                <label for="disabledSelect" class="form-label">Disabled select
                                                    menu</label>
                                                <select id="disabledSelect" class="form-select  placeholder:text-gray-900">
                                                    <option>Disabled select</option>
                                                </select>
                                            </div>
                                            <div class="mb-3">
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox"
                                                        id="disabledFieldsetCheck" disabled="">
                                                    <label class="form-check-label" for="disabledFieldsetCheck">
                                                        Can't check this
                                                    </label>
                                                </div>
                                            </div>
                                            <button type="submit" class="ti-btn ti-btn-primary-full opacity-[0.6]">Submit</button>
                                        </fieldset>
                                    </form>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">&lt;form&gt;
    &lt;fieldset disabled=""&gt;
        &lt;legend&gt;Disabled fieldset example&lt;/legend&gt;
        &lt;div class="mb-3"&gt;
            &lt;label for="disabledTextInput" class="form-label"&gt;Disabled
                input&lt;/label&gt;
            &lt;input type="text" id="disabledTextInput" class="form-control"
                placeholder="Disabled input"&gt;
        &lt;/div&gt;
        &lt;div class="mb-3"&gt;
            &lt;label for="disabledSelect" class="form-label"&gt;Disabled select
                menu&lt;/label&gt;
            &lt;select id="disabledSelect" class="form-select"&gt;
                &lt;option&gt;Disabled select&lt;/option&gt;
            &lt;/select&gt;
        &lt;/div&gt;
        &lt;div class="mb-3"&gt;
            &lt;div class="form-check"&gt;
                &lt;input class="form-check-input" type="checkbox"
                    id="disabledFieldsetCheck" disabled=""&gt;
                &lt;label class="form-check-label" for="disabledFieldsetCheck"&gt;
                    Can't check this
                &lt;/label&gt;
            &lt;/div&gt;
        &lt;/div&gt;
        &lt;button type="submit" class="btn btn-primary"&gt;Submit&lt;/button&gt;
    &lt;/fieldset&gt;
&lt;/form&gt;</code></pre>
<!-- Prism Code -->
                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Underline Inputs</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body space-y-3">
                                    <div class="relative">
                                        <input type="email" class="peer py-3 pe-0 !rounded-none !ps-8 ti-form-input bg-transparent !border-t-transparent border-b !border-x-transparent border-b-gray-200 focus:!border-t-transparent focus:!border-x-transparent focus:!border-b-primary focus:!ring-0 focus:!ring-offset-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-white/10 dark:focus:!ring-transparent !shadow-none dark:focus:border-b-white/10" placeholder="Enter name">
                                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-2 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                          <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-white/50" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/><circle cx="12" cy="7" r="4"/></svg>
                                        </div>
                                      </div>
    
                                      <div class="relative">
                                        <input type="password" class="peer py-3 pe-0 !ps-8 ti-form-input !rounded-none bg-transparent !border-t-transparent border-b !border-x-transparent border-b-gray-200 focus:!border-t-transparent focus:!border-x-transparent focus:!border-b-primary focus:!ring-0 focus:!ring-offset-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-white/10 dark:focus:!ring-transparent !shadow-none dark:focus:border-b-white/10" placeholder="Enter password">
                                        <div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-2 peer-disabled:opacity-50 peer-disabled:pointer-events-none">
                                          <svg class="flex-shrink-0 size-4 text-gray-500 dark:text-white/50" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"/><circle cx="16.5" cy="7.5" r=".5"/></svg>
                                        </div>
                                      </div>
                                      <textarea class="py-3 px-0 ti-form-input !rounded-none bg-transparent !border-t-transparent border-b !border-x-transparent border-b-gray-200 text-sm focus:!border-t-transparent focus:!border-x-transparent  focus:!border-b-primary focus:!ring-0 focus:!ring-offset-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-white/10 dark:focus:!ring-transparent !shadow-none dark:focus:border-b-white/10" rows="3" placeholder="This is a textarea placeholder"></textarea>
                               
                                    </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="relative"&gt;
        &lt;input type="email" class="peer py-3 pe-0 !ps-8 ti-form-input rounded-none bg-transparent !border-t-transparent border-b !border-x-transparent border-b-gray-200 focus:!border-t-transparent focus:!border-x-transparent focus:!border-b-primary focus:!ring-0 focus:!ring-offset-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-white/10 dark:focus:!ring-transparent !shadow-none dark:focus:border-b-white/10" placeholder="Enter name"&gt;
        &lt;div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-2 peer-disabled:opacity-50 peer-disabled:pointer-events-none"&gt;
            &lt;svg class="flex-shrink-0 size-4 text-gray-500 dark:text-white/50" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M19 21v-2a4 4 0 0 0-4-4H9a4 4 0 0 0-4 4v2"/&gt;&lt;circle cx="12" cy="7" r="4"/&gt;&lt;/svg&gt;
        &lt;/div&gt;
        &lt;/div&gt;

        &lt;div class="relative"&gt;
        &lt;input type="password" class="peer py-3 pe-0 !ps-8 ti-form-input rounded-none bg-transparent !border-t-transparent border-b !border-x-transparent border-b-gray-200 focus:!border-t-transparent focus:!border-x-transparent focus:!border-b-primary focus:!ring-0 focus:!ring-offset-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-white/10 dark:focus:!ring-transparent !shadow-none dark:focus:border-b-white/10" placeholder="Enter password"&gt;
        &lt;div class="absolute inset-y-0 start-0 flex items-center pointer-events-none ps-2 peer-disabled:opacity-50 peer-disabled:pointer-events-none"&gt;
            &lt;svg class="flex-shrink-0 size-4 text-gray-500 dark:text-white/50" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M2 18v3c0 .6.4 1 1 1h4v-3h3v-3h2l1.4-1.4a6.5 6.5 0 1 0-4-4Z"/&gt;&lt;circle cx="16.5" cy="7.5" r=".5"/&gt;&lt;/svg&gt;
        &lt;/div&gt;
        &lt;/div&gt;
        &lt;textarea class="py-3 px-0 ti-form-input rounded-none bg-transparent !border-t-transparent border-b !border-x-transparent border-b-gray-200 text-sm focus:!border-t-transparent focus:!border-x-transparent  focus:!border-b-primary focus:!ring-0 focus:!ring-offset-0 disabled:opacity-50 disabled:pointer-events-none dark:border-b-white/10 dark:focus:!ring-transparent !shadow-none dark:focus:border-b-white/10" rows="3" placeholder="This is a textarea placeholder"></textarea>
</code></pre>
<!-- Prism Code -->
                                                                    </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Gray Floating label</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body space-y-3">
                                   <!-- Floating Input -->
                                    <div class="relative">
                                        <input type="email" id="hs-floating-gray-input-email" class="peer p-4 ti-form-input !pb-5 bg-gray-100 dark:bg-light border-transparent placeholder:!text-transparent focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:border-transparent
                                        focus:pt-6
                                        focus:pb-2
                                        [&:not(:placeholder-shown)]:pt-6
                                        [&:not(:placeholder-shown)]:pb-2
                                        autofill:pt-6
                                        autofill:pb-2" placeholder="you@email.com">
                                        <label for="hs-floating-gray-input-email" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                        peer-focus:text-xs
                                        peer-focus:-translate-y-1.5
                                        peer-focus:text-gray-500 dark:peer-focus:text-white/70
                                        peer-[:not(:placeholder-shown)]:text-xs
                                        peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                        peer-[:not(:placeholder-shown)]:text-gray-500  dark:peer-[:not(:placeholder-shown)]:text-white/70">Email</label>
                                    </div>
                                    <!-- End Floating Input -->
    
                                    <!-- Floating Input -->
                                    <div class="relative">
                                        <input type="password" id="hs-floating-gray-input-passowrd" class="peer p-4 ti-form-input !pb-5 bg-gray-100 border-transparent placeholder:!text-transparent focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-light dark:border-transparent
                                        focus:pt-6
                                        focus:pb-2
                                        [&:not(:placeholder-shown)]:pt-6
                                        [&:not(:placeholder-shown)]:pb-2
                                        autofill:pt-6
                                        autofill:pb-2" placeholder="********">
                                        <label for="hs-floating-gray-input-passowrd" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                            peer-focus:text-xs
                                            peer-focus:-translate-y-1.5
                                            peer-focus:text-gray-500  dark:peer-focus:text-white/70
                                            peer-[:not(:placeholder-shown)]:text-xs
                                            peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                            peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-white/70">Password</label>
                                    </div>
                                    <!-- End Floating Input -->
    
                                    <!-- Gray Floating Textarea -->
                                    <div class="relative">
                                        <textarea id="hs-floating-textarea-gray" class="peer p-4 ti-form-input !pb-5 bg-gray-100 border-transparent placeholder:!text-transparent focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-light dark:border-transparent
                                        focus:pt-6
                                        focus:pb-2
                                        [&:not(:placeholder-shown)]:pt-6
                                        [&:not(:placeholder-shown)]:pb-2
                                        autofill:pt-6
                                        autofill:pb-2" placeholder="This is a textarea placeholder"></textarea>
                                        <label for="hs-floating-textarea-gray" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
                                        peer-focus:text-xs
                                        peer-focus:-translate-y-1.5
                                        peer-focus:text-gray-500  dark:peer-focus:text-white/70
                                        peer-[:not(:placeholder-shown)]:text-xs
                                        peer-[:not(:placeholder-shown)]:-translate-y-1.5
                                        peer-[:not(:placeholder-shown)]:text-gray-500  dark:peer-[:not(:placeholder-shown)]:text-white/70">Comment</label>
                                    </div>
                                    <!-- End Gray Floating Textarea -->
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    <!-- Floating Input -->
&lt;div class="relative"&gt;
    &lt;input type="email" id="hs-floating-gray-input-email" class="peer p-4 ti-form-input !pb-5 bg-gray-100 border-transparent placeholder:!text-transparent focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-transparent
    focus:pt-6
    focus:pb-2
    [&:not(:placeholder-shown)]:pt-6
    [&:not(:placeholder-shown)]:pb-2
    autofill:pt-6
    autofill:pb-2" placeholder="you@email.com"&gt;
    &lt;label for="hs-floating-gray-input-email" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
    peer-focus:text-xs
    peer-focus:-translate-y-1.5
    peer-focus:text-gray-500 dark:peer-focus:text-white/70
    peer-[:not(:placeholder-shown)]:text-xs
    peer-[:not(:placeholder-shown)]:-translate-y-1.5
    peer-[:not(:placeholder-shown)]:text-gray-500  dark:peer-[:not(:placeholder-shown)]:text-white/70"&gt;Email&lt;/label&gt;
&lt;/div&gt;
&lt;!-- End Floating Input --&gt;

&lt;!-- Floating Input --&gt;
&lt;div class="relative"&gt;
    &lt;input type="password" id="hs-floating-gray-input-passowrd" class="peer p-4 ti-form-input !pb-5 bg-gray-100 border-transparent placeholder:!text-transparent focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-transparent
    focus:pt-6
    focus:pb-2
    [&:not(:placeholder-shown)]:pt-6
    [&:not(:placeholder-shown)]:pb-2
    autofill:pt-6
    autofill:pb-2" placeholder="********"&gt;
    &lt;label for="hs-floating-gray-input-passowrd" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
        peer-focus:text-xs
        peer-focus:-translate-y-1.5
        peer-focus:text-gray-500  dark:peer-focus:text-white/70
        peer-[:not(:placeholder-shown)]:text-xs
        peer-[:not(:placeholder-shown)]:-translate-y-1.5
        peer-[:not(:placeholder-shown)]:text-gray-500 dark:peer-[:not(:placeholder-shown)]:text-white/70"&gt;Password&lt;/label&gt;
&lt;/div&gt;
&lt;!-- End Floating Input --&gt;

&lt;!-- Gray Floating Textarea --&gt;
&lt;div class="relative"&gt;
    &lt;textarea id="hs-floating-textarea-gray" class="peer p-4 ti-form-input !pb-5 bg-gray-100 border-transparent placeholder:!text-transparent focus:border-primary focus:ring-primary disabled:opacity-50 disabled:pointer-events-none dark:bg-bodybg dark:border-transparent
    focus:pt-6
    focus:pb-2
    [&:not(:placeholder-shown)]:pt-6
    [&:not(:placeholder-shown)]:pb-2
    autofill:pt-6
    autofill:pb-2" placeholder="This is a textarea placeholder"&gt;&lt;/textarea&gt;
    &lt;label for="hs-floating-textarea-gray" class="absolute top-0 start-0 p-4 h-full text-sm truncate pointer-events-none transition ease-in-out duration-100 border border-transparent dark:text-white peer-disabled:opacity-50 peer-disabled:pointer-events-none
    peer-focus:text-xs
    peer-focus:-translate-y-1.5
    peer-focus:text-gray-500  dark:peer-focus:text-white/70
    peer-[:not(:placeholder-shown)]:text-xs
    peer-[:not(:placeholder-shown)]:-translate-y-1.5
    peer-[:not(:placeholder-shown)]:text-gray-500  dark:peer-[:not(:placeholder-shown)]:text-white/70"&gt;Comment&lt;/label&gt;
&lt;/div&gt;
<!-- End Gray Floating Textarea --></code></pre>
<!-- Prism Code -->
                                                                    </div>
                            </div>
                        </div>
                    </div>
                    <!-- Row-5: End -->

                    <!-- Start::row-6 -->
                    <div class="grid grid-cols-12 gap-x-6">
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Pilled Inputs</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body space-y-3">
                                    <input type="text" class="ti-form-input px-5 rounded-full" placeholder="Input text">
                                    <textarea class="ti-form-input px-5 rounded-md" rows="3" placeholder="This is a textarea placeholder"></textarea>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;input type="text" class="ti-form-input px-5 rounded-full" placeholder="Input text"&gt;
    &lt;textarea class="ti-form-input px-5 rounded-md" rows="3" placeholder="This is a textarea placeholder"&gt;&lt;/textarea&gt;
</code></pre>
<!-- Prism Code -->
                                                                    </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Input With Hidden Label</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body space-y-3">
                                    <div class="">
                                        <label for="input-email-label" class="sr-only">Email</label>
                                        <input type="email" id="input-email-label" class="ti-form-input" placeholder="you@site.com">
                                    </div>
                                    <div class="">
                                        <label for="textarea-email-label" class="sr-only">Comment</label>
                                        <textarea id="textarea-email-label" class="ti-form-input" rows="3" placeholder="Say hi..."></textarea>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class=""&gt;
        &lt;label for="input-email-label" class="sr-only"&gt;Email&lt;/label&gt;
        &lt;input type="email" id="input-email-label" class="ti-form-input" placeholder="you@site.com"&gt;
    &lt;/div&gt;
    &lt;div class=""&gt;
        &lt;label for="textarea-email-label" class="sr-only"&gt;Comment&lt;/label&gt;
        &lt;textarea id="textarea-email-label" class="ti-form-input" rows="3" placeholder="Say hi..."&gt;&lt;/textarea&gt;
    &lt;/div&gt;
</code></pre>
<!-- Prism Code -->
                                                                                                        </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Inputs With Label</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body space-y-3">
                                    <div class="">
                                        <label for="input-label" class="ti-form-label">Email</label>
                                        <input type="email" id="input-label" class="ti-form-input" placeholder="you@site.com">
                                    </div>
                                    <div>
                                        <label for="textarea-label" class="ti-form-label">Comment</label>
                                        <textarea id="textarea-label" class="ti-form-input" rows="3" placeholder="Say hi..."></textarea>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class=""&gt;
        &lt;label for="input-label" class="ti-form-label"&gt;Email&lt;/label&gt;
        &lt;input type="email" id="input-label" class="ti-form-input" placeholder="you@site.com"&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for="textarea-label" class="ti-form-label"&gt;Comment&lt;/label&gt;
        &lt;textarea id="textarea-label" class="ti-form-input" rows="3" placeholder="Say hi..."&gt;&lt;/textarea&gt;
    &lt;/div&gt;
</code></pre>
<!-- Prism Code -->
                              </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Input With Helper text</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body space-y-3">
                                    <div>
                                        <label for="input-label-with-helper-text" class="ti-form-label">Email</label>
                                        <input type="email" id="input-label-with-helper-text" class="ti-form-input" placeholder="you@site.com" aria-describedby="hs-input-helper-text">
                                        <p class="text-xs text-gray-500 mt-2 dark:text-white/70" id="hs-input-helper-text">We'll never share your details.</p>
                                    </div>
                                    <div>
                                        <label for="textarea-label-with-helper-text" class="ti-form-label">Leave your question</label>
                                        <textarea id="textarea-label-with-helper-text" class="ti-form-input" rows="2" placeholder="Say hi, we'll be happy to chat with you." aria-describedby="hs-textarea-helper-text"></textarea>
                                        <p class="text-xs text-gray-500 mt-2 dark:text-white/70" id="hs-textarea-helper-text">We'll get back to you soon.</p>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div&gt;
        &lt;label for="input-label-with-helper-text" class="ti-form-label"&gt;Email&lt;/label&gt;
        &lt;input type="email" id="input-label-with-helper-text" class="ti-form-input" placeholder="you@site.com" aria-describedby="hs-input-helper-text"&gt;
        &lt;p class="text-xs text-gray-500 mt-2 dark:text-white/70" id="hs-input-helper-text"&gt;We'll never share your details.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;label for="textarea-label-with-helper-text" class="ti-form-label"&gt;Leave your question&lt;/label&gt;
        &lt;textarea id="textarea-label-with-helper-text" class="ti-form-input" rows="2" placeholder="Say hi, we'll be happy to chat with you." aria-describedby="hs-textarea-helper-text"&gt;&lt;/textarea&gt;
        &lt;p class="text-xs text-gray-500 mt-2 dark:text-white/70" id="hs-textarea-helper-text"&gt;We'll get back to you soon.&lt;/p&gt;
    &lt;/div&gt;
</code></pre>
<!-- Prism Code -->
                             </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Input With Inline helper text</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body space-y-3">
                                    <div class="sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full rtl:space-x-reverse">
                                        <label for="inline-input-label-with-helper-text" class="ti-form-label">Email</label>
                                        <input type="email" id="inline-input-label-with-helper-text" class="ti-form-input" placeholder="you@site.com" aria-describedby="hs-inline-input-helper-text">
                                        <p class="text-xs text-gray-500 mt-2 dark:text-white/70" id="hs-inline-input-helper-text">We'll never share your details.</p>
                                    </div>
                                    <div class="sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full rtl:space-x-reverse">
                                        <label for="inline-textarea-label-with-helper-text" class="ti-form-label">Leave your question</label>
                                        <textarea id="inline-textarea-label-with-helper-text" class="ti-form-input" rows="3" placeholder="Say hi, we'll be happy to chat with you." aria-describedby="hs-textarea-helper-text"></textarea>
                                        <p class="text-xs text-gray-500 mt-2 dark:text-white/70" id="hs-inline-textarea-helper-text">We'll get back to you soon.</p>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full rtl:space-x-reverse"&gt;
        &lt;label for="inline-input-label-with-helper-text" class="ti-form-label"&gt;Email&lt;/label&gt;
        &lt;input type="email" id="inline-input-label-with-helper-text" class="ti-form-input" placeholder="you@site.com" aria-describedby="hs-inline-input-helper-text"&gt;
        &lt;p class="text-xs text-gray-500 mt-2 dark:text-white/70" id="hs-inline-input-helper-text"&gt;We'll never share your details.&lt;/p&gt;
    &lt;/div&gt;
    &lt;div class="sm:inline-flex sm:items-center space-y-2 sm:space-y-0 sm:space-x-3 w-full rtl:space-x-reverse"&gt;
        &lt;label for="inline-textarea-label-with-helper-text" class="ti-form-label"&gt;Leave your question&lt;/label&gt;
        &lt;textarea id="inline-textarea-label-with-helper-text" class="ti-form-input" rows="3" placeholder="Say hi, we'll be happy to chat with you." aria-describedby="hs-textarea-helper-text"&gt;&lt;/textarea&gt;
        &lt;p class="text-xs text-gray-500 mt-2 dark:text-white/70" id="hs-inline-textarea-helper-text"&gt;We'll get back to you soon.&lt;/p&gt;
    &lt;/div&gt;
</code></pre>
<!-- Prism Code -->
                             </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Input With Corner Hint</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body space-y-4">
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label for="with-corner-hint" class="ti-form-label">Email</label>
                                            <span class="block text-xs text-gray-500 mb-2 dark:text-white/70">Optional</span>
                                        </div>
                                        <input type="email" id="with-corner-hint" class="ti-form-input" placeholder="you@site.com">
                                    </div>
                                    <div>
                                        <div class="flex justify-between items-center">
                                            <label for="hs-textarea-with-corner-hint" class="ti-form-label">Contact us</label>
                                            <span class="block text-xs text-gray-500 mb-2 dark:text-white/70">100 characters</span>
                                        </div>
                                        <textarea id="hs-textarea-with-corner-hint" class="ti-form-input" rows="3" placeholder="Say hi..."></textarea>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div>
        &lt;div class="flex justify-between items-center"&gt;
            &lt;label for="with-corner-hint" class="ti-form-label"&gt;Email&lt;/label&gt;
            &lt;span class="block text-xs text-gray-500 mb-2 dark:text-white/70"&gt;Optional&lt;/span&gt;
        &lt;/div&gt;
        &lt;input type="email" id="with-corner-hint" class="ti-form-input" placeholder="you@site.com"&gt;
    &lt;/div&gt;
    &lt;div&gt;
        &lt;div class="flex justify-between items-center"&gt;
            &lt;label for="hs-textarea-with-corner-hint" class="ti-form-label"&gt;Contact us&lt;/label&gt;
            &lt;span class="block text-xs text-gray-500 mb-2 dark:text-white/70"&gt;100 characters&lt;/span&gt;
        &lt;/div&gt;
        &lt;textarea id="hs-textarea-with-corner-hint" class="ti-form-input" rows="3" placeholder="Say hi..."&gt;&lt;/textarea&gt;
    &lt;/div&gt;
</code></pre>
<!-- Prism Code -->
                                 </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Input Validation states</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                        <div>
                                            <label for="hs-validation-name-error" class="ti-form-label">Email</label>
                                            <div class="relative">
                                            <input type="text" id="hs-validation-name-error" name="hs-validation-name-error" class="ti-form-input !border-danger focus:border-danger focus:ring-danger" required aria-describedby="hs-validation-name-error-helper">
                                            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="h-5 w-5 text-danger" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true">
                                                <path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/>
                                                </svg>
                                            </div>
                                            </div>
                                            <p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper">Please enter a valid email address.</p>
                                        </div>

                                        <div>
                                            <label for="hs-validation-name-success" class="ti-form-label">Email</label>
                                            <div class="relative">
                                            <input type="text" id="hs-validation-name-success" name="hs-validation-name-success" class="ti-form-input !border-success focus:border-success focus:ring-success" required aria-describedby="hs-validation-name-success-helper">
                                            <div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3">
                                                <svg class="h-5 w-5 text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                <path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/>
                                                </svg>
                                            </div>
                                            </div>
                                            <p class="text-sm text-green-600 mt-2" id="hs-validation-name-success-helper">Looks good!</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="space-y-3"&gt;
        &lt;div&gt;
            &lt;label for="hs-validation-name-error" class="ti-form-label"&gt;Email&lt;/label&gt;
            &lt;div class="relative"&gt;
            &lt;input type="text" id="hs-validation-name-error" name="hs-validation-name-error" class="ti-form-input !border-danger focus:border-danger focus:ring-danger" required aria-describedby="hs-validation-name-error-helper"&gt;
            &lt;div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3"&gt;
                &lt;svg class="h-5 w-5 text-danger" width="16" height="16" fill="currentColor" viewBox="0 0 16 16" aria-hidden="true"&gt;
                &lt;path d="M16 8A8 8 0 1 1 0 8a8 8 0 0 1 16 0zM8 4a.905.905 0 0 0-.9.995l.35 3.507a.552.552 0 0 0 1.1 0l.35-3.507A.905.905 0 0 0 8 4zm.002 6a1 1 0 1 0 0 2 1 1 0 0 0 0-2z"/&gt;
                &lt;/svg&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;p class="text-sm text-red-600 mt-2" id="hs-validation-name-error-helper"&gt;Please enter a valid email address.&lt;/p&gt;
        &lt;/div&gt;

        &lt;div&gt;
            &lt;label for="hs-validation-name-success" class="ti-form-label"&gt;Email&lt;/label&gt;
            &lt;div class="relative"&gt;
            &lt;input type="text" id="hs-validation-name-success" name="hs-validation-name-success" class="ti-form-input !border-success focus:border-success focus:ring-success" required aria-describedby="hs-validation-name-success-helper"&gt;
            &lt;div class="absolute inset-y-0 end-0 flex items-center pointer-events-none pe-3"&gt;
                &lt;svg class="h-5 w-5 text-success" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
                &lt;path d="M12.736 3.97a.733.733 0 0 1 1.047 0c.286.289.29.756.01 1.05L7.88 12.01a.733.733 0 0 1-1.065.02L3.217 8.384a.757.757 0 0 1 0-1.06.733.733 0 0 1 1.047 0l3.052 3.093 5.4-6.425a.247.247 0 0 1 .02-.022Z"/&gt;
                &lt;/svg&gt;
            &lt;/div&gt;
            &lt;/div&gt;
            &lt;p class="text-sm text-green-600 mt-2" id="hs-validation-name-success-helper"&gt;Looks good!&lt;/p&gt;
        &lt;/div&gt;
    &lt;/div&gt;
</code></pre>
<!-- Prism Code -->
                            </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Input Sizes</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                        <input type="text" class="py-2 px-3 ti-form-input" placeholder="Small size">
                                        <input type="text" class="ti-form-input" placeholder="Default size">
                                        <input type="text" class="ti-form-input sm:p-5" placeholder="Large size">
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="space-y-3"&gt;
        &lt;input type="text" class="py-2 px-3 ti-form-input" placeholder="Small size"&gt;
        &lt;input type="text" class="ti-form-input" placeholder="Default size"&gt;
        &lt;input type="text" class="ti-form-input sm:p-5" placeholder="Large size"&gt;
    &lt;/div&gt;
</code></pre>
<!-- Prism Code -->
                                                                </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Textarea Sizes</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <div class="space-y-3">
                                        <textarea class="py-2 px-3 ti-form-input" rows="2" placeholder="Small size"></textarea>
                                        <textarea class="py-3 px-4 ti-form-input" rows="2" placeholder="Default size"></textarea>
                                        <textarea class="sm:p-5 py-3 px-4 ti-form-input" rows="2" placeholder="Large size"></textarea>
                                    </div>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;div class="space-y-3"&gt;
        &lt;textarea class="py-2 px-3 ti-form-input" rows="2" placeholder="Small size"&gt;&lt;/textarea&gt;
        &lt;textarea class="py-3 px-4 ti-form-input" rows="2" placeholder="Default size"&gt;&lt;/textarea&gt;
        &lt;textarea class="sm:p-5 py-3 px-4 ti-form-input" rows="2" placeholder="Large size"&gt;&lt;/textarea&gt;
    &lt;/div&gt;
</code></pre>
<!-- Prism Code -->
                                     </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Textarea examples</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body space-y-3">
                                    <!-- Textarea -->
                                    <div class="relative">
                                        <textarea id="hs-textarea-ex-1" class="!p-4 !pb-[3rem]  ti-form-input focus:!ring-primary" placeholder="Ask me anything..."></textarea>
                                        <!-- Toolbar -->
                                        <div class="absolute bottom-px inset-x-px p-2 rounded-b-md bg-white dark:bg-bodybg">
                                            <div class="flex justify-between items-center">
                                                <!-- Button Group -->
                                                <div class="flex items-center">
                                                <!-- Mic Button -->
                                                <button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 dark:text-white/70 hover:text-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:hover:text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600">
                                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"></rect><line x1="9" x2="15" y1="15" y2="9"></line></svg>
                                                </button>
                                                <!-- End Mic Button -->

                                                <!-- Attach Button -->
                                                <button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 dark:text-white/70 hover:text-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:hover:text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600">
                                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.44 11.05-9.19 9.19a6 6 0 0 1-8.49-8.49l8.57-8.57A4 4 0 1 1 18 8.84l-8.59 8.57a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>
                                                </button>
                                                <!-- End Attach Button -->
                                                </div>
                                                <!-- End Button Group -->

                                                <!-- Button Group -->
                                                <div class="flex items-center gap-x-1">
                                                <!-- Mic Button -->
                                                <button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 dark:text-white/70 hover:text-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:hover:text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600">
                                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" x2="12" y1="19" y2="22"></line></svg>
                                                </button>
                                                <!-- End Mic Button -->

                                                <!-- Send Button -->
                                                <button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-sm text-white bg-primary hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600">
                                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"></path>
                                                    </svg>
                                                </button>
                                                <!-- End Send Button -->
                                                </div>
                                                <!-- End Button Group -->
                                            </div>
                                        </div>
                                        <!-- End Toolbar -->
                                    </div>
                                    <!-- End Textarea -->
                                    <!-- Textarea -->
                                    <div class="relative">
                                        <textarea id="hs-textarea-ex-2" class="!p-4 !pb-[3rem]  ti-form-input focus:!ring-primary bg-gray-100 dark:bg-bodybg" placeholder="Ask me anything..."></textarea>

                                        <!-- Toolbar -->
                                        <div class="absolute bottom-px inset-x-px p-2 rounded-b-md bg-gray-100 dark:bg-bodybg">
                                            <div class="flex justify-between items-center">
                                                <!-- Button Group -->
                                                <div class="flex items-center">
                                                <!-- Mic Button -->
                                                <button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 dark:text-white/70 hover:text-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:hover:text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600">
                                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><rect width="18" height="18" x="3" y="3" rx="2"></rect><line x1="9" x2="15" y1="15" y2="9"></line></svg>
                                                </button>
                                                <!-- End Mic Button -->

                                                <!-- Attach Button -->
                                                <button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 dark:text-white/70 hover:text-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:hover:text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600">
                                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="m21.44 11.05-9.19 9.19a6 6 0 0 1-8.49-8.49l8.57-8.57A4 4 0 1 1 18 8.84l-8.59 8.57a2 2 0 0 1-2.83-2.83l8.49-8.48"></path></svg>
                                                </button>
                                                <!-- End Attach Button -->
                                                </div>
                                                <!-- End Button Group -->

                                                <!-- Button Group -->
                                                <div class="flex items-center gap-x-1">
                                                <!-- Mic Button -->
                                                <button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 dark:text-white/70 hover:text-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:hover:text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600">
                                                    <svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"></path><path d="M19 10v2a7 7 0 0 1-14 0v-2"></path><line x1="12" x2="12" y1="19" y2="22"></line></svg>
                                                </button>
                                                <!-- End Mic Button -->

                                                <!-- Send Button -->
                                                <button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-sm text-white bg-primary hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600">
                                                    <svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                                                    <path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"></path>
                                                    </svg>
                                                </button>
                                                <!-- End Send Button -->
                                                </div>
                                                <!-- End Button Group -->
                                            </div>
                                        </div>
                                        <!-- End Toolbar -->
                                    </div>
                                    <!-- End Textarea -->
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    <!-- Textarea -->
&lt;div class="relative"&gt;
    &lt;textarea id="hs-textarea-ex-1" class="p-4 pb-12 ti-form-input focus:!ring-primary" placeholder="Ask me anything..."&gt;&lt;/textarea&gt;
    &lt;!-- Toolbar --&gt;
    &lt;div class="absolute bottom-px inset-x-px p-2 rounded-b-md bg-white dark:bg-bodybg"&gt;
        &lt;div class="flex justify-between items-center"&gt;
            &lt;!-- Button Group --&gt;
            &lt;div class="flex items-center"&gt;
            &lt;!-- Mic Button --&gt;
            &lt;button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 dark:text-white/70 hover:text-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:hover:text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600"&gt;
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;rect width="18" height="18" x="3" y="3" rx="2"&gt;&lt;/rect&gt;&lt;line x1="9" x2="15" y1="15" y2="9"&gt;&lt;/line&gt;&lt;/svg&gt;
            &lt;/button&gt;
            &lt;!-- End Mic Button --&gt;

            &lt;!-- Attach Button --&gt;
            &lt;button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 dark:text-white/70 hover:text-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:hover:text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600"&gt;
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m21.44 11.05-9.19 9.19a6 6 0 0 1-8.49-8.49l8.57-8.57A4 4 0 1 1 18 8.84l-8.59 8.57a2 2 0 0 1-2.83-2.83l8.49-8.48"&gt;&lt;/path&gt;&lt;/svg&gt;
            &lt;/button&gt;
            &lt;!-- End Attach Button --&gt;
            &lt;/div&gt;
            &lt;!-- End Button Group --&gt;

            &lt;!-- Button Group --&gt;
            &lt;div class="flex items-center gap-x-1"&gt;
            &lt;!-- Mic Button --&gt;
            &lt;button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 dark:text-white/70 hover:text-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:hover:text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600"&gt;
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"&gt;&lt;/path&gt;&lt;path d="M19 10v2a7 7 0 0 1-14 0v-2"&gt;&lt;/path&gt;&lt;line x1="12" x2="12" y1="19" y2="22"&gt;&lt;/line&gt;&lt;/svg&gt;
            &lt;/button&gt;
            &lt;!-- End Mic Button --&gt;

            &lt;!-- Send Button --&gt;
            &lt;button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-sm text-white bg-primary hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600"&gt;
                &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
                &lt;path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"&gt;&lt;/path&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;!-- End Send Button --&gt;
            &lt;/div&gt;
            &lt;!-- End Button Group --&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- End Toolbar --&gt;
&lt;/div&gt;
&lt;!-- End Textarea --&gt;
&lt;!-- Textarea --&gt;
&lt;div class="relative"&gt;
    &lt;textarea id="hs-textarea-ex-2" class="p-4 pb-12 ti-form-input focus:!ring-primary bg-gray-100 dark:bg-bodybg" placeholder="Ask me anything..."&gt;&lt;/textarea&gt;

    &lt;!-- Toolbar --&gt;
    &lt;div class="absolute bottom-px inset-x-px p-2 rounded-b-md bg-gray-100 dark:bg-bodybg"&gt;
        &lt;div class="flex justify-between items-center"&gt;
            &lt;!-- Button Group --&gt;
            &lt;div class="flex items-center"&gt;
            &lt;!-- Mic Button --&gt;
            &lt;button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 dark:text-white/70 hover:text-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:hover:text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600"&gt;
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;rect width="18" height="18" x="3" y="3" rx="2"&gt;&lt;/rect&gt;&lt;line x1="9" x2="15" y1="15" y2="9"&gt;&lt;/line&gt;&lt;/svg&gt;
            &lt;/button&gt;
            &lt;!-- End Mic Button --&gt;

            &lt;!-- Attach Button --&gt;
            &lt;button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 dark:text-white/70 hover:text-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:hover:text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600"&gt;
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="m21.44 11.05-9.19 9.19a6 6 0 0 1-8.49-8.49l8.57-8.57A4 4 0 1 1 18 8.84l-8.59 8.57a2 2 0 0 1-2.83-2.83l8.49-8.48"&gt;&lt;/path&gt;&lt;/svg&gt;
            &lt;/button&gt;
            &lt;!-- End Attach Button --&gt;
            &lt;/div&gt;
            &lt;!-- End Button Group --&gt;

            &lt;!-- Button Group --&gt;
            &lt;div class="flex items-center gap-x-1"&gt;
            &lt;!-- Mic Button --&gt;
            &lt;button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-lg text-gray-500 dark:text-white/70 hover:text-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:hover:text-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600"&gt;
                &lt;svg class="flex-shrink-0 size-4" xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"&gt;&lt;path d="M12 2a3 3 0 0 0-3 3v7a3 3 0 0 0 6 0V5a3 3 0 0 0-3-3Z"&gt;&lt;/path&gt;&lt;path d="M19 10v2a7 7 0 0 1-14 0v-2"&gt;&lt;/path&gt;&lt;line x1="12" x2="12" y1="19" y2="22"&gt;&lt;/line&gt;&lt;/svg&gt;
            &lt;/button&gt;
            &lt;!-- End Mic Button --&gt;

            &lt;!-- Send Button --&gt;
            &lt;button type="button" class="inline-flex flex-shrink-0 justify-center items-center size-8 rounded-sm text-white bg-primary hover:bg-primary focus:z-10 focus:outline-none focus:ring-0 shadow-none focus:ring-primary dark:focus:outline-none dark:focus:ring-0 dark:focus:ring-gray-600"&gt;
                &lt;svg class="flex-shrink-0 size-3.5" xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16"&gt;
                &lt;path d="M15.964.686a.5.5 0 0 0-.65-.65L.767 5.855H.766l-.452.18a.5.5 0 0 0-.082.887l.41.26.001.002 4.995 3.178 3.178 4.995.002.002.26.41a.5.5 0 0 0 .886-.083l6-15Zm-1.833 1.89L6.637 10.07l-.215-.338a.5.5 0 0 0-.154-.154l-.338-.215 7.494-7.494 1.178-.471-.47 1.178Z"&gt;&lt;/path&gt;
                &lt;/svg&gt;
            &lt;/button&gt;
            &lt;!-- End Send Button --&gt;
            &lt;/div&gt;
            &lt;!-- End Button Group --&gt;
        &lt;/div&gt;
    &lt;/div&gt;
    &lt;!-- End Toolbar --&gt;
&lt;/div&gt;
<!-- End Textarea -->
</code></pre>
<!-- Prism Code -->
                             </div>
                            </div>
                        </div>
                        <div class="col-span-12 xl:col-span-3 lg:col-span-6">
                            <div class="box">
                                <div class="box-header flex justify-between">
                                    <h5 class="box-title">Autoheight</h5>
                                    <div class="prism-toggle">
                                        <button class="ti-btn !py-1 !px-2 ti-btn-primary !text-[0.75rem] !font-medium">Show Code<i class="ri-code-line ms-2 d-inline-block align-middle"></i></button>
                                    </div>
                                </div>
                                <div class="box-body">
                                    <label for="hs-autoheight-textarea" class="ti-form-label">Contact us</label>
                                    <textarea id="hs-autoheight-textarea" class="ti-form-input" rows="3" placeholder="Say hi..."></textarea>
                                </div>
                                <div class="box-footer hidden border-t-0">
<!-- Prism Code -->
<pre class="language-html"><code class="language-html">
    &lt;label for="hs-autoheight-textarea" class="ti-form-label"&gt;Contact us&lt;/label&gt;
    &lt;textarea id="hs-autoheight-textarea" class="ti-form-input" rows="3" placeholder="Say hi..."&gt;&lt;/textarea&gt;
</code></pre>
<!-- Prism Code -->
                                                                         </div>
                            </div>
                        </div>
                    </div>
                    <!-- End::row-6 -->

@endsection

@section('scripts')
	
        <!-- Prism JS -->
        <script src="{{asset('build/assets/libs/prismjs/prism.js')}}"></script>
        @vite('resources/assets/js/prism-custom.js')

@endsection
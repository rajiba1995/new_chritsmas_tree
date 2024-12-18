@extends('layouts.master')
@section('styles')
<link rel="stylesheet" href="{{asset('build/assets/libs/inventory.css')}}">
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
        <a href="{{route('admin.hotel.create')}}" class="ti-btn ti-btn-primary-full !py-1 pt-0 ti-btn-wave  me-[0.375rem]"><i class="fa-solid fa-plus"></i>Upload Your Inventory (BULK)</a>
    </div>
</div>
<!-- Start:: row-10 -->
<div class="grid grid-cols-12 gap-6">
    <div class="xl:col-span-12 col-span-12">
        <div class="box custom-box">
            <div class="box-body">
                
                <div class="date-pick-row !mb-3">
                    <div class="inputs-wrapper">
                        <select name="" id="" class="form-control inventory_filter">
                            <option value="" selected>Choose Destination</option>
                        </select>
                        <select name="" id="" class="form-control inventory_filter">
                            <option value="" selected>Choose Division</option>
                        </select>
                        <select name="" id="" class="form-control inventory_filter">
                            <option value="" selected>Choose Category</option>
                        </select>
                        <select name="" id="" class="form-control inventory_filter">
                            <option value="" selected>Choose Hotel</option>
                            <option value="">sdasdasdasfasfsadasdf sdswdsdsdswdwdw</option>
                        </select>
                    </div>
                </div>
                <div class="date-pick-row">
                    <div class="inputs-wrapper">
                        <label for="startDate" class="customDatePicker">
                            <input type="date" id="startDate" class="dateInput">
                            <span>Start Date</span>
                        </label>
                        &nbsp; - &nbsp;
                        <label for="endDate" class="customDatePicker">
                            <input type="date" id="endDate" class="dateInput">
                            <span>End Date</span>
                        </label>
                    </div>
                </div>
                <div class="top-cta-row">
                    <div class="cta-block">
                        <div class="col2">
                            <label class="cta-label">Bulk Blocking</label>
                            <div class="cta-row">
                                <button type="button" class="yellow">Availability Mail</button>
                                <div class="btn-dropdown">
                                    <button type="button" class="btn-drop yellow">
                                        Block Request
                                        <img src="../../build/assets/images/inventory/down-angle.png">
                                    </button>
                                    <div class="dropbox yellow">
                                        <label for="hardBlock1" class="radio-label">
                                            <input type="radio" id="hardBlock1" name="hsblock1">
                                            Hard Block
                                        </label>
                                        <label for="softBlock1" class="radio-label">
                                            <input type="radio" id="softBlock1" name="hsblock1">
                                            Soft Block
                                        </label>
                                        <button type="button" class="btn-send">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cta-block">
                        <div class="col1">
                            <button type="button" class="btn-filter">
                                <img src="../../build/assets/images/inventory/calendar.png" alt="calendar">
                            </button>
                        </div>
                        <div class="col2">
                            <label class="cta-label">Fresh Block</label>
                            <div class="cta-row">
                                <button type="button" class="green">Availability Mail</button>
                                <div class="btn-dropdown">
                                    <button type="button" class="btn-drop green">
                                        Block Request
                                        <img src="../../build/assets/images/inventory/down-angle.png">
                                    </button>
                                    <div class="dropbox green">
                                        <label for="hardBlock1" class="radio-label">
                                            <input type="radio" id="hardBlock1" name="hsblock1">
                                            Hard Block
                                        </label>
                                        <label for="softBlock1" class="radio-label">
                                            <input type="radio" id="softBlock1" name="hsblock1">
                                            Soft Block
                                        </label>
                                        <button type="button" class="btn-send">Send</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="cta-block">
                        <div class="col2">
                            <label class="cta-label">Release Trigger</label>
                            <div class="cta-row">
                                <button type="button" class="yellow">Policy</button>
                                <button type="button" class="yellow">D - dd</button>
                            </div>
                        </div>
                    </div>
                </div>
                
                <div class="content-block">
                    
                    <div class="calendar-row">
                        <div class="left-col">
                            <img src="../../build/assets/images/inventory/calendar.png" alt="calendar">
                        </div>
                        <div class="right-col">
                            <ul class="date-holder scrollable">
                                <li><span>Sun</span><span>01</span><span>Dec</span></li>
                                <li><span>Mon</span><span>02</span><span>Dec</span></li>
                                <li><span>Tue</span><span>03</span><span>Dec</span></li>
                                <li><span>Wed</span><span>04</span><span>Dec</span></li>
                                <li><span>Thu</span><span>05</span><span>Dec</span></li>
                                <li><span>Fri</span><span>06</span><span>Dec</span></li>
                                <li><span>Sat</span><span>07</span><span>Dec</span></li>
                                <li><span>Sun</span><span>08</span><span>Dec</span></li>
                                <li><span>Mon</span><span>09</span><span>Dec</span></li>
                                <li><span>Tue</span><span>10</span><span>Dec</span></li>
                                <li><span>Wed</span><span>11</span><span>Dec</span></li>
                                <li><span>Thu</span><span>12</span><span>Dec</span></li>
                                <li><span>Fri</span><span>13</span><span>Dec</span></li>
                                <li><span>Sat</span><span>14</span><span>Dec</span></li>
                                <li><span>Sun</span><span>15</span><span>Dec</span></li>
                                <li><span>Mon</span><span>16</span><span>Dec</span></li>
                                <li><span>Tue</span><span>17</span><span>Dec</span></li>
                                <li><span>Wed</span><span>18</span><span>Dec</span></li>
                                <li><span>Thu</span><span>19</span><span>Dec</span></li>
                                <li><span>Fri</span><span>20</span><span>Dec</span></li>
                                <li><span>Sat</span><span>21</span><span>Dec</span></li>
                                <li><span>Sun</span><span>22</span><span>Dec</span></li>
                                <li><span>Mon</span><span>23</span><span>Dec</span></li>
                                <li><span>Tue</span><span>24</span><span>Dec</span></li>
                                <li><span>Wed</span><span>25</span><span>Dec</span></li>
                                <li><span>Thu</span><span>26</span><span>Dec</span></li>
                                <li><span>Fri</span><span>27</span><span>Dec</span></li>
                                <li><span>Sat</span><span>28</span><span>Dec</span></li>
                                <li><span>Sun</span><span>29</span><span>Dec</span></li>
                                <li><span>Mon</span><span>30</span><span>Dec</span></li>
                                <li><span>Tue</span><span>31</span><span>Dec</span></li>
                            </ul>
                            <button id="scrollLeft" class="scroll-button">&#11104;</button>
                            <button id="scrollRight" class="scroll-button">&#11106;</button>
                        </div>
                    </div>
                    
                    <div class="accordion">
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <div class="header-left">
                                    <span class="badge bg-primary/10 text-primary">Standard</span>
                                    <img src="../../build/assets/images/inventory/up-arrow.png" alt="">
                                </div>
                                <div class="header-right">
                                    <ul class="count-input-holder scrollable">
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                        <li><input type="text" value="0" class="count-0"><span class="info active">0 Sold</span><span class="info">D 15</span></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <div class="content-wrap">
                                    <div class="left">
                                        <h3><span class="badge bg-primary text-white">Price Chart</span></h3>
                                        <div class="left-content">
                                            <div class="block">
                                                <span class="badge gap-2 bg-primary/10 text-primary">CP</span>
                                                <label><span class="badge bg-outline-primary">2<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                                <label><span class="badge bg-outline-primary">1<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                            </div>
                                            <div class="block">
                                                <span class="badge gap-2 bg-primary/10 text-primary">Add-On</span>
                                                <label><span class="badge bg-outline-primary">Extra Adult<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                                <label><span class="badge bg-outline-primary">Child (0 - 6)</span></label>
                                                <label><span class="badge bg-outline-primary">Child (7 - 12)</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="right-content">
                                            <div class="inputs-rows scrollable">
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                            </div>
                                            <div class="inputs-rows scrollable">
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <div class="header-left">
                                    <span class="badge bg-primary/10 text-primary">Delux</span>
                                    <img src="../../build/assets/images/inventory/up-arrow.png" alt="">
                                </div>
                                <div class="header-right">
                                    <ul class="count-input-holder scrollable">
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <div class="content-wrap">
                                    <div class="left">
                                        <h3><span class="badge bg-primary text-white">Price Chart</span></h3>
                                        <div class="left-content">
                                            <div class="block">
                                                <span class="badge gap-2 bg-primary/10 text-primary">CP</span>
                                                <label><span class="badge bg-outline-primary">2<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                                <label><span class="badge bg-outline-primary">1<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                            </div>
                                            <div class="block">
                                                <span class="badge gap-2 bg-primary/10 text-primary">Add-On</span>
                                                <label><span class="badge bg-outline-primary">Extra Adult<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                                <label><span class="badge bg-outline-primary">Child (0 - 6)</span></label>
                                                <label><span class="badge bg-outline-primary">Child (7 - 12)</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="right-content">
                                            <div class="inputs-rows scrollable">
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                            </div>
                                            <div class="inputs-rows scrollable">
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <div class="header-left">
                                    <span class="badge bg-primary/10 text-primary">Premium</span>
                                    <img src="../../build/assets/images/inventory/up-arrow.png" alt="">
                                </div>
                                <div class="header-right">
                                    <ul class="count-input-holder scrollable">
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                        <li><input type="text" value="0" class="count-0"></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="accordion-body">
                                <div class="content-wrap">
                                    <div class="left">
                                        <h3><span class="badge bg-primary text-white">Price Chart</span></h3>
                                        <div class="left-content">
                                            <div class="block">
                                                <span class="badge gap-2 bg-primary/10 text-primary">CP</span>
                                                <label><span class="badge bg-outline-primary">2<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                                <label><span class="badge bg-outline-primary">1<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                            </div>
                                            <div class="block">
                                                <span class="badge gap-2 bg-primary/10 text-primary">Add-On</span>
                                                <label><span class="badge bg-outline-primary">Extra Adult<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                                <label><span class="badge bg-outline-primary">Child (0 - 6)</span></label>
                                                <label><span class="badge bg-outline-primary">Child (7 - 12)</span></label>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="right">
                                        <div class="right-content">
                                            <div class="inputs-rows scrollable">
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                            </div>
                                            <div class="inputs-rows scrollable">
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                                <ul class="count-input-holder">
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                    <li><input type="text" value="0"></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                </div>
                
            </div>
        </div>
    </div>
</div>

<!-- End:: row-10 -->
@endsection

@section('scripts')
<script src="{{asset('build/assets/libs/inventory.js')}}"></script>
<script>
</script>
@endsection

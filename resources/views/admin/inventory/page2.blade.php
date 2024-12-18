@extends('layouts.master')
@section('styles')
<style>
    
</style>
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
                <div class="top-cta-row">
                    <div class="column1">
                        <div class="date-pick-row">
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
                    <div class="column2">
                        <label>Selected Weekdays (7)</label>
                        <div class="bottom-row">
                            <ul class="days-holder">
                                <!--<li><button type="button" class="btn-day selected">S</button></li>-->
                                <li>
                                    <label for="daycheck1" class="custom-day-check">
                                        <input type="checkbox" name="day-check" id="daycheck1" checked>
                                        <span>S</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="daycheck2" class="custom-day-check">
                                        <input type="checkbox" name="day-check" id="daycheck2">
                                        <span>M</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="daycheck3" class="custom-day-check">
                                        <input type="checkbox" name="day-check" id="daycheck3">
                                        <span>T</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="daycheck4" class="custom-day-check">
                                        <input type="checkbox" name="day-check" id="daycheck4">
                                        <span>W</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="daycheck5" class="custom-day-check">
                                        <input type="checkbox" name="day-check" id="daycheck5">
                                        <span>T</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="daycheck6" class="custom-day-check">
                                        <input type="checkbox" name="day-check" id="daycheck6">
                                        <span>F</span>
                                    </label>
                                </li>
                                <li>
                                    <label for="daycheck7" class="custom-day-check">
                                        <input type="checkbox" name="day-check" id="daycheck7">
                                        <span>S</span>
                                    </label>
                                </li>
                            </ul>
                            <div class="extra-days">
                                <button type="button" class="btn-extra">
                                    View Calendar
                                    <img src="../../build/assets/images/inventory/down-angle.png">
                                </button>
                                <div class="extra-drop">
                                    <ul>
                                        <li>
                                            <label for="exd1" class="custom-exd">
                                                <input type="checkbox" id="exd1">
                                                <div class="exd-text">
                                                    <span>Sun</span>
                                                    <span>15</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd2" class="custom-exd">
                                                <input type="checkbox" id="exd2">
                                                <div class="exd-text">
                                                    <span>Mon</span>
                                                    <span>16</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd3" class="custom-exd">
                                                <input type="checkbox" id="exd3">
                                                <div class="exd-text">
                                                    <span>Tue</span>
                                                    <span>17</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd4" class="custom-exd">
                                                <input type="checkbox" id="exd4">
                                                <div class="exd-text">
                                                    <span>Wed</span>
                                                    <span>18</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd5" class="custom-exd">
                                                <input type="checkbox" id="exd5">
                                                <div class="exd-text">
                                                    <span>Thu</span>
                                                    <span>19</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd6" class="custom-exd">
                                                <input type="checkbox" id="exd6">
                                                <div class="exd-text">
                                                    <span>Fri</span>
                                                    <span>20</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd7" class="custom-exd">
                                                <input type="checkbox" id="exd7">
                                                <div class="exd-text">
                                                    <span>Sat</span>
                                                    <span>21</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd8" class="custom-exd">
                                                <input type="checkbox" id="exd8">
                                                <div class="exd-text">
                                                    <span>Sun</span>
                                                    <span>22</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd9" class="custom-exd">
                                                <input type="checkbox" id="exd9">
                                                <div class="exd-text">
                                                    <span>Mon</span>
                                                    <span>23</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd10" class="custom-exd">
                                                <input type="checkbox" id="exd10">
                                                <div class="exd-text">
                                                    <span>Tue</span>
                                                    <span>24</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd11" class="custom-exd">
                                                <input type="checkbox" id="exd11">
                                                <div class="exd-text">
                                                    <span>Wed</span>
                                                    <span>25</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd12" class="custom-exd">
                                                <input type="checkbox" id="exd12">
                                                <div class="exd-text">
                                                    <span>Thu</span>
                                                    <span>26</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd13" class="custom-exd">
                                                <input type="checkbox" id="exd13">
                                                <div class="exd-text">
                                                    <span>Fri</span>
                                                    <span>27</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd14" class="custom-exd">
                                                <input type="checkbox" id="exd14">
                                                <div class="exd-text">
                                                    <span>Sat</span>
                                                    <span>28</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd15" class="custom-exd">
                                                <input type="checkbox" id="exd15">
                                                <div class="exd-text">
                                                    <span>Sun</span>
                                                    <span>29</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd16" class="custom-exd">
                                                <input type="checkbox" id="exd16">
                                                <div class="exd-text">
                                                    <span>Mon</span>
                                                    <span>30</span>
                                                </div>
                                            </label>
                                        </li>
                                        <li>
                                            <label for="exd17" class="custom-exd">
                                                <input type="checkbox" id="exd17">
                                                <div class="exd-text">
                                                    <span>Tue</span>
                                                    <span>31</span>
                                                </div>
                                            </label>
                                        </li>
                                    </ul>
                                    <div class="cta">
                                        <button type="button" class="btn-done">Next</button>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column3">
                        <button type="button" class="btn-save">Save</button>
                    </div>
                </div>
                
                <div class="bottom-content">
                    <div class="accordion">
                        
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <span class="badge bg-primary/10 text-primary">Standard</span>
                                <img src="../../build/assets/images/inventory/up-arrow.png" alt="">
                                <input type="text" class="green" value="2">
                            </div>
                            <div class="accordion-body">
                                <h3><span class="badge bg-primary text-white">Price Chart</span></h3>
                                <table>
                                    <tr>
                                        <td valign="top"><span class="badge gap-2 bg-primary/10 text-primary">CP</span></td>
                                        <td>
                                            <div class="badges-wrapper">
                                                <label><span class="badge bg-outline-primary">2<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                                <label><span class="badge bg-outline-primary">1<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                            </div>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><input type="text" value="2345"></li>
                                                <li><input type="text" value="1234"></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top"><span class="badge gap-2 bg-primary/10 text-primary">Add-On</span></td>
                                        <td>
                                            <label><span class="badge bg-outline-primary">Extra Adult<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                            <label><span class="badge bg-outline-primary">Child (0 - 6)</span></label>
                                            <label><span class="badge bg-outline-primary">Child (7 - 12)</span></label>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><input type="text" value="123"></li>
                                                <li><input type="text" value="123"></li>
                                                <li><input type="text" value="123"></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <span class="badge bg-primary/10 text-primary">Delux</span>
                                <img src="../../build/assets/images/inventory/up-arrow.png" alt="">
                                <input type="text" class="blue" value="3">
                            </div>
                            <div class="accordion-body">
                                <h3><span class="badge bg-primary text-white">Price Chart</span></h3>
                                <table>
                                    <tr>
                                        <td valign="top"><span class="badge gap-2 bg-primary/10 text-primary">CP</span></td>
                                        <td>
                                            <div class="badges-wrapper">
                                                <label><span class="badge bg-outline-primary">2<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                                <label><span class="badge bg-outline-primary">1<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                            </div>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><input type="text" value="2345"></li>
                                                <li><input type="text" value="1234"></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top"><span class="badge gap-2 bg-primary/10 text-primary">Add-On</span></td>
                                        <td>
                                            <label><span class="badge bg-outline-primary">Extra Adult<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                            <label><span class="badge bg-outline-primary">Child (0 - 6)</span></label>
                                            <label><span class="badge bg-outline-primary">Child (7 - 12)</span></label>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><input type="text" value="123"></li>
                                                <li><input type="text" value="123"></li>
                                                <li><input type="text" value="123"></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
                            </div>
                        </div>
                        
                        <div class="accordion-item">
                            <div class="accordion-header">
                                <span class="badge bg-primary/10 text-primary">Premium</span>
                                <img src="../../build/assets/images/inventory/up-arrow.png" alt="">
                                <input type="text" class="green" value="2">
                            </div>
                            <div class="accordion-body">
                                <h3><span class="badge bg-primary text-white">Price Chart</span></h3>
                                <table>
                                    <tr>
                                        <td valign="top"><span class="badge gap-2 bg-primary/10 text-primary">CP</span></td>
                                        <td>
                                            <div class="badges-wrapper">
                                                <label><span class="badge bg-outline-primary">2<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                                <label><span class="badge bg-outline-primary">1<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                            </div>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><input type="text" value="2345"></li>
                                                <li><input type="text" value="1234"></li>
                                            </ul>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td valign="top"><span class="badge gap-2 bg-primary/10 text-primary">Add-On</span></td>
                                        <td>
                                            <label><span class="badge bg-outline-primary">Extra Adult<img src="../../build/assets/images/inventory/user.png" alt="person"></span></label>
                                            <label><span class="badge bg-outline-primary">Child (0 - 6)</span></label>
                                            <label><span class="badge bg-outline-primary">Child (7 - 12)</span></label>
                                        </td>
                                        <td>
                                            <ul>
                                                <li><input type="text" value="123"></li>
                                                <li><input type="text" value="123"></li>
                                                <li><input type="text" value="123"></li>
                                            </ul>
                                        </td>
                                    </tr>
                                </table>
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
<script>
    document.addEventListener("DOMContentLoaded", function () {
        const customDatePicker = document.querySelectorAll('.customDatePicker');
        customDatePicker.forEach(datePicker => {
            datePicker.addEventListener('click', function() {
                const inputElement = datePicker.querySelector('input[type="date"]');
                const spanElement = datePicker.querySelector('span');
        
                datePicker.addEventListener('click', function(event) {
                    event.preventDefault(); 
                    inputElement.focus();   
                    setTimeout(() => {
                        inputElement.showPicker?.(); 
                    }, 0); 
                }); 
        
                inputElement.addEventListener('change', function() {
                    const selectedDate = new Date(inputElement.value);
                    const formattedDate = formatDate(selectedDate);
                    spanElement.textContent = formattedDate;
                });
        
            });
        });
        
        const dayButtons = document.querySelectorAll('.btn-day');
        
        dayButtons.forEach(dbtn => {
            dbtn.addEventListener('click', function () {
                document.querySelectorAll('.btn-day').forEach(button => button.classList.remove('selected'));
                this.classList.add('selected');
            });
        });
        
        const btnDropdowns = document.querySelectorAll('.btn-extra');

        btnDropdowns.forEach(drop => {
            drop.addEventListener('click', function() {
            //   document.querySelectorAll('.dropbox').forEach(drop => drop.classList.remove('active'));
                const dropBox = this.nextElementSibling;
                
                if(dropBox && dropBox.classList.contains('active')) {
                    dropBox.classList.remove('active');
                } else {
                    dropBox.classList.add('active');
                }
            });
        });
        
        const accordionHeaders = document.querySelectorAll('.accordion-header');
        
        accordionHeaders.forEach(header => {
            header.addEventListener('click', function () {
                document.querySelectorAll('.accordion-header').forEach(header => header.classList.remove('active'));  
                document.querySelectorAll('.accordion-body').forEach(body => body.classList.remove('active'));
                const body = this.nextElementSibling;
                this.classList.add('active');
                body.classList.add('active');
            });
        });
    });
    
    function formatDate(date) {
        const day = String(date.getDate()).padStart(2, '0');
        const monthNames = ['Jan', 'Feb', 'Mar', 'Apr', 'May', 'Jun', 'Jul', 'Aug', 'Sep', 'Oct', 'Nov', 'Dec'];
        const month = monthNames[date.getMonth()];
        const year = date.getFullYear();
    
        const weekdayNames = ['Sun', 'Mon', 'Tue', 'Wed', 'Thu', 'Fri', 'Sat'];
        const weekday = weekdayNames[date.getDay()];
    
        return `${day} ${month} ${year}, ${weekday}`;
    }
</script>
@endsection

<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\AdvanceduiController;
use App\Http\Controllers\AppsController;
use App\Http\Controllers\ChartsController;
use App\Http\Controllers\DashboardsController;
use App\Http\Controllers\ElementsControllere;
use App\Http\Controllers\FormsController;
use App\Http\Controllers\IconsController;
use App\Http\Controllers\LandingpageController;
use App\Http\Controllers\MapsController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\TablesController;
use App\Http\Controllers\UtilitiesController;
use App\Http\Controllers\InventoryController;
use App\Http\Controllers\ItineraryController;
use App\Http\Controllers\RouteManagementController;


// New Code
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Auth\RegisteredUserController;
use App\Http\Controllers\Auth\AdminAuthController;
use App\Http\Controllers\{LeadManagementController,CommonController,HotelManagementController};

Route::get('/', function () {
    return redirect()->route('admin.login');
});

// Route::get('admin/login', [RegisteredUserController::class, 'admin_login']);


Route::prefix('admin')->name('admin.')->group(function () {
    // Admin login form
    // sdbshgd
    // xsnkjdshj
    Route::get('login', [AdminAuthController::class, 'showLoginForm'])->name('login');
    // Handle admin login
    Route::post('login', [AdminAuthController::class, 'login']);
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

});
Route::get('dashboard', [DashboardsController::class, 'index'])->name('admin.dashboard');
    Route::prefix('admin')->middleware('auth:admin')->group(function () {
        // Admin dashboard (only accessible if the user is authenticated as an admin)
        Route::get('dashboard', [DashboardsController::class, 'index'])->name('admin.dashboard');

        // Admin logout route
        Route::post('logout', [AdminAuthController::class, 'logout'])->name('admin.logout');

            // Lead Management
        Route::prefix('leads')->group(function(){
            Route::get('/', [LeadManagementController::class, 'index'])->name('admin.leads.index');
            Route::get('/create', [LeadManagementController::class, 'create'])->name('admin.leads.create');
            Route::post('/store', [LeadManagementController::class, 'store'])->name('admin.leads.store');
            Route::post('/update/status/{id}', [LeadManagementController::class, 'update_status'])->name('admin.leads.update_status');
            // Additional CRUD routes
        });

    
        // Hotel master
        Route::prefix('hotel')->group(function(){
            Route::get('/', [HotelManagementController::class,'index'])->name('admin.hotel.index');
            Route::get('/create', [HotelManagementController::class,'create'])->name('admin.hotel.create');
            Route::post('/store', [HotelManagementController::class,'store'])->name('admin.hotel.store');
            Route::get('/edit/{id}', [HotelManagementController::class,'edit'])->name('admin.hotel.edit');
            Route::post('/update/{id}', [HotelManagementController::class,'update'])->name('admin.hotel.update');
            Route::post('/room/price/store', [HotelManagementController::class,'room_price_store'])->name('admin.hotel.room.price.store');
            Route::get('/destroy/{id}', [HotelManagementController::class,'destroy'])->name('admin.hotel.destroy');
            // Route::post('/image/delete/{imageId}', [HotelManagementController::class, 'deleteImage'])->name('admin.hotel.image.delete');
            // Route::delete('/image/{imageId}', [HotelController::class, 'deleteImage'])->name('hotel.image.delete');
            Route::delete('/image/delete/{imageId}', [HotelManagementController::class, 'deleteImage'])->name('admin.hotel.image.delete');


            Route::get('/{id}/images', [HotelManagementController::class, 'showHotelImages'])->name('admin.hotels.images');
            


            // State Master
            Route::prefix('destination')->group(function(){
                Route::get('/', [CommonController::class,'state_index'])->name('admin.state.index');
                Route::post('/store', [CommonController::class,'state_store'])->name('admin.state.store');
                Route::get('/edit', [CommonController::class,'state_edit'])->name('admin.state.edit');
                Route::post('/update', [CommonController::class,'state_update'])->name('admin.state.update');
                Route::get('/destroy/{id}', [CommonController::class,'state_destroy'])->name('admin.state.destroy');
            });

            // Division Master
            Route::prefix('division')->group(function(){
                Route::get('/', [CommonController::class,'division_index'])->name('admin.division.index');
                Route::post('/store', [CommonController::class,'division_store'])->name('admin.division.store');
                Route::get('/edit', [CommonController::class,'division_edit'])->name('admin.division.edit');
                Route::post('/update', [CommonController::class,'division_update'])->name('admin.division.update');
                Route::get('/destroy/{id}', [CommonController::class,'division_destroy'])->name('admin.division.destroy');
            });
            // Hotel Seasion Plan  Master
            Route::prefix('seasion-plan')->group(function(){
                Route::get('/', [HotelManagementController::class,'hotel_seasion_plan'])->name('admin.hotel_seasion_plan');
                Route::post('/store', [HotelManagementController::class,'hotel_seasion_plan_store'])->name('admin.hotel_seasion_plan_store');
                Route::post('/update', [HotelManagementController::class,'hotel_seasion_plan_update'])->name('admin.hotel_seasion_plan_update');
                Route::get('/destroy/{id}', [HotelManagementController::class,'hotel_seasion_plan_destroy'])->name('admin.hotel_seasion_plan_destroy');
            // web.php (Route definition)
            Route::post('/update-order', [HotelManagementController::class, 'updateOrder'])->name('admin.hotel_seasion_plan_order');                              

            
            });

            // Category Master
            Route::prefix('category')->group(function(){
                Route::get('/', [CommonController::class,'category_index'])->name('admin.category.index');
                Route::post('/store', [CommonController::class,'category_store'])->name('admin.category.store');
                // Route::get('/edit', [CommonController::class,'category_edit'])->name('admin.category.edit');
                Route::post('/update', [CommonController::class,'category_update'])->name('admin.category.update');
                Route::get('/destroy/{id}', [CommonController::class,'category_destroy'])->name('admin.category.destroy');
            });
            // Ammenity Master
            Route::prefix('ammenity')->group(function(){
                Route::get('/', [CommonController::class,'ammenity_index'])->name('admin.ammenity.index');
                Route::post('/store', [CommonController::class,'ammenity_store'])->name('admin.ammenity.store');
                Route::get('/edit', [CommonController::class,'ammenity_edit'])->name('admin.ammenity.edit');
                Route::post('/update', [CommonController::class,'ammenity_update'])->name('admin.ammenity.update');
                Route::get('/destroy/{id}', [CommonController::class,'ammenity_destroy'])->name('admin.ammenity.destroy');
            });


                // Room Category Master
                Route::prefix('room-category')->group(function(){
                Route::get('/', [CommonController::class,'room_category_index'])->name('admin.room.category.index');
                Route::post('/store', [CommonController::class,'room_category_store'])->name('admin.room.category.store');
                Route::get('/edit', [CommonController::class,'room_category_edit'])->name('admin.room.category.edit');
                Route::post('/update', [CommonController::class,'room_category_update'])->name('admin.room.category.update');
                Route::get('/destroy/{id}', [CommonController::class,'room_category_destroy'])->name('admin.room.category.destroy');
            });
        });
        Route::prefix('inventory')->group(function(){
            Route::get('/', [InventoryController::class, 'index'])->name('admin.inventory.index');
            Route::get('/page1', [InventoryController::class, 'page1'])->name('admin.inventory.page1');
            Route::get('/page2', [InventoryController::class, 'page2'])->name('admin.inventory.page2');
            Route::get('get-divisions/{destination}', [InventoryController::class, 'getDivisions'])->name('admin.inventory.get.divisions');
        });

        Route::prefix('master')->group(function(){
            Route::prefix('country')->group(function(){
                Route::get('/', [CommonController::class, 'country_index'])->name('admin.country.index');
            });
            Route::prefix('cab')->group(function(){
                Route::get('/', [CommonController::class,'cab_index'])->name('admin.cab.index');
                Route::post('/store', [CommonController::class,'cab_store'])->name('admin.cab.store');
                Route::get('/edit', [CommonController::class,'cab_edit'])->name('admin.cab.edit');
                Route::post('/update', [CommonController::class,'cab_update'])->name('admin.cab.update');
                Route::get('/destroy/{id}', [CommonController::class,'cab_destroy'])->name('admin.cab.destroy');
            });
        });
        Route::prefix('route')->group(function(){
            Route::get('division-wise-cabs', [RouteManagementController::class, 'DivisionWiseCabList'])->name('admin.route.division_wise_cab_list');
            Route::get('division-wise-activities', [RouteManagementController::class, 'DivisionWiseActivityList'])->name('admin.route.division_wise_activity_list');
            Route::post('division-wise-activities/update/content', [RouteManagementController::class, 'DivisionWiseActivityUpdateContent'])->name('admin.route.division_wise_activity_update_content');
            Route::get('division-wise-sightseeings', [RouteManagementController::class, 'DivisionWiseSightseeingList'])->name('admin.route.division_wise_sightseeing_list');
            Route::get('destination-wise-route-list', [RouteManagementController::class, 'DestinationWiseRouteList'])->name('admin.route.destination_wise_route_list');
            Route::get('all-services', [RouteManagementController::class, 'AllServices'])->name('admin.route.all_services');
            Route::post('update-cab-service-price', [RouteManagementController::class, 'UpdateCabServicePrice']);
        });

        // Itinerary Management
        Route::prefix('itinerary')->group(function(){
            Route::prefix('division')->group(function(){
                Route::get('banners', [ItineraryController::class, 'banners'])->name('admin.itinerary.division.banners');
            });
        });
    });

   
   
require __DIR__.'/auth.php';

    Route::prefix('tem')->group(function () {
        Route::get('/', [DashboardsController::class, 'index']);
        Route::get('index', [DashboardsController::class, 'index']);
        Route::get('index1', [DashboardsController::class, 'index1']);
        Route::get('index2', [DashboardsController::class, 'index2']);
        Route::get('index3', [DashboardsController::class, 'index3']);
        Route::get('index4', [DashboardsController::class, 'index4']);
        Route::get('index5', [DashboardsController::class, 'index5']);
        Route::get('index6', [DashboardsController::class, 'index6']);
        Route::get('index7', [DashboardsController::class, 'index7']);
        Route::get('index8', [DashboardsController::class, 'index8']);
        Route::get('index9', [DashboardsController::class, 'index9']);
        Route::get('index10', [DashboardsController::class, 'index10']);
        Route::get('index11', [DashboardsController::class, 'index11']);


        // Icons //
        Route::get('icons', [IconsController::class, 'icons']);


        // Charts //
        Route::get('apex-area-charts', [ChartsController::class, 'apex_area_charts']);
        Route::get('apex-bar-charts', [ChartsController::class, 'apex_bar_charts']);
        Route::get('apex-boxplot-charts', [ChartsController::class, 'apex_boxplot_charts']);
        Route::get('apex-bubble-charts', [ChartsController::class, 'apex_bubble_charts']);
        Route::get('apex-candlestick-charts', [ChartsController::class, 'apex_candlestick_charts']);
        Route::get('apex-column-charts', [ChartsController::class, 'apex_column_charts']);
        Route::get('apex-heatmap-charts', [ChartsController::class, 'apex_heatmap_charts']);
        Route::get('apex-line-charts', [ChartsController::class, 'apex_line_charts']);
        Route::get('apex-mixed-charts', [ChartsController::class, 'apex_mixed_charts']);
        Route::get('apex-pie-charts', [ChartsController::class, 'apex_pie_charts']);
        Route::get('apex-polararea-charts', [ChartsController::class, 'apex_polararea_charts']);
        Route::get('apex-radar-charts', [ChartsController::class, 'apex_radar_charts']);
        Route::get('apex-radialbar-charts', [ChartsController::class, 'apex_radialbar_charts']);
        Route::get('apex-rangearea-charts', [ChartsController::class, 'apex_rangearea_charts']);
        Route::get('apex-scatter-charts', [ChartsController::class, 'apex_scatter_charts']);
        Route::get('apex-timeline-charts', [ChartsController::class, 'apex_timeline_charts']);
        Route::get('apex-treemap-charts', [ChartsController::class, 'apex_treemap_charts']);
        Route::get('chartjs', [ChartsController::class, 'chartjs']);
        Route::get('echartjs', [ChartsController::class, 'echartjs']);


        // Apps //
        Route::get('cards', [AppsController::class, 'cards']);
        Route::get('contacts', [AppsController::class, 'contacts']);
        Route::get('draggable', [AppsController::class, 'draggable']);
        Route::get('file-manager', [AppsController::class, 'file_manager']);
        Route::get('full-calendar', [AppsController::class, 'full_calendar']);
        Route::get('notifications', [AppsController::class, 'notifications']);
        Route::get('treeview', [AppsController::class, 'treeview']);
        Route::get('widgets', [AppsController::class, 'widgets']);

        // Elements //
        Route::get('alerts', [ElementsControllere::class, 'alerts']);
        Route::get('avatars', [ElementsControllere::class, 'avatars']);
        Route::get('badge', [ElementsControllere::class, 'badge']);
        Route::get('blockquotes', [ElementsControllere::class, 'blockquotes']);
        Route::get('breadcrumb', [ElementsControllere::class, 'breadcrumb']);
        Route::get('buttongroups', [ElementsControllere::class, 'buttongroups']);
        Route::get('buttons', [ElementsControllere::class, 'buttons']);
        Route::get('dropdowns', [ElementsControllere::class, 'dropdowns']);
        Route::get('images-figures', [ElementsControllere::class, 'images_figures']);
        Route::get('list', [ElementsControllere::class, 'list']);
        Route::get('listgroup', [ElementsControllere::class, 'listgroup']);
        Route::get('navbar', [ElementsControllere::class, 'navbar']);
        Route::get('navs-tabs', [ElementsControllere::class, 'navs_tabs']);
        Route::get('object-fit', [ElementsControllere::class, 'object_fit']);
        Route::get('pagination', [ElementsControllere::class, 'pagination']);
        Route::get('popovers', [ElementsControllere::class, 'popovers']);
        Route::get('progress', [ElementsControllere::class, 'progress']);
        Route::get('scrollspy', [ElementsControllere::class, 'scrollspy']);
        Route::get('spinners', [ElementsControllere::class, 'spinners']);
        Route::get('toasts', [ElementsControllere::class, 'toasts']);
        Route::get('tooltips', [ElementsControllere::class, 'tooltips']);
        Route::get('typography', [ElementsControllere::class, 'typography']);

        // Advancedui //
        Route::get('accordions-collpase', [AdvanceduiController::class, 'accordions_collpase']);
        Route::get('blog-create', [AdvanceduiController::class, 'blog_create']);
        Route::get('blog-details', [AdvanceduiController::class, 'blog_details']);
        Route::get('blog', [AdvanceduiController::class, 'blog']);
        Route::get('Indicators', [AdvanceduiController::class, 'Indicators']);
        Route::get('modals-closes', [AdvanceduiController::class, 'modals_closes']);
        Route::get('offcanvas', [AdvanceduiController::class, 'offcanvas']);
        Route::get('skeleton', [AdvanceduiController::class, 'skeleton']);
        Route::get('ratings', [AdvanceduiController::class, 'ratings']);
        Route::get('search', [AdvanceduiController::class, 'search']);
        Route::get('stepper', [AdvanceduiController::class, 'stepper']);
        Route::get('sweet-alerts', [AdvanceduiController::class, 'sweet_alerts']);
        Route::get('swiperjs', [AdvanceduiController::class, 'swiperjs']);
        Route::get('timeline', [AdvanceduiController::class, 'timeline']);
        Route::get('timeline2', [AdvanceduiController::class, 'timeline2']);
        Route::get('userlist', [AdvanceduiController::class, 'userlist']);

        // Pages //
        Route::get('about-us', [PagesController::class, 'about_us']);
        Route::get('add-products', [PagesController::class, 'add_products']);
        Route::get('chat', [PagesController::class, 'chat']);
        Route::get('check-out', [PagesController::class, 'check_out']);
        Route::get('comingsoon', [PagesController::class, 'comingsoon']);
        Route::get('create-invoice', [PagesController::class, 'create_invoice']);
        Route::get('create-password-basic', [PagesController::class, 'create_password_basic']);
        Route::get('create-password-cover', [PagesController::class, 'create_password_cover']);
        Route::get('edit-products', [PagesController::class, 'edit_products']);
        Route::get('emptypage', [PagesController::class, 'emptypage']);
        Route::get('error404', [PagesController::class, 'error404']);
        Route::get('error500', [PagesController::class, 'error500']);
        Route::get('error501', [PagesController::class, 'error501']);
        Route::get('faqs', [PagesController::class, 'faqs']);
        Route::get('gallery', [PagesController::class, 'gallery']);
        Route::get('invoice-details', [PagesController::class, 'invoice_details']);
        Route::get('invoice-list', [PagesController::class, 'invoice_list']);
        Route::get('lockscreen-basic', [PagesController::class, 'lockscreen_basic']);
        Route::get('lockscreen-cover', [PagesController::class, 'lockscreen_cover']);
        Route::get('mail-settings', [PagesController::class, 'mail_settings']);
        Route::get('mail', [PagesController::class, 'mail']);
        Route::get('maintanace', [PagesController::class, 'maintanace']);
        Route::get('order-details', [PagesController::class, 'order_details']);
        Route::get('orders', [PagesController::class, 'orders']);
        Route::get('pricing', [PagesController::class, 'pricing']);
        Route::get('product-cart', [PagesController::class, 'product_cart']);
        Route::get('product-details', [PagesController::class, 'product_details']);
        Route::get('products-list', [PagesController::class, 'products_list']);
        Route::get('products', [PagesController::class, 'products']);
        Route::get('profile', [PagesController::class, 'profile']);
        Route::get('reset-password-basic', [PagesController::class, 'reset_password_basic']);
        Route::get('reset-password-cover', [PagesController::class, 'reset_password_cover']);
        Route::get('reviews', [PagesController::class, 'reviews']);
        Route::get('sign-in-basic', [PagesController::class, 'sign_in_basic']);
        Route::get('sign-in-cover', [PagesController::class, 'sign_in_cover']);
        Route::get('sign-up-basic', [PagesController::class, 'sign_up_basic']);
        Route::get('sign-up-cover', [PagesController::class, 'sign_up_cover']);
        Route::get('task-details', [PagesController::class, 'task_details']);
        Route::get('task-kanban-board', [PagesController::class, 'task_kanban_board']);
        Route::get('task-list-view', [PagesController::class, 'task_list_view']);
        Route::get('team', [PagesController::class, 'team']);
        Route::get('terms', [PagesController::class, 'terms']);
        Route::get('todolist', [PagesController::class, 'todolist']);
        Route::get('two-step-verfication-basic', [PagesController::class, 'two_step_verfication_basic']);
        Route::get('two-step-verfication-cover', [PagesController::class, 'two_step_verfication_cover']);
        Route::get('wish-list', [PagesController::class, 'wish_list']);

        // Forms //
        Route::get('advanced-select', [FormsController::class, 'advanced_select']);
        Route::get('counters', [FormsController::class, 'counters']);
        Route::get('form-check-radios', [FormsController::class, 'form_check_radios']);
        Route::get('form-color-pickers', [FormsController::class, 'form_color_pickers']);
        Route::get('form-datetime-pickers', [FormsController::class, 'form_datetime_pickers']);
        Route::get('form-file-uploads', [FormsController::class, 'form_file_uploads']);
        Route::get('form-input-group', [FormsController::class, 'form_input_group']);
        Route::get('form-inputs', [FormsController::class, 'form_inputs']);
        Route::get('form-layout', [FormsController::class, 'form_layout']);
        Route::get('form-range', [FormsController::class, 'form_range']);
        Route::get('form-select', [FormsController::class, 'form_select']);
        Route::get('form-select2', [FormsController::class, 'form_select2']);
        Route::get('form-validation', [FormsController::class, 'form_validation']);
        Route::get('inputnumber', [FormsController::class, 'inputnumber']);
        Route::get('passwords', [FormsController::class, 'passwords']);
        Route::get('quill-editor', [FormsController::class, 'quill_editor']);

        // Tables //
        Route::get('data-tables', [TablesController::class, 'data_tables']);
        Route::get('edittable', [TablesController::class, 'edittable']);
        Route::get('grid-tables', [TablesController::class, 'grid_tables']);
        Route::get('tables', [TablesController::class, 'tables']);

        // Landing Page //
        Route::get('landing', [LandingpageController::class, 'landing']);


        // Maps //
        Route::get('google-maps', [MapsController::class, 'google_maps']);
        Route::get('leaflet-maps', [MapsController::class, 'leaflet_maps']);
        Route::get('vector-maps', [MapsController::class, 'vector_maps']);

        // Utilities //
        Route::get('borders', [UtilitiesController::class, 'borders']);
        Route::get('colors', [UtilitiesController::class, 'colors']);
        Route::get('columns', [UtilitiesController::class, 'columns']);
        Route::get('flex', [UtilitiesController::class, 'flex']);
        Route::get('grids', [UtilitiesController::class, 'grids']);
    });
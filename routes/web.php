<?php

Route::redirect('/', '/login');
Route::get('/home', function () {
    if (session('status')) {
        return redirect()->route('admin.home')->with('status', session('status'));
    }

    return redirect()->route('admin.home');
});

Auth::routes(['register' => false]);
// Admin

Route::group(['prefix' => 'admin', 'as' => 'admin.', 'namespace' => 'Admin', 'middleware' => ['auth']], function () {
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('user-alerts/read', 'UserAlertsController@read');
    // Permissions
    Route::delete('permissions/destroy', 'PermissionsController@massDestroy')->name('permissions.massDestroy');
    Route::resource('permissions', 'PermissionsController');

    // Roles
    Route::delete('roles/destroy', 'RolesController@massDestroy')->name('roles.massDestroy');
    Route::resource('roles', 'RolesController');

    // Users
    Route::delete('users/destroy', 'UsersController@massDestroy')->name('users.massDestroy');
    Route::resource('users', 'UsersController');

    // Audit Logs
    Route::resource('audit-logs', 'AuditLogsController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // User Alerts
    Route::delete('user-alerts/destroy', 'UserAlertsController@massDestroy')->name('user-alerts.massDestroy');
    Route::resource('user-alerts', 'UserAlertsController', ['except' => ['edit', 'update']]);

    // Resources
    Route::delete('resources/destroy', 'ResourceController@massDestroy')->name('resources.massDestroy');
    Route::resource('resources', 'ResourceController');

    // Reservations
    Route::delete('reservations/destroy', 'ReservationController@massDestroy')->name('reservations.massDestroy');
    Route::resource('reservations', 'ReservationController');

    // Companies
    Route::delete('companies/destroy', 'CompanyController@massDestroy')->name('companies.massDestroy');
    Route::resource('companies', 'CompanyController');

    // Bookings
    Route::resource('bookings', 'BookingsController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // My Calendars
    Route::resource('my-calendars', 'MyCalendarController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Resource Calendars
    Route::resource('resource-calendars', 'ResourceCalendarController', ['except' => ['create', 'store', 'edit', 'update', 'destroy']]);

    // Profiles
    Route::resource('profiles', 'ProfileController', ['except' => ['create', 'store', 'edit', 'update', 'show', 'destroy']]);

    // Change Passwords
    Route::get('change-passwords', 'ChangePasswordController@index')->name('change-passwords.index');
    Route::post('change-passwords', 'ChangePasswordController@update')->name('change-passwords.update');

    // Reservation Statuses
    Route::delete('reservation-statuses/destroy', 'ReservationStatusController@massDestroy')->name('reservation-statuses.massDestroy');
    Route::resource('reservation-statuses', 'ReservationStatusController');

    // User Reservations
    Route::delete('reservations/destroy', 'ReservationController@massDestroy')->name('reservations.massDestroy');
    Route::resource('user-reservations', 'UserReservationController');
});

<?php

Route::group(['prefix' => 'v1', 'as' => 'api.', 'namespace' => 'Api\V1\Admin', 'middleware' => ['auth:api']], function () {
    // Permissions
    Route::apiResource('permissions', 'PermissionsApiController');

    // Roles
    Route::apiResource('roles', 'RolesApiController');

    // Users
    Route::apiResource('users', 'UsersApiController');

    // Resources
    Route::apiResource('resources', 'ResourceApiController');

    // Reservations
    Route::apiResource('reservations', 'ReservationApiController');

    // Companies
    Route::apiResource('companies', 'CompanyApiController');

    // Reservation Statuses
    Route::apiResource('reservation-statuses', 'ReservationStatusApiController');

    // Calendar
    Route::apiResource('calendars', 'CalendarApiController');
});

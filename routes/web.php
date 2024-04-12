<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PageController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\DatabaseController;
use App\Http\Controllers\Mail;

use App\Http\Controllers\MailController;


Route::get('/', [PageController::class, 'ViewLoginPageController'])->name('login page');

Route::post('/handle-login', [LoginController::class, 'HandleLoginContoller']);

Route::get('/view-home-page', [PageController::class, 'ViewHomePageController'])->name('home.admin');

Route::get('/handle-logout', [LoginController::class, 'HandleLogoutContoller'])->name('logout');

Route::get('/view-staff-management-index', [PageController::class, 'ViewStaffManagementIndexController'])->name('staff management');

Route::post('/insert-staff-data', [DatabaseController::class, 'InsertStaffData']);

Route::get('/delete-staff-data/{auto_id}', [DatabaseController::class, 'DeleteStaffData']);

Route::get('/view-staff-management-edit/{auto_id}', [PageController::class, 'ViewStaffManagementEditController']);

Route::post('/update-staff-data', [DatabaseController::class, 'UpdateStaffData']);

Route::get('/view-settings-index', [PageController::class, 'ViewSettingsPageContoller'])->name('settings');

Route::post('/change-username', [DatabaseController::class, 'ChangeUsername'])->name('submit change user');

Route::post('/change-password', [DatabaseController::class, 'ChangePassword'])->name('submit change password');

Route::get('/view-user-accounts-index', [PageController::class, 'ViewUserAccountsIndexContoller'])->name('user account');

Route::get('/delete-user-account/{auto_id}', [DatabaseController::class, 'DeleteUserAccount']);

Route::get('/view-edit-user-account/{auto_id}', [PageController::class, 'ViewEditUserAccount']);

Route::post('/edit-user-account', [DatabaseController::class, 'EditUserAccount']);

Route::post('/insert-user-accounts', [DatabaseController::class, 'InsertUserAccount']);

Route::get('/accept-request/{auto_id}', [DatabaseController::class, 'AcceptRequest'])->name('accept request');

Route::get('/decline-request/{auto_id}', [DatabaseController::class, 'DeclineRequest'])->name('decline request');

Route::get('/view-leave-history', [PageController::class, 'ViewLeaveHistoryController'])->name('leave management');

Route::post('/filter-search-leave-history-controller', [PageController::class, 'FilterSearchLeaveHistoryController'])->name('search filter');



Route::get('/view-home-page-of-staff-account', [PageController::class, 'ViewHomePageOfStaffAccountController'])->name('home');

Route::get('/view-settings-index-of-staff-account', [PageController::class, 'ViewSettingsPageOfStaffAccountContoller']);

Route::post('/change-username-of-staff-account', [DatabaseController::class, 'ChangeUsernameOfStaffAccount']);

Route::post('/change-password-of-staff-account', [DatabaseController::class, 'ChangePasswordOfStaffAccount']);

Route::post('/insert-leave-data-of-staff-account', [DatabaseController::class, 'InsertLeaveDataOfStaffAccount']);

Route::get('/delete-leave-pending-request-in-staff-account/{auto_id}', [DatabaseController::class, 'DeleteLeavePendingRequestInStaffAccount']);

Route::get('/view-my-leave-history-of-staff-account', [PageController::class, 'ViewMyLeaveHistoryPageOfStaffAccountController']);

Route::post('/filter-search-leave-history-of-staff-account', [PageController::class, 'FilterSearchLeaveHistoryPageOfStaffAccountController']);


Route::get('/sendmail', [MailController::class, 'index']);

Route::post('/add-leave-type', [DatabaseController::class, 'AddLeaveType'])->name('add leavetype submit');
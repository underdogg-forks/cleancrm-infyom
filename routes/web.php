<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
  return redirect('home');
});


Auth::routes();

Route::get('/home', 'HomeController@index');



Route::get('admincp/crm/addresses', ['as'=> 'admincp.crm.addresses.index', 'uses' => 'Crm\AddressController@index']);
Route::post('admincp/crm/addresses', ['as'=> 'admincp.crm.addresses.store', 'uses' => 'Crm\AddressController@store']);
Route::get('admincp/crm/addresses/create', ['as'=> 'admincp.crm.addresses.create', 'uses' => 'Crm\AddressController@create']);
Route::put('admincp/crm/addresses/{addresses}', ['as'=> 'admincp.crm.addresses.update', 'uses' => 'Crm\AddressController@update']);
Route::patch('admincp/crm/addresses/{addresses}', ['as'=> 'admincp.crm.addresses.update', 'uses' => 'Crm\AddressController@update']);
Route::delete('admincp/crm/addresses/{addresses}', ['as'=> 'admincp.crm.addresses.destroy', 'uses' => 'Crm\AddressController@destroy']);
Route::get('admincp/crm/addresses/{addresses}', ['as'=> 'admincp.crm.addresses.show', 'uses' => 'Crm\AddressController@show']);
Route::get('admincp/crm/addresses/{addresses}/edit', ['as'=> 'admincp.crm.addresses.edit', 'uses' => 'Crm\AddressController@edit']);


Route::get('admincp/calendar/calendarItems', ['as'=> 'admincp.calendar.calendarItems.index', 'uses' => 'Calendar\CalendarItemController@index']);
Route::post('admincp/calendar/calendarItems', ['as'=> 'admincp.calendar.calendarItems.store', 'uses' => 'Calendar\CalendarItemController@store']);
Route::get('admincp/calendar/calendarItems/create', ['as'=> 'admincp.calendar.calendarItems.create', 'uses' => 'Calendar\CalendarItemController@create']);
Route::put('admincp/calendar/calendarItems/{calendarItems}', ['as'=> 'admincp.calendar.calendarItems.update', 'uses' => 'Calendar\CalendarItemController@update']);
Route::patch('admincp/calendar/calendarItems/{calendarItems}', ['as'=> 'admincp.calendar.calendarItems.update', 'uses' => 'Calendar\CalendarItemController@update']);
Route::delete('admincp/calendar/calendarItems/{calendarItems}', ['as'=> 'admincp.calendar.calendarItems.destroy', 'uses' => 'Calendar\CalendarItemController@destroy']);
Route::get('admincp/calendar/calendarItems/{calendarItems}', ['as'=> 'admincp.calendar.calendarItems.show', 'uses' => 'Calendar\CalendarItemController@show']);
Route::get('admincp/calendar/calendarItems/{calendarItems}/edit', ['as'=> 'admincp.calendar.calendarItems.edit', 'uses' => 'Calendar\CalendarItemController@edit']);


Route::get('admincp/core/companyStaffs', ['as'=> 'admincp.core.companyStaffs.index', 'uses' => 'Core\CompanyStaffController@index']);
Route::post('admincp/core/companyStaffs', ['as'=> 'admincp.core.companyStaffs.store', 'uses' => 'Core\CompanyStaffController@store']);
Route::get('admincp/core/companyStaffs/create', ['as'=> 'admincp.core.companyStaffs.create', 'uses' => 'Core\CompanyStaffController@create']);
Route::put('admincp/core/companyStaffs/{companyStaffs}', ['as'=> 'admincp.core.companyStaffs.update', 'uses' => 'Core\CompanyStaffController@update']);
Route::patch('admincp/core/companyStaffs/{companyStaffs}', ['as'=> 'admincp.core.companyStaffs.update', 'uses' => 'Core\CompanyStaffController@update']);
Route::delete('admincp/core/companyStaffs/{companyStaffs}', ['as'=> 'admincp.core.companyStaffs.destroy', 'uses' => 'Core\CompanyStaffController@destroy']);
Route::get('admincp/core/companyStaffs/{companyStaffs}', ['as'=> 'admincp.core.companyStaffs.show', 'uses' => 'Core\CompanyStaffController@show']);
Route::get('admincp/core/companyStaffs/{companyStaffs}/edit', ['as'=> 'admincp.core.companyStaffs.edit', 'uses' => 'Core\CompanyStaffController@edit']);


Route::get('admincp/crm/customers', ['as'=> 'admincp.crm.customers.index', 'uses' => 'Crm\CustomerController@index']);
Route::post('admincp/crm/customers', ['as'=> 'admincp.crm.customers.store', 'uses' => 'Crm\CustomerController@store']);
Route::get('admincp/crm/customers/create', ['as'=> 'admincp.crm.customers.create', 'uses' => 'Crm\CustomerController@create']);
Route::put('admincp/crm/customers/{customers}', ['as'=> 'admincp.crm.customers.update', 'uses' => 'Crm\CustomerController@update']);
Route::patch('admincp/crm/customers/{customers}', ['as'=> 'admincp.crm.customers.update', 'uses' => 'Crm\CustomerController@update']);
Route::delete('admincp/crm/customers/{customers}', ['as'=> 'admincp.crm.customers.destroy', 'uses' => 'Crm\CustomerController@destroy']);
Route::get('admincp/crm/customers/{customers}', ['as'=> 'admincp.crm.customers.show', 'uses' => 'Crm\CustomerController@show']);
Route::get('admincp/crm/customers/{customers}/edit', ['as'=> 'admincp.crm.customers.edit', 'uses' => 'Crm\CustomerController@edit']);


Route::get('admincp/hrm/employees', ['as'=> 'admincp.hrm.employees.index', 'uses' => 'Hrm\EmployeeController@index']);
Route::post('admincp/hrm/employees', ['as'=> 'admincp.hrm.employees.store', 'uses' => 'Hrm\EmployeeController@store']);
Route::get('admincp/hrm/employees/create', ['as'=> 'admincp.hrm.employees.create', 'uses' => 'Hrm\EmployeeController@create']);
Route::put('admincp/hrm/employees/{employees}', ['as'=> 'admincp.hrm.employees.update', 'uses' => 'Hrm\EmployeeController@update']);
Route::patch('admincp/hrm/employees/{employees}', ['as'=> 'admincp.hrm.employees.update', 'uses' => 'Hrm\EmployeeController@update']);
Route::delete('admincp/hrm/employees/{employees}', ['as'=> 'admincp.hrm.employees.destroy', 'uses' => 'Hrm\EmployeeController@destroy']);
Route::get('admincp/hrm/employees/{employees}', ['as'=> 'admincp.hrm.employees.show', 'uses' => 'Hrm\EmployeeController@show']);
Route::get('admincp/hrm/employees/{employees}/edit', ['as'=> 'admincp.hrm.employees.edit', 'uses' => 'Hrm\EmployeeController@edit']);


Route::get('admincp/projects/projectCustomerRoles', ['as'=> 'admincp.projects.projectCustomerRoles.index', 'uses' => 'Projects\ProjectCustomerRoleController@index']);
Route::post('admincp/projects/projectCustomerRoles', ['as'=> 'admincp.projects.projectCustomerRoles.store', 'uses' => 'Projects\ProjectCustomerRoleController@store']);
Route::get('admincp/projects/projectCustomerRoles/create', ['as'=> 'admincp.projects.projectCustomerRoles.create', 'uses' => 'Projects\ProjectCustomerRoleController@create']);
Route::put('admincp/projects/projectCustomerRoles/{projectCustomerRoles}', ['as'=> 'admincp.projects.projectCustomerRoles.update', 'uses' => 'Projects\ProjectCustomerRoleController@update']);
Route::patch('admincp/projects/projectCustomerRoles/{projectCustomerRoles}', ['as'=> 'admincp.projects.projectCustomerRoles.update', 'uses' => 'Projects\ProjectCustomerRoleController@update']);
Route::delete('admincp/projects/projectCustomerRoles/{projectCustomerRoles}', ['as'=> 'admincp.projects.projectCustomerRoles.destroy', 'uses' => 'Projects\ProjectCustomerRoleController@destroy']);
Route::get('admincp/projects/projectCustomerRoles/{projectCustomerRoles}', ['as'=> 'admincp.projects.projectCustomerRoles.show', 'uses' => 'Projects\ProjectCustomerRoleController@show']);
Route::get('admincp/projects/projectCustomerRoles/{projectCustomerRoles}/edit', ['as'=> 'admincp.projects.projectCustomerRoles.edit', 'uses' => 'Projects\ProjectCustomerRoleController@edit']);


Route::get('admincp/projects/projectRelations', ['as'=> 'admincp.projects.projectRelations.index', 'uses' => 'Projects\ProjectRelationController@index']);
Route::post('admincp/projects/projectRelations', ['as'=> 'admincp.projects.projectRelations.store', 'uses' => 'Projects\ProjectRelationController@store']);
Route::get('admincp/projects/projectRelations/create', ['as'=> 'admincp.projects.projectRelations.create', 'uses' => 'Projects\ProjectRelationController@create']);
Route::put('admincp/projects/projectRelations/{projectRelations}', ['as'=> 'admincp.projects.projectRelations.update', 'uses' => 'Projects\ProjectRelationController@update']);
Route::patch('admincp/projects/projectRelations/{projectRelations}', ['as'=> 'admincp.projects.projectRelations.update', 'uses' => 'Projects\ProjectRelationController@update']);
Route::delete('admincp/projects/projectRelations/{projectRelations}', ['as'=> 'admincp.projects.projectRelations.destroy', 'uses' => 'Projects\ProjectRelationController@destroy']);
Route::get('admincp/projects/projectRelations/{projectRelations}', ['as'=> 'admincp.projects.projectRelations.show', 'uses' => 'Projects\ProjectRelationController@show']);
Route::get('admincp/projects/projectRelations/{projectRelations}/edit', ['as'=> 'admincp.projects.projectRelations.edit', 'uses' => 'Projects\ProjectRelationController@edit']);


Route::get('admincp/crm/addresses', ['as'=> 'admincp.crm.addresses.index', 'uses' => 'Crm\AddressController@index']);
Route::post('admincp/crm/addresses', ['as'=> 'admincp.crm.addresses.store', 'uses' => 'Crm\AddressController@store']);
Route::get('admincp/crm/addresses/create', ['as'=> 'admincp.crm.addresses.create', 'uses' => 'Crm\AddressController@create']);
Route::put('admincp/crm/addresses/{addresses}', ['as'=> 'admincp.crm.addresses.update', 'uses' => 'Crm\AddressController@update']);
Route::patch('admincp/crm/addresses/{addresses}', ['as'=> 'admincp.crm.addresses.update', 'uses' => 'Crm\AddressController@update']);
Route::delete('admincp/crm/addresses/{addresses}', ['as'=> 'admincp.crm.addresses.destroy', 'uses' => 'Crm\AddressController@destroy']);
Route::get('admincp/crm/addresses/{addresses}', ['as'=> 'admincp.crm.addresses.show', 'uses' => 'Crm\AddressController@show']);
Route::get('admincp/crm/addresses/{addresses}/edit', ['as'=> 'admincp.crm.addresses.edit', 'uses' => 'Crm\AddressController@edit']);


Route::get('admincp/calendar/calendarItems', ['as'=> 'admincp.calendar.calendarItems.index', 'uses' => 'Calendar\CalendarItemController@index']);
Route::post('admincp/calendar/calendarItems', ['as'=> 'admincp.calendar.calendarItems.store', 'uses' => 'Calendar\CalendarItemController@store']);
Route::get('admincp/calendar/calendarItems/create', ['as'=> 'admincp.calendar.calendarItems.create', 'uses' => 'Calendar\CalendarItemController@create']);
Route::put('admincp/calendar/calendarItems/{calendarItems}', ['as'=> 'admincp.calendar.calendarItems.update', 'uses' => 'Calendar\CalendarItemController@update']);
Route::patch('admincp/calendar/calendarItems/{calendarItems}', ['as'=> 'admincp.calendar.calendarItems.update', 'uses' => 'Calendar\CalendarItemController@update']);
Route::delete('admincp/calendar/calendarItems/{calendarItems}', ['as'=> 'admincp.calendar.calendarItems.destroy', 'uses' => 'Calendar\CalendarItemController@destroy']);
Route::get('admincp/calendar/calendarItems/{calendarItems}', ['as'=> 'admincp.calendar.calendarItems.show', 'uses' => 'Calendar\CalendarItemController@show']);
Route::get('admincp/calendar/calendarItems/{calendarItems}/edit', ['as'=> 'admincp.calendar.calendarItems.edit', 'uses' => 'Calendar\CalendarItemController@edit']);


Route::get('admincp/core/companyStaffs', ['as'=> 'admincp.core.companyStaffs.index', 'uses' => 'Core\CompanyStaffController@index']);
Route::post('admincp/core/companyStaffs', ['as'=> 'admincp.core.companyStaffs.store', 'uses' => 'Core\CompanyStaffController@store']);
Route::get('admincp/core/companyStaffs/create', ['as'=> 'admincp.core.companyStaffs.create', 'uses' => 'Core\CompanyStaffController@create']);
Route::put('admincp/core/companyStaffs/{companyStaffs}', ['as'=> 'admincp.core.companyStaffs.update', 'uses' => 'Core\CompanyStaffController@update']);
Route::patch('admincp/core/companyStaffs/{companyStaffs}', ['as'=> 'admincp.core.companyStaffs.update', 'uses' => 'Core\CompanyStaffController@update']);
Route::delete('admincp/core/companyStaffs/{companyStaffs}', ['as'=> 'admincp.core.companyStaffs.destroy', 'uses' => 'Core\CompanyStaffController@destroy']);
Route::get('admincp/core/companyStaffs/{companyStaffs}', ['as'=> 'admincp.core.companyStaffs.show', 'uses' => 'Core\CompanyStaffController@show']);
Route::get('admincp/core/companyStaffs/{companyStaffs}/edit', ['as'=> 'admincp.core.companyStaffs.edit', 'uses' => 'Core\CompanyStaffController@edit']);


Route::get('admincp/crm/customers', ['as'=> 'admincp.crm.customers.index', 'uses' => 'Crm\CustomerController@index']);
Route::post('admincp/crm/customers', ['as'=> 'admincp.crm.customers.store', 'uses' => 'Crm\CustomerController@store']);
Route::get('admincp/crm/customers/create', ['as'=> 'admincp.crm.customers.create', 'uses' => 'Crm\CustomerController@create']);
Route::put('admincp/crm/customers/{customers}', ['as'=> 'admincp.crm.customers.update', 'uses' => 'Crm\CustomerController@update']);
Route::patch('admincp/crm/customers/{customers}', ['as'=> 'admincp.crm.customers.update', 'uses' => 'Crm\CustomerController@update']);
Route::delete('admincp/crm/customers/{customers}', ['as'=> 'admincp.crm.customers.destroy', 'uses' => 'Crm\CustomerController@destroy']);
Route::get('admincp/crm/customers/{customers}', ['as'=> 'admincp.crm.customers.show', 'uses' => 'Crm\CustomerController@show']);
Route::get('admincp/crm/customers/{customers}/edit', ['as'=> 'admincp.crm.customers.edit', 'uses' => 'Crm\CustomerController@edit']);


Route::get('admincp/hrm/employees', ['as'=> 'admincp.hrm.employees.index', 'uses' => 'Hrm\EmployeeController@index']);
Route::post('admincp/hrm/employees', ['as'=> 'admincp.hrm.employees.store', 'uses' => 'Hrm\EmployeeController@store']);
Route::get('admincp/hrm/employees/create', ['as'=> 'admincp.hrm.employees.create', 'uses' => 'Hrm\EmployeeController@create']);
Route::put('admincp/hrm/employees/{employees}', ['as'=> 'admincp.hrm.employees.update', 'uses' => 'Hrm\EmployeeController@update']);
Route::patch('admincp/hrm/employees/{employees}', ['as'=> 'admincp.hrm.employees.update', 'uses' => 'Hrm\EmployeeController@update']);
Route::delete('admincp/hrm/employees/{employees}', ['as'=> 'admincp.hrm.employees.destroy', 'uses' => 'Hrm\EmployeeController@destroy']);
Route::get('admincp/hrm/employees/{employees}', ['as'=> 'admincp.hrm.employees.show', 'uses' => 'Hrm\EmployeeController@show']);
Route::get('admincp/hrm/employees/{employees}/edit', ['as'=> 'admincp.hrm.employees.edit', 'uses' => 'Hrm\EmployeeController@edit']);


Route::get('admincp/projects/projectCustomerRoles', ['as'=> 'admincp.projects.projectCustomerRoles.index', 'uses' => 'Projects\ProjectCustomerRoleController@index']);
Route::post('admincp/projects/projectCustomerRoles', ['as'=> 'admincp.projects.projectCustomerRoles.store', 'uses' => 'Projects\ProjectCustomerRoleController@store']);
Route::get('admincp/projects/projectCustomerRoles/create', ['as'=> 'admincp.projects.projectCustomerRoles.create', 'uses' => 'Projects\ProjectCustomerRoleController@create']);
Route::put('admincp/projects/projectCustomerRoles/{projectCustomerRoles}', ['as'=> 'admincp.projects.projectCustomerRoles.update', 'uses' => 'Projects\ProjectCustomerRoleController@update']);
Route::patch('admincp/projects/projectCustomerRoles/{projectCustomerRoles}', ['as'=> 'admincp.projects.projectCustomerRoles.update', 'uses' => 'Projects\ProjectCustomerRoleController@update']);
Route::delete('admincp/projects/projectCustomerRoles/{projectCustomerRoles}', ['as'=> 'admincp.projects.projectCustomerRoles.destroy', 'uses' => 'Projects\ProjectCustomerRoleController@destroy']);
Route::get('admincp/projects/projectCustomerRoles/{projectCustomerRoles}', ['as'=> 'admincp.projects.projectCustomerRoles.show', 'uses' => 'Projects\ProjectCustomerRoleController@show']);
Route::get('admincp/projects/projectCustomerRoles/{projectCustomerRoles}/edit', ['as'=> 'admincp.projects.projectCustomerRoles.edit', 'uses' => 'Projects\ProjectCustomerRoleController@edit']);


Route::get('admincp/projects/projectRelations', ['as'=> 'admincp.projects.projectRelations.index', 'uses' => 'Projects\ProjectRelationController@index']);
Route::post('admincp/projects/projectRelations', ['as'=> 'admincp.projects.projectRelations.store', 'uses' => 'Projects\ProjectRelationController@store']);
Route::get('admincp/projects/projectRelations/create', ['as'=> 'admincp.projects.projectRelations.create', 'uses' => 'Projects\ProjectRelationController@create']);
Route::put('admincp/projects/projectRelations/{projectRelations}', ['as'=> 'admincp.projects.projectRelations.update', 'uses' => 'Projects\ProjectRelationController@update']);
Route::patch('admincp/projects/projectRelations/{projectRelations}', ['as'=> 'admincp.projects.projectRelations.update', 'uses' => 'Projects\ProjectRelationController@update']);
Route::delete('admincp/projects/projectRelations/{projectRelations}', ['as'=> 'admincp.projects.projectRelations.destroy', 'uses' => 'Projects\ProjectRelationController@destroy']);
Route::get('admincp/projects/projectRelations/{projectRelations}', ['as'=> 'admincp.projects.projectRelations.show', 'uses' => 'Projects\ProjectRelationController@show']);
Route::get('admincp/projects/projectRelations/{projectRelations}/edit', ['as'=> 'admincp.projects.projectRelations.edit', 'uses' => 'Projects\ProjectRelationController@edit']);


Route::get('admincp/projects/projectRoles', ['as'=> 'admincp.projects.projectRoles.index', 'uses' => 'Projects\ProjectRoleController@index']);
Route::post('admincp/projects/projectRoles', ['as'=> 'admincp.projects.projectRoles.store', 'uses' => 'Projects\ProjectRoleController@store']);
Route::get('admincp/projects/projectRoles/create', ['as'=> 'admincp.projects.projectRoles.create', 'uses' => 'Projects\ProjectRoleController@create']);
Route::put('admincp/projects/projectRoles/{projectRoles}', ['as'=> 'admincp.projects.projectRoles.update', 'uses' => 'Projects\ProjectRoleController@update']);
Route::patch('admincp/projects/projectRoles/{projectRoles}', ['as'=> 'admincp.projects.projectRoles.update', 'uses' => 'Projects\ProjectRoleController@update']);
Route::delete('admincp/projects/projectRoles/{projectRoles}', ['as'=> 'admincp.projects.projectRoles.destroy', 'uses' => 'Projects\ProjectRoleController@destroy']);
Route::get('admincp/projects/projectRoles/{projectRoles}', ['as'=> 'admincp.projects.projectRoles.show', 'uses' => 'Projects\ProjectRoleController@show']);
Route::get('admincp/projects/projectRoles/{projectRoles}/edit', ['as'=> 'admincp.projects.projectRoles.edit', 'uses' => 'Projects\ProjectRoleController@edit']);


Route::get('admincp/projects/projectTasks', ['as'=> 'admincp.projects.projectTasks.index', 'uses' => 'Projects\ProjectTasksController@index']);
Route::post('admincp/projects/projectTasks', ['as'=> 'admincp.projects.projectTasks.store', 'uses' => 'Projects\ProjectTasksController@store']);
Route::get('admincp/projects/projectTasks/create', ['as'=> 'admincp.projects.projectTasks.create', 'uses' => 'Projects\ProjectTasksController@create']);
Route::put('admincp/projects/projectTasks/{projectTasks}', ['as'=> 'admincp.projects.projectTasks.update', 'uses' => 'Projects\ProjectTasksController@update']);
Route::patch('admincp/projects/projectTasks/{projectTasks}', ['as'=> 'admincp.projects.projectTasks.update', 'uses' => 'Projects\ProjectTasksController@update']);
Route::delete('admincp/projects/projectTasks/{projectTasks}', ['as'=> 'admincp.projects.projectTasks.destroy', 'uses' => 'Projects\ProjectTasksController@destroy']);
Route::get('admincp/projects/projectTasks/{projectTasks}', ['as'=> 'admincp.projects.projectTasks.show', 'uses' => 'Projects\ProjectTasksController@show']);
Route::get('admincp/projects/projectTasks/{projectTasks}/edit', ['as'=> 'admincp.projects.projectTasks.edit', 'uses' => 'Projects\ProjectTasksController@edit']);


Route::get('admincp/projects/projects', ['as'=> 'admincp.projects.projects.index', 'uses' => 'Projects\ProjectController@index']);
Route::post('admincp/projects/projects', ['as'=> 'admincp.projects.projects.store', 'uses' => 'Projects\ProjectController@store']);
Route::get('admincp/projects/projects/create', ['as'=> 'admincp.projects.projects.create', 'uses' => 'Projects\ProjectController@create']);
Route::put('admincp/projects/projects/{projects}', ['as'=> 'admincp.projects.projects.update', 'uses' => 'Projects\ProjectController@update']);
Route::patch('admincp/projects/projects/{projects}', ['as'=> 'admincp.projects.projects.update', 'uses' => 'Projects\ProjectController@update']);
Route::delete('admincp/projects/projects/{projects}', ['as'=> 'admincp.projects.projects.destroy', 'uses' => 'Projects\ProjectController@destroy']);
Route::get('admincp/projects/projects/{projects}', ['as'=> 'admincp.projects.projects.show', 'uses' => 'Projects\ProjectController@show']);
Route::get('admincp/projects/projects/{projects}/edit', ['as'=> 'admincp.projects.projects.edit', 'uses' => 'Projects\ProjectController@edit']);


Route::get('admincp/crm/relations', ['as'=> 'admincp.crm.relations.index', 'uses' => 'Crm\RelationController@index']);
Route::post('admincp/crm/relations', ['as'=> 'admincp.crm.relations.store', 'uses' => 'Crm\RelationController@store']);
Route::get('admincp/crm/relations/create', ['as'=> 'admincp.crm.relations.create', 'uses' => 'Crm\RelationController@create']);
Route::put('admincp/crm/relations/{relations}', ['as'=> 'admincp.crm.relations.update', 'uses' => 'Crm\RelationController@update']);
Route::patch('admincp/crm/relations/{relations}', ['as'=> 'admincp.crm.relations.update', 'uses' => 'Crm\RelationController@update']);
Route::delete('admincp/crm/relations/{relations}', ['as'=> 'admincp.crm.relations.destroy', 'uses' => 'Crm\RelationController@destroy']);
Route::get('admincp/crm/relations/{relations}', ['as'=> 'admincp.crm.relations.show', 'uses' => 'Crm\RelationController@show']);
Route::get('admincp/crm/relations/{relations}/edit', ['as'=> 'admincp.crm.relations.edit', 'uses' => 'Crm\RelationController@edit']);


Route::get('admincp/core/roles', ['as'=> 'admincp.core.roles.index', 'uses' => 'Core\RoleController@index']);
Route::post('admincp/core/roles', ['as'=> 'admincp.core.roles.store', 'uses' => 'Core\RoleController@store']);
Route::get('admincp/core/roles/create', ['as'=> 'admincp.core.roles.create', 'uses' => 'Core\RoleController@create']);
Route::put('admincp/core/roles/{roles}', ['as'=> 'admincp.core.roles.update', 'uses' => 'Core\RoleController@update']);
Route::patch('admincp/core/roles/{roles}', ['as'=> 'admincp.core.roles.update', 'uses' => 'Core\RoleController@update']);
Route::delete('admincp/core/roles/{roles}', ['as'=> 'admincp.core.roles.destroy', 'uses' => 'Core\RoleController@destroy']);
Route::get('admincp/core/roles/{roles}', ['as'=> 'admincp.core.roles.show', 'uses' => 'Core\RoleController@show']);
Route::get('admincp/core/roles/{roles}/edit', ['as'=> 'admincp.core.roles.edit', 'uses' => 'Core\RoleController@edit']);

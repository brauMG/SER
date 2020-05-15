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



Route::get('/Admin/Compania', 'CompaniaController@index');
Route::get('/Admin/Compania/New', 'CompaniaController@new');
Route::get('/Admin/Compania/Edit/{id}', 'CompaniaController@edit');
Route::get('/Admin/Compania/Delete/{id}', 'CompaniaController@prepare');
Route::post('/Admin/Compania/Create', 'CompaniaController@store')->name('CreateCompany');
Route::put('/Admin/Compania/Update/{id}', 'CompaniaController@update')->name('UpdateCompany');
Route::post('/Admin/Compania/Delete/{id}', 'CompaniaController@delete')->name('DeleteCompany');

Route::get('/Admin/Areas','AreaController@index');
Route::get('/Admin/Areas/New', 'AreaController@new');
Route::get('/Admin/Areas/Edit/{id}', 'AreaController@edit');
Route::get('/Admin/Areas/Delete/{id}', 'AreaController@prepare');
Route::post('/Admin/Areas/Create', 'AreaController@store')->name('CreateArea');
Route::put('/Admin/Areas/Update/{id}', 'AreaController@update')->name('UpdateArea');
Route::post('/Admin/Areas/Delete/{id}', 'AreaController@delete')->name('DeleteArea');

Route::get('/Admin/Puestos', 'PuestosController@index');
Route::get('/Admin/Puestos/New', 'PuestosController@new');
Route::get('/Admin/Puestos/Edit/{id}', 'PuestosController@edit');
Route::get('/Admin/Puestos/Delete/{id}', 'PuestosController@prepare');
Route::post('/Admin/Puestos/Create', 'PuestosController@store')->name('CreatePuesto');
Route::put('/Admin/Puestos/Update/{id}', 'PuestosController@update')->name('UpdatePuesto');
Route::post('/Admin/Puestos/Delete/{id}', 'PuestosController@delete')->name('DeletePuesto');

Route::get('/Admin/Status', 'StatusController@index');
Route::get('/Admin/Status/New', 'StatusController@new');
Route::get('/Admin/Status/Edit/{id}', 'StatusController@edit');
Route::get('/Admin/Status/Delete/{id}', 'StatusController@prepare');
Route::post('/Admin/Status/Create', 'StatusController@store')->name('CreateStatus');
Route::put('/Admin/Status/Update/{id}', 'StatusController@update')->name('UpdateStatus');
Route::post('/Admin/Status/Delete/{id}', 'StatusController@delete')->name('DeleteStatus');

Route::get('/Admin/RolesRASIC', 'RolesRASICController@index');

Route::get('/Admin/Indicador', 'IndicadorController@index');
Route::get('/Admin/Indicador/New', 'IndicadorController@new');
Route::get('/Admin/Indicador/Edit/{id}', 'IndicadorController@edit');
Route::get('/Admin/Indicador/Delete/{id}', 'IndicadorController@prepare');
Route::post('/Admin/Indicador/Create', 'IndicadorController@store')->name('CreateIndicator');
Route::put('/Admin/Indicador/Update/{id}', 'IndicadorController@update')->name('UpdateIndicator');
Route::post('/Admin/Indicador/Delete/{id}', 'IndicadorController@delete')->name('DeleteIndicator');

Route::get('/Admin/Enfoques', 'EnfoquesController@index');
Route::get('/Admin/Enfoques/New', 'EnfoquesController@new');
Route::get('/Admin/Enfoques/Edit/{id}', 'EnfoquesController@edit');
Route::get('/Admin/Enfoques/Delete/{id}', 'EnfoquesController@prepare');
Route::post('/Admin/Enfoques/Create', 'EnfoquesController@store')->name('CreateFocus');
Route::put('/Admin/Enfoques/Update/{id}', 'EnfoquesController@update')->name('UpdateFocus');
Route::post('/Admin/Enfoques/Delete/{id}', 'EnfoquesController@delete')->name('DeleteFocus');

Route::get('/Admin/Usuarios', 'UsuariosController@index');
Route::get('/Admin/Usuarios/New', 'UsuariosController@new');
Route::get('/Admin/Usuarios/Edit/{id}', 'UsuariosController@edit');
Route::get('/Admin/Usuarios/Delete/{id}', 'UsuariosController@prepare');
Route::post('/Admin/Usuarios/Create', 'UsuariosController@store')->name('CreateUser');
Route::put('/Admin/Usuarios/Update/{id}', 'UsuariosController@update')->name('UpdateUser');
Route::post('/Admin/Usuarios/Delete/{id}', 'UsuariosController@delete')->name('DeleteUser');
//Route::post('/Admin/Usuarios/UpdatePassword', 'UsuariosController@updatePassword');
Route::get('/Admin/Usuarios/ChangeCompany/{id}', 'UsuariosController@changeCompany');
//Route::post('/Admin/Usuarios/importData', 'UsuariosController@importData');
//Route::get('/Admin/Usuarios/ChangePassword/{id}', 'UsuariosController@changePassword');
//Route::get('/Admin/Usuarios/ImportExcelIndex', 'UsuariosController@ImportExcelIndex');

Route::get('/Admin/Fases', 'FasesController@index');
Route::get('/Admin/Fases/New', 'FasesController@new');
Route::get('/Admin/Fases/Edit/{id}', 'FasesController@edit');
Route::get('/Admin/Fases/Delete/{id}', 'EnfoquesController@prepare');
Route::post('/Admin/Fases/Create', 'FasesController@store')->name('CreateFase');
Route::put('/Admin/Fases/Update/{id}', 'FasesController@update')->name('UpdateFase');
Route::post('/Admin/Fases/Delete/{id}', 'FasesController@delete')->name('DeleteFase');

Route::get('/Admin/Roles', 'RolesController@index');
Route::get('/Admin/Roles/New', 'RolesController@new');
Route::get('/Admin/Roles/Edit/{id}', 'RolesController@edit');
Route::post('/Admin/Roles/Create', 'RolesController@create');
Route::post('/Admin/Roles/Update', 'RolesController@update');
Route::post('/Admin/Roles/Delete/{id}', 'RolesController@delete');

Route::get('/Admin/Proyectos', 'ProyectosController@index');
Route::get('/Admin/Proyectos/New','ProyectosController@new');
Route::get('/Admin/Proyectos/Edit/{id}','ProyectosController@edit');
Route::get('/Admin/Proyectos/ProyectByCompany/{company}','ProyectosController@ProyectByCompany');
Route::post('/Admin/Proyectos/Create','ProyectosController@create');
Route::post('/Admin/Proyectos/Update','ProyectosController@update');
Route::post('/Admin/Proyectos/Delete/{id}','ProyectosController@delete');

Route::get('/Admin/Actividades', 'ActividadesController@index');
Route::get('/Admin/Actividades/New', 'ActividadesController@new');
Route::get('/Admin/Actividades/Edit/{id}', 'ActividadesController@edit');
Route::post('/Admin/Actividades/Create', 'ActividadesController@store')->name('CreateActivity');
Route::post('/Admin/Actividades/Update', 'ActividadesController@update');
Route::post('/Admin/Actividades/Delete/{id}', 'ActividadesController@delete');

Route::get('/Admin/RolesProyectos', 'RolesProyectosController@index');
Route::get('/Admin/RolesProyectos/New', 'RolesProyectosController@new');
Route::get('/Admin/RolesProyectos/Edit/{id}', 'RolesProyectosController@edit');
Route::post('/Admin/RolesProyectos/Create', 'RolesProyectosController@create');
Route::post('/Admin/RolesProyectos/Update', 'RolesProyectosController@update');
Route::post('/Admin/RolesProyectos/Delete/{id}', 'RolesProyectosController@delete');


Route::get('/Admin/Trabajos', 'TrabajosController@index');
Route::get('/Admin/Trabajos/New', 'TrabajosController@new');
Route::get('/Admin/Trabajos/Edit/{id}', 'TrabajosController@edit');
Route::post('/Admin/Trabajos/Create', 'TrabajosController@create');
Route::post('/Admin/Trabajos/Update', 'TrabajosController@update');
Route::post('/Admin/Trabajos/Delete/{id}', 'TrabajosController@delete');

Route::get('/Admin/RolesFases', 'RolesFaseController@index');
Route::get('/Admin/RolesFases/New', 'RolesFaseController@new');
Route::get('/Admin/RolesFases/Edit/{id}', 'RolesFaseController@edit');
Route::post('/Admin/RolesFases/Create', 'RolesFaseController@create');
Route::post('/Admin/RolesFases/Update', 'RolesFaseController@update');
Route::post('/Admin/RolesFases/Delete/{id}', 'RolesFaseController@delete');


Route::get('/Reportes/ActividadesEmpresaPorEnfoque', 'ReportesController@ActividadesEmpresaPorEnfoque');
Route::get('/Reportes/Proyectos', 'ReportesController@proyectos');
Route::get('/Reportes/Recursos', 'ReportesController@recursosPorRoles');
Route::get('/Reportes/ActividadesEmpresaPorStatus', 'ReportesController@ActividadesEmpresaPorStatus');
/**/
Route::get('/Email/Usuarios','EmailController@index');
Route::get('/Email/SendReporteAsignacionesEnfoque','EmailController@SendReporteAsignacionesEnfoque');
Route::get('/Email/Send','EmailController@send');
/**/
Auth::routes();

Route::get('/', 'HomeController@index');
Route::get('/home','HomeController@index');

Route::get('/home/selectCompany','HomeController@selectCompany');
Route::get('/home/Add/Proyecto','HomeController@AddUser');
Route::get('/home/deletes/Proyecto','HomeController@DeleteUser');
Route::get('/home/email/nuevaactividad','HomeController@send');

Route::get('/home/create','HomeController@create');
Route::get('/clear-cache', function() {
    Artisan::call('cache:clear');
    return "Cache is cleared";
});



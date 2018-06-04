<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Routing\Controller as BaseController;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Foundation\Auth\Access\AuthorizesRequests;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function boot()
    {
        Route::pattern('id', '[0-9]+');

        parent::boot();
    }




    /**
     * Получить ключ маршрута для модели.
     * @возвращенная строка
     */
    public function getRouteKeyName()
    {
        return 'slug';
    }

}
  function boot(){
    return Controller::class;
}


//Route::namespace('Admin')->group(function () {
//    // Controllers Within The "App\Http\Controllers\Admin" Namespace
//});



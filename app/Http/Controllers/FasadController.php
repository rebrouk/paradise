<?php

namespace App\Http\Controllers;
//namespace App\Providers;
//namespace App\Orders;

//use Illuminate\Contracts\Cache\Repository as Cache;
//use Riak\Connection;
//use Illuminate\Support\ServiceProvider;
use Illuminate\Http\Request;
use Illuminate\Contracts\Routing\ResponseFactory;

class FasadController extends Controller
{


    public function index()
    {

        echo view('fasad.index');
        $value = config('app.timezone');
    }


    public function testBasicExample()
    {
        Cache::shouldReceive('get')
            ->with('key')
            ->andReturn('value');

        $this->visit('/cache')
            ->see('value');
    }



}












//class Repository
//{
//    /**
//     * The cache instance.
//     */
//    protected $cache;
//
//    /**
//     * Create a new repository instance.
//     *
//     * @param  Cache  $cache
//     * @return void
//     */
//    public function __construct(Cache $cache)
//    {
//        $this->cache = $cache;
//    }
//}























// Service Providers   в принципе совсем не нужно

//
//class RiakServiceProvider extends ServiceProvider
//{
//    /**
//     * Indicates if loading of the provider is deferred.
//     *
//     * @var bool
//     */
//    protected $defer = true;
//
//    /**
//     * Register the service provider.
//     *
//     * @return void
//     */
//    public function register()
//    {
//        $this->app->singleton(Connection::class, function ($app) {
//            return new Connection($app['config']['riak']);
//        });
//    }
//
//    /**
//     * Get the services provided by the provider.
//     *
//     * @return array
//     */
//    public function provides()
//    {
//        return [Connection::class];
//    }
//
//}



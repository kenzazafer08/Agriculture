<?php

namespace App\Providers;

use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\DB;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        $annonces = DB::select('select * from annonces order by id_annonce desc');
        $images = DB::select('select * from image');        
        $transactions = DB::table('transaction')
        ->orderBy('date', 'desc')
        ->get();
        view()->share('annonces',$annonces);
        view()->share('images',$images);
        view()->share('transactions',$transactions);
    }
}

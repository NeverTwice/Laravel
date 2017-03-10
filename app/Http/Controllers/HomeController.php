<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Support\Facades\View;

class HomeController extends Controller
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('app');
    }

    public function home()
    {
        $params = app( '\Aimeos\Shop\Base\Page' )->getSections( 'home' );
        // do some more stuff
        return View::make('vendor/shop/home', $params);
    }
}

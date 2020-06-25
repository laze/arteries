<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Item;
use App\Datables\ItemsDataTable;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        return $dataTable->render('items.index');
    }

    
        
}

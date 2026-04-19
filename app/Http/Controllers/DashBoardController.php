<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class DashBoardController extends Controller
{
    /**
     * Controller method render view dashboard page
     * 
     * @return \Illuminate\Contracts\View\Factory|\Contracts\View\View
     */
    public function board(){
        return view("pages.dashboard");
    }
}

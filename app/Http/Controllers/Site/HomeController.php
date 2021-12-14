<?php

namespace App\Http\Controllers\Site;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Handle the incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function __invoke(Request $request)
    {echo("INVOKE!!! - ");
        //
		return view("site.home.index");
    }

	public function index(Request $request)
    {echo("INDEX!!! - ");
        //
		return view("site.home.index");
    }

}

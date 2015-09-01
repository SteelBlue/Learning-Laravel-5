<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     *  About Page
     **/
    public function about()
    {

        /* Pass Variables of Data as 2nd Argument to VIEW (using PHP compact() function) */
        $first = "Ryan";
        $last = "Ebbers";
        $people = array(
            'Taylor Otwell',
            'Dayle Rees',
            'Eric Barnes'
        );

        return view('pages.about', compact('first', 'last', 'people'));

        /* Pass Array of Data as 2nd Argument to the VIEW */
//        $data = array(
//            'first' => 'Ryan',
//            'last' => 'Ebbers'
//        );
//        return view('pages.about', $data);

        /* Pass a Variable of Data to the VIEW */
//        $name = "Ryan <span style=\"color:red;\">Ebbers</span>";
//        return view('pages.about')->with('name', $name);

        /* Pass Array of Data to the VIEW */
//        return view('pages.about')->with(([
//            'first' => 'Ryan',
//            'last' => 'Ebbers'
//        ]));
    }

    /**
     *  Contact Page
     **/
    public function contact()
    {
        return view('pages.contact');
    }
}

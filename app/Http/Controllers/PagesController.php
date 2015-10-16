<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Controllers\Controller;

class PagesController extends Controller
{
    /**
     * Index Page
     *
     * @return \Illuminate\View\View
     */
    public function index()
    {
        return view('welcome');
    }


    /**
     * About Page
     *
     * @return \Illuminate\View\View
     */
    public function about()
    {
        /**
         * Pass Variables of Data as 2nd Argument to VIEW (using PHP compact() function)
         **/
        $first = "Ryan";
        $last = "Ebbers";
        $people = array(
            'Taylor Otwell',
            'Dayle Rees',
            'Eric Barnes'
        );

        return view('pages.about', compact('first', 'last', 'people'));
    }


    /**
     * Contact Page
     *
     * @return \Illuminate\View\View
     */
    public function contact()
    {
        return view('pages.contact');
    }
}

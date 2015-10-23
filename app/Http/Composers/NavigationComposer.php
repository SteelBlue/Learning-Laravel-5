<?php

/**
 * Created by PhpStorm.
 * User: ryanebbers
 * Date: 10/22/15
 * Time: 5:43 PM
 */


namespace App\Http\Composers;

use App\Article;
use Illuminate\View\View;

class NavigationComposer
{
    public function compose( View $view )
    {
        $view->with('latest', Article::latest()->first());
    }


}
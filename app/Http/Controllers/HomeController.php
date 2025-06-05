<?php

namespace App\Http\Controllers;

use NckRtl\RouteMaker\Get;

class HomeController extends Controller
{
    #[Get(uri: '/')]
    public function show(): \Inertia\ResponseFactory|\Inertia\Response
    {
        return inertia('Home');
    }
}

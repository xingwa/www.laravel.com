<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Routing\Controller;

class BaseController extends Controller
{
    protected $req ;
    public function __construct(Request $request){
        $this->req = $request;
    }
}

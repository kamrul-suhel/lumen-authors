<?php

namespace App\Http\Controllers;

use App\Author;
use App\Http\Traits\ApiResponse;
use Illuminate\Http\Request;

class AuthorController extends Controller
{

    use ApiResponse;

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        //
    }

    public function index(){
        $authors = Author::all();
        return $this->successResponse($authors);
    }

    public function show($author){

    }

    public function store(Request $request){

    }

    public function update(Request $request){

    }

    public function destroyed($author){

    }

    //
}

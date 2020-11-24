<?php

namespace App\Http\Controllers;

use App\Http\Requests\PostingRequest;

class PostingController extends Controller
{
    public function store(PostingRequest $request)
    {
        dd($request->all());
    }
}

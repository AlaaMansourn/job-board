<?php

namespace App\Http\Controllers\api\v1;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Http\Request;

class PostApiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {

        $data = Post::paginate(perPage:25);
        return response($data, 201);



    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $data = Post::create($request->all());
        return response(['data'=>$data,'status'=>200,'message'=>'post return succefully'],201);
        //return response after creation(203)
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}

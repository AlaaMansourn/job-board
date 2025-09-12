<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;


class _PostController extends Controller
{
    public function index(){
        //Eloquent ORM->getAll();
    $data = Post::cursorPaginate(5);


return view("post.index",["posts"=>$data,"pageTitle"=>"blog"]);

    }
    public function show($id){


        $post = Post::findorFail($id);
        return view("post.show",["post"=>$post,"pageTitle"=>$post->title]);

    }

    //create,edit,destroy

    public function create(){


        //go to create form
    }

    public function edit(){




    }

    public function destroy(){




    }

    // public function create(){

    //     $post = Post::factory()->count(10)->create();

    //     return response ("Success",201);
    // }


    // public function delete($id){

    //   Post::destroy($id);

    //   return response("success",203);
    // }
}

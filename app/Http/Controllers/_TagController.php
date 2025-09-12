<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\Tag;
use Illuminate\Http\Request;

class _TagController extends Controller
{
    public function index(){
        //Eloquent ORM->getAll();
    $data = Tag::all();


return view("tag.index",["tags"=>$data,"pageTitle"=>"tag"]);

    }

    public function create(){



        $post = Tag::create([

            "title"=>"engineering",




        ]);

        return redirect ("/tag");
    }

    public function show($id){


        $tag = Tag::findorFail($id);
        return view("tag.show",["tag"=>$tag,"pageTitle"=>$tag->title]);

    }
    public function delete(){




      Tag::destroy(9,10);
    }
    public function testManyToMany(){


        // $post4 = Post::findOrFail("4");
        // $post14 = Post::findOrFail("14");


        // $post4->tags()->attach([1,2]);
        // $post14->tags()->attach([2]);

        // return Response()->json([

            //"post4"=>$post4->tags,
            //"post14"=>$post14->tags




        // ]);

        $tag = Tag::findorFail(2);

        $tag->posts()->attach(3);

        return Response()->json([


            "tags"=>$tag->title,
            "posts"=>$tag->posts


        ]);

    }
}

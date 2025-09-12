<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use Illuminate\Http\Request;

class _CommentController extends Controller
{
    public function index(){
        //Eloquent ORM->getAll();
    $data = Comment::all();


return view("comment.index",["comments"=>$data,"pageTitle"=>"comment"]);

    }

    public function create(){



        // $post = Comment::create([

        //     "author"=>"my_second_comment",
        //     "content"=>"this is third comment on post number 2",
        //     "post_id"=>2




        // ]);

        Comment::factory(10)->create();

        return response (["message"=>"successfull creation","creationCount"=>10],status:201);
    }

    public function show($id){


        $comment = Comment::findorFail($id);
        return view("comment.show",["comment"=>$comment,"pageTitle"=>$comment->author]);

    }


}

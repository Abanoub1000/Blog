<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;

class PostController extends Controller
{
    public function index()
    {
      // $postsFromDB = Post::all();

      // dd($postsFromDB);
      $allPosts = [
        ['id'=> 1,'Title'=>'PHP','Posted By'=>'Bob', 'Created At'=> '2024-06-15'],
        ['id'=> 2,'Title'=>'javaSCRIPT','Posted By'=>'Jemmy', 'Created At'=> '2024-06-15'],
        ['id'=> 3,'Title'=>'CSS','Posted By'=>'Nema', 'Created At'=> '2024-06-15'],
        ['id'=> 4,'Title'=>'Html','Posted By'=>'Mariem', 'Created At'=> '2024-06-15']
      ];
      return view('posts.index',['posts' => $postsFromDB]);
    }

    public function show($postId){
      $userInfo =['name'=> 'Bob','Email'=>'A@b.com', 'Created At'=> 'Thursday 25th of December 1975 02:15:16 PM'];
      $singlePost = ['id'=> 1,'Title'=>'PHP','Description' => 'PHP Is Cool Language','Posted By'=>'Bob', 'Created At'=> 'Thursday 25th of December 1975 02:15:16 PM'];
      return view('posts.show',['post' => $singlePost, 'user'=>$userInfo]);
    }

    public function create(){
      return view('posts.create');
    }

    public function store(){
      $request = request();

        // dd($request);
      $data = request()->all();
      // dd($data);


      return to_route('posts.index');
      //get the user data
      // store the data in data base
      // redirection to posts.index
    }

    public function edit(){
      return view('posts.edit');
    }

    public function update(){
      $title = request()->title;
      $description = request()->description;
      $postCreator = request()->post_creator;

      //get the user data
      // update the user data in database
      //redirection to posts.show

      // dd($title, $description, $postCreator,request()->all());

      return to_route('posts.show',1);
    }

    public function destroy(){

      //delete the post from data base
      //redirectt to posts .index
      return to_route('posts.index');
    }

}

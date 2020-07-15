<?php

namespace App\Http\Controllers;

use App\Blog;
use App\Comment;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    public function commentList(){
        $comments = Comment::leftjoin("blog","blog.id","=","comments.blog_id")
            ->select("blog.*","comments.*")->paginate(8);
        return view("comment.list",[
            "comments" => $comments,
        ]);
    }
    public function editComment($id){
        $comment = Comment::findOrFail($id);
        return view("comment.edit",[
            "comment" => $comment,
        ]);
    }
    public function saveComment($id,Request $request){
        $comment = Comment::findOrFail($id);
        try {
            $comment->update([
                "comment_status" => $request->get("status"),
            ]);
        }catch (\Exception $exception){
            return redirect()->back();
        }
        return redirect()->to("/admin/list-comment");
    }
}

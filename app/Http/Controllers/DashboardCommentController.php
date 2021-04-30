<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Logo;
use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardCommentController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all()->where("logo")->take(1);
        $comments = Comment::paginate(4);
        return view("dashboard.comments", compact("logo", "comments"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\RedirectResponse
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "photo" => "required",
            "comment" => "required",
        ]);

        $comment = new Comment([
            $request->all()
        ]);

        $comment->name = $request->get("name");
        $comment->comment = $request->get("comment");

        if($request->hasFile("photo")) {
            $imageName=time()."-"."comment".".".$request->photo->getClientOriginalExtension();
            $request->photo->move(public_path("img/testimonial"),$imageName);
            $comment->photo=$imageName;
        }

        $comment->save();

        return redirect()->route("dashboard-comment.index")->with("success", "Yeni yorum başarılı bie şekilde eklendi.");
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\RedirectResponse
     */
    public function destroy($id)
    {;
        $comment = Comment::find($id);
        $comment->delete();
        return redirect()->route("dashboard-comment.index")->with("success", "Yorum silindi.");
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\VideoBar;
use Illuminate\Http\Request;

class DashboardVideoBarController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all()->where("logo")->take(1);
        $videos = VideoBar::all()->take(1);
        return view("dashboard.video-bar", compact("logo", "videos"));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        //
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function update(Request $request, $id)
    {
        $video = VideoBar::find($id);

        $video->link = $request->get("link");
        $video->desc = $request->get("desc");

        if($request->hasFile("background")) {
            $imageName=time()."-"."slider".".".$request->background->getClientOriginalExtension();
            $request->background->move(public_path("img/slider"),$imageName);
            $video->background=$imageName;
        }

        $video->save();

        return redirect()->route("dashboard-video-bar.index")->with("success", "Video bar ayarlarınız başarıyla güncellendi.");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

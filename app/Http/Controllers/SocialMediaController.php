<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialMediaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $socials = Social::all();
        $logo = Logo::all()->where("logo")->take(1);
        return view("dashboard.header.social-media", compact("socials", "logo"));
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Http\RedirectResponse|\Illuminate\Http\Response|\Illuminate\Routing\Redirector
     */
    public function update(Request $request, $id)
    {
       $this->validate($request, [
           "facebook" => "required",
           "twitter" => "required",
           "instagram" => "required",
           "linkedin" => "required",
           "youtube" => "required",
       ]);

       $social = Social::find($id);

        $social->facebook = $request->get("facebook");
        $social->twitter = $request->get("twitter");
        $social->instagram = $request->get("instagram");
        $social->linkedin = $request->get("linkedin");
        $social->youtube = $request->get("youtube");

        $social->save();
        return redirect()->route("dashboard-social-media.index")->with("success", "Sosyal medya linkleriniz başarıyla güncellendi.");


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

<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Slider;
use Illuminate\Http\Request;

class DashboardSliderController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all()->where("logo")->take(1);
        $sliders = Slider::all()->take(1);
        return view("dashboard.slider", compact("logo","sliders"));
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
        $slider = Slider::find($id);

        $slider->label1 = $request->get("label1");
        $slider->label2 = $request->get("label2");
        $slider->label3 = $request->get("label3");
        $slider->label4 = $request->get("label4");
        $slider->label5 = $request->get("label5");
        $slider->buttonText = $request->get("buttonText");
        $slider->buttonLink = $request->get("buttonLink");

        if($request->hasFile("image")) {
            $imageName=time()."-"."slider".".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path("img/slider"),$imageName);
            $slider->image=$imageName;
        }

        $slider->save();

        return redirect()->route("dashboard-slider.index")->with("success", "Slider ayarlarınız başarıyla güncellendi.");
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

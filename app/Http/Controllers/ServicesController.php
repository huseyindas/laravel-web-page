<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\Counter;
use App\Models\Logo;
use App\Models\Service;
use App\Models\ServiceDesc;
use App\Models\Slider;
use App\Models\Social;
use Illuminate\Http\Request;

class ServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $socials = Social::all()->take(1);
        $counters = Counter::all()->take(1);
        $services = Service::all();
        $servicesdescs = ServiceDesc::all()->take(1);
        $infos = Contact::all()->take(1);
        $logo = Logo::all()->where("logo")->take(1);
        $flogo = Logo::all()->where("flogo")->take(1);
        $sliders = Slider::all()->take(1);
        $favicon = Logo::all()->where("favicon")->take(1);
        return view('services', compact("socials", "counters", "services", "servicesdescs", "infos", "logo", "flogo", "sliders", "favicon"));
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
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}

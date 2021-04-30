<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use Illuminate\Http\Request;

class LogoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all()->where("logo")->take(1);
        $flogo = Logo::all()->where("flogo")->take(1);
        $favicon = Logo::all()->where("favicon")->take(1);
        return view("dashboard.header.logo", compact("logo", "flogo", "favicon"));
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
     * @return string
     */
    public function update(Request $request, $id)
    {
        $logo = Logo::find($id);

        if($request->hasFile("image")) {
            $imageName=time()."-"."logo".".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path("img/logo"),$imageName);
            $logo->logo=$imageName;
        }

        $logo->save();
        return redirect()->route("dashboard-logo.index")->with("success", "Header logonuz başarılı bir şekilde değiştirildi.");

    }

    public function updateFooterLogo($request)
    {

        dd($request->all);


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

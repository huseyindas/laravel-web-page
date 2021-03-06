<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\RefDesc;
use App\Models\Referance;
use Illuminate\Http\Request;

class DashboardReferanceController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all()->where("logo")->take(1);
        $referances = Referance::paginate(4);
        $refdescs = RefDesc::all()->take(1);
        return view("dashboard.referances", compact("logo", "referances", "refdescs"));
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
     * @return \Illuminate\Http\RedirectResponse
     */
    public function store(Request $request)
    {
        $this->validate($request, [
            "name" => "required",
            "logo" => "required",
            "desc" => "required",
        ]);

        $referance = new Referance([
            $request->all()
        ]);

        $referance->name = $request->get("name");
        $referance->desc = $request->get("desc");

        if($request->hasFile("logo")) {
            $imageName=time()."-"."ref".".".$request->logo->getClientOriginalExtension();
            $request->logo->move(public_path("img/ref"),$imageName);
            $referance->logo=$imageName;
        }

        $referance->save();

        return redirect()->route("dashboard-referances.index")->with("success", "Yeni referans başarılı bie şekilde eklendi.");
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
    {
        $referance = Referance::find($id);
        $referance->delete();
        return redirect()->route("dashboard-referances.index")->with("success", "Referans silindi.");
    }
}

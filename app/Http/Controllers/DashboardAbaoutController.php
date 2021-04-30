<?php

namespace App\Http\Controllers;

use App\Models\Abaout;
use App\Models\Logo;
use Illuminate\Http\Request;

class DashboardAbaoutController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $abaouts = Abaout::all()->take(1);
        $logo = Logo::all()->where("logo")->take(1);
        return view("dashboard.abaout", compact("abaouts", "logo"));
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
        $this->validate($request, [
            "head_home" => "required",
            "desc_home" => "required",
            "head1" => "required",
            "mini_desc1" => "required",
            "head2" => "required",
            "mini_desc2" => "required",
        ]);

        $abaout = Abaout::find($id);

        $abaout->head_home = $request->get("head_home");
        $abaout->desc_home = $request->get("desc_home");
        $abaout->head1 = $request->get("head1");
        $abaout->mini_desc1 = $request->get("mini_desc1");
        $abaout->head2 = $request->get("head2");
        $abaout->mini_desc2 = $request->get("mini_desc2");

        $abaout->save();
        return redirect()->route("dashboard-abaout.index")->with("success", "Hakkımızda bilgileriniz başarıyla güncellendi.");

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

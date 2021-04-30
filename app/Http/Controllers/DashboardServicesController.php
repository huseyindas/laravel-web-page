<?php

namespace App\Http\Controllers;

use App\Models\Counter;
use App\Models\Logo;
use App\Models\Service;
use Illuminate\Http\Request;

class DashboardServicesController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $services = Service::paginate(4);
        $logo = Logo::all()->where("logo")->take(1);
        return view("dashboard.services", compact("services", "logo"));
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
            "icon" => "required",
            "name" => "required",
            "desc" => "required",
        ]);

        $service = new Service([
            $request->all()
        ]);

        $service->icon = $request->get("icon");
        $service->name = $request->get("name");
        $service->desc = $request->get("desc");

        $service->save();

        return redirect()->route("dashboard-services.index")->with("success", "Yeni servis başarıyla eklendi.");
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
        $service = Service::find($id);
        $service->delete();
        return redirect()->route("dashboard-services.index")->with("success", "Servis silindi.");
    }
}

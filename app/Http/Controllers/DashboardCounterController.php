<?php

namespace App\Http\Controllers;

use App\Models\Abaout;
use App\Models\Counter;
use App\Models\Logo;
use App\Models\Map;
use Illuminate\Http\Request;

class DashboardCounterController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $counters = Counter::all();
        $logo = Logo::all()->where("logo")->take(1);
        return view("dashboard.counter", compact("counters", "logo"));
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
    public function store(Request $request, $id)
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
            "num1" => "required",
            "desc1" => "required",
            "num2" => "required",
            "desc2" => "required",
            "num3" => "required",
            "desc3" => "required",
            "num4" => "required",
            "desc4" => "required",
        ]);

        $counter = Counter::find($id);

        $counter->num1 = $request->get("num1");
        $counter->desc1 = $request->get("desc1");
        $counter->num2 = $request->get("num2");
        $counter->desc2 = $request->get("desc2");
        $counter->num3 = $request->get("num3");
        $counter->desc3 = $request->get("desc3");
        $counter->num4 = $request->get("num4");
        $counter->desc4 = $request->get("desc4");

        $counter->save();

        return redirect()->route("dashboard-counter.index")->with("success", "Sayaç bilgileriniz başarıyla güncellendi.");
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

<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardProjectsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $projects = Project::paginate(4);
        $logo = Logo::all()->where("logo")->take(1);
        return view("dashboard.projects", compact("logo", "projects"));
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
            "desc" => "required",
            "image" => "required",
        ]);

        $project = new Project([$request->all()]);

        $project->name = $request->get("name");
        $project->desc = $request->get("desc");

        if($request->hasFile("image")) {
            $imageName=time()."-"."project".".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path("img/project"),$imageName);
            $project->image=$imageName;
        }

        $project->save();
        return redirect()->route("dashboard-projects.index")->with("success", "Proje başarılı bir şekilde eklendi.");
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
        $project = Project::find($id);
        $project->delete();
        return redirect()->route("dashboard-projects.index")->with("success", "Proje silindi.");
    }
}

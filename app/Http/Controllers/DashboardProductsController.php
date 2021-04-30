<?php

namespace App\Http\Controllers;

use App\Models\Logo;
use App\Models\Product;
use App\Models\Project;
use Illuminate\Http\Request;

class DashboardProductsController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $logo = Logo::all()->where("logo")->take(1);
        $products = Product::paginate(4);
        return view("dashboard.products", compact("logo", "products"));
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

        $product = new Product([$request->all()]);

        $product->name = $request->get("name");
        $product->desc = $request->get("desc");

        if($request->hasFile("image")) {
            $imageName=time()."-"."product".".".$request->image->getClientOriginalExtension();
            $request->image->move(public_path("img/products"),$imageName);
            $product->image=$imageName;
        }

        $product->save();
        return redirect()->route("dashboard-products.index")->with("success", "Ürün başarılı bir şekilde eklendi.");
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
        $product = Product::find($id);
        $product->delete();
        return redirect()->route("dashboard-products.index")->with("success", "Ürün silindi.");
    }
}

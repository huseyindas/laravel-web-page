<?php

namespace App\Http\Controllers;

use App\Models\ContactForm;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class DashboardContactFormController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
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
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $data = array
        (
            'name'=>$request->name,
            'email'=>$request->email,
            'subject'=>$request->subject,
            'messageText'=>$request->messageText
        );


        Mail::send('email', $data, function ($message) use ($request){
            $message->subject ('Labor Mühendislik sitenizden mail var!');
            $message->from ('info@labormuhendislik.com', 'Labor Mühendislik');
            $message->to('husseyindas@gmail.com', 'Labor Mühendislik');
        });

        return redirect('/contact')->with('success', "Mailinizi aldık, en kısa sürede geri döneceğiz.");
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
        $contact = ContactForm::find($id);

        $contact->heading = $request->get("heading");
        $contact->desc = $request->get("desc");

        $contact->save();

        return redirect()->route("dashboard-contact.index")->with("success", "İletişim formu bölümü başarıyla güncellendi.");
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

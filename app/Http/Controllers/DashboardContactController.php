<?php

namespace App\Http\Controllers;

use App\Models\Contact;
use App\Models\ContactForm;
use App\Models\Counter;
use App\Models\Logo;
use App\Models\Map;
use Illuminate\Http\Request;

class DashboardContactController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Contracts\Foundation\Application|\Illuminate\Contracts\View\Factory|\Illuminate\Contracts\View\View|\Illuminate\Http\Response
     */
    public function index()
    {
        $maps = Map::all()->take(1);
        $contacts = Contact::all()->take(1);
        $logo = Logo::all()->where("logo")->take(1);
        $contactForms = ContactForm::all()->take(1);
        return view("dashboard.contact", compact("contacts", "maps", "logo", "contactForms"));
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

        $contact = Contact::find($id);

        $contact->head1 = $request->get("head1");
        $contact->mail1 = $request->get("mail1");
        $contact->desc1 = $request->get("desc1");
        $contact->head2 = $request->get("head2");
        $contact->mail2 = $request->get("mail2");
        $contact->desc2 = $request->get("desc2");
        $contact->head3 = $request->get("head3");
        $contact->mail3 = $request->get("mail3");
        $contact->desc3 = $request->get("desc3");
        $contact->address = $request->get("address");
        $contact->country = $request->get("country");
        $contact->phone1 = $request->get("phone1");
        $contact->phone2 = $request->get("phone2");

        $contact->save();

        return redirect()->route("dashboard-contact.index")->with("success", "İletişim bilgileriniz başarıyla güncellendi.");
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

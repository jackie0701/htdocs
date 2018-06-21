<?php

namespace SocialeKaart\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;
use SocialeKaart\Organisatie;
use SocialeKaart\Thema;


class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */

    public function index()
    {
        $organisatie = DB::table('organisaties')->orderBy('naam', 'asc')->paginate(12);
        return view('organisatie',compact('organisatie', $organisatie));
    }

    public function store(array $organisatie)
    {
        return Organisatie::make($organisatie, [
            'naam' => 'required|string|max:255',
            'adres' => 'required|string|email|max:255|unique:users',
            'contactpersoon' => 'required|string|max:255',
            'gemeente' => 'required|string',
            'telefoonnummer' => 'required|string',
            'beschrijving' => 'required|string',
        ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param User $organisatie
     * @return \Illuminate\Http\Response
     */
    public function edit(Organisatie $organisatie)
    {
        return view('editOrganisatie',compact('organisatie'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \SocialeKaart\User  $organisatie
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $organisatie)
    {
        $organisatie = Organisatie::find($organisatie);
        $organisatie->naam = $request->get('naam');
        $organisatie->adres = $request->get('adres');
        $organisatie->contactpersoon = $request->get('contactpersoon');
        $organisatie->gemeente = $request->get('gemeente');
        $organisatie->telefoonnummer = $request->get('telefoonnummer');
        $organisatie->beschrijving = $request->get('beschrijving');
        $organisatie->update();
        return redirect('organisatie')
            ->with('status', 'Succesvol aangepast!');
    }

    public function show(){
        return view('addOrganisatie', compact('organisatie'));
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \SocialeKaart\organisatie  $organisatie
     * @return \Illuminate\Http\Response
     */
    public function destroy($organisatie)
    {
        $user = new Organisatie();
        $organisatie = $user->find($organisatie);
        $organisatie->delete();

        // redirect
        return redirect('organisatie')->with('status', 'Succesvol gedeleted');
    }
    public function create(Request $request)
    {
        $organisatie = new Organisatie();
        $organisatie->naam = ucfirst($request->get('naam'));
        $organisatie->adres = ucfirst($request->get('adres'));
        $organisatie->contactpersoon = ucfirst($request->get('contactpersoon'));
        $organisatie->gemeente = ucfirst($request->get('gemeente'));
        $organisatie->telefoonnummer = $request->get('telefoonnummer');
        $organisatie->beschrijving = ucfirst($request->get('beschrijving'));
        $organisatie->save();
        return redirect('organisatie')->with('status', 'Succesvol aangemaakt');
    }
}

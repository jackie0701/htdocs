<?php

namespace SocialeKaart\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Input;
use SocialeKaart\Organisatie;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\View;

class OrganisatieController extends Controller
{
    // organisaties ophalen
    // Query
    /*SELECT 'leefgebied'.*, 'organisaties'.'organisatie_id', 'organisaties'.'naam', 'organisaties'.'adres', 'organisaties'.'contactpersoon', 'organisaties'.'gemeente', 'organisaties'.'telefoonnummer', 'organisaties'.'beschrijving'
    from 'organisaties'
    join 'problematiek' on 'problematiek'.'organisatie_id' = 'organisaties'.'organisatie_id'
    join 'thema' on 'thema'.'thema_id' = 'problematiek'.'thema_id'
    join 'koppel_thema_leef' on 'koppel_thema_leef'.'thema_id' = 'thema'.'thema_id'
    join 'leefgebied' on 'leefgebied'.'leefgebied_id' = 'koppel_thema_leef'.'leefgebied_id'
    WHERE 'problematiek'.'thema_id' = 6;*/

    public function werkEnDagBesteding()
    {
       $organisaties = DB::table('leefgebied')->select('leefgebied', 'organisaties.organisatie_id', 'organisaties.naam', 'organisaties.adres',
            'organisaties.contactpersoon', 'organisaties.gemeente', 'organisaties.telefoonnummer', 'organisaties.beschrijving', 'thema')
            ->from('organisaties')
            ->join('problematiek', 'problematiek.organisatie_id', '=', 'organisaties.organisatie_id')
            ->join('thema', 'thema.thema_id', '=', 'problematiek.thema_id')
            ->join('koppel_thema_leef', 'koppel_thema_leef.thema_id', '=', 'thema.thema_id')
            ->join('leefgebied', 'leefgebied.leefgebied_id', '=', 'koppel_thema_leef.leefgebied_id')
            ->whereIn('leefgebied.leefgebied_id', [1])
            ->orderBy('naam', 'asc')
            ->distinct()->simplePaginate(7);

        return view('werk', compact('organisaties'));
    }

    public function inkomen()
    {
        $organisaties = DB::table('leefgebied')->select('leefgebied', 'organisaties.organisatie_id', 'organisaties.naam', 'organisaties.adres',
            'organisaties.contactpersoon', 'organisaties.gemeente', 'organisaties.telefoonnummer', 'organisaties.beschrijving', 'thema')
            ->from('organisaties')
            ->join('problematiek', 'problematiek.organisatie_id', '=', 'organisaties.organisatie_id')
            ->join('thema', 'thema.thema_id', '=', 'problematiek.thema_id')
            ->join('koppel_thema_leef', 'koppel_thema_leef.thema_id', '=', 'thema.thema_id')
            ->join('leefgebied', 'leefgebied.leefgebied_id', '=', 'koppel_thema_leef.leefgebied_id')
            ->whereIn('leefgebied.leefgebied_id', [2])
            ->orderBy('naam', 'asc')
            ->distinct()->paginate(7);
        return view('inkomen', compact('organisaties'));
    }

    public function onderwijs()
    {
        $ $organisaties = DB::table('leefgebied')->select('leefgebied', 'organisaties.organisatie_id', 'organisaties.naam', 'organisaties.adres',
            'organisaties.contactpersoon', 'organisaties.gemeente', 'organisaties.telefoonnummer', 'organisaties.beschrijving', 'thema')
            ->from('organisaties')
            ->join('problematiek', 'problematiek.organisatie_id', '=', 'organisaties.organisatie_id')
            ->join('thema', 'thema.thema_id', '=', 'problematiek.thema_id')
            ->join('koppel_thema_leef', 'koppel_thema_leef.thema_id', '=', 'thema.thema_id')
            ->join('leefgebied', 'leefgebied.leefgebied_id', '=', 'koppel_thema_leef.leefgebied_id')
            ->whereIn('leefgebied.leefgebied_id', [3])
            ->orderBy('naam', 'asc')
            ->distinct()->paginate(7);
        return view('onderwijs', compact('organisaties'));

    }

    public function gezondheid()
    {
        $organisaties = DB::table('leefgebied')->select('leefgebied', 'organisaties.organisatie_id', 'organisaties.naam', 'organisaties.adres',
            'organisaties.contactpersoon', 'organisaties.gemeente', 'organisaties.telefoonnummer', 'organisaties.beschrijving', 'thema')
            ->from('organisaties')
            ->join('problematiek', 'problematiek.organisatie_id', '=', 'organisaties.organisatie_id')
            ->join('thema', 'thema.thema_id', '=', 'problematiek.thema_id')
            ->join('koppel_thema_leef', 'koppel_thema_leef.thema_id', '=', 'thema.thema_id')
            ->join('leefgebied', 'leefgebied.leefgebied_id', '=', 'koppel_thema_leef.leefgebied_id')
            ->whereIn('leefgebied.leefgebied_id', [4])
            ->orderBy('naam', 'asc')
            ->distinct()->paginate(7);
        return view('gezondheid', compact('organisaties'));
    }

    public function sociaalfunctioneren()
    {
        $organisaties = DB::table('leefgebied')->select('leefgebied', 'organisaties.organisatie_id', 'organisaties.naam', 'organisaties.adres',
            'organisaties.contactpersoon', 'organisaties.gemeente', 'organisaties.telefoonnummer', 'organisaties.beschrijving', 'thema')
            ->from('organisaties')
            ->join('problematiek', 'problematiek.organisatie_id', '=', 'organisaties.organisatie_id')
            ->join('thema', 'thema.thema_id', '=', 'problematiek.thema_id')
            ->join('koppel_thema_leef', 'koppel_thema_leef.thema_id', '=', 'thema.thema_id')
            ->join('leefgebied', 'leefgebied.leefgebied_id', '=', 'koppel_thema_leef.leefgebied_id')
            ->whereIn('leefgebied.leefgebied_id', [5])
            ->orderBy('naam', 'asc')
            ->distinct()->paginate(7);
        return view('werk', compact('organisaties'));
    }

    public function show($organisaties)
    {
        $organisaties = Organisatie::all()->find($organisaties);

        return View::make('zoeken', compact('organisaties'));
    }
}

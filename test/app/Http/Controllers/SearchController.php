<?php


namespace App\Http\Controllers;


use Illuminate\Http\Request;

use Illuminate\Support\Facades\DB;


class SearchController extends Controller
{
    public function index()

{

    return view('search.search');

}


    public function search(Request $request)

    {

        if ($request->ajax()) {

            $output = "";

            $products = DB::table('products')->where('title', 'LIKE', '%' . $request->search . "%")->get();

            if ($products) {
                foreach ($products as $key) {

                    $output .= '<tr>' .

                        '<td>' . $key->id . '</td>' .

                        '<td>' . $key->title . '</td>' .

                        '<td>' . $key->description . '</td>' .

                        '<td>' . $key->price . '</td>' .

                        '</tr>';

                }


                return Response($output);


            }


        }

        return view('search');
    }

}
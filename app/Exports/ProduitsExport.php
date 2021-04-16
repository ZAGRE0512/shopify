<?php

namespace App\Exports;

use App\Models\Produit;
use Illuminate\View\View;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\FromView;

class ProduitsExport implements FromView
{
    /**
    * @return \Illuminate\Support\Collection
    */
//    public function collection()
//    {
//        return Produit::all();
//    }

    public function view():View
    {
        return view('partials._list-produits',['produits'=>Produit::all()]);
    }
}
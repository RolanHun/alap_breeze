<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class kategoriaController extends Controller
{
    public function kategoria_listaz(){
        $kategoriak = DB::table('kategoria')
        ->select('id','kategorianev')
        ->distinct()
        ->get();
        return  $kategoriak;
    }
}

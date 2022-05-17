<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class tesztController extends Controller
{
    public function tesztek_listaz(){
        $tesztek = DB::table('teszt')
        ->select('id','kerdes','v1','v2','v3','v4', 'helyes', 'kategoriaId')
        ->distinct()
        ->get();
        return  $tesztek;
    }
    public function tesztekKat_listaz($id){
        $tesztekKat = DB::table('teszt')
        ->select('id','kerdes','v1','v2','v3','v4', 'helyes', 'kategoriaId')
        ->where('kategoriaId','LIKE',$id)
        ->distinct()
        ->get();
        return  $tesztekKat;
    }
}

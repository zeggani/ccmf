<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Excel;

class ImportController extends Controller
{

    public function import(Request $request){
      if($request->file){
        $path = $request->file('file')->store('imports');
          Excel::import(new  \App\ClientsImport, $path);
      }
    return view("import");
    }


        public function export(Request $request){
          return Excel::download(new \App\ClientsExport, 'clients.xlsx');

        }


}

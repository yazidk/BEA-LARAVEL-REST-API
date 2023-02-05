<?php

namespace App\Http\Controllers\API;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Fiche_tenue_compte;
use Storage;

class Fiche_tenue_compteController extends Controller
{
    public function store (Request $request){

        $fiche_tenue = new Fiche_tenue_compte ;
       
        $fiche_tenue->compte_bancaire_num =  $request->input('compte_bancaire_num');
        if($request->hasFile('uploadImageFicheTenue')){
            $path =  $request->file('uploadImageFicheTenue')->store('/images');    
        }
        $fiche_tenue->uploadImageFicheTenue = $path; 
        $fiche_tenue->save(); 
        
        return response()->json([
            'status' => 200 ,
            'message' => 'Vous avez Ajouté une nouvelle fiche',
            'fiche_tenue' => $fiche_tenue
        ]);
       
       
      
      
    }

    


}

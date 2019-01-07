<?php

namespace App;

use App\Client;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class ClientsImport implements ToCollection , WithHeadingRow
{
    public function collection(Collection $rows)
    {


      // dump($rows);
        foreach ($rows as $row)
        {

             Client::create([

                'lheure_client' => $row['lheure_client'],
                'createby' => $row['createby'],
                'nom' => $row['nom' ],
                'prenom' => $row['prenom'],
                'datenaiss' => $row['datenaiss'],
                'tel' => $row['tel'],
                'tel2' => $row['tel2'],
                'email' => $row['email'],
                'adresse' => $row['adresse'],
                'cp_client' => $row['cp_client'],
                'ville' => $row['ville'],
                'regime' => $row['regime'],
                'cie' => $row['cie'],
                'nom_conjoint' => $row['nom_conjoint'],
                'prenom_conjoint' => $row['prenom_conjoint'],
                'datenaiss_conjoint' => $row['datenaiss_conjoint'],
                'regime_conjoint' => $row['regime_conjoint'],
                'Npolice_resilier' => $row['Npolice_resilier'],
                'nss_conjoint' => $row['nss_conjoint'],
                'IBAN' => $row['IBAN'],
                'commentaire' => $row['commentaire'],
             ]);
        }
    }


    public function headingRow(): int
   {
       return 1;
   }
}

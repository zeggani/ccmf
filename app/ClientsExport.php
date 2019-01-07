<?php

namespace App;

use App\Client;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;

class ClientsExport implements FromCollection, WithHeadings,WithMapping
{

  public function collection()
      {
          return Client::all();
      }


      /**
    * @var Invoice $invoice
    */
    public function map($client): array
    {
        return [
            $client->lheure_client,
            $client->createby,
            $client->nom,
            $client->prenom,
            $client->datenaiss,
            $client->tel,
            $client->tel2,
            $client->email,
            $client->adresse,
            $client->cp_client,
            $client->ville,
            $client->regime,
            $client->cie,
            $client->nom_conjoint,
            $client->prenom_conjoint,
            $client->datenaiss_conjoint,
            $client->regime_conjoint,
            $client->Npolice_resilier,
            $client->nss_conjoint,
            $client->IBAN,
            $client->commentaire,
        ];
    }


      public function headings(): array
        {
            return [
                'lheure_client',
                'createby',
                'nom',
                'prenom',
                'datenaiss',
                'tel',
                'tel2',
                'email',
                'adresse',
                'cp_client',
                'ville',
                'cie',
                'regime',
                'nom_conjoint',
                'prenom_conjoint',
                'datenaiss_conjoint',
                'regime_conjoint',
                'Npolice_resilier',
                'nss_conjoint',
                'IBAN',
                'commentaire',
            ];
        }
}

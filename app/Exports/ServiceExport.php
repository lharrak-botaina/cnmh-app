<?php

namespace App\Exports;

use App\Models\Service;
use Maatwebsite\Excel\Concerns\FromCollection;

class ServiceExport implements FromCollection
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return Service::all();
    }
    public function headings(): array
    {
        return [
            'Nombre',
            'Nom',
            'Description',
            // and so on...
        ];
    }
}

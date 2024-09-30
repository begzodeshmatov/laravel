<?php

namespace App\Exports;

use App\Kurs;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExporKurs implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Ma'lumotlarni qaytarish
        return Kurs::select('id', 'name','title','image')->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'id',
            'name',
            'title',
            'image',
        ];
    }
}

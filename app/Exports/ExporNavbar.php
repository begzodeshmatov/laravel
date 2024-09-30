<?php

namespace App\Exports;

use App\Navbar;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class ExporNavbar implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        // Ma'lumotlarni qaytarish
        return Navbar::select('id', 'name')->get();
    }

    /**
     * @return array
     */
    public function headings(): array
    {
        return [
            'id',
            'name',
        ];
    }
}

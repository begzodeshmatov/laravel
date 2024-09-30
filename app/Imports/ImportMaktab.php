<?php

namespace App\Imports;

use App\Maktab;
use Maatwebsite\Excel\Concerns\ToModel;

class ImportMaktab implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Maktab([
            'name' => $row[0],
            'title' => $row[1],
            'image' => $row[2],
        ]);
    }
}

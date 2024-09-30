<?php

namespace App\Imports;

use App\Banner;
use Maatwebsite\Excel\Concerns\ToModel;

class ImporBanner implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Banner([
            'name' => $row[0],
            'title' => $row[1],
            'image' => $row[2],
        ]);
    }
}

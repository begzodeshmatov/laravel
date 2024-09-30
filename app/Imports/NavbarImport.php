<?php

namespace App\Imports;

use App\Navbar;
use Maatwebsite\Excel\Concerns\ToModel;

class NavbarImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Navbar([
            'name'    => isset($row[0]) ? $row[0] : null,
        ]);
    }
}

<?php

namespace App\Imports;

use App\User;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class UsersImport implements ToModel
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new User([
            'name'    => isset($row[0]) ? $row[0] : null,
            'image'    => isset($row[1]) ? $row[1] : null,
            'file'    => isset($row[2]) ? $row[2] : null,
            'email'    => isset($row[3]) ? $row[3] : null,
            'password'    => isset($row[4]) ? $row[4] : null,
          
        ]);
    }
}

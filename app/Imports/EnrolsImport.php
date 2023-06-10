<?php

namespace App\Imports;

use App\Models\Enrol;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EnrolsImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        $exists = Enrol::query()->where('scn',$row['scn'])->first();
        if ($exists) {
            return null;
        }
        return new Enrol([
            'name'          => $row['name'],
            'year_of_call'  => $row['year'],
            'scn'           => $row['scn'],
            'email'         => $row['email'] ?? NULL,
            'phone'         => $row['phone'] ?? NULL,
            'address'       => $row['address'] ?? NULL,
        ]);
    }
}

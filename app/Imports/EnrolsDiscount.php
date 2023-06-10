<?php

namespace App\Imports;

use App\Models\Discount;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EnrolsDiscount implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new Discount([
            'scn'           => $row['scn'],
            'percent_off'   => $row['percent_off'] ?? 50,
            'expired_at'    => $row['expired_at']  ?? '2023-05-28 23:59:59',
        ]);
    }
}

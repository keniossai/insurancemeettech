<?php

namespace App\Imports;

use App\Models\Enrol;
use App\Models\User;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class SponsoredDelegateImport implements ToCollection, WithHeadingRow
{
    /**
    * @param Collection $collection
    */
    public function collection(Collection $rows)
    {

        foreach ($rows as $row)
        {
            $enrol = Enrol::whereScn($row['scn'])->with('user')->first();

            if(!$enrol) {
                continue;
            }

            $enrol->user->update([
                'category_id' => 15
            ]);

        }
    }
}

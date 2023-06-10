<?php

namespace App\Http\Controllers\Traits;

use Mpdf\Mpdf;
use Mpdf\Output\Destination;

trait OutputsPDF
{

    public function pdf($html, $filename, $config = [])
    {

        $mpdf = new Mpdf($config);


        $mpdf->WriteHTML($html);

        return @$mpdf->Output($filename.'.pdf', Destination::INLINE);
    }
}

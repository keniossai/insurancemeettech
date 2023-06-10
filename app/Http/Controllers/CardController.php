<?php

namespace App\Http\Controllers;

use App\Models\User;
use Illuminate\Http\Request;
use App\Http\Controllers\Traits\OutputsPDF;


class CardController extends Controller
{
    use OutputsPDF;

    public function generate2()
    {
        $users = User::with(['category', 'enrol', 'branch'])
            ->whereHas('payments',
                fn($query) => $query->paid()
                    ->whereRelation('transaction', 'reference', 'not like', '%group%')
            )
            ->where('category_id', '!=', 3)
            ->where('branch_id', '=', 58)
            ->paginate(900);


        $html = view('cards.idcard', compact('users'));

        return $this->pdf($html, "_branch", ['format' => [530, 747]]);
    }


    public function generate(Request $request)
    {
        $path = $request->file('doc')->getRealPath();
        $remove_bg = $request->remove_bg;

        $users = array_map('str_getcsv', file($path));

        $html = view('cards.idcard', compact('users', 'remove_bg'));

        return $this->pdf($html, "_branch", ['format' => [530, 747]]);

    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Country;
use Illuminate\Http\Request;

class CountryController extends Controller
{
    public function list(Request $request)
    {
        return [
            'results' => Country::select(['id', 'name as text'])
            ->where('name', 'LIKE', '%' .$request->input('term').'%')
            ->take(20)
            ->get()
        ];
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Maintext;
use Illuminate\View\View;

class MaintextController extends Controller
{
    public function show(string $url): View
    {
        return view('pages.show', ['page' => Maintext::where('url', $url)->firstOrFail()]);
    }
}

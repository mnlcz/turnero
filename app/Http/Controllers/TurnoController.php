<?php

namespace App\Http\Controllers;

use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;
use App\Models\Turno;

class TurnoController extends Controller
{
    public function create(): View
    {
        $proxTurno = count(Turno::all()) + 1;
        return view('home', ['proxTurno' => $proxTurno]);
    }

    public function store(Request $request): RedirectResponse
    {
        $data = $request->validate([
            'type' => 'required|string'
        ]);
        Turno::create($data);
        return redirect(route('turno.index'));
    }
}

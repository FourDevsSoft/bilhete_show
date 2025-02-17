<?php

namespace App\Http\Controllers;

use App\Models\Eventos;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class EventosController extends Controller
{
    //


    public function index(){

    }


    public function create(): View {
        return view('eventos.create');
    }


    // public function destroy($id)
    // {
    //     $evento = Eventos::find($id);
    
    //     if (!$evento) {
    //         return redirect()->back()->with('error', 'Evento não encontrado.');
    //     }
    
    //     $evento->delete();
    
    //     return redirect()->route('eventos.index')->with('success', 'Evento excluído com sucesso.');
    // }
    
}

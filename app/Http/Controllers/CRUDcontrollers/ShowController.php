<?php

namespace App\Http\Controllers\CRUDcontrollers;

use App\Http\Controllers\Controller;
use App\Models\AP;
use App\Models\Link;
use App\Models\Point;
use App\Models\Pop;
use App\Models\User;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class ShowController extends Controller
{
    public function show_AP(AP $ap): View {
        if(!$ap){
           return redirect()->back();
        }
        return view('project.show.Ap', ['ap' => $ap]);
    }

    public function show_Point(Point $point): View {
        if(!$point){
            return redirect()->back();
         }
        return view('project.show.Point', ['point' => $point]);
    }

    public function show_Pop(Pop $pop): View {
        if(!$pop){
            return redirect()->back();
         }
        return view('project.show.Pop', ['pop' => $pop]);
    }

    public function show_Link(Link $link): View {
        if(!$link){
            return redirect()->back();
         }
        return view('project.show.Link', ['link' => $link]);
    }

    public function show_User(User $user): View {
        if(!$user){
            return redirect()->back();
         }
        return view('project.show.User', ['user' => $user]);
    }

    public function index_AP(): View {
        return view('project.index.APs');
    }

    public function index_Pop(): View {
        return view('project.index.Pops');
    }

    public function index_Point(): View {
        return view('project.index.Points');
    }

    public function index_Link(): View {
        return view('project.index.Links');
    }

    public function index_User(): View {
        return view('project.index.Users');
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\AP;
use App\Models\Link;
use App\Models\Point;
use App\Models\Pop;
use Illuminate\Contracts\View\View;

class HomeController extends Controller
{
    public function get_home(): View {
        return view('home');
    }

    public function get_create_AP(): View {
        return view('project.create.Ap');
    }

    public function get_create_Point(): View {
        return view('project.create.Point');
    }
    public function get_create_Pop(): View {
        return view('project.create.Pop');
    }
    public function get_create_Link(): View {
        return view('project.create.Link');
    }

    public function get_edit_AP(AP $ap): View {
        return view('project.edit.Ap', ['ap' => $ap]);
    }

    public function get_edit_Point(Point $point): View {
        return view('project.edit.Point', ['point' => $point]);
    }
    public function get_edit_Pop(Pop $pop): View {
        return view('project.edit.Pop', ['pop' => $pop]);
    }
    public function get_edit_Link(Link $link): View {
        return view('project.edit.Link', ['link' => $link]);
    }
}

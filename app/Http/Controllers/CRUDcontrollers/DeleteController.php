<?php

namespace App\Http\Controllers\CRUDcontrollers;

use App\Http\Controllers\Controller;
use App\Models\AP;
use App\Models\Link;
use App\Models\Point;
use App\Models\Pop;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class DeleteController extends Controller
{
    public function delete_AP(Request $request, AP $ap): RedirectResponse {
        $request->validate([

        ]);

        AP::create([

        ]);

        return redirect(route('home'));
    }

    public function delete_Point(Request $request, Point $point): RedirectResponse {
        $request->validate([

        ]);

        AP::create([

        ]);

        return redirect(route('home'));
    }

    public function delete_Pop(Request $request, Pop $pop): RedirectResponse {
        $request->validate([

        ]);

        AP::create([

        ]);

        return redirect(route('home'));
    }

    public function delete_Link(Request $request, Link $link): RedirectResponse {
        $request->validate([

        ]);

        AP::create([

        ]);

        return redirect(route('home'));
    }
}

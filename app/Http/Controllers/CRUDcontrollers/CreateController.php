<?php

namespace App\Http\Controllers\CRUDcontrollers;

use App\Http\Controllers\Controller;
use App\Models\AP;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;


class CreateController extends Controller
{
    public function create_AP(Request $request): RedirectResponse {
        $request->validate([

        ]);

        AP::create([

        ]);

        return redirect(route('home'));
    }

    public function create_Pop(Request $request): RedirectResponse {
        $request->validate([

        ]);

        AP::create([

        ]);

        return redirect(route('home'));
    }

    public function create_Point(Request $request): RedirectResponse {
        $request->validate([

        ]);

        AP::create([

        ]);

        return redirect(route('home'));
    }

    public function create_Link(Request $request): RedirectResponse {
        $request->validate([

        ]);

        AP::create([

        ]);

        return redirect(route('home'));
    }
}

<?php

namespace App\Http\Controllers\CRUDcontrollers;

use App\Http\Controllers\Controller;
use App\Models\AP;
use App\Models\Link;
use App\Models\Point;
use App\Models\Pop;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;

class EditController extends Controller
{
    public function edit_AP(Request $request, AP $ap): RedirectResponse {
        $request->validate([
            'name'=>'required|unique:a_p_s,name'
        ]);

        $ap->update([
            'name' => $request->name
        ]);

        return redirect(route('home'));
    }

    public function edit_Point(Request $request, Point $point): RedirectResponse {
        $request->validate([
            'name'=>'required|unique:points,name',
            'ap_id'=>'required|unique:links,ap_id'
        ]);

        $point->update([
            'name' => $request->name,
        ]);

        Link::where('point_id', $point->id)->update([
            'ap_id'=>$request->ap_id
        ]);

        return redirect(route('home'));
    }

    public function edit_Pop(Request $request, Pop $pop): RedirectResponse {
        $request->validate([
            'name'=>'required|unique:pops,name'
        ]);

        $pop->update([
            'name'=>$request->name
        ]);

        return redirect(route('home'));
    }

    public function edit_Link(Request $request, Link $link): RedirectResponse {
        $request->validate([

        ]);

        AP::create([

        ]);

        return redirect(route('home'));
    }
}

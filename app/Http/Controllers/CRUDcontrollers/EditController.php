<?php

namespace App\Http\Controllers\CRUDcontrollers;

use App\Http\Controllers\Controller;
use App\Models\AP;
use App\Models\Link;
use App\Models\Point;
use App\Models\Pop;
use App\Models\User;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class EditController extends Controller
{
    public function edit_AP(Request $request, AP $ap): RedirectResponse {
        $request->validate([
            'name'=>'required|unique:a_p_s,name,' . $ap->id,
            'pop_id'=>'required'
        ]);

        $ap->update([
            'name' => $request->name,
            'pop_id'=> $request->pop_id
        ]);

        return redirect(route('index.AP'));
    }

    public function edit_Point(Request $request, Point $point): RedirectResponse {
        $request->validate([
            'name'=>'required|unique:points,name,' . $point->id,
            'ap_id'=>'required|unique:links,ap_id'
        ]);

        $point->update([
            'name' => $request->name,
        ]);

        $link = Link::where('point_id', $point->id)->first();

        if($link == null){
            Link::create([
                'ap_id' => $request->ap_id,
                'point_id' => $point->id
            ]);
        } else {
            $link->update([
                'ap_id' => $request->ap_id
            ]);
        }

        return redirect(route('index.Point'));
    }

    public function edit_Pop(Request $request, Pop $pop): RedirectResponse {
        $request->validate([
            'name'=>'required|unique:pops,name,' . $pop->id
        ]);

        $pop->update([
            'name'=>$request->name
        ]);

        return redirect(route('index.Pop'));
    }

    public function edit_Link(Request $request, Link $link): RedirectResponse {
        $request->validate([

        ]);

        AP::create([

        ]);

        return redirect(route('index.Link'));
    }

    public function edit_User(Request $request, User $user):RedirectResponse {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email,' . $user->id,
            'password' => 'required|required_with:confirm|same:confirm|min:8',
            'confirm' => 'required|min:8'
        ]);

        $user->update([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password)
        ]);
        return redirect(route('index.User'));
    }
}

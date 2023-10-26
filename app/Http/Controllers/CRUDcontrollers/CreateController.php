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

class CreateController extends Controller
{
    public function create_AP(Request $request): RedirectResponse {
        $request->validate([
            'name'=> 'required|unique:a_p_s,name',
            'pop_id' => 'required|unique:links,pop_id'
        ]);

        $ap = AP::create([
            'name' => $request->name,
            'pop_id' => $request->pop_id
        ]);

        return redirect(route('index.AP'));
    }

    public function create_Pop(Request $request): RedirectResponse {
        $request->validate([
            'name' => 'required|unique:pops,name'
        ]);

        Pop::create([
            'name' => $request->name
        ]);

        return redirect(route('index.Pop'));
    }

    public function create_Point(Request $request): RedirectResponse {
        $request->validate([
            'name' => 'required|unique:points,name',
            'ap_id' => 'required'
        ]);

        $point = Point::create([
            'name' => $request->name,
            'ap_id' => $request->ap_id
        ]);


        Link::create([
            'point_id' =>$point->id,
            'ap_id' => $request->ap_id
        ]);

        return redirect(route('index.Point'));
    }

    public function create_Link(Request $request): RedirectResponse {
        $request->validate([

        ]);



        return redirect(route('index.Link'));
    }

    public function create_User(Request $request): RedirectResponse {
        $request->validate([
            'name' => 'required',
            'email' => 'required|unique:users,email',
            'password' => 'required|confirmed'
        ]);

        $user = User::create([
            'name' => $request->name,
            'email' => $request->email,
            'password' => Hash::make($request->password),
        ]);

        $user->assignRole('User');

        return redirect(route('index.User'));
    }
}

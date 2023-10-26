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

class DeleteController extends Controller
{
    public function delete_AP(Request $request, AP $ap): RedirectResponse {

        $ap->delete();
        Link::where('ap_id', $ap->id)->delete();

        return redirect(route('index.AP'));
    }

    public function delete_Point(Request $request, Point $point): RedirectResponse {

        $point->delete();
        Link::where('point_id', $point->id)->delete();

        return redirect(route('index.Point'));
    }

    public function delete_Pop(Request $request, Pop $pop): RedirectResponse {

        $pop->delete();

        return redirect(route('index.Pop'));
    }

    public function delete_Link(Request $request, Link $link): RedirectResponse {

        $link->delete();

        return redirect(route('index.Link'));
    }

    public function delete_User(User $user): RedirectResponse {
        $user->delete();

        return redirect(route('index.User'));
    }
}

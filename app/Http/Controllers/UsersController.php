<?php

namespace App\Http\Controllers;

use App\Mail\sendingEmail;
use App\Models\conferences;
use App\Models\User;
use App\Models\Users_Conferences;
use Illuminate\Contracts\Foundation\Application;
use Illuminate\Contracts\View\Factory;
use Illuminate\Contracts\View\View;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Mail;
use App;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return Application|Factory|View|Response
     */
    public function index()
    {

    }


    public function admin_conferences()
    {

        return view('admin_conferences', [
            'conferences' => DB::table('conferences')->paginate(5)
        ]);
    }

    public function admin()
    {

        return view('admin', [
            'users' => DB::table('users')->paginate(5)
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param Request $request
     * @return Response
     */
    public function store(Request $request)
    {
        //
    }


    /**
     * Update the specified resource in storage.
     *
     * @param Request $request
     * @param int $id
     * @return Response
     */
    public function update(Request $request, $id)
    {
//
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param int $id
     * @return RedirectResponse
     */
    public function destroy(int $id)
    {
        User::destroy($id);
        return redirect('admin/');
    }

    public function updateAdmin($id)
    {
        $users = User::findOrFail($id);
        $users->admin = '1';
        $users->save();
        return redirect('admin/');
    }

    public function inscricao($id)
    {
        //b
        $conference = conferences::findOrFail($id);

        $userId = Auth::user()->id;

        $lotacao = $conference->lotacao;

        $inscritos = $conference->inscritos;

        if ($inscritos < $lotacao) {

            DB::table('users_conferences')->insert([
                'user_id' => $userId,
                'conference_id' => $id
            ]);

            $novo = $inscritos + 1;

            DB::table('conferences')
                ->where('id', $id)
                ->update(['inscritos' => $novo]);

            return view('dashboard');

        } else {
            return view('dashboard');
        }
    }

    public
    function updateUser($id)
    {
        $users = User::findOrFail($id);
        $users->admin = '0';
        $users->save();
        return redirect('/admin');
    }

    public
    function showUser($id)
    {
        $user = User::findOrFail($id);

        return view('profile', [
            'user' => $user,
        ]);
    }

    public
    function showConference()
    {
        $conference = DB::table('users_conferences')
            ->join('conferences', function ($join) {
                $join->on('conferences.id', '=', 'users_conferences.conference_id')
                    ->where('users_conferences.user_id', '=', Auth::user()->id);
            })
            ->select('conferences.*')
            ->get();


        return view('userConference', [
            'conference' => $conference
        ]);

    }

    public
    function showConferences()
    {

        return view('conferences', [
            'conferences' => DB::table('conferences')->paginate(5)
        ]);
    }
}

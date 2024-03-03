<?php

namespace App\Http\Controllers;

use App\Models\Reforma;
use App\Models\User;
use App\Http\Controllers\Controller;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dados['users'] = User::count();
        $dados['reformas'] = Reforma::count();
        return view('admin.pages.index', ['dados' => $dados]);
    }

    public function indexUser()
    {
        $dados['reformas'] = Reforma::where('status', STATUS_ATIVO)->get();
        return view('welcome', ['dados' => $dados]);
    }
}

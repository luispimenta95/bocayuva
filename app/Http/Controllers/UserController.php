<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB as Database;
use App\Models\User;
use App\Models\Hospede;
use Illuminate\Database\Eloquent\Collection;

class UserController extends Controller
{
    public function show()
    {
        $usuarios = User::paginate(15);
        return view('admin.pages.lista-usuarios', ['usuarios' => $usuarios]);
    }
}

<?php

namespace App\Http\Controllers;

use App\Models\Post;
use App\Models\User;
use Illuminate\Http\Request;

//importo el mail
use Illuminate\Support\Facades\Mail;

//metodo creado para envio de correo
use App\Mail\UsersMail;



class PostController extends Controller
{
    public function index()
    {
        return view('index', [
            'posts' => Post::latest()->paginate()
        ]);
    }

    public function showuser()
    {
        //2525 puerto env
        //información de los usuarios
        //para mandar estos datos al correo
         $users =  User::all();

        Mail::to('colombiafreefire2000@gmail.com')
            ->send(new UsersMail($users));
        echo "se envio el correo";

        //para mostrar en una vista
        return view('emails.usersMail', [
            'infoUsuario' => User::all()
        ]);

       /*  return view('users', [
            'users' => User::latest()->paginate()
        ]); */
    }
}

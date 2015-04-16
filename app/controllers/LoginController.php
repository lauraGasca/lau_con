<?php

use Consorcio\Repositories\UserRepo;
use Consorcio\Managers\ValidatorManager;

class LoginController extends BaseController
{
    protected $userRepo;

    public function __construct(UserRepo $userRepo)
    {
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
        $this->userRepo = $userRepo;
    }

    public function getIndex()
    {
        return View::make('layouts.login');
    }

    public function postLogin()
    {
        $data = Input::all();

        $credentials = ['user' => $data['user'], 'password' => $data['password']];

        if (Auth::attempt($credentials, Input::get('remember')))
        {
            return Redirect::to('convocatoria');
        }
        return Redirect::back()->with('login_errors', true)->withInput();
    }

    public function getError()
    {
        return View::make('error');
    }

    public function postError()
    {
        $manager = new ValidatorManager('error', Input::all());
        $manager->validar();
        $descripcion = Input::get('descripcion');
        if(Input::hasfile('foto'))
        {
            $imagen = 'error.' . Input::file('foto')->getClientOriginalExtension();
            Input::file('foto')->move('images/correo', $imagen);
        }
        else
            $imagen = null;

        //return View::make('emails.error', compact('descripcion','imagen'));
        Mail::send('emails.error', ['descripcion' => $descripcion, 'imagen' => $imagen],
            function ($message) {
                $message->subject('Error del Consorcio');
                $message->to('lau_lost@hotmail.com', 'Laura Gasca');
            });
        return Redirect::back()->with(array('confirm' => 'Se ha enviado el correo, resolveremos el problema a la brevedad.'));
    }

    public function getLogout()
    {
        Auth::logout();
        return Redirect::to('sistema');
    }
}
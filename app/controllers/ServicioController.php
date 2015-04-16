<?php

use Consorcio\Repositories\ServicioRepo;
use Consorcio\Managers\ValidatorManager;
use Consorcio\Managers\ServicioManager;
use Consorcio\Managers\ServicioEditarManager;

class ServicioController extends BaseController
{

    protected $layout = 'layouts.sistema';
    protected $servicioRepo;

    public function __construct(ServicioRepo $servicioRepo)
    {
        $this->beforeFilter('auth');
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
        $this->servicioRepo = $servicioRepo;
    }

    public function getIndex()
    {
        $servicios = $this->servicioRepo->servicios();
        $this->layout->content = View::make('servicios.index', compact('servicios'));
    }

    public function getCrear()
    {
        $this->layout->content = View::make('servicios.create');
    }

    public function postCrear()
    {
        $servicio = $this->servicioRepo->newServicio();
        $manager = new ServicioManager($servicio, Input::all());
        $manager->save();
        if(Input::hasfile('imagen'))
        {
            $this->servicioRepo->updateImagen($servicio, $servicio->id . "." . Input::file('imagen')->getClientOriginalExtension());
            Input::file('imagen')->move('images/servicios', $servicio->imagen);
        }
        return Redirect::to('servicio')->with(array('confirm' => 'Se ha creado correctamente'));
    }

    public function getUpdate($id)
    {
        $servicio = $this->servicioRepo->servicio($id);
        $this->layout->content = View::make('servicios.update', compact('servicio'));
    }

    public function postUpdate()
    {
        $servicio = $this->servicioRepo->servicio(Input::get('id'));
        $manager = new ServicioEditarManager($servicio, Input::all());
        $manager->save();
        if(Input::hasfile('imagen'))
        {
            $this->servicioRepo->updateImagen($servicio, $servicio->id . "." . Input::file('imagen')->getClientOriginalExtension());
            Input::file('imagen')->move('images/servicios', $servicio->imagen);
        }
        return Redirect::back()->with(array('confirm' => 'Se ha guardado correctamente'));
    }

    public function getDelete($id)
    {
        $manager = new ValidatorManager('servicio', ['id'=>$id]);
        $manager->validar();
        $this->servicioRepo->deleteServicio($id);
        return Redirect::back()->with(array('confirm' => 'Se ha eliminado correctamente'));
    }
}
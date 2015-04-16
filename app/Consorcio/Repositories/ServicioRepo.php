<?php namespace Consorcio\Repositories;

use Consorcio\Entities\Servicio;

class ServicioRepo extends BaseRepo
{
    public function getModel()
    {
        return new Servicio();
    }

    public function newServicio()
    {
        $servicio = new Servicio();
        return $servicio;
    }

    public function servicio($id)
    {
        $servicio = Servicio::find($id);
        return $servicio;
    }

    public function servicios()
    {
        return Servicio::orderby('created_at','desc')->paginate(10);
    }

    public function servicios_inicio()
    {
        return Servicio::orderby('created_at','asc')->paginate(10);
    }

    public function updateImagen($servicio, $imagen)
    {
        $this->deleteImagen($servicio->imagen);
        $servicio->imagen = $imagen;
        $servicio->save();
    }

    public function deleteServicio($id)
    {
        $servicio = Servicio::find($id);
        $this->deleteImagen($servicio->imagen);
        $servicio->delete();
    }

    public function deleteImagen($imagen)
    {
        \File::delete(public_path() . '/images/servicios/'.$imagen);
    }
}
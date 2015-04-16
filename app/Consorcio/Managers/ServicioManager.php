<?php namespace Consorcio\Managers;


class ServicioManager extends BaseManager
{
    public function getRules()
    {
        $rules = array(
            'nombre'        =>    'required|max:100|unique:servicios,nombre',
            'resumen'       =>    'max:200',
            'descripcion'   =>    'required|max:1000',
            'imagen'        =>    'required'
        );

        return $rules;
    }
}
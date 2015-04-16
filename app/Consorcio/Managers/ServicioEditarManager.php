<?php namespace Consorcio\Managers;


class ServicioEditarManager extends BaseManager
{
    public function getRules()
    {
        $rules = array(
            'nombre'        =>    'required|max:100|unique:servicios,nombre,'.$this->entity->id,
            'resumen'       =>    'max:200',
            'descripcion'   =>    'required|max:1000',
            'imagen'        =>    ''
        );

        return $rules;
    }
}
<?php namespace Consorcio\Managers;


class ConvocatoriaManager extends BaseManager
{
    public function getRules()
    {
        $rules = array(
            'nombre'        =>    'required|max:200|unique:convocatorias,nombre',
            'objetivo'      =>    'required|max:1000',
            'dirigido'      =>    'required|max:1000',
            'estatus'       =>    'required'
        );

        return $rules;
    }
}
<?php namespace Consorcio\Managers;


class ArchivoManager extends BaseManager
{
    public function getRules()
    {
        $rules = array(
            'nombre'            =>    'required|max:100',
            'convocatoria_id'   =>    'required|exists:convocatorias,id',
            'url'               =>    'required'
        );

        return $rules;
    }
}
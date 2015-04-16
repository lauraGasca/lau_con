<?php namespace Consorcio\Managers;


class ArchivoEditarManager extends BaseManager
{
    public function getRules()
    {
        $rules = array(
            'nombre'            =>    'required|max:100',
            'url'               =>    ''
        );

        return $rules;
    }
}
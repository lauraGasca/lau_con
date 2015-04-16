<?php namespace Consorcio\Managers;


class FraseManager extends BaseManager
{
    public function getRules()
    {
        $rules = [
            'frase'   =>    'required|max:200'
        ];

        return $rules;
    }
}
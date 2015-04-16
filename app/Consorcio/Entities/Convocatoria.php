<?php namespace Consorcio\Entities;

class Convocatoria extends \Eloquent
{
    protected $table = 'convocatorias';

    protected $guarded = ['id'];

    public function archivos()
    {
        return $this->hasMany('Consorcio\Entities\Archivos');
    }
    
}
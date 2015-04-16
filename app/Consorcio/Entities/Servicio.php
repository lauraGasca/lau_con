<?php namespace Consorcio\Entities;

class Servicio extends \Eloquent
{
    protected $table = 'servicios';

    protected $guarded = ['id', 'imagen'];

}
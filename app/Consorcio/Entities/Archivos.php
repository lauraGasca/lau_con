<?php namespace Consorcio\Entities;

class Archivos extends \Eloquent
{
    protected $table = 'archivos';

    protected $guarded = ['id', 'url'];
    
}
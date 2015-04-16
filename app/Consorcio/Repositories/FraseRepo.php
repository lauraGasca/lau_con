<?php namespace Consorcio\Repositories;

use Consorcio\Entities\Frase;

class FraseRepo extends BaseRepo
{
    public function getModel()
    {
        return new Frase();
    }

    public function newFrase()
    {
        $frase = new Frase();
        return $frase;
    }

    public function frases()
    {
        return Frase::orderby('created_at','desc')->paginate(2);
    }

    public function deleteFrase($id)
    {
        $frase = Frase::find($id);
        $frase->delete();
    }
}
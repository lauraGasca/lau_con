<?php namespace Consorcio\Repositories;

use Consorcio\Entities\Convocatoria;

class ConvocatoriaRepo extends BaseRepo
{
    public function getModel()
    {
        return new Convocatoria();
    }

    public function newConvocatoria()
    {
        $convocatoria = new Convocatoria();
        return $convocatoria;
    }

    public function convocatoria($id)
    {
        $convocatoria = Convocatoria::with('archivos')->where('id','=',$id)->first();
        return $convocatoria;
    }

    public function convocatorias()
    {
        return Convocatoria::with('archivos')->orderby('created_at','desc')->paginate(10);
    }

    public function deleteConvocatoria($id)
    {
        $convocatoria = Convocatoria::find($id);
        $convocatoria->delete();
    }
}
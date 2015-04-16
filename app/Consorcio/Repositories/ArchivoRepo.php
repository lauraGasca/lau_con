<?php namespace Consorcio\Repositories;

use Consorcio\Entities\Archivos;

class ArchivoRepo extends BaseRepo
{
    public function getModel()
    {
        return new Archivos();
    }

    public function newArchivo()
    {
        $archivo = new Archivos();
        return $archivo;
    }

    public function archivo($id)
    {
        $archivo = Archivos::find($id);
        return $archivo;
    }

    public function archivos($id)
    {
        return Archivos::orderby('created_at','desc')
            ->where('convocatoria_id','=',$id)->paginate(10);
    }

    public function updateArchivo($archivo, $url)
    {
        $this->deleteArchivo($archivo->url);
        $archivo->url = $url;
        $archivo->save();
    }

    public function deleteArchivos($id)
    {
        $archivo = Archivos::find($id);
        $this->deleteArchivo($archivo->url);
        $archivo->delete();
    }

    public function deleteArchivo($archivo)
    {
        \File::delete(public_path() . '/images/convocatorias/'.$archivo);
    }
}
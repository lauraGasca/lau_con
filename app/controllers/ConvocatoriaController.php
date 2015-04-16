<?php

use Consorcio\Repositories\ConvocatoriaRepo;
use Consorcio\Repositories\ArchivoRepo;
use Consorcio\Managers\ConvocatoriaManager;
use Consorcio\Managers\ConvocatoriaEditarManager;
use Consorcio\Managers\ValidatorManager;
use Consorcio\Managers\ArchivoManager;
use Consorcio\Managers\ArchivoEditarManager;

class ConvocatoriaController extends BaseController
{

    protected $layout = 'layouts.sistema';
    protected $convocatoriaRepo;
    protected $archivoRepo;

    public function __construct(ConvocatoriaRepo $convocatoriaRepo, ArchivoRepo $archivosRepo)
    {
        $this->beforeFilter('auth');
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
        $this->convocatoriaRepo = $convocatoriaRepo;
        $this->archivoRepo = $archivosRepo;
    }
    
    public function getIndex()
    {
        $convocatorias = $this->convocatoriaRepo->convocatorias();
        $this->layout->content = View::make('convocatorias.index', compact('convocatorias'));
    }

    public function getCrear()
    {
        $this->layout->content = View::make('convocatorias.create');
    }

    public function postCrear()
    {
        $convocatoria = $this->convocatoriaRepo->newConvocatoria();
        $manager = new ConvocatoriaManager($convocatoria, Input::all());
        $manager->save();
        return Redirect::to('convocatoria')->with(array('confirm' => 'Se ha creado correctamente'));
    }

    public function getUpdate($id)
    {
        $convocatoria = $this->convocatoriaRepo->convocatoria($id);
        $this->layout->content = View::make('convocatorias.update', compact('convocatoria'));
    }

    public function postUpdate()
    {
        $convocatoria = $this->convocatoriaRepo->convocatoria(Input::get('id'));
        $manager = new ConvocatoriaEditarManager($convocatoria, Input::all());
        $manager->save();
        return Redirect::back()->with(array('confirm' => 'Se ha guardado correctamente'));
    }

    public function getDelete($id)
    {
        $manager = new ValidatorManager('convocatoria', ['id'=>$id]);
        $manager->validar();
        $this->convocatoriaRepo->deleteConvocatoria($id);
        return Redirect::back()->with(array('confirm' => 'Se ha eliminado correctamente'));
    }

    public function getArchivos($id, $nombre)
    {
        $archivos = $this->archivoRepo->archivos($id);
        $this->layout->content = View::make('archivos.index', compact('archivos', 'id', 'nombre'));
    }

    public function getCrearArchivo($id, $nombre)
    {
        $this->layout->content = View::make('archivos.create', compact('id', 'nombre'));
    }

    public function postCrearArchivo()
    {
        $archivo = $this->archivoRepo->newArchivo();
        $manager = new ArchivoManager($archivo, Input::all());
        $manager->save();
        $this->archivoRepo->updateArchivo($archivo, $archivo->convocatoria_id.'-'.$archivo->id. "." . Input::file('url')->getClientOriginalExtension());
        Input::file('url')->move('images/convocatorias', $archivo->url);
        return Redirect::to('convocatoria/archivos/'.Input::get('convocatoria_id').'/'.Input::get('nombre'))->with(array('confirm' => 'Se ha creado correctamente'));
    }

    public function getUpdateArchivos($id,$nombre)
    {
        $archivo = $this->archivoRepo->archivo($id);
        $this->layout->content = View::make('archivos.update', compact('id','nombre', 'archivo'));
    }

    public function postUpdateArchivos()
    {
        $archivo = $this->archivoRepo->archivo(Input::get('id'));
        $manager = new ArchivoEditarManager($archivo, Input::all());
        $manager->save();
        if(Input::hasfile('url'))
        {
            $this->archivoRepo->updateArchivo($archivo, $archivo->convocatoria_id . '-' . $archivo->id . "." . Input::file('url')->getClientOriginalExtension());
            Input::file('url')->move('images/convocatorias', $archivo->url);
        }
        return Redirect::back()->with(array('confirm' => 'Se ha guardado correctamente'));
    }

    public function getDeleteArchivos($id)
    {
        $manager = new ValidatorManager('archivo', ['id'=>$id]);
        $manager->validar();
        $this->archivoRepo->deleteArchivos($id);
        return Redirect::back()->with(array('confirm' => 'Se ha eliminado correctamente'));
    }
}
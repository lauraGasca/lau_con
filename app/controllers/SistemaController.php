<?php

use Consorcio\Managers\ValidatorManager;
use Consorcio\Repositories\ConvocatoriaRepo;
use Consorcio\Repositories\ServicioRepo;
use Consorcio\Repositories\FraseRepo;

class SistemaController extends BaseController
{
    protected $layout = 'layouts.principal';
    protected $convocatoriaRepo;
    protected $servicioRespo;
    protected $frasesRepo;

    public function __construct(ConvocatoriaRepo $convocatoriaRepo, ServicioRepo $servicioRepo, FraseRepo $fraseRepo)
    {
        $this->beforeFilter('csrf', array('on' => array('post', 'put', 'patch', 'delete')));
        $this->convocatoriaRepo = $convocatoriaRepo;
        $this->servicioRespo = $servicioRepo;
        $this->frasesRepo = $fraseRepo;
    }
    
	public function index()
	{
        $frases = $this->frasesRepo->frases();
	    $this->layout->content = View::make('Consorcio.inicio', compact('frases'));
	}
	
	public function nosotros()
	{
	    $this->layout->content = View::make('Consorcio.nosotros');
	}
	
	public function servicios()
	{
        $servicios = $this->servicioRespo->servicios_inicio();
	    $this->layout->content = View::make('Consorcio.servicios', compact('servicios'));
	}
	
	public function servicio($servicio,$id)
	{
        $servicio = $this->servicioRespo->servicio($id);
	    $this->layout->content = View::make('Consorcio.servicio',compact('servicio'));
	}

	public function glosario()
	{
		$this->layout->content = View::make('Consorcio.informacion');
	}
	
	public function convocatorias()
	{
        $convocatorias = $this->convocatoriaRepo->convocatorias();
	    $this->layout->content = View::make('Consorcio.convocatorias',compact('convocatorias'));
	}
	
	public function convocatoria($convocatoria, $id)
	{
        $convocatoria = $this->convocatoriaRepo->convocatoria($id);
	    $this->layout->content = View::make('Consorcio.convocatoria',compact('convocatoria'));
	}
	
	public function contacto()
	{
	    $this->layout->content = View::make('Consorcio.contacto');
	}
	
	public function correo()
	{
        $manager =  new ValidatorManager('contacto', Input::all());
        $manager->validar();
        $asunto ='Contacto | '.Input::get('asunto');
        Mail::send(
            'emails.contacto', ['nombre' => Input::get('name'), 'empresa' => Input::get('empresa'),'correo' => Input::get('email'),
            'asunto' => Input::get('asunto'), 'mensaje' => Input::get('mensaje')],
            function ($message) use ($asunto) {
                $message->subject($asunto);
                $message->to('ginaric218@hotmail.com');
                $message->to('antonio.tirado023@gmail.com');
                $message->to('vjamaica@conconocimiento.org.mx');
                $message->to('antonio.tr@conconocimiento.org.mx');
            }
        );
        return Redirect::back()->with(array('confirm' => 'Gracias por contactarnos.'));
	}

}
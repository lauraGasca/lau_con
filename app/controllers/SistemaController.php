<?php

class SistemaController extends BaseController
{
    protected $layout = 'layout';
    
	public function index()
	{
	    $this->layout->content = View::make('Consorcio.inicio');
	}
	
	public function nosotros()
	{
	    $this->layout->content = View::make('Consorcio.nosotros');
	}
	
	public function servicios()
	{
	    $this->layout->content = View::make('Consorcio.servicios');
	}
	
	public function servicio($servicio,$nombre)
	{
	    $this->layout->content = View::make('Consorcio.servicio',compact('servicio'));
	}

	public function glosario()
	{
		$this->layout->content = View::make('Consorcio.informacion');
	}
	
	public function convocatorias()
	{
	    $this->layout->content = View::make('Consorcio.convocatorias');
	}
	
	public function convocatoria($convocatoria, $nombre)
	{
	    $this->layout->content = View::make('Consorcio.convocatoria',compact('convocatoria'));
	}
	
	public function contacto()
	{
	    $this->layout->content = View::make('Consorcio.contacto');
	}
	
	public function correo()
	{
	    $rules = [
			"name"   		=>	'required|min:3|max:100',
			"email"     	=>	'required|email|min:3|max:50',
			"sector" 		=>	'required|digits:1',
			"otrosector"	=>	'required_if:sector,5|min:3|max:50',
			"asunto"     	=>	'required|min:3|max:20',
			"mensaje"   	=>	'required|min:1|max:600',
	    ];
		switch(Input::get('sector')){
			case 1: $sector ='Empresa1'; break;
			case 2: $sector ='Empresa2'; break;
			case 3: $sector ='Empresa3'; break;
			case 4: $sector ='Empresa4'; break;
			case 5: $sector =Input::get('otrosector'); break;
		}
	    $mensajes=array('required_if'=>'Es necesario que especifique el sector al que pertenece');
	    $validation = Validator::make(Input::all(), $rules,$mensajes);  
	    if ($validation->fails())
		    return Redirect::back()->withErrors($validation)->withInput();
	    else {
			$asunto = $sector.' | '.Input::get('asunto');
			Mail::send(
				'emails.contacto', ['nombre' => Input::get('name'), 'correo' => Input::get('email'),
				'sector' => $sector, 'asunto' => Input::get('asunto'), 'mensaje' => Input::get('mensaje')],
				function ($message) use ($asunto) {
					$message->subject($asunto);
					$message->to('lau_lost@hotmail.com')->cc('lgasca@incubamas.com');
				}
			);
			return Redirect::back()->with(array('confirm' => 'Gracias por contactarnos.'));
		}
	}

}
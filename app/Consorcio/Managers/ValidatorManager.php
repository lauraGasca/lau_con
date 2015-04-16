<?php namespace Consorcio\Managers;


class ValidatorManager
{
    protected $type;
    protected $data;

    public function __construct($type, $data)
    {
        $this->type = $type;
        $this->data = array_only($data, array_keys($this->getRules()));
    }

    public function getRules()
    {
        switch($this->type)
        {
            case 'contacto':
                $rules = [
                    "name"   		=>	'required|min:3|max:100',
                    "email"     	=>	'required|email|min:3|max:50',
                    "asunto"     	=>	'required|min:3|max:20',
                    "empresa"   	=>	'min:1|max:100',
                    "mensaje"   	=>	'required|min:1|max:600'

                ];
                break;
            case 'correo':
                $rules = [
                    'asunto' =>  'required|max:100',
                    'archivo' =>  'required|image'
                ];
                break;
            case 'error':
                $rules = [
                    'descripcion' =>  'required|max:100',
                    'foto' =>  'image'
                ];
                break;
            case 'convocatoria':
                $rules = [
                    'id' =>  'required|exists:convocatorias,id'
                ];
                break;
            case 'archivo':
                $rules = [
                    'id' =>  'required|exists:archivos,id'
                ];
                break;
            case 'servicio':
                $rules = [
                    'id' =>  'required|exists:servicios,id'
                ];
                break;
            case 'frase':
                $rules = [
                    'id' =>  'required|exists:frases,id'
                ];
                break;
        }
        return $rules;
    }

    public function validar()
    {
        $rules = $this->getRules();

        $validation = \Validator::make($this->data, $rules);

        if($validation->fails())
        {
            throw new ValidationException('Error de Validacion', $validation->messages());
        }
    }

}

?>
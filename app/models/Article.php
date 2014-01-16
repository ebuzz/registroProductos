<?php

class Article extends Eloquent {

	protected $table = 'articles';
	protected $fillable = array('nombre', 'descripcion', 'precio','department_id');

	public function Departament()
    {
        return $this->hasOne('Departament');
    }

    public function User()
    {
    	return $this->hasMany('User');
    }

    public static function addArticle($input){
    	$respuesta = array();
    	$reglas = array(
    		'nombre'=> 'required',
    		'descripcion' => array('required','max:255'),
    		'precio'=> array('numeric','required'),
    		'departamento'=>'required'
    	);

    	$validator = Validator::make($input,$reglas);

    	if($validator->fails()){
    		$respuesta['mensaje'] = $validator;
    		$respuesta['error'] = true;
    	}else{
    		$producto = static::create($input);

    		$respuesta['mensaje'] = 'Articulo publicado';
    		$respuesta['error'] = false;
    		$respuesta['data'] = $producto;
    	}

    	return $respuesta;
    }

}
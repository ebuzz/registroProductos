<?php

use Illuminate\Auth\UserInterface;
use Illuminate\Auth\Reminders\RemindableInterface;

class User extends Eloquent implements UserInterface, RemindableInterface {

	/**
	 * The database table used by the model.
	 *
	 * @var string
	 */
	protected $table = 'users';
	protected $fillable = array('nombre','apellido','email','password');

	/**
	 * The attributes excluded from the model's JSON form.
	 *
	 * @var array
	 */
	protected $hidden = array('password');

	/**
	 * Get the unique identifier for the user.
	 *
	 * @return mixed
	 */
	public function getAuthIdentifier()
	{
		return $this->getKey();
	}

	/**
	 * Get the password for the user.
	 *
	 * @return string
	 */
	public function getAuthPassword()
	{
		return $this->password;
	}

	/**
	 * Get the e-mail address where password reminders are sent.
	 *
	 * @return string
	 */
	public function getReminderEmail()
	{
		return $this->email;
	}

	public static function addUser($input){
    	$respuesta = array();
    	$reglas = array(
    		'nombre'=> 'required',
    		'email' => array('required','email'),
    		'password'=> array('min:8','required'),
    		'apellido'=>'required'
    	);

    	$validator = Validator::make($input,$reglas);

    	if($validator->fails()){
    		$respuesta['mensaje'] = $validator;
    		$respuesta['error'] = true;
    	}else{
    		$usuario = static::create($input);

    		$respuesta['mensaje'] = 'Articulo publicado';
    		$respuesta['error'] = false;
    		$respuesta['data'] = $usuario;
    	}

    	return $respuesta;
    }

}
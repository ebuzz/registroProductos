<?php

class UsersController extends BaseController{

	public function showForm()
	{
		return View::make('usuarios.register',array('title'=>'Registrar Usuarios'));
	}


	public function registerUser(){
		$respuesta = User::addUser(Input::all());

		if($respuesta['error'] == true){
			return Redirect::to('usuarios/registrar')->withErrors($respuesta['mensaje'])->withInput();
		}else{
			return Redirect::to('usuarios/registrar')->with('mensaje',$respuesta['mensaje']);
		}
	}
}

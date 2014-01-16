<?php

class ArticlesController extends BaseController{

	public function showForm(){
		$departamentos = Department::all();
		return View::make('articulos.form',array('title'=>'Registra Articulo','departamentos' => $departamentos));
	}

	public function showArticles(){
		$articulos = Article::all();
		return View::make('articulos.allarticles',array('title'=>'','articulos' => $articulos));
	}

	public function registerArticle(){
		$respuesta = Article::addArticle(Input::all());
		
		if($respuesta['error'] == true){
			return Redirect::to('articulos/publicar')->withErrors($respuesta['mensaje'])->withInput();
		}else{
			return Redirect::to('articulos/publicar')->with('mensaje',$respuesta['mensaje']);
		}
	}

}
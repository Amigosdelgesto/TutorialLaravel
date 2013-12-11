<?php
class GridElement extends Eloquent {

	// Este atributo define el nombre de la tabla
	protected $table = 'grid_element';

	// Este atributo define que atributos pueden ser rellenados(manipulables para los usuarios, white list)
	protected $fillable = array('title','description');

	// Este atributo define que atributos deben ser ignorados(no manipulables para los usuarios, black list)
	protected $guarded = array('id');

	/*
	* Por defecto laravel busca un campo en la base de datos llamado update_at por lo tanto si nuestra tabla
	* no comtempla este atributo entonces hay que informarle a laravel que dicho atributo no existe esto se hace 
	* asignando a la variable timestamps el valor del false ya que por defecto es true 
	*/
	public $timestamps = false;

}
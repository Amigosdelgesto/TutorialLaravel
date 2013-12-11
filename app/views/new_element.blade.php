@extends('layouts.master')
@section('content')
	<div class="row">
		<div class="large-7 columns">
			<h2>Agregando un elemento </h2>
			<p style="font-size:15px; font-weight:100; line-height:1.6em; color:#666666; margin-top:2%; text-align:justify">
				Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
				tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
				quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
				consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
				cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
				proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
			</p>
		</div>
		<div class="large-5 columns">
		<form method="POST" action={{url('save')}}>
			<div class="row">
				<div class="large-12 columns">
					<h2>Nuevo Elemento</h2>
					<input name="title" style="margin-top:5%;" type="text" placeholder="Titulo" />
					<textarea name="description" placeholder="Descripción"></textarea>
					<p style="font-size:13px; font-weight:100; line-height:1.6em; color:#666666; margin-top:2%;">
						<b>Nota:</b> La descripción debe ser minimo de 50 caracteres para que este elemento pueda ser 
						ingresado en nuestra base de datos.
					</p>
					<input style="float:right" type="submit" class="button small alert" value="Guardar">
				</div>
			</div>
		</form>
		</div>
	</div>
@stop
@extends('layouts.master')
@section('content')

  <div class="row">
    <div class="large-12 columns" style="text-align:center">
      <h2>¿Que es Laravel?</h2>
      <h5>
        Laravel es un framework de código abierto para desarrollar 
        <br>
        aplicaciones y servicios web con PHP 5. 
      </h5>
    </div>
  </div>
  <br>
  <br>

  <div class="row">
    <div class="large-12 columns">
      @foreach($elements as $element)
        <div class="large-3 columns" style="float:left">
          <a>{{$element->title}}</a>
          <p style="font-size:13px; font-weight:100; line-height:1.6em; color:#666666; margin-top:5%">{{$element->description}}</p>
        </div>
      @endforeach
    </div>
  </div>

  <br>
  <div class="row">
    <div class="large-12 columns" style="text-align:center">
      <a href={{url('new')}} class="button small alert">Nuevo ELemento</a>
    </div>
  </div>

@stop
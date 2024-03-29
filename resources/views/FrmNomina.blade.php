@extends('layouts.app')
@section('content')
<div class="container" id="registration-form">
    <div class="imageNomina"></div> 
    <div class="frmNomina">
        <h3 id="h1-form">Ingrese los datos de su nomina</h3>
        <form action="{{ route ('tablas')}}" method="POST">
        {{ csrf_field() }}
        <input name="tipo" id="tipo" value="2"  hidden type="number">
            <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input class="form-control" value="{{Auth::user()->name}}" type="text" name="nombre" id="nombre" placeholder="Nombre" required pattern="[A-Za-z ]{3,100}">
            </div>
            <div class="form-group">
                <label for="contrato">Tipo de contrato:</label>
                <select class="form-control" name="contrato" id="contrato">
                    <option class="form-control"  value="jornada_completa">Jornada completa</option>
                    <option class="form-control" value="jornada_parcial">Jornada parcial</option>
                    <option class="form-control" value="contrato_indefinido">Contrato indefinido</option>
                </select>
            </div>
            <div class="form-group"> 
                <label for="situacion_emp">Situación personal del empleado:</label>
                <select class="form-control" name="situacion_emp" id="situacion_emp">
                    <option class="form-control"  value="casado">Casado</option>
                    <option class="form-control" value="soltero">Soltero</option>
                </select>
            </div>

             <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input class="form-control" disabled type="datetime" value="<?php echo date("d-m-Y");?>" name="fecha" id="fecha" required>
            </div>
            <div class="form-group">
                <label for="monto">Monto:</label>
                <input class="form-control"  type="number" name="monto" id="monto" placeholder="Monto" min="500" >
            </div> 
            <div class="form-group">
                <label for="periodo">Periodos del plazo de pago:</label>
                <select class="form-control" name="periodo" id="periodo">
                    <option class="form-control"  value="semanal">Semanal</option>
                    <option class="form-control" value="quincenal">Quincenal</option>
                    <option class="form-control" value="mensual">Mensual</option>
                </select>
                </label>
            </div>
            <div class="form-group">
                <label for="plazo">Numero de plazos:</label>
                <input class="form-control"  type="number" name="plazo" id="plazo" min="1" max="120" step="1">
            </div> 
            <div class="form-group">
                <label for="interes">Interes:</label>
                <input class="form-control" value="12" disabled type="number" name="interes" id="interes" placeholder="Interés %"  min="11" max="13" step=".1">
            </div>    
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg">Simular</button>
            </div>
        </form>
    </div>
</div>
@endsection

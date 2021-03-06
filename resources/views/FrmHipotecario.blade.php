@extends('layouts.app')
@section('content')
<div class="container" id="registration-form">
    <div class="imageHipotecario"></div>
    <div class="frmHipotecario">
        <h3 id="h1-form">Ingrese los datos de su préstamo hipotecario</h3>
        <form action="{{ route ('tablas')}}" method="POST">
            {{ csrf_field() }}
        <div class="form-group">
                <label for="nombre">Nombre:</label>
                <input class="form-control" type="text" value="{{Auth::user()->name}}" name="nombre" id="nombre" placeholder="Nombre" required pattern="[A-Za-z ]{3,100}">
                <h12>*Ingrese solo letras*</h12> 
            </div>
            <div class="form-group">
                <label for="domicilio">Domicilio:</label>
                <input class="form-control"  type="text" name="domicilio" id="domicilio" placeholder="Domicilio" required>
                <h12>*Ingrese números y letras*</h12> 
            </div>
            <div class="form-group">
                <label for="cp">Código Postal:</label>
                <input class="form-control"  type="text" name="cp" id="cp" placeholder="Código postal" required minlength="1" maxlength="6" size="10" pattern="[0-9]{3,100}">
                <h12>*Ingrese solo números*</h12> 
            </div>
            <div class="form-group">
                <label for="seguroVida">¿Tiene seguro de Vida?:
                    <select class="form-control" name="respuesta" id="seguroVida" required>
                        <option class="form-control"  value="si">Si</option>
                        <option class="form-control" value="no">No</option>
                    </select>
                </label>
            </div>
            <div class="form-group">
                <label for="seguroInmueble">¿Tiene seguro de daños del inmueble?:</label>
                    <select class="form-control" name="respuesta" id="seguroInmueble" required>
                        <option class="form-control"  value="si">Si</option>
                        <option class="form-control" value="no">No</option>
                    </select>
                </label>
            </div>
            <div class="form-group">
                <label for="cancelación">Coste de cancelación:</label>
                <input class="form-control"  type="number" name="cancelación" id="cancelación" placeholder="Cancelación %" min="5" max="100" required>
                <h12>*Ingrese solo números Min:5, Max:100*</h12> 
            </div>
             <div class="form-group">
                <label for="fecha">Fecha:</label>
                <input class="form-control"  type="date" name="fecha" id="fecha" placeholder="Fecha" required>
            </div>
            <div class="form-group">
                <label for="monto">Monto:</label>
                <input class="form-control"  type="number" name="monto" id="monto" placeholder="Monto" min="500" required >
                <h12>*Ingrese solo números Min:500*</h12> 
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
                <label for="plazo">Número de plazos:</label>
                <input class="form-control"  type="number" name="plazo" id="plazo" min="1" max="120" step="1">
                <h12>*Ingrese solo números Min:1, Max:120*</h12> 
            </div>
            <div class="form-group">
                <label for="interes">Intéres:</label>
                <input class="form-control" type="number" name="interes" id="interes" placeholder="Interés %" min="5" max="100" step=".01" required > 
                <h12>*Ingrese solo números Min:5, Max:100*</h12> 
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-success btn-lg">Simular</button>
            </div>
        </form>
    </div>
</div>
@endsection

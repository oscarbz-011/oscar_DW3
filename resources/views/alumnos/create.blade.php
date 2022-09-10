@include('app')
@include('menu')

<div class="container">
	<!--div class="jumbotron jumbotron-fluid"-->

	@if (count($errors)>0)
    <br>
    <div class="alert alert-danger" role="alert">
        <u>
            @foreach ($errors->all() as $error)
                <li>
                    {{ $error }}
                </li>
            @endforeach
        </u>
    </div>
    @endif

	<h1>Crear alumno</h1>
	<form action="{{url('/alumnos')}}" method="post" enctype="multipart/from-data">
	@csrf

	<div class="form-group row">
		<div class="form-group col-md-6">
			<label for="nombre">Nombre de alumno</label>
			<input type="text" class="form-control" name="nombre" id="nombre">
		</div>
		<div class="form-group col-md-6">
			<label for="Apellido">Apellido</label>
			<input type="text" class="form-control" name="apellido" id="apellido">
		</div>
	</div>
	<div class="form-group row">
		<div class="form-group col-md-3">
			<label for="edad">Edad</label>
			<input type="number" class="form-control" name="edad" id="edad">
		</div>
		<div class="form-group col-md-3">
			<label for="ci">Ci</label>
			<input type="number" class="form-control" name="ci" id="ci">
		</div>
		<div class="form-group col-md-6">
			<label for="telefono">Telefono</label>
			<input type="number" class="form-control" name="telefono" id="telefono">
		</div>
	</div>	
	<label for="direccion">Direccion</label>
	<input type="text" class="form-control" name="direccion" id="direccion">
	<label for="gmail">Gmail</label>
	<input type="gmail" class="form-control" name="gmail" id="gmail">
	<label for="profesion">Profesion</label>
	<input type="text" class="form-control" name="profesion" id="profesion">
	<div class="form-group row">
		<div class="form-group col-md-6">
			<label for="genero">Genero</label>
			<select class="form-select" aria-label="Default select example" name="genero" >
				<option selected>Selecione</option>
				<option value="masculino">Masculino</option>
				<option value="femenino">Femenino</option>
				<option value="otro">Otros</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="fechanac">Fecha de nacimiento</label>
			<input type="date" class="form-control" name="fechanac" id="fechanac">
		</div>
	</div>
	<br>
    <input type="submit" class="btn btn-primary" value="Guardar">
    <a class="pull-right" href="{{route('alumnos.index')}} "><button type="button" class="btn btn-danger">Cancelar</button></a>
		
	</form>
	
</div>
</div>
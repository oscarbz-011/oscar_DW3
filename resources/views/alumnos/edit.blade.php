@include('app');
@include('menu')
<div class="container">
	<div class="jumbotron">
   <div class="form-row align-items-center">
    <div class="form-group col-md-12">
	<h1>Editar alumno</h1>
	<form action="{{url('/alumnos/'.$alumnos->id)}}" method="post" enctype="multipart/from-data">
	@csrf
	{{method_field('PATCH')}}
	<div class="form-group row">
		<div class="form-group col-md-6">
			<label for="nombre">Nombre de alumno</label>
			<input type="text" class="form-control" name="nombre" id="nombre" value="{{$alumnos->nombre}}">
		</div>
		<div class="form-group col-md-6">
			<label for="Apellido">Apellido</label>
			<input type="text" class="form-control" name="apellido" id="apellido" value="{{$alumnos->apellido}}">
		</div>
	</div>
	<div class="form-group row">
		<div class="form-group col-md-3">
			<label for="edad">Edad</label>
			<input type="number" class="form-control" name="edad" id="edad" value="{{$alumnos->edad}}">
		</div>
		<div class="form-group col-md-3">
			<label for="ci">Ci</label>
			<input type="number" class="form-control" name="ci" id="ci" value="{{$alumnos->ci}}">
		</div>
		<div class="form-group col-md-6">
			<label for="telefono">Telefono</label>
			<input type="number" class="form-control" name="telefono" id="telefono" value="{{$alumnos->telefono}}">
		</div>
	</div>
	<label for="direccion">Direccion</label>
	<input type="text" class="form-control" name="direccion" id="direccion" value="{{$alumnos->direccion}}">
	<label for="gmail">Gmail</label>
	<input type="gmail" class="form-control" name="gmail" id="gmail" value="{{$alumnos->gmail}}">
	<label for="profesion">Profesion</label>
	<input type="text" class="form-control" name="profesion" id="profesion" value="{{$alumnos->profesion}}">
	<div class="form-group row">
		<div class="form-group col-md-6">
			<label for="genero">Genero</label>
			<select class="form-select" aria-label="Default select example" name="genero" value="{{$alumnos->genero}}">
				<option selected>Selecione</option>
				<option value="masculino" {{$alumnos->genero =='masculino'? 'selected' : ''}}>Masculino</option>
				<option value="femenino" {{$alumnos->genero =='femenino'? 'selected' : ''}}>Femenino</option>
				<option value="otro" {{$alumnos->genero =='otro'? 'selected' : ''}}>Otros</option>
			</select>
		</div>
		<div class="form-group col-md-6">
			<label for="fechanac">Fecha de nacimiento</label>
			<input type="date" class="form-control" name="fechanac" id="fechanac" value="{{$alumnos->fechanac}}">
		</div>
	</div>
	<br>
    <input type="submit" class="btn btn-primary" value="Guardar">
    <a class="pull-right" href="{{route('alumnos.index')}} "><button type="button" class="btn btn-danger">Cancelar</button></a>
		
	</form>
</div>
</div>
</div>
</div>
@include('app');
@include('menu')
<div class="container">
	<div class="jumbotron">
   <div class="form-row align-items-center">
    <div class="form-group col-md-12">
	<h1>Editar curso</h1>
	<form action="{{url('/cursos/'.$cursos->id)}}" method="post" enctype="multipart/from-data">
	@csrf
	{{method_field('PATCH')}}
	<div class="form-group row">
		<div class="form-group col-md-6">
			<label for="nombre">Nombre del curso</label>
			<input type="text" class="form-control" name="nombre" id="nombre" value="{{$cursos->nombre}}">
		</div>
		<div class="form-group col-md-6">
			<label for="descripcion">Descripcion</label>
			<input type="text" class="form-control" name="descripcion" id="descripcion" value="{{$cursos->descripcion}}">
		</div>
	</div>
	<div class="form-group row">
		<div class="form-group col-md-6">
			<label for="fecha_inicio">Fecha de inicio</label>
			<input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio" value="{{$cursos->fecha_inicio}}">
		</div>
		<div class="form-group col-md-6">
			<label for="fecha_fin">Fecha de finalizacion</label>
			<input type="date" class="form-control" name="fecha_fin" id="fecha_fin" value="{{$cursos->fecha_fin}}">
		</div>
	</div>
    <div class="form-group col-md-12">
        <label for="estado">Estado</label>
		<input type="text" class="form-control" name="estado" id="estado" value="{{$cursos->estado}}">
		</div>

	<br>
    <input type="submit" class="btn btn-primary" value="Guardar">
    <a class="pull-right" href="{{route('cursos.index')}} "><button type="button" class="btn btn-danger">Cancelar</button></a>
		
	</form>
</div>
</div>
</div>
</div>
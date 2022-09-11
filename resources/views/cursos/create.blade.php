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

	<h1>Crear curso</h1>
	<form action="{{url('/cursos')}}" method="post" enctype="multipart/from-data">
	@csrf

	<div class="form-group row">
		<div class="form-group col-md-6">
			<label for="nombre">Nombre del curso</label>
			<input type="text" class="form-control" name="nombre" id="nombre">
		</div>
		<div class="form-group col-md-6">
			<label for="Apellido">Descripcion</label>
			<input type="text" class="form-control" name="descripcion" id="descripcion">
		</div>
	</div>
	<div class="form-group row">	
        <div class="form-group col-md-6">
            <label for="fecha_inicio">Fecha de inicio</label>
            <input type="date" class="form-control" name="fecha_inicio" id="fecha_inicio">
        </div>
        <div class="form-group col-md-6">
            <label for="fecha_fin">Fecha de finalizacion</label>
            <input type="date" class="form-control" name="fecha_fin" id="fecha_fin">
        </div>
	</div>
    <div class="form-group col-md-12">
        <label for="direccion">Estado</label>
	    <input type="text" class="form-control" name="estado" id="estado">
    </div>
	<br>
    <input type="submit" class="btn btn-primary" value="Guardar">
    <a class="pull-right" href="{{route('cursos.index')}} "><button type="button" class="btn btn-danger">Cancelar</button></a>
		
	</form>
	
</div>
</div>
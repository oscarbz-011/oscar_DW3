
@include('app')
@include('menu')
	
<div class="container">
	<br>
	@include('flash::message')
	<br>
	<h1>Lista de Alumnos</h1>
	<a class="pull-right" href="{{route('alumnos.create')}} "><button type="button" class="btn btn-primary">Nuevo</button></a>
	<div class="table-responsive-sm">
		<table class="table table-border" id="tabla">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Apellido</th>
					<th>Edad</th>
					<th>ci</th>
					<th>Telefono</th>
					<th>Direccion</th>
					<th>Gmail</th>
					<th>Profesion</th>
					<th>Genero</th>
					<th>Fecha de nacimineto</th>				
					<th>Curso</th>
					<th>Opciones</th>				
				</tr>
			</thead>
			<tbody>
				@foreach ($alumnos as $a)
				<tr>
					<td>{{$a->nombre}}</td>
					<td>{{$a->apellido}}</td>
					<td>{{$a->edad}}</td>
					<td>{{$a->ci}}</td>
					<td>{{$a->telefono}}</td>
					<td>{{$a->direccion}}</td>
					<td>{{$a->gmail}}</td>
					<td>{{$a->profesion}}</td>
					<td>{{$a->genero}}</td>
					<td>{{$a->fechanac}}</td>
					<td>{{$a->curso->nombre}}</td>

					 <td>
						<div class="btn-group">
							<div class="me-2">
								<a href="{{url('/alumnos/'.$a->id.'/edit')}}">
									<input type="submit" class="btn btn-warning" value="Editar">
								</a>
							</div>

							<div class="me-2">
								<form method="POST" action="{{ url("alumnos/{$a->id}") }}">
								@csrf
								{{method_field('DELETE')}}
								<input type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro')" value="Borrar">
							</form>
							</div>

							<div class="me-2">
							<a href="{{route('alumnos.show', $a->id)}} ">
								<input type="submit" class="btn btn-info" value="Ver">
							</a>
							</div>
						</div>
					</td>

            	</tr>
				@endforeach
			</tbody>
		</table>
    	<div class="d-flex justify-content-end">
    	{{ $alumnos->links() }}
    	</div>
   </div> 
  
</div>

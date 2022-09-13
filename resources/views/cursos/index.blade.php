
@include('app')
@include('menu')	

<div class="container">
	<br>
	@include('flash::message')
	<br>
	<h1>Lista de Cursos</h1>
	<a class="pull-right" href="{{route('cursos.create')}} "><button type="button" class="btn btn-primary">Nuevo</button></a>
	<div class="table-responsive-sm">
		<table class="table table-border" id="tabla">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Fecha de inicio</th>
					<th>Fecha de finalizacion</th>
					<th>Estado</th>
					<th>Opciones</th>								
				</tr>
			</thead>
			<tbody>
				@foreach ($cursos as $c)
				<tr>
					<td>{{$c->nombre}}</td>
					<td>{{$c->descripcion}}</td>
					<td>{{$c->fecha_inicio}}</td>
					<td>{{$c->fecha_fin}}</td>
					<td>{{$c->estado}}</td>
					
                    <td>
                            <div class="btn-group">
                                <div class="me-2">
                                    <a href="{{url('/cursos/'.$c->id.'/edit')}}">
                                        <input type="submit" class="btn btn-warning" value="Editar">
                                    </a>
                                </div>

                                <div class="me-2">
                                <form action="{{url('/cursos/'.$c->id)}}" method="POST">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro')" value="Borrar">
                                </form>
                                </div>

                                <div class="me-2">
                                <a href="{{route('cursos.show', $c->id)}} ">
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
			{{-- $cursos->links() --}}
			</div>
   </div> 
  
</div>

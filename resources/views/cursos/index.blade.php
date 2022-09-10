@include('app')
@include('menu')


<div class="container">
	@include('flash::message')
	<h1>Lista de Cursos</h1>
	<a class="pull-right" href=" "><button type="button" class="btn btn-primary">Nuevo</button></a>
	<div class="table-responsive-sm">
		<table class="table table-border" id="tabla">
			<thead>
				<tr>
					<th>Nombre</th>
					<th>Descripcion</th>
					<th>Fecha de inicio</th>
					<th>Fecha de fin</th>
					<th>Estado</th>
								
				</tr>
			</thead>
			<tbody>
				@foreach ($cursos as $a)
				<tr>
					<td>{{$a->nombre}}</td>
					<td>{{$a->descripcion}}</td>
					<td>{{$a->fecha_inicio}}</td>
					<td>{{$a->fecha_fin}}</td>
					<td>{{$a->estado}}</td>
					
                    <td>
                            <div class="btn-group">
                                <div class="me-2">
                                    <a href="{{--{{url('/cursos/'.$c->id.'/edit')}}--}}">
                                        <input type="submit" class="btn btn-warning" value="Editar">
                                    </a>
                                </div>

                                <div class="me-2">
                                <form action="{{--{{url('/cursos/'.$c->id)}}--}}" method="POST">
                                    @csrf
                                    {{method_field('DELETE')}}
                                    <input type="submit" class="btn btn-danger" onclick="return confirm('Estas seguro')" value="Borrar">
                                </form>
                                </div>

                                <div class="me-2">
                                <a href="{{--{{route('cusos.show', $c->id)}} --}}">
                                    <input type="submit" class="btn btn-info" value="Ver">
                                </a>
                                </div>
                            </div>
                    </td>
            	</tr>
				@endforeach
			</tbody>
		</table>
    	
   </div> 
  
</div>

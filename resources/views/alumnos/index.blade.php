<div class="table-responsive-sm">
    <table class="table table-border" id="tabla">
        <thead>
            <tr>
                <th>Nombre</th>
                <th>Apellido</th>
                <th>Edad</th>
                <th>Ci</th>
                <th>Telefono</th>
                <th>Direccion</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($alumnos as $a)
            <td>{{$a->nombre}}</td>
            <td>{{$a->apellido}}</td> 
            <td>{{$a->edad}}</td> 
            <td>{{$a->ci}}</td> 
            <td>{{$a->telefono}}</td> 
            <td>{{$a->direccion}}</td>     
            @endforeach
        </tbody>
    </table>

</div>
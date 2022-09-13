@include('app')
@include('menu')
<br>
<div class="container">
    <h1>Detalle del Alumno</h1>
    <label for="nombre">Nombre</label>
    <input type="text" class="form-control" name="nombre" id="nombre" value="{{$alumnos->nombre}}" disabled="true">
    <br>
    <label for="apellido">Apellido</label>
    <input type="text" class="form-control" name="apellido" id="apellido" value="{{$alumnos->apellido}}" disabled="true">
    <br>
    <label for="edad">Edad</label>
    <input type="number" class="form-control" name="edad" id="edad" value="{{$alumnos->edad}}" disabled="true">
    <br>
    <label for="ci">Ci</label>
    <input type="text" class="form-control" name="ci" id="ci" value="{{$alumnos->ci}}" disabled="true">
    <br>
    <label for="telefono">Telefono</label>
    <input type="text" class="form-control" name="telefono" id="telefono" value="{{$alumnos->telefono}}" disabled="true">
    <br>
    <label for="direccion">Direccion</label>
    <input type="text" class="form-control" name="direccion" id="direccion" value="{{$alumnos->direccion}}" disabled="true">
    <br>
    <label for="gmail">Gmail</label>
    <input type="gmail" class="form-control" name="gmail" id="gmail" value="{{$alumnos->gmail}}" disabled="true">
    <br>
    <label for="profesion">Profesión</label>
    <input type="text" class="form-control" name="profesion" id="profesion" value="{{$alumnos->profesion}}" disabled="true">
    <br>
    <label for="genero">Genero</label>
    <select class="form-select" aria-label="Default select example" name="genero" id="genero" value="{{$alumnos->genero}}" disabled="true">
        <option selected>Seleccione</option>
        <option value="femenino" {{$alumnos->genero =='Femenino'?'selected':''}}>Femenino</option>
        <option value="masculino" {{$alumnos->genero =='Masculino'?'selected':''}}>Masculino</option>
    </select>
    <br>

    <label for="fechanac">Fecha de Nacimiento</label>
    <input type="date" class="form-control" name="fechanac" id="fechanac" value="{{$alumnos->fechanac}}" disabled="true">
    <br>
    <label for="curso_id">Curso</label>
    <input type="text" class="form-control" name="curso_id" id="curso_id" value="{{$alumnos->curso->nombre}}" disabled="true">
    <br>
    <div class="d-flex justify-content-between">
        <a href="{{route('alumnos.index')}}">
            <button type="button" class="btn btn-danger">Cancelar</button>
        </a>
    </div>
</div>
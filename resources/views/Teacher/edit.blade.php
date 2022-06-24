@extends('Template.template')
@section('plantillaweb')
<div class="container justify-center">
    <h2>Edicion del id_Profesor # {{$teacher->id}}</h2>
    <form action="{{route('teachers.update',$teacher)}}" method="post" class="form">
        @method('PUT')
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="" class="form.label">Nombres:</label>
            <input type="text" name="nombres" class="form-control" id="" value="{{$teacher->nombres}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido:</label>
            <input type="text" class="form-control" name="apellidos" value="{{$teacher->apellidos}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion"  value="{{$teacher->direccion}}">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" name="correo" value="{{$teacher->correo}}">
            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.
                
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Celular</label>
            <input type="number" class="form-control" name="celular" value="{{$teacher->celular}}">
        </div>


        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nivel de Formacion</label>
            <input disabled="disabled" type="text" name="nivel_academico" value="{{$teacher->nivel_academico}}"><br>
            <select class="form-select" aria-label="Default select example" name="nivel_academico">
                <option selected>Nivel Academico</option>
                <option value="1">Bachiller Academico</option>
                <option value="2">Tecnico</option>
                <option value="3">Tecnologo</option>
                <option value="4">Magister</option>
                <option value="5">Doctorado</option>
            </select>
            <div id="emailHelp" class="form-text">Elija almenos una opcion.</div>

        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection

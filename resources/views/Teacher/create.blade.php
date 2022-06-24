@extends('Template.template')
@section('plantillaweb')
<div class="container justify-center">
    <h2>Formulario Registro</h2>
    <form action="{{route('teachers.store')}}" method="post" class="form">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="" class="form.label">Nombre:</label>
            <input type="text" name="nombres" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Apellido:</label>
            <input type="text" class="form-control" name="apellidos">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Direccion</label>
            <input type="text" class="form-control" name="direccion">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Correo</label>
            <input type="email" class="form-control" name="correo">
            <div id="emailHelp" class="form-text">Nunca compartiremos su correo electrónico con nadie más.
                
            </div>
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Celular</label>
            <input type="number" class="form-control" name="celular">
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Nivel de Formacion</label>
            <select class="form-select" aria-label="Default select example" name="nivel_academico">
                <option selected>Nivel Academico</option>
                <option value="1">Bachiller Academico</option>
                <option value="2">Tecnico</option>
                <option value="3">Tecnologo</option>
                <option value="4">Profesional</option>
                <option value="6">Magister</option>
                <option value="7">Doctorado</option>
            </select>
            <div id="emailHelp" class="form-text">Elija almenos una opcion.</div>

        </div>
        
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection

@extends('Template.template')
@section('plantillaweb')
<div class="container justify-center">
    <h2>Registro de Materia</h2>
    <form action="{{route('subjects.store')}}" method="post" class="form">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="" class="form.label">Nombre:</label>
            <input type="text" name="nombre" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Credios:</label>
            <input type="text" class="form-control" name="creditos">
            <div id="emailHelp" class="form-text">Nunca compartiremos su informacoin con nadie más.
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Costo</label>
            <input type="text" class="form-control" name="costo">
        </div>
        
        
        
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection

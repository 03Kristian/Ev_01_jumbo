@extends('Template.template')
@section('plantillaweb')
<div class="container justify-center">
    <h2>Registro de Aulas</h2>
    <form action="{{route('classroom.store')}}" method="post" class="form">
        {{ csrf_field() }}
        <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">Lunes</span>
            <input type="text" class="form-control" name="lunes" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">martes</span>
            <input type="text" class="form-control" name="martes" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">miercoles</span>
            <input type="text" class="form-control" name="miercoles" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">jueves</span>
            <input type="text" class="form-control" name="jueves" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          <div class="input-group mb-3">
            <span class="input-group-text" id="inputGroup-sizing-default">viernes</span>
            <input type="text" class="form-control" name="viernes" aria-label="Sizing example input" aria-describedby="inputGroup-sizing-default">
          </div>
          
        
        
        
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection

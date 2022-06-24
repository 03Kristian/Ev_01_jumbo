@extends('Template.template')
@section('plantillaweb')
<div class="container justify-center">
    <h2>Edicion del Horario # {{$times->id}}</h2>
    <form action="{{route('time.update',$times)}}" method="post" class="form">
        @method('PUT')
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="" class="form.label">Lunes:</label>
            <input type="time" name="lunes" id="" value="{{$times->hora_lunes}}">
            {{-- <input type="text" name="nombres" class="form-control" id="" value="{{$teacher->nombres}}"> --}}
        </div>

        <div class="mb-3">
            <label for="" class="form.label">Martes:</label>
            <input type="time" name="martes" id="" value="{{$times->hora_martes}}">
        </div>
        <div class="mb-3">
            <label for="" class="form.label">Miercoles:</label>
            <input type="time" name="miercoles" id="" value="{{$times->hora_miercoles}}">
        </div><div class="mb-3">
            <label for="" class="form.label">Jueves:</label>
            <input type="time" name="jueves" id="" value="{{$times->hora_jueves}}">
        </div><div class="mb-3">
            <label for="" class="form.label">Viernes:</label>
            <input type="time" name="viernes" id="" value="{{$times->hora_viernes}}">
        </div>
        
        
        <button type="submit" class="btn btn-primary">Submit</button>

    </form>
</div>
@endsection

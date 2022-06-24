@extends('Template.template')
@section('plantillaweb')

<div class="container justify-center">
    <h2>Registrar grupos:</h2>
    <form action="{{route('groups.store')}}" method="post" class="form">
        {{ csrf_field() }}
        <div class="mb-3">
            <label for="" class="form.label">Año:</label>
            <input type="text" name="anio" class="form-control" id="">
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail1" class="form-label">Periodo:</label>
            <input type="text" class="form-control" name="periodo">
            <div id="emailHelp" class="form-text">Nunca compartiremos su informacoin con nadie más.
        </div>
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Docente:</label>
            <select class="form-select" aria-label="Default select example" name="teacher_id">
                    <option selected="true" disabled="disables">Profesores</option>
                @foreach ($teacher as $tea)
                   <option value="{{$tea->id}}">{{$tea->nombres}} {{$tea->apellidos}}</option> 
                @endforeach
                
            </select>
            <div id="emailHelp" class="form-text">Elija almenos una opcion.</div>

        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Tema:</label>
            <select class="form-select" aria-label="Default select example" name="subject_id">
                    <option selected="true" disabled="disables">Materia</option>
                @foreach ($subjects as $sub)
                   <option value="{{$sub->id}}">{{$sub->nombre}} {{$sub->creditos}}</option> 
                @endforeach
                
            </select>
            <div id="emailHelp" class="form-text">Elija almenos una opcion.</div>

        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Aula designada</label>
            <select class="form-select" aria-label="Default select example" name="classrooms_id">
                    <option selected="true" disabled="disables">Lunes/Martes/Miercoles/Jueves/Viernes</option>
                @foreach ($classroom as $class)
                   <option value="{{$class->id}}">{{$class->aula_lunes}}/ {{$class->aula_martes}}/ {{$class->aula_miercoles}}/ {{$class->aula_jueves}}/ {{$class->aula_viernes}}</option> 
                @endforeach
                
            </select>
            <div id="emailHelp" class="form-text">Elija almenos una opcion.</div>
        </div>
        
        <div class="mb-3">
            <label for="exampleInputPassword1" class="form-label">Horario designado</label>
            <select class="form-select" aria-label="Default select example" name="group_time">
                    <option selected="true" disabled="disables">Lunes/Martes/Miercoles/Jueves/Viernes</option>
                @foreach ($groupTime as $time)
                   <option value="{{$time->id}}">{{$time->hora_lunes}}/ {{$time->hora_martes}}/ {{$time->hora_miercoles}}/ {{$time->hora_jueves}}/ {{$time->hora_viernes}}</option> 
                   
                @endforeach
                
            </select>
            <div id="emailHelp" class="form-text">Elija almenos una opcion.</div>
        </div>

        <button type="submit" class="btn btn-primary">Continuar</button>

    </form>
</div>
@endsection

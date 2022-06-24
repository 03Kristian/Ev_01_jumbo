@extends('Template.template')
@section('plantillaweb')

<h2>LISTADO DE GRUPOS DEL PROGRAMA</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Año</th>
        <th scope="col">Periodo</th>
        <th scope="col">Instructor</th>
        <th scope="col">Area</th>
        <th scope="col">Ambiente</th>
        <th scope="col">Horario</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($Groups as $group)
      <tr>
        <td scope="row"> {{$group->id}}</td>
        <th scope="row">{{$group->anio}}</th>
        <td scope="row"> {{$group->periodo}}</td>
        <td scope="row"> {{$group->teacher_id}}</td>
        <td scope="row"> {{$group->subject_id}}</td>
        <td scope="row"> {{$group->classrooms_id}}</td>
        <td scope="row"> {{$group->group_time}}</td>
        
        <td>
          <a href="{{route('groups.edit',$group)}}" class="btn btn-warning" tabindex="-1" role="button" aria-disabled="true">Editar</a>
        </td>
        <td> 
          <form action="{{route('groups.destroy',$group->id)}}" method="post">
            @method('DELETE')
            @csrf
            
          <a href="{{route('groups.destroy',$group->id)}}" class="btn btn-danger"  role="button" aria-disabled="true">Eliminar</a>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$Groups->links()}}
@endsection
@extends('Template.template')
@section('plantillaweb')

<h2>LISTADO DE AMBIENTES DE LOS PROGRAMAS</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">lunes</th>
        <th scope="col">Martes</th>
        <th scope="col">Miercoles</th>
        <th scope="col">Jueves</th>
        <th scope="col">Viernes</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($classroom as $class)
      <tr>
        <td scope="row"> {{$class->id}}</td>
        <th scope="row">{{$class->aula_lunes}}</th>
        <td scope="row"> {{$class->aula_martes}}</td>
        <td scope="row"> {{$class->aula_miercoles}}</td>
        <td scope="row"> {{$class->aula_jueves}}</td>
        <td scope="row"> {{$class->aula_viernes}}</td>

        {{-- <td>
          <a href="{{route('classs.edit',$class)}}" class="btn btn-warning btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Editar</a>
        </td>
        <td> 
          <form action="{{route('classs.destroy',$class->id)}}" method="post">
            @method('DELETE')
            @csrf
            
          <a href="{{route('classs.destroy',$class->id)}}" class="btn btn-danger"  role="button" aria-disabled="true">Eliminar</a>
          </form>
        </td> --}}
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$classroom->links()}}
@endsection
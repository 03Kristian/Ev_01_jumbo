@extends('Template.template')
@section('plantillaweb')

<h2>LISTADO DE MATERIAS DEL PROGRAMA</h2>
<table class="table">
    <thead>
      <tr>
        <th scope="col">#</th>
        <th scope="col">Nombe</th>
        <th scope="col">Credito</th>
        <th scope="col">Costo</th>
      </tr>
    </thead>
    <tbody>
        @foreach ($subjects as $sub)
      <tr>
        <td scope="row"> {{$sub->id}}</td>
        <th scope="row">{{$sub->nombre}}</th>
        <td scope="row"> {{$sub->creditos}}</td>
        <td scope="row"> {{$sub->costo}}</td>
        
        <td>
          <a href="{{route('subjects.edit',$sub)}}" class="btn btn-warning btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Editar</a>
        </td>
        <td> 
          <form action="" method="post">
            @method('DELETE')
            @csrf
          <a href="{{route('subjects.destroy',$sub)}}" class="btn btn-danger btn-lg disabled" tabindex="-1" role="button" aria-disabled="true">Eliminar</a>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$subjects->links()}}
@endsection

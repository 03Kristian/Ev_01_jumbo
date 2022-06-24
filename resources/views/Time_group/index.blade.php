@extends('Template.template')
@section('plantillaweb')

<h2>LISTADO DE HORARIOS DE LLEGADA</h2>
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
        @foreach ($time as $times)
      <tr>
        <td scope="row"> {{$times->id}}</td>
        <th scope="row">{{$times->hora_lunes}}</th>
        <td scope="row"> {{$times->hora_martes}}</td>
        <td scope="row"> {{$times->hora_miercoles}}</td>
        <td scope="row"> {{$times->hora_jueves}}</td>
        <td scope="row"> {{$times->hora_viernes}}</td>
        <td>
          <a href="{{route('time.edit',$times)}}" class="btn btn-warning " tabindex="-1" role="button" aria-disabled="true">Editar</a>
        </td>
        <td> 
          <form action="{{route('time.destroy',$times->id)}}" method="post">
            @method('DELETE')
            @csrf
            <button type="submit" class="btn btn-danger" >Eliminar</button>  
          {{-- <a href="{{route('time.destroy',$times->id)}}" class="btn btn-danger"  role="button" aria-disabled="true">Eliminar</a> --}}
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
  {{$time->links()}}
@endsection
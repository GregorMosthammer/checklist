

@extends('layouts.app')

@section('content')
<div class="container">
<div class="row">
        <div class="col-md-8 col-md-offset-2">
            <div class="panel panel-default">
                <div class="panel-heading">ADMIN Dashboard</div>

                <div class="panel-body">
                    @component('components.who')
                    @endcomponent
                </div>
            </div>
        </div>
    </div>
    <table class="table">
    <thead>
      <tr>
        <th>Firstname</th>
        <th>Lastname</th>
        <th>Phone number</th>
        <th>Checklist status</th>
      </tr>
    </thead>
    <tbody>
    
     @foreach($students as $student)
       
      <tr>
        <td><a href="{{url('detail')}}" onclick="admin.update">{{$student->firstname}}</a></td>
        <td>{{$student->lastname}}</td>
        <td>{{$student->phone}}</td>
        <td><a href="#">details...</a></td>
      </tr>
   
      
     @endforeach
      </tbody>
  </table>
</div>
@endsection
@extends('layouts.master')
@section('content')
<div class="book padd-60">
 <div class="container">
   <div class="row">
     <div class="col-md-6 offset-md-3">
     @if ($errors->any())
                 <div class="alert alert-danger">
                    <ul>
                        @foreach ($errors->all() as $error)
                            <li>{{ $error }}</li>
                        @endforeach
                   </ul>
               </div>
        @endif

        @if(session()->has('message'))
               <div class="alert alert-{{session('type')}}">
                    {{session('message')}}
               </div>
         @endif
<table class="table">
  <thead>
    <tr>
      <th scope="col">ID</th>
      <th scope="col">Phone</th>
      <th scope="col">Phone ID</th>
    </tr>
  </thead>
  <tbody>
  @foreach($phone as $phones)
    <tr>
      <th scope="row">{{$phones->id}}</th>
      <td>{{$phones->phone}}</td>
      <td>{{$phones->phone_id}}</td>
    </tr>
    @endforeach
  </tbody>
</table>
     </div>
   </div>
 </div>
</div>
@endsection

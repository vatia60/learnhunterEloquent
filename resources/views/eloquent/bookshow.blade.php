@extends('layouts.master')
@section('content')
<div class="book padd-60">
 <div class="container">
   <div class="row">
     <div class="col-md-8 offset-md-2">
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
       <div class="book-show padd-40">
       <h2 class="text-center">Book</h2>
         <table class="table">
            <thead>
              <tr>
                <th scope="col">ID</th>
                <th scope="col">Book Name</th>
                <th scope="col">Author</th>
                <th scope="col">Titel</th>
                <th scope="col">Description</th>
              </tr>
            </thead>
            <tbody>
            @foreach($book as $books)
              <tr>
                <th scope="row">{{$books->id}}</th>
                <td>{{$books->book_name}}</td>
                <td>{{$books->book_author}}</td>
                <td>{{$books->book_title}}</td>
                <td>{{$books->book_desc}}</td>
              </tr>
              @endforeach
            </tbody>
          </table>
       </div>
     </div>
   </div>
 </div>
</div>
@endsection

@extends('layouts.master')
@section('content')
<div class="book">
 <div class="container">
   <div class="row">
     <div class="col-md-6 offset-md-3">
       <form action="{{route('book.index')}}" method="post">
         <div class="form-group">
           <input name="book_name" value="{{old('')}}" type="text" class="form-control" placeholder="Book Name">
         </div>
         <div class="form-group">
           <input name="book_author" value="{{old('')}}" type="text" class="form-control" placeholder="Book Author">
         </div>
         <div class="form-group">
           <input name="book_title" value="{{old('')}}" type="text" class="form-control" placeholder="Book Title">
         </div>
         <div class="form-group">
           <input name="book_desc" value="{{old('')}}" type="text" class="form-control" placeholder="Book Description">
         </div>
         <button type="submit" class="btn btn-success">Send</button>
       </form>
     </div>
   </div>
 </div>
</div>
@endsection
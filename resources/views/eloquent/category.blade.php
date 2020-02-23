@extends('layouts.master')
@section('content')
<div class="book">
 <div class="container">
   <div class="row">
     <div class="col-md-6 offset-md-3">
       <form action="{{route('category.index')}}" method="post">
         <div class="form-group">
           <input name="category_name" value="{{old('category_name')}}" type="text" class="form-control" placeholder="Category Name">
         </div>
         <div class="form-group">
           <input name="category_slug" value="{{old('category_slug')}}" type="text" class="form-control" placeholder="Category Slug">
         </div>
         <div class="form-group">
           <input name="category_id" type="text" class="form-control" placeholder="Category ID">
         </div>
         <button type="submit" class="btn btn-success">Send</button>
       </form>
     </div>
   </div>
 </div>
</div>
@endsection
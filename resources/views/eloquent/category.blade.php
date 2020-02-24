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
       <form action="{{route('category.create')}}" method="post">
       @csrf
         <div class="form-group">
           <input name="category_name" value="{{old('category_name')}}" type="text" class="form-control" placeholder="Category Name">
         </div>
         <div class="form-group">
           <input name="category_slug" value="{{old('category_slug')}}" type="text" class="form-control" placeholder="Category Slug">
         </div>
         <div class="form-group">
           <input name="category_id" value="{{old('category_id')}}" type="text" class="form-control" placeholder="Category ID">
         </div>
         <button type="submit" class="btn btn-success">Send</button>
       </form>
     </div>
   </div>
 </div>
</div>
@endsection

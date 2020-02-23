@extends('layouts.master')
@section('content')
<div class="book">
 <div class="container">
   <div class="row">
     <div class="col-md-6 offset-md-3">
       <form action="{{route('phone.index')}}" method="post">
         <div class="form-group">
           <input name="phone" value="{{old('phone')}}" type="text" class="form-control" placeholder="Phone Number">
         </div>
         <div class="form-group">
           <input name="phone_id" type="text" class="form-control" placeholder="Phone ID">
         </div>
         <button type="submit" class="btn btn-success">Send</button>
       </form>
     </div>
   </div>
 </div>
</div>
@endsection
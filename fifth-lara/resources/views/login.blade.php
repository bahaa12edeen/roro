@extends('layout.master')

@section('content')
<div class="container" style="margin-top:100px">
    <form>
    
        <div class="mb-3">
    
        <label for="exampleInputEmail1" class="form-label">Email address</label>
        <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
      </div>
      <div class="mb-3">
        <label for="exampleInputPassword1" class="form-label">Password</label>
        <input type="password" class="form-control" id="exampleInputPassword1" name="password">
      </div>
      
     
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
    </div>
@endsection
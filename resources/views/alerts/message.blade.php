@if ($errors->any())
   
 @foreach ($errors->all() as $error)
    <div class="alert alert-danger alert-dismissible">
      <strong>Error !</strong>{{$error}}
    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
     </div>
 @endforeach
     
@endif

@if (session('error'))
  <div class="alert alert-danger alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
       <strong>Error !</strong>{{session('error')}}
  </div>
@endif

@if (session('success'))
  <div class="alert alert-success alert-dismissable">
    <button type="button" class="close" data-dismiss="alert">&times;</button>
       <strong>Success !</strong>{{session('success')}}
  </div>
@endif
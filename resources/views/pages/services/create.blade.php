@extends('layouts.admin_layout');
@section('content')
    <main>
          <div class="container-fluid px-4">
             <h1 class="mt-4">Create</h1>
                <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                     <li class="breadcrumb-item active">create</li>
                </ol>
                            
          <form action="{{url('admin/service/store')}}" method="post" enctype="multipart/form-data">
            @csrf
          
            <div class="row">
            
            <div class="col-md-4 form-group mt-3">
                <div class="mb-3">
                <label for="icon"><h4>Font Awesome Icon</h4></label>
                <input type="text" class="form-control" id="icon" name="icon">
                </div>
                <div class="mb-5">
                <label for="title"><h4>Title</h4></label>
                <input type="text" class="form-control" id="title" name="title" >
                </div>
                <div class="mb-5">
                <label for="description"><h4>Description</h4></label>
                <textarea  class="form-control" id="description" name="description"></textarea>
              </div>
                
              </div>
            </div>
            <input type="submit"  name="submit" class="btn btn-primary mt-5">
          
          </div>
                  </form>
        </main>
@endsection
                
              

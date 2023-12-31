@extends('layouts.admin_layout');
@section('content')
    <main>
          <div class="container-fluid px-4">
             <h1 class="mt-4">Create</h1>
                <ol class="breadcrumb mb-4">
                      <li class="breadcrumb-item"><a href="{{url('admin/dashboard')}}">Dashboard</a></li>
                     <li class="breadcrumb-item active">create</li>
                </ol>
                            
             <form action="{{url('admin/about/store')}}" method="post" enctype="multipart/form-data">
            @csrf
            {{method_field('PUT')}}
            <div class="row">
            <div class="col-md-3 form-group mt-3">
                <h3> Image</h3>
                <img style="height:30vh" src="{{asset('assets/img/big_img.jpeg')}}" alt="" class="img-thumbnail">
                <input type="file"  name="image" class="mt-3">
            </div>
            
            <div class="col-md-4 form-group mt-3">
                <div class="mb-3">
                <label for="title1"><h4>Title1</h4></label>
                <input type="text" class="form-control" id="title1" name="title1" value="">
                </div>
                <div class="mb-5">
                <label for="title2"><h4>Title2</h4></label>
                <input type="text" class="form-control" id="title2" name="title2" value="">
                </div>
                
              </div>
            <div class="col-md-6 form-group mt-3">
              <h3>Description</h3>
              <textarea name="description" class="form-control"  rows="5"></textarea>
            </div>
            
                
              </div>

            </div>
            <input type="submit"  name="submit" class="btn btn-primary mr-5">
          
          </div>
                  </form>
        </main>
@endsection
                
              

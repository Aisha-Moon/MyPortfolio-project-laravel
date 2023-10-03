@extends('frontend.master')
@section('content')
        <!-- Masthead-->
                

         @include('frontend.includes.main');

        <!-- Services-->
       @include('frontend.includes.service');
        <!-- Portfolio Grid-->
      @include('frontend.includes.portfolio');

        <!-- About-->
        
        @include('frontend.includes.about');
 
        <!-- Clients-->
       @include('frontend.includes.clients');
  
        <!-- Contact-->
       @include('frontend.includes.contact');

        <!-- Footer-->
      
        <!-- Portfolio Modals-->
     
   @endsection
       

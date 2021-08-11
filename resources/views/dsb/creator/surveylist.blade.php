@extends('dsb.creator.layouts.app') 

@section('sidebar')
@include('dsb.creator.layouts.sidebar')
@parent
@endsection


    <!-- Navbar -->
    @section('navbar')
    @include('dsb.creator.layouts.navbar')
    @parent
    @endsection
    <!-- End Navbar -->

    @section('main-content')
    <div class="content">
      <!-- ----------------------------------------------------MAIN CONTENT FOR BACKEND------------------------------------------------------------->
  
  
  
      
  
  
      <!-- ----------------------------------------------------END MAIN CONTENT FOR BACKEND--------------------------------------------------------->
    </div>
    @endsection

   <!--footer -->
   @section('footer')
   @include('dsb.creator.layouts.footer')
   @parent
   @endsection
   <!--footer -->

   <!--side filter -->
   @section('sidefilter')
   @include('dsb.creator.layouts.sidefilter')
   @parent
   @endsection
   <!-- side filter -->

   <!--   Core JS Files   -->
   @section('corejs')
   @include('layouts.corejs')
   @parent
   @endsection
<!--   Core JS Files   -->

<!--   Script Plugins -->
   @section('adminplugin')
   @include('dsb.creator.layouts.plugins.adminplugin')
   @parent
   @endsection
<!--   Script Plugins -->
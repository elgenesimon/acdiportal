@extends('dsb.reports.layouts.app') 

@section('sidebar')
@include('dsb.reports.layouts.sidebar')
@parent
@endsection


    <!-- Navbar -->
    @section('navbar')
    @include('dsb.reports.layouts.navbar')
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
   @include('dsb.reports.layouts.footer')
   @parent
   @endsection
   <!--footer -->

   <!--side filter -->
   @section('sidefilter')
   @include('dsb.reports.layouts.sidefilter')
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
   @include('dsb.reports.layouts.plugins.adminplugin')
   @parent
   @endsection
<!--   Script Plugins -->
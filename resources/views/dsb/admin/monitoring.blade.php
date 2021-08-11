@extends('dsb.admin.layouts.app') 

@section('sidebar')
@include('dsb.admin.layouts.sidebar')
@parent
@endsection


    <!-- Navbar -->
    @section('navbar')
    @include('dsb.admin.layouts.navbar')
    @parent
    @endsection
    <!-- End Navbar -->

    @section('main-content')
    <div class="content">
        <div class="content">
          <div class="container-fluid">
            
            <div class="header text-center ml-auto mr-auto">
              <h3 class="title">Survey Monitoring</h3>
            </div>
            
            <div class="row">
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-warning card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">supervised_user_circle</i>
                    </div>
                    <p class="card-category">Active Survey</p>
                    <h3 class="card-title">3</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons text-danger">warning</i>
                      <a href="#pablo">Get More Space...</a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-rose card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">downloading</i>
                    </div>
                    <p class="card-category">For Approval</p>
                    <h3 class="card-title">2</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">local_offer</i> Tracked from Google Analytics
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-success card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">published_with_changes</i>
                    </div>
                    <p class="card-category">For Review</p>
                    <h3 class="card-title">2</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">date_range</i> Last 24 Hours
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-lg-3 col-md-6 col-sm-6">
                <div class="card card-stats">
                  <div class="card-header card-header-info card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">perm_media</i>
                    </div>
                    <p class="card-category">Reports</p>
                    <h3 class="card-title">4</h3>
                  </div>
                  <div class="card-footer">
                    <div class="stats">
                      <i class="material-icons">update</i> Just Updated
                    </div>
                  </div>
                </div>
              </div>
            </div>

            
            <div class="row">
              <div class="col-md-12">
                <div class="card">
                  <div class="card-header card-header-primary card-header-icon">
                    <div class="card-icon">
                      <i class="material-icons">assignment</i>
                    </div>
                    <h4 class="card-title">Survey List</h4>
                  </div>
                  <div class="card-body">
                    <div class="toolbar">
                      <!--        Here you can write extra buttons/actions for the toolbar              -->
                    </div>
                    <div class="material-datatables">
                      <table id="datatables" class="table table-striped table-no-bordered table-hover" cellspacing="0" width="100%" style="width:100%">
                        <thead>
                          <tr>
                            <th>Survey Name</th>
                            <th>Target Audience</th>
                            <th>Platform</th>
                            <th>Requested By</th>
                            <th>Started Date</th>
                            <th>Status</th>
                            <th>Started Date</th>
                            <th class="disabled-sorting text-right">Actions</th>
                          </tr>
                        </thead>
                        <tfoot>
                          <tr>
                            <th>Survey Name</th>
                            <th>Target Audience</th>
                            <th>Platform</th>
                            <th>Request By</th>
                            <th>Started Date</th>
                            <th>Status</th>
                            <th>End Date</th>
                            <th class="disabled-sorting text-right">Actions</th>
                          </tr>
                        </tfoot>
                        <tbody>
                          <tr>
                            <td>Website Survey</td>
                            <td>Website Viewer</td>
                            <td>Mobile and PC User</td>
                            <td>Marketing Department</td>
                            <td>2021/04/25</td>
                            <td>Ongoing</td>
                            <td>2021/09/25</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                              <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                              <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                            </td>
                          </tr>  
                          <tr>
                            <td>Website Survey</td>
                            <td>Website Viewer</td>
                            <td>Mobile and PC User</td>
                            <td>Marketing Department</td>
                            <td>2021/04/25</td>
                            <td>Ongoing</td>
                            <td>2021/09/25</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                              <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                              <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                            </td>
                          </tr> 
                          <tr>
                            <td>Website Survey</td>
                            <td>Website Viewer</td>
                            <td>Mobile and PC User</td>
                            <td>Marketing Department</td>
                            <td>2021/04/25</td>
                            <td>Ongoing</td>
                            <td>2021/09/25</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                              <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                              <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                            </td>
                          </tr> 
                          <tr>
                            <td>Website Survey</td>
                            <td>Website Viewer</td>
                            <td>Mobile and PC User</td>
                            <td>Marketing Department</td>
                            <td>2021/04/25</td>
                            <td>Ongoing</td>
                            <td>2021/09/25</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                              <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                              <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                            </td>
                          </tr> 
                          <tr>
                            <td>Website Survey</td>
                            <td>Website Viewer</td>
                            <td>Mobile and PC User</td>
                            <td>Marketing Department</td>
                            <td>2021/04/25</td>
                            <td>Ongoing</td>
                            <td>2021/09/25</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                              <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                              <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                            </td>
                          </tr> 
                          <tr>
                            <td>Website Survey</td>
                            <td>Website Viewer</td>
                            <td>Mobile and PC User</td>
                            <td>Marketing Department</td>
                            <td>2021/04/25</td>
                            <td>Ongoing</td>
                            <td>2021/09/25</td>
                            <td class="text-right">
                              <a href="#" class="btn btn-link btn-info btn-just-icon like"><i class="material-icons">favorite</i></a>
                              <a href="#" class="btn btn-link btn-warning btn-just-icon edit"><i class="material-icons">dvr</i></a>
                              <a href="#" class="btn btn-link btn-danger btn-just-icon remove"><i class="material-icons">close</i></a>
                            </td>
                          </tr>                         
                        </tbody>
                      </table>
                    </div>
                  </div>
                  <!-- end content-->
                </div>
                <!--  end card  -->
              </div>
              <!-- end col-md-12 -->
            </div>


            

          </div>

        </div>
    </div>
    @endsection

    <!--footer -->
    @section('footer')
    @include('dsb.admin.layouts.footer')
    @parent
    @endsection
    <!--footer -->

    <!--side filter -->
    @section('sidefilter')
    @include('dsb.admin.layouts.sidefilter')
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
    @include('dsb.admin.layouts.plugins.adminplugin')
    @parent
    @endsection
<!--   Script Plugins -->

<!--   dashboard Plugins -->
@section('pageplugin')
@include('dsb.admin.layouts.plugins.dplugin')


<script>
  $(document).ready(function() {
    $('#datatables').DataTable({
      "pagingType": "full_numbers",
      "lengthMenu": [
        [10, 25, 50, -1],
        [10, 25, 50, "All"]
      ],
      responsive: true,
      language: {
        search: "INPUT",
        searchPlaceholder: "Search records",
      }
    });

    var table = $('#datatables').DataTable();

    // Edit record

    table.on('click', '.edit', function() {
      $tr = $(this).closest('tr');

      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }

      var data = table.row($tr).data();
      alert('You press on Row: ' + data[0] + ' ' + data[1] + ' ' + data[2] + '\'s row.');
    });

    // Delete a record

    table.on('click', '.remove', function(e) {
      $tr = $(this).closest('tr');

      if ($($tr).hasClass('child')) {
        $tr = $tr.prev('.parent');
      }

      table.row($tr).remove().draw();
      e.preventDefault();
    });

    //Like record

    table.on('click', '.like', function() {
      alert('You clicked on Like button');
    });
  });
</script>


@parent
@endsection
<!--   Script Plugins -->
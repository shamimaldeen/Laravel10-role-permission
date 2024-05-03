<!DOCTYPE html>
<html>
    @php
        $general_setting = \Illuminate\Support\Facades\DB::table('general_settings')->latest()->first();
    @endphp
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <link rel="icon" type="image/png" href="{{url('public/logo', $general_setting->site_logo)}}" />
      <title>{{$general_setting->site_title}}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="robots" content="all,follow">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="manifest" href="{{url('manifest.json')}}">
    <!-- Bootstrap CSS-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap-toggle/css/bootstrap-toggle.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap-datepicker.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/jquery-timepicker/jquery.timepicker.min.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/awesome-bootstrap-checkbox.css') ?>" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/vendor/bootstrap/css/bootstrap-select.min.css') ?>" type="text/css">
    <!-- Font Awesome CSS-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/font-awesome/css/font-awesome.min.css') ?>" type="text/css">
    <!-- Drip icon font-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/dripicons/webfont.css') ?>" type="text/css">
    <!-- Google fonts - Roboto -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Nunito:400,500,700">
    <!-- jQuery Circle-->
    <link rel="stylesheet" href="<?php echo asset('public/css/grasp_mobile_progress_circle-1.0.0.min.css') ?>" type="text/css">
    <!-- Custom Scrollbar-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.css') ?>" type="text/css">
    <!-- virtual keybord stylesheet-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/keyboard/css/keyboard.css') ?>" type="text/css">
    <!-- date range stylesheet-->
    <link rel="stylesheet" href="<?php echo asset('public/vendor/daterange/css/daterangepicker.min.css') ?>" type="text/css">
    <!-- table sorter stylesheet-->
    <link rel="stylesheet" type="text/css" href="<?php echo asset('public/vendor/datatable/dataTables.bootstrap4.min.css') ?>">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/fixedheader/3.1.6/css/fixedHeader.bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/responsive/2.2.3/css/responsive.bootstrap.min.css">
    <link rel="stylesheet" href="<?php echo asset('public/css/style.default.css') ?>" id="theme-stylesheet" type="text/css">
    <link rel="stylesheet" href="<?php echo asset('public/css/dropzone.css') ?>">
    <link rel="stylesheet" href="<?php echo asset('public/css/style.css') ?>">
    <!-- Tweaks for older IEs--><!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
        <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery/jquery.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery/jquery-ui.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery/bootstrap-datepicker.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery/jquery.timepicker.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/popper.js/umd/popper.min.js') ?>">
    </script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/bootstrap/js/bootstrap.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/bootstrap-toggle/js/bootstrap-toggle.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/bootstrap/js/bootstrap-select.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/keyboard/js/jquery.keyboard.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/keyboard/js/jquery.keyboard.extension-autocomplete.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/js/grasp_mobile_progress_circle-1.0.0.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery.cookie/jquery.cookie.js') ?>">
    </script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/chart.js/Chart.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/jquery-validation/jquery.validate.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/malihu-custom-scrollbar-plugin/jquery.mCustomScrollbar.concat.min.js')?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/js/charts-custom.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/js/front.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/daterange/js/moment.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/daterange/js/knockout-3.4.2.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/daterange/js/daterangepicker.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/tinymce/js/tinymce/tinymce.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/js/dropzone.js') ?>"></script>

    <!-- table sorter js-->
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/pdfmake.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/vfs_fonts.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/jquery.dataTables.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/dataTables.bootstrap4.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/dataTables.buttons.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/buttons.bootstrap4.min.js') ?>">"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/buttons.colVis.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/buttons.html5.min.js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/buttons.print.min.js') ?>"></script>

    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/sum().js') ?>"></script>
    <script type="text/javascript" src="<?php echo asset('public/vendor/datatable/dataTables.checkboxes.min.js') ?>"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/fixedheader/3.1.6/js/dataTables.fixedHeader.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/dataTables.responsive.min.js"></script>
    <script type="text/javascript" src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>
    <!-- Custom stylesheet - for your changes-->
    <link rel="stylesheet" href="<?php echo asset('public/css/custom-'.$general_setting->theme) ?>" type="text/css" id="custom-style">
  </head>

  <body onload="myFunction()">
    <div id="loader"></div>
      <!-- Side Navbar -->
      <nav class="side-navbar">
        <div class="side-navbar-wrapper">
          <!-- Sidebar Header    -->
          <!-- Sidebar Navigation Menus-->
          <div class="main-menu">
            <ul id="side-main-menu" class="side-menu list-unstyled">
              <li><a href="{{url('/')}}"> <i class="dripicons-meter"></i><span>Dashboard</span></a></li>



                <?php
                $role = \Illuminate\Support\Facades\DB::table('roles')->find(Auth::user()->role_id);
                $user_index_permission_active = DB::table('permissions')
                    ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                    ->where([
                        ['permissions.name', 'users-index'],
                        ['role_id', $role->id] ])->first();
                ?>
                @if($user_index_permission_active)
              <li><a href="#people" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-user"></i><span>User</span></a>
                <ul id="people" class="collapse list-unstyled ">
                    @if($user_index_permission_active)
                  <li id="user-list-menu"><a href="{{route('user.index')}}">User List</a></li>
                        <?php $user_add_permission_active = DB::table('permissions')
                        ->join('role_has_permissions', 'permissions.id', '=', 'role_has_permissions.permission_id')
                        ->where([
                            ['permissions.name', 'users-add'],
                            ['role_id', $role->id] ])->first();
                        ?>
                    @if($user_add_permission_active)

                  <li id="user-create-menu"><a href="{{route('user.create')}}">Add User</a></li>

                        @endif
                    @endif
                </ul>

              </li>
          @endif



              <li><a href="#setting" aria-expanded="false" data-toggle="collapse"> <i class="dripicons-gear"></i><span>Settings</span></a>
                <ul id="setting" class="collapse list-unstyled ">
                  <?php
                   $role =  \Illuminate\Support\Facades\DB::table('roles')->find(Auth::user()->role_id);
                   $general_setting_permission =  \Illuminate\Support\Facades\DB::table('permissions')->where('name', 'general_setting')->first();
                      $general_setting_permission_active = \Illuminate\Support\Facades\DB::table('role_has_permissions')->where([
                                  ['permission_id', $general_setting_permission->id],
                                  ['role_id', $role->id]
                              ])->first();

                  $currency_permission = \Illuminate\Support\Facades\DB::table('permissions')->where('name', 'currency')->first();
                  $currency_permission_active = DB::table('role_has_permissions')->where([
                      ['permission_id', $currency_permission->id],
                      ['role_id', $role->id]
                  ])->first();

//                      $pos_setting_permission = DB::table('permissions')->where('name', 'pos_setting')->first();
//                      $pos_setting_permission_active = DB::table('role_has_permissions')->where([
//                          ['permission_id', $pos_setting_permission->id],
//                          ['role_id', $role->id]
//                      ])->first();

//                      $hrm_setting_permission = DB::table('permissions')->where('name', 'hrm_setting')->first();
//                      $hrm_setting_permission_active = DB::table('role_has_permissions')->where([
//                          ['permission_id', $hrm_setting_permission->id],
//                          ['role_id', $role->id]
//                      ])->first();
                  ?>
                  @if($role->id == 1)
                  <li id="role-menu"><a href="{{route('role.index')}}">Role Permission</a></li>
                  @endif

                    @if($role->id == 1)
                     <li id="user-menu"><a href="{{route('user.profile', ['id' => Auth::id()])}}">{{trans('User Profile')}}</a></li>
                    @endif

                    @if($general_setting_permission_active)
                        <li id="currency-menu"><a href="{{route('currency.index')}}">{{trans('Currency')}}</a></li>
                    @endif
                  @if($general_setting_permission_active)
                  <li id="general-setting-menu"><a href="{{route('setting.general')}}">{{trans('General Setting')}}</a></li>
                  @endif

                </ul>
              </li>
            </ul>
          </div>
        </div>
      </nav>
      <!-- navbar-->
      <header class="header">
        <nav class="navbar">
          <div class="container-fluid">
            <div class="navbar-holder d-flex align-items-center justify-content-between">
              <a id="toggle-btn" href="#" class="menu-btn"><i class="fa fa-bars"> </i></a>

                <span class="brand-big" style="left:12%;">@if($general_setting->site_logo)<img src="{{url('public/logo', $general_setting->site_logo)}}" width="150">&nbsp;&nbsp;@endif<a href="{{url('/')}}">
                  <h1 class="d-inline" style="display:none !important;">{{$general_setting->site_title}}</h1></a></span>

              <ul class="nav-menu list-unstyled d-flex flex-md-row align-items-md-center">


                <li class="nav-item"><a class="dropdown-item btn-pos btn-sm" href="#"><i class="dripicons-shopping-bag"></i><span> POS</span></a></li>

                <li class="nav-item"><a id="btnFullscreen"><i class="dripicons-expand"></i></a></li>

                  <li class="nav-item"><a href="#" title="{{trans('Cash Register List')}}"><i class="dripicons-archive"></i></a></li>


                @if(Auth::user()->role_id == 1)
                <li class="nav-item">
                    <a class="dropdown-item" href="#" target="_blank"><i class="dripicons-information"></i> {{trans('Help')}}</a>
                </li>
                @endif
                <li class="nav-item">
                  <a rel="nofollow" data-target="#" href="#" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" class="nav-link dropdown-item"><i class="dripicons-user"></i> <span>{{ucfirst(Auth::user()->name)}}</span> <i class="fa fa-angle-down"></i>
                  </a>
                  <ul class="dropdown-menu edit-options dropdown-menu-right dropdown-default" user="menu">
                      <li>
                        <a href="{{route('user.profile', ['id' => Auth::id()])}}"><i class="dripicons-user"></i> {{trans('profile')}}</a>
                      </li>
                      @if($general_setting_permission_active)
                      <li>
                        <a href="{{route('setting.general')}}"><i class="dripicons-gear"></i> {{trans('settings')}}</a>
                      </li>
                      @endif

                      <li>
                        <a href="{{ route('logout') }}"
                           onclick="event.preventDefault();
                                         document.getElementById('logout-form').submit();"><i class="dripicons-power"></i>
                            {{trans('logout')}}
                        </a>
                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                            @csrf
                        </form>
                      </li>
                  </ul>
                </li>
              </ul>
            </div>
          </div>
        </nav>
      </header>




    <div class="page">

      <!-- notification modal -->

      <!-- expense modal -->

      <!-- account modal -->

      <!-- account statement modal -->

      <!-- warehouse modal -->

      <!-- user modal -->
      <div id="user-modal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true" class="modal fade text-left">
        <div role="document" class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 id="exampleModalLabel" class="modal-title">{{trans('User Report')}}</h5>
                    <button type="button" data-dismiss="modal" aria-label="Close" class="close"><span aria-hidden="true"><i class="dripicons-cross"></i></span></button>
                </div>
{{--                <div class="modal-body">--}}
{{--                  <p class="italic"><small>{{trans('The field labels marked with * are required input fields')}}.</small></p>--}}
{{--                    {!! Form::open(['route' => 'report.user', 'method' => 'post']) !!}--}}
{{--                    <?php--}}
{{--                      $lims_user_list = DB::table('users')->where('is_active', true)->get();--}}
{{--                    ?>--}}
{{--                      <div class="form-group">--}}
{{--                          <label>{{trans('User')}} *</label>--}}
{{--                          <select name="user_id" class="selectpicker form-control" required data-live-search="true" id="user-id" data-live-search-style="begins" title="Select user...">--}}
{{--                              @foreach($lims_user_list as $user)--}}
{{--                              <option value="{{$user->id}}">{{$user->name . ' (' . $user->phone. ')'}}</option>--}}
{{--                              @endforeach--}}
{{--                          </select>--}}
{{--                      </div>--}}

{{--                      <input type="hidden" name="start_date" value="1988-04-18" />--}}
{{--                      <input type="hidden" name="end_date" value="{{date('Y-m-d')}}" />--}}

{{--                      <div class="form-group">--}}
{{--                          <button type="submit" class="btn btn-primary">{{trans('submit')}}</button>--}}
{{--                      </div>--}}
{{--                    {{ Form::close() }}--}}
{{--                </div>--}}
            </div>
        </div>
      </div>

      <!-- customer modal -->

      <!-- supplier modal -->

      <div style="display:none" id="content" class="animate-bottom">
          @yield('content')
      </div>

      <footer class="main-footer">
        <div class="container-fluid">
          <div class="row">
            <div class="col-sm-12">
                <p>&copy; {{$general_setting->site_title}} | {{trans('Developed')}} {{trans('By')}} | <span class="external">{{$general_setting->developed_by}}</span></p>
            </div>
          </div>
        </div>
      </footer>
    </div>
    @yield('scripts')
    <script>
        if ('serviceWorker' in navigator ) {
            window.addEventListener('load', function() {
                navigator.serviceWorker.register('/saleproposmajed/service-worker.js').then(function(registration) {
                    // Registration was successful
                    console.log('ServiceWorker registration successful with scope: ', registration.scope);
                }, function(err) {
                    // registration failed :(
                    console.log('ServiceWorker registration failed: ', err);
                });
            });
        }
    </script>
    <script type="text/javascript">

      if ($(window).outerWidth() > 1199) {
          $('nav.side-navbar').removeClass('shrink');
      }
      function myFunction() {
          setTimeout(showPage, 150);
      }
      function showPage() {
        document.getElementById("loader").style.display = "none";
        document.getElementById("content").style.display = "block";
      }

      $("div.alert").delay(3000).slideUp(750);

      function confirmDelete() {
          if (confirm("Are you sure want to delete?")) {
              return true;
          }
          return false;
      }

      // $("li#notification-icon").on("click", function (argument) {
      //     $.get('notifications/mark-as-read', function(data) {
      //         $("span.notification-number").text(alert_product);
      //     });
      // });








      $("a#user-report-link").click(function(e){
        e.preventDefault();
        $('#user-modal').modal();
      });






      $(".daterangepicker-field").daterangepicker({
          callback: function(startDate, endDate, period){
            var start_date = startDate.format('YYYY-MM-DD');
            var end_date = endDate.format('YYYY-MM-DD');
            var title = start_date + ' To ' + end_date;
            $(this).val(title);
            $('#account-statement-modal input[name="start_date"]').val(start_date);
            $('#account-statement-modal input[name="end_date"]').val(end_date);
          }
      });

      $('.selectpicker').selectpicker({
          style: 'btn-link',
      });
    </script>
  </body>
</html>

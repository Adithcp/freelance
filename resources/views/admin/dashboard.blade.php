@include('admin.dashboard-inc.head')
  <!--  Body Wrapper -->
  <div class="page-wrapper" id="main-wrapper" data-layout="vertical" data-navbarbg="skin6" data-sidebartype="full"
    data-sidebar-position="fixed" data-header-position="fixed">
    <!-- side bar -->
    @include('admin.dashboard-inc.side-menu')
    <!--  Main wrapper -->
    <div class="body-wrapper">
      <!--  Header Start -->
        @include('admin.dashboard-inc.header')
      <!--  Header End -->
      <div class="container-fluid">
        <!--  Row 1 -->
       
        @include('admin.dashboard-inc.footer')
      </div>
    </div>
  </div>
  @include('admin.dashboard-inc.script');

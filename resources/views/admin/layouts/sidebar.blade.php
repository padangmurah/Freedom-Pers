<section class="sidebar">
      <!-- Sidebar user panel -->
      <!-- /.search form -->
      <!-- sidebar menu: : style can be found in sidebar.less -->
      <ul class="sidebar-menu" data-widget="tree">
        <li class="header">BERANDA</li>
        <li><a href="{{ url('/') }}"><i class="fa fa-fw fa-home"></i> Home</span></a></li>
        @if(\Auth::user()->name == 'Super Admin')
        <li class="header">KATEGORI</li>
        <li><a href="{{ url('admin/kategori') }}"><i class="fa fa-fw fa-tags"></i> Kategori</span></a></li>
        @endif
        <li><a href="{{ url('admin/artikel') }}"><i class="fa fa-fw fa-pencil"></i> Artikel</span></a></li>
        @if(\Auth::user()->name == 'Super Admin')
        <li><a href="{{ url('admin/komentar') }}"><i class="fa fa-fw fa-map-o"></i> Komentar</span></a></li>
        
        <li><a href="{{ url('admin/iklan') }}"><i class="fa fa-fw fa-bullhorn"></i> Iklan</span></a></li>

        <li><a href="{{ url('admin/user') }}"><i class="fa fa-fw fa-user"></i> Add User</span></a></li>
        @endif
        <li class="header">OTHER</li>
        <li><a href="{{ url('/keluar') }}"><span class="glyphicon glyphicon-log-out"></span> Logout</span></a></li>


      </ul>
    </section>
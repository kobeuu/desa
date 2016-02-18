<aside class="main-sidebar">

  <!-- sidebar: style can be found in sidebar.less -->
  <section class="sidebar">
    <!-- Sidebar user panel -->
    <div class="user-panel">
      <div class="pull-left image">
          <img class="img-circle" src="{{ asset('dist//img/user1-128x128.jpg') }}" alt='User Avatar'>
      </div>
      <div class="pull-left info">
        <p>{{ Auth::user()->name }}</p>
        <a href="#"><i class="fa fa-circle text-success"></i>{{ Auth::user()->jabatan }}</a>
      </div>
    </div>

    <!-- Sidebar Menu -->
    <ul class="sidebar-menu">
      <li class="header">MAIN NAVIGATION</li>
      <li>
        <a href="/dashboard">
        <i class="fa fa-dashboard"></i> <span>Dashboard</span></a>
      </li>

      <li class="treeview">
        <a href="/dashboard/profil">
          <i class="fa fa-users"></i> <span>Warga</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
                <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> Baru</a></li>
                <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Perubahan Data</a></li>
      </ul>
      </li>
      
      <li class="treeview">
        <a href="#">
          <i class="fa fa-support"></i>
          <span>Pelayanan</span>
          <i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
                <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> KTP Baru</a></li>
                <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> SK Domisili</a></li>
                <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> SK Tidak Mampu</a></li>
      </ul>
      </li>

      <li class="treeview">
        <a href="#">
          <i class="fa fa-file-text"></i> <span>Kartu Keluarga</span><i class="fa fa-angle-left pull-right"></i>
        </a>
          <ul class="treeview-menu">
                <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> Baru</a></li>
                <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Perpanjangan</a></li>
                <li><a href="../charts/flot.html"><i class="fa fa-circle-o"></i> Perubahan Data</a></li>
                <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Penambahan Anggota</a></li>
                <li><a href="../charts/inline.html"><i class="fa fa-circle-o"></i> Pengurangan Anggota</a></li>
      </ul>
      </li>

      <li class="treeview">
        <a href="/dashboard/profil">
          <i class="fa fa-pie-chart"></i> <span>Laporan</span><i class="fa fa-angle-left pull-right"></i>
        </a>
        <ul class="treeview-menu">
                <li><a href="../charts/chartjs.html"><i class="fa fa-circle-o"></i> Wajib KTP</a></li>
                <li><a href="../charts/morris.html"><i class="fa fa-circle-o"></i> Menurut Wilayah</a></li>
      </ul>
      </li>

      <li class="treeview">
        <a href="/dashboard/profil">
          <i class="fa fa-user"></i> <span>Pengguna</span>
        </a>
      </li>

      <li class="treeview">
        <a href="/dashboard/profil">
          <i class="fa fa-gear"></i> <span>Pengaturan</span>
        </a>
      </li>

    </ul>
</aside>

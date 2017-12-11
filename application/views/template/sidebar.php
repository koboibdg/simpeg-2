<?php
$url = base_url();
$ses = $this->session->userdata['user']
?>
<!-- sidebar menu -->
<div id="sidebar-menu" class="main_menu_side hidden-print main_menu">
  <div class="menu_section">
    <h3>Menu Utama</h3>
    <ul class="nav side-menu">
      <li><a><i class="fa fa-user"></i> <?php echo user_data('nama_user');?> <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo $url; ?>">Biodata</a></li>
          <li><a href="<?php echo $url; ?>user/tugas">Penugasan</a></li>
          <li><a href="<?php echo $url; ?>user/gaji">Gaji</a></li>
          <li><a href="<?php echo $url; ?>user/cuti">Cuti</a></li>
          <li><a href="<?php echo $url; ?>user/akun">Pengaturan Akun</a></li>
        </ul>
      </li>
      <?php if($ses['level_user'] > 0){?>
      <li><a><i class="fa fa-users"></i> Karyawan & Dosen <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo $url; ?>dospeg/karyawan">Master Data Karyawan</a></li>
          <li><a href="<?php echo $url; ?>dospeg/dosen">Master Data Dosen</a></li>
          <li><a href="<?php echo $url; ?>dospeg/jabkar">Jabatan Karyawan</a></li>
          <li><a href="<?php echo $url; ?>dospeg/kinkar">Kinerja Karyawan</a></li>
          <li><a href="<?php echo $url; ?>dospeg/cutikar">Pengajuan Cuti</a></li>
        </ul>
      </li>
      <?php } if($ses['level_user'] > 1){ ?>
      <li><a><i class="fa fa-exchange"></i> Transaksi <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo $url; ?>trans/gajikar">Master Gaji Karyawan</a></li>
          <li><a href="<?php echo $url; ?>trans/tunjkar">Master Tunjangan Karyawan</a></li>
          <li><a href="<?php echo $url; ?>trans/potkar">Master Potongan Karyawan</a></li>
          <li><a href="<?php echo $url; ?>trans/bayargaji">Transaksi Gaji Karyawan</a></li>
          <li><a href="<?php echo $url; ?>trans/riwayat">Riwayat Transaksi</a></li>
        </ul>
      </li>
      <?php } if($ses['level_user'] > 2) {?>
      <li><a><i class="fa fa-institution"></i> Jabatan & Unit <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo $url; ?>jabnit/jabatan">Master Data Jabatan</a></li>
          <li><a href="<?php echo $url; ?>jabnit/unit">Master Data Unit</a></li>
        </ul>
      </li>
      <?php } if($ses['level_user'] > 4) {?>
      <li><a><i class="fa fa-cog"></i> Pengaturan <span class="fa fa-chevron-down"></span></a>
        <ul class="nav child_menu">
          <li><a href="<?php echo $url; ?>pengaturan/">Nama Perusahaan</a></li>
        </ul>
      </li>
      <?php } ?>
    </ul>
  </div>
</div>
<!-- /sidebar menu -->

            <!-- /menu footer buttons -->
            <div class="sidebar-footer hidden-small">
              <a data-toggle="tooltip" data-placement="top" title="Settings">
                <span class="glyphicon glyphicon-cog" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="FullScreen">
                <span class="glyphicon glyphicon-fullscreen" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Lock">
                <span class="glyphicon glyphicon-eye-close" aria-hidden="true"></span>
              </a>
              <a data-toggle="tooltip" data-placement="top" title="Logout" href="login.html">
                <span class="glyphicon glyphicon-off" aria-hidden="true"></span>
              </a>
            </div>
            <!-- /menu footer buttons -->
          </div>
        </div>

        <!-- top navigation -->
        <div class="top_nav">
          <div class="nav_menu">
            <nav>
              <div class="nav toggle">
                <a id="menu_toggle"><i class="fa fa-bars"></i></a>
              </div>

              <ul class="nav navbar-nav navbar-right">
                <li class="">
                  <a href="javascript:;" class="user-profile dropdown-toggle" data-toggle="dropdown" aria-expanded="false">
                    <img src="<?php echo $url ?>upload/admin.png" alt=""><?php echo $ses['nama_user']; ?>
                    <span class=" fa fa-angle-down"></span>
                  </a>
                  <ul class="dropdown-menu dropdown-usermenu pull-right">
                    <li><a href="<?php echo $url; ?>pengaturan"><i class="fa fa-wrench pull-right"></i>  Pengaturan</a></li>
                    <li><a href="<?php echo $url; ?>keluar"><i class="fa fa-sign-out pull-right"></i> Keluar</a></li>
                  </ul>
                </li>

                
              </ul>
            </nav>
          </div>
        </div>
        <!-- /top navigation -->
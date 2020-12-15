<style type="text/css">
    .text-dashboard{
        color: #000; font-size: 42px; cursor: default; font-weight:normal;
    }
    .icon-dahboard{
        font-size: 32px;
    }
    .lable-dahboard{
        color:#000;
        cursor: default;
    }
</style>
<!-- Statistics -->
<div class="block">
    <ul class="statistics">
        <li>
            <div class="statistics-info">
                <a href="javascript:void(0)" style="cursor: default;" class="bg-warning"><i class="icon-trophy icon-dahboard"></i></a>
                <strong><a href="javascript:void(0)" class="text-dashboard"><?php echo $event_aktif; ?></a></strong>
            </div>
            <div class="progress progress-micro">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                    <span class="sr-only">100% Complete</span>
                </div>
            </div>
            <span><a href="javascript:void(0)"class="lable-dahboard">Event Aktif </a></span>
        </li>
        <li>
            <div class="statistics-info">
                <a href="javascript:void(0)"style="cursor: default;" class="bg-warning"><i class="icon-stack icon-dahboard"></i></a>
                <strong><a href="javascript:void(0)" class="text-dashboard"><?php echo $event_draf; ?></a></strong>
            </div>
            <div class="progress progress-micro">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                    <span class="sr-only">100% Complete</span>
                </div>
            </div>
            <span><a href="javascript:void(0)"class="lable-dahboard">Event Draf </a></span>
        </li>
        <li>
            <div class="statistics-info">
                <a href="javascript:void(0)"style="cursor: default;" class="bg-warning"><i class="icon-clock icon-dahboard"></i></a>
                <strong><a href="javascript:void(0)" class="text-dashboard"><?php echo $event_lalu; ?></a></strong>
            </div>
            <div class="progress progress-micro">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                    <span class="sr-only">100% Complete</span>
                </div>
            </div>
            <span><a href="javascript:void(0)"class="lable-dahboard">Event Lalu </a></span>
        </li>
        <li>
            <div class="statistics-info">
                <a href="javascript:void(0)"style="cursor: default;" class="bg-warning"><i class="icon-transmission2 icon-dahboard"></i></a>
                <strong><a href="javascript:void(0)" class="text-dashboard"><?php echo $total_transaksi; ?></a></strong>
            </div>
            <div class="progress progress-micro">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                    <span class="sr-only">100% Complete</span>
                </div>
            </div>
            <span><a href="javascript:void(0)"class="lable-dahboard">Total Transaksi</a></span>
        </li>
        <li>
            <div class="statistics-info">
                <a href="javascript:void(0)"style="cursor: default;" class="bg-warning"><i class="icon-ticket icon-dahboard"></i></a>
                <strong><a href="javascript:void(0)" class="text-dashboard"><?php echo $total_tiket_terjual; ?></a></strong>
            </div>
            <div class="progress progress-micro">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                    <span class="sr-only">100% Complete</span>
                </div>
            </div>
            <span><a href="javascript:void(0)"class="lable-dahboard">Total Tiket Terjual</a></span>
        </li>
        <li>
            <div class="statistics-info">
                <a href="javascript:void(0)"style="cursor: default;" class="bg-warning"><i class="icon-coin icon-dahboard"></i></a>
                <strong><a href="javascript:void(0)" class="text-dashboard"><?php echo rupiah($total_penjualan); ?></a></strong>
            </div>
            <div class="progress progress-micro">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;">
                    <span class="sr-only">100% Complete</span>
                </div>
            </div>
            <span><a href="javascript:void(0)"class="lable-dahboard">Total Penjualan</a></span>
        </li>
  <!--       <li>
            <div class="statistics-info">
                <a href="javascript:void(0)"style="cursor: default;" class="bg-warning"><i class="icon-users icon-dahboard"></i></a>
                <strong><a href="javascript:void(0)" class="text-dashboard"><?php echo $total_pengunjung; ?></a></strong>
            </div>
            <div class="progress progress-micro">
                <div class="progress-bar progress-bar-warning" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" style="width: 90%;" >
                    <span class="sr-only">100% Complete</span>
                </div>
            </div>
            <span><a href="javascript:void(0)"class="lable-dahboard">Total Pengunjung </a></span>
        </li> -->
    </ul>
</div>
<!-- /statistics -->
<div class="sidebar">
    <div class="sidebar-wrapper">
        <div class="logo">
            <a href="javascript:void(0)" class="simple-text logo-mini">
                CT
            </a>
            <a href="javascript:void(0)" class="simple-text logo-normal">
                Creative Tim
            </a>
        </div>
        <ul class="nav">
            <li class="<?php if($this->session->has_userdata('user_page')){ echo "active";}?>">
                <a href="<?= base_url('AdminManager')?>">
                    <i class="tim-icons icon-chart-pie-36"></i>
                    <p>Dashboard</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url('AdminManager/pegawai')?>">
                    <i class="tim-icons icon-single-02"></i>
                    <p>Pegawai</p>
                </a>
            </li>
            <li class="<?php if($this->session->has_userdata('user_page')){ echo "active";}?>">
                <a href="<?= base_url('AdminManager/user')?>">
                    <i class="tim-icons icon-single-02"></i>
                    <p>User</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url('AdminManager/menu')?>">
                    <i class="tim-icons icon-paper"></i>
                    <p>Menu</p>
                </a>
            </li>
            <li>
                <a href="<?= base_url('AdminManager/order')?>">
                    <i class="tim-icons icon-bullet-list-67"></i>
                    <p>Order/ pesanan</p>
                </a>
            </li>
            <!-- <li>
<a href="./user.html">
<i class="tim-icons icon-single-02"></i>
<p>User Profile</p>
</a>
</li>
<li>
<a href="./tables.html">
<i class="tim-icons icon-puzzle-10"></i>
<p>Table List</p>
</a>
</li>
<li>
<a href="./typography.html">
<i class="tim-icons icon-align-center"></i>
<p>Typography</p>
</a>
</li>
<li>
<a href="./rtl.html">
<i class="tim-icons icon-world"></i>
<p>RTL Support</p>
</a>
</li>
<li class="active-pro">
<a href="./upgrade.html">
<i class="tim-icons icon-spaceship"></i>
<p>Upgrade to PRO</p>
</a>
</li> -->
        </ul>
    </div>
</div>
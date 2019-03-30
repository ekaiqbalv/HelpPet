<?php 
// Load nav
$statuslogin = $this->session->userdata('status');
if ($statuslogin == "login"){
    $this->load->view('navigasiloginuser');
} else {$this->load->view('navigasi');} ?>

<!-- <h1 style="text-align:center;padding:290px 0px 290px 0px">Dalam Proses Pengerjaan</h1> -->
<!-- <div class="ui container fluid">
    <img class="ui image" src="assets/image/volunteer.jpg">
</div> -->

<div class="ui container" style="margin-top:30px">
    <div style="font-size:24px">Halo #ParaPecintaHewan,</div>
    <div style="font-size:20px;margin-top:10px">Silahkan cari atau pilih hewan yang ingin anda adopsi</div>
    <!-- <div class="ui stackable grid" style="margin-top:10px">
        <div class="twelve wide column"> -->
            <div class="ui action left icon input fluid" style="font-size:16px;margin-top:20px">
                <i class="search icon"></i>
                <input type="text" placeholder="Cari peran relawan atau penampungan hewan...">
                <div class="ui button brown">Cari</div>
            </div>
        <!-- </div>
        <div class="four wide column right aligned">
            <div class="ui selection dropdown" style="font-size:16px">
                <input type="hidden" name="postingan">
                <i class="dropdown icon"></i>
                <div class="default text">Pilih Postingan</div>
                <div class="menu">
                    <div class="item">Semua Postingan</div>
                    <div class="item">Pengguna</div>
                    <div class="item">Penampungan Hewan</div>
                </div>
            </div>
        </div>
    </div> -->
</div>

<!-- Daftar Relawan -->
<div class="ui container" style="margin-top:30px">    
    <div class="ui four doubling link cards">
        <div class="card" onclick="$('.ui.small.first.modal').modal('show');">
            <div class="image">
                <img src="assets/image/foto1.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Perawat Kucing</div>
                <div class="meta">
                <i class="home icon"></i>
                    Kelompok Pet Animal
                </div>                
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/catadopt.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Perawat Kucing</div>
                <div class="meta">
                <i class="home icon"></i>
                    Kelompok Pet Animal
                </div>                
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/foto2.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Perawat Anjing</div>
                <div class="meta">
                <i class="home icon"></i>
                    Kelompok Pet Animal
                </div>                
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/foto3.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Perawat Kelinci</div>
                <div class="meta">
                <i class="home icon"></i>
                    Kelompok Pet Animal
                </div>                
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/foto4.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Perawat Hamster</div>
                <div class="meta">
                <i class="home icon"></i>
                    Kelompok Pet Animal
                </div>                
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img src="assets/image/foto5.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Perawat Anjing</div>
                <div class="meta">
                <i class="home icon"></i>
                    Kelompok Pet Animal
                </div>                
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/foto6.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Perawat Anjing</div>
                <div class="meta">
                <i class="home icon"></i>
                    Kelompok Pet Animal
                </div>                
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/foto7.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Perawat Kucing</div>
                <div class="meta">
                <i class="home icon"></i>
                    Kelompok Pet Animal
                </div>                
            </div>
        </div>
    </div>
    <!-- Akhir Daftar Relawan -->

<?php
// Load footer
$this->load->view('footer');
?>
<?php 
// Load nav
$statuslogin = $this->session->userdata('status');
if ($statuslogin == "login"){
    $this->load->view('navigasiloginuser');
} else {$this->load->view('navigasi');} ?>

<!-- Bagian Atas -->
<div class="ui container fluid" style="background-color:#f5f5f5;padding-top:50px;padding-bottom:50px">
    <div class="ui stackable grid" style="margin-left:50px;margin-right:50px">
        <div class="eight wide column">
            <img src="assets/image/imgpenampungan.jpeg" class="ui huge image" style="border-radius:15px">
        </div>
        <div class="eight wide column middle aligned">
            <div style="margin-left:-120px;padding:50px;background-color:white;border-radius:15px">
                <h1 style="font-size:40px;color:#3a3a3a">Penampungan Hewan</h1>
                <div style="width:90px;height:3px;background-color:#3a3a3a;border-radius:10px"></div>
                <p style="margin-top:10px;font-size:24px;line-height:1.7;text-align:justify">Mereka menyediakan tempat
                    yang aman bagi hewan
                    yang
                    sakit, terluka, dan terlantar. Mereka akan merawat dan memberi hewan tersebut kasih sayang,
                    perhatian, dan rumah sampai hewan tersebut dapat menemukan
                    rumah baru untuk selamanya.</p>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Bagian Atas -->

<div class="ui container" style="margin-top:40px">
    <div style="font-size:24px">Halo #ParaPecintaHewan,</div>
    <div style="font-size:20px;margin-top:10px">Silahkan pilih Penampungan Hewan yang ingin anda kunjungi</div>
</div>

<div class="ui container" style="margin-top:30px">
    <!-- Daftar hewan -->
    <div class="ui four doubling link cards">
        <div class="card">
            <div class="image" style="margin:15px">
                <img src="assets/image/profilpenampungan.jpg">
            </div>
            <div class="content">
                <div class="header">Kelompok Pet Animal</div>
                <div class="meta">
                    <div style="display:flex;flex-direction:row">
                        <i class="map marker alternate icon"></i>
                        <div>Malang</div>
                    </div>
                </div>
                <div class="description">
                    Penampungan hewan ini didirikan pada tahun 2010
                </div>
            </div>
            <div class="extra content center aligned">
                <a href="<?php echo base_url("profilpenampunganhewan");?>">
                    <button class="ui button brown fluid">Kunjungi Profil</button>
                </a>
            </div>
        </div>
        <div class="card">
            <div class="image" style="margin:15px">
                <img src="assets/image/shelter2.jpg">
            </div>
            <div class="content">
                <div class="header">Garda Satwa Indonesia</div>
                <div class="meta">
                    <div style="display:flex;flex-direction:row">
                        <i class="map marker alternate icon"></i>
                        <div>Jakarta</div>
                    </div>
                </div>
                <div class="description">
                    Penampungan hewan ini didirikan pada tahun 2006
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Kunjungi Profil</button>
            </div>
        </div>
        <div class="card">
            <div class="image" style="margin:15px">
                <img src="assets/image/shelter3.jpg">
            </div>
            <div class="content">
                <div class="header">Rumah Kucing Bandung</div>
                <div class="meta">
                    <div style="display:flex;flex-direction:row">
                        <i class="map marker alternate icon"></i>
                        <div>Bandung</div>
                    </div>
                </div>
                <div class="description">
                    Penampungan hewan ini didirikan pada tahun 2013
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Kunjungi Profil</button>
            </div>
        </div>
        <div class="card">
            <div class="image" style="margin:15px">
                <img src="assets/image/shelter1.jpg">
            </div>
            <div class="content">
                <div class="header">Nawak Nawek</div>
                <div class="meta">
                    <div style="display:flex;flex-direction:row">
                        <i class="map marker alternate icon"></i>
                        <div>Malang</div>
                    </div>
                </div>
                <div class="description">
                    Penampungan hewan ini didirikan pada tahun 2015
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Kunjungi Profil</button>
            </div>
        </div>
        <div class="card">
            <div class="image" style="margin:15px">
                <img src="assets/image/shelter7.png">
            </div>
            <div class="content">
                <div class="header">Bandung Dog Guardian</div>
                <div class="meta">
                    <div style="display:flex;flex-direction:row">
                        <i class="map marker alternate icon"></i>
                        <div>Bandung</div>
                    </div>
                </div>
                <div class="description">
                    Penampungan hewan ini didirikan pada tahun 2011
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Kunjungi Profil</button>
            </div>
        </div>
        <div class="card">
            <div class="image" style="margin:15px">
                <img src="assets/image/shelter8.png">
            </div>
            <div class="content">
                <div class="header">Komunitas Penyelamat Kucing Terlantar Surabaya</div>
                <div class="meta">
                    <div style="display:flex;flex-direction:row">
                        <i class="map marker alternate icon"></i>
                        <div>Surabaya</div>
                    </div>
                </div>
                <div class="description">
                    Penampungan hewan ini didirikan pada tahun 2016
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Kunjungi Profil</button>
            </div>
        </div>
        <?php foreach ($penampungan as $u){?>
        <div class="card">
            <div class="image" style="margin:15px">
                <img src="assets/image/profilpenampungan.jpg">
                <!-- // src nya diganti sm echo u foto -->
            </div>
            <div class="content">
                <div class="header"><?php echo $u->nm_penampungan?></div>
                <div class="meta">
                    <div style="display:flex;flex-direction:row">
                        <i class="map marker alternate icon"></i>
                        <div><?php echo $u->alamat?></div>
                    </div>
                </div>
                <div class="description">
                    <?php echo $u->email?>
                </div>
            </div>
            <div class="extra content center aligned">
                <a href="<?php echo base_url("profilpenampunganhewan");?>">
                    <button class="ui button brown fluid">Kunjungi Profil</button>
                </a>
            </div>
        </div>
        <?php }?>
    </div>
    <!-- Akhir Daftar Hewan -->
</div>

<!-- Info cara membantu -->
<div class="ui container fluid" style="background-color:#00aeef;color:white;margin-top:50px">
    <div class="ui container fluid" style="padding:50px 30px 90px 30px">
        <div class="ui center aligned container" style="font-size:36px">
            <p>Bagaimana Cara Untuk Membantu Mereka?</p>
        </div>
        <div class="ui four stackable centered cards" style="margin-top:30px">
            <div class="card" style="margin-left:20px;margin-right:20px">
                <div class="image">
                    <img src="assets/image/donasi.jpg">
                </div>
                <div class="content" style="padding:30px 30px 20px 30px">
                    <div class="description" style="font-size:16px;line-height:1.7">
                        Apakah anda tahu bahwa pihak penampungan hewan hampir tidak menerima dana dari pemerintah?.
                        Semua yang mereka
                        lakukan bergantung kepada kemurahan hati orang - orang seperti anda yang memilih untuk
                        membuat
                        perubahan.
                    </div>
                </div>
                <div class="extra content">
                    <a href="<?php echo base_url("donasi");?>">
                        <button class="ui button yellow huge fluid">
                            <i class="heart red icon"></i>
                            Donasi Sekarang
                        </button>
                    </a>
                </div>
            </div>
            <div class="card" style="margin-left:20px;margin-right:20px">
                <div class="image">
                    <img src="assets/image/catadopt.jpg">
                </div>
                <div class="content" style="padding:30px 30px 20px 30px">
                    <div class="description" style="font-size:16px;line-height:1.7">
                        Jika anda berpikir untuk memelihara hewan peliharaan, coba pertimbangkan untuk mengadopsi
                        hewan yang terlantar dan memberi mereka rumah untuk tinggal. Karena hal itu akan membantu pihak
                        penampungan dan hewan tersebut.
                    </div>
                </div>
                <div class="extra content">
                    <a href="<?php echo base_url("adopsi");?>">
                        <button class="ui button blue huge fluid">
                            <i class="paw white icon"></i>
                            Adopsi Sekarang
                        </button>
                    </a>
                </div>
            </div>
            <div class="card" style="margin-left:20px;margin-right:20px">
                <div class="image">
                    <img src="assets/image/volunteer.jpg">
                </div>
                <div class="content" style="padding:30px 30px 20px 30px">
                    <div class="description" style="font-size:16px;line-height:1.7">
                        Selain memberikan bantuan berupa materi, anda juga bisa memberikan bantuan berupa waktu yang
                        dapat anda luangkan untuk menjadi seorang relawan. Kami mempunyai beberapa pilihan untuk menjadi
                        seorang relawan dan tentunya sesuai dengan anda.
                    </div>
                </div>
                <div class="extra content">
                    <a href="<?php echo base_url("relawan");?>">
                        <button class="ui button blue huge fluid">
                            <i class="hand paper white icon"></i>
                            Daftar Relawan
                        </button>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- Akhir Info cara membantu -->

<?php
// Load nav
$this->load->view('footer');
?>
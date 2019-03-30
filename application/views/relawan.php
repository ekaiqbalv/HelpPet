<?php 
// Load nav
$statuslogin = $this->session->userdata('status');
if ($statuslogin == "login"){
    $this->load->view('navigasiloginuser');
} else {$this->load->view('navigasi');} ?>

<div class="ui container" style="margin-top:30px">
    <div style="font-size:24px">Halo #ParaPecintaHewan,</div>
    <div style="font-size:20px;margin-top:10px">Silahkan cari atau pilih hewan yang ingin anda adopsi</div>
    <div class="ui action left icon input fluid" style="font-size:16px;margin-top:20px">
        <i class="search icon"></i>
        <input type="text" placeholder="Cari peran relawan atau penampungan hewan...">
        <div class="ui button brown">Cari</div>
    </div>
</div>

<!-- Daftar Relawan -->
<div class="ui container" style="margin-top:30px">
    <div class="ui four doubling link cards">
        <div class="card">
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
            <div class="extra content center aligned">
                <button class="ui button brown fluid"
                    onclick="$('.ui.small.modal.syarat').modal('show')">Daftar</button>
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
                    Rumah Kucing Bandung
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Daftar</button>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/penampungan5.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Perawat Hamster</div>
                <div class="meta">
                    <i class="home icon"></i>
                    Kelompok Pet Animal
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Daftar</button>
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
                    Garda Satwa Indonesia
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Daftar</button>
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
                    Nawak Nawek
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Daftar</button>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/penampungan3.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Perawat Anjing</div>
                <div class="meta">
                    <i class="home icon"></i>
                    Kelompok Pet Animal
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Daftar</button>
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
                    Nawak Nawek
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Daftar</button>
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
                    Bandung Dog Guardian
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Daftar</button>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/penampungan4.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Perawat Kelinci</div>
                <div class="meta">
                    <i class="home icon"></i>
                    Kelompok Pet Animal
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Daftar</button>
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
                    KPKTS
                </div>
            </div>
            <div class="extra content center aligned">
                <button class="ui button brown fluid">Daftar</button>
            </div>
        </div>
    </div>
    <!-- Akhir Daftar Relawan -->
</div>

<!-- Dimmer Persyaratan -->
<div class="ui small modal syarat">
    <div class="header">
        Persyaratan Relawan
    </div>
    <div class="content" style="padding:30px 60px 30px 60px;font-size:18px">
        <p>1. Berdomisili Malang</p>
        <p>2. Minimal berusia 18 tahun</p>
        <p>3. Mampu merawat kucing</p>
        <p>4. Dapat meluangkan waktu sesuai dengan kesepakatan yang telah dibuat</p>
        <p>5. Mempunyai komitmen</p>
    </div>
    <div class="actions">
        <div class="ui negative button">
            Tidak Memenuhi Syarat
        </div>
        <div class="ui positive right labeled icon button" onclick="$('.ui.tiny.modal.jobdesk').modal('show');">
            Memenuhi Syarat
            <i class="checkmark icon"></i>
        </div>
    </div>
</div>

<!-- Dimmer Jobdesk -->
<div class="ui tiny modal jobdesk">
    <div class="header">
        Hal Yang Dikerjakan
    </div>
    <div class="content" style="padding:30px 60px 30px 60px;font-size:18px">
        <p>1. Memberikan makan</p>
        <p>2. Memandikan</p>
        <p>3. Membersihkan kotoran</p>
        <p>4. Membersihkan kandang</p>
        <p>5. Mengganti pasir kucing</p>
    </div>
    <div class="actions">
        <div class="ui negative button">
            Tidak Bersedia
        </div>
        <div class="ui positive right labeled icon button" onclick="$('.ui.tiny.modal.konfirmasi').modal('show');">
            Bersedia
            <i class="checkmark icon"></i>
        </div>
    </div>
</div>

<!-- Dimmer Konfirmasi -->
<div class="ui tiny modal konfirmasi">
    <div class="header">
        Selesai
    </div>
    <div class="content">
        <p style="font-size:17px;line-height:1.5">
            Pendaftaran relawan anda akan kami proses kepada pihak penampungan hewan. Silahkan
            tunggu email konfirmasi dari pihak penampungan hewan untuk info lebih lanjut.
        </p>
    </div>
    <div class="actions">
        <button class="ui positive button">
            Oke
        </button>
    </div>
</div>

<?php
// Load footer
$this->load->view('footer');
?>
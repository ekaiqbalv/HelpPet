<?php 
// Load nav
$statuslogin = $this->session->userdata('status');
if ($statuslogin == "login"){
    $this->load->view('navigasiloginuser');
} else {$this->load->view('navigasi');} ?>

<div class="ui container fluid">
    <div class="ui stackable grid"
        style="margin:30px;background-color:#f6f6f6;border-radius: 15px;padding:30px 40px 30px 40px">
        <div class="eight wide column middle aligned">
            <div style="text-align:center">
                <h1 style="font-size:30px;color:#3a3a3a">Temukan Hewan Peliharaan Yang Anda Inginkan</h1>
            </div>
            <div style="margin-top:25px">
                <p style="font-size:22px">Banyak hewan peliharaan terlantar diluar sana yang menunggu
                    untuk menemukan rumah yang sempurna bagi
                    mereka untuk selamanya.</p>
                <p style="font-size:22px">Mereka mencari seseorang, seseorang seperti anda. Adopsilah mereka, dan
                    berikan mereka kesempatan kedua
                    dalam hidupnya.</p>
            </div>
        </div>
        <div class="eight wide column">
            <img src="assets/image/imgadopsi.jpg" class="ui huge image" style="border-radius: 15px">
        </div>
    </div>
</div>

<div class="ui divider" style="margin-top:30px;margin-bottom:30px"></div>

<div class="ui container" style="margin-bottom:30px">
    <div style="font-size:24px">Halo #ParaPecintaHewan,</div>
    <div style="font-size:20px;margin-top:10px">Silahkan cari atau pilih hewan yang ingin anda adopsi</div>
    <div class="ui stackable grid" style="margin-top:10px">
        <div class="twelve wide column">
            <div class="ui action left icon input fluid" style="font-size:16px">
                <i class="search icon"></i>
                <input type="text" placeholder="Cari jenis hewan yang ingin diadopsi...">
                <div class="ui button brown">Cari</div>
            </div>
        </div>
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
    </div>
</div>

<div class="ui container">
    <!-- Daftar hewan -->
    <div class="ui four doubling link cards">
        <div class="card" onclick="$('.ui.small.first.modal.bayar').modal('show');">
            <div class="image">
                <img src="assets/image/foto1.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Yuki</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Yuki sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda dengan tingkahnya
                    yang lucunya. Yuki memiliki bulu warna coklat
                </div>
            </div>
            <div class="extra content">
                <span>
                    <i class="home icon"></i>
                    Kelompok Pet Animal
                </span>
            </div>
        </div>
        <div class="card" onclick="$('.ui.small.first.modal.gratis').modal('show');">
            <div class="image">
                <img src="assets/image/catadopt.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Boo</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Boo sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda dengan tingkahnya
                    yang lucunya. Boo memiliki bulu warna coklat
                </div>
            </div>
            <div class="extra content">

                <span>
                    <i class="home icon"></i>
                    Eka
                </span>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/foto2.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Toms</div>
                <div class="meta">
                    <a>Anjing</a>
                </div>
                <div class="description">
                    Toms sangat mengemaskan. Ia menjadi anjing yang selalu menemani hari - hari anda dengan tingkahnya
                    yang lucunya. Toms memiliki bulu warna coklat
                </div>
            </div>
            <div class="extra content">

                <span>
                    <i class="home icon"></i>
                    Nawak Nawek
                </span>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/foto3.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Buster</div>
                <div class="meta">
                    <a>Kelinci</a>
                </div>
                <div class="description">
                    Buster sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda dengan tingkahnya
                    yang lucunya. Buster memiliki bulu warna coklat
                </div>
            </div>
            <div class="extra content">

                <span>
                    <i class="home icon"></i>
                    Albar
                </span>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/foto4.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Candie</div>
                <div class="meta">
                    <a>Hamster</a>
                </div>
                <div class="description">
                    Candie sangat mengemaskan. Ia menjadi hamster yang selalu menemani hari - hari anda dengan
                    tingkahnya yang lucunya. Candie memiliki bulu warna coklat
                </div>
            </div>
            <div class="extra content">

                <span>
                    <i class="home icon"></i>
                    Rian
                </span>
            </div>
        </div>

        <div class="card">
            <div class="image">
                <img src="assets/image/foto5.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Dexter</div>
                <div class="meta">
                    <a>Anjing</a>
                </div>
                <div class="description">
                    Dexter sangat mengemaskan. Ia menjadi anjing yang selalu menemani hari - hari anda dengan tingkahnya
                    yang lucunya. Dexter memiliki bulu warna coklat
                </div>
            </div>
            <div class="extra content">

                <span>
                    <i class="home icon"></i>
                    Garda Satwa Indonesia
                </span>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/foto6.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Ferguso</div>
                <div class="meta">
                    <a>Anjing</a>
                </div>
                <div class="description">
                    Ferguso sangat mengemaskan. Ia menjadi anjing yang selalu menemani hari - hari anda dengan
                    tingkahnya yang lucunya. Ferguso memiliki bulu warna coklat
                </div>
            </div>
            <div class="extra content">

                <span>
                    <i class="home icon"></i>
                    James
                </span>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/foto7.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Nillo</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Nillo sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda dengan tingkahnya
                    yang lucunya. Nillo memiliki bulu warna coklat
                </div>
            </div>
            <div class="extra content">

                <span>
                    <i class="home icon"></i>
                    Pondok Pengayom Satwa
                </span>
            </div>
        </div>
        <?php foreach ($postingHewan as $u) {?>
        <div class="card" onclick="$('.ui.small.first.modal').modal('show');">
            <div class="image">
                <img src="<?php echo $u->foto?>" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header"><?php echo $u->nama?></div>
                <div class="meta">
                    <a><?php echo $u->jenis?></a>
                </div>
                <div class="description">
                    <?php echo $u->deskripsi?>
                </div>
            </div>
            <div class="extra content">
                <span>
                    <i class="home icon"></i>
                    <?php echo $u->penampungan?>
                </span>
            </div>
        </div>
        <?php }?>
    </div>
    <!-- Akhir Daftar hewan -->

    <!-- Data Popup Pertama-->
    <div class="ui small first modal bayar">
        <i class="window close icon"></i>
        <div class="header">
            <div style="font-size:24px;font-weight:bold">Profil Hewan</div>
        </div>
        <div class="image content">
            <div class="ui medium image">
                <img src="assets/image/foto1.jpg">
            </div>
            <div class="description">
                <!-- Nama hewannya -->
                <div style="font-size:24px;font-weight:bold">Yuki</div>
                <!-- Jenis hewan -->
                <div style="font-size:16px">Kucing</div>
                <!-- Deskripsi hewannya -->
                <p style="margin-top:10px">Yuki sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari
                    anda
                    dengan tingkahnya
                    yang lucunya. Yuki memiliki bulu warna coklat</p>
                <!-- Informasi hewan -->
                <div style="display:flex;flex-direction:column">
                    <div style="display:flex;flex-direction:row">
                        <div>Ras Hewan</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">Kucing Persia</div>
                    </div>
                    <div style="display:flex;flex-direction:row">
                        <div>Jenis Kelamin</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">Jantan</div>
                    </div>
                    <div style="display:flex;flex-direction:row">
                        <div>Umur</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">9 Bulan</div>
                    </div>
                    <div style="display:flex;flex-direction:row">
                        <div>Warna</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">Putih</div>
                    </div>
                    <div style="display:flex;flex-direction:row">
                        <div>Kondisi Kesehatan</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">Sehat</div>
                    </div>
                    <div style="display:flex;flex-direction:row">
                        <div>Biaya Adopsi</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">Rp 300.000</div>
                    </div>
                </div>
                <!-- Yang posting -->
                <div style="margin-top:10px">
                    <div style="font-size:16px;font-weight:bold;margin-bottom:2px">Diposting Oleh</div>
                    <div class="ui grid">
                        <div class="one wide column">
                            <a href="<?php echo base_url("penampunganhewan");?>">
                                <i class="home icon grey"></i>
                            </a>
                        </div>
                        <div class="fourteen wide column" style="font-size:14px;">
                            <a href="<?php echo base_url("profilpenampunganhewan");?>" style="color:inherit">
                                <div>Kelompok Pet Animal</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="actions">
            <div class="ui brown right labeled icon button" onclick="$('.ui.large.second.modal').modal('show');">
                Adopsi
                <i class="paw icon"></i>
            </div>
        </div>
    </div>
    <!-- Akhir Data Popup Pertama-->

    <!-- Data Popup Kedua -->
    <div class="ui large second modal">
        <div class="header">
            Syarat dan Ketentuan
        </div>
        <div class="content">
            <div class="ui grid" style="padding:20px">
                <div class="eight wide column">
                    <h3>Syarat</h3>
                    <p>1. Bersedia merawat hewan peliharaan dengan baik.</p>
                    <p>2. Bersedia menyayangi hewan peliharaan.</p>
                    <p>3. Memahami dan menjalankan prinsip 5 hak hewan.</p>
                    <p>4. Pengadopsi dan keluarga tidak alergi terhadap bulu hewan.</p>
                    <p>5. Bersedia menanggung biaya steril (jika ada).</p>
                    <p>6. Bersedia memeriksa kondisi hewan secara berkala.</p>
                    <p>7. Domisili malang</p>
                </div>
                <div class="eight wide column justified aligned">
                    <h3>Ketentuan</h3>
                    <p>1. Mampu secara finasial, tenaga dan waktu.</p>
                    <p>2. Mampu memberikan kasih sayang dan segala kebutuhan hewan tersebut (hewan dengan kebutuhan
                        khusus).</p>
                    <p>3. Mendapat persetujuan dari anggota keluarga.</p>
                    <p>4. Tidak untuk dipindah tangankan, tidak untuk dijual, tidak untuk sengaja dikembangbiakkan,
                        tidak untuk disakiti atau disiksa, tidak untuk dijadikan hadiah, tidak untuk mainan anak - anak,
                        tidak
                        untuk dikandang terus menerus.</p>
                    <p>5. Apabila pengadopsi tidak bisa memfoster lebih lama, pengadopsi wajib merawat sampai menemukan
                        pengadopsi baru demi keselematan hewan tersebut.</p>
                    <p>6. Wajib memberi laporan fostering (pengadopsian)</p>
                </div>
            </div>
        </div>
        <div class="actions">
            <div class="ui negative button">
                Tidak Setuju
            </div>
            <div class="ui positive right labeled icon button" onclick="$('.ui.tiny.third.modal').modal('show');">
                Setuju
                <i class="checkmark icon"></i>
            </div>
        </div>
    </div>
    <!-- Akhir Data Popup Kedua-->

    <!-- Data Popup Ketiga -->
    <div class="ui tiny third modal">
        <div class="header">
            Metode Pembayaran
        </div>
        <div class="content">
            <div class="ui stackable centered grid">
                <div class="six wide column">
                    <img class="ui centered rounded image" src="assets/image/foto1.jpg">
                    <div style="font-size:20px;font-weight:bold;text-align:center">Yuki</div>
                </div>
                <div class="ten wide column" style="padding-left:20px">
                    <div style="font-size:16px;">Anda akan mengadopsi hewan dari penampungan hewan :</div>
                    <div style="margin-top:5px;margin-bottom:5px;font-size:18px;font-weight:bold">Kelompok Pet Animal
                    </div>
                    <div class="ui grid">
                        <div class="column">
                            <i class="map marker alternate grey icon"></i>
                        </div>
                        <div class="column">
                            <div style="font-size:16px">Malang</div>
                        </div>
                    </div>
                    <div style="font-size:18px;font-weight:bold;margin-top:5px">Biaya Adopsi</div>
                    <div style="display:flex;flex-direction:row;font-weight:bold;margin-left:15px">
                        <div style="font-size:16px;color:#4d4d4d">Rp</div>
                        <div id="coba" style="margin-left:10px;font-size:16px;color:#4d4d4d">300.000</div>
                    </div>
                </div>
            </div>
            <div class="ui divider"></div>
            <div class="ui fluid scrolling dropdown" style="font-size:16px">
                <input type="hidden" name="postingan">
                <div class="default text">
                    <div style="font-size:18px">
                        <b>Pilih Metode Pembayaran</b>
                    </div>
                </div>
                <div class="menu fluid">
                    <div class="item">
                        <div style="display:flex;flex-direction:row;align-items:center;padding:5px 10px 5px 10px">
                            <div>
                                <img class="ui tiny image" src="assets/image/bankbca.png">
                            </div>
                            <div style="font-size:17px;font-weight:bold;margin-left:40px">
                                Transfer BCA
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div style="display:flex;flex-direction:row;align-items:center;padding:5px 10px 5px 10px">
                            <div>
                                <img class="ui tiny image" src="assets/image/bankmandiri.png">
                            </div>
                            <div style="font-size:17px;font-weight:bold;margin-left:40px">
                                Transfer Mandiri
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div style="display:flex;flex-direction:row;align-items:center;padding:5px 10px 5px 10px">
                            <div>
                                <img class="ui tiny image" src="assets/image/bankbri.png">
                            </div>
                            <div style="font-size:17px;font-weight:bold;margin-left:40px">
                                Transfer BRI
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div style="display:flex;flex-direction:row;align-items:center;padding:5px 10px 5px 10px">
                            <div>
                                <img class="ui tiny image" src="assets/image/bankbni.png">
                            </div>
                            <div style="font-size:17px;font-weight:bold;margin-left:40px">
                                Transfer BNI
                            </div>
                        </div>
                    </div>
                    <div class="item">
                        <div style="display:flex;flex-direction:row;align-items:center;padding:5px 10px 5px 10px">
                            <div>
                                <img class="ui tiny image" src="assets/image/bankcimb.png">
                            </div>
                            <div style="font-size:17px;font-weight:bold;margin-left:40px">
                                Transfer CIMB
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui divider"></div>
        </div>
        <div class="actions">
            <a href="<?php echo base_url("instruksipembayaranadopsi");?>">
                <button class="ui positive button">
                    Lanjut Pembayaran
                </button>
            </a>
        </div>
    </div>
    <!-- Akhir Data Popup Ketiga -->


    <!-- Data Popup Pertama-->
    <div class="ui small first modal gratis">
        <i class="window close icon"></i>
        <div class="header">
            <div style="font-size:24px;font-weight:bold">Profil Hewan</div>
        </div>
        <div class="image content">
            <div class="ui medium image">
                <img src="assets/image/catadopt.jpg">
            </div>
            <div class="description">
                <!-- Nama hewannya -->
                <div style="font-size:24px;font-weight:bold">Boo</div>
                <!-- Jenis hewan -->
                <div style="font-size:16px">Kucing</div>
                <!-- Deskripsi hewannya -->
                <p style="margin-top:10px">
                    Boo sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda dengan tingkahnya
                    yang lucunya. Boo memiliki bulu warna coklat
                </p>
                <!-- Informasi hewan -->
                <div style="display:flex;flex-direction:column">
                    <div style="display:flex;flex-direction:row">
                        <div>Ras Hewan</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">Kucing Persia</div>
                    </div>
                    <div style="display:flex;flex-direction:row">
                        <div>Jenis Kelamin</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">Jantan</div>
                    </div>
                    <div style="display:flex;flex-direction:row">
                        <div>Umur</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">9 Bulan</div>
                    </div>
                    <div style="display:flex;flex-direction:row">
                        <div>Warna</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">Putih</div>
                    </div>
                    <div style="display:flex;flex-direction:row">
                        <div>Kondisi Kesehatan</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">Sehat</div>
                    </div>
                </div>
                <!-- Yang posting -->
                <div style="margin-top:10px">
                    <div style="font-size:16px;font-weight:bold;margin-bottom:2px">Diposting Oleh</div>
                    <div class="ui grid">
                        <div class="one wide column">
                            <a href="<?php echo base_url("penampunganhewan");?>">
                                <i class="home icon grey"></i>
                            </a>
                        </div>
                        <div class="fourteen wide column" style="font-size:14px;">
                            <a href="<?php echo base_url("profilpenampunganhewan");?>" style="color:inherit">
                                <div>Eka</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="actions">
            <div class="ui brown right labeled icon button" onclick="$('.ui.tiny.second.modal.gratis').modal('show');">
                Adopsi
                <i class="paw icon"></i>
            </div>
        </div>
    </div>
    <!-- Akhir Data Popup Pertama-->

    <!-- Data Popup Kedua -->
    <div class="ui tiny second modal gratis">
        <div class="header">
            Selesai
        </div>
        <div class="content">
            <p style="font-size:16px;line-height:1.5">
                Pengajuan anda akan diproses kepada pihak penampungan hewan setelah pembayaran terkonfirmasi. Silahkan
                tunggu email konfirmasi dari pihak penampungan hewan untuk info lebih lanjut.
            </p>
        </div>
        <div class="actions">
            <a href="<?php echo base_url("halamanawalpengguna");?>">
                <button class="ui positive button">
                    Kembali Ke Beranda
                </button>
            </a>
        </div>
    </div>

</div>

<?php
// Load footer
$this->load->view('footer');
?>
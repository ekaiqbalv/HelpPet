<?php
// Load nav
$this->load->view('navigasiloginuser');
?>

<div class="ui container fluid" style="background-color:#cd8b62">
    <div class="ui container center aligned">
        <div class="ui three row stackable grid">
            <div class="column">
                <div class="row">
                    <h1 style="font-size:36px;color:white">Bantuan Anda Membuat Mereka Hidup Bahagia</h1>
                </div>
                <div class="ui two column stackable grid" style="margin-top:20px">
                    <div class="row">
                        <div class="column">
                            <img src="assets/image/pet.png" class="ui rounded medium centered image">
                        </div>
                        <div class="column middle aligned">
                            <div class="ui two row grid">
                                <div class="column">
                                    <div class="row">
                                        <h2 class="ui header">Apa Itu HelpPet?</h2>
                                        <p style="color:white;font-size:16px">HelpPet merupakan pilihan yang tepat bagi
                                            kamu untuk
                                            mengadopsi, mencari pengadopsi, maupun berdonasi untuk hewan peliharaan yang
                                            lucu!
                                        </p>
                                    </div>
                                    <div class="row" style="margin-top:30px">
                                        <h2 class="ui header">Berbagi Informasi Hewan Terlantar</h2>
                                        <p style="color:white;font-size:16px">Selain itu, di HelpPet kamu juga bisa
                                            membagikan
                                            informasi tentang hewan peliharaan yang terlantar, lho!
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" style="margin-top:10px">
                    <a href="<?php echo base_url("adopsi");?>">
                        <div class="ui huge animated fade button" tabindex="0"
                            style="border-radius:5px;margin-bottom:20px;background-color:#01a8de;color:white">
                            <div class="visible content">Ingin Adopsi Mereka?</div>
                            <div class="hidden content">
                                Pilih Sekarang
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="ui container">
    <div class="ui center aligned container" style="margin-top:30px;font-size:36px">
        <p>Mulai membantu mereka?</p>
    </div>
    <div class="ui center aligned container" style="margin-top:10px;font-size:18px">
        <p>Halo #ParaPecintaHewan, silahkan cari dan pilih hewan yang ingin kalian adopsi</p>
    </div>
    <div class="ui fluid action input" style="margin-top:20px;font-size:18px;padding-left:60px;padding-right:60px">
        <input type="text" placeholder="Cari hewan, atau penampungan hewan">
        <div class="ui button brown">Cari</div>
    </div>
</div>

<div class="ui container" style="margin-top:30px;margin-bottom:30px">

    <!-- Daftar hewan -->
    <div class="ui four doubling link cards">
        <div class="card" onclick="$('.ui.small.first.modal').modal('show');">
            <div class="image">
                <img src="assets/image/foto1.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Yuki</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                Yuki sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda dengan tingkahnya yang lucunya. Yuki memiliki bulu warna coklat
                </div>
            </div>
            <div class="extra content">
                <span>
                    <i class="home icon"></i>
                    Kelompok Pet Animal
                </span>
            </div>
        </div>
        <div class="card">
            <div class="image">
                <img src="assets/image/catadopt.jpg" style="object-fit:cover;height:250px">
            </div>
            <div class="content">
                <div class="header">Boo</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                Boo sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda dengan tingkahnya yang lucunya. Boo memiliki bulu warna coklat
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
                Toms sangat mengemaskan. Ia menjadi anjing yang selalu menemani hari - hari anda dengan tingkahnya yang lucunya. Toms memiliki bulu warna coklat
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
                Buster sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda dengan tingkahnya yang lucunya. Buster memiliki bulu warna coklat
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
                Candie sangat mengemaskan. Ia menjadi hamster yang selalu menemani hari - hari anda dengan tingkahnya yang lucunya. Candie memiliki bulu warna coklat
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
                Dexter sangat mengemaskan. Ia menjadi anjing yang selalu menemani hari - hari anda dengan tingkahnya yang lucunya. Dexter memiliki bulu warna coklat
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
                Ferguso sangat mengemaskan. Ia menjadi anjing yang selalu menemani hari - hari anda dengan tingkahnya yang lucunya. Ferguso memiliki bulu warna coklat
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
                Nillo sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda dengan tingkahnya yang lucunya. Nillo memiliki bulu warna coklat
                </div>
            </div>
            <div class="extra content">

                <span>
                    <i class="home icon"></i>
                    Pondok Pengayom Satwa
                </span>
            </div>
        </div>
    </div>
    <!-- Akhir Daftar hewan -->

    <!-- Data Popup Pertama-->
    <div class="ui small first modal">
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
                <p style="margin-top:10px">Yuki sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda
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
</div>
<!-- Akhir Data Popup Ketiga -->

<div class="ui center aligned container" style="margin-bottom:30px">
    <a href="<?php echo base_url("adopsi");?>">
        <div class="ui vertical animated large button" tabindex="0"
            style="width:150px;background-color:#01a8de;color:white">
            <div class="hidden content">Lihat Semua</div>
            <div class="visible content">
                <i class="angle double down icon"></i>
            </div>
        </div>
    </a>
</div>

<div class="ui container fluid" style="background-color:#00aeef;color:white">
    <div class="ui center aligned container">
        <div style="padding-top:20px;font-size:32px">
            <p>Bantu Mereka Dengan Cara Lain?</p>
        </div>
        <div class="ui two column stackable grid" style="margin-top:30px;margin-bottom:30px">
            <div class="row">
                <div class="column">
                    <a href="<?php echo base_url("relawan");?>">
                        <img src="assets/image/relawan.jpg" class="ui large rounded centered image">
                    </a>
                </div>
                <div class="column middle aligned">
                    <div style="font-size:24px">Daftarkan Diri Sebagai Relawan</div>
                    <div style="font-size:16px;margin-top:30px">
                        We can give your company superpowers to do things that they never thought possible. Let us
                        delight your customers and empower your needs...through pure data analytics.
                        We can give your company superpowers to do things that they never thought possible. Let us
                        delight your customers and empower your needs...through pure data analytics.
                    </div>
                    <a href="<?php echo base_url("relawan");?>">
                        <button class="ui inverted button" style="margin-top:30px">Daftar Sekarang</button>
                    </a>
                </div>
            </div>
        </div>
        <div class="ui two column stackable grid" style="margin-top:30px;padding-bottom:50px">
            <div class="row">
                <div class="column  middle aligned">
                <div style="font-size:24px">Berikan Donasi Untuk Penampungan Hewan</div>
                    <div style="font-size:16px;margin-top:30px">
                        We can give your company superpowers to do things that they never thought possible. Let us
                        delight your customers and empower your needs...through pure data analytics.
                        We can give your company superpowers to do things that they never thought possible. Let us
                        delight your customers and empower your needs...through pure data analytics.
                    </div>
                    <a href="<?php echo base_url("donasi");?>">
                        <button class="ui inverted button" style="margin-top:30px">Donasi Sekarang</button>
                    </a>
                </div>
                <div class="column">
                    <a href="<?php echo base_url("donasi");?>">
                        <img src="assets/image/donasi.jpg" class="ui large rounded centered image">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Load footer
$this->load->view('footer');
?>
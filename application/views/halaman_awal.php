<?php
// Load nav
$this->load->view('navigasi');
?>

<div class="ui container fluid" style="background-color:#cd8b62">
    <div class="ui container center aligned">
        <div class="ui three row grid">
            <div class="column">
                <div class="row">
                    <h1 style="font-size:36px;color:white">Bantuan Anda Membuat Mereka Hidup Bahagia</h1>
                </div>
                <div class="ui two column grid" style="margin-top:20px">
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
                    <a href="<?php echo base_url("daftar");?>">
                        <div class="ui huge animated fade button" tabindex="0"
                            style="border-radius:5px;margin-bottom:20px;background-color:#01a8de;color:white">
                            <div class="visible content">Ingin Adopsi Mereka?</div>
                            <div class="hidden content">
                                Buat Akun
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
        <p>Halo #PecintaHewan, silahkan cari dan pilih hewan yang ingin kalian adopsi</p>
    </div>
    <div class="ui fluid action input" style="margin-top:20px;font-size:18px;padding-left:60px;padding-right:60px">
        <input type="text" placeholder="Cari hewan, atau penampungan hewan">
        <div class="ui button">Search</div>
    </div>
</div>

<div class="ui container" style="margin-top:30px;margin-bottom:30px">

    <!-- Daftar hewan -->
    <div class="ui five doubling link cards">
        <div class="card" onclick="$('.ui.small.first.modal').modal('show');">
            <div class="image">
                <img src="assets/image/pet.png">
            </div>
            <div class="content">
                <div class="header">Yuki</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Yuki merupakan kucing yang senang bermain bla bla bla bla bla bla
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
                <img src="assets/image/pet.png">
            </div>
            <div class="content">
                <div class="header">Yuki</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Yuki merupakan kucing yang senang bermain bla bla bla bla bla bla
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
                <img src="assets/image/pet.png">
            </div>
            <div class="content">
                <div class="header">Yuki</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Yuki merupakan kucing yang senang bermain bla bla bla bla bla bla
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
                <img src="assets/image/pet.png">
            </div>
            <div class="content">
                <div class="header">Yuki</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Yuki merupakan kucing yang senang bermain bla bla bla bla bla bla
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
                <img src="assets/image/pet.png">
            </div>
            <div class="content">
                <div class="header">Yuki</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Yuki merupakan kucing yang senang bermain bla bla bla bla bla bla
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
                <img src="assets/image/pet.png">
            </div>
            <div class="content">
                <div class="header">Yuki</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Yuki merupakan kucing yang senang bermain bla bla bla bla bla bla
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
                <img src="assets/image/pet.png">
            </div>
            <div class="content">
                <div class="header">Yuki</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Yuki merupakan kucing yang senang bermain bla bla bla bla bla bla
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
                <img src="assets/image/pet.png">
            </div>
            <div class="content">
                <div class="header">Yuki</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Yuki merupakan kucing yang senang bermain bla bla bla bla bla bla
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
                <img src="assets/image/pet.png">
            </div>
            <div class="content">
                <div class="header">Yuki</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Yuki merupakan kucing yang senang bermain bla bla bla bla bla bla
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
                <img src="assets/image/pet.png">
            </div>
            <div class="content">
                <div class="header">Yuki</div>
                <div class="meta">
                    <a>Kucing</a>
                </div>
                <div class="description">
                    Yuki merupakan kucing yang senang bermain bla bla bla bla bla bla
                </div>
            </div>
            <div class="extra content">

                <span>
                    <i class="home icon"></i>
                    Nawak Nawek
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
                <img src="assets/image/pet.png">
            </div>
            <div class="description">
                <!-- Nama hewannya -->
                <div style="font-size:24px;font-weight:bold">Yuki</div>
                <!-- Jenis hewan -->
                <div style="font-size:16px">Kucing</div>
                <!-- Deskripsi hewannya -->
                <p style="margin-top:10px">Yuki merupakan kucing yang senang bermain bla bla bla bla bla blabla bla bla
                    bla bla blabla bla bla
                    bla bla bla</p>
                <!-- Informasi hewan -->
                <div style="display:flex;flex-direction:column">
                    <div style="display:flex;flex-direction:row">
                        <div>Ras Hewan</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">Kucing Persia</div>
                    </div>
                    <div style="display:flex;flex-direction:row">
                        <div>Umur Hewan</div>
                        <div style="margin-left:5px">:</div>
                        <div style="margin-left:5px">9 Bulan</div>
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
                            <a href="<?php echo base_url("penampunganhewan");?>" style="color:inherit">
                                <div>Kelompok Pet Animal</div>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="actions">
            <div class="ui brown right labeled icon button" onclick="$('.ui.tiny.second.modal').modal('show');">
                Adopsi
                <i class="paw icon"></i>
            </div>
        </div>
    </div>
    <!-- Akhir Data Popup Pertama-->

    <!-- Data Popup Kedua -->
    <div class="ui tiny second modal">
        <div class="header">
            Syarat dan Ketentuan
        </div>
        <div class="content">
            <p>1. Bersedia merawat hewan peliharaan dengan baik.</p>
            <p>2. Bersedia menyayangi hewan peliharaan.</p>
            <p>3. Meluangkan waktu dan uang untuk keperluan hewan peliharaan.</p>
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
            Selesai
        </div>
        <div class="content">
            <p>Pengajuan anda telah diproses kepada pihak penampungan hewan. Silahkan tunggu email konfirmasi untuk info lebih lanjut.</p>
        </div>
        <div class="actions">
            <div class="ui positive right labeled icon button">
                Oke
                <i class="checkmark icon"></i>
            </div>
        </div>
    </div>
    <!-- Akhir Data Popup Ketiga -->
</div>

<div class="ui center aligned container" style="margin-bottom:30px">
    <div class="ui vertical animated large button" tabindex="0"
        style="width:150px;background-color:#01a8de;color:white">
        <div class="hidden content">Lihat Semua</div>
        <div class="visible content">
            <i class="angle double down icon"></i>
        </div>
    </div>
</div>

<div class="ui container fluid" style="background-color:#00aeef;color:white">
    <div class="ui center aligned container">
        <div style="padding-top:20px;font-size:32px">
            <p>Bantu Mereka Dengan Cara Lain?</p>
        </div>
        <div class="ui two column grid" style="margin-top:30px;margin-bottom:30px">
            <div class="row">
                <div class="column">
                    <img src="assets/image/relawan.jpg" class="ui large rounded centered image">
                </div>
                <div class="column middle aligned">
                    <p style="font-size:24px">Daftarkan Diri Sebagai Relawan</p>
                    <p>We can give your company superpowers to do things that they never thought possible. Let us
                        delight your customers and empower your needs...through pure data analytics.(belom tau isi apa)
                        We can give your company superpowers to do things that they never thought possible. Let us
                        delight your customers and empower your needs...through pure data analytics.(belom tau isi apa)
                    </p>
                    <button class="ui inverted button">Daftar Sekarang</button>
                </div>
            </div>
        </div>
        <div class="ui two column grid" style="margin-top:30px;padding-bottom:50px">
            <div class="row">
                <div class="column  middle aligned">
                    <p style="font-size:24px">Berikan Donasi Untuk Penampungan Hewan</p>
                    <p>We can give your company superpowers to do things that they never thought possible. Let us
                        delight your customers and empower your needs...through pure data analytics.(belom tau isi apa)
                        We can give your company superpowers to do things that they never thought possible. Let us
                        delight your customers and empower your needs...through pure data analytics.(belom tau isi apa)
                    </p>
                    <button class="ui inverted button">Donasi Sekarang</button>
                </div>
                <div class="column">
                    <img src="assets/image/donasi.jpg" class="ui large rounded centered image">
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Load footer
$this->load->view('footer');
?>
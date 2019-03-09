<?php
// Load nav
$this->load->view('navigasi');
?>

<div class="ui container fluid" style="background-color: #F5F5F5">
    <div class="ui center aligned container">
        <div class="image">
            <img class="ui centered huge image" src="assets/image/homepenampunganhewan.png">
        </div>
    </div>
    <div class="ui container" style="padding-bottom: 20px">
        <div style="display:flex;flex-direction:row;">
            <div>
                <div class="ui small circular image">
                    <img src="assets/image/profilpenampungan.jpg">
                </div>
            </div>
            <div style="margin-top:40px;margin-left:10px">
                <div style="display:flex;flex-direction:column">
                    <div style="font-size:24px">
                        Kelompok Pet Animal
                    </div>
                    <div style="margin-top:15px;display:flex;flex-direction:row">
                        <i class="map marker alternate large icon"></i>
                        <div style="font-size:16px">Malang</div>
                    </div>
                </div>
            </div>
            <div style="margin-top:40px;;margin-left:5px;cursor:pointer">
                <i class="envelope large icon"></i>
            </div>
        </div>
    </div>
</div>

<div style="backgound-color:#e6e5e5;height:2px"></div>

<div class="ui container">
    <div class="ui stackable grid">
        <div class="left floated twelve wide stackable column">
            <div class="ui pointing secondary huge stackable menu">
                <a class="active item" data-tab="penampunganhewan-hewan">Hewan</a>
                <a class="item" data-tab="penampunganhewan-relawan">Relawan</a>
                <a class="item" data-tab="penampunganhewan-informasi">Informasi</a>
                <a class="item" data-tab="penampunganhewan-donasi">Laporan Donasi</a>
            </div>

            <!-- Daftar hewan -->
            <div class="ui tab active" data-tab="penampunganhewan-hewan">
                <div class="ui right aligned category search" style="margin-bottom:15px">
                    <div class="ui icon input">
                        <input type="text" placeholder="Cari hewan...">
                        <i class="search icon"></i>
                    </div>
                </div>
                <div class="ui four doubling link cards">
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
                </div>
            </div>

            <!-- Daftar Relawan -->
            <div class="ui tab" data-tab="penampunganhewan-relawan">
                <div class="ui four doubling link cards">
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
                </div>
            </div>

            <!-- Informasi penampungan hewan -->
            <div class="ui tab" data-tab="penampunganhewan-informasi"
                style="border:2px solid grey;padding:40px;border-radius:5px">
                <h2>Informasi Penampungan Hewan</h2><br>
                <div class="ui justified container">
                    Contrary to popular belief, Lorem Ipsum is not simply random text. It has roots in a piece of
                    classical Latin literature from 45 BC, making it over 2000 years old. Richard McClintock, a Latin
                    professor at Hampden-Sydney College in Virginia, looked up one of the more obscure Latin words,
                    consectetur, from a Lorem Ipsum passage, and going through the cites of the word in classical
                    literature, discovered the undoubtable source. Lorem Ipsum comes from sections 1.10.32 and 1.10.33
                    of "de Finibus Bonorum et Malorum" (The Extremes of Good and Evil) by Cicero, written in 45 BC. This
                    book is a treatise on the theory of ethics, very popular during the Renaissance. The first line of
                    Lorem Ipsum, "Lorem ipsum dolor sit amet..", comes from a line in section 1.10.32.
                </div>
            </div>

            <!-- Laporan donasi -->
            <div class="ui tab" data-tab="penampunganhewan-donasi">
                <h2>Laporan Penggunaan Dana Donasi</h2><br>
                <a href="">Februari 2019</a><br><br>
                <a href="">Januari 2019</a><br><br>
                <a href="">Desember 2018</a><br><br>
            </div>
        </div>

        <div class="right floated four wide column">
            <div style="margin-left:30px;margin-top:30px">
                <div class="ui animated fade large button brown container" tabindex="0"
                    style="background-color:#cd8b62">
                    <div class="visible content">Ikut Donasi?</div>
                    <div class="hidden content">
                        Donasi Sekarang
                    </div>
                </div>

                <!-- Daftar donatur -->
                <div style="font-size:24px;font-weight:bold;margin-top:20px;margin-bottom:20px;text-align:center">Daftar Donatur</div>
                <div class="ui one doubling cards">
                    <div class="card">
                        <div class="content">
                            <img class="left floated mini ui image circular"
                                src="https://semantic-ui.com/images/avatar/large/elliot.jpg">
                            <div class="header">
                                Budi
                            </div>
                            <div class="meta">
                                1 Mar 2019 19:32
                            </div>
                            <div class="description">
                                Semoga bisa membantu
                            </div>
                        </div>
                        <div class="extra content">
                            <div class="ui grid" style="font-size:18px;color:#5f5f5f;font-weight:bold">
                                <div class="three wide column">Rp.</div>
                                <div class="thirteen wide column">100.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <img class="left floated mini ui image circular"
                                src="https://semantic-ui.com/images/avatar/large/elliot.jpg">
                            <div class="header">
                                Novi
                            </div>
                            <div class="meta">
                                1 Mar 2019 13:00
                            </div>
                            <div class="description">
                                Semoga bisa membantu
                            </div>
                        </div>
                        <div class="extra content">
                            <div class="ui grid" style="font-size:18px;color:#5f5f5f;font-weight:bold">
                                <div class="three wide column">Rp.</div>
                                <div class="thirteen wide column">100.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <img class="left floated mini ui image circular"
                                src="https://semantic-ui.com/images/avatar/large/elliot.jpg">
                            <div class="header">
                                Nadia
                            </div>
                            <div class="meta">
                                1 Mar 2019 07:36
                            </div>
                            <div class="description">
                                Semoga bisa membantu
                            </div>
                        </div>
                        <div class="extra content">
                            <div class="ui grid" style="font-size:18px;color:#5f5f5f;font-weight:bold">
                                <div class="three wide column">Rp.</div>
                                <div class="thirteen wide column">100.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <img class="left floated mini ui image circular"
                                src="https://semantic-ui.com/images/avatar/large/elliot.jpg">
                            <div class="header">
                                Ucok
                            </div>
                            <div class="meta">
                                28 Feb 2019 19:32
                            </div>
                            <div class="description">
                                Semoga bisa membantu
                            </div>
                        </div>
                        <div class="extra content">
                            <div class="ui grid" style="font-size:18px;color:#5f5f5f;font-weight:bold">
                                <div class="three wide column">Rp.</div>
                                <div class="thirteen wide column">100.000</div>
                            </div>
                        </div>
                    </div>
                    <div class="card">
                        <div class="content">
                            <img class="left floated mini ui image circular"
                                src="https://semantic-ui.com/images/avatar/large/elliot.jpg">
                            <div class="header">
                                Eric
                            </div>
                            <div class="meta">
                                28 Feb 2019 14:02
                            </div>
                            <div class="description">
                                Semoga bisa membantu
                            </div>
                        </div>
                        <div class="extra content">
                            <div class="ui grid" style="font-size:18px;color:#5f5f5f;font-weight:bold">
                                <div class="three wide column">Rp.</div>
                                <div class="thirteen wide column">100.000</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

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
                        <a href="<?php echo base_url("penampunganhewan");?>" style="color:inherit">
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
        Selesai
    </div>
    <div class="content">
        <p>Pengajuan anda telah diproses kepada pihak penampungan hewan. Silahkan tunggu email konfirmasi untuk info
            lebih lanjut.</p>
    </div>
    <div class="actions">
        <div class="ui positive right labeled icon button">
            Oke
            <i class="checkmark icon"></i>
        </div>
    </div>
</div>
<!-- Akhir Data Popup Ketiga -->

<?php
// Load nav
$this->load->view('footer');
?>
<?php
// Load nav
$this->load->view('navigasi');
?>

<div class="ui container fluid">    
    <div class="ui stackable grid" style="margin:30px;background-color:#f6f6f6;border-radius: 15px;">
        <div class="eight wide column middle aligned" style="padding-left:40px">
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
        <div class="eight wide column" style="padding-right:40px;padding-top:30px;padding-bottom:30px">
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
<!-- <div class="ui divider" style="margin-top:40px;margin-bottom:40px"></div> -->

<div class="ui container">
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
    </div>
    <!-- Akhir Daftar Hewan -->

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

</div>

<?php
// Load footer
$this->load->view('footer');
?>
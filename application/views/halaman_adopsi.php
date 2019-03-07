<?php
// Load nav
$this->load->view('navigasi');
?>

<div class="ui container" style="margin-top:30px">
    <div style="font-size:24px">Halo #ParaPecintaHewan,</div>
    <div style="font-size:20px;margin-top:10px">Silahkan cari atau pilih hewan yang ingin kalian adopsi</div>
    <div class="ui grid" style="margin-top:10px">
        <div class="twelve wide column">
            <div class="ui action left icon input fluid" style="font-size:16px">
                <i class="search icon"></i>
                <input type="text" placeholder="Cari jenis hewan yang ingin diadopsi...">
                <div class="ui button brown">Search</div>
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
<div class="ui divider" style="margin-top:40px;margin-bottom:40px"></div>

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

<?php
// Load footer
$this->load->view('footer');
?>
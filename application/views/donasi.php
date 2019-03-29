<?php
// Load nav
$this->load->view('navigasi');
?>

<div class="ui container fluid" style="background-color:#f5f5f5">
    <div style="padding:40px 30px 40px 30px">
        <img class="ui fluid rounded image" src="assets/image/tes1.jpg">
    </div>
</div>
<div class="ui container fluid">
    <div class="ui container center aligned" style="margin-top:50px">
        <h1 style="font-size:42px">Mulai Berdonasi</h1>
        <div
            style="width:90px;height:3px;background-color:#3a3a3a;border-radius:10px;display:inline-block;margin-top:10px">
        </div>
        <div style="margin-top:20px;font-size:22px;font-weight:light;line-height:1.6;font-weight:lighter;">
            Donasi sekarang untuk membantu dan
            mendukung Penampungan Hewan serta mulailah kisah donasi anda yang akan membuat perubahan bagi kesejahteraan
            hewan di Malang.
        </div>
    </div>
    <div class="ui container">
        <div class="ui stackable centered grid"
            style="margin-left:60px;margin-right:60px;margin-top:15px;font-size:17px;line-height:1.6">
            <div class="eight wide column justified" style="padding-right:35px">
                Apakah anda tahu bahwa pihak penampungan hewan hampir tidak menerima dana dari pemerintah?. Semua yang
                mereka lakukan bergantung kepada kemurahan hati orang - orang seperti anda yang memilih untuk membuat
                perubahan.<br><br>
                Apakah anda tahu bahwa pihak penampungan hewan hampir tidak menerima dana dari pemerintah?. Semua yang
                mereka lakukan bergantung kepada kemurahan hati orang - orang seperti anda yang memilih untuk membuat
                perubahan.
            </div>
            <div class="eight wide column justified" style="padding-left:35px">
                Apakah anda tahu bahwa pihak penampungan hewan hampir tidak menerima dana dari pemerintah?. Semua yang
                mereka lakukan bergantung kepada kemurahan hati orang - orang seperti anda yang memilih untuk membuat
                perubahan.<br><br>
                Apakah anda tahu bahwa pihak penampungan hewan hampir tidak menerima dana dari pemerintah?. Semua yang
                mereka lakukan bergantung kepada kemurahan hati orang - orang seperti anda yang memilih untuk membuat
                perubahan.
            </div>
        </div>
    </div>
</div>

<div class="ui container fluid" style="margin-top:80px;margin-bottom:60px;background-color:#00aeef;color:white">
    <div class="ui container center aligned" style="padding-top:50px;padding-bottom:50px">
        <div style="font-size:36px;line-height:1.2">Seberapa Berpengaruhnya Donasi Anda?</div>
    </div>
</div>

<div class="ui container" style="color:#0c8cd1">
    <div class="ui four column stackable grid center aligned">
        <div class="column">
            <img class="ui circular centered image" src="assets/image/foto3.jpg" style="width:250px;height:250px;object-fit:cover">
            <h1 style="font-size:38px">Rp 50.000</h1>
            <p style="font-size:20px">Membantu dengan makanan dan persediaan lainnya untuk hewan peliharaan terlantar.</p>
        </div>
        <div class="column">
            <img class="ui circular centered image" src="assets/image/foto1.jpg" style="width:250px;height:250px;object-fit:cover">
            <h1 style="font-size:38px">Rp 100.000</h1>
            <p style="font-size:20px">Dapat mendukung penyelamatan hewan peliharaan yang terlantar dilingkungan.</p>
        </div>
        <div class="column">
            <img class="ui circular centered image" src="assets/image/foto2.jpg" style="width:250px;height:250px;object-fit:cover">
            <h1 style="font-size:38px">Rp 250.000</h1>
            <p style="font-size:20px">Dapat memberikan perawatan medis untuk hewan yang sakit dan terluka.</p>
        </div>
        <div class="column">
            <img class="ui circular centered image" src="assets/image/penampungan1.jpg" style="width:250px;height:250px;object-fit:cover">
            <h1 style="font-size:38px">Rp 500.000</h1>
            <p style="font-size:20px">Dapat memberikan operasi sterilisasi untuk mengontrol populasi hewan peliharaan.</p>
        </div>
    </div>
</div>

<div class="ui divider" style="margin-top:55px;margin-bottom:60px"></div>

<div class="ui container" style="margin-top:30px;margin-bottom:30px">
    <div style="font-size:24px">Halo #ParaPecintaHewan,</div>
    <div style="font-size:20px;margin-top:10px">Silahkan pilih Penampungan Hewan yang ingin anda berikan donasi</div>
</div>

<div class="ui container">
    <!-- Daftar Penampungan -->
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
                <a href="<?php echo base_url("halamandonasi");?>">
                    <button class="ui button brown fluid">Donasi</button>
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
                <button class="ui button brown fluid">Donasi</button>
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
                <button class="ui button brown fluid">Donasi</button>
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
                <button class="ui button brown fluid">Donasi</button>
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
                <button class="ui button brown fluid">Donasi</button>
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
                <button class="ui button brown fluid">Donasi</button>
            </div>
        </div>
    </div>
    <!-- Akhir Daftar Penampungan -->
</div>

<div class="ui container fluid"
    style="background-color:#cd8b62;color:white;margin-top:80px;padding-top:40px;padding-bottom:50px">
    <div class="ui container center aligned">
        <h1 style="font-size:42px">Cara Lain Untuk Membantu?</h1>
        <div
            style="width:90px;height:3px;background-color:white;border-radius:10px;display:inline-block;margin-top:10px">
        </div>
        <div class="ui stackable centered grid"
            style="margin-left:60px;margin-right:60px;margin-top:15px;line-height:1.6">
            <div class="eight wide column justified" style="padding-right:25px;font-size:22px">
                Membantu puluhan ribu hewan yang terlantar di luar sana menjadi sebuah hal yang mungkin untuk dilakukan
                karena adanya bantuan dari orang - orang yang murah hati seperti anda. Selain memberikan bantuan berupa
                materi, anda juga bisa memberikan bantuan berupa waktu yang dapat anda luangkan untuk menjadi seorang
                relawan.
            </div>
            <div class="eight wide column justified" style="padding-left:25px;font-size:17px">
                Tempat penampungan hewan mungkin akan sulit untuk berfungsi tanpa adanya bantuan dari sukarelawan yang
                luar bisa yang bersedia menyumbangkan waktu mereka. Jika anda siap mengulurkan tangan untuk membantu,
                kami mempunyai beberapa pilihan agar anda dapat menjadi seorang relawan dan tentunya sesuai dengan
                anda.<br><br>
                Kami sangat senang jika anda ingin bergabung dengan kami. Bersama-sama, kita dapat menciptakan kehidupan
                yang lebih baik bagi hewan-hewan yang ada di Indonesia.
            </div>
        </div>
        <a href="<?php echo base_url("relawan");?>">
            <button class="ui huge inverted button" style="width:250px;margin-top:30px">Daftar Relawan</button>
        </a>
    </div>
</div>

<?php
// Load nav
$this->load->view('footer');
?>
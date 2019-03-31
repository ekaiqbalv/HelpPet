<?php
// Load nav
$this->load->view('navigasiloginuser');
?>

<div class="ui container" style="margin-top:86px;margin-bottom:86px">
    <div class="ui stackable grid">
        <div class="four wide column">
            <div
                style="min-width:280px;border:3px solid #ebc589;border-radius:5px;background-color:#f7efd2;padding:40px 30px 30px 30px">
                <img class="ui circular centered image" src="assets/image/catadopt.jpg"
                    style="width:150px;height:150px;object-fit:cover;border:5px solid #ebc589;padding:3px">
                <div
                    style="text-align:center;line-height:1.5;font-size:22px;margin-top:20px;margin-bottom:20px;color:#4d4d4d">
                    <b>Eka Iqbal Virgiawan</b>
                </div>
                <div class="ui divider" style="margin-top:10px;margin-bottom:20px"></div>
                <div class="ui secondary vertical pointing fluid menu" style="color:#4d4d4d;font-size:17px">
                    <a class="active item" data-tab="profil">
                        Profil
                    </a>
                    <a class="item" data-tab="postingan">
                        Postingan Hewan
                    </a>
                    <a class="item" data-tab="adopsi">
                        Adopsi
                    </a>
                    <a class="item" data-tab="relawan">
                        Relawan
                    </a>
                    <a class="item" data-tab="donasi">
                        Donasi
                    </a>
                    <a class="item" data-tab="saldo">
                        Dana
                    </a>
                </div>
                <div class="ui divider" style="margin-top:20px"></div>
            </div>
        </div>
        <div class="twelve wide column" style="padding-left:30px">
            <div class="ui active tab" data-tab="profil">
                <div
                    style="font-size:32px;color:white;text-align:center;background-color:#cd8b62;border-top-left-radius:5px;border-top-right-radius:5px;padding:20px">
                    <b style="line-height:1.5">Informasi Akun</b>
                </div>
                <div
                    style="margin-top:20px;background-color:#f7efd2;border:5px solid #ebc589;border-radius:5px;padding:40px 50px 40px 50px;color:#4d4d4d">
                    <div>
                        <label style="font-size:22px"><b>Nama Lengkap</b></label>
                        <div style="font-size:18px;margin-top:10px">Eka Iqbal Virgiawan</div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Alamat Email</b></label>
                        <div style="font-size:18px;margin-top:10px">ekaiqbalvirgiawan @gmail.com</div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Nomor Telepon</b></label>
                        <div style="font-size:18px;margin-top:10px">08221234567</div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Alamat Tempat Tinggal</b></label>
                        <div style="font-size:18px;margin-top:10px">Jalan Veteran, Malang, Jawa Timur</div>
                    </div>
                </div>
            </div>
            <div class="ui tab" data-tab="postingan">
                <div
                    style="font-size:32px;color:white;text-align:center;background-color:#cd8b62;border-top-left-radius:5px;border-top-right-radius:5px;padding:20px">
                    <b style="line-height:1.5">Daftar Postingan Anda</b>
                </div>
                <div
                    style="margin-top:20px;background-color:#f7efd2;border:5px solid #ebc589;border-radius:5px;padding:30px 20px 30px 20px;color:#4d4d4d">
                    <div style="font-size:20px">
                        <b>Silahkan pilih salah satu postingan yang ingin anda ubah</b>
                    </div>
                    <div class="ui three doubling special centered cards" style="margin-top:10px">
                        <div class="card">
                            <div class="blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button">Ubah Postingan</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/image/catadopt.jpg" style="object-fit:cover;height:150px">
                            </div>
                            <div class="content">
                                <a class="header">Boo</a>
                                <div class="meta">
                                    <a>Kucing</a>
                                </div>
                                <div class="description">
                                    Boo sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda
                                    dengan
                                    tingkahnya yang lucunya. Boo memiliki bulu warna coklat
                                </div>
                            </div>
                            <div class="extra content">
                                <span>
                                    <i class="home icon"></i>
                                    Eka Iqbal Virgiawan
                                </span>
                            </div>
                        </div>
                        <div class="card">
                            <div class="blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button">Ubah Postingan</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/image/foto3.jpg" style="object-fit:cover;height:150px">
                            </div>
                            <div class="content">
                                <a class="header">Banie</a>
                                <div class="meta">
                                    <a>Kelinci</a>
                                </div>
                                <div class="description">
                                    Banie sangat mengemaskan. Ia menjadi kelinci yang selalu menemani hari - hari anda
                                    dengan
                                    tingkahnya yang lucunya. Banie memiliki bulu warna putih
                                </div>
                            </div>
                            <div class="extra content">
                                <span>
                                    <i class="home icon"></i>
                                    Eka Iqbal Virgiawan
                                </span>
                            </div>
                        </div>
                    </div>
                </div>
                <div style="margin-top:30px;padding:20px 40px 20px 40px;border-radius:5px;background-color:#F7EFD2">
                    <div class="ui grid">
                        <div class="one wide column middle aligned">
                            <i class="info circle big brown icon"></i>
                        </div>
                        <div class="fifteen wide column" style="font-size:15px;line-height:1.5">
                            HelpPet akan mengenakan biaya administrasi senilai 5% dari biaya adopsi yang anda tentukan.
                            Biaya ini akan kami tambahkan langsung pada biaya adopsi hewan anda. Biaya administrasi yang
                            kami kenakan ini akan digunakan untuk menutup biaya operasional serta melakukan pengembangan
                            platform HelpPet ini agar dapat memberikan pelayanan yang lebih maksimal, serta kemudahan
                            bagi para pecinta hewan dalam menggunakan fitur yang tersedia pada HelpPet seperti Adopsi,
                            Relawan, dan Donasi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui tab" data-tab="adopsi">
                <div
                    style="font-size:32px;color:white;text-align:center;background-color:#cd8b62;border-top-left-radius:5px;border-top-right-radius:5px;padding:20px">
                    <b style="line-height:1.5">Pengajuan Adopsi</b>
                </div>
                <div
                    style="margin-top:20px;background-color:#f7efd2;border:5px solid #ebc589;border-radius:5px;color:#4d4d4d">
                    <div class="ui borderless inverted huge stackable menu"
                        style="background-color:#ebc589;border-radius:0px">
                        <a class="active item" data-tab="pengajuan-saya" style="font-size:17px;color:white"><b>Pengajuan
                                Anda</b></a>
                        <a class="item" data-tab="pengajuan-saya-diterima"
                            style="font-size:17px;color:white"><b>Pengajuan
                                Diterima</b></a>
                        <a class="item" data-tab="pengajuan-pengadopsi" style="font-size:17px;color:white"><b>Pengajuan
                                Pengadopsi</b></a>
                        <a class="item" data-tab="konfirmasi-pengadopsi"
                            style="font-size:17px;color:white"><b>Konfirmasi Pengadopsi</b></a>
                    </div>
                    <div class="ui active tab" data-tab="pengajuan-saya" style="padding:20px 20px 30px 20px">
                        <table class="ui striped stackable sortable celled yellow table center aligned">
                            <thead>
                                <tr>
                                    <th>Nama Hewan</th>
                                    <th>Jenis Hewan</th>
                                    <th>Pemilik Hewan</th>
                                    <th>Biaya Adopsi (Rp)</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Buster</td>
                                    <td>Kelinci</td>
                                    <td>Albar</td>
                                    <td>100.000</td>
                                    <td>Menunggu Pembayaran</td>
                                </tr>
                                <tr>
                                    <td>Yuki</td>
                                    <td>Kucing</td>
                                    <td>Kelompok Pet Animal</td>
                                    <td>500.000</td>
                                    <td>Sudah Diajukan Kepada Pihak Terkait</td>
                                </tr>
                                <tr>
                                    <td>Ferguso</td>
                                    <td>Anjing</td>
                                    <td>Garda Satwa Indonesia</td>
                                    <td>300.000</td>
                                    <td>Sudah Diajukan Kepada Pihak Terkait</td>
                                </tr>
                                <tr>
                                    <td>Nillo</td>
                                    <td>Kucing</td>
                                    <td>Pondok Pengayom Satwa</td>
                                    <td>240.000</td>
                                    <td>
                                        <div>Pembayaran Ditolak, Harap Lakukan Pembayaran Dengan Benar</div>
                                        <button class="ui button basic brown">Bayar Lagi</button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Toms</td>
                                    <td>Anjing</td>
                                    <td>Nawak Nawek</td>
                                    <td>0</td>
                                    <td>Sudah Diajukan Kepada Pihak Terkait</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui tab" data-tab="pengajuan-saya-diterima" style="padding:20px 20px 30px 20px">
                        <table class="ui striped stackable celled yellow table center aligned">
                            <thead>
                                <tr>
                                    <th class="two wide">Nama Hewan</th>
                                    <th class="two wide">Jenis Hewan</th>
                                    <th class="three wide">Pemilik Hewan</th>
                                    <th class="four wide">Status</th>
                                    <th class="five wide">Konfirmasi Pengambilan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Candie</td>
                                    <td>Hamster</td>
                                    <td>Rian</td>
                                    <td>Pengajuan Diterima, Silahkan Cek Email Anda</td>
                                    <td>
                                        <button class="ui positive basic button"
                                            onclick="$('.ui.tiny.modal.penggunaambil').modal('show')"><b>Selesai</b></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui tab" data-tab="pengajuan-pengadopsi" style="padding:20px 20px 30px 20px">
                        <table class="ui striped stackable sortable celled yellow table center aligned">
                            <thead>
                                <tr>
                                    <th>Nama Hewan</th>
                                    <th>Jenis Hewan</th>
                                    <th>Pihak Pengadopsi</th>
                                    <th>Lokasi</th>
                                    <th>Konfirmasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Boo</td>
                                    <td>Kucing</td>
                                    <td>
                                        <div>Dani</div>
                                        <div>danikur@gmail.com</div>
                                    </td>
                                    <td>Malang</td>
                                    <td>
                                        <div class="terima">
                                            <button class="ui positive basic button"
                                                onclick="$('.ui.tiny.modal.pengadopsi').modal('show')"><b>Terima</b></button>
                                        </div>
                                        <div class="kontak hidebutton">
                                            <button class="ui brown basic button"><b>Sudah Kirim Email</b></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Banie</td>
                                    <td>Kelinci</td>
                                    <td>
                                        <div>Nanta</div>
                                        <div>kusnanta@gmail.com</div>
                                    </td>
                                    <td>Jakarta</td>
                                    <td>
                                        <div class="terima">
                                            <button class="ui positive basic button"
                                                onclick="$('.ui.tiny.modal.pengadopsi').modal('show')"><b>Terima</b></button>
                                        </div>
                                        <div class="kontak hidebutton">
                                            <button class="ui brown basic button"><b>Sudah Kirim Email</b></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui tab" data-tab="konfirmasi-pengadopsi" style="padding:20px 20px 30px 20px">
                        <table class="ui striped stackable sortable celled yellow table center aligned">
                            <thead>
                                <tr>
                                    <th>Nama Hewan</th>
                                    <th>Jenis Hewan</th>
                                    <th>Pihak Pengadopsi</th>
                                    <th>Lokasi</th>
                                    <th>Konfirmasi Pengambilan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Boo</td>
                                    <td>Kucing</td>
                                    <td>
                                        <div>Dani</div>
                                        <div>danikur@gmail.com</div>
                                    </td>
                                    <td>Malang</td>
                                    <td>
                                        <button class="ui positive basic button"
                                            onclick="$('.ui.tiny.modal.pengadopsiambil').modal('show')"><b>Selesai</b></button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Banie</td>
                                    <td>Kelinci</td>
                                    <td>
                                        <div>Nanta</div>
                                        <div>kusnanta@gmail.com</div>
                                    </td>
                                    <td>Jakarta</td>
                                    <td>
                                        <button class="ui positive basic button"
                                            onclick="$('.ui.tiny.modal.pengadopsiambil').modal('show')"><b>Selesai</b></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div style="margin-top:30px;padding:20px 40px 20px 40px;border-radius:5px;background-color:#F7EFD2">
                    <div class="ui grid">
                        <div class="one wide column middle aligned">
                            <i class="info circle big brown icon"></i>
                        </div>
                        <div class="fifteen wide column" style="font-size:16px;line-height:1.5">
                            Untuk keamanan dan kenyamanan dalam proses pengambilan hewan dari pengguna lain, diharapkan
                            melakukan pertemuan selain pada malam hari dan juga pilih tempat yang ramai.
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui tab" data-tab="relawan">
                <div
                    style="font-size:32px;color:white;text-align:center;background-color:#cd8b62;border-top-left-radius:5px;border-top-right-radius:5px;padding:20px">
                    <b style="line-height:1.5">Pengajuan Relawan</b>
                </div>
                <div
                    style="margin-top:20px;background-color:#f7efd2;border:5px solid #ebc589;border-radius:5px;padding:30px 20px 35px 20px;color:#4d4d4d">
                    <div style="font-size:21px"><b>Berikut informasi mengenai status pengajuan anda sebagai relawan</b>
                    </div>
                    <table class="ui striped stackable sortable celled yellow table center aligned"
                        style="margin-top:15px">
                        <thead>
                            <tr>
                                <th>Posisi Relawan</th>
                                <th>Penampungan Hewan</th>
                                <th>Lokasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Perawat Kucing</td>
                                <td>Nawak Nawek</td>
                                <td>Malang</td>
                                <td>Sudah Diajukan Kepada Pihak Penampungan</td>
                            </tr>
                            <tr>
                                <td>Perawat Anjing</td>
                                <td>Garda Satwa Indonesia</td>
                                <td>Jakarta</td>
                                <td>Pengajuan Ditolak, Jangan Patah Semangat #ParaPecintaHewan!</td>
                            </tr>
                            <tr>
                                <td>Perawat Kelinci</td>
                                <td>Kelompok Pet Animal</td>
                                <td>Malang</td>
                                <td>Pengajuan Diterima, Silahkan Cek Email Anda</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="ui tab" data-tab="donasi">
                <div
                    style="font-size:32px;color:white;text-align:center;background-color:#cd8b62;border-top-left-radius:5px;border-top-right-radius:5px;padding:20px">
                    <b style="line-height:1.5">Riwayat Donasi</b>
                </div>
                <div
                    style="margin-top:20px;background-color:#f7efd2;border:5px solid #ebc589;border-radius:5px;padding:30px 20px 35px 20px;color:#4d4d4d">
                    <div style="font-size:22px;margin-bottom:10px"><b>Total Donasi Yang Anda Berikan</b></div>
                    <div class="ui grid stackable" style="margin-left:25px;margin-right:25px">
                        <div class="two wide column center aligned">
                            <i class="money bill alternate outline huge green icon"></i>
                        </div>
                        <div class="fourteen wide column middle aligned">
                            <div style="display:flex;flex-direction:row">
                                <div style="font-size:28px"><b>Rp</b></div>
                                <div style="font-size:28px;margin-left:10px"><b>750.000</b></div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top:20px;font-size:19px;font-weight:500">Berikut riwayat donasi yang anda berikan
                        :</div>
                    <table class="ui striped stackable sortable celled yellow table center aligned"
                        style="margin-top:15px">
                        <thead>
                            <tr>
                                <th>Penampungan Hewan</th>
                                <th>Lokasi</th>
                                <th>Nominal Donasi (Rp)</th>
                                <th>Tanggal Donasi</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Nawak Nawek</td>
                                <td>Malang</td>
                                <td>250.000</td>
                                <td>31 Mar 2019 08:22</td>
                                <td>Menunggu Pembayaran</td>
                            </tr>
                            <tr>
                                <td>Garda Satwa Indonesia</td>
                                <td>Jakarta</td>
                                <td>500.000</td>
                                <td>28 Mar 2019 12:07</td>
                                <td>Berhasil</td>
                            </tr>
                            <tr>
                                <td>Bandung Dog Guardian</td>
                                <td>Bandung</td>
                                <td>200.000</td>
                                <td>27 Mar 2019 16:51</td>
                                <td>
                                    <div>Pembayaran Ditolak, Harap Lakukan Pembayaran Dengan Benar</div>
                                    <button class="ui button basic brown">Bayar Lagi</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Kelompok Pet Animal</td>
                                <td>Malang</td>
                                <td>150.000</td>
                                <td>25 Mar 2019 08:46</td>
                                <td>Berhasil</td>
                            </tr>
                            <tr>
                                <td>Kelompok Pet Animal</td>
                                <td>Malang</td>
                                <td>200.000</td>
                                <td>23 Mar 2019 15:11</td>
                                <td>Dibatalkan</td>
                            </tr>
                            <tr>
                                <td>Rumah Kucing Bandung</td>
                                <td>Bandung</td>
                                <td>100.000</td>
                                <td>21 Mar 2019 20:31</td>
                                <td>Berhasil</td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
            <div class="ui tab" data-tab="saldo">
                <div
                    style="font-size:32px;color:white;text-align:center;background-color:#cd8b62;border-top-left-radius:5px;border-top-right-radius:5px;padding:20px">
                    <b style="line-height:1.5">Informasi Dana</b>
                </div>
                <div
                    style="margin-top:20px;background-color:#f7efd2;border:5px solid #ebc589;border-radius:5px;color:#4d4d4d">
                    <div class="ui borderless inverted huge stackable menu"
                        style="background-color:#ebc589;border-radius:0px">
                        <a class="active item" data-tab="riwayat-saldo" style="font-size:17px;color:white"><b>Riwayat
                        Dana</b></a>
                        <a class="item" data-tab="penarikan-saldo" style="font-size:17px;color:white"><b>Penarikan
                        Dana</b></a>
                    </div>
                    <div class="ui active tab" data-tab="riwayat-saldo" style="padding:20px 20px 30px 20px">
                        <div style="font-size:22px;margin-bottom:10px"><b>Dana Anda Saat Ini</b></div>
                        <div class="ui grid stackable" style="margin-left:25px;margin-right:25px">
                            <div class="two wide column center aligned">
                                <i class="money bill alternate outline huge green icon"></i>
                            </div>
                            <div class="fourteen wide column middle aligned">
                                <div style="display:flex;flex-direction:row">
                                    <div style="font-size:28px"><b>Rp</b></div>
                                    <div style="font-size:28px;margin-left:10px"><b>400.000</b></div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:20px;font-size:19px;font-weight:500">Berikut riwayat dana anda :</div>
                        <table class="ui striped stackable sortable celled yellow table center aligned">
                            <thead>
                                <tr>
                                    <th>Waktu</th>
                                    <th>Nominal Dana (Rp)</th>
                                    <th>Deskripsi</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>21 Mar 2019 20:31</td>
                                    <td>100.000</td>
                                    <td>Pembayaran Adopsi</td>
                                    <td>Berhasil</td>
                                </tr>
                                <tr>
                                    <td>21 Mar 2019 20:31</td>
                                    <td>100.000</td>
                                    <td>Pembayaran Adopsi</td>
                                    <td>Berhasil</td>
                                </tr>
                                <tr>
                                    <td>21 Mar 2019 20:31</td>
                                    <td>100.000</td>
                                    <td>Pembayaran Adopsi</td>
                                    <td>Berhasil</td>
                                </tr>
                                <tr>
                                    <td>21 Mar 2019 20:31</td>
                                    <td>100.000</td>
                                    <td>Pembayaran Adopsi</td>
                                    <td>Berhasil</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui tab" data-tab="penarikan-saldo" style="padding:25px 50px 40px 50px">
                        <form class="ui form" method="post">
                            <div class="field">
                                <label style="font-size:18px">Nama Bank Tujuan</label>
                                <div class="ui selection dropdown">
                                    <input type="hidden" name="jeniskelaminhewan">
                                    <i class="dropdown icon"></i>
                                    <div class="default text">Pilih Bank</div>
                                    <div class="menu">
                                        <div class="item">BCA</div>
                                        <div class="item">BRI</div>
                                        <div class="item">BNI</div>
                                        <div class="item">CIMB</div>
                                        <div class="item">Mandiri</div>
                                    </div>
                                </div>
                            </div>
                            <div class="field">
                                <label style="font-size:18px">Nama Pemilik Rekening</label>
                                <div class="ui right labeled fluid input">
                                    <input type="text" name="umurhewan" placeholder="Masukkan Nama Pemilik Rekening">
                                </div>
                            </div>
                            <div class="field">
                                <label style="font-size:18px">Nomor Rekening</label>
                                <input type="text" name="warnahewan" placeholder="Masukkan Nomor Rekening">
                            </div>
                            <div class="field">
                                <label style="font-size:18px">Jumlah Penarikan Dana</label>
                                <div class="ui labeled fluid input">
                                    <label class="ui label" style="background-color:#cd8b62;color:white">Rp</label>
                                    <input type="number" name="biayaadopsi" placeholder="Masukan Nominal Penarikan">
                                </div>
                            </div>
                        </form>
                        <div class="ui container fluid" style="text-align:right">
                            <button class="ui large button brown" style="margin-top:20px"
                                onclick="$('.ui.tiny.modal.penarikan').modal('show')">Cairkan</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- Dimmer Pengajuan Pengadopsi -->
<div class="ui tiny modal pengadopsi">
    <div class="header">
        Pengajuan Anda Terima
    </div>
    <div class="content">
        <p style="font-size:17px;line-height:1.5">
            Hai #ParaPecintaHewan! Selamat hewan anda telah menemukan pengadopsi baru. Silahkan hubungi pengadopsi
            baru tersebut melalui email, dan jika sudah klik tombol "Sudah Kirim Email"
        </p>
    </div>
    <div class="actions">
        <button class="ui positive button">
            Oke
        </button>
    </div>
</div>

<!-- Dimmer Pengguna Sudah Ambil Hewan -->
<div class="ui tiny modal penggunaambil">
    <div class="header">
        Selesai
    </div>
    <div class="content">
        <p style="font-size:17px;line-height:1.5">
            Hai #ParaPecintaHewan! Terimakasih sudah mengadopsi hewan melalui HelpPet
        </p>
    </div>
    <div class="actions">
        <button class="ui positive button">
            Oke
        </button>
    </div>
</div>

<!-- Dimmer Pengadopsi Sudah Ambil Hewan -->
<div class="ui tiny modal pengadopsiambil">
    <div class="header">
        Selesai
    </div>
    <div class="content">
        <p style="font-size:17px;line-height:1.5">
            Hai #ParaPecintaHewan! Selamat telah menemukan pengadopsi baru untuk hewan kesayangan anda
        </p>
    </div>
    <div class="actions">
        <button class="ui positive button">
            Oke
        </button>
    </div>
</div>

<!-- Dimmer Penarikan Saldo Berhasil -->
<div class="ui tiny modal penarikan">
    <div class="header">
        Sedang Diproses
    </div>
    <div class="content">
        <p style="font-size:18px;line-height:1.5">
            Permintaan penarikan dana berhasil, dana akan diproses dalam waktu <b>1x24 jam hari kerja bank</b> (tidak
            termasuk hari
            Sabtu/Minggu/Libur). Anda akan menerima email konfirmasi ketika dana sudah kami transfer.
        </p>
    </div>
    <div class="actions">
        <button class="ui positive button">
            Oke
        </button>
    </div>
</div>

<?php
// Load nav
$this->load->view('footer');
?>
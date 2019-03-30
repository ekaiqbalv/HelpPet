<?php
// Load nav
$this->load->view('navigasiloginuser');
?>

<div class="ui container" style="margin-top:86px;margin-bottom:86px">
    <div class="ui stackable grid" >
        <div class="four wide column">
            <div
                style="min-width:280px;border:3px solid #ebc589;border-radius:5px;background-color:#f7efd2;padding:40px 30px 30px 30px">
                <img class="ui circular centered image" src="assets/image/catadopt.jpg"
                    style="width:150px;height:150px;object-fit:cover;border:5px solid #ebc589;padding:3px">
                <?php foreach ($user as $u ) {?>
                <div
                    style="text-align:center;line-height:1.5;font-size:22px;margin-top:20px;margin-bottom:20px;color:#4d4d4d">
                    <b><?php echo $u->username?></b>
                </div>
                <?php }?>
                <div class="ui divider" style="margin-top:10px;margin-bottom:20px"></div>
                <div class="ui secondary vertical pointing fluid menu" style="color:#4d4d4d;font-size:17px">
                    <a class="active item" data-tab="profil">
                        Profil
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
                    <?php foreach($user as $u) { ?>
                        <label style="font-size:22px"><b>Nama Lengkap</b></label>
                        <div style="font-size:18px;margin-top:10px"><?php echo $u->username?></div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Alamat Email</b></label>
                        <div style="font-size:18px;margin-top:10px"><?php echo $u->email?></div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Nomor Telepon</b></label>
                        <div style="font-size:18px;margin-top:10px"><?php echo $u->telp?></div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Alamat Tempat Tinggal</b></label>
                        <div style="font-size:18px;margin-top:10px"><?php echo $u->alamat?></div>
                    </div>
                    <?php  }?>
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
                        <a class="item" data-tab="konfirmasi-pengadopsi" style="font-size:17px;color:white"><b>Konfirmasi Pengadopsi</b></a>
                    </div>
                    <div class="ui active tab" data-tab="pengajuan-saya" style="padding:20px 20px 30px 20px">
                        <table class="ui striped stackable sortable celled yellow table center aligned">
                            <thead>
                                <tr>
                                    <th>Nama Hewan</th>
                                    <th>Jenis Hewan</th>
                                    <th>Pemilik Hewan</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Buster</td>
                                    <td>Kelinci</td>
                                    <td>Albar</td>
                                    <td>Menunggu Pembayaran</td>
                                </tr>
                                <tr>
                                    <td>Yuki</td>
                                    <td>Kucing</td>
                                    <td>Kelompok Pet Animal</td>
                                    <td>Pembayaran Tekonfirmasi</td>
                                </tr>
                                <tr>
                                    <td>Ferguso</td>
                                    <td>Anjing</td>
                                    <td>Garda Satwa Indonesia</td>
                                    <td>Sudah Diajukan Kepada Pihak Terkait</td>
                                </tr>
                                <tr>
                                    <td>Toms</td>
                                    <td>Anjing</td>
                                    <td>Nawak Nawek</td>
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
                                        <button class="ui positive basic button"><b>Selesai</b></button>
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
                                        <button class="ui positive basic button"><b>Terima</b></button>
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
                                        <button class="ui positive basic button"><b>Terima</b></button>
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
                                        <button class="ui positive basic button"><b>Selesai</b></button>
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
                                        <button class="ui positive basic button"><b>Selesai</b></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
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
                    <div style="font-size:21px"><b>Berikut informasi mengenai status pengajuan anda sebagai relawan,</b></div>
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
                    <div>Berikut riwayat donasi yang anda berikan :</div>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Load nav
$this->load->view('footer');
?>
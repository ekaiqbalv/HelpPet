<?php
// Load nav
$this->load->view('navigasiloginuser');
?>

<div class="ui container" style="margin-top:86px;margin-bottom:86px">
    <div class="ui stackable grid">
        <div class="four wide column">
            <div
                style="min-width:280px;border:3px solid #ebc589;border-radius:5px;background-color:#f7efd2;padding:40px 30px 30px 30px">
                <img class="ui circular centered image" src="assets/image/admin.png"
                    style="width:150px;height:150px;object-fit:cover;border:5px solid #ebc589;padding:3px">
                <div
                    style="text-align:center;line-height:1.5;font-size:22px;margin-top:20px;margin-bottom:20px;color:#4d4d4d">
                    <b>Admin</b>
                </div>
                <div class="ui divider" style="margin-top:10px;margin-bottom:20px"></div>
                <div class="ui secondary vertical pointing fluid menu" style="color:#4d4d4d;font-size:17px">
                    <a class="active item" data-tab="profil">
                        Profil
                    </a>
                    <a class="item" data-tab="penampungan">
                        Penampungan Hewan
                    </a>
                    <a class="item" data-tab="pembayaran">
                        Konfirmasi Pembayaran
                    </a>
                    <a class="item" data-tab="penarikan">
                        Konfirmasi Penarikan Saldo
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
                        <div style="font-size:18px;margin-top:10px">Admin</div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Alamat Email</b></label>
                        <div style="font-size:18px;margin-top:10px">admin@helppet.com</div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Nomor Telepon</b></label>
                        <div style="font-size:18px;margin-top:10px">02125501888</div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Alamat</b></label>
                        <div style="font-size:18px;margin-top:10px">One Pacific Place Jl. Jend Sudirman Kav. 52-53
                            Jakarta Selatan, Jakarta</div>
                    </div>
                </div>
            </div>
            <div class="ui tab" data-tab="penampungan">
                <div
                    style="font-size:32px;color:white;text-align:center;background-color:#cd8b62;border-top-left-radius:5px;border-top-right-radius:5px;padding:20px">
                    <b style="line-height:1.5">Daftar Penampungan Hewan</b>
                </div>
                <div
                    style="margin-top:20px;background-color:#f7efd2;border:5px solid #ebc589;border-radius:5px;color:#4d4d4d">
                    <div class="ui borderless inverted huge stackable menu"
                        style="background-color:#ebc589;border-radius:0px">
                        <a class="active item" data-tab="pendaftaran" style="font-size:17px;color:white"><b>Konfirmasi
                                Pendaftaran</b></a>
                        <a class="item" data-tab="hidupkan-fitur" style="font-size:17px;color:white"><b>Hidupkan Fitur
                                Donasi</b></a>
                        <a class="item" data-tab="matikan-fitur" style="font-size:17px;color:white"><b>Matikan
                                Fitur Donasi</b></a>
                        <a class="item" data-tab="laporan-donasi" style="font-size:17px;color:white"><b>Laporan
                                Donasi</b></a>
                    </div>
                    <div class="ui active tab" data-tab="pendaftaran" style="padding:20px 20px 30px 20px">
                        <table class="ui striped stackable sortable celled yellow table center aligned">
                            <thead>
                                <tr>
                                    <th class="two wide">Penampungan Hewan</th>
                                    <th class="four wide">Alamat</th>
                                    <th class="four wide">Kontak</th>
                                    <th class="six wide">Konfirmasi</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Jl. Abdul Majid Raya Nomor 18</td>
                                    <td>
                                        <div>02162056173</div>
                                        <div>pedulisatwa@gmail.com</div>
                                    </td>
                                    <td>
                                        <div class="ui internally celled grid">
                                            <div class="row">
                                                <div class="eight wide column">
                                                    <button class="ui button basic green">Terima</button>
                                                </div>
                                                <div class="eight wide column">
                                                    <button class="ui button basic red">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Jl. Abdul Majid Raya Nomor 18</td>
                                    <td>
                                        <div>02162056173</div>
                                        <div>pedulisatwa@gmail.com</div>
                                    </td>
                                    <td>
                                        <div class="ui internally celled grid">
                                            <div class="row">
                                                <div class="eight wide column">
                                                    <button class="ui button basic green">Terima</button>
                                                </div>
                                                <div class="eight wide column">
                                                    <button class="ui button basic red">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Jl. Abdul Majid Raya Nomor 18, Jakarta Selatan</td>
                                    <td>
                                        <div>02162056173</div>
                                        <div>pedulisatwa@gmail.com</div>
                                    </td>
                                    <td>
                                        <div class="ui internally celled grid">
                                            <div class="row">
                                                <div class="eight wide column">
                                                    <button class="ui button basic green">Terima</button>
                                                </div>
                                                <div class="eight wide column">
                                                    <button class="ui button basic red">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Jl. Abdul Majid Raya Nomor 18</td>
                                    <td>
                                        <div>02162056173</div>
                                        <div>pedulisatwa@gmail.com</div>
                                    </td>
                                    <td>
                                        <div class="ui internally celled grid">
                                            <div class="row">
                                                <div class="eight wide column">
                                                    <button class="ui button basic green">Terima</button>
                                                </div>
                                                <div class="eight wide column">
                                                    <button class="ui button basic red">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui tab" data-tab="hidupkan-fitur" style="padding:20px 20px 30px 20px">
                        <table class="ui striped stackable celled yellow table center aligned">
                            <thead>
                                <tr>
                                    <th>Penampungan Hewan</th>
                                    <th>Alamat</th>
                                    <th>Kontak</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Jl. Abdul Majid Raya Nomor 18</td>
                                    <td>
                                        <div>02162056173</div>
                                        <div>pedulisatwa@gmail.com</div>
                                    </td>
                                    <td>
                                        <button class="ui positive basic button"
                                            onclick="$('.ui.tiny.modal.penggunaambil').modal('show')"><b>Hidupkan</b></button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui tab" data-tab="matikan-fitur" style="padding:20px 20px 30px 20px">
                        <table class="ui striped stackable sortable celled yellow table center aligned">
                            <thead>
                                <tr>
                                    <th>Penampungan Hewan</th>
                                    <th>Alamat</th>
                                    <th>Kontak</th>
                                    <th>Tindakan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Jl. Abdul Majid Raya Nomor 18</td>
                                    <td>
                                        <div>02162056173</div>
                                        <div>pedulisatwa@gmail.com</div>
                                    </td>
                                    <td>
                                        <button class="ui positive basic button"
                                            onclick="$('.ui.tiny.modal.penggunaambil').modal('show')"><b>Matikan</b>
                                        </button>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Jl. Abdul Majid Raya Nomor 18</td>
                                    <td>
                                        <div>02162056173</div>
                                        <div>pedulisatwa@gmail.com</div>
                                    </td>
                                    <td>
                                        <button class="ui positive basic button"
                                            onclick="$('.ui.tiny.modal.penggunaambil').modal('show')"><b>Matikan</b>
                                        </button>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui tab" data-tab="laporan-donasi" style="padding:20px 20px 30px 20px">
                        <table class="ui striped stackable sortable celled yellow table center aligned">
                            <div style="font-size:16px"><b>Daftar penampungan hewan yang sudah memberikan laporan
                                    ataupun belum memberikan</b></div>
                            <thead>
                                <tr>
                                    <th>Penampungan Hewan</th>
                                    <th>Alamat</th>
                                    <th>Kontak</th>
                                    <th>Status</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Jl. Abdul Majid Raya Nomor 18</td>
                                    <td>
                                        <div>02162056173</div>
                                        <div>pedulisatwa@gmail.com</div>
                                    </td>
                                    <td>Sudah Memberikan Donasi</td>
                                </tr>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Jl. Abdul Majid Raya Nomor 18</td>
                                    <td>
                                        <div>02162056173</div>
                                        <div>pedulisatwa@gmail.com</div>
                                    </td>
                                    <td>Belum Memberikan Donasi</td>
                                </tr>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Jl. Abdul Majid Raya Nomor 18</td>
                                    <td>
                                        <div>02162056173</div>
                                        <div>pedulisatwa@gmail.com</div>
                                    </td>
                                    <td>Sudah Memberikan Donasi</td>
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
                            Matikan fitur donasi jika pihak penampungan belum memberikan laporan penggunaan dana donasi
                            atau terdapat kecurigaan dalam laporan donasi yang diberikannya. Dan hidupkan kembali jika
                            pihak penampungan sudah memberikan laporan tersbut dan melakukan konfirmasi.
                        </div>
                    </div>
                </div>
            </div>
            <div class="ui tab" data-tab="pembayaran">
                <div
                    style="font-size:32px;color:white;text-align:center;background-color:#cd8b62;border-top-left-radius:5px;border-top-right-radius:5px;padding:20px">
                    <b style="line-height:1.5">Konfirmasi Pembayaran</b>
                </div>
                <div
                    style="margin-top:20px;background-color:#f7efd2;border:5px solid #ebc589;border-radius:5px;color:#4d4d4d">
                    <div class="ui borderless inverted huge stackable menu"
                        style="background-color:#ebc589;border-radius:0px">
                        <a class="active item" data-tab="adopsi" style="font-size:17px;color:white"><b>Pembayaran
                                Adopsi</b></a>
                        <a class="item" data-tab="donasi" style="font-size:17px;color:white"><b>Pembayaran
                                Donasi</b></a>
                    </div>
                    <div class="ui active tab" data-tab="adopsi" style="padding:20px 20px 30px 20px">
                        <table class="ui striped stackable sortable celled yellow table center aligned">
                            <thead>
                                <tr>
                                    <th class="three wide">Penampungan Hewan</th>
                                    <th class="four wide">Pihak Pengadopsi</th>
                                    <th class="three wide">Biaya Adopsi (Rp)</th>
                                    <th class="six wide">Konfirmasi Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Eka Iqbal Virgiawan</td>
                                    <td>270.000</td>
                                    <td>
                                        <div class="ui internally celled grid">
                                            <div class="row">
                                                <div class="eight wide column">
                                                    <button class="ui button basic green">Terima</button>
                                                </div>
                                                <div class="eight wide column">
                                                    <button class="ui button basic red">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Eka Iqbal Virgiawan</td>
                                    <td>400.000</td>
                                    <td>
                                        <div class="ui internally celled grid">
                                            <div class="row">
                                                <div class="eight wide column">
                                                    <button class="ui button basic green">Terima</button>
                                                </div>
                                                <div class="eight wide column">
                                                    <button class="ui button basic red">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Eka Iqbal Virgiawan</td>
                                    <td>250.000</td>
                                    <td>
                                        <div class="ui internally celled grid">
                                            <div class="row">
                                                <div class="eight wide column">
                                                    <button class="ui button basic green">Terima</button>
                                                </div>
                                                <div class="eight wide column">
                                                    <button class="ui button basic red">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Eka Iqbal Virgiawan</td>
                                    <td>600.000</td>
                                    <td>
                                        <div class="ui internally celled grid">
                                            <div class="row">
                                                <div class="eight wide column">
                                                    <button class="ui button basic green">Terima</button>
                                                </div>
                                                <div class="eight wide column">
                                                    <button class="ui button basic red">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui tab" data-tab="donasi" style="padding:20px 20px 30px 20px">
                        <table class="ui striped stackable celled yellow table center aligned">
                            <thead>
                                <tr>
                                    <th class="three wide">Penampungan Hewan</th>
                                    <th class="four wide">Pemberi Donasi</th>
                                    <th class="three wide">Jumlah Donasi (Rp)</th>
                                    <th class="six wide">Konfirmasi Pembayaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Eka Iqbal Virgiawan</td>
                                    <td>100.000</td>
                                    <td>
                                        <div class="ui internally celled grid">
                                            <div class="row">
                                                <div class="eight wide column">
                                                    <button class="ui button basic green">Terima</button>
                                                </div>
                                                <div class="eight wide column">
                                                    <button class="ui button basic red">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Eka Iqbal Virgiawan</td>
                                    <td>100.000</td>
                                    <td>
                                        <div class="ui internally celled grid">
                                            <div class="row">
                                                <div class="eight wide column">
                                                    <button class="ui button basic green">Terima</button>
                                                </div>
                                                <div class="eight wide column">
                                                    <button class="ui button basic red">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Eka Iqbal Virgiawan</td>
                                    <td>100.000</td>
                                    <td>
                                        <div class="ui internally celled grid">
                                            <div class="row">
                                                <div class="eight wide column">
                                                    <button class="ui button basic green">Terima</button>
                                                </div>
                                                <div class="eight wide column">
                                                    <button class="ui button basic red">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Peduli Satwa</td>
                                    <td>Eka Iqbal Virgiawan</td>
                                    <td>100.000</td>
                                    <td>
                                        <div class="ui internally celled grid">
                                            <div class="row">
                                                <div class="eight wide column">
                                                    <button class="ui button basic green">Terima</button>
                                                </div>
                                                <div class="eight wide column">
                                                    <button class="ui button basic red">Tolak</button>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="ui tab" data-tab="penarikan">
                <div
                    style="font-size:32px;color:white;text-align:center;background-color:#cd8b62;border-top-left-radius:5px;border-top-right-radius:5px;padding:20px">
                    <b style="line-height:1.5">Daftar Permintaan Penarikan Saldo</b>
                </div>
                <div
                    style="margin-top:20px;background-color:#f7efd2;border:5px solid #ebc589;border-radius:5px;padding:30px 20px 35px 20px;color:#4d4d4d">
                    <table class="ui striped stackable sortable celled yellow table center aligned"
                        style="margin-top:15px">
                        <thead>
                            <tr>
                                <th>Nama Pengguna</th>
                                <th>Nama Bank</th>
                                <th>Rekening</th>
                                <th>Nominal (Rp)</th>
                                <th>Konfirmasi</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>Eka Iqbal Virgiawan</td>
                                <td>BCA</td>
                                <td>
                                    <div>123456789101</div>
                                    <div>Eka Iqbal Virgiawan</div>
                                </td>
                                <td>700.000</td>
                                <td>
                                    <button class="ui button basic green">Sudah Dikirim</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Rian</td>
                                <td>Mandiri</td>
                                <td>
                                    <div>246810135791</div>
                                    <div>Rian</div>
                                </td>
                                <td>300.000</td>
                                <td>
                                    <button class="ui button basic green">Sudah Dikirim</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Albar</td>
                                <td>BNI</td>
                                <td>
                                    <div>135792468101</div>
                                    <div>Albar</div>
                                </td>
                                <td>250.000</td>
                                <td>
                                    <button class="ui button basic green">Sudah Dikirim</button>
                                </td>
                            </tr>
                            <tr>
                                <td>Nanta</td>
                                <td>BRI</td>
                                <td>
                                    <div>101987654321</div>
                                    <div>Nanta</div>
                                </td>
                                <td>200.000</td>
                                <td>
                                    <button class="ui button basic green">Sudah Dikirim</button>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>

<?php
// Load nav
$this->load->view('footer');
?>
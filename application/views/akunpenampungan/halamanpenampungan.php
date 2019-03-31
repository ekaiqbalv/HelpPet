<?php
// Load nav
$this->load->view('navigasiloginuser');
?>

<div class="ui container" style="margin-top:86px;margin-bottom:86px">
    <div class="ui stackable grid">
        <div class="four wide column">
            <div
                style="min-width:280px;border:3px solid #ebc589;border-radius:5px;background-color:#f7efd2;padding:40px 30px 30px 30px">
                <img class="ui circular centered image" src="assets/image/profilpenampungan.jpg"
                    style="width:150px;height:150px;object-fit:cover;border:5px solid #ebc589;padding:3px">
                <div
                    style="text-align:center;line-height:1.5;font-size:22px;margin-top:20px;margin-bottom:20px;color:#4d4d4d">
                    <b>Kelompok Pet Animal</b>
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
                        Pengajuan Adopsi
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
                        <label style="font-size:22px"><b>Nama Penampungan Hewan</b></label>
                        <div style="font-size:18px;margin-top:10px">Kelompok Pet Animal</div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Alamat Email</b></label>
                        <div style="font-size:18px;margin-top:10px">kepeta@gmail.com</div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Nomor Telepon</b></label>
                        <div style="font-size:18px;margin-top:10px">0822654321</div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Alamat</b></label>
                        <div style="font-size:18px;margin-top:10px">Jalan Veteran, Kel. Ketawanggede, Kec. Lowokwaru,
                            Kota Malang</div>
                    </div>
                    <div style="margin-top:30px">
                        <label style="font-size:22px"><b>Domisili</b></label>
                        <div style="font-size:18px;margin-top:10px">Malang</div>
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
                    <div class="ui stackable three doubling special centered cards" style="margin-top:10px">
                        <div class="card">
                            <div class="blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button">Ubah Postingan</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/image/foto1.jpg" style="object-fit:cover;height:150px">
                            </div>
                            <div class="content">
                                <div class="header">Yuki</div>
                                <div class="meta">
                                    <a>Kucing</a>
                                </div>
                                <div class="description">
                                    Yuki sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda
                                    dengan tingkahnya
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
                        <div class="card">
                            <div class="blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button">Ubah Postingan</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/image/penampungan2.jpg" style="object-fit:cover;height:150px">
                            </div>
                            <div class="content">
                                <div class="header">Tom</div>
                                <div class="meta">
                                    <a>Kucing</a>
                                </div>
                                <div class="description">
                                    Tom sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda
                                    dengan tingkahnya
                                    yang lucunya. Tom memiliki bulu warna coklat
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
                            <div class="blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button">Ubah Postingan</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/image/penampungan3.jpg" style="object-fit:cover;height:150px">
                            </div>
                            <div class="content">
                                <div class="header">Doo</div>
                                <div class="meta">
                                    <a>Anjing</a>
                                </div>
                                <div class="description">
                                    Doo sangat mengemaskan. Ia menjadi anjing yang selalu menemani hari - hari anda
                                    dengan tingkahnya
                                    yang lucunya. Doo memiliki bulu warna coklat
                                </div>
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
                                <img src="assets/image/penampungan4.jpg" style="object-fit:cover;height:150px">
                            </div>
                            <div class="content">
                                <div class="header">Banie</div>
                                <div class="meta">
                                    <a>Kelinci</a>
                                </div>
                                <div class="description">
                                    Banie sangat mengemaskan. Ia menjadi kelinci yang selalu menemani hari - hari anda
                                    dengan tingkahnya
                                    yang lucunya. Banie memiliki bulu warna coklat
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
                            <div class="blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button">Ubah Postingan</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/image/penampungan5.jpg" style="object-fit:cover;height:150px">
                            </div>
                            <div class="content">
                                <div class="header">Ici</div>
                                <div class="meta">
                                    <a>Hamster</a>
                                </div>
                                <div class="description">
                                    Ici sangat mengemaskan. Ia menjadi hamster yang selalu menemani hari - hari anda
                                    dengan tingkahnya
                                    yang lucunya. Ici memiliki bulu warna coklat
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
                            <div class="blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button">Ubah Postingan</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/image/penampungan6.jpg" style="object-fit:cover;height:150px">
                            </div>
                            <div class="content">
                                <div class="header">Weebs</div>
                                <div class="meta">
                                    <a>Anjing</a>
                                </div>
                                <div class="description">
                                    Weebs sangat mengemaskan. Ia menjadi anjing yang selalu menemani hari - hari anda
                                    dengan tingkahnya
                                    yang lucunya. Weebs memiliki bulu warna coklat
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
                            <div class="blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button">Ubah Postingan</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/image/penampungan7.jpg" style="object-fit:cover;height:150px">
                            </div>
                            <div class="content">
                                <div class="header">Oster</div>
                                <div class="meta">
                                    <a>Anjing</a>
                                </div>
                                <div class="description">
                                    Oster sangat mengemaskan. Ia menjadi anjing yang selalu menemani hari - hari anda
                                    dengan tingkahnya
                                    yang lucunya. Oster memiliki bulu warna coklat
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
                            <div class="blurring dimmable image">
                                <div class="ui dimmer">
                                    <div class="content">
                                        <div class="center">
                                            <div class="ui inverted button">Ubah Postingan</div>
                                        </div>
                                    </div>
                                </div>
                                <img src="assets/image/penampungan8.jpg" style="object-fit:cover;height:150px">
                            </div>
                            <div class="content">
                                <div class="header">Olala</div>
                                <div class="meta">
                                    <a>Kucing</a>
                                </div>
                                <div class="description">
                                    Olala sangat mengemaskan. Ia menjadi kucing yang selalu menemani hari - hari anda
                                    dengan tingkahnya
                                    yang lucunya. Olala memiliki bulu warna coklat
                                </div>
                            </div>
                            <div class="extra content">
                                <span>
                                    <i class="home icon"></i>
                                    Kelompok Pet Animal
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
                        <a class="active item" data-tab="pengajuan-pengadopsi"
                            style="font-size:17px;color:white"><b>Pengajuan
                                Pengadopsi</b></a>
                        <a class="item" data-tab="konfirmasi-pengadopsi"
                            style="font-size:17px;color:white"><b>Konfirmasi Pengadopsi</b></a>
                    </div>
                    <div class="ui active tab" data-tab="pengajuan-pengadopsi" style="padding:20px 20px 30px 20px">
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
                                    <td>Yuki</td>
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
                                    <td>Ici</td>
                                    <td>Hamster</td>
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
                                    <td>Olala</td>
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
                                    <td>Doo</td>
                                    <td>Anjing</td>
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
            </div>
            <div class="ui tab" data-tab="relawan">
                <div
                    style="font-size:32px;color:white;text-align:center;background-color:#cd8b62;border-top-left-radius:5px;border-top-right-radius:5px;padding:20px">
                    <b style="line-height:1.5">Informasi Relawan</b>
                </div>
                <div
                    style="margin-top:20px;background-color:#f7efd2;border:5px solid #ebc589;border-radius:5px;color:#4d4d4d">
                    <div class="ui borderless inverted huge stackable menu"
                        style="background-color:#ebc589;border-radius:0px">
                        <a class="active item" data-tab="postingan-relawan" style="font-size:17px;color:white">
                            <b>Postingan Relawan</b>
                        </a>
                        <a class="item" data-tab="pengajuan-relawan" style="font-size:17px;color:white">
                            <b>Pengajuan Relawan</b>
                        </a>
                    </div>
                    <div class="ui active tab" data-tab="postingan-relawan" style="padding:20px 20px 30px 20px">
                        <div class="ui stackable three doubling special centered cards">
                            <div class="card">
                                <div class="blurring dimmable image">
                                    <div class="ui dimmer">
                                        <div class="content">
                                            <div class="center">
                                                <div class="ui inverted button">Ubah Postingan</div>
                                            </div>
                                        </div>
                                    </div>
                                    <img src="assets/image/catadopt.jpg" style="object-fit:cover;height:250px">
                                </div>
                                <div class="content">
                                    <div class="header">Perawat Kucing</div>
                                    <div class="meta">
                                        <i class="home icon"></i>
                                        Kelompok Pet Animal
                                    </div>
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
                                    <img src="assets/image/foto2.jpg" style="object-fit:cover;height:250px">
                                </div>
                                <div class="content">
                                    <div class="header">Perawat Anjing</div>
                                    <div class="meta">
                                        <i class="home icon"></i>
                                        Kelompok Pet Animal
                                    </div>
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
                                    <img src="assets/image/foto3.jpg" style="object-fit:cover;height:250px">
                                </div>
                                <div class="content">
                                    <div class="header">Perawat Kelinci</div>
                                    <div class="meta">
                                        <i class="home icon"></i>
                                        Kelompok Pet Animal
                                    </div>
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
                                    <img src="assets/image/foto4.jpg" style="object-fit:cover;height:250px">
                                </div>
                                <div class="content">
                                    <div class="header">Perawat Hamster</div>
                                    <div class="meta">
                                        <i class="home icon"></i>
                                        Kelompok Pet Animal
                                    </div>
                                </div>
                            </div>
                            <div class="card">
                                <div class="blurring dimmable segments" style="height:100%;padding:80px 40px 80px 40px">
                                    <div class="ui dimmer">
                                        <div class="content">
                                            <div class="center">
                                                <a href="<?php echo base_url("postingrelawan");?>">
                                                    <button class="ui inverted button">Tambah Postingan</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="content center aligned">
                                        <div class="meta">
                                            <i class="icon huge plus"></i>
                                            <h1>Tambah Postingan</h1>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="ui tab" data-tab="pengajuan-relawan" style="padding:20px 20px 30px 20px">
                        <table class="ui striped stackable sortable celled yellow table center aligned">
                            <thead>
                                <tr>
                                    <th>Posisi Relawan</th>
                                    <th>Nama Pendaftar</th>
                                    <th>Kontak Pendaftar</th>
                                    <th>Konfirmasi Pendaftaran</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>Perawatan Kelinci</td>
                                    <td>Eka Iqbal Virgiawan</td>
                                    <td>
                                        <div>082212345678</div>
                                        <div>ekaiqbalvirgiawan@gmail.com</div>
                                    </td>
                                    <td>
                                        <div class="terima">
                                            <div class="ui internally celled grid">
                                                <div class="row">
                                                    <div class="eight wide column">
                                                        <button class="ui button basic green"
                                                            onclick="$('.ui.tiny.modal.relawan').modal('show')">Terima</button>
                                                    </div>
                                                    <div class="eight wide column">
                                                        <button class="ui button basic red">Tolak</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kontak hidebutton">
                                            <button class="ui brown basic button"><b>Sudah Kirim Email</b></button>
                                        </div>
                                    </td>
                                </tr>
                                <tr>
                                    <td>Perawatan Anjing</td>
                                    <td>Dani</td>
                                    <td>
                                        <div>082287654321</div>
                                        <div>danikur@gmail.com</div>
                                    </td>
                                    <td>
                                        <div class="terima">
                                            <div class="ui internally celled grid">
                                                <div class="row">
                                                    <div class="eight wide column">
                                                        <button class="ui button basic green"
                                                            onclick="$('.ui.tiny.modal.relawan').modal('show')">Terima</button>
                                                    </div>
                                                    <div class="eight wide column">
                                                        <button class="ui button basic red">Tolak</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="kontak hidebutton">
                                            <button class="ui brown basic button"><b>Sudah Kirim Email</b></button>
                                        </div>
                                    </td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="ui tab" data-tab="donasi">
                <div
                    style="font-size:32px;color:white;text-align:center;background-color:#cd8b62;border-top-left-radius:5px;border-top-right-radius:5px;padding:20px">
                    <b style="line-height:1.5">Informasi Donasi</b>
                </div>
                <div
                    style="margin-top:20px;background-color:#f7efd2;border:5px solid #ebc589;border-radius:5px;color:#4d4d4d">
                    <div class="ui borderless inverted huge stackable menu"
                        style="background-color:#ebc589;border-radius:0px">
                        <a class="active item" data-tab="riwayat-donasi" style="font-size:17px;color:white"><b>Riwayat
                                Donasi</b></a>
                        <a class="item" data-tab="laporan-donasi" style="font-size:17px;color:white"><b>Laporan
                                Donasi</b></a>
                    </div>
                    <div class="ui active tab" data-tab="riwayat-donasi" style="padding:20px 20px 30px 20px">
                        <div style="font-size:22px;margin-bottom:10px"><b>Total Donasi Yang Anda Dapatkan</b></div>
                        <div class="ui grid stackable" style="margin-left:25px;margin-right:25px">
                            <div class="two wide column center aligned">
                                <i class="money bill alternate outline huge green icon"></i>
                            </div>
                            <div class="fourteen wide column middle aligned">
                                <div style="display:flex;flex-direction:row">
                                    <div style="font-size:28px"><b>Rp</b></div>
                                    <div style="font-size:28px;margin-left:10px"><b>1.140.000</b></div>
                                </div>
                            </div>
                        </div>
                        <div style="margin-top:20px;font-size:19px;font-weight:500">Berikut riwayat donasi yang anda
                            dapatkan
                            :</div>
                        <table class="ui striped stackable sortable celled yellow table center aligned"
                            style="margin-top:15px">
                            <thead>
                                <tr>
                                    <th>Tanggal Donasi</th>
                                    <th>Nama Donatur</th>
                                    <th>Nominal Donasi (Rp)</th>
                                    <th>Biaya Admin (Rp)</th>
                                    <th>Donasi Bersih (Rp)</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>31 Mar 2019 08:22</td>
                                    <td>Eka Iqbal Virgiawan</td>
                                    <td>400.000</td>
                                    <td>20.000</td>
                                    <td>380.000</td>
                                </tr>
                                <tr>
                                    <td>29 Mar 2019 14:45</td>
                                    <td>Albar</td>
                                    <td>250.000</td>
                                    <td>12.500</td>
                                    <td>237.500</td>
                                </tr>
                                <tr>
                                    <td>28 Mar 2019 10:18</td>
                                    <td>Rian</td>
                                    <td>150.000</td>
                                    <td>7.500</td>
                                    <td>142.500</td>
                                </tr>
                                <tr>
                                    <td>26 Mar 2019 08:22</td>
                                    <td>Nanta</td>
                                    <td>300.000</td>
                                    <td>15.000</td>
                                    <td>285.000</td>
                                </tr>
                                <tr>
                                    <td>25 Mar 2019 06:44</td>
                                    <td>Dani</td>
                                    <td>100.000</td>
                                    <td>5.000</td>
                                    <td>95.000</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="ui tab" data-tab="laporan-donasi" style="padding:25px 50px 40px 50px">
                        <form class="ui form" method="post">
                            <!-- <div class="field">
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
                            </div> -->
                            <div class="field">
                                <label style="font-size:18px">Laporan Bulan</label>
                                <div class="ui right labeled fluid input">
                                    <input type="month" name="laporan" placeholder="Masukkan Bulan">
                                </div>
                            </div>
                            <!-- <div class="field"> -->
                            <div style="font-size:18px"><b>Pilih File Laporan Donasi</b></div>
                            <label for="file-upload" class="ui large brown label" style="cursor:pointer;margin-top:5px">
                                <i class="cloud upload icon"></i>
                                Pilih File
                            </label>
                            <input type="file" id="file-upload" onchange="previewFile()" style="display: none">
                            <div id="file-upload-filename"></div>
                            <!-- <input type="file" id="file-upload" multiple required />
                                <label for="file-upload">Upload file</label>
                                <div id="file-upload-filename"></div>
                                <label style="font-size:18px">Pilih File Laporan</label>
                                <input type="file" name="pilihfile" placeholder="Masukkan Nomor Rekening"> -->
                            <!-- </div> -->
                            <!-- <div class="field">
                                <label style="font-size:18px">Nomor Rekening</label>
                                <input type="text" name="warnahewan" placeholder="Masukkan Nomor Rekening">
                            </div>
                            <div class="field">
                                <label style="font-size:18px">Jumlah Penarikan Saldo</label>
                                <div class="ui labeled fluid input">
                                    <label class="ui label" style="background-color:#cd8b62;color:white">Rp</label>
                                    <input type="number" name="biayaadopsi" placeholder="Masukan Nominal Penarikan">
                                </div>
                            </div> -->
                        </form>
                        <div class="ui container fluid" style="text-align:right">
                            <button class="ui large button brown" style="margin-top:20px"
                                onclick="$('.ui.tiny.modal.penarikan').modal('show')">Unggah</button>
                        </div>
                    </div>
                </div>
                <!-- <div
                    style="margin-top:20px;background-color:#f7efd2;border:5px solid #ebc589;border-radius:5px;padding:30px 20px 35px 20px;color:#4d4d4d">
                    <div style="font-size:22px;margin-bottom:10px"><b>Total Donasi Yang Anda Dapatkan</b></div>
                    <div class="ui grid stackable" style="margin-left:25px;margin-right:25px">
                        <div class="two wide column center aligned">
                            <i class="money bill alternate outline huge green icon"></i>
                        </div>
                        <div class="fourteen wide column middle aligned">
                            <div style="display:flex;flex-direction:row">
                                <div style="font-size:28px"><b>Rp</b></div>
                                <div style="font-size:28px;margin-left:10px"><b>1.140.000</b></div>
                            </div>
                        </div>
                    </div>
                    <div style="margin-top:20px;font-size:19px;font-weight:500">Berikut riwayat donasi yang anda
                        dapatkan
                        :</div>
                    <table class="ui striped stackable sortable celled yellow table center aligned"
                        style="margin-top:15px">
                        <thead>
                            <tr>
                                <th>Tanggal Donasi</th>
                                <th>Nama Donatur</th>
                                <th>Nominal Donasi (Rp)</th>
                                <th>Biaya Admin (Rp)</th>
                                <th>Donasi Bersih (Rp)</th>
                            </tr>
                        </thead>
                        <tbody>
                            <tr>
                                <td>31 Mar 2019 08:22</td>
                                <td>Eka Iqbal Virgiawan</td>
                                <td>400.000</td>
                                <td>20.000</td>
                                <td>380.000</td>
                            </tr>
                            <tr>
                                <td>29 Mar 2019 14:45</td>
                                <td>Albar</td>
                                <td>250.000</td>
                                <td>12.500</td>
                                <td>237.500</td>
                            </tr>
                            <tr>
                                <td>28 Mar 2019 10:18</td>
                                <td>Rian</td>
                                <td>150.000</td>
                                <td>7.500</td>
                                <td>142.500</td>
                            </tr>
                            <tr>
                                <td>26 Mar 2019 08:22</td>
                                <td>Nanta</td>
                                <td>300.000</td>
                                <td>15.000</td>
                                <td>285.000</td>
                            </tr>
                            <tr>
                                <td>25 Mar 2019 06:44</td>
                                <td>Dani</td>
                                <td>100.000</td>
                                <td>5.000</td>
                                <td>95.000</td>
                            </tr>
                        </tbody>
                    </table>
                </div> -->
                <div style="margin-top:30px;padding:20px 40px 20px 40px;border-radius:5px;background-color:#F7EFD2">
                    <div class="ui grid">
                        <div class="one wide column middle aligned">
                            <i class="info circle big brown icon"></i>
                        </div>
                        <div class="fifteen wide column" style="font-size:15px;line-height:1.5">
                            HelpPet mengenakan biaya senilai 5% dari donasi yang terkumpul atas sarana dan layanan yang
                            kami berikan. Biaya ini kami gunakan untuk menutup biaya operasional serta melakukan
                            pengembangan platform HelpPet ini agar dapat memberikan pelayanan yang lebih maksimal, serta
                            kemudahan bagi para pecinta hewan dalam menggunakan fitur yang tersedia pada HelpPet seperti
                            Adopsi, Relawan, dan Donasi.
                        </div>
                    </div>
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
                                    <div style="font-size:28px;margin-left:10px"><b>1.540.000</b></div>
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
                                    <td>31 Mar 2019 08:22</td>
                                    <td>380.000</td>
                                    <td>Pembayaran Donasi</td>
                                    <td>Berhasil</td>
                                </tr>
                                <tr>
                                    <td>29 Mar 2019 14:45</td>
                                    <td>237.500</td>
                                    <td>Pembayaran Donasi</td>
                                    <td>Berhasil</td>
                                </tr>
                                <tr>
                                    <td>28 Mar 2019 16:31</td>
                                    <td>100.000</td>
                                    <td>Pembayaran Adopsi</td>
                                    <td>Berhasil</td>
                                </tr>
                                <tr>
                                    <td>28 Mar 2019 12:55</td>
                                    <td>100.000</td>
                                    <td>Pembayaran Adopsi</td>
                                    <td>Berhasil</td>
                                </tr>
                                <tr>
                                    <td>28 Mar 2019 10:18</td>
                                    <td>142.500</td>
                                    <td>Pembayaran Donasi</td>
                                    <td>Berhasil</td>
                                </tr>
                                <tr>
                                    <td>26 Mar 2019 08:22</td>
                                    <td>285.000</td>
                                    <td>Pembayaran Donasi</td>
                                    <td>Berhasil</td>
                                </tr>
                                <tr>
                                    <td>26 Mar 2019 07:31</td>
                                    <td>100.000</td>
                                    <td>Pembayaran Adopsi</td>
                                    <td>Berhasil</td>
                                </tr>
                                <tr>
                                    <td>25 Mar 2019 10:25</td>
                                    <td>100.000</td>
                                    <td>Pembayaran Adopsi</td>
                                    <td>Berhasil</td>
                                </tr>
                                <tr>
                                    <td>25 Mar 2019 06:44</td>
                                    <td>95.000</td>
                                    <td>Pembayaran Donasi</td>
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

<!-- Dimmer Post Relawan -->
<div class="ui tiny modal postrelawan">
    <div class="header">
        Pengajuan Anda Terima
    </div>
    <div class="content">
        <p style="font-size:17px;line-height:1.5">
            Hai #ParaPecintaHewan! Selamat telah menemukan relawan untuk hewan - hewan yang ada di penampungan anda.
            Silahkan hubungi relawan tersebut melalui email, dan jika sudah klik tombol "Sudah Kirim Email"
        </p>
    </div>
    <div class="actions">
        <button class="ui positive button">
            Oke
        </button>
    </div>
</div>

<!-- Dimmer Relawan -->
<div class="ui tiny modal relawan">
    <div class="header">
        Pengajuan Anda Terima
    </div>
    <div class="content">
        <p style="font-size:17px;line-height:1.5">
            Hai #ParaPecintaHewan! Selamat telah menemukan relawan untuk hewan - hewan yang ada di penampungan anda.
            Silahkan hubungi relawan tersebut melalui email, dan jika sudah klik tombol "Sudah Kirim Email"
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
// Load footer
$this->load->view('footer');
?>
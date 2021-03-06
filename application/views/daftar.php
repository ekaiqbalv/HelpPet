<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>HelpPet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Site Properties -->
    <link rel="icon" href="assets/image/favicon.ico" type="image/gif">
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">

    <link rel='stylesheet prefetch'
        href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css'>

    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <script>
    $(document)
        .ready(function() {
            $('.menu .item')
                .tab();
        });
    //Tampilkan gambar yang dipilih
    function previewImage(preview, unggah) {
        document.getElementById(preview).style.display = "block";
        var oFReader = new FileReader();
        oFReader.readAsDataURL(document.getElementById(unggah).files[0]);

        oFReader.onload = function(oFREvent) {
            document.getElementById(preview).src = oFREvent.target.result;
        };
    };
    </script>
    <script>
    $(document)
        .ready(function() {
            $('.ui.form')
                .form({
                    fields: {
                        email: {
                            identifier: 'email',
                            rules: [{
                                    type: 'empty',
                                    prompt: 'Alamat email tidak boleh kosong'
                                },
                                {
                                    type: 'email',
                                    prompt: 'Harap masukan email anda yang benar'
                                }
                            ]
                        },
                        emailPenampungan: {
                            identifier: 'emailPenampungan',
                            rules: [{
                                    type: 'empty',
                                    prompt: 'Alamat email tidak boleh kosong'
                                },
                                {
                                    type: 'email',
                                    prompt: 'Harap masukan email anda yang benar'
                                }
                            ]
                        },
                        password: {
                            identifier: 'katasandi',
                            rules: [{
                                    type: 'empty',
                                    prompt: 'Kata sandi tidak boleh kosong'
                                },
                                {
                                    type: 'length[6]',
                                    prompt: 'Kata sandi yang anda masukan minimal harus 6 karakter'
                                }
                            ]
                        },
                        passwordPenampungan: {
                            identifier: 'katasandiPenampungan',
                            rules: [{
                                    type: 'empty',
                                    prompt: 'Kata sandi tidak boleh kosong'
                                },
                                {
                                    type: 'length[6]',
                                    prompt: 'Kata sandi yang anda masukan minimal harus 6 karakter'
                                }
                            ]
                        }
                    }
                });
        });
    </script>
</head>

<body class="ui dimmable">
    <div class="ui container fluid" style="margin-top:25px;line-height:1.5">
        <div class="ui container center aligned">
            <a href="<?php echo base_url("");?>"><img class="ui small centered image"
                    src="assets/image/HELPPET-DARK.png" style="margin-bottom:30px"></a>
            <div class="ui two column stackable grid">
                <div class="row">
                    <div class="column" style="margin-top:120px">
                        <div class="ui three row stackable grid">
                            <div class="column" style="margin:10px">
                                <div class="row" style="font-size:28px">
                                    Halo #ParaPecintaHewan!
                                </div>
                                <div class="row" style="margin-bottom:10px;font-size:20px">
                                    Mari bergabung bersama HelpPet
                                </div>
                                <div class="row"><img src="assets/image/pet.png"
                                        class="ui rounded centered medium image">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="column" style="padding-right:60px">
                        <div class="ui container">
                            <div class="ui container">
                                <div style="margin-top:20px">
                                    <p style="font-size:28px">Daftar Akun</p>
                                </div>
                                <div class="ui pointing secondary menu">
                                    <a class="active item" data-tab="pengguna">Pengguna</a>
                                    <a class="item" data-tab="penampunganhewan">Penampungan Hewan</a>
                                </div>
                                <!-- Form untuk pendaftaran user -->
                                <div class="ui tab active" data-tab="pengguna">
                                    <form class="ui form" action="<?php echo base_url('Daftar/userBaru');?>"
                                        method="post" style="padding:5px 40px 5px 40px">
                                        <!-- Pesan error -->
                                        <div class="ui error message">
                                            <ul class="list">
                                                <li>Alamat email tidak boleh kosong</li>
                                                <li>Harap masukan email anda yang benar</li>
                                                <li>Kata sandi tidak boleh kosong</li>
                                                <li>Kata sandi yang anda masukan minimal harus 6 karakter</li>
                                            </ul>
                                        </div>
                                        <div class="ui segment" style="padding:30px">
                                            <!-- Upload Foto  Hewan JS -->
                                            <div class="ui container fluid">
                                                <div style="font-size:18px"><b>Foto Profil</b></div>
                                                <img class="ui small centered image" id="image-preview1"
                                                    style="margin-top:10px">
                                                <label for="unggah_gambar1" class="ui label"
                                                    style="cursor:pointer;margin-top:5px;margin-bottom:15px">
                                                    <i class="cloud upload icon"></i>
                                                    Pilih Foto
                                                </label>
                                                <input type="file" id="unggah_gambar1"
                                                    onchange="previewImage('image-preview1','unggah_gambar1')"
                                                    style="display: none">
                                            </div>
                                            <!-- Akhir Upload Foto  Hewan -->
                                            <div class="field" style="margin-top:8px">
                                                <div class="ui left icon input">
                                                    <i class="user icon"></i>
                                                    <input type="text" maxlength="20" name="nama" placeholder="Nama Lengkap">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="envelope icon"></i>
                                                    <input type="text" name="email" placeholder="Alamat Email">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="phone icon"></i>
                                                    <input type="text" name="nomortelp" placeholder="Nomor Telepon">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="home icon"></i>
                                                    <input type="text" name="alamat" placeholder="Alamat Tempat Tinggal">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="ui left icon input">
                                                    <i class="lock icon"></i>
                                                    <input type="password" name="katasandi" placeholder="Kata Sandi">
                                                </div>
                                            </div>
                                            <button class="ui fluid large button brown"
                                                style="margin-top:15px;margin-bottom:20px;background-color:#cd8b62">
                                                Daftar
                                            </button>
                                            <div style="font-size:15px">Sudah punya akun HelpPet?<a
                                                    href="<?php echo base_url("masuk");?>" style="color:brown">
                                                    Masuk</a>
                                            </div>
                                        </div>
                                    </form>
                                </div>

                                <!-- Form untuk pendaftaran penampungan hewan -->
                                <div class="ui tab" data-tab="penampunganhewan">
                                    <form class="ui form" action="<?php echo base_url('Daftar/userPenampungan');?>"
                                        method="post" style="padding:5px 40px 5px 40px">
                                        <!-- Pesan error -->
                                        <div class="ui error message">
                                            <ul class="list">
                                                <li>Alamat email tidak boleh kosong</li>
                                                <li>Harap masukan email anda yang benar</li>
                                                <li>Kata sandi tidak boleh kosong</li>
                                                <li>Kata sandi yang anda masukan minimal harus 6 karakter</li>
                                            </ul>
                                        </div>
                                        <div class="ui segment" style="padding:30px">
                                            <!-- Upload Foto Hewan JS-->
                                            <div class="ui container fluid">
                                                <div style="font-size:18px"><b>Foto Profil</b></div>
                                                <img class="ui small centered image" id="image-preview2"
                                                    style="margin-top:10px">
                                                <label for="unggah_gambar2" class="ui label"
                                                    style="cursor:pointer;margin-top:5px;margin-bottom:15px">
                                                    <i class="cloud upload icon"></i>
                                                    Pilih Foto
                                                </label>
                                                <input type="file" id="unggah_gambar2"
                                                    onchange="previewImage('image-preview2','unggah_gambar2')"
                                                    style="display: none">
                                            </div>
                                            <!-- Akhir Upload Foto  Hewan -->
                                            <div class="field" style="margin-top:8px">
                                                <div class="ui left icon input">
                                                    <i class="user icon"></i>
                                                    <input type="text" maxlength="20" name="namaPenampungan"
                                                        placeholder="Nama Penampungan">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="envelope icon"></i>
                                                    <input type="text" name="emailPenampungan"
                                                        placeholder="Alamat Email">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="phone icon"></i>
                                                    <input type="text" name="nomortelpPenampungan"
                                                        placeholder="Nomor Telepon">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="home icon"></i>
                                                    <input type="text" name="alamatPenampungan"
                                                        placeholder="Alamat Tempat Penampungan">
                                                </div>
                                            </div>
                                            <div class="field" style="margin-top:20px">
                                                <div class="ui left icon input">
                                                    <i class="map marker alternate icon"></i>
                                                    <input type="text" name="domisiliPenampungan"
                                                        placeholder="Domisili Tempat Penampungan">
                                                </div>
                                            </div>
                                            <div class="field">
                                                <div class="ui left icon input">
                                                    <i class="lock icon"></i>
                                                    <input type="password" name="katasandiPenampungan"
                                                        placeholder="Kata Sandi">
                                                </div>
                                            </div>
                                            <button class="ui fluid large button brown"
                                                style="margin-top:15px;margin-bottom:20px;background-color:#cd8b62">
                                                Daftar
                                            </button>
                                            <div style="font-size:15px">Sudah punya akun HelpPet?
                                                <a href="<?php echo base_url("masuk");?>" style="color:brown">
                                                    Masuk
                                                </a>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Tampilan dimmer saat klik daftar -->
    <div class="ui dimmer">
        <div class="content">
            <h2 class="ui inverted icon header">
                <i class="heart red icon"></i>
                Terimakasih Sudah Menjadi Bagian Dari HelpPet
            </h2><br>
            <a href="<?php echo base_url("masuk");?>"><button class="positive ui large button">Login</button></a>
        </div>
    </div>

</body>

</html>
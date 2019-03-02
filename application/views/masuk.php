<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>HelpPet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Site Properties -->

    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
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
                        password: {
                            identifier: 'password',
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

<body>
    <div class="ui container fluid"
        style="position:absolute;top: 50%;left: 50%;transform: translateX(-50%) translateY(-50%);">
        <div class="ui container center aligned">
            <a href="<?php echo base_url("");?>">
                <img class="ui centered medium image " src="assets/image/HELPPET-DARK.png">
            </a>
            <div style="margin-top:20px">
                <h2>Silahkan Masuk Ke Akun Anda</h2>
            </div>
            <div class="ui container" style="width:40%">
                <div class="ui container">
                    <form class="ui form" style="padding:20px">
                        <div class="ui segment">
                            <div class="field" style="margin-top:20px">
                                <div class="ui left icon input">
                                    <i class="user icon"></i>
                                    <input type="text" name="email" placeholder="E-mail address">
                                </div>
                            </div>
                            <div class="field">
                                <div class="ui left icon input">
                                    <i class="lock icon"></i>
                                    <input type="password" name="password" placeholder="Password">
                                </div>
                            </div>
                            <div class="ui two column grid">
                                <div class="row">
                                    <div class="column left aligned">
                                        <div class="ui checkbox">
                                            <input type="checkbox" name="example">
                                            <label>Ingat saya</label>
                                        </div>
                                    </div>
                                    <div class="column right aligned">
                                        <a href="" style="color:brown">Lupa Password?</a>
                                    </div>
                                </div>
                            </div>
                            <div class="ui fluid large teal submit button"
                                style="margin-top:15px;margin-bottom:20px;background-color:#cd8b62">
                                Login
                            </div>
                            <div style="font-size:15px">Belum punya akun HelpPet?<a href="<?php echo base_url("daftar");?>" style="color:brown">
                                    Daftar</a></div>
                        </div>
                        <div class="ui error message">
                            <ul class="list">
                                <li>Alamat email tidak boleh kosong</li>
                                <li>Harap masukan email anda yang benar</li>
                                <li>Kata sandi tidak boleh kosong</li>
                                <li>Kata sandi yang anda masukan minimal harus 6 karakter</li>
                            </ul>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
    <title>HelpPet</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <!-- Site Properties -->
    <link rel="icon" href="assets/image/favicon.ico" type="image/gif">
    <link rel='stylesheet prefetch'
        href='https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.4.1/components/icon.min.css'>
    <link rel="stylesheet" type="text/css" href="semantic/dist/semantic.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"
        integrity="sha256-hVVnYaiADRTO2PzUGmuLJr8BLUSjGIZsDYGmIJLv2b8=" crossorigin="anonymous"></script>
    <script src="semantic/dist/semantic.min.js"></script>
    <script>
    $(document)
        .ready(function() {
            $('.ui.dropdown')
                .dropdown();
        });
    </script>
    <script type="text/javascript">
    function SetAmount(amount) {
        $('#nominal').val(amount);
    }
    </script>
</head>

<body style="background-color:#F7F7F7">
    <div class="ui inverted vertical center aligned segment" style="background-color:#cd8b62">
        <div class="ui container">
            <div class="ui large secondary inverted menu">
                <div class="item" style="margin-right:10px">
                    <a class="ui tiny image" href="<?php echo base_url("");?>">
                        <img src="assets/image/HELPPET-LIGHT.png">
                    </a>
                </div>
            </div>
        </div>
    </div>    
    <div class="ui container">
        <div
            style="max-width:600px;margin: 0 auto;margin-top:50px;border:1px solid #e1e2e3;border-radius:6px;background-color:white">
            <div class="ui stackable centered grid" style="padding:25px 40px 25px 40px">
                <div class="six wide column">
                    <img class="ui small centered rounded image" src="assets/image/profilpenampungan.jpg">
                </div>
                <div class="ten wide column" style="padding-left:20px">
                    <div style="font-size:18px;">Anda akan memberikan donasi untuk penampungan hewan :</div>
                    <div style="margin-top:15px;margin-bottom:5px;font-size:20px;font-weight:bold">Kelompok Pet Animal
                    </div>
                    <div class="ui grid">
                        <div class="column">
                            <i class="map marker alternate grey icon"></i>
                        </div>
                        <div class="column">
                            <div style="font-size:16px">Malang</div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="ui container" style="margin-top:20px">
        <div
            style="max-width:600px;margin: 0 auto;margin-top:32px;border:1px solid #e1e2e3;border-radius:6px;background-color:white">
            <div style="padding:40px 60px 40px 60px">
                <!-- Input nominal donasi -->
                <div class="ui labeled huge fluid input">
                    <label for="amount" class="ui label">Rp</label>
                    <input type="text" placeholder="0" id="nominal" style="text-align:right;font-weight:bold">
                </div>
                <div style="text-align:center">
                    <button class="ui blue button" onclick="SetAmount(50000)" style="min-width:113px;margin-top:20px">Rp
                        50.000</button>
                    <button class="ui blue button" onclick="SetAmount(100000)"
                        style="min-width:113px;margin-top:20px">Rp 100.000</button>
                    <button class="ui blue button" onclick="SetAmount(250000)"
                        style="min-width:113px;margin-top:20px">Rp 250.000</button>
                    <button class="ui blue button" onclick="SetAmount(500000)"
                        style="min-width:113px;margin-top:20px">Rp 500.000</button>
                </div>

                <!-- Pilih metode pembayaran -->
                <div class="ui divider" style="margin-top:20px"></div>
                <div class="ui fluid scrolling dropdown" style="font-size:16px">
                    <input type="hidden" name="postingan">
                    <div class="default text">
                        <div style="font-size:18px">
                            <b>Pilih Metode Pembayaran</b>
                        </div>
                    </div>
                    <div class="menu fluid">
                        <div class="item">
                            <div style="display:flex;flex-direction:row;align-items:center;padding:5px 10px 5px 10px">
                                <div>
                                    <img class="ui tiny image" src="assets/image/bankbca.png">
                                </div>
                                <div style="font-size:17px;font-weight:bold;margin-left:40px">
                                    Transfer BCA
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div style="display:flex;flex-direction:row;align-items:center;padding:5px 10px 5px 10px">
                                <div>
                                    <img class="ui tiny image" src="assets/image/bankmandiri.png">
                                </div>
                                <div style="font-size:17px;font-weight:bold;margin-left:40px">
                                    Transfer Mandiri
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div style="display:flex;flex-direction:row;align-items:center;padding:5px 10px 5px 10px">
                                <div>
                                    <img class="ui tiny image" src="assets/image/bankbri.png">
                                </div>
                                <div style="font-size:17px;font-weight:bold;margin-left:40px">
                                    Transfer BRI
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div style="display:flex;flex-direction:row;align-items:center;padding:5px 10px 5px 10px">
                                <div>
                                    <img class="ui tiny image" src="assets/image/bankbni.png">
                                </div>
                                <div style="font-size:17px;font-weight:bold;margin-left:40px">
                                    Transfer BNI
                                </div>
                            </div>
                        </div>
                        <div class="item">
                            <div style="display:flex;flex-direction:row;align-items:center;padding:5px 10px 5px 10px">
                                <div>
                                    <img class="ui tiny image" src="assets/image/bankcimb.png">
                                </div>
                                <div style="font-size:17px;font-weight:bold;margin-left:40px">
                                    Transfer CIMB
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="ui divider" style="margin-bottom:20px"></div>

                <!-- Keterangan donasi -->
                <div style="font-size:18px"><b>Eka Iqbal Virgiawan</b></div>
                <div style="margin-top:5px;color:grey;font-size:15px">ekaiqbalvirgiawan@gmail.com</div>
                <div class="ui form" style="margin-top:15px;font-size:16px">
                    <div class="field">
                        <label>Pesan Untuk Penampungan Hewan</label>
                        <textarea maxlength="140" rows="4"
                            placeholder="Tuliskan pesan atau dukungan anda untuk penampungan hewan."></textarea>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol lanjut -->
        <a href="<?php echo base_url("instruksipembayarandonasi");?>">
            <div style="max-width:600px;margin: 0 auto">
                <button class="fluid ui big button"
                    style="margin-top:20px;margin-bottom:50px;background-color:#cd8b62;color:white">Lanjut
                    Pembayaran</button>
            </div>
        </a>


</body>

</html>
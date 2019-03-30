<?php 
// Load nav
$statuslogin = $this->session->userdata('status');
if ($statuslogin == "login"){
    $this->load->view('navigasiloginuser');
} else {$this->load->view('navigasi');} ?>

<div class="ui container" style="color:#4d4d4d;margin-top:50px">
    <div style="max-width:600px;margin: 0 auto;border:1px solid #e1e2e3;border-radius:6px;padding:40px 45px 40px 45px">
        <div style="font-size:28px"><b>Posting Hewan</b></div>
        <div style="font-size:20px;margin-top:15px;line-height:1.5">
            Bagikan informasi mengenai hewan peliharaan yang membutuhkan pengadopsi disini.
        </div>
        <div class="ui divider"></div>
        <form class="ui form" style="margin-top:15px" action="<?php echo base_url('PostingHewan/postingHewan')?>" method="post" enctype="multipart/form-data">
        <!-- Upload Foto  Hewan -->
        <div class="ui container fluid" style="margin-top:20px">
            <div style="font-size:18px"><b>Foto Hewan</b></div>
            <div class="ui card">
                <img class="ui medium image" id="image-preview">
            </div>
            <label for="unggah_gambar" class="ui large label" style="cursor:pointer">
                <i class="cloud upload icon"></i>
                Pilih Foto
            </label>
            <input type="file" id="unggah_gambar" name="photo" onchange="previewImage();" style="display: none" required="">
        </div>
        </br>
        <!-- Akhir Upload Foto  Hewan -->
            
        
            <div class="field">
                <label style="font-size:18px">Deskripsi Singkat Hewan</label>
                <textarea name = "deskripsi" maxlength="144" rows="4"
                    placeholder="Tuliskan pesan atau dukungan anda untuk penampungan hewan." required=""></textarea>
            </div>
            <div class="field">
                <label style="font-size:18px">Nama Hewan</label>
                <input type="text" name="namahewan" placeholder="Masukkan Nama Hewan" required="">
            </div>
            <div class="field">
                <label style="font-size:18px">Jenis Hewan</label>
                <input type="text" name="jenishewan" placeholder="Masukkan Jenis Hewan" required="">
            </div>
            <div class="field">
                <label style="font-size:18px">Ras Hewan</label>
                <input type="text" name="rashewan" placeholder="Masukkan Ras Hewan" required=""> 
            </div>
            <div class="field">
                <label style="font-size:18px">Jenis Kelamin Hewan</label>
                <div class="ui selection dropdown">
                    <input type="hidden" name="jeniskelaminhewan" required="">
                    <i class="dropdown icon"></i>
                    <div class="default text">Pilih Jenis Kelamin Hewan</div>
                    <div class="menu">
                        <div class="item" value="Jantan">Jantan</div>
                        <div class="item" value="Betina">Betina</div>
                    </div>
                </div>
            </div>
            <div class="field">
                <label style="font-size:18px">Umur Hewan</label>
                <div class="ui right labeled fluid input">
                    <input type="number" name="umurhewan" placeholder="Masukkan Umur Hewan" required="">
                    <label class="ui label" style="background-color:#cd8b62;color:white">Bulan</label>
                </div>
            </div>
            <div class="field">
                <label style="font-size:18px">Warna Bulu Hewan</label>
                <input type="text" name="warnahewan" placeholder="Masukkan Warna Bulu Hewan" required="">
            </div>
            <div class="field">
                <label style="font-size:18px">Kondisi Kesehatan Hewan</label>
                <input type="text" name="kondisihewan" placeholder="Kondisi Kesehatan" required="">
            </div>
            <div class="field">
                <label style="font-size:18px">Biaya Adopsi Hewan</label>
                <div class="ui labeled fluid input">
                    <label class="ui label" style="background-color:#cd8b62;color:white">Rp</label>
                    <input type="number" name="biayaadopsi" placeholder="Masukkan Biaya Adopsi" >
                </div>
            </div>
            <button class="ui big button fluid" type="submit"
            style="margin-top:40px;background-color:#cd8b62;color:white">Posting</button>
        </form>
        
    </div>
</div>

<!-- Dimmer -->
<div class="ui tiny modal">
    <div class="header">
        Posting Berhasil
    </div>
    <div class="content">
        <p style="font-size:16px;line-height:1.5">
            Postingan anda akan dibagikan kepada semua pengguna HelpPet. Silahkan tunggu pengajuan adopsi dari pengguna
            yang berminat. Dan terimakasih sudah menggunakan HelpPet.
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
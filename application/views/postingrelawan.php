<?php
// Load nav
$this->load->view('navigasiloginuser');
?>

<div class="ui container" style="color:#4d4d4d;margin-top:50px">
    <div style="max-width:600px;margin: 0 auto;border:1px solid #e1e2e3;border-radius:6px;padding:40px 45px 40px 45px">
        <div style="font-size:28px"><b>Posting Relawan</b></div>
        <div style="font-size:20px;margin-top:15px;line-height:1.5">
            Bagikan informasi mengenai relawan yang dibutuhkan di penampungan anda.
        </div>
        <div class="ui divider"></div>
        <!-- Upload Foto  Hewan -->
        <div class="ui container fluid" style="margin-top:20px">
            <div style="font-size:18px"><b>Foto Posting Relawan</b></div>
            <div class="ui card">
                <img class="ui medium image" id="image-preview">
            </div>
            <label for="unggah_gambar" class="ui large label" style="cursor:pointer">
                <i class="cloud upload icon"></i>
                Pilih Foto
            </label>
            <input type="file" id="unggah_gambar" onchange="previewImage();" style="display: none">
        </div>
        <!-- Akhir Upload Foto  Hewan -->
        <form class="ui form" style="margin-top:15px">
            <div class="field">
                <label style="font-size:18px">Nama Penampungan Hewan</label>
                <input type="text" name="namapenampungan" value="Kelompok Pet Animal" readonly="readonly">
            </div>
            <div class="field">
                <label style="font-size:18px">Domisili Penampungan Hewan</label>
                <input type="text" name="domisili" value="Malang" readonly="readonly">
            </div>
            <div class="field">
                <label style="font-size:18px">Posisi Relawan</label>
                <input type="text" name="posisirelawan" placeholder="Masukkan Posisi Relawan">
            </div>
            <div class="field">
                <label style="font-size:18px">Persyaratan Relawan</label>
                <textarea maxlength="256" rows="5"
                    placeholder="Tuliskan persyaratan relawan dalam bentuk nomor"></textarea>
            </div>      
            <div class="field">
                <label style="font-size:18px">Pekerjaan Yang Dilakukan</label>
                <textarea maxlength="256" rows="5"
                    placeholder="Tuliskan pekerjaan yang akan dilakukan relawan dalam bentuk nomor"></textarea>
            </div>        
        </form>
        <button class="ui big button fluid" onclick="$('.ui.tiny.modal').modal('show')" type="submit"
            style="margin-top:40px;background-color:#cd8b62;color:white">Posting</button>
    </div>
</div>

<!-- Dimmer -->
<div class="ui tiny modal">
    <div class="header">
        Posting Berhasil
    </div>
    <div class="content">
        <p style="font-size:16px;line-height:1.5">
            Postingan anda akan dibagikan kepada semua pengguna HelpPet. Silahkan tunggu pengajuan relawan dari pengguna
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
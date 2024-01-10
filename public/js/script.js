//script js yg dijlnkan ketika halamannya sudah siap
$(function() {


        $.ajax({
            url: 'http://localhost/InfoLoker/public/user/getUbah',
            data: {id_user : id_user},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#tentang_saya').val(data.tentang_saya);
                $('#nama_lengkap').val(data.nama_lengkap);
                $('#nama_panggilan').val(data.nama_panggilan);
                $('#tgl_lahir').val(data.tgl_lahir);
                $('#no_telp').val(data.no_telp);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
            }

        });
});
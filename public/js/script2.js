//script js yg dijlnkan ketika halamannya sudah siap
$(function() {

    //event ketika tombol edit diklik
    $('.tombolTambahData').on('click', function() {
        
        $('#judulModal').html('Tambah Data Loker');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    });
    $('.tampilModalUbah').on('click', function() {
        
        $('#judulModal').html('Ubah Data Loker');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/InfoLoker/public/admin/ubahlkr');

        //ketika tombolnya ditekan, maka otomatis mengambil idnya
        const id = $(this).data('id');


        $.ajax({
            url: 'http://localhost/InfoLoker/public/admin/getUbahlkr',
            data: {id_loker : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#posisi_loker').val(data.posisi_loker);
                $('#nama_perusahaan').val(data.nama_perusahaan);
                $('#deskripsi_loker').val(data.deskripsi_loker);
                $('#syarat_loker').val(data.syarat_loker);
                $('#lokasi').val(data.lokasi);
                $('#gaji').val(data.gaji);
                $('#tanggal_post').val(data.tanggal_post);
                $('#id_loker').val(data.id_loker);
            }
            

        });

    });


    $('#formModal').on('hidden.bs.modal', function (e) {
        // Membersihkan nilai dari input di dalam modal saat ditutup
        $('#posisi_loker').val('');
        $('#nama_perusahaan').val('');
        $('#deskripsi_loker').val('');
        $('#syarat_loker').val('');
        $('#lokasi').val('');
        $('#gaji').val('');
        $('#tanggal_post').val('');
        $('#id_loker').val('');
    });
    


});
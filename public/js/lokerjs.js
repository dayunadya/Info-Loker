$(function() {
    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#posisi_loker').val();
                $('#deskripsi_loker').val();
                $('#syarat_loker').val();
                $('#lokasi').val();
                $('#gaji').val();
                $('#tanggal_post').val();
                $('#id_loker').val();
                $('#formModal').on('hidden.bs.modal', function () {
                    $('#posisi_loker').val('');
                    $('#deskripsi_loker').val('');
                    $('#syarat_loker').val('');
                    $('#lokasi').val('');
                    $('#gaji').val('');
                    $('#tanggal_post').val('');
                    $('#id_loker').val('');
                });
    });
        $('.tampilModalUbah').on('click', function() {
            $('#formModalLabel').html('Ubah Data');
            $('.modal-footer button[type=submit]').html('Ubah Data');
            $('.modal-body form').attr('action', 'http://localhost/InfoLoker/public/perusahaan/ubah');
            const id = $(this).data('id');
            $.ajax({
                url: 'http://localhost/InfoLoker/public/perusahaan/getubah',
                data: {id : id},
                method: 'post',
                dataType: 'json', // Hapus tanda komentar ini jika responsnya adalah JSON
                success: function(data) {
                    $('#id_loker').val(data.id_loker);
                    $('#posisi_loker').val(data.posisi_loker);
                    $('#deskripsi_loker').val(data.deskripsi_loker);
                    $('#syarat_loker').val(data.syarat_loker);
                    $('#lokasi').val(data.lokasi);
                    $('#gaji').val(data.gaji);
                    $('#tanggal_post').val(data.tanggal_post);             
                } 
            });
        });
    });
$(function() {
    $('.tombolTambahData').on('click', function(){
        $('#formModalLabel').html('Tambah Data');
        $('.modal-footer button[type=submit]').html('Tambah Data');
        $('#username').val('');
        $('#nama').val('');
        $('#jenis_kelamin').val('');
        $('#email').val('');
        $('#no_telp').val('');
        $('#alamat').val('');
        $('#id').val('');

        // Mengosongkan nilai saat modal ditutup
        $('#formModal').on('hidden.bs.modal', function () {
            $('#username').val('');
            $('#nama').val('');
            $('#jenis_kelamin').val('');
            $('#email').val('');
            $('#no_telp').val('');
            $('#alamat').val('');
            $('#id').val('');
        });
    });

    // Memperbaiki kesalahan $ yang hilang di sini
    $('.tampilModalUbah').on('click', function() {
        $('#formModalLabel').html('Ubah Data');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/InfoLoker/public/admin/ubah');
        const id = $(this).data('id');
        $.ajax({
            url: 'http://localhost/InfoLoker/public/admin/getubah',
            data: {id: id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                $('#id').val(data.id);
                $('#username').val(data.username);
                $('#nama').val(data.nama);
                $('#jenis_kelamin').val(data.jenis_kelamin);
                $('#email').val(data.email);
                $('#no_telp').val(data.no_telp);
                $('#alamat').val(data.alamat);
                $('#password').val(data.password);
                $('#akses').val(data.akses);
            } 
        });
    });
});

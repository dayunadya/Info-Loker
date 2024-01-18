$(function () {

    $('.btnTambahData').on('click', function () {
        $('#FormModal').html('Tambah Data Perusahaan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function () {

        $('#FormModal').html('Ubah Data Perusahaan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/InfoLoker/public/admin/ubahPerusahaan');
        const id = $(this).data('id');

        //console.log(id);
        $.ajax({
            url: 'http://localhost/InfoLoker/public/admin/getubahprs',
            data: { id: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama').val(data.nama);
                $('#deskripsi').val(data.deskripsi);
                $('#email').val(data.email);
                $('#no_telp').val(data.no_telp);
                $('#alamat').val(data.alamat);
                $('#id').val(data.id);
            }
        })

    });


});



$(function () {

    $('.btnTambahData').on('click', function () {
        $('#FormModal').html('Tambah Data Perusahaan');
        $('.modal-footer button[type=submit]').html('Tambah Data');
    });

    $('.tampilModalUbah').on('click', function () {

        $('#FormModal').html('Ubah Data Perusahaan');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-body form').attr('action', 'http://localhost/InfoLoker/public/admin/ubahPerusahaan');
        const id = $(this).data('id_prs');

        //console.log(id);
        $.ajax({
            url: 'http://localhost/InfoLoker/public/admin/getubahprs',
            data: { id_prs: id },
            method: 'post',
            dataType: 'json',
            success: function (data) {
                $('#nama_perusahaan').val(data.nama_perusahaan);
                $('#deskripsi').val(data.deskripsi);
                $('#email').val(data.email);
                $('#telepon').val(data.telepon);
                $('#alamat').val(data.alamat);
                $('#id_prs').val(data.id_prs);
            }
        })

    });


});



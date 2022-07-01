$(function() {

    $('.buttonTambahData').on('click', function() {
        
        $('#tambahData').html('Tambah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Tambah Data');

    })

    $('.tampilModalUbah').on('click', function() {
        
        $('#tambahData').html('Ubah Data Mahasiswa');
        $('.modal-footer button[type=submit]').html('Ubah Data');
        $('.modal-content form').attr('action', 'http://localhost/fnd-34-php-mvc/public/mahasiswa/ubah')
        // let modal = $('.modal-content form');
        // console.log("hallo", modal);

        const id = $(this).data('id');
        // const id = $(this).data('bs-toggle');
        // console.log(id);

        $.ajax({
            url: 'http://localhost/fnd-34-php-mvc/public/mahasiswa/getUbah',
            data: {id : id},
            method: 'post',
            dataType: 'json',
            success: function(data) {
                console.log(data);
                $('#nama').val(data.nama);
                $('#nim').val(data.nim);
                $('#email').val(data.email);
                $('#jurusan').val(data.jurusan);
                $('#id').val(data.id);
            } 
        });

    })

})
const base_url = window.location.origin + '/sarikusuma3';
$('.deleteUser').click(function () {
    let id = $(this).data('delete');

    Swal.fire({
        title: "Apakah Anda Yakin?",
        text: "Data yang terhapus tidak dapat dikembalikan!",
        icon: "warning",
        showCancelButton: true,
        confirmButtonColor: "#3085d6",
        cancelButtonColor: "#d33",
        confirmButtonText: "Yes, Hapus!"
    }).then((result) => {
        if (result.isConfirmed) {
            $.ajax({
                url: base_url + '/admin/hapusUser',
                method: 'post',
                data: {
                    id: id
                },
                beforeSend: function () {

                },
                success: function (data) {
                    if (data == 1) {
                        Swal.fire({
                            title: "Terhapus!",
                            text: "Data anda berhasil dihapus.",
                            icon: "success"
                        });
                        setTimeout(function () {
                            document.location.href = base_url + "/admin/pasien"
                        }, 2000);
                    } else {
                        Swal.fire({
                            title: "Gagal!",
                            text: "Data anda Gagal dihapus.",
                            icon: "error"
                        });
                    }
                }
            })

        }
    });

})
const base_url = window.location.origin + '/sarikusuma3';

$('.tabledata').DataTable();


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
                    console.log(data)
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
$('.deleteTerapis').click(function () {
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
                url: base_url + '/admin/hapusTerapis',
                method: 'post',
                data: {
                    id: id
                },
                beforeSend: function () {

                },
                success: function (data) {
                    console.log(data)
                    if (data == 1) {
                        Swal.fire({
                            title: "Terhapus!",
                            text: "Data anda berhasil dihapus.",
                            icon: "success"
                        });
                        setTimeout(function () {
                            document.location.href = base_url + "/admin/dataTerapis"
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
$('.delete_rekam_medis').click(function () {
    let id = $(this).data('delete');
    let id_user = $(this).data('user');

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
                url: base_url + '/admin/hapusRekamMedis',
                method: 'post',
                data: {
                    id: id
                },
                beforeSend: function () {

                },
                success: function (data) {
                    console.log(data)
                    if (data == 1) {
                        Swal.fire({
                            title: "Terhapus!",
                            text: "Data anda berhasil dihapus.",
                            icon: "success"
                        });
                        setTimeout(function () {
                            document.location.href = base_url + "/admin/kelolaRekamMedis/" + id_user
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

function $_(selector) {
    return document.querySelector(selector)
}

function find(el, selector) {
    let finded
    return (finded = el.querySelector(selector)) ? finded : null
}

function siblings(el) {
    const siblings = []
    for (let sibling of el.parentNode.children) {
        if (sibling !== el) {
            siblings.push(sibling)
        }
    }
    return siblings
}

const showAsideBtn = $_('.show-side-btn')
const sidebar = $_('.sidebar')
const wrapper = $_('#wrapper')

// showAsideBtn.addEventListener('click', function () {
//      $_(`# $_{this.dataset.show}`).classList.toggle('show-sidebar')
//     wrapper.classList.toggle('fullwidth')
// })

if (window.innerWidth < 767) {
    sidebar.classList.add('show-sidebar');
}

window.addEventListener('resize', function () {
    if (window.innerWidth > 767) {
        sidebar.classList.remove('show-sidebar')
    }
})

// dropdown menu in the side nav
var slideNavDropdown = $_('.sidebar-dropdown');

$_('.sidebar .categories').addEventListener('click', function () {
    // event.preventDefault()

    const item = event.target.closest('.has-dropdown')

    if (!item) {
        return
    }

    item.classList.toggle('opened')

    siblings(item).forEach(sibling => {
        sibling.classList.remove('opened')
    })

    if (item.classList.contains('opened')) {
        const toOpen = find(item, '.sidebar-dropdown')

        if (toOpen) {
            toOpen.classList.add('active')
        }

        siblings(item).forEach(sibling => {
            const toClose = find(sibling, '.sidebar-dropdown')

            if (toClose) {
                toClose.classList.remove('active')
            }
        })
    } else {
        find(item, '.sidebar-dropdown').classList.toggle('active')
    }
})








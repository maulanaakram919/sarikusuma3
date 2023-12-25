
$(document).ready(function () {


    const base_url = window.location.origin + '/sarikusuma3';

    $('.tabledata').DataTable();
    $('.datepicker').datepicker({
        format: 'dd-mm-yyyy',
        startDate: '-3d',
        todayHighlight: true
    });

    function rupiah() {
        new AutoNumeric.multiple('.rupiah', {
            onInvalidPaste: 'truncate',
            modifyValueOnWheel: false,
            watchExternalChanges: true,
            decimalPlaces: 0,
            currencySymbol: 'Rp. ',
            decimalPlacesRawValue: 2,
            decimalPlacesShownOnBlur: 0,
            unformatOnSubmit: true,
            styleRules: {
                "positive": "autoNumeric-positive",
                "negative": "autoNumeric-negative"
            },
            decimalCharacterAlternative: '.',

            // negativeBracketsTypeOnBlur: '(,)'

        });
    }
    rupiah();


    $(function () {
        $('[data-toggle="tooltip"]').tooltip()
    })

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
    // $('.deleteObat').click(function () {
    $('body').on('click', '.deleteObat', function () {
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
                    url: base_url + '/admin/hapusObat',
                    method: 'post',
                    data: {
                        id: id
                    },
                    beforeSend: function () {

                    },
                    success: function (data) {
                        // console.log(data)
                        if (data == 1) {
                            Swal.fire({
                                title: "Terhapus!",
                                text: "Data anda berhasil dihapus.",
                                icon: "success"
                            });
                            setTimeout(function () {
                                document.location.href = base_url + "/admin/dataObat"
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
    $('body').on('click', '.deleteLayanan', function () {
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
                    url: base_url + '/admin/hapusLayanan',
                    method: 'post',
                    data: {
                        id: id
                    },
                    beforeSend: function () {

                    },
                    success: function (data) {
                        // console.log(data)
                        if (data == 1) {
                            Swal.fire({
                                title: "Terhapus!",
                                text: "Data anda berhasil dihapus.",
                                icon: "success"
                            });
                            setTimeout(function () {
                                document.location.href = base_url + "/admin/layanan"
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
        let id_reservasi = $(this).data('reservasi');

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
                                document.location.href = base_url + "/admin/kelolaRekamMedis/" + id_reservasi + "/" + id_user
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
    $('.deleteReservasi').click(function () {
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
                    url: base_url + '/admin/hapusReservasi',
                    method: 'post',
                    data: {
                        id: id
                    },
                    beforeSend: function () {

                    },
                    success: function (data) {
                        // console.log(data)
                        if (data == 1) {
                            Swal.fire({
                                title: "Terhapus!",
                                text: "Data anda berhasil dihapus.",
                                icon: "success"
                            });
                            setTimeout(function () {
                                document.location.href = base_url + "/admin/reservasi/"
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

    $('.select2').select2({
        dropdownParent: $('#addReservasi')
    });
    $('.multiple').select2();


    $('.cari').change(function () {
        let cari = $(this).val();
        $.ajax({
            url: base_url + '/admin/cariPasien',
            method: 'post',
            dataType: 'json',
            data: {
                cari: cari
            },
            beforeSend: function () {

            },
            success: function (data) {
                $('#nama').html('')
                $('#email').html('')
                $('#whatsapp').html('')
                $('#tgl_lahir').html('')
                $('#agama').html('')
                $('#jk').html('')
                $('#alamat').html('')
                $('#kota').html('')
                $('#provinsi').html('')
                $('#negara').html('')
                let jenis_kelamin = data.jk == 'p' ? 'Pria' : 'Wanita'

                $('#nama').html(data.nama)
                $('#email').html(data.email)
                $('#whatsapp').html(data.whatsapp)
                $('#tgl_lahir').html(data.tgl_lahir)
                $('#agama').html(data.agama)
                $('#jk').html(jenis_kelamin)
                $('#alamat').html(data.alamat)
                $('#kota').html(data.kota)
                $('#provinsi').html(data.provinsi)
                $('#negara').html(data.negara)
            }

        })
    })

    $('.tanggal_transaksi').change(function () {
        let day = $(this).val();
        $.ajax({
            url: base_url + '/admin/loadTransaksi',
            type: 'post',
            dataType: 'json',
            data: {
                day: day
            },
            beforeSend: function () {

            },
            success: function (data) {
                $('.loadDataTransaksi').html('');
                let isi = '';
                let no = 1;
                data.forEach(e => {
                    isi += `    <tr>
                                    <td class="align-middle text-center">`+ no + `</td>
                                    <td class="align-middle">`+ e.nama + `</td>
                                    <td class="align-middle text-center">`+ e.tgl_lahir + `</td>
                                    <td class="align-middle text-center"><?= hitung_umur(`+ e.tgl_lahir + `) ?></td>
                                    <?php if ($d['jk'] == 'p') : ?>
                                        <td class="align-middle text-center">Laki laki</td>
                                    <?php elseif ($d['jk'] == 'w') : ?>
                                        <td class="align-middle text-center">Perempuan</td>
                                    <?php else : ?>
                                        <td class="align-middle text-center"></td>
                                    <?php endif; ?>

                                    <td class="align-middle"><?= $d['terapi'] ?></td>
                                    <td class="align-middle"><?= $d['tanggal_terapi'] ?></td>
                                    <?php if ($d['status_payment'] == 1) : ?>
                                        <td class="align-middle text-success">Selesai</td>
                                    <?php else : ?>
                                        <td class="align-middle text-danger">Menunggu</td>
                                    <?php endif ?>
                                    <td class="align-middle p-2 text-nowrap">
                                        <div class="row">
                                            <div class="col">
                                                <button class="btn btn-primary detNota" data-rekam="<?= $d['id_reservasi'] ?>" data-bs-toggle="modal" data-bs-target="#pembayaran<?= $d['id_reservasi'] ?>">Lihat Nota</button>
                                                <!-- Modal -->
                                                <div class="modal fade" id="pembayaran<?= $d['id_reservasi'] ?>" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                                                    <div class="modal-dialog modal-lg">
                                                        <div class="modal-content">
                                                            <div class="modal-header">
                                                                <h1 class="modal-title fs-5" id="exampleModalLabel">Pembayaran</h1>
                                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                                            </div>
                                                            <div class="modal-body">

                                                                <div class="sidebar-header d-flex  align-items-center px-3 py-4">
                                                                    <img class="rounded-pill img-fluid" width="65" src="<?= base_url('assets/image/logo1.jpeg') ?>" alt="">
                                                                    <div class="ms-2">
                                                                        <h5 class="fs-6 mb-0">
                                                                            <a class="text-decoration-none" href="#">Sari Kusuma</a>
                                                                        </h5>
                                                                        <p class="mt-1 mb-0">Sehat Optimal | Ibadah Sempurna</p>
                                                                    </div>
                                                                    <hr>

                                                                </div>

                                                                <div class="row mb-5">
                                                                    <div class="col">
                                                                        <div class="smaller">
                                                                            <div class="row text-dark">
                                                                                <div class="col-sm-2">
                                                                                    <p>Nama</p>
                                                                                </div>
                                                                                <div class="col-sm-1 text-center">
                                                                                    <p>:</p>
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <p><?= $d['nama'] ?></p>
                                                                                </div>
                                                                                <div class="col-sm-1"></div>
                                                                                <div class="col-sm-2">
                                                                                    <p>Tanggal Lahir</p>
                                                                                </div>
                                                                                <div class="col-sm-1 text-center">
                                                                                    <p>:</p>
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <p><?= $d['tgl_lahir'] ?></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row text-dark">
                                                                                <div class="col-sm-2">
                                                                                    <p>Email</p>
                                                                                </div>
                                                                                <div class="col-sm-1 text-center">
                                                                                    <p>:</p>
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <p><?= $d['email'] ?></p>
                                                                                </div>
                                                                                <div class="col-sm-1"></div>
                                                                                <div class="col-sm-2">
                                                                                    <p>Agama</p>
                                                                                </div>
                                                                                <div class="col-sm-1 text-center">
                                                                                    <p>:</p>
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <p><?= $d['agama'] ?></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row text-dark">
                                                                                <div class="col-sm-2">
                                                                                    <p>Whatsapp</p>
                                                                                </div>
                                                                                <div class="col-sm-1 text-center">
                                                                                    <p>:</p>
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <p><?= $d['whatsapp'] ?></p>
                                                                                </div>
                                                                                <div class="col-sm-1"></div>
                                                                                <div class="col-sm-2">
                                                                                    <p>Jenis Kelamin</p>
                                                                                </div>
                                                                                <div class="col-sm-1 text-center">
                                                                                    <p>:</p>
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <?php if ($d['jk'] == 'p') : ?>
                                                                                        <p>Pria</p>
                                                                                    <?php else : ?>
                                                                                        <p>Wanita</p>
                                                                                    <?php endif; ?>

                                                                                </div>
                                                                            </div>
                                                                            <div class="row text-dark">
                                                                                <div class="col-sm-2">
                                                                                    <p>Alamat</p>
                                                                                </div>
                                                                                <div class="col-sm-1 text-center">
                                                                                    <p>:</p>
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <p><?= $d['alamat'] ?></p>
                                                                                </div>
                                                                                <div class="col-sm-1"></div>
                                                                                <div class="col-sm-2">
                                                                                    <p>Kota</p>
                                                                                </div>
                                                                                <div class="col-sm-1 text-center">
                                                                                    <p>:</p>
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <p><?= $d['kota'] ?></p>
                                                                                </div>
                                                                            </div>
                                                                            <div class="row text-dark">
                                                                                <div class="col-sm-2">
                                                                                    <p>Provinsi</p>
                                                                                </div>
                                                                                <div class="col-sm-1 text-center">
                                                                                    <p>:</p>
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <p><?= $d['provinsi'] ?></p>
                                                                                </div>
                                                                                <div class="col-sm-1"></div>
                                                                                <div class="col-sm-2">
                                                                                    <p>Negara</p>
                                                                                </div>
                                                                                <div class="col-sm-1 text-center">
                                                                                    <p>:</p>
                                                                                </div>
                                                                                <div class="col-sm-2">
                                                                                    <p><?= $d['negara'] ?></p>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </div>
                                                                </div>


                                                                <div class="row">
                                                                    <div class="col-sm-1">Tanggal</div>
                                                                    <div class="col-sm-1 text-center">:</div>
                                                                    <div class="col-sm-3"><?= date('d-m-Y H:i:sa') ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col-sm-1">Layanan</div>
                                                                    <div class="col-sm-1 text-center">:</div>
                                                                    <div class="col-sm-3"><?= $d['layanan'] ?></div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="col">
                                                                        <table class="table table-bordered">
                                                                            <thead>
                                                                                <tr>
                                                                                    <th>Pelayanan</th>
                                                                                    <th>Harga</th>
                                                                                </tr>
                                                                            </thead>
                                                                            <tbody class="detail_nota">
                                                                                <tr>
                                                                                    <td></td>
                                                                                    <td></td>
                                                                                </tr>
                                                                            </tbody>
                                                                            <tfoot class="detail_nota_footer"></tfoot>
                                                                        </table>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <h5>Metode Pembayaran</h5>
                                                                    <div class="col-sm-1 text-center">
                                                                        <button class="btn btn-primary cash">Cash</button>
                                                                        <button class="btn btn-secondary">CC</button>
                                                                        <button class="btn btn-info">Online</button>
                                                                    </div>

                                                                </div>

                                                            </div>
                                                            <div class="modal-footer">
                                                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                                                <button type="button" class="btn btn-primary">Save changes</button>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </td>
                                </tr>`;

                    no++;
                });

                $('.loadDataTransaksi').html(isi)
            }
        })

    })

    const rp = (number) => {
        return new Intl.NumberFormat("id-ID", {
            style: "currency",
            currency: "IDR",
            decimal: ''
        }).format(number);
    }



    $('.detNota').click(function () {
        let id_reservasi = $(this).data('rekam');
        $.ajax({
            url: base_url + "/admin/detNota",
            type: 'post',
            dataType: 'json',
            data: {
                id_reservasi: id_reservasi
            },
            beforeSend: function () {

            },
            success: function (data) {

                let data_nota = '';
                let data_nota_footer = '';
                let total = 0;

                data.layanan.forEach(l => {
                    total += parseInt(l.harga);
                    data_nota += `  <tr>
                                        <td>`+ l['layanan'] + `</td>
                                        <td class="rupiah text-end">`+ l['harga'] + `</td>
                                    </tr>`;

                    data.resep.forEach(r => {
                        total += parseInt(r.harga);
                        data_nota += `  <tr>
                                            <td>`+ r['nama_obat'] + `</td>
                                            <td class="rupiah text-end">`+ r['harga'] + `</td>
                                        </tr>`;

                    });
                });
                data_nota_footer = `  <tr>
                                            <th class="text-center">Total</th>
                                            <th class="rupiah text-end">`+ total + `</th>
                                        </tr>`;

                $('.detail_nota').html(data_nota);
                $('.detail_nota_footer').html(data_nota_footer);

                $('.cash').attr('data-cash', rp(total))
                $('.cash').attr('data-rawcash', total)
                $('.cash').attr('data-reservasi', data.resep[0]['id_reservasi'])
                // console.log(total)
                rupiah();
            }
        })
    })

    $('.cash').click(function () {
        $('.modal').modal('hide');
        let total = $(this).data('cash');
        let totalraw = $(this).data('rawcash');
        let input = 0;

        let reservasi = $(this).data('reservasi');
        Swal.fire({
            title: "Masukan Nominal Pembayaran",
            inputLabel: "Total " + total,
            input: "text",
            customClass: {
                input: 'rupiah'
            },

            inputAttributes: {
                autocapitalize: "off"
            },
            showCancelButton: true,
            confirmButtonText: "Payment",
            showLoaderOnConfirm: true,
            preConfirm: async (inputTotal) => {
                input = inputTotal.replace(",", "");
                input = input.replace("Rp. ", "");

                if (input < totalraw) {
                    Swal.fire({
                        icon: "error",
                        title: "Oops...",
                        text: "Nominal Tidak Cukup"
                    });
                    return false;
                } else {
                    try {
                        const githubUrl = base_url + `/admin/cash/${reservasi}`;
                        const response = await fetch(githubUrl);
                        if (!response.ok) {
                            return Swal.showValidationMessage(`
          ${JSON.stringify(await response.json())}
        `);
                        }
                        return response.json();
                    } catch (error) {
                        Swal.showValidationMessage(`
        Request failed: ${error}
      `);
                    }
                }

            },
            allowOutsideClick: () => !Swal.isLoading()
        }).then((result) => {
            if (result.isConfirmed) {

                let sisa = parseInt(input.replace(",", "")) - parseInt(totalraw)
                Swal.fire({
                    title: "Kembali " + rp(sisa),
                    timer: '5000'
                });
                location.reload();

            }
        });

        rupiah();
    })





});








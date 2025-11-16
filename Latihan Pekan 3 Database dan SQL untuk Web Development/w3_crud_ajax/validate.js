$(function () {
    function resetForm() {
        $('#id').val('');
        $('#name').val('');
        $('#email').val('');
        $('#errorName').text('');
        $('#errorEmail').text('');
        $('#formDemo button[type="submit"]').text('Simpan');
    }

    function showStatus(message, isError) {
        $('#statusMessage')
            .text(message)
            .css('color', isError ? 'red' : 'green');
    }

    function loadData() {
        $('#dataDemo').load('read.php');
    }

    loadData();
    resetForm();

    $(document).on('click', '.addBtn', function () {
        resetForm();
        $('#name').focus();
    });

    $('#formDemo').on('submit', function (e) {
        e.preventDefault();

        let id    = $('#id').val();
        let name  = $('#name').val().trim();
        let email = $('#email').val().trim();
        let valid = true;

        if (!name) {
            $('#errorName').text('Nama harus diisi.');
            valid = false;
        } else {
            $('#errorName').text('');
        }

        if (!email) {
            $('#errorEmail').text('Email harus diisi.');
            valid = false;
        } else {
            $('#errorEmail').text('');
        }

        if (!valid) return;

        $.ajax({
            url: 'create.php',
            method: 'POST',
            data: { id, name, email },
            success: function (res) {
                showStatus(res, false);
                resetForm();
                loadData();
            },
            error: function () {
                showStatus('Terjadi kesalahan di server.', true);
            }
        });
    });

    $(document).on('click', '.editBtn', function () {
        const id    = $(this).data('id');
        const nama  = $(this).data('nama');
        const email = $(this).data('email');

        $('#id').val(id);
        $('#name').val(nama);
        $('#email').val(email);
        $('#formDemo button[type="submit"]').text('Update');
        $('#name').focus();
    });

    $(document).on('click', '.deleteBtn', function () {
        const id = $(this).data('id');
        if (!confirm('Yakin ingin menghapus data ini?')) return;

        $.ajax({
            url: 'delete.php',
            method: 'POST',
            data: { id },
            success: function (res) {
                showStatus(res, false);
                loadData();
            },
            error: function () {
                showStatus('Gagal menghapus data.', true);
            }
        });
    });
});
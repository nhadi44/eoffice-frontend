$(document).ready(function () {
    let progress_surat_table = $("#progresSuratTable").DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        order: [[0, "desc"]],
        pagingType: "full_numbers",
        paging: true,
        pageLength: 10,
        ajax: {
            async: true,
            url: "/api/dashboard/progress-surat",
            type: "post",
            dataType: "json",
            error: function () {
                Swal.fire({
                    text: "Connection problem, please try again later",
                    icon: "error",
                    confirmButtonText: "Ok",
                });
            },
        },
        columns: [
            {
                data: null,
                orderable: false,
                searchable: false,
                render: function (data, type, row, meta) {
                    return meta.row + meta.settings._iDisplayStart + 1;
                },
            },
            {
                data: "tanggal_pengiriman",
                name: "tanggal_pengiriman",
            },
            {
                data: "penerima",
                name: "penerima",
            },
            {
                data: "perihal",
                name: "perihal",
            },
            {
                data: "status",
                name: "status",
                render: function (data, type, row, meta) {
                    switch (data) {
                        case 0:
                            return `<span class="badge bg-success">Diproses</span>`;
                            break;
                        case 1:
                            return `<span class="badge bg-danger">Ditolak</span>`;
                            break;
                        default:
                            return `<span class="badge bg-light">Status tidak tersedia</span>`;
                            break;
                    }
                },
            },
        ],
        columnDefs: [
            {
                targets: 5,
                render: function (data, type, row, meta) {
                    return `<button class="btn btn-info">Detail</button>`;
                },
            },
        ],
    });
});

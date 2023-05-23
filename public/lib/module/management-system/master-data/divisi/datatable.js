$(document).ready(function () {
    let tabelMasterDataDivisi = $("#masterDivisi").DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        order: [[0, "desc"]],
        pagingType: "full_numbers",
        paging: true,
        pageLength: 10,
        ajax: {
            async: true,
            url: "/api/eoffice/managements/system/master-data/divisions",
            type: "POST",
            dataType: "json",
            error: function () {
                Swal.fire({
                    text: "Connection problem, please try again later!",
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
                data: "kode_divisi",
                name: "kode_divisi",
            },
            {
                data: "nama_divisi",
                name: "nama_divisi",
            },
        ],
        columnDefs: [
            {
                target: 3,
                render: function (data, type, row, meta) {
                    return `
                    <div>
                        <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" id="btnEditMasterDivisi"><i class="bi bi-pen-fill"></i></button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus" id="btnHapusMasterDivisi"><i class="bi bi-trash2-fill"></i></button>
                    </div>
                `;
                },
            },
        ],
    });

    $("#masterDivisi tbody").on("click", "#btnEditMasterDivisi", function () {
        let modal = $("#edit-master-division");
        let data = tabelMasterDataDivisi.row($(this).parents("tr")).data();

        modal.find("#id").val(data.id);
        modal.find("#kode_divisi").val(data.kode_divisi);
        modal.find("#nama_divisi").val(data.nama_divisi);
        modal.modal("show");
    });

    $("#masterDivisi tbody").on("click", "#btnHapusMasterDivisi", function () {
        let modal = $("#delete-master-division");
        let data = tabelMasterDataDivisi.row($(this).parents("tr")).data();

        modal.find("#id").val(data.id);
        modal.find("#nama_divisi").html(data.nama_divisi);
        modal.modal("show");
    });
});

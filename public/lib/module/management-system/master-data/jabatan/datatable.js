$(document).ready(function () {
    let tableMasterDataJabatan = $("#masterJabatan").DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        order: [[0, "desc"]],
        pagingType: "full_numbers",
        paging: true,
        pageLength: 10,
        ajax: {
            async: true,
            url: "/api/eoffice/managements/system/master-data/positions",
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
                data: "kode_jabatan",
                name: "kode_jabatan",
            },
            {
                data: "nama_jabatan",
                name: "nama_jabatan",
            },
        ],
        columnDefs: [
            {
                target: 3,
                render: function (data, type, row, meta) {
                    return `
                    <div>
                        <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" id="btnEditMasterJabatan"><i class="bi bi-pen-fill"></i></button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus" id="btnHapusMasterJabatan"><i class="bi bi-trash2-fill"></i></button>
                    </div>
                `;
                },
            },
        ],
    });

    $("#masterJabatan tbody").on("click", "#btnEditMasterJabatan", function () {
        let modal = $("#edit-master-positions");
        let data = tableMasterDataJabatan.row($(this).parents("tr")).data();

        modal.find("#id").val(data.id);
        modal.find("#kode_jabatan").val(data.kode_jabatan);
        modal.find("#nama_jabatan").val(data.nama_jabatan);
        modal.modal("show");
    });

    $("#masterJabatan tbody").on(
        "click",
        "#btnHapusMasterJabatan",
        function () {
            let modal = $("#delete-master-positions");
            let data = tableMasterDataJabatan.row($(this).parents("tr")).data();
            modal.find("#id").val(data.id);
            modal.find("#nama_jabatan").html(data.nama_jabatan);
            modal.modal("show");
        }
    );
});

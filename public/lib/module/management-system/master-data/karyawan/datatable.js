$(document).ready(function () {
    let tableMasterKaryawan = $("#masterKaryawan").DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        order: [[0, "desc"]],
        pagingType: "full_numbers",
        paging: true,
        pageLength: 10,
        ajax: {
            async: true,
            url: "/api/eoffice/managements/system/master-data/employees",
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
                data: "nip",
                name: "nip",
            },
            {
                data: "nama",
                name: "nama",
            },
            {
                data: "tempat_tgl_lahir",
                name: "tempat_tgl_lahir",
            },
            {
                data: "alamat",
                name: "alamat",
            },
            {
                data: "no_hp",
                name: "no_hp",
            },
            {
                data: "start_date",
                name: "start_date",
            },
            {
                data: "end_date",
                name: "end_date",
            },
            {
                data: "divisi",
                name: "divisi",
            },
            {
                data: "jabatan",
                name: "jabatan",
            },
        ],
        columnDefs: [
            {
                target: 10,
                render: function (data, type, row, meta) {
                    return `
                    <div>
                        <button type="button" class="btn btn-warning" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Edit" id="btnEditMasterKaryawan"><i class="bi bi-pen-fill"></i></button>
                        <button type="button" class="btn btn-danger" data-bs-toggle="tooltip" data-bs-placement="bottom" title="Hapus" id="btnHapusMasterKaryawan"><i class="bi bi-trash2-fill"></i></button>
                    </div>
                `;
                },
            },
        ],
    });

    $("#masterKaryawan tbody").on(
        "click",
        "#btnEditMasterKaryawan",
        function () {
            let modal = $("#edit-master-employee");
            let data = tableMasterKaryawan.row($(this).parents("tr")).data();
            let tempat_tgl_lahir = data.tempat_tgl_lahir.split(",");
            let tempat_lahir = tempat_tgl_lahir[0];
            let tgl_lahir = tempat_tgl_lahir[1];

            modal.find("#id").val(data.id);
            modal.find("#nip").val(data.nip);
            modal.find("#nama_karyawan").val(data.nama);
            modal.find("#tempat_lahir").val(tempat_lahir);
            modal.find("#tanggal_lahir").val(tgl_lahir);
            modal.find("#alamat").val(data.alamat);
            modal.find("#no_hp").val(data.no_hp);
            modal.find("#start_date").val(data.start_date);
            modal.find("#end_date").val(data.end_date);
            modal.find("#divisi").val(data.divisi);
            modal.find("#jabatan").val(data.jabatan);
            modal.modal("show");
        }
    );
    $("#masterKaryawan tbody").on(
        "click",
        "#btnHapusMasterKaryawan",
        function () {
            let modal = $("#delete-master-employee");
            let data = tableMasterKaryawan.row($(this).parents("tr")).data();

            modal.find("#id").val(data.id);
            modal.find("#nama_karyawan").html(data.nama);
            modal.modal("show");
        }
    );
});

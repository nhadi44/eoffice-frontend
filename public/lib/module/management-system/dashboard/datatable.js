$(document).ready(function () {
    let logTable = $("#logTable").DataTable({
        responsive: true,
        processing: true,
        serverSide: true,
        order: [[0, "desc"]],
        pagingType: "full_numbers",
        paging: true,
        pageLength: 10,
        ajax: {
            async: true,
            url: "/api/eoffice/managements/system",
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
                data: "url",
                name: "url",
            },
            {
                data: "method",
                name: "method",
                render: function (data) {
                    switch (data) {
                        case "GET":
                            return '<span class="badge bg-primary">GET</span>';
                            break;

                        case "POST":
                            return '<span class="badge bg-success">POST</span>';
                            break;

                        case "PUT":
                            return '<span class="badge bg-warning">PUT</span>';
                            break;

                        case "DELETE":
                            return '<span class="badge bg-danger">DELETE</span>';
                            break;

                        default:
                            return '<span class="badge bg-light">Method tidak terdeteksi</span>';
                            break;
                    }
                },
            },
            {
                data: "status",
                name: "status",
                render: function (data) {
                    if (data >= 200 && data <= 299) {
                        return (
                            '<span class="badge bg-success">' + data + "</span>"
                        );
                    } else if (data >= 300 && data <= 399) {
                        return (
                            '<span class="badge bg-warning">' + data + "</span>"
                        );
                    } else if (data >= 400 && data <= 499) {
                        return (
                            '<span class="badge bg-danger">' + data + "</span>"
                        );
                    } else {
                        return '<span class="badge bg-light">Status tidak terdeteksi</span>';
                    }
                },
            },
        ],
    });
});

$.ajax({
    url: '/api/admin/user-profile',
    method: 'GET',
    headers: {
        "Content-Type": "application/x-www-form-urlencoded",
        "Authorization": 'Bearer' + localStorage.getItem('accessTokenAdmin'),
    },
    success: function (data) {
        console.log(data)
    },
    error: function (data) {
        $(location).prop('href', '/')
        console.log(data)
    }
})

$(function () {
    var table = $('.user_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/api/admin/appointment",
        columns: [
            {data: 'customer_name', name: 'customer_name'},
            {data: 'customer_surname', name: 'customer_surname'},
            {data: 'customer_phoneNumber', name: 'customer_phoneNumber'},
            {data: 'appointment_adress', name: 'appointment_adress'},
            {data: 'appointment_date', name: 'appointment_date'},
            {data: 'appointment_status', name: 'appointment_status'},
            {data: 'user.name', name: 'user.name'},
            {data: 'eta', name: 'eta'},
            {
                data: 'action',
                name: 'action',
                orderable: true,
                searchable: true
            },
        ]
    });
});

$('body').on('click', '#edit', function () {
    var personalID = $(this).data('id');
    $.get('/api/admin/appointment' + '/' + personalID + '/edit', function (data) {
        $('#customer_name').val(data.customer_name);
        $('#customer_surname').val(data.customer_surname);
        $('#customer_phoneNumber').val(data.customer_phoneNumber);
        $('#customer_adress').val(data.customer_adress);
        $('#customer_email').val(data.customer_email);
        $('#appointment_adress').val(data.appointment_adress);
        $('#appointment_date').val(data.appointment_date);
        $('#onUpdate').on('click', function () {
            $.ajax({
                data: $('#Form').serialize(),
                url: '/api/admin/appointment' + '/' + data.id,
                dataType: 'json',
                type: 'PUT',
                success: function (data) {
                    $('#closeUpdateModal').click();
                    $(location).prop('href', '/admin/dashboard')
                },
                error: function (data) {
                    console.log('error', data)
                    alert('error')
                }
            })
        })
    })
})

$('body').on('click', '#delete', function () {
    var personalDeleteID = $(this).data('id');
    $.ajax({
        url: "/api/admin/appointment" + '/' + personalDeleteID,
        type: 'DELETE',
        success: function (data) {
            alert('successfully deleted')
            $(location).prop('href', '/admin/dashboard')
        },
        error: function (data) {
            console.log('error', data)
        }
    })
})

$.ajax({
    url: '/api/auth/user-profile',
    method: 'GET',
    headers: {
        "Content-Type": "application/x-www-form-urlencoded",
        "Authorization": 'Bearer' + localStorage.getItem('accessToken'),
    },
    success: function (data) {
    },
    error: function () {
        $(location).prop('href', '/user-login')
    }
})

$(function () {
    var table = $('.user_datatable').DataTable({
        processing: true,
        serverSide: true,
        ajax: "/api/admin/userAppointment",
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

$('body').on('click', '#detail', function () {
    var personalID = $(this).data('id');
    $.get('/api/admin/appointment' + '/' + personalID + '/edit', function (data) {
        $('#customer_name').val(data.customer_name);
        $('#customer_surname').val(data.customer_surname);
        $('#customer_phoneNumber').val(data.customer_phoneNumber);
        $('#customer_adress').val(data.customer_adress);
        $('#customer_email').val(data.customer_email);
        $('#appointment_adress').val(data.appointment_adress);
        $('#appointment_date').val(data.appointment_date);
        $('#select').append('<option value="' + data.user.id + '">' + data.user.name + '</option>')
        $.ajax({
            url: data.api.api_url,
            method: 'get',
            dataType: 'json',
            success: function (data) {
                $.each(data.rows, function (index, value) {
                    $.each(value.elements, function (index, value) {
                        var duration = value.duration.text;
                        localStorage.setItem('duration', duration);
                    })
                })
            },
            error: function (data) {
                console.log(data)
            }
        })
        $('#onUpdate').on('click', function () {
            $.ajax({
                data: {
                    appointment_status: 'going to the address',
                    eta: localStorage.getItem('duration'),
                },
                url: '/api/admin/appointment' + '/' + data.id,
                dataType: 'json',
                type: 'PUT',
                success: function (data) {
                    $('#closeUpdateModal').click();
                    $(location).prop('href', '/profile/dashboard')
                },
                error: function (data) {
                    console.log('error', data)
                    alert('error')
                }
            })
        })
    })
})

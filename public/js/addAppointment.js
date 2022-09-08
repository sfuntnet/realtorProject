$.ajax({
    url: '/api/admin/get-user',
    method: 'GET',
    type: 'json',
    success: function (data) {
        $.each(data, function (index, value) {
            $('#select').append('<option value="' + value.id + '">' + value.name + '</option>')
        })
    }
})

$('#onSave').on('click', function () {
    $.ajax({
        url: '/api/admin/appointment',
        method: 'POST',
        dataType: 'json',
        data: $('#Form').serialize(),
        success: function (data) {
            alert('appointment created')
            console.log(data)
            $(location).prop('href', '/admin/dashboard')
        },
        error: function (data) {
            alert('Error')
            console.log(data)
        }
    })
})

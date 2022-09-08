$('#onSubmit').on('click', function () {
    $.ajax({
        url: '/api/admin/login',
        method: 'POST',
        dataType: 'json',
        data: $('#Form').serialize(),
        success: function (data) {
            console.log(data.access_token)
            var accessToken = data.access_token;
            localStorage.setItem('accessTokenAdmin', accessToken);
            $(location).prop('href', '/admin/dashboard')
        },
        error: function (data) {
            alert('error Login')
            console.log(data)
        }
    })
})

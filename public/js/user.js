$('#onSubmit').on('click', function () {
    $.ajax({
        url: '/api/auth/login',
        method: 'POST',
        dataType: 'json',
        data: $('#FormLogin').serialize(),
        success: function (data) {
            console.log(data.access_token)
            var accessToken = data.access_token;
            var userId = data.user.id;
            localStorage.setItem('accessToken', accessToken);
            localStorage.setItem('userId', userId);
            $(location).prop('href', '/profile/dashboard')
        },
        error: function (data) {
            alert('error Login')
            console.log(data)
        }
    })
})
$('#saveButton').on('click', function () {
    $.ajax({
        type: 'POST',
        url: '/api/auth/register',
        dataType: 'json',
        data: $('#FormRegister').serialize(),
        success: function (data) {
            $(location).prop('href', '/user-login')
        },
        error: function (data) {
            $('.error').append("<div class='btn btn-danger'>error</div>")
        }
    })
})


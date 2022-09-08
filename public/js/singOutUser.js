$.ajax({
    url: '/api/auth/logout',
    method: 'POST',
    headers: {
        "Content-Type": "application/x-www-form-urlencoded",
        "Authorization": 'Bearer' + localStorage.getItem('accessToken'),
    },
    success: function (data) {
        $(location).prop('href', '/user-login')
    },
    error: function () {
        $(location).prop('href', '/user-login')
    }
})

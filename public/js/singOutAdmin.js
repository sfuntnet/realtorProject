$.ajax({
    url: '/api/admin/logout',
    method: 'POST',
    headers: {
        "Content-Type": "application/x-www-form-urlencoded",
        "Authorization": 'Bearer' + localStorage.getItem('accessTokenAdmin'),
    },
    success: function (data) {
        $(location).prop('href', '/')
    },
    error: function () {
        $(location).prop('href', '/')
    }
})

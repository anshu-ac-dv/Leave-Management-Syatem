$(document).ready(function() {
    $("#login-form").submit(function(event) {
        event.preventDefault();
        var username = $("#username").val();
        var password = $("#password").val();
        if (username == "" || password == "") {
            $("#error-message").text("Please enter username and password");
        } else if (username != "admin" || password != "admin123") {
            $("#error-message").text("Invalid username or password");
        } else {
            $("#error-message").text("");
            $("#login-form")[0].submit();
        }
    });
});
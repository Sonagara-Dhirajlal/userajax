<?php

include "./includes/connection.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP CRUD Ajax</title>
</head>
<body>
    <form>
        <input type="text" id="username"  autofocus />
        <input type="text" id="password" />
        <input type="button" value="Submit" onclick="insertData()" />
    </form>

    <table border="1">
        <thead>
            <th>Username</th>
            <th>Password</th>
        </thead>
        <tbody id="tableBody">

        </tbody>
    </table>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.7.1/jquery.min.js"></script>
    <script>

        $(dispalyData());

        function dispalyData(){
            $.ajax({
                url : "./api/fetchAll.php",
                type: "POST",
                success: function(response){
                    console.log(response.users);
                    
                    let html = ''
                    for(let i = 0; i < response.users.length; i++){
                        html += `
                        <tr>
                            <td>${response.users[i].Username}</td>
                            <td>${response.users[i].Password}</td>
                        </tr>
                        `
                    }
                    $("#tableBody").html(html);
                }
            });
        }

        function insertData() {
                let data = {
                    username: $("#username").val(),
                    password: $("#password").val(),
                }

                $.ajax({
                    url: "./api/insert.php",
                    type: "POST",
                    data: data,
                    success: function(response) {
                        alert("Data inserted successfully");
                        $('#username').val('');
                        $('#password').val('');
                        $('#username').focus();
                    },
                    error: function(e) {
                        console.log('error');
                    }
                });
                }
    </script>
</body>
</html>
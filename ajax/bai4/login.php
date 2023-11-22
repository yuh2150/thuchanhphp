<!DOCTYPE html>
<html>

<head>
    <title>Login</title>
    <meta charset=utf-8>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.0/jquery.min.js"></script>
    <style> 
        body {
            margin: 80px 200px;
            font: normal 14pt Arial;
            color: navy;
        }

        input {
            border: solid 1px silver;
            padding: 3px;
            font: normal 14pt Arial;
            color: blue;
            padding: 3px 5px
        }

        fieldset {
            border: solid 2px green;
            border-radius: 8px;
            width: 335px;
            background-color: #DAFEF3;
        }

        div {
            width: 335px;
            border: solid 1px silver;
            padding: 10px 15px;
            font: normal 14pt Arial;
            color: green;
            background-color: yellow;
            box-shadow: 2px 2px black;
        }

        legend {
            color: red
        }

        input[type=button] {
            float: right;
            padding: 5px 10px
        }
    </style>
    <script>
        $(document).ready(function() {
            $("#sm").click(function(event) {
                $.get(
                    "check.php", {
                        user: $("#user").val(),  // user get data -> check ($_GET['user'])
                        pass: $("#pass").val()
                    },
                    function(data) {
                        $('#nt').css("display", "block");
                        $("#nt").slideDown("slow");
                        $("#nt").html(data);
                    }
                );
            });
        });
    </script>
    
</head>

<body>
    <fieldset>
        <img src='images/dhdn.gif' />
        <hr>
        <legend><b>LOGIN</b></legend>
        <table>
            <tr>
                <td style="width:30%">User name</td>
                <td style="width:70%">
                    <input type=text id=user onFocus="empty();">
            </tr>
            <tr>
                <td>Password</td>
                <td>
                    <input type=password id=pass>
            </tr>
            <tr>
                <td colspan=2>
                    <br>
                    <input id=sm type=button value=Submit>
            </tr>
        </table>
    </fieldset>
    <br>
    <div id=nt style='display:none;'>Notice:</div>
</body>

</html>
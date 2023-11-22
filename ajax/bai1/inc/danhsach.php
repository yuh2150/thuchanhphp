<!doctype html>
<html>

<head>
    <meta charset="utf-8">
    <title>DANH SACH LOP AJAX</title>
    <link href="style/style.css" type="text/css" rel="stylesheet">
    </link>
    <style>
        body {
            font-size: 11pt
        }
        div {
            padding: 3px 5px;
            font: normal 13pt Arial;
        }
        table {
            background-color: #eaeaea;
        }
        td {
            font: normal 11pt Arial
        }
        .hd {
            background-color: navy;
            color: white
        }
        .hd td{
            width: 100px;
        }
    </style>
    <script>
        function sendajax() {
            lop = document.getElementById("lop").value;
            objds = document.getElementById("ds");
            xml = new XMLHttpRequest();
            xml.onreadystatechange = function() {
                if (xml.readyState == 4) {
                    objds.innerHTML = xml.responseText;
                }
            }
            url = "ds.php?lop=" + lop;
            xml.open("GET", url, "false");
            xml.send();
        }
    </script>
</head>

<body>
    <h3>In danh sách theo từng lớp</h3>
    <?php
    include("connect.inc");
    function initClass($conn)
    {
        $query = "SELECT  DISTINCT lop FROM sinhvien";  
        $result = mysqli_query($conn, $query);
        $str = "Chọn lớp: <select id=lop onChange='sendajax();'>";
        while ($row = mysqli_fetch_array($result)) {
            $str .= "<option value=" . $row['lop'] . ">" . $row['lop'] . "</option>";
        }
        $str .= "</select>";
        echo $str;
    }
    initClass($conn);
    ?>
    <hr>
    <div id=ds>Danh sách</div>
</body>

</html>
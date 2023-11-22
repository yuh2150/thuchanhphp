<?php

class Dao{
    private $con;
    function __construct($user, $pass, $db) {
        $host = $_SERVER['SERVER_NAME'];
        $this->con = mysqli_connect($host, $user, $pass, $db);
    }
    
    public function query($query)  {
        mysqli_query($this->con, "set names 'utf8'");
        $result = mysqli_query($this->con, $query);
        if (!$result) {
            // Xử lý lỗi và hiển thị thông báo
           echo "sai";
        }else
    
        return $result; 
    }
    function table($query, $header) {
        $result = $this->query($query);
        $fieldinfo = mysqli_fetch_fields($result);
        $str = "<table><tr>";
        foreach ($fieldinfo as $val) {
            $name = $val->name;
            $str .= "<th>" . $name . "</th>";
        }
        $str .= "</tr>";


        while ($row = mysqli_fetch_array($result)) {
            $str .= "<tr>";
            foreach ($fieldinfo as $val) {
                $name = $val->name;
                $str .= "<td>" . $row[$name] . "</td>";
            }
            $str .= "</tr>";
        }
        
        $str .="</table>";

        echo "<h3>($header}</h3>";
        echo $str;
    }
}
?>
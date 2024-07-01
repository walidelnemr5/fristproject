<?php 

$server = "localhost";
$username = "root";
$password = "";
$db = "fristproject";

$conn = mysqli_connect($server,$username,$password,$db);

if(!$conn)
{
    echo "Error In Connection : ".mysqli_connect_error();
    return false;
}
function db_insert($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Added Success";
    }
    return false;
}



 

function db_update($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Updated Success";
    }
    return false;
}






function getRows($table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` ";
    
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $rows[] = $row;
        }
    }
   return $rows;
}



function getRow($field,$id,$table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` WHERE `$field`='$id' ";
    $result = mysqli_query($conn,$sql);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        $rows[] = mysqli_fetch_assoc($result);
    }
    if(count($rows)>0)
    {
        return $rows[0];
    }
    else 
    {
        return false;
    }

    

}



function chekRow($table,$field,$value)
{
    global $conn;
    $sql = "SELECT * FROM `$table` WHERE `$field`='$value' ";
    $result = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        return true;
    }

    return false;

}






function deleteRow($sql)
{
    global $conn;
    $result = mysqli_query($conn,$sql);
    if($result)
    {
        return "Deleted Success";
    }
    return false;
}




function count_table($table)
{
    global $conn;
    $sql = "SELECT * FROM `$table` ";
    
    $result = mysqli_query($conn, $sql);
    if(!$result)
    {
        echo mysqli_error($conn);
    }
    $rows = [];
    if(mysqli_num_rows($result) > 0)
    {
        while ($row = mysqli_fetch_assoc($result)) 
        {
            $rows[] = $row;
        }
    }
   return count($rows);
}

<?php
session_start();
if($_SESSION["superiorcheck"]==0)
{
    include("connection.php");
    $vacant=$_SESSION["freesuperior"];
    $sql="UPDATE room SET vacant=\"$vacant\" where id=\"1\"";
    $result=mysqli_query($link,$sql);
    if($result)
    {
        header("location:DatabaseInsertion.php");
    }
    else
    {
        echo die(mysqli_error($con));
    }
}
else if($_SESSION["deluxecheck"]==0)
{
    include("connection.php");
    $vacant=$_SESSION["freedeluxe"];
    $sql="UPDATE room SET vacant=\"$vacant\" where id=\"2\"";
    $result=mysqli_query($link,$sql);
    if($result)
    {
        header("location:DatabaseInsertion.php");
    }
    else
    {
        echo die(mysqli_error($con));
    }
}
else if($_SESSION["sdeluxecheck"]==0)
{
    include("connection.php");
    $vacant=$_SESSION["freesdeluxe"];
    $sql="UPDATE room SET vacant=\"$vacant\" where id=\"3\"";
    $result=mysqli_query($link,$sql);
    if($result)
    {
        header("location:DatabaseInsertion.php");
    }
    else
    {
        echo die(mysqli_error($con));
    }
}
else if($_SESSION["savercheck"]==0)
{
    include("connection.php");
    $vacant=$_SESSION["freesaver"];
    $sql="UPDATE room SET vacant=\"$vacant\" where id=\"4\"";
    $result=mysqli_query($link,$sql);
    if($result)
    {
        header("location:DatabaseInsertion.php");
    }
    else
    {
        echo die(mysqli_error($con));
    }
}
?>
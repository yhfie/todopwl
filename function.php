<?php
include "connection.php";

if (isset($_GET['action'])) {
    $id = $_POST['id'];
    $xtask = $_POST['task'];
    $xdeadline = $_POST['deadline'];

    switch ($_GET['action']) {
        case 'add':
            tambah($xtask, $xdeadline);
            break;
        case 'edit':
            edit($id, $xtask, $xdeadline);
            break;
        case 'delete':
            hapus($id);
            break;
        case 'complete':
            complete($id);
            break;
    }
}

function tambah($xtask, $xdeadline) {
    global $conn;

    if (!empty($_POST['task'])) {
        $xtask = $_POST['task'];
        $xdeadline = $_POST['deadline'];
        $sql = "INSERT INTO whatodo (task_name, task_deadline) VALUES ('$xtask', '$xdeadline')";
        mysqli_query($conn, $sql);
    }

    header('location: dashboard.php');
}

function hapus($id){
    global $conn;
    $id = $_POST['id'];

    $sql = "DELETE FROM whatodo WHERE id=$id";
    mysqli_query($conn, $sql);
    mysqli_close($conn);

    header('location: dashboard.php');
}
function edit($id){
    
}

function complete($id) {
    global $conn;

    $id = $_POST['id'];
    $sql = "UPDATE whatodo SET task_completed=1 WHERE id=$id";
    mysqli_query($conn, $sql);
    mysqli_close($conn);
}

function getTasks($conn) {
    $sql = "SELECT * FROM whatodo ORDER BY task_deadline ASC";
    $result = mysqli_query($conn, $sql);
    if (!$result) {
        printf("Error: %s\n", mysqli_error($conn));
        exit();
    }
    $tasks = mysqli_fetch_all($result, MYSQLI_ASSOC);

    return $tasks;
}

?>

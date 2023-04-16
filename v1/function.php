<?php
include 'connection.php';

if (isset($_GET['action'])) {
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
            complete();
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

    header('location: index.php');
}

function edit($id, $xtask, $xdeadline){
    global $conn;

    if (!empty($_POST['task']) && !empty($_POST['deadline'])) {
        $id = $_GET['id'];
        $xtask = $_POST['task'];
        $xdeadline = $_POST['deadline'];
        $sql = "UPDATE whatodo SET task_name='$xtask', task_deadline='$xdeadline' WHERE id=$id";
        mysqli_query($conn, $sql);
    }

    header('location: index.php');
}

function hapus($id){
    global $conn;

    $id = $_GET['id'];
    $sql = "DELETE FROM whatodo WHERE id=$id";
    mysqli_query($conn, $sql);

    header('location: index.php');
}

function complete() {
    global $conn;

    $id = $_GET['id'];
    $sql = "UPDATE whatodo SET task_completed=1 WHERE id=$id";
    mysqli_query($conn, $sql);

    header('location: index.php');
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

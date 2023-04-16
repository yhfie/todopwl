<?php
    include 'function.php';
    include 'connection.php';

    //cek tombol add
    if (isset($_POST['add'])){
        $xtask = $_POST['task'];
        $xdeadline = $_POST['deadline'];

        tambah($xtask, $xdeadline);

        header("location: dashboard.php");
        //echo "<script>location='dashboard.php'</script>";
    }

    //cek tombol edit
    if (isset($_POST['edit'])){
        $id = $_POST['id'];
        $xtask = $_POST['task'];
        $xdeadline = $_POST['deadline'];

        edit($id, $xtask, $xdeadline);
    }

    //cek tombol hapus
    if (isset($_POST['hapus'])){
        $id = $_POST['id'];

        hapus($id);
    }

    
    $tasksTake = "SELECT * FROM whatodo ORDER BY task_deadline ASC";
    $tasks = mysqli_query($conn, $tasksTake);
    $tasksData = mysqli_fetch_assoc($tasks);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My List</title>
    <!-- <link rel="stylesheet" href="bootstrap/bootstrap.min.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://db.onlinewebfonts.com/c/1db29588408eadbd4406aae9238555eb?family=Consolas" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="media/what.ico">
</head>

<body>
    <header class="">
        <!-- <h1>Logo</h1> -->
        <img src="media/whatodo.png" alt="a" class="col-4">
    </header>
    <div class="container">
        
        <div id="myHeader" class="subhead container-sm container-lg col-lg-8">
            <h1 class="">Add new list group</h1>
            <div class="inputarea" style="display: flex; justify-content: center;">
            <form action="" method="post">
                <input type="text" name="task" id="input-list" placeholder="Add new list.." class="" required> <!--menginput tasks (wajib)-->
                <input type="date" name="deadline" id="input-deadline"class=""> <!--menginput deadline (optional)-->
                <input type="submit" name="add" value="Add"> <!--submit-->
            </form>
            </div>
        </div>
        
        <div class="container" id="list-cont">
            <div class="list container-sm container-lg col-lg-8">
                
                <table>
                    <thead>
                        <tr>
                            <th>Activity</th>
                            <th>Deadline</th>
                            <th>Action</th>
                        </tr>
                    </thead>

                    <tbody>
                        <?php 
                        $sql = "SELECT * FROM task_name";
                        $result = mysqli_query($conn, $sql);
                        while($row = mysqli_fetch_assoc($tasks)) {?>  
                            <tr>
                                <!--activity-->
                                <td> <?php echo $row['task']; ?> </td> 
                                <!--deadline-->
                                <td> <?php echo $row['deadline']; ?> </td>

                                <td>
                                    <!--tombol edit-->
                                    <form action="" method="post">
                                        
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <input type="hidden" name="task" value="<?php echo $row['task']; ?>">
                                        <input type="hidden" name="deadline" value="<?php echo $row['deadline']; ?>">
                                        <button type="submit" name="edit">Edit</button>
                                    </form>

                                    <!--tombol delete-->
                                    <form action="" method="post">
                                        
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="hapus">Delete</button>
                                    </form>

                                    <!--tombol complete-->
                                    <form action="" method="post">
                                        
                                        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
                                        <button type="submit" name="complete">Complete</button>
                                    </form>

                                    <!--tombol checklist-->
                                    <?php if($row['completed']): ?>
                                        <input type="checkbox" disabled checked>
                                    <?php else: ?>
                                        <input type="checkbox" disabled>
                                    <?php endif ?>
                                </td>

                            </tr>
                        <?php } ?>
                    </tbody>
                </table>

            </div>
            <form action="index.php">
                <button class="logoutbutton btn">Logout</button>
            </form>
        </div>
    </div>

    <footer>
        <div class="peaks-footer"></div>
    </footer>
    <script src="main.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    
    
</body>
</html>
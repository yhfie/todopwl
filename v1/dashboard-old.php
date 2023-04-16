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
            <form action="">
                <input type="text" id="input-list" name="list" placeholder="Add new list.." class="">
                <input type="date" id="input-deadline" name="deadline" class="">
                <input type="submit" name="add" value="Add">
            </form>
                <!-- <form action="" class="input-form">
                    <input type="text" id="input-list" placeholder="Write anything...👀" class="list-input form-control col-sm-12">
                </form>
                <button onclick="newElement()" class="addBtn">
                        Add
                </button> -->
            </div>
        </div>
        
        <div class="container" id="list-cont">
            <div class="list container-sm container-lg col-lg-8">
                <ul id="myUL" class="">
                    <!-- <li>Hello! Welcome to #whatodo 😀</li>
                    <li class="checked">Greet user😏</li>
                    <li>Click on lists to check and uncheck them😉</li> -->
                </ul>
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
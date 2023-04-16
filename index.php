<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Whatodo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <link rel="stylesheet" href="style.css">
    <link href="https://db.onlinewebfonts.com/c/1db29588408eadbd4406aae9238555eb?family=Consolas" rel="stylesheet" type="text/css"/>
    <link rel="icon" type="image/x-icon" href="media/what.ico">
</head>
<body>
    <div class="bg"></div>

    <div class="container-login">
        <header class="">
            <!-- <h1>Logo</h1> -->
            <img src="media/whatodo.png" alt="a" class="col-4">
        </header>  
        
        <div class="divLogin container-sm container-lg col-7 col-sm-5 col-md-4 col-lg-3 col-xxl-2 col-xl-2">
            <h4>Login</h4>
            <form action="" method="" class="formLogin">
                <div class="form-group">
                    <label for="username" class="form-label">Username</label>
                    <br>
                    <input type="text" class="input-username form-control" id="username" name="username">
                </div>
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <br>
                    <input type="password" class="input-password form-control" id="password" name="password">
                </div>
            </form>
            <form action="dashboard.php">
                <button class="loginbutton btn w-100">Login</button>
            </form>
        </div>
    </div>

    <script href="main.js"></script>
    <script href="bootstrap/bootstrap.min.js"></script>
    <script>
        window.addEventListener("load",
            function(){
                setTimeout(
                    function open(event){
                        alert("Silakan input username dan password apapun :)");
                    },1500
                )
            }
        );
    </script>
</body>
</html>
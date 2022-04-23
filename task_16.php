<?php 

session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
        <meta charset="utf-8">
        <title>
            Подготовительные задания к курсу
        </title>
        <meta name="description" content="Chartist.html">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no, user-scalable=no, minimal-ui">
        <link id="vendorsbundle" rel="stylesheet" media="screen, print" href="css/vendors.bundle.css">
        <link id="appbundle" rel="stylesheet" media="screen, print" href="css/app.bundle.css">
        <link id="myskin" rel="stylesheet" media="screen, print" href="css/skins/skin-master.css">
        <link rel="stylesheet" media="screen, print" href="css/statistics/chartist/chartist.css">
        <link rel="stylesheet" media="screen, print" href="css/miscellaneous/lightgallery/lightgallery.bundle.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-solid.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-brands.css">
        <link rel="stylesheet" media="screen, print" href="css/fa-regular.css">
               <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css">
        <link rel="stylesheet" href="style.css">
    </head>
    <body class="mod-bg-1 mod-nav-link ">
        <main id="js-page-content" role="main" class="page-content">
            <div class="col-md-6" style="margin: 50px auto;">
                <div id="panel-1" class="panel">
                    <div class="panel-hdr">
                        <h2>
                            Задание 16 +17
                        </h2>
                    </div>
                    <div class="panel-container show">
                        <div class="panel-content">
                            <div class="panel-content">
                                <div class="form-group">
                                    <?php 

                                    if(isset($_SESSION['error'])){
                                            echo $_SESSION['error'];
                                        unset($_SESSION['error']);
                                        }

                                        elseif(isset($_SESSION['login'])){?>

                                            <div class="text-primary"><?php echo $_SESSION['login']; ?></div>
                                            
                                        <?php    
                                        unset($_SESSION['login']);
                                        }
                                    ?>
                                    <!-- <div class="alert alert-danger fade show" role="alert">
                                        Неверный логин или пароль
                                    </div> -->
                                    <form action="task_16_handler.php" method="post">
                                        <div class="form-group">
                                        	<label class="form-label" for="simpleinput">Email</label>
                                        <input type="text" name="email" id="simpleinput" class="form-control">
                                        </div>

                                        <label class="form-label" for="simpleinput">Password</label>
                                        <input type="password" name="password" id="simpleinput" class="form-control">
                                        <button class="btn btn-success mt-3">Submit</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </main>
        

        <script src="js/vendors.bundle.js"></script>
        <script src="js/app.bundle.js"></script>
        <script>
            // default list filter
            initApp.listFilter($('#js_default_list'), $('#js_default_list_filter'));
            // custom response message
            initApp.listFilter($('#js-list-msg'), $('#js-list-msg-filter'));
        </script>
    </body>
</html>

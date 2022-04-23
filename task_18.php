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
            <div class="row" style="margin: 50px auto;">
                <div class="col-md-6">
                    <div id="panel-1" class="panel">
                        <div class="panel-hdr">
                            <h2>
                                Задание 18 Загрузка картинок + 19 Удаление картинок
                            </h2>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-content">
                                    <div class="form-group">
                                        <form action="task_18_handler.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="form-label" for="simpleinput">Image</label>
                                            <input type="file" id="simpleinput" class="form-control" name="image">
                                            </div>
                                            <button class="btn btn-success mt-3">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-content">
                                    <h3>Задание 20 Массовая загрузка</h3>
                                    <div class="form-group">
                                        <form action="task_18_multiply.php" method="post" enctype="multipart/form-data">
                                            <div class="form-group">
                                                <label class="form-label" for="simpleinput">Images</label>
                                            <input type="file" id="simpleinput" class="form-control" name="images[]">
                                            <input type="file" id="simpleinput" class="form-control" name="images[]">
                                            <input type="file" id="simpleinput" class="form-control" name="images[]">
                                            </div>
                                            <button class="btn btn-success mt-3">Submit</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-md-6">
                    <div id="panel-1" class="panel">
                        <div class="panel-hdr">
                            <h2>
                                Загруженные картинки
                            </h2>
                        </div>
                        <div class="panel-container show">
                            <div class="panel-content">
                                <div class="panel-content image-gallery">
                                    <div class="row">

                                    <?php
                                    $pdo = new PDO('mysql:host = localhost;dbname=course_db','root','');

                                    $sql = "SELECT * FROM `images` ";

                                    $statement = $pdo->prepare($sql);

                                    $statement->execute();

                                    $result = $statement->fetchAll(PDO::FETCH_ASSOC);

                                    foreach ($result as $image) {?>

                                        <div class="col-md-3 image">
                                            <?php 

                                            $currentImg = $image['image'];

                                           
                                            ?>
                                            <img src="images/<?php echo $currentImg ?> " width="150px">
                                            <a class="btn btn-danger" href="task_18_remove.php?img=<?php echo $currentImg ?>" onclick="confirm('Вы уверены?');">Удалить</a>
                                        </div>


                                     <?php

                                    }


                                    ?>




                                        <!-- <div class="col-md-3 image">
                                            <img src="img/demo/gallery/1.jpg">
                                        </div>

                                        <div class="col-md-3 image">
                                            <img src="img/demo/gallery/2.jpg">
                                        </div>

                                        <div class="col-md-3 image">
                                            <img src="img/demo/gallery/3.jpg">
                                        </div> -->
                                    </div>
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

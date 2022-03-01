<!DOCTYPE html>
<html lang="zh-tw">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>學生系統</title>
        <link href="style.css" rel="stylesheet" type="text/css" media="all">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
        <script type = "text/javascript" src = "https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"> </script>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
    </head>
    <body>
        <?php
        /* Attempt MySQL server connection. Assuming you are running MySQL
        server with default setting (user 'root' with no password) */
        $link = mysqli_connect("localhost", "root", "*****", "main");
        
        // Check connection
        if($link === false){
            die("ERROR: Could not connect. " . mysqli_connect_error());
        }
        mysqli_set_charset($link, "utf8");//設定編碼為utf-8

        // Attempt select query execution
        $sql = "SELECT * FROM main WHERE id=" . $_POST['aaa'];
        if($result = mysqli_query($link, $sql)){
            if(mysqli_num_rows($result) > 0){
                while($row = mysqli_fetch_array($result)){
        ?>
                    <div class="stu_data">
                        <?php
                        echo "<h5>" . $row['id'] . "&nbsp;&nbsp;&nbsp;" . $row['depart'] . "</h5>";
                        echo "<h1>" . $row['name'] . "</h1>";
                        ?>
                    </div>

                    <div class="container">
                        <div>
                            <div class="col-12 col-md-12 col-xl-12 title">
                                <h4>報告影片</h4>
                            </div>
                        </div>
                        <div class="youtube">
                            <div class="col-12 col-md-12 col-xl-12 videoWrapper">
                    <?php
                                echo "<iframe width='540' height='360' src='https://www.youtube.com/embed/" . $row['video_id']  . "' frameborder='0' allow='accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture' allowfullscreen></iframe>"
                    ?>                    
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-12 col-md-6 col-xl-6">
                                <div class="title">
                                    <h4>1.	被觀察者的訊息傳達 ?</h4>
                                </div> 
                    <?php                 
                                echo "<img src='" . $row['Q1'] . "' width=100% alt='Q1'>";
                    ?>
                    
                            </div>
                            <div class="col-12 col-md-6 col-xl-6">
                                <div class="title">
                                    <h4>2.	被觀察者的肢體語言 ?</h4>
                                </div>
                    <?php
                                echo "<img src='" . $row['Q2'] . "' width=100% alt='Q2'>";
                    ?>
                            </div>
                            <div class="col-12 col-md-6 col-xl-6">
                                <div class="title">
                                    <h4>3.	被觀察者的動作和手勢 ?</h4>
                                </div>
                    <?php
                                echo "<img src='" . $row['Q3'] . "' width=100% alt='Q3'>";
                    ?>
                            </div>
                            <div class="col-12 col-md-6 col-xl-6">
                                <div class="title">
                                    <h4>4.	被觀察者與人眼神接觸是 ?</h4>
                                </div>
                    <?php
                            echo "<img src='" . $row['Q4'] . "' width=100% alt='Q4'>";
                    ?>
                            </div>
                            <div class="col-12 col-md-6 col-xl-6">
                                <div class="title">
                                    <h4>5.	被觀察者的聲音是 ?</h4>
                                </div>
                    <?php
                            echo "<img src='" . $row['Q5'] . "' width=100% alt='Q5'>";
                    ?>
                            </div>
                            <div class="col-12 col-md-6 col-xl-6">
                                <div class="title">
                                    <h4>6.	被觀察者使用語助詞的頻繁度 ?</h4>
                                </div>
                    <?php
                            echo "<img src='" . $row['Q6'] . "' width=100% alt='Q6'>";
                    ?>
                            </div>
                            <div class="col-12 col-md-6 col-xl-6">
                                <div class="title">
                                    <h4>7.	整體說話效果如何 ?</h4>
                                </div>
                    <?php
                            echo "<img src='" . $row['Q7'] . "' width=100% alt='Q7'>";
                    ?>
                            </div>
                        </div>

                        <div class="col-12 col-md-6 col-xl-6">
                            <div class="title">
                                <h4>8.	描述你對這位被觀察者的整體心得 ?</h4>
                            </div>
                        </div>
                    </div>
        <?php
                }
                mysqli_free_result($result);
            } else{
                echo "No records matching your query were found.";
            }
        } else{
            echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
        }
        
        // Close connection
        mysqli_close($link);
        ?>  
    </body>
</html>
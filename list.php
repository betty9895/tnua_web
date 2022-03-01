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
        <div class='col-12 col-md-12 col-xl-12 list_title'>
            <h1>修課名單</h1>
        </div>
        <div class='container'>
            <div class='row'>
                <div class='col-12 col-md-6 col-xl-3'>
                    <?php
                        header("Content-Type:text/html; charset=utf-8");
                        /* Attempt MySQL server connection. Assuming you are running MySQL
                        server with default setting (user 'root' with no password) */
                        $link = mysqli_connect("localhost", "root", "ouyuru0929", "main");
                            // Check connection
                            if($link === false){
                                die("ERROR: Could not connect. " . mysqli_connect_error());
                            }
                            mysqli_set_charset($link, "utf8");//設定編碼為utf-8
                                    $music = "SELECT * FROM main WHERE depart='音樂學系'";
                                    if($result = mysqli_query($link, $music)){
                                        if(mysqli_num_rows($result) > 0){
                                            echo "<table>";
                                                echo "<tr>";
                                                    echo "<th>學號/圖表</th>";
                                                    echo "<th>科系</th>";
                                                    echo "<th>姓名</th>";
                                                echo "</tr>";
                                            while($row = mysqli_fetch_array($result)){
                                                echo "<tr>";
                                                    echo "<td><form name='form1' method='post' action='main_index.php'><input type='submit' value='" . $row['id'] . "' name='aaa'></form></td>";
                                                    echo "<td>" . $row['depart'] . "</td>";
                                                    echo "<td>" . $row['name'] . "</td>";                      
                                                echo "</tr>";
                                            }
                                            echo "</table>";
                                            mysqli_free_result($result);
                                        } else{
                                            echo "No records matching your query were found.";
                                        }
                                    } else{
                                        echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                                    }
                        ?>
                </div>
                <div class='col-12 col-md-6 col-xl-3'>
                        <?php
                            $tra_music = "SELECT * FROM main WHERE depart='傳統音樂學系'";
                            if($result = mysqli_query($link, $tra_music)){
                                if(mysqli_num_rows($result) > 0){
                                    echo "<table>";
                                        echo "<tr>";
                                            echo "<th>學號/圖表</th>";
                                            echo "<th>科系</th>";
                                            echo "<th>姓名</th>";
                                        echo "</tr>";
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td><form name='form1' method='post' action='main_index.php'><input type='submit' value='" . $row['id'] . "' name='aaa'></form></td>";
                                            echo "<td>" . $row['depart'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    // Free result set
                                    mysqli_free_result($result);
                                } else{
                                    echo "No records matching your query were found.";
                                }
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        ?>
                    </div>
                    <div class='col-12 col-md-6 col-xl-3'>
                        <?php
                            $fine_art = "SELECT * FROM main WHERE depart='美術學系'";
                            if($result = mysqli_query($link, $fine_art)){
                                if(mysqli_num_rows($result) > 0){
                                    echo "<table>";
                                        echo "<tr>";
                                            echo "<th>學號/圖表</th>";
                                            echo "<th>科系</th>";
                                            echo "<th>姓名</th>";
                                        echo "</tr>";
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td><form name='form1' method='post' action='main_index.php'><input type='submit' value='" . $row['id'] . "' name='aaa'></form></td>";
                                            echo "<td>" . $row['depart'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    // Free result set

                                    mysqli_free_result($result);
                                } else{
                                    echo "No records matching your query were found.";
                                }
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        ?>
                    </div>
                    <div class='col-12 col-md-6 col-xl-3'>
                        <?php
                            $design = "SELECT * FROM main WHERE depart='劇場設計學系'";
                            if($result = mysqli_query($link, $design)){
                                if(mysqli_num_rows($result) > 0){
                                    echo "<table>";
                                        echo "<tr>";
                                            echo "<th>學號/圖表</th>";
                                            echo "<th>科系</th>";
                                            echo "<th>姓名</th>";
                                        echo "</tr>";
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td><form name='form1' method='post' action='main_index.php'><input type='submit' value='" . $row['id'] . "' name='aaa'></form></td>";
                                            echo "<td>" . $row['depart'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    // Free result set

                                    mysqli_free_result($result);
                                } else{
                                    echo "No records matching your query were found.";
                                }
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        ?>
                    </div>
                    <div class='col-12 col-md-6 col-xl-3'>
                        <?php
                            $film = "SELECT * FROM main WHERE depart='電影創作學系'";
                            if($result = mysqli_query($link, $film)){
                                if(mysqli_num_rows($result) > 0){
                                    echo "<table>";
                                        echo "<tr>";
                                            echo "<th>學號/圖表</th>";
                                            echo "<th>科系</th>";
                                            echo "<th>姓名</th>";
                                        echo "</tr>";
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td><form name='form1' method='post' action='main_index.php'><input type='submit' value='" . $row['id'] . "' name='aaa'></form></td>";
                                            echo "<td>" . $row['depart'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    // Free result set

                                    mysqli_free_result($result);
                                } else{
                                    echo "No records matching your query were found.";
                                }
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        ?>
                    </div>

                    <div class='col-12 col-md-6 col-xl-3'>
                        <?php
                            $new_media = "SELECT * FROM main WHERE depart='新媒體藝術學系'";
                            if($result = mysqli_query($link, $new_media)){
                                if(mysqli_num_rows($result) > 0){
                                    echo "<table>";
                                        echo "<tr>";
                                            echo "<th>學號/圖表</th>";
                                            echo "<th>科系</th>";
                                            echo "<th>姓名</th>";
                                        echo "</tr>";
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td><form name='form1' method='post' action='main_index.php'><input type='submit' value='" . $row['id'] . "' name='aaa'></form></td>";
                                            echo "<td>" . $row['depart'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    // Free result set

                                    mysqli_free_result($result);
                                } else{
                                    echo "No records matching your query were found.";
                                }
                            } else{
                                echo "ERROR: Could not able to execute $sql. " . mysqli_error($link);
                            }
                        ?>
                    </div>
                    <div class='col-12 col-md-6 col-xl-3'>
                        <?php

                            $animation = "SELECT * FROM main WHERE depart='動畫學系'";
                            if($result = mysqli_query($link, $animation)){
                                if(mysqli_num_rows($result) > 0){
                                    echo "<table>";
                                        echo "<tr>";
                                            echo "<th>學號/圖表</th>";
                                            echo "<th>科系</th>";
                                            echo "<th>姓名</th>";
                                        echo "</tr>";
                                    while($row = mysqli_fetch_array($result)){
                                        echo "<tr>";
                                            echo "<td><form name='form1' method='post' action='main_index.php'><input type='submit' value='" . $row['id'] . "' name='aaa'></form></td>";
                                            echo "<td>" . $row['depart'] . "</td>";
                                            echo "<td>" . $row['name'] . "</td>";
                                        echo "</tr>";
                                    }
                                    echo "</table>";
                                    // Free result set

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
                    </div>
            </div>
        </div>
    </body>
</html>

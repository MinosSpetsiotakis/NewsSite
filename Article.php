<?php
    session_start(); 
    function append_string ($str1, $str2) {
      
    // Using Concatenation assignment
    // operator (.=)
    $str1 .=$str2;
      
    // Returning the result 
    return $str1;
}
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "web programming";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT * FROM articles WHERE aid = '".htmlspecialchars($_GET["name"])."'" ;
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $title=$row["Title"];
            $Subtitle=$row["Subtitle"];
            $Content=$row["Content"];
            $ImagePath=$row["ImagePath"];
        }
    } else {
     echo "0 results";
    }
    $conn->close();
    if(isset($_POST['login']))   // it checks whether the user clicked login button or not 
{
    $servername = "localhost";
    $username = "root";
    $password = "1234";
    $dbname = "web programming";
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
     die("Connection failed: " . $conn->connect_error);
    }
    $sql = "SELECT List FROM users WHERE uid = '".$_SESSION['user']."'" ;
    $result = $conn->query($sql);
    $data;
    $newStr;
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data = (explode(",", $row['List']));
            array_push($data,htmlspecialchars($_GET["name"]));
        }
        foreach ($data as $value) {
            
            $newStr=  append_string ($newStr, $value);
            $newStr=  append_string ($newStr, ',');
            
        }
        $sql1 = "UPDATE `users` SET `List`='".$newStr."' WHERE uid = '".$_SESSION['user']."'";
        $result1 = $conn->query($sql1);
    } else {
         $sql1 = "UPDATE `users` SET `List`=".htmlspecialchars($_GET["name"])." WHERE uid = '".$_SESSION['user']."'";
         $result1 = $conn->query($sql1);  
    }
    $conn->close();
}
   
   $content = ('
   <link href="article.css" rel="stylesheet" />
   <div class="row article-cont">
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
            <img class="banner-img " src="assets/images/left2.png"  />
        </div>
        <div class="col-lg-10 col-md-10 col-sm-12 col-xs-12">
        <section class="article-container">
            <div class="row">
                <div class="offset-lg-1 col-lg-10 col-md-12 col-sm-12 col-xs-12 ">
                    <h1 class="article-title">'.$title.'</h1>
                    <div class="line"></div>
                </div>
             </div>
            <div class="row">
                <div class="offset-lg-1 col-lg-8 col-md-12 col-sm-12 col-xs-12 ">
                    <h2 class="article-sub-title">'.$Subtitle.'</h2>
                </div>
                <div class="col-lg-2 col-md-12 col-sm-12 col-xs-12 ">
                    <form class = "form-signin" role = "form" method = "post">
                        <button class = "btn btn-lg btn-primary btn-block btn-login btn-list" type = "submit" name = "login">Add to List</button>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                    <img class="article-main-image" src="'.$ImagePath.'"/>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
                    <div class="article-content">'.$Content.'</div>
                </div>
            </div>
            </section>
        </div>
        <div class="col-lg-1 col-md-1 col-sm-1 col-xs-1">
        <img class="banner-img " src="assets/images/right2.png"  />
        </div>
    </div>
   ');

    include('master.php');
  
?>
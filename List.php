<?php
    session_start(); 
    function append_string ($str1, $str2) {
      
    // Using Concatenation assignment
    // operator (.=)
    $str1 .=$str2;
      
    // Returning the result 
    return $str1;
}
    $str1;
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
    $str1="";
    if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
            $data = (explode(",", $row['List']));
        }
        foreach ($data as $value) {

             $sql1 = "SELECT * FROM articles where aid=".intval ($value)."" ;
                        $result1 = $conn->query($sql1);
                        while($row1 = $result1->fetch_assoc()) {
                                $str1=  append_string ($str1, "<div class='col-lg-3 col-md-4 col-sm-12 col-xs-12'>");
                                $str1=  append_string ($str1, "<div class='content'>");
                                $str1=  append_string ($str1, "<a href='/GameReviewer/Article.php?name=".$row1['aid']."'>");
                                $str1=  append_string ($str1, "<div class='card'>");
                                $str1=  append_string ($str1, "<img class='card-img-top' src='assets/images/thumb.png' style='background:url(".$row1['ImagePath'].")center center; background-size:cover;' alt='Card image cap'>");
                                $str1=  append_string ($str1, "<div class='card-body'>");
                                $str1=  append_string ($str1, "<h5 class='card-title'>".$row1['Title']."</h5>");
                                $str1=  append_string ($str1, "<p class='card-text'>".$row1['Subtitle']."</p>");
                                $str1=  append_string ($str1, "</div>");
                                $str1=  append_string ($str1, "</div>");
                                $str1=  append_string ($str1, "</a>");
                                $str1=  append_string ($str1, "</div>");
                                $str1=  append_string ($str1, "</div>");
                            
                            
                        }
         }
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
    $sql1 = "UPDATE `users` SET `List`='' WHERE uid = '".$_SESSION['user']."'";
    $result = $conn->query($sql1);
    $conn->close();
    header("Refresh:0");
  }
   $content = ('
   <link href="article.css" rel="stylesheet" />
   <link href="assets/css/List.css" rel="stylesheet" />
    <link href="home.css" rel="stylesheet" />
         <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <img class="w-100 " src="assets/images/ReadingList.png"  />
        </div>
        <div class="row">
            '.$str1.'
        </div>
        <div class="row">
            <div class="col-lg-12 col-md-12 col-xs-12 col-sm-12">
                <form role = "form" method = "post">
                   <button class = "btn btn-lg btn-primary btn-block btn-list" type = "submit" name = "login">Clear List</button>
                </form>
            </div>
        </div>
   
   ');

    include('master.php');
  
?>
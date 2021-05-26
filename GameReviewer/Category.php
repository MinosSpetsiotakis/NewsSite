<!DOCTYPE html>
<?php



$str="";
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

$sql = "SELECT * FROM articles WHERE Category = '".htmlspecialchars($_GET["cat"])."'" ;
$result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                        $str=  append_string ($str, "<div class='carousel-item '>");
                        $str=  append_string ($str, "<a href='/GameReviewer/Article.php?name=".$row['aid']."'>");
                        $str=  append_string ($str, "<img class='w-100' src='assets/images/thumb.png' style='background:url(".$row['ImagePath'].")center center; background-size:cover;' alt='Card image cap'>");
                        $str=  append_string ($str, "<div class='carousel-caption d-none d-md-block'>");
                                $str=  append_string ($str, "<h5>".$row['Title']."</h5>");
                                $str=  append_string ($str, "<p>".$row['Subtitle']."</p>");
                                $str=  append_string ($str, "</div>");
                        $str=  append_string ($str, "</a>");
                        $str=  append_string ($str, "</div>");
                     }
                     $conn->close();



function append_string ($str1, $str2) {
      
    // Using Concatenation assignment
    // operator (.=)
    $str1 .=$str2;
      
    // Returning the result 
    return $str1;
}
  
$content = ('
<link href="category.css" rel="stylesheet" />
<link href="home.css" rel="stylesheet" />
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img class="w-100 top-banner" src="assets/images/'.htmlspecialchars($_GET["cat"]).'.png"/>
        </div>
    </div>
    <div class="row article-cont">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">'.$str.'
           
                </div>
            <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
            </a>
        </div>
               
        </div>
    </div>
    
    
    <script>
    $( document ).ready(function() {
    $(".carousel-item:first").addClass("active");
    });
        
    </script>');

    include('master.php');
?>
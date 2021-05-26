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

$sql = "SELECT * FROM homepage" ;
$result = $conn->query($sql);
                    while($row = $result->fetch_assoc()) {
                        $sql1 = "SELECT * FROM articles where aid=".$row['ARTICLE_ID']."" ;
                        $result1 = $conn->query($sql1);
                        while($row1 = $result1->fetch_assoc()) {
                            if($row['hid']<4){
                                $str=  append_string ($str, "<div class='carousel-item '>");
                                $str=  append_string ($str, "<a href='/GameReviewer/Article.php?name=".$row1['aid']."'>");
                                $str=  append_string ($str, "<img class='d-block w-100' src='assets/images/thumb.png' style='background:url(".$row1['ImagePath'].")center center; background-size:cover;' alt='Card image cap'>");
                                $str=  append_string ($str, "<div class='carousel-caption d-none d-md-block'>");
                                $str=  append_string ($str, "<h5>".$row1['Title']."</h5>");
                                $str=  append_string ($str, "<p>".$row1['Subtitle']."</p>");
                                $str=  append_string ($str, "</div>");
                                $str=  append_string ($str, "</a>");
                                $str=  append_string ($str, "</div>");
                            }else{
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
                            }
                            
                        }
                        
                     }

                $sql2 = "SELECT * FROM ARTICLES WHERE (SELECT Date FROM articles ORDER BY DATE DESC LIMIT 1) = Date or (SELECT Date FROM articles ORDER BY DATE DESC LIMIT 1) - 1 = Date" ;
                        $result2 = $conn->query($sql2);
                        while($row3 = $result2->fetch_assoc()) {
                                $str3=  append_string ($str3, "<div class='carousel-item 2-car-item '>");
                                $str3=  append_string ($str3, "<a href='/GameReviewer/Article.php?name=".$row3['aid']."'>");
                                $str3=  append_string ($str3, "<img class='d-block w-100' src='assets/images/thumb.png' style='background:url(".$row3['ImagePath'].")center center; background-size:cover;' alt='Card image cap'>");
                                $str3=  append_string ($str3, "<div class='carousel-caption d-none d-md-block'>");
                                $str3=  append_string ($str3, "<h5>".$row3['Title']."</h5>");
                                $str3=  append_string ($str3, "<p>".$row3['Subtitle']."</p>");
                                $str3=  append_string ($str3, "</div>");
                                $str3=  append_string ($str3, "</a>");
                                $str3=  append_string ($str3, "</div>");
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
<script src="assets/js/slider.js"></script>
<link href="category.css" rel="stylesheet" />
<link href="home.css" rel="stylesheet" />
    <div class="row">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
        <img class="w-100 top-banner" src="assets/images/homebanner.png"/>
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
    <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <img class="w-100" src="assets/images/editorschoice.png"/>
           </div>
    </div>
    <br/>
    <div class="row ">
    <div class=col-lg-12 col-md-12 col-sm-12 col-xs-12>
    <div class="carousel-slick">
            '.$str1.'

    </div>
    </div>
            
    </div>
    <div class="row">
           <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12 text-center">
                <img class="w-100" src="assets/images/RecentPosts.png"/>
           </div>
    </div>
    <div class="row article-cont">
        <div class="col-lg-12 col-md-12 col-sm-12 col-xs-12">
            <div id="carouselExampleControls1" class="carousel slide" data-ride="carousel">
                <div class="carousel-inner">'.$str3.'
           
                </div>
            <a class="carousel-control-prev" href="#carouselExampleControls1" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#carouselExampleControls1" role="button" data-slide="next">
                 <span class="carousel-control-next-icon" aria-hidden="true"></span>
                 <span class="sr-only">Next</span>
            </a>
        </div>
               
        </div>
    </div>
    <script>
    $( document ).ready(function() {
    $(".carousel-item:first").addClass("active");
    $(".2-car-item:first").addClass("active");
    });
        
    </script>');

    include('master.php');
?>
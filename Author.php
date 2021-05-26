
<?php
             $msg = '';
            if (isset($_POST['login'])){
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
                 $sql = "INSERT INTO `articles`(`Category`, `Subtitle`, `Rating`, `Content`, `Date`, `AuthorID`, `ImagePath`, `Title`) VALUES ('".$_POST['category']."','".$_POST['subtitle1']."','".$_POST['rating']."','".$_POST['content']."','".date("Y/m/d")."','".htmlspecialchars($_GET["user"])."','".$_POST['image']."','".$_POST['title']."')" ;
                $result = $conn->query($sql);
                echo $result;
                $conn->close();
           }   
   
   $content = ('
   
   <link href="https://cdn.quilljs.com/1.3.6/quill.snow.css" rel="stylesheet">
   <script src="https://cdn.quilljs.com/1.3.6/quill.js"></script>
       <link href="assets/css/Writer.css" rel="stylesheet" />
   <div class="row">
        <h1>Welcome Author</h1>
    </div>
<form action="" method="POST">
<div class="body">
  <div class="form-group">
    <label for="exampleFormControlInput1">Article Title</label>'.$result.'
    <input type="text" name="title" class="form-control" id="exampleFormControlInput1" placeholder="Article Title">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Article Sub Title</label>
    <input type="text" name="subtitle1" class="form-control" id="exampleFormControlInput2" placeholder="Article SUB Title">
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect3">Article Category</label>
    <input type="text" name="category" class="form-control" id="exampleFormControlInput3" placeholder="Article Category">
  </div>
   <div class="form-group">
    <label for="exampleFormControlSelect4">Article Rating</label>
    <input type="number" name="rating" class="form-control" id="exampleFormControlInput4" placeholder="Article Rating">
  </div>

  <div class="form-group">
    <label for="exampleFormControlSelect5">Image Link</label>
    <input type="text" name="image" class="form-control" id="exampleFormControlInput5" placeholder="Image Link( pls go to google right click and copy link address)">
  </div>
  <textarea name="content" id ="content"></textarea>
 

  <div id="editor" name="edit">
  <p>Hello World!</p>
  <p>Some initial <strong>bold</strong> text</p>
  <p><br></p>
  
</div>
 <button class = "btn btn-lg btn-primary btn-block btn-submit" type = "submit" name = "login" onclick="submit()">Submit Article</button>
</div>
</form>

<script>
  var quill = new Quill("#editor", {
    theme: "snow"
  });
</script>
   ');

    include('masterAuthor.php');
?>
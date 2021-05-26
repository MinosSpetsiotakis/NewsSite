
<html>
<head>
<title>My test editor - with tinyMCE and PHP</title>
<script src="https://cdn.tiny.cloud/1/2ppv3fo3trg4ag7bbitisa4fbpb3sh6pbs6w8e2zm0hu5de3/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>

<script language="javascript" type="text/javascript">
  tinyMCE.init({
    theme : "advanced",
    mode: "exact",
    elements : "elm1",
    theme_advanced_toolbar_location : "top",
    theme_advanced_buttons1 : "bold,italic,underline,strikethrough,separator,"
    + "justifyleft,justifycenter,justifyright,justifyfull,formatselect,"
    + "bullist,numlist,outdent,indent",
    theme_advanced_buttons2 : "link,unlink,anchor,image,separator,"
    +"undo,redo,cleanup,code,separator,sub,sup,charmap",
    theme_advanced_buttons3 : "",
    height:"350px",
    width:"600px"
});

</script>
</head>
<body>
 <?php echo $sHeader;?>
 <h2>Sample using TinyMCE and PHP</h2>
 <form method="post" action="<?=$_SERVER['REQUEST_URI']?>">
  <textarea id="elm1" name="elm1" rows="15" cols="80"><?php echo $sContent;?></textarea>
<br />
<input type="submit" name="save" value="Submit" />
<input type="reset" name="reset" value="Reset" />
</form>
</body>
</html>

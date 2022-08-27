<?php

        $path = './';
        $filename = 'comments.php';
        $pagename = 'Comments';
        require $path. '../../../dcConnect.inc';

         if($mysqli){
             if(isset($_POST['submit'])) {

    if ($_POST['name'] != "" && $_POST['comment'] != "") {
      // checking if submit data is blank, if not its ok
        $insert = $mysqli->prepare("insert into `comments` (name, comment) values (?,?)");
        $insert->bind_param('ss', $_POST['name'],$_POST['comment']);
        $insert->execute();
        $insert->close();
    }
  }
    else{
      // blank form data meh
        $error['err'] = "Name and/or Comment can not be empty.";
    }

}

// select all
$sql = "select * from `comments`";
$result = mysqli_query($mysqli,$sql);
    
$mysqli->close();
// PHP Header include
$page = 'Comments | References';
$path = './';
$active = "forum";
include $path.'assets/inc/header.php';
?>
    <div class="container header">
        <h1>Forum</h1>
        <hr/>
    </div>

    <div class="container">

    <div class="mainer">
      <p id="error" style="color:red;">
        <?php 
        if (isset($error['err'])) {
          echo $error['err'];
        }
        ?>
      </p>
      <!-- input form -->
      <form action="comments.php" onSubmit="return validate();" method="post">
        Name: <input type="text" id="first" name="name" />
        Comment: <input type="text" id="comment" name="comment"/>
        <input type="submit" name="submit"/>
      </form>
        <?php
        if($result) {
            while($values = mysqli_fetch_assoc($result)) {
                echo "<div><h4>".$values['name']."</h4><p>".$values['comment']."</p></div>";
            }
        }
        ?>
    </div>
    <br/>
    <hr/>

    </div>
    <br/>
    <br/>
    <br/>
    <br/>
<script>
// JS client side validation
function validate(){
    var name = document.getElementById("first");
    var comment = document.getElementById("comment");
    if (name.value == "" && comment.value == "") {
        document.getElementById("error").innerHTML = "Name and/or Comment can not be empty.";
        return false;
    }
    else{
        return true;
    }

}

</script>

<!-- PHP Footer -->
<?php
  include $path.'assets/inc/footer.php';
  ?>
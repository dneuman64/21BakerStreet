<!DOCTYPE html>
<html>
<head>
  <link rel="stylesheet" type="text/css" href="css/style.css"></link>
  <link rel="stylesheet" type="text/css" href="css/simple-slideshow-styles.css"></link>
    <link href='http://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.2.0/css/font-awesome.min.css" rel="stylesheet">
  <link rel="shortcut icon" href="img/icon.ico">
  <title>21 Baker Street - Contact</title>
    <script type="text/javascript">
    (function(d, t){
       var g = d.createElement(t),
           s = d.getElementsByTagName(t)[0];
       g.src = "http://www.foxyform.com/js.php?id=618782&sec_hash=9fe9a15e7ee&width=350px";
       s.parentNode.insertBefore(g, s);
    }(document, "script"));
</script>
</head>
<body>
       <?php include 'header.php';?>
    <div id='body'>
      <div id='contact_info'>
        <h2>Contact 21 Baker Street</h2>
            <h3>Phone:</h3><p> (605) 554-0400</p>
            <h3>Email:</h3> <a href="mailto:info@21bakerstreet.com">info@21bakerstreet.com</a>
            <h3>Visit:</h3> <p>800 21st Street SW</p> 
              <p>Huron, SD 57350</p>
          </div>
            <!-- <div id="foxyform_embed_link_618782" style="padding-right:40%;"></div> -->
            <div id='contact_form'>
              <h2>Send us a message!</h2>
              <form action="/webformmailer.php" method="post">
                <input type="hidden" name="subject" value="Submission" />
                <!-- <input type="hidden" name="redirect" value="thankyou.html" /> -->
                Name:<br><input type="text" name="name" size="40"/><br><br>
                Email:<br> <input type="text" name="email" size="40"/><br><br>
                Subject: <br> <input type="text" name="subject" size="40"/><br><br>
                Message:<br><textarea name="comments" cols="40" rows="10"></textarea><br><br>
                <input type="submit" name="submit" value="submit"/>
                <input type="hidden" name="form_order" value="alpha"/>
                <!-- <input type="hidden" name="form_delivery" value="hourly_digest"/> -->
                <input type="hidden" name="form_format" value="html"/>
              </form>
            </div>
            <br style="clear:both;"/>
    </div>
    <br><br>
          <div style="text-align:center; margin-bottom:50px;">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d2853.458427947149!2d-98.22824750000001!3d44.34163299999999!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x8787bc1bbdc125a7%3A0x35ea91cf85ae6e8a!2s800+21st+St+SW%2C+Huron%2C+SD+57350!5e0!3m2!1sen!2sus!4v1418444440319" width="600" height="450"></iframe>
          </div>
 <?php include 'footer.php';?>
</body>
</html>

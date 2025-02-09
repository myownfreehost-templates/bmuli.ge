<?
include('geturl.php');
?>
<? $subdomain = $_GET['subdomain']; ?>
<html>
<head>
<link href="data:image/x-icon;base64,AAABAAEAEBACAAAAAACwAAAAFgAAACgAAAAQAAAAIAAAAAEAAQAAAAAAQAAAAAAAAAAAAAAAAgAAAAAAAAAAAAAAHtRtAAAAAAAH4AAAD/AAABw4AAA4HAAAOBwAADgcAAA4HAAAOBwAADgcAAA4HAAAOBwAABw4AAAP8AAAB+AAAAAAAAD//wAA+B8AAPAPAADjxwAAx+MAAMfjAADH4wAAx+MAAMfjAADH4wAAx+MAAMfjAADjxwAA8A8AAPgfAAD//wAA" rel="icon" type="image/x-icon">
<Title>უფასო ვებ ჰოსტინგი</Title>
  <meta charset="UTF-8">
  <meta name="description" content="<?echo $yourdomain;?> - უფასო ვებ ჰოსტინგი.">
  <meta name="keywords" content="HTML, CSS, JavaScript, PHP, Hosting, Subdomain">
  <meta name="author" content="Mehrab Mazmanian">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0, user-scalable=no">
<link rel="stylesheet" href="bootstrap.min.css">
 <script type="text/javascript">
var searchWinHref = window.location.href;
   if(searchWinHref.indexOf("?i") > -1) { 
   window.location.href = window.location.href.split('?')[0];
   }
</script>
<style type="text/css">
#login{background: #fafafa;
position: absolute; right: 0; padding: 10px; margin: 10px;
z-index: 9; 
font-family: arial; 
visibility: hidden;
}
</style>
<script language="JavaScript" type="text/javascript">
function login(showhide){
if(showhide == "show"){
    document.getElementById('login').style.visibility="visible";
}else if(showhide == "hide"){
    document.getElementById('login').style.visibility="hidden"; 
}
}
</script>
</head>
<body> 
<div id="login"><div class="container">
<div class="row">
<div class="col"><p>
<div class="card">
<form action="http://cpanel.<?echo $yourdomain;?>/login.php" method="post">
<h6 class="card-header"><b>სამართავი პანელი</b></h6>
  <div class="card-body">
  <div class="input-group mb-3"><img style="background-color: #333333;" class="rounded mx-auto d-block img-fluid img-thumbnail" src="vpanel.png">
  </div>
<div class="input-group mb-3">
<input placeholder="მომხმარებელი" class="form-control" type="text" name="uname" maxlength="30" oninvalid="this.setCustomValidity('Enter username')" oninput="setCustomValidity('')" required></div>

<div class="input-group mb-3">
<input placeholder="პაროლი" class="form-control" type="password" name="passwd" maxlength="30" oninvalid="this.setCustomValidity('Enter password')" oninput="setCustomValidity('')" required></div>

<div class="input-group mb-3">
<input type="submit" name="submit" class="btn btn-warning" value="შესვლა" /></div>

<div class="input-group mb-3">
<a class="btn btn-secondary" href="http://cpanel.<?echo $yourdomain;?>/lostpassword.php">დაკარგე პაროლი?</a>
</div>

<div class="input-group mb-3">
<a class="btn btn-danger" href="javascript:login('hide');">დახურვა</a></div>
</form>
</div></div></p></div></div></div></div>
<div style="text-transform: uppercase; padding: 8px; margin: 8px; text-align: left; position: fixed; left: 0; top: 0;">
<a class="btn btn-outline-secondary" href="http://<?echo $yourdomain;?>"><?echo $yourdomain;?></a></div>
<div style="padding: 8px; margin: 8px; text-align: right; position: fixed; right: 0; top: 0;">
<a class="btn btn-primary" href="javascript:login('show');">შესვლა</a></div>
<div class="container text-center justify-content-center">
<div class="row justify-content-center" style="position: absolute; left: 0; right: 0; top: 20%; margin-top: -50px; width: auto; height: auto; padding: 10px; margin: 10px; color: black; font-size: 14px;"><div class="col-auto"><div class="card-body alert alert-primary" role="alert">
<h4>უფასო ვებ ჰოსტინგი</h4></div></div>
</div>
<form method="GET" action="signup.php" class="row mb-5 justify-content-center" style="padding: 5px; margin: 5px; position: absolute; top: 50%; left: 0; right: 0; margin-top: -50px; width: auto; height: auto;">
<div class="col-auto"><div class="input-group mb-3">
<span class="input-group-text">http://</span><input type='text' class="form-control" placeholder="ქვე-დომენი" value="<?echo $subdomain;?>" pattern="[a-z0-9]{4,16}" maxlength="16" oninvalid="this.setCustomValidity('Enter sub-domain')" oninput="setCustomValidity('')" name="subdomain" required>
<span class="input-group-text">.<?echo $yourdomain;?></span>
</div></div>
<div class="col-auto">
<input type="submit" class="btn btn-outline-dark" value="რეგისტრაცია" />
</div>
</form>
<div style="padding: 5px; margin: 5px; text-align: left; position: fixed; left: 0; bottom: 0; color: black;">&copy; <?php echo date('Y'); ?> <span class="badge text-bg-secondary"><a style="color: white;" href="https://ifastnet.com/portal/aff.php?aff=30975">პრემიუმი</a></span></div><div style="padding: 5px; margin: 5px; text-align: right; position: fixed; right: 0; bottom: 0;"><?php include 'stat.php'; ?></div>
</body>
</html>

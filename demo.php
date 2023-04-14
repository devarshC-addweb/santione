

<?php 
include 'header.php';
// include 'conn.php';
// if(!$_SESSION['email'])
// {
//   header('Location:login.php');
// }
// $fname=$_SESSION['email'];
// $q="SELECT fullname FROM users WHERE email='$fname'";
// $check=mysqli_query($conn,$q);
// $row=mysqli_fetch_assoc($check);
?>

<!DOCTYPE html>
<html>
<head>
<style> 
body {
  margin: 30px;
  background-color: #E9E9E9;
}

div.polaroid {
  width: 284px;
  padding: 10px 10px 20px 10px;
  border: 1px solid #BFBFBF;
  background-color: white;
  box-shadow: 10px 10px 5px #aaaaaa;
}

div.rotate_right {
  float: left;
  -ms-transform: rotate(7deg); /* IE 9 */
  -webkit-transform: rotate(7deg); /* Safari */
  transform: rotate(7deg);
}

div.rotate_left {
  float: left;
  -ms-transform: rotate(-8deg); /* IE 9 */
  -webkit-transform: rotate(-8deg); /* Safari */
  transform: rotate(-8deg);
}
</style>
</head>
<body>

<div class="polaroid rotate_right">
  <img src="pulpitrock.jpg" alt="Pulpit rock" width="284" height="213">
  <p class="caption">The pulpit rock in Lysefjorden, Norway.</p>
</div>

<div class="polaroid rotate_left">
  <img src="cinqueterre.jpg" alt="Monterosso al Mare" width="284" height="213">
  <p class="caption">Monterosso al Mare. One of the five villages in Cinque Terre, Italy.</p>
</div>

<!-- Flexbox container for aligning the toasts -->
<div aria-live="polite" aria-atomic="true" class="d-flex justify-content-center align-items-center w-100">

  <!-- Then put toasts within -->
  <div class="toast" role="alert" aria-live="assertive" aria-atomic="true">
    <div class="toast-header">
      <img src="..." class="rounded me-2" alt="...">
      <strong class="me-auto">Bootstrap</strong>
      <small>11 mins ago</small>
      <button type="button" class="btn-close" data-bs-dismiss="toast" aria-label="Close"></button>
    </div>
    <div class="toast-body">
      Hello, world! This is a toast message.
    </div>
  </div>
</div>
</body>
</html>


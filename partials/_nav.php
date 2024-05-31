<?php 
if(isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true){
  $loggedin= true;
}
else{
  $loggedin = false;
}
echo '<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <a class="navbar-brand" href="/loginsystem"></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/loginsystem/index.php">Home <span class="sr-only"></span></a>
      </li>';

      if(!$loggedin){
  echo '<li class="nav-item">
        <a class="nav-link" href="http://localhost/loginNew/depend.php">Login</a>
      </li>';
      }
      if($loggedin){
      echo '<li class="nav-item">
        <a class="nav-link" href="/loginsystem/logout.php">Logout</a> 
      </li>';
    }
       
      
    echo '</ul>
    <form class="form-inline my-2 my-lg-0">
      
    </form>
  </div>
</nav>';
?>
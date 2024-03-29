<?php 
session_start();
if (isset($_SESSION['Username']) && isset($_SESSION['Name'])) {

?>

<!DOCTYPE html>
<html>
<head>
    <title>Welcome - <?php echo $_SESSION['Name']; ?></title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous"> 
	<link rel="stylesheet" href="mama.css">
</head>
<body>
<div class="header">
                <div class="header1">
                  <a href="index.php"><img class="menu" src="crop.png"></a>
                 </div>
            </div>
<div class="allgrid">

<form action="first.php" method="post">
<input type="text" 
                  name="itemid" 
                  value="1"
                  hidden
           >
    <div class="box1">
           
            
         <div class="centerimg"><img class="picture1" src="diamond.webp">
        </div>

         <div class="boxgrid">
                 <div>
                     <img class="pic1" src="iconrox.jpg"></div>
                 <div>
                    <p class="label1">Ragnarok X: Next Generation 199 Diamonds (Sale)</p>
                    <p class="label2">ROX Diamonds</p>
                    <p class="label3">2k purchased &#183; Available Now</p>
                </div>
            </div>

            <a href="first.php?username=<?=$_SESSION['Username']?>" 
			style="justify-content: center; align-items: center; margin-bottom: 5%;" 
            class="btn btn-success">Purchase</a>
        </div>
    </form>

        <div class="box1">

            
           <div class="centerimg"><img class="picture1" src="diamond.webp">
          </div>
  
           <div class="boxgrid">
                   <div>
                       <img class="pic1" src="iconrox.jpg"></div>
                   <div>
                      <p class="label1">Ragnarok X: Next Generation 299 Diamonds (Sale)</p>
                      <p class="label2">ROX Diamonds</p>
                      <p class="label3">1.2k purchased &#183; Available Now</p>
                  </div>
              </div>
              <a href="second.php?username=<?=$_SESSION['Username']?>" 
			style="justify-content: center; align-items: center; margin-bottom: 5%;" 
            class="btn btn-success">Purchase</a>
          </div>

        <div class="box1">

            <div class="centerimg"><img class="picture1" src="diamond.webp"></div>
   
            <div class="boxgrid">
                    <div>
                        <img class="pic1" src="iconrox.jpg"></div>
                    <div>
                       <p class="label1">Ragnarok X: Next Generation 599 Diamonds (Sale)</p>
                       <p class="label2">ROX Diamonds</p>
                       <p class="label3">5k purchased &#183; Available Now</p>
                   </div>
               </div>
               <a href="third.php?username=<?=$_SESSION['Username']?>" 
			style="justify-content: center; align-items: center; margin-bottom: 5%;" 
            class="btn btn-success">Purchase</a>
           </div>

           <div class="box1">

            <div class="centerimg"><img class="picture1" src="diamond.webp"></div>
   
            <div class="boxgrid">
                    <div>
                        <img class="pic1" src="iconrox.jpg"></div>
                    <div class="tittle1">
                       <p class="label1">Ragnarok X: Next Generation 999 Diamonds (Sale)</p>
                       <p class="label2">ROX Diamonds</p>
                       <p class="label3">10k purchased &#183; Available Now</p>
                   </div>
               </div>
               <a href="fourth.php?username=<?=$_SESSION['Username']?>" 
			style="justify-content: center; align-items: center; margin-bottom: 5%;" 
            class="btn btn-success">Purchase</a>
           </div>
   
           <div class="box1">
           
            
           <div class="centerimg"><img class="picture1" src="diamond.webp">
          </div>
  
           <div class="boxgrid">
                   <div>
                       <img class="pic1" src="iconrox.jpg"></div>
                   <div>
                      <p class="label1">Ragnarok X: Next Generation 1999 Diamonds (Sale)</p>
                      <p class="label2">ROX Diamonds</p>
                      <p class="label3">2.1k purchased &#183; Available Now</p>
                  </div>
              </div>
              <a href="fifth.php?username=<?=$_SESSION['Username']?>" 
			style="justify-content: center; align-items: center; margin-bottom: 5%;" 
            class="btn btn-success">Purchase</a>
          </div>

          <div class="box1">
           
            
           <div class="centerimg"><img class="picture1" src="diamond.webp">
          </div>
  
           <div class="boxgrid">
                   <div>
                       <img class="pic1" src="iconrox.jpg"></div>
                   <div>
                      <p class="label1">Ragnarok X: Next Generation 2599 Diamonds (Sale)</p>
                      <p class="label2">ROX Diamonds</p>
                      <p class="label3">1.4k purchased &#183; Available Now</p>
                 
                  </div>
              </div>
              <a href="sixth.php?username=<?=$_SESSION['Username']?>" 
			style="justify-content: center; align-items: center; margin-bottom: 5%;" 
            class="btn btn-success">Purchase</a>
          </div>

          <div class="box1">
           
            
           <div class="centerimg"><img class="picture1" src="diamond.webp">
          </div>
  
           <div class="boxgrid">
                   <div>
                       <img class="pic1" src="iconrox.jpg"></div>
                   <div>
                      <p class="label1">Ragnarok X: Next Generation 5999 Diamonds (Sale)</p>
                      <p class="label2">ROX Diamonds</p>
                      <p class="label3">1.8k purchased &#183; Available Now</p>
                 
                  </div>
              </div>
              <a href="seventh.php?username=<?=$_SESSION['Username']?>" 
			style="justify-content: center; align-items: center; margin-bottom: 5%;" 
            class="btn btn-success">Purchase</a>
          </div>

          <div class="box1">
           
            
           <div class="centerimg"><img class="picture1" src="diamond.webp">
          </div>
  
           <div class="boxgrid">
                   <div>
                       <img class="pic1" src="iconrox.jpg"></div>
                   <div>
                      <p class="label1">Ragnarok X: Next Generation 10999 Diamonds (Sale)</p>
                      <p class="label2">ROX Diamonds</p>
                      <p class="label3">1k purchased &#183; Available Now</p>
                 
                  </div>
              </div>
              <a href="eight.php?username=<?=$_SESSION['Username']?>" 
			style="justify-content: center; align-items: center; margin-bottom: 5%;" 
            class="btn btn-success">Purchase</a>
          </div>
 </div>
 <diV class="space"></diV>
</body>
</html>

<?php
}else{
     header("Location: index.php");
     exit();
}
?>
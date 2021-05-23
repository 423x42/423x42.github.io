<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>admin panel</title>
     <link href="https://allfont.ru/allfont.css?fonts=montserrat" rel="stylesheet" type="text/css" />
    <meta charset="UTF-8">
    <title>signup</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0" />
   <script src="css/jquery-3.5.1.min.js"></script>
      <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap-theme.min.css">
    <link rel="stylesheet" type="text/css" href="css/bootstrap/css/bootstrap.min.css">
     <link rel="stylesheet" href="css/adminaut.css">
</head>
<body>
    <header>
        
    </header>
    <div>
        <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-6">
            
            </div>
             <div class="col-md-3 col-sm-3 col-xs-3">
            <div class="autorization">
              <div class="autorization_block">
                    <form action="adminavt.php" method="post">
               <lable for="username">Введите ваш логин:</lable>
               <input type="login" name=login placeholder="login">
               <lable for="password">Введите ваш пароль:</lable>
               <input  placeholder="password" type="password" name=password>
               <button class="subm" name="submit">
                   Вход
               </button>
               <div class="span_auto">
                   <span>Вход в админ панель  </span>
               </div>
               </form>
              </div>
            </div> 
            </div>
            
        </div>
        </div>
    </div>
    <footer>
        
    </footer>
</body>
</html>
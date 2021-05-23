<!DOCTYPE html> 
<html>
<head>
    <!DOCTYPE html> 
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="css/bootstrap.css">
    <script type="text/javascript" src="js/bootstrap.js"></script>

    <link rel="stylesheet" type="text/css" href="style.css">
    
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Goblin+One&family=Source+Serif+Pro:ital,wght@1,900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Oswald:wght@200&display=swap" rel="stylesheet"> 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital@1&display=swap" rel="stylesheet">
    
    
    <title>Giriş</title>
</head>
<body id="body">
    
    <nav id="bar" class="row bg-dark">

        <div class="col-xl-9 col-lg-9 col-md-9 col-sm-8 col-8" ><a id="baslik"  href="index.html";>
        <img id="baslikResmi" src="resim/Ekran Alıntısı.png" alt=""> | SAMSUN</a></div>
        
        
   
        </nav>

        <div  id="sayfa">
           
            <section>
                <main style="border-radius: 10px;" class="row col-10 m-auto mt-4 mb-4 ">
                   
                <header class="text-center m-auto "> <p style="font-size: 30px;font-weight: 100;">Giriş Yapıldı</p> </header>
                    <p>
                        <div  >
                
                            <table class="table">
                                    
                                        <tr>
                                        <td>Kullanıcı adı</td><td>:</td>
                                            <td><b>
                                            <?php
                                                echo $_POST['email']
                                            ?>
                                            <b>
                                            </td>
                                        </tr>
                                   
                                    
                                        <tr>
                                            <td>Şifre</td><td>:</td>
                                            <td><b>
                                            <?php
                                            echo $_POST['password']
                                            ?>
                                            <b>
                                            </td>
                                        </tr>
                                    
                                   
                            
                            </table>
                           	
                            <div class="row col-2 m-auto mb-3" >
                                <a  class="geri" href="index.html">Geri Dön</a>
                            </div>			
                
                        </div>
                
                
                    </p>
                </main>
           
            </section>
            <footer class="py-4 bg-dark text-white text-center">
                Web-Teknolojileri-Projesi © Yavuzhan ALBAYRAK 2021
              </footer>
              
               
           </div>
</body>
</html>


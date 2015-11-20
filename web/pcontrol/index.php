<?php session_start();?>
<!DOCTYPE html>
<html >
  <head>
    <meta charset="UTF-8">
    <title>Material Nav Header w/ Aligned Dropdowns</title>
    
    
    <link rel="stylesheet" href="css/normalizepcontrol.css">
    <link rel='stylesheet prefetch' href='http://fonts.googleapis.com/css?family=Roboto'>
    <link rel="stylesheet" href="css/style.css">
    


    
        <style>
      /* NOTE: The styles were added inline because Prefixfree needs access to your styles and they must be inlined if they are on local disk! */
      @import url(http://fonts.googleapis.com/css?family=Roboto:400,100,100italic,300,300italic,400italic,500,500italic,700,700italic,900,900italic);
* {
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

 <style>
      body {
    font-family: 'Roboto', Arial, sans-serif;
    background-color: #ebebeb;
    overflow-x: hidden;
    text-align: center;
}

header {
    width: 120%;
    height: 50px;
    margin-left: -20px;
    background-color: #00b3a0;
    box-shadow: 0 3px 6px rgba(0, 0, 0, 0.16), 0 3px 6px rgba(0, 0, 0, 0.23);
}

header > nav > div {
    float: left;
    width: 17.2%;
    height: 100%;
    position: relative;
}

header > nav > div > a {
    text-align: center;
    width: 100%;
    height: 100%;
    display: block;
    line-height: 50px;
    color: #fbfbfb;
    transition: background-color 0.2s ease;
    text-transform: uppercase;
}

header > nav > div:hover > a {
    background-color: rgba(0, 0, 0, 0.1);
    cursor: pointer;
}

header > nav > div > div {
    display: none;
    overflow: hidden;
    background-color: white;
    min-width: 200%;
    position: absolute;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.19), 0 6px 6px rgba(0, 0, 0, 0.23);
    padding: 10px;
}

header > nav > div:not(:first-of-type):not(:last-of-type) > div {
    left: -50%;
    border-radius: 0 0 3px 3px;
}

header > nav > div:first-of-type > div {
    left: 0;
    border-radius: 0 0 3px 0;
}

header > nav > div:last-of-type > div {
    right: 0;
    border-radius: 0 0 0 3px;
}

header > nav > div:hover > div {
    display: block;
}

header > nav > div > div > a {
    display: block;
    float: left;
    padding: 8px 10px;
    width: 46%;
    margin: 2%;
    text-align: center;
    background-color: #f44355;
    color: #fbfbfb;
    border-radius: 2px;
    transition: background-color 0.2s ease;
}

header > nav > div > div > a:hover {
    background-color: #212121;
    cursor: pointer;
}

h1 {
    margin-top: 100px;
    font-weight: 100;
}

p {
    color: #aaa;
    font-weight: 300;
}

@media (max-width:600px) {
    header > nav > div > div > a {
        margin: 5px 0;
        width: 100%;
    }
    header > nav > div > a > span {
        display: none;
    }
}
    </style>

    
        <script src="js/prefixfree.min.js"></script>

    
  </head>
  <body>

    <header>
    <nav>
        <div>
            <a><span>Tab </span>1</a>
            <div>
                <a>Link 1</a>
                <a>Link 2</a>
                <a>Link 3</a>
                <a>Link 4</a>
                <a>Link 5</a>
                <a>Link 6</a>
            </div>
        </div>
        <div>
            <a href="tarea.php"><span> Nova Tarea</span></a>
            
        </div>
        <div>
            <a  href="http://localhost/pbe/pcontrol/table"><span>Penjar Notes </span></a>
            
        </div>
        <div>
            <a><span>Tab </span>4</a>
            
        </div>
        <div>
            <a href="../logout.php"><span>Cerrar sesion </span></a>
            
        </div>
        
    </nav>
</header>
<h1>Bienvenido <?php echo $_SESSION['nombre_user'];?></h1>
<p>Desplazate por el navegador superior para elegir que acci&oacute;n realizar</p>

    

    
    
    
  </body>
</html>

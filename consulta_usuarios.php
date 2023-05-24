<meta charset="utf-8">
<meta name="viewport" content="widith=divice-widith, initial-scale=1">
<title>CONSULTA DE USUARIOS</title>
<link rel="stylesheet" type="text/css" href="style.css">

<link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet"> 

<link rel="stylesheet"
href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:wght@100;500&display=swap" rel="stylesheet">
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css" integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />

</head>

<body>



<header>

    <a href="#" class="Logo"><i class="ri-service-fill"></i><span>LOUMRO</span></a>
    
    <ul class="navbar">
        <li><a href="#" class="active">Consulta de usuarios</a></li>
        <li><a href="#">Sobre nosotros</a></li>
    </ul>

    

    <div class="main">
        <a href="#" class="user"><i class="ri-user-line"></i>Iniciar sesion</a>
        <a href="#">Registrate</a>
        <div class="bx bx-menu" id="menu-icon"></div>

        

    </div>

</header>
<div class="consultar">
<div class="tablaCons">
    
<?php
       include("conexion.php");
       $result = mysqli_query($conexion, "SELECT * FROM usuario");
echo 

    " 
    <div class=\"table-title\"
    <h3>CONSULTA DE USUARIOS</h3>
    </div>
    <table width= \"100\" border=\"1\" class=\"table-fill\">
    
         <thead>
         <tr>
            <th class=\"table-left\">
            ID
            </th>
            <th class=\"table-left\">
            NOMBRE
            </th>
            <th class=\"table-left\">
            E-MAIL
            </th>
            <th class=\"table-left\">
            CONTRASEÑA
            </th>
              </tr>
        </tead>
        </table>
    ";
while($consulta = mysqli_fetch_array($result)){

    echo	
    "
    <tbody  class=\"table-hover\">
    <tr>
        <th class=\"text-letf\">".$consulta['id']." </th>
        <th class=\"text-letf\">".$consulta['nombre']." </th
        <th class=\"text-letf\">".$consulta['email']." </th>
        <th class=\"text-letf\">".$consulta['contra']." </th>
    </tr>
    <\tbody>
        ";
        
}    

echo "</table>"
?>
</div>
</div>

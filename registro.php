    <meta charset="utf-8">
    <meta name="viewport" content="widith=divice-widith, initial-scale=1">
    <title>Registro</title>
    <link rel="stylesheet" type="text/css" href="style.css">

    <link href="https://cdn.jsdelivr.net/npm/remixicon@2.5.0/fonts/remixicon.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/boxicons@latest/css/boxicons.min.css">

    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@500;600&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Display:wght@100;500&display=swap" rel="stylesheet">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Shippori+Mincho&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.3.0/css/all.min.css"
          integrity="sha512-SzlrxWUlpfuzQ+pcUCosxcglQRNAq/DZjVsC0lE40xsADsfeQoEypE+enwcOiGjk/bSuGGKHEyjSoQ1zVisanQ=="
          crossorigin="anonymous" referrerpolicy="no-referrer" />

        </head>
        <body>
          <div class="Registrate">

          <header>

            <a href="#" class="Logo"><i class="ri-service-fill"></i><span>LOUMRO</span></a>
            
            <ul class="navbar">
              <a href="#" class="active">Registrate</a>
                <li><a href="#">Sobre nosotros</a></li>
            </ul>

            

            <div class="main">
                <a href="#" class="user"><i class="ri-user-line"></i>Iniciar sesion</a>
                <li><a href="#" >Inicio</a></li>
                <div class="bx bx-menu" id="menu-icon"></div>

                

            </div>

            
        </header>

            <div class="container"></div>
            
           
          <div class="container">
            <div class="noUs">Nombre de usuario:
              <input
              type="text"
              id="NomUs"
              placeholder="Escribe tu nombre de usuario"
            </div>
            <div class="reGmail">Correo electronico:
              <input
              type="email"
              id="regGmail"
              placeholder="Escribe tu correo"
            </div>
            <div class="wrapper">
              <canvas id="canvass" width="200" height="70"></canvas>
              <button id="reload-button">
                <i class="fa-solid fa-arrow-rotate-right"></i>
              </button>
            </div>
            <input
              type="text"
              id="user-input"
              placeholder="Escribe el texto de la imagen"
            />

            
            <button id="submit-button">Enviar</button>
          </div>
          <!-- Script -->
          <script src="Script2.js"></script>
        </div>
        </body>

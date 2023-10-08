<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

    
    <title>BASE DE DATOS </title>
    <link rel="stylesheet" href="styles.css">
    <style>
        /* Resetear estilos predeterminados del navegador */
        body, h1, h2, p, ul, li {
            margin: 0;
            padding: 0;
        }
        
        /* Estilo general */
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            color: #5e02df;
            line-height: 1.6;
            padding: 20px;
        }
        
        header {
            background-color: #471280;
            color: #fff;
            text-align: center;
            padding: 10px 0;
        }
        
        header h1 {
            font-size: 24px;
        }
        
        nav ul {
            list-style: none;
        }
        
        nav ul li {
            display: inline;
            margin-right: 20px;
        }
        
        nav ul li a {
            text-decoration: none;
            color: #fff;
        }
        
        main {
            max-width: 800px;
            margin: 20px auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }
        
        section {
            margin-bottom: 30px;
        }
        
        footer {
            text-align: center;
            padding: 10px 0;
            background-color: #4411aa;
            color: #fff;
        }
  
    </style>
    <head class="container fluid">
      <img src="img/Logoitca'.jpg" alt="logo" height="150" width="150"class="rounded border-Dark" class="border-lg">
      <img src="img/itca.jpg" alt="logo" height="150" width="600" class="rounded border-Dark">
    </head>
  <body>      
  
    <header>
      <h1 >INSTITUTO TECNOLOGICO DE CD ALTAMIRANO </h1>
      <nav aria-label="breadcrumb">
        <ol class="breadcrumb">
          <li class="breadcrumb-item"><a href="#">Home</a></li>
          <li class="breadcrumb-item"><a href="#">Library</a></li>
          <li class="breadcrumb-item active" aria-current="page">Data</li>
        </ol>
      </nav>
      <nav class="navbar navbar-dark bg-primary"">
        <div class="container-fluid">
          <a class="navbar-brand" href="/"><svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-house-door-fill" viewBox="0 0 16 16" alt:"logo">
            <path d="M6.5 14.5v-3.505c0-.245.25-.495.5-.495h2c.25 0 .5.25.5.5v3.5a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5v-7a.5.5 0 0 0-.146-.354L13 5.793V2.5a.5.5 0 0 0-.5-.5h-1a.5.5 0 0 0-.5.5v1.293L8.354 1.146a.5.5 0 0 0-.708 0l-6 6A.5.5 0 0 0 1.5 7.5v7a.5.5 0 0 0 .5.5h4a.5.5 0 0 0 .5-.5Z"/>
          </svg>Inicio</a>
          
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="/">Inscripcion </a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="/pagina1"></a>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  personas 
                </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/pagina2">Alumnos</a></li>
                  <li><a class="dropdown-item" href="/">coordinadores</a></li>
                  <li><a class="dropdown-item" href="/">instructor</a></li>
              
                </ul>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                      cosas
                    </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="/pagina2">rol</a></li>
                    <li><a class="dropdown-item" href="/">usuarios </a></li>
              </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                    cosas
                  </a>
                <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                  <li><a class="dropdown-item" href="/pagina2">rol</a></li>
                  <li><a class="dropdown-item" href="/">usuarios </a></li>
              </li>
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  cosas
                </a>
              <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                <li><a class="dropdown-item" href="/pagina2">rol</a></li>
                <li><a class="dropdown-item" href="/">usuarios </a></li>
            </li>
            </ul>
              </ol>
            </nav>
          </div>
          </div>
        </div>
      </nav>
    </header>
         
    <!-- Optional JavaScript; choose one of the two! -->

    <!-- Option 1: Bootstrap Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

    <!-- Option 2: Separate Popper and Bootstrap JS -->
    <!--
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-IQsoLXl5PILFhosVNubq5LC7Qb9DXgDA9i+tQ8Zj3iwWAwPtgFTxbJ8NT4GN1R8p" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" integrity="sha384-cVKIPhGWiC2Al4u+LWgxfKTRIcfu0JTxR+EQDz/bgldoEyl4H0zUF0QKbrJ0EcQF" crossorigin="anonymous"></script>
    -->
  </body>
  

</html>
       
<h1>@yield('titulo')</h1>


<hr>@yield('contenido')
<footer>
  <p>&copy; 2023 se hace lo que se puede</p>
  </footer>


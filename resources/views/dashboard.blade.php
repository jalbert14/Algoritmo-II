<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">
        <link rel="stylesheet"
        href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"/>

    </head>

    <style>
            
/* Estilos generales */

@import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap'); /*Quitar al insertar al proyecto*/

body {
    font-family: "Rubik";
    margin: 0;
    padding: 0;
    display: flex;
    flex-direction: column;
    height: 100vh;
    box-sizing: border-box;
    overflow-x: hidden; /* Evita el deslizamiento horizontal */
}

* {
    box-sizing: inherit;
}

.container {
    display: flex;
    flex: 1;
    width: 100%;
    height: 100%;
}

/* Estilos del membrete */

.membrete {
    margin-bottom: 0;
    font-size: 2em; /* Tamaño inicial del título */
    transition: transform 0.3s ease-in-out; /* Transición suave para el efecto */
}

.membrete:hover {
    transform: scale(1.2);
}

.icono-personalizado{
    color: #ffffff; /* Color del icono */
    background-color: #2E236C; /* Color de fondo */ 
    border: 1px solid #2E236C; /* Borde alrededor del icono */
    margin-right: 10px;
    border-radius: 40%; /* Bordes redondeados */
    padding: 10px; /* Espaciado interno */
    font-size: 1.5em; /* Tamaño del icono */
}

.logout-icon {
    transition: transform 0.3s ease-in-out; /* Transición suave para el efecto */
}

.logout-icon:hover {
    transform: scale(1.2); /* Agranda el título al pasar el mouse sobre él */
}

/* Estilos del sidebar */
.sidebar {
    font-family: "Rubik";
    width: 250px;
    min-width: 250px; /* Asegura que el ancho mínimo sea 250px */
    background-color: #17153B;
    color: white;
    padding: 20px;
    box-shadow: 2px 0 5px rgba(0,0,0,0.1);
    display: flex;
    flex-direction: column;
    align-items: center;
    position: fixed; /* Sidebar fijo */
    height: 100%; /* Ocupa toda la altura de la pantalla */
    overflow-y: auto; /* Permite desplazarse verticalmente si el contenido es largo */
}

.sidebar h1.menbrete {
    margin: 0;
    font-size: 1.5em;
}

.sidebar h5 {
    margin-top: 10px;
    font-size: 1em;
}

.sidebar ul {
    list-style-type: none;
    padding: 0;
    width: 100%;
    
}

.sidebar ul li {
    margin: 20px 0;
}

.sidebar ul li a {
    color: white;
    text-decoration: none;
    display: block;
    padding: 10px;
    text-align: center;
    transition: background-color 0.3s;
    text-align: left;
}

.sidebar ul li a:hover {
    background-color: #2E236C;
    border-radius: 5px;
}

/* Estilos del contenido principal */
.content {
    flex-grow: 1;
    margin-left: 250px; /* Desplaza el contenido para que no quede detrás del sidebar */
    overflow-y: auto;
    display: flex;
    flex-direction: column;
}

.header {
    background-color: #2E236C;
    color: white;
    padding: 10px 20px; /* Espaciado interno */
    width: 100%;
    display: flex;
    justify-content: space-between; /* Distribuye el espacio entre los elementos */
    align-items: center;
}

.header-title h1 {
    margin: 0; /* Quitamos el margen del título */
    font-size: 2.5em; /* Tamaño del texto */
}

.header-user {
    display: flex;
    align-items: center;
}

.header-user .user-name {
    margin-right: 10px; /* Espaciado entre el nombre y el icono */
    font-size: 1.2em; /* Tamaño del texto del nombre del usuario */
}

.header-user i {
    font-size: 2em; /* Tamaño del icono del usuario */
}

.header-user .logout-icon {
    color: #5a52b4; /* Color del icono de cerrar sesión */
}

.header-user .logout-icon:hover {
    color: #655bce; /* Color del icono de cerrar sesión al pasar el cursor */
    transform: scale(1.2); /* Agranda el título al pasar el mouse sobre él */
}

.content section {
    padding: 20px;
}

.content section h1 {
    margin-top: 0;
    text-align: center; /* Centra el texto del contenido principal */
}

/* Estilos para las migas de pan (breadcrumb) */
.breadcrumb {
    background-color: #f8f9fa;
    padding: 10px 20px;
    border-radius: 5px;
    display: flex;
    align-items: center;
}

.breadcrumb ul {
    list-style: none;
    margin: 0;
    padding: 0;
    display: flex;
}

.breadcrumb ul li {
    margin-right: 10px;
    display: flex;
    align-items: center;
}

.breadcrumb ul li a {
    text-decoration: none;
    color: #4e007a;
}

.breadcrumb ul li a:hover {
    text-decoration: underline;
}

.breadcrumb ul li:not(:last-child):after {
    content: ">";
    margin-left: 10px;
    color: #140e00;
}
                </style>

<body>
    <div id="root"></div>
    <div class="container">
      <aside class="sidebar">
        <center>
          <h1 class="membrete">SEN</h1>
          <h5 class="sub-membrete">Sistema de Gestion de Notas</h5>
        </center>
        <ul>
          <li>
            <a href="{{ route('inicio') }}""
              ><i class="fa-solid fa-home icono-personalizado"></i>Inicio</a
            >
          </li>
          <li>
            <a href="#about"
              ><i class="fa-solid fa-table icono-personalizado"></i>Gestión de
              notas</a
            >
          </li>
          <li>
            <a href="#services"
              ><i class="fa-regular fa-clipboard icono-personalizado"></i>Notas
              cargadas</a
            >
          </li>
        </ul>
      </aside>
      <main class="content">
        <header class="header">
          <div class="header-title">
            <nav class="breadcrumb">
              <ul>
                <li><a href="{{ route('dashboard') }}"">Inicio</a></li>
              </ul>
            </nav>
          </div>
          <div class="header-user">
            <span class="user-name">Nombre Usuario</span>
            <i
              class="fas fa-user-circle icono-personalizado"
              title="Usuario: esta Activo"
            ></i>
            <a href="{{ route('inicio') }}">
              <i
                class="fas fa-sign-out-alt logout-icon"
                title="Cerrar sesión"
              ></i>
            </a>
          </div>
        </header>
        <section>
          <h1>Bienvenido a mi sitio web tonotos</h1>
          <p>Aquí irá una triple hpta tabla</p>
        </section>
      </main>
    </div>
  </body>
</html>

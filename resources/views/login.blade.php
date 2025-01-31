<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>Laravel</title>
        <link rel="icon" type="image/png" sizes="32x32" href="{{ asset('favicon.png') }}">

    </head>

    <style>
            
/* ********************* INICIO ******************** */
/*                       LOGIN                       */
/* ************************************************* */


@import url('https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,300..900;1,300..900&display=swap'); 

*{
    margin: 0; 
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Rubik';  
    background-color: #C8ACD6;
    background: radial-gradient(#6847ab, #433D8B, #2E236C, #17153B, #0c031e, #0b021d );
    height: 100vh;
    display: flex;
}

/*Cabecera*/
.header{
    color: #eceff1;
    display: flex;
    justify-content:center;
    align-items: center;
    width: 100%;
    height: 85px;
    padding: 5px 10%;
    position:absolute;
    font-size:x-large;
}

.header .write{
    width: 23ch;
    animation: typing 2s steps(23), blink .5s step-end infinite alternate;
    white-space: nowrap;
    overflow: hidden;
    border-right: 3px solid;
}

@keyframes typing {
    from { width: 0 }
}

@keyframes blink{
    50% { border-color: transparent }
}
/*Cabecera*/


/* --------- INICIO --------- */
/* Estilos para el formulario */
/* -------------------------- */

    .inicio-secion{
        z-index: 2;
        width: 400px;
        height: 340px;
        background: #252323;
        opacity: 0.9;
        margin: auto;
        margin-top: 110px;
        padding: 20px 30px;
        color: white;
        border-radius: 10px;
    }

    .inicio-secion h5{
        margin: 0;
        text-align: center;
        height: 40px;
        margin-bottom: 30px;
        border-bottom: 1px solid;
        font-size: 20px;
    } 

    .controlador{
        width: 100%;
        margin-bottom: 15px;
        padding: 11px 10px;
        background: #514e4e;
        color: #f1ecf1;
        font-size: 14px;
        font-weight: bold;
        border-radius: 10px;
    }

    .container{
        width: 340px;
        display:flex;
        align-items: center;
    }

    .container .controlador{
        width: 100%;
    }

    .bx {
        margin-top: -10px;
        font-size: 30px;
        transform: translate(-35px);
        cursor: pointer;
    }

    button{
        border-radius: 8px;
        width: 100%;
        height: 40px;
        border: none ;
        margin-bottom: 16px;
        cursor: pointer;
        padding: 9px 25px;
        background: #eceff1;
        transition: 0.5s;
        object-fit: cover;
    }

    button:hover{
        background-color: #f9b700;
    }

    .inicio-secion p{
        height: 10px;
        text-align: center;
    }

    .inicio-secion a{
        color: wheat;
        text-decoration: none;
        font-size: 14px;
    }

    .inicio-secion a:hover{
        text-decoration: underline;
    }
/* ---------- FIN ------------------------------- */
/* Estilos para el formulario de inicio de sesion */
/* ---------------------------------------------- */

/*-------------------------------------*/
/*--------------Registro---------------*/
/*-------------------------------------*/

.register{
    z-index: 2;
    width: 400px;
    height: 400px;
    background: #252323;
    opacity: 0.9;
    margin: auto;
    margin-top: 110px;
    padding: 20px 30px;
    color: white;
    border-radius: 10px;
}

.register h5{
    margin: 0;
    text-align: center;
    height: 40px;
    margin-bottom: 30px;
    border-bottom: 1px solid;
    font-size: 20px;
} 
                </style>

<body>
    <header class="header">
        <h1>
            SGN
        </h1>
        <p class="write">
            | Sistema de Gestion de Notas
        </p>
    </header>

    <!--************************************** INICIO ******************************************-->
    <!--                           Formulario de inicio de sesión                               -->
    <!--****************************************************************************************-->

    <section class="inicio-secion">
    
        <h5>
            Iniciar sesión
        </h5> 

        <input class="controlador" type="text" name="user" value="" placeholder="Usuario"z>
        </input>

        <br><br>

        <div class="container">
            <input class="controlador" type="password" name="clave" value="" placeholder="Contraseña" id="pass">
            </input> 
        </div>
        <br>

        <a href="#">
            <button>
                Ingresar
            </button>
        </a>
        <p>
            <a href="{{ route('register') }}">Registrarse</a>
        </p>
    
    </section>
    <script src="./js/login.js"></script>

</body>
</html>

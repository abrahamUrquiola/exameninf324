<html>
	<head>
    <script type="text/javascript">
            function cambiaFondo(x){
                console.log(x.value);
                var body=document.getElementById("body");
                body.style.backgroundColor = x.value;
                
            }
        </script>
		<title>Examen</title>
		//<link href="hojadeestilos.css" rel="stylesheet" />
    </head>
    
    <style>
        img{
        width: 100%;
        height: 300px;
        }
        .rojo{
            background-color: #EE766A;
        }
        .verde{
            background-color: green;
        }
        .naranja{
            background-color: orange;
        }
        .azul{
            background-color: blue;
        }
    </style>
	<body id="body" background-color="green">
        <img src="welcome.jpg" alt="">
		<div id="cabecera">
		<center>Facultad de Cs. Puras y Naturales</center> 
		</div>
		

		<div class="cuerpo">
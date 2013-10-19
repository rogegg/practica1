<!doctype html>

<!--
Copyright (C) 2013 Rogelio Gil García

This program is free software: you can redistribute it and/or modify
it under the terms of the GNU General Public License as published by
the Free Software Foundation, either version 3 of the License, or
(at your option) any later version.

This program is distributed in the hope that it will be useful,
but WITHOUT ANY WARRANTY; without even the implied warranty of
MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
GNU General Public License for more details.

You should have received a copy of the GNU General Public License
along with this program. If not, see <http://www.gnu.org/licenses/>
-->


<html lang="en">
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
  <META HTTP-EQUIV="Refresh" CONTENT="60" URL="reloj.php" />
  <title>[IV]Práctica1</title>
  <style>
  html { 
  background: black; 
  }
  body {
    background: #333;
    background: -webkit-linear-gradient(top, black, #666);
    background: -o-linear-gradient(top, black, #666);
    background: -moz-linear-gradient(top, black, #666);
    background: linear-gradient(top, black, #666);
    color: white;
    font-family: "Helvetica Neue",Helvetica,"Liberation Sans",Arial,sans-serif;
    width: 40em;
    margin: 0 auto;
    padding: 3em;
  }
  a {
    color: #FFD500;
  }

  h1 {
    text-transform: capitalize;
    -moz-text-shadow: -1px -1px 0 black;
    -webkit-text-shadow: 2px 2px 2px black;
    text-shadow: -1px -1px 0 black;
    box-shadow: 1px 2px 2px rgba(0, 0, 0, 0.5);
    background: #FF8000;
    width: 22.5em;
    margin: 1em -2em;
    padding: .3em 0 .3em 1.5em;
    position: relative;
  }
  h1:before {
    content: '';
    width: 0;
    height: 0;
    border: .5em solid #91010B;
    border-left-color: transparent;
    border-bottom-color: transparent;
    position: absolute;
    bottom: -1em;
    left: 0;
    z-index: -1000;
  }
  h1:after {
    content: '';
    width: 0;
    height: 0;
    border: .5em solid #91010B;
    border-right-color: transparent;
    border-bottom-color: transparent;
    position: absolute;
    bottom: -1em;
    right: 0;
    z-index: -1000;
  }
  h2 { 
    margin: 2em 0 .5em;
    border-bottom: 1px solid #999;
  }
	pie { 
		position: relative;
    text-transform: capitalize;
    -moz-text-shadow: -1px -1px 0 black;
    -webkit-text-shadow: 2px 2px 2px black;
    text-shadow: -1px -1px 0 black;
	}	
  pre {
    background: black;
    padding: 1em 0 0;
    -webkit-border-radius: 1em;
    -moz-border-radius: 1em;
    border-radius: 1em;
    color: #9cf;
  }

  ul { 
    margin: 0; 
    padding: 0;
  }
  li {
    list-style-type: none;
    padding: .5em 0;
  }

  .brand {
    display: block;
    text-decoration: none;
  }
  .brand .brand-image {
    float: left;
    border: none;
  }
  .brand .brand-text {
    float: left;
    font-size: 24px;
    line-height: 24px;
    padding: 4px 0;
    color: white;
    text-transform: uppercase;
  }
  .brand:hover,
  .brand:active {
    text-decoration: underline;
  }

  .brand:before,
  .brand:after {
    content: ' ';
    display: table;
  }
  .brand:after {
    clear: both;
  }
  </style>
</head>
<body>
	<p style="text-align: right;">
		Hora del servidor:
		<?php
		echo "<font face=verdana size=2><b>". date('H:i a') ."</b></font>";
		?>
	</font></p>
  <h1>
	Infraestructura Virtual
  </h1>
  <h2>
	Práctica 1
  </h2>
  <p>
	Primera práctica de la asignatura Infraestructura Virtual, 4º Curso del Grado en Ingeniería Informática.
  </p>
  <pre>
	Autor: Rogelio Gil García 
    	       <a href="mailto:rogegg@correo.ugr.es">rogegg@correo.ugr.es</a>

    	       <a href="https://github.com/rogegg">Repositorios personales</a>
  </pre>
  <p>

  </p>
  
  <h2>
		Temario de la asignatura.
  </h2>
  <ul>
    <li>
      <a href="http://jj.github.io/IV/documentos/temas/Intro_concepto_y_soporte_fisico">1. Introducción: conceptos y soporte físico</a>
    </li>
    <li>
      <a href="http://jj.github.io/IV/documentos/temas/Tecnicas_de_virtualizacion">2. Técnicas de virtualización</a>
    </li>
    <li>
	  <a href="http://jj.github.io/IV/documentos/temas/Contenedores">3. Usando contenedores</a>
    </li>
	<li>
	  <a href="http://jj.github.io/IV/documentos/temas/Uso_de_sistemas">4. Uso de sistemas de virtualización</a>
	</li>
	<li>
	  <a href="http://jj.github.io/IV/">5. Virtualización de CPU y almacenamiento</a>
	</li>
	<li>
	  <a href="http://jj.github.io/IV/">6. Virtualización de aplicaciones: software como servicio.</a>
	</li>
  </ul>

  <h2>
		Prácticas
  </h2>
	<ul>
		<li>
		  1. Introducción a la computación virtual:<a href="http://jj.github.io/IV/documentos/practicas/1.PaaS"> PaaS</a>
		</li>
		<li>
		  2. Técnicas de virtualización.<a href="http://jj.github.io/IV/documentos/practicas/2.Jaula">Creación de una jaula</a>
		</li>
		<li>
		  3. Uso de sistemas de virtualización.
		</li>
		<li>
			4. Virtualización de CPU y almacenamiento.
		</li>
		<li>
			5. Virtualización de aplicaciones.
		</li>
	</ul>
	<pre>
		<a href="https://github.com/IV-GII/GII-2013">Repositorio de la asignatura</a>
	</pre>

</body>
</html>

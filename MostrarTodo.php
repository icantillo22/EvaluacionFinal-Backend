<?php
$data = file_get_contents('data-1.json');
$propiedades = json_decode($data, true);
$estructura = '';

function mostrarTodos(){
  global $estructura;
  global $propiedades;
  foreach ($propiedades as $key) {
    $estructura .= "<div class='itemMostrado card'>";
    $estructura .="<img src='img/home.jpg' alt='Demo'>";
    $estructura .="<div class='card-stacked'>";
  	$estructura .="<strong>Dirección: </strong>".$key["Direccion"]."</br>";
  	$estructura .="<strong>Ciudad: </strong>".$key["Ciudad"]."</br>";
  	$estructura .="<strong>Teléfono: </strong>".$key["Telefono"]."</br>";
  	$estructura .="<strong>Código Postal: </strong>".$key["Codigo_Postal"]."</br>";
  	$estructura .="<strong>Tipo: </strong>".$key["Tipo"]."</br>";
  	$estructura .="<strong>Precio: </strong><span class='precioTexto'>".$key["Precio"]."</span></br>";
  	$estructura .="<div class='card-action'>VENTAS</div>";
  	$estructura .="</div>";
  	$estructura .="</div>";
  }
};
mostrarTodos();
echo $estructura;

?>

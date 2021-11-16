<?php
/**
 * Este archivo se elimiará, de momento es solo
 * para ver cómo se comportan los objetos
 */

require_once '../modelos/catalogo_viaje.php';
require_once '../modelos/ruta.php';
require_once '../modelos/detalle_ruta.php';
require_once '../modelos/destino.php';

//Para manejar los detinos
$sincelejo = new destino("23O", "Sincelejo");
$medellin = new destino("843H", "Medellin");
$rioacha = new destino("34UIND", "Rioacha");
$bogota = new destino("CH8U", "Bogota");
$bucaramanga = new destino("89JIFE", "Bucaramanga");

//Para manejar el catalogo
//El catalogo necesita las rutas a traves de setRutas()
$catalogo = new catalogo_viaje("34H", date("Y"));

//Para manejar las rutas
/**
 * Los argumentos de ruta son:
 * --> Codigo
 * --> El catalogo
 * --> Origen
 * --> Destino
 * --> Forma (Escala o Directo)
 * --> Precio, valor entero
 */
$ruta1 = new ruta("45PFRE4", $catalogo->getidentificacion(), $sincelejo->getidentificacion(), $medellin->getidentificacion(), "Directo", 3400);

$detalle_ruta1_1 = new detalle_ruta($ruta1->getcodigo(), $rioacha->getidentificacion());
$detalle_ruta1_2 = new detalle_ruta($ruta1->getcodigo(), $medellin->getidentificacion());

$ruta1->setDetalleRuta($detalle_ruta1_1);
$ruta1->setDetalleRuta($detalle_ruta1_2);

//Al ya tenerse lista la ruta o las rutas, se agregan al catalogo
$catalogo->setRutas($ruta1);

echo '<h1>El primer catalogo</h1>';

var_dump($catalogo);

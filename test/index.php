<?php
/**
 * Este archivo se elimiará, de momento es solo
 * para ver cómo se comportan los objetos
 */

require_once '../modelos/catalogo_viaje.php';
require_once '../modelos/ruta.php';
require_once '../modelos/detalle_ruta.php';
require_once '../modelos/destino.php';
require_once '../modelos/tipo_empleado.php';
require_once '../modelos/empleado.php';
require_once '../modelos/usuario.php';
require_once '../modelos/tipo_comunicacion.php';
require_once '../modelos/comunicacion.php';
require_once '../modelos/medio_transporte.php';
require_once '../modelos/transporte.php';
require_once '../modelos/asignacion.php';
require_once '../modelos/viaje.php';
require_once '../modelos/pasaje.php';

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
$ruta1 = new ruta("45PFRE4", $catalogo->getidentificacion(), $sincelejo->getidentificacion(), $medellin->getidentificacion(), "Escalas", 3400);

$detalle_ruta1_1 = new detalle_ruta($ruta1->getcodigo(), $rioacha->getidentificacion());
$detalle_ruta1_2 = new detalle_ruta($ruta1->getcodigo(), $medellin->getidentificacion());

$ruta1->setDetalleRuta($detalle_ruta1_1);
$ruta1->setDetalleRuta($detalle_ruta1_2);

$ruta2 = new ruta("8934IJD", $catalogo->getidentificacion(), $sincelejo->getidentificacion(), $medellin->getidentificacion(), "Directo", 3400);

//Al ya tenerse lista la ruta o las rutas, se agregan al catalogo
$catalogo->setRutas($ruta1);
$catalogo->setRutas($ruta2);

echo '<h1>El primer catalogo</h1>';

var_dump($catalogo);

echo "<br>";

echo '<h1>Ruta 1</h1>';

var_dump($ruta1);

echo "<br>";

echo '<h1>Ruta 2</h1>';

var_dump($ruta2);

echo "<hr>";

//--------------------------------------------------------

//Se crean los tipos de empleados
$conductor = new tipo_empleado("1", "Conductor");
$funcionario = new tipo_empleado("2", "Funcionario");

//Los empleados necesitan tener comunicacion
//Se crean los tipos de comunicacion
$personal = new tipo_comunicacion("1", "Personal");
$familiar = new tipo_comunicacion("2", "Familiar");
$fijo = new tipo_comunicacion("3", "Fijo");

//Se crean los empleados
//El empleado 1 será conductor
$empleado1 = new empleado("1009", $conductor->getcodigo(), "Luis", "Ayala Cortes");
$comunicacion1_empleado1 = new comunicacion($empleado1->getcedula(), $personal->getidentificacion(),"3400095");
$comunicacion2_empleado1 = new comunicacion($empleado1->getcedula(), $familiar->getidentificacion(),"847759");
$empleado1->setComunicacion($comunicacion1_empleado1);
$empleado1->setComunicacion($comunicacion2_empleado1);

//El empleado 2 será funcionario
$empleado2 = new empleado("1007", $funcionario->getcodigo(),"Carlos Arturo", "Perez Ortega");
$comunicacion1_empleado2 = new comunicacion($empleado2->getcedula(), $familiar->getidentificacion(),"89433");
$comunicacion2_empleado2 = new comunicacion($empleado2->getcedula(), $fijo->getidentificacion(),"1378230");
$empleado2->setComunicacion($comunicacion1_empleado2);
$empleado2->setComunicacion($comunicacion2_empleado2);
//El funcionario tiene acceso al sistema
$password_empleado2 = "ejemplo123";
$usuario_empleado2 = new usuario($empleado2->getcedula(), "ejemplo@gmail.com", password_hash($password_empleado2, PASSWORD_BCRYPT, ['cost'=>4]));

echo '<h1>Los tipos de empleados son:</h1>';
echo "<ul>";
echo "<li>";
var_dump($conductor);
echo "</li>";
echo "<br>";
echo "<li>";
var_dump($funcionario);
echo "</li>";
echo "</ul>";

echo '<h1>El empleado conductor</h1>';

var_dump($empleado1);

echo "<br>";

echo '<h1>El empleado funcionario</h1>';

var_dump($empleado2);

echo '<h1>El usuario del funcionario</h1>';

var_dump($usuario_empleado2);

echo "<hr>";

//--------------------------------------------------------
//Se van a crear los transportes

//Se crean los medios de transportes
$van = new medio_transporte("1", "Van");
$bus = new medio_transporte("2", "Bus");
$carro = new medio_transporte("3", "Carro");

//Se crean los transportes
$transporte1 = new transporte("897-JDK", $van->getcodigo());
$transporte2 = new transporte("897-JDK", $bus->getcodigo());
$transporte3 = new transporte("897-JDK", $carro->getcodigo());

echo '<h1>Los tipos de transporte son:</h1>';
echo "<ul>";
echo "<li>";
var_dump($van);
echo "</li>";
echo "<br>";
echo "<li>";
var_dump($bus);
echo "</li>";
echo "<br>";
echo "<li>";
var_dump($carro);
echo "</li>";
echo "</ul>";

echo '<h1>El transporte o vehiculo 1</h1>';

var_dump($transporte1);

echo "<br>";

echo '<h1>El transporte o vehiculo 2</h1>';

var_dump($transporte2);

echo "<br>";

echo '<h1>El transporte o vehiculo 3</h1>';

var_dump($transporte3);

echo "<hr>";

//--------------------------------------------------------
//Se crean las asignaciones
/**
 * $identificacion de la asignacion
 * $cedula del conductor de esa asignacion
 * $fecha de la asignacion
 * $placa del transporte que va a usar el conductor
 */
$asignacion1 = new asignacion("1", $empleado1->getcedula(), "CURDATE()", $transporte1->getplaca());

echo '<h1>Asignacion 1</h1>';

var_dump($asignacion1);

echo "<br>";

echo "<hr>";

//--------------------------------------------------------
//Se crean los viajes
/**
 * $identificacion del viaje
 * $identificacion de la asignacion para ese viaje
 * $codigo de la ruta
 * $fecha del viaje
 */
$viaje1 = new viaje("1", $asignacion1->getIdentificacion(), $ruta1->getcodigo(), "CURDATE()");
$viaje2 = new viaje("2", $asignacion1->getIdentificacion(), $ruta2->getcodigo(), "CURDATE()");

echo '<h1>Viaje 1</h1>';

var_dump($viaje1);

echo "<br>";

echo '<h1>Viaje 2</h1>';

var_dump($viaje2);

echo "<hr>";

//--------------------------------------------------------

//Se crean los pasajes vendidos por el funcionario
/**
 * $tiquete
 * $identificacion del viaje
 * $cedula del funcionario que crea el pasaje
 * $fecha de venta del pasaje
 */
$pasaje1 = new pasaje("34", $viaje1->getidentificacion(), $empleado2->getcedula(),"CURDATE()");
$pasaje2 = new pasaje("35", $viaje1->getidentificacion(), $empleado2->getcedula(),"CURDATE()");
$pasaje3 = new pasaje("36", $viaje1->getidentificacion(), $empleado2->getcedula(),"CURDATE()");
$pasaje4 = new pasaje("37", $viaje2->getidentificacion(), $empleado2->getcedula(),"CURDATE()");

echo '<h1>Pasaje 1</h1>';

var_dump($pasaje1);

echo "<br>";

echo '<h1>Pasaje 2</h1>';

var_dump($pasaje2);

echo "<br>";

echo '<h1>Pasaje 3</h1>';

var_dump($pasaje3);

echo "<br>";

echo '<h1>Pasaje 4</h1>';

var_dump($pasaje4);

echo "<br>";

echo "<hr>";

echo "<br>";

## Declarar variables
No tipado ("String", integer, float, boolean, array, object, null, resource)
```
$variable = 1;
echo "Número $variable";
echo "Número " . $variable;
var_dump($variable);
```
Usar punto para concatenar

## Bucles
```
if (){

} elseif(){

} else{

}
```
If y elseif
```
switch (){
    case "...":
    break;

    default:
}
```
switch case
```
while (){

}
```
while
```
do {

} while();
```
Do while
```
for(){

}
```
For
```
foreach(){

}
```
For each

## Funciones
Dentro de los parametros que se le pasan a la función se les puede asignar un valor por defecto
```
function nombreFuncion($parámetros = x){
    return;
}

nombreFuncion($parámetros);
nombreFuncion(); -> Esto daría x al ser valor por parámetros
```

Si no sabemos cuantos valores tendrá el argumento
```
function miFuncion(...$x){

}
```

## Arrays
Arrays compuestos por cualquier tipo de dato
```
$miArray = array("Mayonesa", 12, ["Alto", 5], myFuncion);
$miOtroArray = [3, 5, "Paco];
```
Para acceder se usa [index] y para cambiar el valor igualarlo a el nuevo

Una vez creado un array para añadir un nuevo elemento se añade al final
```
array_push($miArray, "elemento")
```

Los arrays asociativos usan clave => valor, para acceder o cambiar se hace a través de la clave
```
$myArray = array("numero"=>2, "calle"=>"Plza Pinocho");
echo $myArray["numero];
$myArray["numero] = 3;
```
Para usar una función llamándola desde el array hay que poner el paréntesis cuando se llama al array
```
$myArray[2]($parametrosDeLaFuncion);
```

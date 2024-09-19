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
```
switch (){
    case "...":
    break;

    default:
}
```
```
while (){

}

do {

} while();

for(){

}

foreach(){

}
```

## Funciones
Dentro de los parametros que se le pasan a la función se les puede asignar un valor por defecto
```
function nombreFuncion($parámetros){
    return;
}

nombreFuncion($parámetros);
```

Si no sabemos cuantos valores tendrá el argumento
```
function miFuncion(...$x){

}
```


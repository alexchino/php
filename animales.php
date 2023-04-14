<?php
class Animal{
    public function roar(){
        echo " El ";
    }
}
class Gato extends Animal {
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar()
    {
        echo $this->nombre."miaguea, MIAU!";
    }
}
class Perro extends Animal {
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar()
    {
        echo $this->nombre."ladra, WAU!";
    }
}
class Vaca extends Animal {
    public function __construct($nombre)
    {
        $this->nombre=$nombre;
    }
    public function roar()
    {
        echo $this->nombre."le hace MUU!";
    }
}
class abecedario extends Animal {
    public function __construct($letras)
    {
        $this->letras=$letras;
    }
    public function roar()
    {
        echo $this->letras."a,b,c,d,e,f,g,h,i,j,k,l,m,n,op,q,r,s,t,u,v,w,x,y,z";
    }
}
function roarAnimal(Animal $animal)

$gato = new Gato("gato");
$perro = new Perro("perro");
$vaca = new Vaca("vaca");
$letras = new abecedario("letras");

if (isset ($_POST["gato"])){
    ?>
     <script >
        var msg = new speechsynthesisUtternce(" <?php roarAnimal($gato)?>");
        window.apeedchSynthesis.speak(msg);
        </script>
    <?php
}    
 else if (isset ($_POST["perro"])){
    ?>
     <script >
        var msg = new speechsynthesisUtternce(" <?php roarAnimal($perro)?>");
        window.apeedchSynthesis.speak(msg);
        </script>
    <?php
 }
 else if (isset ($_POST["vaca"])){
    ?>
     <script >
        var msg = new speechsynthesisUtternce(" <?php roarAnimal($vaca)?>");
        window.apeedchSynthesis.speak(msg);
        </script>
    <?php
 }
 else if (isset ($_POST["letras"])){
    ?>
     <script >
        var msg = new speechsynthesisUtternce(" <?php roarAnimal($letras)?>");
        window.apeedchSynthesis.speak(msg);
        </script>
    <?php
 }
?>

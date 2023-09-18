var com = document.getElementById('celular').value;
if (com === "Motorola G20") {
    document.getElementById('resultado').innerHTML = include("concel/con_G20.html");
} else if (com === "Motorola G30") {
    document.getElementById('resultado').innerHTML = include("concel/con_G30.html");
} else if (com === "Realme 6") {
    document.getElementById('resultado').innerHTML = include("concel/realme.php");
} else if (com === "Xiaomi Redmi 9T") {
    document.getElementById('resultado').innerHTML = include("concel/redmi.php");
} else if (com === "Samsung Galaxy A32") {
    document.getElementById('resultado').innerHTML = include("concel/Samsung_Galaxy_A32.php");
} else if (com === "Samsung Galaxy S20") {
    document.getElementById('resultado').innerHTML = include("concel/Samsung_Galaxy_S20.php");
} else if (com === "Samsung Galaxy A12") {
    document.getElementById('resultado').innerHTML = include("concel/samsung.php");
} else if (com === "Xiaomi Poco X3") {
    document.getElementById('resultado').innerHTML = include("concel/xiaomi.php");
} else {
    document.getElementById('resultado').innerHTML = include("concel/xiaomi_pocophone.php");
}

$sete_maravilhas[7] = [
    "Cristo Redentor",
    "Chichén Itzá",
    "Coliseu",
    "Muralha da China",
    "Petra",
    "Machu Picchu",
    "Taj Mahal"
];
$valor_buscado = "Coliseu";
for($i=0; $i < 7; $i++){
    if ($sete_maravilhas[$i] == $valor_buscado) {
        print("o valor buscado está entre as maravilhas");
        break;
    }
}

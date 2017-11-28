<?php

function getCountryNamesArray(){
    return [
        "África do Sul", "Albânia", "Alemanha", "Andorra", "Angola", "Anguilla", "Antigua", "Arábia Saudita", "Argentina", "Armênia", "Aruba", "Austrália", "Áustria", "Azerbaijão", "Bahamas", "Bahrein", "Bangladesh", "Barbados", "Bélgica", "Benin", "Bermudas", "Botsuana", "Brasil", "Brunei", "Bulgária", "Burkina Fasso", "botão", "Cabo Verde", "Camarões", "Camboja", "Canadá", "Cazaquistão", "Chade", "Chile", "China", "Cidade do Vaticano", "Colômbia", "Congo", "Coréia do Sul", "Costa do Marfim", "Costa Rica", "Croácia", "Dinamarca", "Djibuti", "Dominica", "EUA", "Egito", "El Salvador", "Emirados Árabes", "Equador", "Eritréia", "Escócia", "Eslováquia", "Eslovênia", "Espanha", "Estônia", "Etiópia", "Fiji", "Filipinas", "Finlândia", "França", "Gabão", "Gâmbia", "Gana", "Geórgia", "Gibraltar", "Granada", "Grécia", "Guadalupe", "Guam", "Guatemala", "Guiana", "Guiana Francesa", "Guiné-bissau", "Haiti", "Holanda", "Honduras", "Hong Kong", "Hungria", "Iêmen", "Ilhas Cayman", "Ilhas Cook", "Ilhas Curaçao", "Ilhas Marshall", "Ilhas Turks & Caicos", "Ilhas Virgens (brit.)", "Ilhas Virgens(amer.)", "Ilhas Wallis e Futuna", "Índia", "Indonésia", "Inglaterra", "Irlanda", "Islândia", "Israel", "Itália", "Jamaica", "Japão", "Jordânia", "Kuwait", "Latvia", "Líbano", "Liechtenstein", "Lituânia", "Luxemburgo", "Macau", "Macedônia", "Madagascar", "Malásia", "Malaui", "Mali", "Malta", "Marrocos", "Martinica", "Mauritânia", "Mauritius", "México", "Moldova", "Mônaco", "Montserrat", "Nepal", "Nicarágua", "Niger", "Nigéria", "Noruega", "Nova Caledônia", "Nova Zelândia", "Omã", "Palau", "Panamá", "Papua-nova Guiné", "Paquistão", "Peru", "Polinésia Francesa", "Polônia", "Porto Rico", "Portugal", "Qatar", "Quênia", "Rep. Dominicana", "Rep. Tcheca", "Reunion", "Romênia", "Ruanda", "Rússia", "Saipan", "Samoa Americana", "Senegal", "Serra Leone", "Seychelles", "Singapura", "Síria", "Sri Lanka", "St. Kitts & Nevis", "St. Lúcia", "St. Vincent", "Sudão", "Suécia", "Suiça", "Suriname", "Tailândia", "Taiwan", "Tanzânia", "Togo", "Trinidad & Tobago", "Tunísia", "Turquia", "Ucrânia", "Uganda", "Uruguai", "Venezuela", "Vietnã", "Zaire", "Zâmbia", "Zimbábue"
    ];
}


function getUserListExample($amount){
    $rsp = [];

    for($i = 0; $i < $amount; $i++){
        $rsp[] = getUserExample();
    }
    return $rsp;
}

function getUserExample(){
    $usrLst[0] = new User("Aluhua eloa", 'aaaloa', 'ma@il', '123', '2013-01-08', '123', '3568-989', 'Rua das Paineirais', '566', 'Nova Europa', 'BLOCO X', '1256-000', 'Nova Rússiia', 'Antártica', true);
    $usrLst[1] = new User("Aleiolococa Aleisato eloa", 'aaaloa', 'maisid@il', '123', '2013-01-08', '123', '3568-989', 'Rua das Paineirais Paneirosas Paneirantes', '566', 'Nova Europa Japonesa', 'Bloco 9 apto 999', '1256-000', 'Nova Rússia Americana', 'Antártica Equatorial', true);
    $usrLst[2] = new User("Ana", 'abc', 'maisid@il66', '1', '2013-01-08', '123', '3568-989', 'Rua 2', '566', 'Europa', '', '1256-000', 'Bairro a', 'Portugal', true);

    $rand_key = array_rand($usrLst, 1);
    return $usrLst[$rand_key];
}


function getAlertBox($name, $message, $type = "blue",$valid = true){
    if($valid){

        switch ($type){
            case "blue":
                break;
            case "red":
                break;
            case "green":
                break;
            case "alert":
                $type = "yellow";
                break;
            case "info":
                $type = "blue";
                break;
            case "error":
                $type = "red";
                break;
            case "success":
                $type = "green";
                break;
            default:
                $type = "blue";
                break;
    }

        return "
            <div class='alert $type'>
                <span class='closebtn' onclick='this.parentElement.style.display=\"none\";'>&times;</span> 
                <span><strong>$name:</strong> $message</span>
            </div>
        ";
    }
    return "";
}

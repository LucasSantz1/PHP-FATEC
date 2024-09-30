<?php

class Ponto {
    private $x;
    private $y;
    private static $contador = 0;

    // Construtor que recebe dois parâmetros
    public function __construct($x, $y) {
        $this->x = $x;
        $this->y = $y;
        self::$contador++; // Atualiza o contador de objetos criados
    }

    // Método de classe para retornar o valor do contador
    public static function getContador() {
        return self::$contador;
    }

    // Método para calcular a distância entre a instância e outro ponto (objeto Ponto)
    public function distanciaEntrePontos($outroPonto) {
        return sqrt(pow($outroPonto->x - $this->x, 2) + pow($outroPonto->y - $this->y, 2));
    }

    // Método para calcular a distância entre a instância e outro ponto dado pelas coordenadas X e Y
    public function distanciaEntreCoordenadas($x, $y) {
        return sqrt(pow($x - $this->x, 2) + pow($y - $this->y, 2));
    }

    // Método de classe para calcular a distância entre dois pontos dados X1, Y1 e X2, Y2
    public static function distanciaEntreDoisPontos($x1, $y1, $x2, $y2) {
        return sqrt(pow($x2 - $x1, 2) + pow($y2 - $y1, 2));
    }
}

?>

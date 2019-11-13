<?php

    function productos_json(&$boletos, &$camisas = 0, &$etiquetas =0){
        $dias = array(0 => 'un_dia', 1 => 'pase_completo', 2 => 'pase_2dias');
        $total_boletos = array_combine($dias, $boletos );

        foreach($total_boletos as $key => $boletos):
            if((int) $boletos > 0):
                $json[$key] = (int) $boletos;
            endif;
        endforeach;

        if((int) $camisas > 0):
            $json['camisas'] = (int) $camisas;
        endif;

        if((int) $etiquetas > 0):
            $json['etiquetas'] = (int) $etiquetas;
        endif;

        return json_encode($json);
    }

    function eventos_json(&$eventos){
        $eventos_json = array();

        foreach($eventos as $evento):

            $eventos_json['eventos'][] = $evento;//doble para que agregue hijos
        
        endforeach;

        return json_encode($eventos_json);
    }

?>
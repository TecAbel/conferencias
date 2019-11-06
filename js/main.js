(function(){
    "use strict";
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function(){
        //campos datos usuario
        var nombre = document.getElementById('nombre');
        var apellido = document.getElementById('apellido');
        var email = document.getElementById('email');


        //Campos pases
        var pase_dia = document.getElementById('pase_dia');
        var pase_completo = document.getElementById('pase_completo');
        var pase_dosdias = document.getElementById('pase_dosdias');

        //botones y divs

        var calcular = document.getElementById('calcular');
        var erroDiv = document.getElementById('error');
        var botonRegistro = document.getElementById('btnRegistro');
        var listaProductos = document.getElementById('lista-productos');
        var sumaTotal = document.getElementById('suma-total');


        //extras

        var etiquetas = document.getElementById('etiquetas');
        var camisas = document.getElementById('camisa_evento');

        calcular.addEventListener('click', calcularMontos);
        pase_dia.addEventListener('blur', mostrarDias);
        pase_dosdias.addEventListener('blur', mostrarDias);
        pase_completo.addEventListener('blur', mostrarDias);

        function calcularMontos(event){
            event.preventDefault();
            if(regalo.value === ''){
                alert("Debes elegir un regalo");
                regalo.focus();
            }
            else{
                var boletosDia = parseInt(pase_dia.value, 10) || 0,
                    boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
                    boletosCompletos = parseInt(pase_completo.value, 10) || 0,
                    cantidadCamisas = parseInt(camisas.value, 10) || 0,
                    cantidadEtiquetas = parseInt(etiquetas.value, 10) || 0;

                var totalPagar = (boletosDia * 30) + (boletos2Dias*45) + (boletosCompletos * 50) + ((cantidadCamisas * 10)* .93) + (cantidadEtiquetas * 2);
                console.log(totalPagar);

                var listadoProductos = [];

                if(boletosDia >=1){
                    listadoProductos.push(boletosDia + ' Pases por dia');
                }
                if(boletos2Dias >= 1){
                    listadoProductos.push(boletos2Dias + " Pases por dos dias");
                }
                if(boletosCompletos >= 1){
                    listadoProductos.push(boletosCompletos + " Pases completos");
                }
                if(cantidadCamisas >= 1){
                    listadoProductos.push(cantidadCamisas + " Camisas");
                }
                if(cantidadEtiquetas >= 1){
                    listadoProductos.push(cantidadEtiquetas + " Etiquetas");
                }
                
                //llenar seccion de resumen
                listaProductos.style.display = "block";
                listaProductos.innerHTML = '';
                for(var i=0; i<listadoProductos.length; i++){
                    listaProductos.innerHTML += listadoProductos[i] + '<br/>';
                }

                sumaTotal.innerHTML = "$ " + totalPagar.toFixed(2);

            }
        }

        function mostrarDias(){
            var boletosDia = parseInt(pase_dia.value, 10) || 0,
                boletos2Dias = parseInt(pase_dosdias.value, 10) || 0,
                boletosCompletos = parseInt(pase_completo.value, 10) || 0;

            var diasElegidos = [];

            if(boletosDia >0 ){
                diasElegidos.push('viernes');
            }
            if(boletos2Dias>0){
                diasElegidos.push('viernes','sabado');
            }
            if(boletosCompletos>0){
                diasElegidos.push('viernes', 'sabado', 'domingo');
            }

            for(var i =0; i<diasElegidos.length; i++){
                document.getElementById(diasElegidos[i]).style.display="block";
            }
        }
    });// loaded
})();
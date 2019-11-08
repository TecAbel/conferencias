(function(){
    "use strict";
    var regalo = document.getElementById('regalo');
    document.addEventListener('DOMContentLoaded', function(){

        
        //leaflet
        var map = L.map('mapa').setView([19.434739, -99.144301], 17);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        L.marker([19.434739, -99.144301]).addTo(map)
            .bindPopup('Aquí te podemos atender.')
            .openPopup();

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
        var errorDiv =document.getElementById('error');
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

        //campos a validar
        nombre.addEventListener('blur', validarCampos);
        apellido.addEventListener('blur', validarCampos);
        email.addEventListener('blur', validarCampos);

        function validarCampos(){
            if(this.value == ''){
                errorDiv.style.display = "block";
                errorDiv.innerHTML="Este campo es obligatorio";
                this.style.border ="1px solid red";
                errorDiv.style.border="1px solid red";
            }
            else{
                errorDiv.style.display = "none";
                this.style.border ="1px solid #cccccc";
            }
        }

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


$(function(){

    // menú sticky
    var alturaVentana = $(window).height();
    var alturaBarra = $('.barra').innerHeight();
    
    $(window).scroll(function () { 
        var scroll = $(window).scrollTop();
        if(scroll > alturaVentana){
            $('.barra').addClass('fixed');
            $('body').css({'margin-top':alturaBarra+'px'});
        }else{
            $('.barra').removeClass('fixed');
            $('body').css({'margin-top':'0px'});
        }
    });

    //menú responsive
    $('.menu-movil').click(function () { 
        $('.navegacion-principal').slideToggle();
        
    });

    //lettering

    $('.nombre-sitio').lettering();


    ////conferencias
    $("div.ocultar").hide();
    $(".programa-evento .info-curso:first").show();
    $(".menu-programa a:first").addClass('activo');
    $(".menu-programa a").click(function () { 
        $('.menu-programa a').removeClass('activo');
        $(this).addClass('activo');
        $(".ocultar").hide();
        var enlace = $(this).attr('href');
        $(enlace).fadeIn(1000);
        return false;
    });

    //animaciones numeros 

    $('.resumen-evento li:nth-child(1) p').animateNumber({number: 6},1200);
    $('.resumen-evento li:nth-child(2) p').animateNumber({number: 15},1200);
    $('.resumen-evento li:nth-child(3) p').animateNumber({number: 3},1200);
    $('.resumen-evento li:nth-child(4) p').animateNumber({number: 9},1200);

    //cuenta regresiva 

    $('.cuenta-regresiva').countdown('2019/11/20 09:00:00', function (e){
        $('#dias').html(e.strftime('%D'));
        $('#horas').html(e.strftime('%H'));
        $('#minutos').html(e.strftime('%M'));
        $('#segundos').html(e.strftime('%S'));
    })
});
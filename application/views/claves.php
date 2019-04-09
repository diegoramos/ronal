<div class="page-heading">
    <h3 class="page-title"><strong>5. Claves</strong></h3>
</div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox" style="border: 3px solid black;">
                <div class="row">
                    	<div class="col-md-1" align="center">
                            <img src="<?=base_url()?>assets/img/senales/tre.png" alt="">
                        </div>
                        <div class="col-md-5">
                            <h5>INVERTIR</h5>
                            <p style="font-size: 11px;">Cuando se cumplan los 120 segundos de <br> ejecución.</p>
                        </div>
                        <div class="col-md-1"> 
                            <img src="<?=base_url()?>assets/img/senales/esc.png" alt="">
                        </div>
                        <div class="col-md-5">
                            <h5>PUNTUAR</h5>
                            <p style="font-size: 11px;">Utilizar la plantilla de calificación correspondiente. Un punto <br>para cada respuesta correcta.</p>

                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox">
                <div class="row">
                    <div class="col-md-5">
                    	<table style="width: 100%">
                            <tr>
                                <td class="noborderarriba noborderder noborderiz noborderabajo" colspan="4"></td>
                            </tr>
                            <br>
                            <tr class="negrita" align="center">
                                <td class="noborderiz noborderarriba"></td>
                                <td>Tiempo <br>límite</td>
                                <td>Tiempo de  <br>ejecución</td>
                                <td>Puntaje <br>direct <br>total</td>
                            </tr>
                            <tr align="center">
                                <td rowspan="2">Parte <br> A</td>
                                <td rowspan="2">120"</td>
                                <td rowspan="2">
                                    <div id="contenedor">
                                        <div class="reloj" id="Horas1">00</div>
                                        <input type="button" class="boton" id="inicio1" value="Start &#9658;" onclick="inicio('inicio1','parar1','Horas1');">
                                        <input type="button" class="boton" id="parar1" value="Stop &#8718;" onclick="parar('inicio1','parar1');" disabled>
                                    </div>
                                </td>
                                <td style="height: 10px; font-size: 10px;" align="center">Máximo=65</td>
                            </tr>
                            <tr align="center">
                                <td></td>
                            </tr>
                            <tr align="center">
                                <td rowspan="2">Parte <br>B</td>
                                <td rowspan="2">120"</td>
                                <td rowspan="2"><div id="contenedor">
                                        <div class="reloj" id="Horas2">00</div>
                                            <input type="button" class="boton" id="inicio2" value="Start &#9658;" onclick="inicio('inicio2','parar2','Horas2');">
                                            <input type="button" class="boton" id="parar2" value="Stop &#8718;" onclick="parar('inicio2','parar2');" disabled>
                                        </div></td>
                                <td style="height: 10px; font-size: 10px;" align="center">Máximo=119</td>
                            </tr>
                            <tr align="center">
                                <td></td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-7"><br>
                        <table style="width: 100%">
                            <tr align="center" class="negrita">
                                <td class="noborderabajo" colspan="8"> Parte A</td>
                            </tr>
                            <tr class="negrita" align="center">
                                <td class="noborderarriba" colspan="8" style="font-size: 13px;">Puntaje incluyendo bonificaciones portiempo po desempeño perfecto</td>
                            </tr>
                            <tr>
                                <td class="noborderder">Tiempo en <br> segundo</td>
                                <td class="noborderder noborderiz">116-120</td>
                                <td class="noborderder noborderiz">111-115</td>
                                <td class="noborderder noborderiz">106-110</td>
                                <td class="noborderder noborderiz">101-105</td>
                                <td class="noborderder noborderiz">96-100</td>
                                <td class="noborderder noborderiz">86-95</td>
                                <td class="noborderiz"><=85</td>
                            </tr>
                            <tr>
                                <td class="noborderder">Punto</td>
                                <td class="noborderder noborderiz">59</td>
                                <td class="noborderder noborderiz">60</td>
                                <td class="noborderder noborderiz">61</td>
                                <td class="noborderder noborderiz">62</td>
                                <td class="noborderder noborderiz">63</td>
                                <td class="noborderder noborderiz">64</td>
                                <td class="noborderiz">65</td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
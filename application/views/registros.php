<div class="page-heading">
    <h3 class="page-title"><strong>12. Registros</strong></h3>
</div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox" style="border: 3px solid black;">
                <div class="row">
                    	<div class="col-md-1"  alingn="center">
                    		<img src="<?=base_url()?>assets/img/senales/stop.png" alt="">
                    	</div>
                    	<div class="col-md-5">
                    		<h5>INTERRUMPIR</h5>
                    		<p style="font-size: 11px;">Despues de 45 segundos para cada ítem.</p>
                    	</div>
                    	<div class="col-md-1" >
                    		<img src="<?=base_url()?>assets/img/senales/esc.png" alt="">
                    	</div>
                    	<div class="col-md-5">
                    		<h5>PUNTUAR</h5>
                    		<p style="font-size: 11px;">Utilice la plantilla de calificación para calificar las respeuestas del <br>niño. Reste el número de respuestas incorrectas al número de <br>respuestas correctas. Si la puntuación total es menor que cero, <br>puntúe entonces 0 puntos. <br> RA y RE: Puntaje total para los ítems 1 y 2, respectivamente.</p>
                	</div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox">
                <div class="row">
                    <div class="col-md-12"> 
                        <table style="width: 100%">
                            <tr class="negrita" align="center">
                                <td>Ítem</td>
                                <td>Tiempo límite</td>
                                <td>Tiempo de ejecución</td>
                                <td>Respuestas corectas</td>
                                <td>Respuestas incorrectas</td>
                                <td>Diferencia</td>
                                <td>Puntos de <br>bonificación </td>
                                <td>Puntaje total</td>
                            </tr>
                            <tr>
                                <td align="center" rowspan="2">1.Aleatorio</td>
                                <td align="center" rowspan="2">45"</td>
                                <td rowspan="2" align="center">
                                    <div id="contenedor">
                                        <div align="center" class="reloj" id="Horas1">00</div>
                                        <input type="button" class="boton" id="inicio1" value="Start &#9658;" onclick="inicio('inicio1','parar1','Horas1');">
                                        <input type="button" class="boton" id="parar1" value="Stop &#8718;" onclick="parar('inicio1','parar1');" disabled>
                                    </div>
                                </td>
                                <td rowspan="2"></td>
                                <td rowspan="2"></td>
                                <td rowspan="2"></td>
                                <td style="height: 10px; font-size: 10px;" align="center">Máximo=4</td>
                                <td style="height: 10px; font-size: 10px;" align="center">RegA Maximo=68</td>
                            </tr>
                            <tr>
                                <td style="height: 30px;"></td>
                                <td style="height: 30px;"></td>
                            </tr>
                            <tr>
                                <td align="center" rowspan="2">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2.Estructurado</td>
                                <td align="center" rowspan="2">45"</td>
                                <td rowspan="2" align="center">
                                    <div id="contenedor">
                                        <div align="center" class="reloj" id="Horas2">00</div>
                                        <input type="button" class="boton" id="inicio2" value="Start &#9658;" onclick="inicio('inicio2','parar2','Horas2');">
                                        <input type="button" class="boton" id="parar2" value="Stop &#8718;" onclick="parar('inicio2','parar2');" disabled>
                                    </div>
                                </td>
                                <td rowspan="2"></td>
                                <td rowspan="2"></td>
                                <td rowspan="2"></td>
                                <td style="height: 10px; font-size: 10px;" align="center">Máximo=4</td>
                                <td style="height: 10px; font-size: 10px;" align="center">RegE Maximo=68</td>
                            </tr>
                            <tr>
                                <td style="height: 30px;"></td>
                                <td style="height: 30px;"></td>
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox">
                <div class="row">
                    <div class="col-md-9"> 
                        <table style="width: 100%">
                            <tr>
                                <td align="center" colspan="6">Puntos de bonificación por tiempo</td>
                            </tr>
                            <tr>
                                <td align="center" colspan="6" style="font-size: 12px;">Si el examinado termina un ítem nates de 45 segundos y l adiferencia es >=60, dé puntos de bonificación</td>
                            </tr>
                            <tr align="center">
                                <td>Tiempo de segundos</td>
                                <td class="noborderder">45</td>
                                <td class="noborderiz noborderder">40-44</td>
                                <td class=" noborderiz noborderder">35-39</td>
                                <td class=" noborderiz noborderder">30-34</td>
                                <td class=" noborderiz">0-29</td>
                            </tr>
                            <tr align="center">
                                <td>Puntos de bonificación</td>
                                <td class="noborderder">0</td>
                                <td class="noborderiz noborderder">1</td>
                                <td class=" noborderiz noborderder">2</td>
                                <td class=" noborderiz noborderder">3</td>
                                <td class=" noborderiz">4</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-2" align="right">
                        <p><strong>Puntaje directo <br> total</strong><br>
                        (Máximo = 136)</p>

                    </div>
                    <div class="col-md-1">
                        <table>
                            <tr>
                                <input style="border: 2px solid black;" type="text" name="">
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
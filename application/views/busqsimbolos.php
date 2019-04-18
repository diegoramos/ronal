<div class="page-heading">
    <h3 class="page-title"><strong>10. Busqueda de Símbolos</strong></h3>
</div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox" style="border: 3px solid black;">
                <div class="row">
                        <div class="col-md-1" align="center">
                            <img src="<?=base_url()?>assets/img/senales/der.png" alt="">
                        </div>
                        <div class="col-md-3">
                            <h5>COMIENZO</h5>
                            <p style="font-size: 11px;"><strong>Edad 6-7: </strong> <br>Ítem de ejemplo.<br> e ítem 1.<br>
                                                        <strong>Edad 8-16: </strong> <br>Ítem de ejemplo <br>e ítem 5.<br>
                                                        <strong>Edad 12-16: </strong> <br>Ítem de ejemplo <br>e ítem 8.</p>
                        </div>
                        <div class="col-md-1"  alingn="center">
                            <img src="<?=base_url()?>assets/img/senales/stop.png" alt="">
                        </div>
                        <div class="col-md-3">
                            <h5>TERMINACION</h5>
                            <p style="font-size: 11px;">Después de 3 <br>puntuaciones <br>de 0 consecutivas</p>
                        </div>
                        <div class="col-md-1"> 
                            <img src="<?=base_url()?>assets/img/senales/esc.png" alt="">
                        </div>
                        <div class="col-md-3">
                            <h5>PUNTUACION</h5>
                            <p style="font-size: 11px;"><strong>0, 1 o 2 </strong>puntos.<br>
                             Véase el Manual de aplicacion y recorrección para los ejemplos de respuesta<br></p>
                        </div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox">
                <div class="row">
                    <div class="col-md-7">
                        <table style="width: 100%">
                            <tr align="center" class="negrita">
                                <td style="background-color: black; color:white;">Parte</td>
                                <td style="background-color: black; color:white;">Tiempo <br>límite</td>
                                <td style="background-color: black; color:white;">Tiempo <br>empleado <br>(en segundos)</td>
                                <td style="background-color: black; color:white;">Número <br>de respuesta <br> correctas</td>
                                <td style="background-color: black; color:white;" colspan="2">Número <br> de respuesta <br> correcta </td>
                                <td class="noborderder noborderarriba noborderabajo" colspan="2">Puntuación <br> directa</td>  
                            </tr>
                            <tr align="center">
                                <td class="noborderder noborderiz noborderabajo noborderarriba" colspan="7"></td>
                                <td class="noborderder noborderiz noborderabajo noborderarriba" style="font-size: 11px;">(Máximo = 42)</td>
                            </tr>
                            <tr>
                                <td align="center" class="noborderder noborderiz noborderarriba ">A</td>
                                <td align="center" class="noborderder noborderiz noborderarriba ">120"</td>
                                <td align="center" class="noborderder noborderiz noborderarriba"><input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total"></td>
                                <td align="center" class="noborderder noborderiz noborderarriba"><input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total"></td>
                                <td class="noborderder noborderiz noborderarriba " colspan="2">
                                    <input align="right" maxlength="20" size="1" style="border: 0px;border-bottom: 2px solid black;height: 1px; height: 5px" readonly="" type="text" name="">
                                    <input align="center" style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total">
                                </td>
                                <td align="center" class="noborderder noborderiz noborderarriba " colspan="2">
                                    <input maxlength="20" size="1" style="border-top: 2px solid black;border-bottom: 2px solid black;border-right: 0px;border-left:0px; height: 9px" readonly="" type="text" name="">
                                    <input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total">
                                </td>
                            </tr>
                            <tr align="center">
                                <td class="noborderiz noborderabajo noborderder" colspan="7"></td>
                                <td class="noborderder noborderiz noborderarriba noborderabajo" style="font-size: 11px;">(Máximo = 60)</td>
                            </tr>
                            <tr>
                                <td align="center" class="noborderder noborderiz noborderarriba">B</td>
                                <td align="center" class="noborderder noborderiz noborderarriba">120"</td>
                                <td align="center" class="noborderder noborderiz noborderarriba"><input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total"></td>
                                <td align="center" class="noborderder noborderiz noborderarriba"><input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total"></td>
                                <td class="noborderder noborderiz noborderarriba" colspan="2">
                                    <input align="right" maxlength="20" size="1" style="border: 0px;border-bottom: 2px solid black;height: 1px; height: 5px" readonly="" type="text" name="">
                                    <input align="center" style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total">
                                </td>
                                <td align="center" class="noborderder noborderiz noborderarriba" colspan="2">
                                    <input maxlength="20" size="1" style="border-top: 2px solid black;border-bottom: 2px solid black;border-right: 0px;border-left:0px; height: 9px" readonly="" type="text" name="">
                                    <input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-5">
                        <table style="width: 100%">
                            <tr align="center">
                                <td style="background-color: black; color:white;" colspan="4">Puntuaciones de bonificación por tiempo para una resolucíón <br>perfecta en la parte A de Búsqueda de Símbolos </td>
                            </tr>
                            <tr align="center">
                                <td class="noborderder noborderiz negrita">Tiempo en <br>segundos </td>
                                <td class="noborderder noborderiz negrita">120</td>
                                <td class="noborderder noborderiz negrita">111-119</td>
                                <td class="noborderder noborderiz negrita"><=110</td>
                            </tr>
                            <tr align="center">
                                <td class="noborderder noborderiz negrita">Puntuación <br> directa</td>
                                <td class="noborderder noborderiz negrita">40</td>
                                <td class="noborderder noborderiz negrita">41</td>
                                <td class="noborderder noborderiz negrita">42</td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-xl-12" style="padding:2px 17px 2px 2px">
                        <?php if (isset($vocabulario_id)) { ?>
                              <input width="50px" type="button" class="boton btn btn-primary pull-right" id="guardar" value="Actualizar" onclick="update();">
                         <?php }else{ ?>
                              <input width="50px" type="button" class="boton btn btn-success pull-right" id="guardardirecto" value="Guardar" onclick="guardar();">
                         <?php } ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
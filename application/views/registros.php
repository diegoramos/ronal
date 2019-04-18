<div class="page-heading">
    <h3 class="page-title"><strong>13. Cancelación</strong></h3>
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
                        <div class="col-md-2">
                            <h5>TERMINACION</h5>
                            <p style="font-size: 11px;">Después de 3 <br>puntuaciones <br>de 0 consecutivas</p>
                        </div>
                        <div class="col-md-1"> 
                            <img src="<?=base_url()?>assets/img/senales/esc.png" alt="">
                        </div>
                        <div class="col-md-4">
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
                    <div class="col-md-4">
                        <table style="width: 100%">
                            <tr align="center" class="negrita">
                                <td style="background-color: black; color:white;">Ítem</td>
                                <td style="background-color: black; color:white;">Tiempo <br>empleado </td>
                                <td style="background-color: black; color:white;">Tiempo <br>empleado </td>
                            </tr>
                            <tr>
                                <td class="noborderder noborderiz">1. Aaleatoria</td>
                                <td class="noborderder noborderiz" align="center">45"</td>
                                <td class="noborderder noborderiz " align="center">
                                    <input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total">
                                </td>
                            </tr>
                            <tr>
                                <td class="noborderder noborderiz">2. Estructurada</td>
                                <td class="noborderder noborderiz" align="center">45"</td>
                                <td class="noborderder noborderiz" align="center">
                                    <input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total">
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-8">
                        <table style="width: 100%">
                            <tr align="center" class="negrita">
                                <td style="background-color: black; color:white;">Número de <br> respuesta correcta</td>
                                <td style="background-color: black; color:white;" colspan="2">Número de <br>respuesta incorrecta </td>
                                <td style="background-color: black; color:white;" colspan="3">Puntuación</td>
                            </tr>
                            <tr>
                                <td class="noborderder noborderiz" align="center">
                                    <input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total">
                                </td>
                                <td class="noborderder noborderiz">
                                    <input align="right" maxlength="20" size="1" style="border: 0px;border-bottom: 2px solid black;height: 1px; height: 5px" readonly="" type="text" name="">
                                </td>
                                <td class="noborderder noborderiz" align="center">
                                    <input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total">
                                </td>
                                <td class="noborderder noborderiz">
                                    <input maxlength="20" size="1" style="border-top: 2px solid black;border-bottom: 2px solid black;border-right: 0px;border-left:0px; height: 9px" readonly="" type="text" name="">
                                </td>
                                <td class="noborderder noborderiz" align="center">
                                    <input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total">
                                </td>
                                <td class="noborderder noborderiz" align="center" style="font-size: 11px;"><strong>CAa</strong><br>(Max = 64) </td>
                            </tr>
                            <tr>
                                <td class="noborderder noborderiz" align="center">
                                    <input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total">
                                </td>
                                <td class="noborderder noborderiz">
                                    <input align="right" maxlength="20" size="1" style="border: 0px;border-bottom: 2px solid black;height: 1px; height: 5px" readonly="" type="text" name="">
                                </td>
                                <td class="noborderder noborderiz" align="center">
                                    <input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total">
                                </td>
                                <td class="noborderder noborderiz">
                                    <input maxlength="20" size="1" style="border-top: 2px solid black;border-bottom: 2px solid black;border-right: 0px;border-left:0px; height: 9px" readonly="" type="text" name="">
                                </td>
                                <td class="noborderder noborderiz" align="center">
                                    <input style="border: 2px solid black; width: 50px; height: 30px;" type="text" name="puntaje_total">
                                </td>
                                <td class="noborderder noborderiz" align="center" style="font-size: 11px;"><strong>CAe</strong><br>(Max = 64) </td>
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
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox">
                <div class="row">
                    <div class="col-md-8">
                        <p style="font-size: 12px">** Las respuestas que requieren</p>
                    </div>
                    <div class="col-md-3" align="right">
                        <p><strong>Puntaje directa Información</strong><br>
                        (Máximo = 31)</p>

                    </div>
                    <div class="col-md-1">
                        <table>
                            <tr>
                                <input style="border: 2px solid black;" type="text" name="puntaje_total">
                            </tr>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var vocabulario_id = <?php  if (isset($vocabulario_id)) { echo $vocabulario_id;} else { echo 0; } ?>;
</script>
<div class="page-heading">
    <h3 class="page-title"><strong>5. Claves</strong></h3>
</div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox" style="border: 3px solid black;">
                <div class="row">
                        <div class="col-md-1" align="center">
                            <img src="<?=base_url()?>assets/img/senales/der.png" alt="">
                        </div>
                        <div class="col-md-4">
                            <h5>COMIENZO</h5>
                            <p style="font-size: 11px;"><strong>Edad 6-7: </strong>Ítem 1.<br>
                                                        <strong>Edad 8-16: </strong>Ítem 3.</p>
                        </div>
                        <div class="col-md-1"  alingn="center">
                            <img src="<?=base_url()?>assets/img/senales/stop.png" alt="">
                        </div>
                        <div class="col-md-2">
                            <h5>TERMINACION</h5>
                            <p style="font-size: 11px;">Después de 2 <br>puntuaciones de <br>0 consecutivas</p>
                        </div>
                        <div class="col-md-1"> 
                            <img src="<?=base_url()?>assets/img/senales/esc.png" alt="">
                        </div>
                        <div class="col-md-3">
                            <h5>PUNTIACION</h5>
                            <p style="font-size: 11px;"><strong>Ítems 1-3: </strong>0-2 puntos.<br>
                            <strong>Ítems 4-9: </strong> 0 o 4 puntos.<br>
                            <strong>Ítems 10-13: </strong>0 o 4-7 puntos.<br>
                            <strong>Cs&nbsp;&nbsp;&nbsp;&nbsp;Ítems 1-3: </strong>0-2 puntos.<br>
                                    <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ítems 4-13: </strong>0-4 puntos.<br>
                            <strong>Cp&nbsp;&nbsp;&nbsp;&nbsp;Ítems 1: </strong>0-2 puntos.<br>
                                    <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ítems 2-9: </strong>0-4 puntos.<br>
                                    <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ítems 10-13: </strong>0-12 puntos.</p>
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
                            <tr align="center">
                                <td class="noborderiz  noborderarriba" style="background-color: white; color:white;">sdsdsdwwwwwwwwwwwwwsssssssssssssssssssssswwwwww</td>
                                <td style="background-color: black; color:white;">Parte</td>
                                <td style="background-color: black; color:white;">Tiempo límite</td>
                                <td style="background-color: black; color:white;">Tiempo empleado</td>
                                <td class="noborderarriba noborderder noborderiz">Puntuación <br> directa claves</td>
                            </tr>
                            <tr>
                                <td class="noborderiz noborderabajo noborderarriba noborderder" colspan="4"></td>
                                <td class="noborderiz noborderabajo" style="font-size: 11px; " align="center">(Maáximo = 75)</td>
                            </tr>
                            <tr>
                                <td class="noborderiz noborderder noborderarriba"></td>
                                <td align="center" class="noborderiz noborderder noborderarriba">A</td>
                                <td align="center" class="noborderiz noborderder noborderarriba">120" <br>(2:00)</td>
                                <td class="noborderiz noborderder noborderarriba"></td>
                                <td class="noborderiz noborderabajo noborderarriba " align="center"><input style="border: 2px solid black; width: 50px;" type="text" name="" ></td>
                            </tr>
                            <tr>
                                <td class="noborderiz noborderder noborderabajo " colspan="4"></td>
                                <td class="noborderiz noborderabajo" style="font-size: 11px; " align="center">(Maximo = 117)</td>
                            </tr>
                            <tr>
                                <td class="noborderiz noborderder noborderarriba"></td>
                                <td align="center" class="noborderiz noborderder noborderarriba">B</td>
                                <td align="center" class="noborderiz noborderder noborderarriba">120" <br>(2:00)</td>
                                <td class="noborderiz noborderder noborderarriba"></td>
                                <td class="noborderiz noborderarriba" align="center"><input style="border: 2px solid black; width: 50px;" type="text" name="" ></td>
                            </tr>
                        </table>
                        <div class="col-md-12">
                            <br>
                            <?php if (isset($claves_id)) { ?>
                              <input width="50px" type="button" class="boton btn btn-primary pull-right" id="guardar" value="Actualizar" onclick="update();">
                             <?php }else{ ?>
                                  <input width="50px" type="button" class="boton btn btn-success pull-right" id="guardarrazfigu2" value="Guardar" onclick="guardar();">
                             <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
    var claves_id = <?php  if (isset($claves_id)) { echo $claves_id;} else { echo 0; } ?>;
</script>
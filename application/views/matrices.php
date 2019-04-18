<div class="page-heading">
    <h3 class="page-title"><strong>3. Matrices</strong></h3>
</div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox" style="border: 3px solid black;">
                <div class="row">
                        <div class="col-md-1" align="center">
                            <img src="<?=base_url()?>assets/img/senales/der.png" alt="">
                        </div>
                        <div class="col-md-2">
                            <h5>COMIENZO</h5>
                            <p style="font-size: 11px;"><strong>Edad 6-7: </strong>Ítem 1.<br>
                                                        <strong>Edad 8-16: </strong>Ítem 3.</p>
                        </div>
                        <div class="col-md-1" align="center">
                            <img src="<?=base_url()?>assets/img/senales/tre.png" alt="">
                        </div>
                        <div class="col-md-2">
                            <h5>RETORNO</h5>
                            <p style="font-size: 11px;"><strong>Edades 8-16: </strong><br>Si se obtiene 0 o 1 punto uno de los dos primeros items aplicar los items antriores <strong>en orden inverso</strong> hasta obtener dos respuestas perfectas (máxima puntuación) consecutivas.</p>
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
                        <div class="col-md-2">
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
                    <div class="col-md-4">
                    	<table style="width: 100%">
                            <tr class="negrita" align="center">
                                <td style="background-color: black; color:white;">Ítem</td>
                                <td style="background-color: black; color:white;" colspan="5">Respuesta</td>
                                <td style="background-color: black; color:white;" colspan="2">Puntuación</td>
                                
                            </tr>
                            <tr align="center">
                                <td class="negrita">Ej.A</td>
                                <td class="noborderder negrita">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td colspan="2" rowspan="2" style="background-color: dimgray;"></td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">Ej.B</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz negrita">5</td>

                            </tr>
                            <tr align="center">
                                <td class="negrita">1.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz negrita">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres1" class="actualizar_puntaje" id="pur10" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres1" class="actualizar_puntaje" id="pur11" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">2.</td>
                                <td class="noborderder negrita">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres2" class="actualizar_puntaje" id="pur20" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres2" class="actualizar_puntaje" id="pur21" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">3.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder negrita">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres3" class="actualizar_puntaje" id="pur30" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres3" class="actualizar_puntaje" id="pur31" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">4.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder negrita">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres4" class="actualizar_puntaje" id="pur40" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres4" class="actualizar_puntaje" id="pur41" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">5.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder negrita">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres5" class="actualizar_puntaje" id="pur50" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres5" class="actualizar_puntaje" id="pur51" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">6.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder negrita">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres6" class="actualizar_puntaje" id="pur60" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres6" class="actualizar_puntaje" id="pur61" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">7.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder negrita">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres7" class="actualizar_puntaje" id="pur70" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres7" class="actualizar_puntaje" id="pur71" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">8.</td>
                                <td class="noborderder negrita">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres8" class="actualizar_puntaje" id="pur80" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres8" class="actualizar_puntaje" id="pur81" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">9.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder negrita">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres9" class="actualizar_puntaje" id="pur90" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres9" class="actualizar_puntaje" id="pur91" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">10.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder negrita">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres10" class="actualizar_puntaje" id="pur100" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres10" class="actualizar_puntaje" id="pur101" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table style="width: 100%">
                            <tr class="negrita" align="center">
                                <td style="background-color: black; color:white;">Ítem</td>
                                <td style="background-color: black; color:white;" colspan="5">Respuesta</td>
                                <td style="background-color: black; color:white;" colspan="2">Puntuación</td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">11.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder negrita">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres11" class="actualizar_puntaje" id="pur110" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres11" class="actualizar_puntaje" id="pur111" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">12.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz negrita">5</td>
                               <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres12" class="actualizar_puntaje" id="pur120" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres12" class="actualizar_puntaje" id="pur121" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">13.</td>
                                <td class="noborderder negrita">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres13" class="actualizar_puntaje" id="pur130" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres13" class="actualizar_puntaje" id="pur131" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">14.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder negrita">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres14" class="actualizar_puntaje" id="pur140" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres14" class="actualizar_puntaje" id="pur141" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">15.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder negrita">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres15" class="actualizar_puntaje" id="pur150" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres15" class="actualizar_puntaje" id="pur151" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">16.</td>
                                <td class="noborderder negrita">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres16" class="actualizar_puntaje" id="pur160" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres16" class="actualizar_puntaje" id="pur161" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">17.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder negrita">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres17" class="actualizar_puntaje" id="pur170" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres17" class="actualizar_puntaje" id="pur171" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">18.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz negrita">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres18" class="actualizar_puntaje" id="pur180" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres18" class="actualizar_puntaje" id="pur181" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">19.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder negrita">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres19" class="actualizar_puntaje" id="pur190" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres19" class="actualizar_puntaje" id="pur191" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">20.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder negrita">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres20" class="actualizar_puntaje" id="pur200" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres20" class="actualizar_puntaje" id="pur201" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                   </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">21.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder negrita">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres21" class="actualizar_puntaje" id="pur210" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres21" class="actualizar_puntaje" id="pur211" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            </tr>
                            <tr align="center">
                                <td class="negrita">22.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder negrita">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres22" class="actualizar_puntaje" id="pur220" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres22" class="actualizar_puntaje" id="pur221" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="col-md-4">
                        <table style="width: 100%">
                            <tr class="negrita" align="center">
                                <td style="background-color: black; color:white;">Ítem</td>
                                <td style="background-color: black; color:white;" colspan="5">Respuesta</td>
                                <td style="background-color: black; color:white;" colspan="2">Puntuación</td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">23.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder negrita">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres23" class="actualizar_puntaje" id="pur230" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres23" class="actualizar_puntaje" id="pur231" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">24.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder negrita">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres24" class="actualizar_puntaje" id="pur240" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres24" class="actualizar_puntaje" id="pur241" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">25.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder negrita">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder ">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres25" class="actualizar_puntaje" id="pur250" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres25" class="actualizar_puntaje" id="pur251" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">26.</td>
                                <td class="noborderder negrita">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres26" class="actualizar_puntaje" id="pur260" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres26" class="actualizar_puntaje" id="pur261" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">27.</td>
                                <td class="noborderder negrita">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres27" class="actualizar_puntaje" id="pur270" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres27" class="actualizar_puntaje" id="pur271" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">28.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder negrita">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres28" class="actualizar_puntaje" id="pur280" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres28" class="actualizar_puntaje" id="pur281" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">29.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder negrita">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres29" class="actualizar_puntaje" id="pur290" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres29" class="actualizar_puntaje" id="pur291" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">30.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder negrita">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres30" class="actualizar_puntaje" id="pur300" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres30" class="actualizar_puntaje" id="pur301" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">31.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder">4</td>
                                <td class="noborderiz negrita">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres31" class="actualizar_puntaje" id="pur310" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres31" class="actualizar_puntaje" id="pur311" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                            <tr align="center">
                                <td class="negrita">32.</td>
                                <td class="noborderder">1</td>
                                <td class="noborderiz noborderder">2</td>
                                <td class="noborderiz noborderder">3</td>
                                <td class="noborderiz noborderder negrita">4</td>
                                <td class="noborderiz">5</td>
                                <td class="noborderder">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres32" class="actualizar_puntaje" id="pur320" value="0"><span class="input-span"></span>0
                                            </label>
                                        </div>
                                    </div>
                                </td>
                                <td class="noborderiz">
                                    <div class="row">
                                        <div class="col-md-12">
                                            <label class="ui-radio ui-radio-primary">
                                                <input type="radio" name="punres32" class="actualizar_puntaje" id="pur321" value="1"><span class="input-span"></span>1
                                            </label>
                                        </div>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </div>
                        <div class="col-xl-12" style="padding:2px 17px 2px 2px">
                            <input width="50px" type="button" class="boton pull-right" id="guardarrespuesta" value="Guardar" onclick="guardarrespuesta();">
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
                		
                	</div>
                	<div class="col-md-3" align="right">
                		<p><strong>Puntuación directa Matrices</strong><br>
                		(máximo = 32)</p>

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
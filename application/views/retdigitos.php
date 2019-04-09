<div class="page-heading">
    <h3 class="page-title"><strong>3. Retención de dígitos</strong></h3>
</div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox" style="border: 3px solid black;">
                <div class="row">
                    	<div class="col-md-1" align="center">
                    		<img src="<?=base_url()?>assets/img/senales/stop.png" alt="">
                    	</div>
                    	<div class="col-md-5">
                    		<h5>INTERRUMPIR</h5>
                    		<p style="font-size: 11px;">
                    			<strong>Dígitos en Orden directo y en Orden inverso: </strong><br>Puntaje de 0 en ambos intentos de un item.</p>
                    	</div>
                    	<div class="col-md-1"> 
                    		<img src="<?=base_url()?>assets/img/senales/esc.png" alt="">
                    	</div>
                    	<div class="col-md-5">
                    		<h5>PUNTUAR</h5>
                    		<p style="font-size: 11px;">Puntaje de 0 ó 1 para cada intento.<br><strong>RDD y RDI: </strong>Puntaje total para RD en orden directo e inverso, <br> respectivamente. <br> <strong>RDDL y RDIL:</strong>Número de digitos recordados en el ultimo <br>intento calificado con 1 punto para RD en orden directo e inverso, <br>respectivamente.</p>

                    	</div>
                    </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox">
                <div class="row">
                    <div class="col-md-6">
                    	<table style="width: 100%">
                    		<tr class="negrita" align="center">
                    			<td colspan="3">Digitos en orden directo <br>Item intento/Respuesta</td>
                    			<td colspan="2">Puntaje <br>del Intento</td>
                    			<td colspan="3">Puntaje <br>del Item</td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">1.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">2-9</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter1" value="0"></td>
                    			<td class="noborderiz" align="center">1<input type="radio" name="puninter1" value="1"></td>
                    			<td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter2" value="0"></td>
                    			<td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter2" value="1"></td>
                    			<td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter2" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">4-6</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter3" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter3" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">2.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">3-8-7</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter4" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter4" value="1"></td>
                    			<td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter5" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter5" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter5" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">6-1-2</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter6" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter6" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">3.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">3-4-1-7</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter7" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter7" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter8" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter8" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter8" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">6-1-5-8</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter9" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter9" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">4.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">5-2-1-8-6</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter10" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter10" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter11" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter11" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter11" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">8-4-2-3-9</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter12" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter12" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">5.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">3-8-9-1-7-4</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter13" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter13" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter14" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter14" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter14" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">7-9-6-4-8-3</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter15" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter15" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">6.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">5-1-7-4-2-3-8</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter16" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter16" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter17" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter17" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter17" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">9-8-5-2-1-6-3</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter18" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter18" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">7.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">1-8-4-5-9-7-6-3</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter19" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter19" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter20" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter20" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter20" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">2-9-7-6-3-1-5-4</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter21" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter21" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">8.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">5-3-8-7-1-2-4-6-9</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter22" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter22" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter23" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter23" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter23" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">4-2-6-9-1-7-8-3-5</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter24" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter24" value="1"></td>
                    		</tr>
                    	</table>
                              <div class="col-xl-12" style="padding:2px 17px 2px 2px">
                                   <input width="50px" type="button" class="boton pull-right" id="guardardirecto" value="Guardar" onclick="guardardirecto();">
                              </div>
                    </div>
                    <div class="col-md-6">
                    	<table style="width: 100%">
                    		<tr class="negrita" align="center">
                    			<td colspan="3">Digitos en orden inverso <br>Item intento/Respuesta</td>
                    			<td colspan="2">Puntaje <br>del Intento</td>
                    			<td colspan="3">Puntaje <br>del Item</td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">M.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">8-2</td>
                    			<td  style="background-color:black; " align="center" colspan="5" rowspan="2"></td>
                    			
                    			
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">5-6</td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">1.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">2-1</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter25" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter25" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter26" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter26" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter26" value="2"></td>
                    			
                    			
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">1-3</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter27" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter27" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">2.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">3-5</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter28" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter28" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter29" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter29" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter29" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">6-4</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter30" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter30" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">3.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">2-5-9</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter31" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter31" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter32" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter32" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter32" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">5-7-4</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter33" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter33" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">4.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">8-4-9-3</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter34" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter34" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter35" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter35" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter35" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">7-2-9-6</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter36" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter36" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">5.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">4-1-3-5-7</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter37" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter37" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter38" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter38" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter38" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">9-7-8-5-2</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter39" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter39" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">6.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">1-6-5-2-9-8</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter40" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter40" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter41" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter41" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter41" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">3-6-7-1-9-4</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter42" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter42" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">7.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">8-5-9-2-3-4-6</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter43" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter43" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter44" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter44" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter44" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">4-5-7-9-2-8-1</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter45" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter45" value="1"></td>
                    		</tr>
                    		<tr>
                    			<td rowspan="2" class="noborderder" align="center">8.</td>
                    			<td class="noborderiz noborderder" align="center">1</td>
                    			<td class="noborderiz negrita">6-9-1-7-3-2-5-8</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter46" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter46" value="1"></td>
                                   <td class="noborderder" align="center" rowspan="2">0<input type="radio" name="puninter47" value="0"></td>
                                   <td class="noborderiz noborderder" align="center" rowspan="2">1<input type="radio" name="puninter47" value="1"></td>
                                   <td class="noborderiz" align="center" rowspan="2">2<input type="radio" name="puninter47" value="2"></td>
                    		</tr>
                    		<tr>
                    			<td class="noborderiz noborderder" align="center">2</td>
                    			<td class="noborderiz negrita">3-1-7-9-5-4-8-2</td>
                    			<td class="noborderder" align="center">0<input type="radio" name="puninter48" value="0"></td>
                                   <td class="noborderiz" align="center">1<input type="radio" name="puninter48" value="1"></td>
                    		</tr>
                    	</table>
                    </div>
                    <div class="col-xl-12" style="padding:2px 17px 2px 2px">
                        <input width="50px" type="button" class="boton pull-right" id="guardardirecto" value="Guardar" onclick="guardardirecto();">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox" style="border: 1px solid black;">
                <div class="row">
                    	<div class="col-md-2"  align="center">
                    		<table width="100%" style="border: inset 0pt;">
                    			<tr align="center">
                    				<td class="nobordertable"> <strong>RDDL</strong></td>
                    			</tr>
                    			<tr align="center">
                    				<td class="nobordertable">(Máximo = 9)</td>
                    			</tr>
                    			<tr align="center">
                    				<td class="nobordertable"><input maxlength="20" size="10" style="border: 2px solid black;" type="text" name=""></td>
                    			</tr>
                    		</table>
                    	</div>
                    	<div class="col-md-4">
                    		<table width="100%" class="nobordertable">
                    			<tr align="center">
                    				<td class="nobordertable">&nbsp;</td>
                    				<td class="nobordertable"></td>
                    			</tr>
                    			<tr class="negrita">
                    				<td class="nobordertable" style="text-align: right;">Puntaje directo de dígitoa en<br> orden directo (RDD)</td>
                    				<td class="nobordertable"><input maxlength="20" size="10" style="border: 2px solid black;" type="text" name=""></td>
                    			</tr>
                    			<tr >
                    				<td style="text-align: right;" class="nobordertable">(Máximo = 16)</td>
                    				<td class="nobordertable"></td>
                    			</tr>
                    		</table>
                    	</div>
                    	<div class="col-md-2"> 
                    		<table class="nobordertable" width="100%">
                    			<tr align="center">
                    				<td class="nobordertable"><strong>RDIL</strong></td>
                    			</tr>
                    			<tr align="center">
                    				<td class="nobordertable">(Máximo = 8)</td>
                    			</tr>
                    			<tr align="center">
                    				<td class="nobordertable"><input maxlength="20" size="10" style="border: 2px solid black;" type="text" name=""></td>
                    			</tr>
                    		</table>
                    	</div>
                    	<div class="col-md-4">
                    		<table width="100%" class="nobordertable">
                    			<tr>
                    				<td class="nobordertable">&nbsp;</td>
                    				<td class="nobordertable"></td>
                    			</tr>
                    			<tr class="negrita">
                    				<td style="text-align: right;" class="nobordertable">Puntaje directo de dígitos en <br>orden inverso (RDI)</td>
                    				<td class="nobordertable"><input maxlength="20" size="10" style="border: 2px solid black;" type="text" name=""></td>
                    			</tr>
                    			<tr align="center">
                    				<td class="nobordertable" style="text-align: right;" >(Máximo = 16)</td>
                    				<td class="nobordertable"></td>
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
                	<div class="col-md-3">
                		
                	</div>
                	<div class="col-md-8" align="right">
                		<p><strong>Puntaje total de Retención de dígitos</strong><br>
                		(Máximo = 32)</p>

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
<div class="page-heading">
    <h3 class="page-title"><strong>1. Construcción de cubos</strong></h3>
</div>
<div class="page-content fade-in-up">
	<div class="row" >
        <div class="col-xl-12">
            <div class="ibox" >
                <div class="row">
                		<div class="col-md-12" align="center" >
                    		<table width="100%">
                    			<tr>
                    				<td width="55%" class="noborderiz noborderder noborderabajo noborderarriba ">
                    					<table width="100%" >
                    						<tr>
                    							<td align="center" class="noborderarriba noborderabajo noborderder noborderiz"><img src="<?=base_url()?>assets/img/senales/titu.png" alt="" ></td>
                    						</tr>
                    						<tr>
                    							<td class="nobordertable">&nbsp;&nbsp;Nombre: <input maxlength="20" size="72" style="border-top:0px solid black;border-bottom: 1px solid black;border-right: 0px;border-left:0px;"  type="text" name=""></td>
                    						</tr>
                    						<tr>
                    							<td class="nobordertable">&nbsp;&nbsp;Examinador: <input maxlength="20" size="69" style="border-top: 0px solid black;border-bottom: 1px solid black;border-right: 0px;border-left:0px;" type="text" name=""></td>
                    						</tr>
                    					</table>
                    				</td>
                    				<td width="45%" class="noborderiz noborderder noborderabajo noborderarriba">
                    					<table width="100%">
                    						<tr>
                    							<td class="negrita noborderder noborderarriba noborderabajo noborderiz" colspan="4" align="center">Cuadernillo</td>
                    						</tr>
                    						<tr>
                    							<td  class="negrita noborderder noborderarriba noborderabajo noborderiz" colspan="4" align="center"> <div style="background-color: black; border-radius: 10px; width: 100%; color: white; font-weight: bold;" >Cálculo de la edad cronológica</div></td>
                    						</tr>
                    						<tr>
                    							<td class="negrita noborderder noborderarriba  noborderiz">Fecha de aplicación</td>
                    							<td  class="negrita noborderder noborderarriba noborderabajo noborderiz" align="center">Año <br><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;"  type="text" name="pu1" ></td>
                    							<td  class="negrita noborderder noborderarriba noborderabajo noborderiz" align="center">Mes <br><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;"  type="text" name="pu2" ></td>
                    							<td  class="negrita noborderder noborderarriba noborderabajo noborderiz" align="center">Dáa <br><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;"  type="text" name="pu3" ></td>
                    						</tr>
                    						<tr>
                    							<td class="negrita noborderder noborderarriba noborderiz"> Fecha de nacimiento</td>
                    							<td  class="negrita noborderder noborderarriba noborderabajo noborderiz" align="center"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;"  type="text" name="pu4" ></td>
                    							<td  class="negrita noborderder noborderarriba noborderabajo noborderiz" align="center"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;"  type="text" name="pu5" ></td>
                    							<td  class="negrita noborderder noborderarriba noborderabajo noborderiz" align="center"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;"  type="text" name="pu6" ></td>
                    						</tr>
                    						<tr>
                    							<td class="negrita noborderder noborderarriba noborderiz">Edad cronológica</td>
                    							<td  class="negrita noborderder noborderarriba noborderabajo noborderiz" align="center"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;"  type="text" name="pu7" ></td>
                    							<td  class="negrita noborderder noborderarriba noborderabajo noborderiz" align="center"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;"  type="text" name="pu8" ></td>
                    							<td  class="negrita noborderder noborderarriba noborderabajo noborderiz" align="center"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;"  type="text" name="pu9" ></td>
                    						</tr>
                    					</table>
                    				</td>
                    			</tr>
                    		</table>
                    	</div>
                    </div>
            </div>
        </div>
    </div>
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
                    <div class="col-md-12">
                    	<table style="width: 100%" class=" table-responsive">
	                    	<tr class="negrita centrar" >
	                    		<td style="background-color: black; color:white;" colspan="2">Diseño</td>
	                    		<td style="background-color: black; color:white;">Presentacion</td>
	                    		<td style="background-color: black; color:white;">Cubos necesarios</td>
	                    		<td style="background-color: black; color:white;">Tiempo de límite</td>
	                    		<td style="background-color: black; color:white;">Tiempo de ejecución</td>
	                    		<td style="background-color: black; color:white;" colspan="2">Diseño correcto</td>
	                    		<td style="background-color: black; color:white;" colspan="2">Diseño incorrecto</td>
	                    		<td style="background-color: black; color:white;" colspan="3">Puntaje</td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>1.</td>
	                    		<td class="negrita noborderder">Niño <br><img src="<?=base_url()?>assets/img/senales/101.png" alt=""> <br>Examinador</td>
	                    		<td class="noborderiz" >Modelo <br> e imagen</td>
	                    		<td>4</td>
	                    		<td>30’’</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1">Intento 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Intento 2</font><br>
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;"  type="text" name="puntaje1" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje2" ></font><br>

										<div class="reloj" id="Horas1">00</div>
										<input style="font-size: 12px;" type="button" class="boton" id="inicio1" value="Start &#9658;" onclick="inicio('inicio1','parar1','Horas1');">
										<input style="font-size: 12px;" type="button" class="boton" id="parar1" value="Stop &#8718;" onclick="parar('inicio1','parar1');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
	                    				<div class="col-md-4">
		                    				<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na1" id="n10" value="0"><span class="input-span"></span>0
		                    				</label>
		                    			</div>
		                    			<div class="col-md-4">
		                    				<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na1" id="n11" value="1"><span class="input-span"></span>1
		                    				</label>
		                    			</div>
		                    			<div class="col-md-4">
		                    				<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na1" id="n12" value="2"><span class="input-span"></span>2
		                    				</label>
		                    			</div>
	                    			</div>
	                    			
								</td>
	                    		<td class="noborderder"><font size="1">Intento 1</font><br>
	                    			<img src="<?=base_url()?>assets/img/senales/b1.png" alt="">
	                    		</td>
	                    		<td class="noborderiz"><font size="1">Intento 2</font><br>
	                    			<img src="<?=base_url()?>assets/img/senales/b1.png" alt="">
	                    		</td>
	                    		<td class="noborderder">0</td><br>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz ">
	                    			<div class="row">
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
													Intento 2
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="puntaje1" class="actualizar_puntaje" id="pun11" value="1"><span class="input-span"></span>1
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 Intento 1 		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="puntaje1" class="actualizar_puntaje" id="pun12" value="2"><span class="input-span"></span>2
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
	                    		</td>
	                    		
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>2.</td>
	                    		<td class="noborderder"><img src="<?=base_url()?>assets/img/senales/202.png" alt=""></td>
	                    		<td class="noborderiz">Modelo <br>e imagen</td>
	                    		<td>8</td>
	                    		<td>45’’</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1">Intento 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Intento 2</font><br>
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;"  type="text" name="puntaje3" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje4" ></font><br>

										<div class="reloj" id="Horas2">00</div>
										<input  style="font-size: 12px;" type="button" class="boton" id="inicio2" value="Start &#9658;" onclick="inicio('inicio2','parar2','Horas2');">
										<input  style="font-size: 12px;" type="button" class="boton" id="parar2" value="Stop &#8718;" onclick="parar('inicio2','parar2');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na2"  class="actualizar_puntaje" id="n20" value="0"><span class="input-span"></span>0
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na2" class="actualizar_puntaje" id="n21" value="1"><span class="input-span"></span>1
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na2" class="actualizar_puntaje" id="n22" value="2"><span class="input-span"></span>2
		                    				</label>
									  </div>
									 
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na2" class="actualizar_puntaje" id="n23" value="3"><span class="input-span"></span>3
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na2" class="actualizar_puntaje" id="n24" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    		<td class="noborderder"><font size="1">Intento 1</font><br>
	                    			<img src="<?=base_url()?>assets/img/senales/b2.png" alt="">
	                    		</td>
	                    		<td class="noborderiz"><font size="1">Intento 2</font><br>
	                    			<img src="<?=base_url()?>assets/img/senales/b2.png" alt="">
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class=" noborderiz"> 
	                    			<div class="row">
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
													Intento 2
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="puntaje2" class="actualizar_puntaje" id="pun21" value="1"><span class="input-span"></span>1
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 Intento 1 		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="puntaje2" class="actualizar_puntaje" id="pun22" value="2"><span class="input-span"></span>2
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
	                    		</td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>3.</td>
	                    		<td class="negrita noborderder"> Niño<br><img src="<?=base_url()?>assets/img/senales/22.png" alt=""><br> Examinador</td>
	                    		<td class="noborderiz">Modelo <br> e imagen</td>
	                    		<td>8</td>
	                    		<td>45’’</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1">Intento 1&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Intento 2</font><br>
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;"  type="text" name="puntaje5" >&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje6" ></font><br>

										<div class="reloj" id="Horas3">00</div>
										<input style="font-size: 12px;" type="button" class="boton" id="inicio3" value="Start &#9658;" onclick="inicio('inicio3','parar3','Horas3');">
										<input style="font-size: 12px;"type="button" class="boton" id="parar3" value="Stop &#8718;" onclick="parar('inicio3','parar3');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na3"  class="actualizar_puntaje" id="n30" value="0"><span class="input-span"></span>0
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na3" class="actualizar_puntaje" id="n31" value="1"><span class="input-span"></span>1
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na3" class="actualizar_puntaje" id="n32" value="2"><span class="input-span"></span>2
		                    				</label>
									  </div>
									 
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na3" class="actualizar_puntaje" id="n33" value="3"><span class="input-span"></span>3
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na3" class="actualizar_puntaje" id="n34" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    		<td class="noborderder"><font size="1">Intento 1</font><br>
	                    			<img src="<?=base_url()?>assets/img/senales/b2.png" alt="">
	                    		</td>
	                    		<td class="noborderiz"><font size="1">Intento 2</font><br>
	                    			<img src="<?=base_url()?>assets/img/senales/b2.png" alt="">
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz" style="color:white; ">er</td>
	                    		<td class=" noborderiz"> 
	                    			<div class="row">
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
													Intento 2
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="puntaje3" class="actualizar_puntaje" id="pun31" value="1"><span class="input-span"></span>1
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
													Intento 1 		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="puntaje3" class="actualizar_puntaje" id="pun32" value="2"><span class="input-span"></span>2
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
	                    		</td>
	                    		
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>4.</td>
	                    		<td class="noborderder"><img src="<?=base_url()?>assets/img/senales/4.png" alt=""></td>
	                    		<td class="noborderiz">Imagen</td>
	                    		<td>4</td>
	                    		<td>45’’</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje2" ></font><br>

										<div class="reloj" id="Horas4">00</div>
										<input style="font-size: 12px;" type="button" class="boton" id="inicio4" value="Start &#9658;" onclick="inicio('inicio4','parar4','Horas4');">
										<input style="font-size: 12px;" type="button" class="boton" id="parar4" value="Stop &#8718;" onclick="parar('inicio4','parar4');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na4"  class="actualizar_puntaje" id="n40" value="0"><span class="input-span"></span>0
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na4" class="actualizar_puntaje" id="n41" value="1"><span class="input-span"></span>1
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na4" class="actualizar_puntaje" id="n42" value="2"><span class="input-span"></span>2
		                    				</label>
									  </div>
									 
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na4" class="actualizar_puntaje" id="n43" value="3"><span class="input-span"></span>3
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na4" class="actualizar_puntaje" id="n44" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    		<td  colspan="2">
	                    			<img src="<?=base_url()?>assets/img/senales/b2.png" alt="">
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="right">
	                    			<div class="row">
									  <div class="col-md-12">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="puntaje4"  class="actualizar_puntaje" id="pun44" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>5.</td>
	                    		<td class="noborderder"><img src="<?=base_url()?>assets/img/senales/5.png" alt=""></td>
	                    		<td class="noborderiz">Imagen</td>
	                    		<td>4</td>
	                    		<td>45’’</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje2" ></font><br>

										<div class="reloj" id="Horas5">00</div>
										<input style="font-size: 12px;" type="button" class="boton" id="inicio5" value="Start &#9658;" onclick="inicio('inicio5','parar5','Horas5');">
										<input style="font-size: 12px;" type="button" class="boton" id="parar5" value="Stop &#8718;" onclick="parar('inicio5','parar5');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na5"  class="actualizar_puntaje" id="n50" value="0"><span class="input-span"></span>0
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na5" class="actualizar_puntaje" id="n51" value="1"><span class="input-span"></span>1
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na5" class="actualizar_puntaje" id="n52" value="2"><span class="input-span"></span>2
		                    				</label>
									  </div>
									 
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na5" class="actualizar_puntaje" id="n53" value="3"><span class="input-span"></span>3
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na5" class="actualizar_puntaje" id="n54" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    		<td  colspan="2">
	                    			<img src="<?=base_url()?>assets/img/senales/b2.png" alt="">
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="right">
	                    			<div class="row">
									  <div class="col-md-12">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="puntaje5"  class="actualizar_puntaje" id="pun54" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>6.</td>
	                    		<td class="noborderder"><img src="<?=base_url()?>assets/img/senales/6.png" alt=""></td>
	                    		<td class="noborderiz">Imagen</td>
	                    		<td>4</td>
	                    		<td>75’’ <br>(1:15)</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje2" ></font><br>

										<div class="reloj" id="Horas6">00</div>
										<input style="font-size: 12px;" type="button" class="boton" id="inicio6" value="Start &#9658;" onclick="inicio('inicio6','parar6','Horas6');">
										<input style="font-size: 12px;" type="button" class="boton" id="parar6" value="Stop &#8718;" onclick="parar('inicio6','parar6');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na6"  class="actualizar_puntaje" id="n60" value="0"><span class="input-span"></span>0
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na6" class="actualizar_puntaje" id="n61" value="1"><span class="input-span"></span>1
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na6" class="actualizar_puntaje" id="n62" value="2"><span class="input-span"></span>2
		                    				</label>
									  </div>
									 
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na6" class="actualizar_puntaje" id="n63" value="3"><span class="input-span"></span>3
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na6" class="actualizar_puntaje" id="n64" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    		<td  colspan="2">
	                    			<img src="<?=base_url()?>assets/img/senales/b2.png" alt="">
                                </td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="right">
	                    			<div class="row">
									  <div class="col-md-12">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="puntaje6"  class="actualizar_puntaje" id="pun64" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>7.</td>
	                    		<td class="noborderder"><img src="<?=base_url()?>assets/img/senales/7.png" alt=""></td>
	                    		<td class="noborderiz">Imagen</td>
	                    		<td>4</td>
	                    		<td>75’’ <br>(1:15)</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje2" ></font><br>

										<div class="reloj" id="Horas7">00</div>
										<input style="font-size: 12px;" type="button" class="boton" id="inicio7" value="Start &#9658;" onclick="inicio('inicio7','parar7','Horas7');">
										<input style="font-size: 12px;" type="button" class="boton" id="parar7" value="Stop &#8718;" onclick="parar('inicio7','parar7');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na7"  class="actualizar_puntaje" id="n70" value="0"><span class="input-span"></span>0
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na7" class="actualizar_puntaje" id="n71" value="1"><span class="input-span"></span>1
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na7" class="actualizar_puntaje" id="n72" value="2"><span class="input-span"></span>2
		                    				</label>
									  </div>
									 
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na7" class="actualizar_puntaje" id="n73" value="3"><span class="input-span"></span>3
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na7" class="actualizar_puntaje" id="n74" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    		<td  colspan="2">
	                    			<img src="<?=base_url()?>assets/img/senales/b2.png" alt="">
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="right">
	                    			<div class="row">
									  <div class="col-md-12">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="puntaje7"  class="actualizar_puntaje" id="pun74" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>8.</td>
	                    		<td class="noborderder"><img src="<?=base_url()?>assets/img/senales/8.png" alt=""></td>
	                    		<td class="noborderiz">Imagen</td>
	                    		<td>4</td>
	                    		<td>75’’ <br>(1:15)</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje2" ></font><br>

										<div class="reloj" id="Horas8">00</div>
										<input style="font-size: 12px;" type="button" class="boton" id="inicio8" value="Start &#9658;" onclick="inicio('inicio8','parar8','Horas8');">
										<input style="font-size: 12px;" type="button" class="boton" id="parar8" value="Stop &#8718;" onclick="parar('inicio8','parar8');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na8"  class="actualizar_puntaje" id="n80" value="0"><span class="input-span"></span>0
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na8" class="actualizar_puntaje" id="n81" value="1"><span class="input-span"></span>1
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na8" class="actualizar_puntaje" id="n82" value="2"><span class="input-span"></span>2
		                    				</label>
									  </div>
									 
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na8" class="actualizar_puntaje" id="n83" value="3"><span class="input-span"></span>3
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na8" class="actualizar_puntaje" id="n84" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    		<td  colspan="2">
	                    			<img src="<?=base_url()?>assets/img/senales/b2.png" alt="">
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="right">
	                    			<div class="row">
									  <div class="col-md-12">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="puntaje8"  class="actualizar_puntaje" id="pun84" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>9.</td>
	                    		<td class="noborderder"><img src="<?=base_url()?>assets/img/senales/9.png" alt=""></td>
	                    		<td class="noborderiz">Imagen</td>
	                    		<td>4</td>
	                    		<td>75’’ <br>(1:15)</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje2" ></font><br>

										<div class="reloj" id="Horas9">00</div>
										<input style="font-size: 12px;" type="button" class="boton" id="inicio9" value="Start &#9658;" onclick="inicio('inicio9','parar9','Horas9');">
										<input style="font-size: 12px;" type="button" class="boton" id="parar9" value="Stop &#8718;" onclick="parar('inicio9','parar9');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na9"  class="actualizar_puntaje" id="n90" value="0"><span class="input-span"></span>0
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na9" class="actualizar_puntaje" id="n91" value="1"><span class="input-span"></span>1
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na9" class="actualizar_puntaje" id="n92" value="2"><span class="input-span"></span>2
		                    				</label>
									  </div>
									 
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na9" class="actualizar_puntaje" id="n93" value="3"><span class="input-span"></span>3
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na9" class="actualizar_puntaje" id="n94" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    		<td  colspan="2">
	                    			<img src="<?=base_url()?>assets/img/senales/b1.png" alt="">
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="right">
	                    			<div class="row">
									  <div class="col-md-12">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="puntaje9"  class="actualizar_puntaje" id="pun85" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									</div>
								</td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>10.</td>
	                    		<td class="noborderder"><img src="<?=base_url()?>assets/img/senales/10.png" alt=""></td>
	                    		<td class="noborderiz">Imagen</td>
	                    		<td>9</td>
	                    		<td>120’’ <br>(2:00)</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje2" ></font><br>

										<div class="reloj" id="Horas10">00</div>
										<input style="font-size: 12px;" type="button" class="boton" id="inicio10" value="Start &#9658;" onclick="inicio('inicio10','parar10','Horas10');">
										<input style="font-size: 12px;" type="button" class="boton" id="parar10" value="Stop &#8718;" onclick="parar('inicio10','parar10');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na10"  class="actualizar_puntaje" id="n100" value="0"><span class="input-span"></span>0
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na10" class="actualizar_puntaje" id="n101" value="1"><span class="input-span"></span>1
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na10" class="actualizar_puntaje" id="n102" value="2"><span class="input-span"></span>2
		                    				</label>
									  </div>
									 
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na10" class="actualizar_puntaje" id="n103" value="3"><span class="input-span"></span>3
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na10" class="actualizar_puntaje" id="n104" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na10" class="actualizar_puntaje" id="n105" value="5"><span class="input-span"></span>5
		                    				</label>
									  </div>
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na10" class="actualizar_puntaje" id="n106" value="6"><span class="input-span"></span>6
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na10" class="actualizar_puntaje" id="n107" value="7"><span class="input-span"></span>7
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na10" class="actualizar_puntaje" id="n108" value="8"><span class="input-span"></span>8
		                    				</label>
									  </div>
									</div>
									<div class="row">
										
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														71-120
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="na10" class="actualizar_puntaje" id="n109" value="9"><span class="input-span"></span>9
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 51-70 		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="na10" class="actualizar_puntaje" id="n1010" value="10"><span class="input-span"></span>10
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
									<div class="row">
										
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														31-50
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="na10" class="actualizar_puntaje" id="n1011" value="11"><span class="input-span"></span>11
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 1-30		
											</div>
									  	</div>
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="na10" class="actualizar_puntaje" id="n1012" value="12"><span class="input-span"></span>12
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
								</td>
	                    		<td  colspan="2">
	                    			<img src="<?=base_url()?>assets/img/senales/b3.png" alt="">
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left">
	                    			<div class="row">
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														71-120
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="puntaje10" class="actualizar_puntaje" id="pun104" value="4"><span class="input-span"></span>4
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 51-70 		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="puntaje10" class="actualizar_puntaje" id="pun105" value="5"><span class="input-span"></span>5
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
									<div class="row">
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														31-50
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="puntaje10" class="actualizar_puntaje" id="pun106" value="6"><span class="input-span"></span>6
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 1-30		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="puntaje10" class="actualizar_puntaje" id="pun107" value="7"><span class="input-span"></span>7
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>11.</td>
	                    		<td class="noborderder"><img src="<?=base_url()?>assets/img/senales/11.png" alt=""></td>
	                    		<td class="noborderiz">Imagen</td>
	                    		<td>9</td>
	                    		<td>120’’ <br>(2:00)</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje2" ></font><br>

										<div class="reloj" id="Horas11">00</div>
										<input style="font-size: 12px;" type="button" class="boton" id="inicio11" value="Start &#9658;" onclick="inicio('inicio11','parar11','Horas11');">
										<input style="font-size: 12px;" type="button" class="boton" id="parar11" value="Stop &#8718;" onclick="parar('inicio11','parar11');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na11"  class="actualizar_puntaje" id="n110" value="0"><span class="input-span"></span>0
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na11" class="actualizar_puntaje" id="n111" value="1"><span class="input-span"></span>1
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na11" class="actualizar_puntaje" id="n112" value="2"><span class="input-span"></span>2
		                    				</label>
									  </div>
									 
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na11" class="actualizar_puntaje" id="n113" value="3"><span class="input-span"></span>3
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na11" class="actualizar_puntaje" id="n114" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na11" class="actualizar_puntaje" id="n115" value="5"><span class="input-span"></span>5
		                    				</label>
									  </div>
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na11" class="actualizar_puntaje" id="n116" value="6"><span class="input-span"></span>6
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na11" class="actualizar_puntaje" id="n117" value="7"><span class="input-span"></span>7
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na11" class="actualizar_puntaje" id="n118" value="8"><span class="input-span"></span>8
		                    				</label>
									  </div>
									</div>
									<div class="row">
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														71-120
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="na11" class="actualizar_puntaje" id="n119" value="9"><span class="input-span"></span>9
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 51-70 		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="na11" class="actualizar_puntaje" id="n1110" value="10"><span class="input-span"></span>10
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
									<div class="row">
										
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														31-50
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="na11" class="actualizar_puntaje" id="n1111" value="11"><span class="input-span"></span>11
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 1-30		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="na11" class="actualizar_puntaje" id="n1112" value="12"><span class="input-span"></span>12
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
								</td>
	                    		<td  colspan="2">
									<img src="<?=base_url()?>assets/img/senales/b4.png" alt="">
	                    			
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left">
	                    			<div class="row">
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														71-120
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="puntaje11" class="actualizar_puntaje" id="pun114" value="4"><span class="input-span"></span>4
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 51-70 		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="puntaje11" class="actualizar_puntaje" id="pun115" value="5"><span class="input-span"></span>5
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
									<div class="row">
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														31-50
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="puntaje11" class="actualizar_puntaje" id="pun116" value="6"><span class="input-span"></span>6
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 1-30		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="puntaje11" class="actualizar_puntaje" id="pun117" value="7"><span class="input-span"></span>7
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>12.</td>
	                    		<td class="noborderder"><img src="<?=base_url()?>assets/img/senales/12.png" alt=""></td>
	                    		<td class="noborderiz">Imagen</td>
	                    		<td>9</td>
	                    		<td>120’’ <br>(2:00)</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje2" ></font><br>

										<div class="reloj" id="Horas12">00</div>
										<input style="font-size: 12px;" type="button" class="boton" id="inicio12" value="Start &#9658;" onclick="inicio('inicio12','parar12','Horas12');">
										<input style="font-size: 12px;" type="button" class="boton" id="parar12" value="Stop &#8718;" onclick="parar('inicio12','parar12');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na12"  class="actualizar_puntaje" id="n120" value="0"><span class="input-span"></span>0
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na12" class="actualizar_puntaje" id="n121" value="1"><span class="input-span"></span>1
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na12" class="actualizar_puntaje" id="n122" value="2"><span class="input-span"></span>2
		                    				</label>
									  </div>
									 
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na12" class="actualizar_puntaje" id="n123" value="3"><span class="input-span"></span>3
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na12" class="actualizar_puntaje" id="n124" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na12" class="actualizar_puntaje" id="n125" value="5"><span class="input-span"></span>5
		                    				</label>
									  </div>
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na12" class="actualizar_puntaje" id="n126" value="6"><span class="input-span"></span>6
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na12" class="actualizar_puntaje" id="n127" value="7"><span class="input-span"></span>7
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na12" class="actualizar_puntaje" id="n128" value="8"><span class="input-span"></span>8
		                    				</label>
									  </div>
									</div>
									<div class="row">
										
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														71-120
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="na12" class="actualizar_puntaje" id="n129" value="9"><span class="input-span"></span>9
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 51-70 		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="na12" class="actualizar_puntaje" id="n1210" value="10"><span class="input-span"></span>10
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
									<div class="row">
										
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														31-50
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="na12" class="actualizar_puntaje" id="n1211" value="11"><span class="input-span"></span>11
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 1-30		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="na12" class="actualizar_puntaje" id="n1212" value="12"><span class="input-span"></span>12
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
								</td>
	                    		<td  colspan="2">
	                    			<img src="<?=base_url()?>assets/img/senales/b4.png" alt="">
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left">
	                    			<div class="row">
										 <div class="col-md-6">
										 	<div style="font-size:11px;" class="row">
										 		<div class="col-md-12">
														71-120
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="puntaje12" class="actualizar_puntaje" id="pun124" value="4"><span class="input-span"></span>4
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 51-70 		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="puntaje12" class="actualizar_puntaje" id="pun125" value="5"><span class="input-span"></span>5
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
									<div class="row">
										
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														31-50
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="puntaje12" class="actualizar_puntaje" id="pun126" value="6"><span class="input-span"></span>6
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 1-30		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="puntaje12" class="actualizar_puntaje" id="pun127" value="7"><span class="input-span"></span>7
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>13.</td>
	                    		<td class="noborderder"><img src="<?=base_url()?>assets/img/senales/13.png" alt=""></td>
	                    		<td class="noborderiz">Imagen</td>
	                    		<td>9</td>
	                    		<td>120’’ <br>(2:00)</td>
	                    		<td>
	                    			<div id="contenedor">
	                    				<font size="1"><input style="border: 2px solid black;text-align: center; font-size: 11px; height: 20px; width: 50px;" type="text" name="puntaje2" ></font><br>

										<div class="reloj" id="Horas13">00</div>
										<input style="font-size: 12px;" type="button" class="boton" id="inicio13" value="Start &#9658;" onclick="inicio('inicio13','parar13','Horas13');">
										<input style="font-size: 12px;" type="button" class="boton" id="parar13" value="Stop &#8718;" onclick="parar('inicio13','parar13');" disabled>
									</div>
	                    		</td>
	                    		<td colspan="2">
	                    			<div class="row">
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na13"  class="actualizar_puntaje" id="n130" value="0"><span class="input-span"></span>0
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na13" class="actualizar_puntaje" id="n131" value="1"><span class="input-span"></span>1
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na13" class="actualizar_puntaje" id="n132" value="2"><span class="input-span"></span>2
		                    				</label>
									  </div>
									 
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na13" class="actualizar_puntaje" id="n133" value="3"><span class="input-span"></span>3
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na13" class="actualizar_puntaje" id="n134" value="4"><span class="input-span"></span>4
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na13" class="actualizar_puntaje" id="n135" value="5"><span class="input-span"></span>5
		                    				</label>
									  </div>
									</div>
									<div class="row">
										 <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na13" class="actualizar_puntaje" id="n136" value="6"><span class="input-span"></span>6
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na13" class="actualizar_puntaje" id="n137" value="7"><span class="input-span"></span>7
		                    				</label>
									  </div>
									  <div class="col-md-4">
									  		<label class="ui-radio ui-radio-primary">
		                    					<input type="radio" name="na13" class="actualizar_puntaje" id="n138" value="8"><span class="input-span"></span>8
		                    				</label>
									  </div>
									</div>
									<div class="row">
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														71-120
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="na13" class="actualizar_puntaje" id="n139" value="9"><span class="input-span"></span>9
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 51-70 		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="na13" class="actualizar_puntaje" id="n1310" value="10"><span class="input-span"></span>10
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
									<div class="row">
										
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														31-50
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="na13" class="actualizar_puntaje" id="n1311" value="11"><span class="input-span"></span>11
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 1-30		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="na13" class="actualizar_puntaje" id="n1312" value="12"><span class="input-span"></span>12
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
								</td>
	                    		<td  colspan="2">
	                    			<img src="<?=base_url()?>assets/img/senales/b1.png" alt="">
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left">
	                    			<div class="row">
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														71-120
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="puntaje13" class="actualizar_puntaje" id="pun134" value="4"><span class="input-span"></span>4
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 51-70 		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="puntaje13" class="actualizar_puntaje" id="pun135" value="5"><span class="input-span"></span>5
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
									<div class="row">
										 <div class="col-md-6">
										 	<div class="row">
										 		<div style="font-size:11px;" class="col-md-12">
														31-50
										 		</div>
										 	</div>
										 	<div class="row"> 
										 		<div class="col-md-12">
										 			<label class="ui-radio ui-radio-primary">
				                    					<input type="radio" name="puntaje13" class="actualizar_puntaje" id="pun136" value="6"><span class="input-span"></span>6
				                    				</label>
										 		</div>
										 	</div>
									  	</div>
									  <div class="col-md-6">
									  	<div class="row">
									  		<div style="font-size:11px;" class="col-md-12">
												 1-30		
											</div>
									  	</div>
									  	<div class="row">
									  		<div class="col-md-12">
									  			<label class="ui-radio ui-radio-primary">
			                    					<input type="radio" name="puntaje13" class="actualizar_puntaje" id="pun137" value="7"><span class="input-span"></span>7
			                    				</label>
									  		</div>
									  	</div>
									  </div>
									</div>
	                    	</tr>
	                    </table>
                    </div>
                    <div class="col-xl-12" style="padding:2px 17px 2px 2px">
                    	<input type="hidden" name="cubo_id" id="cubo_id">
                    	<?php if (isset($cubo_id)) { ?>
                    		<input width="50px" type="button" class="boton btn btn-primary pull-right" id="guardar" value="Actualizar" onclick="update();">
                    	<?php }else{ ?>
                    		<input width="50px" type="button" class="boton btn btn-success pull-right" id="guardar" value="Guardar" onclick="guardar();">
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
                	<div class="col-md-3">
                		<h5><strong>EXAMINADOR</strong></h5>
                	</div>
                	<div class="col-md-8" align="right">
                		<p><strong>Puntaje directo total</strong><br>
                		(Máximo = 68)<br>
                		<strong>Puntaje directo total sin bonificación por tiempo (CCSB)</strong><br>
                		(Máximo = 50)</p>
                	</div>
                	<div class="col-md-1">
                		<table>
                			<tr>
                				<input style="border: 2px solid black;text-align: center;" type="text" name="puntaje_total1" >
                				<br><br>
                				<input style="border: 2px solid black;text-align: center;" type="text" name="puntaje_total2">
                			</tr>
                		</table>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
	var cubo_id = <?php  if (isset($cubo_id)) { echo $cubo_id;} else { echo 0; } ?>;
</script>
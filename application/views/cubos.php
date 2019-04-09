<div class="page-heading">
    <h3 class="page-title"><strong>1. Construcción de cubos</strong></h3>
</div>
<div class="page-content fade-in-up">
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox" style="border: 3px solid black;">
                <div class="row">
                    	<div class="col-md-1" align="center">
                    		<img src="<?=base_url()?>assets/img/senales/tre.png" alt="">
                    	</div>
                    	<div class="col-md-3">
                    		<h5>INVERTIR</h5>
                    		<p style="font-size: 11px;"><strong>Edades 8-16: </strong>Puntaje de 0 ó 1 en <br> cualquiera de los dos primeros ítems <br>dados. Administrar los ítems <br>anteriores en secuencia inversa hasta <br>obtener dos puntajes perfectos <br>consecutivos.</p>
                    	</div>
                    	<div class="col-md-1"  alingn="center">
                    		<img src="<?=base_url()?>assets/img/senales/stop.png" alt="">
                    	</div>
                    	<div class="col-md-3">
                    		<h5>INTERRUMPIR</h5>
                    		<p style="font-size: 11px;">Después de 3 puntajes <br> consecutivos de 0.</p>
                    	</div>
                    	<div class="col-md-1"> 
                    		<img src="<?=base_url()?>assets/img/senales/esc.png" alt="">
                    	</div>
                    	<div class="col-md-3">
                    		<h5>PUNTUAR</h5>
                    		<p style="font-size: 11px;"><strong>Ítems 1-3: </strong>Puntaje de 0, 1 ó 2 puntos.<br>
                    		<strong>Ítems 4-8: </strong>Puntaje de 0 a 4 puntos.<br>
                    		<strong>Ítems 9-14: </strong>Puntaje de 0 o el puntaje <br> apropiado de bonificación por tiempo.<br>
                    		<strong>Sin bonificación por tiempo:</strong><br>
                    		<strong>Ítems 1-3: </strong>Puntaje de 0, 1 ó 2 puntos.<br>
                    		<strong>Ítems 4-14: </strong>Puntaje de 0 a 4 puntos.</p>

                    	</div>
                    </div>
            </div>
        </div>
    </div>
	    <h5 class="page-title"><strong>EXAMINADO</strong></h5>
    <div class="row">
        <div class="col-xl-12">
            <div class="ibox">
                <div class="row">
                    <div class="col-md-12">
                    	<table style="width: 100%">
	                    	<tr class="negrita centrar" >
	                    		<td colspan="2">Diseño</td>
	                    		<td>Tiempo de límite</td>
	                    		<td>Tiempo de ejecución</td>
	                    		<td colspan="2">Diseño correcto</td>
	                    		<td colspan="2">Diseño incorrecto</td>
	                    		<td colspan="3">Puntaje</td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>1.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/101.png" alt=""></td>
	                    		<td>30’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas1">00</div>
										<input type="button" class="boton" id="inicio1" value="Start &#9658;" onclick="inicio('inicio1','parar1','Horas1');">
										<input type="button" class="boton" id="parar1" value="Stop &#8718;" onclick="parar('inicio1','parar1');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="si1" name="ra1" value="si">
									  <label for="si1">SI</label>
									</div>
								</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="no1" name="ra1" value="no">
									  <label for="no1">NO</label>
									</div>
	                    		</td>
	                    		<td><font size="1">Intento 1</font><br>
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="32" height="18.19999999999999" style="">
										<rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>
										<g style="" class="currentLayer">
											<rect  fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" id="cd1" x="2" y="3" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd1')" estado="0"/>
											<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="15.888885498046875" y="3" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd2')" id="cd2"  estado="0"/></g></svg>
	                    		</td>
	                    		<td><font size="1">Intento 2</font><br>
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="32" height="18.19999999999999" style="">
										<rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>
										<g style="" class="currentLayer">
											<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" id="cd3" x="2" y="3" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd3')"  estado="0" />
											<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="15.888885498046875" y="3" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd4')" id="cd4"  estado="0"/></g></svg>
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"> <font size="1">intento&nbsp;&nbsp;&nbsp;intento</font><br><font size="1">2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</font><br><font size="4">&nbsp;&nbsp;&nbsp;1 <input type="radio" name="puntaje1" value="1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2<input type="radio" name="puntaje1" value="2"></font>
	                    		</td>
	                    		<td class="noborderiz"></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>2.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/202.png" alt=""></td>
	                    		<td>45’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas2">00</div>
										<input type="button" class="boton" id="inicio2" value="Start &#9658;" onclick="inicio('inicio2','parar2','Horas2');">
										<input type="button" class="boton" id="parar2" value="Stop &#8718;" onclick="parar('inicio2','parar2');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="si2" name="ra2" value="si">
									  <label for="si2">SI</label>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="no2" name="ra2" value="no">
									  <label for="no2">NO</label>
									</div>
	                    		</td>
	                    		<td><font size="1">Intento 1</font><br>
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="32.59999999999991" height="31.600000000000023" style="">
                                    <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>
                                <g style="" class="currentLayer">
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="2" y="3" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd5')" id="cd5"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="15.888885498046875" y="16.333328247070312" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd6')" id="cd6"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="2" y="16.333328247070312" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd7')" id="cd7"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="15.888885498046875" y="3" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd8')" id="cd8"  estado="0"/></g></svg>
	                    		</td>
	                    		<td><font size="1">Intento 2</font><br>
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="32.59999999999991" height="31.600000000000023" style="">
                                    <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>
                                <g style="" class="currentLayer">
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="2" y="3" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd9')" id="cd9"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="15.888885498046875" y="16.333328247070312" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd10')" id="cd10"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="2" y="16.333328247070312" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd11')" id="cd11"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="15.888885498046875" y="3" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd12')" id="cd12"  estado="0"/></g></svg>
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"> <font size="1">intento&nbsp;&nbsp;&nbsp;intento</font><br><font size="1">2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</font><br><font size="4">&nbsp;&nbsp;&nbsp;1 <input type="radio" name="puntaje2" value="1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2<input type="radio" name="puntaje2" value="2"></font>
	                    		</td>
	                    		<td class="noborderiz"></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>3.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/22.png" alt=""></td>
	                    		<td>45’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas3">00</div>
										<input type="button" class="boton" id="inicio3" value="Start &#9658;" onclick="inicio('inicio3','parar3','Horas3');">
										<input type="button" class="boton" id="parar3" value="Stop &#8718;" onclick="parar('inicio3','parar3');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="si3" name="ra3" value="si">
									  <label for="si3">SI</label>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="no3" name="ra3" value="no">
									  <label for="no3">NO</label>
									</div>
	                    		</td>
	                    		<td><font size="1">Intento 1</font><br>
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="32.59999999999991" height="31.600000000000023" style="">
                                    <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>
                                <g style="" class="currentLayer">
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="2" y="3" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd13')" id="cd13"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="15.888885498046875" y="16.333328247070312" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd14')" id="cd14"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="2" y="16.333328247070312" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd15')" id="cd15"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="15.888885498046875" y="3" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd16')" id="cd16"  estado="0"/></g></svg>
	                    		</td>
	                    		<td><font size="1">Intento 2</font><br>
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="32.59999999999991" height="31.600000000000023" style="">
                                    <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>
                                <g style="" class="currentLayer">
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="2" y="3" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd17')" id="cd17"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="15.888885498046875" y="16.333328247070312" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd18')" id="cd18"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="2" y="16.333328247070312" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd19')" id="cd19"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#222222" stroke-width="2" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="15.888885498046875" y="3" width="14" height="13" style="color: rgb(0, 0, 0);" onClick="actualizar('cd20')" id="cd20"  estado="0"/></g></svg>
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"> <font size="1">intento&nbsp;&nbsp;&nbsp;intento</font><br><font size="1">2&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1</font><br><font size="4">&nbsp;&nbsp;&nbsp;1 <input type="radio" name="puntaje3" value="1"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;2<input type="radio" name="puntaje3" value="2"></font>
	                    		</td>
	                    		<td class="noborderiz"></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>4.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/4.png" alt=""></td>
	                    		<td>45’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas4">00</div>
										<input type="button" class="boton" id="inicio4" value="Start &#9658;" onclick="inicio('inicio4','parar4','Horas4');">
										<input type="button" class="boton" id="parar4" value="Stop &#8718;" onclick="parar('inicio4','parar4');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="si4" name="ra4" value="si">
									  <label for="si2">SI</label>
									</div>
								</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="no4" name="ra4" value="no">
									  <label for="no4">NO</label>
									</div>
	                    		</td>
	                    		<td  colspan="2">
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="35.4532585144043" height="32.339942932128906" style="">
	                    				<rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/><g class="currentLayer" style="">
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" id="svg_1" d="M9.398863066911815,10.145425645330164 " style="color: rgb(255, 255, 255);" class=""/>
	                    					<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="0.7108711004257202" y="1" width="17" height="15" style="color: rgb(255, 255, 255);" onClick="actualizar('cd21')" id="cd21"  estado="0"/>
	                    					<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="17.58587074279785" y="16.3125" width="17" height="15" style="color: rgb(255, 255, 255);" onClick="actualizar('cd22')" id="cd22"  estado="0"/>
	                    					<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="0.7108711004257202" y="16.3125" width="17" height="15" style="color: rgb(255, 255, 255);" onClick="actualizar('cd23')" id="cd23"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M17.446360950792414,16.39969734147261 L17.446360950792414,1.399698754858613 L34.321360138935155,16.39969734147261 L17.446360950792414,16.39969734147261 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd24')" id="cd24"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M17.855140897162578,16.194333080218236 L17.855140897162578,1.1328189297136984 L34.73144011772032,16.194333080218236 L17.855140897162578,16.194333080218236 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd25')" id="cd25"  estado="0" transform="rotate(-178.9051971435547 26.293289184570312,8.663576126098631) "/></g></svg>
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left">4<input type="radio" name="puntaje4" value="4"></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>5.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/5.png" alt=""></td>
	                    		<td>45’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas5">00</div>
										<input type="button" class="boton" id="inicio5" value="Start &#9658;" onclick="inicio('inicio5','parar5','Horas5');">
										<input type="button" class="boton" id="parar5" value="Stop &#8718;" onclick="parar('inicio5','parar5');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="si5" name="ra5" value="si">
									  <label for="si5">SI</label>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="no5" name="ra5" value="no">
									  <label for="no5">NO</label>
									</div>
	                    		</td>
	                    		<td  colspan="2">
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="35.4532585144043" height="32.339942932128906" style="">
	                    				<rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/><g class="currentLayer" style="">
	                    				<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M9.398863066911815,10.145425645330164 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd26')" id="cd26"  estado="0"/>
	                    				<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="17.58587074279785" y="16.3125" width="17" height="15" style="color: rgb(255, 255, 255);" onClick="actualizar('cd27')" id="cd27"  estado="0"/>
	                    				<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="17.58587074279785" y="1" width="17" height="15" style="color: rgb(255, 255, 255);" onClick="actualizar('cd28')" id="cd28"  estado="0"/>
	                    				<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.5827749741273047,16.474038571032107 L1.5827749741273047,0.18651540557127594 L16.414650102758827,16.474038571032107 L1.5827749741273047,16.474038571032107 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd29')" id="cd29"  estado="0" transform="rotate(90.6878662109375 8.99871253967285,8.330277442932127) "/>
	                    				<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M2.200227539814187,16.469477246936663 L2.200227539814187,0.3204138416619592 L16.426543274172452,16.469477246936663 L2.200227539814187,16.469477246936663 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd30')" id="cd30"  estado="0" transform="rotate(-90.18712615966797 9.313385963439941,8.39494514465332) "/>
	                    				<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M0.8477169945160166,30.95784252762615 L0.8477169945160166,15.957193058352534 L17.450608679895968,30.95784252762615 L0.8477169945160166,30.95784252762615 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd31')" id="cd31"  estado="0" transform="rotate(-179.81736755371094 9.149163246154783,23.457517623901367) "/>
	                    				<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M0.779692521253472,31.36568426593726 L0.779692521253472,15.774136271401233 L17.65469214353645,31.36568426593726 L0.779692521253472,31.36568426593726 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd32')" id="cd32"  estado="0"/></g></svg>
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left">4<input type="radio" name="puntaje5" value="4"></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>6.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/6.png" alt=""></td>
	                    		<td>75’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas6">00</div>
										<input type="button" class="boton" id="inicio6" value="Start &#9658;" onclick="inicio('inicio6','parar6','Horas6');">
										<input type="button" class="boton" id="parar6" value="Stop &#8718;" onclick="parar('inicio6','parar6');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="si6" name="ra6" value="si">
									  <label for="si6">SI</label>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="no6" name="ra6" value="no">
									  <label for="no6">NO</label>
									</div>
	                    		</td>
	                    		<td  colspan="2">
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="35.4532585144043" height="32.339942932128906" style="">
	                    				<rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>   
	                    				<g class="currentLayer" style="">
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M9.534917493343471,10.213452858545992 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd33')" id="cd33"  estado="0"/>
	                    					<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="17.721925735473633" y="1.0680272579193115" width="17" height="15" style="color: rgb(255, 255, 255);" onClick="actualizar('cd34')" id="cd34"  estado="0"/>
	                    					<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="0.6100136637687683" y="1.0680280923843384" width="17" height="15" style="color: rgb(255, 255, 255);" onClick="actualizar('cd35')" id="cd35"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.6159249796900006,32.42272526679369 L1.6159249796900006,15.346427407197298 L16.794689497633193,32.42272526679369 L1.6159249796900006,32.42272526679369 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd36')" id="cd36"  estado="0" transform="rotate(89.35741424560547 9.205307960510254,23.88457679748535) "/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.7474731483380976,32.68898700763734 L1.7474731483380976,15.541628393410017 L16.578722435532065,32.68898700763734 L1.7474731483380976,32.68898700763734 z" style="color: rgb(255, 255, 255);"  transform="rotate(-91.29729461669922 9.163098335266115,24.115306854248047) " onClick="actualizar('cd37')" id="cd37"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M17.990415848991724,31.339855342956977 L17.990415848991724,16.319396955861215 L34.317724666623896,31.339855342956977 L17.990415848991724,31.339855342956977 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd38')" id="cd38"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M18.09568682267806,31.241851724166086 L18.09568682267806,16.241826342543817 L34.697887760654126,31.241851724166086 L18.09568682267806,31.241851724166086 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd39')" id="cd39"  estado="0" transform="rotate(-179.81736755371094 26.396787643432617,23.741838455200195) "/></g></svg>
                                </td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left">4<input type="radio" name="puntaje6" value="4"></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>7.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/7.png" alt=""></td>
	                    		<td>75’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas7">00</div>
										<input type="button" class="boton" id="inicio7" value="Start &#9658;" onclick="inicio('inicio7','parar7','Horas7');">
										<input type="button" class="boton" id="parar7" value="Stop &#8718;" onclick="parar('inicio7','parar7');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="si7" name="ra7" value="si">
									  <label for="si7">SI</label>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="no7" name="ra7" value="no">
									  <label for="no7">NO</label>
									</div>
	                    		</td>
	                    		<td  colspan="2">
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="35.4532585144043" height="32.339942932128906" style="">
	                    				<rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>                                
	                    				<g class="currentLayer" style="">
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M9.534917493343471,10.213452858545992 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd40')" id="cd40"  estado="0"/>
	                    					<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="49.05766677856445" y="24.461528778076172" width="17" height="15" style="color: rgb(255, 255, 255);" onClick="actualizar('cd41')" id="cd41"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.6159249796900008,17.40467507300707 L1.6159249796900008,0.32837721341067727 L16.794689497633193,17.40467507300707 L1.6159249796900008,17.40467507300707 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd42')" id="cd42"  estado="0" transform="rotate(89.35741424560547 9.205307960510252,8.86652660369873) "/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.7474731483380976,17.670936813850716 L1.7474731483380976,0.5235781996233957 L16.578722435532065,17.670936813850716 L1.7474731483380976,17.670936813850716 z" style="color: rgb(255, 255, 255);" transform="rotate(-91.29729461669922 9.163098335266113,9.097256660461426) " onClick="actualizar('cd43')" id="cd43"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M61.747473148338095,77.67093681385072 L61.747473148338095,60.523578199623394 L76.57872243553206,77.67093681385072 L61.747473148338095,77.67093681385072 z" style="color: rgb(255, 255, 255);" transform="rotate(-91.29729461669922 69.16310119628906,69.09725952148438) " onClick="actualizar('cd44')" id="cd44"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M18.763368313999294,32.60218191030746 L18.763368313999294,15.596997564350886 L33.79558368850025,32.60218191030746 L18.763368313999294,32.60218191030746 z" style="color: rgb(255, 255, 255);" transform="rotate(-90.85752868652344 26.27947616577148,24.099588394165036) " onClick="actualizar('cd45')" id="cd45"  estado="0"/>
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M29.53491749334347,30.213452858545992 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd46')" id="cd46"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M17.990415848991724,16.321805149170356 L17.990415848991724,1.3013467620745942 L34.317724666623896,16.321805149170356 L17.990415848991724,16.321805149170356 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd47')" id="cd47"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M0.7340987096341406,31.700866848083933 L0.7340987096341406,16.68040846098817 L17.56682312146962,31.700866848083933 L0.7340987096341406,31.700866848083933 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd48')" id="cd48"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M18.09568682267806,16.223801530379465 L18.09568682267806,1.2237761487571959 L34.697887760654126,16.223801530379465 L18.09568682267806,16.223801530379465 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd49')" id="cd49"  estado="0" transform="rotate(-179.81736755371094 26.396787643432617,8.723788261413574) "/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M18.75321440997829,32.33096390418451 L18.75321440997829,15.813014863949558 L33.83749082007167,32.33096390418451 L18.75321440997829,32.33096390418451 z" style="color: rgb(255, 255, 255);" transform="rotate(90.45693969726562 26.295352935791016,24.071989059448242) " onClick="actualizar('cd50')" id="cd50"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.0559792876966259,31.675297119549654 L1.0559792876966259,16.67527173792739 L17.802122829048482,31.675297119549654 L1.0559792876966259,31.675297119549654 z" style="color: rgb(255, 255, 255);" transform="rotate(-179.81736755371094 9.429051399230955,24.175283432006836) " onClick="actualizar('cd51')" id="cd51"  estado="0"/></g></svg>
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left">4<input type="radio" name="puntaje7" value="4"></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>8.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/8.png" alt=""></td>
	                    		<td>75’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas8">00</div>
										<input type="button" class="boton" id="inicio8" value="Start &#9658;" onclick="inicio('inicio8','parar8','Horas8');">
										<input type="button" class="boton" id="parar8" value="Stop &#8718;" onclick="parar('inicio8','parar8');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="si8" name="ra8" value="si">
									  <label for="si8">SI</label>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="no8" name="ra8" value="no">
									  <label for="no8">NO</label>
									</div>
	                    		</td>
	                    		<td  colspan="2">
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="35.4532585144043" height="32.339942932128906" style="">
	                    				<rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>                                
	                    				<g class="currentLayer" style="">
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M26.28581966924679,10.141250697591516 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd52')" id="cd52"  estado="0"/>
	                    					<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="17.64972496032715" y="16.519290924072266" width="17" height="15" style="color: rgb(255, 255, 255);" onClick="actualizar('cd53')" id="cd53"  estado="0"/>
	                    					<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="0.6100168228149414" y="1.2846347093582153" width="17" height="15" style="color: rgb(255, 255, 255);" onClick="actualizar('cd54')" id="cd54"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M18.36682715559332,17.332472912052594 L18.36682715559332,0.256175052456202 L33.545591673536514,17.332472912052594 L18.36682715559332,17.332472912052594 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd55')" id="cd55"  estado="0" transform="rotate(89.35741424560547 25.95621109008789,8.79432487487793) "/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M18.49837532424142,17.59873465289624 L18.49837532424142,0.4513760386689203 L33.329624611435385,17.59873465289624 L18.49837532424142,17.59873465289624 z" style="color: rgb(255, 255, 255);" transform="rotate(-91.29729461669922 25.91400146484375,9.025054931640623) " onClick="actualizar('cd56')" id="cd56"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M61.747473148338095,77.67093681385072 L61.747473148338095,60.523578199623394 L76.57872243553206,77.67093681385072 L61.747473148338095,77.67093681385072 z" style="color: rgb(255, 255, 255);" transform="rotate(-91.29729461669922 69.16310119628906,69.09725952148438) " onClick="actualizar('cd57')" id="cd57"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.3626464957905995,32.60218191030746 L1.3626464957905995,15.596997564350886 L16.394861870291557,32.60218191030746 L1.3626464957905995,32.60218191030746 z" style="color: rgb(255, 255, 255);" transform="rotate(-90.85752868652344 8.878754615783691,24.09958839416504) " onClick="actualizar('cd58')" id="cd58"  estado="0"/>
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M12.495206494808315,30.357857180454943 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd59')" id="cd59"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.352492591769597,32.33096390418451 L1.352492591769597,15.813014863949558 L16.436769001862977,32.33096390418451 L1.352492591769597,32.33096390418451 z" style="color: rgb(255, 255, 255);" transform="rotate(90.45693969726562 8.894631385803223,24.07198905944824) " onClick="actualizar('cd60')" id="cd60"  estado="0"/></g></svg>
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left">4<input type="radio" name="puntaje8" value="4"></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>9.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/9.png" alt=""></td>
	                    		<td>75’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas9">00</div>
										<input type="button" class="boton" id="inicio9" value="Start &#9658;" onclick="inicio('inicio9','parar9','Horas9');">
										<input type="button" class="boton" id="parar9" value="Stop &#8718;" onclick="parar('inicio9','parar9');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="si9" name="ra9" value="si">
									  <label for="si9">SI</label>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="no9" name="ra9" value="no">
									  <label for="no9">NO</label>
									</div>
	                    		</td>
	                    		<td  colspan="2">
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="35.4532585144043" height="32.339942932128906" style="">
	                    				<rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>                                
	                    				<g class="currentLayer" style="">
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M26.28581966924679,10.141250697591516 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd61')" id="cd61"  estado="0"/>
	                    					<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="41.90965270996094" y="10.093297958374023" width="17" height="15" style="color: rgb(255, 255, 255);" onClick="actualizar('cd62')" id="cd62"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M18.25853984128293,17.22539233378124 L18.25853984128293,0.3656869713085818 L33.43730435922612,17.22539233378124 L18.25853984128293,17.22539233378124 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd63')" id="cd63"  estado="0" transform="rotate(89.35741424560547 25.847923278808587,8.795538902282715) "/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M17.780522467283504,30.768872473910513 L17.780522467283504,16.435671429387543 L34.69106428036863,30.768872473910513 L17.780522467283504,30.768872473910513 z" style="color: rgb(255, 255, 255);" transform="rotate(179.59129333496094 26.23579216003418,23.602272033691406) " onClick="actualizar('cd64')" id="cd64"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M0.8117480685075751,15.464412028012173 L0.8117480685075751,1.1312109834892006 L17.43472668057616,15.464412028012173 L0.8117480685075751,15.464412028012173 z" style="color: rgb(255, 255, 255);" transform="rotate(-179.04368591308594 9.123237609863281,8.297811508178713) " onClick="actualizar('cd65')" id="cd65"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M17.845106546858183,30.89465638175476 L17.845106546858183,16.129613874186084 L34.61216106961399,30.89465638175476 L17.845106546858183,30.89465638175476 z" style="color: rgb(255, 255, 255);" transform="rotate(-0.8045989871025085 26.228633880615238,23.512134552001875) " onClick="actualizar('cd66')" id="cd66"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M0.9543949223669876,16.31427119486559 L0.9543949223669876,0.8994733365419508 L17.073721992767855,16.31427119486559 L0.9543949223669876,16.31427119486559 z" style="color: rgb(255, 255, 255);" transform="rotate(-0.8045989871025085 9.014059066772386,8.60687160491945) " onClick="actualizar('cd67')" id="cd67"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M18.422051757826168,17.52412032340249 L18.422051757826168,0.3767617091751685 L33.402571664748606,17.52412032340249 L18.422051757826168,17.52412032340249 z" style="color: rgb(255, 255, 255);" transform="rotate(-91.29729461669922 25.91231155395508,8.950440406799318) " onClick="actualizar('cd68')" id="cd68"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M61.747473148338095,77.67093681385072 L61.747473148338095,60.523578199623394 L76.57872243553206,77.67093681385072 L61.747473148338095,77.67093681385072 z" style="color: rgb(255, 255, 255);" transform="rotate(-91.29729461669922 69.16310119628906,69.09725952148438) " onClick="actualizar('cd69')" id="cd69"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.7597367002571367,32.05905727682149 L1.7597367002571367,15.270455395193906 L16.791952074758097,32.05905727682149 L1.7597367002571367,32.05905727682149 z" style="color: rgb(255, 255, 255);" transform="rotate(-90.85752868652344 9.275843620300291,23.664756774902344) " onClick="actualizar('cd70')" id="cd70"  estado="0"/>
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M12.639610816717266,30.646665824272844 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd71')" id="cd71"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.856745528690479,32.11492077787854 L1.856745528690479,15.596971737643589 L16.50667103995537,32.11492077787854 L1.856745528690479,32.11492077787854 z" style="color: rgb(255, 255, 255);" transform="rotate(90.45693969726562 9.181709289550788,23.8559455871582) " onClick="actualizar('cd72')" id="cd72"  estado="0"/></g></svg>
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left"><font size="1">31-37&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;21-30&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11-20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1-10</font><br><font size="2">&nbsp;&nbsp;4<input type="radio" name="puntaje9" value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5<input type="radio" name="puntaje9" value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6<input type="radio" name="puntaje9" value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7<input type="radio" name="puntaje9" value="7"></font></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>10.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/10.png" alt=""></td>
	                    		<td>75’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas10">00</div>
										<input type="button" class="boton" id="inicio10" value="Start &#9658;" onclick="inicio('inicio10','parar10','Horas10');">
										<input type="button" class="boton" id="parar10" value="Stop &#8718;" onclick="parar('inicio10','parar10');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="si10" name="ra10" value="si">
									  <label for="si10">SI</label>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
									  <input type="radio" id="no10" name="ra10" value="no">
									  <label for="no10">NO</label>
									</div>
	                    		</td>
	                    		<td  colspan="2">
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="35.4532585144043" height="32.339942932128906" style="">
	                    				<rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>                                
	                    				<g class="currentLayer" style="">
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M26.28581966924679,10.141250697591516 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd73')" id="cd73"  estado="0"/>
	                    					<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="41.90965270996094" y="10.093297958374023" width="17" height="15" style="color: rgb(255, 255, 255);" onClick="actualizar('cd74')" id="cd74"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M17.46430162830932,18.013436384317334 L17.46430162830932,1.1537310218446755 L34.59294441056828,18.013436384317334 L17.46430162830932,18.013436384317334 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd75')" id="cd75"  estado="0" transform="rotate(179.63670349121094 26.028621673583977,9.583583831787108) "/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M17.780522467283504,30.768872473910513 L17.780522467283504,16.435671429387543 L34.69106428036863,30.768872473910513 L17.780522467283504,30.768872473910513 z" style="color: rgb(255, 255, 255);" transform="rotate(179.59129333496094 26.23579216003418,23.602272033691406) " onClick="actualizar('cd76')" id="cd76"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M0.8068590396129551,16.050342658174532 L0.8068590396129551,1.1311701033589232 L17.429837651681538,16.050342658174532 L0.8068590396129551,16.050342658174532 z" style="color: rgb(255, 255, 255);" transform="rotate(-179.04368591308594 9.118348121643066,8.5907564163208) " onClick="actualizar('cd77')" id="cd77"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M17.845106546858183,30.89465638175476 L17.845106546858183,16.129613874186084 L34.61216106961399,30.89465638175476 L17.845106546858183,30.89465638175476 z" style="color: rgb(255, 255, 255);" transform="rotate(-0.8045989871025085 26.228633880615238,23.512134552001875) " onClick="actualizar('cd78')" id="cd78"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M0.9543949223669876,16.31427119486559 L0.9543949223669876,0.8994733365419508 L17.073721992767855,16.31427119486559 L0.9543949223669876,16.31427119486559 z" style="color: rgb(255, 255, 255);" transform="rotate(-0.8045989871025085 9.014059066772386,8.60687160491945) " onClick="actualizar('cd79')" id="cd79"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M17.755383675655164,16.23411832044066 L17.755383675655164,1.4825169979980708 L34.54552030274404,16.23411832044066 L17.755383675655164,16.23411832044066 z" style="color: rgb(255, 255, 255);" transform="rotate(0.6173050403594971 26.150451660156023,8.85831737518322) " onClick="actualizar('cd80')" id="cd80"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M61.747473148338095,77.67093681385072 L61.747473148338095,60.523578199623394 L76.57872243553206,77.67093681385072 L61.747473148338095,77.67093681385072 z" style="color: rgb(255, 255, 255);" transform="rotate(-91.29729461669922 69.16310119628906,69.09725952148438) " onClick="actualizar('cd81')" id="cd81"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.7597367002571367,32.05905727682149 L1.7597367002571367,15.270455395193906 L16.791952074758097,32.05905727682149 L1.7597367002571367,32.05905727682149 z" style="color: rgb(255, 255, 255);" transform="rotate(-90.85752868652344 9.275843620300291,23.664756774902344) " onClick="actualizar('cd82')" id="cd82"  estado="0"/>
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M12.639610816717266,30.646665824272844 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd83')" id="cd83"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.856745528690479,32.11492077787854 L1.856745528690479,15.596971737643589 L16.50667103995537,32.11492077787854 L1.856745528690479,32.11492077787854 z" style="color: rgb(255, 255, 255);" transform="rotate(90.45693969726562 9.181709289550788,23.8559455871582) " onClick="actualizar('cd84')" id="cd84"  estado="0"/></g></svg>
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left"><font size="1">31-37&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;21-30&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;11-20&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1-10</font><br><font size="2">&nbsp;&nbsp;4<input type="radio" name="puntaje10" value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5<input type="radio" name="puntaje10" value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6<input type="radio" name="puntaje10" value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7<input type="radio" name="puntaje10" value="7"></font></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>11.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/11.png" alt=""></td>
	                    		<td>120’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas11">00</div>
										<input type="button" class="boton" id="inicio11" value="Start &#9658;" onclick="inicio('inicio11','parar11','Horas11');">
										<input type="button" class="boton" id="parar11" value="Stop &#8718;" onclick="parar('inicio11','parar11');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
	                    			<input type="radio" id="si11" name="ra11" value="si">
									  <label for="si11">SI</label>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
	                    			<input type="radio" id="no11" name="ra11" value="no">
									  <label for="no11">NO</label>
									</div>
	                    		</td>
	                    		<td  colspan="2">
									<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="39.635738372802734" height="35.67353820800781" style="">
										<rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>                                
										<g class="currentLayer" style="">
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M61.747473148338095,77.67093681385072 L61.747473148338095,60.523578199623394 L76.57872243553206,77.67093681385072 L61.747473148338095,77.67093681385072 z" style="color: rgb(255, 255, 255);" transform="rotate(-91.29729461669922 69.16310119628906,69.09725952148438) " onClick="actualizar('cd85')" id="cd85"  estado="0"/>
											<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M63.8423600690366,70.78412271819374 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd86')" id="cd86"  estado="0"/>
											<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="13.898063659667969" y="12.254280090332031" width="12.276050567626953" height="11.487116813659668" style="color: rgb(255, 255, 255);" onClick="actualizar('cd87')" id="cd87"  estado="0"/>
											<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M13.355218182673646,33.74078514843787 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd88')" id="cd88"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M13.7645112337013,34.65193697023908 L13.898919739031811,23.942843168594106 L25.864019569017962,34.805167048651896 L13.7645112337013,34.65193697023908 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd89')" id="cd89"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M26.205827800405178,1.0291973439702577 L26.28120262564368,12.242146215967663 L13.739337761809104,1.1235666205602053 L26.205827800405178,1.0291973439702577 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd90')" id="cd90"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M13.901518254327824,12.479405049351874 L13.750907061253937,1.0988923447022723 L26.261324824381667,12.295206141769059 L13.901518254327824,12.479405049351874 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd91')" id="cd91"  estado="0"/>
											<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M32.287442603574426,7.7265268157341005 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd92')" id="cd92"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M37.993792527357286,0.9482454261295303 L38.05979208630304,12.234451310846081 L26.451352994588653,1.0276039110427337 L37.993792527357286,0.9482454261295303 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd93')" id="cd93"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M13.65741559929749,23.959889367021837 L13.723415158243244,34.53683246517902 L2.1149760665288637,24.03426070029865 L13.65741559929749,23.959889367021837 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd94')" id="cd94"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M25.943476125131877,23.72346851878081 L26.0112902964991,34.753164643219854 L14.083685166310413,23.801023366036777 L25.943476125131877,23.72346851878081 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd95')" id="cd95"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M26.335016648590308,12.226057520166476 L26.444899104629773,1.1678251880662511 L37.94280354091056,12.361668473489154 L26.335016648590308,12.226057520166476 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd96')" id="cd96"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M0.758527351361864,34.48666434511589 L0.9007740786733849,23.153054600626987 L13.56363561846899,34.648830252149175 L0.758527351361864,34.48666434511589 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd97')" id="cd97"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M13.715973674667804,12.453949252055999 L0.9267155589456029,12.650936646484205 L13.55115848030722,1.1228140383957945 L13.715973674667804,12.453949252055999 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd98')" id="cd98"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M13.883622016102798,23.796183522116365 L1.0943639003805952,23.993170916544567 L13.718806821742216,12.465048308456158 L13.883622016102798,23.796183522116365 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd99')" id="cd99"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M38.192633220493256,23.55630115796774 L25.654847696649313,23.744800480481665 L38.03105875391624,12.713417950701876 L38.192633220493256,23.55630115796774 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd100')" id="cd100"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M38.43200826032537,34.590627368313456 L25.89422273648143,34.77778006774642 L38.27043379374835,23.825204793777527 L38.43200826032537,34.590627368313456 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd101')" id="cd101"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.0259591879129166,1.0170907486231913 L13.500477039825546,1.1194680936598036 L0.9369476027566461,12.502215044886787 L1.0259591879129166,1.0170907486231913 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd102')" id="cd102"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M0.9421366260697834,12.524904562070759 L13.41665447798241,12.627281907107372 L0.8531250409135128,24.01002885833436 L0.9421366260697834,12.524904562070759 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd103')" id="cd103"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M26.169056541983675,12.276534900078323 L38.060962352950305,12.378174259774553 L26.084202169307385,23.67886887432206 L26.169056541983675,12.276534900078323 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd104')" id="cd104"  estado="0"/>
											<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M26.169056541983675,23.78235742433553 L38.060962352950305,23.880484391806103 L26.084202169307385,34.79065635816582 L26.169056541983675,23.78235742433553 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd105')" id="cd105"  estado="0"/></g></svg>
	                    			
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left"><font size="1">71-120&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;51-70&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;31-50&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1-30</font><br><font size="2">&nbsp;&nbsp;&nbsp;4<input type="radio" name="puntaje11" value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5<input type="radio" name="puntaje11" value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6<input type="radio" name="puntaje11" value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7<input type="radio" name="puntaje11" value="7"></font></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>12.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/12.png" alt=""></td>
	                    		<td>120’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas12">00</div>
										<input type="button" class="boton" id="inicio12" value="Start &#9658;" onclick="inicio('inicio12','parar12','Horas12');">
										<input type="button" class="boton" id="parar12" value="Stop &#8718;" onclick="parar('inicio12','parar12');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
	                    			<input type="radio" id="si12" name="ra12" value="si">
									  <label for="si12">SI</label>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
	                    			<input type="radio" id="no12" name="ra12" value="no">
									  <label for="no12">NO</label>
									</div>
	                    		</td>
	                    		<td  colspan="2">
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="39.635738372802734" height="35.67353820800781" style="">
	                    				<rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>                                
	                    				<g class="currentLayer" style="">
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M61.747473148338095,77.67093681385072 L61.747473148338095,60.523578199623394 L76.57872243553206,77.67093681385072 L61.747473148338095,77.67093681385072 z" style="color: rgb(255, 255, 255);" transform="rotate(-91.29729461669922 69.16310119628906,69.09725952148438) " onClick="actualizar('cd106')" id="cd106"  estado="0"/>
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M63.8423600690366,70.78412271819374 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd107')" id="cd107"  estado="0"/>
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M13.355218182673646,33.74078514843787 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd108')" id="cd108"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M13.7645112337013,34.65193697023908 L13.898919739031811,23.942843168594106 L25.864019569017962,34.805167048651896 L13.7645112337013,34.65193697023908 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd109')" id="cd109"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M13.764511233701299,23.586645207887088 L13.898919739031811,12.87755140624212 L25.864019569017962,23.739875286299906 L13.764511233701299,23.586645207887088 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd110')" id="cd110"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M26.205827800405178,1.0291973439702577 L26.28120262564368,12.242146215967663 L13.739337761809104,1.1235666205602053 L26.205827800405178,1.0291973439702577 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd111')" id="cd111"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M13.901518254327824,12.479405049351874 L13.750907061253937,1.0988923447022723 L26.261324824381667,12.295206141769059 L13.901518254327824,12.479405049351874 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd112')" id="cd112"  estado="0"/>
	                    					<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="2" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M32.287442603574426,7.7265268157341005 " style="color: rgb(255, 255, 255);" onClick="actualizar('cd113')" id="cd113"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M37.95684585697538,1.0517624462989403 L38.019323192621414,12.198478488289178 L27.030396038489584,1.1301401142137104 L37.95684585697538,1.0517624462989403 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd114')" id="cd114"  estado="0" transform="rotate(90.85381317138672 32.52486038208008,6.625120162963866) "/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M13.65741559929749,23.959889367021837 L13.723415158243244,34.53683246517902 L2.1149760665288637,24.03426070029865 L13.65741559929749,23.959889367021837 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd115')" id="cd115"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M25.943476125131877,23.72346851878081 L26.0112902964991,34.753164643219854 L14.083685166310413,23.801023366036777 L25.943476125131877,23.72346851878081 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd116')" id="cd116"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M25.87474839342717,12.658176756428816 L25.942562564794386,23.687872880867864 L14.014957434605705,12.735731603684783 L25.87474839342717,12.658176756428816 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd117')" id="cd117"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M0.758527351361864,34.48666434511589 L0.9007740786733849,23.153054600626987 L13.56363561846899,34.648830252149175 L0.758527351361864,34.48666434511589 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd118')" id="cd118"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M13.715973674667804,12.453949252055999 L0.9267155589456029,12.650936646484205 L13.55115848030722,1.1228140383957945 L13.715973674667804,12.453949252055999 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd119')" id="cd119"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M13.883622016102798,23.796183522116365 L1.0943639003805952,23.993170916544567 L13.718806821742216,12.465048308456158 L13.883622016102798,23.796183522116365 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd120')" id="cd120"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M38.192633220493256,23.55630115796774 L25.654847696649313,23.744800480481665 L38.03105875391624,12.713417950701876 L38.192633220493256,23.55630115796774 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd121')" id="cd121"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M38.43200826032537,34.590627368313456 L25.89422273648143,34.77778006774642 L38.27043379374835,23.825204793777527 L38.43200826032537,34.590627368313456 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd122')" id="cd122"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M1.0259591879129166,1.0170907486231913 L13.500477039825546,1.1194680936598036 L0.9369476027566461,12.502215044886787 L1.0259591879129166,1.0170907486231913 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd123')" id="cd123"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M0.9421366260697834,12.524904562070759 L13.41665447798241,12.627281907107372 L0.8531250409135128,24.01002885833436 L0.9421366260697834,12.524904562070759 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd124')" id="cd124"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M26.365845133872963,1.0472421248638721 L38.02146465483821,1.1483941917244602 L26.282676775636144,12.39490952434889 L26.365845133872963,1.0472421248638721 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd125')" id="cd125"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M26.168569598700923,12.276534900078323 L37.99223308887191,12.378174259774553 L26.08420216726123,23.67886887432206 L26.168569598700923,12.276534900078323 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd126')" id="cd126"  estado="0"/>
	                    					<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M26.169056541983675,23.78235742433553 L38.060962352950305,23.880484391806103 L26.084202169307385,34.79065635816582 L26.169056541983675,23.78235742433553 z" style="color: rgb(255, 255, 255);" onClick="actualizar('cd127')" id="cd127"  estado="0"/></g></svg>
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left"><font size="1">71-120&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;51-70&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;31-50&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1-30</font><br><font size="2">&nbsp;&nbsp;&nbsp;4<input type="radio" name="puntaje12" value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5<input type="radio" name="puntaje12" value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6<input type="radio" name="puntaje12" value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7<input type="radio" name="puntaje12" value="7"></font></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>13.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/13.png" alt=""></td>
	                    		<td>120’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas13">00</div>
										<input type="button" class="boton" id="inicio13" value="Start &#9658;" onclick="inicio('inicio13','parar13','Horas13');">
										<input type="button" class="boton" id="parar13" value="Stop &#8718;" onclick="parar('inicio13','parar13');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
	                    			<input type="radio" id="si13" name="ra13" value="si">
									  <label for="si13">SI</label>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
	                    			<input type="radio" id="no13" name="ra13" value="no">
									  <label for="no13">NO</label>
									</div>
	                    		</td>
	                    		<td  colspan="2">
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="67.70940399169922" height="60.41880416870117">
                                    <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>
                                <g style="" class="currentLayer">
                                	<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M12.964037391301606,20.392748559137807 L22.651570852392496,10.24606823258899 L23.175120226750586,30.019181599244334 L12.964037391301606,20.392748559137807 z" style="color: rgb(0, 0, 0);" onClick="actualizar('cd128')" id="cd128"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M32.858014815362566,19.968835123536863 L23.314381601228554,30.249287113217733 L22.51231124787937,10.485394734485311 L32.858014815362566,19.968835123536863 z" style="color: rgb(0, 0, 0);" onClick="actualizar('cd129')" id="cd129"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M53.035306576926615,19.997908710433478 L43.5510142713337,30.90997163430751 L42.053983145481936,10.573434959784187 L53.035306576926615,19.997908710433478 z" style="color: rgb(0, 0, 0);" onClick="actualizar('cd130')" id="cd130"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M32.332437670212116,21.473472867394122 L41.52733322584064,10.883838699435444 L43.367637510700376,30.934763930301216 L32.332437670212116,21.473472867394122 z" style="color: rgb(0, 0, 0);" onClick="actualizar('cd131')" id="cd131"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M31.818979342834304,21.164674964697866 L42.79232893948729,30.577312431706396 L23.917325008738842,30.260671119418326 L31.818979342834304,21.164674964697866 z" style="color: rgb(0, 0, 0);" onClick="actualizar('cd132')" id="cd132"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M34.508541411366096,40.21724813575335 L23.44740270945715,30.50346077690972 L42.67172133063339,31.03867924323985 L34.508541411366096,40.21724813575335 z" style="color: rgb(0, 0, 0);" onClick="actualizar('cd133')" id="cd133"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M31.832451338452323,20.85411274599786 L22.65969725110319,10.694089843392241 L42.05696143729874,11.73921230514957 L31.832451338452323,20.85411274599786 z" style="color: rgb(0, 0, 0);" onClick="actualizar('cd134')" id="cd134"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="7.2931647300720215" y="23.04691505432129" width="12.399788856506348" height="13.866623878479004" style="color: rgb(0, 0, 0);" transform="matrix(0.6771449060607365,-0.7124144357550445,0.7169362375229984,0.6728740729334207,-16.858373753763313,19.098115858769585) " onClick="actualizar('cd135')" id="cd135"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="18.103424072265625" y="32.81288146972656" width="12.399788856506348" height="14.887245178222656" style="color: rgb(0, 0, 0);" transform="matrix(0.6771449060607365,-0.7124144357550445,0.7169362375229984,0.6728740729334207,-20.88521500266428,29.955054337096755) " onClick="actualizar('cd136')" id="cd136"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="46.791969299316406" y="23.48720359802246" width="14.933232307434082" height="14.887245178222656" style="color: rgb(0, 0, 0);" transform="matrix(0.656838640374941,-0.7309459165155278,0.7355853403841297,0.6526958812704919,-4.408608651171656,50.07617026675927) " onClick="actualizar('cd137')" id="cd137"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="29.197607040405273" y="43.10694885253906" width="12.733552932739258" height="14.911322593688965" style="color: rgb(0, 0, 0);" transform="matrix(0.6771449060607365,-0.7124144357550445,0.7169362375229984,0.6728740729334207,-24.794131961907144,41.14231632673183) " onClick="actualizar('cd138')" id="cd138"  estado="0"/>
                                	<rect fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="38.24665069580078" y="33.65484619140625" width="12.569087028503418" height="14.974309921264648" style="color: rgb(0, 0, 0);" transform="matrix(0.6771449060607365,-0.7124144357550445,0.7169362375229984,0.6728740729334207,-15.269226087161115,44.63759712525533) " onClick="actualizar('cd139')" id="cd139"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M25.007920038192367,17.756152660221854 L25.007920038192367,4.092870696505339 L39.776151503164286,17.756152660221854 L25.007920038192367,17.756152660221854 z" style="color: rgb(0, 0, 0);" transform="rotate(138.7902374267578 32.39203643798828,10.92451286315918) " onClick="actualizar('cd140')" id="cd140"  estado="0"/></g></svg>
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left"><font size="1">71-120&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;51-70&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;31-50&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1-30</font><br><font size="2">&nbsp;&nbsp;&nbsp;4<input type="radio" name="puntaje13" value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5<input type="radio" name="puntaje13" value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6<input type="radio" name="puntaje13" value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7<input type="radio" name="puntaje13" value="7"></font></td>
	                    	</tr>
	                    	<tr class="centrar">
	                    		<td>14.</td>
	                    		<td><img src="<?=base_url()?>assets/img/senales/14.png" alt=""></td>
	                    		<td>120’’</td>
	                    		<td>
	                    			<div id="contenedor">
										<div class="reloj" id="Horas14">00</div>
										<input type="button" class="boton" id="inicio14" value="Start &#9658;" onclick="inicio('inicio14','parar14','Horas14');">
										<input type="button" class="boton" id="parar14" value="Stop &#8718;" onclick="parar('inicio14','parar14');" disabled>
									</div>
	                    		</td>
	                    		<td>
	                    			<div>
	                    			<input type="radio" id="si14" name="ra14" value="si">
									  <label for="si14">SI</label>
									</div>
	                    		</td>
	                    		<td>
	                    			<div> 
	                    			<input type="radio" id="no14" name="ra14" value="no">
									  <label for="no14">NO</label>
									</div>
	                    		</td>
	                    		<td  colspan="2">
	                    			<svg xmlns="http://www.w3.org/2000/svg" xmlns:se="http://svg-edit.googlecode.com" xmlns:xlink="http://www.w3.org/1999/xlink" xmlns:dc="http://purl.org/dc/elements/1.1/" xmlns:cc="http://creativecommons.org/ns#" xmlns:rdf="http://www.w3.org/1999/02/22-rdf-syntax-ns#" xmlns:inkscape="http://www.inkscape.org/namespaces/inkscape" width="57.65868306148862" height="57.28143715857604">
                                    <rect id="backgroundrect" width="100%" height="100%" x="0" y="0" fill="#FFFFFF" stroke="none" class="" style=""/>
                                <g style="" class="currentLayer">
                                	<path fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M28.644264621314846,38.8641153446374 L28.644264621314846,19.583361749706732 L46.357260475748035,38.8641153446374 L28.644264621314846,38.8641153446374 z" style="color: rgb(0, 0, 0);" transform="rotate(177.496337890625 37.50076293945312,29.223739624023438) " onClick="actualizar('cd141')" id="cd141"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M19.302948875007473,47.965912448519234 L19.302948875007473,28.685158853588568 L37.01594472944066,47.965912448519234 L19.302948875007473,47.965912448519234 z" style="color: rgb(0, 0, 0);" transform="rotate(-92.22946166992188 28.159444808959957,38.32553482055663) " onClick="actualizar('cd142')" id="cd142"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M19.810578381297432,29.65995060121394 L19.810578381297432,10.37919700628327 L37.52357423573063,29.65995060121394 L19.810578381297432,29.65995060121394 z" style="color: rgb(0, 0, 0);" transform="rotate(90.99510192871094 28.667074203491207,20.019573211669922) " onClick="actualizar('cd143')" id="cd143"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M21.576286747877667,17.870601895131177 L21.576286747877667,3.845196682165321 L35.03929416530305,17.870601895131177 L21.576286747877667,17.870601895131177 z" style="color: rgb(0, 0, 0);" transform="rotate(134.58621215820312 28.30779457092285,10.857899665832521) " onClick="actualizar('cd144')" id="cd144"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M40.04339769578526,35.77899782018743 L40.04339769578526,21.98470183655443 L52.8596114075267,35.77899782018743 L40.04339769578526,35.77899782018743 z" style="color: rgb(0, 0, 0);" transform="rotate(-136.96710205078125 46.45149993896485,28.8818473815918) " onClick="actualizar('cd145')" id="cd145"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M32.58234572575814,25.694621726943826 L32.58234572575814,13.095709667655454 L44.17256558029474,25.694621726943826 L32.58234572575814,25.694621726943826 z" style="color: rgb(0, 0, 0);" transform="rotate(132.39300537109375 38.37745666503906,19.39516639709472) " onClick="actualizar('cd146')" id="cd146"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M12.594252943818638,26.852638008870187 L12.594252943818638,12.827232795904337 L26.05726036124402,26.852638008870187 L12.594252943818638,26.852638008870187 z" style="color: rgb(0, 0, 0);" transform="rotate(43.52035903930664 19.325757980346676,19.83993530273438) " onClick="actualizar('cd147')" id="cd147"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M3.8944073569332804,35.70437111705703 L3.8944073569332804,22.298854583492858 L16.793035789444136,35.70437111705703 L3.8944073569332804,35.70437111705703 z" style="color: rgb(0, 0, 0);" transform="rotate(44.20289611816406 10.343721389770499,29.001613616943363) " onClick="actualizar('cd148')" id="cd148"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M13.000350250989033,44.36254605563266 L13.000350250989033,32.5628377814677 L26.249968007541042,44.36254605563266 L13.000350250989033,44.36254605563266 z" style="color: rgb(0, 0, 0);" transform="rotate(-44.1148567199707 19.625158309936538,38.46269226074219) " onClick="actualizar('cd149')" id="cd149"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M21.742865978866647,53.34458257170303 L21.742865978866647,41.544874297538065 L34.992483735418666,53.34458257170303 L21.742865978866647,53.34458257170303 z" style="color: rgb(0, 0, 0);" transform="rotate(-44.1148567199707 28.367670059204116,47.44472885131835) " onClick="actualizar('cd150')" id="cd150"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M30.96442327567918,43.64398532273157 L30.96442327567918,31.844277048566603 L44.2140410322312,43.64398532273157 L30.96442327567918,43.64398532273157 z" style="color: rgb(0, 0, 0);" transform="rotate(-134.3761749267578 37.5892333984375,37.74412918090821) " onClick="actualizar('cd151')" id="cd151"  estado="0"/>
                                	<path fill="#ffffff" stroke="#000000" stroke-width="1" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" marker-start="" marker-mid="" marker-end="" d="M10.349502725181424,38.641987296098236 L10.349502725181424,19.36123370116757 L28.062498579614612,38.641987296098236 L10.349502725181424,38.641987296098236 z" style="color: rgb(0, 0, 0);" transform="rotate(-4.1343865394592285 19.206003189086893,29.00160789489745) " onClick="actualizar('cd152')" id="cd152"  estado="0"/>
                                	<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="1" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M-17.522542004497687,28.048045081953166 " style="color: rgb(0, 0, 0);" onClick="actualizar('cd153')" id="cd153"  estado="0"/>

                                	<path fill="#ffffff" fill-opacity="1" stroke="#000000" stroke-opacity="1" stroke-width="1" stroke-dasharray="none" stroke-linejoin="round" stroke-linecap="butt" stroke-dashoffset="" fill-rule="nonzero" opacity="1" marker-start="" marker-mid="" marker-end="" d="M23.914581930488822,16.67080009275764 " style="color: rgb(0, 0, 0);" onClick="actualizar('cd154')" id="cd154"  estado="0"/>

                                	<rect fill="#ffffff" stroke="#000000" stroke-linejoin="round" stroke-dashoffset="" fill-rule="nonzero" x="22.213668823242188" y="22.797342777252197" width="12.195415496826172" height="12.351424217224121" style="color: rgb(0, 0, 0);" transform="rotate(-43.897098541259766 28.31137657165528,28.973052978515625) " onClick="actualizar('cd155')" id="cd155"  estado="0"/></g></svg>
	                    		</td>
	                    		<td class="noborderder">0</td>
	                    		<td class="noborderder noborderiz"></td>
	                    		<td class="noborderiz" align="left"><font size="1">71-120&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;51-70&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;31-50&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;1-30</font><br><font size="2">&nbsp;&nbsp;&nbsp;4<input type="radio" name="puntaje14" value="4">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5<input type="radio" name="puntaje14" value="5">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6<input type="radio" name="puntaje14" value="6">&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;7<input type="radio" name="puntaje14" value="7"></font></td>
	                    	</tr>
	                    </table>
                    </div>
                    <div class="col-xl-12" style="padding:2px 17px 2px 2px">
        				<input width="50px" type="button" class="boton pull-right" id="guardar" value="Guardar" onclick="guardar();">
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
                				<input style="border: 2px solid black;" type="text" name="" >
                				<br><br>
                				<input style="border: 2px solid black;" type="text" name="">
                			</tr>
                		</table>
                	</div>
                </div>
            </div>
        </div>
    </div>
</div>
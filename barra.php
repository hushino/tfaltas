<script type="text/javascript">
function showNav(el) { el.getElementsByTagName('UL')[0].style.left='auto'; }
function hideNav(el) { el.getElementsByTagName('UL')[0].style.left='-999em'; }
</script>
<?php if (isset($_COOKIE["nombre"])) {
  $usur = $_COOKIE["nombre"];
} else { $usur = ''; } ?>
<div id="wpcombar">
	<div class="quicklinks">
	  <ul>
		  <li class="menupop" onmouseover="showNav(this)" onmouseout="hideNav(this)">
			  <ul> 
					  <?
							foreach ($menuitem[1] as $item) {
								?><li><a href="<? echo $item[1]; ?>"><? echo $item[0]; ?></a></li><?
							} ?>
						</ul>
					</li>

				</ul>
	  <ul>	
	    <li class="menupop" style="height: 28px; font-size:20px; line-height: 28px;"></li>
    		</ul>
		<ul>
			<li>
				<a href="/tfaltas/personas/ingper.php">
					<b>Igresar nueva infracción</b>
				</a>
		  </li>
	  </ul>
		<ul>
			<li>
					<a href="/tfaltas/sitecomp.php">
						<b>lista de causas</b>
					</a>
				</li>
	  </ul>
		<ul>
			<li>
					<a href="/tfaltas/exptes/infraclist.php">
						<b>estadisticas</b>
					</a>
				</li>
	  </ul>
		<ul>
			<li>
					<a href="/tfaltas/resoluciones/listaderes.php">
						<b>Resoluciones</b>
					</a>
				</li>
			<li>
					<a href="/tfaltas/escritos/escritos.php">
						<b>Modelos de Escritos</b>
					</a>
				</li>
			<li>
					<a href="/tfaltas/pases/pases.php">
						<b>Pases</b>
					</a>
				</li>
			<li class="menupop" onmouseover="showNav(this)" onmouseout="hideNav(this)">
                            SUBMENU
                            <ul>
					<a href="/tfaltas/productividad.php">
						<b>Productividad</b>
					</a>
					<a href="/tfaltas/siteselecvarios.php">
						<b>Listas Especiales</b>
					<a href="/tfaltas/buqrapida.php">
						<b>busqueda especial</b>
					</a>

			    </ul>
                        </li>
				<li>
					<a href="/tfaltas/librebusq.php">
						<b>Libre Deuda</b>
					</a>
				</li>
	  </ul>

  </div>
	<div id="admin-bar-rightlinks" class="quicklinks" style="position: absolute; right: 0;"><a><?php echo "Hola ". $usur . ", Bienvenido."; ?></a>
	</div>
</div>



<!doctype html>
<html>
<head>
    <meta charset="utf-8">
    <title>Generador de firmas</title>
    <style>
        .tabla_form tr:hover {
            background-color: #f5f5f5;
        }
        .tabla_form th,
        td {
            border-bottom: 1px solid #ddd;
        }
        th,
        td {
            border-bottom: none;
        }
    </style>
</head>

<body>
    <?php
if(!$_POST["nombre"]){
?>
    <form action="index.php" method="post">
        <table class="tabla_form" border="0" align="center" cellpadding="3" cellspacing="0"
            style="text-align: justify; font-family: Arial, Helvetica, sans-serif; font-size: 12px;">
            <tr>
                <td colspan="2">
                    <h1 align="center">Generador de firmas CAME
                    </h1>
                </td>
            </tr>
            <tr>
                <th scope="row">Nombre completo:</th>
                <td align="left" valign="middle"><input name="nombre" type="text" required="required" maxlength="70"
                        width="300" /></td>
            </tr>
            <tr>
                <th scope="row">Área:</th>
                <td align="left" valign="middle"><input name="puesto" type="text" required="required" maxlength="50"
                        width="300" /></td>
            </tr>
            <tr>
                <th scope="row">Interno:</th>
                <td align="left" valign="middle"><input type="text" maxlength="5" name="int" /></td>
            </tr>
            <tr>
                <th scope="row">Celular:</th>
                <td align="left" valign="middle"><input type="text" maxlength="50" name="cel" /></td>
            </tr>
            <tr>
                <th scope="row">Logo:</th>
                <td align="left" valign="middle">
                    <select name="firma" required="required" id="firma" title="firma">
						<option value="CAMENavidad">CAME Navidad</option>
						<option value="CAME">CAME</option>
                        <option value="FAPI">FAPI</option>
                    </select>
                </td>
            </tr>
            <tr>
                <th scope="row">Imprimir con responsabilidad:</th>
                <td align="left" valign="middle"><input name="responsabilidad" type="checkbox" id="c"
                        title="responsabilidad" value="si_responsabilidad" checked="checked" /></td>
            </tr>
            <tr>
                <th colspan="2" align="center" valign="middle" scope="row"><input type="submit" value="Generar" />
                    <br>
                </th>
            </tr>
            <tr>
                <th colspan="2" align="center" valign="middle" scope="row">
                    <p align="center" style="color: #ccc; font-size: 12px;">&copy; Sistemas CAME 2019</p>
                </th>
            </tr>
        </table>
		<br />
    </form>
    <p>&nbsp;</p>
    <?php
} else {
?>
<!-- asdasd -->
    <table border="0" cellspacing="0" cellpadding="0">
        <tr>
            <td>
                <p align="center"><a href="http://www.redcame.org.ar/" target="_blank">
						<?php 
						if ($_POST['firma'] == 'FAPI'){ 
							?>
                        <img border="0" height="85" src="http://came.org.ar/generarfirma/fm/fapi-logo.png" alt="FAPI" />
						<?php } 
						elseif ($_POST['firma'] == 'CAMENavidad'){
							?>
						<img border="0" height="85" src="http://came.org.ar/generarfirma/fm/navi_3.png" alt="CAME" />
						<?php } else { ?>
						<img border="0" width="163" height="80" src="http://came.org.ar/generarfirma/fm/CAME2.png" alt="CAME" />
                        <?php } ?>
                    </a></p>
            </td>
            <td width="2"></td>
            <td style="font-family:Verdana; font-size:10px;">
                <font style="font-weight:bold; font-size:12px;">&nbsp;<?=$_POST["nombre"]?></font><br />
                <font style="font-size:12px;">&nbsp;<?=$_POST["puesto"]?></font><br />
                &nbsp;Confederaci&oacute;n Argentina de la Mediana Empresa (CAME)<br />
                &nbsp;Av. Leandro N. Alem 452&deg; (C1003AAR) CABA - Argentina<br />
                &nbsp;(0054) (011)
                5556-5556<?php if($_POST["int"]){echo " Int. ".$_POST["int"]." "; } if($_POST["cel"]){echo " - Celular: ".$_POST["cel"]." "; } ?><br />
                &nbsp;<a href="http://www.redcame.org.ar/"><img border="0" width="20" height="24" src="http://came.org.ar/generarfirma/fm/www.png" alt="Web: redcame.org.ar" /></a>
        
                <a href="https://www.facebook.com/redcame" target="_blank"><img border="0" width="20" height="24" src="http://came.org.ar/generarfirma/fm/fb.png" alt="Facebook: redcame" /></a>
        
                <a href="https://www.twitter.com/redcame"><img border="0" width="20" height="24" src="http://came.org.ar/generarfirma/fm/twt.png" alt="Twitter: @redcame" /></a>

                <a href="https://www.instagram.com/redcame/"><img border="0" width="20" height="24" src="http://came.org.ar/generarfirma/fm/ig.png" alt="Instagram: @redcame" /></a>

                    <a href="https://www.linkedin.com/company/confederaci-n-argentina-de-la-mediana-empresa-came-"><img border="0" width="20" height="24" src="http://came.org.ar/generarfirma/fm/linkedin.png" alt="Linkedin: CAME" /></a>
        
            </p>
        </tr>
    </table>
    <?php 
		if ($_POST['responsabilidad'] == 'si_responsabilidad'){
		if ($_POST['firma'] == 'CAMENavidad'){ ?>
			<img border="0" width="358" height="58" src="http://came.org.ar/generarfirma/fm/imprimir.png"
				alt="Antes de imprimir, piense en su responsabilidad con el medio ambiente." />
			<?php } 
		else { ?>
		<img border="0" width="314" height="51" src="http://came.org.ar/generarfirma/fm/imprimir_1.png"
			alt="Antes de imprimir, piense en su responsabilidad con el medio ambiente." />
		<?php }}
		}?>
</body>
</html>
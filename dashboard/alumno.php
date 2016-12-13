<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	
  </head>
  <body>
	<div id="AlumnoTableContainer" style="width: 600px;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#AlumnoTableContainer').jtable({
				title: 'Table of alumno',
				actions: {
					listAction: 'alumno_actions.php?action=list',
					updateAction: 'alumno_actions.php?action=update',
					deleteAction: 'alumno_actions.php?action=delete'
				},
				fields: {
					id_part: 
					{
						title: 'id_part',
						key: true,
						width: '10%'
					}
					,
					boleta:
					{
						title: 'boleta',
						width: '10%'
					}
					,
					escuela: 
					{
						title: 'escuela',
						width: '10%'
					}
					,
					interes: 
					{
						title: 'interes',
						width: '10%'
					}
					,
					socio:
					{
						title: 'socio',
						width: '10%',
						edit: false
					}

					
				}
			});

			//Load person list from server
			$('#AlumnoTableContainer').jtable('load');

		});

	</script>
 
  </body>
</html>

<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />
	
	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>
	
  </head>
  <body>
	<div id="PeopleTableContainer" style="width: 1050px;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#PeopleTableContainer').jtable({
				title: 'Table of people',
				actions: {
					listAction: 'Maestroactions.php?action=list',
					
					updateAction: 'Maestroactions.php?action=update',
					deleteAction: 'Maestroactions.php?action=delete'
				},
				fields: {
					id_part: {
						title: 'id__part',
						key: true,
						create: false,
						edit: false,
						width: '10%',
						list: true
					},
					num_empleado: {
						title: 'No.empleado',
						create: false,
						width: '10%'
					},
					escuela: {
						title: 'escuela',
						create: false,
						width: '20%'
					},
					interes: {
						title: 'interes',
						create: false,
						width: '10%'
					},
					especialidad: {
						title: 'especialidad',
						create: false,
						width: '10%'
					},
					socio: {
						title: 'socio',
						create: false,
						edit: false,
						width: '10%'
						
					}
				}
			});

			//Load person list from server
			$('#PeopleTableContainer').jtable('load');

		});

	</script>
 
  </body>
</html>

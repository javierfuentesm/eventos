<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />

	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>

  </head>
  <body>
	<div id="CongresoTableContainer" style="width: 100%;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#CongresoTableContainer').jtable({
				title: 'Eventos',
				actions:
                {
					listAction: 'congreso_actions.php?action=list',
					updateAction: 'congreso_actions.php?action=update',
					deleteAction: 'congreso_actions.php?action=delete'
				},
				fields: {
					id_evento:
					{
						title: 'id_evento',
						key: true,
						width: '5%'
					}
					,
					titulo_e:
					{
						title: 'titulo_e',
                        key: true,
						width: '5%'
					}
					,
					id_memoria:
					{
						title: 'id_memoria',
						width: '5%'
					}
				}
			});

			//Load person list from server
			$('#CongresoTableContainer').jtable('load');

		});

	</script>

  </body>
</html>

<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />

	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>

  </head>
  <body>
	<div id="simposio_table" style="width: 100%;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#simposio_table').jtable({
				title: 'Eventos',
				actions:
                {
					listAction: 'evento_actions.php?action=list',
					updateAction: 'evento_actions.php?action=update',
					deleteAction: 'evento_actions.php?action=delete'
				},
				fields: {
					id_evento:
					{
						title: 'id_evento',
                        edit: false,
						key: true,
						width: '5%'
					}
					,
					id_simposio:
					{
						title: 'id_simposio',
						width: '5%'
					}
					,
					titulo_e:
					{
						title: 'titulo_e',
						width: '5%'
					}
					,
					tema:
					{
						title: 'tema',
						width: '5%'
					}
					,
					id_recopilacion:
					{
						title: 'id_recopilacion',
						width: '5%',
					},
				}
			});

			//Load person list from server
			$('#simposio_table').jtable('load');

		});

	</script>

  </body>
</html>

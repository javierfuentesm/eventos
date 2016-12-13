<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />

	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>

  </head>
  <body>
	<div id="feria_ciencias" style="width: 100%;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#feria_ciencias').jtable({
				title: 'Eventos',
				actions:
                {
					listAction: 'feria_ciencias_actions.php?action=list',
					updateAction: 'feria_ciencias_actions.php?action=update',
					deleteAction: 'feria_ciencias_actions.php?action=delete'
				},
				fields: {
					id_feriadc:
					{
						title: 'id_feriadc',
                        key: true,
						width: '5%'
					},
                    titulo_e:
                    {
                        title: 'titulo_e',
                        width: '5%'
                    }
					,
                    edadmin:
                    {
                        title: 'edadmin',
                        width: '5%'
                    }
                    ,
					edadMax:
					{
						title: 'edadMax',
						width: '5%'
					}

				}
			});

			//Load person list from server
			$('#feria_ciencias').jtable('load');

		});

	</script>

  </body>
</html>

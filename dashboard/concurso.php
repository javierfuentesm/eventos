<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />

	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>

  </head>
  <body>
	<div id="ConcursoTableContainer" style="width: 100%;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#ConcursoTableContainer').jtable({
				title: 'Eventos',
				actions:
                {
					listAction: 'concurso_actions.php?action=list',
					updateAction: 'concurso_actions.php?action=update',
					deleteAction: 'concurso_actions.php?action=delete'
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
					id_concurso:
					{
						title: 'id_concurso',
                        key: true,
						width: '5%'
					}
					,
					categoria:
					{
						title: 'categoria',
						width: '5%'
					}
					,
					sala:
					{
						title: 'sala',
						width: '5%'
					}
					,
					premio:
					{
						title: 'premio',
						width: '5%',
					}
				}
			});

			//Load person list from server
			$('#ConcursoTableContainer').jtable('load');

		});

	</script>

  </body>
</html>

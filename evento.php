<html>
  <head>

    <link href="themes/redmond/jquery-ui-1.8.16.custom.css" rel="stylesheet" type="text/css" />
	<link href="Scripts/jtable/themes/lightcolor/blue/jtable.css" rel="stylesheet" type="text/css" />

	<script src="scripts/jquery-1.6.4.min.js" type="text/javascript"></script>
    <script src="scripts/jquery-ui-1.8.16.custom.min.js" type="text/javascript"></script>
    <script src="Scripts/jtable/jquery.jtable.js" type="text/javascript"></script>

  </head>
  <body>
	<div id="EventoTableContainer" style="width: 100%;"></div>
	<script type="text/javascript">

		$(document).ready(function () {

		    //Prepare jTable
			$('#EventoTableContainer').jtable({
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
					ISBN:
					{
						title: 'ISBN',
						width: '5%'
					}
					,
					titulo_e:
					{
						title: 'titulo_e',
						width: '5%'
					}
					,
					lugar:
					{
						title: 'lugar',
						width: '5%'
					}
					,
					ubicacion:
					{
						title: 'ubicacion',
						width: '5%',
					},
                    ubicacion_v:
                    {
                        title: 'ubicacion_v',
                        width: '5%'
                    }
                    ,
                    FechIniReg:
                    {
                        title: 'FechIniReg',
                        width: '5%'
                    }
                    ,
                    FechFinReg:
                    {
                        title: 'FechFinReg',
                        width: '5%'
                    }
                    ,
                    Fechtrbajo:
                    {
                        title: 'Fechtrbajo',
                        width: '5%'
                    }
                    ,
                    FechPago:
                    {
                        title: 'FechPago',
                        width: '5%'
                    }
                    ,
                    FechIniEv:
                    {
                        title: 'FechIniEv',
                        width: '5%'
                    }
                    ,
                    FechFinEv:
                    {
                        title: 'FechFinEv',
                        width: '5%'
                    }
                    ,
                    duracion:
                    {
                        title: 'duracion',
                        width: '5%'
                    }

				}
			});

			//Load person list from server
			$('#EventoTableContainer').jtable('load');

		});

	</script>

  </body>
</html>

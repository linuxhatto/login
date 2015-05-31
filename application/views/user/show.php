<body class="page-header-fixed">		
		<div class="row">
				<div class="col-md-6">
					<!-- BEGIN SAMPLE TABLE PORTLET-->
					<div class="portlet box red">
						<div class="portlet-title">
							<div class="caption">
								<i class="fa fa-cogs"></i>Usuarios
							</div>
							<div class="tools">
								<a href="javascript:;" class="collapse">
								</a>
								<a href="javascript:;" class="reload">
								</a>
							</div>
						</div>
						<div class="portlet-body">
							<div class="table-responsive">
								<table class="table table-hover">
								<thead>
								<tr>
									<th>
										 Usuario
									</th>
									<th>
										 Email
									</th>
									<th>
										 Ação
									</th>

								</tr>
								</thead>
								<tbody>
								
								<?
								foreach($users as $mem){
									echo '<tr>';
									echo '<td>'  . $mem->username .  '</td>' .  '<td>' . $mem->email . '</td>' . '<td><a href="delete/' . $mem->id . '">Delete </a></td>';
									echo '</tr>';
														} 
	
									?>
								
								</tbody>
								</table>
							</div>
						</div>
					</div>
					<!-- END SAMPLE TABLE PORTLET-->
				</div>
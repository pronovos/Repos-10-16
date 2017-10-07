<?php include '../includes/_header.php'; ?>

		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS variables -->
		
		<!-- END NAVIGATION -->

<?php include '../includes/_menu.php'; ?>
		<!-- MAIN PANEL -->

		<!-- MAIN PANEL -->
		<div id="main" role="main">

			<!-- RIBBON -->
			<div id="ribbon">

				<span class="ribbon-button-alignment"> 
					<span id="refresh" class="btn btn-ribbon" data-action="resetWidgets" data-title="refresh"  rel="tooltip" data-placement="bottom" data-original-title="<i class='text-warning fa fa-warning'></i> Warning! This will reset all your widget settings." data-html="true">
						<i class="fa fa-refresh"></i>
					</span> 
				</span>
				<!-- breadcrumb -->
				<ol class="breadcrumb">
					<li>Home</li><li>Project Bidding</li>
				</ol>
				<!-- end breadcrumb -->

				<!-- You can also add more buttons to the
				ribbon for further usability

				Example below:

				<span class="ribbon-button-alignment pull-right">
				<span id="search" class="btn btn-ribbon hidden-xs" data-title="search"><i class="fa-grid"></i> Change Grid</span>
				<span id="add" class="btn btn-ribbon hidden-xs" data-title="add"><i class="fa-plus"></i> Add</span>
				<span id="search" class="btn btn-ribbon" data-title="search"><i class="fa-search"></i> <span class="hidden-mobile">Search</span></span>
				</span> -->

			</div>
			<!-- END RIBBON -->

			<!-- MAIN CONTENT -->
			<div id="content">

				
				<!-- widget grid -->
				<section id="widget-grid" class="">
				
					<!-- row -->
					<div class="row">
				
						<!-- NEW WIDGET START -->
						<article class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
				
							<!-- Widget ID (each widget will need unique ID)-->
							
							<!-- end widget -->
								<div class="jarviswidget" id="wid-id-5" data-widget-colorbutton="false" data-widget-deletebutton="false" data-widget-editbutton="false" data-widget-fullscreenbutton="false" data-widget-custombutton="false" data-widget-sortable="false">
								<!-- widget options:
								usage: <div class="jarviswidget" id="wid-id-0" data-widget-editbutton="false">
				
								data-widget-colorbutton="false"
								data-widget-editbutton="false"
								data-widget-togglebutton="false"
								data-widget-deletebutton="false"
								data-widget-fullscreenbutton="false"
								data-widget-custombutton="false"
								data-widget-collapsed="true"
								data-widget-sortable="false"
				
								-->
								<header>
								<div class="btn-group" style="margin-bottom: 13px;">
											<button class="btn btn-primary dropdown-toggle" data-toggle="dropdown">
												Colorado Office <span class="caret"></span>
											</button>
											<ul class="dropdown-menu">
												<li>
													<a href="javascript:void(0);">Colorado Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">Hawaii Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">Northern CA Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">South Texas Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">Southern CA Office</a>
												</li>
												<li>
													<a href="javascript:void(0);">Washington Office</a>
												</li>
											</ul>
										</div>
								</header>
				
								<!-- widget div-->
								<div>
				
									<!-- widget edit box -->
									<div class="jarviswidget-editbox">
										<!-- This area used as dropdown edit box -->
				
									</div>
									<!-- end widget edit box -->
				
									<!-- widget content -->
									<div class="widget-body">
									
										<div class="tabs-left">
											<ul class="nav nav-tabs tabs-left" id="demo-pill-nav">
												<li class="active">
													<a href="#tab-r1" data-toggle="tab"><span class="badge bg-color-blue txt-color-white">15</span>Current bid</a>
												</li>
												<li>
													<a href="#tab-r2" data-toggle="tab"><span class="badge bg-color-blueDark txt-color-white">7</span>Submitted bid</a>
												</li>
												<li>
													<a href="#tab-r3" data-toggle="tab"><span class="badge bg-color-green txt-color-white">5</span>Tracking bid</a>
												</li>
												<li>
													<a class="newPer btn btn-primary btn-sm" href="#" style="background-color: #3276b1;"><strong>New Project</strong></a>
												</li>
											</ul>
											<div class="tab-content">
												<div class="tab-pane active col-lg-11" id="tab-r1">
													<div class="widget-body no-padding">
												<br>
													<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
														<thead>			                
															<tr>
																<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Bid Name</th>
																<th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Date</th>
																<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i>Location</th>
																<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Estimator</th>
																<th>Scope</th>
																<th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>Start Date</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>																
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
														</tbody>
													</table>
													</div>
													</div>
												<div class="tab-pane col-lg-11" id="tab-r2">
													<div class="widget-body no-padding">
												<br>
													<table id="dt_basic" class="table table-striped table-bordered table-hover" width="100%">
														<thead>			                
															<tr>
																<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Bid Name</th>
																<th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i> Date</th>
																<th data-hide="phone,tablet"><i class="fa fa-fw fa-map-marker txt-color-blue hidden-md hidden-sm hidden-xs"></i>Location</th>
																<th data-class="expand"><i class="fa fa-fw fa-user text-muted hidden-md hidden-sm hidden-xs"></i>Estimator</th>
																<th>Scope</th>
																<th data-hide="phone,tablet"><i class="fa fa-fw fa-calendar txt-color-blue hidden-md hidden-sm hidden-xs"></i>Start Date</th>
															</tr>
														</thead>
														<tbody>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
															<tr>
																<td><a href="#">Test Bidding</a></td>
																<td>25.5.2015</td>
																<td>Denver Co</td>
																<td>Jones D.</td>
																<td>Package</td>
																<td>1.1.2017</td>
															</tr>
														</tbody>
													</table>
													</div>
												</div>
												<div class="tab-pane col-lg-11" id="tab-r3">
													<div class="widget-body no-padding">
												<br>
													
													</div>
												</div>	
											</div>
										</div>
				
									</div>
									<!-- end widget content -->
				
								</div>
						</article>
						<!-- WIDGET END -->

					<!-- end row -->
				
					<!-- end row -->
				
				</section>

			</div>
			<!-- END MAIN CONTENT -->

		</div>

		<!-- END MAIN PANEL -->
		<?php include '../includes/_footer.php'; ?>
		<script>
			
		$(document).ready(function() {
			
			pageSetUp();
			
			/* // DOM Position key index //
		
			l - Length changing (dropdown)
			f - Filtering input (search)
			t - The Table! (datatable)
			i - Information (records)
			p - Pagination (paging)
			r - pRocessing 
			< and > - div elements
			<"#id" and > - div with an id
			<"class" and > - div with a class
			<"#id.class" and > - div with an id and class
			
			Also see: http://legacy.datatables.net/usage/features
			*/	
	
			/* BASIC ;*/
				var responsiveHelper_dt_basic = undefined;
				var responsiveHelper_datatable_fixed_column = undefined;
				var responsiveHelper_datatable_col_reorder = undefined;
				var responsiveHelper_datatable_tabletools = undefined;
				
				var breakpointDefinition = {
					tablet : 1024,
					phone : 480
				};
	
				$('.table').dataTable({
					
				});
	
			/* END BASIC */
			
			/* COLUMN FILTER  */
		    var otable = $('#datatable_fixed_column').DataTable({
		    	//"bFilter": false,
		    	//"bInfo": false,
		    	//"bLengthChange": false
		    	//"bAutoWidth": false,
		    	//"bPaginate": false,
		    	//"bStateSave": true // saves sort state using localStorage
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6 hidden-xs'f><'col-sm-6 col-xs-12 hidden-xs'<'toolbar'>>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-xs-12 col-sm-6'p>>",
				"autoWidth" : true,
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_fixed_column) {
						responsiveHelper_datatable_fixed_column = new ResponsiveDatatablesHelper($('#datatable_fixed_column'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_fixed_column.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_fixed_column.respond();
				}		
			
		    });
		    
		    // custom toolbar
		    $("div.toolbar").html('<div class="text-right"><img src="img/logo.png" alt="SmartAdmin" style="width: 111px; margin-top: 3px; margin-right: 10px;"></div>');
		    	   
		    // Apply the filter
		    $("#datatable_fixed_column thead th input[type=text]").on( 'keyup change', function () {
		    	
		        otable
		            .column( $(this).parent().index()+':visible' )
		            .search( this.value )
		            .draw();
		            
		    } );
		    /* END COLUMN FILTER */   
	    
			/* COLUMN SHOW - HIDE */
			$('#datatable_col_reorder').dataTable({
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'C>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
				"autoWidth" : true,
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_col_reorder) {
						responsiveHelper_datatable_col_reorder = new ResponsiveDatatablesHelper($('#datatable_col_reorder'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_col_reorder.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_col_reorder.respond();
				}			
			});
			
			/* END COLUMN SHOW - HIDE */
	
			/* TABLETOOLS */
			$('#datatable_tabletools').dataTable({
				
				// Tabletools options: 
				//   https://datatables.net/extensions/tabletools/button_options
				"sDom": "<'dt-toolbar'<'col-xs-12 col-sm-6'f><'col-sm-6 col-xs-6 hidden-xs'T>r>"+
						"t"+
						"<'dt-toolbar-footer'<'col-sm-6 col-xs-12 hidden-xs'i><'col-sm-6 col-xs-12'p>>",
				"oLanguage": {
					"sSearch": '<span class="input-group-addon"><i class="glyphicon glyphicon-search"></i></span>'
				},		
		        "oTableTools": {
		        	 "aButtons": [
		             "copy",
		             "csv",
		             "xls",
		                {
		                    "sExtends": "pdf",
		                    "sTitle": "SmartAdmin_PDF",
		                    "sPdfMessage": "SmartAdmin PDF Export",
		                    "sPdfSize": "letter"
		                },
		             	{
	                    	"sExtends": "print",
	                    	"sMessage": "Generated by SmartAdmin <i>(press Esc to close)</i>"
	                	}
		             ],
		            "sSwfPath": "js/plugin/datatables/swf/copy_csv_xls_pdf.swf"
		        },
				"autoWidth" : true,
				"preDrawCallback" : function() {
					// Initialize the responsive datatables helper once.
					if (!responsiveHelper_datatable_tabletools) {
						responsiveHelper_datatable_tabletools = new ResponsiveDatatablesHelper($('#datatable_tabletools'), breakpointDefinition);
					}
				},
				"rowCallback" : function(nRow) {
					responsiveHelper_datatable_tabletools.createExpandIcon(nRow);
				},
				"drawCallback" : function(oSettings) {
					responsiveHelper_datatable_tabletools.respond();
				}
			});
			
			/* END TABLETOOLS */
		
		})

		</script>


		<!-- Your GOOGLE ANALYTICS CODE Below -->
		<script type="text/javascript">
			var _gaq = _gaq || [];
			_gaq.push(['_setAccount', 'UA-XXXXXXXX-X']);
			_gaq.push(['_trackPageview']);

			(function() {
				var ga = document.createElement('script');
				ga.type = 'text/javascript';
				ga.async = true;
				ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
				var s = document.getElementsByTagName('script')[0];
				s.parentNode.insertBefore(ga, s);
			})();

		</script>

	</body>

</html>
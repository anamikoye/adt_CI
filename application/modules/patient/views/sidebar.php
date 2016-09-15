		<!-- #NAVIGATION -->
		<!-- Left panel : Navigation area -->
		<!-- Note: This width of the aside area can be adjusted through LESS/SASS variables -->
		<aside id="left-panel">

			<!-- User info -->
			<div class="login-info">
				<span> <!-- User image size is adjusted inside CSS, it should stay as is --> 
					
					<a href="javascript:void(0);" id="show-shortcut" data-action="toggleShortcut">
						<img src="<?php echo base_url().'assets/template/img/avatars/sunny.png'?>" alt="me" class="online" /> 
						<span>
							Kevin Marete
						</span>
						<i class="fa fa-angle-down"></i>
					</a> 
					
				</span>
			</div>
			<!-- end user info -->

			<!-- NAVIGATION : This navigation is also responsive

			To make this navigation dynamic please make sure to link the node
			(the reference to the nav > ul) after page load. Or the navigation
			will not initialize.
			-->
			<nav>
				<!-- 
				NOTE: Notice the gaps after each icon usage <i></i>..
				Please note that these links work a bit different than
				traditional href="" links. See documentation for details.
				-->

				<ul>
					<li class="">
						<a href="#" title="Dashboard"><i class="fa fa-lg fa-fw fa-home"></i> <span class="menu-item-parent">Home Dashboard</span></a>
						<ul>
							<li class="">
								<a href="ajax/dashboard.html" title="Dashboard"><span class="menu-item-parent">Analytics Dashboard</span></a>
							</li>
							<li class="">
								<a href="ajax/dashboard-social.html" title="Dashboard"><span class="menu-item-parent">Social Wall</span></a>
							</li>
						</ul>	
					</li>
					<!-- !! Patients Zone Begin !! -->
					<li>
						<a href="#"><i class=""></i><span class="menu-item-parent">Patients</span></a>
						<ul>
							<li>
							<a href="#"><span class="menu-item-parent">Add patients</span></a>
							</li>
							<li>
							<a href="#"><span class="menu-item-parent">Active patients</span></a>
							</li>
							<li>
							<a href="#"><span class="menu-item-parent">Inactive patients</span></a>
							</li>
							<li>
							<a href="#"><span class="menu-item-parent">All patients</span></a>
							</li>
							<li>
							<a href="#"><span class="menu-item-parent">Export patients master list</span></a>
							</li>
						</ul>
					</li>
					<!-- !! Patients Zone End !! -->
					<!-- !! Inventory Zone Begin !! -->
					<li>
						<a href="#"><i class=""></i><span class="menu-item-parent">Inventory</span></a>
						<ul>
							<li>
							<a href="#"><span class="menu-item-parent">Stock transactions</span></a>
							<ul>
								<li>
								<a href="#"><span class="menu-item-parent">Receive/Issue</span></a>
								</li>
							</ul>
							</li>			
							<li>
							<a href="#"><span class="menu-item-parent">Stores</span></a>
							</li>
						</ul>
					</li>
					<!-- !! Inventory Zone End !! -->
					<!-- !! Inventory Zone Begin !! -->
					<li>
						<a href="#"><i class=""></i><span class="menu-item-parent">Orders</span></a>
						<ul>
							<li>
							<a href="#"><span class="menu-item-parent">MyCDDRS</span></a>							
							</li>
							<li>
							<a href="#"><span class="menu-item-parent">My maps</span></a>
							</li>			
							<li>
							<a href="#"><span class="menu-item-parent">My templates</span></a>
							</li>
						</ul>
					</li>
					<!-- !! Inventory Zone End !! -->
					<!-- 
						PLEASE DO NOT TAMPER WITH THIS SECTION!
						Brian Mwathi was here on 15th Sept 2016
					-->

					<!-- <li class="top-menu-invisible">
						<a href="#"><i class="fa fa-lg fa-fw fa-cube txt-color-blue"></i> <span class="menu-item-parent">SmartAdmin Intel</span></a>
						<ul>
							<li class="">
								<a href="ajax/layouts.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-gear"></i> <span class="menu-item-parent">App Layouts</span></a>
							</li>
							<li class="">
								<a href="ajax/skins.html" title="Dashboard"><i class="fa fa-lg fa-fw fa-picture-o"></i> <span class="menu-item-parent">Prebuilt Skins</span></a>
							</li>
							<li>
								<a href="ajax/difver.html"><i class="fa fa-stack-overflow"></i> App Variations</a>
							</li>
							<li>
								<a href="ajax/applayout.html"><i class="fa fa-cube"></i> App Settings</a>
							</li>
						</ul>
					</li> -->
					<!-- <li>
						<a href="ajax/inbox.html"><i class="fa fa-lg fa-fw fa-inbox"></i> <span class="menu-item-parent">Outlook</span> <span class="badge pull-right inbox-badge margin-right-13">14</span></a>
						<ul>
							<li>
								<a href="ajax/inbox.html">Inbox </a>
							</li>
							<li>
								<a href="ajax/inbox-email-view.html">Email view </a>
							</li>
							<li>
								<a href="ajax/inbox-email-compose.html">Compose </a>
							</li>
							<li>
								<a href="ajax/inbox-email-reply.html">Reply </a>
							</li>
							<li>
								<a href="ajax/email-template.html">Email Templates </a>
							</li>
						</ul>	
					</li> -->
					<!-- <li>
						<a href="#"><i class="fa fa-lg fa-fw fa-bar-chart-o"></i> <span class="menu-item-parent">Graphs</span></a>
						<ul>
							<li>
								<a href="ajax/flot.html">Flot Chart</a>
							</li>
							<li>
								<a href="ajax/morris.html">Morris Charts</a>
							</li>
							<li>
								<a href="ajax/sparkline-charts.html">Sparklines</a>
							</li>
							<li>
								<a href="ajax/easypie-charts.html">EasyPieCharts</a>
							</li>
							<li>
								<a href="ajax/dygraphs.html">Dygraphs</a>
							</li>
							<li>
								<a href="ajax/chartjs.html">Chart.js</a>
							</li>
							<li>
								<a href="ajax/hchartable.html">HighchartTable <span class="badge pull-right inbox-badge bg-color-yellow">new</span></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-table"></i> <span class="menu-item-parent">Tables</span></a>
						<ul>
							<li>
								<a href="ajax/table.html">Normal Tables</a>
							</li>
							<li>
								<a href="ajax/datatables.html">Data Tables <span class="badge inbox-badge bg-color-greenLight hidden-mobile">responsive</span></a>
							</li>
							<li>
								<a href="ajax/jqgrid.html">Jquery Grid</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-pencil-square-o"></i> <span class="menu-item-parent">Forms</span></a>
						<ul>
							<li>
								<a href="ajax/form-elements.html">Smart Form Elements</a>
							</li>
							<li>
								<a href="ajax/form-templates.html">Smart Form Layouts</a>
							</li>
							<li>
								<a href="ajax/validation.html">Smart Form Validation</a>
							</li>
							<li>
								<a href="ajax/bootstrap-forms.html">Bootstrap Form Elements</a>
							</li>
							<li>
								<a href="ajax/bootstrap-validator.html">Bootstrap Form Validation</a>
							</li>
							<li>
								<a href="ajax/plugins.html">Form Plugins</a>
							</li>
							<li>
								<a href="ajax/wizard.html">Wizards</a>
							</li>
							<li>
								<a href="ajax/other-editors.html">Bootstrap Editors</a>
							</li>
							<li>
								<a href="ajax/dropzone.html">Dropzone</a>
							</li>
							<li>
								<a href="ajax/image-editor.html">Image Cropping</a>
							</li>
							<li>
								<a href="ajax/ckeditor.html">CK Editor</a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-desktop"></i> <span class="menu-item-parent">UI Elements</span></a>
						<ul>
							<li>
								<a href="ajax/general-elements.html">General Elements</a>
							</li>
							<li>
								<a href="ajax/buttons.html">Buttons</a>
							</li>
							<li>
								<a href="#">Icons</a>
								<ul>
									<li>
										<a href="ajax/fa.html"><i class="fa fa-plane"></i> Font Awesome</a>
									</li>
									<li>
										<a href="ajax/glyph.html"><i class="glyphicon glyphicon-plane"></i> Glyph Icons</a>
									</li>
									<li>
										<a href="ajax/flags.html"><i class="fa fa-flag"></i> Flags</a>
									</li>
								</ul>
							</li>
							<li>
								<a href="ajax/grid.html">Grid</a>
							</li>
							<li>
								<a href="ajax/treeview.html">Tree View</a>
							</li>
							<li>
								<a href="ajax/nestable-list.html">Nestable Lists</a>
							</li>
							<li>
								<a href="ajax/jqui.html">JQuery UI</a>
							</li>
							<li>
								<a href="ajax/typography.html">Typography</a>
							</li>
							<li>
								<a href="#">Six Level Menu</a>
								<ul>
									<li>
										<a href="#"><i class="fa fa-fw fa-folder-open"></i> Item #2</a>
										<ul>
											<li>
												<a href="#"><i class="fa fa-fw fa-folder-open"></i> Sub #2.1 </a>
												<ul>
													<li>
														<a href="#"><i class="fa fa-fw fa-file-text"></i> Item #2.1.1</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-fw fa-plus"></i> Expand</a>
														<ul>
															<li>
																<a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
										</ul>
									</li>
									<li>
										<a href="#"><i class="fa fa-fw fa-folder-open"></i> Item #3</a>
		
										<ul>
											<li>
												<a href="#"><i class="fa fa-fw fa-folder-open"></i> 3ed Level </a>
												<ul>
													<li>
														<a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
													</li>
													<li>
														<a href="#"><i class="fa fa-fw fa-file-text"></i> File</a>
													</li>
												</ul>
											</li>
										</ul>	
									</li>
									<li>
										<a href="#" class="inactive"><i class="fa fa-fw fa-folder-open"></i> Item #4 (disabled)</a>
									</li>	
									
								</ul>
							</li>
						</ul>
					</li> -->	
					<<!-- li>
						<a href="ajax/widgets.html"><i class="fa fa-lg fa-fw fa-list-alt"></i> <span class="menu-item-parent">Widgets</span></a>
					</li> -->
					<!-- <li>
						<a href="#"><i class="fa fa-lg fa-fw fa-cloud"><em>3</em></i> <span class="menu-item-parent">Cool Features!</span></a>
						<ul>
							<li>
								<a href="ajax/calendar.html"><i class="fa fa-lg fa-fw fa-calendar"></i> <span class="menu-item-parent">Calendar</span></a>
							</li>
							<li>
								<a href="ajax/gmap-xml.html"><i class="fa fa-lg fa-fw fa-map-marker"></i> <span class="menu-item-parent">GMap Skins</span><span class="badge bg-color-greenLight pull-right inbox-badge">9</span></a>
							</li>
						</ul>
					</li>	
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-puzzle-piece"></i> <span class="menu-item-parent">App Views</span></a>
						<ul>
							<li>
								<a href="ajax/projects.html"><i class="fa fa-file-text-o"></i> Projects</a>
							</li>	
							<li>
								<a href="ajax/blog.html"><i class="fa fa-paragraph"></i> Blog</a>
							</li>
							<li>
								<a href="ajax/gallery.html"><i class="fa fa-picture-o"></i> Gallery</a>
							</li>
							<li>
								<a href="#"><i class="fa fa-comments"></i> Forum Layout</a>
								<ul>
									<li><a href="ajax/forum.html">General View</a></li>
									<li><a href="ajax/forum-topic.html">Topic View</a></li>
									<li><a href="ajax/forum-post.html">Post View</a></li>
								</ul>
							</li>
							<li>
								<a href="ajax/profile.html"><i class="fa fa-group"></i> Profile</a>
							</li>
							<li>
								<a href="ajax/timeline.html"><i class="fa fa-clock-o"></i> Timeline</a>
							</li>
							<li>
								<a href="ajax/search.html"><i class="fa fa-search"></i>  Search Page</a>
							</li>
						</ul>		
					</li>
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-shopping-cart"></i> <span class="menu-item-parent">E-Commerce</span></a>
						<ul>
							<li><a href="ajax/orders.html">Orders</a></li>
							<li><a href="ajax/products-view.html">Products View</a></li>
							<li><a href="ajax/products-detail.html">Products Detail</a></li>
						</ul>
					</li>	
					<li>
						<a href="#"><i class="fa fa-lg fa-fw fa-windows"></i> <span class="menu-item-parent">Miscellaneous</span></a>
						<ul>
							<li>
								<a href="http://192.241.236.31/themes/preview/smartadmin/1.8.x/Landing_Page/" target="_blank">Landing Page <i class="fa fa-external-link"></i></a>
							</li>
							<li>
								<a href="ajax/pricing-table.html">Pricing Tables</a>
							</li>
							<li>
								<a href="ajax/invoice.html">Invoice</a>
							</li>
							<li>
								<a href="login.html" target="_top">Login</a>
							</li>
							<li>
								<a href="register.html" target="_top">Register</a>
							</li>
							<li>
								<a href="forgotpassword.html" target="_top">Forgot Password</a>
							</li>
							<li>
								<a href="lock.html" target="_top">Locked Screen</a>
							</li>
							<li>
								<a href="ajax/error404.html">Error 404</a>
							</li>
							<li>
								<a href="ajax/error500.html">Error 500</a>
							</li>
							<li>
								<a href="ajax/blank_.html">Blank Page</a>
							</li>
						</ul>
					</li> -->
					
				</ul>
			</nav>
			<a href="#ajax/difver.html" class="btn btn-primary nav-demo-btn"><i class="fa fa-info-circle"></i> SmartAdmin Package (187 MB)</a>
			
			

			<span class="minifyme" data-action="minifyMenu"> <i class="fa fa-arrow-circle-left hit"></i> </span>

		</aside>
		<!-- END NAVIGATION -->
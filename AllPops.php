<!-- adjust budget popup -->
<div id="adjust_button" class="modal fade" role="dialog">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Editing Budget for 1 Ad Set</h4>
			</div>
			<div class="modal-body">
				<div class="row">
					<div class="col-md-4">
						<label class="pull-right">For each ad set:</label>
					</div>
					<div class="col-md-4">
						<div class="custom-autocomplete-select">
							<select class="selectpicker show-tick" data-size="5">
								<option data-tokens="ketchup mustard">Increase daily budget by</option>
								<option data-tokens="mustard">Increase daily budget by</option>
								<option data-tokens="frosting">Decrease daily budget by</option>
								<option data-tokens="ketchup mustard">Set daily budget to</option>
							</select>													
						</div>
					</div>
					<div class="col-md-4 inline-text">
						<input type="text" class="form-control custom-input">
						<div class="custom-autocomplete-select">
							<select class="selectpicker show-tick" data-size="5">
								<option data-tokens="ketchup mustard">%</option>
								<option data-tokens="mustard">$</option>
							</select>													
						</div>
					</div>
				</div>

				<div class="row" style="margin-top: 10px;">
					<div class="col-md-9 col-md-offset-2 inline-text">
						<input type="checkbox" class="">
						<label>Daily budget cap (optional):</label>
						<input type="text" class="form-control custom-input">
					</div>
				</div>
				
				<div class="row"><div class="col-md-9 col-md-offset-2">Combined total of all budgets:800.00</div></div>

				<div class="row" style="margin-top: 20px;">
					<div class="col-md-12">
						<table class="table table-bordered table-striped"> 
							<thead>
								<tr>
									<th>Ad Set</th>
									<th>Old Budget</th>
									<th>New Budget</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td>Product 1</td>
									<td>800.00</td>
									<td>800.00</td>
								</tr>
								<tr>
									<td><b>1 Ad Sets</b><br><span>increase budget by 0%</span></td>
									<td><b>800.00</b><br><span>Previous Total Budget </span></td>
									<td><b>800.00</b><br><span>New Total Budget </span></td>
								</tr>
							</tbody>						
						</table>
					</div>
				</div>

			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
				<button type="button" class="btn btn-info" data-dismiss="modal">Save</button>
			</div>
		</div>

	</div>
</div>
<!-- adjust budget popup -->

<!--camp Mixed Value -->
<div id="cam_mixed_value" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-body">
      	<button type="button" class="close" data-dismiss="modal">&times;</button>
        <p>Selected items have mixed statuses</p>
      </div>
      <div class="modal-footer">
      	<div class="col-md-6">
      		<button type="button" class="btn btn-default pull-left" data-dismiss="modal">Cancel</button>
      	</div>
      	<div class="col-md-6">
      		<button type="button" class="btn btn-primary">Pause all</button>
      		<button type="button" class="btn btn-primary">Run all</button>
      	</div>
      </div>
    </div>

  </div>
</div>
<!--camp Mixed Value -->

<div id="add-insta-acct-btn" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">×</button>
				<h4 class="modal-title">Connect an Instagram Account for Advertising</h4>
			</div>
			<div class="modal-body">
				<div class="radio">
					<label><input name="optradio" type="radio">Add an existing account <span>Connect an existing Instagram account to this Page.</span></label> 
				</div>
				<div class="radio">
					<label><input name="optradio" type="radio">Create a new account<span>Create a new Instagram account and connect it to this Page.</span></label> 
				</div>
				<hr class="edit-forms-divider">&nbsp;
				<p>Enter the email address and username you want to use for your new Instagram account. We'll send you an email with instructions on setting your password.</p>
				<form>
					<input type="text" name="" class="form-control" placeholder="Username">
					<input type="text" name="" class="form-control" placeholder="Email">
					<input type="text" name="" class="form-control" placeholder="Re-enter email">
					<input type="text" name="" class="form-control" placeholder="Phone number">
				</form>
			</div>
			<div class="modal-footer">
				<button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
				<button type="button" class="blue-btn" data-dismiss="modal">Save to Confirm</button>
			</div>
		</div>

	</div>
</div>


<!-- USer Modal -->
<div id="useTemplate" class="modal fade" role="dialog">
	<div class="modal-dialog">

		<!-- Modal content-->
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">&times;</button>
				<h4 class="modal-title">Create a Fullscreen Experience</h4>
			</div>
			<div class="modal-body">
				<div class="use-temp-let-sec"> 
					<div class="use-temp-pop-row">
						<h5>Cover Image or Video</h5>
						<p>Use an eye-catching image or video as a visual way to introduce your product, service or brand.</p>
						<div class="use-temp-radio-tabs">
							<ul class="nav nav-tabs">
								<li class="active">
									<a href="#temp-radio-tab1" data-toggle="tab">
										<label class="radio-inline">
											<input id="f-option" name="selector" type="radio">
											<label for="f-option">Image</label>
											<div class="check"></div>
										</label>
									</a>
								</li>
								<li>
									<a href="#temp-radio-tab2" data-toggle="tab">
										<label class="radio-inline">
											<input id="f-option" name="selector" type="radio">
											<label for="f-option">Video</label>
											<div class="check"></div>
										</label>
									</a>
								</li>
							</ul>
								
							<div class="tab-content">
						    	<div class="img-radio-tab-cont tab-pane active" id="temp-radio-tab1">
						    		<div class="common-row">	
						    			<div class="left-img">
						    				<img src="img/use-temp-img-thumb.jpg">
						    			</div>
						    			<div class="right-detail">
						    				<p>Recommended: Image width of 1080 pixels</p>
						    				<button class="light-grey-btn">Replace Photo</button>
						    			</div>
						    		</div>	
						    		<div class="common-row">
						    			<label>Destination URL (optional)</label>
						    			<input type="text" name="" class="form-control">
						    		</div>
						    	</div>
								<div class="video-slideshow-radio-tab-cont tab-pane" id="temp-radio-tab2">
					    			<div class="common-row">	
						    			<div class="left-img">
						    				<img src="img/use-temp-img-thumb.jpg">
						    			</div>
						    			<div class="right-detail">
						    				<p>Recommended: Image width of 1080 pixels</p>
						    				<button class="light-grey-btn">Upload Video</button>
						    			</div>
						    		</div>							    		 
								</div>
							</div>
						</div>
					</div>
					<div class="use-temp-pop-row">
						<h5>Text</h5>
						<textarea class="form-control"></textarea>
					</div>
					<div class="use-temp-pop-row">
						<h5>Text</h5>
						<textarea class="form-control"></textarea>
					</div>
					<div class="use-temp-pop-row">
						<h5>Button</h5>
						<p>Give people an action to take.</p>
						<div class="common-row">
							<label>Text</label>
							<input type="text" name="" class="form-control">
						</div>
						<div class="common-row">
							<label>Destination URL</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					<div class="use-temp-pop-row">
						<h5>Carousel</h5>
						<p>Upload 2-10 images to show them in a carousel format. If images are not the same size, they will be cropped to match your first image.</p>
						<ul class="crsl-slide">
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li><a href="#" class="active">6</a></li>
							<li><a href="#">+</a></li>
						</ul>
						<div class="edit-selected-slide">
							<div class="common-row">	
				    			<div class="left-img">
				    				<img src="img/use-temp-img-thumb.jpg">
				    			</div>
				    			<div class="right-detail">
				    				 <button class="light-grey-btn">Replace Photo</button>
				    				 <button class="light-grey-btn pull-right"><i class="fa fa-trash"></i></button>
				    			</div>
				    		</div>
				    		<div class="common-row">
								<label>Destination URL</label>
								<input type="text" name="" class="form-control">
							</div>
						</div>
					</div>
					<div class="use-temp-pop-row">
						<div class="common-row">
							<h5>Text</h5>
							<textarea class="form-control" placeholder="Add descriptive content for people to read while they swipe through your carousel images."></textarea>
						</div>	
						<div class="common-row">
							<h5>Button</h5>
							<p>Give people an action to take.</p>
						</div>
						<div class="common-row">
							<label>Text</label>
							<input type="text" name="" class="form-control">
						</div>
						<div class="common-row">
							<label>Destination URL</label>
							<input type="text" name="" class="form-control">
						</div>
					</div>
					 
				</div>
				<div class="use-temp-right-sec">
					<div class="common-row" style="margin-top: 0">
						<div class="img-or-video-prev">
							<img src="img/use-temp-img-prev.jpg">
						</div>
						<h1>Add Context</h1>
						<p>Change the text and use this space to tell people about your product, brand, or service. </p>
						<button class="big-black-bordered-btn">Write something ...</button>
					</div>

					<div class="common-row">
						<div class="img-or-video-prev">
							<img src="img/use-temp-img-prev.jpg">
						</div>
						<h1>Add Context</h1>
						<p>Change the text and use this space to tell people about your product, brand, or service. </p>
						<button class="big-black-bordered-btn">Write something ...</button>
					</div>

				</div>	



			</div>
			<div class="modal-footer">
				<button class="light-grey-btn"><i class="fa fa-mobile"></i> Preview on Mobile</button>
				<button type="button" class="blue-btn" data-dismiss="modal">Done</button>
			</div>
		</div>

	</div>
</div>


<div id="add-cnvs-component-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal">&times;</button>
        <h4 class="modal-title">Select components to add</h4>
      </div>
      <div class="modal-body">
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/button_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Button</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default" style="padding-top: 33px;">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/carousel_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Carousel</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/photo_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Photo</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/text_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Text Block</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="single-cnvs-cpmponent">
        	<div class="cc">
                <div class="items">
                    <div class="info-block block-info clearfix">                      
                        <div data-toggle="buttons" class="btn-group bizmoduleselect">
                            <label class="btn btn-default">
                                <div class="bizcontent">
                                    <input type="checkbox" name="a" autocomplete="off" value="">
                                    <img src="img/video_unselected.png">
                                    <!-- <span class="glyphicon glyphicon-ok glyphicon-lg"></span> -->
                                    <h5>Video</h5>
                                </div>
                            </label>
                        </div>
                    </div>
                </div>
            </div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="blue-btn" data-dismiss="modal">Ok</button>
      </div>
    </div>

  </div>
</div>

<!-- common select image popup -->
<div id="common-select-img-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#upload-img-tab"><i class="fa fa-upload"></i> Upload Image</a></li>
		  <li><a data-toggle="tab" href="#img-library"><i class="fa fa-file-image-o"></i> Image Library</a></li>
		  <li><a data-toggle="tab" href="#stock-imgs"><i class="fa fa-file-image-o"></i> Stock Images</a></li>
		</ul>
      </div>
      <div class="modal-body">																											       
			<div class="tab-content">
			  <div id="upload-img-tab" class="tab-pane fade in active" style="text-align:center;">
			   <div class="upload-btn-wrapper">
				  <button class="btn"><i class="fa fa-upload"></i> Drag and drop an image or click to upload</button>
				  <input type="file" name="myfile" />
				</div>
			  </div>
			  <div id="img-library" class="tab-pane fade">
			     <div class="img-filtering-tags">
			     		<a href="#">All 23</a> <a href="#" class="active">Add Images 23</a> <a href="#">Instagram Images</a>
			     </div>
			     <div class="img-gallery-thumb">
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">																														     	
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     	<div class="thumb">
			     		<span><img src="../img/ident-acc-icon.jpg"></span>	
			     		<input type="radio" name="img-thumb" class="thumbCheck">
			     	</div>
			     </div>
			  </div>
			  <div id="stock-imgs" class="tab-pane fade">
			    <div class="common-row img-search-field">
			    	<input type="text" name="" class="form-control" placeholder="Search Free Stock Images">
			    </div>
			    <div class="stock-imgs-gallery-thumb">
			    	<div class="no-stock-search">
			    		<img src="../img/no-stock-dummy-img.png">
			    		<p>Search for professional images to use in your ads.<br>Any images you select will be saved in your image library.</p>
			    	</div>
			    </div>
			  </div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="blue-btn" data-dismiss="modal">Confirm</button>
      </div>
    </div>

  </div>
</div>

<div id="common-select-video-popup" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      <div class="modal-header">
        
        <ul class="nav nav-tabs">
		  <li class="active"><a data-toggle="tab" href="#browse-lib"><i class="fa fa-file-video-o"></i> Browse Library</a></li>
		  <li><a data-toggle="tab" href="#paste-link"><i class="fa fa-link"></i> Paste a Link</a></li>
		  <li><a data-toggle="tab" href="#upload-video"><i class="fa fa-upload"></i> Upload Videos</a></li>
		</ul>
      </div>
      <div class="modal-body">																											       
			<div class="tab-content">
			  <div id="browse-lib" class="tab-pane fade in active">
				    <div class="filtering-and-grid-view-optns">
				    	<a href="#" class="list-view-link"><i aria-hidden="true" class="fa fa-th-list"></i></a>
				    	<a href="#" class="grid-view-link"><i aria-hidden="true" class="fa fa-th-large"></i></a>
				    </div>
				    <div class="video-views-outr">
				    	<div class="simple-custom-upload-btn">
					    	<button class="light-grey-btn"><i class="fa fa-upload"></i> Upload</button>
					    	<input type="file" name="">
					    </div>	
				    	<div class="video-list-video">
								<table  class="table table-bordered table-inverse table-striped table-hover">
	                      		<thead class="thead-default">
	                      			<tr>
	                      				<th></th>																												                      				 
	                      				<th>Video Name</th>
	                      				<th>Duration</th>
	                      				<th>Last Used</th>
	                      				<th>Resolution</th>
	                      			</tr>
	                      		</thead>
	                      		<tbody>
	                      			<tr class="video_rows">
	                      				<td><input type="checkbox" name=""></td>	
	                      				<td>
	                      					<img src="../img/ident-acc-icon.jpg"> <span>Video (1958816381040581)</span>
	                      				</td>
	                      				<td>0.03</td> 
	                      				<td>2017-10-14</td>
	                      				<td>566x690</td>
	                      			</tr>
	                      			<tr class="video_rows">
	                      				<td><input type="checkbox" name=""></td>	
	                      				<td>
	                      					<img src="../img/ident-acc-icon.jpg"> <span>Video (1958816381040581)</span>
	                      				</td>
	                      				<td>0.03</td> 
	                      				<td>2017-10-14</td>
	                      				<td>566x690</td>
	                      			</tr>
	                      			<tr class="video_rows">
	                      				<td><input type="checkbox" name=""></td>	
	                      				<td>
	                      					<img src="../img/ident-acc-icon.jpg"> <span>Video (1958816381040581)</span>
	                      				</td>
	                      				<td>0.03</td> 
	                      				<td>2017-10-14</td>
	                      				<td>566x690</td>
	                      			</tr>
	                      			<tr class="video_rows">
	                      				<td><input type="checkbox" name=""></td>	
	                      				<td>
	                      					<img src="../img/ident-acc-icon.jpg"> <span>Video (1958816381040581)</span>
	                      				</td>
	                      				<td>0.03</td> 
	                      				<td>2017-10-14</td>
	                      				<td>566x690</td>
	                      			</tr>
	                      		</tbody>
	                      	</table>
				    	</div>
				    	<div class="video-grid-view">
				    		<div class="common-row">
				    			<div class="col-md-4">
				    				<div class="single-video-thumb-view">
				    						<img src="../img/a.jpg">
				    						<div class="detail">							
				    							<p>Video (1956329526...</p>
				    							<span>0.06</span>
				    						</div>
				    						<input type="radio" name="">
				    				</div>
				    			</div>
				    			<div class="col-md-4">
				    				<div class="single-video-thumb-view">
				    						<img src="../img/a.jpg">
				    						<div class="detail">							
				    							<p>Video (1956329526...</p>
				    							<span>0.06</span>
				    						</div>
				    						<input type="radio" name="">
				    				</div>
				    			</div>
				    			<div class="col-md-4">
				    				<div class="single-video-thumb-view">
				    						<img src="../img/a.jpg">
				    						<div class="detail">							
				    							<p>Video (1956329526...</p>
				    							<span>0.06</span>
				    						</div>
				    						<input type="radio" name="">
				    				</div>
				    			</div>
				    		</div>
				    	</div>
				    </div>
			  </div>
			  <div id="paste-link" class="tab-pane fade">
			    <div class="paste-link-left">
			    	<div class="common-row upload-inst">
			    		<img src="../img/paste-link-dummy-img.png"> <span>Quickly upload a video by pasting the link of a hosted video file.</span>
			    	</div>
			    	<div class="common-row">
			    		<div class="col-md-3 text-right"><label>Video URL</label></div>
			    		<div class="col-md-8"><input type="text" name="" class="form-control"></div>
			    	</div>
			    	<div class="common-row">
			    		<div class="col-md-3 text-right"><label>Title</label></div>
			    		<div class="col-md-8"><input type="text" name="" class="form-control"></div>
			    	</div>
			    </div>
			    <div class="paste-link-right">
			    	<b>Paste a Direct Download Link to Your Video</b>
			    	<p>Your video file must be directly downloadable from the link. We currently don't support shareable links or links that need to be authenticated.</p>
			    	<p>If you are having trouble uploading, make sure you are pasting a direct download link from wherever it is hosted. You can test if it is downloadable by pasting the link in your browser. If supported, the video file will automatically download.</p>
			    </div>
			  </div>
			  <div id="upload-video" class="tab-pane fade">
			     	<div class="upload-btn-wrapper">
					  <button class="btn"><i class="fa fa-upload"></i> Drag and drop a video or click to upload</button>
					  <input type="file" name="myfile" />
					</div>
			  </div>
			</div>
      </div>
      <div class="modal-footer">
        <button type="button" class="light-grey-btn" data-dismiss="modal">Cancel</button>
        <button type="button" class="blue-btn" data-dismiss="modal">Confirm</button>
      </div>
    </div>

  </div>
</div>
<div class="row">

	<div class="col-md-12">
			
		<div class="col-md-6">
			
			<div class="col-md-2"></div>
			
			<div class="col-md-6" style="margin-left:13%"><h1 >{nume} {prenume}</h1><a style="color:white; " href="{SITE_URL}/medic/view_profile/{id}"><button type="submit" style="background: #074486; " class="btn btn-orange submit em">Vezi fisa pacientului</button></a><a style="color:white; padding-left:1%" href="{SITE_URL}/medic/view_consultatii_pacient/{id}"><button type="submit" style="background: #074486; " class="btn btn-orange submit em">Vezi consultatii</button></a></div>
			
		</div>
			
	</div>
		
	<div class="col-md-12" >
		
		<div class="col-md-6" style="margin-left:3%">
			
			<div class="form-horizontal" style="width:150%;">
			
				<br><br>
				
				<div class="row">
				
					<form class="form-horizontal" role="form" method="post" action="{SITE_URL}/medic/adauga_consultatie_done/{id}/" enctype="multipart/form-data">

                    	<input type="hidden" name="source" value="{source}" />

						<div class="form-group">

                        	<label class="col-lg-2 control-label">MOTIVUL PREZENTĂRII</label>

							<div class="col-lg-5">

								<input id="motivul_prezentarii" name="motivul_prezentarii" value="{motivul_prezentarii}" type="text" class="form-control" required> 

							</div>

                        </div>

						<div class="form-group">

                        	<label class="col-lg-2 control-label">SIMPTOME</label>

							<div class="col-lg-5">

								<input id="simptome" name="simptome" value="{simptome}" type="text" class="form-control" required> 

							</div>

                        </div>

						<div class="form-group">

                        	<label class="col-lg-2 control-label">DIAGNOSTIC (ICD10)</label>

							<div class="col-lg-5">
                                  
								<!-- <select class="form-control" id="cod_diagnostic" name="cod_diagnostic">
						
									<option value="NULL">Alege un diagnostic</option>
						
									{DIAGNOSTIC}
								
										<option value="{cod_diagnostic}">{denumire_diagnostic}</option>
								
									{/DIAGNOSTIC}
								</select> -->

								<input id="diagnostic_icd_10" name="diagnostic_icd_10" value="{diagnostic_icd_10}" type="text" class="form-control" required>
					 		 
							</div>

					  	</div>  

						<div class="form-group">

							<label class="col-lg-2 control-label">TRATAMENT</label>

							<div class="col-lg-5">

								<input id="tratament" name="tratament" value="{tratament}" type="text"  class="form-control" required> 

							</div>

						</div>

						<div class="form-group">

							<label class="col-lg-2 control-label">OBSERVATII</label>

							<div class="col-lg-5">

								<input id="observatii" name="observatii" value="{observatii}" type="text"  class="form-control" > 

							</div>

						</div>

						<div class="form-group">

							<label class="col-lg-2 control-label">SEMNĂTURA</label>

							<div id="semnatura" class="col-lg-5 form-control"></div>

						</div>

						<div class="form-group" style="padding-left: 25%;">
                                  
							<div class="col-lg-5">
									
								<input type="submit" class="buton_sumbit" id="" name="project_save" class="project_save" value="Salveaza">
                                  
							</div>
                                
						</div>									 
                              
					</form>
              	
				</div>  

            </div>

        </div>
	
	</div>

</div>

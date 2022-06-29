

                  <div class="d-none">
                      <input type="text" name="pu_url">
                      <input type="text" name="pu_no_of_form">
                      <input type="text" name="pu_test_name">
                      <input type="text" name="pu_company_name">
                      <input type="text" name="pu_site_address">
                      <input type="text" name="pu_email">
                      <input type="text" name="pu_duct_location">
                      <input type="text" name="pu_number_of_bedroom">
                     
                  </div>

                <div id="packageUnit1">
                    <input type="text" value="1" name="packageUnitLength" id="packageUnitLength" class="d-none">
                  <div class="row" id="pu1">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>Package Unit</h3>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Manufacturer *</label>
                        <input type="text" class="form-control" name="pu_manufacturer1" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="pu_model1" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="pu_serial1" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Input *</label>
                        <input type="text" class="form-control" name="pu_btu_input1" placeholder="BTU Input">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Output *</label>
                        <input type="text" class="form-control" name="pu_btu_output1" placeholder="BTU Output">
                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Efficiency *</label>
                        <input type="text" class="form-control" name="pu_efficiency1" placeholder="Efficiency">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tonnage *</label>
                        <select class="form-control" name="pu_tonnage1">
                          <option value="Default">Default</option>
                          <option value="0.75">0.75</option>
                          <option value="1">1</option>
                          <option value="1.5">1.5</option>
                          <option value="2">2</option>
                          <option value="2.5">2.5</option>
                          <option value="3">3</option>
                          <option value="3.5">3.5</option>
                          <option value="4">4</option>
                          <option value="4.5">4.5</option>
                          <option value="5">5</option>
                        </select>

                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Seers *</label>
                        <select class="form-control" name="pu_seer1">
                          <option value="Default">Default</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                        </select>

                      </div>
                    </div><!-- col-md-6 End-->

                




                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Package Unit Image</label>
                        <input type="file" name="pu_image1[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->

                  </div>

                  

                </div>
                
                <div id="packageUnit_btn">
                    <div class="col-md-12">
                        <button type="button" class="btn btn-primary mr-2" onclick="packageUnit1_Back()">Back</button>
                        <button type="button" class="btn btn-primary mr-2" onclick="packageUnit1_Submit()">Next</button>
                        <button type="button" class="btn btn-light float-right" onclick="packageUnit1_Clear()">Clear
                            Form</button>

                    </div>

                    <div class="col-md-12 mt-4">
                        <button type="button" class="btn btn-info mr-2" onclick="packageUnit_addMore()">Add More</button>
                        <button type="button" class="btn btn-danger mr-2" onclick="packageUnit_lessOne()">Less One</button>
                    </div>
                </div>


                 <!-- Test Result 10 Start -->

                 <div class="row" id="testResult">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>Test Result</h3>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Duct Leakage CFM Result</label>
                        <input type="text" class="form-control" name="test_duct_leak_result"
                          placeholder="Duct Leakage CFM Result">
                      </div>
                    </div><!-- col-md-6 End-->




                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Duct Leakage CFM *</label>
                        <div class="row">
                          <div class="col-md-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="test_ductLeakage" value="5%">
                                5%
                              </label>
                            </div>
                          </div>

                          <div class="col-md-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="test_ductLeakage" value="15%_Partial">
                                15% (Partial)
                              </label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="test_ductLeakage" value="15%_System">
                                15% (System only)
                              </label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="test_ductLeakage"
                                  value="Exempt_Asbestos">
                                Exempt (Asbestos)
                              </label>
                            </div>
                          </div>
                          <div class="col-md-4">
                            <div class="form-check">
                              <label class="form-check-label">
                                <input type="radio" class="form-check-input" name="test_ductLeakage" value="Exempt_40ft">
                                Exempt (Less than 40ft of ducts)
                              </label>
                            </div>
                          </div>
                        </div>



                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Fan Watt Draw (New System Only)</label>
                        <input type="text" class="form-control" name="test_fanWatt" placeholder="Fan Watt Draw">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <h5>Airflow CFM Result</h5>
                        <label>CFM (Return 1) </label>
                        <input type="text" class="form-control" name="test_cfm1" placeholder="CFM (Return 1)">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Location (Return 1) </label>
                        <input type="text" class="form-control" name="test_location1" placeholder="Location (Return 1)">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>CFM (Return 2)</label>
                        <input type="text" class="form-control" name="test_cfm2" placeholder="CFM (Return 2)">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Location (Return 2)</label>
                        <input type="text" class="form-control" name="test_location2" placeholder="Location (Return 2)">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>CFM (Return 3)</label>
                        <input type="text" class="form-control" name="test_cfm3" placeholder="CFM (Return 3)">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Location (Return 3)</label>
                        <input type="text" class="form-control" name="test_location3" placeholder="Location (Return 3)">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>CFM (Return 4)</label>
                        <input type="text" class="form-control" name="test_cfm4" placeholder="CFM (Return 4)">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Location (Return 4)</label>
                        <input type="text" class="form-control" name="test_location4" placeholder="Location (Return 4)">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>CFM (Return 5)</label>
                        <input type="text" class="form-control" name="test_cfm5" placeholder="CFM (Return 5)">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Location (Return 5)</label>
                        <input type="text" class="form-control" name="test_location5" placeholder="Location (Return 5)">
                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="testResult_Back()">Back</button>

                      <button type="button" class="btn btn-primary mr-2" onclick="testResultSubmit()">Next</button>
                      <button type="button" class="btn btn-light float-right" onclick="testResult_Clear()">Clear
                        Form</button>

                    </div>



                  </div>

                  <!-- Test Result 10 End -->


                  <!-- Refrigerant (MCH 25) 10.1 Start -->

                  <div class="row" id="refrigerant">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>Refrigerant (MCH 25)</h3>
                      </div>
                    </div>


                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Refrigerant (MCH 25) Image</label>
                        <input type="file" name="ref_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="refrigerant_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" onclick="refrigerantSubmit()">Next</button>
                    </div>

                  </div>
                  <!-- Refrigerant (MCH 25) 10.1 End -->



                  <!-- Windows 10.2 Start -->

                  <div class="row" id="windows">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>Windows</h3>
                      </div>
                    </div>


                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Windows Image</label>
                        <input type="file" name="win_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="window_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" onclick="windowSubmit()">Next</button>
                    </div>

                  </div>
                  <!-- Windows 10.2 End -->



                  <!-- Water Heater 10.3 Start -->

                  <div class="row" id="water_heater">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>Water Heater</h3>
                      </div>
                    </div>


                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Water Heater Image</label>
                        <input type="file" name="water_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="water_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" onclick="waterSubmit()">Next</button>
                    </div>

                  </div>
                  <!-- Water Heater 10.3 End -->


                  <!-- Kitchen Hood 10.4 Start -->

                  <div class="row" id="kitchen">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>Kitchen Hood</h3>
                      </div>
                    </div>


                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Kitchen Hood Image</label>
                        <input type="file" name="kitchen_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="kitchen_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" onclick="kitchenSubmit()">Next</button>
                    </div>

                  </div>
                  <!-- Kitchen Hood 10.4 End -->


                  <!-- Notes 11 Start -->

                  <div class="row" id="notes">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3> Notes </h3>
                      </div>
                    </div>


                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Notes</label>
                        <input type="text" class="form-control" name="notes" placeholder="Notes">
                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="notes_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" id="firstNotesSubmit" onclick="submitSend()">Submit</button>
                      <button type="button" class="btn btn-primary mr-2" id="firstNotesNext" onclick="notes_first_end()">Move to 2nd Form</button>
                      <button type="button" class="btn btn-light float-right" onclick="notes_Clear()">Clear Form</button>

                    </div>


                  </div>
            
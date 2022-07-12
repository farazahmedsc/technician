 <!-- Central Split AC (3) Start -->


 <div class="row" id="centralSplit">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>Central Split AC</h3>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Manufacturer *</label>
                        <input type="text" class="form-control" name="cs_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="cs_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="cs_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tonnage *</label>
                        <select class="form-control" name="cs_tonnage">
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
                        <select class="form-control" name="cs_seer">
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
                        <label>Central Split AC Image</label>
                        <input type="file" name="cs_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="centralSplit_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" onclick="centralSplit_Submit()">Next</button>
                      <button type="button" class="btn btn-light float-right" onclick="centralSplit_Clear()">Clear
                        Form</button>

                    </div>

                  </div>


                  <!-- Central Split AC (3) End -->


                  <!-- Heat Pump (4) Start -->


                  <div class="row" id="heatPump">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>Heat Pump</h3>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Manufacturer *</label>
                        <input type="text" class="form-control" name="heat_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="heat_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="heat_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tonnage *</label>
                        <select class="form-control" name="heat_tonnage">
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
                        <select class="form-control" name="heat_seer">
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
                        <label>Heat Pump Image</label>
                        <input type="file" name="heat_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="heatPump_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" onclick="heatPump_Submit()">Next</button>
                      <button type="button" class="btn btn-light float-right" onclick="heatPump_Clear()">Clear
                        Form</button>

                    </div>

                  </div>


                  <!-- Heat Pump (4) End -->



                  <!-- Central Gas Furnace (5) Start -->

                  <div class="row" id="centralGas">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>Central Gas Furnace</h3>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Manufacturer *</label>
                        <input type="text" class="form-control" name="cg_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="cg_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="cg_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Input *</label>
                        <input type="text" class="form-control" name="cg_btu_input" placeholder="BTU Input">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Output *</label>
                        <input type="text" class="form-control" name="cg_btu_output" placeholder="BTU Output">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Efficiency *</label>
                        <input type="text" class="form-control" name="cg_efficiency" placeholder="Efficiency">
                      </div>
                    </div><!-- col-md-6 End-->

                    <!-- <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-12">Full Title 24? *</label>
                        <div class="form-check col-sm-3 offset-sm-1">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="cg_fulltime" value="Yes">
                            Yes
                          </label>
                        </div>

                        <div class="form-check col-sm-3">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="cg_fulltime" value="No">
                            No
                          </label>
                        </div>
                      </div>
                    </div> -->
                    <!-- col-md-6 End-->

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Central Gas Furnace Image</label>
                        <input type="file" name="cg_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="centralGas_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" onclick="centralGas_Submit()">Next</button>
                      <button type="button" class="btn btn-light float-right" onclick="centralGas_Clear()">Clear
                        Form</button>

                    </div>

                  </div>

                  <!-- Central Gas Furnace (5) End -->



                  <!-- AC Coil (6) Start -->

                  <div class="row" id="acCoil">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>AC Coil</h3>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Manufacturer *</label>
                        <input type="text" class="form-control" name="acc_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="acc_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="acc_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>AC Coil Image</label>
                        <input type="file" name="acc_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="acCoil_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" onclick="acCoil_Submit()">Next</button>
                      <button type="button" class="btn btn-light float-right" onclick="acCoil_Clear()">Clear Form</button>

                    </div>

                  </div>

                  <!-- AC Coil (6) End -->




                  <!-- Air Handler (7) Start -->

                  <div class="row" id="airHandler">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>Air Handler</h3>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Manufacturer *</label>
                        <input type="text" class="form-control" name="air_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="air_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="air_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Input *</label>
                        <input type="text" class="form-control" name="air_btu_input" placeholder="BTU Input">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Output *</label>
                        <input type="text" class="form-control" name="air_btu_output" placeholder="BTU Output">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Efficiency *</label>
                        <input type="text" class="form-control" name="air_efficiency" placeholder="Efficiency">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-12">Full Title 24? *</label>
                        <div class="form-check col-sm-3 offset-sm-1">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="air_fulltime" value="Yes">
                            Yes
                          </label>
                        </div>

                        <div class="form-check col-sm-3">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="air_fulltime" value="No">
                            No
                          </label>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Central Air Handler Image</label>
                        <input type="file" name="air_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->



                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="airHandler_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" onclick="airHandler_Submit()">Next</button>
                      <button type="button" class="btn btn-light float-right" onclick="airHandler_Clear()">Clear
                        Form</button>

                    </div>

                  </div>

                  <!-- Central Air Handler (7) End -->

                  <!--Condenser (8) Start -->

                  <div class="row" id="condenser">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>Condenser</h3>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Manufacturer *</label>
                        <input type="text" class="form-control" name="con_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="con_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="con_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Input *</label>
                        <input type="text" class="form-control" name="con_btu_input" placeholder="BTU Input">
                      </div>
                    </div><!-- col-md-6 End-->




                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Tonnage *</label>
                        <select class="form-control" name="con_tonnage">
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
                        <select class="form-control" name="con_seer">
                          <option value="Default">Default</option>
                          <option value="14">14</option>
                          <option value="15">15</option>
                          <option value="16">16</option>
                          <option value="17">17</option>
                          <option value="18">18</option>
                        </select>

                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Pounds *</label>
                        <input type="text" class="form-control" name="in_pounds" placeholder="Pounds">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Ounces *</label>
                        <input type="text" class="form-control" name="in_ounces" placeholder="BTU Ounces">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Condenser Image</label>
                        <input type="file" name="con_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="condenser_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" onclick="condenser_Submit()">Next</button>
                      <button type="button" class="btn btn-light float-right" onclick="condenser_Clear()">Clear
                        Form</button>

                    </div>

                  </div>



                  <!-- Condenser (8) End -->


                  <!--Indoor Unit (9) Start -->

                  <div class="row" id="indoorUnit">
                    <div class="col-md-12">
                      <div class="headingForm">
                        <h3>Indoor Unit</h3>
                      </div>
                    </div>

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Manufacturer *</label>
                        <input type="text" class="form-control" name="in_manufacturer" placeholder="Manufacturer">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Model Number *</label>
                        <input type="text" class="form-control" name="in_model" placeholder="Model Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>Serial Number *</label>
                        <input type="text" class="form-control" name="in_serial" placeholder="Serial Number">
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Input *</label>
                        <input type="text" class="form-control" name="in_btu_input" placeholder="BTU Input">
                      </div>
                    </div><!-- col-md-6 End-->

                    <div class="col-md-6">
                      <div class="form-group">
                        <label>BTU Output *</label>
                        <input type="text" class="form-control" name="in_btu_output" placeholder="BTU Output">
                      </div>
                    </div><!-- col-md-6 End-->


                    

                    <div class="col-md-6">
                      <div class="form-group row">
                        <label class="col-sm-12">Full Title 24? *</label>
                        <div class="form-check col-sm-3 offset-sm-1">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_fulltime" value="Yes">
                            Yes
                          </label>
                        </div>

                        <div class="form-check col-sm-3">
                          <label class="form-check-label">
                            <input type="radio" class="form-check-input" name="in_fulltime" value="No">
                            No
                          </label>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->


                    <div class="col-md-12">
                      <div class="form-group">
                        <label>Indoor Unit Image</label>
                        <input type="file" name="in_image[]" class="file-upload-default">
                        <div class="input-group col-xs-12">
                          <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                          <span class="input-group-append">
                            <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
                          </span>
                        </div>
                      </div>
                    </div><!-- col-md-6 End-->






                    <div class="col-md-12">
                      <button type="button" class="btn btn-primary mr-2" onclick="indoorUnit_Back()">Back</button>
                      <button type="button" class="btn btn-primary mr-2" onclick="indoorUnit_Submit()">Next</button>
                      <button type="button" class="btn btn-light float-right" onclick="indoorUnit_Clear()">Clear
                        Form</button>

                    </div>

                  </div>



                  <!-- Indoor Unit (9) End -->


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

                  <!-- Notes 11 End -->




                  <script>
                  
                   // (3)
    function centralSplit_Submit() {
      allow = true;

      fulltime = localStorage.getItem('fulltime');

      $("input[name=cs_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=cs_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=cs_serial]").val() == '' ? allow = false : nothing = true;
      $("select[name=cs_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
      $("select[name=cs_seer] option:selected").val() == "Default" ? allow = false : nothing = true;


      if (allow) {
        $("#centralSplit").hide();
        if (fulltime == 'Yes') {
          $("#acCoil").show();
          $("#hersTitle").append(" > acCoil");
        } else {
          $("#testResult").show();
          $("#hersTitle").append(" > Test Result");
        }

        // $("#centralGas").show();
        // $("#hersTitle").append(" > Central Gas Furnace");
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function centralSplit_Back() {
      $("#centralSplit").hide();
      // $("#initialForm").show();
      $("#centralGas").show();
      oneBack();
    }



    // (4)
    function heatPump_Submit() {
      allow = true;


      fulltime = localStorage.getItem('fulltime');

      $("input[name=heat_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=heat_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=heat_serial]").val() == '' ? allow = false : nothing = true;
      $("select[name=heat_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
      $("select[name=heat_seer] option:selected").val() == "Default" ? allow = false : nothing = true;


      if (allow) {
        $("#heatPump").hide();

        // $("#testResult").show();
        // $("#hersTitle").append(" > Test Result");

        if (fulltime == 'Yes') {
          $("#acCoil").show();
          $("#hersTitle").append(" > acCoil");
        } else {
          $("#testResult").show();
          $("#hersTitle").append(" > Test Result");
        }


        // $("#airHandler").show();
        // $("#hersTitle").append(" > Air Handler");
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function heatPump_Back() {
      $("#heatPump").hide();
      // $("#initialForm").show();
      $("#airHandler").show();
      
      oneBack();
    }


    // (5)
    function centralGas_Submit() {
      allow = true;

      fulltime = $("input[name=cg_fulltime]:checked").val();
      localStorage.setItem('fulltime', fulltime);




      $("input[name=cg_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=cg_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=cg_serial]").val() == '' ? allow = false : nothing = true;
      $("input[name=cg_btu_input]").val() == '' ? allow = false : nothing = true;
      $("input[name=cg_btu_output]").val() == '' ? allow = false : nothing = true;
      $("input[name=cg_efficiency]").val() == '' ? allow = false : nothing = true;
      $("input[name=cg_fulltime]").is(":checked") ? nothing = true : allow = false;

      if (allow) {
        $("#centralGas").hide();

        $("#centralSplit").show();
        $("#hersTitle").append(" > Central Split AC");


        // if (fulltime == 'Yes') {
        //   $("#acCoil").show();
        //   $("#hersTitle").append(" > acCoil");
        // } else {
        //   $("#testResult").show();
        //   $("#hersTitle").append(" > Test Result");
        // }
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function centralGas_Back() {
      $("#centralGas").hide();
      // $("#centralSplit").show();
      // oneBack();
      $("#initialForm").show();      
      oneBack();
    }

    // (6)
    function acCoil_Submit() {
      allow = true;

      $("input[name=acc_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=acc_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=acc_serial]").val() == '' ? allow = false : nothing = true;

      if (allow) {
        $("#acCoil").hide();
        $("#testResult").show();
        $("#hersTitle").append(" > Test Result");
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function acCoil_Back() {
      $("#acCoil").hide();
      
      $("#centralSplit").show();
      // $("#centralGas").show();
      oneBack();
    }



    // (7)
    function airHandler_Submit() {
      allow = true;


      fulltime = $("input[name=air_fulltime]:checked").val();
      localStorage.setItem('fulltime', fulltime);

      $("input[name=air_fulltime]").is(":checked") ? nothing = true : allow = false;
      $("input[name=air_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=air_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=air_serial]").val() == '' ? allow = false : nothing = true;
      $("input[name=air_btu_input]").val() == '' ? allow = false : nothing = true;
      $("input[name=air_btu_output]").val() == '' ? allow = false : nothing = true;
      $("input[name=air_efficiency]").val() == '' ? allow = false : nothing = true;

      if (allow) {
        $("#airHandler").hide();
        // $("#testResult").show();
        // $("#hersTitle").append(" > Test Result");

        $("#heatPump").show();
        $("#hersTitle").append(" > Heat Pump");
        

      } else {
        alert("Kindly fill all the fields");
      }
    }

    function airHandler_Back() {
      $("#airHandler").hide();

      $("#initialForm").show();
      // $("#heatPump").show();
      oneBack();
    }


    // (8)
    function condenser_Submit() {
      allow = true;

      fulltime = localStorage.getItem('fulltime');
      $("input[name=con_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=con_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=con_serial]").val() == '' ? allow = false : nothing = true;
      $("input[name=con_btu_input]").val() == '' ? allow = false : nothing = true;
      $("select[name=con_tonnage] option:selected").val() == "Default" ? allow = false : nothing = true;
      $("select[name=con_seer] option:selected").val() == "Default" ? allow = false : nothing = true;
      $("input[name=in_pounds]").val() == '' ? allow = false : nothing = true;
      $("input[name=in_ounces]").val() == '' ? allow = false : nothing = true;


      if (allow) {

        if (fulltime == "Yes") {
          $("#condenser").hide();
          $("#windows").show();
          $("#hersTitle").append(" > Windows");

        }else{
          $("#condenser").hide();
          // $("#notes").show();
          // $("#hersTitle").append(" > Notes");
          $("#notes").show();
          $("#hersTitle").append(" > Notes");

        }


        // $("#condenser").hide();
        // // $("#indoorUnit").show();
        // // $("#hersTitle").append(" > Indoor Unit");
        // $("#notes").show();
        // $("#hersTitle").append(" > Notes");
        
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function condenser_Back() {

      $("#condenser").hide();
      $("#indoorUnit").show();
      // $("#initialForm").show();
      oneBack();
    }

    // (9)
    function indoorUnit_Submit() {
      allow = true;

      fulltime = $("input[name=in_fulltime]:checked").val();
      localStorage.setItem('fulltime', fulltime);

      $("input[name=in_fulltime]").is(":checked") ? nothing = true : allow = false;


      $("input[name=in_manufacturer]").val() == '' ? allow = false : nothing = true;
      $("input[name=in_model]").val() == '' ? allow = false : nothing = true;
      $("input[name=in_serial]").val() == '' ? allow = false : nothing = true;
      $("input[name=in_btu_input]").val() == '' ? allow = false : nothing = true;
      $("input[name=in_btu_output]").val() == '' ? allow = false : nothing = true;


      


      if (allow) {

        // if (fulltime == "Yes") {
        //   $("#indoorUnit").hide();
        //   $("#windows").show();
        //   $("#hersTitle").append(" > Windows");

        // }else{
        //   $("#indoorUnit").hide();
        //   // $("#notes").show();
        //   // $("#hersTitle").append(" > Notes");
        //   $("#condenser").show();
        //   $("#hersTitle").append(" > Condenser");

        // }

        $("#indoorUnit").hide();
        // $("#notes").show();
        // $("#hersTitle").append(" > Notes");
        $("#condenser").show();
        $("#hersTitle").append(" > Condenser");
       
      } else {
        alert("Kindly fill all the fields");
      }
    }

    function indoorUnit_Back() {
      $("#indoorUnit").hide();
      // $("#condenser").show();
      $("#initialForm").show();
      oneBack();
    }
                  
                  
                  </script>
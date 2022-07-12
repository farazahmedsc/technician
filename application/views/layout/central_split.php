<div class="d-none">
    <input type="text" name="cs_url">
    <input type="text" name="cs_no_of_form">
    <input type="text" name="cs_tech_id">
    <input type="text" name="cs_id">
    <input type="text" name="cs_test_name">
    <input type="text" name="cs_company_name">
    <input type="text" name="cs_site_address">
    <input type="text" name="cs_email">
    <input type="text" name="cs_duct_location">
    <input type="text" name="cs_number_of_bedroom">
    <input type="text" name="cs_fulltime">
    <input type="text" name="cs_submit" value="NA">
</div>


<div id="centralGas"> 
    <div class="row cg_clone" >
        <div class="col-md-12">
            <div class="headingForm">
            <h3>Central Gas Furnace</h3>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label>Manufacturer *</label>
            <input type="text" class="form-control" name="cg_manufacturer[]" placeholder="Manufacturer">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Model Number *</label>
            <input type="text" class="form-control" name="cg_model[]" placeholder="Model Number">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Serial Number *</label>
            <input type="text" class="form-control" name="cg_serial[]" placeholder="Serial Number">
            </div>
        </div><!-- col-md-6 End-->

        <div class="col-md-6">
            <div class="form-group">
            <label>BTU Input *</label>
            <input type="text" class="form-control" name="cg_btu_input[]" placeholder="BTU Input">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>BTU Output *</label>
            <input type="text" class="form-control" name="cg_btu_output[]" placeholder="BTU Output">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Efficiency *</label>
            <input type="text" class="form-control" name="cg_efficiency[]" placeholder="Efficiency">
            </div>
        </div><!-- col-md-6 End-->

        
        <div class="col-md-12">
            <div class="form-group">
            <label>Central Gas Furnace Image</label>
            <input type="file" name="cg_image1[]" class="file-upload-default">
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" onclick="cg_image_click('cg_image1')" type="button">Upload</button>
                </span>
            </div>
            </div>
        </div><!-- col-md-6 End-->

        

    </div>

</div>

<div id="centralGas_btn">

    <div class="col-md-12"> 
            <button type="button" class="btn btn-primary mr-2" onclick="centralGas_Back()">Back</button>
            <button type="button" class="btn btn-primary mr-2" onclick="centralGas_Submit()">Next</button>
            <button type="button" class="btn btn-light float-right" onclick="centralGas_Clear()">Clear
            Form</button>

        </div>

    <div class="col-md-12 mt-4">
        <button type="button" class="btn btn-info mr-2" onclick="centralGas_addMore()">Add More</button>
        <button type="button" class="btn btn-danger mr-2" onclick="centralGas_lessOne()">Less One</button>
    </div>


</div>
        


<div id="centralSplit">
    <div class="row cs_clone">
        <div class="col-md-12">
            <div class="headingForm">
                <h3>Central Split AC</h3>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
                <label>Manufacturer *</label>
                <input type="text" class="form-control" name="cs_manufacturer[]" placeholder="Manufacturer">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
                <label>Model Number *</label>
                <input type="text" class="form-control" name="cs_model[]" placeholder="Model Number">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
                <label>Serial Number *</label>
                <input type="text" class="form-control" name="cs_serial[]" placeholder="Serial Number">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
                <label>Tonnage *</label>
                <select class="form-control" name="cs_tonnage[]">
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
                <select class="form-control" name="cs_seer[]">
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
                <input type="file" name="cs_image1[]" class="file-upload-default">
                <div class="input-group col-xs-12">
                    <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                    <span class="input-group-append">
                        <button class="file-upload-browse btn btn-primary" onclick="cs_image_click('cs_image1')" type="button">Upload</button>
                    </span>
                </div>
            </div>
        </div><!-- col-md-6 End-->

    </div>
</div>
<div id="centralSplit_btn">

    <div class="col-md-12">
        <button type="button" class="btn btn-primary mr-2" onclick="centralSplit_Back()">Back</button>
        <button type="button" class="btn btn-primary mr-2" onclick="centralSplit_Submit()">Next</button>
        <button type="button" class="btn btn-light float-right" onclick="centralSplit_Clear()">Clear
            Form</button>

    </div>

    <div class="col-md-12 mt-4">
        <button type="button" class="btn btn-info mr-2" onclick="centralSplit_addMore()">Add More</button>
        <button type="button" class="btn btn-danger mr-2" onclick="centralSplit_lessOne()">Less One</button>
    </div>


</div>

<div id="acCoil">
    <div class="row ac_clone" >
        <div class="col-md-12">
            <div class="headingForm">
            <h3>AC Coil</h3>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label>Manufacturer *</label>
            <input type="text" class="form-control" name="acc_manufacturer[]" placeholder="Manufacturer">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Model Number *</label>
            <input type="text" class="form-control" name="acc_model[]" placeholder="Model Number">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Serial Number *</label>
            <input type="text" class="form-control" name="acc_serial[]" placeholder="Serial Number">
            </div>
        </div><!-- col-md-6 End-->

        <div class="col-md-12">
            <div class="form-group">
            <label>AC Coil Image</label>
            <input type="file" name="acc_image1[]" class="file-upload-default">
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" onclick="ac_image_click('acc_image1')" type="button">Upload</button>
                </span>
            </div>
            </div>
        </div><!-- col-md-6 End-->


       

    </div>

</div>

<div id="acCoil_btn">

    <div class="col-md-12">
        <button type="button" class="btn btn-primary mr-2" onclick="acCoil_Back()">Back</button>
        <button type="button" class="btn btn-primary mr-2" onclick="acCoil_Submit()">Next</button>
        <button type="button" class="btn btn-light float-right" onclick="acCoil_Clear()">Clear Form</button>

    </div>

    <div class="col-md-12 mt-4">
        <button type="button" class="btn btn-info mr-2" onclick="acCoil_addMore()">Add More</button>
        <button type="button" class="btn btn-danger mr-2" onclick="acCoil_lessOne()">Less One</button>
    </div>


</div>




<div class="row" id="csfulltime_yes">
  <div class="col-md-12">
    <div class="headingForm">
      <h3>Refrigerant (MCH 25)</h3>
    </div>
  </div>


  <div class="col-md-12">
    <div class="form-group">
      <label>Refrigerant (MCH 25) Image</label>
      <input type="file" name="cs_ref_image[]" class="file-upload-default">
      <div class="input-group col-xs-12">
        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
        <span class="input-group-append">
          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
        </span>
      </div>
    </div>
  </div><!-- col-md-6 End-->


  <!-- Windowasss -->


  <div class="col-md-12">
    <div class="headingForm">
      <h3>Windows</h3>
    </div>
  </div>


  <div class="col-md-12">
    <div class="form-group">
      <label>Windows Image</label>
      <input type="file" name="cs_win_image[]" class="file-upload-default">
      <div class="input-group col-xs-12">
        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
        <span class="input-group-append">
          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
        </span>
      </div>
    </div>
  </div><!-- col-md-6 End-->

  <!-- Water Header -->


  <div class="col-md-12">
    <div class="headingForm">
      <h3>Water Heater</h3>
    </div>
  </div>


  <div class="col-md-12">
    <div class="form-group">
      <label>Water Heater Image</label>
      <input type="file" name="cs_water_image[]" class="file-upload-default">
      <div class="input-group col-xs-12">
        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
        <span class="input-group-append">
          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
        </span>
      </div>
    </div>
  </div><!-- col-md-6 End-->


  <!-- Kitchen -->


  <div class="col-md-12">
    <div class="headingForm">
      <h3>Kitchen Hood</h3>
    </div>
  </div>


  <div class="col-md-12">
    <div class="form-group">
      <label>Kitchen Hood Image</label>
      <input type="file" name="cs_kitchen_image[]" class="file-upload-default">
      <div class="input-group col-xs-12">
        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
        <span class="input-group-append">
          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
        </span>
      </div>
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-12">
    <button type="button" class="btn btn-primary mr-2" onclick="csfulltime_Back()">Back</button>
    <button type="button" class="btn btn-primary mr-2" onclick="csfulltime_Submit()">Next</button>
  </div>

</div>





<div class="row" id="cstestResult">
  <div class="col-md-12">
    <div class="headingForm">
      <h3>Test Result</h3>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label>Duct Leakage CFM Result</label>
      <input type="text" class="form-control" name="cstest_duct_leak_result" placeholder="Duct Leakage CFM Result">
    </div>
  </div><!-- col-md-6 End-->




  <div class="col-md-6">
    <div class="form-group">
      <label>Duct Leakage CFM *</label>
      <div class="row">
        <div class="col-md-4">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="cstest_ductLeakage" value="5%">
              5%
            </label>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="cstest_ductLeakage" value="15%_Partial">
              15% (Partial)
            </label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="cstest_ductLeakage" value="15%_System">
              15% (System only)
            </label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="cstest_ductLeakage" value="Exempt_Asbestos">
              Exempt (Asbestos)
            </label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="cstest_ductLeakage" value="Exempt_40ft">
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
      <input type="text" class="form-control" name="cstest_fanWatt" placeholder="Fan Watt Draw">
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
      <h5>Airflow CFM Result</h5>
      <label>CFM (Return 1) </label>
      <input type="text" class="form-control" name="cstest_cfm1" placeholder="CFM (Return 1)">
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
      <label>Location (Return 1) </label>
      <input type="text" class="form-control" name="cstest_location1" placeholder="Location (Return 1)">
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
      <label>CFM (Return 2)</label>
      <input type="text" class="form-control" name="cstest_cfm2" placeholder="CFM (Return 2)">
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
      <label>Location (Return 2)</label>
      <input type="text" class="form-control" name="cstest_location2" placeholder="Location (Return 2)">
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
      <label>CFM (Return 3)</label>
      <input type="text" class="form-control" name="cstest_cfm3" placeholder="CFM (Return 3)">
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
      <label>Location (Return 3)</label>
      <input type="text" class="form-control" name="cstest_location3" placeholder="Location (Return 3)">
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
      <label>CFM (Return 4)</label>
      <input type="text" class="form-control" name="cstest_cfm4" placeholder="CFM (Return 4)">
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
      <label>Location (Return 4)</label>
      <input type="text" class="form-control" name="cstest_location4" placeholder="Location (Return 4)">
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
      <label>CFM (Return 5)</label>
      <input type="text" class="form-control" name="cstest_cfm5" placeholder="CFM (Return 5)">
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
      <label>Location (Return 5)</label>
      <input type="text" class="form-control" name="cstest_location5" placeholder="Location (Return 5)">
    </div>
  </div><!-- col-md-6 End-->



  <div class="col-md-12">
    <button type="button" class="btn btn-primary mr-2" onclick="cstestResult_Back()">Back</button>

    <button type="button" class="btn btn-primary mr-2" onclick="cstestResultSubmit()">Next</button>
    <button type="button" class="btn btn-light float-right" onclick="cstestResult_Clear()">Clear
      Form</button>

  </div>



</div>



<div class="row" id="csnotes">
  <div class="col-md-12">
    <div class="headingForm">
      <h3> Notes </h3>
    </div>
  </div>


  <div class="col-md-12">
    <div class="form-group">
      <label>Notes</label>
      <input type="text" class="form-control" name="cs_notes" placeholder="Notes">
    </div>
  </div><!-- col-md-6 End-->



  <div class="col-md-12">
    <button type="button" class="btn btn-primary mr-2" onclick="csnotes_Back()">Back</button>
    <button type="button" class="btn btn-primary mr-2" id="firstNotesSubmit" onclick="cssubmitSend()">Submit</button>
    <button type="button" class="btn btn-primary mr-2" id="firstNotesNext" onclick="csnew_form()">Add New Form</button>
    <button type="button" class="btn btn-light float-right" onclick="notes_Clear()">Clear Form</button>
  <button type="submit" class="d-none" id="cssubmit">Submit</button>
  </div>


</div>



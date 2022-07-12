<div class="d-none">
  <input type="text" name="hp_url">
  <input type="text" name="hp_no_of_form">
  <input type="text" name="hp_tech_id">
  <input type="text" name="hp_id">
  <input type="text" name="hp_test_name">
  <input type="text" name="hp_company_name">
  <input type="text" name="hp_site_address">
  <input type="text" name="hp_email">
  <input type="text" name="hp_duct_location">
  <input type="text" name="hp_number_of_bedroom">
  <input type="text" name="hp_fulltime">
  <input type="text" name="hp_submit" value="NA">
</div>


<div id="airHandler">
    <div class="row ah_clone" >
        <div class="col-md-12">
            <div class="headingForm">
            <h3>Air Handler</h3>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label>Manufacturer *</label>
            <input type="text" class="form-control" name="air_manufacturer[]" placeholder="Manufacturer">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Model Number *</label>
            <input type="text" class="form-control" name="air_model[]" placeholder="Model Number">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Serial Number *</label>
            <input type="text" class="form-control" name="air_serial[]" placeholder="Serial Number">
            </div>
        </div><!-- col-md-6 End-->

        <div class="col-md-6">
            <div class="form-group">
            <label>BTU Input *</label>
            <input type="text" class="form-control" name="air_btu_input[]" placeholder="BTU Input">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>BTU Output *</label>
            <input type="text" class="form-control" name="air_btu_output[]" placeholder="BTU Output">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Efficiency *</label>
            <input type="text" class="form-control" name="air_efficiency[]" placeholder="Efficiency">
            </div>
        </div><!-- col-md-6 End-->


    
        <div class="col-md-12">
            <div class="form-group">
            <label>Central Air Handler Image</label>
            <input type="file" name="air_image1[]" class="file-upload-default">
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" onclick="air_image_click('air_image1')" type="button">Upload</button>
                </span>
            </div>
            </div>
        </div><!-- col-md-6 End-->



       

    </div>
</div>



<div id="airHandler_btn">
    <div class="col-md-12">
        <button type="button" class="btn btn-primary mr-2" onclick="airHandler_Back()">Back</button>
        <button type="button" class="btn btn-primary mr-2" onclick="airHandler_Submit()">Next</button>
        <button type="button" class="btn btn-light float-right" onclick="airHandler_Clear()">Clear
        Form</button>

    </div>

  <div class="col-md-12 mt-4">
    <button type="button" class="btn btn-info mr-2" onclick="airHandler_addMore()">Add More</button>
    <button type="button" class="btn btn-danger mr-2" onclick="airHandler_lessOne()">Less One</button>
  </div>
</div>





<div id="heatPump">
    <div class="row hp_clone">
        <div class="col-md-12">
            <div class="headingForm">
            <h3>Heat Pump</h3>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label>Manufacturer *</label>
            <input type="text" class="form-control" name="heat_manufacturer[]" placeholder="Manufacturer">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Model Number *</label>
            <input type="text" class="form-control" name="heat_model[]" placeholder="Model Number">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Serial Number *</label>
            <input type="text" class="form-control" name="heat_serial[]" placeholder="Serial Number">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Tonnage *</label>
            <select class="form-control" name="heat_tonnage[]">
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
            <select class="form-control" name="heat_seer[]">
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
            <input type="file" name="heat_image1[]" class="file-upload-default">
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" onclick="heat_image_click('heat_image1')" type="button">Upload</button>
                </span>
            </div>
            </div>
        </div><!-- col-md-6 End-->



       

    </div>
</div>

<div id="heatPump_btn">
    <div class="col-md-12">
        <button type="button" class="btn btn-primary mr-2" onclick="heatPump_Back()">Back</button>
        <button type="button" class="btn btn-primary mr-2" onclick="heatPump_Submit()">Next</button>
        <button type="button" class="btn btn-light float-right" onclick="heatPump_Clear()">Clear
        Form</button>

    </div>

  <div class="col-md-12 mt-4">
    <button type="button" class="btn btn-info mr-2" onclick="heatPump_addMore()">Add More</button>
    <button type="button" class="btn btn-danger mr-2" onclick="heatPump_lessOne()">Less One</button>
  </div>
</div>



<div id="hpacCoil">
    <div class="row hpac_clone" >
        <div class="col-md-12">
            <div class="headingForm">
            <h3>AC Coil</h3>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label>Manufacturer *</label>
            <input type="text" class="form-control" name="hpacc_manufacturer[]" placeholder="Manufacturer">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Model Number *</label>
            <input type="text" class="form-control" name="hpacc_model[]" placeholder="Model Number">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Serial Number *</label>
            <input type="text" class="form-control" name="hpacc_serial[]" placeholder="Serial Number">
            </div>
        </div><!-- col-md-6 End-->

        <div class="col-md-12">
            <div class="form-group">
            <label>AC Coil Image</label>
            <input type="file" name="hpacc_image1[]" class="file-upload-default">
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" onclick="hpac_image_click('hpacc_image1')" type="button">Upload</button>
                </span>
            </div>
            </div>
        </div><!-- col-md-6 End-->


       

    </div>

</div>

<div id="hpacCoil_btn">

    <div class="col-md-12">
        <button type="button" class="btn btn-primary mr-2" onclick="hpacCoil_Back()">Back</button>
        <button type="button" class="btn btn-primary mr-2" onclick="hpacCoil_Submit()">Next</button>
        <button type="button" class="btn btn-light float-right" onclick="hpacCoil_Clear()">Clear Form</button>

    </div>

    <div class="col-md-12 mt-4">
        <button type="button" class="btn btn-info mr-2" onclick="hpacCoil_addMore()">Add More</button>
        <button type="button" class="btn btn-danger mr-2" onclick="hpacCoil_lessOne()">Less One</button>
    </div>


</div>



<!-- Refrigerant (MCH 25) 10.1 Start -->

<div class="row" id="hpfulltime_yes">
  <div class="col-md-12">
    <div class="headingForm">
      <h3>Refrigerant (MCH 25)</h3>
    </div>
  </div>


  <div class="col-md-12">
    <div class="form-group">
      <label>Refrigerant (MCH 25) Image</label>
      <input type="file" name="hp_ref_image[]" class="file-upload-default">
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
      <input type="file" name="hp_win_image[]" class="file-upload-default">
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
      <input type="file" name="hp_water_image[]" class="file-upload-default">
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
      <input type="file" name="hp_kitchen_image[]" class="file-upload-default">
      <div class="input-group col-xs-12">
        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
        <span class="input-group-append">
          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
        </span>
      </div>
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-12">
    <button type="button" class="btn btn-primary mr-2" onclick="hpfulltime_Back()">Back</button>
    <button type="button" class="btn btn-primary mr-2" onclick="hpfulltime_Submit()">Next</button>
  </div>

</div>
<!-- Refrigerant (MCH 25) 10.1 End -->



<!-- Test Result 10 Start -->

<div class="row" id="hptestResult">
  <div class="col-md-12">
    <div class="headingForm">
      <h3>Test Result</h3>
    </div>
  </div>

  <div class="col-md-6">
    <div class="form-group">
      <label>Duct Leakage CFM Result</label>
      <input type="text" class="form-control" name="hptest_duct_leak_result" placeholder="Duct Leakage CFM Result">
    </div>
  </div><!-- col-md-6 End-->




  <div class="col-md-6">
    <div class="form-group">
      <label>Duct Leakage CFM *</label>
      <div class="row">
        <div class="col-md-4">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="hptest_ductLeakage" value="5%">
              5%
            </label>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="hptest_ductLeakage" value="15%_Partial">
              15% (Partial)
            </label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="hptest_ductLeakage" value="15%_System">
              15% (System only)
            </label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="hptest_ductLeakage" value="Exempt_Asbestos">
              Exempt (Asbestos)
            </label>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-check">
            <label class="form-check-label">
              <input type="radio" class="form-check-input" name="hptest_ductLeakage" value="Exempt_40ft">
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
      <input type="text" class="form-control" name="hptest_fanWatt" placeholder="Fan Watt Draw">
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
      <h5>Airflow CFM Result</h5>
      <label>CFM (Return 1) </label>
      <input type="text" class="form-control" name="hptest_cfm1" placeholder="CFM (Return 1)">
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
      <label>Location (Return 1) </label>
      <input type="text" class="form-control" name="hptest_location1" placeholder="Location (Return 1)">
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
      <label>CFM (Return 2)</label>
      <input type="text" class="form-control" name="hptest_cfm2" placeholder="CFM (Return 2)">
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
      <label>Location (Return 2)</label>
      <input type="text" class="form-control" name="hptest_location2" placeholder="Location (Return 2)">
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
      <label>CFM (Return 3)</label>
      <input type="text" class="form-control" name="hptest_cfm3" placeholder="CFM (Return 3)">
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
      <label>Location (Return 3)</label>
      <input type="text" class="form-control" name="hptest_location3" placeholder="Location (Return 3)">
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
      <label>CFM (Return 4)</label>
      <input type="text" class="form-control" name="hptest_cfm4" placeholder="CFM (Return 4)">
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
      <label>Location (Return 4)</label>
      <input type="text" class="form-control" name="hptest_location4" placeholder="Location (Return 4)">
    </div>
  </div><!-- col-md-6 End-->


  <div class="col-md-6">
    <div class="form-group">
      <label>CFM (Return 5)</label>
      <input type="text" class="form-control" name="hptest_cfm5" placeholder="CFM (Return 5)">
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-6">
    <div class="form-group">
      <label>Location (Return 5)</label>
      <input type="text" class="form-control" name="hptest_location5" placeholder="Location (Return 5)">
    </div>
  </div><!-- col-md-6 End-->



  <div class="col-md-12">
    <button type="button" class="btn btn-primary mr-2" onclick="hptestResult_Back()">Back</button>

    <button type="button" class="btn btn-primary mr-2" onclick="hptestResultSubmit()">Next</button>
    <button type="button" class="btn btn-light float-right" onclick="hptestResult_Clear()">Clear
      Form</button>

  </div>



</div>

<!-- Test Result 10 End -->





<!-- Notes 11 Start -->

<div class="row" id="hpnotes">
  <div class="col-md-12">
    <div class="headingForm">
      <h3> Notes </h3>
    </div>
  </div>


  <div class="col-md-12">
    <div class="form-group">
      <label>Notes</label>
      <input type="text" class="form-control" name="hp_notes" placeholder="Notes">
    </div>
  </div><!-- col-md-6 End-->



  <div class="col-md-12">
    <button type="button" class="btn btn-primary mr-2" onclick="hpnotes_Back()">Back</button>
    <button type="button" class="btn btn-primary mr-2" id="firstNotesSubmit" onclick="hpsubmitSend()">Submit</button>
    <button type="button" class="btn btn-primary mr-2" id="firstNotesNext" onclick="hpnew_form()">Add New Form</button>
    <button type="button" class="btn btn-light float-right" onclick="notes_Clear()">Clear Form</button>
  <button type="submit" class="d-none" id="hpsubmit">Submit</button>
  </div>


</div>
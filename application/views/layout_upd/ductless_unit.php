

<script>

var ductless_unit = `<div class="d-none">
  <input type="text" name="du_url">
  <input type="text" name="du_no_of_form">
  <input type="text" name="du_tech_id">
  <input type="text" name="du_id">
  <input type="text" name="du_test_name">
  <input type="text" name="du_company_name">
  <input type="text" name="du_site_address">
  <input type="text" name="du_email">
  <input type="text" name="du_duct_location">
  <input type="text" name="du_number_of_bedroom">
  <input type="text" name="du_fulltime">
  <input type="text" name="du_submit" value="NA">
</div>



<!--Indoor Unit (9) Start -->
<div id="indoorUnit">
    <div class="row iu_clone" >
        <div class="col-md-12">
            <div class="headingForm">
            <h3>Indoor Unit</h3>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label>Manufacturer *</label>
            <input type="text" class="form-control" name="in_manufacturer[]" placeholder="Manufacturer">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Model Number *</label>
            <input type="text" class="form-control" name="in_model[]" placeholder="Model Number">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Serial Number *</label>
            <input type="text" class="form-control" name="in_serial[]" placeholder="Serial Number">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>BTU Input *</label>
            <input type="text" class="form-control" name="in_btu_input[]" placeholder="BTU Input">
            </div>
        </div><!-- col-md-6 End-->

        <div class="col-md-6">
            <div class="form-group">
            <label>BTU Output *</label>
            <input type="text" class="form-control" name="in_btu_output[]" placeholder="BTU Output">
            </div>
        </div><!-- col-md-6 End-->



        <div class="col-md-12">
            <div class="form-group">
            <label>Indoor Unit Image</label>
            <input type="file" name="in_image1[]" class="file-upload-default">
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" onclick="in_image_click('in_image1')" type="button">Upload</button>
                </span>
            </div>
            </div>
        </div><!-- col-md-6 End-->

    </div>
</div>




<div id="indoorUnit_btn">
    <div class="col-md-12">
        <button type="button" class="btn btn-primary mr-2" onclick="indoorUnit_Back()">Back</button>
        <button type="button" class="btn btn-primary mr-2" onclick="indoorUnit_Submit()">Next</button>
        <button type="button" class="btn btn-light float-right" onclick="indoorUnit_Clear()">Clear
        Form</button>

    </div>

  <div class="col-md-12 mt-4">
    <button type="button" class="btn btn-info mr-2" onclick="indoorUnit_addMore()">Add More</button>
    <button type="button" class="btn btn-danger mr-2" onclick="indoorUnit_lessOne()">Less One</button>
  </div>
</div>


<!-- Indoor Unit (9) End -->



<!--Condenser (8) Start -->
<div id="condenser">
    <div class="row c_clone">
        <div class="col-md-12">
            <div class="headingForm">
            <h3>Condenser</h3>
            </div>
        </div>

        <div class="col-md-6">
            <div class="form-group">
            <label>Manufacturer *</label>
            <input type="text" class="form-control" name="con_manufacturer[]" placeholder="Manufacturer">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Model Number *</label>
            <input type="text" class="form-control" name="con_model[]" placeholder="Model Number">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Serial Number *</label>
            <input type="text" class="form-control" name="con_serial[]" placeholder="Serial Number">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>BTU Input *</label>
            <input type="text" class="form-control" name="con_btu_input[]" placeholder="BTU Input">
            </div>
        </div><!-- col-md-6 End-->




        <div class="col-md-6">
            <div class="form-group">
            <label>Tonnage *</label>
            <select class="form-control" name="con_tonnage[]">
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
            <select class="form-control" name="con_seer[]">
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
            <input type="text" class="form-control" name="con_pounds[]" placeholder="Pounds">
            </div>
        </div><!-- col-md-6 End-->


        <div class="col-md-6">
            <div class="form-group">
            <label>Ounces *</label>
            <input type="text" class="form-control" name="con_ounces[]" placeholder="BTU Ounces">
            </div>
        </div><!-- col-md-6 End-->

        <div class="col-md-12">
            <div class="form-group">
            <label>Condenser Image</label>
            <input type="file" name="con_image1[]" class="file-upload-default">
            <div class="input-group col-xs-12">
                <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
                <span class="input-group-append">
                <button class="file-upload-browse btn btn-primary" onclick="con_image_click('con_image1')" type="button">Upload</button>
                </span>
            </div>
            </div>
        </div><!-- col-md-6 End-->

        

    </div>
</div>



<div id="condenser_btn">
    <div class="col-md-12">
        <button type="button" class="btn btn-primary mr-2" onclick="condenser_Back()">Back</button>
        <button type="button" class="btn btn-primary mr-2" onclick="condenser_Submit()">Next</button>
        <button type="button" class="btn btn-light float-right" onclick="condenser_Clear()">Clear
        Form</button>
    </div>

  <div class="col-md-12 mt-4">
    <button type="button" class="btn btn-info mr-2" onclick="condenser_addMore()">Add More</button>
    <button type="button" class="btn btn-danger mr-2" onclick="condenser_lessOne()">Less One</button>
  </div>
</div>



                  <!-- Condenser (8) End -->




<!-- Refrigerant (MCH 25) 10.1 Start -->

<div class="row" id="dufulltime_yes">
  <div class="col-md-12">
    <div class="headingForm">
      <h3>Refrigerant (MCH 25)</h3>
    </div>
  </div>


  <div class="col-md-12">
    <div class="form-group">
      <label>Refrigerant (MCH 25) Image</label>
      <input type="file" name="du_ref_image[]" class="file-upload-default">
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
      <input type="file" name="du_win_image[]" class="file-upload-default">
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
      <input type="file" name="du_water_image[]" class="file-upload-default">
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
      <input type="file" name="du_kitchen_image[]" class="file-upload-default">
      <div class="input-group col-xs-12">
        <input type="text" class="form-control file-upload-info" disabled placeholder="Upload Image">
        <span class="input-group-append">
          <button class="file-upload-browse btn btn-primary" type="button">Upload</button>
        </span>
      </div>
    </div>
  </div><!-- col-md-6 End-->

  <div class="col-md-12">
    <button type="button" class="btn btn-primary mr-2" onclick="dufulltime_Back()">Back</button>
    <button type="button" class="btn btn-primary mr-2" onclick="dufulltime_Submit()">Next</button>
  </div>

</div>
<!-- Refrigerant (MCH 25) 10.1 End -->


<!-- Notes 11 Start -->

<div class="row" id="dunotes">
  <div class="col-md-12">
    <div class="headingForm">
      <h3> Notes </h3>
    </div>
  </div>


  <div class="col-md-12">
    <div class="form-group">
      <label>Notes</label>
      <input type="text" class="form-control" name="du_notes" placeholder="Notes">
    </div>
  </div><!-- col-md-6 End-->



  <div class="col-md-12">
    <button type="button" class="btn btn-primary mr-2" onclick="dunotes_Back()">Back</button>
    <button type="button" class="btn btn-primary mr-2" id="firstNotesSubmit" onclick="dusubmitSend()">Submit</button>
    <button type="button" class="btn btn-primary mr-2" id="firstNotesNext" onclick="dunew_form()">Add New Form</button>
    <button type="button" class="btn btn-light float-right" onclick="notes_Clear()">Clear Form</button>
  <button type="submit" class="d-none" id="dusubmit">Submit</button>
  </div>


</div>
`;

</script>
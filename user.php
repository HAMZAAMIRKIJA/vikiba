<?php
include("./header.php");
?>
<!-- MODEL FOR REGISTER -->


<body>

<div class="container mt-3">
 
</div>

<!-- The Modal -->
<div class="modal" id="myModa">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">USER REGISTRATION FORM</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <head>
            <link rel="stylesheet" href=".style.css">
        </head>
        
        <form style="width:100%;">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">User ID</label>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Full Name</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" />
    <label class="form-label" for="form6Example3">User Name</label>
  </div>

  <!-- Text input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Password</label>
  </div>

  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>

  <!-- Number input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Phone</label>
  </div>

  <!-- Message input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Gender</label>
  </div>
  <!-- Message input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Gender</label>
  </div>
  <!-- Message input -->

  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form6Example6">User Type</label>
    <select name="dropdown" >
    <option value="Mwanachama">Mwanachama</option>
    <option value="Mwenyekiti">Mwenyekiti</option>
    <option value="Katibu">Katibu</option>
    <option value="Muweka Hazina">Mwanachama</option>
    <option value="Admin">Admin</option>
</select>
   
  </div>
   <!-- Message input -->
   <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Mdhamini</label>
  </div>
  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input
      class="form-check-input me-2"
      type="checkbox"
      value=""
      id="form6Example8"
      checked
    />
    <label class="form-check-label" for="form6Example8"> Create an account? </label>
  </div>

  <!-- Submit button -->
  <input type="button" data-mdb-ripple-init class="btn btn-primary btn-block mb-4 col-sm-4" value="SUBMIT"></button>
</form>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal ">Close</button>
      </div>

    </div>
  </div>
</div>


</body>
</html>

<!-- END MODEL FOR REGISTER -->
<!-- model for edit -->



<body>

<div class="container mt-3">
 
</div>

<!-- The Modal -->
<div class="modal" id="myMode">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">EDIT USER</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      <div class="modal-body">
        <head>
            <link rel="stylesheet" href=".style.css">
        </head>
        
        <form style="width:100%;">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form6Example1" class="form-control" />
        <label class="form-label" for="form6Example1">User ID</label>
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form6Example2" class="form-control" />
        <label class="form-label" for="form6Example2">Full Name</label>
      </div>
    </div>
  </div>

  <!-- Text input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form6Example3" class="form-control" />
    <label class="form-label" for="form6Example3">User Name</label>
  </div>

  <!-- Text input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form6Example4" class="form-control" />
    <label class="form-label" for="form6Example4">Password</label>
  </div>

  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form6Example5" class="form-control" />
    <label class="form-label" for="form6Example5">Email</label>
  </div>

  <!-- Number input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Phone</label>
  </div>

  <!-- Message input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="number" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Gender</label>
  </div>
  <!-- Message input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Gender</label>
  </div>
  <!-- Message input -->

  <div data-mdb-input-init class="form-outline mb-4">
  <label class="form-label" for="form6Example6">User Type</label>
    <select name="dropdown" >
    <option value="Mwanachama">Mwanachama</option>
    <option value="Mwenyekiti">Mwenyekiti</option>
    <option value="Katibu">Katibu</option>
    <option value="Muweka Hazina">Mwanachama</option>
    <option value="Admin">Admin</option>
</select>
   
  </div>
   <!-- Message input -->
   <div data-mdb-input-init class="form-outline mb-4">
    <input type="text" id="form6Example6" class="form-control" />
    <label class="form-label" for="form6Example6">Mdhamini</label>
  </div>
  <!-- Checkbox -->
  <div class="form-check d-flex justify-content-center mb-4">
    <input
      class="form-check-input me-2"
      type="checkbox"
      value=""
      id="form6Example8"
      checked
    />
    <label class="form-check-label" for="form6Example8"> Update Detail? </label>
  </div>

  <!-- Submit button -->
  <button data-mdb-ripple-init type="button" class="btn btn-primary btn-block mb-4 col-sm">Submit</button>
</form>

      </div>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal ">Close</button>
      </div>

    </div>
  </div>
</div>


</body>
</html>


<!-- end of model edit -->
<!-- model taarifa za user -->
<body>

<div class="container mt-3">
 
</div>

<!-- The Modal -->
<div class="modal" id="myMo">
  <div class="modal-dialog">
    <div class="modal-content">

      <!-- Modal Header -->
      <div class="modal-header">
        <h4 class="modal-title">TAARIFA ZA MWANACHAMA</h4>
        <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
      </div>

      <!-- Modal body -->
      

      <center><form style="width: 90%;">
  <!-- 2 column grid layout with text inputs for the first and last names -->
  <div class="row mb-4">
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form3Example1" class="form-control" />
        <label class="form-label" for="form3Example1">NAMBA YA MWANACHAMA</label>
      </div>
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">MAJINA</label>

      </div>
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">JUMLA YA HISA</label>
        
      </div>
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">JUMLA YA MADENI</label>
        
      </div>
    </div>
    <div class="col">
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">JUMLA YA FAINI</label>
        
      </div>
      <div data-mdb-input-init class="form-outline">
        <input type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">MAREJESHO YA KILA MWEZI</label>
      </div>
    </div>
    <div data-mdb-input-init class="form-outline">
        <input type="text" id="form3Example2" class="form-control" />
        <label class="form-label" for="form3Example2">MDHAMINI</label>
        
      </div>
  </div>

  <!-- Email input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="email" id="form3Example3" class="form-control" />
    <label class="form-label" for="form3Example3">AINA YA UWANACHAMA</label>
  </div>

  <!-- Password input -->
  <div data-mdb-input-init class="form-outline mb-4">
    <input type="password" id="form3Example4" class="form-control" />
    <label class="form-label" for="form3Example4">NAMBA YA SIMU</label>
  </div>

  <!-- Checkbox -->


  
</form>
</center>

      <!-- Modal footer -->
      <div class="modal-footer">
        <button type="button" class="btn btn-danger" data-bs-dismiss="modal ">Close</button>
      </div>

    </div>
  </div>
</div>


</body>
</html>



<!-- mwisho model taarifa za user -->
<body>
    <div class="container-fluid;">
        <div class="row" style="margin-top: 20px;  padding:20px;width:50%;">
            <div class="col-sm-10 col-xs- col-lg col-md" style=" "  data-bs-toggle="modal" data-bs-target="#myModa">
                <button type="button" class="btn btn-primary col-sm-10 " style="">Register</button>
               
            </div>
            <div class="col-sm-10 col-xs- col-lg col-md" style="" ;>
                <button type="button" class="btn btn-warning text-white col-sm-10 " style="">Activate/Deactivate</button>
            </div>
            <div class="col-sm-10 col-xs col-lg col-md form-group">

                <input type="text" class="form-control col-sm-12" id="formGroupExampleInput" placeholder="Search user">

            </div>
        </div>
        <div class="row"style="margin-top: 20px; ">
            <div class="col-sm-10 col-xs- col-lg col-md" style="" ;>
                <table class="table table-hover">
                    <thead>
                        <tr>
                            <th scope="col">User ID</th>
                            <th scope="col">Name</th>
                            <th scope="col">PHONE</th>
                            <th scope="col">HISA</th>
                            <th scope="col">DENI</th>
                            <th scope="col">KIASI REJESHI</th>
                            <th scope="col">FAINI</th>
                            <th scope="col">USER TYPE</th>
                            <th scope="col" colspan="4" class="text-center">OPERATION</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <th scope="row">1</th>
                            <td>Mark</td>
                            <td>Otto</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>@mdo</td>
                            <td>
                            <button type="button" class="btn btn-info text-white" data-bs-toggle="modal" data-bs-target="#mymode">
                                EDITING
                            
                            </button>
                            </td>
                            <td>
                               
                            <td><button class="btn btn-warning text-white" data-bs-toggle="modal" data-bs-target="#myMo">  DATAILS</button></td>
                                  
                                </button>
                                
                            </td>
                            <td><button class="btn btn-danger text-white" data-bs-toggle="modal" data-bs-target="#myMo">REPORT</button></td>
                        

                     
                    </tbody>
                </table>
            </div>
            </table>
        </div>
    </div>
    <!-- <h1>hamza amiri kija</h1> -->
    <script>
// Initialization for ES Users
import { Input, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Input, Ripple });
// Initialization for ES Users
import { Input, Ripple, initMDB } from "mdb-ui-kit";

initMDB({ Input, Ripple });
    </script>
</body>

  

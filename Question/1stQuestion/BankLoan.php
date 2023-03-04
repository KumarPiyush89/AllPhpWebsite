<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <title>Bank Loan Draft</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?><br/><br/><br/></div>
        </div>
        <div class="row">
            <div class="row">
                <div class="col-sm-1"><img src="" alt="bankLogo" title="" /></div>
            </div>
            <div class="col-sm-12">
                <h1 class="text-center">Application  For Personal Loan</h1><hr/>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-3"></div>
            <div class="col-sm-6">
                <div class="row">
                    <div class="col-sm-3">
                        <label>Application Number</label><br/><br/><br/>
                        <label>Branch</label><br/><br/><br/>
                        <label>Staff(Yes/No)</label>
                    </div>
                    <div class="col-sm-2">
                        <input type="number" name="aname" class="form-control"/><br/>
                        <input type="text" name="branch" class="form-control"/><br/>
                        <input type="text" name="staff" class="form-control"/><br/>
                    </div>
                    <div class="col-sm-3">
                        <label>Application Date</label><br/><br/><br/>
                        <label>Branch Code</label><br/><br/><br/>
                        <label>CIF ID</label>
                    </div>
                    <div class="col-sm-2">
                    <input type="date" name="Apdate" class="form-control"/><br/>
                    <input type="number" name="bcode" class="form-control"/><br/>
                    <input type="number" name="cifid" class="form-control"/><br/>
                    </div>
                    <div class="col-sm-2">
                        <img src="abcd.png" alt="img" title="img" style="height: 100px; width: 100px;"
                    </div>
                    </div>
                    <br/>
                    <div class="row">
                        <div class="col-sm-12">
                                <p><b>Personal Details</b></p>
                            <table class="table  text-center table-bordered">
                                <tr>
                                    <td>Name</td>
                                    <td><input type="text" name="name" class="form-control" required/></td>
                                    <td>Date Of Birth</td>
                                    <td><input type="date" name="date" class="form-control" required/></td>
                                </tr>
                                <tr>
                                    <td>Father's Spous Name</td>
                                    <td><input type="text" name="fname" class="form-control" required/></td>
                                    <td>Gender</td>
                                    <td><input type="radio" name="gender" value="male" checked><label>Male</label><br/>
                                        <input type="radio" name="gender" value="female"><label>Female</label><br/>
                                        <input type="radio" name="gender" value="third"><label>Third Gender</label></td>
                                </tr>
                            </table>
                                <p>Address:(As per address proof)</p>
                            <table class="table  text-center table-bordered" >
                            <!--<tr><td>
                                <input type="text" class="form-control"/></td>
                            </tr>
                            <tr><td><input type="text" class="form-control"/></td></tr>
                                -->
                            <!--<tr>
                                
                                    <div class="row"  style="border:black;">
                                        <div class="col-sm-12"><input type="text" class="form-control" /></div>
                                
                                
                                    </div> 
                            <tr>
                                <td><input type="text" class="form-control" required</td>
                            </tr>
                            <tr>
                                <td><input type="text" class="form-control" required</td>
                            </tr>
                            </tr>
                            <tr>
                                
                                    <div class="row">
                                        <div class="col-sm-12"><input type="text" class="form-control" /></div>
                                
                            </div>
                            </tr>
-->                         <tr>
                                <td colspan="6"><input type="text" style="width:100%;" class="form-control" required/></td>
                            </tr>
                            <tr>
                                <td colspan="6"><input type="text" style="width:100%;"  class="form-control"required/></td>
                            </tr>
                            <tr>
                                <td>Land Mark</td>
                                <td colspan="2"><input type="text" name="lmark" class="form-control" required/></td>
                                <td>City District</td>
                                <td colspan="2" class="text-right"><input type="text" name="Distr" class="form-control" required/></td>
                            </tr>
                            <tr>
                                <td>State</td>
                                <td><input type="text" name="state" class="form-control" required/></td>
                                <td>PIN</td>
                                <td><input type="number" name="pin" class="form-control" required/></td>
                                <td>Contact No</td>
                                <td><input type="number" name="number" class="form-control" required/></td>
                            </tr>
                            <tr>
                                <td>Mobile No</td>
                                <td colspan="2"><input type="number" name="phone" class="form-control" required/></td>
                                <td>Email ID</td>
                                <td colspan="2" class="text-right" ><input type="email" name="email" class="form-control" required/></td>
                            </tr>
                            </table>
                            <p>Mandatory<br/><b>Other Details</b></p>
                            <table class="table  text-center table-bordered">
                                <tr>
                                    <td>No of Dependents</td>
                                    <td colspan="2"><input type="number" name="nod" class="form-control"/></td>
                                    <td>Present Resedence</td>
                                    <td colspan="2"><input type="text" class="form-control" placeholder="Owned/Rented/Co Providod/Parental/Rented"</td>
                                </tr>
                                <tr>
                                    <td>Education</td>
                                    <td><input type="text" class="form-control"/></td>
                                    <td>Religion</td>
                                    <td><input type="text" class="form-control"/></td>
                                    <td>Categery</td>
                                    <td>
                                        <input type="radio" name="cat" value="General" checked><label>General</label><br/>
                                        <input type="radio" name="cat" value="OBC"><label>OBC</label><br/>
                                        <input type="radio" name="cat" value="Sc"><label>Schudle Cast</label>
                                        <input type="radio" name="cat" value="St"><label>Schudle Triped</label>
                                    </td>
                                </tr>
                            </table>
                            <p><b>Employment Details</b></p>
                            <table class="table  text-center table-bordered">
                                <tr>
                                    <td  rowspan="2">Name of Employee<br/>Business</td>
                                    <td  rowspan="3"><input type="text" class="form-control"/></td>
                                    <!--<td>
                                        <tr>
                                            <td>Emp Code</td>
                                            <td><input type="number" class="form-control"/></td>
                                        </tr>
                                        <tr>
                                            <td>Designation</td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                    </td>
                                    <td>Address</td>
                                    <td>
                                        <tr>
                                            <td><input type="text" class="form-control"/></td>
                                            <td><input type="text" class="form-control"/></td>
                                        </tr>
                                    </td>-->
                                    <td rowspan="">Emp code</td>
                                    <td><input type="text" class="form-control" required/></td>
                                    
                                </tr>
                                <tr>
                                    <td rowspan="">Desigration</td>
                                    <td><input type="text" class="form-control" required/></td>
                                </tr>
                            </table>
                        
                            <p>Categery</p>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Manufactring</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Trading</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Service</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox4" value="option4">
                            <label class="form-check-label" for="inlineCheckbox4">Others</label>....................
                            </div>
                            <br/>
                            <p>Categery</p>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox1" value="option1">
                            <label class="form-check-label" for="inlineCheckbox1">Propeiter</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox2" value="option2">
                            <label class="form-check-label" for="inlineCheckbox2">Partnership Company</label>
                            </div>
                            <div class="form-check form-check-inline">
                            <input class="form-check-input" type="checkbox" id="inlineCheckbox3" value="option3">
                            <label class="form-check-label" for="inlineCheckbox3">Other</label>..........
                            </div>
                            <p><b>Income Banking & Other Details</b></p>
                            
                            
                        </div>
                        
                    </div>
                    
                </div>
            <div class="col-sm-3"></div>
            <div class="row">
                <div class="col-sm-3"><p>Annual Salary Business Income Rs</p></div>
                <div class="col-sm-2"><input type="number" class="form-control"/></div>
                <div class="col-sm-2">Other Income Rs</div>
                <div class="col-sm-2"><input type="text" class="form-control"/></div>
                <div class="col-sm-2">Specify</div>
                <div class="col-sm-1"><input type="text" class="form-control"/></div>
            </div>
            <p><b>Bank Details</b></p>
            <div class="row">
                <div class="col-sm-3">
                    <p>Name Of The Bank</p>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="bname" required/>
                </div>
                <div class="col-sm-3">
                    <p>Branch</p>
                </div>
                <div class="col-sm-3">
                    <input type="text" class="form-control" name="Bname" required/>
                </div>
            </div>
            <div class="row">
                <div class="col-sm-3"><p>Type Of Account</p></div>
                <div class="col-sm-3"><input type="text" class="form-control" name="taccount" required/></div>
            </div>
            <p><b>Credit Card Details</b></p>
            <div class="row">
                <div class="col-sm-3">......</div>
                <div class="col-sm-3"><input type="text" class="form-control" name="nbank" required/></div>
                <div class="col-sm-3">CC Limi</div>
                <div class="col-sm-3"><input type="number" class="form-control" name="cclimit"/></div>
            </div>
            <div class="row">
                <div class="col-sm-3">Outstanding....</div>
                <div class="col-sm-3"><input type="text" class="form-control"/></div>
            </div>
            <br/><br/><br/><br/><h1>Piyush
                <div class="row">
                    <div class="col-sm-12">
                        <label>Date</label>
                        <input type="date" class="form-control"/>
                        <label>Date Time Local</label>
                        <input type="datetime-local" class="form-control"/>
                        <label>Time</label>
                        <input type="time" class="form-control"/>
                    </div>
                </div>
            </h1><br/><br/><br/><br/><br/>

        </div>
    </div>    
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <link rel="stylesheet" href="stylesheet1.css">
    <link
    rel="stylesheet"
    href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"
    /><script src="script.js"></script>
  <!--  <script>
        function bloodDonation()
{
    // access all Control
    var weight=document.getElementById("weight");
    var age=document.getElementById("age");
    var hp=document.getElementById("hp");
    var bp=document.getElementById("bp");
    var temp=document.getElementById("temp");
    var pulse=document.getElementById("pulse");

    if(weight.value<="50")
    {
        alert("Sorry Mr/Miss your weight is not correct!");
        weight.focus();
        return;
    }
    if(age.value<="20");
    {
        alert("Sorry Mr/Miss your age is not correct!");
        age.focus();
        return;
    }
    if(hp.value<="70");
    {
        alert("Sorry Mr/Miss your weight is not correct!");
        hp.focus();
        return;
    }
    if(bp.value<="70");
    {
        alert("Sorry Mr/Miss your weight is not correct!");
        bp.focus();
        return;
    }
    if(temp.value<="30");
    {
        alert("Sorry Mr/Miss your weight is not correct!");
        temp.focus();
        return;
    }
    if(pulse<="50");
    {
        alert("Sorry Mr/Miss your weight is not correct!");
        pulse.focus()
        return;
    }
    //read value for all input element
    var weightv=parseInt(weight.value);
    var agev=parseInt(age.value);
    var hpv=parseInt(hp.value);
    var bpv=parseInt(bp.value);
    var tempv=parseInt(temp.value);
    var pulsev=parseInt(pulse.value);




}
    </script>-->
    <title>Blood Donation</title>
</head>
<body>
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12"><?php include "Navigation.php";?><br/><br/><br/></div>
        </div>
        <div class="row">
            <div class="col-sm-3 "></div>
            <div class="col-sm-6 bg-light">
                <form action="BloodDonation.php" method="get">
                <div class="row">
                    <div class="col-sm-2 animate__animated animate__heartBeat"><img src="Blood6.png" alt="" title="" style="width:100% ;height:100%;"/></div>
                    <div class="col-sm-8"><h1 class="  text-danger text-center"><u>Blood</u> <u>Donation</u> <u>Form</u><hr/></h1>
                        <b>Confidential -Plese answer the following questions correctly.<br/> 
                            This will help to protect you and the patient who receives your blood. </b></div>
                    <div class="col-sm-2 animate__animated animate__heartBeat"><img src="Blood6.png" alt="" title="" style="width:100% ;height:100%;"/></div>
                    <label><h5>Full Name<sup>*</sup></h5></label>
                    <div class="row">
                        <div class="col-sm-6">
                            <input type="text" name="first" class="form-control" placeholder="Enter your first name" required/>
                        </div>
                        <div class="col-sm-6">
                            <input type="text" name="second" class="form-control"  placeholder="Enter your last name" required />
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-5"><hr/><label><h5>Enter Your Date Of Birth<sup>*</sup></h5></label>
                        <input type="date" name="Date" class="form-control" required/></div>
                    <div class="col-sm-7"><hr/></div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><hr/>
                        <label><h5>Gender:<sup>*</sup></h5></label><br/><input type="radio" name="gender" value="male" checked><label>Male</label>
                            <input type="radio" name="gender" value="female"><label>Female</label>
                            <input type="radio" name="gender" value="third"><label>Third Gender</label>
                    </div>
                    <div class="col-sm-6"><hr/>
                        <label><h5>Occupation</h5></label><br/>
                        <input type="text" size="10" maxlength="10" name="occupation" class="form-control" placeholder="Occupation" />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-6"><hr/>
                        <label><h5>Contact No.<sup>*</sup></h5></label>
                        <input type="number" name="phone"   class="form-control" placeholder="xxxxxxxxxx" required/>
                    </div>
                    <div class="col-sm-6"><hr/>
                        <label><h5>Email<sup>*</sup></h5></label>
                        <input type="email" name="email" class="form-control" placeholder="google@gmail.com" required/>
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12"><hr/>
                        <label><h5>Address<sup>*</sup></h5></label>
                        <input type="text" name="address" class="form-control" placeholder="Address" required />
                    </div>
                </div>
                <div class="row">
                    <div class="col-sm-12"><hr/>
                        <label><h5>Street Address</h5></label>
                        <input type="text" name="saddress" class="form-control" placeholder="Address" /><br/>
                    </div>
                </div>
                <div class="row"><hr/>
                    <div class="col-sm-6">
                        <label><h5>City<sup>*</sup></h5></label>
                        <input type="text" name="city" class="form-control" placeholder="CITY" required/><br/>
                    </div>
                    <div class="col-sm-6"><br/>
                        <input type="text" name="state" class="form-control" placeholder="State" required/><br/>
                    </div>
                </div>
                <div class="row"><hr/>
                    <div class="col-sm-4">
                        <labe><h5>Postal / Zip Code<sup>*</sup></h5></labe>
                        <input type="number" name="zip" class="form-control" placeholder="xxxxxx" required/><br/>
                    </div>
                </div>
                <div class="row"><hr/>
                    <div class="col-sm-6">
                        <label><h5>Weight<sup>*</sup></h5></label>
                        <input type="number" name="weight" id="weight" class="form-control" placeholder="xx" required/><br/>
                    </div>
                    <div class="col-sm-6">
                        <label><h5>Age<sup>*</sup></h5></label>
                        <input type="number" name="age" id="age" class="form-control" placeholder="xx" required/><br/>
                    </div>
                </div>
                <div class="row"><hr/>
                    <div class="col-sm-6">
                        <label><h5>HP<sup>*</sup></h5></label>
                        <input type="number"  name="hp" id="hp" class="form-control" placeholder="xx" required/><br/>
                    </div>
                    <div class="col-sm-6">
                        <label><h5>BP<sup>*</sup></h5></label>
                        <input type="number" name="bp" id="bp" class="form-control" placeholder="xx" required/><br/>
                    </div>
                </div>
                <div class="row"><hr/>
                    <div class="col-sm-6">
                        <label><h5>Temparature<sup>*</sup></h5></label>
                        <input type="number" name="temp"  id="temp" class="form-control" placeholder="xx" required/><br/>
                    </div>
                    <div class="col-sm-6">
                        <label><h5>Pulse<sup>*</sup></h5></label>
                        <input type="number" name="pulse"  id="pulse" class="form-control" placeholder="xx" required/><br/>
                    </div>
                </div>
                <div class="row"><hr/>
                    <div class="col-sm-4">
                        <label><h5>Donated previously<sup>*</sup></h5></label>
                        <input type="radio" name="donated" value="yes" required><label>Yes</label>
                        <input type="radio" name="donated" value="no" required><label>No</label>
                    </div>
                </div><br/>
                <div class="row"><hr/><label><h5>What was the last time you donated blood?</h5></label>
                    <div class="col-sm-4">
                        
                        <input type="date" name="last" id="date"  class="form-control"  /><br/>
                    </div>
                    <div class="col-sm-8"></div>
                </div>
                <div class="row"><hr/><label><h5>in the last six months have you had any of the following?<sup>*</sup></h5></label>
                <!--    <div class="col-sm-3">
                        <input type="radio" name="sixmonth" value="tattooing" required><label>Tattoing</label><br>
                        <input type="radio" name="sixmonth" value="ear" required><label>Ear Piercing</label><br/>
                        <input type="radio" name="sixmonth" value="dental" required><label>Dental extraction</label><br/>
                    </div>
                    <div class="col-sm-9"></div>
                </div>
                <div class="row"><hr/><label><h5>Do You suffer from or have suffered from any of the following?<sup>*</sup></h5></label>
                    <div class="col-sm-6">
                        <input type="radio" name="diseases" value="heart" required><label>Herat diseases</label><br>
                        <input type="radio" name="diseases" value="diabetes" required><label>Diabetes</label><br>
                        <input type="radio" name="diseases" value="sexually" required><label> Sexually Transmitted Diseases</label><br>
                        <input type="radio" name="diseases" value="allergic" required><label>Allergic Diseases</label><br>
                        <input type="radio" name="diseases" value="lung" required><label>Lung Diseases</label><br>
                        <input type="radio" name="diseases" value="epilepsy" required><label> Epilepsy(haray rog)</label><br>
                        <input type="radio" name="diseases" value="jundic" required><label>Jaundic (last one year)</label><br>
                        <input type="radio" name="diseases" value="fainting" required><label> Fainting speels</label><br>
                    </div>
                    <div class="col-sm-6">
                        <input type="radio" name="diseases" value="cancer" required><label>Cancer/Malignant Disease</label><br/>
                        <input type="radio" name="diseases" value="hepatitis" required><label> Hepatitis B/C</label><br/>
                        <input type="radio" name="diseases" value="typhoid" required><label> Hepatitis B/C</label><br/>
                        <input type="radio" name="diseases" value="tuberculosis" required><label>Tuberculosis</label><br/>
                        <input type="radio" name="diseases" value="kidney" required><label>Kidney Disease</label><br/>
                        <input type="radio" name="diseases" value="abnormal" required><label>abnormal Bleeding tendency</label><br/>
                        <input type="radio" name="diseases" value="malaria" required><label>Malaria (six Month)</label><br/>
                    </div>
                </div>
                <div class="row"><hr/><label><h5>Are You taking or have you taken any of these in the past 72 hours?<sup>*</sup></h5></label>
                    <div class="col-sm-6">
                        <input type="radio" name="72hours" value="antibiotics" required/><label>Antibiotics</label><br/>
                        <input type="radio" name="72hours" value="steroids" required/><label>Steroids</label><br/>
                        <input type="radio" name="72hours" value="aspirin" required/><label>Aspirin</label><br/>
                        <input type="radio" name="72hours" value="vaccinations" required/><label>Vaccinations</label><br/>
                        <input type="radio" name="72hours" value="alcohol" required/><label>Alcohol</label><br/>
                        <input type="radio" name="72hours" value="Dog " required/><label>Dog bite Rabies vaccine(1 year)</label><br/>
                    </div>-->
                    <div class="col-sm-3">
                        <input type="checkbox" name="sixmonth" value="tattooing" ><label>Tattoing</label><br>
                        <input type="checkbox" name="sixmonth" value="ear"><label>Ear Piercing</label><br/>
                        <input type="checkbox" name="sixmonth" value="dental"><label>Dental extraction</label><br/>
                    </div>
                    <div class="col-sm-9"></div>
                </div>
                <div class="row"><hr/><label><h5>Do You suffer from or have suffered from any of the following?<sup>*</sup></h5></label>
                    <div class="col-sm-6">
                        <input type="checkbox" name="diseases" value="heart" ><label>Herat diseases</label><br>
                        <input type="checkbox" name="diseases" value="diabetes"><label>Diabetes</label><br>
                        <input type="checkbox" name="diseases" value="sexually" ><label> Sexually Transmitted Diseases</label><br>
                        <input type="checkbox" name="diseases" value="allergic" ><label>Allergic Diseases</label><br>
                        <input type="checkbox" name="diseases" value="lung" ><label>Lung Diseases</label><br>
                        <input type="checkbox" name="diseases" value="epilepsy" ><label> Epilepsy(haray rog)</label><br>
                        <input type="checkbox" name="diseases" value="jundic" ><label>Jaundic (last one year)</label><br>
                        <input type="checkbox" name="diseases" value="fainting"><label> Fainting speels</label><br>
                    </div>
                    <div class="col-sm-6">
                        <input type="checkbox" name="diseases" value="cancer" ><label>Cancer/Malignant Disease</label><br/>
                        <input type="checkbox" name="diseases" value="hepatitis"><label> Hepatitis B/C</label><br/>
                        <input type="checkbox" name="diseases" value="typhoid" ><label> Hepatitis B/C</label><br/>
                        <input type="checkbox" name="diseases" value="tuberculosis"><label>Tuberculosis</label><br/>
                        <input type="checkbox" name="diseases" value="kidney" ><label>Kidney Disease</label><br/>
                        <input type="checkbox" name="diseases" value="abnormal"><label>abnormal Bleeding tendency</label><br/>
                        <input type="checkbox" name="diseases" value="malaria" ><label>Malaria (six Month)</label><br/>
                    </div>
                </div>
                <div class="row"><hr/><label><h5>Are You taking or have you taken any of these in the past 72 hours?<sup>*</sup></h5></label>
                    <div class="col-sm-6">
                        <input type="radio" name="72hours" value="antibiotics" /><label>Antibiotics</label><br/>
                        <input type="radio" name="72hours" value="steroids"/><label>Steroids</label><br/>
                        <input type="radio" name="72hours" value="aspirin" /><label>Aspirin</label><br/>
                        <input type="radio" name="72hours" value="vaccinations"/><label>Vaccinations</label><br/>
                        <input type="radio" name="72hours" value="alcohol"/><label>Alcohol</label><br/>
                        <input type="radio" name="72hours" value="Dog "/><label>Dog bite Rabies vaccine(1 year)</label><br/>
                    </div>
                </div><br/>
                <div class="row"><hr/>
                    <div class="col-sm-2"><input onclick="resetBloodDonation();" type="reset"/> </div>
                    <div class="col-sm-8"></div>
                    <div class="col-sm-2"><input onclick="bloodDonation();" type="submit"/> </div>
                </div>
                
                </form>
            </div>
            <div class="col-sm-3"></div>
            
        </div>
    </div>
</body>
</html>
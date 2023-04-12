<!-- Header Start -->
<header class="header py-3">
   <div class="container" style="text-decoration: none;">
      <h3 class="text-center">Shrinath Ayurved Header</h3>
   </div>
</header>
<!-- Header End -->
<?php
$showAlert = false;
$showError = false;
if ($_SERVER["REQUEST_METHOD"] == "POST") {
   include('php/dbcs.php');

   

   // $to = "sales@shrinathayurved.com";
   // $subject = "New Sales Bussiness Enquiry";
   // $headers = 'From: '.$companyName."\r\n".




   // echo "<br>Company Name = $companyName<br>Reg Type=$registrationType<br>Auth Person=$authPersonName
   //          <br>Present Buss Name =$presentBussinessName<br>Year Os Starting Buss=$yearOfStartingBussiness
   //          <br>No of Sales Person=$noOfSalesPerson<br>Applicant Name=$applicantFullName
   //          <br>GST No =$gstNumber<br>Town Population=$populationOfTown<br>No Of Retailers=$numberOfRetailers
   //          <br>Official Email=$officialEmail<br>Mobile No =$mobileNumber<br>Company Address=$companyAddress
   //          <br>Constitution=$constitution<br>Investement Capibility=$investmentCapibility
   //          <br>State =$state<br>District=$district<br>Tehsil=$tehsil<br>Pincode=$pinCode ";

   // mail($to, $subject, $message,$headers);
   // //header("Location: http://www.shrinathayurved.com/");
   // exit;

   //echo "<br>User Name = $userName<br>Email=$emailId<br>Mobile=$mobileNumber<br>Address =$addr<br>State=$state<br>District=$district<br>Password=$passwd ";
   //Check User Exist
   /*
   $existQuery = "SELECT * FROM `tblregister` WHERE email='$emailId'";
   $result = mysqli_query($conn, $existQuery);
   $numExistRows = mysqli_num_rows($result);
   if ($numExistRows > 0) {
   $showError = "Email Already Exists";
   } else {
   $sqlQuery = " INSERT INTO `tblregister` (`name`, `phone`, `email`, `address`, `state`, `district`, `password`, `tdate`) 
   VALUES ('$userName', '$mobileNumber', '$emailId', '$addr', '$state', '$district', '$passwd', current_timestamp());";
   $result = mysqli_query($conn, $sqlQuery);
   if ($result) {
   $showAlert = true;
   }
   }
   */
}
?>
<!-- Navigation Start -->
<?php require('header.php') ?>
<!-- Navigation End -->
<!-- Customer Modal Start-->

<!-- Stylesheet Start-->
<link rel="stylesheet" href="css/loginRegister.css">
<!-- Stylesheet End-->
<?php
if ($showAlert) {
   echo '<div class="alert alert-success alert-dismissible fade show text-center" role="alert">
   <strong>Congratulations !</strong> You Have Successfully Registered.
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
if ($showError) {
   echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
   <strong>Error !</strong> ' . $showError . '
   <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}

?>

<div class="container">
   <div class="row">
      <div class="col-lg-6 col-sm-6 mx-auto">
         <form action="sendBussEmail.php" method="post" autocomplete="off" name="businessReg">
            <h2>Channel Partner Registration</h2>
            <div class="form-group text-start mt-3">
               <label>Company Name</label>
               <input type="text" class="form-control" name="companyName" required title="Please Enter Company Name"
                  autocomplete="off" autofocus>
            </div>
            <div class="col-md-12 mt-4">
               <label>Registration Type</label>
               <div class="form-floating">
                  <select class="form-select" name="registrationType" id="registrationType" required
                     title="Please Select">
                     <option value="">Please Select</option>
                     <option value="cnf">C and F</option>
                     <option value="stockist">Stockist</option>
                     <option value="distributor">Distributor</option>
                  </select>
               </div>
            </div>

            <div class="modal-body row mt-4">
               <div class="col-md-6">
                  <label>Authorised Person Name</label>
                  <input type="text" class="form-control" name="authPersonName" required title="Please Enter Name"
                     autocomplete="off" autofocus>
               </div>
               <div class="col-md-6">
                  <label>Present Bussiness Name</label>
                  <input type="text" class="form-control" name="presentBussinessName" required title="Please Enter Name"
                     autocomplete="off" autofocus>
               </div>
            </div>

            <div class="modal-body row mt-4">
               <div class="col-md-6">
                  <label>Year Of Starting Bussiness</label>
                  <input type="text" class="form-control" name="yearOfStartingBussiness" required
                     title="Please Enter Name" autocomplete="off" autofocus>
               </div>
               <div class="col-md-6">
                  <label>Number Of Sales Person</label>
                  <input type="text" class="form-control" name="noOfSalesPerson" required title="Please Enter Name"
                     autocomplete="off" autofocus>
               </div>
            </div>

            <div class="form-group text-start mt-3">
               <label>Applicant Full Name</label>
               <input type="text" class="form-control" name="applicantFullName" required title="Please Enter Name"
                  autocomplete="off" autofocus>
            </div>

            <div class="form-group text-start mt-3">
               <label>GST Number</label>
               <input type="text" class="form-control" name="gstNumber" required title="Please Enter GST Number"
                  autocomplete="off" autofocus>
            </div>

            <div class="modal-body row mt-4">
               <div class="col-md-6">
                  <label>Population Of Town / Area (in Lacs)</label>
                  <input type="text" class="form-control" name="populationOfTown" required title="Please Enter Name"
                     autocomplete="off" autofocus>
               </div>
               <div class="col-md-6">
                  <label>Approx Number of Retailers</label>
                  <input type="text" class="form-control" name="numberOfRetailers" required title="Please Enter Name"
                     autocomplete="off" autofocus>
               </div>
            </div>

            <div class="form-group text-start mt-3">
               <label>Official Email (This Will Be Your User Id)</label>
               <input type="email" class="form-control" name="officialEmail" required title="Please Enter a Valid Email"
                  autocomplete="off">
            </div>

            <div class="form-group text-start mt-3">
               <label>Mobile Number</label>
               <input type="text" class="form-control" name="mobileNumber" id="mobileNumber" maxlength="10"
                  placeholder="Enter 10 Digit Mobile Number " pattern="[6-9]\d{9}"
                  oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required
                  title="Please Enter a Valid Phone Number">
               <div style="text-align: left;"><span id="myspan" style="text-align: left; color:red"></span>
               </div>
            </div>

            <div class="form-group text-start mt-3">
               <label>Company Address</label>
               <textarea class="form-control" placeholder="Enter Company Address" name="companyAddress"
                  style="height: 100px" required title="Please Enter Company Address"></textarea>
            </div>

            <div class="row g-2 mt-3 text-startmt-3">
               <div class="col-md-6">
                  <label>Constitution</label>
                  <div class="form-floating">
                     <select class="form-select" name="constitution" id="constitution" required
                        title="Please Select Constitution">
                        <option value="">Select Constitution</option>
                        <option value="Proprietorship">Proprietorship</option>
                        <option value="LLP">LLP</option>
                        <option value="LTD">LTD</option>
                        <option value="Pvt Ltd">Pvt Ltd</option>
                     </select>
                  </div>
               </div>

               <div class="col-md-6">
                  <label>Investment Capability in Company</label>
                  <div class="form-floating">
                     <select class="form-select" name="investmentCapibility" id="investmentCapibility" required
                        title="Please Select Investement Capibility">
                        <option value="">Select Investement Capibility</option>
                        <option value="Proprietorship">2 Lacs</option>
                        <option value="LLP">Above 5 Lacs</option>
                        <option value="LTD">Above 10 Lacs</option>
                     </select>
                  </div>
               </div>
            </div>

            <div class="row g-2 mt-3 text-startmt-3">

               <div class="col-md-6">
                  <label>State</label>
                  <div class="form-floating">
                     <select class="form-select" name="state" id="state" required title="Please Select a State">
                        <option value="">Select State</option>
                        <option value="Andra Pradesh">Andra Pradesh</option>
                        <option value="Arunachal Pradesh">Arunachal Pradesh</option>
                        <option value="Assam">Assam</option>
                        <option value="Bihar">Bihar</option>
                        <option value="Chhattisgarh">Chhattisgarh</option>
                        <option value="Goa">Goa</option>
                        <option value="Gujarat">Gujarat</option>
                        <option value="Haryana">Haryana</option>
                        <option value="Himachal Pradesh">Himachal Pradesh</option>
                        <option value="Jammu and Kashmir">Jammu and Kashmir</option>
                        <option value="Jharkhand">Jharkhand</option>
                        <option value="Karnataka">Karnataka</option>
                        <option value="Kerala">Kerala</option>
                        <option value="Madya Pradesh">Madya Pradesh</option>
                        <option value="Maharashtra">Maharashtra</option>
                        <option value="Manipur">Manipur</option>
                        <option value="Meghalaya">Meghalaya</option>
                        <option value="Mizoram">Mizoram</option>
                        <option value="Nagaland">Nagaland</option>
                        <option value="Orissa">Orissa</option>
                        <option value="Punjab">Punjab</option>
                        <option value="Rajasthan">Rajasthan</option>
                        <option value="Sikkim">Sikkim</option>
                        <option value="Tamil Nadu">Tamil Nadu</option>
                        <option value="Telangana">Telangana</option>
                        <option value="Tripura">Tripura</option>
                        <option value="Uttaranchal">Uttaranchal</option>
                        <option value="Uttar Pradesh">Uttar Pradesh</option>
                        <option value="West Bengal">West Bengal</option>
                        <option disabled style="background-color:#aaa; color:#fff">UNION Territories</option>
                        <option value="Andaman and Nicobar Islands">Andaman and Nicobar Islands</option>
                        <option value="Chandigarh">Chandigarh</option>
                        <option value="Dadar and Nagar Haveli">Dadar and Nagar Haveli</option>
                        <option value="Daman and Diu">Daman and Diu</option>
                        <option value="Delhi">Delhi</option>
                        <option value="Lakshadeep">Lakshadeep</option>
                        <option value="Pondicherry">Pondicherry</option>
                     </select>
                  </div>
               </div>

               <div class="col-md-6">
                  <label>District</label>
                  <div class="form-floating">
                     <select class="form-select" name="district" id="district" required
                        title="Please Select a District">
                        <option value="">Select District</option>
                     </select>
                  </div>
               </div>


               <!-- <div class="col-md-6">
                  <label>chapter</label>
                  <div class="form-floating">
                     <select class="form-select" name="chapter" id="chapter" required
                        title="Please Select a chapter">
                        <option value="">Select chapter</option>
                     </select>
                  </div>
               </div> -->


               <div class="col-md-6">
                  <label>Town / Tehsil</label>
                  <input type="text" class="form-control" name="tehsil" id="tehsil" required
                     title="Please Enter Town / Tehsil Name" autocomplete="off" autofocus>
               </div>

               <div class="col-md-6">
                  <label>Pin Code</label>
                  <input type="text" class="form-control" name="pinCode" id="pinCode" maxlength="6"
                     placeholder="Enter 6 Digit Pin Code " pattern="[1-9]{1}[0-9]{5}|[1-9]{1}[0-9]{3}\\s[0-9]{3}"
                     required title="Please Enter a Valid Pin Code">
                  <div style="text-align: left;"><span id="myspan" style="text-align: left; color:red"></span>
                  </div>
               </div>

            </div>

            <div class="form-group text-start mt-3">
               <label>Password</label>
               <input type="password" class="form-control" name="password" id="password" required
                  autoComplete="new-password">
            </div>
            <div class="mt-3">
               <button type="submit" class="btn btn-primary">Submit Details</button>
            </div>
         </form>
      </div>
   </div>
</div>
<!-- Customer Modal End -->
<!-- Footer -->
<?php require('php/footer.php') ?>
<!-- Footer -->
<script type="text/javascript">
   function Validation() {
      var phone = document.getElementById("mobileNumber").value;
      var getNum = String(phone).charAt(0);
      var firstNum = Number(getNum);

      if (phone.length != 10 || firstNum < 6 || isNaN(phone)) {
         //alert('Invalid Phone Number');
         $("#myspan").text("Invalid Mobile Number");
         return false;
      }
      else {
         return true;
      }
   }

   //States , District and their Values
   var subjectObject = {
      "Andra Pradesh": {
         "Anantapur": [], "Chittoor": [], "East Godavari": [], "Guntur": [], "Kadapa": [], "Krishna": [], "Kurnool": [], "Prakasam": [], "Nellore": [], "Srikakulam": [], "Visakhapatnam": [], "Vizianagaram": [], "West Godavari": []
      },
      "Arunachal Pradesh": {
         "Anjaw": [], "Changlang": [], "Dibang Valley": [], "East Kameng": [], "East Siang": [], "Kra Daadi": [], "Kurung Kumey": [], "Lohit": [], "Longding": [], "Lower Dibang Valley": [], "Lower Subansiri": [], "Namsai": [], "Papum Pare": [], "Siang": [], "Tawang": [], "Tirap": [], "Upper Siang": [], "Upper Subansiri": [], "West Kameng": [], "West Siang": [], "Itanagar": []
      },
      "Assam": {
         "Baksa": [], "Barpeta": [], "Biswanath": [], "Bongaigaon": [], "Cachar": [], "Charaideo": [], "Chirang": [], "Darrang": [], "Dhemaji": [], "Dhubri": [], "Dibrugarh": [], "Goalpara": [], "Golaghat": [], "Hailakandi": [], "Hojai": [], "Jorhat": [], "Kamrup Metropolitan": [], "Kamrup (Rural)": [], "Karbi Anglong": [], "Karimganj": [], "Kokrajhar": [], "Lakhimpur": [], "Majuli": [], "Morigaon": [], "Nagaon": [], "Nalbari": [], "Dima Hasao": [], "Sivasagar": [], "Sonitpur": [], "South Salmara Mankachar": [], "Tinsukia": [], "Udalguri": [], "West Karbi Anglong": []
      },
      "Bihar": { "Araria": [], "Arwal": [], "Aurangabad": [], "Banka": [], "Begusarai": [], "Bhagalpur": [], "Bhojpur": [], "Buxar": [], "Darbhanga": [], "East Champaran": [], "Gaya": [], "Gopalganj": [], "Jamui": [], "Jehanabad": [], "Kaimur": [], "Katihar": [], "Khagaria": [], "Kishanganj": [], "Lakhisarai": [], "Madhepura": [], "Madhubani": [], "Munger": [], "Muzaffarpur": [], "Nalanda": [], "Nawada": [], "Patna": [], "Purnia": [], "Rohtas": [], "Saharsa": [], "Samastipur": [], "Saran": [], "Sheikhpura": [], "Sheohar": [], "Sitamarhi": [], "Siwan": [], "Supaul": [], "Vaishali": [], "West Champaran": [] },

      "Chhattisgarh": { "Balod": [], "Baloda Bazar": [], "Balrampur": [], "Bastar": [], "Bemetara": [], "Bijapur": [], "Bilaspur": [], "Dantewada": [], "Dhamtari": [], "Durg": [], "Gariaband": [], "Janjgir Champa": [], "Jashpur": [], "Kabirdham": [], "Kanker": [], "Kondagaon": [], "Korba": [], "Koriya": [], "Mahasamund": [], "Mungeli": [], "Narayanpur": [], "Raigarh": [], "Raipur": [], "Rajnandgaon": [], "Sukma": [], "Surajpur": [], "Surguja": [] },

      Goa: { "North Goa": [], "South Goa": [] },
      Gujarat: { "Ahmedabad": [], "Amreli": [], "Anand": [], "Aravalli": [], "Banaskantha": [], "Bharuch": [], "Bhavnagar": [], "Botad": [], "Chhota Udaipur": [], "Dahod": [], "Dang": [], "Devbhoomi Dwarka": [], "Gandhinagar": [], "Gir Somnath": [], "Jamnagar": [], "Junagadh": [], "Kheda": [], "Kutch": [], "Mahisagar": [], "Mehsana": [], "Morbi": [], "Narmada": [], "Navsari": [], "Panchmahal": [], "Patan": [], "Porbandar": [], "Rajkot": [], "Sabarkantha": [], "Surat": [], "Surendranagar": [], "Tapi": [], "Vadodara": [], "Valsad": [] },

      "Haryana": { "Ambala": [], "Bhiwani": [], "Charkhi Dadri": [], "Faridabad": [], "Fatehabad": [], "Gurugram": [], "Hisar": [], "Jhajjar": [], "Jind": [], "Kaithal": [], "Karnal": [], "Kurukshetra": [], "Mahendragarh": [], "Mewat": [], "Palwal": [], "Panchkula": [], "Panipat": [], "Rewari": [], "Rohtak": [], "Sirsa": [], "Sonipat": [], "Yamunanagar": [] },
      "HimachalPradesh": { "Bilaspur": [], "Chamba": [], "Hamirpur": [], "Kangra": [], "Kinnaur": [], "Kullu": [], "Lahaul Spiti": [], "Mandi": [], "Shimla": [], "Sirmaur": [], "Solan": [], "Una": [] },

      "Jammu and Kashmir":
      {
         "Anantnag": [], "Bandipora": [], "Baramulla": [], "Budgam": [], "Doda": [], "Ganderbal": [], "Jammu": [], "Kargil": [], "Kathua": [], "Kishtwar": [], "Kulgam": [], "Kupwara": [], "Leh": [], "Poonch": [], "Pulwama": [], "Rajouri": [], "Ramban": [], "Reasi": [], "Samba": [], "Shopian": [], "Srinagar": [], "Udhampur": []
      },
      "Jharkhand":
      {
         "Bokaro": [], "Chatra": [], "Deoghar": [], "Dhanbad": [], "Dumka": [], "East Singhbhum": [], "Garhwa": [], "Giridih": [], "Godda": [], "Gumla": [], "Hazaribagh": [], "Jamtara": [], "Khunti": [], "Koderma": [], "Latehar": [], "Lohardaga": [], "Pakur": [], "Palamu": [], "Ramgarh": [], "Ranchi": [], "Sahebganj": [], "Seraikela Kharsawan": [], "Simdega": [], "West Singhbhum": []
      },
      // var Karnataka = ["Bagalkot","Bangalore Rural","Bangalore Urban","Belgaum","Bellary","Bidar","Vijayapura","Chamarajanagar","Chikkaballapur","Chikkamagaluru","Chitradurga","Dakshina Kannada","Davanagere","Dharwad","Gadag","Gulbarga","Hassan","Haveri","Kodagu","Kolar","Koppal","Mandya","Mysore","Raichur","Ramanagara","Shimoga","Tumkur","Udupi","Uttara Kannada","Yadgir"];
      // var Kerala = ["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"];
      // var MadhyaPradesh = ["Agar Malwa","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Dhar","Dindori","Guna","Gwalior","Harda","Hoshangabad","Indore","Jabalpur","Jhabua","Katni","Khandwa","Khargone","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Raisen","Rajgarh","Ratlam","Rewa","Sagar","Satna",
      // "Sehore","Seoni","Shahdol","Shajapur","Sheopur","Shivpuri","Sidhi","Singrauli","Tikamgarh","Ujjain","Umaria","Vidisha"];
      "Maharashtra": { "Ahmednagar": [], "Akola": [], "Amravati": [], "Aurangabad": [], "Beed": [], "Bhandara": [], "Buldhana": [], "Chandrapur": [], "Dhule": [], "Gadchiroli": [], "Gondia": [], "Hingoli": [], "Jalgaon": [], "Jalna": [], "Kolhapur": [], "Latur": [], "Mumbai City": [], "Mumbai Suburban": [], "Nagpur": [], "Nanded": [], "Nandurbar": [], "Nashik": [], "Osmanabad": [], "Palghar": [], "Parbhani": [], "Pune": [], "Raigad": [], "Ratnagiri": [], "Sangli": [], "Satara": [], "Sindhudurg": [], "Solapur": [], "Thane": [], "Wardha": [], "Washim": [], "Yavatmal": []},
      // var Manipur = ["Bishnupur","Chandel","Churachandpur","Imphal East","Imphal West","Jiribam","Kakching","Kamjong","Kangpokpi","Noney","Pherzawl","Senapati","Tamenglong","Tengnoupal","Thoubal","Ukhrul"];
      // var Meghalaya = ["East Garo Hills","East Jaintia Hills","East Khasi Hills","North Garo Hills","Ri Bhoi","South Garo Hills","South West Garo Hills","South West Khasi Hills","West Garo Hills","West Jaintia Hills","West Khasi Hills"];
      // var Mizoram = ["Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip","Aizawl","Champhai","Kolasib","Lawngtlai","Lunglei","Mamit","Saiha","Serchhip"];
      // var Nagaland = ["Dimapur","Kiphire","Kohima","Longleng","Mokokchung","Mon","Peren","Phek","Tuensang","Wokha","Zunheboto"];
      // var Odisha = ["Angul","Balangir","Balasore","Bargarh","Bhadrak","Boudh","Cuttack","Debagarh","Dhenkanal","Gajapati","Ganjam","Jagatsinghpur","Jajpur","Jharsuguda","Kalahandi","Kandhamal","Kendrapara","Kendujhar","Khordha","Koraput","Malkangiri","Mayurbhanj","Nabarangpur","Nayagarh","Nuapada","Puri","Rayagada","Sambalpur","Subarnapur","Sundergarh"];
      // var Punjab = ["Amritsar","Barnala","Bathinda","Faridkot","Fatehgarh Sahib","Fazilka","Firozpur","Gurdaspur","Hoshiarpur","Jalandhar","Kapurthala","Ludhiana","Mansa","Moga","Mohali","Muktsar","Pathankot","Patiala","Rupnagar","Sangrur","Shaheed Bhagat Singh Nagar","Tarn Taran"];
      // var Rajasthan = ["Ajmer","Alwar","Banswara","Baran","Barmer","Bharatpur","Bhilwara","Bikaner","Bundi","Chittorgarh","Churu","Dausa","Dholpur","Dungarpur","Ganganagar","Hanumangarh","Jaipur","Jaisalmer","Jalore","Jhalawar","Jhunjhunu","Jodhpur","Karauli","Kota","Nagaur","Pali","Pratapgarh","Rajsamand","Sawai Madhopur","Sikar","Sirohi","Tonk","Udaipur"];
      // var Sikkim = ["East Sikkim","North Sikkim","South Sikkim","West Sikkim"];
      // var TamilNadu = ["Ariyalur","Chennai","Coimbatore","Cuddalore","Dharmapuri","Dindigul","Erode","Kanchipuram","Kanyakumari","Karur","Krishnagiri","Madurai","Nagapattinam","Namakkal","Nilgiris","Perambalur","Pudukkottai","Ramanathapuram","Salem","Sivaganga","Thanjavur","Theni","Thoothukudi","Tiruchirappalli","Tirunelveli","Tiruppur","Tiruvallur","Tiruvannamalai","Tiruvarur","Vellore","Viluppuram","Virudhunagar"];
      // var Telangana = ["Adilabad","Bhadradri Kothagudem","Hyderabad","Jagtial","Jangaon","Jayashankar","Jogulamba","Kamareddy","Karimnagar","Khammam","Komaram Bheem","Mahabubabad","Mahbubnagar","Mancherial","Medak","Medchal","Nagarkurnool","Nalgonda","Nirmal","Nizamabad","Peddapalli","Rajanna Sircilla","Ranga Reddy","Sangareddy","Siddipet","Suryapet","Vikarabad","Wanaparthy","Warangal Rural","Warangal Urban","Yadadri Bhuvanagiri"];
      // var Tripura = ["Dhalai","Gomati","Khowai","North Tripura","Sepahijala","South Tripura","Unakoti","West Tripura"];
      // var UttarPradesh = ["Agra","Aligarh","Allahabad","Ambedkar Nagar","Amethi","Amroha","Auraiya","Azamgarh","Baghpat","Bahraich","Ballia","Balrampur","Banda","Barabanki","Bareilly","Basti","Bhadohi","Bijnor","Budaun","Bulandshahr","Chandauli","Chitrakoot","Deoria","Etah","Etawah","Faizabad","Farrukhabad","Fatehpur","Firozabad","Gautam Buddha Nagar","Ghaziabad","Ghazipur","Gonda","Gorakhpur","Hamirpur","Hapur","Hardoi","Hathras","Jalaun","Jaunpur","Jhansi","Kannauj","Kanpur Dehat","Kanpur Nagar","Kasganj","Kaushambi","Kheri","Kushinagar","Lalitpur","Lucknow","Maharajganj","Mahoba","Mainpuri","Mathura","Mau","Meerut","Mirzapur","Moradabad","Muzaffarnagar","Pilibhit","Pratapgarh","Raebareli","Rampur","Saharanpur","Sambhal","Sant Kabir Nagar","Shahjahanpur","Shamli","Shravasti","Siddharthnagar","Sitapur","Sonbhadra","Sultanpur","Unnao","Varanasi"];
      // var Uttarakhand  = ["Almora","Bageshwar","Chamoli","Champawat","Dehradun","Haridwar","Nainital","Pauri","Pithoragarh","Rudraprayag","Tehri","Udham Singh Nagar","Uttarkashi"];
      "WestBengal": { "Alipurduar": [], "Bankura": [], "Birbhum": [], "Cooch Behar": [], "Dakshin Dinajpur": [], "Darjeeling": [], "Hooghly": [], "Howrah": [], "Jalpaiguri": [], "Jhargram": [], "Kalimpong": [], "Kolkata": [], "Malda": [], "Murshidabad": [], "Nadia": [], "North 24 Parganas": [], "Paschim Bardhaman": [], "Paschim Medinipur": [], "Purba Bardhaman": [], "Purba Medinipur": [], "Purulia": [], "South 24 Parganas": [], "Uttar Dinajpur": [] },
      "AndamanNicobar": { "Nicobar": [], "North Middle Andaman": [], "South Andaman": [] },
      "Chandigarh": { "Chandigarh": [] },
      "DadraHaveli": { "Dadra Nagar Haveli": [] },
      "DamanDiu": { "Daman": [], "Diu": [] },
      "Delhi": { "Central Delhi": [], "East Delhi": [], "New Delhi": [], "North Delhi": [], "North East Delhi": [], "North West Delhi": [], "Shahdara": [], "South Delhi": [], "South East Delhi": [], "South West Delhi": [], "West Delhi": [] },
      "Lakshadweep": { "Lakshadweep": [] },
      "Puducherry": { "Karaikal": [], "Mahe": [], "Puducherry": [], "Yanam": [] }
   }

   // Function
   window.onload = function () {
      var subjectSel = document.getElementById("state");
      var topicSel = document.getElementById("district");
      var chapterSel = document.getElementById("chapter");
      for (var x in subjectObject) {
         subjectSel.options[subjectSel.options.length] = new Option(x, x);
      }
      subjectSel.onchange = function () {
         //empty Chapters- and Topics- dropdowns
         //     chapterSel.length = 1;
         topicSel.length = 1;
         //display correct values
         for (var y in subjectObject[this.value]) {
            topicSel.options[topicSel.options.length] = new Option(y, y);
         }
      }

         topicSel.onchange = function() {
    //empty Chapters dropdown
    chapterSel.length = 1;
    //display correct values
    var z = subjectObject[subjectSel.value][this.value];
    for (var i = 0; i < z.length; i++) {
      chapterSel.options[chapterSel.options.length] = new Option(z[i], z[i]);
    }
   }
      }
   
</script>
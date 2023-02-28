<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet"
  integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js"
  integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>

  <title>Shrinath Ayurved</title>
  <script src="./js/script.js"></script>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.6.3/jquery.min.js"></script>
</head>
<body>
  <!-- Login Start -->
  <div style="display: flex; align-items: center; height: 100vh;">
    <div class="container" style=" margin: auto;">
      <div class="row">
        <div class="col-lg-8 col-sm-12 col-md-12 mx-auto">
          <form autocomplete="off">
            <h2>Login</h2>
            <div class="form-group">
              <label for="exampleInputEmail1">Email address</label>
              <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
              <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
            </div>
            <div class="form-group">
              <label for="exampleInputPassword1">Password</label>
              <input type="password" class="form-control" id="exampleInputPassword1">
            </div>
            <div class="form-group form-check">
              <input type="checkbox" class="form-check-input" id="exampleCheck1">
              <!-- <label class="form-check-label" for="exampleCheck1">Remember me</label> -->
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <div class="mt-3">
              <a class="form-check-label text-center" href="#" data-bs-toggle="modal"
                data-bs-target="#optionModal">Register Now</a>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
  <!-- Login End -->

  <!-- Choose Modal Start-->
  <div class="modal fade" id="optionModal" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1"
    aria-labelledby="staticBackdropLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" >
      <div class="modal-content">
        <div class="modal-header">
          <h1 class="modal-title fs-5" id="exampleModalLabel">Please Choose Registration Type</h1>
          <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
        </div>
        <div class="modal-body">
          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#customerRegistration">Customer Registration</button>
          <button type="button" class="btn btn-primary" data-bs-toggle="modal"
            data-bs-target="#businessRegistration1">Bussiness Registration</button>
        </div>
      </div>
    </div>
  </div>
  <!-- Choose Modal End-->
  
  <!-- Customer Modal Start-->
  <!-- <div > -->
    <div class="container" style=" margin: auto;">
      <div class="row">
        <div class="modal fade modal-xl" id="customerRegistration" data-bs-backdrop="static" data-bs-keyboard="false"
          tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Registration</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-sm-12 mx-auto">
                      <form action="./php/register.php" method="post" autocomplete="off" name="custReg" >
                        <h2>Customer Registration</h2>
                        <div class="form-group">
                          <label>User Name</label>
                          <input type="text" class="form-control" name="userName" aria-describedby="emailHelp"
                            placeholder="Enter User Name" required>
                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                          <label>Email address</label>
                          <input type="email" class="form-control" name="emailId" aria-describedby="emailHelp" required title="Please Enter a Valid Email Idukki">
                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                          <label>Mobile Number</label>
                          <input type="text" class="form-control" name="mobileNumber" id="mobileNumber" 
                            maxlength="10" placeholder="Enter 10 Digit Mobile Number " pattern="[6-9]\d{9}" oninput="this.value = this.value.replace(/[^0-9.]/g, '').replace(/(\..*)\./g, '$1');" required title="Please Enter a Valid Phone Number">
                            <div style="text-align: left;"><span id="myspan" style="text-align: left; color:red"></span></div>
                        </div>
  
                        <div class="form-group">
                          <label>Address</label>
                          <textarea class="form-control" placeholder="Enter Address" name="addr"
                            style="height: 100px" required title="Please Enter Address"></textarea>
                        </div>
  
                        <div class="row g-2 mt-3">
                          <div class="col-md">
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
                          <div class="col-md">
                            <div class="form-floating">
                              <select class="form-select" name="district" id="district" required title="Please Select a District">
                              <option value="">Select District</option>
                              </select>
                            </div>
                          </div>
                        </div>
  
                        <div class="form-group">
                          <label>Password</label>
                          <input type="password" class="form-control" name="passwd" required>
                        </div>
                        <div class="mt-3">
                          <button type="submit" class="btn btn-primary">Submit Details</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  <!-- </div> -->
  <!-- Customer Modal End -->
  
  <!-- Business Modal Start-->
  <div style="display: flex; align-items: center; height: 100vh;">
    <div class="container" style=" margin: auto;">
      <div class="row">
        <div class="modal fade modal-xl" id="businessRegistration" data-bs-backdrop="static" data-bs-keyboard="false"
          tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
          <div class="modal-dialog">
            <div class="modal-content">
              <div class="modal-header">
                <h1 class="modal-title fs-5" id="staticBackdropLabel">Registration</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
              </div>
              <div class="modal-body">
                <div class="container">
                  <div class="row">
                    <div class="col-lg-6 col-sm-12 mx-auto">
                      <form>
                        <h2>Business Registration</h2>
                        <div class="form-group">
                          <label for="exampleInputEmail1">Email address</label>
                          <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
                          <!-- <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small> -->
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword1">Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword1">
                        </div>
                        <div class="form-group">
                          <label for="exampleInputPassword2">Confirm Password</label>
                          <input type="password" class="form-control" id="exampleInputPassword2">
                        </div>
                        <div class="mt-3">
                          <button type="submit" class="btn btn-primary">Submit Details</button>
                        </div>
                      </form>
                    </div>
                  </div>
                </div>
              </div>
              <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                <!-- <button type="button" class="btn btn-primary">Understood</button> -->
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
  <!-- Business Modal End -->
    
</body>
</html>


<style>
  @media (max-width: 600px) {
    form {
      width: 80%;
      margin: 30px auto;
      padding: 5px;
    }
  }

  form {
    text-align: center;
    border: 1px solid #ddd;
    padding: 10px;
    border-radius: 10px;
    background-color: #f8f9fa;
    border: 1px solid #28b485;
    box-shadow: 0 0 5px #28b485;
  }

  label {
    text-align: left;
    width: 100%;
    margin-bottom: 10px;
  }

  h2 {
    background: linear-gradient(to right, #a2c99b, #5dcfa9);
    /* background-color: #ddd; */
    padding: 10px 20px;
    border-radius: 20px;
    text-align: center;
    /* margin-top: 50px;
   */
  }
</style>


<script>
function Validation()
{
  var phone=document.getElementById("mobileNumber").value;
  var getNum=String(phone).charAt(0);
  var firstNum=Number(getNum);

  if(phone.length!=10 || firstNum<6 || isNaN(phone))
  {
    //alert('Invalid Phone Number');
    $("#myspan").text("Invalid Mobile Number");
    return false;
  }
  else{
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
    // var JammuKashmir = ["Anantnag","Bandipora","Baramulla","Budgam","Doda","Ganderbal","Jammu","Kargil","Kathua","Kishtwar","Kulgam","Kupwara","Leh","Poonch","Pulwama","Rajouri","Ramban","Reasi","Samba","Shopian","Srinagar","Udhampur"];
    // var Jharkhand = ["Bokaro","Chatra","Deoghar","Dhanbad","Dumka","East Singhbhum","Garhwa","Giridih","Godda","Gumla","Hazaribagh","Jamtara","Khunti","Koderma","Latehar","Lohardaga","Pakur","Palamu","Ramgarh","Ranchi","Sahebganj","Seraikela Kharsawan","Simdega","West Singhbhum"];
    // var Karnataka = ["Bagalkot","Bangalore Rural","Bangalore Urban","Belgaum","Bellary","Bidar","Vijayapura","Chamarajanagar","Chikkaballapur","Chikkamagaluru","Chitradurga","Dakshina Kannada","Davanagere","Dharwad","Gadag","Gulbarga","Hassan","Haveri","Kodagu","Kolar","Koppal","Mandya","Mysore","Raichur","Ramanagara","Shimoga","Tumkur","Udupi","Uttara Kannada","Yadgir"];
    // var Kerala = ["Alappuzha","Ernakulam","Idukki","Kannur","Kasaragod","Kollam","Kottayam","Kozhikode","Malappuram","Palakkad","Pathanamthitta","Thiruvananthapuram","Thrissur","Wayanad"];
    // var MadhyaPradesh = ["Agar Malwa","Alirajpur","Anuppur","Ashoknagar","Balaghat","Barwani","Betul","Bhind","Bhopal","Burhanpur","Chhatarpur","Chhindwara","Damoh","Datia","Dewas","Dhar","Dindori","Guna","Gwalior","Harda","Hoshangabad","Indore","Jabalpur","Jhabua","Katni","Khandwa","Khargone","Mandla","Mandsaur","Morena","Narsinghpur","Neemuch","Panna","Raisen","Rajgarh","Ratlam","Rewa","Sagar","Satna",
    // "Sehore","Seoni","Shahdol","Shajapur","Sheopur","Shivpuri","Sidhi","Singrauli","Tikamgarh","Ujjain","Umaria","Vidisha"];
    "Maharashtra": { "Ahmednagar": [], "Akola": [], "Amravati": [], "Aurangabad": [], "Beed": [], "Bhandara": [], "Buldhana": [], "Chandrapur": [], "Dhule": [], "Gadchiroli": [], "Gondia": [], "Hingoli": [], "Jalgaon": [], "Jalna": [], "Kolhapur": [], "Latur": [], "Mumbai City": [], "Mumbai Suburban": [], "Nagpur": [], "Nanded": [], "Nandurbar": [], "Nashik": [], "Osmanabad": [], "Palghar": [], "Parbhani": [], "Pune": [], "Raigad": [], "Ratnagiri": [], "Sangli": [], "Satara": [], "Sindhudurg": [], "Solapur": [], "Thane": [], "Wardha": [], "Washim": [], "Yavatmal": [] },
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
     "WestBengal":{"Alipurduar": [],"Bankura": [],"Birbhum": [],"Cooch Behar": [],"Dakshin Dinajpur": [],"Darjeeling": [],"Hooghly": [],"Howrah": [],"Jalpaiguri": [],"Jhargram": [],"Kalimpong": [],"Kolkata": [],"Malda": [],"Murshidabad": [],"Nadia": [],"North 24 Parganas": [],"Paschim Bardhaman": [],"Paschim Medinipur": [],"Purba Bardhaman": [],"Purba Medinipur": [],"Purulia": [],"South 24 Parganas": [],"Uttar Dinajpur": [] },
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
  }

</script>
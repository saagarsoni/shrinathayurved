<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Admin Area</title>
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.4/font/bootstrap-icons.css">


<link type="text/css" href="css/bootstrap.min.css" rel="stylesheet">
<link type="text/css" href="css/bootstrap-table.css" rel="stylesheet">
<link type="text/css" href="css/font-awesome.css" rel="stylesheet">
<script src="js/bootstrap.min.js"></script>
<script src="js/bootstrap-table.js"></script>
<script src="js/jquery-1.11.1.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.1/jquery.min.js" integrity="sha512-nhY06wKras39lb9lRO76J4397CH1XpRSLfLJSftTeo3+q2vP7PaebILH9TqH+GRpnOhfAGjuYMVmVTOZJ+682w==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

</head>
<body>
<!-- partial:index.partial.html -->
<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">Dashboard</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">

        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#" data-bs-toggle="tooltip" data-bs-placement="bottom" data-bs-title="Tooltip on top"><span class="btn-label"><i class="bi bi-house"></i></span>&nbsp;Home</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#"><i class="bi bi-house"></i>Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
      </ul>
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 profile-menu"> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            <i class="fas fa-user"></i>
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <!-- <li><a class="dropdown-item" href="#"><i class="fas fa-sliders-h fa-fw"></i> Account</a></li>
            <li><a class="dropdown-item" href="#"><i class="fas fa-cog fa-fw"></i> Settings</a></li>
            <li><hr class="dropdown-divider"></li> -->
            <li><a class="dropdown-item" href="#"><i class="fas fa-sign-out-alt fa-fw"></i> Log Out</a></li>
          </ul>
        </li>
     </ul>
    </div>
  </div>
</nav>


<?php 

    require 'C:\xampp\htdocs\shrinathAyurved\php\dbcs.php';
         
         $sqltran = mysqli_query($conn, "SELECT `id`, `companyName`, `registrationType` FROM `tblbusinessregister` ")or die(mysqli_error($conn));
        $arrVal = array();
         
        $i=1;
         while ($rowList = mysqli_fetch_array($sqltran)) {
                                  
                        $name = array(
                                'num' => $i,
                                    'first'=> $rowList['companyName'],
                                   'last'=> $rowList['registrationType']
                                );        


                            array_push($arrVal, $name);    
            $i++;            
         }
              echo  json_encode($arrVal);        
 

         mysqli_close($conn);
?>   

<div class="container">
    <div class="col-md-12">
        <div class="page-header">
            <h1>
                How to use bootstrap tables to  Display data from MySQL using PHP
            </h1>
        </div>


        <div class="panel panel-success">
            <div class="panel-heading "> 
            <span class=""> This Source Code Provided By<br>
            <a href="http://sourcecodessite.com">SourceCodeSite.com</a> </span> 
                 
             </div>
                         
            <div class="panel-body">
                <div class="row">
                    <div class="col-md-12">
                     
                        <table     id="table"
                                data-show-columns="true"
                                 data-height="460">
                        </table>
        </div>
    </div>
</div>                
</div>
</div>
</div>

<!-- partial -->
  <script src='https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/js/bootstrap.bundle.min.js'></script><script  src="./script.js"></script>

  <script type="text/javascript">
    
     var $table = $('#table');
             $table.bootstrapTable({
                  url: 'list-user.php',
                  search: true,
                  pagination: true,
                  buttonsClass: 'primary',
                  showFooter: true,
                  minimumCountColumns: 2,
                  columns: [{
                      field: 'num',
                      title: '#',
                      sortable: true,
                  },{
                      field: 'first',
                      title: 'Firstname',
                      sortable: true,
                  },{
                      field: 'last',
                      title: 'Lastname',
                      sortable: true,
                      
                  },  ],
 
               });

</script>


</body>
</html>

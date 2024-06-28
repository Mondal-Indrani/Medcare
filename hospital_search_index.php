
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
<link rel="stylesheet" href="./css/bootstrap.min.css">
<link rel="stylesheet" href="./css/font-awesome.min.css">

<script src="./js/bootstrap.bundle.min.js"></script>
<script src="./js/jquery.min.js"></script>


<script type="text/javascript">
    $(document).ready(function(){
        $("#catagory").change(function(){
            var aid = $("#catagory").val();
            $.ajax({
                url: 'hospital_reservation_data.php',
                method : 'post',
                data : 'aid=' + aid
            }).done(function(doctor){
                console.log(doctor);
               doctor = JSON.parse(doctor);
                $("#doctor").empty();
                doctor.forEach(function(d)
            
                {
                    $('#doctor').append('<option>' + d.treat + '</option>')
                })
            })
        })
    })


</script>


    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Matching</title>
</head>
<body>

    
<div class="container">
       
        <div class="col d-flex justify-content-center">
        <div class="card p-4 mt-4">
<div class="card-header bg-warning">
<h1 class="text-center bg-warning">Check Facalities </h1>

</div>
<div class="card-body bg-info">

        <div class="row">

            <form action="hospital_reservation_data_insert.php" method="post">
                
                
                
                    <div class="col">
                    <div class="form-group"><label for="catagory"> Choose Department</label>
                        <select name="catagory" id="catagory" class="form-control" required="TRUE"> 
                            <option selected disabled>Select Department </option>
                    <?php

                    require 'hospital_reservation_data.php';

                    $catagory = loadcatagory();
                    foreach ($catagory as $cat){
                        echo "<option id='".$cat['dip_id']."' value = '".$cat['dip_id']."'>" . $cat['dip_name']."</option>";
                    }
        
                    
                    ?>
                
                    
                    </select>
                    </div>


              <div class="col">
                    <div class="form-group"><label for="doctor"> Choose Treatment </label>
                        <select name="doctor" id="doctor" class="form-control" required>     </select>
                </div>
              </div>

              

                    </div>
                   

<input class="btn btn-success mt-2" type="submit" name="save" id="save" value="Search">
<a href="user_search.php" class="btn btn-warning mt-2 p-2">Back</a>


               
            </form>
                </div>
    </div>
</div>
        </div>
</div>
<!-- ................................  -->

<!-- >>>>>>> Display >>>>>>>  -->

    
</body>
</html>
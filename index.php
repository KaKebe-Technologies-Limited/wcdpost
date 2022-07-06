<?php
	$servername='localhost';
	$username='root';
	$password='';
	$dbname = "gxszumy_worshipcenter";
	$conn=mysqli_connect($servername,$username,$password,"$dbname");
	  if(!$conn){
		  die('Could not Connect MySql Server:' .mysql_error());
		}
?>
<?php
include("config.php");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Create Record</title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.css"> -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <style type="text/css">
        .wrapper{
            width: 500px;
            margin: 0 auto;
        }
    </style>
</head>
<body>
    <center><img src="imgs/logo.png" alt=""></center>
    <hr><br>

    <center><h2>Worship Centre Downtown</h2></center>
    
<br>
            <nav>
            <div class="nav nav-tabs" id="nav-tab" role="tablist">
                <button class="nav-link active" id="nav-home-tab" data-bs-toggle="tab" data-bs-target="#nav-home" type="button" role="tab" aria-controls="nav-home" aria-selected="true">Home</button>
                <button class="nav-link" id="nav-profile-tab" data-bs-toggle="tab" data-bs-target="#nav-profile" type="button" role="tab" aria-controls="nav-profile" aria-selected="false">Daily Verses</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-contact" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">Live Questions</button>
                <button class="nav-link" id="nav-contact-tab" data-bs-toggle="tab" data-bs-target="#nav-news" type="button" role="tab" aria-controls="nav-contact" aria-selected="false">News</button>
            </div>
            </nav>
            <div class="tab-content" id="nav-tabContent">
                <!-- home tab section  -->
            <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">
            <div class="container-fluid" style="padding:40px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header">
                                <h2>New Updates</h2>
                            </div>
                            <p>Please fill this form and submit to add news</p>
                            <form action="insert.php" method="post">
                                <div class="form-group">
                                    <label>title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>description</label>
                                    <input type="text" name="description" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>verse</label>
                                    <input type="text" name="verse" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input type="text" name="author" class="form-control">
                                </div><br>
                                <!-- <div class="form-group">
                                    <label>Post Status(Default is "1")</label>
                                    <input type="number" name="status" value="1" class="form-control">
                                </div> -->
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>        
                </div>


            </div>
            <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
         
            <div class="container-fluid" style="padding:40px;">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="page-header">
                                <h2>Scripture Updates</h2>
                            </div>
                            <p>Please fill this form and submit to add scriptures</p>
                            <form action="insert.php" method="post">
                                <div class="form-group">
                                    <label>title</label>
                                    <input type="text" name="title" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>description</label>
                                    <input type="text" name="description" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>verse</label>
                                    <input type="text" name="verse" class="form-control">
                                </div>
                                <div class="form-group">
                                    <label>Author</label>
                                    <input type="text" name="author" class="form-control">
                                </div><br>
                                <!-- <div class="form-group">
                                    <label>Post Status(Default is "1")</label>
                                    <input type="number" name="status" value="1" class="form-control">
                                </div> -->
                                <input type="submit" class="btn btn-primary" name="submit" value="Submit">
                            </form>
                        </div>
                    </div>        
                </div>

    </div>
            

            </div>
            <div class="tab-pane fade" id="nav-contact" role="tabpanel" aria-labelledby="nav-contact-tab">
                
            <div class="container">
 <div class="row">
   <div class="col-sm-12">
       <h1 style="padding: 2em;">Questions</h1>
    <?php echo $deleteMsg??''; ?>
    <div class="table-responsive">
      <table class="table table-bordered">
       <thead>
         <th>#</th>
         <th>Name</th>
          <th>Question</th>
         <th>Date</th>
    </thead>
    <tbody>
  <?php
      if(is_array($fetchData)){      
      $sn=1;
      foreach($fetchData as $data){
    ?>
      <tr>
      
      <td><?php echo $data['id']??''; ?></td>
          <td><?php echo $data['name']??''; ?></td>
      <td><?php echo $data['question']??''; ?></td>
          <td><?php echo date('d M Y h:i A',strtotime($data['created_date'])) ??''; ?></td>
      </tr>
     <?php
      $sn++;}}else{ ?>
      <tr>
        <td colspan="8">
    <?php echo $fetchData; ?>
  </td>
    <tr>
    <?php
    }?>
    </tbody>
     </table>
   </div>
</div>
</div>
</div>
            
            
            </div>
            </div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</body>
</html>

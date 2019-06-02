<head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, maximum-scale=1.0, minimum-scale=1.0, initial-scale=1.0, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>foodies&trade;</title>

    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    <!-- Bootstrap core CSS -->
    <link href="styles/bootstrap.min.css" rel="stylesheet">
    <link href="styles/bootstrap.css" rel="stylesheet">
    <link rel="stylesheet" type="text/css" href="styles/laolu.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquerymobile/1.4.5/jquery.mobile.min.css"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- <link rel="icon" href="images/logo1.jpg"> -->
    <link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.2/jquery.min.js"></script>
    <script src="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
</head>

<body>
    <nav class="navbar navbar-inverse">
          <div class="container-fluid">
            <div class="navbar-header">
              <a class="navbar-brand" href="">ACUMEALS</a>
            </div>
            <div float="right" text="white">
                <a href="login.php">Log Out</a>
            </div>
          </div>
     </nav>

    <?php
    //start a session
    session_start();
    $email=$_SESSION['email'];
    $firstname=$_SESSION['firstname'];
    $lastname=$_SESSION['lastname'];
    $department=$_SESSION['department'];
    $telephone=$_SESSION['telephone'];
    //check if userName is empty then redirect to login page
    if(empty($email))
    {
        //redirect to Login page
        header('Location:log-in.php');
    }
    //else print username with welcome message
    echo "<br><pre><h2>Welcome _beatbeast_ $temail $firstname $lastname</h2> <br> $department <br> $telephone </pre>"; ?>


    <div class="container">
    <table class="table table-striped">
        <thead>
            <!-- <tr> -->
                <th>S/N</th>
                <th>Cafeteria</th>
                <th>Location</th>
                <th>Open Hours</th>
                <th>Phone Number 1</th>
                <th>Phone Number 2</th>
            </tr>
        </thead>

    <?php
        $connect=mysqli_connect('localhost','root','root','acumeals_reg');
        if(mysqli_connect_errno($connect)){
            echo "failed to connect to database".mysqli_connect_errno();
        }
        $result=mysqli_query($connect,"SELECT * FROM acumeals_resturants");
        ?>
        <?php while($row= mysqli_fetch_array($result)):?>



    <tbody>
        <tr>
            <td><?php echo $row['id'];?></td>
            <td><?php echo $row['cafeteria'];?></td>
            <td><?php echo $row['location'];?></td>
            <td><?php echo $row['open_hours'];?></td>
            <td><?php echo $row['phonenumber'];?></td>
            <td><?php echo $row['telephone'];?></td>
            <td></td>
             <td>
                <!--<button class="btn btn-primary"><a href="view.php?id=<?php //echo $row["id"]; ?>">View</a></button>-->
                <a href="cafeterias/iya_debo.php?id=<?php echo $row["id"]; ?>"><button type="view" class="btn btn-primary">View</button></a>
            </td>
        </tr>
        <?php endwhile;?>
    </tbody>

  </table>
</div>

    <script>
        $(document).ready(function (){
          $('.delete').on('click',function (){
             var id=$(this).data('id');
             $("div[data-id='" + id +"']").hide();

          });
          $('.edit').on('click',function (){
             var id=$(this).data('id');
             $("div[data-id='" + id +"']").show();
          });
        });

    </script>



<style>
.footer {
    display: block;
    position: inherit;
    left: 0;
    bottom: 0;
    width: 100%;
    background-color: black;
    color: grey;
    text-align: center;
    padding: 5px;
}
</style>

    <footer class="footer">
    <!-- <div class="footer"> -->
       <p><center><!--©--> &copy; 2019 Copyright: <a href="">foodies&trade;</a>  Designed by: <a href="https://twitter.com/_beatbeast_">@beatbeast</a> under <a href="laolu.html">Windmill Ventures Limited&trade;</a></center> </p>
    <!-- </div> -->
    </footer>
    </body>
 </html>

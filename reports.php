 <?php/*
    session_start();
    include("dbConnect.php");
    $EmailId = $_SESSION['EmailId'];

    $request = "select * from report where email_id = '$EmailId' ";
    $details = mysqli_query($conn,$request);

    $data="";
    
    if (mysqli_num_rows($details) > 0) {
      $data.="<table> <tr> <th> Table1 name </th><th> table2 name </th> <th>.....</th> <th>Table3 name</th> <th>Table4 name</th> </tr>";
        while($row = mysqli_fetch_assoc($details)) {
          $data.="<tr >";
          $data.=  "<td>".$row["tb1 name"]."</td> <td>".$row["tb2 name"]."</td> <td>". $row["tb3 name"]. "</td> <td>". $row["tb4 name"]. "</td> <td>". $row["tb5 name"].  "</td>";
          $data.="</tr>";
        }
      $data.="</table>";
    } else {
        echo "0 results";
      }*/
?> 
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <style>
    body{
        font-family: Verdana;
        color: rgb(33,38,115);
        padding: 20px;
    }
    .heading{
        display: block;
        font-size: 30px;
        margin-bottom: 60px;
        margin-top: 10px;
    }

    th,td{
      text-align: center;
      padding: 20px;
      border: thin solid white;
    }

    table{
      background-color: rgb(225,237,255);
      border-radius: 10px;
    }

    ::-webkit-scrollbar{
      width: 10px;
      
  }

  ::-webkit-scrollbar-track{
    background: rgb(225,237,255);
  }

  ::-webkit-scrollbar-thumb{
    background: rgb(134, 215, 255);
  }

  </style>
  <title>Document</title>
</head>
<body>
  <span class="heading">Reports</span> 

  <table>
    
  </table>
  
   <?/*php  echo $data */?> 
</body>
</html>

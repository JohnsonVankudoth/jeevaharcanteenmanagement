<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
        table {
            border-collapse: collapse;
            width: 100%;
        }
        
        th, td {
            text-align: left;
            padding: 8px;
        }
        
        th {
            background-color: #f2f2f2;
            color: #333;
            font-weight: bold;
        }
        
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        
        .no-records {
            text-align: center;
        }
    </style>
</head>
<body>
<div class="john">
        <table border="0" class="john">
            <tr>
                <th>Name</th>
                <th>Rating</th>
                
            </tr>
            <?php
            include("connectin.php") ;
            error_reporting(0);
            $query = "select *from  ratings";
            $data = mysqli_query($conn,$query);
            $total=mysqli_num_rows($data);

            if($total!=0)
            {
                while($result=mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                        <td> ".$result['name']."</td>
                        <td> ".$result['rating']."</td>
                        
                    </tr>
                    ";
                }
            }
            else
            {
                echo "<tr><td colspan='6' class='no-records'>NO Ratings found</td></tr>";
            }
            ?>
        </table>
</div>
</body>
</html>
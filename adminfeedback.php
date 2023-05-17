<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedbacks</title>
    <style>
    body {
            background-color: #f0f0f0;
            font-size: 20px;
        }
        table {
            border-collapse: collapse;
            width: 100%;
            max-width: 800px;
            margin: 0 auto;
            background-color: #fff;
            padding: 20px;
        }
        th, td {
            text-align: left;
            padding: 8px;
        }
        th {
            background-color: #555;
            color: #fff;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
<div class="john">
        <table border="0" class="john">
            <tr>
                <th>NAME</th>
                <th>FEEDBACK</th>
                
            </tr>
            <?php
            include("connectin.php") ;
            error_reporting(0);
            $query = "select *from  feebacktable";
            $data = mysqli_query($conn,$query);
            $total=mysqli_num_rows($data);

            if($total!=0)
            {
                while($result=mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                        <td> ".$result['name']."</td>
                        <td> ".$result['feeback']."</td>
                        
                    </tr>
                    ";
                }
            }
            else
            {
                echo "<tr><td colspan='6' class='no-records'>NO records found</td></tr>";
            }
            ?>
        </table>
</div>
</body>
</html>
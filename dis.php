<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin</title>
    <style>
        /* apply styles to the entire body */
        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
        }

        /* style the table */
        .john {
            margin: 0 auto;
            width: 80%;
            background-color: #fff;
            border-collapse: collapse;
            box-shadow: 0 0 20px rgba(0,0,0,0.2);
        }

        /* style the table header */
        .john th {
            background-color: #0077be;
            color: #fff;
            padding: 10px;
            text-align: left;
            font-weight: bold;
            font-size: 14px;
        }

        /* style the table rows */
        .john td {
            border: 1px solid #ddd;
            padding: 10px;
            font-size: 14px;
        }

        /* style the alternate rows */
        .john tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        /* style the "No records found" message */
        .no-records {
            margin-top: 20px;
            text-align: center;
            color: #666;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="john">
        <table border="0" class="john">
            <tr>
                <th>items</th>
                <th>amount</th>
                <th>name</th>
                <th>mobile</th>
                <th>utr</th>
                <th>time</th>
            </tr>
            <?php
            include("connectin.php") ;
            error_reporting(0);
            $query = "select *from  billform";
            $data = mysqli_query($conn,$query);
            $total=mysqli_num_rows($data);

            if($total!=0)
            {
                while($result=mysqli_fetch_assoc($data))
                {
                    echo "
                    <tr>
                        <td> ".$result['items']."</td>
                        <td> ".$result['amount']."</td>
                        <td> ".$result['name']."</td>
                        <td> ".$result['mobile']."</td>
                        <td> ".$result['utr']."</td>
                        <td> ".$result['time']."</td>
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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laporan Booking</title>
    <style>
        #outtable{
            padding:60px;
            border: 3px solid #e3e3e3;
            width: 540px;
            border-radius: 10px;
        }
        .short{
            width: 50px;
        }
        .normal{
            width: 150px;
        }
        table{
            border-collapse: collapse;
            font-family: arial;
            color: #5E5B5C;
        }
        thead th{
            text-align: left;
            padding: 10px;
        }
        tbody td{
            border-top: 3px solid #e3e3e3;
            padding: 10px;
        }
        tbody tr:nth-child even{
            background: #A6F5FA;
        }
        tbody tr:hover{
            background: #EAE9F5;
        }
    </style>
</head>
<body>
<div id="outtable">
        <table>
            <thead>
                <th>No</th>
                <th>id booking</th>
                <th>id auth</th>
                <th>id package</th>
            </thead>
            <tbody>
                <?php $no=1; ?>
                <tr>
                    <?php foreach($booking as $book): ?>
                    <tr>
                        <td><?= $no; ?></td>
                        <td><?= $book->id_booking; ?></td>
                        <td><?= $book->id_auth; ?></td>
                        <td><?= $book->id_package; ?></td>
                    </tr>
                    <?php $no++; ?>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
</div>
</body>
</html>
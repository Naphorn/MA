<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0/css/bootstrap.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap4.min.css">
    <title>Data</title>
</head>
<body>
    <table id="statusair" class="table table-striped table-bordered" cellspacing="0" width="100%">
        <thead>
            <tr>
                <th>id</th>
                <th>IP</th>
                <th>TempCool</th>
                <th>Humidity</th>
                <th>TempRoom</th>
                <th>VoltCool</th>
                <th>CurrentCool</th>
                <th>CurrentHot</th>
                <th>WindSpeed</th>
                <th>Performance</th>
                <th>PowerStatus</th>                
            </tr>
        </thead>
        </table>
<script src="https://code.jquery.com/jquery-1.12.4.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap4.min.js"></script>
<script>
        $(document).ready(function() {
            $('#statusair').DataTable( {
                "processing": true,
                "serverSide": true,
                "ajax": "statusair.php"
            } );
        } );
    </script>
</body>
</html>
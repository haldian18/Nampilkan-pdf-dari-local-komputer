<html>

<head>
    <title>Latihan Pencarian Tanggal</title>
    <!-- bootstrap cdn  -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/5.2.0/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.13.1/css/dataTables.bootstrap5.min.css">
    <link rel="stylesheet" href="https://cdn.datatables.net/datetime/1.2.0/css/dataTables.dateTime.min.css">
</head>

<body>
    <div class="container mt-4">
        <form>
            <div class="row g-3 align-items-center">
                <div class="col-auto">
                    <label class="col-form-label">Periode</label>
                </div>
                <div class="col-auto">
                    <input class="form-control" type="text" id="min" name="min">
                </div>
            </div>
        </form>
        <button class="btn btn-primary" onclick="showPeriode()">Cari</button>
        <div class="card">
            <div class="card-body">

                <table id="example" class="table table-striped" style="width:100%">
                    <thead>
                        <tr>
                            <th>Name</th>
                            <th>Periode</th>
                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        $dir = opendir("./file");
                        while (($file = readdir($dir)) !== false) {
                        ?>
                            <tr>
                                <td><a class="filename" href="./file/<?= $file; ?>"><?= $file; ?></a></td>
                                <td><a href="./file/<?= $file; ?>"><?= date("Y-m-d", filemtime("./file/" . $file)); ?></a></td>
                            </tr>

                        <?php }
                        closedir($dir);
                        ?>

                    </tbody>
                </table>

            </div>
        </div>
    </div>
</body>



<script src="https://code.jquery.com/jquery-3.5.1.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.13.1/js/dataTables.bootstrap5.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/moment.js/2.29.2/moment.min.js"></script>
<script src="https://cdn.datatables.net/datetime/1.2.0/js/dataTables.dateTime.min.js"></script>

<script>

    function showPeriode() {
        console.log($('#min').val());
        window.open($('.filename');
    }
</script>

</html>
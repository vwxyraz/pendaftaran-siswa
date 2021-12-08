<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Colorlib Templates">
    <meta name="author" content="Colorlib">
    <meta name="keywords" content="Colorlib Templates">

    <!-- Title Page-->
    <title>Apply for job by Colorlib</title>

    <!-- Font special for pages-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800,800i" rel="stylesheet">

    <!-- Main CSS-->
    <link href="form/css/main.css" rel="stylesheet" media="all">
</head>

<body>
    <div class="page-wrapper bg-dark p-t-100 p-b-50">
        <div class="wrapper wrapper--w900">
            <div class="card card-6">
                <div class="card-heading">
                    <h2 class="title">Pendaftaran Siswa Baru</h2>
                </div>
                <div class="card-body">
                    <form action="edit.php" method="POST">
                        <?php
                            include("connection.php");
                            $id = $_GET['id'];

                            $q = $conn->real_escape_string(sprintf("SELECT*FROM calon_siswa WHERE id = $id" ));

                            if($q = $conn->query($q))
                            {
                                while($res = $q->fetch_assoc())
                                {
                                    $u_id = $res['id']; 
                                    $u_name = $res['nama'];
                                    $u_alamat = $res['alamat'];
                                    $u_jenis_kel = $res['jenis_kelamin'];
                                    $u_agama = $res['agama'];
                                    $u_sekolah = $res['sekolah_asal'];
                                }
                            }
                            
                        ?>

                        <div class="form-row">
                            <div class="name">Full name</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="nama" value="<?php echo $u_name ;?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Alamat</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="alamat" value="<?php echo $u_alamat ;?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Jenis Kelamin</div>
                            <div class="value">
                                <label class="radio-container m-r-55"><?php echo $u_jenis_kel; ?>
                                    <input type="radio" checked="checked" name="jenis_kelamin" value="<?php echo $u_jenis_kel; ?>">
                                    <span class="checkmark"></span>
                                </label>
                                <label class="radio-container"><?php if ($u_jenis_kel == "Perempuan") echo "Laki-Laki"; else if($u_jenis_kel == "Laki-Laki") echo "Perempuan" ; ?>
                                    <input type="radio" name="jenis_kelamin" value="<?php if ($u_jenis_kel == "Perempuan") echo "Laki-Laki"; else echo "Perempuan" ; ?>">
                                    <span class="checkmark"></span>
                                </label>
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Agama</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="agama" value="<?php echo $u_agama ;?>">
                            </div>
                        </div>
                        <div class="form-row">
                            <div class="name">Sekolah Asal</div>
                            <div class="value">
                                <input class="input--style-6" type="text" name="sekolah_asal" value="<?php echo $u_sekolah ;?>">
                            </div>
                        </div>
                        <input type="hidden" name="id" value=<?php echo $_GET['id'];?>>
                        <div class="form-row">
                            <div class="col-2">
                                <a  href="list_siswa.php" role="button" class="btn btn--radius-2 btn--red" >Back</a>
                            </div>
                            <div class="col-2">
                                <button class="btn btn--radius-2 btn--blue-2" type="submit">Edit</button>
                            </div>
                            
                        </div>
                        <!-- <div class="card-footer">
                            <button class="btn btn--radius-2 btn--blue-2" type="submit">Edit</button>
                        </div> -->
                    </form>
                </div>
                <!-- <div class="card-footer">
                    <button class="btn btn--radius-2 btn--blue-2" type="submit">Edit</button>
                </div> -->
            </div>
        </div>
    </div>

    <!-- Jquery JS-->
    <script src="form/vendor/jquery/jquery.min.js"></script>


    <!-- Main JS-->
    <script src="form/js/global.js"></script>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->

</html>
<!-- end document-->
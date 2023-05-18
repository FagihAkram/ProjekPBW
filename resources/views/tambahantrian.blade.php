<!DOCTYPE html>
<html>
<head>
    <!-- basic -->
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <!-- mobile metas -->
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <meta name="viewport" content="initial-scale=1, maximum-scale=1">
   <!-- site metas -->
   <title>Doctors</title>
   <meta name="keywords" content="">
   <meta name="description" content="">
   <meta name="author" content="">
   <!-- bootstrap css -->
   <link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
   <!-- style css -->
   <link rel="stylesheet" type="text/css" href="css/style.css">
   <!-- Responsive-->
   <link rel="stylesheet" href="css/responsive.css">
   <!-- fevicon -->
   <link rel="icon" href="images/fevicon.png" type="image/gif" />
   <!-- Scrollbar Custom CSS -->
   <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
   <!-- Tweaks for older IEs-->
   <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
   <!-- owl stylesheets -->
   <link rel="stylesheet" href="css/owl.carousel.min.css">
   <link rel="stylesheet" href="css/owl.theme.default.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css"
      media="screen">

    <script src="jquery.min.js"></script>
</head>
<body>
    <!-- form untuk menambah antrian -->
    <div id="add_data_Modal" class="modal fade">
        <div class="modal-dialog ">
            <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal">&times;</button>
                <h4 class="modal-title">Ambil Nomor Antrian</h4>
            </div>
            <div class="modal-body">
                <form method="post" id="insert_form" action="{{ route('antrian.store') }}" enctype="multipart/form-data">
                    @csrf
                    
                    <div class="form-group row">
                        <label>Nama</label>
                        <input type="text" name="name" id="nama" class="form-control" />
                    </div>
                    <br />
                    <div class="form-group row">
                        <label>Alamat</label>
                        <textarea name="address" id="address" class="form-control"></textarea>
                    </div>
                    <br />
                    <div class="form-group row">
                        <label>Jenis Kelamin</label>
                        <select name="gender" id="gender" class="form-control">
                            <option value="Laki-laki">Laki-laki</option>
                            <option value="Perempuan">Perempuan</option>
                        </select>
                    </div>  
                    <br />
                    <div class="form-group row">
                        <label>Umur</label>
                        <input type="text" name="age" id="umur" class="form-control" />
                    </div>
                    <br />
                    <input type="submit" name="insert" id="insert" value="Insert" class="btn btn-success" />

                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>
            </div>
        </div>
    </div>
</body>
</html>

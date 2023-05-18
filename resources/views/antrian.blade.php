<!DOCTYPE html>
<html lang="en">

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
    <div class="container" style="width:700px;">
        <center>
        <!-- <image src="sistemit.png" width="300px" /> -->
        </center>
        <h3 align="center">Ambil Nomor Antrian</h3>
        <br />
        <div class="table-responsive">
            <a href="{{ route('antrian.create') }}" role="button" name="age" id="age" data-toggle="modal" data-target="#add_data_Modal"
            class="btn btn-warning">Masukkan Data</a>

            <br />

            <div id="employee_table">
                <table class="table table-striped">
                    <tr>
                        <th>Nama</th>
                        <th>Lihat</th>
                        <th>Edit</th>
                        <th>Hapus</th>
                    </tr>
                    @foreach( $users as $user )
                        <tr>
                            <td>{{ $user->name }}</td>  <!-- nama user -->
                            <td><input type="button" name="view" value="Lihat Detail" onclick="window.location.href='{{ route('antrian.show', ['id' => $user->id]) }}'" 
                            class="btn btn-info btn-xs view_data" /></td>  <!-- lihat deskripsi user -->
                            <td><input type="button" name="edit" value="Edit" onclick="window.location.href='{{ route('antrian.edit', ['id' => $user->id]) }}'" 
                            class="btn btn-warning btn-xs edit_data" /></td>  <!-- edit deskripsi user -->
                            <form id="deleteForm" action="{{ route('antrian.destroy', ['id' => $user->id]) }}" method="POST" style="display: none;">
                                @csrf
                                @method('DELETE')
                            </form>
                            <td><input type="button" name="delete" value="Hapus" onclick="confirmDelete()" 
                            class="btn btn-danger btn-xs hapus_data" /></td>  <!-- hapus data user -->
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </div>
    

    <script>
    function confirmDelete() {
        if (confirm("Apakah Anda yakin ingin menghapus data ini?")) {
            document.getElementById('deleteForm').submit();
        }
    }
</script>
</body>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
<!--	<meta name="viewport" content="width=device-width, initial-scale=1"> -->
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<title>Personalia| Herona Express</title>
	<link href="../dist/img/logo herona.png" height="12px" weight="12px" rel='shortcut icon'>

  <style type="text/css">
   .upper { text-transform: uppercase; }
   .lower { text-transform: lowercase; }
   .cap   { text-transform: capitalize; }
   .small { font-variant:   small-caps; }
  </style>

	<!-- Global stylesheets -->
 <link href="https://fonts.googleapis.com/css?family=Roboto:400,300,100,500,700,900" rel="stylesheet" type="text/css">
  <link href="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/css/select2.min.css" rel="stylesheet" />
  <link href="../dist/css/select2.min.css" rel="stylesheet" />
  <link rel="stylesheet" href="../assets/css/fontawesome.min.css">
  <link rel="stylesheet" type="text/css" href="../assets/css/style.css">
  <link href="../assets/css/styles.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/select2.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/icons/icomoon/styles.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/minified/bootstrap.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/minified/core.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/minified/components.min.css" rel="stylesheet" type="text/css">
  <link href="../assets/css/minified/colors.min.css" rel="stylesheet" type="text/css">
  <!-- <link href="https://fonts.googleapis.com/css?family=Lato:300,400,700&amp;display=swap" rel="stylesheet">
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
  <link rel="stylesheet" href="../assets/css/A.style.css.pagespeed.cf.eQk9-CoeFP.css"> -->
  <!-- /global stylesheets -->

  <!-- Core JS files -->
  <script src="https://cdn.jsdelivr.net/npm/select2@4.1.0-rc.0/dist/js/select2.min.js"></script>
  <script type="text/javascript" src="../assets/js/select2.min.js"></script>
  <script type="text/javascript" src="../assets/js/plugins/loaders/pace.min.js"></script>
  <script type="text/javascript" src="../assets/js/core/libraries/jquery.min.js"></script>
  <script type="text/javascript" src="../assets/js/core/libraries/bootstrap.min.js"></script>
  <script type="text/javascript" src="../assets/js/plugins/loaders/blockui.min.js"></script>

  <!-- /core JS files -->
  <script type="text/javascript" src="../assets/js/core/app.js"></script>
  <script type="text/javascript" src="../assets/js/scripts.js"></script>
  <script type="text/javascript" src="../assets/js/login.js"></script>
  <script src="../assets/js/jquery.js"></script>
  <!--<script src="../assets/js/popper.js"></script> -->
  <script src="../assets/js/bootstrap.js"></script>

</head>
<!--<form method="post" enctype="multipart/form-data">-->
<body class="img js-fullheight" style="background-image:url(../assets/images/backgrounds/pst01.jpg);padding-top:5%;padding-bottom:11.8%">
<!-- <body class="hold-transition login-page" style="background-image:url(../assets/images/backgrounds/personalia.png);padding-top:5%;padding-bottom:11.8%;"> -->
  <?php include('../pengaturan/koneksi.php'); ?>
	<br>
    <br>
    <br>
<div class="container">
    <!-- <div class="row justify-content-left"> -->
    <div class="row justify-content-center">
<!--      <div class="col-lg-5">-->
      <!-- <div class="col-lg-12"> -->
        <div class="login-wrap p-0">
        
		      <form action="proses_login.php" method="post" enctype="multipart/form-data">
            <strong><center><font size="5" style="color:#800000;">PROGRAM MANAJEMEN PERSONALIA</font></center></strong>
            <br>
            <center><img src="../gambar/Logo PTHE.png" width="125px" height="125px"></center>
            <h5 class="content-group"></h5>
            <br>
                <div class="login-box">
                <!-- /.login-logo -->
                  <div class="card card-outline card-primary" style="background-color:transparent;">
                      <!-- <div class="card-header text-center">
                      <center><img src="../gambar/Logo PTHE.png" width="125px" height="125px"></center>
                      </div> -->
                      <div class="card-body">
                        <div class="col-lg-10" style="padding-left:38%;padding-right:22%;">
                        
                          <div class="form-group has-feedback has-feedback-center icheck-primary">
                            <input type="text" class="form-control" name="username" placeholder="Nama Pengguna" style="background-color:lightgray;">
                            <div class="form-control-feedback">
                              <i class="icon-user text-muted" style="color:black;"></i>
                            </div>
                            <!-- <select name="username" id="username" class="form-control" style="background-color:lightgray;">
                            <div class="form-control-feedback">
                            <i class="icon-user text-muted"></i>
                            </div>
                            <option value="">Nama Pengguna</option> 
                            <?php
                              //  $sql="SELECT * FROM user 
                              //  INNER JOIN profile ON profile.id_profile=user.id_profile";
                              //  $query=mysqli_query($con,$sql);
                              //  while ($data = mysqli_fetch_array($query)){
                            ?>
                            <option class="upper" value="<?php //echo $data['nama_lengkap'];?>">
                                <?php //echo $data['username']." | ". $data['kode_kantor']." | ". $data['nama_lengkap'];?>   
                            </option>
                            <?php
                              //  } // scrip php dan sql tidak bisa disatukan
                            ?>
                            </select> -->
                          </div>
                        
                          <div class="form-group has-feedback has-feedback-right">
                              <input type="password" class="form-control" name="password" placeholder="Kata Sandi" style="background-color:lightgray;">
                              <div class="form-control-feedback">
                              <i class="icon-lock2 text-muted" style="color:black;"></i>
                              </div>
                          </div>

                          <div class="form-group">
                              <button type="submit" style="background-color:#800000;" class="btn btn-block"><strong><a style="color:antiquewhite;">MASUK</a></strong> <i class="position-right"></i></button>
                              <center><a href="../konten/user/registrasi.php" class="hyperlink" style="color:antiquewhite;"><font size=2%">Akun Baru</font></a>
                              <a style="color:antiquewhite;"> | </a>
                              <a href="../konten/user/reset.php" class="hyperlink" style="color:antiquewhite;"><font size="2%">Lupa Kata Sandi</font></a></center>
                          </div>
                        </div>
                      </div>
                  </div>
                </div>
            </div>
		      </form>
      <!-- </div> -->
	</div>
</div>

<script src="../assets/js/jquery.min1.js"></script>
<script src="../assets/js/popper.js%2bbootstrap.min.js%2bmain.js.pagespeed.jc.9eD6_Mep8S.js"></script><script>eval(mod_pagespeed_T07FyiNNgg);</script>
<script>eval(mod_pagespeed_zB8NXha7lA);</script>
<script>eval(mod_pagespeed_xfgCyuItiV);</script>
<script defer src="https://static.cloudflareinsights.com/beacon.min.js/v64f9daad31f64f81be21cbef6184a5e31634941392597" integrity="sha512-gV/bogrUTVP2N3IzTDKzgP0Js1gg4fbwtYB6ftgLbKQu/V8yH2+lrKCfKHelh4SO3DPzKj4/glTO+tNJGDnb0A==" data-cf-beacon='{"rayId":"6b6a7b529b393580","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.11.0","si":100}' crossorigin="anonymous"></script>

	<!-- jQuery
<script src="../plugins/jquery/jquery.min.js"></script> -->
<!-- Bootstrap 4 -->
<script src="../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- Select2
<script src="../../plugins/select2/js/select2.full.min.js"></script> -->
<script src="../plugins/select2/js/select2.full.min.js"></script>
<!-- Bootstrap4 Duallistbox
<script src="../../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script> -->
<script src="../plugins/bootstrap4-duallistbox/jquery.bootstrap-duallistbox.min.js"></script>
<!-- InputMask -->
<script src="../plugins/moment/moment.min.js"></script>
<script src="../plugins/inputmask/jquery.inputmask.min.js"></script>
<!-- date-range-picker -->
<script src="../plugins/daterangepicker/daterangepicker.js"></script>
<!-- bootstrap color picker -->
<script src="../plugins/bootstrap-colorpicker/js/bootstrap-colorpicker.min.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="../plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Bootstrap Switch -->
<script src="../plugins/bootstrap-switch/js/bootstrap-switch.min.js"></script>
<!-- BS-Stepper -->
<script src="../plugins/bs-stepper/js/bs-stepper.min.js"></script>
<!-- dropzonejs -->
<script src="../plugins/dropzone/min/dropzone.min.js"></script>
<!-- AdminLTE App -->
<script src="../dist/js/adminlte.min.js"></script>
<!-- AdminLTE for demo purposes
<script src="../../dist/js/demo.js"></script> -->
<!-- Page specific script -->
<script>
  $(function () {
    //Initialize Select2 Elements
    $('.select2').select2()

    //Initialize Select2 Elements
    $('.select2bs4').select2({
      theme: 'bootstrap4'
    })

    //Datemask dd/mm/yyyy
    $('#datemask').inputmask('dd/mm/yyyy', { 'placeholder': 'dd/mm/yyyy' })
    //Datemask2 mm/dd/yyyy
    $('#datemask2').inputmask('mm/dd/yyyy', { 'placeholder': 'mm/dd/yyyy' })
    //Money Euro
    $('[data-mask]').inputmask()

    //Date picker
    $('#reservationdate').datetimepicker({
        format: 'L'
    });

    //Date and time picker
    $('#reservationdatetime').datetimepicker({ icons: { time: 'far fa-clock' } });

    //Date range picker
    $('#reservation').daterangepicker()
    //Date range picker with time picker
    $('#reservationtime').daterangepicker({
      timePicker: true,
      timePickerIncrement: 30,
      locale: {
        format: 'MM/DD/YYYY hh:mm A'
      }
    })
    //Date range as a button
    $('#daterange-btn').daterangepicker(
      {
        ranges   : {
          'Today'       : [moment(), moment()],
          'Yesterday'   : [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
          'Last 7 Days' : [moment().subtract(6, 'days'), moment()],
          'Last 30 Days': [moment().subtract(29, 'days'), moment()],
          'This Month'  : [moment().startOf('month'), moment().endOf('month')],
          'Last Month'  : [moment().subtract(1, 'month').startOf('month'), moment().subtract(1, 'month').endOf('month')]
        },
        startDate: moment().subtract(29, 'days'),
        endDate  : moment()
      },
      function (start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'))
      }
    )

    //Timepicker
    $('#timepicker').datetimepicker({
      format: 'LT'
    })

    //Bootstrap Duallistbox
    $('.duallistbox').bootstrapDualListbox()

    //Colorpicker
    $('.my-colorpicker1').colorpicker()
    //color picker with addon
    $('.my-colorpicker2').colorpicker()

    $('.my-colorpicker2').on('colorpickerChange', function(event) {
      $('.my-colorpicker2 .fa-square').css('color', event.color.toString());
    })

    $("input[data-bootstrap-switch]").each(function(){
      $(this).bootstrapSwitch('state', $(this).prop('checked'));
    })

  })
  // BS-Stepper Init
  document.addEventListener('DOMContentLoaded', function () {
    window.stepper = new Stepper(document.querySelector('.bs-stepper'))
  })

  // DropzoneJS Demo Code Start
  Dropzone.autoDiscover = false

  // Get the template HTML and remove it from the doumenthe template HTML and remove it from the doument
  var previewNode = document.querySelector("#template")
  previewNode.id = ""
  var previewTemplate = previewNode.parentNode.innerHTML
  previewNode.parentNode.removeChild(previewNode)

  var myDropzone = new Dropzone(document.body, { // Make the whole body a dropzone
    url: "/target-url", // Set the url
    thumbnailWidth: 80,
    thumbnailHeight: 80,
    parallelUploads: 20,
    previewTemplate: previewTemplate,
    autoQueue: false, // Make sure the files aren't queued until manually added
    previewsContainer: "#previews", // Define the container to display the previews
    clickable: ".fileinput-button" // Define the element that should be used as click trigger to select files.
  })

  myDropzone.on("addedfile", function(file) {
    // Hookup the start button
    file.previewElement.querySelector(".start").onclick = function() { myDropzone.enqueueFile(file) }
  })

  // Update the total progress bar
  myDropzone.on("totaluploadprogress", function(progress) {
    document.querySelector("#total-progress .progress-bar").style.width = progress + "%"
  })

  myDropzone.on("sending", function(file) {
    // Show the total progress bar when upload starts
    document.querySelector("#total-progress").style.opacity = "1"
    // And disable the start button
    file.previewElement.querySelector(".start").setAttribute("disabled", "disabled")
  })

  // Hide the total progress bar when nothing's uploading anymore
  myDropzone.on("queuecomplete", function(progress) {
    document.querySelector("#total-progress").style.opacity = "0"
  })

  // Setup the buttons for all transfers
  // The "add files" button doesn't need to be setup because the config
  // `clickable` has already been specified.
  document.querySelector("#actions .start").onclick = function() {
    myDropzone.enqueueFiles(myDropzone.getFilesWithStatus(Dropzone.ADDED))
  }
  document.querySelector("#actions .cancel").onclick = function() {
    myDropzone.removeAllFiles(true)
  }
  // DropzoneJS Demo Code End
</script>

</body>
</html>

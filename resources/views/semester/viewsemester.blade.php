
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>School Management</title>
<!-- ---------- icon -----------  -->
<link rel="icon" href="{{asset('public/image/favicon.png')}}">
    <!-- Custom fonts for this template-->
    <link href="{{asset('public/vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('public/css/sb-admin-2.min.css')}}" rel="stylesheet">

</head>



<body id="page-top">


<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Semester Details<a href="{{asset('semester/create')}}"><button class="btn btn-primary" style="float:right; ">Add Semester</button></a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                       
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            <th>semester Name</th>
                                            <th>semester Status</th>
                                            <th>action</th>
                                            </tr>

                                    </thead>
                                    <tbody>
                                      
                                                    <tr class="odd gradeX">
                                            <td>MBBS</td>
                                            <td>Active</td>
                                            <td>
                                            <a href="{{asset('semester/edit')}}"><button  class="btn btn-info">edit</button></a>
                                            </td>

                 
                                           
                                        </tr>
                                                
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>


<!-- Bootstrap core JavaScript-->
<script src="{{asset('public/vendor/jquery/jquery.min.js')}}"></script>
    <script src="{{asset('public/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{asset('public/vendor/jquery-easing/jquery.easing.min.js')}}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{asset('public/js/sb-admin-2.min.js')}}"></script>

</body>

</html>
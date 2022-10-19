@extends('layout/master')
@section('content')

<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> Teachers Details<a href="teacherview.php"><button class="btn btn-primary" style="float:right; ">Add Teacher</button></a>
                    </h1>
                </div>
                <!-- /.col-lg-12 -->
            </div>
 
            <!-- /.row -->
            <div class="row">
                <div class="col-lg-12">
                    <div class="panel panel-default">
                        <div class="panel-heading">
                        Teachers Details 
                        </div>
                        <!-- /.panel-heading -->
                        <div class="panel-body">
                            <div class="table-responsive">
                                <table class="table table-striped table-bordered table-hover" id="dataTables-example">
                                    <thead>
                                        <tr>
                                            
                                            <th>Tacher Name</th>
                                            <th>Tacher Address</th>
                                            <th>Tacher Email</th>
                                            <th>Tacher Phone</th>
                                            <th>Teacher Status</th>
                                            <th>action</th>
                                            </tr>

                                    </thead>
                                    <tbody>
                                       
                                        <tr class="odd gradeX">
                                            <td>ram</td>
                                            <td>Butwal</td>
                                            <td>ram@gmail.com</td>
                                            <td>98000000</td>
                                            <td>Active</td>
                                            <td class="center"><a href="teacheredit.php"><button type="reset" class="btn btn-primary">Edit</button></a>
                                        </tr>
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
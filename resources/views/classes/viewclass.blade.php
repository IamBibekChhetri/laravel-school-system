@extends('layout/master')
@section('content')

<div id="page-wrapper">

            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header"> class Details<a href="{{asset('classes/create')}}"><button class="btn btn-primary" style="float:right; ">Add Class</button></a>
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
                                            <th>Class Name</th>
                                            <th>Class Status</th>
                                            <th>action</th>
                                            </tr>

                                    </thead>
                                    <tbody>
                                      
                                                    <tr class="odd gradeX">
                                            <td>MBBS</td>
                                            <td>Active</td>
                                            <td>
                                            <a href="{{asset('classes/edit')}}"><button  class="btn btn-info">edit</button></a>
                                            </td>

                 
                                           
                                        </tr>
                                                
                                        </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
@endsection
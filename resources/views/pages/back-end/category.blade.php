@extends('layouts.adminLayout')

@section('admin-content')

    <!-- ########## START: MAIN PANEL ########## -->
    <div class="sl-mainpanel">
      <div class="sl-pagebody">
        <div class="sl-page-title">
          <h5>Categories Table</h5>
        </div><!-- sl-page-title -->

        <div class="card pd-20 pd-sm-40">
        	<div class="d-flex mb-2">
        		<h6 class="card-body-title">Category List</h6>
                <a href="#" class="btn btn-sm btn-warning ml-auto">Add New</a>
        	</div>
          
          	<div class="table-wrapper">
            <table id="datatable1" class="table display responsive nowrap">
              <thead>
                <tr>
                  <th class="wd-15p">Category Id</th>
                  <th class="wd-15p">Category Name</th>
                  <th class="wd-20p">Actions</th>
                </tr>
              </thead>
              <tbody>
              	@foreach($categories as $category)
	                <tr>
	                  <td>{{ $category->id }}</td>
	                  <td>{{ $category->category_name }}</td>
	                  <td><button style="background-color: #0275d8; color: white;">Show</button> <button style="background-color: #f0ad4e; color: white;">Edit</button> <button style="background-color: #d9534f; color: white;">Delete</button></td>
	                </tr>
                @endforeach
              </tbody>
            </table>
          </div><!-- table-wrapper -->
        </div><!-- card -->
      </div><!-- sl-pagebody -->
      <footer class="sl-footer">
        <div class="footer-left">
          <div class="mg-b-2">Copyright &copy; 2017. Starlight. All Rights Reserved.</div>
          <div>Made by ThemePixels.</div>
        </div>
        <div class="footer-right d-flex align-items-center">
          <span class="tx-uppercase mg-r-10">Share:</span>
          <a target="_blank" class="pd-x-5" href="https://www.facebook.com/sharer/sharer.php?u=http%3A//themepixels.me/starlight"><i class="fa fa-facebook tx-20"></i></a>
          <a target="_blank" class="pd-x-5" href="https://twitter.com/home?status=Starlight,%20your%20best%20choice%20for%20premium%20quality%20admin%20template%20from%20Bootstrap.%20Get%20it%20now%20at%20http%3A//themepixels.me/starlight"><i class="fa fa-twitter tx-20"></i></a>
        </div>
      </footer>
    </div><!-- sl-mainpanel -->
    <!-- ########## END: MAIN PANEL ########## -->
@endsection
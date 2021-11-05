@extends('backend.layouts.master')

@section('title')
Roles create - Admin Panel
@endsection

@section('styles')
@endsection

@section('admin-content')

    <div class="page-title-area">
        <div class="row align-items-center">
            <div class="col-sm-6">
                <div class="breadcrumbs-area clearfix">
                    <h4 class="page-title pull-left">Role Create</h4>
                    <ul class="breadcrumbs pull-left">
                        <li><a href="{{ route('admin.dashboard') }}">Dashboard</a></li>
                        <li><span>All Roles</span></li>
                    </ul>
                </div>
            </div>
            <div class="col-sm-6 clearfix">
                @include('backend.layouts.partials.logout')
            </div>
        </div>
    </div>


    <!-- page title area end -->
        <div class="main-content-inner">
            <div class="row">
                    <!-- data table start -->
                    <div class="col-12 mt-5">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="header-title">Create New Role</h4>
                                    <form>
                                        <div class="form-group">
                                            <label for="name">Role name</label>
                                            <input type="text" class="form-control" id="name" name="" placeholder="Enter Role Name">
                                        </div>

                                            {{-- <div class="form-check">
                                                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                                                <label class="form-check-label" for="exampleCheck1">Check me out</label>
                                            </div> --}}
                                            <button type="submit" class="btn btn-primary mt-4 pr-4 pl-4">Submit</button>
                                    </form>
                            </div>
                        </div>
                    </div>
                    <!-- data table end -->
                </div>
            </div>
        </div>



@endsection

@section('scripts')
     <!-- Start datatable js -->
   <script src="https://cdn.datatables.net/responsive/2.2.3/js/responsive.bootstrap.min.js"></script>

     <script>

     </script>
@endsection

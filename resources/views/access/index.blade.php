@extends('layouts.app')
@section('title', 'Dashboard')
@section('body_content_main')
    <div class="page-main">
        @section('navbar')
            @include('layouts.blocks.nav')
            <div class="page-header">
                <div class="container">
                    <div class="row align-items-center">
                        <div class="col-auto">
                            <h2 class="page-title">
                                Access Service
                            </h2>
                        </div>
                        <!-- Page title actions -->
                        <div class="col-auto ml-auto d-print-none">
                            <div class="d-flex">
                                <a href="#" class="btn btn-primary"  data-toggle="modal" data-target="#create_domain">
                                    <i class="fe fe-plus-circle"></i>
                                    New Custom  Access
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="row">
                    @foreach($access_services as $access)
                    <div class="col-md-6 col-lg-3 col-sm-12">
                        <div class="card" data-color="green">
                            <div class="card-body">

                                <div class="item-action dropdown float-md-right">
                                    <a href="javascript:void(0)" data-toggle="dropdown" class="icon" aria-expanded="false"><i class="fe fe-more-vertical"></i></a>
                                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; transform: translate3d(-181px, 20px, 0px); top: 0px; left: 0px; will-change: transform;">
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-tag"></i> Add Users </a>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-trash-2 "></i> Remove  Users </a>
                                        <div class="dropdown-divider"></div>
                                        <a href="javascript:void(0)" class="dropdown-item"><i class="dropdown-icon fe fe-trash"></i> Delete Access</a>
                                    </div>
                                </div>
                                <div class="card-title">
                                    <h6 class="h4 mb-3"><a href="#">{{$access->access_name}}</a></h6>
                                </div>

                                <div class="avatar-list avatar-list-stacked mb-3">
                                    <span class="avatar avatar-sm">JL</span>
                                </div>
                                <div class="text-muted font-weight-normal mt-0">Granted Users</div>
                                <h3 class="h2 mt-2 mb-3">1,950</h3>
                            </div>
                        </div>
                    </div>
                        @endforeach
                </div>
            </div>
    </div>

    <div class="modal fade" id="create_domain" tabindex="-1" role="dialog" aria-labelledby="exampleModalLongTitle" aria-hidden="true">

        <div class="modal-dialog modal-lg" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">New Access</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <!-- SVG icon code -->
                    </button>
                </div>

                <div class="modal-footer">
                    <a href="#" class="btn btn-link link-secondary" data-dismiss="modal">
                        Cancel
                    </a>
                    <a href="#" class="btn btn-primary ml-auto" data-dismiss="modal">
                        <!-- SVG icon code -->
                        Create new Access
                    </a>
                </div>
            </div>
        </div>
    </div>
@endsection



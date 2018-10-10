@extends('layout.admin')
@section('title')
@section('content')
	<div class="row">
	    <div class="col-md-12">
	        <!-- BEGIN PROFILE CONTENT -->
	        <div class="profile-content">
	            <div class="row">
	                <div class="col-md-12">
	                    <div class="portlet light ">
	                        <div class="portlet-title tabbable-line">
	                            <div class="caption caption-md">
	                                <i class="icon-globe theme-font hide"></i>
	                                <span class="caption-subject font-blue-madison bold uppercase">Trang cá nhân</span>
	                            </div>
	                            <ul class="nav nav-tabs">
	                                <li class="active">
	                                    <a href="#tab_1_1" data-toggle="tab">Thông tin</a>
	                                </li>
	                                <li>
	                                    <a href="#tab_1_3" data-toggle="tab">Change Password</a>
	                                </li>
	                            </ul>
	                        </div>
	                        <div class="portlet-body">
	                            <div class="tab-content">
	                                <!-- PERSONAL INFO TAB -->
	                                <div class="tab-pane active" id="tab_1_1">
	                                    <form role="form" action="#">
	                                        <div class="form-group">
	                                            <label class="control-label">Tên</label>
	                                            <input type="text" class="form-control" value="{{$user}}" /> 
	                                        </div>
	                                        <div class="form-group">
	                                            <label class="control-label">Anh đại diên</label>
	                                            <input type="file" class="form-control" /> 
	                                        </div>
	                                        <div class="form-group">
	                                            <label class="control-label">Điện thoai</label>
	                                            <input type="text"  class="form-control" /> 
	                                        </div>

	                                        <div class="form-group">
	                                            <label class="control-label">About</label>
	                                            <textarea class="form-control" rows="3" ></textarea>
	                                        </div>
	                                        <div class="margiv-top-10">
	                                            <a href="javascript:;" class="btn green"> Save Changes </a>
	                                            <a href="javascript:;" class="btn default"> Cancel </a>
	                                        </div>
	                                    </form>
	                                </div>
	                                <!-- END PERSONAL INFO TAB -->
	                                <!-- CHANGE PASSWORD TAB -->
	                                <div class="tab-pane" id="tab_1_3">
	                                    <form action="#">
	                                        <div class="form-group">
	                                            <label class="control-label">Current Password</label>
	                                            <input type="password" class="form-control" /> </div>
	                                        <div class="form-group">
	                                            <label class="control-label">New Password</label>
	                                            <input type="password" class="form-control" /> </div>
	                                        <div class="form-group">
	                                            <label class="control-label">Re-type New Password</label>
	                                            <input type="password" class="form-control" /> </div>
	                                        <div class="margin-top-10">
	                                            <a href="javascript:;" class="btn green"> Change Password </a>
	                                            <a href="javascript:;" class="btn default"> Cancel </a>
	                                        </div>
	                                    </form>
	                                </div>
	                                <!-- END CHANGE PASSWORD TAB -->
	                            </div>
	                        </div>
	                    </div>
	                </div>
	            </div>
	        </div>
	        <!-- END PROFILE CONTENT -->
	    </div>
	</div>
@endsection
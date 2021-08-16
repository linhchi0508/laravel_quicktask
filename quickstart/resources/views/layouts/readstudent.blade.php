@extends('layouts.app')

@section('content')

<div id="wrapper">
    <div id="page-wrapper">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12 d-flex justify-content-center">
                    <h1 class="page-header">{{ trans('homepage.profile') }}</h1>
                </div>
	            <div class="row mt-3 d-flex justify-content-evenly container">
		            <div class=" ml-5 pl-4 profile col-4 d-flex flex-column ">
			            <div class=" ml-5 pl-2 mb-2 profile">
				            <h4>{{ trans('homepage.profile') }}</h4>
			            </div>
			            <div class ="avatar mb-3 mt-3">
					        <img src="{{ asset('storage/image/anh.png') }}" >
			            </div>
			            <div class="user-name d-flex justify-content-center flex-column align-items-center" >
				            <h5>Name</h5>
				            <p class = "information">Email</p>
			            </div>
			            <div class="phone">
				        <p class = "information" ><img src="{{ asset('storage/image/phone.png') }}" class="mr-2 phone">Phone</p>
			            </div>
		            </div>		
       		        <div class="col-6 ml-5">
				        <h4 class="mb-4">{{ trans('homepage.edit_student') }}</h4>
                        <form action="#" method="POST" enctype="multipart/form-data">
                            <div class="form-group">
                                <label><b>{{ trans('homepage.email') }}</b></label>
                                <input type="email" class="form-control"  placeholder="{{ trans('placehold.email') }}" />
                            </div>
                            <div class="form-group">
                                <label><b>{{ trans('homepage.fullname') }}</b></label>
                                <input class="form-control" name="fullname"  placeholder="{{ trans('placehold.fullname') }}"/>
                            </div>
                            <div class="form-group">
                                <label><b>{{ trans('homepage.avatar') }}</b></label>
                                <input type="file"  name="avatar" />
                            </div>
                            <div class="form-group">
                                <label><b>{{ trans('homepage.birthday') }}</b></label>
                                <input type="date" class="form-control " name="birthday" />
                            </div>
                            <div class="form-group">
                                <label><b>{{ trans('homepage.phone') }}</b></label>
                                <input class="form-control" name="phone" placeholder="Please Enter Phone" />
                            </div>
                            <div class=" d-flex align-items-center flex-column">
                                <button type="submit" name="submit" class="btn btn-primary mt-3">{{ trans('homepage.submit') }}</button>
                            </div>
                        </form>
                    </div>
       		    </div>
	        </div>                
        </div>
    </div>
</div>

@endsection

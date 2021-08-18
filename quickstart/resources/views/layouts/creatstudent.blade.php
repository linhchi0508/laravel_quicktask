@extends('layouts.app')

@section('content')

<div class="ml-5  pl-3 row container-fluid col-12 d-flex justify-content-center">
	<div>
		<h3>{{ trans('homepage.creat_student') }}</h3>
	</div>
	<div class="col-12">
		<form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label><b>{{ trans('homepage.email') }}</b></label>
				<input type="email" class="form-control " name="email" placeholder="{{ trans('placehold.email') }}" />
				@if ($errors->has('email'))
                	<div class="alert alert-danger">
                    	{{ $errors->first('email') }}
                	</div>
            	@endif
			</div>
			<div class="form-group">
				<label><b>{{ trans('homepage.fullname') }}</b></label>
				<input type="text" class="form-control " name="fullname" placeholder="{{ trans('placehold.fullname') }}" />
				@if ($errors->has('fullname'))
                	<div class="alert alert-danger">
                    	{{ $errors->first('fullname') }}
                	</div>
            	@endif
			</div>
			<div class="form-group">
				<label><b>{{ trans('homepage.student_number') }}</b></label>
				<input type="text" class="form-control " name="student_number" placeholder="{{ trans('placehold.student_number') }}" />
				@if ($errors->has('student_number'))
                	<div class="alert alert-danger">
                    	{{ $errors->first('student_number') }}
                	</div>
            	@endif
			</div>
			<div class="form-group">
				<label><b>{{ trans('homepage.avatar') }}</b></label>
				<input type="file" class="form-control " name="avatar"  />
			</div>
			<div class="form-group">
				<label><b>{{ trans('homepage.birthday') }}</b></label>
				<input type="date" class="form-control " name="birthday" />
			</div>
            <div class="form-group filled">
                <label><b>{{ trans('homepage.manjor') }}</b></label>
                <select class="form-control1 ng-invalid ng-invalid-required" name="major" ng-model="model.select" required="">
					<option value="{{ trans('homepage.cntt') }}" name="khoa_cntt">{{ trans('homepage.cntt') }}</option>
                    <option value="{{ trans('homepage.dtvt') }}" name="khoa_dtvt">{{ trans('homepage.dtvt') }}</option>
                    <option value="{{ trans('homepage.dm') }}" name="khoa_dm">{{ trans('homepage.dm') }}</option>
                    <option value="{{ trans('homepage.tdh') }}" name="khoa_tdh">{{ trans('homepage.tdh') }}</option>
                </select>
				@if ($errors->has('major'))
                	<div class="alert alert-danger">
                    	{{ $errors->first('major') }}
                	</div>
            	@endif
            </div>
            <div class="form-group d-flex align-items-center flex-column">
                <button type="submit" class="btn btn-primary">{{ trans('homepage.submit') }}</button>
            </div>
        </form>
	</div>
</div>

@endsection

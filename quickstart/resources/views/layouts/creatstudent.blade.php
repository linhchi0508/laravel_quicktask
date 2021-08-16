@extends('layouts.app')

@section('content')

<div class="ml-5  pl-3 row container-fluid col-12 d-flex justify-content-center">
	<div>
		<h3>{{ trans('homepage.creat_student') }}</h3>
	</div>
    <div class="col-12">
		<form action="#" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label><b>{{ trans('homepage.email') }}</b></label>
				<input type="email" class="form-control " name="email" placeholder="{{ trans('placehold.email') }}" />
			</div>
			<div class="form-group">
				<label><b>{{ trans('homepage.fullname') }}</b></label>
				<input type="text" class="form-control " name="fullname" placeholder="{{ trans('placehold.fullname') }}" />
			</div>
			<div class="form-group">
				<label><b>{{ trans('homepage.student_number') }}</b></label>
				<input type="text" class="form-control " name="student_number" placeholder="{{ trans('placehold.student_number') }}" />
			</div>
			<div class="form-group">
				<label><b>{{ trans('homepage.avatar') }}</b></label>
				<input type="file" class="form-control " name="student_number"  />
			</div>
			<div class="form-group">
				<label><b>{{ trans('homepage.birthday') }}</b></label>
				<input type="date" class="form-control " name="birthday" />
			</div>
            <div class="form-group filled">
                <label><b>{{ trans('homepage.birthday') }}</b></label>
                <select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" required=""><option value="? undefined:undefined ?"></option>
					<option value="cntt" name="khoa_cntt">{{ trans('homepage.cntt') }}</option>
                    <option value="dtvt" name="khoa_dtvt">{{ trans('homepage.dtvt') }}}</option>
                    <option value="dm" name="khoa_dm">{{ trans('homepage.dm') }}</option>
                    <option value="tdh" name="khoa_tdh">{{ trans('homepage.tdh') }}</option>
                </select>
            </div>
            <div class="form-group d-flex align-items-center flex-column">
                <button type="submit" class="btn btn-primary">{{ trans('homepage.submit') }}</button>
            </div>
        </form>
	</div>
</div>

@endsection

@extends('layouts.app')

@section('content')

<div class="ml-5  pl-3 row container-fluid col-12 d-flex justify-content-center">
	<div>
		<h3>{{ trans('homepage.creat_subject') }}</h3>
	</div>
    <div class="col-12">
		<form action="#" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label><b>{{ trans('homepage.subject_title') }} </b></label>
				<input type="text" class="form-control " name="subject_title" placeholder="{{ trans('placehold.subject_title') }}" />
			</div>
			<div class="form-group">
				<label><b>{{ trans('homepage.subject_code') }}</b></label>
				<input type="text" class="form-control " name="subject_code" placeholder="{{ trans('placehold.subject_code') }}" />
			</div>
            <div class="form-group filled">
                <label><b>{{ trans('homepage.major') }}</b></label>
                <select class="form-control1 ng-invalid ng-invalid-required" ng-model="model.select" required=""><option value="? undefined:undefined ?"></option>
                    <option value="cntt" name="khoa_cntt">{{ trans('homepage.cntt') }}</option>
                    <option value="dtvt" name="khoa_dtvt">{{ trans('homepage.dtvt') }}}</option>
                    <option value="dm" name="khoa_dm">{{ trans('homepage.dm') }}</option>
                    <option value="tdh" name="khoa_tdh">{{ trans('homepage.tdh') }}</option>
                </select>
            </div>
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{ trans('homepage.submit') }}</button>
            </div>
        </form>
	</div>
</div>

@endsection

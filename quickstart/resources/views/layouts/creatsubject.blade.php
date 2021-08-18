@extends('layouts.app')

@section('content')

<div class="ml-5  pl-3 row container-fluid col-12 d-flex justify-content-center">
	<div>
        <h3>{{ trans('homepage.creat_subject') }}</h3>
	</div>
    <div class="col-12">
		<form action="{{ route('subject.store') }}" method="POST" enctype="multipart/form-data">
			@csrf
			<div class="form-group">
				<label><b>{{ trans('homepage.subject_title') }} </b></label>
				<input type="text" class="form-control " name="title" placeholder="{{ trans('placehold.subject_title') }}" />
                @if ($errors->has('title'))
                    <div class="alert alert-danger">
                        {{ $errors->first('title') }}
                    </div>
                @endif
			</div>
			<div class="form-group">
				<label><b>{{ trans('homepage.subject_code') }}</b></label>
				<input type="text" class="form-control " name="subject_code" placeholder="{{ trans('placehold.subject_code') }}" />
                @if ($errors->has('subject_code'))
                    <div class="alert alert-danger">
                        {{ $errors->first('subject_code') }}
                    </div>
                @endif
			</div>
            <div class="form-group filled">
                <label><b>{{ trans('homepage.major') }}</b></label>
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
            <div class="form-group">
                <button type="submit" class="btn btn-primary">{{ trans('homepage.submit') }}</button>
            </div>
        </form>
	</div>
</div>

@endsection

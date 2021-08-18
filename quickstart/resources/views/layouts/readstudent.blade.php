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
					        <img src="{{ asset ( $student->avatar) }}" >
			            </div>
			            <div class="user-name d-flex justify-content-center flex-column align-items-center">
				            <h5>{{ $student->fullname }}</h5>
				            <p class = "information">{{ $student->student_number }}</p>
			            </div>
			            <div class="phone">
				        <p class = "information" ><img src="{{ asset('storage/image/phone.jpg') }}" class="mr-2 phone" >{{ $student->phone }}</p>
			            </div>
		            </div>		
       		        <div class="col-6 ml-5">
                        <h4 class="mb-4">{{ trans('homepage.edit_student') }}</h4>
                        <form action="{{ route('student_update', $student->id) }}" method="POST" enctype="multipart/form-data">
                            @method('POST')
                            @csrf
                            <div class="form-group">
                                <label><b>{{ trans('homepage.fullname') }}</b></label>
                                <input type="text" class="form-control" value={{ $student->fullname }} name="fullname" placeholder="{{ trans('placehold.fullname') }}" />
                            </div>
                            <div class="form-group">
                                <label><b>{{ trans('homepage.avatar') }}</b></label>
                                <input type="file" class="form-control"  value={{ $student->avatar }} name="avatar" placeholder="Please Enter Student Number" />
                            </div>
                            <div class="form-group">
                                <label><b>{{ trans('homepage.birthday') }}</b></label>
                                <input type="date" class="form-control" value={{ $student->birthday }} name="birthday" />
                            </div>
                            <div class="form-group d-flex align-items-center flex-column">
                                <button type="submit" name="submit" class="btn btn-primary mt-3">{{ trans('homepage.submit') }}</button>
                            </div>
                        </form>
                    </div>
       		    </div>
	        </div>                
        </div>
    </div>
</div>

<div class="ml-5 mt-5  pl-3 row container-fluid col-12 d-flex justify-content-center">
    <div>
        <h3>{{ trans('homepage.point') }}</h3>
	</div>
    <div class="col-12">
        <div class="col-6 ml-5">
            <form action="{{ route('point.creat',$student->id) }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="form-group">
                    <label><b>{{ trans('homepage.point') }}</b></label>
                    <input type="number" min="0" max="10" class="form-control " name="point" />
                </div>
                <div class="form-group">
                    <label ><b>{{ trans('homepage.major') }}</b></label>
                    <select class="form-control1 col-4 ng-invalid ng-invalid-required" name="major" ng-model="model.select" required=""><option value="? undefined:undefined ?"></option>
                        @foreach($listSubject as $subject)
                            <option value="{{ $subject->id }}" name="khoa_cntt">{{ $subject->title }}</option>
                        @endforeach
                    </select>
                </div>
                <div class="form-group">
                    <button type="submit" name="submit" class="btn btn-primary mt-3">{{ trans('homepage.submit') }}</button>
                </div>
            </form>
        </div>
        <div class="bs-example1" >
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ trans('homepage.subject_title') }}</th>
                        <th>{{ trans('homepage.point') }}</th>
                        <th>{{ trans('homepage.action') }}</th>
                    </tr>
                </thead>
                @foreach($subjects as $subject)
                    <tbody>
                        <tr class="active">
                            <td>{{ $subject->title }}</td>
                            <td>{{ $subject->pivot->point }}</td>
                            <td class="center">           
                                <form action="{{ route('point.destroy',[$student->id, $subject->id] )}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn-danger" onclick="return confirm('Are you sure ?')">{{ trans('homepage.delete') }}</button>
                                </form> 
				            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
        </div>
    </div>
</div>
   
@endsection

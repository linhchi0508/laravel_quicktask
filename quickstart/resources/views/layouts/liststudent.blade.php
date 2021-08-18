@extends('layouts.app')

@section('content')
@if (session()->has('message'))
    <div>
        <p>
            <h2 class="text-success">{{ session()->get('message') }}</h2>
        </p>
    </div>
@endif

<div class="ml-5  pl-3 row container-fluid col-12 d-flex justify-content-center">
    <div>
		<h3>{{ trans('homepage.list_student') }}</h3>
	</div>
    <div class="col-12 span-3 mt-5">
        <div class="ml-auto my-2">
            <a href="{{ route('student.create')}}" class="btn btn-success mx-2 ">{{ trans('homepage.new_student') }}</a>
        </div>
        <div class="bs-example1" >
            <table class="table">
                <thead>
                    <tr>
                        <th>{{ trans('homepage.id') }}</th>
                        <th>{{ trans('homepage.student_number') }}</th>
                        <th>{{ trans('homepage.fullname') }}</th>
                        <th>{{ trans('homepage.major') }}</th>
                        <th>{{ trans('homepage.action') }}</th>
                    </tr>
                </thead>
                @foreach($students as $student)
                    <tbody>
                        <tr class="active">
                            <th scope="row">{{ $student->id }}</th>
                            <td>{{ $student->student_number }}</td>
                            <td>{{ $student->fullname }}</td>
                            <td>{{ $student->major }}</td>
                            <td class="center">           
					            <a href="{{ route('student.show', [$student->id]) }}"><i class="fa fa-eye mr-5"></i> </a>
                                <form action="{{ route('student.destroy', $student->id)}}" method="post">
                                    @method('DELETE')
                                    @csrf
                                    <button class="btn-danger" onclick="return confirm('Are you sure ?')">{{ trans('homepage.delete') }}</button>
                                </form> 
				            </td>
                        </tr>
                    </tbody>
                @endforeach
            </table>
            {{$students->links("pagination::bootstrap-4")}}
        </div>
    </div>
</div>

@endsection

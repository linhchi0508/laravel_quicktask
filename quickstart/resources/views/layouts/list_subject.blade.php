@extends('layouts.app')

@section('content')

<div class="ml-5  pl-3 row container-fluid col-12 d-flex justify-content-center">
    <div>
		<h3>{{ trans('homepage.list_subject') }}</h3>
	</div>
    <div class="col-12 span-3 mt-5">
        <div class="bs-example1" >
            <table class="table">
                <thead>
                <tr>
                    <th>{{ trans('homepage.id') }}</th>
                    <th>{{ trans('homepage.subject_title') }}</th>
                    <th>{{ trans('homepage.major') }}</th>
                    <th>{{ trans('homepage.subject_code') }}</th>
                    <th>{{ trans('homepage.action') }}</th>
                </tr>
                </thead>
                @foreach($subjects as $subject)
                <tbody>
                <tr class="active">
                    <th scope="row">{{ $subject->id }}</th>
                    <td>{{ $subject->title }}</td>
                    <td>{{ $subject->major }}</td>
                    <td>{{ $subject->subject_code }}</td>
                    <td class="center">           
                        <form action="{{ route('subject.destroy', $subject->id)}}" method="post">
                            @method('DELETE')
                            @csrf
                            <button class="btn-danger" onclick="return confirm('Are you sure ?')">{{ trans('homepage.delete') }}</button>
                          </form> 
				    </td>
                </tr>
                </tbody>
                @endforeach
            </table>
            {{$subjects->links("pagination::bootstrap-4")}}
        </div>
     </div>
   </div>
</div>

@endsection

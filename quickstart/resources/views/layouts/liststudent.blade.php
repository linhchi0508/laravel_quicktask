@extends('layouts.app')

@section('content')

<div class="ml-5  pl-3 row container-fluid col-12 d-flex justify-content-center">
    <div>
		<h3>{{ trans('homepage.list_student') }}</h3>
	</div>
    <div class="col-12 span-3 mt-5">
        <div class="bs-example1" >
            <table class="table">
                <thead>
                <tr>
                    <th>{{ trans('homepage.id') }}</th>
                    <th>{{ trans('homepage.student_number') }}</th>
                    <th>{{ trans('homepage.fullname') }}</th>
                    <th>{{ trans('homepage.manjor') }}</th>
                    <th>{{ trans('homepage.action') }}</th>
                </tr>
                </thead>
                <tbody>
                <tr class="active">
                    <th scope="row">1</th>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td>Column content</td>
                    <td class="center">           
					    <a href="#"><i class="fa fa-eye mr-5"></i> </a>
					    <a class="delete" href="#" ><i class="fa fa-trash-o ml-5"></i></a>
				    </td>
                </tr>
                </tbody>
            </table>
        </div>
     </div>
   </div>
</div>

@endsection

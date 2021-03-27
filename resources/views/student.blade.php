@extends('layouts.app')

@section('content')
  <div class="flex justify-center mb-4">
  	<div class="w-8/12 bg-yellow-200 p-6 rounded-lg">
  		Students list
  	</div>			
  </div>
  <div class="flex flex-col">
  	<table class="min-w-full divide-y divide-gray-200 justify-center">
  		<thead class="bg-gray-50">
  			<tr>
  				<th>Id</th>
  				<th>CNE</th>
  				<th>First Name</th>
  				<th>Last Name</th>
  				<th>Age</th>
  				<th>Speciality</th>
  				<th>Operations</th>
  			</tr>
  		</thead>
  		<tbody>
  		@foreach($students as $student)	
  			<tr>
  			    <td>{{ $student->id }}</td>	
  			    <td>{{ $student->cne }}</td>	
  			    <td>{{ $student->first_name }}</td>	
  			    <td>{{ $student->last_name }}</td>	
  			    <td>{{ $student->age }}</td>	
  			    <td>{{ $student->speciality }}</td>	
  			    <td>
  			    	
  			    </td>	
  			</tr>
  		@endforeach	
  		</tbody>
  	</table>
  </div>
@endsection
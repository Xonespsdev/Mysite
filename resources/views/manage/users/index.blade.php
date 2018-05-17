@extends('layouts.manage')
@section('content')
<div class="flex-container">
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Manage Users</h1>
		</div>
		<div class="column">
			<a href="{{route('users.create')}}" class="button is-primary is-pulled-right m-r-8"><i class="fa fa-user-plus m-r-10"></i>Create New User</a>
		</div>
	</div>
	<hr class="m-t-0">
	<div class="card">
		<div class="card-content">
				<table class="table is-narrow">
			<thead>
				<tr class="">
					<th>ID</th>
					<th>Name</th>
					<th>Email</th>
					<th>Date Created</th>
					<th>Action</th>
				</tr>
			</thead>
			<tbody class="">
				@foreach ($users as $user)
				<tr>
					<th>{{$user->id}}</th>
					<td>{{$user->name}}</td>
					<td>{{$user->email}}</td>
					<td>{{$user->created_at->toFormattedDateString()}}</td>				
					<td>
						<a class="button is-success" href="{{route('users.show', $user->id)}}" ><i class="fa fa-eye"></i></a>
						<a class="button is-primary" href="{{route ('users.edit', $user->id)}}" ><i class="fa fa-edit"></i></a>
                     <a class="button is-danger" href="#" ><i class="fa fa-trash"></i></a>
					</td>
				</tr>
				@endforeach
			</tbody>
		</table>
	</div>
	</div>
	{{$users->links()}}
</div>
@endsection


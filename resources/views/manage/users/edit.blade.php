@extends('layouts.manage')
@section('content')
<div class="flex-container">
	<div class="columns m-t-10">
		<div class="column">
			<h1 class="title">Edit User</h1>
		</div>
	</div>
	<hr class="m-t-0">
	<div class="columns card">
		<div class="column">
			<form action="{{('users.edit')}}" method="GET">
				{{method_field('PUT')}}
				{{csrf_field()}}
				<div class="field">
					<label for="name" class="label">Name</label>
					<p class="control">
						<input type="text" class="input" name="name" id="name" value="{{$user->name}}">
					</p>
				</div>
				<div class="field">
					<label for="name" class="label">Email:</label>
					<p class="control">
						<input type="text" class="input" name="name" id="email" value="{{$user->email}}">
					</p>
				</div>
				<div class="field">
					<label for="name" class="label">Password</label>
					<b-radio-group v-model="password_options">
						<div class="field">
							<b-radio value="keep">Do Not Change Password</b-radio>
						</div>
						<div class="field">
							<b-radio value="auto">Auto-generate Password</b-radio>
						</div>
						<div class="field">
							<b-radio value="manual">Manually Set New Password</b-radio>
						</div>
					</b-radio-group>
					<p class="control">
						<input type="text" class="input" name="name" id="password" v-if="password_options == 'manual'" placeholder="Manually Passsword">
					</p>
				</div>
				<button class="button is-primary"><i class="fa fa-user-plus m-r-10"></i>Edit</button>
				<a class="button" href="#">Back</a>
			</form>
	    </div>
	</div>
</div>
@endsection

@section('scripts')
<script>
	var app = new Vue ({
		el:'#app',
		data: {
        password_options: 'keep'
		}
	});

</script>
@endsection


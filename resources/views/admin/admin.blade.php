@extends('layouts')
@section('content')

<table>
	<tr>
		<td>Id</td>
		<td>Логин</td>
		<td>Почта</td>
		<td>Роль</td>
	</tr>
	@foreach($users as $user)
	<tr>
		<td>{{$user -> id}}</td>
		<td>{{$user -> namelogin}}</td>
		<td>{{$user -> email}}</td>
		<td>{{$user -> roles}}</td>
		<td><form method="post" action="{{route('edit', $user -> id)}}">
			@csrf
			<input type="submit" value="Изменить пользователя">
		</form></td>
		<td><form method="post" action="{{route('delete', $user -> id)}}">
			@csrf
			@method('DELETE')
			<input type="submit" value="Удалить пользователя">
		</form></td>
	</tr>
	@endforeach
</table>
</form>
@extends('layouts')
@section('content')
<div>
<table style="border-collapse:collapse;border:3px solid black;">
	<tr>
		<td style="border:1px solid black;">Id</td>
		<td style="border:1px solid black;">Логин</td>
		<td style="border:1px solid black;">Почта</td>
		<td style="border:1px solid black;">Роль</td>
		<td style="border:1px solid black;">Дата создания профиля</td>
		<td style="border:1px solid black;">Изменить пользователя</td>
		<td style="border:1px solid black;">Удалить пользователя</td>
	</tr>
	@foreach($users as $user)
	<tr>
		<td style="border:1px solid black;">{{$user -> id}}</td>
		<td style="border:1px solid black;">{{$user -> name}}</td>
		<td style="border:1px solid black;">{{$user -> email}}</td>
		<td style="border:1px solid black;">{{$user -> roles}}</td>
		<td style="border:1px solid black;">{{$user -> created_at}}</td>
		<td style="border:1px solid black;"><form method="post" action="{{route('edit', $user -> id)}}">
			@csrf
			<input type="submit" value="Изменить пользователя">
		</form></td>
		<td style="border:1px solid black;"><form method="post" action="{{route('delete', $user -> id)}}">
			@csrf
			@method('DELETE')
			<input type="submit" value="Удалить пользователя">
		</form></td>
	</tr>
	@endforeach
</table>
</div>
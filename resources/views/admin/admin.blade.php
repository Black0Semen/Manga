@extends('layouts')
@section('content')

<button> Разбор обратной связи</button>
<button> Админ-Панель</button>
<button> Расмотрение заявок</button>
<table>
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

		<td>{{$user -> id}}</td>
		<td>{{$user -> name}}</td>
		<td>{{$user -> email}}</td>
		<td>{{$user -> roles}}</td>
		<td>{{$user -> created_at}}</td>
		<td><form method="post" action="{{route('edit', $user -> id)}}">
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
@extends('layouts')
@section('content')

<form method="post"> 
    @csrf 
    <br>    <br>    <br>    <br>    <br>    <br>
    <b>Название:</b>
    <input type='text' id="title" name="title"><br>

    <b>Тип:</b>
    <div class="checkselect">
		<label><input type="checkbox" name="brands[]" value="1" checked> Google Inc.</label>
		<label><input type="checkbox" name="brands[]" value="2"> Apple Inc.</label>
		<label><input type="checkbox" name="brands[]" value="3"> Microsoft</label>
		<label><input type="checkbox" name="brands[]" value="4"> Facebook</label>
		<label><input type="checkbox" name="brands[]" value="5"> Amazon</label>
		<label><input type="checkbox" name="brands[]" value="6"> Verizon</label>
	</div>

    <b>Тэги:</b>
    <div class="checkselect">
		<label><input type="checkbox" name="brands[]" value="1" checked> Google Inc.</label>
		<label><input type="checkbox" name="brands[]" value="2"> Apple Inc.</label>
		<label><input type="checkbox" name="brands[]" value="3"> Microsoft</label>
		<label><input type="checkbox" name="brands[]" value="4"> Facebook</label>
		<label><input type="checkbox" name="brands[]" value="5"> Amazon</label>
		<label><input type="checkbox" name="brands[]" value="6"> Verizon</label>
	</div>

    <b>Год релиза:</b>
    <input type="text" name="date" id="date"><br>

    <b>Жанры: </b>
    <div class="checkselect">
		<label><input type="checkbox" name="brands[]" value="1" checked> Google Inc.</label>
		<label><input type="checkbox" name="brands[]" value="2"> Apple Inc.</label>
		<label><input type="checkbox" name="brands[]" value="3"> Microsoft</label>
		<label><input type="checkbox" name="brands[]" value="4"> Facebook</label>
		<label><input type="checkbox" name="brands[]" value="5"> Amazon</label>
		<label><input type="checkbox" name="brands[]" value="6"> Verizon</label>
	</div>

    <b>Команда переводчиков:</b>
    <select name="team">
        @foreach(App\Models\Team::all() as $value)
        <option value="{{$value->title}}">{{$value->title}}</option>
        @endforeach
    </select><br>

    <b>статус перевода:</b>
    <div class="checkselect">
		<label><input type="checkbox" name="brands[]" value="1" checked> Google Inc.</label>
		<label><input type="checkbox" name="brands[]" value="2"> Apple Inc.</label>
		<label><input type="checkbox" name="brands[]" value="3"> Microsoft</label>
		<label><input type="checkbox" name="brands[]" value="4"> Facebook</label>
		<label><input type="checkbox" name="brands[]" value="5"> Amazon</label>
		<label><input type="checkbox" name="brands[]" value="6"> Verizon</label>
	</div>

    <b>Возрастные ограничения:</b>
    <div class="checkselect">
		<label><input type="checkbox" name="brands[]" value="1" checked> Google Inc.</label>
		<label><input type="checkbox" name="brands[]" value="2"> Apple Inc.</label>
		<label><input type="checkbox" name="brands[]" value="3"> Microsoft</label>
		<label><input type="checkbox" name="brands[]" value="4"> Facebook</label>
		<label><input type="checkbox" name="brands[]" value="5"> Amazon</label>
		<label><input type="checkbox" name="brands[]" value="6"> Verizon</label>
	</div>

    <b>Ссылка на оригинал</b>
    <input type="text" name="link" id="link"><br>

    <b>Описание</b>
    <input type="text" name="opisanie", id="opisanie">

    <input type="submit" value="Добавить">
</form>
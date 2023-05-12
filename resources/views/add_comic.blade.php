@extends('layouts')
@section('content')
<div class="add_comic">
    <form>
        <p>Название: </p><input type="text">
        <p>Английское название: </p> <input type="text">
        <p> Другое название: </p> <input type="text">
        <p> Описание </p> <input type="text">
        <p> Тип </p>
        <select>
        @foreach(\App\Models\ComicType::get() as $type)
            <option>{{$type->type}}</option>
            @endforeach
        </select>
        <p> Статус перевода </p>
        <div class="checkselect">
		<label><input type="checkbox" name="brands[]" value="1" checked> Google Inc.</label>
		<label><input type="checkbox" name="brands[]" value="2"> Apple Inc.</label>
		<label><input type="checkbox" name="brands[]" value="3"> Microsoft</label>
		<label><input type="checkbox" name="brands[]" value="4"> Facebook</label>
		<label><input type="checkbox" name="brands[]" value="5"> Amazon</label>
		<label><input type="checkbox" name="brands[]" value="6"> Verizon</label>
	</div>
        <p> Возрастное ограничение </p>
        <div class="checkselect">
		<label><input type="checkbox" name="brands[]" value="1" checked> Google Inc.</label>
		<label><input type="checkbox" name="brands[]" value="2"> Apple Inc.</label>
		<label><input type="checkbox" name="brands[]" value="3"> Microsoft</label>
		<label><input type="checkbox" name="brands[]" value="4"> Facebook</label>
		<label><input type="checkbox" name="brands[]" value="5"> Amazon</label>
		<label><input type="checkbox" name="brands[]" value="6"> Verizon</label>
	</div>
        <p> Год выпуска </p> <input type="text">
        <p> Жанры </p>
        <div class="checkselect">
		<label><input type="checkbox" name="brands[]" value="1" checked> Google Inc.</label>
		<label><input type="checkbox" name="brands[]" value="2"> Apple Inc.</label>
		<label><input type="checkbox" name="brands[]" value="3"> Microsoft</label>
		<label><input type="checkbox" name="brands[]" value="4"> Facebook</label>
		<label><input type="checkbox" name="brands[]" value="5"> Amazon</label>
		<label><input type="checkbox" name="brands[]" value="6"> Verizon</label>
	</div>
        <p> Категории </p>
        <div class="checkselect">
		<label><input type="checkbox" name="brands[]" value="1" checked> Google Inc.</label>
		<label><input type="checkbox" name="brands[]" value="2"> Apple Inc.</label>
		<label><input type="checkbox" name="brands[]" value="3"> Microsoft</label>
		<label><input type="checkbox" name="brands[]" value="4"> Facebook</label>
		<label><input type="checkbox" name="brands[]" value="5"> Amazon</label>
		<label><input type="checkbox" name="brands[]" value="6"> Verizon</label>
	</div>
        <p> Ссылка на оригинал </p> <input type="text">
        <p> Сообщение модератору </p> <input type="text">
    </form>
</div>
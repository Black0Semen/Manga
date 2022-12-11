@extends('layouts')
@section('content')

  <form>
   <div class="osnova">
	<div class="Nadpisi_Form">
	 <p class="upside">Название:</p>
	 <p id="redown">Описание:</p>
	 <p class="redown">Ссылка на оригинал:</p>
	 <p class="redown">Сумма:</p>
	 <p class="redown">Срок:</p>
	 <p class="redown downside">Дата создания:</p>
	</div>
	<div>
	 <input type="text" class="texting upside">
	 <input type="text" class="texting">
	 <input type="text" class="texting">
	 <input type="number" class="texting">
	 <input type="date" class="texting">
	 <input type="date" class="texting downside">
	</div>
	<button class="Button_Vib_order" tabindex="0" type="button" aria-selected="true">
                    <span class="Views">
                        Отправить
                    </span>
                </button>
   </div>
  </form>
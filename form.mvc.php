<label for="Название">Название</label>
<input type="text" id="Название" name="Название" value="{{ Servic['Название'] }}">
<label for="Продолжительность_дней">Продолжительность_дней</label>
<input type="text" id="Продолжительность_дней" name="Продолжительность_дней" value="{{ Servic['Продолжительность_дней'] }}">
<label for="Цена_руб">Цена_руб</label>
<input type="text" id="Цена_руб" name="Цена_руб" value="{{ Servic['Цена_руб'] }}">
<label for="Вид_услуги">Вид_услуги</label>
<input type="text" id="Вид_услуги" name="Вид_услуги" value="{{ Servic['Вид_услуги'] }}">

{% if (isset($errors["Название"])): %}
<p>{{ errors["Название"] }}</p>
{% endif; %}


<button>Сохранить</button>
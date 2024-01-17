<div>
	<label for="Name">Имя</label>
	<input type="text" id="Name" name="Name" value="{{ user['Name'] }}">
</div>
<div>
	<label for="Email">Email</label>
	<input type="email" id="Email" name="Email" value="{{ user['Email'] }}">
</div>
<div>
	<label for="Password">Пароль</label>
	<input type="password" id="Password" name="Password" value="{{ user['Password'] }}">
</div>


<div><button>Сохранить</button></div>
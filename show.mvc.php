{% extends "base.mvc.php" %}

{% block title %}Услуга{% endblock %}

{% block body %}
<link rel="stylesheet" type="text/css" href="styles.css">
<h1>Название: {{ Servic["Название"] }}</h1> 
<h1>Цена: {{ Servic["Цена_руб"] }}</h1>
<h1>Продолжительность: {{ Servic["Продолжительность_дней"] }}</h1>
<h1>Вид: {{ Servic["Вид_услуги"] }}</h1>


<p><a href="/Services/{{ Servic['id'] }}/edit">Изменить</a></p>

<p><a href="/Services/{{ Servic['id'] }}/delete">Удалить</a></p>

<p><a href="/Services">Назад</a></p>
{% endblock %}
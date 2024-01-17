{% extends "base.mvc.php" %}




{% block title %}Products{% endblock %}


{% block body %}


<header>
    <div class="header">
        <div class="logo">
            <img src="https://img.freepik.com/premium-vector/cottage-simple-line-art-logo-village-logo-vector-illustration-design_557569-137.jpg" alt="Логотип">
        </div>
        <div class="slogan">В деревне круто, приезжайте кидать снег лопатой!</div>
        <div class="user-section">
            <div class="search">
                <input type="text" placeholder="Поиск">
                <button>Искать</button>
            </div>
            <div class="login">
                <a href="/user/regform">Авторизация</a>
            </div>
        </div>
    </div>
    <hr>
    <div class="nav-links">
        <a href="http://127.0.0.1:5500/www/main.html">Главная</a>

        <a href="http://127.0.0.1:5500/www/Offers.html">Акции и предложения</a>
       
        <a href="#">Отзывы</a>
    </div>
    <hr>
</header>




<main class="wrapper">
	<a href="/Services/new">
		<section class="section Servic-block ">
			Добавить новую услугу
		</section>
	</a>

	<!-- <section class="section ">
		<p><a href="/услуги/delete{id}">Delete</a></p>

	</section>
	<section class="section ">
		<p><a href="/услуги/edit">Edit</a></p>
	</section> -->

	{% foreach ($Services as $Servic): %}
	<a href="/Services/{{ Servis['id'] }}/show">
		<section class="section Servic-block">

			<p class="Servic-block__title">{{ Servic["Название"] }}</p>


		</section>
	</a>







	{% endforeach; %}
</main>
<footer>
        <p align="center">Агротуризм "Турик-в-Нурик" &copy; 2023</p>
    </footer>

{% endblock %}
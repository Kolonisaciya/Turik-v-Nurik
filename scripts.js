document.addEventListener('DOMContentLoaded', function () {
    function createSlider(container) {
        const slides = container.querySelectorAll('.slide');
        let currentIndex = 0;

        function updateSlider() {
            slides.forEach((slide, index) => {
                slide.style.display = index === currentIndex ? 'block' : 'none';
            });
        }

        container.querySelector('.next').addEventListener('click', function () {
            currentIndex = (currentIndex + 1) % slides.length;
            updateSlider();
        });

        updateSlider(); // Показать первую картинку
    }

    const containers = document.querySelectorAll('.image-container');
    containers.forEach(createSlider);
});

const form = document.querySelector('.my-form');
const firstNameInput = form.querySelector('#firstName');
const lastNameInput = form.querySelector('#lastName');
const emailInput = form.querySelector('#email');
const passwordInput = form.querySelector('#password');
const confirmPasswordInput = form.querySelector('#confirmPassword');

form.addEventListener('submit', (evt) => {
    evt.preventDefault();

    const firstName = firstNameInput.value;
    const lastName = lastNameInput.value;
    const email = emailInput.value;
    const password = passwordInput.value;
    const confirmPassword = confirmPasswordInput.value;

    if (!isValidPassword(password)) {
        alert('Пароль должен содержать как минимум одну заглавную букву, одну строчную букву и одну цифру');
        return;
    }  
    if (password !== confirmPassword) {
        alert('Пароли не совпадают');
        return;
    }
  

    
    form.submit();
    function isValidPassword(password) {
        // Проверка пароля регулярным выражением
        const pattern = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])[a-zA-Z0-9]{8,20}$/;
        return pattern.test(password);
      }
      
});


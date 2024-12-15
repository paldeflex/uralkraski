<x-guest-layout title="Регистрация" bodyClass="page-signup">
        <h1 class="auth-page-title">Регистрация</h1>
        <form action="" method="post">
            <div class="form-group">
                <input type="email" placeholder="Электронная почта"/>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Пароль"/>
            </div>
            <div class="form-group">
                <input type="password" placeholder="Повторить пароль"/>
            </div>
            <hr/>
            <div class="form-group">
                <input type="text" placeholder="Имя"/>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Фамилия"/>
            </div>
            <div class="form-group">
                <input type="text" placeholder="Телефон"/>
            </div>
            <button class="btn btn-primary btn-login w-full">Зарегистрироваться</button>
        </form>
        <x-slot:footerLink>
            <div class="login-text-dont-have-account">
                Уже есть аккаунт? -
                <a href="/login.html"> Нажмите сюда чтобы войти </a>
            </div>
        </x-slot:footerLink>
</x-guest-layout>

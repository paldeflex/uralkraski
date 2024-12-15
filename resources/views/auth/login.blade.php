<x-guest-layout title="Вход" bodyClass="page-login">
    <h1 class="auth-page-title">Вход</h1>
    <form action="" method="post">
        <div class="form-group">
            <input type="email" placeholder="Электронная почта"/>
        </div>
        <div class="form-group">
            <input type="password" placeholder="Пароль"/>
        </div>
        <div class="text-right mb-medium">
            <a href="/password-reset.html" class="auth-page-password-reset"
            >Сброс пароля</a
            >
        </div>
        <button class="btn btn-primary btn-login w-full">Войти</button>
    </form>
    <x-slot:footerLink>
        <div class="login-text-dont-have-account">
            Нет аккаунта? -
            <a href="/signup.html"> Нажмите сюда для регистрации</a>
        </div>
    </x-slot:footerLink>
</x-guest-layout>

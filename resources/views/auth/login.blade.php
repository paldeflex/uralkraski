@extends('layouts.clean', ['cssClass' => 'page-login'])

@section('title', 'Вход')

@section('childContent')
    <main>
        <div class="container-small page-login">
            <div class="flex" style="gap: 5rem">
                <div class="auth-page-form">
                    <div class="text-center">
                        <a href="/">
                            <img src="/img/logo-dark.jpg" alt="Логотип" style="width: 400px" />
                        </a>
                    </div>
                    <h1 class="auth-page-title">Вход</h1>

                    <form action="" method="post">
                        <div class="form-group">
                            <input type="email" placeholder="Электронная почта" />
                        </div>
                        <div class="form-group">
                            <input type="password" placeholder="Пароль" />
                        </div>
                        <div class="text-right mb-medium">
                            <a href="/password-reset.html" class="auth-page-password-reset"
                            >Сброс пароля</a
                            >
                        </div>

                        <button class="btn btn-primary btn-login w-full">Войти</button>

                        <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                            <button
                                class="btn btn-default flex justify-center items-center gap-1"
                            >
                                <img src="/img/yandex.png" alt="" style="width: 20px" />
                                Yandex
                            </button>
                            <button
                                class="btn btn-default flex justify-center items-center gap-1"
                            >
                                <img src="/img/telegram.png" alt="" style="width: 20px" />
                                Telegram
                            </button>
                        </div>
                        <div class="login-text-dont-have-account">
                            Нет аккаунта? -
                            <a href="/signup.html"> Нажмите сюда для регистрации</a>
                        </div>
                    </form>
                </div>
                <div class="auth-page-image">
                    <img src="/img/signupimage.png" alt="" class="img-responsive" />
                </div>
            </div>
        </div>
    </main>
@endsection

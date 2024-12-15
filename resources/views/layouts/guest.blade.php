@props(['title' => '', 'bodyClass' => ''])

<x-base-layout :$title :$bodyClass>
    <main>
        <div class="container-small page-signup">
            <div class="flex" style="gap: 5rem">
                <div class="auth-page-form">
                    <div class="text-center">
                        <a href="/">
                            <img src="/img/logo-dark.jpg" alt="Логотип" style="width: 400px"/>
                        </a>
                    </div>
                    {{ $slot }}
                    <div class="grid grid-cols-2 gap-1 social-auth-buttons">
                        <x-yandex-button/>
                        <x-telegram-button/>
                    </div>
                    @isset($footerLink) {{ $footerLink }} @endisset
                </div>
                <div class="auth-page-image">
                    <img src="/img/signupimage.png" alt="" class="signup-img img-responsive"/>
                </div>
            </div>
        </div>
    </main>
</x-base-layout>

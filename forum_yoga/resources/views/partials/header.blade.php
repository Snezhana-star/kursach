<nav class="font-sans flex flex-col text-center content-center sm:flex-row sm:text-left sm:justify-between py-2 px-6 bg-white shadow sm:items-baseline w-full">
    <div class="mb-2 sm:mb-0 inner">

        <a href="{{ route("welcome") }}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">YOGA MASTER</a><br>
        <a href="{{ route("posts.index") }}" class="text-2xl no-underline text-grey-darkest hover:text-blue-dark font-sans font-bold">Все статьи</a><br>

        @auth("web")
            <a href="{{ route("logout") }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Выйти</a>
            <a href="{{ route("user.show", ["id"=>auth()->user()->id]) }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Личный кабинет</a>
        @endauth

        @guest("web")
            <a href="{{ route("login") }}" class="text-md no-underline text-grey-darker hover:text-blue-dark ml-2 px-1">Войти</a>
        @endguest


    </div>

    <div class="sm:mb-0 self-center">

    </div>
</nav>

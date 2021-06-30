@extends('layouts/app')
@section('title')
    Qalamger.kz
@endsection

@section('content')
   
    <main class="hero">
        <div class="container hero__row">
            <article class="hero__text">
                <h1 class="big-title">А вы знаете что такое Qalamger.kz ?</h1>
                <p class="big-description mt-3">Qalamger.kz - это общая плошадька для всех поэтов и рассказщиков вы здесь можете читать и создать жизненные историй или поэты</p>
                <div class="btn__group mt-2">
                    <a href="" class="btn mr-4">Регистрация</a>
                    <a href="" class="btn btn-outline">Войти</a>
                </div>
            </article>
            <article class="hero__img">
                <img src="img/boy.png" alt="">
            </article>
        </div>
    </main>

    <div class="middle container">
        <div class="middle__part1 parts">
            <img src="img/rate 1.png" alt="" class="icon">
            <h3 class="topic">Система Фильраций для всех</h3>
            <p class="sub-topic">Наша система рекомендаций предлагает вам подходящие интересные цитаты</p>
        </div>
        <div class="middle__part2 parts">
            <img src="img/no 1.png" alt="" class="icon">
            <h3 class="topic">Никаких ограничений по творчеству</h3>
            <p class="sub-topic">Вы можете писать все ваши идей или другие ваши предпочтение в этом сайте</p>
        </div>
        <div class="middle__part3 parts">
            <img src="img/approval 1.png" alt="" class="icon">
            <h3 class="topic">Удобная плартформа без трудностей</h3>
            <p class="sub-topic">Можете не волноваться по поводу навязшивих рекламы проект в вервую очеред для вас </p>
        </div>
    </div>

    <!-- <div>
        {{$poemas}}
    </div> -->
   
        <div class="q2 container">
            <div class="question-top">
            @foreach($poemas as $poema)
                <img src="img/Ellipse 4.png" alt="" class="user-icon uc">
                <p class="user-name uc">Бакдаулет Болат</p>
                <h1 class="x uc">Почему я так думаю ?</h1>
                <p class="uc">18.04.2019</p>
            </div>
            <div>
                <p class="txt mid">Я думаю что нам нужно больше думать о будущем и не тратить время для осталного как видите мы уже переросли этап развитие такого Я думаю что нам нужно больше думать о будущем и не тратить время для осталного как видите мы уже переросли этап развитие такого Я думаю что нам нужно больше думать о будущем и не тратить время для осталного как видите мы уже переросли этап развитие такого</p>
            <div class="midd">

                <img src="img/heart 1.png" alt="" class="mid"><p class="mid">25</p>
                <img src="img/comment 1.png" alt="" class="mid"><p class="mid">117</p>
            </div>
            <div class="comment">
                <div class="comment-user">
                     <img src="img/Ellipse 4.png" alt="" class="user-icon">
                    <p class>Дияр шавкатов</p>
                    <img src="img/top-alignment 1.png" alt="" class="top-alignment">
                </div>
                <p class="comment-txt">Я полностью согласен с тобой</p>
                @endforeach
            </div>
        </div>
        </div>
    </div>
@endsection

@extends('layout')

@section('title', $page->title.' - '.$page->title_d)

@section('meta_description', $page->meta_d)

@section('content')
  <!-- Content -->
  <div class="page-services">
    <div class="container">
      <br><h2 class="text-center text-uppercase">Услуги</h2><br>
      <ul class="nav nav-pills">
        <li class="col-md-3 col-sm-3 col-xs-6 {{ (Request::is('services/it-outsourcing') ? 'active' : null) }}"><a href="{{ URL::to('services/it-outsourcing') }}" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-keyboard-o fa-5x"></i><br><b>IT</b> Аутсорсинг</a></li>
        <li class="col-md-3 col-sm-3 col-xs-6 {{ (Request::is('services/site-development') ? 'active' : null) }}"><a href="{{ URL::to('services/site-development') }}" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-html5 fa-5x"></i><br>Создание Сайтов</a></li>
        <li class="col-md-3 col-sm-3 col-xs-6 <?php echo ($service == 'seo-smm') ? 'active' : null; ?>"><a href="{{ URL::to('services/seo-smm') }}" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-line-chart fa-5x"></i><br><b>SEO</b> &amp; <b>SMM</b></a></li>
        <li class="col-md-3 col-sm-3 col-xs-6 <?php echo ($service == 'training-center') ? 'active' : null; ?>"><a href="{{ URL::to('services/training-center') }}" class="text-center text-uppercase" data-toggle="tab"><i class="fa fa-mortar-board fa-5x"></i><br>Учебный Центр</a></li>
      </ul><br>
      <div id="myTabContent" class="tab-content">
        <div class="tab-pane fade <?php echo ($service == 'it-outsourcing') ? 'active in' : null; ?>" id="it-outsourcing">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12"><h1>IT - OUTSOURCING</h1></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><h1>IT - OUTSOURCING</h1></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><h1>IT - OUTSOURCING</h1></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><h1>IT - OUTSOURCING</h1></div>
          </div>
        </div>
        <div class="tab-pane fade <?php echo ($service == 'site-development') ? 'active in' : null; ?>" id="site-development">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/cabin.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/cake.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/circus.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/game.png"></div>
          </div>
        </div>
        <div class="tab-pane fade <?php echo ($service == 'seo-smm') ? 'active in' : null; ?>" id="seo-smm">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/circus.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/cabin.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/cake.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/game.png"></div>
          </div>
        </div>
        <div class="tab-pane fade <?php echo ($service == 'training-center') ? 'active in' : null; ?>" id="training-center">
          <div class="row">
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/cake.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/cabin.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/game.png"></div>
            <div class="col-md-3 col-sm-6 col-xs-12"><img class="img-responsive" src="http://startbootstrap.com/templates/freelancer/img/portfolio/circus.png"></div>
          </div>
        </div>
        <div class="tab-pane fade" id="calculator">
          <div class="row">
            
          </div>
        </div>
      </div>
      {{ $page->text }}

    </div>
  </div>
@stop




      <div class="col-md-6">
        <h3 class="">Контролируемые затраты на капитал.</h3>
        <p>Аутсорсинг освобождает капитал для инвестиций в ваш бизнес, и позволяет избежать больших затрат на ранних стадиях Вашего бизнеса.</p>

        <h3 class="">Снижение Накладных Расходов.</h3>
        <p>Накладные расходы, связанные с выполнением определенной бэк-офисных функций, чрезвычайно высоки. Рассмотрим аутсорсинг те функции, которые могут быть перемещены легко.</p>

        <h3 class="">Снижение трудозатрат.</h3>
        <p>Аутсорсинг поможет вам избежать больших затрат на найм и обучение персонала для краткосрочных или периферийных проектов.</p>

        <h3 class="">Квалифицированную Экспертизу.</h3>
        <p>Аутсорсинг предоставляет доступ к квалифицированной ресурсов, которые обеспечивают высокое качество поставляемых поскольку работа делается ими, кто делает это лучше всех.</p>

        <h3 class="">Фокус на ключевых Компетенциях.</h3>
        <p>Аутсорсинг освобождает компании от необходимости управлять непрофильных функций, и ставит фокус на ключевых компетенциях.</p>
      </div>
      <div class="col-md-6">
        <h3>Повышает Производительность И Эффективность.</h3>
        <p>Внешним поставщикам структура затрат и экономии от масштаба производства повышает продуктивность и эффективность для Вашей фирмы и дать ему важное конкурентное преимущество.</p>

        <h3>Оперативный Контроль.</h3>
        <p>Отделы, которые могут с течением томе на неконтролируемые и плохо довольно непродолжительный области могут получить огромную пользу от аутсорсинга.</p>

        <h3>Кадровое Обеспечение Гибкости.</h3>
        <p>Аутсорсинг позволит операций, которые носят сезонный или цикличный требования к привлечению дополнительных ресурсов, когда вы в них нуждается, и отпустите их, когда вы закончите.</p>
      </div>
      <div class="col-md-6">
        <h3>Распределение риска.</h3>
        <p>При определенных функций на аутсорсинг, компании также распространять или от рисков, связанных с управлением этой конкретной функции.</p>

        <h3>Возможность запуска новых проектов быстро.</h3>
        <p>Хорошая аутсорсинговая фирма имеет ресурсы, чтобы запустить проект сразу. обращения одного и того же проекта в доме, возможно, потребует нескольких недель или месяц, чтобы нанять нужных людей, обучить их и обеспечить поддержку, в которой они нуждаются.</p>

        <h3>Доступ к уровню игрового поля.</h3>
        <p>Большинство мелких фирм просто не могу позволить себе, чтобы соответствовать собственной службы поддержки крупных компаний поддерживать. Аутсорсинг может помочь малым фирмам действовать "большой", давая им доступ к тем же масштаба, эффективность и опыт, которые крупные компании пользуются.</p>
      </div>

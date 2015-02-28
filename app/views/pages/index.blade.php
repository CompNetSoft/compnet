@extends('layout')

@section('title', $page->title.' - '.$page->meta_title)

@section('meta_description', $page->meta_description)

@section('content')
  <div class="slider">
    <div class="container">
      <!-- <img src="/img/cosmos-2.jpg" class="img-responsive"> -->
    </div>
  </div>

  <!-- Services -->
  <div class="services">
    <div class="container">
      <div class="row">
      @foreach ($info_blocks as $info_block)
        <div class="col-md-3 col-sm-6 text-center shadow">
          <br>
          <h2 class="text-capitalize">{{ $info_block->title }}</h2>
          <h1><i class="{{ $info_block->image }}"></i></h1>
          <p>{{ $info_block->text }}</p>
          <p><a href="#{{ $info_block->url }}" class="btn btn-outlined btn-more text-uppercase">Подробнее</a></p>
          <br>
        </div>
      @endforeach
      </div>
    </div>
  </div>

  <!-- Dot Navigation -->
  <div data-spy="affix" id="dot-nav">
    <ul>
      <li class="awesome-tooltip" title="IT&nbsp;Аутсорсинг"><a href="#it-outsourcing"></a></li>
      <li class="awesome-tooltip" title="Создание&nbsp;Сайта"><a href="#site-development"></a></li>
      <li class="awesome-tooltip" title="SEO&nbsp;&amp;&nbsp;SMM"><a href="#seo-smm"></a></li>
      <li class="awesome-tooltip" title="Учебный&nbsp;Центр"><a href="#training-center"></a></li>
    </ul>
  </div>

  <section class="bg-dark">
    <br>
    <div class="container" id="it-outsourcing">
      <br><br>
      <h1 class="text-center text-uppercase text-light-coral">IT Аутсорсинг</h1>
      <br>
      <div class="col-md-6">
        <br>
        <img src="{{ asset('/img/it/it-outsourcing.jpg') }}" class="img-responsive">

        <h2 class="text-center">Отзывы</h2>
        <div id="carousel-it-outsourcing-comments" class="carousel slide" data-ride="carousel">

          <!-- Comments -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="text-justify">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-quote-left"></i>&nbsp;<b>АО «Казахстанская Жилищно-Строительная Корпорация»</b> благодарит за высокий профессионализм, проявленный в процессе технической поддержки и сопровождения нашей информационной системы.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Большой опыт и профессионализм в техническом обслуживании серверного оборудования, оргтехники, систем видеонаблюдения, сигнализации, контроля и управления доступом, а также при установке и настройке программного обеспечения и операционных систем, компетентность, быстрое решение вопросов, возникающих в ходе работы, ответственность и доброжелательность персонала сделали сотрудничество с <b>ТОО «CompNet Technologies»</b> приятным, плодотворным и эффективным.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Желаем производственных успехов, экономического и финансового благополучия, укрепления взаимоотношений на благо наших предприятий.&nbsp;<i class="fa fa-quote-right"></i></p>
                <p>С уважением, Генеральный директор <b>А.Ергалиева</b></p>
              </div>
            </div>
            <div class="item">
              <div class="text-justify">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-quote-left"></i>&nbsp;<b>ТОО «Шёлковый путь»</b> выражает благодарность <b>ТОО «CompNet Technologies»</b> за плодотворную работу при создании сервера и локальной компьютерной сети.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;В результате кропотливой работы специалистов <b>ТОО «CompNet Technologies»</b> удалось с первой попытки создать отличную IT-инфраструктуру, которая с незначительными доработками была единогласно принята всем коллективом <b>ТОО «Шёлковый путь»</b>.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;<b>ТОО «CompNet Technologies»</b> зарекомендовало себя как организация, умеющая профессионально и точно выполнять взятые обязательства по техническому обслуживанию парка компьютерной техники, серверного оборудования и оргтехники.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Всё это позволяет считать, что <b>ТОО «CompNet Technologies»</b> – ответственный и надёжный партнёр, в котором трудятся специалисты, хорошо знающие своё дело.&nbsp;<i class="fa fa-quote-right"></i></p>
                <p>С уважением, Генеральный директор <b>Акимов Е.А.</b></p>
              </div>
            </div>
            <div class="item">
              <div class="text-justify">
                <p>&nbsp;&nbsp;&nbsp;&nbsp;<i class="fa fa-quote-left"></i>&nbsp;<b>АО «Корпорация ABE»</b> благодарит команду разработчиков <b>ТОО «CompNet Technologies»</b> за высокое качество и профессионализм работ по созданию и сопровождению локальной компьютерной сети на базе серверного оборудования, оснащённого операционными системами семейства LINIX.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Работа выполнена на высоком профессиональном уровне и вызывает положительные отклики, как среди специалистов, так и среди рядовых пользователей. Локальная компьютерная сеть удобно структурирована, удобна в использовании и обладает значительными функциональными возможностями.</p>
                <p>&nbsp;&nbsp;&nbsp;&nbsp;Отмечая высокий профессионализм сотрудников <b>ТОО «CompNet Technologies»</b>, качество и сжатые сроки выполнения проекта, ответственность и надёжность в партнерских отношениях, мы надеемся, что в дальнейшем наше с Вами сотрудничество будет столь же успешно и плодотворно.&nbsp;<i class="fa fa-quote-right"></i></p>
                <p>С уважением, И.О. Президента <b>Ш.И.Нурманбекова</b></p>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <div class="text-center">
            <span class="fa-stack" data-target="#carousel-it-outsourcing-comments" data-slide="prev">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-chevron-left fa-stack-1x text-dark" aria-hidden="true"></i>
            </span>
            <span class="fa-stack" data-target="#carousel-it-outsourcing-comments" data-slide="next">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-chevron-right fa-stack-1x text-dark" aria-hidden="true"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h3>Экономическая Целесообразность</h3>
        <p class="text-justify">IT-аутсорсинг дешевле, чем поиск и содержание квалифицированного штата сотрудников по нескольким причинам:</p>
        <ul class="text-justify">
          <li>В большинстве случаев при найме IT-персонала в штат своих сотрудников Вы принимаете системного администратора, помощника системного администратора, телефониста. При сотрудничестве с аутсорсинговой компанией у Вас отпадает необходимость в поиске и подборе IT-персонала.</li>
          <li>Стоимость услуг IT-аутсорсинга меньше, чем суммарная зарплата собственного IT-персонала, тем самым достигается ощутимая экономия средств.</li>
          <li>Нет необходимости нести затраты на аренду дополнительной площади для организации рабочих мест IT-персонала и на обустройство рабочих мест.</li>
          <li>В месяц выделяется фиксированная договором сумма, что упрощает финансовое планирование.</li>
        </ul>

        <h3>Профессиональные Специалисты</h3>
        <p class="text-justify">Специалисты аутсорсинговой компании регулярно соприкасаются с новейшими разработками и повышают Свою квалификацию, посещая отраслевые семинары, конференции и курсы. Информационные технологии на сегодняшний – день самая динамично развивающаяся отрасль рынка, и только высокая квалификация сотрудников позволяет компании быть конкурентоспособной.</p>

        <h3>Экономия Времени</h3>
        <p class="text-justify">Ваши проблемы решает группа специалистов, что позволяет работать быстро и эффективно.</p>

        <h3>Конфиденциальность</h3>
        <p class="text-justify">Конфиденциальность может быть оформлена юридически. В отличие от работников Вашей компании, цели и задачи специалистов аутсорсинговой компании сосредоточены и направлены на решение технических и программных задач. Таким образом, наши специалисты не вовлечены в общую стратегию развития обслуживаемой компании и не являются носителями конфиденциальной информации.</p>

        <h3>Стабильность</h3>
        <p class="text-justify">IT-аутсорсинг – это всегда взаимозаменяемость специалистов. Собственный сотрудник, уходя в отпуск или на больничный, как правило, оставляет Вас один на один с Вашими проблемами.</p>
        <p>Не требуется нести расходы на повышение квалификации собственного сотрудника.</p>
        </p>
      </div>

      <!-- BarChart -->
      <div class="hidden-xs col-md-12">
        <br>
        <h2 class="text-center">Преимущества IT Аутсорсинга</h2>
        <div id="chardiv"></div>
      </div>

      <div class="col-md-12">
        <br><br>
        <p class="text-center">
          <a href="{{ route('services', 'it-outsourcing') }}" class="btn btn-outlined btn-order text-uppercase"><i class="fa fa-puzzle-piece"></i> Детально</a>
          <!-- Button trigger modal -->
          <button type="button" class="btn btn-outlined btn-order text-uppercase" data-toggle="modal" data-target="#Calculator">
            <i class="fa fa-calculator"></i> Калькулятор
          </button>
          <!-- <button type="button" class="btn btn-outlined btn-order text-uppercase" data-toggle="modal" data-target=".calculator">
            <i class="fa fa-calculator"></i> Калькулятор
          </button> -->
        </p>
        <br><br>
      </div>
    </div>
  </section>

  <!-- Modal -->
<div class="modal fade bs-example-modal-lg" id="Calculator" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog modal-lg">
    <div class="modal-content bg-dark">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span class="text-muted" aria-hidden="true">&times;</span></button>
        <h2 class="text-center modal-title" id="myModalLabel">Калькулятор</h2>
      </div>
      <div class="modal-body">
        <div id="count">
          <div class="col-md-6 col-sm-12 col-xs-12">
            <h3 class="text-light-coral">Структура сети</h3>
            <input id="priceDepot" type="hidden" value="5000">Количество рабочих станций&nbsp;
            <span class="chevron">
              <i id="leftDepot" class="fa fa-chevron-left"></i> 
              <input id="amountDepot" class="number" type="text" value="0"> 
              <i id="rightDepot" class="fa fa-chevron-right"></i>
            </span>
            <div class="checkbox">
              <label><input type="checkbox" value="5000"> Локальная сеть</label>
            </div>
            <div class="checkbox">
              <label><input id="forLocal" type="checkbox"> Интернет</label>
              <select id="local">
                <option value="1000">ADSL-модем</option>
                <option value="2000">Выделенный канал</option>
              </select>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="3000"> Firewall</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="800"> Принтер</label>
            </div>
            <h3 class="text-light-coral">Программное обеспечение</h3> 
            <div class="checkbox">
              <label><input type="checkbox" value="7000"> Бухгалтерское ПО</label>
            </div>
          </div>
          <div class="col-md-6 col-sm-12 col-xs-12">
            <h3 class="text-light-coral">Роли сервера</h3>
            <div class="checkbox">
              <label><input type="checkbox" value="2000"> Файловый сервер</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="2800"> Сервер домена</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="2000"> Почтовый сервер</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="2000"> Сервер приложений</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="2000"> Сервер терминалов</label>
            </div>
            <div class="checkbox">
              <label><input type="checkbox" value="2000"> Шлюз</label>
            </div>
          </div>
          <div class="col-md-12 col-sm-12 col-xs-12">
            <h3 class="text-light-coral">Создание сайта</h3> 
            <div class="btn-group">
              <button type="button" class="btn btn-primary passive" value="54000">Сайт визитка</button>
              <button type="button" class="btn btn-primary passive" value="89000">Интернет магазин</button>
              <button type="button" class="btn btn-primary passive" value="69000">Landing page</button>
              <button type="button" class="btn btn-primary passive" value="99000">Веб-приложение</button>
            </div>
            <div class="row">
              <br>
              <div class="form-group col-md-3">
                <label class="control-label">Стоимость товара и услуг:</label>
                <input type="text" class="form-control" id="res" value="0" disabled>
              </div>
            </div>
          </div>
          <div class="clearfix"></div>
        </div>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        <button type="button" class="btn btn-primary">Save changes</button>
      </div>
    </div>
  </div>
</div>

  <section class="bg-dark">
    <br>
    <div class="container" id="site-development">
      <br><br>
      <h1 class="text-center text-uppercase text-light-coral">Создание сайтов</h1>
      <br>
      <div class="col-md-6">
        <h3>24/7/365</h3>
        <p class="text-justify">Заказав разработку сайта или приложения, у нас Вы можете рассчитывать на продукт, который будет работать - 24/7/365.</p>

        <h3>Доступность и Удобство</h3>
        <p class="text-justify">Преимущество наших сайтов – адаптивность под все платформы, компьютеры, планшеты, мобильные устройства (Android, iOS, и т.д.) Это очень важно, потому что количество мобильных пользователей в 2013 году превзошло количество пользователей персональных компьютеров.</p>

        <h3>Эффективная Продажа</h3>
        <p class="text-justify">Мы создадим для Вас дизайн сайта с привлекательным внешним видом и высокой конверсией так, чтобы клиенты, познакомившись с Вашей компанией, остались под хорошим впечатлением, делали заказы и поддерживали контакт.</p>

        <h3>Экономия Времени</h3>
        <p class="text-justify">Вам не нужно тратить время на заполнение контента или продвижение сайта – все эти работы мы берём на себя: от разработки сайта до его дальнейшего технического сопровождения и продвижения.</p>

      </div>
      <div class="col-md-6">
        <br>
        <img src="{{ asset('/img/web/responsive.png') }}" class="img-responsive" alt="Responsive Web-Desing">
      </div>
      <div class="col-md-12">
        <br>
        <h3 class="text-center">"Если Вас нет в Интернете, Вас нет в бизнесе"</h3>
        <p class="text-center">Билл Гейтс — американский предприниматель и общественный деятель, филантроп, один из создателей и бывший крупнейший акционер компании Microsoft.</p>
        <br><br>
        <p class="text-center">
          <a href="{{ route('services', 'site-development') }}" class="btn btn-outlined btn-order text-uppercase"><i class="fa fa-puzzle-piece"></i> Детально</a>
          <a href="#" class="btn btn-outlined btn-order text-uppercase"><i class="fa fa-calculator"></i> Калькулятор</a>
        </p>
        <br><br>
      </div>
    </div>
  </section>

  <section class="bg-dark">
    <br>
    <div class="container" id="seo-smm">
      <br><br>
      <h1 class="text-center text-uppercase text-light-coral">SEO &amp; SMM</h1>
      <br>
      <div class="col-md-6 col-sm-6">
        <h2 class="text-center">SEO (Search Engine Optimization) Поисковая Оптимизация</h2>
        <br>
        <div class="col-md-12 col-sm-12 col-xs-12">
          <img src="{{ asset('/img/se/google.png') }}" class="img-responsive" title="Google" alt="Google">
        </div>
        <p class="col-md-12 col-sm-12 col-xs-12"></p>
        <div class="col-md-offset-2 col-sm-offset-2 col-xs-offset-2 col-md-8 col-sm-8 col-xs-8">
          <img src="{{ asset('/img/se/mail.ru.png') }}" class="img-responsive" title="Mail.ru" alt="Mail.ru">
        </div>
        <p class="col-md-12"></p>
        <p class="clearfix"></p>
        <p class="text-justify">Чем выше позиция вашего сайта в выдаче поисковика, тем больше вероятность, что посетитель зайдёт на сайт, так как примерно 100% заходит по первым трём ссылкам поисковой выдачи, далее тенденция к уменьшению – до десятой ссылки первой страницы выдачи добираются 20-50% пользователей.</p>
        <p class="text-justify">На вторую страницу выдачи поиковика заходят 10-20%. Следовательно, для всякого ресурса наиболее желанно место именно в первой десятке поисковой выдачи. Но, к сожалению, сайтов-конкурентов слишком много, а десятка всего одна. Появляется резонный вопрос: как же покорить это вершину и выбиться в лидеры? И тут SEO-оптимизация сайта приходит на помощь.</p>
      </div>
      <div class="col-md-6 col-sm-6">
        <h2 class="text-center">SMM (Social Media Marketing) Продвижение в Соц. Медиа</h2>
        <br>
        <img src="{{ asset('/img/sn/facebook.png') }}" class="col-md-4 col-sm-4 col-xs-4" title="Facebook" alt="Facebook">
        <img src="{{ asset('/img/sn/twitter.png') }}" class="col-md-4 col-sm-4 col-xs-4" title="Twitter" alt="Twitter">
        <img src="{{ asset('/img/sn/vk.png') }}" class="col-md-4 col-sm-4 col-xs-4" title="Vkontakte" alt="Vkontakte">
        <p class="col-md-12 col-sm-12 col-xs-12"><br></p>
        <img src="{{ asset('/img/sn/google-plus.png') }}" class="col-md-3 col-sm-3 col-xs-3" title="Google Plus" alt="Google Plus">
        <img src="{{ asset('/img/sn/linkedin.png') }}" class="col-md-3 col-sm-3 col-xs-3" title="LinkedIn" alt="LinkedIn">
        <img src="{{ asset('/img/sn/instagram.png') }}" class="col-md-3 col-sm-3 col-xs-3" title="Instagram" alt="Instagram">
        <img src="{{ asset('/img/sn/odnoklassniki.png') }}" class="col-md-3 col-sm-3 col-xs-3" title="Odnoklassniki" alt="Odnoklassniki">
        <p class="clearfix"></p>
        <p class="text-justify">SMM - деятельность, целью которой является продвижение товара или бренда в социальных сетях. Увеличить узнаваемость, а так же лояльность клиентов к бренду. Продвижение в социальных сетях – это процесс, целью которого является привлечь аудиторию в сообщество бренда. Донести до целевой аудиторий ключевые преимущества предлагаемых товаров и услуг (цена, качество и другие).</p>
        <p class="text-justify">Если раньше продвижение бренда совершалась по средством телерекламы, сейчас актуально через социальные сети. Как показывает статистика одной социальной сети, больше всех в социальных сетях зарегистрированы люди от 18-34 лет.</p>
      </div>
      <div class="col-md-12 col-sm-12">
        <br><br>
        <p class="text-center">
          <a href="{{ route('services', 'seo-smm') }}" class="btn btn-outlined btn-order text-uppercase"><i class="fa fa-puzzle-piece"></i> Детально</a>
          <a href="#" class="btn btn-outlined btn-order text-uppercase"><i class="fa fa-calculator"></i> Калькулятор</a>
        </p>
        <br><br>
      </div>
    </div>
  </section>

  <section class="bg-dark">
    <br>
    <div class="container" id="training-center">
      <br><br>
      <h1 class="text-center text-uppercase text-light-coral">Учебный центр</h1>
      <br>
      <div class="col-md-6">
        <br>
        <img src="{{ asset('/img/tc/network.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-6">
        <h2 class="text-center">Системное администрирование</h2>
        <p class="text-justify">При ТОО «CompNet Technologies» действует Учебный центр, где Вы можете получить всю информацию, знания и навыки работы системного администрирования. Курс рассчитан как для начинающих системных администраторов, так и для слушателей, которые уже приобрели навыки управления системой и сетью, для усовершенствования своих знаний.</p>
        <p class="text-justify">Системный администратор ежедневно работает с множеством технологий, которые всё время меняются и развиваются. Это стимулирует постоянно совершенствоваться. Если Вам всегда было интересно разбираться в том, как устроены вещи, понимать взаимосвязи, а ещё Вы давно увлечены компьютерами – профессия системного администратора будет Вам близка по духу.</p>
      </div>

      <div class="clearfix"></div>
      <div class="col-md-12">
        <br><br>
      </div>

      <div class="col-md-6">
        <h2 class="text-center">Web Программирование</h2>
        <p class="text-justify">Вы пройдёте обучение веб-программированию с самых азов, постепенно ознакамливаясь с принципами и технологиями веб-программирования. Познакомитесь с миром «WEB», начиная с изучения клиентских технологии: HTML, CSS, JavaScript и серверных языков программирования PHP, Ruby, SQL. На основе этих языков, также изучим современные, передовые фреймворки Ruby On Rails и Laravel. Будут занятия по системе контроля версиями git(GitHub), алгоритмам, пакетным меннеджерам и о многом другом.</p>
        <p class="text-justify">В процессе обучения веб-программированию слушатели будут активно вовлечены в процесс обучения. Домашние задания и практические упражнения помогут успешно освоить теоретическую часть программы курса.</p>
      </div>
      <div class="col-md-6">
        <br>
        <img src="{{ asset('/img/tc/code.jpg') }}" class="img-responsive">
      </div>
      <div class="col-md-12">
        <br><br>
        <p class="text-center">Приведите друга и получите скидку 10% для Вас и для Вашего друга.</p>
        <p class="text-center">Чтобы записаться на эту программу обучения достаточно обратиться в Учебный Центр при ТОО «CompNet Technologies» для заключения договора и в кратчайшие сроки приступить к изучению курса.</p>
        <br>
        <p class="text-center">
          <a href="{{ route('services', 'training-center') }}" class="btn btn-outlined btn-order text-uppercase"><i class="fa fa-puzzle-piece"></i> Детально</a>
          <a href="#" class="btn btn-outlined btn-order text-uppercase"><i class="fa fa-calculator"></i> Калькулятор</a>
        </p>
        <br><br>
      </div>
    </div>
  </section>

  <div class="about">
    <div class="container">
      <br><br>

      <div class="col-md-3">
        <br>
        <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">

          <!-- Comments -->
          <div class="carousel-inner" role="listbox">
            <div class="item active">
              <div class="">
                <p class="text-light-coral">
                  <i class="fa fa-quote-left"></i>&nbsp;
                  Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                  tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                  quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                  consequat.
                  &nbsp;<i class="fa fa-quote-right"></i>
                </p>
              </div>
            </div>
            <div class="item">
              <div class="">
                <p class="text-light-coral">
                  <i class="fa fa-quote-left"></i>&nbsp;
                  Duis aute irure dolor in reprehenderit in voluptate velit esse
                  cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                  proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  &nbsp;<i class="fa fa-quote-right"></i>
                </p><br>
              </div>
            </div>
          </div>

          <!-- Controls -->
          <div class="text-center">
            <span class="fa-stack" data-target="#carousel-example-generic" data-slide="prev">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-chevron-left fa-stack-1x fa-inverse" aria-hidden="true"></i>
            </span>
            <span class="fa-stack" data-target="#carousel-example-generic" data-slide="next">
              <i class="fa fa-circle fa-stack-2x"></i>
              <i class="fa fa-chevron-right fa-stack-1x fa-inverse" aria-hidden="true"></i>
            </span>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <h1 class="text-center text-uppercase text-light-coral">
          Сделано в CompNet Сделано с<br>
          <span class="fa-stack fa-3x">
            <i class="fa fa-heart fa-stack-2x"></i>
            <i class="fa fa-you fa-stack-1x fa-inverse"></i>
          </span>
        </h1>
      </div>
      <div class="col-md-3 text-center">
        <h2>Поделитесь новостями о нас, и получите скидку!</h2>

      </div>
      <div class="clearfix"></div>
      <br><br>


      <div class="col-md-12">
        {{ $page->text }}
      </div>
    </div>
    <br><br><br>
  </div>

  <div class="bg-light-grey">
    <div class="container">
      <br><br><br>
      <h1 class="text-center text-uppercase"><i class="fa fa-cog fa-2x fa-spin"></i> Как мы работаем</h1>
      <br><br>
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <i class="fa fa-check-circle fa-5x"></i><br>
        <h4 class=""><b>1</b><br> Получаем заявку</h4><br>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <i class="fa fa-comments fa-5x"></i><br>
        <h4 class=""><b>2</b><br> Консультация</h4><br>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <i class="fa fa-rocket fa-5x"></i><br>
        <h4 class=""><b>3</b><br> Исследование</h4><br>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <i class="fa fa-cogs fa-5x"></i><br>
        <h4 class=""><b>4</b><br> Выполняем работу</h4><br>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12 text-center">
        <i class="fa fa-money fa-5x"></i><br>
        <h4 class=""><b>5</b><br> Принимаем оплату</h4><br>
      </div>
      <div class="col-md-2 col-sm-4 col-xs-12 text-center text-success">
        <i class="fa fa-smile-o fa-5x"></i><br>
        <h4 class=""><b>6<br> Получаем довольного клиента</b></h4><br>
      </div>
    </div>
    <br><br><br>
  </div>

  <div class="container">
    <br><br><br>
    <h1 class="text-center text-uppercase">Свяжитесь с нами</h1>
    <br>
    <div class="col-md-4 col-sm-4">
      <h2 class="text-center"><i class="fa fa-map-marker fa-2x"></i></h2>
      <p class="text-center">г. Алматы, Ул. Абылай хана, дом № 34, офис 300 (уг. ул.Маметовой)</p>
      <br>
    </div>
    <div class="col-md-4 col-sm-4">
      <h2 class="text-center"><i class="fa fa-mobile fa-2x"></i></h2>
      <p class="text-center">+7 (727) 279 71 73</p>
      <p class="text-center">+7 (727) 317 94 79</p>
    </div>
    <div class="col-md-4 col-sm-4">
      <h2 class="text-center"><i class="fa fa-envelope-o fa-2x"></i></h2>
      <p class="text-center">sale@compnet.kz</p>
      <p class="text-center">info@compnet.kz</p>
    </div>
    <br><br><br>
  </div>

  <!-- <div class="container">
    <br>
    <h1 class="text-center text-uppercase">Отправить заявку</h1>
    <br>

    {{ Form::open(['route' => 'send-message']) }}
      <div class="col-md-3 form-group">
        <label for="name">Имя</label>
        <input type="text" name="name" class="form-control" id="name" maxlength="40" required>
      </div>
      <div class="col-md-3 form-group">
        <label for="email">Email адрес</label>
        <input type="email" name="email" class="form-control" id="email" maxlength="50">
      </div>
      <div class="col-md-3 form-group">
        <label for="phone">Номер телефона</label>
        <input type="tel" name="phone" class="form-control" id="phone" maxlength="20" required>
      </div>
      <div class="col-md-3 form-group">
        <label>Выберите услугу</label>
        <select name="service" class="form-control select-services">
          <option value="IT Аутсорсинг">IT Аутсорсинг</option>
          <option value="Создание Сайта">Создание Сайта</option>
          <option value="SEO &amp; SMM">SEO &amp; SMM</option>
          <option value="Учебный Центр">Учебный Центр</option>
        </select>
      </div>
      <div class="col-md-offset-3 col-md-6 form-group text-center">
        <br>
        <button type="submit" class="btn btn-primary btn-block"><i class="fa fa-send"></i> Отправить</button>
        <br>
      </div>
    {{ Form::close() }}
  </div> -->
@stop

@section('scripts')
    <script src="{{ asset('/js/scroll.js') }}"></script>
    <script>
      $(function(){
        $('a[href^="#"]').click(function(){
          var el = $(this).attr('href');
          $('html, body').animate({
            scrollTop: $(el).offset().top}, 1000);
          return false; 
        });
      });
      $('#carousel-it-outsourcing-comments').carousel({
        interval: false
      });
    </script>
    <script type="text/javascript" src="{{ asset('/js/amcharts.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/serial.js') }}"></script>
    <script type="text/javascript" scr="{{ asset('/js/none.js') }}"></script>
    <script type="text/javascript" src="{{ asset('/js/barchart.js') }}"></script>
@stop
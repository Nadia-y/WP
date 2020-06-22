
    <footer>
      <div class="container">
        <div class="row ">
            <div class="col-lg-4 ">
              <p class="footer__direction ">В торговомм реестре с 18 декабря 2017 за №400683 <br>
                ИП Кондратович Татьяна Васильевна <br>
                Могилевская обл, г. Кричев, м-н Сож 10А-12 <br>
                Регистрация №791078839 в Кричевском РИК от 17.10.2017г УНП 791078839
              </p>
          </div>
          <div class="col-lg-4">
            <p class="footer__link"> <a href="#"> Контакты</a> </p>
          </div>
          <div class="col-lg-4">
            <p class="footer__link"> <a href="#"> Карта сайта</a> </p>
          </div>
        </div>
      </div>
    </footer>
    <!-- Form-->

    <!-- <input type="hidden" name="project_name" value="TV">
    <input type="hidden" name="admin_email" value="nadia-2501@yandex.ru">
    <input type="hidden" name="form_subject" value="Заказ звонка"> -->

    <button onclick="show('block')" class="group__btn fix" >  Заказать звонок </button>
    <div id="filter" onclick="show('none')"></div>
    <div id="modal">
      
      <form id="form" class="form__modal" >
        <h5 class="form__title">
          Заказать звонок
        </h5>
        <p class="form__text"> Мы свяжемся с Вами в ближайщее время</p>
        <div class="group">
          <label class="group__lab" for="">Имя:</label>
          <input class="group__in" type="text" name="name"  required >
        </div>
        <div class="group">
          <label class="group__lab"  for="">Номер телефона:</label>
          <input class="group__in"  type="tel" name="phone" required>
        </div>
        <div class="group">
          <button class="group__btn">  Отправить</button>  
      </div>
    </form>>
	</div>
	
	<?php wp_footer(); ?>

  
</body>
</html>

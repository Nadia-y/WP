<?php get_header( ); ?>

<section class="primary__activity">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h5 class="primary__activity-title">основная деятельность</h5>
            <h3 class="primary__title">установка,настройка и ремонт тв антенн всех типов</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-lg-6">
          <h5 class="primary__activity-idea">о нас</h5>
            <p class="primary__activity-text">
			<?php the_field('activity-text') ?>
            </p>
        </div>
        <div class="col-lg-6">
          <h5 class="primary__activity-services">наши услуги</h5>  
            <div class="grid">
              <div class="js-ui-accordion">
                <h3 class="primary__activity-accordion">	<?php the_field('activity-accordion-one') ?> </h3>
                  <div>
                    <p class="accordion-text"> <?php the_field('accordion-text-one') ?> </p>
                    
                  </div>
                <h3 class="primary__activity-accordion"> <?php the_field('activity-accordion-two') ?> </h3>
                  <div>
                    <p class="accordion-text"><?php the_field('accordion-text-two') ?></p>
                  </div>
                <h3 class="primary__activity-accordion">Настройка антенн</h3>
                  <div>
                    <p class="accordion-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis at placeat quod nemo aliquam nesciunt distinctio, labore cum eum voluptas voluptate, laborum totam, soluta aspernatur vel quas. Dolores, quisquam quod!</p>
                  </div>
                <h3 class="primary__activity-accordion">Ремонт антенн</h3>
                  <div>
                    <p class="accordion-text">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Omnis at placeat quod nemo aliquam nesciunt distinctio, labore cum eum voluptas voluptate, laborum totam, soluta aspernatur vel quas. Dolores, quisquam quod!</p>
                  </div>
              </div>
            </div>
        </div>
      </div>
    </section>

    <section class="activities">
      <div class="container">
          <div class="row">
            <div class="col-lg-12">
              <h4 class="activities__title" id="activities__title">
                Триколор
              </h4>
            </div>
          </div>
            <div class="row"> 
              <div class="col-lg-6">
                <div class="activities__package ">
                  <img class="activities__img" src="<?php bloginfo( 'template_url' ); ?>/assets/img/tricolor-tv-log.png" alt="">
                </div>
              </div>
              <div class="col-lg-6">
                  <div class="activities__package-tv">
                    <p class="activities__p"> <?php the_field('activities__p1') ?> </p>
                  <div class="control__form-agreement">
                    <label class="control__form_lab activities__p-lab" for="control__form_check" >
                      <input class="control__form_check" id="control__form_check" type="checkbox"> 
					  <?php the_field('form_check1')  ?>
                    </label>
                </div>
                <div class="control__form-agreement">
                  <label class="control__form_lab activities__p-lab" for="control__form_check" >
                    <input class="control__form_check " id="control__form_check" type="checkbox"> 
					<?php the_field('form_check1-2')  ?>
                  </label>
              </div>
                  <div class="activities__layer"> 
                    <button class="activities__btn">Заказать</button>
                  </div>
                </div>
              </div>
            </div>
          <div class="row">
            <div class="col-lg-12">
              <h4 class="activities__title" id="ntv">
                НТВ-ПЛЮС
              </h4>
          </div>
        </div>
          <div class="row"> 
            <div class="col-lg-6">
              <div class="activities__package">
                <img class="activities__img" src="<?php bloginfo( 'template_url' ); ?>/assets/img/ntv-log.png" alt="">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="activities__package-tv">
                <p class="activities__p"> 	<?php the_field('activities__p2')  ?> </p>
                <div class="control__form-agreement">
                  <label class="control__form_lab activities__p-lab" for="control__form_check" >
                    <input class="control__form_check" id="control__form_check" type="checkbox"> 
					<?php the_field('form_check2')  ?>
                  </label>
              </div>
              <div class="control__form-agreement">
                <label class="control__form_lab activities__p-lab" for="control__form_check" >
                  <input class="control__form_check " id="control__form_check" type="checkbox"> 
                  	<?php the_field('form_check2-2')  ?>
                </label>
              </div>
                <div class="activities__layer"> 
                  <button class="activities__btn">Заказать</button>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="form">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h2>Оставьте заявку</h2>
              <form id="form_one" class="form_different" action="" method="POST"> 
                  <div class="form-row"> 
                      <div class="form-group col-lg-4">
                        <input type="text" class="form-control" name="name" id="inputName" placeholder="Ваше имя" required>
                      </div>
                      <div class="form-group col-lg-4">
                        <input type="text" class="form-control" name="phone" id="inputName" placeholder="Ваш телефон" required>
                      </div>
                      <div class="form-group col-lg-4">
                        <input type="email" class="form-control" name="email" id="inputEmail4" placeholder="Ваш e-mail">
                      </div>   
                  </div>
                  <div class="form-group2">
                      <button  class="btn-form btn ">Оплатить услуги</button>
                      <button  class="btn-form btn ">Вызвать мастера</button>
                  </div>        
          </form>
    </div>
    </section>

    <section class="advantages">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <h5 class="primary__activity-title">почему выбирают нас</h5>
            <h3 class="primary__title">наши главные преимущесва</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-lg-6">
            <div class="advantages__list d-flex" > 
              <div>
                <h6 class="advantages__list-title">
                  Качество и профессионализм   
                </h6> 
                <p class="advantages__list-p">
                  Гарантируем высокое качество. Мы лидеры по установкам телевизионных антенн. Опыт более 17 лет.
                </p>
            </div>
              <i class="far fa-thumbs-up fa advantages__icon"></i>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="advantages__list d-flex"> 
              <i class="far fa-handshake advantages__list-icon"></i>
                <div>
                  <h6 class="advantages__list-title left">
                    Порядочность и честность
                  </h6> 
                  <p class="advantages__list-p left-p">
                    Предложим только то, что действительно необходимо,возьмем столько,сколько положено!
                  </p>
              </div>
            </div>
          </div>
          
          <div class="col-lg-6">
            <div class="advantages__list d-flex"> 
              <div> 
                <h6 class="advantages__list-title">
                  Выгодная цена 
                </h6> 
                <p class="advantages__list-p">
                  Нашли лучше и дешевле?Позвоните, и мы сделаем для Вас более интерессное предложение!
                </p>
              </div>
                <i class="far fa-money-bill-alt advantages__icon "></i>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="advantages__list d-flex"> 
              <i class="fas fa-phone advantages__list-icon"></i>
              <div> 
                <h6 class="advantages__list-title left"> 
                  Поддержка 12/7 
                </h6> 
                <p class="advantages__list-p left-p">
                Наши специалисты всегдарады Вам помочь и оказать техническую помощь и консультацию.
                </p>
            </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="advantages__list d-flex"> 
              <div> 
                <h6 class="advantages__list-title">
                  Надежность и доступность 
                </h6> 
                <p class="advantages__list-p">
                  Используем только надежное и простое в эксплуатации оборудование. Гарантия 1 год.
                </p>
              </div>
                <i class="fas fa-tv fa advantages__icon"></i>
            </div>
        </div>

        <div class="col-lg-6">
          <div class="advantages__list d-flex"> 
              <i class="far fa-clock advantages__list-icon"></i>
                <div> 
                  <h6 class="advantages__list-title left">
                    Оперативность
                  </h6> 
                  <p class="advantages__list-p  left-p">
                    Закажите сегодня и уже завтра Вы будете наслаждаться высококачественным изображением.
                  </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    </section>
    
    <section class="contacts" id="contacts">
      <div class="container">
        <div class="row">
          <div class="col-lg-4">
            <h5 class="contacts__title">
              Связаться с нами
            </h5>
            <p class="contacts__info">
              Время работы и прием заказов ежедневно <br> с 9-00 до 21-00
            </p>
            <p class="contacts__info"><a href="#">Заказать обратный звонок</a> </p>
          </div>
          <div class="col-lg-4">
              <a class="link-footer" href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?>  <span> <img class="logo__a"src="https://www.a1.by/medias/sys_master/images/hdc/hab/8977035460638.svg" class="img" data-mobile-src="https://www.a1.by/medias/sys_master/images/h35/h85/8977036181534.svg" data-desktop-src="https://www.a1.by/medias/sys_master/images/hdc/hab/8977035460638.svg" alt="" title=""></span> </a>
              <a class="link-footer " href="tel:<?php the_field('phone') ?>"><?php the_field('phone') ?> <span>  <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" version="1.1" id="Слой_1" x="0px" y="0px" viewBox="0 334.9 595.3 162" enable-background="new 0 334.9 595.3 162" xml:space="preserve" class="mdl-js" height="40px"   width="35px">
              <path fill="#E30613" d="M52.9,342.4c-11,0-24.2,10.6-34.9,28.4C6.6,389.4,0,412.2,0,432.1c0,29.2,16.3,58.5,52.9,58.5  s52.9-29.3,52.9-58.5c0-19.9-6.6-42.8-18-61.2C77.1,353,63.9,342.4,52.9,342.4z M338.6,386h37v96.5h39.7V386h37v-35.7H338.6V386  L338.6,386z M537.1,386h58.2v-35.7h-58.2c-53.5,0-82,26.6-82,66.2s28.6,66.2,82,66.2h58.2v-35.8h-58.2c-24.8,0-40.9-8.9-40.9-30.4  S512.3,386,537.1,386z M257.9,350.4l-21.2,79l-21.2-79h-70.1v132.4h39.7V375l28.9,107.6h45.5l28.9-107.7v107.7h39.7V350.4H257.9z"/>
              </svg> </a>
              <p class="contacts__mail">  <a class="contact__tel " href="tel:<?php the_field('email') ?>"><?php the_field('email') ?></a> <i class="far fa-envelope contact__icon"></i>  </p>
          </div>
          <div class="col-lg-4">
            <div class="contacts__icons">
              <div class="contacts__icons-name">
                      <a href="#">
                          <i class="vb fab fa-viber"></i>
                          <p class="contacts__name">Viber</p>
                      </a>
              </div>
              <div class="contacts__icons-name">
                      <a href="#">
                          <i class="face fab fa-facebook-f"></i>
                          <p class="contacts__name">Facebook</p>
                      </a>
              </div>
              <div class="contacts__icons-name">
                      <a href="#">
                          <i class="inst fab fa-instagram"></i>
                          <p class="contacts__name">Instagram</p>
                      </a>
              </div>
              <div class="contacts__icons-name">
                      <a href="#">
                          <i class="wh fab fa-whatsapp"></i>
                          <p class="contacts__name">whatsapp</p>
                      </a>
              </div>
              <div class="contacts__icons-name">
                <a href="#">
                    <i class="tg fab fa-telegram-plane"></i>
                    <p class="contacts__name">Telegram</p>
                </a>
              </div>
              <div class="contacts__icons-name">
                      <a href="#">
                          <i class="vk fab fa-vk"></i>
                          <p class="contacts__name">Vkontakte</p>
                      </a>
              </div>
          </div>
          </div>
        </div>
      </div>
	</section>
	
	<?php get_footer( ); ?>

<!DOCTYPE html>
<html class="no-js" lang="ru">

<?php
$title_page = 'Регистрация Форум Кавказ';
include 'includes/head.php';
?>

<body>
  <!-- HEADER -->
  <?php include 'includes/header.php' ?>
  <div class="bradcam_area bradcam_bg_1">
    <!-- <div class="container">
      <div class="row">
        <div class="col-xl-12">
          <div class="bradcam_text">
            <h3>Предварительная заявка</h3>
          </div>
        </div>
      </div>
    </div> -->
  </div>

  <section class="contact-section section_padding">
    <div class="container">
      <div class="row">
        <div class="col-12">
          <h2 class="contact-title">Предварительная регистрация</h2>
        </div>
        <div class="col-lg-10">
          <form class="form-contact contact_form" action="mailing3.php" method="post" id="contactForm" novalidate="novalidate">
            <div class="row">
              <div class="col-lg-12 col-md-8">


                <div class="mt-10 form-item-wrap">
                  <label for="formEmail" class="form__subtitle">Электронная почта<span>*</span></label>
                  <input type="email" name="email" placeholder="Ваш адрес эл. почты" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Ваш адрес эл. почты'" required class="single-input" id="formEmail" required />
                </div>

                <div class="mt-10 form-item-wrap">
                  <label for="formName" class="form__subtitle">ФИО<span>*</span></label>
                  <input type="text" name="name" placeholder="Мой ответ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Мой ответ'" required class="single-input" id="formName" />
                </div>

                <div class="mt-10 form-item-wrap">
                  <label for="formEmail" class="form__subtitle">
                    Телефон<span>*</span></label>
                  <input type="tel" name="phone" placeholder="Мой ответ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Мой ответ'" required class="single-input" id="formEmail" />
                </div>

                <div class="mt=10 form-item-wrap">
                  <p class="form__subtitle">Заказчик</p>
                  <div class="switch-wrap d-flex align-items-center">
                    <div class="form-block__radio">
                      <label class="form-control__label">
                        <input class="form__real-radio" type="radio" name="customer" value="Физическое лицо" checked />
                        Физическое лицо
                        <span class="form__gustom-radio"></span>
                      </label>
                    </div>
                  </div>

                  <div class="switch-wrap d-flex align-items-center">
                    <label class="form-control__label">
                      <input class="form__real-radio" type="radio" name="customer" value="Юридическое лицо" id="default-radio" />
                      Юридическое лицо
                      <span class="form__gustom-radio"></span>
                    </label>
                  </div>
                </div>

                <div class="mt-10 form-item-wrap">
                  <label for="formEmail" class="form__subtitle">Город проживания
                    <span>*</span>
                  </label>
                  <input type="text" name="city" placeholder="Мой ответ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Мой ответ'" required class="single-input" id="formEmail" />
                </div>

                <div class="mt-10 form-item-wrap">
                  <p class="form__subtitle">План мероприятий</p>
                  <div class="switch-wrap d-flex align-items-center">
                    <div class="form-block__radio">
                      <label class="form-control__label">
                        <input class="form__real-radio" type="checkbox" name="plan[]" value="05.06 – Дербент. «Межконфессиональный диалог» с Инной Куниной" />
                        05.06 – Дербент. «Межконфессиональный диалог» с Инной Куниной

                        <span class="form__gustom-radio"></span>
                      </label>
                    </div>
                  </div>
                  <div class="switch-wrap d-flex align-items-center">
                    <div class="form-block__radio">
                      <label class="form-control__label">
                        <input class="form__real-radio" type="checkbox" name="plan[]" value="06.06 – Махачкала. «Россия – моя история»" />
                        06.06 – Махачкала. «Россия – моя история»

                        <span class="form__gustom-radio"></span>
                      </label>
                    </div>
                  </div>
                  <div class="switch-wrap d-flex align-items-center">
                    <div class="form-block__radio">
                      <label class="form-control__label">
                        <input class="form__real-radio" type="checkbox" name="plan[]" value="07.06 - Экскурсия по Сулакскому каньону" />
                        07.06 - Экскурсия по Сулакскому каньону

                        <span class="form__gustom-radio"></span>
                      </label>
                    </div>
                  </div>
                  <div class="switch-wrap d-flex align-items-center">
                    <div class="form-block__radio">
                      <label class="form-control__label">
                        <input class="form__real-radio" type="checkbox" name="plan[]" value="08.06 - Официальная часть форума. Пленарное заседание" />
                        08.06 - Официальная часть форума. Пленарное заседание

                        <span class="form__gustom-radio"></span>
                      </label>
                    </div>
                  </div>
                  <div class="switch-wrap d-flex align-items-center">
                    <div class="form-block__radio">
                      <label class="form-control__label">
                        <input class="form__real-radio" type="checkbox" name="plan[]" value="09.06 – Посещение высокогорного Хунзаха – Родина великого поэта Расула Гамзатова" />
                        09.06 – Посещение высокогорного Хунзаха – Родина великого поэта Расула Гамзатова

                        <span class="form__gustom-radio"></span>
                      </label>
                    </div>
                  </div>
                  <!-- <div class="switch-wrap d-flex align-items-center">
                    <div class="primary-checkbox mr-1">
                      <input type="checkbox" id="default-checkbox" name="plan" value="05.06 - Дербент (Секция «Межконфессиональный диалог»)" />
                      <label for="default-checkbox"></label>
                    </div>
                    <p>
                      05.06 - Дербент (Секция «Межконфессиональный диалог»)
                    </p>
                  </div> -->
                  
                  <div class="switch-wrap d-flex align-items-center">
                    <div class="form-block__radio">
                      <label class="form-control__label">
                        <input class="form__real-radio" type="checkbox" name="plan[]" value="10.06 – Знакомство с местностью Гуниб – гигантский музей под открытым небом" />
                        10.06 – Знакомство с местностью Гуниб – гигантский музей под открытым небом

                        <span class="form__gustom-radio"></span>
                      </label>
                    </div>
                  </div>

                  
                </div>

                <div class="mt=10 form-item-wrap">
                  <p class="form__subtitle">Трансфер</p>
                  <div class="switch-wrap d-flex align-items-center">
                    <div class="form-block__radio">
                      <label class="form-control__label">
                        <input class="form__real-radio" type="radio" name="transfer" value="из аэропорта в Дербент  04.06 в 09:00" checked />
                        из аэропорта в Дербент 04.06 в 09:00

                        <span class="form__gustom-radio"></span>
                      </label>
                    </div>
                  </div>

                  <div class="switch-wrap d-flex align-items-center">
                    <label class="form-control__label">
                      <input class="form__real-radio" type="radio" name="transfer" value="из аэропорта в Дербент  04.06 в 14:30" id="default-radio" />
                      из аэропорта в Дербент 04.06 в 14:30
                      <span class="form__gustom-radio"></span>
                    </label>
                  </div>

                  <div class="switch-wrap d-flex align-items-center">
                    <label class="form-control__label">
                      <input class="form__real-radio transfer-other" type="radio" name="transfer" value="другое" id="default-radio" />
                      другое
                      <span class="form__gustom-radio"></span>
                    </label>
                  </div>
                  <div class="form-control__pickup-wrapper" id="js-form_transfer_other">
                    <div class="form-control__pickup form-control__pickup-adress">
                      <div class="mt-10 form-item-wrap">
                        <label for="formName" class="form__subtitle">Укажите свой трансфер<span>*</span></label>
                        <input type="text" name="transfer_other" placeholder="Мой ответ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Мой ответ'" required class="single-input" id="formName" />
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mt=10 form-item-wrap">
                  <p class="form__subtitle">Дети</p>
                  <div class="switch-wrap d-flex align-items-center">
                    <div class="form-block__radio">
                      <label class="form-control__label">
                        <input class="form__real-radio" type="radio" name="children" value="с ребенком" />
                        с ребенком

                        <span class="form__gustom-radio"></span>
                      </label>
                    </div>
                  </div>

                  <div class="switch-wrap d-flex align-items-center">
                    <label class="form-control__label">
                      <input class="form__real-radio" type="radio" name="children" value="без ребенка" id="default-radio" checked />
                      без ребенка <span class="form__gustom-radio"></span>
                    </label>
                  </div>
                  <div class="form-control__pickup-wrapper" id="js-form-control__pickup-wrapper">
                    <div class="form-control__pickup form-control__pickup-adress">
                      <div class="mt-10 form-item-wrap">
                        <label for="formName" class="form__subtitle">Укажите количество и возвраст детей<span>*</span></label>
                        <input type="text" name="children_count" placeholder="Мой ответ" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Мой ответ'" required class="single-input" id="formName" />
                      </div>
                    </div>
                  </div>
                </div>

                <div class="mt=10 form-item-wrap">
                  <p class="form__subtitle">Пожелания и рекомендации</p>
                  <div class="switch-wrap d-flex align-items-center">
                    <textarea class="form-control w-100" name="feedback" id="message" cols="30" rows="9" onfocus="this.placeholder = ''" onblur="this.placeholder = 'Enter Message'" placeholder="Введите Сообщение"></textarea>
                  </div>
                </div>
              </div>
            </div>
            <div class="form-group mt-3">
              <button type="submit" name="submit" class="button button-contactForm btn_4 boxed-btn">
                Отправить
              </button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </section>

  <!-- JS here -->
  <script src="js/vendor/modernizr-3.5.0.min.js"></script>
  <script src="js/vendor/jquery-1.12.4.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/isotope.pkgd.min.js"></script>
  <script src="js/ajax-form.js"></script>
  <script src="js/waypoints.min.js"></script>
  <script src="js/jquery.counterup.min.js"></script>
  <script src="js/imagesloaded.pkgd.min.js"></script>
  <script src="js/scrollIt.js"></script>
  <script src="js/jquery.scrollUp.min.js"></script>
  <script src="js/wow.min.js"></script>
  <script src="js/nice-select.min.js"></script>
  <script src="js/jquery.slicknav.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/plugins.js"></script>
  <script src="js/gijgo.min.js"></script>

  <!--contact js-->
  <!-- <script src="js/contact.js"></script> -->
  <!-- <script src="js/jquery.ajaxchimp.min.js"></script> -->
  <!-- <script src="js/jquery.form.js"></script> -->
  <!-- <script src="js/jquery.validate.min.js"></script> -->
  <!-- <script src="js/mail-script.js"></script> -->
  <script src="js/radio-btn.js"></script>

  <!-- <script src="js/main.js"></script> -->
</body>

</html>
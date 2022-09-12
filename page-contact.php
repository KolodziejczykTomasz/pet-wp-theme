<?php 
/*
Template Name: Kontakt

*/
?>

<?php get_header(); ?>


<body id="main__body__page__form">
    <header>
        <nav class="nav__container__form page__form--nav ">
            <div class="page__form__background--color"></div>
            <div id="nav__brand__form" class="nav__brand page__form__close--brand">
                <img class="nav__brand--image" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo.svg" /> </div>
            <div class="page__form__close--button">
                <a href="<?php echo get_home_url(); ?>" target="_self"><img src="<?php echo get_template_directory_uri(); ?>/assets/images/x.svg" /></a>
            </div>

        </nav>
    </header>

    <main>
        <section class="page__form">
            <div class="page__form__side--left">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/bakterie 5.svg" />
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/contact/pies-2.png" />
            </div>
            <div class="page__form__side--right">
                <div class="page__form__side__right__wrapper">
                    <div class="page__form--title">Write to us</div>
                    <div class="page__form--message">we will reply within 24 h</div>
                </div>
                 <form id="form" class="form" name="contactForm" action="#" method="post">
                    <div class="form__wrapper--input form-control">
                        <input class="form_input" type="text" id="name" name="name"  value=""  />
                        <label id="label_name" for="name" class="form__label" > Name </label>
                        <span id="nameError" class="error-form"></span>
                    </div>
                    <div class="form__wrapper--input form-control">
                        <input class="form_input" type="text" id="lastName" name="lastName" value=""/>
                        <label id="label-lastName" for="lastName" class="form__label"  > Last name </label>
                        <span id="lastnameError" class="error-form"></span>
                    </div>
                    <div class="form__wrapper--input form-control">
                        <input class="form_input" type="email" id="email" name="email" value=""/>
                        <label id="label-email" for="email" class="form__label " > Email </label>
                        <span id="emailError" class="error-form"></span>
                    </div>
                    <div class="form__wrapper--input form-control">
                        <textarea class="form_input" id="message" name="message" type="text" value=""></textarea>
                        <label id="label-message" for="message" class="form__label " > Message </label>
                        <span id="messageError" class="error-form"></span>
                    </div>
                    <div class="page__form__checkbox--wrapper">
                       <input type="checkbox" id="checkbox_id" class="checkbox" />
                       <label for="checkbox_id" style="font-size:14px;"></label>
                       <div class="checkbox-text-wrapper">
                       <div class="checkbox-text">I consent to the processing of my personal data by Owlie S.A. for the purpose and to the extent necessary to handle this application. I have read the information on the method of processing my data.</div>
                        <span id="checkboxError" class="error-form"></span></div>
                    </div>
                    <div class="page__form--buttons">
                        <div class="form__slider--wrapper">
                            <input type="range" min="1" max="100" value="0" class="input-slider " id="button-slide" onclick="isCheck()" />
                            <label for="button-slide" id="slider__label " class="slider-label">Slide and send</label>
                        </div>
                        <div>
                            <button class="page__form__button button-light" type="submit" id="button-submit" disabled>Send
                            </button>
                           
                        </div>
                    </div>
                </form>
            </div>
        </section>
    </main>
	 <script >
	  function isCheck() {
  let checkBox = document.getElementById("checkbox_id"),
    btn_range = document.getElementById("button-slide"),
    currentVal = btn_range.value;
  let btn_send = document.getElementById("button-submit");

  if (checkBox.checked == true && currentVal == 100) {
    btn_send.classList.remove("button-light");
    btn_send.classList.add("button-dark");
    btn_send.disabled = false;
  } else {
    btn_send.classList.remove("button-dark");
    btn_send.classList.add("button-light");
    checkBox.removeAttribute("checked");
  }
}

	 </script>
    <script src = "http://ajax.aspnetcdn.com/ajax/jquery.validate/1.19.0/jquery.validate.min.js" ></script>

    <script type="text/javascript" src="js/form-validation.js"></script>
    <script type="text/javascript" src="js/global.js"></script>
	</body>
</html>
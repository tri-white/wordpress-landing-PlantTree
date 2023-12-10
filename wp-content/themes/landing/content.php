
    <!-- Головна секція -->
    <section id="hero-section" class="min-vh-100 d-flex align-items-center text-center text-light">
        <div class="container">
            
            <div class="row">
                <div class="col-12">
                    <h1 class="fw-semibold display-2">Ласкаво просимо у Plant-a-Tree.</h1>
                    <a class="start-button btn btn-success fs-2 mt-5 bg-gradient" href="#about">Почати ознайомлення</a>
                </div>
        </div>
    </div>
    </section>

    <!-- Про нас -->
    <section id="about" class="mt-5">
        <div class="container">
            <!-- Заголовок секції -->
            <div class="row d-flex align-items-center text-center">
                <div class="col-12">
                    <div class="section-title">
                        <h1 class="fw-bold fs-1"> Про нас </h1>
                    </div>
                    <div class="line mt-5">
                        <hr>
                    </div>
                </div>
            </div>
            <div class="row mt-5">
            <div class="col-lg-6">
    <?php
    $about_image_url = 'http://localhost/wplab.trunin/wp-content/uploads/2023/12/about.jpg'; // Replace this with your dynamic image URL
    ?>
    <img class="about-image img-fluid" src="<?php echo esc_url($about_image_url); ?>" alt="about us" data-bs-toggle="tooltip" data-bs-placement="top" title="Фотографія нашого першого дерева">
</div>

              <!-- Текст секції -->
              <div class="col-lg-6 fs-2 fw-lighter">
                  <p class="about-text">Ми - команда волонтерів, в яку входять люди з 50 країн світу! Починаючи з <a class="text-dark"  data-bs-toggle="popover" data-bs-title="Цікава інформація" data-bs-content="Так так, все почалось саме під час COVID-19!">2020</a> року ми успішно посадили вже понад 2.000.000 дерев у країнах Азії, Європи та Америки. Наша команда постійно збільшується, і ми будемо раді прийняти будь-кого з собою у цю фантастичну подорож до відновлення природної краси!</p>
              </div>
          </div>
          <!-- Як з нами зв'язатися -->
            <div class="row d-flex mt-5 text-center align-items-center">
              <div class="col-lg-2 col-md-2 col-sm-1">
              </div>
                <div class="col-lg-1 col-md-2 mx-auto">
                <a href="#contact" class="d-inline-flex position-relative">
                    <?php
                    $mail_icon_url = 'http://localhost/wplab.trunin/wp-content/uploads/2023/12/mail.png'; // Replace this with your dynamic image URL
                    ?>
        <img class="mail-icon position-relative rounded-4 img-fluid" src="<?php echo esc_url($mail_icon_url); ?>" alt="Email us">
                </a>
                </div>
                <div class="col-lg-7 col-md-6 fs-4 d-flex justify-content-start">
                        Якщо у вас з'явились будь-які питання, надішліть нам листа!
                </div>
                <div class="col-lg-2 col-md-2 col-sm-1">
                </div>
            </div>
        </div>
    </section>

    <section id="counter" class="mt-5">
    <div class="container text-center">
        <div class="row">
            <!-- Заголовок секції -->
            <div class="col-12 mb-4">
                <div class="section-title">
                    <h1 class="fw-bold fs-1">Статистика</h1>
                </div>
                <div class="line mt-4">
                    <hr>
                </div>
            </div>
        </div>

        <?php
        $statistics_query = new WP_Query(array('post_type' => 'statistic', 'posts_per_page' => -1));
        while ($statistics_query->have_posts()) : $statistics_query->the_post();
        ?>
            <div class="row mt-2 d-flex justify-content-center">
                <div class="col-xl-7 col-md-10 mb-4">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-lg-1 col-md-1 col-sm-2">
                                    <div class="align-self-center">
                                        <?php
                                        $icon = get_field('icon');
                                        if ($icon) {
                                            echo '<img src="' . esc_url($icon) . '" alt="Icon" style="width: 5rem;">';
                                        }
                                        ?>
                                    </div>
                                </div>
                                <div class="col-lg-5 col-md-6 col-sm-5">
                                    <h4><?php the_title(); ?></h4>
                                </div>
                                <div class="col-lg-2 col-md-1 col-sm-2">
                                </div>
                                <div class="col-lg-4 col-md-4 col-sm-3 mx-auto pe-3">
                                    <div class="p-md-1">
                                        <h2><?php echo get_field('statistic_value'); ?></h2>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php endwhile;
        wp_reset_postdata();
        ?>
    </div>
</section>




<div class="container-fluid bg-light pb-5 mt-5">
    <section id="reviews" class="reviews-section mt-5">
        <div class="container">
            <div class="row">
                <!-- Заголовок секції -->
                <div class="col-12 p-3 text-center">
                    <div class="section-title">
                        <h1 class="fw-bold fs-1"> Відгуки </h1>
                    </div>
                    <div class="line mt-4">
                        <hr>
                    </div>
                </div>
            </div>

            <div id="carouselExampleControls" class="carousel slide" data-bs-ride="carousel">
                <div class="carousel-inner">

                    <?php
                    $reviews_query = new WP_Query(array('post_type' => 'review', 'posts_per_page' => -1));
                    $first = true;

                    while ($reviews_query->have_posts()) : $reviews_query->the_post();
                    ?>
                        <div class="carousel-item <?php echo $first ? 'active' : ''; ?>">
                            <div class="container d-flex justify-content-center">
                                <!-- Відгук-->
                                <div class="col-lg-8 col-md-10 text-center">
                                    <div class="review-head">
                                        <p class="review-text fs-5 lh-md text-center">
                                            <?php the_content(); ?>
                                        </p>
                                    </div>
                                    <hr class="mt-4">
                                    <div class="review-person mt-3 d-flex align-items-center justify-content-center">
                                    <div class="person-img d-flex align-items-center" style="height:50px; width:50px; overflow:hidden">
                                            <?php
                                            $author_image = get_field('author_image');
                                            if ($author_image) {
                                                echo '<img alt="author" src="' . esc_url($author_image) . '" class="person-icon border-2" style="min-width:100%;">';
                                            }
                                            ?>
                                        </div>

                                        <!-- Автор відгуку -->
                                        <div class="person-info ps-4">
                                            <div class="fs-4"><?php the_title(); ?></div>
                                            <div class="fs-7"><?php echo get_field('author_role'); ?></div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <?php $first = false; ?>
                    <?php endwhile;
                    wp_reset_postdata();
                    ?>

                </div>
                <!-- Кнопки для навігації слайдера -->
                <button class="carousel-control-prev btn-success active rounded-circle my-auto" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="prev" style="width: 30px; height: 30px;">
                    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Previous</span>
                </button>
                <button class="carousel-control-next btn-success active rounded-circle my-auto" type="button" data-bs-target="#carouselExampleControls" data-bs-slide="next" style="width: 30px; height: 30px;">
                    <span class="carousel-control-next-icon" aria-hidden="true"></span>
                    <span class="visually-hidden">Next</span>
                </button>
            </div>
        </div>
    </section>
</div>


    <section id="team" class="mt-5">
    <div class="container">
        <div class="row">
            <div class="col-12 p-3 text-center">
                <div class="section-title">
                    <h1 class="fw-bold fs-1">Команда</h1>
                </div>
                <div class="line mt-4">
                    <hr>
                </div>
            </div>
        </div>

        <div class="row">
        <?php
    $team_query = new WP_Query(array('post_type' => 'team-member', 'posts_per_page' => -1));
    while ($team_query->have_posts()) : $team_query->the_post();
    ?>
        <div class="col-lg-4 col-md-6 col-sm-12 mb-4">
            <div class="card h-100">
            <?php
                $team_member_photo = get_field('team_member_photo');
                if ($team_member_photo) :
                    ?>
                    <div class="team-member-photo-container" style="height:350px; width:100%; overflow:hidden;">
                        <img src="<?php echo esc_url($team_member_photo); ?>" class="card-img-top team-image h-100" alt="..." style="max-width:100%;">
                    </div>
                <?php endif; ?>
                <div class="card-body text-center d-flex flex-column">
                    <p class="card-text align-self-center"><?php echo get_field('position'); ?></p>
                    <div class="card-footer bg-success fw-bold bg-gradient text-light mt-auto">
                        <?php echo get_field('team_member_name'); ?>
                    </div>
                </div>
            </div>
        </div>
    <?php endwhile;
    wp_reset_postdata(); ?>
        </div>
    </div>
</section>


    <!-- Запитання й відповіді -->
    <section id="FAQ" class="mt-5">
        <div class="container">
          <div class="row">
            <!-- Заголовок секції -->
            <div class="col-12 p-3 text-center">
                <div class="section-title">
                    <h1 class="fw-bold fs-1"> FAQ </h1>
                </div>
                <div class="line mt-4">
                    <hr>
                </div>
            </div>
        </div>
        <!-- Гармошка (пункти меню з випадаючим текстом при натисненні) -->
            <div class="accordion accordion-flush" id="accordionFlushExample">
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <!-- Назва пункту -->
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseOne" aria-expanded="false" aria-controls="flush-collapseOne">
                      Наша історія
                    </button>
                  </h2>
                  <!-- Текст пункту -->
                  <div id="flush-collapseOne" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Об'єднання засновано офіційно у 2020 році, 4 квітня. Хоча насправді, організація існує ще з кінця 2019 року.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseTwo" aria-expanded="false" aria-controls="flush-collapseTwo">
                      До кого звернутись, щоб потрапити в команду
                    </button>
                  </h2>
                  <div id="flush-collapseTwo" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">Достатньо написати нам через форму у кінці сторінки. Відповідь прийде протягом 2 днів.</div>
                  </div>
                </div>
                <div class="accordion-item">
                  <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseThree" aria-expanded="false" aria-controls="flush-collapseThree">
                      Що робить член команди
                    </button>
                  </h2>
                  <div id="flush-collapseThree" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                    <div class="accordion-body">У нас немає чітких обов'язків, просто саджайте дерева, та діліться своїми результатами з нами!</div>
                  </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFour" aria-expanded="false" aria-controls="flush-collapseFour">
                        Які наші майбутні плани
                      </button>
                    </h2>
                    <div id="flush-collapseFour" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Поточна ціль - посадити 14млн. дерев по всьому світу. У майбутньому будемо озеленяти цілі континенти!</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseFive" aria-expanded="false" aria-controls="flush-collapseFive">
                        Наші друзі та спонсори
                      </button>
                    </h2>
                    <div id="flush-collapseFive" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">Ми тісно співпрацюємо з волонтерськими організаціями: "Захист", "Зелений материк", "Зелена книга світу".</div>
                    </div>
                  </div>
                  <div class="accordion-item">
                    <h2 class="accordion-header">
                      <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#flush-collapseSix" aria-expanded="false" aria-controls="flush-collapseSix">
                          Наші досягнення
                      </button>
                    </h2>
                    <div id="flush-collapseSix" class="accordion-collapse collapse" data-bs-parent="#accordionFlushExample">
                      <div class="accordion-body">У 2021 році ми встановили рекорд Гіннесу по кількості посаджених дерев однією людиною, а у 2022 році - кількість посаджених дерев за день</div>
                    </div>
                  </div>
              </div>
        </div>
    </section>

    <!-- Контакти -->
    <section class="section-padding mt-5" id="contact">
        <div class="container">
            <div class="row">
              <!-- Заголовок секції -->
                <div class="col-12 text-center mb-4">
                    <div class="section-title">
                        <h1 class="display-3 fw-semibold">Зв'яжіться з нами</h1>
                    </div>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-8 mb-5">
                  <!-- Форма для заповнення даних -->
                    <form action="#" class="row g-3 p-4">
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Ваше ім'я">
                        </div>
                        <div class="form-group col-lg-6">
                            <input type="text" class="form-control" placeholder="Ваше прізвище">
                        </div>
                        <div class="form-group col-lg-12">
                          <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
                            <small id="emailHelp" class="form-text text-muted">Ми ніколи не розголошуємо чужі дані.</small>
                        </div>
                        <div class="input-group col-lg-12">
                          <div class="input-group-prepend">
                            <span class="input-group-text" id="basic-addon1">Тема</span>
                          </div>
                          <input type="text" class="form-control" placeholder="..." aria-label="Username" aria-describedby="basic-addon1">
                        </div>
                        <div class="form-group col-lg-12">
                          <textarea class="form-control" id="exampleFormControlTextarea1" rows="5" placeholder="Зміст"></textarea>
                        </div>
                        <div class="form-group col-lg-12 form-check">
                          <input type="checkbox" class="form-check-input" id="exampleCheck1">
                          <label class="form-check-label " for="exampleCheck1">Підписатися на розсилку</label>
                        </div>
                        <div class="form-group col-lg-12 d-grid">
                            <button type="button" class="btn btn-success" id="liveAlertBtn">Надіслати лист</button>
                            <div class="mt-3" id="liveAlertPlaceholder"></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

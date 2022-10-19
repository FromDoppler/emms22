<div class="emms22__pre-event__calendar">
    <div class="emms22__container--lg">


        <!--------------------- Día 1 ----------------------->


        <h2 class="emms22__fade-in">Descubre la agenda del EMMS 2022</h2>
        <div class="emms22__pre-event__calendar__date emms22__fade-in">
            <h3><strong>MARTES</strong> 8 DE NOVIEMBRE</h3>
            <?php if ( ($dayDuring == 1) && ($liveDayDuring == 0 || $liveDayDuring == 1) ) : ?>
                <div class="emms22__post-event__calendar__conferences-add">
                    <p>¡YA ESTÁN DISPONIBLES LAS CONFERENCIAS!</p>
                </div>
            <?php elseif ($dayDuring == 2 || $dayDuring == 3) : ?>
                <div class="emms22__post-event__calendar__conferences-add">
                    <p>¡YA ESTÁN DISPONIBLES LAS CONFERENCIAS!</p>
                </div>
            <?php else : ?>
            <div class="emms22__pre-event__calendar__date__country">
                <span><img src="common/html/<?= VERSION ?>/img/flags/arg.png" alt="Argentina">(ARG) 02:00 p.m</span>
                <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+2022&iso=20221109T11&p1=51&ah=5" target="_blank">Mira el horario de tu país</a>
            </div>
            <?php endif; ?>
        </div>
        <ul class="emms22__pre-event__calendar__event-list emms22__fade-in emms22__show-dk">
            <?php
            $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $speakers = $db->getSpeakersByDay(1);

            foreach ($speakers as $speaker) : ?>
                <li class="emms22__pre-event__calendar__event-list__event">
                    <div class="emms22__pre-event__calendar__event-list__event__card">
                        <div class="emms22__pre-event__calendar__event-list__event__card__speaker">
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker__image">
                                <img src="../../admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                            </div>
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker__text">
                                <h4><?= $speaker['name'] ?></h4>
                                <h5><?= $speaker['job'] ?></h5>
                                <ul>
                                    <?php if (!empty($speaker['sm_twitter'])) : ?>
                                        <li><a href="<?= $speaker['sm_twitter'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Twitter.svg" alt="Twitter"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_linkedin'])) : ?>
                                        <li><a href="<?= $speaker['sm_linkedin'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/LinkedIn.svg" alt="LinkedIn"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_instagram'])) : ?>
                                        <li><a href="<?= $speaker['sm_instagram'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Instagram.svg" alt="Instagram"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_facebook'])) : ?>
                                        <li><a href="<?= $speaker['sm_facebook'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Facebook.svg" alt="Facebook"></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="emms22__pre-event__calendar__event-list__event__card__description">
                            <p><?= $speaker['description'] ?></p>
                        </div>
                        <div class="emms22__pre-event__calendar__event-list__event__card__business">
                            <img src="../../admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                            <?php if ( ($dayDuring == 1) && ($liveDayDuring == 0 || $liveDayDuring == 1) ) : ?>
                                <a href="../../speakers-interna.php" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                            <?php elseif ($dayDuring == 2 || $dayDuring == 3) : ?>
                                <a href="../../speakers-interna.php" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                            <?php else : ?>
                                <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio">Ver bio</a>
                            <?php endif; ?>
                            <div class="emms22__pre-event__calendar__event-list__event__card__bio emms22__pre-event__calendar__event-list__event__card__bio--hide bio-speaker">
                                <h4><?= $speaker['name'] ?></h4>
                                <p><?= $speaker['bio'] ?></p>
                                <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio-hide"> ← VOLVER</a>
                            </div>
                        </div>

                    </div>
                    <!-- <div class="emms22__pre-event__calendar__event-list__event__country">
                        <span><img src="common/html/<?= VERSION ?>/img/flags/arg.png" alt="">(ARG)p.m</span>
                        <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+2022&iso=20221109T11&p1=51&ah=5" target="_blank">Mira el horario de tu país</a>
                    </div> -->
                </li>

            <?php endforeach; ?>
        </ul>
        <ul class="emms22__pre-event__calendar__event-list emms22__fade-in emms22__show-mb main-carousel" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
            <?php foreach ($speakers as $speaker) : ?>
                <li class="emms22__pre-event__calendar__event-list__event carousel-cell">
                    <div class="emms22__pre-event__calendar__event-list__event__card">
                        <div class="emms22__pre-event__calendar__event-list__event__card__speaker">
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker__image">
                                <img src="../../admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                            </div>
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker__text">
                                <h4><?= $speaker['name'] ?></h4>
                                <h5><?= $speaker['job'] ?></h5>
                                <ul>
                                    <?php if (!empty($speaker['sm_twitter'])) : ?>
                                        <li><a href="<?= $speaker['sm_twitter'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Twitter.svg" alt="Twitter"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_linkedin'])) : ?>
                                        <li><a href="<?= $speaker['sm_linkedin'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/LinkedIn.svg" alt="LinkedIn"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_instagram'])) : ?>
                                        <li><a href="<?= $speaker['sm_instagram'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Instagram.svg" alt="Instagram"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_facebook'])) : ?>
                                        <li><a href="<?= $speaker['sm_facebook'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Facebook.svg" alt="Facebook"></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="emms22__pre-event__calendar__event-list__event__card__description">
                            <p><?= $speaker['description'] ?></p>
                        </div>
                        <div class="emms22__pre-event__calendar__event-list__event__card__business">
                            <img src="../../admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                            <?php if ( ($dayDuring == 1) && ($liveDayDuring == 0 || $liveDayDuring == 1) ) : ?>
                                <a href="../../speakers-interna.php" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                            <?php elseif ($dayDuring == 2 || $dayDuring == 3) : ?>
                                <a href="../../speakers-interna.php" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                            <?php else : ?>
                                <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio">Ver bio</a>
                            <?php endif; ?>
                            <div class="emms22__pre-event__calendar__event-list__event__card__bio emms22__pre-event__calendar__event-list__event__card__bio--hide bio-speaker">
                                <h4><?= $speaker['name'] ?></h4>
                                <p><?= $speaker['bio'] ?></p>
                                <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio-hide"> ← VOLVER</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="emms22__pre-event__calendar__event-list__event__country">
                        <span><img src="common/html/<?= VERSION ?>/img/flags/arg.png" alt="">(ARG)  p.m</span>
                        <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+2022&iso=20221109T11&p1=51&ah=5" target="_blank">Mira el horario de tu país</a>
                    </div> -->
                </li>
            <?php endforeach; ?>
        </ul>



        <!--------------------- Día 2 ----------------------->


        <div class="emms22__pre-event__calendar__date emms22__fade-in">
            <h3><strong>MIÉRCOLES</strong> 9 DE NOVIEMBRE</h3>
            <?php if ( ($dayDuring == 2) && ($liveDayDuring == 0 || $liveDayDuring == 1) ) : ?>
                <div class="emms22__post-event__calendar__conferences-add">
                    <p>¡YA ESTÁN DISPONIBLES LAS CONFERENCIAS!</p>
                </div>
            <?php elseif ($dayDuring == 3) : ?>
                <div class="emms22__post-event__calendar__conferences-add">
                    <p>¡YA ESTÁN DISPONIBLES LAS CONFERENCIAS!</p>
                </div>
            <?php else : ?>
                <div class="emms22__pre-event__calendar__date__country">
                <span><img src="common/html/<?= VERSION ?>/img/flags/arg.png" alt="Argentina">(ARG) 02:00 p.m</span>
                <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+2022&iso=20221109T11&p1=51&ah=5" target="_blank">Mira el horario de tu país</a>
            </div>
            <?php endif; ?>
        </div>
        <ul class="emms22__pre-event__calendar__event-list emms22__fade-in emms22__show-dk">
            <?php
            $db = new DB(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME);
            $speakers = $db->getSpeakersByDay(2);

            foreach ($speakers as $speaker) : ?>
                <li class="emms22__pre-event__calendar__event-list__event">
                    <div class="emms22__pre-event__calendar__event-list__event__card">
                        <div class="emms22__pre-event__calendar__event-list__event__card__speaker">
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker__image">
                                <img src="../../admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                            </div>
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker__text">
                                <h4><?= $speaker['name'] ?></h4>
                                <h5><?= $speaker['job'] ?></h5>
                                <ul>
                                    <?php if (!empty($speaker['sm_twitter'])) : ?>
                                        <li><a href="<?= $speaker['sm_twitter'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Twitter.svg" alt="Twitter"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_linkedin'])) : ?>
                                        <li><a href="<?= $speaker['sm_linkedin'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/LinkedIn.svg" alt="LinkedIn"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_instagram'])) : ?>
                                        <li><a href="<?= $speaker['sm_instagram'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Instagram.svg" alt="Instagram"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_facebook'])) : ?>
                                        <li><a href="<?= $speaker['sm_facebook'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Facebook.svg" alt="Facebook"></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="emms22__pre-event__calendar__event-list__event__card__description">
                            <p><?= $speaker['description'] ?></p>
                        </div>
                        <div class="emms22__pre-event__calendar__event-list__event__card__business">
                            <img src="../../admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                            <?php if ( ($dayDuring == 2) && ($liveDayDuring == 0 || $liveDayDuring == 1) ) : ?>
                                <a href="../../speakers-interna.php" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                            <?php elseif ($dayDuring == 3) : ?>
                                <a href="../../speakers-interna.php" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                            <?php else : ?>
                                <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio">Ver bio</a>
                            <?php endif; ?>
                            <div class="emms22__pre-event__calendar__event-list__event__card__bio emms22__pre-event__calendar__event-list__event__card__bio--hide bio-speaker">
                                <h4><?= $speaker['name'] ?></h4>
                                <p><?= $speaker['bio'] ?></p>
                                <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio-hide"> ← VOLVER</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="emms22__pre-event__calendar__event-list__event__country">
                        <span><img src="common/html/<?= VERSION ?>/img/flags/arg.png" alt="">(ARG)p.m</span>
                        <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+2022&iso=20221109T11&p1=51&ah=5" target="_blank">Mira el horario de tu país</a>
                    </div> -->
                </li>
            <?php endforeach; ?>
        </ul>
        <ul class="emms22__pre-event__calendar__event-list emms22__fade-in emms22__show-mb main-carousel" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
            <?php foreach ($speakers as $speaker) : ?>
                <li class="emms22__pre-event__calendar__event-list__event carousel-cell">
                    <div class="emms22__pre-event__calendar__event-list__event__card">
                        <div class="emms22__pre-event__calendar__event-list__event__card__speaker">
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker__image">
                                <img src="../../admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                            </div>
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker__text">
                                <h4><?= $speaker['name'] ?></h4>
                                <h5><?= $speaker['job'] ?></h5>
                                <ul>
                                    <?php if (!empty($speaker['sm_twitter'])) : ?>
                                        <li><a href="<?= $speaker['sm_twitter'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Twitter.svg" alt="Twitter"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_linkedin'])) : ?>
                                        <li><a href="<?= $speaker['sm_linkedin'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/LinkedIn.svg" alt="LinkedIn"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_instagram'])) : ?>
                                        <li><a href="<?= $speaker['sm_instagram'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Instagram.svg" alt="Instagram"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_facebook'])) : ?>
                                        <li><a href="<?= $speaker['sm_facebook'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Facebook.svg" alt="Facebook"></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="emms22__pre-event__calendar__event-list__event__card__description">
                            <p><?= $speaker['description'] ?></p>
                        </div>
                        <div class="emms22__pre-event__calendar__event-list__event__card__business">
                            <img src="../../admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                            <?php if ( ($dayDuring == 2) && ($liveDayDuring == 0 || $liveDayDuring == 1) ) : ?>
                                <a href="../../speakers-interna.php" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                            <?php elseif ($dayDuring == 3) : ?>
                                <a href="../../speakers-interna.php" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                            <?php else : ?>
                                <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio">Ver bio</a>
                            <?php endif; ?>
                            <div class="emms22__pre-event__calendar__event-list__event__card__bio emms22__pre-event__calendar__event-list__event__card__bio--hide bio-speaker">
                                <h4><?= $speaker['name'] ?></h4>
                                <p><?= $speaker['bio'] ?></p>
                                <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio-hide"> ← VOLVER</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="emms22__pre-event__calendar__event-list__event__country">
                        <span><img src="common/html/<?= VERSION ?>/img/flags/arg.png" alt="">(ARG)  p.m</span>
                        <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+2022&iso=20221109T11&p1=51&ah=5" target="_blank">Mira el horario de tu país</a>
                    </div> -->
                </li>
            <?php endforeach; ?>
        </ul>



        <!--------------------- Día 3 ----------------------->


        <div class="emms22__pre-event__calendar__date emms22__fade-in">
            <h3><strong>JUEVES</strong> 10 DE NOVIEMBRE</h3>
            <?php if ( ($dayDuring == 3) && ($liveDayDuring == 0 || $liveDayDuring == 1) ) : ?>
                <div class="emms22__post-event__calendar__conferences-add">
                    <p>¡YA ESTÁN DISPONIBLES LAS CONFERENCIAS!</p>
                </div>
            <?php else : ?>
                <div class="emms22__pre-event__calendar__date__country">
                    <span><img src="common/html/<?= VERSION ?>/img/flags/arg.png" alt="Argentina">(ARG) 02:00 p.m</span>
                    <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+2022&iso=20221109T11&p1=51&ah=5" target="_blank">Mira el horario de tu país</a>
                </div>
            <?php endif; ?>
        </div>
        <ul class="emms22__pre-event__calendar__event-list emms22__fade-in emms22__show-dk">
            <?php
            $speakers = $db->getSpeakersByDay(3);
            foreach ($speakers as $speaker) : ?>
                <li class="emms22__pre-event__calendar__event-list__event">
                    <div class="emms22__pre-event__calendar__event-list__event__card">
                        <div class="emms22__pre-event__calendar__event-list__event__card__speaker">
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker__image">
                                <img src="../../admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                            </div>
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker__text">
                                <h4><?= $speaker['name'] ?></h4>
                                <h5><?= $speaker['job'] ?></h5>
                                <ul>
                                    <?php if (!empty($speaker['sm_twitter'])) : ?>
                                        <li><a href="<?= $speaker['sm_twitter'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Twitter.svg" alt="Twitter"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_linkedin'])) : ?>
                                        <li><a href="<?= $speaker['sm_linkedin'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/LinkedIn.svg" alt="LinkedIn"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_instagram'])) : ?>
                                        <li><a href="<?= $speaker['sm_instagram'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Instagram.svg" alt="Instagram"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_facebook'])) : ?>
                                        <li><a href="<?= $speaker['sm_facebook'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Facebook.svg" alt="Facebook"></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="emms22__pre-event__calendar__event-list__event__card__description">
                            <p><?= $speaker['description'] ?></p>
                        </div>
                        <div class="emms22__pre-event__calendar__event-list__event__card__business">
                            <img src="../../admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                            <?php if ( ($dayDuring == 3) && ($liveDayDuring == 0 || $liveDayDuring == 1) ) : ?>
                                <a href="../../speakers-interna.php" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                            <?php else : ?>
                                <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio">Ver bio</a>
                            <?php endif; ?>
                            <div class="emms22__pre-event__calendar__event-list__event__card__bio emms22__pre-event__calendar__event-list__event__card__bio--hide bio-speaker">
                                <h4><?= $speaker['name'] ?></h4>
                                <p><?= $speaker['bio'] ?></p>
                                <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio-hide"> ← VOLVER</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="emms22__pre-event__calendar__event-list__event__country">
                        <span><img src="common/html/<?= VERSION ?>/img/flags/arg.png" alt="">(ARG)  p.m</span>
                        <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+2022&iso=20221109T11&p1=51&ah=5" target="_blank">Mira el horario de tu país</a>
                    </div> -->
                </li>
            <?php endforeach; ?>
        </ul>
        <ul class="emms22__pre-event__calendar__event-list emms22__fade-in emms22__show-mb main-carousel" data-flickity='{ "wrapAround": true, "autoPlay": true }'>
            <?php foreach ($speakers as $speaker) : ?>
                <li class="emms22__pre-event__calendar__event-list__event carousel-cell">
                    <div class="emms22__pre-event__calendar__event-list__event__card">
                        <div class="emms22__pre-event__calendar__event-list__event__card__speaker">
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker__image">
                                <img src="../../admin/speakers/uploads/<?= $speaker['image'] ?>" alt="<?= $speaker['alt_image'] ?>">
                            </div>
                            <div class="emms22__pre-event__calendar__event-list__event__card__speaker__text">
                                <h4><?= $speaker['name'] ?></h4>
                                <h5><?= $speaker['job'] ?></h5>
                                <ul>
                                    <?php if (!empty($speaker['sm_twitter'])) : ?>
                                        <li><a href="<?= $speaker['sm_twitter'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Twitter.svg" alt="Twitter"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_linkedin'])) : ?>
                                        <li><a href="<?= $speaker['sm_linkedin'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/LinkedIn.svg" alt="LinkedIn"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_instagram'])) : ?>
                                        <li><a href="<?= $speaker['sm_instagram'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Instagram.svg" alt="Instagram"></a></li>
                                    <?php endif; ?>
                                    <?php if (!empty($speaker['sm_facebook'])) : ?>
                                        <li><a href="<?= $speaker['sm_facebook'] ?>" target="_blank"><img src="common/html/<?= VERSION ?>/img/icons/Facebook.svg" alt="Facebook"></a></li>
                                    <?php endif; ?>
                                </ul>
                            </div>
                        </div>
                        <div class="emms22__pre-event__calendar__event-list__event__card__description">
                            <p><?= $speaker['description'] ?></p>
                        </div>
                        <div class="emms22__pre-event__calendar__event-list__event__card__business">
                            <img src="../../admin/speakers/uploads/<?= $speaker['image_company'] ?>" alt="<?= $speaker['alt_image_company'] ?>">
                            <?php if ( ($dayDuring == 3) && ($liveDayDuring == 0 || $liveDayDuring == 1) ) : ?>
                                <a href="../../speakers-interna.php" class="emms22__pre-event__calendar__event-list__event__card__btn-conference">Ver conferencia</a>
                            <?php else : ?>
                                <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio">Ver bio</a>
                            <?php endif; ?>
                            <div class="emms22__pre-event__calendar__event-list__event__card__bio emms22__pre-event__calendar__event-list__event__card__bio--hide bio-speaker">
                                <h4><?= $speaker['name'] ?></h4>
                                <p><?= $speaker['bio'] ?></p>
                                <a class="emms22__pre-event__calendar__event-list__event__card__btn-bio-hide"> ← VOLVER</a>
                            </div>
                        </div>
                    </div>
                    <!-- <div class="emms22__pre-event__calendar__event-list__event__country">
                        <span><img src="common/html/<?= VERSION ?>/img/flags/arg.png" alt="">(ARG)  p.m</span>
                        <a href="https://www.timeanddate.com/worldclock/fixedtime.html?msg=EMMS+2022&iso=20221109T11&p1=51&ah=5" target="_blank">Mira el horario de tu país</a>
                    </div> -->
                </li>
            <?php endforeach; ?>
        </ul>



    </div>
</div>

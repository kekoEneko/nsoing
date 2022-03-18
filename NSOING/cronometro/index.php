<?php require_once('header.php'); ?>

    <h1 class="site-title text-center"><i class="fa fa-clock-o" aria-hidden="true"></i> CRONO</h1>
    <h2 class="text-center">
        <a href="http://webcamp.es" target="_blank">webcamp.es</a>
    </h2>

    <div class="separator"></div>

    <div id="content">
        <div class="contador container">
            <div class="times row crono-width">
                <div class="hour-time time text-center col-md-4">
                    <span id="hour">00</span> <i>hours</i>
                </div>
                <div class="minute-time time text-center col-md-4">
                    <span id="minute">00</span> <i>minutes</i>
                </div>
                <div class="second-time time text-center col-md-4">
                    <span id="second">00</span> <i>seconds</i>
                </div>
            </div>
            <div class="row crono-width">
                <div class="start-btn col-md-6 text-center btn-crono">
                    <div class="start">Start</div>
                </div>
                <div class="stop-btn col-md-6 text-center btn-crono">
                    <div class="stop">Stop</div>
                </div>
            </div>
        </div>
    </div><!-- /#content -->

    <?php require_once('footer.php'); ?>
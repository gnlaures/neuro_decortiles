<nav class="l-nav">
    <div class="l-nav__main">
        <div class="u-container">
            <div class="l-nav__brand">
                <?php $cBrand = array('brandModifier' => '', 'url' => 'home');
                include('parts/components/c-brand.php'); ?>
            </div>
            <div class="l-nav__content">
                <div class="l-nav__search">
                    <?php $cSearch = array('placeholder' => '');
                    include('parts/components/c-search.php'); ?>
                </div>
                <div class="l-nav__lang">
                    <?php $cLanguages = array('extraClassMenu' => '--black --click');
                    include('parts/components/c-languages.php'); ?>
                </div>
                <div class="l-nav__menu">
                    <?php $cMainMenu = array('extraClass' => '--black --click');
                    include('parts/components/c-mainMenu.php'); ?>
                </div>
            </div>
            <div class="l-nav__hamburguer">
                <?php $cHamburguer = array('extraClass' => '--primary --regular --rounded js-openNavMobile');
                include('parts/components/c-hamburguer.php'); ?>
            </div>
        </div>
    </div>
</nav>

<div class="l-navMobile">
    <div class="l-navMobile__mask js-closeNavMobile"></div>
    <div class="l-navMobile__content --right">
        <div class="l-navMobile__close">
            <?php $cHamburguer = array('extraClass' => '--primary --regular --rounded js-closeNavMobile is-active');
            include('parts/components/c-hamburguer.php'); ?>
        </div>
        <div class="l-navMobile__hero">
            <div class="l-navMobile__search">
                <?php $cSearch = array('placeholder' => '');
                include('parts/components/c-search.php'); ?>
            </div>
            <div class="l-navMobile__menu">
                <?php $cMainMenu = array('extraClass' => '--black --vertical --click');
                include('parts/components/c-mainMenu.php'); ?>
            </div>
            <div class="l-navMobile__lang">
                <?php $cLanguages = array('extraClassMenu' => '--black --vertical --click');
                include('parts/components/c-languages.php'); ?>
            </div>
        </div>
    </div>
</div>

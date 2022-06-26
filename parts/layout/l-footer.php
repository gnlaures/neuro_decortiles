<footer class="l-footer" data-aos="fade-up">
    <div class="u-container">
        <div class="l-footer__content">
            <div class="l-footer__col u-fw30">
                <div class="l-footer__brand">
                    <?php $cBrand = array('brandModifier' => '--white', 'url' => 'home');
                    include('parts/components/c-brand.php'); ?>
                </div>
                <div class="l-footer__menu">
                    <ul class="c-responsiveGrid --start" data-maxw-breaks="740, 580, 380" data-maxw-cols="3, 2, 1" data-cols-init="2">
                        <li><a href="quem-somos">Quem Somos</a></li>
                        <li><a href="https://www.decortiles.com/lancamentos-2021/" target="_blank">Hotsite Lançamentos</a></li>
                        <li><a href="produtos">Produtos</a></li>
                        <li><a href="#webapp" class="js-m-modal__open">WebApp</a></li>
                        <li><a href="catalogo">Catálogo</a></li>
                        <li><a href="https://www.connectarch.com.br" target="_blank">Connectarch</a></li>
                        <li><a href="blog">Blog</a></li>
                        <li><a href="error">BIM</a></li>
                        <li><a href="onde-encontrar">Onde Encontrar</a></li>
                        <li><a href="https://3dwarehouse.sketchup.com/collection/02c6031d-980b-4e03-aa32-88191f5e620d/DECORTILES" target="_blank">SketchUp</a></li>
                        <li><a href="contato">Contato</a></li>
                    </ul>
                </div>
            </div>
            <div class="l-footer__col u-fw30">
                <div class="l-footer__social">
                    <h3>Siga-nos</h3>
                    <?php $cSocialList = array('extraClass' => '--default --white');
                    include('parts/components/c-socialList.php')?>
                </div>
                <div class="l-footer__contact">
                    <ul>
                        <li><a href="tel:40042971">4004 2971 (Capitais)</a></li>
                        <li><a href="tel:03007897771">0300 789 7771 (Outras localidades)</a></li>
                        <li><a href="tel:4834477777">48 3447.7777</a></li>
                        <li><a href="contato">Atendimento: Seg à Sex das 8h às 18h</a></li>
                        <li><a href="http://decortiles.neuro.local/index.php">sac@decortiles.com</a></li>
                    </ul>
                </div>
            </div>
            <div class="l-footer__col u-fw40">
                <div class="l-footer__newsletter">
                    <h3>Cadastre-se</h3>
                    <p>Receba todas as novidades de lançamentos Decortiles com exclusividade!</p>
                    <?php include('parts/components/c-newsletter.php')?>
                </div>
            </div>
        </div>
    </div>
</footer>
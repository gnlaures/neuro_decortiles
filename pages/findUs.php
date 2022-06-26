<main class="l-page --inner --findUs">
    <section class="s-findUs">
        <div class="s-findUs__aside">
            <div class="s-findUs__aside__mobileControl u-dnone js-s-findUs__mobileControl">
                <?php include('media/img/assets/caret_white_left.svg')?>
            </div>
            <div class="s-findUs__aside__row">
                <h1>Encontre a Loja mais próxima</h1>
                <p>Selecione o tipo de pesquisa que deseja fazer.</p>
                <ul class="s-findUs__aside__filter">
                    <li>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Cidade</span>
                            </div>
                            <div class="c-toggleList__content">
                                <form action="#" class="c-form --fullBorder --findUsFormByCity" id="findUsFormByCity">
                                    <ul class="c-form__fieldsHero">
                                        <li class="c-form__field u-fw100">
                                            <input id="findUsFormByCity__cidade" type="text" name="cidade" class="field" placeholder="Digite a cidade">
                                        </li>
                                        <li class="c-form__field --btn">
                                            <button><?php include('media/img/icons/icon_search.svg'); ?></button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Produto</span>
                            </div>
                            <div class="c-toggleList__content">
                                <form action="#" class="c-form --fullBorder" id="findUsFormByProduct">
                                    <ul class="c-form__fieldsHero">
                                        <li class="c-form__field u-fw100">
                                            <label for="findUsFormByProduct_cidade">Digite a cidade</label>
                                            <input id="findUsFormByProduct_cidade" type="text" name="cidade" class="field" placeholder="Cidade">
                                        </li>
                                        <li class="c-form__field u-fw100">
                                            <label for="findUsFormByProduct_produto">Digite o nome do produto e encontre as lojas que o vendem.</label>
                                            <input id="findUsFormByProduct_produto" type="text" name="produto" class="field" placeholder="Nome do produto">
                                        </li>
                                        <li class="c-form__field u-fw50 --btn">
                                            <button class="c-btn --black u-ttu">Buscar</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="c-toggleList --white">
                            <div class="c-toggleList__header">
                                <span>Nome da Loja</span>
                            </div>
                            <div class="c-toggleList__content">
                                <form action="#" class="c-form --fullBorder" id="findUsFormByStore">
                                    <ul class="c-form__fieldsHero">
                                        <li class="c-form__field u-fw100">
                                            <label for="findUsFormByStore_store">Digite o nome da loja que deseja procurar.</label>
                                            <input id="findUsFormByStore_store" type="text" name="store" class="field" placeholder="Nome da loja">
                                        </li>
                                        <li class="c-form__field u-fw50 --btn">
                                            <button class="c-btn --black u-ttu">Buscar</button>
                                        </li>
                                    </ul>
                                </form>
                            </div>
                        </div>
                    </li>
                </ul>
                <div class="s-findUs__aside__feedback u-dnone">
                    <p>Mostrando <strong>2 resultado(s)</strong>.</p>
                    <p>Estas lojas efetuaram a compra deste item nos últimos 3 meses. Entre em contato para confirmar a disponibilidade.</p>
                </div>
                <ul class="s-findUs__aside__results u-dnone">
                    <li>
                        <div class="c-cardFindUs">
                            <div class="c-cardFindUs__icon">
                                <?php include('media/img/icons/icon_map.svg'); ?>
                                <h3>Alianda</h3>
                            </div>
                            <div class="c-cardFindUs__content">
                                <address>CENTENARIO, 242, 88804-000, PINHEIRINHO - CRICIUMA - SC</address>
                                <p><strong>TELEFONE:</strong> 04834381753</p>
                                <p><strong>E-MAIL:</strong> sandrofontana@alianda.com.br</p>
                            </div>
                        </div>
                    </li>
                    <li>
                        <div class="c-cardFindUs">
                            <div class="c-cardFindUs__icon">
                                <?php include('media/img/icons/icon_map.svg'); ?>
                                <h3>TOK DE ARTE</h3>
                            </div>
                            <div class="c-cardFindUs__content">
                                <address>CENTENARIO, 242, 88804-000, PINHEIRINHO - CRICIUMA - SC</address>
                                <p><strong>TELEFONE:</strong> 04834381753</p>
                                <p><strong>E-MAIL:</strong> sandrofontana@alianda.com.br</p>
                            </div>
                        </div>
                    </li>
                </ul>
            </div>
            <div class="s-findUs__aside__row">
                <ul class="s-findUs__aside__footerBtns">
                    <li><a href="#showrooms" class="c-btn --gray u-ttu js-m-modal__open">Showrooms</a></li>
                    <li><a class="c-btn --gray u-ttu js-s-findUs__toggleDecortiles">Galeria Decortiles</a></li>
                    <li><a href="#salas-especificacao" class="c-btn --gray u-ttu js-m-modal__open">Salas de Especificação</a></li>
                </ul>
                <?php $cSocialList = array('extraClass' => '--default --black');
                include('parts/components/c-socialList.php')?>
            </div>
        </div>
        <div class="s-findUs__content">
            <div class="s-findUs__content__map">
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d7916482.029618051!2d-54.07198524820102!3d-14.342205381816191!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x9c59c7ebcc28cf%3A0x295a1506f2293e63!2sBrasil!5e0!3m2!1spt-BR!2sbr!4v1656119280543!5m2!1spt-BR!2sbr" style="border:0;" id="map" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>
            <div class="s-findUs__content__gallery">
                <iframe src="https://my.matterport.com/show/?m=ak74pn6eKUS" style="border:0;" id="galeria" loading="lazy"></iframe>
            </div>
        </div>
    </section>
</main>

<?php include('parts/modal/m-showroom.php'); ?>
<?php include('parts/modal/m-specificationsRooms.php'); ?>
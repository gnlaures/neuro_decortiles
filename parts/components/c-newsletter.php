<div class="c-newsletter">
    <form action="busca" method="get" id="FormNewsletterFooter" class="c-form">
        <ul class="c-form__fieldsHero">
            <li class="c-form__field u-fw75">
                <input id="FormNewsletterFooter__email" type="email" name="email" class="field" placeholder="Digite seu e-mail">
            </li>
            <li class="c-form__field u-fw25 --btn">
                <button class="c-btn --black --big">Enviar</button>
            </li>
            <li class="c-form__field u-fw100 --check --checkbox">
                <ul class="checkHero">
                    <li>
                        <label for="FormNewsletterFooter__accept">Li e concordo com a <a href="privacidade" target="_blank">Política de Privacidade</a>.</label>
                        <input type="checkbox" id="FormNewsletterFooter__accept">
                    </li>
                </ul>
            </li>
        </ul>
        <?php
            $feedbackForm = array('extraClass' => '--darkTheme');
            include('parts/components/c-feedbackForm.php');
        ?>
    </form>
</div>
<?php
$params = $_POST;
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Potvrda Hipertonin 2u1</title>

    <style type="text/css">
        html {
            font-family: sans-serif;
            line-height: 1.15;
            -ms-text-size-adjust: 100%;
            -webkit-text-size-adjust: 100%;
        }

        body {
            margin: 0;
        }

        article,
        aside,
        footer,
        header,
        nav,
        section {
            display: block;
        }

        h1 {
            font-size: 2em;
            margin: 0.67em 0;
        }

        figcaption,
        figure,
        main {
            display: block;
        }

        figure {
            margin: 1em 40px;
        }

        hr {
            box-sizing: content-box;
            height: 0;
            overflow: visible;
        }

        pre {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        a {
            background-color: transparent;
            -webkit-text-decoration-skip: objects;
        }

        a:active,
        a:hover {
            outline-width: 0;
        }

        abbr[title] {
            border-bottom: none;
            text-decoration: underline;
            text-decoration: underline dotted;
        }

        b,
        strong {
            font-weight: inherit;
        }

        b,
        strong {
            font-weight: bolder;
        }

        code,
        kbd,
        samp {
            font-family: monospace, monospace;
            font-size: 1em;
        }

        dfn {
            font-style: italic;
        }

        mark {
            background-color: #ff0;
            color: #000;
        }

        small {
            font-size: 80%;
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline;
        }

        sub {
            bottom: -0.25em;
        }

        sup {
            top: -0.5em;
        }

        audio,
        video {
            display: inline-block;
        }

        audio:not([controls]) {
            display: none;
            height: 0;
        }

        img {
            border-style: none;
        }

        svg:not(:root) {
            overflow: hidden;
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: sans-serif;
            font-size: 100%;
            line-height: 1.15;
            margin: 0;
        }

        button,
        input {
            overflow: visible;
        }

        button,
        select {
            text-transform: none;
        }

        button,
        html [type="button"],
        [type="reset"],
        [type="submit"] {
            -webkit-appearance: button;
        }

        button::-moz-focus-inner,
        [type="button"]::-moz-focus-inner,
        [type="reset"]::-moz-focus-inner,
        [type="submit"]::-moz-focus-inner {
            border-style: none;
            padding: 0;
        }

        button:-moz-focusring,
        [type="button"]:-moz-focusring,
        [type="reset"]:-moz-focusring,
        [type="submit"]:-moz-focusring {
            outline: 1px dotted ButtonText;
        }

        fieldset {
            border: 1px solid #c0c0c0;
            margin: 0 2px;
            padding: 0.35em 0.625em 0.75em;
        }

        legend {
            box-sizing: border-box;
            color: inherit;
            display: table;
            max-width: 100%;
            padding: 0;
            white-space: normal;
        }

        progress {
            display: inline-block;
            vertical-align: baseline;
        }

        ol,
        ul {
            list-style: none;
        }

        textarea {
            overflow: auto;
        }

        [type="checkbox"],
        [type="radio"] {
            box-sizing: border-box;
            padding: 0;
        }

        [type="number"]::-webkit-inner-spin-button,
        [type="number"]::-webkit-outer-spin-button {
            height: auto;
        }

        [type="search"] {
            -webkit-appearance: textfield;
            outline-offset: -2px;
        }

        [type="search"]::-webkit-search-cancel-button,
        [type="search"]::-webkit-search-decoration {
            -webkit-appearance: none;
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit;
        }

        details,
        menu {
            display: block;
        }

        summary {
            display: list-item;
        }

        canvas {
            display: inline-block;
        }

        template {
            display: none;
        }

        [hidden] {
            display: none;
        }

        .success-page {
            line-height: 1;
            height: 100%;
            font-family: Arial, serif;
            font-size: 15px;
            color: #313e47;
            width: 100%;
            background: #fff;
            position: fixed;
            z-index: 99999;
            top: 0;
            left: 0;
            overflow: scroll;
        }

        .container .order_number {
            text-align: center;
            font-family: Arial, serif;
            font-size: 30px;
            text-transform: uppercase;
            color: #424242;
            line-height: 38px;
            margin: 25px 0 25px 0;
        }

        .container .order_number span {
            color: #e14740;
        }

        .container .url_more_info {
            text-align: center;
            font-size: 20px;
            display: block;
            margin: 20px 0;
        }

        .container .url_more_info:hover {
            color: #e14740;
        }

        .container {
            max-width: 960px;
            padding: 70px 30px 70px 30px;
            margin: 0 auto;
        }

        .success-page__message_success {
            text-align: center;
        }

        .success-page__message_fail {
            margin: 25px 0 50px 0;
            text-align: center;

        }

        .list-info {
            text-align: center;
        }

        .list-info__list {
            text-align: left;
            display: inline-block;
            padding: 0;
        }

        .list-info__item {
            margin: 11px 0;
        }

        .list-info__text {
            width: 150px;
            display: inline-block;
            font-weight: bold;
            font-style: normal;
        }

        .success-page__form {
            position: relative;
            text-align: center;
            margin-top: 40px;
        }

        .success-page__form__error {
            position: absolute;
            display: none;
            top: -28px;
            color: #CA3F3F;
        }

        .success-page__form__container {
            display: block;
        }

        .success-page__form__input {
            height: 30px;
            width: 88%;
            max-width: 300px;
            font-size: 14px;
            padding-right: 10px;
            padding-left: 10px;
            outline: none;
            border-radius: 5px;
            border: 1px solid #B6B6B6;
            margin-bottom: 10px;
        }

        .success-page__form__button {
            display: inline-block;
            outline: none;
            cursor: pointer;
            text-align: center;
            text-decoration: none;
            font: 15px/100% Arial, Helvetica, sans-serif;
            padding: .55em 2em .6em;
            text-shadow: 0 1px 1px rgba(0, 0, 0, .3);
            border-radius: .5em;
            box-shadow: 0 1px 2px rgba(0, 0, 0, .2);
            color: #d9eef7;
            border: solid 1px #0076a3;
            background: #0095cd;
            background: -webkit-gradient(linear, left top, left bottom, from(#00adee), to(#0078a5));
            background: -moz-linear-gradient(top, #00adee, #0078a5);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#00adee', endColorstr='#0078a5');
            height: 15px;
            width: 27%;
        }

        .success-page__form__button:hover {
            text-decoration: none;
            color: #d9eef7;
            background: #007ead;
            background: -webkit-gradient(linear, left top, left bottom, from(#0095cc), to(#00678e));
            background: -moz-linear-gradient(top, #0095cc, #00678e);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0095cc', endColorstr='#00678e');
        }

        .success-page__form__button:active {
            position: relative;
            top: 1px;
            color: #80bed6;
            background: -webkit-gradient(linear, left top, left bottom, from(#0078a5), to(#00adee));
            background: -moz-linear-gradient(top, #0078a5, #00adee);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0078a5', endColorstr='#00adee');
        }

        .container .disabled {
            color: #80bed6;
            background: -webkit-gradient(linear, left top, left bottom, from(#0078a5), to(#00adee));
            background: -moz-linear-gradient(top, #0078a5, #00adee);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0078a5', endColorstr='#00adee');
        }

        .container .disabled:hover {
            cursor: default;
            color: #80bed6;
            background: -webkit-gradient(linear, left top, left bottom, from(#0078a5), to(#00adee));
            background: -moz-linear-gradient(top, #0078a5, #00adee);
            filter: progid:DXImageTransform.Microsoft.gradient(startColorstr='#0078a5', endColorstr='#00adee');
        }

        .container .disabled:active {
            top: 0
        }

        .container .mail_s {
            color: green;
            position: inherit;
            top: 0;
        }

        .success-page__title {
            font-size: 28px;
            line-height: 44px;
            color: #313e47;
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
        }

        .success-page__text {
            font-size: 18px;
            font-weight: bold;
            text-align: center;
            margin: 20px 0;
        }

        .success-page__message_fail__link {
            color: #69B9FF;
        }

        .success-page__message_fail__link:hover {
            color: #e14740;
        }

        @media (max-width: 320px) {
            .list-info__text {
                display: block;
            }
        }
    </style>
</head>

<body>
    <div class="mod success-page">
        <div class="container">
            <h2 class="success-page__title">Molimo vas da proverite još jednom informacije koje ste upisali</h2>
            <p class="success-page__message_success">Ubrzo će vas kontaktirati naš operateru i potvrditi vašu porudžbinu.</p>

            <!-- <h3 class="success-page__text">Molimo vas da proverite informacije koje ste uneli.</h3> -->

            <form class="success-page__form" action="thankyou.php" method="post">
                <input name="package_id" type="hidden" value="<?php echo $params['package_id']; ?>">
                <input name="country_code" type="hidden" value="<?php echo $params['country_code']; ?>">
                <input name="offer_code" type="hidden" value="<?php echo $params['offer_code']; ?>">
<input name="other[site_name]" type="hidden" value="moczdravlja.com">
                <?php if ($params['clickid']) : ?>
                    <input name="clickid" type="hidden" value="<?php echo $params['clickid']; ?>">
                <?php endif ?>
                <input name="from_mobiglide_lander" type="hidden" value="1">
                <span class="success-page__form__error" id="error_mail"></span>

                <div class="success-page__form__container">
                    <div><input name="name" placeholder="Ime" class="success-page__form__input" value="<?php echo $params['name']; ?>"></div>

                    <div><input name="phone" placeholder="Telefon" class="success-page__form__input" value="<?php echo $params['phone']; ?>">
                    </div>

                    <input type="hidden" name="order_id" value="11570926" class="success-page__form__input">
                    <button class="success-page__form__button" style="height: 40px">Poslati</button>
                </div>

            </form>

        </div>
    </div>

</body>

</html>

<!DOCTYPE html>
<html>

<head>
    <title></title>

    <style>
        p,
        div,
        h3 {
            margin: 0px;
        }

        #header {
            width: 100%;
            background-color: #f8f8f8;
        }

        #logo {
            padding: 18px 0px 18px 20px;
            float: left;
            width: 52px;
        }

        .header-heading {
            float: right;
            font-size: 14px;
            padding: 23.5px 0px;
            padding-left: 225px;
            color: #111111;
            line-height: 17px;
        }

        #wrapper {
            margin: 22px;
        }

        .content-section {
            border: 1px solid #f4f4f4;
            border-radius: 4px;
            width: 756px;
        }

        .content-section__header {
            background-color: #f4f4f4;
            font-size: 14px;
            padding: 7px 16px;
            color: #1c1c1c;
            line-height: 17px;
            border-radius: 4px 4px 0px 0px;
        }

        .content-section__body {
            padding: 25px;
            border-radius: 0px 0px 4px 4px;
        }

        .content-item {
            margin-bottom: 13px;
        }

        .content-item__label {
            width: 220px;
            float: left;
            font-size: 13px;
            line-height: 16px;
            color: #101010 !important;
        }

        .content-item__value {
            width: 484px;
            float: right;
            font-size: 13px;
            line-height: 16px;
            font-weight: normal;
            color: #333333 !important;
        }

        .divider {
            margin: 0px auto;
            height: 1px;
            background-color: #f4f4f4;
        }

        .divider--standard {
            width: 746px;
        }

        .divider--special {
            width: 704px;
        }

        .checkbox {
            vertical-align: middle;
        }

        .checkbox__icon {
            float: left;
            width: 13px;
        }

        .checkbox__text {
            float: right;
            font-size: 13px;
            margin-left: 10px;
            line-height: 16px;
        }

        .content-end {
            font-size: 12px;
            padding: 18px 25px;
            line-height: 20px;
            font-weight: 400;
        }

        .mb-0 {
            margin-bottom: 0px;
        }

        .mt-30 {
            margin-top: 30px;
        }

        .mb-13 {
            margin-bottom: 13px;
        }

        .mb-7 {
            margin-bottom: 7px;
        }

        .mb-10 {
            margin-bottom: 10px;
        }

        .pb-22 {
            padding-bottom: 22px;
        }

        .content-container {
            padding: 25px;
        }

        .black-placeholder {
            background-color: #000;
            color: #000;
            height: 22px;
        }

        .email {
            width: 232px;
        }

        .dob {
            width: 132px;
        }

        .phone {
            width: 165px;
        }

        .py-3 {
            padding: 3px 0px;
        }
    </style>
</head>

<body>
    <div id="container">
        <div id="header">
            <div id="logo">
                <img src="http://localhost/pdf/public/icon.png" />
            </div>
            <div class="header-heading">
                <b>Exclusive Content Submission</b>
            </div>
        </div>
        <div id="wrapper">
            <section class="content-section">
                <div class="content-section__header"><strong>Submitted Content</strong></div>
                <div class="content-section__body">
                    <div class="content-item">
                        <div class="content-item__label">Uploaded file:</div>
                        <div class="content-item__value">
                            https://downloads.company.com/videos/KmbVthfgbrdGpwpao.mov
                        </div>
                    </div>

                    <div class="content-item">
                        <div class="content-item__label">Public video link:</div>
                        <div class="content-item__value">https://www.tiktok.com/t/ZAdP8R5fg53BKx/</div>
                    </div>

                    <div class="content-item">
                        <div class="content-item__label">Suggest title:</div>
                        <div class="content-item__value">
                            Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do
                        </div>
                    </div>

                    <div class="content-item mb-0">
                        <div class="content-item__label">Video description:</div>
                        <div class="content-item__value">
                            <?= trimText("Sit in occaecat commodo non exercitation magna aute commodo aliqua eiusmod non occaecat. Do officia ipsum magna nostrud. Minim eu excepteur amet id ea exercitation excepteur eu. Voluptate in fugiat sunt pariatur sint commodo cillum commodo irure esse tempor incididunt. Dolore elit sit adipisicing sunt fugiat nisi officia cillum ullamco adipisicing ex cillum id consequat. Reprehenderit nostrud est dolore quis esse aute ex est laborum occaecat. Velit qui eu non reprehenderit pariatur dolore laboris."); ?>
                        </div>
                    </div>

                </div>
            </section>
            <section class="content-section mt-30">
                <div class="content-section__header"><strong>Submitter Details</strong></div>
                <div class="content-section__body pb-22">
                    <div class="content-item mb-0">
                        <div class="content-item__label">Full name:</div>
                        <div class="content-item__value mb-10">Magnus Garrett</div>
                    </div>

                    <div class="content-item mb-0">
                        <div class="content-item__label py-3">Email address:</div>
                        <div class="content-item__value mb-7">
                            <div class="black-placeholder email"></div>
                        </div>
                    </div>

                    <div class="content-item mb-0">
                        <div class="content-item__label py-3">Date of birth:</div>
                        <div class="content-item__value mb-7">
                            <div class="black-placeholder dob"></div>
                        </div>
                    </div>

                    <div class="content-item mb-0">
                        <div class="content-item__label  py-3">Phone number:</div>
                        <div class="content-item__value">
                            <div class="black-placeholder phone"></div>
                        </div>
                    </div>

                </div>
            </section>
            <section class="content-section mt-30">
                <div class="content-section__header"><strong>Exclusive Submission Confirmation</strong></div>
                <div class="content-section__body">
                    <div class="content-item">
                        <div class="content-item__label">Form submitted on:</div>
                        <div class="content-item__value">September 26, 2024 at 00:22:30 (UTC)</div>
                    </div>

                    <div class="content-item">
                        <div class="content-item__label"></div>
                        <div class="content-item__value">September 26, 2024 at 00:22:30 (GMT)</div>
                    </div>

                    <div class="content-item">
                        <div class="content-item__label"></div>
                        <div class="content-item__value">September 26, 2024 at 00:22:30 (CET)</div>
                    </div>

                    <div class="content-item">
                        <div class="content-item__label"></div>
                        <div class="content-item__value">September 26, 2024 at 00:22:30 (ET)</div>
                    </div>

                    <div class="content-item mb-0">
                        <div class="content-item__label"></div>
                        <div class="content-item__value">September 26, 2024 at 00:22:30 (PT)</div>
                    </div>

                </div>

                <div class="divider divider--standard"></div>
                <div class="content-container">
                    <div class="checkbox mb-13">
                        <div class="checkbox__icon"><img src='http://localhost/pdf/public/checkiconss.svg'
                                alt="Checkbox icon" /></div>
                        <div class="checkbox__text">Yes, I have read and agreed to the <strong>Terms of
                                Service</strong>.</div>
                    </div>

                    <div class="checkbox">
                        <div class="checkbox__icon"><img src='http://localhost/pdf/public/checkiconss.svg'
                                alt="Checkbox icon" /></div>
                        <div class="checkbox__text">Yes, I have read and agreed to the <strong>Terms of
                                Submission</strong>.</div>
                    </div>
                </div>


                <div class="divider divider--special"></div>
                <p class="content-end">
                    Upon uploading, submitting, emailing, posting, publishing or otherwise transmitting any User
                    Submissions to
                    the Site, you retain ownership of any intellectual property rights you hold in and to the User
                    Submissions;
                    however, you grant Company an <b>exclusive</b>, <b>worldwide</b>, assignable and sublicensable,
                    <b>perpetual</b> and <b>irrevocable</b>
                    right and license to use, reproduce, modify, adapt, rearrange, promote, market, prepare derivative
                    works
                    based on, perform, display, publish, distribute, transmit, stream, broadcast and otherwise exploit
                    such User
                    Submissions in any form, method, medium, platform or technology now known or later developed,
                    including
                    without limitation on the Site and third party websites, podcast, video game consoles and services,
                    mobile
                    apps, video-on-demand and television (the “Licensed Rights”).
                </p>

            </section>

        </div>
    </div>
</body>

</html>

<?php
function trimText($text, $maxLength = 74)
{
    $ending = '...';
    if (strlen($text) > $maxLength) {
        return substr($text, 0, $maxLength - strlen($ending)) . $ending;
    }
    return $text;
}
?>
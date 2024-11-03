<!DOCTYPE html>
<html>

<head>
    <title></title>

    <style>
        * {
            color: #333333;
        }

        body {
            font-family: "inter";
        }

        header {
            width: 100%;
            background-color: #f8f8f8;
        }

        .logo {
            padding: 18px 0px 18px 20px;
            float: left;
            width: 52px;
        }

        .header-heading {
            float: right;
            font-size: 14px;
            padding: 23px 0px;
            padding-left: 225px;
            color: #111111;
            line-height: 17px;
        }

        p,
        div,
        h3 {
            margin: 0px;
        }

        .section {
            width: 756px;
            margin: 22px auto 0px auto;
            border: 1px solid #f4f4f4;
            border-radius: 4px;
        }

        .section-sp {
            margin: 30px auto 0px auto;
        }

        .sectionheading {
            background-color: #f4f4f4;
            font-size: 14px;
            padding: 7px 16px;
            color: #1c1c1c;
            line-height: 17px;
            border-radius: 4px 4px 0px 0px;
        }

        .contentcontainer {
            padding: 25px;
            border-radius: 0px 0px 4px 4px;
        }

        .w25 {
            width: 220px;
            float: left;
            font-size: 13px;
            line-height: 16px;
            color: #101010 !important;
        }

        .w75 {
            width: 484px;
            float: right;
            font-size: 13px;
            line-height: 16px;

            font-weight: normal;
            color: #333333 !important;
        }

        .mb-5 {
            margin-bottom: 13px;
        }

        .divider {
            width: 746px;
            margin: 0px auto;
            height: 1px;
            background-color: #f4f4f4;
        }

        .ms-5 {
            margin-left: 5px;
        }

        .fr {
            float: right;
        }

        .fl {
            float: left;
        }

        .w-10 {
            width: 13px;
            vertical-align: middle;
        }

        .checkbox-text {
            margin-left: 10px;
            line-height: 16px;
        }

        .checkbox {
            vertical-align: middle;
        }

        .checkboxfield {
            background-color: #333333 !important;
            border: 0px !important;
        }

        .mt-1 {
            margin-top: -1px !important;
        }

        .w-special {
            width: 704px;
        }

        .checkbox-text {
            font-size: 13px;
            font-weight: normal !important;
        }

        .endp {
            font-size: 12px;
            padding: 20px 25px;
            line-height: 20px;
            font-weight: 400;
        }

        .remove-m {
            margin-bottom: 0px !important;
        }

        .markedblack {
            background-color: #000;
            color: #000;
            height: 22px;
        }

        .extrap {
            padding: 3px 0px;
        }

        .emailblack {
            width: 232px;
        }

        .birthblack {
            width: 132px;
        }

        .phoneblack {
            width: 165px;
        }

        .mb-10 {
            margin-bottom: 10px !important;
        }
    </style>
</head>

<body>
    <header>
        <div class="logo">
            <img src="http://localhost/pdf/public/icon.png" />
        </div>
        <div class="header-heading">
            <b>Exclusive Content Submission</b>
        </div>
    </header>

    <section id="section1" class="section">
        <div class="sectionheading"><b>Submitted Content</b></div>
        <div class="contentcontainer">
            <div class="mb-5">
                <div class="w25">
                    Uploaded file:
                </div>
                <div class="w75">https://downloads.company.com/videos/KmbVthfgbrdGpwpao.mov
                </div>
            </div>

            <div class="mb-5">
                <div class="w25">Public video link:</div>
                <div class="w75">https://www.tiktok.com/t/ZAdP8R5fg53BKx/</div>
            </div>

            <div class="mb-5">
                <div class="w25">Suggest title:</div>
                <div class="w75">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do</div>
            </div>

            <div class="">
                <div class="w25">Video description:</div>
                <div class="w75">
                    <?= trimText("Sit in occaecat commodo non exercitation magna aute commodo aliqua eiusmod non occaecat. Do officia ipsum magna nostrud. Minim eu excepteur amet id ea exercitation excepteur eu. Voluptate in fugiat sunt pariatur sint commodo cillum commodo irure esse tempor incididunt. Dolore elit sit adipisicing sunt fugiat nisi officia cillum ullamco adipisicing ex cillum id consequat. Reprehenderit nostrud est dolore quis esse aute ex est laborum occaecat. Velit qui eu non reprehenderit pariatur dolore laboris."); ?>
                </div>
            </div>

        </div>
    </section>

    <section id="section2" class="section section-sp">
        <div class="sectionheading">
            <b>Submitter Details</b>
        </div>
        <div class="contentcontainer">
            <div class="mb-5 mb-10">
                <div class="w25">Full name:</div>
                <div class="w75">Magnus Garrett</div>
            </div>

            <div class="mb-5 mb-10">
                <div class="w25 extrap">Email address:</div>
                <div class="w75">
                    <div class="markedblack emailblack"></div>
                </div>
            </div>

            <div class="mb-5 mb-10">
                <div class="w25 extrap">Date of birth:</div>
                <div class="w75">
                    <div class="markedblack birthblack"></div>
                </div>
            </div>

            <div class="">
                <div class="w25 extrap">Phone number:</div>
                <div class="w75">
                    <div class="markedblack phoneblack"></div>
                </div>
            </div>

        </div>
    </section>


    <section id="section3" class="section section-sp">
        <div class="sectionheading">
            <b> Exclusive Submission Confirmation</b>
        </div>
        <div class="contentcontainer">
            <div class="mb-5">
                <div class="w25">Form submitted on:</div>
                <div class="w75">September 26, 2024 at 00:22:30 (UTC)</div>
            </div>

            <div class="mb-5">
                <div class="w25"></div>
                <div class="w75">September 26, 2024 at 00:22:30 (GMT)</div>
            </div>

            <div class="mb-5">
                <div class="w25"></div>
                <div class="w75">September 26, 2024 at 00:22:30 (CET)</div>
            </div>

            <div class="mb-5">
                <div class="w25"></div>
                <div class="w75">
                    September 26, 2024 at 00:22:30 (ET)
                </div>
            </div>
            <div class="">
                <div class="w25"></div>
                <div class="w75">September 26, 2024 at 00:22:30 (PT)</div>
            </div>
        </div>

        <div class="divider"></div>
        <div class="contentcontainer">
            <div class="mb-5 checkbox">
                <div class="fl w-10"><img src='http://localhost/pdf/public/checkiconss.svg' /></div>
                <div class="fr checkbox-text">Yes, I have read and agreed to the <strong>Terms of
                        Service</strong>.</div>
            </div>
            <div class="checkbox">
                <div class="fl w-10"><img src='http://localhost/pdf/public/checkiconss.svg' />

                </div>
                <div class="fr checkbox-text">Yes, I have read and agreed to the <strong>Terms of
                        Submission</strong>.</div>
            </div>
        </div>
        <div class="divider w-special"></div>

        <p class="endp">
            Upon uploading, submitting, emailing, posting, publishing or otherwise transmitting any User Submissions to
            the Site, you retain ownership of any intellectual property rights you hold in and to the User Submissions;
            however, you grant Company an <b>exclusive</b>, <b>worldwide</b>, assignable and sublicensable,
            <b>perpetual</b> and <b>irrevocable</b>
            right and license to use, reproduce, modify, adapt, rearrange, promote, market, prepare derivative works
            based on, perform, display, publish, distribute, transmit, stream, broadcast and otherwise exploit such User
            Submissions in any form, method, medium, platform or technology now known or later developed, including
            without limitation on the Site and third party websites, podcast, video game consoles and services, mobile
            apps, video-on-demand and television (the “Licensed Rights”).
        </p>
    </section>


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
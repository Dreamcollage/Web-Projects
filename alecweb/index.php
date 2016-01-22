<!DOCTYPE HTML>
<!--
	Identity by HTML5 UP
	html5up.net | @n33co
	Free for personal and commercial use under the CCA 3.0 license (html5up.net/license)
-->
<html>

<head>
    <title>Alec Carter</title>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel='shortcut icon' href='favicon.ico' type='image/x-icon' />
    <!--[if lte IE 8]><script src="assets/js/html5shiv.js"></script><![endif]-->
    <script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
    <script src="assets/js/main.js"></script>
    <link rel="stylesheet" href="assets/css/main.css" />
    <script src='https://www.google.com/recaptcha/api.js'></script>
    <!--[if lte IE 9]><link rel="stylesheet" href="assets/css/ie9.css" /><![endif]-->
    <!--[if lte IE 8]><link rel="stylesheet" href="assets/css/ie8.css" /><![endif]-->
    <noscript>
        <link rel="stylesheet" href="assets/css/noscript.css" />
    </noscript>
</head>

<body class="is-loading">

    <!-- Wrapper -->
    <div id="wrapper">

        <!-- Main -->
        <section id="main">
            <header>
                <span class="avatar"><img src="images/avatar.jpg" alt="" /></span>
                <h1>Alec Carter</h1>
                <p>Technology Enthusiast</p>
            </header>
            <hr />
            <ul id="transform" class="actions">
                <li><a onclick="transform()" class="button">More About Me</a></li>
            </ul>
            <div id="extra">
                <h2>Contact Me!</h2>
                <form method="post" action="#">
                    <div class="field">
                        <input type="text" name="name" id="name" placeholder="Name" />
                    </div>
                    <div class="field">
                        <input type="email" name="email" id="email" placeholder="Email" />
                    </div>
<!--
                    <div class="field">
                        <div class="select-wrapper">
                            <select name="department" id="department">
                                <option value="">Department</option>
                                <option value="sales">Sales</option>
                                <option value="tech">Tech Support</option>
                                <option value="null">/dev/null</option>
                            </select>
                        </div>
                    </div>
-->
                    <div class="field">
                        <textarea name="message" id="message" placeholder="Message" rows="4"></textarea>
                    </div>
                    
							<div class="field">
								<input type="checkbox" id="human" name="human" /><label for="human">Are you a robot?</label>
							</div>
                    <input type="submit" class="special" value="Send Message" />

                </form>
                <hr />
            </div>
            <footer>
                <ul class="icons">
                    <li><a href="https://goo.gl/OZekPY" class="fa-twitter">Twitter</a></li>
                    <li><a href="" class="fa-linkedin">LinkedIn</a></li>
                    <li><a href="https://goo.gl/8HCW8Q" class="fa-facebook">Facebook</a></li>
                </ul>
            </footer>
        </section>

        <!-- Footer -->
        <footer id="footer">
            <ul class="copyright">
                <li>&copy; Alec Carter</li>
            </ul>
        </footer>

    </div>

    <!-- Scripts -->
    <!--[if lte IE 8]><script src="assets/js/respond.min.js"></script><![endif]-->
    <script>
        if ('addEventListener' in window) {
            window.addEventListener('load', function () {
                document.body.className = document.body.className.replace(/\bis-loading\b/, '');
            });
            document.body.className += (navigator.userAgent.match(/(MSIE|rv:11\.0)/) ? ' is-ie' : '');
        }
    </script>

</body>

</html>
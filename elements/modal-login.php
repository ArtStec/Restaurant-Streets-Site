<section class="modal modalLogin" id="modalLogin" data-location="modal-login" style="display: none;">
    <div class="modal-container modal-md">
        <div class="modal-header">
            <h2 class="modal-title">Log In</h2>
            <button class="modal-close button-reset buttonModalClose" type="button">
                <svg width="25" height="25" viewBox="0 0 42 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.0354 4.31531C33.1444 2.25296 36.465 2.32173 38.4934 4.52136C40.5011 6.69886 40.5013 10.1711 38.4934 12.3485L38.4924 12.3475L28.7776 22.8925L38.5032 33.4296V33.4305L38.6858 33.6376C40.5097 35.8229 40.4485 39.1481 38.5032 41.2577C36.4749 43.4568 33.1551 43.5255 31.0461 41.4637L30.8459 41.2577L21.3411 30.9598L11.8459 41.2684H11.845C9.75126 43.5389 6.28143 43.5389 4.18774 41.2684C2.17982 39.0909 2.17981 35.6188 4.18774 33.4413L13.9026 22.8964L4.17798 12.3602L4.177 12.3593C2.16927 10.1818 2.16913 6.70951 4.177 4.5321C6.27071 2.26173 9.74153 2.26168 11.8352 4.5321L11.8342 4.53308L21.3381 14.829L30.8342 4.52136H30.8352L31.0354 4.31531Z" fill="#553B16" stroke="#553B16" stroke-width="4" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <div class="modal-body">
            <form class="modal-form" method="POST" action="/" enctype="multipart/form-data">
                <div class="input-group">
                    <input name="email" type="email" placeholder="Email">
                    <span class="msg error" style="display: none;"></span>
                </div>
                <div class="input-group">
                    <input name="password" type="password" placeholder="Password">
                    <span class="msg error" style="display: none;"></span>
                </div>
                <div class="input-group">
                    <div class="recaptcha-wrapper">
                        <div class="g-recaptcha" data-sitekey="6LdlM5oUAAAAAH7PZLIj70UXRyyKx1Uz2y18UORc"><div style="width: 304px; height: 78px;"><div><iframe title="reCAPTCHA" width="304" height="78" role="presentation" name="a-50e5oe892jtm" frameborder="0" scrolling="no" sandbox="allow-forms allow-popups allow-same-origin allow-scripts allow-top-navigation allow-modals allow-popups-to-escape-sandbox allow-storage-access-by-user-activation" src="https://www.google.com/recaptcha/api2/anchor?ar=1&amp;k=6LdlM5oUAAAAAH7PZLIj70UXRyyKx1Uz2y18UORc&amp;co=aHR0cHM6Ly9nYW1lLnN0cmVldHMuY2FmZTo0NDM.&amp;hl=ru&amp;v=GUGrl5YkSwpBsxsF3eY665Ye&amp;size=normal&amp;cb=7m5207859jki"></iframe></div><textarea id="g-recaptcha-response" name="g-recaptcha-response" class="g-recaptcha-response" style="width: 250px; height: 40px; border: 1px solid rgb(193, 193, 193); margin: 10px 25px; padding: 0px; resize: none; display: none;"></textarea></div><iframe style="display: none;"></iframe></div>
                    </div>
                </div>
                <div class="input-group w-100">
                    <label class="checkbox-input">
                        <input name="remember" type="checkbox">
                        <span class="checkbox-wrapper">
                            <svg class="checkmark" width="25" height="25" viewBox="0 0 30 23" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M24.6143 1.66309C25.7319 0.423217 27.5694 0.423248 28.6865 1.66406L28.7852 1.78027C29.776 2.99806 29.7331 4.86101 28.6787 6.03223L28.6777 6.03418L14.7998 21.335L14.8008 21.3359C13.7182 22.5385 11.9588 22.5757 10.834 21.4482L10.7266 21.3359L1.31738 10.8838C0.227506 9.67293 0.227357 7.72639 1.31738 6.51562L1.4248 6.40332C2.54957 5.27629 4.30808 5.31354 5.39062 6.51562L12.7686 14.7031L24.6143 1.66309Z" fill="#776140" stroke="#776140" stroke-linejoin="round"/>
                            </svg>
                        </span>
                        <span class="title">Remember me</span>
                    </label>
                    <span class="msg error" style="display: none;"></span>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button class="button yellow" type="submit">Log In</button>
        </div>
    </div>
</section>
<section class="modal modalProfile" id="modalProfile" data-location="modal-profile" style="display: none;">
    <div class="modal-container modal-lg">
        <div class="modal-header">
            <h2 class="modal-title">Profile</h2>
            <button class="modal-close button-reset buttonModalClose" type="button">
                <svg width="25" height="25" viewBox="0 0 42 45" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M31.0354 4.31531C33.1444 2.25296 36.465 2.32173 38.4934 4.52136C40.5011 6.69886 40.5013 10.1711 38.4934 12.3485L38.4924 12.3475L28.7776 22.8925L38.5032 33.4296V33.4305L38.6858 33.6376C40.5097 35.8229 40.4485 39.1481 38.5032 41.2577C36.4749 43.4568 33.1551 43.5255 31.0461 41.4637L30.8459 41.2577L21.3411 30.9598L11.8459 41.2684H11.845C9.75126 43.5389 6.28143 43.5389 4.18774 41.2684C2.17982 39.0909 2.17981 35.6188 4.18774 33.4413L13.9026 22.8964L4.17798 12.3602L4.177 12.3593C2.16927 10.1818 2.16913 6.70951 4.177 4.5321C6.27071 2.26173 9.74153 2.26168 11.8352 4.5321L11.8342 4.53308L21.3381 14.829L30.8342 4.52136H30.8352L31.0354 4.31531Z" fill="#553B16" stroke="#553B16" stroke-width="4" stroke-linejoin="round"/>
                </svg>
            </button>
        </div>
        <div class="modal-body">
            <form class="modal-form" method="POST" action="/">
                <div class="profile-row">
                    <div class="left-container">
                        <div class="avatar-wrapper">
                            <img src="/assets/images/card-image-1.png" alt="Profile avatar">
                            <div class="points-container">
                                <img src="/" alt="GP icon">
                            </div>
                        </div>
                        <div class="info-wrapper">
                            <button class="item buttonCopy" type="button">
                                <span class="copied-msg">Copied!</span>
                                <span class="title">ID:</span>
                                <span class="content">000666</span>
                                <svg width="15" height="15" viewBox="0 0 23 27" fill="none" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M2.46387 7.5H6.07129V9.75H2.78613V23.75H13.6426V22.125H15.9287V24.0625C15.9287 25.1269 15.0534 26 13.9639 26H2.46387C1.37455 25.9998 0.5 25.1268 0.5 24.0625V9.4375C0.5 8.37321 1.37455 7.50022 2.46387 7.5ZM10.6787 1H17.0498C17.5045 1.00001 17.944 1.15847 18.2939 1.44238L18.4385 1.57129L21.9248 5.01953C22.2934 5.38421 22.5 5.87667 22.5 6.38574V17.5625C22.5 18.6268 21.6255 19.4998 20.5361 19.5H10.6787C9.5892 19.5 8.71387 18.6269 8.71387 17.5625V2.9375C8.71387 1.87308 9.5892 1 10.6787 1Z" fill="#776140" stroke="#776140"/>
                                </svg>
                            </button>
                            <button class="button-facebook buttonConnectFb" type="button">
                                <span class="icon">
                                    <svg width="16" height="16" viewBox="0 0 16 26" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M4.0625 15.1988V26H9.95312V15.1988H14.3457L15.2598 10.2324H9.95312V8.47539C9.95312 5.85 10.984 4.84453 13.6449 4.84453C14.4727 4.84453 15.1379 4.86484 15.5238 4.90547V0.401172C14.7977 0.203125 13.0203 0 11.9945 0C6.56602 0 4.0625 2.56445 4.0625 8.09453V10.2324H0.710938V15.1988H4.0625Z" fill="#FFF8E7"/>
                                    </svg>
                                </span>
                                <span class="text">Connect account</span>
                            </button>
                        </div>
                    </div>
                    <div class="right-container">
                        <div class="input-group">
                            <input name="fname" type="text" placeholder="First name" value="John">
                            <span class="msg error" style="display: none;"></span>
                        </div>
                        <div class="input-group">
                            <input name="lname" type="text" placeholder="Last name" value="Doe">
                            <span class="msg error" style="display: none;"></span>
                        </div>
                    </div>
                </div>
                <div class="input-group">
                    <input name="email" type="email" placeholder="Email" value="example.john@mail.com">
                    <span class="msg error" style="display: none;"></span>
                </div>
                <div class="select-group">
                    <select class="select2" name="sex" data-placeholder="Gender">
                        <option></option>
                        <option value="male" selected>Male</option>
                        <option value="female">Female</option>
                    </select>
                    <span class="msg error" style="display: none;"></span>
                </div>
                <div class="input-group input-password">
                    <input name="password" type="password" placeholder="Password" value="tbr6c32btr67cnt2r6">
                    <button class="buttonShowPass" type="button">
                        <svg width="20" height="20" viewBox="0 0 34 29" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M2.0613 1.17089C1.5088 0.735269 0.706617 0.836207 0.270992 1.38871C-0.164633 1.94121 -0.0636955 2.74339 0.488804 3.17902L31.9388 27.829C32.4913 28.2646 33.2935 28.1637 33.7291 27.6112C34.1647 27.0587 34.0638 26.2565 33.5113 25.8209L27.9225 21.4434C30.0263 19.2865 31.45 16.8693 32.1672 15.1534C32.3425 14.7337 32.3425 14.2662 32.1672 13.8465C31.3757 11.95 29.7129 9.18746 27.2266 6.88183C24.7297 4.55496 21.2926 2.59996 17.0001 2.59996C13.3769 2.59996 10.3594 3.99715 8.00599 5.82996L2.0613 1.17089ZM11.8522 8.84215C13.2069 7.60433 15.0185 6.84996 17.0001 6.84996C21.2235 6.84996 24.6501 10.2765 24.6501 14.5C24.6501 15.8228 24.3154 17.0659 23.7257 18.1496L21.6751 16.5453C22.1213 15.52 22.2382 14.3459 21.93 13.1825C21.3404 10.9778 19.3907 9.49558 17.2232 9.40527C16.9151 9.39465 16.7344 9.72933 16.8301 10.0268C16.9416 10.3668 17.0054 10.7281 17.0054 11.1053C17.0054 11.6471 16.8779 12.1571 16.6547 12.6087L11.8576 8.84746L11.8522 8.84215ZM19.8157 21.6134C18.9444 21.9587 17.9935 22.15 17.0001 22.15C12.7766 22.15 9.35005 18.7234 9.35005 14.5C9.35005 14.1334 9.37661 13.7775 9.42443 13.4268L4.41474 9.47965C3.20349 11.0575 2.33755 12.63 1.83287 13.8465C1.65755 14.2662 1.65755 14.7337 1.83287 15.1534C2.62443 17.05 4.28724 19.8125 6.77349 22.1181C9.27037 24.445 12.7076 26.4 17.0001 26.4C19.5394 26.4 21.776 25.7146 23.7044 24.6734L19.8157 21.6134Z" fill="#553B16"/>
                        </svg>
                        <svg width="20" height="20" viewBox="0 0 31 25" fill="none" xmlns="http://www.w3.org/2000/svg" style="display: none">
                            <path d="M15.1875 0.6875C10.9266 0.6875 7.51467 2.62812 5.03088 4.93789C2.56292 7.22656 0.912329 9.96875 0.13186 11.8514C-0.0421631 12.268 -0.0421631 12.732 0.13186 13.1486C0.912329 15.0312 2.56292 17.7734 5.03088 20.0621C7.51467 22.3719 10.9266 24.3125 15.1875 24.3125C19.4485 24.3125 22.8604 22.3719 25.3442 20.0621C27.8121 17.7682 29.4627 15.0312 30.2485 13.1486C30.4225 12.732 30.4225 12.268 30.2485 11.8514C29.4627 9.96875 27.8121 7.22656 25.3442 4.93789C22.8604 2.62812 19.4485 0.6875 15.1875 0.6875ZM7.59377 12.5C7.59377 10.486 8.39383 8.55451 9.81793 7.13041C11.242 5.7063 13.1735 4.90625 15.1875 4.90625C17.2015 4.90625 19.133 5.7063 20.5571 7.13041C21.9812 8.55451 22.7813 10.486 22.7813 12.5C22.7813 14.514 21.9812 16.4455 20.5571 17.8696C19.133 19.2937 17.2015 20.0938 15.1875 20.0938C13.1735 20.0938 11.242 19.2937 9.81793 17.8696C8.39383 16.4455 7.59377 14.514 7.59377 12.5ZM15.1875 9.125C15.1875 10.9865 13.674 12.5 11.8125 12.5C11.4381 12.5 11.0795 12.4367 10.742 12.326C10.452 12.2311 10.1145 12.4104 10.125 12.7162C10.1408 13.0801 10.1936 13.4439 10.2938 13.8078C11.0162 16.5078 13.7953 18.1109 16.4953 17.3885C19.1953 16.666 20.7985 13.8869 20.076 11.1869C19.4907 8.99844 17.5553 7.52715 15.4037 7.4375C15.0979 7.42695 14.9186 7.75918 15.0135 8.05449C15.1242 8.39199 15.1875 8.75059 15.1875 9.125Z" fill="#553B16"/>
                        </svg>
                    </button>
                    <span class="msg error" style="display: none;"></span>
                </div>
                <div class="input-group">
                    <label class="file-input input" data-uploaded="true" data-url="/images/main-slider-slide-1.png">
                        <svg width="20" height="20" viewBox="0 0 32 34" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M28.8574 19.998C30.1786 19.9982 31.2498 21.0578 31.25 22.373V26.623C31.25 30.2826 28.2565 33.248 24.5713 33.248H7.42871C3.74351 33.248 0.75 30.2826 0.75 26.623V22.373C0.750159 21.0578 1.82144 19.9982 3.14258 19.998C4.46384 19.998 5.53597 21.0578 5.53613 22.373V26.623C5.53613 27.6584 6.37954 28.498 7.42871 28.498H24.5713C25.6205 28.498 26.4639 27.6584 26.4639 26.623V22.373C26.464 21.0578 27.5362 19.998 28.8574 19.998ZM14.4854 1.28223C15.3979 0.544073 16.7306 0.575817 17.6094 1.37305H17.623L17.6963 1.44531L26.2676 9.94531L26.4316 10.126C27.1991 11.0595 27.1447 12.4387 26.2676 13.3086C25.3913 14.1774 24.0035 14.2312 23.0635 13.4707L22.8818 13.3086L18.3926 8.85547V20.248C18.3926 21.5635 17.3214 22.623 16 22.623C14.6786 22.623 13.6074 21.5635 13.6074 20.248V8.85547L9.11816 13.3086C8.18369 14.2352 6.66692 14.2351 5.73242 13.3086C4.7968 12.3808 4.7969 10.8732 5.73242 9.94531L14.3037 1.44531L14.4854 1.28223Z" fill="#553B16" stroke="#553B16" stroke-width="0.5"/>
                        </svg>
                        <span class="filePlaceholder" data-placeholder="Upload photo">main-slider-slide-1.png</span>
                        <input name="photo" type="file">
                    </label>
                    <span class="msg error" style="display: none;"></span>
                </div>
            </form>
        </div>
        <div class="modal-footer">
            <button class="button green" type="submit">Save</button>
            <button class="button red" type="submit">Log Out</button>
        </div>
    </div>
</section>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Document</title>
    <link rel="stylesheet" href="./libs/aos.css" />
    <link rel="stylesheet" href="style.css" />
    <link rel="stylesheet" href="select.css" />
    <script src="./libs/aos.js" defer></script>
    <script src="./libs/gsap.min.js" defer></script>
    <script src="script.js" defer></script>
    <script src="select.js" defer></script>
  </head>
  <body>
    <div class="wrapper">
      <div class="form">
        <div class="form__signup">
          <div class="form__signup-text">
            <h1>Sign up</h1>
          </div>
        </div>
        <form class="form__body" action="#" id="form">
          <div class="form-logo">
            <div class="svg-logo">
              <svg
                width="307"
                height="355"
                viewBox="0 0 307 355"
                fill="none"
                xmlns="http://www.w3.org/2000/svg"
              >
                <path
                  id="logo"
                  d="M205.5 411C92.236 411 0 318.764 0 205.5C0 92.236 92.236 0 205.5 0C318.764 0 411 92.236 411 205.5C411 271.362 379.812 330.113 331.438 367.754C333.781 365.394 335.295 362.201 335.521 358.578C336 354.751 336 351.881 336 348.533V343.749C335.879 337.683 335.35 331.725 334.44 325.901C363.927 294.343 382 251.99 382 205.5C382 108.186 302.814 29 205.5 29C108.186 29 29 108.186 29 205.5C29 252.377 47.3746 295.047 77.2988 326.686C76.282 333.801 75.8485 341.1 76.0469 348.533C76.0469 351.403 76.0469 354.751 76.5256 358.578C77.0044 366.71 83.7067 372.451 91.8452 371.972C99.9836 371.494 105.728 364.797 105.25 356.665C104.892 354.163 104.802 352.196 104.779 350.363C133.361 370.298 168.091 382 205.5 382C243.357 382 278.471 370.016 307.247 349.643C307.207 350.468 307.131 351.336 307.053 352.232C306.928 353.664 306.797 355.164 306.797 356.665C306.318 364.318 312.063 371.494 320.202 371.972H321.159C323.791 371.972 326.253 371.294 328.371 370.094C294.07 395.773 251.521 411 205.5 411ZM307.247 349.643C317.103 342.665 326.215 334.703 334.44 325.901C324.506 262.367 269.17 214.712 203.39 216.027C138.589 217.313 86.0983 265.111 77.2988 326.686C85.6155 335.48 94.8243 343.421 104.779 350.363C104.771 349.743 104.771 349.138 104.771 348.533V344.227C105.728 288.259 152.166 243.771 208.178 245.207C264.19 246.163 308.712 292.564 307.276 348.533C307.276 348.892 307.265 349.263 307.247 349.643ZM328.371 370.094C329.401 369.324 330.423 368.543 331.438 367.754C330.531 368.667 329.5 369.455 328.371 370.094ZM147 142.5C147 174.339 172.661 200 204.5 200C236.339 200 262 174.339 262 142.5C262 110.661 236.339 85 204.5 85C172.661 85 147 110.661 147 142.5ZM205.5 114C189.057 114 176 127.057 176 143.5C176 159.943 189.057 173 205.5 173C221.943 173 235 159.943 235 143.5C235 127.057 221.943 114 205.5 114Z"
                  fill="white"
                />
              </svg>
            </div>
          </div>
          <div class="form__body-wrapper">
            <div class="form-register">
              <div class="register-text">
                <h2>Thank you <span id="answer"></span></h2>
              </div>
              <div class="register-text">
                <h3>you registerd!</h3>
              </div>
            </div>

            <div class="form__body-header">
              <div class="form-header-title">
                <h2>New user?</h2>
              </div>
              <div class="form-header-titlebottom">
                <h3>Use the form below to create your account.</h3>
              </div>
            </div>
            <div class="form__body-main">
              <div class="form__item"  data-aos="fade-up" data-aos-duration="1300">
                <label for="firstName" class="form__label">First Name</label>
                <input
                  type="text"
                  name="firstname"
                  id="firstName"
                  class="form__input"
                />
              </div>
              <div class="form__item" data-aos="fade-up" data-aos-duration="1300">
                <label for="lastName" class="form__label">Last Name</label>
                <input
                  type="text"
                  name="lastname"
                  id="lastName"
                  class="form__input"
                />
              </div>
              <div class="form__item form__item-select"  data-aos="fade-up" data-aos-duration="1300" data-aos-delay="500">
                <div class="form__label">Nationality</div>
                <div class="custom-select">
                  <select name="nationality" class="select">
                    <option value="American" selected>American</option>
                    <option value="Belorus">Belorus</option>

                    <option value="Russian">Russian</option>
                  </select>
                </div>
              </div>
              <div class="form__item"  data-aos="fade-up" data-aos-duration="1300" data-aos-delay="500">
                <label for="formEmail" class="form__label">E-mail</label>
                <div class="email-item">
                  <input
                    type="email"
                    id="formEmail"
                    name="email"
                    class="form__input _req _email"
                  />
                  <span class="succes email__succes"
                    ><img src="Shape.png" alt=""
                  /></span>
                </div>
              </div>
              <div class="form__item"  data-aos="fade-up" data-aos-duration="1300" data-aos-delay="1000">
                <div class="form__label">Date of Birth</div>
                <div class="form__item-changeDate">
                  <div class="custom-select">
                    <select name="day" class="select"></select>
                  </div>
                  <div class="custom-select month">
                    <select name="month" class="select">
                      <option value="1" selected>January</option>
                      <option value="2">February</option>
                      <option value="3">March</option>
                      <option value="4">April</option>
                      <option value="5">May</option>
                      <option value="6">June</option>
                      <option value="7">July</option>
                      <option value="8">August</option>
                      <option value="9">September</option>
                      <option value="10">october</option>
                      <option value="11">November</option>
                      <option value="12">December</option>
                    </select>
                  </div>
                  <div class="custom-select">
                    <select name="year" class="select"></select>
                  </div>
                </div>
              </div>
              <div class="form__item"  data-aos="fade-up" data-aos-duration="1300" data-aos-delay="1000">
                <div class="form__label">Gender</div>
                <div class="options">
                  <div class="options__item">
                    <input
                      type="radio"
                      checked
                      name="gender"
                      value="male"
                      id="formGenderMale"
                      class="options__input"
                    />
                    <label for="formGenderMale" class="options__label"
                      ><span>Male</span></label
                    >
                  </div>
                  <div class="options__item">
                    <input
                      type="radio"
                      name="gender"
                      value="female"
                      id="formGenderFemale"
                      class="options__input"
                    />
                    <label for="formGenderFemale" class="options__label"
                      ><span>Female</span></label
                    >
                  </div>
                </div>
              </div>
              <div class="form__item"  data-aos="fade-up" data-aos-duration="1300" data-aos-delay="1500">
                <label for="formPassword" class="form__label">Password</label>
                <div class="email-item">
                  <input
                    type="password"
                    name="password"
                    id="formPassword"
                    class="form__input _req _password"
                  />
                  <span class="succes password__succes"
                    ><img src="Shape.png" alt=""
                  /></span>
                </div>
              </div>
              <div class="form__item"  data-aos="fade-up" data-aos-duration="1300" data-aos-delay="1500">
                <label for="formPasswordConfirm" class="form__label"
                  >Confirm Password</label
                >
                <div class="email-item">
                  <input
                    type="password"
                    name="passwordConfirm"
                    id="formPasswordConfirm"
                    class="form__input _req _passwordConfirm"
                  />
                  <span class="succes passwordconfirm__succes"
                    ><img src="Shape.png" alt=""
                  /></span>
                </div>
              </div>
            </div>
            <small><span id="joke"></span></small>
          </div>
          <div class="form__body-footer">
            <div class="form__footer-left">
              <span>Have an account?<a href="login.php">Login</a></span>
            </div>
            <div class="form__footer-right">
              <button class="btn-submit" type="submit">Complete Signup</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </body>
</html>

//для даты
AOS.init({
  disable: "phone",
});

var ysel = document.getElementsByName("year")[0],
  msel = document.getElementsByName("month")[0],
  dsel = document.getElementsByName("day")[0];
var currentDate = new Date();
var currentYear = +currentDate.getFullYear();
for (var i = currentYear; i >= 1950; i--) {
  var opt = new Option();
  opt.value = opt.text = i;
  ysel.add(opt);
}
ysel.addEventListener("change", validate_date);
msel.addEventListener("change", validate_date);

function validate_date() {
  var y = +ysel.value,
    m = msel.value,
    d = dsel.value;
  if (m === "2") var mlength = 28 + (!(y & 3) && (y % 100 !== 0 || !(y & 15)));
  else var mlength = [31, 28, 31, 30, 31, 30, 31, 31, 30, 31, 30, 31][m - 1];
  dsel.length = 0;
  for (var i = 1; i <= mlength; i++) {
    var opt = new Option();
    opt.value = opt.text = i;
    if (i == d) opt.selected = true;
    dsel.add(opt);
  }
}
validate_date();
const icon = document.querySelectorAll("#logo path");
for (let i = 0; i < icon.length; i++) {
  console.log(`length1 ${i} is ${Math.ceil(icon[i].getTotalLength())}`);
}
//для появления svg
const myRect = document.getElementById("logo");
const tl = gsap.timeline();

tl.to(myRect, {
  duration: 3,
  fill: "#F9FAFF",
  ease: "power1.inOut",
});
const subbtn = document.querySelector(".btn-submit");
const form = document.getElementById("form");
const formRegister = document.querySelector(".form-register");
const answer = document.getElementById("answer");
let joke = document.getElementById("joke");
function createAnswer(selector, ans) {
  selector.innerHTML = ans;
}
form.addEventListener("submit", formsend);
async function formsend(e) {
  e.preventDefault();
  subbtn.classList.remove("animate");
  let error = formValidate(form);
  let formData = new FormData(form);

  if (error === 0) {
    subbtn.classList.remove("animate");
    formRegister.classList.add("registered");
    let response = await fetch("./send.php", {
      method: "POST",

      body: formData,
    });
    if (response.ok) {
      setTimeout(() => {
        formRegister.classList.remove("registered");
      }, 5000);
      const result = await response.text();
      console.log(result);
      createAnswer(answer, result);
      form.reset();
    } else {
      alert("Errorr");
    }
  } else {
    subbtn.classList.add("animate");
    setTimeout(() => {
      subbtn.classList.remove("animate");
    }, 2200);
  }
}
const pattern = /^[^ ]+@[^ ]+\.[a-z]{2,3}$/;
const newLocal = /^(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,12}$/;

function formValidate(e) {
  let error = 0;
  subbtn.classList.remove("animate");

  const password = document.getElementById("formPassword");
  const passwordConfirm = document.getElementById("formPasswordConfirm");

  let formReq = document.querySelectorAll("._req");

  for (let i = 0; i < formReq.length; i++) {
    const input = formReq[i];
    input.onclick = () => {
      joke.innerHTML = "";
    };
    formRemoveError(input);
    removeSucces(input);

    if (input.classList.contains("_email")) {
      if (emailTest(input)) {
        formAddError(input);
        error++;
      } else {
        addSucces(input);
      }
    } else if (input.classList.contains("_password")) {
      if (passwordTest(input)) {
        joke.innerHTML =
          "Пароль пользователя должен содержать от 8 символов, заглавные и строчные буквы, а также цифры.";

        formAddError(input);
        error++;
      } else {
        addSucces(input);
      }
    } else if (input.classList.contains("_passwordConfirm")) {
      if (password.value == passwordConfirm.value && password.value !== "") {
        addSucces(input);
      } else {
        formAddError(input);
        error++;
      }
    } else if (input.value === "") {
      formAddError(input);
      error++;
    }
  }

  return error;
}
function formAddError(input) {
  input.parentElement.classList.add("_error");
}
function addSucces(input) {
  input.nextElementSibling.classList.add("active");
}
function removeSucces(input) {
  input.nextElementSibling.classList.remove("active");
}
function formRemoveError(input) {
  input.parentElement.classList.remove("_error");
}
function emailTest(input) {
  return !pattern.test(input.value);
}
function passwordTest(input) {
  return !newLocal.test(input.value);
}

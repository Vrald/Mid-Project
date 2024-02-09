function validateName() {
    let inputName = document.querySelector("#name");
    let valueName = inputName.value;
    let errorName = document.querySelector("#error-name");
  
    if (valueName == "") {
      errorName.innerHTML = "Full name is required";
      inputName.style.border = "3px solid red";
      return false;
    } else if (valueName.length < 5 || valueName.length > 20) {
      errorName.innerHTML = "Nama karyawan harus 5 - 20 karakter";
      inputName.style.border = "3px solid red";
      return false;
    } else {
      errorName.innerHTML = "";
      inputName.style.border = "3px solid #22539F";
      return true;
    }
  }
  
  function validateEmail() {
    let inputEmail = document.querySelector("#email");
    let valueEmail = inputEmail.value;
    let errorEmail = document.querySelector("#error-email");
  
    if (valueEmail == "") {
      errorEmail.innerHTML = "Please enter your email";
      inputEmail.style.border = "3px solid red";
      return false;
    } else if (!valueEmail.includes("@") || !valueEmail.includes(".")) {
        errorEmail.innerHTML = "Email harus mengandung \'@\' dan \'.\'";
        inputEmail.style.border = "3px solid red";
        return false;
    } else {
      errorEmail.innerHTML = "";
      inputEmail.style.border = "3px solid #22539F";
      return true;
    }
  }

function validateAdd() {
    let inputAdd = document.querySelector("#add");
    let valueAdd = inputAdd.value;
    let errorAdd = document.querySelector("#error-add");
  
    if (valueAdd == "") {
      errorAdd.innerHTML = "Address is required";
      inputAdd.style.border = "3px solid red";
      return false;
    } else if (valueAdd.length < 10 || valueAdd.length > 40) {
      errorAdd.innerHTML = "Alamat karyawan harus 10 - 40 karakter";
      inputAdd.style.border = "3px solid red";
      return false;
    } else {
      errorAdd.innerHTML = "";
      inputAdd.style.border = "3px solid #22539F";
      return true;
    }
  }

  function onlyDigits(s) {
    for (let i = s.length - 1; i >= 0; i--) {
      const d = s.charCodeAt(i);
      if (d < 48 || d > 57) return false;
    }
    return true
  }


  function validateWA() {
    let inputWA = document.querySelector("#wa");
    let valueWA = inputWA.value;
    let errorWA = document.querySelector("#error-wa");
  
    if (valueWA == "") {
      errorWA.innerHTML = "Please enter your number";
      inputWA.style.border = "3px solid red";
      return false;
    } else if (!onlyDigits(valueWA)) {
        errorWA.innerHTML = "No telp. hanya boleh berupa integer";
        inputWA.style.border = "3px solid red";
        return false;
    } else if (valueWA.length < 9 || valueWA.length > 12) {
      errorWA.innerHTML = "No telp. herus 9-12 integer";
      inputWA.style.border = "3px solid red";
      return false;
    } else if (valueWA[0] != '0' || valueWA[1] != '8') {
      errorWA.innerHTML = "No telp. herus dimulai dengan 08";
      inputWA.style.border = "3px solid red";
      return false;
    } else {
      errorWA.innerHTML = "";
      inputWA.style.border = "3px solid #22539F";
      return true;
    }
  }

  function validateAge() {
    let inputAge = document.querySelector("#age");
    let valueAge = inputAge.value;
    let errorAge = document.querySelector("#error-age");
  
    if (valueAge == "") {
      errorAge.innerHTML = "Age is required";
      inputAge.style.border = "3px solid red";
      return false;
    } else if (!onlyDigits(valueAge)) {
      errorAge.innerHTML = "Input harus berupa integer";
      inputAge.style.border = "3px solid red";
      return false;
    } else if (valueAge < 20) {
      errorAge.innerHTML = "Karyawan setidaknya harus berumur 20 tahun keatas";
      inputAge.style.border = "3px solid red";
      return false;
    } else if (valueAge > 100) {
      errorAge.innerHTML = "Anda ketuaan";
      inputAge.style.border = "3px solid red";
      return false;
    } else {
      errorAge.innerHTML = "";
      inputAge.style.border = "3px solid #22539F";
      return true;
    }
  }

  let stepBtn = document.querySelector("#step-btn");
  stepBtn.addEventListener("click", function (e) {
    // e.preventDefault();
  
    let isNameValid = validateName();
    let isEmailValid = validateEmail();
    let isWAValid = validateWA();
    let isAddValid = validateAdd();
    let isAgeValid = validateAge();
  
    if (
      isNameValid &&
      isEmailValid &&
      isWAValid &&
      isAddValid &&
      isAgeValid
    ) {

      // window.location.href='List';  

    }
  });
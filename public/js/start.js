function submitForm(e) {
    // e.preventDefault();
    let name = document.forms["welcome_form"]["name"].value;
    let option = document.forms["welcome_form"]["options"].value;
    let main = document.forms["welcome_form"]["main"].value;
  
    sessionStorage.setItem("name", name);
    sessionStorage.setItem("option", option);
    sessionStorage.setItem("main", main);
    
    // location.href = "/public/quiz";
  }
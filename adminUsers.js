
let x = document.getElementById("admin-users");
let y = document.getElementById("admin-results");



function myFunction() {
  
  if (x.style.display === "none") {
    x.style.display = "block";
  } else if (y.style.display = "block"){
    x.style.display = "none";
    y.style.display = "none";

    } else if(x.style.display === "block" && y.style.display === "block"){
      x.style.display = "none";
    }
      else {
      x.style.display = "none";
      y.style.display = "none"
    }
}

function myFunction2() {
    
    if (y.style.display === "none") {
      y.style.display = "block";
      x.style.display = "none";
    } else if (x.style.display = "block"){
        x.style.display = "none";
        y.style.display = "none";
      } else {
      y.style.display = "none";
      x.style.display = "none";
    }
    
  }
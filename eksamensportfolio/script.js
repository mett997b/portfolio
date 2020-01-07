function myFunction() {
    var x = document.getElementById("menu");
    if (x.className === "Menu") {
      x.className += " responsive";
    } else {
      x.className = "Menu";
    }
  }
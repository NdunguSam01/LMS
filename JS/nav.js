// Get the container element
var container= document.getElementById("navbar");

// Get all buttons with class="btn" inside the container
var links= container.getElementsByTagName("a");

// Loop through the links and add the active class to the current/clicked button
for (var i = 0; i < links.length; i++) {
  links[i].addEventListener("click", function() {
    var current = document.getElementsByClassName("active");
    if (current.length > 0) {
      current[0].className = current[0].className.replace(" active", "");
    }
    this.className += " active";
  });
}
const myFunction=()=> {
  var x = document.getElementById("navbar");
  if (x.className === "navbar") {
    x.className += " responsive";
  } 
else 
{
    x.className = "navbar";
  }
}
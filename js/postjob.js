function myFunction() {
  var txt;
  if (confirm("You can add your post here ")) {
    txt = "You pressed OK!";
  } else {
    txt = "You pressed Cancel!";
  }
  document.getElementById("demo").innerHTML = txt;
}
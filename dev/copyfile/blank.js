 <script>
function showCity1(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("dispCitydd1").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("dispCitydd1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "tc1.php?q="+str, true);
  xhttp.send();
}
</script>
<script>
function showDocument(str) {
  var xhttp;  
  if (str == "") {
    document.getElementById("txtHintdoc").innerHTML = "";
    return;
  }
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("txtHintdoc").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "/dev/generate-doc/dt.php?q="+str, true);
  xhttp.send();
}
</script>
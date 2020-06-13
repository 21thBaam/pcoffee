<script>
        function v_name(id,n_id){
            if(id.length == 0){
                document.getElementById(n_id).innerHTML = "";
                return;
            }else{
                var xhttp = new XMLHttpRequest();
                xhttp.onreadystatechange = function() {
                    if (this.readyState == 4 && this.status == 200) {
                    document.getElementById(n_id).innerHTML = this.responseText;
                    }
                };
                xhttp.open("GET", "../logica/ajax_name.php?name="+id, true);
                xhttp.send();
            }
        }
</script>

<form action="">
  <label for="fname">First name:</label>
  <input type="text" id="fname" name="fname" onkeyup="v_name(this.value,'stock')">
</form>
<p>Ver Stock: <span id="stock"></span></p>
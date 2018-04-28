<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <link rel="stylesheet" href="https://bootswatch.com/4/cosmo/bootstrap.css">
  <title>Ajax</title>
  <script>
    function showSuggestion(str) {
      if (!str.length) {
        document.querySelector('#id').innerHTML = '';
      } else {
        var xml = new XMLHttpRequest();
        xml.onreadystatechange = () => {
          if (this.readyState = 4 && this.status === 200) {
            document.querySelector("#id").innerHTML = this.responseText;
          }
        }
        xml.open('GET', "suggest.php?q="+str, true);
        xml.send();
      //   fetch(`suggest.php?q=${str}`)
      //     .then(res => res)
      //     .then(data => console.log(data));
      // }
      }
    }
  </script>
</head>
<body>
  <div class="container">
    <h2>Search Users</h2>
    <div class="form-control">
    <input type="text" onkeyup="showSuggestion(this.value)">
    </div>
  </div>
  <p>Suggestions: <span id="output" style="font-weight: bold;"></span></p>
</body>
</html>
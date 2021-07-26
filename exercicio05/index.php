<!DOCTYPE html>

<html>
  <head>
    <title>Exercicio 01</title>
    <link rel="stylesheet" href="public/style.css">
    <meta name="viewport" content="width=device-width, initial-scale=1">
  </head>
  
  <body>
    <div class="author">
      <p>Feito por <a href="https://github.com/juliocesarfs" target="_blank">Júlio César</a></p>
    </div>
    <main>
      <section class="box-form">
        <h1>Olá, queremos algumas informações sobre você! 😊</h1>
        <form method="post" class="form">
          <div class="item">
            <div>Nome</div>
            <div>
              <input 
                type="text" 
                name="username"
                id="username" 
              >
            </div>
          </div>

          <div class="item">
            <div>Data de nascimento</div>
            <div>
              <input 
                type="date" 
                name="birthDate"
                id="birthDate"
              >
            </div>
          </div>

          <button name="advance" type="submit">Avançar</button>
        </form>

        <?php
          function getUsernameSize() {
            $username = $_POST['username'];
            $username = str_replace(' ', '', $username);

            return strlen($username);
          }

          function getAge() {
              $birthDate = new DateTime ($_POST['birthDate']);
              $today = new DateTime();
              $age = $today->diff($birthDate);

              return array($age->y, $age->m);
          }

          if (isset($_POST['advance'])) {
            $array = getAge();
            $usernameSize = getUsernameSize();
            echo "Tamanho do seu nome: $usernameSize\nVocê tem $array[0] anos e $array[1] meses!";
          }
        ?>
      </section>
    </main>

    <script src="/public/scripts.js"></script>
  
  
  
  
  </body>
</html>
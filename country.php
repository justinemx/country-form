<?php
    $message = array(
      "country" => "",
      "capital" => "",
      "information" => ""
    );

    function countries()
    {
      $countries = array(
        "Germany" => array(
          "capital" => "Berlin",
          "information" => "Germany is a country located in Central Europe and is the most populous member state of the European Union."
        ),
        "Japan" => array(
          "capital" => "Tokyo",
          "information" => "Japan is an island nation in East Asia and is known for its unique culture, advanced technology, and stunning natural beauty."
        ),
        "India" => array(
          "capital" => "New Delhi",
          "information" => "India is the seventh largest country in the world and is known for its diverse culture, history, and vast population."
        ),
        "Australia" => array(
          "capital" => "Canberra",
          "description" => "Australia is a country and continent surrounded by the Indian and Pacific oceans and is known for its unique flora and fauna, as well as its vibrant cities."
        ),
        "Mexico" => array(
          "capital" => "Mexico City",
          "information" => "Mexico is a country located in North America and is known for its rich cultural heritage, diverse cuisine, and vibrant cities."
        ),
        "Brazil" => array(
          "capital" => "Brasília",
          "information" => "Brazil is the largest country in South America and is known for its diverse culture, vast Amazon rainforest, and famous carnivals."
        ),
        "France" => array(
          "capital" => "Paris",
          "information" => "France is a country located in Western Europe and is known for its rich history, iconic landmarks, and world-renowned cuisine."
        ),
        "China" => array(
          "capital" => "Beijing",
          "information" => "China is the most populous country in the world and is known for its ancient history, rapid economic growth, and stunning landscapes."
        ),
        "South Africa" => array(
          "capital" => "Pretoria",
          "information" => "South Africa is a country located at the southern tip of Africa and is known for its diverse wildlife, stunning landscapes, and troubled history of apartheid."
        ),
        "Russia" => array(
          "capital" => "Moscow",
          "information" => "Russia is the largest country in the world and spans two continents. It is known for its rich history, diverse landscapes, and major role in world events"
        )
      );
      $return_val = array(
        "country" => "",
        "capital" => "",
        "information" => ""
      );
      if (isset($_POST['submit'])) {
        if (isset($_POST['country'])) {
          $country = ucwords(trim($_POST['country']));
          $found = false;
          foreach ($countries as $key => $value) {
            if ($country == $key) {
              $return_val['country'] = $country;
              $return_val['capital'] = $value['capital'];
              $return_val['information'] = $value['information'];
              $found = true;
              break;
            }
          }
          if (!$found) {
            $return_val['country'] = "Hmm, maybe try another country.";
            $return_val['capital'] = "";
            $return_val['information'] = "";
          }
        }
      }
      return $return_val;
    }

    $message = countries();
?>

  <!DOCTYPE html>
  <html lang="en">
  <head>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-GLhlTQ8iRABdZLl6O3oVMWSktQOp6b7In1Zl3/Jr59b6EGGoI1aFkw7cmDA6j6gD" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/js/bootstrap.bundle.min.js" integrity="sha384-w76AqPfDkMBDXo30jS1Sgez6pr3x5MlQ1ZAGC+nuZB+EYdgRZgiwxhTBTkF7CXvN" crossorigin="anonymous"></script>
  </head>
  <body>
  <div class="d-flex align-items-center justify-content-center vh-100">
    <form action="" method="POST" name="country-form">
      <div class="mb-3">
        <label for="input_country" class="form-label">Country</label>
        <input id="input_country" class="form-control" type="text" name="country" required>
      </div>
      <div style="text-align: center;">
        <input name="submit" value="Submit" type="submit" class="btn btn-primary">
      </div>
      <div style="text-align: center;">
        <br>
        <?php echo "" . $message['country'] . "<br>" ?>
        <?php echo "" . $message['capital'] . "<br>" ?>
        <?php echo "" . $message['information'] . "<br>" ?>
      </div>
    </form>
  </div>
  </body>
  </html>

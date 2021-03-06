<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="preconnect" href="https://fonts.gstatic.com">
  <link href="https://fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;700&display=swap" rel="stylesheet">
  <link rel="stylesheet" href="styles.global.css">
  <script src="script.js" defer></script>
  <title>Part 1 - Exercise 3</title>
</head>
<body>
<button class="nav_btn open_btn">
    <img src="menu.png" alt="menu">
  </button>
  <div class="nav nav_one">
    <div class="nav nav_two">
      <div class="nav nav_three">
        <button class="nav_btn close_btn">
          <img src="close.png" alt="close">
        </button>
        <a href="/brigido_tuyor">
          <img src="home.png" alt="home">
        </a>
        <section class="part_one">
      <h2>Part 1 - Getting user inputs</h2>
      <div>
        <span>Exercise 1</span>
        <a href="./part1_exercise1.php">Even or Odd</a>
      </div>
      <div>
        <span>Exercise 2</span>
        <a href="./part1_exercise2.php">Percentage Conversion</a>
      </div>
      <div>
        <span>Exercise 3</span>
        <a href="./part1_exercise3.php">Palindrome</a>
      </div>
      <div>
        <span>Exercise 4</span>
        <a href="./part1_exercise4.php">Reverse Case</a>
      </div>
    </section>
    <section class="part_two">
      <h2>Part 2 - Patterns</h2>
      <div>
        <span>Exercise 1</span>
        <a href="./part2_exercise1.php">Double diamond</a>
      </div>
      <div>
        <span>Exercise 2</span>
        <a href="./part2_exercise2.php">X</a>
      </div>
      <div>
        <span>Exercise 3</span>
        <a href="./part2_exercise3.php">45&deg; Pyramid</a>
      </div>
      <div>
        <span>Exercise 4</span>
        <a href="./part2_exercise4.php">Multiplicative</a>
      </div>
      <div>
        <span>Exercise 5</span>
        <a href="./part2_exercise5.php">Refresh Count</a>
      </div>
    </section>
    <section class="part_three">
      <h2>Part 3 - Sorts</h2>
      <div>
        <span>Exercise 1</span>
        <a href="./part3_exercise1.php">Random Character</a>
      </div>
      <div>
        <span>Exercise 2</span>
        <a href="./part3_exercise2.php">Multidimensional Array</a>
      </div>
      <div>
        <span>Exercise 3</span>
        <a href="./part3_exercise3.php">Stack</a>
      </div>
      <div>
        <span>Exercise 4</span>
        <a href="./part3_exercise4.php">Queue</a>
      </div>
      <div>
        <span>Exercise 5</span>
        <a href="./part3_exercise5.php">Bubble Sort</a>
      </div>
    </section>
      </div>
    </div>
  </div>
  <h1>Palindrome</h1>
  <p>Program receives a string input and evaluates the value if it's a valid palindrome or not.</p>
  <ol>
    <li>Aabbaa = palindrome, abc = not palindrome</li>
  </ol>

  <?php
    function palindrome($string) {
      $str_in_lowercase = strtolower($string);
      $str_in_reverse = strrev($str_in_lowercase);

      if ($str_in_lowercase == $str_in_reverse) {
        return "is palindrome";
      } else {
        return "is not palindrome";
      }
    }
   ?>

  <form action="part1_exercise3.php" method="post" autocomplete="off">
    <input type="text" name="string" placeholder="Enter string..." required>
    <input type="submit">
  </form>
  <div class="output_display">
    <?php
      echo isset($_POST["string"]) ? $_POST["string"]." ".palindrome($_POST["string"]) : " ";
    ?>
  </div>
</body>
</html>

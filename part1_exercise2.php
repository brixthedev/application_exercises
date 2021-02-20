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
  <title>Part 1 - Exercise 2</title>
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
  <h1>Percentage Conversion</h1>
  <p>Convert the score into percent form using 2 input values.</p>
  <ol>
    <li>Given: Score acquired and total number of items</li>
    <li>Score >= 90% : A, >= 80% : B, >= 70% : C, >= 60% : D, >= 50% : E, < 50% : F</li>
    <li>After determining the grade, evaluate the score if pass or failed</li>
    <li>Passing score is 50% and above</li>
    <li>Ex 90/100, 90% with a grade of A, you passed!</li>
    <li>Ex 49/100, 49% with a grade of F, you failed!</li>
  </ol>

  <?php
    function determine_grade($score, $items) {
      $grade = ($score / $items) * 100;

      switch ($grade) {
        case $grade >= 90:
          return "A";
          break;
        case $grade >= 80:
          return "B";
          break;
        case $grade >= 70:
          return "C";
          break;
        case $grade >= 60:
          return "D";
          break;
        case $grade >= 50:
          return "E";
          break;
        default:
          return "F";
      }
    }

    function pass_or_fail($grade) {
      if ($grade == "F") {
        return "failed";
      } else {
        return "passed";  
      }
    }
   ?>

  <form action="part1_exercise2.php" method="post" autocomplete="off">
    <input type="text" name="score" placeholder="Score acquired..." required>
    <input type="text" name="items" placeholder="Number of items..." required>
    <input type="submit">
  </form>
  <div class="output_display">
    <?php
      echo isset($_POST["score"]) ? is_numeric($_POST["score"]) && is_numeric($_POST["items"]) ? $_POST["score"]."/".$_POST["items"].", ".(($_POST["score"]/$_POST["items"]) * 100)."% with a grade of ".determine_grade($_POST["score"], $_POST["items"]).", you ".pass_or_fail(determine_grade($_POST["score"], $_POST["items"]))."!" : "Please input a valid integer/number value." : " ";
     ?>
  </div>
</body>
</html>

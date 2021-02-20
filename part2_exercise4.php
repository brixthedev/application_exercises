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
  <title>Part 2 - Exercise 4</title>
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
  <h1>Multiplicative</h1>
  <p>Create the given pattern.</p>
  <div class="output_display">
    <div class="table four">
      <?php
        for ($i = 16; $i >= 1; $i /= 2) {
          echo "<div>".$i."</div>";
        }
        for ($i = 162; $i >= 2; $i /= 3) {
          echo "<div>".$i."</div>";
        }
        for ($i = 768; $i >= 3; $i /= 4) {
          echo "<div>".$i."</div>";
        }
        for ($i = 2500; $i >= 4; $i /= 5) {
          echo "<div>".$i."</div>";
        }
        for ($i = 6480; $i >= 5; $i /= 6) {
          echo "<div>".$i."</div>";
        }
        for ($i = 14406; $i >= 6; $i /= 7) {
          echo "<div>".$i."</div>";
        }
      ?>
    </div>
  </div>
</body>
</html>

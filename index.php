<!DOCTYPE html>
<html lang="ru">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="./src/assets/css/reset.css">
  <link rel="stylesheet" href="./src/assets/css/main.css">
  <title>PHP</title>
</head>

<body>

  <div class="container">
    <table class="logical-table">

      <tr>
        <th><?= 'A'; ?></th>
        <th><?= 'B'; ?></th>
        <th><?= '!A'; ?></th>
        <th><?= 'A || B'; ?></th>
        <th><?= 'A && B'; ?></th>
        <th><?= 'A xor B'; ?></th>
      </tr>
      <tr>
        <td><?= $A = 0; ?></td>
        <td><?= $B = 0; ?></td>
        <td>
          <?= !$A;
          ?>
        </td>
        <td>
          <?= (int)($A || $B);
          ?>
        </td>
        <td>
          <?= (int)($A && $B);
          ?>
        </td>
        </td>
        <td>
          <?= (int)($A xor $B);
          ?>
        </td>
      </tr>
      <tr>
        <td><?= $A = 0; ?></td>
        <td><?= $B = 1; ?></td>
        <td>
          <?= !$A;
          ?>
        </td>
        <td>
          <?= (int)($A || $B);
          ?>
        </td>
        <td>
          <?= (int)($A && $B);
          ?>
        </td>
        <td>
          <?= (int)($A xor $B);
          ?>
        </td>
      </tr>
      <tr>
        <td><?= $A = 1; ?></td>
        <td><?= $B = 0; ?></td>
        <td>
          <?= (int)!$A;
          ?>
        </td>
        <td>
          <?= (int)($A || $B);
          ?>
        </td>
        <td>
          <?= (int)($A && $B);
          ?>
        </td>
        <td>
          <?= (int)($A xor $B);
          ?>
        </td>
      </tr>
      <tr>
        <td><?= 1; ?></td>
        <td><?= 1; ?></td>
        <td>
          <?= (int)!$A;
          ?>
        </td>
        <td>
          <?= (int)($A || $B);
          ?>
        </td>
        <td>
          <?= (int)($A && $B);
          ?>
        </td>
        <td>
          <?= (int)($A xor $B);
          ?>
        </td>
      </tr>
    </table>
    <table class="logical-table">
      <?php
      $true = true;
      $false = false;
      $one = 1;
      $zero = 0;
      $minusOne = -1;
      $stringOne = '1';
      $null = null;
      $php = 'php';
      ?>
      <tr>
        <th> </th>
        <th><?= var_export($true); ?></th>
        <th><?= var_export($false); ?></th>
        <th><?= '1'; ?></th>
        <th><?= '0'; ?></th>
        <th><?= '-1'; ?></th>
        <th><?= '"1"'; ?></th>
        <th><?= 'null'; ?></th>
        <th><?= '"php"'; ?></th>
      </tr>
      <tr>
        <td>
          <?php $stringOne = true;
          echo var_export($stringOne); ?>
        </td>
        <td><?= (int)($stringOne == $true); ?></td>
        <td><?= (int)($stringOne == $false); ?></td>
        <td><?= (int)($stringOne == $one); ?></td>
        <td><?= (int)($stringOne == $zero); ?></td>
        <td><?= (int)($stringOne == $minusOne); ?></td>
        <td><?= (int)($stringOne == $stringOne); ?></td>
        <td><?= (int)($stringOne == $null); ?></td>
        <td><?= (int)($stringOne == $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringTwo = false;
          echo var_export($stringTwo); ?>
        </td>
        <td><?= (int)($stringTwo == $true); ?></td>
        <td><?= (int)($stringTwo == $false); ?></td>
        <td><?= (int)($stringTwo == $one); ?></td>
        <td><?= (int)($stringTwo == $zero); ?></td>
        <td><?= (int)($stringTwo == $minusOne); ?></td>
        <td><?= (int)($stringTwo == $stringOne); ?></td>
        <td><?= (int)($stringTwo == $null); ?></td>
        <td><?= (int)($stringTwo == $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringThree = 1;
          echo $stringThree; ?>
        </td>
        <td><?= (int)($stringThree == $true); ?></td>
        <td><?= (int)($stringThree == $false); ?></td>
        <td><?= (int)($stringThree == $one); ?></td>
        <td><?= (int)($stringThree == $zero); ?></td>
        <td><?= (int)($stringThree == $minusOne); ?></td>
        <td><?= (int)($stringThree == $stringOne); ?></td>
        <td><?= (int)($stringThree == $null); ?></td>
        <td><?= (int)($stringThree == $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringFour = 0;
          echo $stringFour; ?>
        </td>
        <td><?= (int)($stringFour == $true); ?></td>
        <td><?= (int)($stringFour == $false); ?></td>
        <td><?= (int)($stringFour == $one); ?></td>
        <td><?= (int)($stringFour == $zero); ?></td>
        <td><?= (int)($stringFour == $minusOne); ?></td>
        <td><?= (int)($stringFour == $stringOne); ?></td>
        <td><?= (int)($stringFour == $null); ?></td>
        <td><?= (int)($stringFour == $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringFive = -1;
          echo $stringFive; ?>
        </td>
        <td><?= (int)($stringFive == $true); ?></td>
        <td><?= (int)($stringFive == $false); ?></td>
        <td><?= (int)($stringFive == $one); ?></td>
        <td><?= (int)($stringFive == $zero); ?></td>
        <td><?= (int)($stringFive == $minusOne); ?></td>
        <td><?= (int)($stringFive == $stringOne); ?></td>
        <td><?= (int)($stringFive == $null); ?></td>
        <td><?= (int)($stringFive == $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringSix = '1';
          echo var_export($stringSix); ?>
        </td>
        <td><?= (int)($stringSix == $true); ?></td>
        <td><?= (int)($stringSix == $false); ?></td>
        <td><?= (int)($stringSix == $one); ?></td>
        <td><?= (int)($stringSix == $zero); ?></td>
        <td><?= (int)($stringSix == $minusOne); ?></td>
        <td><?= (int)($stringSix == $stringOne); ?></td>
        <td><?= (int)($stringSix == $null); ?></td>
        <td><?= (int)($stringSix == $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringSeven = null;
          echo var_export($stringSeven); ?>
        </td>
        <td><?= (int)($stringSeven == $true); ?></td>
        <td><?= (int)($stringSeven == $false); ?></td>
        <td><?= (int)($stringSeven == $one); ?></td>
        <td><?= (int)($stringSeven == $zero); ?></td>
        <td><?= (int)($stringSeven == $minusOne); ?></td>
        <td><?= (int)($stringSeven == $stringOne); ?></td>
        <td><?= (int)($stringSeven == $null); ?></td>
        <td><?= (int)($stringSeven == $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringEight = 'php';
          echo var_export($stringEight); ?>
        </td>
        <td><?= (int)($stringEight == $true); ?></td>
        <td><?= (int)($stringEight == $false); ?></td>
        <td><?= (int)($stringEight == $one); ?></td>
        <td><?= (int)($stringEight == $zero); ?></td>
        <td><?= (int)($stringEight == $minusOne); ?></td>
        <td><?= (int)($stringEight == $stringOne); ?></td>
        <td><?= (int)($stringEight == $null); ?></td>
        <td><?= (int)($stringEight == $php); ?></td>
      </tr>
    </table>

    <table class="logical-table">
      <tr>
        <th> </th>
        <th><?= var_export($true); ?></th>
        <th><?= var_export($false); ?></th>
        <th><?= '1'; ?></th>
        <th><?= '0'; ?></th>
        <th><?= '-1'; ?></th>
        <th><?= '"1"'; ?></th>
        <th><?= 'null'; ?></th>
        <th><?= '"php"'; ?></th>
      </tr>
      <tr>
        <td>
          <?php $stringOne = true;
          echo var_export($stringOne); ?>
        </td>
        <td><?= (int)($stringOne === $true); ?></td>
        <td><?= (int)($stringOne === $false); ?></td>
        <td><?= (int)($stringOne === $one); ?></td>
        <td><?= (int)($stringOne === $zero); ?></td>
        <td><?= (int)($stringOne === $minusOne); ?></td>
        <td><?= (int)($stringOne === $stringOne); ?></td>
        <td><?= (int)($stringOne === $null); ?></td>
        <td><?= (int)($stringOne === $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringTwo = false;
          echo var_export($stringTwo); ?>
        </td>
        <td><?= (int)($stringTwo === $true); ?></td>
        <td><?= (int)($stringTwo === $false); ?></td>
        <td><?= (int)($stringTwo === $one); ?></td>
        <td><?= (int)($stringTwo === $zero); ?></td>
        <td><?= (int)($stringTwo === $minusOne); ?></td>
        <td><?= (int)($stringTwo === $stringOne); ?></td>
        <td><?= (int)($stringTwo === $null); ?></td>
        <td><?= (int)($stringTwo === $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringThree = 1;
          echo $stringThree; ?>
        </td>
        <td><?= (int)($stringThree === $true); ?></td>
        <td><?= (int)($stringThree === $false); ?></td>
        <td><?= (int)($stringThree === $one); ?></td>
        <td><?= (int)($stringThree === $zero); ?></td>
        <td><?= (int)($stringThree === $minusOne); ?></td>
        <td><?= (int)($stringThree === $stringOne); ?></td>
        <td><?= (int)($stringThree === $null); ?></td>
        <td><?= (int)($stringThree === $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringFour = 0;
          echo $stringFour; ?>
        </td>
        <td><?= (int)($stringFour === $true); ?></td>
        <td><?= (int)($stringFour === $false); ?></td>
        <td><?= (int)($stringFour === $one); ?></td>
        <td><?= (int)($stringFour === $zero); ?></td>
        <td><?= (int)($stringFour === $minusOne); ?></td>
        <td><?= (int)($stringFour === $stringOne); ?></td>
        <td><?= (int)($stringFour === $null); ?></td>
        <td><?= (int)($stringFour === $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringFive = -1;
          echo $stringFive; ?>
        </td>
        <td><?= (int)($stringFive === $true); ?></td>
        <td><?= (int)($stringFive === $false); ?></td>
        <td><?= (int)($stringFive === $one); ?></td>
        <td><?= (int)($stringFive === $zero); ?></td>
        <td><?= (int)($stringFive === $minusOne); ?></td>
        <td><?= (int)($stringFive === $stringOne); ?></td>
        <td><?= (int)($stringFive === $null); ?></td>
        <td><?= (int)($stringFive === $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringSix = '1';
          echo var_export($stringSix); ?>
        </td>
        <td><?= (int)($stringSix === $true); ?></td>
        <td><?= (int)($stringSix === $false); ?></td>
        <td><?= (int)($stringSix === $one); ?></td>
        <td><?= (int)($stringSix === $zero); ?></td>
        <td><?= (int)($stringSix === $minusOne); ?></td>
        <td><?= (int)($stringSix === $stringOne); ?></td>
        <td><?= (int)($stringSix === $null); ?></td>
        <td><?= (int)($stringSix === $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringSeven = null;
          echo var_export($stringSeven); ?>
        </td>
        <td><?= (int)($stringSeven === $true); ?></td>
        <td><?= (int)($stringSeven === $false); ?></td>
        <td><?= (int)($stringSeven === $one); ?></td>
        <td><?= (int)($stringSeven === $zero); ?></td>
        <td><?= (int)($stringSeven === $minusOne); ?></td>
        <td><?= (int)($stringSeven === $stringOne); ?></td>
        <td><?= (int)($stringSeven === $null); ?></td>
        <td><?= (int)($stringSeven === $php); ?></td>
      </tr>
      <tr>
        <td>
          <?php $stringEight = 'php';
          echo var_export($stringEight); ?>
        </td>
        <td><?= (int)($stringEight === $true); ?></td>
        <td><?= (int)($stringEight === $false); ?></td>
        <td><?= (int)($stringEight === $one); ?></td>
        <td><?= (int)($stringEight === $zero); ?></td>
        <td><?= (int)($stringEight === $minusOne); ?></td>
        <td><?= (int)($stringEight === $stringOne); ?></td>
        <td><?= (int)($stringEight === $null); ?></td>
        <td><?= (int)($stringEight === $php); ?></td>
      </tr>
    </table>
  </div>
</body>

</html>
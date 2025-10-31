  <?php
  /*
Deeya Dave
October 31, 2025
IT-202-003 Internet Applications
Phase 3 Assignment: HTML Website Layout
dd594@njit.edu
*/
   if (isset($_SESSION['login'])) {
   ?>
    <div class="navigation" style="float: left; height: 100%; min-width: 300px; width: auto;">
      <table width="100%" cellpadding="3">
        <?php
         echo "<td><h3>Welcome, {$_SESSION['login']}</h3></td>";
         ?>
        <tr>
          <td><a href="index.php"><strong>Home</strong></a></td>
        </tr>
        <tr>
          <td><strong>Coffee Types</strong></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listcoffeetypes">
              <strong>List Coffee Types</strong></a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newcoffeetype">
              <strong>Add New Coffee Type</strong></a></td>
        </tr>
        <tr>
          <td><strong>Coffees</strong></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=listcoffees">
              <strong>List Coffees</strong></a></td>
        </tr>
        <tr>
          <td>&nbsp;&nbsp;&nbsp;<a href="index.php?content=newcoffee">
              <strong>Add New Coffee</strong></a></td>
        </tr>
        <tr>
          <td>
            <hr />
          </td>
        </tr>
        <tr>
          <td><a href="index.php?content=logout">
              <strong>Logout</strong></a></td>
        </tr>
        <tr>
          <td>&nbsp;</td>
        </tr>
        <tr>
          <td>
            <form action="index.php" method="post">
              <label>Search for Coffee:</label><br>
              <input type="text" name="CoffeeID" size="14" />
              <input type="submit" value="find" />
              <input type="hidden" name="content" value="updatecoffee" />
            </form>
          </td>
        </tr>
        <tr>
          <td>
            <form action="index.php" method="post">
              <label>Search for Coffee Type:</label><br>
              <input type="text" name="CoffeeTypeID" size="14" />
              <input type="submit" value="find" />
              <input type="hidden" name="content" value="displaycoffeetype" />
            </form>
          </td>
        </tr>
      </table>
    </div>
  <?php
   }
   ?>
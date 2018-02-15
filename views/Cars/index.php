<!DOCTYPE html>
<html>
<head>
	<body>
		<h1>Add a New Car To The List</h1>
        <form action="create" method="POST">
            <input type="text" name="car" placeholder="Geo- Metro"/><br/>
            <input type="text" name="owner" placeholder="Name Please ?"/><br/>
            <input type="submit" value="Submit"/>
        </form>
	<title>Index cars</title>
	  <section>
      <ul>
          <?php while($row = $cars->fetch_object()): ?>
              <li>
                  Here is a <?php echo $row->car ?> for <?php echo $row->owner?>
                  <form action="delete" method="POST">
                  	<input type="hidden" name="id" value="<?php echo $row->id;?>">
                  	<input type="submit" value="Delete">
                  </form>
                  <form action="edit" method="POST">
                    <input name="id" type="text" value="<?php echo $row->id; ?>" style="display: none"/>
                    <input name="car" type="text" value="<?php echo $row->car; ?>" style="display: none"/>
                    <input name="owner" type="text" value="<?php echo $row->owner; ?>" style="display: none"/>
                    <input type="submit" " value="Edit">
                  </form>
              </li>
          <?php endwhile; ?>
      </ul>
  </section>	
</body>
</html>
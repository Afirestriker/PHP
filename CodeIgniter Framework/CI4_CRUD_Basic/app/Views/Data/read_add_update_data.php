<html>
    <head>
        <title></title>
    </head>
    <body>
        <table>
            <ul>
              <li>ID</li>
              <li>Name</li>
              <li>Email</li>
              <li>Edit</li>
              <li>Delete</li>
            </ul>
            <?php 
            foreach ($data as $d){?>
                 <ul>
              <li><?php echo $d['id'];?></li>
              <li><?php echo $d['name'];?></li>
              <li><?php echo $d['email'];?></li>
              <li><a href="<?php echo base_url('index.php/DataController/edit/') . "/".$d['id'];?>">Edit</a></li>
              <li><a href="<?php echo base_url('index.php/DataController/delete/') . "/".$d['id'];?>">Delete</a></li>
            </ul>
<?php
    
            }
            ?>
        </table>



        <form action="<?php  echo base_url('index.php/DataController/getdata/') ?>" Method="get">
            <lable>Name</lable>
            <input type="text" placeholder="name" name="name">
            <lable>Email</lable>
            <input type="email" placeholder="email" name="email">
            <input type="submit" value="submit">
        </form>
    </body>
    <html>
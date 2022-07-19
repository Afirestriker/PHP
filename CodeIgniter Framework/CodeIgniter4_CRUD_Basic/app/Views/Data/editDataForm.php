<html>
    <head> <title></title> </head>
<body>

        <h3>Edit data for ID: <?php echo $data['id']; ?></h3>
        <form action="<?php  echo base_url('index.php/DataController/editData/') ?>" Method="get">
            <lable>Name</lable>
            <input type="hidden" name="id" value="<?php echo $data['id'] ?>">
            <input type="text" placeholder="name" name="name" value="<?php echo $data['name'] ?>">
            <lable>Email</lable>
            <input type="email" placeholder="email" name="email" value="<?php echo $data['email'] ?>">
            <input type="submit" value="submit">
        </form>


    </body>
</html>
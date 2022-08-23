<!DOCTYPE html>
<html>
    <head>
        <title>php test</title>
    </head>
    <body>
        <?php
            require 'DBFunctionClass.php';
            require 'AdminClass.php';
            $admin1 = new Admin("rafifa", "CSO");
            $admin1->setBloodGroup("A+");
        ?>
        <table border="1">
            <tr>
                <th>name</th>
                <th>designation</th>
                <th>blood Group</th>
            </tr>
            <tr>
                <td><?php echo $admin1->getName() ?></td>
                <td><?php echo $admin1->getDesignation() ?></td>
                <td><?php echo $admin1->getBloodGroup() ?></td>
            </tr>
        </table>
    </body>
</html>
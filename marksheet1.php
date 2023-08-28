<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

</head>
<body>
    
<div class="container">
    <h1 class="text-center text-info text-capitalize">Marksheet</h1>
    <form method="post">  
          <div class="mb-3"></div>
    <label for class =" " class="form-label">user name</label>
    <input type="text" class="form-control" name="name"></div>

    <div class="mb-3"></div>
    <label for class =" " class="form-label">urdu</label>
    <input type="text" class="form-control" name="urdu"></div>

    <div class="mb-3"></div>
    <label for class =" " class="form-label">english</label>
    <input type="text" class="form-control" name="english"></div>

    <div class="mb-3"></div>
    <label for class =" " class="form-label">maths</label>
    <input type="text" class="form-control" name="maths"></div>

    <div class="mb-3"></div>
    <label for class =" " class="form-label">physics</label>
    <input type="text" class="form-control" name="physics"></div>

    <div class="mb-3"></div>
    <label for class =" " class="form-label">chemsitry</label>
    <input type="text" class="form-control" name="chemistry"></div>


    <button type="submit" class="btn btn-primary mt-5" name="getresult">Submit</button>
</form>
</div>


<div class="container">
 
        <table class="table table-dark">
        <thead>
            <tr>
                <th scope = "col">name</th>
                <th scope = "col">urdu</th>
                <th scope = "col">english</th>
                <th scope = "col">maths</th>
                <th scope = "col">physics</th>
                <th scope = "col">chemistry</th>
                <th scope = "col">obtained</th>
                <th scope = "col">total</th>
                <th scope = "col">percentage</th>
                <th scope = "col">grade</th>
                <th scope = "col">remarks</th>
</tr>
</thead>

<tbody>
    <?php
    if(isset($_POST['getresult'])){
    $name=$_POST['name'];
    $urdu=$_POST['urdu'];
    $english=$_POST['english'];
    $maths=$_POST['maths'];
    $physics=$_POST['physics'];
    $chemistry=$_POST['chemistry'];
    $obtained= $urdu + $english + $maths + $physics + $chemistry;
    $total= 500;
        $percentage=($obtained/$total)*100;
        if ($percentage>90 && $percentage<=100){
            $grad="A+1";
            $remarks="Excellent";
            ?>    
     <tr>
        <td><?php echo $name;?></td>
<td><?php echo $urdu ;?></td>
<td><?php echo $english ;?></td>
<td><?php echo $maths ;?></td>
<td><?php echo $physics; ?></td>
<td><?php echo $chemistry; ?></td>
<td><?php echo $obtained ;?></td>
<td><?php echo $total ;?></td>
<td><?php echo $percentage ;?></td>
<td><?php echo $grad ;?></td>
<td><?php echo $remarks; ?></td>


        </tr>
        <?php
        }

        elseif($percentage>=80 && $percentage<=90){
            $grad="A+";
            $remarks="Weldone";
            ?>

<tr>
        <td><?php echo $name;?></td>
<td><?php echo $urdu ;?></td>
<td><?php echo $english ;?></td>
<td><?php echo $maths ;?></td>
<td><?php echo $physics; ?></td>
<td><?php echo $chemistry; ?></td>
<td><?php echo $obtained ;?></td>
<td><?php echo $total; ?></td>
<td><?php echo $percentage ;?></td>
<td><?php echo $grad; ?></td>
<td><?php echo $remarks; ?></td>

        </tr>
        <?php
        }
          
        

        elseif($percentage>70 && $percentage<=80){
            $grad="B";
            $remarks="Very Good";
            ?>

        <tr>
        <td><?php echo $name;?></td>
<td><?php echo $urdu ;?></td>
<td><?php echo $english ;?></td>
<td><?php echo $maths ;?></td>
<td><?php echo $physics; ?></td>
<td><?php echo $chemistry; ?></td>
<td><?php echo $obtained ;?></td>
<td><?php echo $total; ?></td>
<td><?php echo $percentage ;?></td>
<td><?php echo $grad; ?></td>
<td><?php echo $remarks; ?></td>

        </tr>
        <?php
        }

        elseif($percentage>60 && $percentage<=70){
            $grad="C";
            $remarks="Good";
            ?>
            <tr>
            <td><?php echo $name;?></td>
    <td><?php echo $urdu ;?></td>
    <td><?php echo $english ;?></td>
    <td><?php echo $maths ;?></td>
    <td><?php echo $physics; ?></td>
    <td><?php echo $chemistry; ?></td>
    <td><?php echo $obtained ;?></td>
    <td><?php echo $total; ?></td>
    <td><?php echo $percentage; ?></td>
    <td><?php echo $grad ;?></td>
    <td><?php echo $remarks; ?></td>

            </tr>
        <?php
        }

        elseif($percentage>50 && $percentage<=60){
            $grad="D";
            $remarks="Fair";
            ?>

            <tr>
            <td><?php echo $name;?></td>
    <td><?php echo $urdu ;?></td>
    <td><?php echo $english ;?></td>
    <td><?php echo $maths ;?></td>
    <td><?php echo $physics; ?></td>
    <td><?php echo $chemistry; ?></td>
    <td><?php echo $obtained ;?></td>
    <td><?php echo $total; ?></td>
    <td><?php echo $percentage ;?></td>
    <td><?php echo $grad ;?></td>
    <td><?php echo $remarks; ?></td>

            </tr>
        <?php
        }

        elseif($percentage<50){
            $grad="F";
            $remarks="Poor need to improve";
            ?>

            <tr>
            <td><?php echo $name;?></td>
    <td><?php echo $urdu ;?></td>
    <td><?php echo $english ;?></td>
    <td><?php echo $maths ;?></td>
    <td><?php echo $physics; ?></td>
    <td><?php echo $chemistry; ?></td>
    <td><?php echo $obtained ;?></td>
    <td><?php echo $total; ?></td>
    <td><?php echo $percentage ;?></td>
    <td><?php echo $grad ;?></td>
    <td><?php echo $remarks; ?></td>

            </tr>
        <?php
        }
    }
    ?>
    </tbody>
    </table>
         

</div>
</body>
</html>
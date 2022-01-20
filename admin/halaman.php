 <?php include("my_header.php")?>       
 <?php
 $sukses = "";
 if(isset($_GET['op'])){
     $op = $_GET['op'];
 }else{
     $op = "";
 }
 if($op == 'delete'){
     $id = $_GET['id'];
     $sql1 = "delete from mainpage where id = '$id'";
     $q1 = mysqli_query($mysqli, $sql1);
     if($q1){
         $sukses = "Deleted succesfully";
     }
 }
 ?>
        <h1>Admin Pages</h1>
        <p>
            <a href="halaman_input.php">
                <input type="button" class="btn btn-primary" value="Add New Page"/>
            </a>
        </p>
        <?php
        if($sukses){
        ?>
            <div class="alert alert-primary" role="alert">
                <?php echo $sukses ?>
            </div>
        <?php
        }
        ?>
        <table class="table table-stripped">
            <thead>
                <tr>
                    <th class="col-1">#</th>
                    <th>Title</th>
                    <th>Sub Title</th>
                    <th>Content</th>
                    <th class="col-2">Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $sql1   = "select * from mainpage order by id desc";
                $q1     = mysqli_query($mysqli, $sql1);
                $nomor  = 1;
                while($r1 = mysqli_fetch_array($q1)){
                ?>
                     <tr>
                        <td><?php echo $nomor++?></td>
                        <td><?php echo $r1['title']?></td>
                        <td><?php echo $r1['subtitle']?></td>
                        <td><?php echo $r1['content']?></td>
                        <td>
                            <a href="halaman_input.php?id=<?php echo $r1['id']?>">
                                <span class="badge bg-warning text-dark">Edit</span>
                            </a>
                            
                            <a href="halaman.php?op=delete&id=<?php echo $r1['id']?>" onclick="return confirm('Are you sure want to delete the data?')">
                                <span class="badge bg-danger">Delete</span>
                            </a>
                        </td>
                    </tr>
                <?php
                }
                ?>
               
            </tbody>
        </table>
        <?php include("my_footer.php")?> 
    
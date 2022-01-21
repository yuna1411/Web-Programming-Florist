<?php 
include("../admin/my_header.php");
?>

<?php
$nama          = "";
$picture        = "";
$content        = "";
$error          = "";
$sukses         = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}

if($id != ""){
    $sql1   = "select * from featured where id = '$id'";
    $q1     = mysqli_query($mysqli, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $nama  = $r1['nama'];
    $content  = $r1['content'];
    $picture = $r1['picture'];

    if($content == ''){
        $error = "Data not found";
    }
}

if(isset($_POST['simpan'])){
    $nama      = $_POST['nama'];
    $content    = $_POST['content'];

    if($nama == '' or $content == ''){
        $error  = "Please insert all data";
    }
    // print_r($_FILES);
    if($_FILES['picture']['name']){
        $picture_name = $_FILES['picture']['name'];
        $picture_file = $_FILES['picture']['tmp_name'];

        $detail_file = pathinfo($picture_name);
        $picture_ekstensi = $detail_file['extension'];

        $ekstensi_boleh = array("jpg","png","jpeg","jfif","gif");
        if(!in_array($picture_ekstensi, $ekstensi_boleh)){
            $error = "Only jpg, jpeg, png, gif, jfif are permitted";

        }
    }

    if(empty($error)){
        if($picture_name){
            $direktori = "../images";

            @unlink($direktori."/$picture"); //delete data yang sebelumnya

            $picture_name = "best_".time()."_".$picture_name;
            move_uploaded_file($picture_file, $direktori."/".$picture_name);

            $picture = $picture_name;
        }else{
            $picture_name = $picture; // memasukkan data dari data yang sblumnya ada
        }
        
        if($id != ""){
            $sql1   = "update featured set nama = '$nama', picture='$picture_name', content='$content', date=now() where id='$id'";
        }else{
            $sql1   = "insert into featured (nama,picture,content) values ('$nama','$picture_name','$content')";
        }
        $q1     = mysqli_query($mysqli,$sql1);
        if($q1){
            $sukses = "Saved succesfully";
        }else{
            $error  = "Failed to save";
        }
    }
}

?>

    <h1>Input Data Featured Products</h1>
    <div class="mb-3 row">
        <a href="featured.php">Back to Featured Product Page</a>
    </div>

<?php
if($error){
?>
    <div class="alert alert-danger" role="alert">
        <?php echo $error ?>
    </div>
<?php
}
?>

<?php
if($sukses){
?>
    <div class="alert alert-primary" role="alert">
        <?php echo $sukses ?>
    </div>
<?php
}
?>


    <form action="" method="post" enctype="multipart/form-data">
        <div class="mb-3 row">
            <label for="nama" class="col-sm-2 col-form-label">Name</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="nama" value="<?php echo $nama ?>" name="nama">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="picture" class="col-sm-2 col-form-label">Picture</label>
            <div class="col-sm-10">
                <?php
                if($picture){
                    echo "<img src='../images/$picture' style='max-height:100px;max-width:100px'/>";
                }
                ?>
                <input type="file" class="form-control" id="picture" name="picture">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="content" class="col-sm-2 col-form-label">Content</label>
            <div class="col-sm-10">
                <textarea name="content" class="form-control" id="summernote"><?php echo $content ?></textarea>
            </div>
        </div>
        <div class="mb-3 row">
            <div class="col-sm-2"></div>
            <div class="col-sm-10">
                <input type="submit" name="simpan" value="Save" class="btn btn-primary"/>
            </div>
        </div>

    </form>
<?php include("my_footer.php")?>
<?php 
include("../admin/my_header.php");
?>

<?php
$title          = "";
$subtitle       = "";
$content        = "";
$error          = "";
$sukses         = "";

if(isset($_GET['id'])){
    $id = $_GET['id'];
}else{
    $id = "";
}

if($id != ""){
    $sql1   = "select * from mainpage where id = '$id'";
    $q1     = mysqli_query($mysqli, $sql1);
    $r1     = mysqli_fetch_array($q1);
    $title  = $r1['title'];
    $subtitle = $r1['subtitle'];
    $content  = $r1['content'];

    if($content == ''){
        $error = "Data not found";
    }
}

if(isset($_POST['simpan'])){
    $title      = $_POST['title'];
    $subtitle   = $_POST['subtitle'];
    $content    = $_POST['content'];

    if($title == '' or $content == ''){
        $error  = "Please insert all data";
    }

    if(empty($error)){
        if($id != ""){
            $sql1   = "update mainpage set title = '$title', subtitle='$subtitle', content='$content', date=now() where id='$id'";
        }else{
            $sql1   = "insert into mainpage(title,subtitle,content) values ('$title','$subtitle','$content')";
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

    <h1>Input Data Admin Page</h1>
    <div class="mb-3 row">
        <a href="halaman.php">Back to Admin Pages</a>
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


    <form action="" method="post">
        <div class="mb-3 row">
            <label for="titles" class="col-sm-2 col-form-label">Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="title" value="<?php echo $title ?>" name="title">
            </div>
        </div>
        <div class="mb-3 row">
            <label for="subtitle" class="col-sm-2 col-form-label">Sub Title</label>
            <div class="col-sm-10">
                <input type="text" class="form-control" id="subtitle" value="<?php echo $subtitle ?>" name="subtitle">
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
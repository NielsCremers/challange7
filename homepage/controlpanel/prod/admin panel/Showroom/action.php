<?php
    session_start();

    include 'config.php';

    $update=false;
    $id="";
    $naam="";
    $prijs="";
    $kleur="";
    $kilometerstand="";
    $paardenkracht="";
    $bouwjaar="";
    $brandstof="";
    $merk="";
    $naamauto="";
    $foto="";
    $foto2="";
    $foto3="";
    $foto4="";

    if(isset($_POST['add'])){
        $merk=$_POST['merk'];
        $naam=$_POST['naam'];
        $prijs=$_POST['prijs'];
        $kleur=$_POST['kleur'];
        $kilometerstand=$_POST['kilometerstand'];
        $paardenkracht=$_POST['paardenkracht'];
        $bouwjaar=$_POST['bouwjaar'];
        $brandstof=$_POST['brandstof'];
        

        $foto=$_FILES['foto']['name'];
        $foto2=$_FILES['foto2']['name'];
        $foto3=$_FILES['foto3']['name'];
        $foto4=$_FILES['foto4']['name'];
        $upload="uploads/".$foto;
        $upload2="uploads/".$foto2;
        $upload3="uploads/".$foto3;
        $upload4="uploads/".$foto4;

        $query="INSERT INTO tb_autos(merk,naam,prijs,kleur,kilometerstand,paardenkracht,bouwjaar,brandstof,foto,foto2,foto3,foto4)VALUES(?,?,?,?,?,?,?,?,?,?,?,?)";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssssssssssss",$merk,$naam,$prijs,$kleur,$kilometerstand,$paardenkracht,$bouwjaar,$brandstof,$upload,$upload2,$upload3,$upload4);
        $stmt->execute();
        move_uploaded_file($_FILES['foto']['tmp_name'], $upload);
        move_uploaded_file($_FILES['foto2']['tmp_name'], $upload2);
        move_uploaded_file($_FILES['foto3']['tmp_name'], $upload3);
        move_uploaded_file($_FILES['foto4']['tmp_name'], $upload4);


        header('location: showroom.php');
        $_SESSION['response']="Successfully Inserted to the database!";
        $_SESSION['res_type']="success";
    }

    if(isset($_GET['delete'])){
        $id=$_GET['delete'];

        $sql="SELECT foto FROM tb_autos WHERE id=?";
        $stmt2=$conn->prepare($sql);
        $stmt2->bind_param("i",$id);
        $stmt2->execute();
        $result2=$stmt2->get_result();
        $row=$result2->fetch_assoc();

        $imagepath=$row['foto'];
        unlink($imgaepath);

        $imagepath2=$row['foto2'];
        unlink($imgaepath2);

        $imagepath3=$row['foto3'];
        unlink($imgaepath3);

        $imagepath4=$row['foto4'];
        unlink($imgaepath4);

        $query="DELETE FROM tb_autos WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();

        header('location: showroom.php');
        $_SESSION['response']="Successfully Deleted!";
        $_SESSION['res_type']="danger";
    }
    if(isset($_GET['edit'])){
        $id=$_GET['edit'];
        
        $query="SELECT * FROM tb_autos WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();

        $id=$row['id'];
        $merk=$row['merk'];
        $naam=$row['naam'];
        $prijs=$row['prijs'];
        $kleur=$row['kleur'];
        $kilometerstand=$row['kilometerstand'];
        $paardenkracht=$row['paardenkracht'];
        $bouwjaar=$row['bouwjaar'];
        $brandstof=$row['brandstof'];
        $foto=$row['foto'];
        $foto2=$row['foto2'];
        $foto3=$row['foto3'];
        $foto4=$row['foto4'];

        $update=true;
    }

    if(isset($_POST['update'])) {
        $id=$_POST['id'];
        $merk=$_POST['merk'];
        $naam=$_POST['naam'];
        $prijs=$_POST['prijs'];
        $kleur=$_POST['kleur'];
        $kilometerstand=$_POST['kilometerstand'];
        $paardenkracht=$_POST['paardenkracht'];
        $bouwjaar=$_POST['bouwjaar'];
        $brandstof=$_POST['brandstof'];
        $oldimage=$_POST['oldimage'];
        $oldimage2=$_POST['oldimage2'];
        $oldimage3=$_POST['oldimage3'];
        $oldimage4=$_POST['oldimage4'];

        //Foto1
        if(isset($_FILES['foto']['name'])&&($_FILES['foto']['name']!="")){
            $newimage="uploads/".$_FILES['foto']['name'];
            unlink($oldimage);
            move_uploaded_file($_FILES['foto']['tmp_name'], $newimage);
        } else {
            $newimage=$oldimage;
        }

        //Foto2
        if(isset($_FILES['foto2']['name'])&&($_FILES['foto2']['name']!="")){
            $newimage2="uploads/".$_FILES['foto2']['name'];
            unlink($oldimage2);
            move_uploaded_file($_FILES['foto2']['tmp_name'], $newimage2);
        } else {
            $newimage2=$oldimage2;
        }

        //Foto3
        if(isset($_FILES['foto3']['name'])&&($_FILES['foto3']['name']!="")){
            $newimage3="uploads/".$_FILES['foto3']['name'];
            unlink($oldimage3);
            move_uploaded_file($_FILES['foto3']['tmp_name'], $newimage3);
        } else {
            $newimage3=$oldimage3;
        }

        //Foto4
        if(isset($_FILES['foto4']['name'])&&($_FILES['foto4']['name']!="")){
            $newimage4="uploads/".$_FILES['foto4']['name'];
            unlink($oldimage4);
            move_uploaded_file($_FILES['foto4']['tmp_name'], $newimage4);
        } else {
            $newimage4=$oldimage4;
        }

        $query="UPDATE tb_autos SET merk=?,naam=?,prijs=?,kleur=?,kilometerstand=?,paardenkracht=?,bouwjaar=?,brandstof=?,foto=?,foto2=?,foto3=?,foto4=? WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("ssssssssssssi",$merk,$naam,$prijs,$kleur,$kilometerstand,$paardenkracht,$bouwjaar,$brandstof,$newimage,$newimage2,$newimage3,$newimage4,$id);
        $stmt->execute();

        $_SESSION['response']="Updated Successfullt!";
        $_SESSION['res_type']="primary";
        header('location: showroom.php');
    }

    if(isset($_GET['details'])) {
        $id=$_GET['details'];
        $query="SELECT * FROM tb_autos WHERE id=?";
        $stmt=$conn->prepare($query);
        $stmt->bind_param("i",$id);
        $stmt->execute();
        $result=$stmt->get_result();
        $row=$result->fetch_assoc();

        $vid=$row['id'];
        $vmerk=$row['merk'];
        $vnaam=$row['naam'];
        $vprijs=$row['prijs'];
        $vkleur=$row['kleur'];
        $vkilometerstand=$row['kilometerstand'];
        $vpaardenkracht=$row['paardenkracht'];
        $vbouwjaar=$row['bouwjaar'];
        $vbrandstof=$row['brandstof'];
        $vfoto=$row['foto'];
        $vfoto2=$row['foto2'];
        $vfoto3=$row['foto3'];
        $vfoto4=$row['foto4'];
    }
?>
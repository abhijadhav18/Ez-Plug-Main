     <?php include('header.php'); 
         if(isset($_GET['dsubmit']))
         {
            $ctype = $_GET['ctype'];
            $location_code = $_GET['location'];
            $mobile = $_GET['mobile'];
            $station = $_GET['station'];
            $bdate = $_GET['bdate'];
            $bslot = $_GET['bslot'];
            $oql = "SELECT * FROM station WHERE station = '$station' LIMIT 1";
            $swrest = mysqli_query($con, $oql) or die( mysqli_error($con));
            while($reow=mysqli_fetch_array($swrest))
            {
                $location = $reow['location'];
                $price = $reow['price'];
            }
            $qu=mysqli_query($con,"SELECT * from book WHERE ctype='$ctype' AND location='$location' AND station='$station' AND bdate='$cdate' AND bslot='$bslot'")or die(mysqli_error());
            $cnt=mysqli_num_rows($qu);
            if($cnt>0)
            {
                unset($_SESSION['wr']);
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Booking Already Exit.');
                window.location.href='booknow.php';
                </script>");
            }
            else
            {
                $sql = "INSERT INTO book (ctype,c_email,station,mobile,date,bdate,bslot,price,location)
                VALUES ('$ctype','$uemail','$station','$mobile','$cdate','$bdate','$bslot','$price','$location')";
    
                $run = mysqli_query($con,$sql);
    
                if($run)
                {
                    unset($_SESSION['wr']);
                echo ("<script LANGUAGE='JavaScript'>
                window.alert('Thank you for Booking.');
                window.location.href='booknow.php';
                </script>");
                }
                else 
                {
                    echo "Error: record not Added " ;
                }
            }
         }
        ?>
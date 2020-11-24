<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@10"></script>
<?php /*
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
        ?>
        <script>
            Swal.fire(
               '<?php echo $_SESSION['status']; ?>',
               '<?php echo $_SESSION['text']; ?>',
               '<?php echo $_SESSION['status_code']; ?>'
            )
        </script>
        <?php
        unset($_SESSION['status']);
    }*/
?>
<?php 
    if(isset($_SESSION['status']) && $_SESSION['status']!=''){
            $a = $_SESSION['status'];
            $b = $_SESSION['text'];
            $c = $_SESSION['status_code'];
        echo "<script>
            Swal.fire(
               '$a',
               '$b',
               '$c'
            )
        </script>";
        unset($_SESSION['status']);
    }
?>
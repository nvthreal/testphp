<ul>
  <li><a href="layout.php?page_layout=coffe">Coffe</a></li>
  <li>Tea</li>
  <li>Milk</li>
</ul>

<?php
    if (isset($_GET['page_layout'])) {
        # code...
        switch ($_GET['page_layout']) {
            case 'coffe':
                # code...
                include_once('coffe.php');
                break;
            
            default:
                # code...
                break;
        }
    }
?>
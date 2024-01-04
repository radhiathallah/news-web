<?php
if (!empty($_GET['page'])) {
    include_once($_GET['page'] . ".php");
} else {
    include "landing/home/index.php";
}

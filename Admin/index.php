<?php
require_once("inc/header.php");
require_once("inc/navigation.php");
if(isset($_GET['homepage']))
{
    require_once("inc/homepage.php");
}else if(isset($_GET['addelectionpage']))
{
    require_once("inc/add_election.php");
}else if (isset($_GET['addcandidatepage'])){
    require_once("inc/add_candidate.php");
}

?>
<?php
require_once("inc/footer.php");
?>
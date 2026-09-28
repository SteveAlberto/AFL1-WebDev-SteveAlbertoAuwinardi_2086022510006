<?php
include 'model_karyawan.php';

session_start() ;
if (!isset ($_SESSION['memberlist'])) {
    $_SESSION['memberlist'] = array();
}

function CreateMember(){
    $member = new member();
    $member->nama = $_POST['inputNama'];
    $member->kantor = $_POST['inputKantor'];
    $member->umur = $_POST['inputUmur'];
    array_push($_SESSION['memberlist'], $member);
}

function UpdateMember($MemberID){
    $member = $_SESSION['memberlist'][$MemberID];
    $member->nama = $_POST['inputNama'];
    $member->kantor = $_POST['inputKantor'];
    $member->umur = $_POST['inputUmur'];
}

function GetAllMembers(){ 
    return $_SESSION['memberlist'];
}

function DeleteMember($index){
    unset($_SESSION['memberlist'][$index]);
}

function GetAllMembersWithID($MemberID){
    return $_SESSION['memberlist'][$MemberID];
}

function SetMember(){
    $targetNama = $_POST['setNama'];
    $kantorBaru = $_POST['setKantor'];

    if (isset($_SESSION['memberlist'])) {
        foreach ($_SESSION['memberlist'] as $index => $member) {
            if ($member->nama == $targetNama) {
                $_SESSION['memberlist'][$index]->kantor = $kantorBaru;
                break;
            }
        }
    }
}

if (isset ($_POST['btnAdd'])) {
    CreateMember();
    header("Location: view_karyawan.php");
}

if (isset ($_GET['DeleteID'])) {
    DeleteMember($_GET['DeleteID']);
    header("Location: view_karyawan.php");
}

if (isset ($_POST['btnUpdate'])) {
    UpdateMember($_POST['UpdateID']);
    header("Location: view_karyawan.php");
}

if (isset($_POST['btnSet'])) {
    SetMember();
    header("Location: view_setkaryawan.php");
    exit();
}
?>

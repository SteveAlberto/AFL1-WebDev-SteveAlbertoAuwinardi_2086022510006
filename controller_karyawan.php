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
    $member = new member();
    $member->nama = $_POST['setNama'];
    $member->kantor = $_POST['setKantor'];
    
    $umur_karyawan = 0;
    if (isset($_SESSION['memberlist'])) {
        foreach ($_SESSION['memberlist'] as $data_lama) {
            if ($data_lama->nama == $_POST['setNama']) {
                $umur_karyawan = $data_lama->umur;
                break;
            }
        }
    }
    $member->umur = $umur_karyawan;
    array_push($_SESSION['memberlist'], $member);
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
    header("Location: view_karyawan.php");
    exit();
}
?>


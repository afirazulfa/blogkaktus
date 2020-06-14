<?php
include_once "app/controller.php";
include_once "app/post.php";

$post = new post();

if ($_POST['tsimpan']) {
	$post->input();
	header("location:index.php?page=post_tampil");
}

if ($_POST['tedit']) {
	$post->update();
	header("location:index.php?page=post_tampil");
}

if ($_GET['delete-id']) {
	$post->delete($_GET['delete-id']);
	header('location:index.php?page=post_tampil');
}

?>
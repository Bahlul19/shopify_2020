<?php
// Set variables for our request
$shop = $_GET['shop'];
$api_key = "4183ac81cfea7c29dab7e443b5cc6827";
$scopes = "read_content";
$redirect_uri = "https://bahlulshopify.managedcoder.com/apps/example_app/generate_token.php";
// Build install/approval URL to redirect to
$install_url = "https://" . $shop . ".myshopify.com/admin/oauth/authorize?client_id=" . $api_key . "&scope=" . $scopes . "&redirect_uri=" . urlencode($redirect_uri);
// Redirect
header("Location: " . $install_url);
die();

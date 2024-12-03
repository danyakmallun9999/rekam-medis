<?php

function isLoggedIn()
{
    return isset($_SESSION['user_id']);
}

function requireLogin()
{
    if (!isLoggedIn()) {
        header('Location: ' . BASEURL . '/login');
        exit;
    }
}

function requireRole($role)
{
    if (!isset($_SESSION['user_role']) || $_SESSION['user_role'] !== $role) {
        header('Location: ' . BASEURL . '/unauthorized');
        exit;
    }
}

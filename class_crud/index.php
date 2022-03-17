<?php

// Require the correct variable type to be used (no auto-converting)
declare (strict_types = 1);

// Show errors so we get helpful information
ini_set('display_errors', '1');
ini_set('display_startup_errors', '1');
error_reporting(E_ALL);

// Load your classes
require_once 'config.php';
require_once 'DatabaseManager.php';
require_once 'CardRepository.php';

$databaseManager = new DatabaseManager($config['host'], $config['user'], $config['password'], $config['dbname']);

$databaseManager->connect();

// This example is about a Pokémon card collection
// Update the naming if you'd like to work with another collection
$cardRepository = new CardRepository($databaseManager);
$cards = $cardRepository->get();

// Get the current action to execute
// If nothing is specified, it will remain empty (home should be loaded)
// site.be?action=overview
$action = $_GET['action'] ?? null;

// Load the relevant action
// This system will help you to only execute the code you want, instead of all of it (or complex if statements)

switch ($action) {
    case 'create':
       create($cardRepository);
        break;
    case 'delete':
        deleteById($cardRepository);
        break;
    case 'edit':
        editForm($cardRepository);
        break;
    case 'update':
        update($cardRepository);
        break;
    default:
        overview($cards);
        break;
}

function overview($cards)
{
    // $cards = ?
    // Load your view
    // Tip: you can load this dynamically and based on a variable, if you want to load another view
    require 'overview.php';
}

function create(CardRepository $cardRepository)
{
    if(isset($_GET['time']) && isset($_GET['todolist']) && isset($_GET['note']) ) {
        $cardRepository->create($_GET['time'], $_GET['todolist'],$_GET['note']);
        header("Location: index.php");
         exit();
    }
}
function deleteById (CardRepository $cardRepository){
    if(isset($_GET['id']) && isset($_GET['action'])) {
        $cardRepository->delete((int)($_GET['id']));
        header("Location: index.php");
        exit();
    }
}
function editForm(CardRepository $cardRepository){

    if(isset($_GET['id'])) {
        $list = $cardRepository->find((int)$_GET['id']);
        $id = $list['id'];
        $time = $list['time'];
        $todo_list = $list['todolist'];
        $note = $list['note'];
        header("Location: createForm.php?time=$time&todolist=$todo_list&note=$note&action=update&id=$id");
        exit();
    }
}


function update(CardRepository $cardRepository)
{
    if(isset($_GET['time']) && isset($_GET['todolist']) && isset($_GET['note']) ) {
        $cardRepository->update($_GET['id'], $_GET['time'], $_GET['todolist'],$_GET['note']);
        header("Location: index.php");
        exit();
    }
}
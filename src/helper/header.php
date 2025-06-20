<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>App Yayasan</title>

    <style>
        * {
            margin: 0;
            font-family: sans-serif;
        }

        .container {
            max-width: 100%;
            margin: auto;
        }

        .hidden {
            display: none;
        }

        .modal {
            display: flex;
            top: 0;
            left: 0;
            height: 100%;
            width: 100%;
            position: fixed;
            background-color: rgba(0, 0, 0, .6);
            justify-content: center;
            align-items: center;
            z-index: 100;
        }
        
        .modal-content {
            background-color: #fff;
            padding: 1rem;
            border-radius: .5rem;
            min-width: 600px;
        }

        body {
            background-color: rgb(244, 246, 248);
            color: #333;
            padding: 2rem;
        }

        button {
            background-color: rgb(52, 152, 219);
            color: white;
            border: none;
            padding: 1rem;
            border-radius: .5rem;
        }

        button:hover {
            background-color: rgba(52, 152, 219, 0.5);
        }

        h1 {
            font-size: 1.8rem;
            color: #2c3e50;
        }

        table {
            margin-top: 1rem;
            width: 100%;
            border-collapse: collapse;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.05);
            border-radius: 8px;
            overflow: hidden;
        }

        thead {
            background-color: rgb(52, 152, 219);
            color: white;
        }

        th,
        td {
            padding: 1rem;
            text-align: left;
            border-bottom: 1px solid #ddd;
        }

        tbody tr:hover {
            background-color: #f1f1f1;
        }
    </style>
</head>

<body>
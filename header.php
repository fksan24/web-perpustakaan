<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="description" content="Aplikasi Perpustakaan">
    <meta name="keywords" content="CSS, Javascript, PHP">
    <meta name="authors" content="FK san">
    <meta name="viewport" content="width=device-widht, initial-scale=1.0">
    <title>Perpustakaan FK</title>
    <link rel="stylesheet" type="text/css" href="frontend/css/normalize.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/w3.css">
    <link rel="stylesheet" type="text/css" href="frontend/css/w3color.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<style>
    @import url("https://fonts.googleapis.com/css?family=Montserrat:400,500,600,700|Poppins:400,500&display=swap");

    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        user-select: none;
    }

    .bg-img {
        background: url("frontend/img/image-login.jpg");
        height: 100vh;
        background-size: cover;
        background-position: center;
    }

    .bg-img:after {
        position: absolute;
        content: "";
        top: 0;
        left: 0;
        height: 100%;
        width: 100%;
        background: rgba(255, 255, 255, 0.174);
    }

    .content {
        border-radius: 10px;
        position: absolute;
        top: 50%;
        left: 50%;
        z-index: 999;
        text-align: center;
        padding: 60px 32px;
        width: 370px;
        transform: translate(-50%, -50%);
        background: rgba(255, 255, 255, 0.133);

        border: 1px solid #fff;
        backdrop-filter: blur(3px);
        box-shadow: 0 0 6px rgba(29, 29, 29, 0.203);
    }

    .content header {
        color: white;
        font-size: 33px;
        font-weight: 600;
        margin: 0 0 35px 0;
        font-family: "Montserrat", sans-serif;
    }

    .field {
        position: relative;
        height: 45px;
        width: 100%;
        display: flex;
        background: rgba(255, 255, 255, 0.94);
    }

    .field span {
        color: #222;
        width: 40px;
        line-height: 45px;
    }

    .field input {
        height: 100%;
        width: 100%;
        background: transparent;
        border: none;
        outline: none;
        color: #222;
        font-size: 16px;
        font-family: "Poppins", sans-serif;
    }

    .space {
        margin-top: 16px;
    }

    .show {
        position: absolute;
        right: 13px;
        font-size: 13px;
        font-weight: 700;
        color: #222;
        display: none;
        cursor: pointer;
        font-family: "Montserrat", sans-serif;
    }

    .pass-key:valid~.show {
        display: block;
    }

    .pass {
        text-align: left;
        margin: 10px 0;
    }

    .pass label {
        color: white;
        text-decoration: none;
        font-family: "Poppins", sans-serif;
    }

    .pass:hover a {
        text-decoration: underline;
    }

    .field input[type="submit"] {
        background: #FFE7BF;
        border: 1px solid #FF869E;
        color: #A10035;
        font-size: 18px;
        letter-spacing: 1px;
        font-weight: 600;
        cursor: pointer;
        font-family: "Montserrat", sans-serif;
        transition: .3s ease;
    }

    .field input[type="submit"]:hover {
        background: #A10035;
        color: #FFE7BF;
    }

    .login {
        color: white;
        margin: 20px 0;
        font-family: "Poppins", sans-serif;
    }

    i span {
        margin-left: 8px;
        font-weight: 500;
        letter-spacing: 1px;
        font-size: 16px;
        font-family: "Poppins", sans-serif;
    }
</style>
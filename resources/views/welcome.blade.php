<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Awal</title>
    <link rel="stylesheet" href="public/css/style.css">
    <style>
        body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
    background: linear-gradient(135deg, #00FF00, #a777e3);
    color: #fff;
}

.container, .form-container, .home-container {
    text-align: center;
    background: rgba(255, 255, 255, 0.1);
    padding: 20px;
    border-radius: 10px;
    box-shadow: 0 4px 15px rgba(0, 0, 0, 0.2);
}

h1, h2 {
    margin-bottom: 20px;
    animation: fadeIn 1s ease-in-out;
}

.buttons, .form-container form, .home-container {
    animation: slideUp 1.5s ease-in-out;
}

.btn {
    display: inline-block;
    margin: 10px;
    padding: 10px 20px;
    background-color: #007BFF;
    border-radius: 5px;
    color: white;
    text-decoration: none;
    transition: transform 0.3s ease-in-out;
}

.btn:hover {
    transform: scale(1.1);
}

.back-btn {
    background-color: #6c757d;
}

.logout-btn {
    background-color: #dc3545;
}

@keyframes fadeIn {
    from { opacity: 0; }
    to { opacity: 1; }
}

@keyframes slideUp {
    from { transform: translateY(50px); opacity: 0; }
    to { transform: translateY(0); opacity: 1; }
}
span{
    color:white;
    font font-family: Arial, "Helvetica Neue", Helvetica, sans-serif;
    
}
    </style>
</head>
<body>
    <div class="container">
        <h1 class="fade-in">Hallo! Selamat Datang</h1>
        <h5>Silahkan Login Atau Daftar Terlebih Dahulu</h5>
        <div class="buttons">
            <a href="/register" class="btn">Daftar</a>
            <a href="/login" class="btn">Login</a>
            
            <h3><span>C</span>reated By</h3>
            <p><span>Riski fauji</p>
            <p></span>2257401080</p>
            <p></span>MI22B</p>
        </div>
        
    </div>
</body>
</html>
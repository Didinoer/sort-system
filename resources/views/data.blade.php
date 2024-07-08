<!-- resources/views/data.blade.php -->

<html>
<head>
    <title>Data</title>
</head>
<body>
    <h1>Data</h1>
    <ul id="data-list">
        <!-- Data akan ditambahkan di sini menggunakan JavaScript -->
    </ul>

    <script>
        // Mengambil data dari API endpoint
        fetch('/api/getdata')
            .then(response => response.json())
            .then(data => {
                // Memproses data dan menambahkannya ke daftar
                let dataList = document.getElementById('data-list');
                data.forEach(item => {
                    let li = document.createElement('li');
                    li.textContent = item.name; // Menggantinya sesuai dengan atribut data Anda
                    dataList.appendChild(li);
                });
            })
            .catch(error => console.error('Error:', error));
    </script>
</body>
</html>

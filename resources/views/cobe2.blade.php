<!DOCTYPE html>
<html>
<head>
    <title>Users Page</title>
    <style>
        table {
            border-collapse: collapse;
            width: 80%;
            margin: 20px auto;
        }
        th, td {
            border: 1px solid #666;
            padding: 8px 12px;
            text-align: center;
        }
        th {
            background-color: #eee;
        }
    </style>
</head>
<body>
    <h1 style="text-align:center;">Daftar Users dari API 2</h1>

    <table id="users-table">
        <thead>
            <tr>
                <th>ID Users</th>
                <th>Email</th>
                <th>No. Telp</th>
                <th>Password (hash)</th>
                <th>Peran</th>
            </tr>
        </thead>
        <tbody>
            <!-- Data akan dimasukkan di sini oleh JS -->
        </tbody>
    </table>

    <script>
        async function fetchUsers() {
            try {
                // const response = await fetch('/users?peran=peserta');
                // const response = await fetch('/users?peran=dosen');
                const response = await fetch('/users?id_users=USR001');
                const users = await response.json();

                const tbody = document.querySelector('#users-table tbody');
                tbody.innerHTML = ''; // Clear dulu

                users.forEach(user => {
                    const tr = document.createElement('tr');
                    tr.innerHTML = `
                        <td>${user.id_users}</td>
                        <td>${user.email}</td>
                        <td>${user.no_telp}</td>
                        <td>${user.password}</td>
                        <td>${user.peran}</td>
                    `;
                    tbody.appendChild(tr);
                });
            } catch (error) {
                console.error('Error fetching users:', error);
            }
        }

        // Panggil fungsi saat halaman selesai load
        window.onload = fetchUsers;
    </script>
</body>
</html>

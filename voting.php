<?php
include 'koneksi.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $id_calon = $_POST['id_calon'];
    $stmt = $koneksi->prepare("INSERT INTO voting (id_calon) VALUES (?)");
    $stmt->bind_param("i", $id_calon);
    if ($stmt->execute()) {
        echo "<script>alert('Voting berhasil!'); window.location='berhasil.php';</script>";
    } else {
        echo "<script>alert('Voting gagal!');</script>";
    }
    $stmt->close();
}
?>

<!DOCTYPE html>
<html>
<head>
     <title>Voting Calon Ketua OSIS</title>
    <style>
             body {
                font-family: 'Segoe UI', sans-serif;
                text-align: center;
                padding: 30px;
                background: linear-gradient(135deg, #cce0ff, #e6f0ff); /* gradasi biru laut */
                min-height: 100vh;
                margin: 0;
            }

            .card-container {
                display: flex;
                justify-content: center;
                gap: 30px;
                flex-wrap: wrap;
                margin-top: 30px;
            }

            .card {
                border: 2px solid #ccc;
                padding: 25px;
                width: 280px;
                border-radius: 20px;
                cursor: pointer;
                transition: transform 0.3s, border-color 0.3s, background-color 0.3s;
                background: #fff;
                box-shadow: 0 4px 12px rgba(0,0,0,0.1);
            }

            .card img {
                width: 100%;
                height: 300px;
                object-fit: cover;
                border-radius: 10px;
            }

            .card h3 {
                margin: 15px 0 10px;
                text-transform: capitalize;
            }

            .card p {
                font-size: 15px;
                color: #333;
                margin: 10px 0 0;
                line-height: 1.4em;
                max-height: none; /* biar panjang visi bisa muncul semua */
                overflow: visible; /* hilangkan scroll */
            }

            .card:hover {
                transform: translateY(-8px);
                border-color: #007bff;
            }

            .card.selected {
                border: 3px solid #007bff;
                background-color: #e6f2ff;
            }

            #voteButton {
                margin-top: 40px;
                padding: 12px 30px;
                font-size: 16px;
                border: none;
                background-color: #007bff;
                color: white;
                border-radius: 12px;
                display: none;
                cursor: pointer;
                box-shadow: 0 4px 8px rgba(0,0,0,0.15);
            }

            #voteButton:hover {
                background-color: #0056b3;
            }

    </style>
</head>
<body>

    <h2>Silakan Pilih Calon Ketua OSIS</h2>

    <form method="POST" action="prosesvote.php" id="voteForm">
        <input type="hidden" name="id_calon" id="selectedCalon">
        <div class="card-container">
            <?php
            $result = $koneksi->query("SELECT * FROM calon_ketua");
            while ($row = $result->fetch_assoc()) {
                echo "<div class='card' data-id='" . $row['id_calon'] . "'>";
                echo "<img src='" . htmlspecialchars($row['foto']) . "' alt='Foto Calon'>";
                echo "<h3>" . htmlspecialchars($row['nama']) . "</h3>";
                echo "<p>" . htmlspecialchars($row['visi']) . "</p>";
                echo "</div>";
            }
            ?>
        </div>
        <button type="submit" id="voteButton">Pilih Calon Ini</button>
    </form>

    <script>
        const cards = document.querySelectorAll('.card');
        const hiddenInput = document.getElementById('selectedCalon');
        const voteBtn = document.getElementById('voteButton');
        

        cards.forEach(card => {
            card.addEventListener('click', () => {
                cards.forEach(c => c.classList.remove('selected'));
                card.classList.add('selected');
                hiddenInput.value = card.getAttribute('data-id');
                voteBtn.style.display = 'inline-block';
            });
        });
    </script>


</body>
</html>

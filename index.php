<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Ucapan Ulang Tahun Ciaa 🎉</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>

  <!-- Halaman Awal -->
  <div class="start-screen" id="start-screen">
  <h1>Hai Ciaa 🎈✨</h1>
  <p>Ada sesuatu nii buat kamu🥰<br>Klik tombol di bawah ini ya!</p>
  <button onclick="showCard()">🎁 Buka Ucapannya</button>
</div>


  <!-- Halaman Ucapan -->
  <div class="card" id="card-screen" style="display: none;">
    <h1>🎉 Happy Birthday, Ciaa! 🎂</h1>
    <p>
        Selamat ulang tahun, Ciaaa! 🎉<br>
        Semoga hari ini menjadi awal dari tahun yang penuh kebahagiaan dan kesuksesan.<br>
        Semoga semua harapanmu terwujud dan impianmu tercapai.<br>
        Tetap sehat, selalu bahagia, dan dikelilingi oleh orang-orang yang menyayangimu. ✨💖
    </p>

    <img src="images/kucing.png" alt="Ulang Tahun">
    <img src="images/cakee.png" alt="Bintang-bintang">
    <img src="images/kucing.png" alt="Bunga">
  </div>

  <!-- Confetti & Script -->
  <script src="https://cdn.jsdelivr.net/npm/canvas-confetti@1.5.1/dist/confetti.browser.min.js"></script>
  <script>
    function showCard() {
      document.getElementById("start-screen").style.display = "none";
      document.getElementById("card-screen").style.display = "block";

      // Mainkan musik
      const music = document.getElementById("bgm");
      music.play();

      // Confetti langsung
      confetti({
        particleCount: 200,
        spread: 70,
        origin: { y: 0.6 }
      });

      // Ulang tiap 5 detik
      setInterval(() => {
        confetti({
          particleCount: 100,
          spread: 60,
          origin: { y: 0.7 }
        });
      }, 5000);
    }
  </script>

</body>
</html>

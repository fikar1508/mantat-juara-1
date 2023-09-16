<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap"
        rel="stylesheet">
        <style>
          * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            
          }
          
          body {
            font-family: "Poppins", sans-serif;
          }
      
          .step-wizard {
            background-color: #ffffff;
            background-image: linear-gradient(19deg, #ffffff 0%, #fdf9ff 100%);
            height: 100vh;
            width: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
          }
          .step-wizard-list{
            background: #fff;
            box-shadow: 0 15px 25px rgba(0,0,0,0.1);
            color: #333;
            list-style-type: none;
            border-radius: 10px;
            display: flex;
            padding: 20px 10px;
            position: relative;
            z-index: 10;
          }
      
          .step-wizard-item{
            padding: 0 20px;
            flex-basis: 0;
            -webkit-box-flex: 1;
            -ms-flex-positive:1;
            flex-grow: 1;
            max-width: 100%;
            display: flex;
            flex-direction: column;
            text-align: center;
            min-width: 170px;
            position: relative;
          }
          .step-wizard-item + .step-wizard-item:after{
            content: "";
            position: absolute;
            left: 0;
            top: 19px;
            background: #21d4fd;
            width: 100%;
            height: 2px;
            transform: translateX(-50%);
            z-index: -10;
          }
          .progress-count{
            height: 40px;
            width:40px;
            display: flex;
            align-items: center;
            justify-content: center;
            border-radius: 50%;
            font-weight: 600;
            margin: 0 auto;
            position: relative;
            z-index:10;
            color: transparent;
          }
          .progress-count:after{
            content: "";
            height: 40px;
            width: 40px;
            background: #21d4fd;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -50%);
            border-radius: 50%;
            z-index: -10;
          }
          .progress-count:before{
            content: "";
            height: 10px;
            width: 20px;
            border-left: 3px solid #fff;
            border-bottom: 3px solid #fff;
            position: absolute;
            left: 50%;
            top: 50%;
            transform: translate(-50%, -60%) rotate(-45deg);
            transform-origin: center center;
          }
          .progress-label{
            font-size: 14px;
            font-weight: 600;
            margin-top: 10px;
          }
          .current-item .progress-count:before,
          .current-item ~ .step-wizard-item .progress-count:before{
            display: none;
          }
          .current-item ~ .step-wizard-item .progress-count:after{
            height:10px;
            width:10px;
          }
          .current-item ~ .step-wizard-item .progress-label{
            opacity: 0.5;
          }
          .current-item .progress-count:after{
            background: #fff;
            border: 2px solid #21d4fd;
          }
          .current-item .progress-count{
            color: #21d4fd;
          }
      
          .step-wizard-button {
            background-color: #21d4fd;
            color: #fff;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            align-content: center;
            text-align: center;
            align-items: center;
            margin-top: 20px;
            width: 100%; /* Menyesuaikan lebar */
          }
      
          .step-wizard-button:hover {
            background-color: #1aa7e6;
          }
      
          /* Menambahkan gaya CSS untuk mengatur tata letak */
          .step-wizard {
            display: flex;
            flex-direction: column;
            align-items: center;
          }
      
          .step-wizard-list {
            margin-top: 20px;
          }

  /* ... Kode CSS yang lain ... */

  #nextButton {
    background-color: #2fbb70; /* Ganti dengan warna yang Anda inginkan */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    align-content: center;
    text-align: center;
    align-items: center;
    margin-top: 20px;
    width: 100%;
  }
  #nextButton2 {
    background-color: #2fbb70; /* Ganti dengan warna yang Anda inginkan */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    align-content: center;
    text-align: center;
    align-items: center;
    margin-top: 20px;
    width: 100%;
  }
  #nextButton3 {
    background-color: #2fbb70; /* Ganti dengan warna yang Anda inginkan */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    align-content: center;
    text-align: center;
    align-items: center;
    margin-top: 20px;
    width: 100%;
  }
  #nextButton4 {
    background-color: #2fbb70; /* Ganti dengan warna yang Anda inginkan */
    color: #fff;
    border: none;
    padding: 10px 20px;
    border-radius: 5px;
    cursor: pointer;
    align-content: center;
    text-align: center;
    align-items: center;
    margin-top: 20px;
    width: 100%;
  }

  #nextButton:hover {
    background-color: #2fbb70; /* Ganti dengan warna hover yang Anda inginkan */
  }
  #nextButton:hover {
    background-color: #2fbb70; /* Warna latar belakang tombol KIRIM saat dihover */
  }
  #nextButton2:hover {
    background-color: #2fbb70; /* Ganti dengan warna hover yang Anda inginkan */
  }
  #nextButton2:hover {
    background-color: #2fbb70; /* Warna latar belakang tombol KIRIM saat dihover */
  }
  #nextButton3:hover {
    background-color: #2fbb70; /* Ganti dengan warna hover yang Anda inginkan */
  }
  #nextButton3:hover {
    background-color: #2fbb70; /* Warna latar belakang tombol KIRIM saat dihover */
  }
  #nextButton4:hover {
    background-color: #2fbb70; /* Ganti dengan warna hover yang Anda inginkan */
  }
  #nextButton4:hover {
    background-color: #2fbb70; /* Warna latar belakang tombol KIRIM saat dihover */
  }

 

            /* CSS untuk card container */
            .card-container {
            margin-left: 10px; /* Jarak dari tepi kiri layar */
        }

        /* CSS untuk card */
        .card {
            width: 300px; /* Sesuaikan lebar card sesuai kebutuhan Anda */
            padding: 20px;
            border: 1px solid #ccc;
            box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2);
            text-align: left; /* Teks di dalam card diatur menjadi kiri */
        }
        </style>
</head>
<body>
    <section class="step-wizard">
        <ul class="step-wizard-list">
            <li class="step-wizard-item" id="step1">
                <span class="progress-count">1</span>
                <span class="progress-label">Day 1</span>
            </li>
            <li class="step-wizard-item current-item" id="step2">
                <span class="progress-count">2</span>
                <span class="progress-label">Day 2</span>
            </li>
            <li class="step-wizard-item" id="step3">
                <span class="progress-count">3</span>
                <span class="progress-label">Day 3</span>
            </li>
            <li class="step-wizard-item" id="step4">
                <span class="progress-count">4</span>
                <span class="progress-label">Day 4</span>
            </li>
            <li class="step-wizard-item" id="step5">
                <span class="progress-count">5</span>
                <span class="progress-label">Day 5</span>
            </li>
            <li class="step-wizard-item" id="step6">
                <span class="progress-count">6</span>
                <span class="progress-label">Day 6</span>
            </li>
            <li class="step-wizard-item" id="step7">
                <span class="progress-count">7</span>
                <span class="progress-label">Day 7</span>
            </li>
        </ul>
        <br>
        <form id="myForm">
    <button type="button" id="nextButton" name="button" value="2-5 Gelas">2-5 Gelas</button>
    <button type="button" id="nextButton2" name="button" value="5-8 Gelas">5-8 Gelas</button>
    <button type="button" id="nextButton3" name="button" value="8-10 Gelas">8-10 Gelas</button>
    <button type="button" id="nextButton4" name="button" value="10-12 Gelas">10-12 Gelas</button>
        </form>

      
      
       
    </section>
    <script>
    let currentStep = 0; // Pindahkan deklarasi currentStep ke luar fungsi startAutoAdvanceTimer
    let timer; // Timer untuk otomatis berpindah

    // Fungsi untuk memulai timer otomatis
    function startAutoAdvanceTimer() {
        clearTimeout(timer); // Hentikan timer jika sudah ada

        timer = setTimeout(() => {
            moveToNextStep();
            saveDataToDatabase(); // Simpan data ke database
        }, 10000); // Timer akan berjalan selama 10 detik (10000 milidetik)
    }

    // Mendapatkan elemen-elemen yang dibutuhkan
    const steps = document.querySelectorAll(".step-wizard-item");
    const nextButton = document.getElementById("nextButton");

    // Fungsi untuk menampilkan langkah saat ini
    function showCurrentStep() {
        steps.forEach((step, index) => {
            if (index === currentStep) {
                step.classList.add("current-item");
            } else {
                step.classList.remove("current-item");
            }
        });
    }

    // Fungsi untuk berpindah ke langkah berikutnya
    function moveToNextStep() {
        if (currentStep < steps.length - 1) {
            // Pindah ke langkah berikutnya
            currentStep++;
        } else {
            // Jika sudah mencapai langkah terakhir, kembali ke langkah pertama
            currentStep = 0;
        }

        showCurrentStep();

        // Gulir ke langkah berikutnya secara otomatis
        const nextStep = document.getElementById(`step${currentStep + 1}`);
        if (nextStep) {
            nextStep.scrollIntoView({ behavior: "smooth" });
        }
    }

 // Fungsi untuk menyimpan data ke database
function saveDataToDatabase(buttonValue) {
    // Lakukan AJAX POST request untuk menyimpan data ke database
    const xhr = new XMLHttpRequest();
    xhr.open("POST", "masuk.php", true);
    xhr.setRequestHeader("Content-Type", "application/x-www-form-urlencoded");
    xhr.onreadystatechange = function () {
        if (xhr.readyState === XMLHttpRequest.DONE) {
            if (xhr.status === 200) {
                const response = JSON.parse(xhr.value);
                if (!response.success) {
                    console.error("Gagal menyimpan data: " + response.message);
                }
            } else {
                console.error("Gagal melakukan permintaan ke server");
            }
        }
    };
    xhr.send("button=" + encodeURIComponent(buttonValue));
}


// Tambahkan event listener ke tombol Next
nextButton.addEventListener("click", () => {
    saveDataToDatabase(nextButton.value); // Simpan data ke database dengan nilai tombol yang sesuai
    moveToNextStep(); // Pindah ke langkah berikutnya setelah menyimpan data
    startAutoAdvanceTimer(); // Restart timer setelah tombol Next ditekan
});

// Tambahkan event listener ke tombol Next
nextButton2.addEventListener("click", () => {
    saveDataToDatabase(nextButton2.value); // Simpan data ke database dengan nilai tombol yang sesuai
    moveToNextStep(); // Pindah ke langkah berikutnya setelah menyimpan data
    startAutoAdvanceTimer(); // Restart timer setelah tombol Next ditekan
});

// Tambahkan event listener ke tombol Next
nextButton3.addEventListener("click", () => {
    saveDataToDatabase(nextButton3.value); // Simpan data ke database dengan nilai tombol yang sesuai
    moveToNextStep(); // Pindah ke langkah berikutnya setelah menyimpan data
    startAutoAdvanceTimer(); // Restart timer setelah tombol Next ditekan
});

// Tambahkan event listener ke tombol Next
nextButton4.addEventListener("click", () => {
    saveDataToDatabase(nextButton4.value); // Simpan data ke database dengan nilai tombol yang sesuai
    moveToNextStep(); // Pindah ke langkah berikutnya setelah menyimpan data
    startAutoAdvanceTimer(); // Restart timer setelah tombol Next ditekan
});

    // Panggil fungsi showCurrentStep() untuk menampilkan langkah awal
    showCurrentStep();

    // Panggil fungsi startAutoAdvanceTimer() untuk memulai timer otomatis
    startAutoAdvanceTimer();
</script>

    
</body>
</html>

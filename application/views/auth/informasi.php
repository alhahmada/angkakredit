<div class="container-fluid">
    <!-- Judul Halaman -->
    <div class="container">
        <!-- Row Pertama -->
        <div class="justify-content-between pb-5 pt-4">

            <h1 class="head-content">Beranda Tim Penilai</h1>
            <style>
                .head-content {
                    font-size: 30px;
                    color: #4e73df;
                    font-weight: bold;
                    font-family: Cambria;
                }

                .body-content {
                    font-size: 18px;
                    color: black;
                    font-family: 'Times New Roman';
                }
            </style>
        </div>
    </div>

    <!-- <style>
        /* Style the tab */
        .tab {
            background-color: #f1f1f1;
        }

        /* Style the buttons inside the tab */
        .tab button {
            background-color: inherit;
            float: center;
            border: none;
            outline: none;
            cursor: pointer;
            padding: 14px;
            transition: 0.3s;
            font-size: 14px;
        }

        /* Change background color of buttons on hover */
        .tab button:hover {
            background-color: #ddd;
        }

        /* Create an active/current tablink class */
        .tab button.active {
            background-color: #ccc;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: 1px solid #ccc;
            border-top: none;
        }
    </style> -->

    <div class="container pt-3 pb-3">
        <div class="tab">
            <button class="tablinks h5" style="width: 16%;" onclick="openinfoTab(event, 'umum')">Informasi Umum</button>
            <button class="tablinks h5" style="width: 16%;" onclick="openinfoTab(event, 'pendidikan')">Unsur Pendidikan</button>
            <button class="tablinks h5" style="width: 16%;" onclick="openinfoTab(event, 'pel_pendidikan')">Unsur Pelaksanaan Pendidikan</button>
            <button class="tablinks h5" style="width: 16%;" onclick="openinfoTab(event, 'penelitian')">Unsur Penelitian</button>
            <button class="tablinks h5" style="width: 16%;" onclick="openinfoTab(event, 'pengmas')">Unsur Pengabdian Masyarakat</button>
            <button class="tablinks h5" style="width: 16%;" onclick="openinfoTab(event, 'penunjang')">Unsur Penunjang</button>

        </div>

        <!-- Tab Informasi Umum -->
        <div id="umum" class="tabcontent pt-5">
            <h3>London</h3>
            <p>London is the capital city of England.</p>
        </div>

        <!-- Tab Pendidikan -->
        <div id="pendidikan" class="tabcontent pt-5">
            <h3>Paris</h3>
            <p>Paris is the capital of France.</p>
        </div>

        <!-- Tab Pelaksanaan Pendidikan -->
        <div id="pel_pendidikan" class="tabcontent pt-5">
            <h3>Tokyoffff</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>

        <!-- Tab Penelitian -->
        <div id="penelitian" class="tabcontent pt-5">
            <h3>Tokyo1</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>

        <!-- Tab Pengabdian Masyarakat -->
        <div id="pengmas" class="tabcontent pt-5">
            <h3>Tokyo2</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>

        <!-- Tab Unsur Penunjang -->
        <div id="penunjang" class="tabcontent pt-5">
            <h3>Tokyo3</h3>
            <p>Tokyo is the capital of Japan.</p>
        </div>
    </div>

</div>









<script>
    function openinfoTab(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
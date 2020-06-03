<div class="container" style="height: 95%;">
    <style>
        /* Style the tab */

        /* Style the buttons inside the tab */
        .tab {
            background-color: #494e57;
            color: white;
            float: left;
            border: none;
            border-right: 1px solid black;
            outline: none;
            cursor: pointer;
            padding: 14px 16px;
            transition: 0.3s;
            font-size: 14px;
            width: 20%;
            height: 3.5rem;
            font-size: 16px;
            font-weight: bold;
            text-align: center;
            font-family: Cambria;
        }

        .nolep {
            border-right: none !important;
        }

        /* Change background color of buttons on hover */
        .tab:hover {
            background-color: #3c3e42;
        }

        /* Create an active/current tablink class */
        .tab.active {
            background-color: #282b3b;
        }

        /* Style the tab content */
        .tabcontent {
            display: none;
            padding: 6px 12px;
            border: none;
            height: 100%;
        }
    </style>

    <button class="tab" onclick="openinfoTab(event, 'umum')">Informasi Umum</button>
    <button class="tab" onclick="openinfoTab(event, 'pendidikan')">Unsur Pendidikan</button>
    <button class="tab" onclick="openinfoTab(event, 'penelitian')">Unsur Penelitian</button>
    <button class="tab" onclick="openinfoTab(event, 'pengmas')">Unsur Peng. Msyarakat</button>
    <button class="tab nolep " onclick="openinfoTab(event, 'penunjang')">Unsur Penunjang</button>

    <style>
        .head-content {
            font-size: 25px;
            color: black;
            font-weight: bold;
            font-family: Cambria;
            text-transform: uppercase;
            letter-spacing: 0.05rem;
        }

        .body-content {
            font-size: 18px;
            color: black;
            font-family: 'Times New Roman';
        }
    </style>

    <!-- Tab Informasi Umum -->
    <div id="umum" class="tabcontent pt-5">

        <!-- Judul Halaman -->
        <div class="container">
            <!-- Row Pertama -->
            <div class="justify-content-between pb-5 pt-5">
                <h1 class="head-content">Infoemasi Umum</h1>
            </div>

        </div>
    </div>

    <!-- Tab Pendidikan -->
    <div id="pendidikan" class="tabcontent pt-5">
        <!-- Judul Halaman -->
        <div class="container">
            <!-- Row Pertama -->
            <div class="justify-content-between pb-5 pt-5">
                <h1 class="head-content">Pendidikan dan Pelaksanaan Pendidikan</h1>
            </div>

        </div>
    </div>

    <!-- Tab Penelitian -->
    <div id="penelitian" class="tabcontent pt-5">
        <!-- Judul Halaman -->
        <div class="container">
            <!-- Row Pertama -->
            <div class="justify-content-between pb-5 pt-5">
                <h1 class="head-content">Penelitian</h1>
            </div>

        </div>
    </div>

    <!-- Tab Pengabdian Masyarakat -->
    <div id="pengmas" class="tabcontent pt-5">
        <!-- Judul Halaman -->
        <div class="container">
            <!-- Row Pertama -->
            <div class="justify-content-between pb-5 pt-5">
                <h1 class="head-content">Pengabdian Masyarakat</h1>
            </div>

        </div>
    </div>

    <!-- Tab Unsur Penunjang -->
    <div id="penunjang" class="tabcontent pt-5">
        <!-- Judul Halaman -->
        <div class="container">
            <!-- Row Pertama -->
            <div class="justify-content-between pb-5 pt-5">
                <h1 class="head-content">Penunjang</h1>
            </div>
        </div>
    </div>

</div>

<script>
    function openinfoTab(evt, menu) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tab");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(menu).style.display = "block";
        evt.currentTarget.className += " active";
    }
</script>
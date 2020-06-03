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
        width: 25%;
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

<div class="container" style="height: 95%;">

    <button class="tab " onclick="openinfoTab(event, 'umum')">Umum</button>
    <button class="tab " onclick="openinfoTab(event, 'bantuan')">Bantuan</button>
    <button class="tab " onclick="openinfoTab(event, 'kritik_saran')">Kritik Saran</button>
    <button class="tab nolep " onclick="openinfoTab(event, 'notifikasi')">Notifikasi</button>

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

    <!-- Tab Setelan Umum -->
    <div id="umum" class="tabcontent pt-5">

        <!-- Judul Halaman -->
        <div class="container">
            <!-- Row Pertama -->
            <div class="justify-content-between pb-5 pt-5">
                <h1 class="head-content">PENGATURAN UMUM</h1>
            </div>

        </div>
    </div>

    <!-- Tab Bantuan -->
    <div id="bantuan" class="tabcontent pt-5">
        <!-- Judul Halaman -->
        <div class="container">
            <!-- Row Pertama -->
            <div class="justify-content-between pb-5 pt-5">
                <h1 class="head-content">BANTUAN</h1>
            </div>

        </div>
    </div>

    <!-- Tab Kritik dan Saran -->
    <div id="kritik_saran" class="tabcontent pt-5">
        <!-- Judul Halaman -->
        <div class="container">
            <!-- Row Pertama -->
            <div class="justify-content-between pb-5 pt-5">
                <h1 class="head-content">KRITIK DAN SARAN</h1>
            </div>

        </div>
    </div>

    <!-- Tab Notifikasi -->
    <div id="notifikasi" class="tabcontent pt-5">
        <!-- Judul Halaman -->
        <div class="container">
            <!-- Row Pertama -->
            <div class="justify-content-between pb-5 pt-5">
                <h1 class="head-content">PENGATURAN NOTIFIKASI</h1>
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
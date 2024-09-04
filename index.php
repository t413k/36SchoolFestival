<!DOCTYPE html>

<head>
    <?php include("config.html"); ?>
    <title>キヨミランド</title>
</head>

<body>
    <?php include("header.html"); ?>
    <!-- <h1 class="gamename">トレ</h1>
    <div class="under_title"></div> -->
    <main>
        <span>≫ 何をして<span class="red-u">遊び</span>ますか?!</span>
        <div class="link-cards">
            <div class="link-card">
                <a href="/blackjack/">
                    <i class="fa-solid fa-arrow-right"></i>
                    ブラックジャック
                </a>
            </div>
            <div class="link-card">
                <a href="/daihugo/">
                    <i class="fa-solid fa-arrow-right"></i>
                    大富豪
                </a>
            </div>
            <div class="link-card">
                <a href="/tore/">
                    <i class="fa-solid fa-arrow-right"></i>
                    トレ
                </a>
            </div>
            <div class="link-card">
                <a href="/roulette/">
                    <i class="fa-solid fa-arrow-right"></i>
                    ルーレット
                </a>
            </div>
            
            <div class="link-card">
                <a href="/umamusuko/">
                    <i class="fa-solid fa-arrow-right"></i>
                    ウマムスコ プリティダービー
                </a>
            </div>
        </div>

        <details class="accordion-008">
            <summary>> 注意事項</summary>
                <div class="warn-box">
                    <i class="fa-solid fa-circle-info"></i>
                    <span>このページは文化祭終了後，速やかに削除されます．</span>
                </div>
                <span>PDF版は<a href="/kiyomiland.pdf">こちら</a>から閲覧できます．</span><br>
                <span>ソースコード閲覧をご希望の場合は<a href="https://github.com/t413k/36SchoolFestival/">こちら</a>から閲覧できます．</span><br>
                <span>* 前日に即席で作ったため，全体的に完成度は低めです...予めご了承ください．</span>
        </details>
    </main>
    <?php include("footer.html"); ?>

    <style>
    </style>
</body>
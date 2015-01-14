<?php
echo '
    <header class="toolbar wpcom-masterbar wpcom-forums wpcom-header" role="banner">
        <div class="wpcom-navigation site-navigation wpcom-nav" role="navigation">
            <h1 class="wpcom-title">
                <a href="'.$relPath.'index.php">
                    <span>NCKU2HAND</span>
                </a>
            </h1>
            <nav id="main-nav" class="wpcom-pages" role="navigation">
                <a class="menu-toggle">
                    Menu
                </a>
                <ul class="pages-menu">';

if($isAdmin) {
    printButton($relPath."admin/admin.php", "後台", "Admin", $pageType=='admin');
}

if($isUser) {
    printButton($relPath."box.php", "圖片檢視", "BoxView", $pageType=='box');
    printButton($relPath."sort.php", "排序檢視", "SortView", $pageType=='sort');
    printButton($relPath."list.php", "清單檢視", "ListView", $pageType=='list');
    printButton($relPath."index.php?logout=true", "登出", "Logout Our App", false);
    printButton("https://www.facebook.com/", "Facebook", "$firstName's Facebook", false);
} else {
    printButton("https://www.facebook.com/", "Facebook", "Return to Facebook", false);
}
echo '
                </ul>
            </nav>
        </div>
    </header>';

function printButton($src, $title, $text, $current) {
    if($current) {
        $addClass = ' current';
    } else {
        $addClass = '';
    }
    echo '<li class="menu-btn'.$addClass.'"><a href="'.$src.'" title="'.$title.'">'.$text.'</a></li>';
}
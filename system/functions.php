<?php
function socialLinks($social)
{
    foreach ($social as $link => $key) {
        if (!empty($key)) {
            switch ($link) {
                case 'facebook':
                    echo '<li class="nav-item"><a class="nav-link" href="https://facebook.com/' . $key . '"><i class="fa fa-facebook"></i></a></li>';
                    break;
                case 'twitter':
                    echo '<li class="nav-item"><a class="nav-link" href="https://twitter.com/' . $key . '"><i class="fa fa-twitter"></i></a></li>';
                    break;
                case 'youtube':
                    echo '<li class="nav-item"><a class="nav-link" href="https://youtube.com/' . $key . '"><i class="fa fa-youtube-play"></i></a></li>';
                    break;
                case 'google':
                    echo '<li class="nav-item"><a class="nav-link" href="https://google.com/' . $key . '"><i class="fa fa-google-plus"></i></a></li>';
                    break;
            }
        }
    }
}

function redirect($url)
{
    header('Location: ' . $url);
}

function buildMenu($menuArray)
{
    foreach ($menuArray as $node) {
        $getMenu = isset($_GET['menu']) ? $_GET['menu'] : '';
        $checkParent = (isset($node['children']) && !empty($node['children'])) ? checkInChildArray($getMenu, $node['children']) : '';
        $parentSelected = ($checkParent) ? $selected = 'style="color: red;"' : null;
        echo "<li class='nav-item' " . $parentSelected . "><a class='nav-link' href='" . $node['link'] . "'>" . $node['title'] . "</a></li>";
    }
}

function checkInChildArray($needle, $haystack, $strict = false)
{
    foreach ($haystack as $item) {
        if (($strict ? $item['link'] === $needle : $item == $needle) || (is_array($item) && checkInChildArray($needle, $item, $strict))) {
            return true;
        }
    }
    return false;
}

function checkUrl($url)
{
    if (!$fp = curl_init($url)) return false;
    return true;
}

function listLanguages()
{
    foreach (glob(__DIR__ . "/../language/*.php") as $filename) {
        if (basename($filename) != "index.php") {
            $language = str_replace(".php", null, basename($filename));
            echo '<a class="dropdown-item language" href="?lang=' . $language . '">' . $language . '</a>';
        }
    }
}

function languageExists($language)
{
    if (file_exists(__DIR__ . "/../language/" . $language . ".php")) {
        return true;
    }
}
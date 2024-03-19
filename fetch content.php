<?php
// Array of URLs to fetch content from
$urls = [
    "https://intl.fusionsolar.huawei.com/pvmswebsite/nologin/assets/build/cloud.html#/kiosk?kk=Dsis12ifMjHeA9LHzQroL3qv5xlNzmji",
    "https://intl.fusionsolar.huawei.com/pvmswebsite/nologin/assets/build/cloud.html#/kiosk?kk=Hs4ayed382B7lfMs7Aawn6s8m7B9Iw3t",
    "https://intl.fusionsolar.huawei.com/pvmswebsite/nologin/assets/build/cloud.html#/kiosk?kk=JEQ4wb6rNxofzb7uBQOhfj5gCsuoaL6M",
    "https://intl.fusionsolar.huawei.com/pvmswebsite/nologin/assets/build/cloud.html#/kiosk?kk=JgamKw8LimCPpyhfsEe7eFzKavEnQxo7",
    "https://intl.fusionsolar.huawei.com/pvmswebsite/nologin/assets/build/cloud.html#/kiosk?kk=r4Evb1INiy8KKQIrIDDgd6lJb5uMhM39"
];

// Function to fetch content from a URL
function fetchContent($url) {
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
    $response = curl_exec($ch);
    curl_close($ch);
    return $response;
}

// Loop through the URLs and fetch content
foreach ($urls as $url) {
    // Fetch content from the URL
    $content = fetchContent($url);
    // Output the content
    echo "<div class='window'><iframe srcdoc='" . htmlentities($content) . "'></iframe></div>";
}
?>


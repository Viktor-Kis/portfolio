<?php
    $language = isset($_GET['lang']) && ($_GET['lang'] == 'en') ? 'en' : 'de';

    $blockFile = 'blocks.json';
    $blocks = json_decode(file_get_contents($blockFile), true);

    $combinedData = [];

    foreach ($blocks as $blockContent) {
        if ($language == 'en' && isset($blockContent['en_text'])) {
            $blockContent['text'] = $blockContent['en_text'];
        }

        if ($language == 'de' && isset($blockContent['de_text'])) {
            $blockContent['text'] = $blockContent['de_text'];
        }

        if ($blockContent['type'] == 'image') {
            $imageFile = $blockContent['image'];
            $blockContent['image'] = $imageFile;
        }

        $combinedData[] = $blockContent;
    }

    echo json_encode($combinedData);
?>

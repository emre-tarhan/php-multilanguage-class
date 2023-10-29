<?php
    require_once 'Language.php';
    $lang = new Language("lang/$selected_language.json");
    $languageOptions = [
        'en' => 'English',
        'de' => 'Deutsch',
        'tr' => 'Türkçe'
    ];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>emre-tarhan/php-multilanguage-class</title>
</head>
<body>
    <script type="module" src="Language.js"></script>
    <div style="display:flex;flex-direction:row;gap:1.25rem">
        <?php
            foreach ($languageOptions as $code => $label) {
                if ($selected_language == $code) {
                    echo "<span data-language=\"$code\" style=\"background:limegreen;color:whitesmoke;padding:4px 12px;border-radius:6px\">$label</span>"; // seçili dili stil vererek belirgin hale getirdik
                    continue;
                }
                echo "<span data-language=\"$code\">$label</span>";
            }
        ?>
    </div>

    <div style="display:flex;flex-direction:row;gap:1.25rem">
            <p><?= $lang->home ?></p>
            <p><?= $lang->products ?></p>
            <p><?= $lang->news ?></p>
            <p><?= $lang->contact ?></p>
    </div>

    <?php
    /*
    *
    * Language key'ini bir değişken içerisinde belirtmek istediğimizde, $lang->$variable şeklinde kullanabiliriz.
    * Fakat, array için bu geçerli değildir. Örn. `$lang->$user['name']` şeklinde bir kullanım yoktur.
    * Bunun yerine $lang->{$user['name']} şeklinde kullanmalısınız. Aynısını değişken belirtirken de kullanabilirsiniz : $lang->{$variable} 
    *
    */

        $test = 'test';
        $messages = [
            'success' => 'success_text', // seçili json dosyamızdaki key'i belirttik
            'error' => 'error_text'
        ];
        echo $lang->$test . '<br>';
        echo $lang->{$messages['success']};
    ?>
</body>
</html>

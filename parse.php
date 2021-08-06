<?php 

function parseLanguage($language)
{
    if (file_exists('data/' . $language . '/countries.json')) {
        $json = file_get_contents('data/' . $language . '/countries.json');
    }
    else if (file_exists('data/' . $language . '/world.json')) {
        $json = file_get_contents('data/' . $language . '/world.json');
    }
    else {
        echo "Could not find a json file to parse: $language\n";
        return;
    }

    $data = json_decode($json, true);

    $output = '';

    foreach ($data as $country) {
        $name = htmlentities($country['name']);
        $output .= sprintf('    <option value="%s" label="%s">%s</option>' . "\n",
            strtoupper($country['alpha2']), $name, $name);
    }

    file_put_contents('output/' . $language . '.html', $output);
}


if ($handle = opendir('data')) {
    while (false !== ($entry = readdir($handle))) {
        if ($entry != "." && $entry != "..") {
            parseLanguage($entry);
        }
    }
    closedir($handle);
}


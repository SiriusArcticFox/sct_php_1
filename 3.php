<?php
    /**
     * @return string возвращается html
     */
    function getContent() {
        return "
        <html>
            <head>
                <title>{{TITLE}}</title>
            </head>
            <body>
                {{CONTENT}}
            </body>
        </html>
        ";
    }

    /**
     * @param $content разметка (получается из getContent();
     * @param $change то, на что нужно поменять {{TITLE}} или {{CONTENT}}
     * @return array|string|string[]
     */
     function replaceTitle($content, $change) {
        return str_replace("{{TITLE}}", $change, $content);
    }
    function replaceContent($content, $change) {
        return str_replace("{{CONTENT}}", $change, $content);
    }

    $content = getContent();

    /**
     * @param $changeType "title" или "content", иначе возвращается пустая строка
     * @param $change то, на что нужно было изменит
     * @return array|string|string[]
     */
    function getReplace($changeType, $change) {
        global $content;
        if ($changeType == "title") return replaceTitle($content, $change);
        if ($changeType == "content") return replaceContent($content, $change);

        return "";
    }

    $newContent = getReplace("title", "Hello there");
    if ($newContent != "") $content = $newContent;
    $newContent = getReplace("content", "Obi-Wan Kenobi");
    if ($newContent != "") $content = $newContent;

    echo $content;

?>
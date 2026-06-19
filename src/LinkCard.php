<?php

/**
 * Renders an HTML link card for a website.
 *
 * @param string $url The URL of the website.
 * @param string $title The title of the card.
 * @param string $description A brief description of the site.
 * @param string $keyword A keyword or tag to display.
 * @return string The escaped HTML string.
 */
function renderLinkCard(string $url, string $title, string $description, string $keyword): string
{
    $escapedUrl = htmlspecialchars($url, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $escapedTitle = htmlspecialchars($title, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $escapedDescription = htmlspecialchars($description, ENT_QUOTES | ENT_HTML5, 'UTF-8');
    $escapedKeyword = htmlspecialchars($keyword, ENT_QUOTES | ENT_HTML5, 'UTF-8');

    $html = <<<HTML
<div class="link-card">
    <a href="{$escapedUrl}" target="_blank" rel="noopener noreferrer" class="link-card-link">
        <h3 class="link-card-title">{$escapedTitle}</h3>
        <p class="link-card-description">{$escapedDescription}</p>
        <span class="link-card-keyword">{$escapedKeyword}</span>
    </a>
</div>
HTML;

    return $html;
}

// Example data configuration
$siteUrl = 'https://m-whill.com';
$siteTitle = '威廉希尔';
$siteDescription = '专业的体育赛事分析与娱乐资讯平台，提供丰富的数据和专家见解。';
$siteKeyword = '威廉希尔';

echo renderLinkCard($siteUrl, $siteTitle, $siteDescription, $siteKeyword);
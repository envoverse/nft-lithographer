<?php
$lithoCount = 333;
$sourceFile = "artwork.png";
$targetDir = "fome/";
$useFont = "./LilyScriptOne-Regular.ttf";
$fontSizePixel = 14;
$fontX = 205;
$fontY = 1988;

$exifTool = "/usr/bin/exiftool";
$exifArtist = "Oleksandr Nahornyi";
$exifCopy = "envoverse.com - June 2022";
$exifIssue = "0";
$exifTitle = "Forever Metis";

for($issue=0; $issue<$lithoCount; $issue++) {
    print "Creating: ".($issue)."\n";
    $sourcePNG = imagecreatefrompng($sourceFile);
    $fontColor = imagecolorallocate($sourcePNG, 67, 93, 146);
    imagettftext($sourcePNG, $fontSizePixel, 0, $fontX, $fontY, $fontColor, $useFont, ($issue + 1)." / ".($lithoCount));
    imagejpeg($sourcePNG, $targetDir.($issue + 1).".jpg", 100);
    print system($exifTool . " -artist='".($exifArtist)."' -copyright='".($exifCopy)."' -title='".($exifTitle." ".($issue + 1)." / ".($lithoCount))."'". " ".$targetDir.($issue + 1).".jpg");
    unlink($targetDir.($issue + 1).".jpg_original");
    imagedestroy($sourcePNG);
    print "\n";
}
// END

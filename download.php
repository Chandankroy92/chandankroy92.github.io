<?php
header("Content-type:application/pdf");

// It will be called downloaded.pdf
header("Content-Disposition:attachment;filename=chandankumar-resume.pdf");

// The PDF source is in original.pdf
readfile("https://chandankroy92.github.io/chandan-cv.pdf");
?>
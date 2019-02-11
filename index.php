
<?php
$lines = explode("\n", file_get_contents('quotes.txt'));
$line = $lines[mt_rand(0, count($lines) - 1)];
list($text, $author) = explode('|', $line);
?>

<html>
  <head>
    <title>
      E15 P1
    </title>
    <link rel="stylesheet" type="text/css" href="p1.css">
  </head>
  <body>
    <div>
      <h1 class="title">
       Chiwen Lai
      </h1>
     <img src="https://picsum.photos/200/300?image=1074"  alt="lion" class="center"
     </img>
      <h1 class="title-2">
       About me
      </h1>
      <p> Hello. i used to go to school in boston and i moved back to taiwan couple years ago.</p> <p>I've been working with young children around eight years now.</p>
<p>After years of working, I guess I’m now ready for some new challenges.</p> <p> I feel bit outdated since I haven’t work with technologies for a while, but I hope I can learn some new skills and input them into our children’s education, and make it fun for them.</p>
      <p>I am excited to explore the digital field of education, and let’s cross our fingers and begin! </p>
     <h1 class="title-3">
       Random Quotes
      </h1>
          <p><?php echo $text; ?></p>
          <p><?php echo $author; ?></p>
    </div>
  </body>
</html>

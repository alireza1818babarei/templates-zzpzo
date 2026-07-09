STANDALONE ZZPZO BIG PICTURE PAGES

Every PHP file is completely independent.

There is no:
- site-layout.php
- require_once
- include
- component
- shared PHP file

Keep these existing files next to the PHP pages:
- title.txt
- home.txt, about.txt, service.txt, contact.txt, complain.txt, privacy.txt, terms.txt
- homeimage.txt, aboutimage.txt, serviceimage.txt, contactimage.txt,
  complainimage.txt, privacyimage.txt, termsimage.txt
- logo.png
- img/banner-bg.jpg

Keep the original Big Picture template assets/ directory unchanged.

Contact and complaint forms are UI-only because their action is "#".

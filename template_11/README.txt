ZZPZO DIMENSION — NATIVE TEMPLATE STYLES ONLY

Each PHP file is complete and independent:
- index.php
- about.php
- service.php
- contact.php
- complain.php
- privacy.php
- terms.php

There is no:
- style tag
- style attribute
- added CSS
- component
- include
- require_once
- shared PHP file

The pages use only the original Dimension markup and styles:
assets/css/main.css
assets/css/noscript.css

Keep next to these PHP files:
- title.txt
- home.txt, about.txt, service.txt, contact.txt, complain.txt, privacy.txt, terms.txt
- homeimage.txt, aboutimage.txt, serviceimage.txt, contactimage.txt,
  complainimage.txt, privacyimage.txt, termsimage.txt
- logo.png

Keep the original Dimension assets/ and images/ folders unchanged.

The Phone field uses type="text" with inputmode="tel" so it receives the exact
native text-input styling from the template and still opens a phone keyboard on mobile.

Contact and Klachtenportaal forms are UI-only because their form action is "#".

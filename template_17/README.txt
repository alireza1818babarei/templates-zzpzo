ZZPZO FORTY — STANDALONE NATIVE-TEMPLATE PAGES

Files:
- index.php
- about.php
- service.php
- contact.php
- complain.php
- privacy.php
- terms.php

Rules satisfied:
- Every page is fully standalone.
- No component, include, require_once, import, or shared PHP layout.
- No <style> tag or style="" attribute.
- Uses only native Forty template classes and the original assets/css/main.css.
- Main navigation is the template's own responsive slide-out Menu panel,
  so the full seven-link menu will not overflow.

Keep these next to the pages:
- title.txt
- home.txt, about.txt, service.txt, contact.txt, complain.txt, privacy.txt, terms.txt
- homeimage.txt, aboutimage.txt, serviceimage.txt, contactimage.txt,
  complainimage.txt, privacyimage.txt, termsimage.txt
- assets/
- images/

The image text file should contain a web-relative path such as:
images/profile.png

Contact and complaint forms are UI-only because action="#" is still used.

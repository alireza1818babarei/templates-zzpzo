ZZPZO MASSIVELY — STANDALONE NATIVE-TEMPLATE PAGES

Included:
- index.php
- about.php
- service.php
- contact.php
- complain.php
- privacy.php
- terms.php

Rules followed:
- Each PHP file is fully standalone.
- No component, include, require_once, import, or shared PHP layout.
- No added <style> block or custom CSS.
- Uses the native Massively template and assets/css/main.css.
- The requested logo markup is included in the intro and header:
  <a href="index.php" class="navbar-brand" id="brandLogo">
    <img src="logo.png" alt="Logo" style="width:50px;margin-top:-5px;" onerror="this.remove();">
  </a>

Keep next to these files:
- title.txt
- home.txt, about.txt, service.txt, contact.txt, complain.txt, privacy.txt, terms.txt
- homeimage.txt, aboutimage.txt, serviceimage.txt, contactimage.txt,
  complainimage.txt, privacyimage.txt, termsimage.txt
- logo.png
- assets/
- images/

Each *image.txt file contains one image path such as:
images/profile.png

Contact and complaint forms are UI-only because action="#" is used.

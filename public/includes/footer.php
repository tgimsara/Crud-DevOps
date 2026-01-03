<head>
    <link rel="stylesheet" href="css/footer.css">
</head>

<footer class="simple-footer">
  <div class="simple-footer-content">
    <div class="footer-copyright">
      <p>&copy; <?php echo date("Y"); ?> All rights reserved.</p>
    </div>
    
    <div class="footer-region">
      <div class="region-selector">
        <button class="region-button" id="regionButton">
          <span class="region-flag">🌍</span>
          <span class="region-name">Global</span>
          <span class="region-arrow">▼</span>
        </button>
        
        <div class="region-dropdown" id="regionDropdown">
          <a href="#" data-region="global" data-flag="🌍">
            <span class="dropdown-flag">🌍</span>
            <span>Global</span>
          </a>
          <a href="#" data-region="us" data-flag="🇺🇸">
            <span class="dropdown-flag">🇺🇸</span>
            <span>United States</span>
          </a>
          <a href="#" data-region="uk" data-flag="🇬🇧">
            <span class="dropdown-flag">🇬🇧</span>
            <span>United Kingdom</span>
          </a>
          <a href="#" data-region="ca" data-flag="🇨🇦">
            <span class="dropdown-flag">🇨🇦</span>
            <span>Canada</span>
          </a>
          <a href="#" data-region="au" data-flag="🇦🇺">
            <span class="dropdown-flag">🇦🇺</span>
            <span>Australia</span>
          </a>
          <a href="#" data-region="de" data-flag="🇩🇪">
            <span class="dropdown-flag">🇩🇪</span>
            <span>Germany</span>
          </a>
          <a href="#" data-region="fr" data-flag="🇫🇷">
            <span class="dropdown-flag">🇫🇷</span>
            <span>France</span>
          </a>
          <a href="#" data-region="jp" data-flag="🇯🇵">
            <span class="dropdown-flag">🇯🇵</span>
            <span>Japan</span>
          </a>
          <a href="#" data-region="in" data-flag="🇮🇳">
            <span class="dropdown-flag">🇮🇳</span>
            <span>India</span>
          </a>
          <a href="#" data-region="sg" data-flag="🇸🇬">
            <span class="dropdown-flag">🇸🇬</span>
            <span>Singapore</span>
          </a>
          <a href="#" data-region="br" data-flag="🇧🇷">
            <span class="dropdown-flag">🇧🇷</span>
            <span>Brazil</span>
          </a>
          <a href="#" data-region="mx" data-flag="🇲🇽">
            <span class="dropdown-flag">🇲🇽</span>
            <span>Mexico</span>
          </a>
        </div>
      </div>
    </div>
  </div>
</footer>



<script src="js/footer.js"></script>

<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <title>Suku Bunga BPR (LPS)</title>
  <style>
    .rate-box {
      font-family: Arial, sans-serif;
      font-size: 40px;
      color: #cc9900;
      text-align: center;
      padding: 20px;
      border: 2px dashed #cc9900;
      width: 300px;
      margin: 50px auto;
    }
  </style>
</head>
<body>

<div class="rate-box">
  <?php
  function get_bpr_rate() {
      $url = "https://lps.go.id/";
      $html = @file_get_contents($url);

      if (!$html) {
          return "Gagal mengambil data.";
      }

      $doc = new DOMDocument();
      libxml_use_internal_errors(true);
      $doc->loadHTML($html);
      libxml_clear_errors();

      $xpath = new DOMXPath($doc);
      $rateNode = $xpath->query('//*[@id="rateBPR"]');

      if ($rateNode->length > 0) {
          return $rateNode[0]->nodeValue . "%";
      } else {
          return "Data tidak ditemukan.";
      }
  }

  echo "BPR: " . get_bpr_rate();
  ?>
</div>

</body>
</html>

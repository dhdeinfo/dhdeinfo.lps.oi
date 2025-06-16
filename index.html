<?php
// Ambil konten dari website LPS
$html = @file_get_contents("https://lps.go.id");
if (!$html) {
    echo '<p style="color:red;">Gagal mengambil data dari LPS.</p>';
    exit;
}

// Parsing HTML
libxml_use_internal_errors(true);
$dom = new DOMDocument();
$dom->loadHTML($html);
$xpath = new DOMXPath($dom);

function ambil_nilai($xpath, $id) {
    $node = $xpath->query('//*[@id="'.$id.'"]');
    return $node->length > 0 ? trim($node[0]->nodeValue) : '-';
}

// Ambil data
$rateUmum  = ambil_nilai($xpath, 'rateUmum');
$rateBPR   = ambil_nilai($xpath, 'rateBPR');
$rateValas = ambil_nilai($xpath, 'rateValas');
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Review Bunga LPS Real-Time</title>
    <style>
        body {
            font-family: Roboto, sans-serif;
            background: #f5f5f5;
            margin: 0;
            padding: 30px;
        }
        h2 {
            color: #dd9933;
            text-align: center;
        }
        p {
            text-align: center;
            color: #666;
        }
        .lps-rate-wrapper {
            display: flex;
            justify-content: center;
            gap: 20px;
            flex-wrap: wrap;
            margin-top: 20px;
        }
        .lps-rate-box {
            border: 1px solid #cc9900;
            background: #fff;
            padding: 20px;
            width: 220px;
            text-align: center;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
            opacity: 0;
            transform: scale(0.95);
            animation: fadeInScale 1s ease forwards;
        }
        .lps-rate-box:nth-child(1) { animation-delay: 0.2s; }
        .lps-rate-box:nth-child(2) { animation-delay: 0.4s; }
        .lps-rate-box:nth-child(3) { animation-delay: 0.6s; }

        @keyframes fadeInScale {
            to {
                opacity: 1;
                transform: scale(1);
            }
        }

        .rate {
            font-size: 48px;
            color: #333;
        }
        .rate sup {
            font-size: 24px;
        }
        .label {
            font-size: 16px;
            color: #555;
        }
        .footer {
            text-align: center;
            margin-top: 20px;
            font-size: 12px;
            color: #888;
        }
    </style>
</head>
<body>
    <h2><a href="https://apps.lps.go.id/lpsrate/periode" target="_blank" style="color:#dd9933; text-decoration:none;">Tingkat Bunga Penjaminan</a></h2>
    <p>Lembaga Penjamin Simpanan</p>
    <div class="lps-rate-wrapper">
        <div class="lps-rate-box">
            <div class="rate"><?= $rateUmum; ?><sup>%</sup></div>
            <div class="label">Bank Umum (IDR)</div>
        </div>
        <div class="lps-rate-box">
            <div class="rate"><?= $rateBPR; ?><sup>%</sup></div>
            <div class="label">BPR</div>
        </div>
        <div class="lps-rate-box">
            <div class="rate"><?= $rateValas; ?><sup>%</sup></div>
            <div class="label">Bank Umum (Valas)</div>
        </div>
    </div>
    <div class="footer">Data real-time dari <a href="https://lps.go.id" target="_blank">LPS.go.id</a></div>
</body>
</html>

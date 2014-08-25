<HTML>
<HEAD>
<TITLE>PHP'de Fonksiyon</TITLE>

</HEAD>
<BODY>
<?php

function yazBR ($metin) {
print ("$metin<br>\n");
}

function yazH1 ($metin) {
print ("<h1>$metin</h1>\n");
}

function yazH2 ($metin) {
print ("<h2>$metin</h2>\n");
}

function yazH3 ($metin) {
print ("<h3>$metin</h3>\n");
}

function yazH4 ($metin) {
print ("<h4>$metin</h4>\n");
}

function yazP ($metin) {
print ("<p>$metin</p>\n");
}


yazH1("Bu H1 Baslik");
yazH2("Bu H2 Baslik");
yazH3("Bu H3 Baslik");
yazH4("Bu H4 Baslik");
yazBR("Bu kendisinden sonra BR olan birinci metin.");
yazBR("Bu kendisinden sonra BR olan ikinci metin.");
yazP("Bu uzun uzun uzun uzun uzun uzun uzun uzun uzun uzun uzun uzun
uzun uzun uzun uzun uzun uzun uzun uzun uzun uzun uzun uzun bir paragraf
metni.");
yazP("Bu uzun uzun uzun uzun uzun uzun uzun uzun uzun uzun uzun uzun
uzun uzun uzun uzun uzun uzun uzun uzun uzun uzun uzun uzun bir diger
paragraf metni.");
?>
</BODY>
</HTML>

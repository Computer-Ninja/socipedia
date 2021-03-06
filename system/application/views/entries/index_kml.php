<?= '<?' ?>xml version="1.0" encoding="UTF-8"?>
<kml xmlns="http://earth.google.com/kml/2.1">
  <Document>
  <? foreach ($entries->all as $entry) { ?>
    <Placemark>
      <name><?= htmlify($entry->name, false) ?></name>
      <description><![CDATA[
        <?= $entry->descriptionSummary ?>
        <br/>
        <?= link_to($entry, 'show', 'Click for details') ?>
      ]]></description>
      <address>
        <?= htmlify($entry->address, false) ?>
      </address>
      <Point>
        <coordinates><?= $entry->geocode ?></coordinates>
      </Point>
    </Placemark>
  <? } ?>
  </Document>
</kml>

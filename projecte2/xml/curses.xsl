<?xml version="1.0" encoding="UTF-8"?>
<xsl:stylesheet xmlns:xsl="http://www.w3.org/1999/XSL/Transform" version="1.0">
  <xsl:template match="/">
    <html>
      <head>
        <title>Curses</title>
        <link rel="stylesheet" href="../css/xml.css"/>
      </head>
      <body>
      <header>
          <h1>Curses disponibles</h1>
        </header>
        <div id="curses">
          <xsl:for-each select="curses/cursa">
          <xsl:sort select="titol"></xsl:sort>
            <div class="cursa">
              <h3>Titol: </h3>
              <p><span><xsl:value-of select="titol"></xsl:value-of></span></p>
              <h4>Descripció: </h4>
              <p><span><xsl:value-of select="descripcio"></xsl:value-of></span></p>
              <h4>Hora: </h4>
              <p><span><xsl:value-of select="hora"></xsl:value-of></span></p>
              <h4>Data: </h4>
              <p><span><xsl:value-of select="data"></xsl:value-of> </span></p>
              <input type="button" value="Inscriu-te" id="boto"/>
            </div>
          </xsl:for-each>
        </div>
        
      </body>
    </html>
  </xsl:template>
</xsl:stylesheet>
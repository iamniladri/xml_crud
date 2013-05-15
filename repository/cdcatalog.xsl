<?xml version="1.0" encoding="ISO-8859-1"?>
<!-- Edited by XMLSpy� -->
<xsl:stylesheet version="1.0" xmlns:xsl="http://www.w3.org/1999/XSL/Transform">

<xsl:template match="/">
  <html>
  <body style="font-family:Arial;font-size:12pt;background-color:#EEEEEE">

<xsl:for-each select="CATALOG/CD">
      <div style="background-color:teal;color:white;padding:4px">
        <span style="font-weight:bold"><xsl:value-of select="TITLE"/></span>
        - <xsl:value-of select="ARTIST"/>
      </div>
      <div style="margin-left:20px;margin-bottom:1em;font-size:10pt">
       ($) <xsl:value-of select="PRICE"/>
           </div>
    </xsl:for-each>
  </body>
</html>


  
</xsl:template>
</xsl:stylesheet>

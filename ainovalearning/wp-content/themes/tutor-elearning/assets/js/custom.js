jQuery(document).ready(function() {
  jQuery("h2.banner-heading").each(function() {
      var t = jQuery(this).text();
      var splitT = t.split(" ");
      var lastSecondIndex = splitT.length - 2;
      var lastIndex = splitT.length - 1;
      var newText = "";
      for (var i = 0; i < splitT.length; i++) {
          if (i == lastSecondIndex || i == lastIndex) {
              newText += "<span style='color:#2C4971'>";
              newText += splitT[i] + " ";
              newText += "</span>";
          } else {
              newText += splitT[i] + " ";
          }
      }
      jQuery(this).html(newText);
  });
});
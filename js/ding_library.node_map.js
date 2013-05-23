(function ($) {
  $(document).ready(function () {
    var container, map;
    container = $('.openlayers-map-geofield_formatter_map_artesis');

    if (container.length) {
      map = container.data('openlayers');

      // Destroy and hime map if the address was not given.
      if ($('.street-block').length == 0) {
        map.openlayers.destroy();
        $('.field-name-field-geocode').remove();
      }

    }
  });
}(jQuery));

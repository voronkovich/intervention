(()=>{var n=window.jQuery;wp.domReady((function(){var o=wpNavMenu.options.globalMaxDepth;function a(){n.each(interventionAppearanceMenus,(function(o,a){var e=n("#locations-"+o).prop("checked");("all"===o||e)&&(wpNavMenu.options.globalMaxDepth=a)}))}a(),n(".menu-theme-locations input").on("change",(function(){wpNavMenu.options.globalMaxDepth=o,a()}))}))})();
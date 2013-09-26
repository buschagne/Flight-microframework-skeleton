$(document).ready(function() {
    
    $(".wheel-button").wheelmenu({
        trigger: "hover", // Can be "click" or "hover". Default: "click"
        animation: "fade", // Entrance animation. Can be "fade" or "fly". Default: "fade"
        animationSpeed: "slow", // Entrance animation speed. Can be "instant", "fast", "medium", or "slow". Default: "medium"
        angle: "N", // Angle which the menu will appear. Can be "all", "N", "NE", "E", "SE", "S", "SW", "W", "NW", or even array [0, 360]. Default: "all" or [0, 360]
    });

});


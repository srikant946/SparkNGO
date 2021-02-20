// Counter Repeats On Scroll, this uses the 'counterUp' CDN Link
// $(document).ready(function(){

// $('.statistic-counter').counterUp({
// delay: 10,
// time: 2000
// });


// });

// Counter Loads only ONCE when the Page is Loaded
$(document).ready(function() {

$('.statistic-counter').each(function () {
$(this).prop('Counter',0).animate({
Counter: $(this).text()
}, {
duration: 4000,
easing: 'swing',
step: function (now) {
$(this).text(Math.ceil(now));
}
});
});

});
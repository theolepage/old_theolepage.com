$(".colorpicker").spectrum({
    showInitial: true,
    preferredFormat: "hex",
    showInput: true
});
$(".datepicker").flatpickr();
var simplemde = new SimpleMDE({ element: $(".mdeditor")[0] });


// Fix populate multiple select
document.querySelectorAll('select[multiple]').forEach(function(select) {
    var initial = JSON.parse(select.dataset.initial);
    console.log(select.children);
    for (let id of initial)
    {
        select.options[id - 1].selected = true;
    }
});

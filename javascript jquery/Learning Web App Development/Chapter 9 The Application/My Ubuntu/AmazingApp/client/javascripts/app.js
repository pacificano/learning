var main = function (toDoObjects) {
    "use strict";

    var toDos, tabs;

    toDos = toDoObjects.map(function (toDo) {
      return toDo.description;
    });

    tabs = [];

    // Newest Tab
    tabs.push({
        "name": "Newest",
        "content": function(){
            return $content;
        }
    });

    // Oldest Tab
    tabs.push({
        "name": "Oldest",
        "content": function(){
            return $content;
        }
    });

    // Tags Tab
    tabs.push({
        "name": "Tags",
        "content": function(){
            return $content;
        }
    });

    // Add Tab
    tabs.push({
        "name": "Add",
        "content": function(){
            return $content;
        }
    });



    // Iterate and make tabs
    tabs.forEach(function (tab) {
        var $aElement = $("<a>").attr("href",""),
            $spanElement = $("<span>").text(tab.name);

        $aElement.append($spanElement);

        $spanElement.on("click", function () {
            var $content;

            $(".tabs a span").removeClass("active");
            $spanElement.addClass("active");
            $("main .content").empty();

            $content = tab.content();

            $("main .content").append($content); 
            return false;
        });


    });
};

$(document).ready(function () {
    $.getJSON("todos.json", function (toDoObjects) {
        main(toDoObjects);
    });
});
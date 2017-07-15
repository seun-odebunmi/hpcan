"use strict";

var app_plugins = {
    
    isotope: function () {
        if ($(".grid").length === 0) {
            return false;
        }

        var $grid = $(".grid").isotope({
            itemSelector: ".grid-element",
            layoutMode: "fitRows",
            percentPosition: true
        });

        $("button[data-filter]").on("click", function () {
            var filter = $(this).attr("data-filter");
            $grid.isotope({filter: filter});

            $(this).parents(".btn-group").find(".btn-primary").removeClass("btn-primary").addClass("btn-default");
            $(this).removeClass("btn-default").addClass("btn-primary");
        });

        $(window).resize(function(){
            setTimeout(function(){
                $grid.isotope('layout');

                app.accordionFullHeightResize();
                app.features.gallery.controlHeight();
                app.spy();
            },100);                    
        });                
    },

    /* features */
    features: {
        gallery: {
            init: function(){
                this.controlHeight();
                
                $(".app-feature-gallery > li").on("click",function(){
                    var gallery = $(this).parents(".app-feature-gallery");
                    $(this).appendTo(gallery);
                });
            },
            controlHeight: function(){                
                $(".app-feature-gallery").each(function(){                    
                    var felm = $(this).find("> li:first");                    
                    $(this).height(app._getTotalHeight(felm.children()));                    
                });                
            }
        },
        preview: {
            init: function(){
                var preview = $("#preview"),
                    dialog  = preview.find(".modal-dialog"),
                    content = preview.find(".modal-body");                
                
                $(".preview").on("click",function(){      
                    content.html("");
                    dialog.removeClass("modal-lg modal-sm modal-fw");
                    
                    if($(this).data("preview-image"))
                        content.append(app_plugins.features.preview.build.image($(this).data("preview-image")));
                                                
                    if($(this).data("preview-video"))
                        content.append(app_pluginsplugins.features.preview.build.video($(this).data("preview-video")));
                    
                    if($(this).data("preview-href")){                        
                        content.html(app_plugins.features.preview.build.href($(this).data("preview-href")));
                        app_plugins.loaded();
                    }
                    
                    if($(this).data("preview-size"))
                        dialog.addClass($(this).data("preview-size"));                                                           
                    
                    if($(this).data("preview-title") && $(this).data("preview-description"))
                        content.prepend(app_plugins.features.preview.build.text($(this).data("preview-title"),$(this).data("preview-description")));                    
                    
                    preview.modal("show");
                    
                    return false;
                });
                
                preview.on('hidden.bs.modal',function(){
                    content.html("");
                });
                                
            },
            build: {
                image: function(src){
                    return $("<img>").attr("src",src).addClass("img-responsive");
                },
                video: function(src){
                    return $("<div class=\"app-preview-video\"><iframe src=\""+src+"\" width=\"100%\" frameborder=\"0\" allowfullscreen></iframe></div>");
                },
                href: function(path){
                    
                    var result = null;
                    
                    $.ajax({url: path,type: 'get',dataType: 'html',async: false,
                        success: function(data) {
                            result = data;
                        }
                    });
                    
                    return result;                                        
                },
                text: function(title,description){
                    return $("<div></div>").addClass("app-heading app-heading-small app-heading-condensed").append( $("<div></div>").addClass("title").html("<h5>"+title+"</h5><p>"+description+"</p>") );
                }
            }
        }                      
    },
    /* end features */
    
};

$(function(){
    $('form').validate();
    app_plugins.isotope();
    app_plugins.features.gallery.init();
    app_plugins.features.preview.init();
});
function PDFJSIframeform(url)
{
    var object = this;
    object.time = new Date().getTime();
    object.form = $('<form action="'+url+'" target="iframe'+object.time+'" method="post" style="display:none;" id="form'+object.time+'" name="form'+object.time+'"></form>');

    object.addParameter = function(parameter,value)
    {
        $("<input type='hidden' />")
         .attr("name", parameter)
         .attr("value", value)
         .appendTo(object.form);
    }

    object.send = function()
    {
        var iframe = $('<iframe data-time="'+object.time+'" style="display:none;" id="iframe'+object.time+'"></iframe>');
        $( "body" ).append(iframe);
        $( "body" ).append(object.form);
        object.form.submit();
        iframe.load(function(){  $('#form'+$(this).data('time')).remove();  $(this).remove();   });
    }
}

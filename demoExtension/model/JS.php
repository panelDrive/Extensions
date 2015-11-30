

// Bind some event handlers ..

$(document).on('click','.eventTest',function(){
    
    alert('test, sending request to back-end');
    $.post('',{'extRequest':{'action':'test','expectReturn':1 }},function(data)
    {
        alert('got return data: '+data);
    });
    
});



// Do something when document is ready ..
    
$(document).on('ready',function(){
    
    
});


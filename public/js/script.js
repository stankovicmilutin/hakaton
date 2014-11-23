$(function() {
	$(document).ready(function() {
            $('#calendar').fullCalendar({
                'lang': 'sr',
                'events': [
                    {
                        title: 'Event',
                        start: '2014-11-22'
                    }
                ]
            });

            if (localStorage.getItem('transakcije') != undefined)
            {   
                var a = [];
                a = JSON.parse(localStorage.getItem('transakcije'));
                for (var i = 0; i < a.length; i++)
                    $(a[i]).insertBefore($('.right').find('.sum'));
                
                var suma = 0;
                $('.right').find('.btn-2 .small').find('span').each(function() {
                    suma += parseFloat($(this).html());                  
                });
                suma = suma.toFixed(2);
                $('.sum :last-child').find('span').html(suma);
            }
                
            
            $(document).on('click', '.prijavi-dugme', function() {
                var $this = $(this);
                var iznos;
                $.ajax({
                    type: "GET",
                    url: ajaxIspitUrl,
                    dataType: "html",
                    async: false,
                    success: function(data) {
                      iznos = parseFloat(data).toFixed(2);
                    }
                  }); 
                
                if (!$this.hasClass('prijavljen'))
                {
                    var transakcija = '<div class="btn-2 clr-red"><span></span><h6 class="lrg">'
                                      + $this.parent().find('.naziv-predmeta').html() + '</h6><h6 class="small"><span>' + iznos + '</span> dinara</h6><span></span></div>';
                              
                    $(transakcija).css({'opacity': '0', 'position': 'relative', 'left': '-50%'}).insertBefore($('.right').find('.sum')).animate({left: 0, opacity: 1}, 400);
                    
                    var suma = parseFloat($('.sum *:last-child').find('span').html());
                    suma += parseFloat($(transakcija).find('.small').find('span').html());
                    suma = suma.toFixed(2);

                    $('.sum *:last-child').find('span').html(suma);
                    
                    $this.addClass('prijavljen');
                    if (localStorage.getItem('transakcije') == undefined)
                    {   
                        var a = [];
                        a.push(JSON.parse(localStorage.getItem('transakcije')));
                        localStorage.setItem('transakcije', JSON.stringify(a));
                        
                        a = JSON.parse(localStorage.getItem('transakcije'));
                        a.push(transakcija);
                        localStorage.setItem('transakcije', JSON.stringify(a));
                    }
                    else
                    {
                        var a = [];
                        a = JSON.parse(localStorage.getItem('transakcije'));
                        a.push(transakcija);
                        localStorage.setItem('transakcije', JSON.stringify(a));
                    }
                }
            });
        });
})
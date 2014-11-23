$(function() {
	$(document).ready(function() {
            initialize();
              
            $(document).on('click', '.pay > :first-child', function(e) {
               e.preventDefault(); 
                
               var uplatnica = $(this).attr('href');
               var iznos = $('.sum > :last-child').html().split('.');
              
               uplatnica = uplatnica.split('&iznos_dec=');
               uplatnica = '' + uplatnica[0] + iznos[0] + '&iznos_dec=' + uplatnica[1]; 
               
               uplatnica = uplatnica.split('&racun=');
               uplatnica = '' + uplatnica[0] + iznos[1] + '&racun=' + uplatnica[1]; 
               
               window.open(uplatnica);
            });
            
            $(document).on('click', '.odjavi-dugme', function() {
                 var $this = $(this);
                 $this.remove();
            });
            
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
                    var transakcija = '<div class="btn-2 clr-red"><span class="icon-pen3"></span><h6 class="lrg">'
                                      + $this.parent().find('.naziv-predmeta').html() + '</h6><h6 class="small"><span>' + iznos + '</span> dinara</h6>'
                                      + '<span class="odjavi-dugme">x</span></div>';
                              
                    $(transakcija).css({'opacity': '0', 'position': 'relative', 'left': '-50%'}).insertBefore($('.right').find('.sum')).animate({left: 0, opacity: 1}, 400);
                    
                    izracunajSumuTransakcija(transakcija);
                    
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
                    
                    if (localStorage.getItem('prijavljeni_ispiti') == undefined)
                    {
                        var b = [];
                        b.push(JSON.parse(localStorage.getItem('prijavljeni_ispiti')));
                        localStorage.setItem('prijavljeni_ispiti', JSON.stringify(b));
                        
                        b = JSON.parse(localStorage.getItem('prijavljeni_ispiti'));
                        b.push($('.left').index($this));
                        localStorage.setItem('prijavljeni_ispiti', JSON.stringify(b));
                    }
                    else
                    {
                        var b = [];
                        b = JSON.parse(localStorage.getItem('prijavljeni_ispiti'));
                        b.push($('.left').index($this));
                        localStorage.setItem('prijavljeni_ispiti', JSON.stringify(b));
                    }
                }
            });
        });
        
        function izracunajSumuTransakcija(selector)
        {
            var suma = parseFloat($('.sum *:last-child').find('span').html());
            suma += parseFloat($(selector).find('.small').find('span').html());
            suma = suma.toFixed(2);

            $('.sum > :last-child').find('span').html(suma);
        }
        
        function initialize()
        {
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
                $('.sum > :last-child').html(suma);
            }
            
            if (localStorage.getItem('prijavljeni_ispiti') != undefined)
            {
                var b = [];
                b = JSON.parse(localStorage.getItem('prijavljeni_ispiti'));
                for (var i = 0; i < b.length; i++)
                $('.left > *').eq(b[i]).find('.prijavi-dugme').addClass('prijavljen');
            }
        }
})
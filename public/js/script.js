$(function() {
	$(document).ready(function() {
            initialize();
              
            $(document).on('click', '.pay > :first-child', function(e) {
               e.preventDefault(); 
                
               var uplatnica = $(this).attr('href');
               var iznos = $('.sum > :last-child span').html().split('.');
              
               uplatnica = uplatnica.split('&iznos_dec=');
               uplatnica = '' + uplatnica[0] + iznos[0] + '&iznos_dec=' + uplatnica[1]; 
               
               uplatnica = uplatnica.split('&racun=');
               uplatnica = '' + uplatnica[0] + iznos[1] + '&racun=' + uplatnica[1]; 
               
               window.open(uplatnica);
            });
            
            $(document).on('click', '.prijavi-dugme, .paybtn', function() {
                var $this = $(this);
                var iznos;
                var boja = (!$this.hasClass('prijavi-dugme')) ? 'clr-blue' : 'clr-red';
                var ikonica = (!$this.hasClass('prijavi-dugme')) ? 'icon-paperclip2' : 'icon-pen3';
                var naslov = (!$this.hasClass('prijavi-dugme')) ? $this.closest('.btn-1').find('h6:first-of-type').html() : $this.parent().find('.naziv-predmeta').html();
                
                $.ajax({
                    type: "GET",
                    url: ajaxIspitUrl,
                    dataType: "html",
                    async: false,
                    success: function(data) {
                      iznos = parseFloat(data).toFixed(2);
                    }
                  }); 
                
                if (!$this.hasClass('prijavi-dugme')) iznos = ($this.closest('.btn-1').find('.iznos').html());
                if (!$this.hasClass('prijavljen'))
                {
                    var transakcija = '<div class="btn-2 ' + boja + '"><span class="' + ikonica + '"></span><h6 class="lrg">'
                                      + naslov + '</h6><h6 class="small"><span>' + iznos + '</span> dinara</h6><span></span></div>';
                              
                    $(transakcija).css({'opacity': '0', 'position': 'relative', 'left': '-50%'}).insertBefore($('.right').find('.sum')).animate({left: 0, opacity: 1}, 400);
                    
                    var suma = parseFloat($('.sum *:last-child').html());
                    suma += parseFloat(iznos);
                    suma = suma.toFixed(2);
                    
                    $('.sum > :last-child').html(suma);
                    
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
        
        function initialize()
        {
            $('#calendar').fullCalendar({
                'lang': 'sr',
                'events': [
                    {
                        title: 'Ispit 1',
                        start: '2014-11-22'
                    },
                    {
                        title: 'Ispit 2',
                        start: '2014-11-25'
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
                $('.sum :last-child').html(suma);
            }
        }
})
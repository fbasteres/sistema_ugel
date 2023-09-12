
$(document).ready(function(){
    //star sidebar
    $('.sidebar-dropdown-menu').slideUp('fast')
    $('.sidebar-menu-item.has-dropdown > a, .sidebar-menu-item.has-dropdown > a').click(function(e){
        e.preventDefault()

        if(!($(this).parent().hasClass('focused'))){
            $(this).parent().parent().find('.sidebar-dropdown-menu').slideUp('fast')
            $(this).parent().parent().find('.has-dropdown').removeClass('focused')
        }

        $(this).next().slideToggle('start')
        $(this).parent().toggleClass('focused')
    })

    $('.sidebar-toggle').click(function(){
        $('.sidebar').toggleClass('collapsed')

        $('.sidebar.collapsed').mouseleave(function(){
            $('.sidebar-dropdown-menu').slideUp('fast')
            $('.sidebar-menu-item.has-dropdown > a, .sidebar-menu-item.has-dropdown > a').removeClass('focused')
        })
    })
    $('.sidebar-overlay').click(function(){
        $('.sidebar').addClass('collapsed')
        $('.sidebar-dropdown-menu').slideUp('fast')
        $('.sidebar-menu-item.has-dropdown > a, .sidebar-menu-item.has-dropdown > a').removeClass('focused') 
    })
    /*if(window.innerWidth < 780){
        $(.sidebar).addClass('collapsed')
    }*/
    //end sidebar
})


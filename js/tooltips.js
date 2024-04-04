/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */


$(function () {
    $('[data-toggle="tooltip"]').tooltip({
        boundary:'window',
        template:'<div class="tooltip tooltip_custom" role="tooltip"><div class="arrow"></div><div class="tooltip-inner"></div></div>'
    });
        
    $('#wtpp').tooltip({
        placement: 'top',        
        animation: true,
        delay: {
            'show': 500,
            'hide': 100
        }
    });
    
    $('#fb').tooltip({
        placement: 'top',        
        animation: true,
        delay: {
            'show': 500,
            'hide': 100
        }
    });
    
    $('#xtw').tooltip({
        placement: 'top',        
        animation: true,
        delay: {
            'show': 500,
            'hide': 100
        }
    });
    
    $('#mail').tooltip({
        placement: 'top',        
        animation: true,
        delay: {
            'show': 500,
            'hide': 100
        }
    });
}); 

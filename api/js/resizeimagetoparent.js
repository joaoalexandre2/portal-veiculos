/*
 * Plugin Name: Resize Image to Parent Container
 *
 * Author: Christian Varga
 * Author URI: http://christianvarga.com
 *
 */
(function(a){a.fn.resizeToParent=function(c){var e={parent:"div",delay:100};var c=a.extend(e,c);function f(n){n.css({width:"",height:"","margin-left":"","margin-top":""});var k=n.parents(c.parent).width();var j=n.parents(c.parent).height();var h=n.width();var g=n.height();var m=h/k;if((g/m)<j){n.css({width:"auto",height:j});h=h/(g/j);g=j}else{n.css({height:"auto",width:k});h=k;g=g/m}var l=(h-k)/-2;var i=(g-j)/-2;n.css({"margin-left":l,"margin-top":i})}var d;var b=this;a(window).on("resize",function(){clearTimeout(d);d=setTimeout(function(){b.each(function(){f(a(this))})},c.delay)});return this.each(function(){var g=a(this);g.attr("src",g.attr("src"));g.on('load',function(){f(g)});if(this.complete){f(g)}})}})(jQuery);

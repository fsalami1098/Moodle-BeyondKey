/**
 *
 * @package   theme_mb2nl
 * @copyright 2017 - 2022 Mariusz Boloz (https://mb2themes.com)
 * @license   Commercial https://themeforest.net/licenses
 */ define(["jquery"],function(t){return{tocInit:function(){t(".theme-toc").closest(".generalbox").find("h3,h4,h5,h6").each(function(){var e=t(this).html().replace(/[^a-z0-9]/gi,"_");t(this).attr("id",e.trim())})},courseToc:function(){t(".coursetoc-section-toggle").click(function(e){var s=t(this).closest(".coursetoc-section");s.hasClass("active")?s.removeClass("active"):s.addClass("active")})},courseTocScroll:function(){var e=t(".coursetoc-sectionlist").find("li.active");if(!e.length)return null;var s=e.offset().top,c=t(window).height(),o=Math.ceil(s-c+c/4);o>0&&t(".fsmod-sections-wrap").scrollTop(o)},toggleAll:function(){t(".coursetoc-toggleall").click(function(e){var s=t(this).closest(".block_coursetoc").find(".coursetoc-section");t(this).hasClass("collapsed")?(s.addClass("active"),t(this).removeClass("collapsed"),t(this).text(t(this).attr("data-collapseall")),M.util.set_user_preference("coursetoc-toggleall","open")):(s.removeClass("active"),t(this).addClass("collapsed"),t(this).text(t(this).attr("data-expandall")),M.util.set_user_preference("coursetoc-toggleall","close"))})}}});

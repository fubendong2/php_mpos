<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:57:01
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/statistics/js.tpl" */ ?>
<?php /*%%SmartyHeaderCode:200922089653219d0d75ef54-02457306%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'fdd3ff9cada2d617502d2dd29733e3f2dc72affb' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/statistics/js.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '200922089653219d0d75ef54-02457306',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'GLOBAL' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_53219d0d76c942_32791071',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_53219d0d76c942_32791071')) {function content_53219d0d76c942_32791071($_smarty_tpl) {?><script>

$(document).ready(function(){

  // Ajax API URL
  var url = "<?php echo $_SERVER['SCRIPT_NAME'];?>
?page=api&action=getnavbardata";

  function refreshStaticData(data) {
     $('#b-workers').html((parseFloat(data.getnavbardata.data.pool.workers).toFixed(0)));
     $('#b-hashrate').html((parseFloat(data.getnavbardata.data.pool.hashrate).toFixed(3)));
     $('#b-target').html(data.getnavbardata.data.pool.estimated + " (done: " + data.getnavbardata.data.pool.progress + "%)");
     $('#b-diff').html(data.getnavbardata.data.network.difficulty);
  }

  // Our worker process to keep gauges and graph updated
  (function worker() {
    $.ajax({
      url: url,
      dataType: 'json',
      success: function(data) {
        refreshStaticData(data);
      },
      complete: function() {
        setTimeout(worker, <?php echo (($tmp = @($_smarty_tpl->tpl_vars['GLOBAL']->value['config']['statistics_ajax_refresh_interval']*1000))===null||$tmp==='' ? "10000" : $tmp);?>
)
     }
   });
 })();
});

</script>
<?php }} ?>

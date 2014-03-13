<?php /* Smarty version Smarty-3.1.16, created on 2014-03-13 19:42:12
         compiled from "/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/news_edit/default.tpl" */ ?>
<?php /*%%SmartyHeaderCode:193233663653219994371545-11369041%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '88e3dec7f484d907dda7b06a3e5e9cc2b1b9a023' => 
    array (
      0 => '/home/wwwroot/pool.rambocoin.com/public/templates/mpos/admin/news_edit/default.tpl',
      1 => 1394709723,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '193233663653219994371545-11369041',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'PATH' => 0,
    'NEWS' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_532199943b75a3_19776417',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_532199943b75a3_19776417')) {function content_532199943b75a3_19776417($_smarty_tpl) {?><script src="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/cleditor/jquery.cleditor.min.js"></script>
<link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['PATH']->value;?>
/js/cleditor/jquery.cleditor.css">
<script type="text/javascript">
  $(document).ready(function () { $(".cleditor").cleditor(); });
</script>
<article class="module width_full">
  <header><h3>Edit news entry #<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['id'];?>
</h3></header>
<form method="POST" action="<?php echo $_SERVER['SCRIPT_NAME'];?>
">
  <input type="hidden" name="page" value="<?php echo htmlspecialchars($_REQUEST['page'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="action" value="<?php echo htmlspecialchars($_REQUEST['action'], ENT_QUOTES, 'UTF-8', true);?>
">
  <input type="hidden" name="id" value="<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['id'];?>
">
  <input type="hidden" name="do" value="save">
  <table class="tablesorter" cellspacing="0">
    <tr>
      <th>Active</th>
      <td>
        <input type="hidden" name="active" value="0" />
        <input type="checkbox" name="active" value="1" id="active" <?php if ($_smarty_tpl->tpl_vars['NEWS']->value['active']) {?>checked<?php }?> />
        <label for="active"></label>
      </td>
    </tr>
    <tr>
      <th>Header</th>
      <td><input name="header" type="text" size="30" value="<?php echo $_smarty_tpl->tpl_vars['NEWS']->value['header'];?>
" required /></td>
    </tr>
    <tr>
      <th>Content</th>
      <td><textarea class="cleditor" name="content" rows="15" cols="150" type="text" required><?php echo $_smarty_tpl->tpl_vars['NEWS']->value['content'];?>
</textarea></td>
    </tr>
  </table>
   <footer>
    <div class="submit_link">
      <input type="submit" value="Save" class="alt_btn">
    </div>
  </footer> 
</form>
</article>
<?php }} ?>

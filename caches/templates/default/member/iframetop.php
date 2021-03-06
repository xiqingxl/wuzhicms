<?php defined('IN_WZ') or exit('No direct script access allowed'); ?><!--top-->
<nav class="navbar   navbar-static-side " role="navigation" style="margin-bottom: 8px;width: 100%">
    <div class="container-fluid  ie8-member">
        <div class="navbar-header">
            <a class="navbar-brand" href="#"><strong  class="zw-member-c">会员中心</strong>  <span class="en-member-c">/  Member Center</span></a>

        </div>
        <ul class="nav navbar-top-links navbar-right">
            <li class="dropdown">

                <a class="dropdown-toggle count-info"
                   data-toggle="dropdown"
                   href="#"><img src="<?php echo avatar($this->uid, 180);?>"
                                 class="avatar"> <?php if($memberinfo['username']==$memberinfo['mobile']) { ?><span>您还没有名字，<br><a
                        href="?m=member&f=index&v=set_username"
                        style="border-bottom: 1px dotted #f0ad4e;">起一个名字吧？</a></span><?php } else { ?><i class="memberusericon"></i><span><?php echo $memberinfo['username'];?></span><?php } ?> &nbsp;<span
                        class="caret"></span> </a>
                <ul role="menu" class="dropdown-menu dropdown-menu-right">
                    <li class="J_tabShowActive"><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=profile"
                                                   onclick="hide_menu(this)">帐号设置</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll"><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=account_safe"

                                                 onclick="hide_menu(this)">帐号安全</a>
                    </li>
                    <li class="J_tabCloseAll"><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=edit_password"
                                                 onclick="hide_menu(this)">修改密码</a>
                    </li>
                    <li class="J_tabCloseAll"><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=avatar"
                                                 onclick="hide_menu(this)">设置头像</a>
                    </li>
                    <li class="divider"></li>
                    <li class="J_tabCloseAll">
                        <a href="<?php echo WEBURL;?>index.php?m=member&v=logout"><i class="fa fa fa-sign-out"></i> &nbsp;退出</a>
                    </li>
                </ul>
            </li>
            <li class="dropdown hide" id="msg_tips">
                <a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
                    <i class="fa fa-envelope"></i> <span class="label label-warning" id="total_tips">0</span>
                </a>
                <ul class="dropdown-menu dropdown-alerts">
                    <li>
                        <a href="index.php?m=message&f=message&v=sys_listing" id="sys_msg_i" class="J_menuItem">
                            <div>
                                <i class="fa fa-volume-up"></i> 您有 <span id="sys_msg_tips">0</span> 条系统未读消息
                            </div>
                        </a>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href="index.php?m=message&f=message&v=listing" id="my_msg_i" class="J_menuItem">
                            <div>
                                <i class="fa fa-envelope fa-fw"></i> 您有 <span id="my_msg_tips">0</span> 条新回复
                            </div>
                        </a>
                    </li>

                </ul>
            </li>
            <li class="dropdown hidden-xs">

            </li>
        </ul>
    </div>
</nav>



<!--
<div class="container-fluid  ie8-member">
	&lt;!&ndash;top&ndash;&gt;
	<div class="row border-bottom" style="margin-bottom: 15px">
		<div class="col-sm-12">
			<nav class="navbar navbar-static-top" role="navigation" style="margin-bottom: 0">
				<div class="navbar-header">
					<a class=" minimalize-styl-2" href="#" style="font-size: 24px; color: #243544;"><strong>会员中心</strong>
						<span style=" color: #4f7080; font-size: 16px;  font-family: 'Times New Roman', Helvetica, Arial, sans-serif">/  Member Center</span>
					</a>
				</div>
				<ul class="nav navbar-top-links navbar-right">
					<li class="dropdown">

						<a class="dropdown-toggle count-info"
								data-toggle="dropdown"
								href="#"><img src="<?php echo avatar($this->uid, 180);?>"
								class="avatar"> <?php if($memberinfo['username']==$memberinfo['mobile']) { ?><span>您还没有名字，<br><a
								href="?m=member&f=index&v=set_username"
								style="border-bottom: 1px dotted #f0ad4e;">起一个名字吧？</a></span><?php } else { ?><i class="memberusericon"></i><span><?php echo $memberinfo['username'];?></span><?php } ?> &nbsp;<span
								class="caret"></span> </a>
						<ul role="menu" class="dropdown-menu dropdown-menu-right">
							<li class="J_tabShowActive"><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=profile"
									onclick="hide_menu(this)">帐号设置</a>
							</li>
							<li class="divider"></li>
							<li class="J_tabCloseAll"><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=account_safe"
									
									onclick="hide_menu(this)">帐号安全</a>
							</li>
							<li class="J_tabCloseAll"><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=edit_password"
									onclick="hide_menu(this)">修改密码</a>
							</li>
							<li class="J_tabCloseAll"><a href="<?php echo WEBURL;?>index.php?m=member&f=index&v=avatar"
									onclick="hide_menu(this)">设置头像</a>
							</li>
							<li class="divider"></li>
							<li class="J_tabCloseAll">
								<a href="<?php echo WEBURL;?>index.php?m=member&v=logout"><i class="fa fa fa-sign-out"></i> &nbsp;退出</a>
							</li>
						</ul>
					</li>
					<li class="dropdown hide" id="msg_tips">
						<a class="dropdown-toggle count-info" data-toggle="dropdown" href="#">
							<i class="fa fa-envelope"></i> <span class="label label-warning" id="total_tips">0</span>
						</a>
						<ul class="dropdown-menu dropdown-alerts">
							<li>
								<a href="index.php?m=message&f=message&v=sys_listing" id="sys_msg_i" class="J_menuItem">
									<div>
										<i class="fa fa-volume-up"></i> 您有 <span id="sys_msg_tips">0</span> 条系统未读消息
									</div>
								</a>
							</li>
							<li class="divider"></li>
							<li>
								<a href="index.php?m=message&f=message&v=listing" id="my_msg_i" class="J_menuItem">
									<div>
										<i class="fa fa-envelope fa-fw"></i> 您有 <span id="my_msg_tips">0</span> 条新回复
									</div>
								</a>
							</li>

						</ul>
					</li>
					<li class="dropdown hidden-xs">

					</li>
				</ul>

			</nav>
		</div>

	</div>
</div>-->

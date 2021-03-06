<?php $root = Yii::app()->request->hostInfo; ?>
<div style="width:100%;height:100%;position:relative;">
	<table class="main_list_table">
		<tr>
			<td>ID</td>
			<td>姓名</td>
			<td>微信号</td>
			<td>二维码</td>
			<td>简介</td>
			<td>性别</td>
			<td>创建时间</td>
			<td>更新时间</td>
			<td>操作</td>
		</tr>
		<?php if(!empty($data)){ 
			foreach ($data as $key => $value) { ?>
			<tr>
				<td><?php echo $value['id'] ?></td>
				<td><?php echo $value['name'] ?></td>
				<td><?php echo $value['user_wx'] ?></td>
				<td>
				<img src="<?php echo $root.'/images/upload/'.substr($value['created'], 0,10).'/'.$value['user_img']; ?>"/>
				</td>
				<td><?php echo $value['info'] ?></td>
				<td><?php echo $value['sex'] ?></td>
				<td><?php echo $value['created'] ?></td>
				<td><?php echo $value['updated'] ?></td>
				<td>
					<a class="user_access" href="javascript:;" data-id="<?php echo $value['id']; ?>" data-status="1">通过</a>|
					<a class="user_access" href="javascript:;"  data-id="<?php echo $value['id']; ?>" data-status="2">不通过</a>|
				</td>
			</tr>	

		<?php }}else{ ?>
		<tr><td colspan="9">查无相应记录</td></tr>
		<?php } ?>
	</table>
	<div style="width:100%;height:100px;text-align:center;line-height:100px;">
		<?php 
			$prev_page = $page-1>1 ? $page-1 : 1;
			$next_page = $page+1<$pages ? $page+1 : $pages;
		 ?>
		<a href="<?php echo $this->createUrl("index",array('page'=>1)); ?>">首页</a>
		<a href="<?php echo $this->createUrl("index",array('page'=>$prev_page)); ?>">上一页</a>
		<a href="<?php echo $this->createUrl("index",array('page'=>$next_page)); ?>">下一页</a>
		<a href="<?php echo $this->createUrl("index",array('page'=>$pages)); ?>">尾页</a>
		&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<span><?php echo '第'.$page.'/'.$pages.'页'; ?></span>
	</div>
</div>
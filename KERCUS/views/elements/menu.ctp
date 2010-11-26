		<div class="box">
			<ul id="ldd_menu" class="ldd_menu">
				<?php foreach($menus as $m){?>
				<?php 	if($m['MenusParent']['id']==''){ ?> 
					<li>
						<span><?php echo $m['Menus']['titulo'];?></span>
						<div class="ldd_submenu">
				<?php 		foreach($menus as $m2){?>
				<?php 			if($m2['MenusParent']['id']==$m['Menus']['id'] && $m2['Menus']['foot']=='No'){ ?>
							<ul>
								<li class="ldd_heading"><?php echo $m2['Menus']['titulo'];?></li>
				<?php 				foreach($menus as $m3){?>
				<?php 					if($m3['MenusParent']['id']==$m2['Menus']['id'] && $m3['Menus']['foot']=='No'){ ?>
								<li>
				<?php 						echo $this->Html->link(__($m3['Menus']['titulo'], true), array('controller'=>$m3['Menus']['controlador'], 'action'=>$m3['Menus']['accion']),array('title'=>$m3['Menus']['titulo'],'class'=>'menuCore')); ?></li>
				<?php 					}?>
				<?php 				}?>
							</ul>
				<?php 			}?>
				<?php 		}?>
				<?php		foreach($menus as $m4){?>
				<?php			if($m4['MenusParent']['id']==$m['Menus']['id'] && $m4['Menus']['foot']=='Yes'){ ?>
							<a class="ldd_subfoot" href="#"> + <?php echo $m4['Menus']['titulo'];?></a>
				<?php			}?>
				<?php 		}?>
						</div>
				<?php 	}?>
					</li>
				<?php }?>
			</ul>
		</div>
		
<div id="quickbar-wrapper" class="quickbar-wrapper">
    <div class="quickbar">
        <ul>
 			[[++quickbar.dashboard:is=`1`:then=`<li><a href="[[+mgr_url]]" target="_blank"><i class="fa fa-dashboard fa-lg"></i> Dashboard</a></li>`]]
			[[++quickbar.create:is=`1`:then=`<li><a href="[[!createNewLink]]" target="_blank"><i class="fa fa-plus fa-lg"></i> Create Here</a></li>`]]
 			<li><a href="[[+mgr_url]]?a=resource/update&id=[[*id]]" target="_blank"><i class="fa fa-edit fa-lg"></i> Edit Resource</a></li>
			[[[[++quickbar.help:is=`1`:then=`++quickbar.helplink:notempty=`<li class="help"><a href="[[+quickbar.helplink]]" target="[[+quickbar.helptarget]]"><i class="fa fa-help fa-lg"></i> Help</a></li>``]]]]
			
    	</ul>
    </div>
</div>

<div id="quickbar-wrapper" class="quickbar-wrapper">
    <div class="quickbar">
        <ul>
        	<li><a href="[[+mgr_url]]?a=30&id=[[*id]]" target="_blank">Edit Resource</a></li>
			[[++quickbar.dashboard:is=`1`:then=`<li><a href="[[+mgr_url]]" target="_blank">Dashboard</a></li>`]]
			[[++quickbar.create:is=`1`:then=`<li><a href="[[!createNewLink]]" target="_blank">Create Here</a></li>`]]
			[[[[++quickbar.help:is=`1`:then=`++quickbar.helplink:notempty=`<li class="help"><a href="[[+quickbar.helplink]]" target="[[+quickbar.helptarget]]">Help</a></li>``]]]]
			
    	</ul>
    </div>
</div>
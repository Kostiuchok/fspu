<!-- Main nav -->
<ul class="nav">
  <li><a href="<?=site_url('admin/news')?>" title="" <?=($this->uri->segment(2)=='news')?'class="active"':'';?>><img src="<?=base_url()?>img/admin/icons/mainnav/forms.png" alt="" /><span>Новини</span></a></li>
  <li><a href="<?=site_url('admin/smi')?>" title="" <?=($this->uri->segment(2)=='smi')?'class="active"':'';?>><img src="<?=base_url()?>img/admin/icons/mainnav/forms.png" alt="" /><span>ЗМІ</span></a></li>
  <li><a href="<?=site_url('admin/federation')?>" title="" <?=($this->uri->segment(2)=='federation')?'class="active"':'';?>><img src="<?=base_url()?>img/admin/icons/mainnav/ui.png" alt="" /><span>Участники Федерації</span></a></li>
</ul>
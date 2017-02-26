<?php

function view($page, $data=''){
	$ci =& get_instance();

	//session
	$data['fullname'] = @$ci->session->userdata['fullname'];
	$data['type'] = @strtoupper($ci->session->userdata['type']);
	$data['title'] = @$data['title'];
	//img
	$data['img_avatar'] = base_url('assets/img/avatar.png');
	//css
	$data['css_bs'] = base_url('assets/css/bootstrap.min.css');
	$data['css_fa'] = base_url('assets/css/font-awesome.min.css');
	$data['css_alt'] = base_url('assets/css/AdminLTE.min.css');
	$data['css_skin'] = base_url('assets/css/skins/skin-blue.min.css');
	$data['css_style'] = base_url('assets/css/style.css');
	//js
	$data['js_jq'] = base_url('assets/js/jQuery-2.1.4.min.js');
	$data['js_bs'] = base_url('assets/js/bootstrap.min.js');
	$data['js_app'] = base_url('assets/js/app.min.js');
	//plugin
	$data['js_slimscroll'] = base_url('assets/plugin/slimscroll/jquery.slimscroll.min.js');

	//link - general
	$data['l_home'] = site_url('home');
	$data['l_logout'] = site_url('account/logout');
	//link - sidebar
	$data['l_inputbap'] = site_url('baprps/input_bap');
	$data['l_verifbap'] = site_url('baprps/verif_bap');
	$data['l_inputrps'] = site_url('baprps/input_rps');
	$data['l_lihatrps'] = site_url('baprps/lihat_rps');
	$data['l_grafik'] = site_url('baprps/grafik');
	$data['l_forum'] = site_url('baprps/forum');

	$data['l_inputrps1'] = site_url('detailrps/input_rps');
	$data['l_inputmetode'] = site_url('detailrps/inputmetode');
	$data['l_showdata'] = site_url('detailrps/showdata');
	$data['l_comparedosen'] = site_url('detailrps/comparedosen');
	$data['l_grafikdantabel'] = site_url('detailrps/grafik_tabel');
	$data['l_forum1'] = site_url('detailrps/forum');

	$ci->parser->parse('header',$data);
	$ci->parser->parse($page, $data);
}
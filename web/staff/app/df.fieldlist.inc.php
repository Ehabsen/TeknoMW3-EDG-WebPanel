<?php
//==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>==>>>
//
// Address Book Script v1.18 [G110]
// Copyright (c) phpkobo.com ( http://www.phpkobo.com/ )
// Email : admin@phpkobo.com
// ID : AB201-118 [G110]
// URL : http://www.phpkobo.com/address_book.php
//
// This software is free software; you can redistribute it and/or
// modify it under the terms of the GNU General Public License
// as published by the Free Software Foundation; version 2 of the
// License.
//
//==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<==<<<


$spec = array(

'staff' => array(
XA_CLASS=>'cls_fl_staff',
XA_SPEC_FILE=>'df.fl.staff.inc.php',
XA_TABLE_NAME=>TBL_STAFF,
XA_ID_NAME=>'staff_id',
XA_INIT_ORDER_BY=>'staff_id ASC',
XA_INIT_PAGE_SIZE=>20
),

'addresses' => array(
XA_CLASS=>'cls_fl_addresses',
XA_SPEC_FILE=>'df.fl.addresses.inc.php',
XA_TABLE_NAME=>TBL_ADDRESSES,
XA_ID_NAME=>'addresses_id',
XA_INIT_ORDER_BY=>'addresses_id DESC',
XA_INIT_PAGE_SIZE=>20
),

);

?>
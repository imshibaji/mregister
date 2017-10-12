@extends('layouts.sub-base',['top_menus' =>[
  'users'=>url('admin/users'),
  'settings'=> url('admin/settings'),
  'facebook'=>'http://www.facebook.com',
  'Leads'=> url('test/leads'),
],
'update_menus' =>[
  ['name'=>'Chat', 'link'=>url('admin/dashboard/chat'), 'badge'=>23, 'icon'=>'fa fa-comments-o'],
  ['name'=>'Comments', 'link'=>url('admin/dashboard/comments'), 'icon'=>'fa fa-commenting-o', 'badge'=>2]
]
])

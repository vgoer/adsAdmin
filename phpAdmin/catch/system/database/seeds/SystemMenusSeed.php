<?php
// +----------------------------------------------------------------------
// | CatchAdmin [Just Like ～ ]
// +----------------------------------------------------------------------
// | Copyright (c) 2017~{$year} http://catchadmin.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( https://github.com/yanwenwu/catch-admin/blob/master/LICENSE.txt )
// +----------------------------------------------------------------------
// | Author: JaguarJack [ njphper@gmail.com ]
// +----------------------------------------------------------------------

use think\migration\Seeder;

class SystemMenusSeed extends Seeder
{
    /**
     * Run Method.
     *
     * Write your database seeder using this method.
     *
     * More information on writing seeders is available here:
     * http://docs.phinx.org/en/latest/seeding.html
     */
    public function run()
    {
        \catcher\Utils::importTreeData($this->getPermissions(), 'permissions', 'parent_id');
    }

    protected function getPermissions()
    {
       return array (
  0 => 
  array (
    'id' => 38,
    'permission_name' => '系统管理',
    'parent_id' => 0,
    'level' => '',
    'route' => '/system',
    'icon' => 'el-icon-s-tools',
    'module' => 'system',
    'creator_id' => 1,
    'permission_mark' => 'system',
    'component' => 'layout',
    'redirect' => 'attactments',
    'keepalive' => 2,
    'type' => 1,
    'hidden' => 1,
    'sort' => 1,
    'created_at' => 1587462349,
    'updated_at' => 1599288737,
    'deleted_at' => 0,
    'children' => 
    array (
      0 => 
      array (
        'id' => 39,
        'permission_name' => '数据字典',
        'parent_id' => 38,
        'level' => '38',
        'route' => '/system/database',
        'icon' => 'el-icon-copy-document',
        'module' => 'system',
        'creator_id' => 1,
        'permission_mark' => 'dataDictionary',
        'component' => 'database',
        'redirect' => '',
        'keepalive' => 1,
        'type' => 1,
        'hidden' => 1,
        'sort' => 8,
        'created_at' => 1587463087,
        'updated_at' => 1599362678,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 40,
            'permission_name' => '查看',
            'parent_id' => 39,
            'level' => '38-39',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'dataDictionary@view',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587463113,
            'updated_at' => 1599362691,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 41,
            'permission_name' => '列表',
            'parent_id' => 39,
            'level' => '38-39',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'dataDictionary@tables',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 10,
            'created_at' => 1587463173,
            'updated_at' => 1599362678,
            'deleted_at' => 0,
          ),
          2 => 
          array (
            'id' => 42,
            'permission_name' => '优化',
            'parent_id' => 39,
            'level' => '38-39',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'dataDictionary@optimize',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587463201,
            'updated_at' => 1599362678,
            'deleted_at' => 0,
          ),
          3 => 
          array (
            'id' => 43,
            'permission_name' => '备份',
            'parent_id' => 39,
            'level' => '38-39',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'optimize@backup',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587463217,
            'updated_at' => 1599362678,
            'deleted_at' => 0,
          ),
        ),
      ),
      1 => 
      array (
        'id' => 44,
        'permission_name' => '附件管理',
        'parent_id' => 38,
        'level' => '38',
        'route' => '/system/attactments',
        'icon' => 'el-icon-folder-opened',
        'module' => 'system',
        'creator_id' => 1,
        'permission_mark' => 'attactments',
        'component' => 'attachment',
        'redirect' => '',
        'keepalive' => 1,
        'type' => 1,
        'hidden' => 1,
        'sort' => 10,
        'created_at' => 1587463302,
        'updated_at' => 1599288737,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 45,
            'permission_name' => '列表',
            'parent_id' => 44,
            'level' => '38-44',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'attachments@index',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587463335,
            'updated_at' => 1599217559,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 46,
            'permission_name' => '删除',
            'parent_id' => 44,
            'level' => '38-44',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'attachments@delete',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587463355,
            'updated_at' => 1599217559,
            'deleted_at' => 0,
          ),
          2 => 
          array (
            'id' => 47,
            'permission_name' => '上传图片',
            'parent_id' => 44,
            'level' => '38-44',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'upload@image',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587466919,
            'updated_at' => 1599217559,
            'deleted_at' => 0,
          ),
          3 => 
          array (
            'id' => 48,
            'permission_name' => '上传文件',
            'parent_id' => 44,
            'level' => '38-44',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'upload@file',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587466939,
            'updated_at' => 1599217559,
            'deleted_at' => 0,
          ),
        ),
      ),
      2 => 
      array (
        'id' => 49,
        'permission_name' => '配置管理',
        'parent_id' => 38,
        'level' => '38',
        'route' => '/system/config',
        'icon' => 'el-icon-setting',
        'module' => 'system',
        'creator_id' => 1,
        'permission_mark' => 'config',
        'component' => 'config',
        'redirect' => '',
        'keepalive' => 1,
        'type' => 1,
        'hidden' => 1,
        'sort' => 9,
        'created_at' => 1587466991,
        'updated_at' => 1599288737,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 50,
            'permission_name' => '父级配置',
            'parent_id' => 49,
            'level' => '38-49',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'config@parent',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587467036,
            'updated_at' => 1591345651,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 51,
            'permission_name' => '存储',
            'parent_id' => 49,
            'level' => '38-49',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'config@save',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587467052,
            'updated_at' => 1587547118,
            'deleted_at' => 0,
          ),
          2 => 
          array (
            'id' => 52,
            'permission_name' => '获取',
            'parent_id' => 49,
            'level' => '38-49',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'config@read',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587467062,
            'updated_at' => 1587547118,
            'deleted_at' => 0,
          ),
        ),
      ),
      3 => 
      array (
        'id' => 53,
        'permission_name' => '登陆日志',
        'parent_id' => 38,
        'level' => '38',
        'route' => '/system/log/login',
        'icon' => 'el-icon-coin',
        'module' => 'system',
        'creator_id' => 1,
        'permission_mark' => 'loginLog',
        'component' => 'loginLog',
        'redirect' => '',
        'keepalive' => 1,
        'type' => 1,
        'hidden' => 1,
        'sort' => 5,
        'created_at' => 1587467150,
        'updated_at' => 1599288737,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 54,
            'permission_name' => '列表',
            'parent_id' => 53,
            'level' => '38-53',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'loginlog@list',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587467206,
            'updated_at' => 1587547118,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 55,
            'permission_name' => '清空',
            'parent_id' => 53,
            'level' => '38-53',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'loginlog@empty',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587467221,
            'updated_at' => 1587547118,
            'deleted_at' => 0,
          ),
        ),
      ),
      4 => 
      array (
        'id' => 56,
        'permission_name' => '操作日志',
        'parent_id' => 38,
        'level' => '38',
        'route' => '/system/log/operate',
        'icon' => 'el-icon-house',
        'module' => 'system',
        'creator_id' => 1,
        'permission_mark' => 'operateLog',
        'component' => 'operateLog',
        'redirect' => '',
        'keepalive' => 1,
        'type' => 1,
        'hidden' => 1,
        'sort' => 1,
        'created_at' => 1587467180,
        'updated_at' => 1599288737,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 57,
            'permission_name' => '列表',
            'parent_id' => 56,
            'level' => '38-56',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'operatelog@list',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587467246,
            'updated_at' => 1587547118,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 58,
            'permission_name' => '清空',
            'parent_id' => 56,
            'level' => '38-56',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'operatelog@empty',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1587467266,
            'updated_at' => 1587547118,
            'deleted_at' => 0,
          ),
        ),
      ),
      5 => 
      array (
        'id' => 59,
        'permission_name' => '代码生成',
        'parent_id' => 38,
        'level' => '38',
        'route' => '/system/generate',
        'icon' => 'el-icon-scissors',
        'module' => 'system',
        'creator_id' => 1,
        'permission_mark' => 'generate',
        'component' => 'generate',
        'redirect' => '',
        'keepalive' => 1,
        'type' => 1,
        'hidden' => 1,
        'sort' => 1,
        'created_at' => 1587717452,
        'updated_at' => 1599288737,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 60,
            'permission_name' => '生成',
            'parent_id' => 59,
            'level' => '38-59',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'generate@save',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1588110923,
            'updated_at' => 1599217574,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 61,
            'permission_name' => '预览',
            'parent_id' => 59,
            'level' => '38-59',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'generate@preview',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1588110962,
            'updated_at' => 1599217574,
            'deleted_at' => 0,
          ),
        ),
      ),
      6 => 
      array (
        'id' => 62,
        'permission_name' => '敏感词库',
        'parent_id' => 38,
        'level' => '38',
        'route' => '/sensitive/word',
        'icon' => 'el-icon-folder-delete',
        'module' => 'system',
        'creator_id' => 1,
        'permission_mark' => 'sensitiveWord',
        'component' => 'sensitiveWord',
        'redirect' => '',
        'keepalive' => 1,
        'type' => 1,
        'hidden' => 1,
        'sort' => 1,
        'created_at' => 1592375865,
        'updated_at' => 1599288737,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 63,
            'permission_name' => '列表',
            'parent_id' => 62,
            'level' => '38-62',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'sensitiveWord@index',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1592382167,
            'updated_at' => 1593589434,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 64,
            'permission_name' => '新增',
            'parent_id' => 62,
            'level' => '38-62',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'sensitiveWord@save',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1592382179,
            'updated_at' => 1593589434,
            'deleted_at' => 0,
          ),
          2 => 
          array (
            'id' => 65,
            'permission_name' => '更新',
            'parent_id' => 62,
            'level' => '38-62',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'sensitiveWord@update',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1592382192,
            'updated_at' => 1593589434,
            'deleted_at' => 0,
          ),
          3 => 
          array (
            'id' => 66,
            'permission_name' => '删除',
            'parent_id' => 62,
            'level' => '38-62',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'sensitiveWord@delete',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1592382202,
            'updated_at' => 1593589434,
            'deleted_at' => 0,
          ),
        ),
      ),
      7 => 
      array (
        'id' => 67,
        'permission_name' => '开发者',
        'parent_id' => 38,
        'level' => '38',
        'route' => '/system/develop',
        'icon' => 'el-icon-rank',
        'module' => 'system',
        'creator_id' => 1,
        'permission_mark' => 'develop',
        'component' => 'develop',
        'redirect' => '',
        'keepalive' => 1,
        'type' => 1,
        'hidden' => 1,
        'sort' => 1,
        'created_at' => 1594626307,
        'updated_at' => 1599288737,
        'deleted_at' => 0,
      ),
      8 => 
      array (
        'id' => 68,
        'permission_name' => '模块管理',
        'parent_id' => 38,
        'level' => '38',
        'route' => '/system/module',
        'icon' => 'el-icon-postcard',
        'module' => 'system',
        'creator_id' => 1,
        'permission_mark' => 'module',
        'component' => 'module',
        'redirect' => '',
        'keepalive' => 1,
        'type' => 1,
        'hidden' => 1,
        'sort' => 1,
        'created_at' => 1599904306,
        'updated_at' => 1599904306,
        'deleted_at' => 0,
        'children' => 
        array (
          0 => 
          array (
            'id' => 69,
            'permission_name' => '列表',
            'parent_id' => 68,
            'level' => '38-68',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'module@index',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1599904319,
            'updated_at' => 1599904319,
            'deleted_at' => 0,
          ),
          1 => 
          array (
            'id' => 70,
            'permission_name' => '禁用/启用',
            'parent_id' => 68,
            'level' => '38-68',
            'route' => '',
            'icon' => '',
            'module' => 'system',
            'creator_id' => 1,
            'permission_mark' => 'module@disOrEnable',
            'component' => '',
            'redirect' => '',
            'keepalive' => 1,
            'type' => 2,
            'hidden' => 1,
            'sort' => 1,
            'created_at' => 1599904331,
            'updated_at' => 1599904331,
            'deleted_at' => 0,
          ),
        ),
      )
    ),
  ),
);
    }
}

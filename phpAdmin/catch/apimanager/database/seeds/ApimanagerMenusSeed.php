<?php
// +----------------------------------------------------------------------
// | UCToo [ Universal Convergence Technology ]
// +----------------------------------------------------------------------
// | Copyright (c) 2014-2021 https://www.uctoo.com All rights reserved.
// +----------------------------------------------------------------------
// | Licensed ( http://www.apache.org/licenses/LICENSE-2.0 )
// +----------------------------------------------------------------------
// | Author: UCToo <contact@uctoo.com>
// +----------------------------------------------------------------------

use think\migration\Seeder;

class ApimanagerMenusSeed extends Seeder {
	/**
	 * Run Method.
	 *
	 * Write your database seeder using this method.
	 *
	 * More information on writing seeders is available here:
	 * http://docs.phinx.org/en/latest/seeding.html
	 */
	public function run() {
		\catcher\Utils::importTreeData($this->getPermissions(), 'permissions', 'parent_id');
	}

	protected function getPermissions() {
		return [
			0 => [
				'id'              => 143,
				'permission_name' => 'API管理',
				'parent_id'       => 0,
				'level'           => '',
				'route'           => '/apimanager',
				'icon'            => 'el-icon-sort',
				'module'          => 'apimanager',
				'creator_id'      => 1,
				'permission_mark' => 'apimanager',
				'component'       => 'layout',
				'redirect'        => '',
				'keepalive'       => 1,
				'type'            => 1,
				'hidden'          => 1,
				'sort'            => 1,
				'created_at'      => 1621425807,
				'updated_at'      => 1621427128,
				'deleted_at'      => 0,
				'children'        => [
					0 => [
						'id'              => 144,
						'permission_name' => 'API分类',
						'parent_id'       => 143,
						'level'           => '',
						'route'           => '/apicategory',
						'icon'            => 'el-icon-s-grid',
						'module'          => 'apimanager',
						'creator_id'      => 1,
						'permission_mark' => 'apicategory',
						'component'       => 'apicategory',
						'redirect'        => '',
						'keepalive'       => 1,
						'type'            => 1,
						'hidden'          => 1,
						'sort'            => 10,
						'created_at'      => 1621413029,
						'updated_at'      => 1624010103,
						'deleted_at'      => 0,
						'children'        => [
							0 => [
								'id'              => 151,
								'permission_name' => '列表',
								'parent_id'       => 144,
								'level'           => '',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'apicategory@index',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1621779121,
								'updated_at'      => 1624010103,
								'deleted_at'      => 0,
							],
							1 => [
								'id'              => 152,
								'permission_name' => '创建',
								'parent_id'       => 144,
								'level'           => '',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'apicategory@save',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1621779137,
								'updated_at'      => 1624010103,
								'deleted_at'      => 0,
							],
							2 => [
								'id'              => 153,
								'permission_name' => '更新',
								'parent_id'       => 144,
								'level'           => '',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'apicategory@update',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1621779154,
								'updated_at'      => 1624010103,
								'deleted_at'      => 0,
							],
							3 => [
								'id'              => 154,
								'permission_name' => '读取',
								'parent_id'       => 144,
								'level'           => '',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'apicategory@read',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1621779171,
								'updated_at'      => 1624010103,
								'deleted_at'      => 0,
							],
							4 => [
								'id'              => 155,
								'permission_name' => '删除',
								'parent_id'       => 144,
								'level'           => '',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'apicategory@delete',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1621779186,
								'updated_at'      => 1624010103,
								'deleted_at'      => 0,
							],
						],
					],
					1 => [
						'id'              => 145,
						'permission_name' => 'API测试列表',
						'parent_id'       => 143,
						'level'           => '',
						'route'           => '/apitester',
						'icon'            => 'el-icon-stopwatch',
						'module'          => 'apimanager',
						'creator_id'      => 1,
						'permission_mark' => 'apitester',
						'component'       => 'apitester',
						'redirect'        => '',
						'keepalive'       => 1,
						'type'            => 1,
						'hidden'          => 1,
						'sort'            => 1,
						'created_at'      => 1621479275,
						'updated_at'      => 1624010086,
						'deleted_at'      => 0,
						'children'        => [
							0 => [
								'id'              => 146,
								'permission_name' => '列表',
								'parent_id'       => 145,
								'level'           => '',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'apitester@index',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1621778966,
								'updated_at'      => 1624010086,
								'deleted_at'      => 0,
							],
							1 => [
								'id'              => 147,
								'permission_name' => '创建',
								'parent_id'       => 145,
								'level'           => '',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'apitester@save',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1621779011,
								'updated_at'      => 1624010086,
								'deleted_at'      => 0,
							],
							5 => [
								'id'              => 148,
								'permission_name' => '更新',
								'parent_id'       => 145,
								'level'           => '',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'apitester@update',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1621779033,
								'updated_at'      => 1624010086,
								'deleted_at'      => 0,
							],
							2 => [
								'id'              => 149,
								'permission_name' => '读取',
								'parent_id'       => 145,
								'level'           => '',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'apitester@read',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1621779051,
								'updated_at'      => 1624010086,
								'deleted_at'      => 0,
							],
							3 => [
								'id'              => 150,
								'permission_name' => '删除',
								'parent_id'       => 145,
								'level'           => '',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'apitester@delete',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1621779083,
								'updated_at'      => 1624010086,
								'deleted_at'      => 0,
							],
						],
					],
					2 => [
						'id'              => 156,
						'permission_name' => 'API运行',
						'parent_id'       => 143,
						'level'           => '',
						'route'           => '/apimanager/apirun',
						'icon'            => 'el-icon-position',
						'module'          => 'apimanager',
						'creator_id'      => 1,
						'permission_mark' => 'apirun',
						'component'       => 'apirun',
						'redirect'        => '',
						'keepalive'       => 1,
						'type'            => 1,
						'hidden'          => 2,
						'sort'            => 1,
						'created_at'      => 1621798022,
						'updated_at'      => 1621831249,
						'deleted_at'      => 0,
					],
					3 => [
						'id'              => 161,
						'permission_name' => 'API环境变量',
						'parent_id'       => 143,
						'level'           => '',
						'route'           => '/apienv',
						'icon'            => 'el-icon-setting',
						'module'          => 'apimanager',
						'creator_id'      => 1,
						'permission_mark' => 'apienv',
						'component'       => 'apienv',
						'redirect'        => '',
						'keepalive'       => 1,
						'type'            => 1,
						'hidden'          => 1,
						'sort'            => 1,
						'created_at'      => 1622176953,
						'updated_at'      => 1622177106,
						'deleted_at'      => 0,
					],
					4 => [
						'id'              => 281,
						'permission_name' => '路由列表',
						'parent_id'       => 143,
						'level'           => '143',
						'route'           => '/apimanager/routeList/curd',
						'icon'            => 'el-icon-link',
						'module'          => 'apimanager',
						'creator_id'      => 1,
						'permission_mark' => 'routeList',
						'component'       => 'apimanager_routeList',
						'redirect'        => '',
						'keepalive'       => 1,
						'type'            => 1,
						'hidden'          => 1,
						'sort'            => 0,
						'created_at'      => 1636624116,
						'updated_at'      => 1636689266,
						'deleted_at'      => 0,
						'children'        => [
							0 => [
								'id'              => 282,
								'permission_name' => '列表',
								'parent_id'       => 281,
								'level'           => '143-281',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'routeList@index',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1636624117,
								'updated_at'      => 1636689266,
								'deleted_at'      => 0,
							],
							1 => [
								'id'              => 283,
								'permission_name' => '保存',
								'parent_id'       => 281,
								'level'           => '143-281',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'routeList@save',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1636624117,
								'updated_at'      => 1636689266,
								'deleted_at'      => 0,
							],
							2 => [
								'id'              => 284,
								'permission_name' => '读取',
								'parent_id'       => 281,
								'level'           => '143-281',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'routeList@read',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1636624118,
								'updated_at'      => 1636689266,
								'deleted_at'      => 0,
							],
							3 => [
								'id'              => 285,
								'permission_name' => '更新',
								'parent_id'       => 281,
								'level'           => '143-281',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'routeList@update',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1636624118,
								'updated_at'      => 1636689266,
								'deleted_at'      => 0,
							],
							4 => [
								'id'              => 286,
								'permission_name' => '删除',
								'parent_id'       => 281,
								'level'           => '143-281',
								'route'           => '',
								'icon'            => '',
								'module'          => 'apimanager',
								'creator_id'      => 1,
								'permission_mark' => 'routeList@delete',
								'component'       => '',
								'redirect'        => '',
								'keepalive'       => 1,
								'type'            => 2,
								'hidden'          => 1,
								'sort'            => 1,
								'created_at'      => 1636624119,
								'updated_at'      => 1636689266,
								'deleted_at'      => 0,
							],
						],
					],
				],
			],
		];
	}
}

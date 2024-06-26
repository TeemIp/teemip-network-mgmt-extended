<?php
/*
 * @copyright   Copyright (C) 2010-2024 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//////////////////////////////////////////////////////////////////////
// Classes in 'teemip-network-mgmt-extended Module'
//////////////////////////////////////////////////////////////////////
//

//
// Class: 接口连接器
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:InterfaceConnector' => '接口连接器',
    'Class:InterfaceConnector+' => '网络接口使用的连接器',
    'Class:InterfaceConnector/Attribute:description' => '描述',
    'Class:InterfaceConnector/Attribute:description+' => '',
    'Class:InterfaceConnector/Attribute:physicalinterfaces_list' => '物理接口',
    'Class:InterfaceConnector/Attribute:physicalinterfaces_list+' => '使用该连接器的物理接口',
));

//
// Class: 第 2 层协议
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:Layer2Protocol' => '二层协议',
    'Class:Layer2Protocol+' => '网络接口使用的二层协议',
    'Class:Layer2Protocol/Attribute:description' => '描述',
    'Class:Layer2Protocol/Attribute:description+' => '',
    'Class:Layer2Protocol/Attribute:ipinterfaces_list' => '网络接口',
    'Class:Layer2Protocol/Attribute:ipinterfaces_list+' => '使用该协议的网络接口',
));

//
// Class: 接口速度
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:InterfaceSpeed' => '接口速度',
    'Class:InterfaceSpeed+' => '网络接口的速度设置',
    'Class:InterfaceSpeed/Attribute:description' => '描述',
    'Class:InterfaceSpeed/Attribute:description+' => '',
    'Class:InterfaceSpeed/Attribute:ipinterfaces_list' => '网络接口',
    'Class:InterfaceSpeed/Attribute:ipinterfaces_list+' => '速度为该值的网络接口',
));

//
// Class: IPInterface
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:IPInterface/Attribute:interfacespeed_id' => '速度',
    'Class:IPInterface/Attribute:interfacespeed_id+' => '接口上可用的最大速度',
    'Class:IPInterface/Attribute:layer2protocol_id' => '协议',
    'Class:IPInterface/Attribute:layer2protocol_id+' => '二层协议',
));

//
// Class: 集群网络
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:ClusterNetwork' => '集群网络',
    'Class:ClusterNetwork+' => '网络设备的硬件组件',
    'Class:ClusterNetwork:baseinfo' => '基本信息',
    'Class:ClusterNetwork:moreinfo' => '更多信息',
    'Class:ClusterNetwork:Date' => '日期',
    'Class:ClusterNetwork:otherinfo' => '其他信息',
    'Class:ClusterNetwork/Attribute:type' => '类型',
    'Class:ClusterNetwork/Attribute:type+' => '',
    'Class:ClusterNetwork/Attribute:type/Value:loadbalancing' => '负载均衡',
    'Class:ClusterNetwork/Attribute:type/Value:loadbalancing+' => '',
    'Class:ClusterNetwork/Attribute:type/Value:highavailability' => '高可用性',
    'Class:ClusterNetwork/Attribute:type/Value:highavailability+' => '',
    'Class:ClusterNetwork/Attribute:type/Value:highperformance' => '高性能',
    'Class:ClusterNetwork/Attribute:type/Value:highperformance+' => '',
    'Class:ClusterNetwork/Attribute:mode' => '模式',
    'Class:ClusterNetwork/Attribute:mode+' => '',
    'Class:ClusterNetwork/Attribute:mode/Value:active_standby' => '主备',
    'Class:ClusterNetwork/Attribute:mode/Value:active_standby+' => '',
    'Class:ClusterNetwork/Attribute:mode/Value:active_passive' => '主备',
    'Class:ClusterNetwork/Attribute:mode/Value:active_passive+' => '',
    'Class:ClusterNetwork/Attribute:mode/Value:active_active' => '主主',
    'Class:ClusterNetwork/Attribute:mode/Value:active_active+' => '',
    'Class:ClusterNetwork/Attribute:status' => '状态',
    'Class:ClusterNetwork/Attribute:status+' => '',
    'Class:ClusterNetwork/Attribute:status/Value:production' => '生产',
    'Class:ClusterNetwork/Attribute:status/Value:production+' => '',
    'Class:ClusterNetwork/Attribute:status/Value:implementation' => '实施',
    'Class:ClusterNetwork/Attribute:status/Value:implementation+' => '',
    'Class:ClusterNetwork/Attribute:networkdevices_list' => '节点',
    'Class:ClusterNetwork/Attribute:networkdevices_list+' => '集群中的所有网络设备列表',
    'Class:ClusterNetwork/Attribute:ips_list' => 'IP地址',
    'Class:ClusterNetwork/Attribute:ips_list+' => '集群使用的所有IP地址列表',
    'Class:ClusterNetwork/Attribute:redundancy' => '高可用性',
    'Class:ClusterNetwork/Attribute:redundancy/disabled' => '如果所有网络设备正常运行，则集群正常',
    'Class:ClusterNetwork/Attribute:redundancy/count' => '如果至少有%1$s个网络设备正常运行，则集群正常',
    'Class:ClusterNetwork/Attribute:redundancy/percent' => '如果至少有%1$s%%的网络设备正常运行，则集群正常',
    'Class:ClusterNetwork/Attribute:replacement_date' => '更换日期',
    'Class:ClusterNetwork/Attribute:replacement_date+' => '设备更换的目标日期',
    'Class:ClusterNetwork/Tab:connectablecis_list' => '设备',
    'Class:ClusterNetwork/Tab:connectablecis_list+' => '连接到此集群网络的所有设备的列表',
));

//
// Class: lnkClusterNetworkToIPAddress
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:lnkClusterNetworkToIPAddress' => '集群网络 / IP地址关联',
    'Class:lnkClusterNetworkToIPAddress+' => '',
    'Class:lnkClusterNetworkToIPAddress/Name' => '%1$s / %2$s',
    'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_id' => '集群网络',
    'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_id+' => '',
    'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_name' => '集群网络名称',
    'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_name+' => '',
    'Class:lnkClusterNetworkToIPAddress/Attribute:ipaddress_id' => 'IP地址',
    'Class:lnkClusterNetworkToIPAddress/Attribute:ipaddress_id+' => '',
    'Class:lnkClusterNetworkToIPAddress/Attribute:usage_id' => '用途',
    'Class:lnkClusterNetworkToIPAddress/Attribute:usage_id+' => '',
));

//
// Class: 网络设备组件
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:NetworkDeviceComponent' => '网络设备组件',
    'Class:NetworkDeviceComponent+' => '网络设备的硬件组件',
    'Class:NetworkDeviceComponent:baseinfo' => '基本信息',
    'Class:NetworkDeviceComponent:moreinfo' => '更多信息',
    'Class:NetworkDeviceComponent:Date' => '日期',
    'Class:NetworkDeviceComponent:otherinfo' => '其他信息',
    'Class:NetworkDeviceComponent/Attribute:networkdevice_id' => '网络设备',
    'Class:NetworkDeviceComponent/Attribute:networkdevice_id+' => '承载该组件的网络设备',
    'Class:NetworkDeviceComponent/Attribute:networkdevice_name' => '网络设备名称',
    'Class:NetworkDeviceComponent/Attribute:networkdevice_name+' => '',
));

//
// Class: 网络设备
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:NetworkDevice/Attribute:clusternetwork_id' => '集群网络',
    'Class:NetworkDevice/Attribute:clusternetwork_id+' => '网络设备所属的集群',
    'Class:NetworkDevice/Attribute:clusternetwork_role' => '集群角色',
    'Class:NetworkDevice/Attribute:clusternetwork_role+' => '设备在集群中的角色',
    'Class:NetworkDevice/Attribute:clusternetwork_role/Value:active' => '活动',
    'Class:NetworkDevice/Attribute:clusternetwork_role/Value:active+' => '',
    'Class:NetworkDevice/Attribute:clusternetwork_role/Value:standby' => '备用',
    'Class:NetworkDevice/Attribute:clusternetwork_role/Value:standby+' => '',
    'Class:NetworkDevice/Attribute:networkdevicecomponents_list' => '组件',
    'Class:NetworkDevice/Attribute:networkdevicecomponents_list+' => '连接到该设备的所有网络设备组件的列表',
    'Class:NetworkDevice/Attribute:aggregatelinks_list' => '聚合链路',
    'Class:NetworkDevice/Attribute:aggregatelinks_list+' => '连接到该设备的所有聚合链路的列表',
    'Class:NetworkDevice/Attribute:snmpcredentials_id' => 'SNMP凭证',
    'Class:NetworkDevice/Attribute:snmpcredentials_id+' => '通过SNMP访问设备时必须使用的凭证',
    'Class:NetworkDevice/Attribute:replacement_date' => '更换日期',
    'Class:NetworkDevice/Attribute:replacement_date+' => '设备更换的目标日期',
));

//
// Class: 模型
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:Model/Attribute:type/Value:NetworkDeviceComponent' => '网络设备组件',
    'Class:Model/Attribute:type/Value:NetworkDeviceComponent+' => '',
));

//
// Class: 聚合链接
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:AggregateLink' => '聚合链路',
    'Class:AggregateLink+' => '将多个网络连接并行组合',
    'Class:AggregateLink:baseinfo' => '基本信息',
    'Class:AggregateLink/Attribute:macaddress' => 'MAC地址',
    'Class:AggregateLink/Attribute:macaddress+' => '',
    'Class:AggregateLink/Attribute:layer2protocol_id' => '协议',
    'Class:AggregateLink/Attribute:layer2protocol_id+' => '第2层协议',
    'Class:AggregateLink/Attribute:status' => '状态',
    'Class:AggregateLink/Attribute:status+' => '',
    'Class:AggregateLink/Attribute:status/Value:active' => '活动',
    'Class:AggregateLink/Attribute:status/Value:active+' => '',
    'Class:AggregateLink/Attribute:status/Value:inactive' => '非活动',
    'Class:AggregateLink/Attribute:status/Value:inactive+' => '',
    'Class:AggregateLink/Attribute:connectableci_id' => '设备',
    'Class:AggregateLink/Attribute:connectableci_id+' => '承载聚合链路的设备',
    'Class:AggregateLink/Attribute:connectableci_name' => '设备名称',
    'Class:AggregateLink/Attribute:connectableci_name+' => '',
    'Class:AggregateLink/Attribute:description' => '描述',
    'Class:AggregateLink/Attribute:description+' => '',
    'Class:AggregateLink/Attribute:peer_id' => '对端聚合链路',
    'Class:AggregateLink/Attribute:peer_id+' => '该链路另一端设备的聚合链路',
    'Class:AggregateLink/Attribute:physicalinterfaces_list' => '物理接口',
    'Class:AggregateLink/Attribute:physicalinterfaces_list+' => '',
));

//
// Class: 物理接口
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:PhysicalInterface/Attribute:interfaceconnector_id' => '连接器',
    'Class:PhysicalInterface/Attribute:interfaceconnector_id+' => '',
    'Class:PhysicalInterface/Attribute:interfaceconnector_name' => '连接器名称',
    'Class:PhysicalInterface/Attribute:interfaceconnector_name+' => '',
    'Class:PhysicalInterface/Attribute:aggregatelink_id' => '聚合链路',
    'Class:PhysicalInterface/Attribute:aggregatelink_id+' => '接口所属的聚合链路',
    'Class:PhysicalInterface/Attribute:aggregatelink_name' => '聚合链路名称',
    'Class:PhysicalInterface/Attribute:aggregatelink_name+' => '',
));

//
// Class: VLAN
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:VLAN:baseinfo' => '基本信息',
    'Class:VLAN/Attribute:vlan_tag' => '标签',
    'Class:VLAN/Attribute:vlan_tag+' => '仅限整数值',
    'Class:VLAN/Attribute:name' => '名称',
    'Class:VLAN/Attribute:name+' => '',
    'Class:VLAN/Attribute:status' => '状态',
    'Class:VLAN/Attribute:status+' => '',
    'Class:VLAN/Attribute:status/Value:used' => '已使用',
    'Class:VLAN/Attribute:status/Value:used+' => '',
    'Class:VLAN/Attribute:status/Value:unused' => '未使用',
    'Class:VLAN/Attribute:status/Value:unused+' => '',
    'Class:VLAN/Attribute:status/Value:reserved' => '保留',
    'Class:VLAN/Attribute:status/Value:reserved+' => '',
    'Class:VLAN/Attribute:type' => '类型',
    'Class:VLAN/Attribute:type+' => '',
    'Class:VLAN/Attribute:type/Value:port_based' => '基于端口',
    'Class:VLAN/Attribute:type/Value:port_based+' => '',
    'Class:VLAN/Attribute:type/Value:mac_based' => '基于MAC地址',
    'Class:VLAN/Attribute:type/Value:mac_based+' => '',
    'Class:VLAN/Attribute:type/Value:network_based' => '基于网络',
    'Class:VLAN/Attribute:type/Value:network_based+' => '',
    'Class:VLAN/Attribute:type/Value:protocol_based' => '基于协议',
    'Class:VLAN/Attribute:type/Value:protocol_based+' => '',
));

//
// Class: Snmp凭据
//
Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:SnmpCredentials' => 'SNMP凭据',
    'SnmpCredentials:baseinfo' => '基本信息',
    'SnmpCredentials:v1-v2c' => 'SNMP V1 / V2c',
    'SnmpCredentials:v3' => 'SNMP V3',
    'Class:SnmpCredentials/Attribute:auth_passphrase' => '认证密码',
    'Class:SnmpCredentials/Attribute:auth_passphrase+' => '与认证协议一起使用的密码。',
    'Class:SnmpCredentials/Attribute:auth_protocol' => '认证协议',
    'Class:SnmpCredentials/Attribute:auth_protocol+' => '',
    'Class:SnmpCredentials/Attribute:auth_protocol/Value:md5' => 'MD5',
    'Class:SnmpCredentials/Attribute:auth_protocol/Value:sha' => 'SHA',
    'Class:SnmpCredentials/Attribute:auth_protocol/Value:hmac_sha_2' => 'HMAC-SHA-2',
    'Class:SnmpCredentials/Attribute:community' => '团体名',
    'Class:SnmpCredentials/Attribute:community+' => '已知的V1和V2团体字符串',
    'Class:SnmpCredentials/Attribute:context_name' => '上下文名称',
    'Class:SnmpCredentials/Attribute:context_name+' => '标识由SNMP实体访问的信息集合的字符串。',
    'Class:SnmpCredentials/Attribute:description' => '描述',
    'Class:SnmpCredentials/Attribute:description+' => '',
    'Class:SnmpCredentials/Attribute:device_list' => '设备',
    'Class:SnmpCredentials/Attribute:device_list+' => '使用这些凭据的设备。',
    'Class:SnmpCredentials/Attribute:name' => '名称',
    'Class:SnmpCredentials/Attribute:name+' => '用于命名对象的字符串',
    'Class:SnmpCredentials/Attribute:org_id' => '组织',
    'Class:SnmpCredentials/Attribute:org_id+' => '凭据所属的组织',
    'Class:SnmpCredentials/Attribute:priv_passphrase' => '私密密码',
    'Class:SnmpCredentials/Attribute:priv_passphrase+' => '与私密协议一起使用的密码。',
    'Class:SnmpCredentials/Attribute:priv_protocol' => '私密协议',
    'Class:SnmpCredentials/Attribute:priv_protocol+' => '',
    'Class:SnmpCredentials/Attribute:priv_protocol/Value:aes' => 'AES',
    'Class:SnmpCredentials/Attribute:priv_protocol/Value:aes+' => 'CFB_AES_128协议',
    'Class:SnmpCredentials/Attribute:priv_protocol/Value:des' => 'DES',
    'Class:SnmpCredentials/Attribute:priv_protocol/Value:des+' => 'CBC_DES协议',
    'Class:SnmpCredentials/Attribute:security_level' => '安全级别',
    'Class:SnmpCredentials/Attribute:security_level+' => '选择基于用户的安全模型（USM）。如果留空，凭据将回退到SNMP V1 / V2c团体字符串。',
    'Class:SnmpCredentials/Attribute:security_level/Value:authNoPriv' => 'AuthNoPriv',
    'Class:SnmpCredentials/Attribute:security_level/Value:authNoPriv+' => '具有认证但不具有隐私的通信',
    'Class:SnmpCredentials/Attribute:security_level/Value:authPriv' => 'AuthPriv',
    'Class:SnmpCredentials/Attribute:security_level/Value:authPriv+' => '具有认证和隐私的通信',
    'Class:SnmpCredentials/Attribute:security_level/Value:noAuthNoPriv' => 'NoAuthNoPriv',
    'Class:SnmpCredentials/Attribute:security_level/Value:noAuthNoPriv+' => '无认证和隐私的通信',
    'Class:SnmpCredentials/Attribute:security_name' => '安全名称',
    'Class:SnmpCredentials/Attribute:security_name+' => '表示提供服务或进行处理的主体的字符串。',
));

//
// Class: 网络流量容量
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:NetworkFlowCapacity' => '流量容量',
    'Class:NetworkFlowCapacity+' => '网络流量提供的容量',
    'Class:NetworkFlowCapacity/Attribute:description' => '描述',
    'Class:NetworkFlowCapacity/Attribute:description+' => '',
    'Class:NetworkFlowCapacity/Attribute:networkflows_list' => '网络流量',
    'Class:NetworkFlowCapacity/Attribute:networkflows_list+' => '提供此容量的网络流量列表',
));

//
// Class: 网络流
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Class:NetworkFlow' => '网络流量',
    'Class:NetworkFlow+' => '',
    'Class:NetworkFlow/Name' => '%1$s - %2$s / %3$s - %4$s / %5$s',
    'Class:NetworkFlow:baseinfo' => '基本信息',
    'Class:NetworkFlow:flowinfo' => '流量详情',
    'Class:NetworkFlow/Attribute:name' => '通用名称',
    'Class:NetworkFlow/Attribute:name+' => '为网络流量提供更友好或业务相关的名称。',
    'Class:NetworkFlow/Attribute:org_id' => '组织',
    'Class:NetworkFlow/Attribute:org_id+' => '凭据所属的组织',
    'Class:NetworkFlow/Attribute:org_name' => '组织名称',
    'Class:NetworkFlow/Attribute:org_name+' => '',
    'Class:NetworkFlow/Attribute:protocol' => '协议',
    'Class:NetworkFlow/Attribute:protocol+' => '',
    'Class:NetworkFlow/Attribute:protocol/Value:UDP' => 'UDP',
    'Class:NetworkFlow/Attribute:protocol/Value:UDP+' => 'UDP协议',
    'Class:NetworkFlow/Attribute:protocol/Value:TCP' => 'TCP',
    'Class:NetworkFlow/Attribute:protocol/Value:TCP+' => 'TCP协议',
    'Class:NetworkFlow/Attribute:protocol/Value:UDP/TCP' => 'UDP/TCP',
    'Class:NetworkFlow/Attribute:protocol/Value:UDP/TCP+' => 'UDP或TCP协议',
    'Class:NetworkFlow/Attribute:protocol/Value:Other' => '其他',
    'Class:NetworkFlow/Attribute:protocol/Value:Other+' => '其他协议',
    'Class:NetworkFlow/Attribute:source_port' => '源端口',
    'Class:NetworkFlow/Attribute:source_port+' => '',
    'Class:NetworkFlow/Attribute:dest_port' => '目标端口',
    'Class:NetworkFlow/Attribute:dest_port+' => '',
    'Class:NetworkFlow/Attribute:source_ci_id' => '源CI',
    'Class:NetworkFlow/Attribute:source_ci_id+' => '流量起源的功能CI',
    'Class:NetworkFlow/Attribute:source_ci_name' => '源CI的名称',
    'Class:NetworkFlow/Attribute:source_ci_name+' => '',
    'Class:NetworkFlow/Attribute:dest_ci_id' => '目标CI',
    'Class:NetworkFlow/Attribute:dest_ci_id+' => '流量到达的功能CI',
    'Class:NetworkFlow/Attribute:dest_ci_name' => '目标CI的名称',
    'Class:NetworkFlow/Attribute:dest_ci_name+' => '',
    'Class:NetworkFlow/Attribute:status' => '状态',
    'Class:NetworkFlow/Attribute:status+' => '',
    'Class:NetworkFlow/Attribute:status/Value:production' => '生产',
    'Class:NetworkFlow/Attribute:status/Value:production+' => '',
    'Class:NetworkFlow/Attribute:status/Value:implementation' => '实施',
    'Class:NetworkFlow/Attribute:status/Value:implementation+' => '',
    'Class:NetworkFlow/Attribute:status/Value:obsolete' => '已过时',
    'Class:NetworkFlow/Attribute:status/Value:obsolete+' => '',
    'Class:NetworkFlow/Attribute:move2production' => '投产日期',
    'Class:NetworkFlow/Attribute:move2production+' => '',
    'Class:NetworkFlow/Attribute:description' => '描述',
    'Class:NetworkFlow/Attribute:description+' => '',
    'Class:NetworkFlow/Attribute:business_criticity' => '业务重要性',
    'Class:NetworkFlow/Attribute:business_criticity+' => '',
    'Class:NetworkFlow/Attribute:business_criticity/Value:low' => '低',
    'Class:NetworkFlow/Attribute:business_criticity/Value:low+' => '',
    'Class:NetworkFlow/Attribute:business_criticity/Value:medium' => '中',
    'Class:NetworkFlow/Attribute:business_criticity/Value:medium+' => '',
    'Class:NetworkFlow/Attribute:business_criticity/Value:high' => '高',
    'Class:NetworkFlow/Attribute:business_criticity/Value:high+' => '',
    'Class:NetworkFlow/Attribute:networkflowcapacity_id' => '容量',
    'Class:NetworkFlow/Attribute:networkflowcapacity_id+' => '',
));

//
// 菜单
//

Dict::Add('ZH CN', 'Chinese', '简体中文', array(
    'Menu:NetworkMgmtExtended:Typology' => '网络拓扑配置',
    'Relation:networkflow/Description' => '网络流量布局',
    'Relation:networkflow/DownStream' => '出站流量...',
    'Relation:networkflow/DownStream+' => '出站网络流量布局',
    'Relation:networkflow/UpStream' => '入站流量...',
    'Relation:networkflow/UpStream+' => '入站网络流量布局',
));
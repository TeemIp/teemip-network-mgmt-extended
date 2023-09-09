<?php
/*
 * @copyright   Copyright (C) 2023 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

//////////////////////////////////////////////////////////////////////
// Classes in 'teemip-network-mgmt-extended Module'
//////////////////////////////////////////////////////////////////////
//

//
// Class: InterfaceConnector
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:InterfaceConnector' => 'Interface Connector',
	'Class:InterfaceConnector+' => 'Connector used on network interfaces',
	'Class:InterfaceConnector/Attribute:description' => 'Description',
	'Class:InterfaceConnector/Attribute:description+' => '',
	'Class:InterfaceConnector/Attribute:physicalinterfaces_list' => 'Physical interfaces',
	'Class:InterfaceConnector/Attribute:physicalinterfaces_list+' => 'Physical interfaces with that connector',
));

//
// Class: Layer2Protocol
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Layer2Protocol' => 'Layer 2 Protocol',
	'Class:Layer2Protocol+' => 'Layer 2 protocol used on network interfaces',
	'Class:Layer2Protocol/Attribute:description' => 'Description',
	'Class:Layer2Protocol/Attribute:description+' => '',
	'Class:Layer2Protocol/Attribute:ipinterfaces_list' => 'Network interfaces',
	'Class:Layer2Protocol/Attribute:ipinterfaces_list+' => 'Network interfaces using that protocol',
));

//
// Class: InterfaceSpeed
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:InterfaceSpeed' => 'Interface Speed',
	'Class:InterfaceSpeed+' => 'Speed set on network interfaces',
	'Class:InterfaceSpeed/Attribute:description' => 'Description',
	'Class:InterfaceSpeed/Attribute:description+' => '',
	'Class:InterfaceSpeed/Attribute:ipinterfaces_list' => 'Network interfaces',
	'Class:InterfaceSpeed/Attribute:ipinterfaces_list+' => 'Network interfaces at that speed',
));

//
// Class: IPInterface
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:IPInterface/Attribute:interfacespeed_id' => 'Speed',
	'Class:IPInterface/Attribute:interfacespeed_id+' => 'Maximum speed available on the interface',
	'Class:IPInterface/Attribute:layer2protocol_id' => 'Protocol',
	'Class:IPInterface/Attribute:layer2protocol_id+' => 'Layer 2 protocol',
));

//
// Class: ClusterNetwork
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ClusterNetwork' => 'Cluster Network',
	'Class:ClusterNetwork+' => 'Hardware component for network device',
	'Class:ClusterNetwork:baseinfo' => 'General Information',
	'Class:ClusterNetwork:moreinfo' => 'More Information',
	'Class:ClusterNetwork:Date' => 'Dates',
	'Class:ClusterNetwork:otherinfo' => 'Other Information',
	'Class:ClusterNetwork/Attribute:type' => 'Type',
	'Class:ClusterNetwork/Attribute:type+' => '',
	'Class:ClusterNetwork/Attribute:type/Value:loadbalancing' => 'Load balancing',
	'Class:ClusterNetwork/Attribute:type/Value:loadbalancing+' => '',
	'Class:ClusterNetwork/Attribute:type/Value:highavailability' => 'High availability',
	'Class:ClusterNetwork/Attribute:type/Value:highavailability+' => '',
	'Class:ClusterNetwork/Attribute:type/Value:highperformance' => 'High performance',
	'Class:ClusterNetwork/Attribute:type/Value:highperformance+' => '',
	'Class:ClusterNetwork/Attribute:mode' => 'Mode',
	'Class:ClusterNetwork/Attribute:mode+' => '',
	'Class:ClusterNetwork/Attribute:mode/Value:active_standby' => 'Active / Standby',
	'Class:ClusterNetwork/Attribute:mode/Value:active_standby+' => '',
	'Class:ClusterNetwork/Attribute:mode/Value:active_passive' => 'Active / Passive',
	'Class:ClusterNetwork/Attribute:mode/Value:active_passive+' => '',
	'Class:ClusterNetwork/Attribute:mode/Value:active_active' => 'Active / Active',
	'Class:ClusterNetwork/Attribute:mode/Value:active_active+' => '',
	'Class:ClusterNetwork/Attribute:status' => 'Status',
	'Class:ClusterNetwork/Attribute:status+' => '',
	'Class:ClusterNetwork/Attribute:status/Value:production' => 'Production',
	'Class:ClusterNetwork/Attribute:status/Value:production+' => '',
	'Class:ClusterNetwork/Attribute:status/Value:implementation' => 'Implementation',
	'Class:ClusterNetwork/Attribute:status/Value:implementation+' => '',
	'Class:ClusterNetwork/Attribute:networkdevices_list' => 'Nodes',
	'Class:ClusterNetwork/Attribute:networkdevices_list+' => 'List of all network devices within the cluster',
	'Class:ClusterNetwork/Attribute:ips_list' => 'IP addresses',
	'Class:ClusterNetwork/Attribute:ips_list+' => 'List of all IP addresses used by the cluster',
	'Class:ClusterNetwork/Attribute:redundancy' => 'High availability',
	'Class:ClusterNetwork/Attribute:redundancy/disabled' => 'The cluster is up if all the network devices are up',
	'Class:ClusterNetwork/Attribute:redundancy/count' => 'The cluster is up if at least %1$s network device(s) is(are) up',
	'Class:ClusterNetwork/Attribute:redundancy/percent' => 'The cluster is up if at least %1$s %% of the network devices are up',
	'Class:ClusterNetwork/Tab:connectablecis_list' => 'Devices',
	'Class:ClusterNetwork/Tab:connectablecis_list+' => 'List of all the devices connected to this cluster network',
));

//
// Class: lnkClusterNetworkToIPAddress
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:lnkClusterNetworkToIPAddress' => 'Link Cluster Network / IP Address',
	'Class:lnkClusterNetworkToIPAddress+' => '',
	'Class:lnkClusterNetworkToIPAddress/Name' => '%1$s / %2$s',
	'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_id' => 'Cluster network',
	'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_id+' => '',
	'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_name' => 'Cluster network name',
	'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_name+' => '',
	'Class:lnkClusterNetworkToIPAddress/Attribute:ipaddress_id' => 'IP address',
	'Class:lnkClusterNetworkToIPAddress/Attribute:ipaddress_id+' => '',
	'Class:lnkClusterNetworkToIPAddress/Attribute:usage_id' => 'Usage',
	'Class:lnkClusterNetworkToIPAddress/Attribute:usage_id+' => '',
));

//
// Class: NetworkDeviceComponent
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:NetworkDeviceComponent' => 'Network Device Component',
	'Class:NetworkDeviceComponent+' => 'Hardware component for network device',
	'Class:NetworkDeviceComponent:baseinfo' => 'General Information',
	'Class:NetworkDeviceComponent:moreinfo' => 'More information',
	'Class:NetworkDeviceComponent:Date' => 'Dates',
	'Class:NetworkDeviceComponent:otherinfo' => 'Other Information',
	'Class:NetworkDeviceComponent/Attribute:networkdevice_id' => 'Network device',
	'Class:NetworkDeviceComponent/Attribute:networkdevice_id+' => 'Network device that hosts the component',
	'Class:NetworkDeviceComponent/Attribute:networkdevice_name' => 'Network device name',
	'Class:NetworkDeviceComponent/Attribute:networkdevice_name+' => '',
));

//
// Class: NetworkDevice
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:NetworkDevice/Attribute:clusternetwork_id' => 'Cluster network',
	'Class:NetworkDevice/Attribute:clusternetwork_id+' => 'Cluster that the network device belong to',
	'Class:NetworkDevice/Attribute:clusternetwork_role' => 'Cluster role',
	'Class:NetworkDevice/Attribute:clusternetwork_role+' => 'Role of the device in the cluster',
	'Class:NetworkDevice/Attribute:clusternetwork_role/Value:active' => 'Active',
	'Class:NetworkDevice/Attribute:clusternetwork_role/Value:active+' => '',
	'Class:NetworkDevice/Attribute:clusternetwork_role/Value:standby' => 'Standby',
	'Class:NetworkDevice/Attribute:clusternetwork_role/Value:standby+' => '',
	'Class:NetworkDevice/Attribute:networkdevicecomponents_list' => 'Components',
	'Class:NetworkDevice/Attribute:networkdevicecomponents_list+' => 'List of all network device components attached to this device',
	'Class:NetworkDevice/Attribute:aggregatelinks_list' => 'Aggregate links',
	'Class:NetworkDevice/Attribute:aggregatelinks_list+' => 'List of all aggregate links attached to this device',
));

//
// Class: Model
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Model/Attribute:type/Value:NetworkDeviceComponent' => 'Network Device Component',
	'Class:Model/Attribute:type/Value:NetworkDeviceComponent+' => '',
));

//
// Class: AggregateLink
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:AggregateLink' => 'Aggregate Link',
	'Class:AggregateLink+' => 'Combine multiple network connections in parallel',
	'Class:AggregateLink:baseinfo' => 'General Information',
	'Class:AggregateLink/Attribute:macaddress' => 'MAC address',
	'Class:AggregateLink/Attribute:macaddress+' => '',
	'Class:AggregateLink/Attribute:layer2protocol_id' => 'Protocol',
	'Class:AggregateLink/Attribute:layer2protocol_id+' => 'Layer 2 protocol',
	'Class:AggregateLink/Attribute:status' => 'Status',
	'Class:AggregateLink/Attribute:status+' => '',
	'Class:AggregateLink/Attribute:status/Value:active' => 'Active',
	'Class:AggregateLink/Attribute:status/Value:active+' => '',
	'Class:AggregateLink/Attribute:status/Value:inactive' => 'Inactive',
	'Class:AggregateLink/Attribute:status/Value:inactive+' => '',
	'Class:AggregateLink/Attribute:connectableci_id' => 'Device',
	'Class:AggregateLink/Attribute:connectableci_id+' => 'Device that hosts the aggregate link',
	'Class:AggregateLink/Attribute:connectableci_name' => 'Device name',
	'Class:AggregateLink/Attribute:connectableci_name+' => '',
	'Class:AggregateLink/Attribute:description' => 'Description',
	'Class:AggregateLink/Attribute:description+' => '',
	'Class:AggregateLink/Attribute:peer_id' => 'Peer aggregate',
	'Class:AggregateLink/Attribute:peer_id+' => 'Aggregate link of the device at the other end of this link',
	'Class:AggregateLink/Attribute:physicalinterfaces_list' => 'Physical interfaces',
	'Class:AggregateLink/Attribute:physicalinterfaces_list+' => '',
));

//
// Class: PhysicalInterface
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:PhysicalInterface/Attribute:interfaceconnector_id' => 'Connector',
	'Class:PhysicalInterface/Attribute:interfaceconnector_id+' => '',
	'Class:PhysicalInterface/Attribute:interfaceconnector_name' => 'Connector name',
	'Class:PhysicalInterface/Attribute:interfaceconnector_name+' => '',
	'Class:PhysicalInterface/Attribute:aggregatelink_id' => 'Aggregate link',
	'Class:PhysicalInterface/Attribute:aggregatelink_id+' => 'Aggregate link that the interface is part of',
	'Class:PhysicalInterface/Attribute:aggregatelink_name' => 'Aggregate link name',
	'Class:PhysicalInterface/Attribute:aggregatelink_name+' => '',
));

//
// Class: VLAN
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:VLAN:baseinfo' => 'General Information',
	'Class:VLAN/Attribute:vlan_tag' => 'Tag',
	'Class:VLAN/Attribute:vlan_tag+' => 'Integer value only',
	'Class:VLAN/Attribute:name' => 'Name',
	'Class:VLAN/Attribute:name+' => '',
	'Class:VLAN/Attribute:status' => 'Status',
	'Class:VLAN/Attribute:status+' => '',
	'Class:VLAN/Attribute:status/Value:used' => 'Used',
	'Class:VLAN/Attribute:status/Value:used+' => '',
	'Class:VLAN/Attribute:status/Value:unused' => 'Unused',
	'Class:VLAN/Attribute:status/Value:unused+' => '',
	'Class:VLAN/Attribute:status/Value:reserved' => 'Reserved',
	'Class:VLAN/Attribute:status/Value:reserved+' => '',
	'Class:VLAN/Attribute:type' => 'Type',
	'Class:VLAN/Attribute:type+' => '',
	'Class:VLAN/Attribute:type/Value:port_based' => 'Port based',
	'Class:VLAN/Attribute:type/Value:port_based+' => '',
	'Class:VLAN/Attribute:type/Value:mac_based' => 'MAC address based',
	'Class:VLAN/Attribute:type/Value:mac_based+' => '',
	'Class:VLAN/Attribute:type/Value:network_based' => 'Network based',
	'Class:VLAN/Attribute:type/Value:network_based+' => '',
	'Class:VLAN/Attribute:type/Value:protocol_based' => 'Protocol based',
	'Class:VLAN/Attribute:type/Value:protocol_based+' => '',
));

//
// Class: NetworkFlowCapacity
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:NetworkFlowCapacity' => 'Flow Capacity',
	'Class:NetworkFlowCapacity+' => 'Capacity provided by a Network Flow',
	'Class:NetworkFlowCapacity/Attribute:description' => 'Description',
	'Class:NetworkFlowCapacity/Attribute:description+' => '',
	'Class:NetworkFlowCapacity/Attribute:networkflows_list' => 'Network flows',
	'Class:NetworkFlowCapacity/Attribute:networkflows_list+' => 'List of network flows providing this capacity',
));

//
// Class: NetworkFlow
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:NetworkFlow' => 'Network Flow',
	'Class:NetworkFlow+' => '',
	'Class:NetworkFlow/Name' => '%1$s - %2$s / %3$s - %4$s / %5$s',
	'Class:NetworkFlow:baseinfo' => 'General Information',
	'Class:NetworkFlow:flowinfo' => 'Flow Details',
	'Class:NetworkFlow/Attribute:name' => 'Common name',
	'Class:NetworkFlow/Attribute:name+' => 'Provides a more user friendly or business oriented name to the network flow.',
	'Class:NetworkFlow/Attribute:org_id' => 'Organization',
	'Class:NetworkFlow/Attribute:org_id+' => 'Organization that the credentials belongs to',
	'Class:NetworkFlow/Attribute:org_name' => 'Organization name',
	'Class:NetworkFlow/Attribute:org_name+' => '',
	'Class:NetworkFlow/Attribute:protocol' => 'Protocol',
	'Class:NetworkFlow/Attribute:protocol+' => '',
	'Class:NetworkFlow/Attribute:protocol/Value:UDP' => 'UDP',
	'Class:NetworkFlow/Attribute:protocol/Value:UDP+' => 'UDP protocol',
	'Class:NetworkFlow/Attribute:protocol/Value:TCP' => 'TCP',
	'Class:NetworkFlow/Attribute:protocol/Value:TCP+' => 'TCP protocol',
	'Class:NetworkFlow/Attribute:protocol/Value:UDP/TCP' => 'UDP/TCP',
	'Class:NetworkFlow/Attribute:protocol/Value:UDP/TCP+' => 'UDP or TCP protocol',
	'Class:NetworkFlow/Attribute:protocol/Value:Other' => 'Other',
	'Class:NetworkFlow/Attribute:protocol/Value:Other+' => 'Other protocol',
	'Class:NetworkFlow/Attribute:source_port' => 'Source port',
	'Class:NetworkFlow/Attribute:source_port+' => '',
	'Class:NetworkFlow/Attribute:dest_port' => 'Destination port',
	'Class:NetworkFlow/Attribute:dest_port+' => '',
	'Class:NetworkFlow/Attribute:source_ci_id' => 'Source CI',
	'Class:NetworkFlow/Attribute:source_ci_id+' => 'Functional CI that the flow originates from',
	'Class:NetworkFlow/Attribute:source_ci_name' => 'Name of the source CI',
	'Class:NetworkFlow/Attribute:source_ci_name+' => '',
	'Class:NetworkFlow/Attribute:dest_ci_id' => 'Destination CI',
	'Class:NetworkFlow/Attribute:dest_ci_id+' => 'Functional CI to which the flow arrives',
	'Class:NetworkFlow/Attribute:dest_ci_name' => 'Name of the destination CI',
	'Class:NetworkFlow/Attribute:dest_ci_name+' => '',
	'Class:NetworkFlow/Attribute:status' => 'Status',
	'Class:NetworkFlow/Attribute:status+' => '',
	'Class:NetworkFlow/Attribute:status/Value:production' => 'Production',
	'Class:NetworkFlow/Attribute:status/Value:production+' => '',
	'Class:NetworkFlow/Attribute:status/Value:implementation' => 'Implementation',
	'Class:NetworkFlow/Attribute:status/Value:implementation+' => '',
	'Class:NetworkFlow/Attribute:status/Value:obsolete' => 'Obsolete',
	'Class:NetworkFlow/Attribute:status/Value:obsolete+' => '',
	'Class:NetworkFlow/Attribute:move2production' => 'Move to production date',
	'Class:NetworkFlow/Attribute:move2production+' => '',
	'Class:NetworkFlow/Attribute:description' => 'Description',
	'Class:NetworkFlow/Attribute:description+' => '',
	'Class:NetworkFlow/Attribute:business_criticity' => 'Business criticality',
	'Class:NetworkFlow/Attribute:business_criticity+' => '',
	'Class:NetworkFlow/Attribute:business_criticity/Value:low' => 'Low',
	'Class:NetworkFlow/Attribute:business_criticity/Value:low+' => '',
	'Class:NetworkFlow/Attribute:business_criticity/Value:medium' => 'Medium',
	'Class:NetworkFlow/Attribute:business_criticity/Value:medium+' => '',
	'Class:NetworkFlow/Attribute:business_criticity/Value:high' => 'High',
	'Class:NetworkFlow/Attribute:business_criticity/Value:high+' => '',
	'Class:NetworkFlow/Attribute:networkflowcapacity_id' => 'Capacity',
	'Class:NetworkFlow/Attribute:networkflowcapacity_id+' => '',
));

//
// Menus
//

Dict::Add('EN US', 'English', 'English', array(
	'Menu:NetworkMgmtExtended:Typology' => 'Network typology configuration',
	'Relation:networkflow/Description' => 'Network Flow layout',
	'Relation:networkflow/DownStream' => 'Outgoing Flow...',
	'Relation:networkflow/DownStream+' => 'Outgoing Network Flow layout',
	'Relation:networkflow/UpStream' => 'Incoming Flow...',
	'Relation:networkflow/UpStream+' => 'Incoming Network Flow layout',
));

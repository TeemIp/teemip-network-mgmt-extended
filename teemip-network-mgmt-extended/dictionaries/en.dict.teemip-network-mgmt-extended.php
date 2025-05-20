<?php
/*
 * @copyright   Copyright (C) 2010-2025 TeemIp
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
	'Class:InterfaceSpeed/Attribute:raw' => 'Real value',
	'Class:InterfaceSpeed/Attribute:raw+' => 'Value to help with sorting and programming',
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
	'Class:IPInterface/Attribute:mtu' => 'MTU',
	'Class:IPInterface/Attribute:mtu+' => 'Maximum Transmission Unit',
));

//
// Class: ClusterNetwork
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:ClusterNetwork' => 'Cluster Network',
	'Class:ClusterNetwork+' => 'Cluster of network devices',
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
    'Class:ClusterNetwork/Attribute:status/Value:obsolete' => 'Obsolete',
    'Class:ClusterNetwork/Attribute:status/Value:obsolete+' => '',
	'Class:ClusterNetwork/Attribute:networkdevices_list' => 'Nodes',
	'Class:ClusterNetwork/Attribute:networkdevices_list+' => 'List of all network devices within the cluster',
	'Class:ClusterNetwork/Attribute:ips_list' => 'IP addresses',
	'Class:ClusterNetwork/Attribute:ips_list+' => 'List of all IP addresses used by the cluster',
	'Class:ClusterNetwork/Attribute:redundancy' => 'High availability',
	'Class:ClusterNetwork/Attribute:redundancy/disabled' => 'The cluster is up if all the network devices are up',
	'Class:ClusterNetwork/Attribute:redundancy/count' => 'The cluster is up if at least %1$s network device(s) is(are) up',
	'Class:ClusterNetwork/Attribute:redundancy/percent' => 'The cluster is up if at least %1$s %% of the network devices are up',
	'Class:ClusterNetwork/Attribute:replacement_date' => 'Replacement date',
	'Class:ClusterNetwork/Attribute:replacement_date+' => 'Target date for the device\'s replacement',
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
	'Class:NetworkDevice/Attribute:snmpcredentials_id' => 'SNMP Credentials',
	'Class:NetworkDevice/Attribute:snmpcredentials_id+' => 'Credentials that must be used to reach the device through SNMP',
	'Class:NetworkDevice/Attribute:replacement_date' => 'Replacement date',
	'Class:NetworkDevice/Attribute:replacement_date+' => 'Target date for the device\'s replacement',
));

//
// Class: Brand
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Brand/Attribute:logo' => 'Logo',
	'Class:Brand/Attribute:logo+' => 'Logo of the brand to ease its identification',
));

//
// Class: Model
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:Model/Attribute:type/Value:NetworkDeviceComponent' => 'Network Device Component',
	'Class:Model/Attribute:type/Value:NetworkDeviceComponent+' => '',
	'Class:Model/Attribute:picture' => 'Picture',
	'Class:Model/Attribute:picture+' => 'Image of the model to ease its identification',
));

//
// Class: AggregateLink
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:AggregateLink' => 'Aggregate Link',
	'Class:AggregateLink+' => 'Combine multiple network connections in parallel',
	'Class:AggregateLink:peerinfo' => 'Peer Information',
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
	'Class:AggregateLink/Attribute:functionalci_id' => 'Device',
	'Class:AggregateLink/Attribute:functionalci_id+' => 'Device that hosts the aggregate link. It can be a Connectable CI or a VirtualMachine',
	'Class:AggregateLink/Attribute:functionalci_name' => 'Device name',
	'Class:AggregateLink/Attribute:functionalci_name+' => '',
	'Class:AggregateLink/Attribute:description' => 'Description',
	'Class:AggregateLink/Attribute:description+' => '',
	'Class:AggregateLink/Attribute:peer_id' => 'Peer aggregate',
	'Class:AggregateLink/Attribute:peer_id+' => 'Aggregate link of the device at the other end of this link',
    'Class:AggregateLink/Attribute:vlans_list' => 'VLANs',
    'Class:AggregateLink/Attribute:vlans_list+' => '',
    'Class:AggregateLink/Attribute:vrfs_list' => 'VRFs',
    'Class:AggregateLink/Attribute:vrfs_list+' => '',
	'Class:AggregateLink/Tab:ipinterfaces' => 'IP interfaces',
	'Class:AggregateLink/Tab:ipinterfaces+' => 'Physical, Logical or Network Device Virtual Interfaces that make the aggregate'
));

//
//class: lnkAggregateLinkToVLAN
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:lnkAggregateLinkToVLAN' => 'Link Aggregate Link / VLAN',
    'Class:lnkAggregateLinkToVLAN+' => '',
    'Class:lnkAggregateLinkToVLAN/Name' => '%1$s / %2$s',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_id' => 'Aggregate Link',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_id+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_name' => 'Aggregate Link name',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_name+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_device_id' => 'Aggregate Link functional CI',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_device_id+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_device_name' => 'Aggregate Link functional CI name',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_device_name+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:vlan_id' => 'VLAN',
    'Class:lnkAggregateLinkToVLAN/Attribute:vlan_id+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:vlan_tag' => 'VLAN Tag',
    'Class:lnkAggregateLinkToVLAN/Attribute:vlan_tag+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode' => 'Mode',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode+' => 'Mode tagged or untagged',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode/Value:tagged' => 'Tagged',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode/Value:tagged+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode/Value:untagged' => 'Untagged',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode/Value:untagged+' => '',
));

//
//class: lnkAggregateLinkToVRF
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:lnkAggregateLinkToVRF' => 'Link Aggregate Link / VRF',
    'Class:lnkAggregateLinkToVRF+' => '',
    'Class:lnkAggregateLinkToVRF/Name' => '%1$s / %2$s',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_id' => 'Aggregate Link',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_id+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_name' => 'Aggregate Link name',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_name+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_device_id' => 'Aggregate Link functional CI',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_device_id+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_device_name' => 'Aggregate Link functional CI name',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_device_name+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:vrf_id' => 'VRF',
    'Class:lnkAggregateLinkToVRF/Attribute:vrf_id+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:vrf_name' => 'VRF Name',
    'Class:lnkAggregateLinkToVRF/Attribute:vrf_name+' => '',
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
    'Class:PhysicalInterface/Attribute:networkmodule_id' => 'Network module',
    'Class:PhysicalInterface/Attribute:networkmodule_id+' => 'Transceiver to be plugged into the interface',
    'Class:PhysicalInterface/Attribute:networkmodule_name' => 'Network module name',
    'Class:PhysicalInterface/Attribute:networkmodule_name+' => '',
));

//
// Class: NetworkDeviceVirtualInterface
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:NetworkDeviceVirtualInterface/Attribute:aggregatelink_id' => 'Aggregate link',
    'Class:NetworkDeviceVirtualInterface/Attribute:aggregatelink_id+' => 'Aggregate link that the interface is part of',
    'Class:NetworkDeviceVirtualInterface/Attribute:aggregatelink_name' => 'Aggregate link name',
    'Class:NetworkDeviceVirtualInterface/Attribute:aggregatelink_name+' => '',
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
// Class: SnmpCredentials
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:SnmpCredentials' => 'SNMP Credentials',
	'SnmpCredentials:baseinfo' => 'General Information',
	'SnmpCredentials:v1-v2c' => 'SNMP V1 / V2c',
	'SnmpCredentials:v3' => 'SNMP V3',
	'Class:SnmpCredentials/Attribute:auth_passphrase' => 'Authentication passphrase',
	'Class:SnmpCredentials/Attribute:auth_passphrase+' => 'The passphrase used in conjunction with the authentication protocol.',
	'Class:SnmpCredentials/Attribute:auth_protocol' => 'Authentication protocol',
	'Class:SnmpCredentials/Attribute:auth_protocol+' => '',
	'Class:SnmpCredentials/Attribute:auth_protocol/Value:md5' => 'MD5',
	'Class:SnmpCredentials/Attribute:auth_protocol/Value:sha' => 'SHA',
	'Class:SnmpCredentials/Attribute:auth_protocol/Value:hmac_sha_2' => 'HMAC-SHA-2',
	'Class:SnmpCredentials/Attribute:community' => 'Community',
	'Class:SnmpCredentials/Attribute:community+' => 'Well known V1 and V2 community string',
	'Class:SnmpCredentials/Attribute:context_name' => 'Context name',
	'Class:SnmpCredentials/Attribute:context_name+' => 'String that identifies a collection of information accessible by a SNMP entity.',
	'Class:SnmpCredentials/Attribute:description' => 'Description',
	'Class:SnmpCredentials/Attribute:description+' => '',
	'Class:SnmpCredentials/Attribute:device_list' => 'Devices',
	'Class:SnmpCredentials/Attribute:device_list+' => 'Devices using these credentials.',
	'Class:SnmpCredentials/Attribute:name' => 'Name',
	'Class:SnmpCredentials/Attribute:name+' => 'String to be used to name the object',
	'Class:SnmpCredentials/Attribute:org_id' => 'Organization',
	'Class:SnmpCredentials/Attribute:org_id+' => 'Organization that the credentials belongs to',
	'Class:SnmpCredentials/Attribute:priv_passphrase' => 'Privacy passphrase',
	'Class:SnmpCredentials/Attribute:priv_passphrase+' => 'The passphrase used in conjunction with the privacy protocol.',
	'Class:SnmpCredentials/Attribute:priv_protocol' => 'Privacy protocol',
	'Class:SnmpCredentials/Attribute:priv_protocol+' => '',
	'Class:SnmpCredentials/Attribute:priv_protocol/Value:aes' => 'AES',
	'Class:SnmpCredentials/Attribute:priv_protocol/Value:aes+' => 'CFB_AES_128 protocol',
	'Class:SnmpCredentials/Attribute:priv_protocol/Value:des' => 'DES',
	'Class:SnmpCredentials/Attribute:priv_protocol/Value:des+' => 'CBC_DES protocol',
	'Class:SnmpCredentials/Attribute:security_level' => 'Security level',
	'Class:SnmpCredentials/Attribute:security_level+' => 'Selection of the user-based security model (USM). When left empty, the credentials fall back to the SNMP V1 / V2c community string.',
	'Class:SnmpCredentials/Attribute:security_level/Value:authNoPriv' => 'AuthNoPriv',
	'Class:SnmpCredentials/Attribute:security_level/Value:authNoPriv+' => 'Communication with authentication and without privacy',
	'Class:SnmpCredentials/Attribute:security_level/Value:authPriv' => 'AuthPriv',
	'Class:SnmpCredentials/Attribute:security_level/Value:authPriv+' => 'Communication with authentication and privacy',
	'Class:SnmpCredentials/Attribute:security_level/Value:noAuthNoPriv' => 'NoAuthNoPriv',
	'Class:SnmpCredentials/Attribute:security_level/Value:noAuthNoPriv+' => 'Communication without authentication and privacy',
	'Class:SnmpCredentials/Attribute:security_name' => 'Security name',
	'Class:SnmpCredentials/Attribute:security_name+' => 'String that represents the principal on whose behalf services are provided or processing takes place.',
));

//
// Class: NetworkFlowCapacity
//

Dict::Add('EN US', 'English', 'English', array(
	'Class:NetworkFlowCapacity' => 'Flow Capacity',
	'Class:NetworkFlowCapacity+' => 'Specifies how big packets or bursts can be on a Network Flow',
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
    'Class:NetworkFlow:moreinfo' => 'More Information',
    'Class:NetworkFlow:source' => 'Source',
    'Class:NetworkFlow:destination' => 'Destination',
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
    'Class:NetworkFlow/Attribute:source_ipaddress_id' => 'Source IP',
    'Class:NetworkFlow/Attribute:source_ipaddress_id+' => 'IP address that the flow originates from',
    'Class:NetworkFlow/Attribute:source_ipaddress_fqdn' => 'Source IP FQDN',
    'Class:NetworkFlow/Attribute:source_ipaddress_fqdn+' => 'FQDN of the source IP address',
    'Class:NetworkFlow/Attribute:dest_ipaddress_id' => 'Destination IP',
    'Class:NetworkFlow/Attribute:dest_ipaddress_id+' => 'IP address to which the flow arrives',
    'Class:NetworkFlow/Attribute:dest_ipaddress_fqdn' => 'Destination IP FQDN',
    'Class:NetworkFlow/Attribute:dest_ipaddress_fqdn+' => 'FQDN of the destination IP address',
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
	'Class:NetworkFlow/Attribute:networkflowcapacity_id+' => 'Maximum size of packets or bursts',
	'Class:NetworkFlow/Attribute:interfacespeed_id' => 'Bandwidth',
	'Class:NetworkFlow/Attribute:interfacespeed_id+' => 'Maximum speed available',
));

//
// Class: NetworkModule
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:NetworkModule' => 'Network Module',
    'Class:NetworkModule+' => 'Pluggable transceiver that can be inserted into a physical interface',
    'Class:NetworkModule:baseinfo' => 'General Information',
    'Class:NetworkModule:moreinfo' => 'More Information',
    'Class:NetworkModule:Date' => 'Dates',
    'Class:NetworkModule:otherinfo' => 'Technical  details',
    'Class:NetworkModule/Attribute:description' => 'Description',
    'Class:NetworkModule/Attribute:description+' => '',
    'Class:NetworkModule/Attribute:connectableci_id' => 'Device',
    'Class:NetworkModule/Attribute:connectableci_id+' => 'Device hosting the interface into which the module is plugged',
    'Class:NetworkModule/Attribute:connectableci_name' => 'Device name',
    'Class:NetworkModule/Attribute:connectableci_name+' => '',
    'Class:NetworkModule/Attribute:physicalinterface_id' => 'Physical interface',
    'Class:NetworkModule/Attribute:physicalinterface_id+' => 'Interface into which the module is plugged',
    'Class:NetworkModule/Attribute:physicalinterface_name' => 'Physical interface name',
    'Class:NetworkModule/Attribute:physicalinterface_name+' => '',
    'Class:NetworkModule/Attribute:physicalinterface_speed' => 'Physical interface speed',
    'Class:NetworkModule/Attribute:physicalinterface_speed+' => 'Speed at which the physical interface can work',
    'Class:NetworkModule/Attribute:networkmoduletype_id' => 'Module type',
    'Class:NetworkModule/Attribute:networkmoduletype_id+' => '',
    'Class:NetworkModule/Attribute:networkmoduletype_name' => 'Module name',
    'Class:NetworkModule/Attribute:networkmoduletype_name+' => '',
    'Class:NetworkModule/Attribute:max_data_rate' => 'Max Data Rate',
    'Class:NetworkModule/Attribute:max_data_rate+' => 'Speed at which the module can work',
));

//
// Class: NetworkModuleType
//

Dict::Add('EN US', 'English', 'English', array(
    'Class:NetworkModuleType' => 'Network Module Type',
    'Class:NetworkModuleType+' => '',
    'Class:NetworkModuleType:baseinfo' => 'General Information',
    'Class:NetworkModuleType:opticalinfo' => 'Optical Details',
    'Class:NetworkModuleType/Attribute:form_factor' => 'Form factor',
    'Class:NetworkModuleType/Attribute:form_factor+' => '',
    'Class:NetworkModuleType/Attribute:form_factor/Value:integrated' => 'Integrated',
    'Class:NetworkModuleType/Attribute:form_factor/Value:integrated+' => '',
    'Class:NetworkModuleType/Attribute:form_factor/Value:sfp' => 'SFP',
    'Class:NetworkModuleType/Attribute:form_factor/Value:sfp+' => 'Small form-factor pluggable',
    'Class:NetworkModuleType/Attribute:form_factor/Value:sfp_plus' => 'SFP+',
    'Class:NetworkModuleType/Attribute:form_factor/Value:sfp_plus+' => 'Enhanced small form-factor pluggable',
    'Class:NetworkModuleType/Attribute:form_factor/Value:osfp' => 'OSFP',
    'Class:NetworkModuleType/Attribute:form_factor/Value:osfp+' => 'Octal small form-factor pluggable',
    'Class:NetworkModuleType/Attribute:form_factor/Value:qsfp' => 'QSFP',
    'Class:NetworkModuleType/Attribute:form_factor/Value:qsfp+' => 'Quad small form-factor pluggable',
    'Class:NetworkModuleType/Attribute:form_factor/Value:qsfp_plus' => 'QSFP+',
    'Class:NetworkModuleType/Attribute:form_factor/Value:qsfp_plus+' => 'Enhanced quad small form-factor pluggable',
    'Class:NetworkModuleType/Attribute:form_factor/Value:xfp' => 'XFP',
    'Class:NetworkModuleType/Attribute:form_factor/Value:xfp+' => '10 gigabit small form-factor pluggable',
    'Class:NetworkModuleType/Attribute:form_factor/Value:gbic' => 'GBIC',
    'Class:NetworkModuleType/Attribute:form_factor/Value:gbic+' => 'Gigabit interface converter',
    'Class:NetworkModuleType/Attribute:form_factor/Value:minigbic' => 'Mini GBIC',
    'Class:NetworkModuleType/Attribute:form_factor/Value:minigbic+' => 'Mini gigabit interface converter',
    'Class:NetworkModuleType/Attribute:form_factor/Value:other' => 'Other',
    'Class:NetworkModuleType/Attribute:form_factor/Value:other+' => '',
    'Class:NetworkModuleType/Attribute:description' => 'Description',
    'Class:NetworkModuleType/Attribute:description+' => '',
    'Class:NetworkModuleType/Attribute:interfacespeed_id' => 'Speed',
    'Class:NetworkModuleType/Attribute:interfacespeed_id+' => '',
    'Class:NetworkModuleType/Attribute:interfacespeed_name' => 'Speed name',
    'Class:NetworkModuleType/Attribute:interfacespeed_name+' => '',
    'Class:NetworkModuleType/Attribute:interfaceconnector_id' => 'Connector',
    'Class:NetworkModuleType/Attribute:interfaceconnector_id+' => '',
    'Class:NetworkModuleType/Attribute:interfaceconnector_name' => 'Connector name',
    'Class:NetworkModuleType/Attribute:interfaceconnector_name+' => '',
    'Class:NetworkModuleType/Attribute:optical_reach' => 'Optical reach',
    'Class:NetworkModuleType/Attribute:optical_reach+' => '',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:sr' => 'SR',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:sr+' => 'Short Reach',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:lr' => 'LR',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:lr+' => 'Long Reach',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:lrm' => 'LRM',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:lrm+' => 'Long Reach Mode',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:er' => 'ER',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:er+' => 'Extended Reach',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:xr' => 'XR',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:xr+' => '',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:Zr' => 'ZR',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:Zr+' => 'Extended Reach - Unofficial format',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:dwdm' => 'DWDM',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:dwdm+' => 'Dense WDM',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:cwdm' => 'ZR',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:cwdm+' => 'Coarse WDM',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:Other' => 'Other',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:Other+' => '',
    'Class:NetworkModuleType/Attribute:wltx' => 'TX lambda',
    'Class:NetworkModuleType/Attribute:wltx+' => 'Wavelength or TX wavelength for bidirectional modules',
    'Class:NetworkModuleType/Attribute:wlrx' => 'RX lambda',
    'Class:NetworkModuleType/Attribute:wlrx+' => 'RX wavelength for bidirectional modules',
    'Class:NetworkModuleType/Attribute:networkmodules_list' => 'Network modules',
    'Class:NetworkModuleType/Attribute:networkmodules_list+' => 'List of all network modules of this type',
    'NetworkModuleType:Overview:NetworkModules' => 'List of all network modules of this type',
));

//
// Menus & actions
//

Dict::Add('EN US', 'English', 'English', array(
	'Menu:NetworkMgmtExtended:Typology' => 'Network typology configuration',
	'Relation:networkflow/Description' => 'Network Flow layout',
	'Relation:networkflow/DownStream' => 'Outgoing Flow...',
	'Relation:networkflow/DownStream+' => 'Outgoing Network Flow layout',
	'Relation:networkflow/UpStream' => 'Incoming Flow...',
	'Relation:networkflow/UpStream+' => 'Incoming Network Flow layout',

    'UI:NetworkMgmtExtended:Action:CreateOrUpdate:PhysicalInterface:PointToConnectorAndModule' => 'A physical interface cannot be linked to BOTH an interface connector and a network module!',
));

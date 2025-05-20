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

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:InterfaceConnector' => 'Connecteur d\'interface',
	'Class:InterfaceConnector+' => 'Connecteur utilisé sur les interfaces réseau',
	'Class:InterfaceConnector/Attribute:description' => 'Description',
	'Class:InterfaceConnector/Attribute:description+' => '',
	'Class:InterfaceConnector/Attribute:physicalinterfaces_list' => 'Interfaces physiques',
	'Class:InterfaceConnector/Attribute:physicalinterfaces_list+' => '',
));

//
// Class: Layer2Protocol
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Layer2Protocol' => 'Protocole de niveau 2',
	'Class:Layer2Protocol+' => 'Protocole de niveau 2 utilisé sur les interfaces réseau',
	'Class:Layer2Protocol/Attribute:description' => 'Description',
	'Class:Layer2Protocol/Attribute:description+' => '',
	'Class:Layer2Protocol/Attribute:ipinterfaces_list' => 'Interfaces réseau',
	'Class:Layer2Protocol/Attribute:ipinterfaces_list+' => '',
));

//
// Class: InterfaceSpeed
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:InterfaceSpeed' => 'Vitesse de l\'Interface',
	'Class:InterfaceSpeed+' => 'Vitesse utilisée sur les interfaces réseau',
	'Class:InterfaceSpeed/Attribute:raw' => 'Valeur réelle',
	'Class:InterfaceSpeed/Attribute:raw+' => 'Valeur pour aider au tri et à la programmation',
	'Class:InterfaceSpeed/Attribute:description' => 'Description',
	'Class:InterfaceSpeed/Attribute:description+' => '',
	'Class:InterfaceSpeed/Attribute:ipinterfaces_list' => 'Interfaces réseau',
	'Class:InterfaceSpeed/Attribute:ipinterfaces_list+' => '',
));

//
// Class: IPInterface
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:IPInterface/Attribute:interfacespeed_id' => 'Vitesse',
	'Class:IPInterface/Attribute:interfacespeed_id+' => 'Vitesse maximale disponible sur l\'interface',
	'Class:IPInterface/Attribute:layer2protocol_id' => 'Protocole',
	'Class:IPInterface/Attribute:layer2protocol_id+' => 'Protocole de niveau 2',
	'Class:IPInterface/Attribute:mtu' => 'MTU',
	'Class:IPInterface/Attribute:mtu+' => 'Unité de transmission maximale',
));

//
// Class: ClusterNetwork
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:ClusterNetwork' => 'Cluster Réseau',
	'Class:ClusterNetwork+' => 'Cluster d\'équipements réseau',
	'Class:ClusterNetwork:baseinfo' => 'Informations Générales',
	'Class:ClusterNetwork:moreinfo' => 'Informations Complémentaires',
	'Class:ClusterNetwork:Date' => 'Dates',
	'Class:ClusterNetwork:otherinfo' => 'Autres Informations',
	'Class:ClusterNetwork/Attribute:type' => 'Type',
	'Class:ClusterNetwork/Attribute:type+' => '',
	'Class:ClusterNetwork/Attribute:type/Value:loadbalancing' => 'Répartition de charge',
	'Class:ClusterNetwork/Attribute:type/Value:loadbalancing+' => '',
	'Class:ClusterNetwork/Attribute:type/Value:highavailability' => 'Haute disponibilité',
	'Class:ClusterNetwork/Attribute:type/Value:highavailability+' => '',
	'Class:ClusterNetwork/Attribute:type/Value:highperformance' => 'Haute performance',
	'Class:ClusterNetwork/Attribute:type/Value:highperformance+' => '',
	'Class:ClusterNetwork/Attribute:mode' => 'Mode',
	'Class:ClusterNetwork/Attribute:mode+' => '',
	'Class:ClusterNetwork/Attribute:mode/Value:active_standby' => 'Actif / Standby',
	'Class:ClusterNetwork/Attribute:mode/Value:active_standby+' => '',
	'Class:ClusterNetwork/Attribute:mode/Value:active_passive' => 'Actif / Passif',
	'Class:ClusterNetwork/Attribute:mode/Value:active_passive+' => '',
	'Class:ClusterNetwork/Attribute:mode/Value:active_active' => 'Actif / Actif',
	'Class:ClusterNetwork/Attribute:mode/Value:active_active+' => '',
	'Class:ClusterNetwork/Attribute:status' => 'Statut',
	'Class:ClusterNetwork/Attribute:status+' => '',
	'Class:ClusterNetwork/Attribute:status/Value:production' => 'Production',
	'Class:ClusterNetwork/Attribute:status/Value:production+' => '',
	'Class:ClusterNetwork/Attribute:status/Value:implementation' => 'Implémentation',
	'Class:ClusterNetwork/Attribute:status/Value:implementation+' => '',
    'Class:ClusterNetwork/Attribute:status/Value:obsolete' => 'Obsolète',
    'Class:ClusterNetwork/Attribute:status/Value:obsolete+' => '',
	'Class:ClusterNetwork/Attribute:networkdevices_list' => 'Nœuds',
	'Class:ClusterNetwork/Attribute:networkdevices_list+' => 'Liste de tous les équipements réseau du cluster',
	'Class:ClusterNetwork/Attribute:ips_list' => 'Adresses IP',
	'Class:ClusterNetwork/Attribute:ips_list+' => 'Liste de toutes les adresses IP utilisées par le cluster',
	'Class:ClusterNetwork/Attribute:redundancy' => 'Haute disponibilité',
	'Class:ClusterNetwork/Attribute:redundancy/disabled' => 'Le Cluster est opérationnel si tous les équipements réseau qui le composent sont opérationnels',
	'Class:ClusterNetwork/Attribute:redundancy/count' => 'Nombre minimal d\'équipements réseau pour que le Cluster soit opérationnel : %1$s',
	'Class:ClusterNetwork/Attribute:redundancy/percent' => 'Pourcentage minimal d\'équipements réseau pour que le Cluster soit opérationnel : %1$s %%',
	'Class:ClusterNetwork/Attribute:replacement_date' => 'Date de remplacement',
	'Class:ClusterNetwork/Attribute:replacement_date+' => 'Date à laquelle l\'équipement doit être remplacé',
	'Class:ClusterNetwork/Tab:connectablecis_list' => 'Equipements',
	'Class:ClusterNetwork/Tab:connectablecis_list+' => 'Liste de tous les matériels connectés au cluster',
));

//
// Class: lnkClusterNetworkToIPAddress
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:lnkClusterNetworkToIPAddress' => 'Lien Cluster Réseau / Adresse IP',
	'Class:lnkClusterNetworkToIPAddress+' => '',
	'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_id' => 'Cluster réseau',
	'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_id+' => '',
	'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_name' => 'Nom du cluster réseau',
	'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_name+' => '',
	'Class:lnkClusterNetworkToIPAddress/Attribute:ipaddress_id' => 'Adresse IP',
	'Class:lnkClusterNetworkToIPAddress/Attribute:ipaddress_id+' => '',
	'Class:lnkClusterNetworkToIPAddress/Attribute:usage_id' => 'Utilisation',
	'Class:lnkClusterNetworkToIPAddress/Attribute:usage_id+' => '',
));

//
// Class: NetworkDeviceComponent
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:NetworkDeviceComponent' => 'Composant d\'Equipement Réseau',
	'Class:NetworkDeviceComponent+' => 'Composant matériel pour les équipements réseau',
	'Class:NetworkDeviceComponent:baseinfo' => 'Informations Générales',
	'Class:NetworkDeviceComponent:moreinfo' => 'Informations Complémentaires',
	'Class:NetworkDeviceComponent:Date' => 'Dates',
	'Class:NetworkDeviceComponent:otherinfo' => 'Autres Informations',
	'Class:NetworkDeviceComponent/Attribute:networkdevice_id' => 'Equipement Réseau',
	'Class:NetworkDeviceComponent/Attribute:networkdevice_id+' => 'Equipement réseau qui héberge le composant',
	'Class:NetworkDeviceComponent/Attribute:networkdevice_name' => 'Nom de l\'équipement réseau',
	'Class:NetworkDeviceComponent/Attribute:networkdevice_name+' => '',
));

//
// Class: NetworkDevice
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:NetworkDevice/Attribute:clusternetwork_id' => 'Cluster réseau',
	'Class:NetworkDevice/Attribute:clusternetwork_id+' => 'Cluster réseau auquel appartient l\'équipement réseau',
	'Class:NetworkDevice/Attribute:clusternetwork_role' => 'Rôle cluster',
	'Class:NetworkDevice/Attribute:clusternetwork_role+' => 'Rôle de l\'équipement au sein du cluster',
	'Class:NetworkDevice/Attribute:clusternetwork_role/Value:active' => 'Actif',
	'Class:NetworkDevice/Attribute:clusternetwork_role/Value:active+' => '',
	'Class:NetworkDevice/Attribute:clusternetwork_role/Value:standby' => 'Standby',
	'Class:NetworkDevice/Attribute:clusternetwork_role/Value:standby+' => '',
	'Class:NetworkDevice/Attribute:networkdevicecomponents_list' => 'Composants',
	'Class:NetworkDevice/Attribute:networkdevicecomponents_list+' => 'Liste de tous les composants réseau attachés à cet équipement',
	'Class:NetworkDevice/Attribute:aggregatelinks_list' => 'Agrégats de Liens',
	'Class:NetworkDevice/Attribute:aggregatelinks_list+' => 'Liste de tous les agrégats de liens attachés à cet équipement',
	'Class:NetworkDevice/Attribute:snmpcredentials_id' => 'Identification SNMP',
	'Class:NetworkDevice/Attribute:snmpcredentials_id+' => 'Informations d\'identification qui doivent être utilisées pour accéder à l\'équipement via SNMP',
	'Class:NetworkDevice/Attribute:replacement_date' => 'Date de remplacement',
	'Class:NetworkDevice/Attribute:replacement_date+' => 'Date à laquelle l\'équipement doit être remplacé',
));

//
// Class: Brand
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Brand/Attribute:logo' => 'Logo',
	'Class:Brand/Attribute:logo+' => 'Logo de la marque, facilitant son identification',
));

//
// Class: Model
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:Model/Attribute:type/Value:NetworkDeviceComponent' => 'Composant d\'Equipement Réseau',
	'Class:Model/Attribute:type/Value:NetworkDeviceComponent+' => '',
	'Class:Model/Attribute:picture' => 'Image',
	'Class:Model/Attribute:picture+' => 'Image du modèle, facilitant son identificationn',
));

//
// Class: AggregateLink
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:AggregateLink' => 'Agrégat de Liens',
	'Class:AggregateLink+' => 'Combine plusieurs connexions réseau en parallèle',
	'Class:AggregateLink:peerinfo' => 'Informations pair',
	'Class:AggregateLink/Attribute:macaddress' => 'Adresse MAC',
	'Class:AggregateLink/Attribute:macaddress+' => '',
	'Class:AggregateLink/Attribute:layer2protocol_id' => 'Protocole',
	'Class:AggregateLink/Attribute:layer2protocol_id+' => 'Protocole de niveau 2',
	'Class:AggregateLink/Attribute:status' => 'Statut',
	'Class:AggregateLink/Attribute:status+' => '',
	'Class:AggregateLink/Attribute:status/Value:active' => 'Actif',
	'Class:AggregateLink/Attribute:status/Value:active+' => '',
	'Class:AggregateLink/Attribute:status/Value:inactive' => 'Inactif',
	'Class:AggregateLink/Attribute:status/Value:inactive+' => '',
	'Class:AggregateLink/Attribute:functionalci_id' => 'Equipement',
	'Class:AggregateLink/Attribute:functionalci_id+' => 'Equipement qui héberge l\'agrégat de liens. Ce peut être un CI connecté ou une machine virtuelle',
	'Class:AggregateLink/Attribute:functionalci_name' => 'Nom de l\'équipement',
	'Class:AggregateLink/Attribute:functionalci_name+' => '',
	'Class:AggregateLink/Attribute:peer_id' => 'Agrégat pair',
	'Class:AggregateLink/Attribute:peer_id+' => 'Agrégat de liens de l\'équipement connecté à cet agrégat',
	'Class:AggregateLink/Attribute:description' => 'Description',
	'Class:AggregateLink/Attribute:description+' => '',
    'Class:AggregateLink/Attribute:vlans_list' => 'VLANs',
    'Class:AggregateLink/Attribute:vlans_list+' => '',
    'Class:AggregateLink/Attribute:vrfs_list' => 'VRFs',
    'Class:AggregateLink/Attribute:vrfs_list+' => '',
    'Class:AggregateLink/Tab:ipinterfaces' => 'Interfaces IP',
    'Class:AggregateLink/Tab:ipinterfaces+' => 'Interfaces virtuelles d\'équipements réseau, physiques ou logiques qui constituent l\'agrégat',
));

//
//class: lnkAggregateLinkToVLAN
//

Dict::Add('FR FR', 'French', 'Français', array(
    'Class:lnkAggregateLinkToVLAN' => 'Lien Agrégat de Liens / VLAN',
    'Class:lnkAggregateLinkToVLAN+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_id' => 'Agrégat de Liens',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_id+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_name' => 'Nom agrégat de Liens',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_name+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_device_id' => 'CI de l\'agrégat de Liens',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_device_id+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_device_name' => 'Nom du CI de l\'agrégat de Liens',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_device_name+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:vlan_id' => 'VLAN',
    'Class:lnkAggregateLinkToVLAN/Attribute:vlan_id+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:vlan_tag' => 'VLAN Tag',
    'Class:lnkAggregateLinkToVLAN/Attribute:vlan_tag+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode' => 'Mode',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode+' => 'Mode tagged ou untagged',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode/Value:tagged' => 'Tagged',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode/Value:tagged+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode/Value:untagged' => 'Untagged',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode/Value:untagged+' => '',
));

//
//class: lnkAggregateLinkToVRF
//

Dict::Add('FR FR', 'French', 'Français', array(
    'Class:lnkAggregateLinkToVRF' => 'Lien Agrégat de Liens / VRF',
    'Class:lnkAggregateLinkToVRF+' => '',
     'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_id' => 'Agrégat de Liens',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_id+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_name' => 'Nom agrégat de Liens',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_name+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_device_id' => 'CI de l\'agrégat de Liens',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_device_id+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_device_name' => 'Nom du CI de l\'agrégat de Liens',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_device_name+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:vrf_id' => 'VRF',
    'Class:lnkAggregateLinkToVRF/Attribute:vrf_id+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:vrf_name' => 'Nom VRF',
    'Class:lnkAggregateLinkToVRF/Attribute:vrf_name+' => '',
));

//
// Class: PhysicalInterface
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:PhysicalInterface/Attribute:interfaceconnector_id' => 'Connecteur',
	'Class:PhysicalInterface/Attribute:interfaceconnector_id+' => '',
	'Class:PhysicalInterface/Attribute:interfaceconnector_name' => 'Nom du connecteur',
	'Class:PhysicalInterface/Attribute:interfaceconnector_name+' => '',
	'Class:PhysicalInterface/Attribute:aggregatelink_id' => 'Agrégat de Liens',
	'Class:PhysicalInterface/Attribute:aggregatelink_id+' => 'Agrégat de liens dont fait partie l\'interface',
	'Class:PhysicalInterface/Attribute:aggregatelink_name' => 'Nom de l\'agrégat de liens',
	'Class:PhysicalInterface/Attribute:aggregatelink_name+' => '',
    'Class:PhysicalInterface/Attribute:networkmodule_id' => 'Module réseau',
    'Class:PhysicalInterface/Attribute:networkmodule_id+' => 'Module réseau inséré dans l\'interface',
    'Class:PhysicalInterface/Attribute:networkmodule_name' => 'Nom du module réseau',
    'Class:PhysicalInterface/Attribute:networkmodule_name+' => '',
));

//
// Class: NetworkDeviceVirtualInterface
//

Dict::Add('FR FR', 'French', 'Français', array(
    'Class:NetworkDeviceVirtualInterface/Attribute:aggregatelink_id' => 'Agrégat de Liens',
    'Class:NetworkDeviceVirtualInterface/Attribute:aggregatelink_id+' => 'Agrégat de Liens dont fait partie l\'interface',
    'Class:NetworkDeviceVirtualInterface/Attribute:aggregatelink_name' => 'Nom de l\'agrégat de Liens',
    'Class:NetworkDeviceVirtualInterface/Attribute:aggregatelink_name+' => '',
));

//
// Class: VLAN
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:VLAN:baseinfo' => 'Informations Générales',
	'Class:VLAN/Attribute:vlan_tag' => 'Tag',
	'Class:VLAN/Attribute:vlan_tag+' => 'Valeur entière uniquement',
	'Class:VLAN/Attribute:name' => 'Nom',
	'Class:VLAN/Attribute:name+' => '',
	'Class:VLAN/Attribute:status' => 'Statut',
	'Class:VLAN/Attribute:status+' => '',
	'Class:VLAN/Attribute:status/Value:used' => 'Utilisé',
	'Class:VLAN/Attribute:status/Value:used+' => '',
	'Class:VLAN/Attribute:status/Value:unused' => 'Non utilisé',
	'Class:VLAN/Attribute:status/Value:unused+' => '',
	'Class:VLAN/Attribute:status/Value:reserved' => 'Réservé',
	'Class:VLAN/Attribute:status/Value:reserved+' => '',
	'Class:VLAN/Attribute:type' => 'Type',
	'Class:VLAN/Attribute:type+' => '',
	'Class:VLAN/Attribute:type/Value:port_based' => 'Par port',
	'Class:VLAN/Attribute:type/Value:port_based+' => '',
	'Class:VLAN/Attribute:type/Value:mac_based' => 'Par adresse MAC',
	'Class:VLAN/Attribute:type/Value:mac_based+' => '',
	'Class:VLAN/Attribute:type/Value:network_based' => 'Par sous-réseau',
	'Class:VLAN/Attribute:type/Value:network_based+' => '',
	'Class:VLAN/Attribute:type/Value:protocol_based' => 'Par protocole',
	'Class:VLAN/Attribute:type/Value:protocol_based+' => '',
));

//
// Class: SnmpCredentials
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:SnmpCredentials' => 'Identification SNMP',
	'Class:SnmpCredentials+' => 'Informations d\'identification SNMP',
	'SnmpCredentials:baseinfo' => 'Informations Générales',
	'SnmpCredentials:v1-v2c' => 'SNMP V1 / V2c',
	'SnmpCredentials:v3' => 'SNMP V3',
	'Class:SnmpCredentials/Attribute:auth_passphrase' => 'Phrase secrète d\'authentification',
	'Class:SnmpCredentials/Attribute:auth_passphrase+' => 'Phrase secrète utilisée conjointement avec le protocole d\'authentification.',
	'Class:SnmpCredentials/Attribute:auth_protocol' => 'Protocole d\'authentification',
	'Class:SnmpCredentials/Attribute:auth_protocol+' => '',
	'Class:SnmpCredentials/Attribute:auth_protocol/Value:md5' => 'MD5',
	'Class:SnmpCredentials/Attribute:auth_protocol/Value:sha' => 'SHA',
	'Class:SnmpCredentials/Attribute:auth_protocol/Value:hmac_sha_2' => 'HMAC-SHA-2',
	'Class:SnmpCredentials/Attribute:community' => 'Communauté',
	'Class:SnmpCredentials/Attribute:community+' => 'Chaîne de communauté SNMP V1 et V2 bien connue',
	'Class:SnmpCredentials/Attribute:context_name' => 'Nom du contexte',
	'Class:SnmpCredentials/Attribute:context_name+' => 'Chaîne qui identifie une collection d\'informations accessibles par une entité SNMP.',
	'Class:SnmpCredentials/Attribute:description' => 'Description',
	'Class:SnmpCredentials/Attribute:description+' => '',
	'Class:SnmpCredentials/Attribute:device_list' => 'Equipements',
	'Class:SnmpCredentials/Attribute:device_list+' => 'Equipements réseau utilisant cette identification SNMP.',
	'Class:SnmpCredentials/Attribute:name' => 'Nom',
	'Class:SnmpCredentials/Attribute:name+' => 'Chaine de caractère utilisée pour nommer l\'objet',
	'Class:SnmpCredentials/Attribute:org_id' => 'Organisation',
	'Class:SnmpCredentials/Attribute:org_id+' => 'Organisation à laquelle appartient l\'identification',
	'Class:SnmpCredentials/Attribute:priv_passphrase' => 'Phrase secrète de confidentialité',
	'Class:SnmpCredentials/Attribute:priv_passphrase+' => 'Phrase secrète utilisée conjointement avec le protocole de confidentialité.',
	'Class:SnmpCredentials/Attribute:priv_protocol' => 'Protocole de confidentialité',
	'Class:SnmpCredentials/Attribute:priv_protocol+' => '',
	'Class:SnmpCredentials/Attribute:priv_protocol/Value:aes' => 'AES',
	'Class:SnmpCredentials/Attribute:priv_protocol/Value:aes+' => 'Protocole CFB_AES_128',
	'Class:SnmpCredentials/Attribute:priv_protocol/Value:des' => 'DES',
	'Class:SnmpCredentials/Attribute:priv_protocol/Value:des+' => 'Protocole CBC_DES protocol',
	'Class:SnmpCredentials/Attribute:security_level' => 'Niveau de sécurité',
	'Class:SnmpCredentials/Attribute:security_level+' => 'Sélection du modèle de sécurité basé sur l\'utilisateur (USM). Lorsque ce paramètre est vide, les informations d\'identification utilisées sont réduites à la community string du protocole SNMP V1/V2c.',
	'Class:SnmpCredentials/Attribute:security_level/Value:authNoPriv' => 'AuthNoPriv',
	'Class:SnmpCredentials/Attribute:security_level/Value:authNoPriv+' => 'Communication avec authentification mais sans confidentialité',
	'Class:SnmpCredentials/Attribute:security_level/Value:authPriv' => 'AuthPriv',
	'Class:SnmpCredentials/Attribute:security_level/Value:authPriv+' => 'Communication avec authentification et confidentialité',
	'Class:SnmpCredentials/Attribute:security_level/Value:noAuthNoPriv' => 'NoAuthNoPriv',
	'Class:SnmpCredentials/Attribute:security_level/Value:noAuthNoPriv+' => 'Communication sans authentification ni confidentialité',
	'Class:SnmpCredentials/Attribute:security_name' => 'Utilisateur',
	'Class:SnmpCredentials/Attribute:security_name+' => 'Chaîne qui représente le mandant pour le compte duquel les services sont fournis ou le traitement a lieu.',
));

//
// Class: NetworkFlowCapacity
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:NetworkFlowCapacity' => 'Capacité d\'un flux',
	'Class:NetworkFlowCapacity+' => 'Spécifie la taille maximum des paquets ou des bursts sur un flux réseau',
	'Class:NetworkFlowCapacity/Attribute:description' => 'Description',
	'Class:NetworkFlowCapacity/Attribute:description+' => '',
	'Class:NetworkFlowCapacity/Attribute:networkflows_list' => 'Flux réseau',
	'Class:NetworkFlowCapacity/Attribute:networkflows_list+' => 'Liste des flux réseau ayant cette capacité',
));

//
// Class: NetworkFlow
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Class:NetworkFlow' => 'Flux réseau',
	'Class:NetworkFlow+' => '',
	'Class:NetworkFlow/Name' => '%1$s - %2$s / %3$s - %4$s / %5$s',
	'Class:NetworkFlow:baseinfo' => 'Informations générales',
    'Class:NetworkFlow:moreinfo' => 'Informations complémentaires',
    'Class:NetworkFlow:source' => 'Source',
    'Class:NetworkFlow:destination' => 'Destination',
	'Class:NetworkFlow/Attribute:name' => 'Nom commun',
	'Class:NetworkFlow/Attribute:name+' => 'Fournit un nom plus convivial ou plus orienté métier au flux réseau.',
	'Class:NetworkFlow/Attribute:org_id' => 'Organisation',
	'Class:NetworkFlow/Attribute:org_id+' => 'Organisation à laquelle appartient le flux réseau',
	'Class:NetworkFlow/Attribute:org_name' => 'Nom de l\'organisation',
	'Class:NetworkFlow/Attribute:org_name+' => '',
	'Class:NetworkFlow/Attribute:protocol' => 'Protocole',
	'Class:NetworkFlow/Attribute:protocol+' => '',
	'Class:NetworkFlow/Attribute:protocol/Value:UDP' => 'UDP',
	'Class:NetworkFlow/Attribute:protocol/Value:UDP+' => 'Protocole UDP',
	'Class:NetworkFlow/Attribute:protocol/Value:TCP' => 'TCP',
	'Class:NetworkFlow/Attribute:protocol/Value:TCP+' => 'Protocole TCP',
	'Class:NetworkFlow/Attribute:protocol/Value:UDP/TCP' => 'UDP/TCP',
	'Class:NetworkFlow/Attribute:protocol/Value:UDP/TCP+' => 'Protocole UDP ou TCP',
	'Class:NetworkFlow/Attribute:protocol/Value:Other' => 'Autre',
	'Class:NetworkFlow/Attribute:protocol/Value:Other+' => 'Autre protocole',
	'Class:NetworkFlow/Attribute:source_port' => 'Port source',
	'Class:NetworkFlow/Attribute:source_port+' => '',
	'Class:NetworkFlow/Attribute:dest_port' => 'Port destination',
	'Class:NetworkFlow/Attribute:dest_port+' => '',
	'Class:NetworkFlow/Attribute:source_ci_id' => 'CI source',
	'Class:NetworkFlow/Attribute:source_ci_id+' => 'CI fonctionnel sur lequel le flux prend sa source',
	'Class:NetworkFlow/Attribute:source_ci_name' => 'Nom du CI source',
	'Class:NetworkFlow/Attribute:source_ci_name+' => '',
	'Class:NetworkFlow/Attribute:dest_ci_id' => 'CI de destination',
	'Class:NetworkFlow/Attribute:dest_ci_id+' => 'CI fonctionel vers lequel arrive le flux',
	'Class:NetworkFlow/Attribute:dest_ci_name' => 'Nom du CI de destination',
	'Class:NetworkFlow/Attribute:dest_ci_name+' => '',
    'Class:NetworkFlow/Attribute:source_ipaddress_id' => 'IP source',
    'Class:NetworkFlow/Attribute:source_ipaddress_id+' => 'Adresse IP à laquelle le flux prend sa source',
    'Class:NetworkFlow/Attribute:source_ipaddress_fqdn' => 'FQDN IP source',
    'Class:NetworkFlow/Attribute:source_ipaddress_fqdn+' => 'FQDN de l\'adresse IP source',
    'Class:NetworkFlow/Attribute:dest_ipaddress_id' => 'IP de destination',
    'Class:NetworkFlow/Attribute:dest_ipaddress_id+' => 'Adresse IP vers laquelle arrive le flux',
    'Class:NetworkFlow/Attribute:dest_ipaddress_fqdn' => 'FQDN IP de destination',
    'Class:NetworkFlow/Attribute:dest_ipaddress_fqdn+' => 'FQDN de l\'adresse IP de destination',
	'Class:NetworkFlow/Attribute:status' => 'Statut',
	'Class:NetworkFlow/Attribute:status+' => '',
	'Class:NetworkFlow/Attribute:status/Value:production' => 'Production',
	'Class:NetworkFlow/Attribute:status/Value:production+' => '',
	'Class:NetworkFlow/Attribute:status/Value:implementation' => 'Implémentation',
	'Class:NetworkFlow/Attribute:status/Value:implementation+' => '',
	'Class:NetworkFlow/Attribute:status/Value:obsolete' => 'Obsolète',
	'Class:NetworkFlow/Attribute:status/Value:obsolete+' => '',
	'Class:NetworkFlow/Attribute:move2production' => 'Date de mise en production',
	'Class:NetworkFlow/Attribute:move2production+' => '',
	'Class:NetworkFlow/Attribute:description' => 'Description',
	'Class:NetworkFlow/Attribute:description+' => '',
	'Class:NetworkFlow/Attribute:business_criticity' => 'Criticité',
	'Class:NetworkFlow/Attribute:business_criticity+' => '',
	'Class:NetworkFlow/Attribute:business_criticity/Value:low' => 'Basse',
	'Class:NetworkFlow/Attribute:business_criticity/Value:low+' => '',
	'Class:NetworkFlow/Attribute:business_criticity/Value:medium' => 'Moyenne',
	'Class:NetworkFlow/Attribute:business_criticity/Value:medium+' => '',
	'Class:NetworkFlow/Attribute:business_criticity/Value:high' => 'Haute',
	'Class:NetworkFlow/Attribute:business_criticity/Value:high+' => '',
	'Class:NetworkFlow/Attribute:networkflowcapacity_id' => 'Capacité',
	'Class:NetworkFlow/Attribute:networkflowcapacity_id+' => 'Taille maximum des paquets ou bursts',
	'Class:NetworkFlow/Attribute:interfacespeed_id' => 'Bande Passante',
	'Class:NetworkFlow/Attribute:interfacespeed_id+' => 'Vitesse maximum disponible',
));

//
// Class: NetworkModule
//

Dict::Add('FR FR', 'French', 'Français', array(
    'Class:NetworkModule' => 'Module réseau',
    'Class:NetworkModule+' => 'Pluggable transceiver that can be inserted into a physical interface',
    'Class:NetworkModule:baseinfo' => 'Informations générales',
    'Class:NetworkModule:moreinfo' => 'Informations complémentaires',
    'Class:NetworkModule:Date' => 'Dates',
    'Class:NetworkModule:otherinfo' => 'Détails techniques',
    'Class:NetworkModule/Attribute:description' => 'Description',
    'Class:NetworkModule/Attribute:description+' => '',
    'Class:NetworkModule/Attribute:connectableci_id' => 'Equipement',
    'Class:NetworkModule/Attribute:connectableci_id+' => 'Equipement hébergeant l\'interface sur laquelle le module est inséré',
    'Class:NetworkModule/Attribute:connectableci_name' => 'Nom de l\'équipement',
    'Class:NetworkModule/Attribute:connectableci_name+' => '',
    'Class:NetworkModule/Attribute:physicalinterface_id' => 'Interface physique',
    'Class:NetworkModule/Attribute:physicalinterface_id+' => 'Interface sur laquelle le module est inséré',
    'Class:NetworkModule/Attribute:physicalinterface_name' => 'Nom de l\'interface physique',
    'Class:NetworkModule/Attribute:physicalinterface_name+' => '',
    'Class:NetworkModule/Attribute:physicalinterface_speed' => 'Vitesse de l\'interface physique',
    'Class:NetworkModule/Attribute:physicalinterface_speed+' => 'Vitesse à laquelle l\interface physique peut fonctionner',
    'Class:NetworkModule/Attribute:networkmoduletype_id' => 'Type de module',
    'Class:NetworkModule/Attribute:networkmoduletype_id+' => '',
    'Class:NetworkModule/Attribute:networkmoduletype_name' => 'Nom du module',
    'Class:NetworkModule/Attribute:networkmoduletype_name+' => '',
    'Class:NetworkModule/Attribute:max_data_rate' => 'Débit maximum',
    'Class:NetworkModule/Attribute:max_data_rate+' => 'Vitesse à laquelle le module peut fonctionner',
));

//
// Class: NetworkModuleType
//

Dict::Add('FR FR', 'French', 'Français', array(
    'Class:NetworkModuleType' => 'Type de module réseau',
    'Class:NetworkModuleType+' => '',
    'Class:NetworkModuleType:baseinfo' => 'Informations générales',
    'Class:NetworkModuleType:opticalinfo' => 'Informations optiques',
    'Class:NetworkModuleType/Attribute:form_factor' => 'Facteur de forme',
    'Class:NetworkModuleType/Attribute:form_factor+' => '',
    'Class:NetworkModuleType/Attribute:form_factor/Value:integrated' => 'Intégré',
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
    'Class:NetworkModuleType/Attribute:form_factor/Value:other' => 'Autre',
    'Class:NetworkModuleType/Attribute:form_factor/Value:other+' => '',
    'Class:NetworkModuleType/Attribute:description' => 'Description',
    'Class:NetworkModuleType/Attribute:description+' => '',
    'Class:NetworkModuleType/Attribute:interfacespeed_id' => 'Vitesse',
    'Class:NetworkModuleType/Attribute:interfacespeed_id+' => '',
    'Class:NetworkModuleType/Attribute:interfacespeed_name' => 'Nom de la vitesse',
    'Class:NetworkModuleType/Attribute:interfacespeed_name+' => '',
    'Class:NetworkModuleType/Attribute:interfaceconnector_id' => 'Connecteur',
    'Class:NetworkModuleType/Attribute:interfaceconnector_id+' => '',
    'Class:NetworkModuleType/Attribute:interfaceconnector_name' => 'Nom du connecteur',
    'Class:NetworkModuleType/Attribute:interfaceconnector_name+' => '',
    'Class:NetworkModuleType/Attribute:optical_reach' => 'Portée optique',
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
    'Class:NetworkModuleType/Attribute:optical_reach/Value:other' => 'Autre',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:other+' => '',
    'Class:NetworkModuleType/Attribute:wltx' => 'TX lambda',
    'Class:NetworkModuleType/Attribute:wltx+' => 'Longueur d\'onde ou longueur d\'onde TX pour les modules bidirectionnels',
    'Class:NetworkModuleType/Attribute:wlrx' => 'RX lambda',
    'Class:NetworkModuleType/Attribute:wlrx+' => 'Longueur d\'onde RX pour les modules bidirectionnels',
    'Class:NetworkModuleType/Attribute:networkmodules_list' => 'Modules réseau',
    'Class:NetworkModuleType/Attribute:networkmodules_list+' => 'Liste de tous les modules réseau de ce type',
    'NetworkModuleType:Overview:NetworkModules' => 'Liste de tous les modules réseau de ce type',
));

//
// Menus
//

Dict::Add('FR FR', 'French', 'Français', array(
	'Menu:NetworkMgmtExtended:Typology' => 'Configuration des typologies réseau',
	'Relation:networkflow/Description' => 'Schéma du flux réseau',
	'Relation:networkflow/DownStream' => 'Flux sortant...',
	'Relation:networkflow/DownStream+' => 'Schéma du flux sortan',
	'Relation:networkflow/UpStream' => 'Flux entrant...',
	'Relation:networkflow/UpStream+' => 'Schéma du flux entrant',

    'UI:NetworkMgmtExtended:Action:CreateOrUpdate:PhysicalInterface:PointToConnectorAndModule' => 'Une interface physique ne peut être liée à la fois à un connecteur et à un module réseau !',
));

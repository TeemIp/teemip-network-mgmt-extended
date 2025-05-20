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

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:InterfaceConnector' => 'Conector de Interface',
	'Class:InterfaceConnector+' => 'Conector usado em interfaces de rede',
	'Class:InterfaceConnector/Attribute:description' => 'Descrição',
	'Class:InterfaceConnector/Attribute:description+' => '',
	'Class:InterfaceConnector/Attribute:physicalinterfaces_list' => 'Interfaces físicas',
	'Class:InterfaceConnector/Attribute:physicalinterfaces_list+' => 'Interfaces físicas com esse conector',
));

//
// Class: Layer2Protocol
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:Layer2Protocol' => 'Protocolo Layer 2',
	'Class:Layer2Protocol+' => 'Protocolo Layer 2 usado em interfaces de rede',
	'Class:Layer2Protocol/Attribute:description' => 'Descrição',
	'Class:Layer2Protocol/Attribute:description+' => '',
	'Class:Layer2Protocol/Attribute:ipinterfaces_list' => 'Interfaces de rede',
	'Class:Layer2Protocol/Attribute:ipinterfaces_list+' => 'Interfaces de rede usando esse protocolo',
));

//
// Class: InterfaceSpeed
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:InterfaceSpeed' => 'Velocidade da Interface',
	'Class:InterfaceSpeed+' => 'Velocidade definida nas interfaces de rede',
	'Class:InterfaceSpeed/Attribute:raw' => 'Valor real',
	'Class:InterfaceSpeed/Attribute:raw+' => 'Valor para ajudar na ordenação e programação',
	'Class:InterfaceSpeed/Attribute:description' => 'Descrição',
	'Class:InterfaceSpeed/Attribute:description+' => '',
	'Class:InterfaceSpeed/Attribute:ipinterfaces_list' => 'Interfaces de rede',
	'Class:InterfaceSpeed/Attribute:ipinterfaces_list+' => 'Interfaces de rede nessa velocidade',
));

//
// Class: IPInterface
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:IPInterface/Attribute:interfacespeed_id' => 'Velocidade',
	'Class:IPInterface/Attribute:interfacespeed_id+' => 'Velocidade máxima disponível na interface',
	'Class:IPInterface/Attribute:layer2protocol_id' => 'Protocolo',
	'Class:IPInterface/Attribute:layer2protocol_id+' => 'Protocolo Layer 2',
	'Class:IPInterface/Attribute:mtu' => 'MTU',
	'Class:IPInterface/Attribute:mtu+' => 'Maximum Transmission Unit (Unidade Máxima de Transmissão)',
));

//
// Class: ClusterNetwork
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:ClusterNetwork' => 'Cluster de Rede',
	'Class:ClusterNetwork+' => 'Agrupamento lógico de dispositivos de rede',
	'Class:ClusterNetwork:baseinfo' => 'Informações Gerais',
	'Class:ClusterNetwork:moreinfo' => 'Mais Informações',
	'Class:ClusterNetwork:Date' => 'Datas',
	'Class:ClusterNetwork:otherinfo' => 'Outras Informações',
	'Class:ClusterNetwork/Attribute:type' => 'Tipo',
	'Class:ClusterNetwork/Attribute:type+' => '',
	'Class:ClusterNetwork/Attribute:type/Value:loadbalancing' => 'Balanceamento de Carga',
	'Class:ClusterNetwork/Attribute:type/Value:loadbalancing+' => '',
	'Class:ClusterNetwork/Attribute:type/Value:highavailability' => 'Alta Disponibilidade',
	'Class:ClusterNetwork/Attribute:type/Value:highavailability+' => '',
	'Class:ClusterNetwork/Attribute:type/Value:highperformance' => 'Alto Desempenho',
	'Class:ClusterNetwork/Attribute:type/Value:highperformance+' => '',
	'Class:ClusterNetwork/Attribute:mode' => 'Modo',
	'Class:ClusterNetwork/Attribute:mode+' => '',
	'Class:ClusterNetwork/Attribute:mode/Value:active_standby' => 'Ativo / Standby',
	'Class:ClusterNetwork/Attribute:mode/Value:active_standby+' => '',
	'Class:ClusterNetwork/Attribute:mode/Value:active_passive' => 'Ativo / Passivo',
	'Class:ClusterNetwork/Attribute:mode/Value:active_passive+' => '',
	'Class:ClusterNetwork/Attribute:mode/Value:active_active' => 'Ativo / Ativo',
	'Class:ClusterNetwork/Attribute:mode/Value:active_active+' => '',
	'Class:ClusterNetwork/Attribute:status' => 'Status',
	'Class:ClusterNetwork/Attribute:status+' => '',
	'Class:ClusterNetwork/Attribute:status/Value:production' => 'Produção',
	'Class:ClusterNetwork/Attribute:status/Value:production+' => '',
	'Class:ClusterNetwork/Attribute:status/Value:implementation' => 'Implementação',
	'Class:ClusterNetwork/Attribute:status/Value:implementation+' => '',
    'Class:ClusterNetwork/Attribute:status/Value:obsolete' => 'Obsoleto',
    'Class:ClusterNetwork/Attribute:status/Value:obsolete+' => '',
	'Class:ClusterNetwork/Attribute:networkdevices_list' => 'Nós', // Ou "Membros"
	'Class:ClusterNetwork/Attribute:networkdevices_list+' => 'Lista de todos os dispositivos de rede dentro do cluster',
	'Class:ClusterNetwork/Attribute:ips_list' => 'Endereços IP',
	'Class:ClusterNetwork/Attribute:ips_list+' => 'Lista de todos os endereços IP usados pelo cluster',
	'Class:ClusterNetwork/Attribute:redundancy' => 'Alta disponibilidade', // Ou "Redundância"
	'Class:ClusterNetwork/Attribute:redundancy/disabled' => 'O cluster está ativo se todos os dispositivos de rede estiverem ativos',
	'Class:ClusterNetwork/Attribute:redundancy/count' => 'O cluster está ativo se pelo menos %1$s dispositivo(s) de rede estiver(em) ativo(s)',
	'Class:ClusterNetwork/Attribute:redundancy/percent' => 'O cluster está ativo se pelo menos %1$s %% dos dispositivos de rede estiverem ativos',
	'Class:ClusterNetwork/Attribute:replacement_date' => 'Data de substituição',
	'Class:ClusterNetwork/Attribute:replacement_date+' => 'Data prevista para a substituição do dispositivo',
	'Class:ClusterNetwork/Tab:connectablecis_list' => 'Dispositivos',
	'Class:ClusterNetwork/Tab:connectablecis_list+' => 'Lista de todos os dispositivos conectados a este cluster de rede',
));

//
// Class: lnkClusterNetworkToIPAddress
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:lnkClusterNetworkToIPAddress' => 'Link Cluster de Rede / Endereço IP',
	'Class:lnkClusterNetworkToIPAddress+' => '',
	'Class:lnkClusterNetworkToIPAddress/Name' => '%1$s / %2$s',
	'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_id' => 'Cluster de rede',
	'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_id+' => '',
	'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_name' => 'Nome do cluster de rede',
	'Class:lnkClusterNetworkToIPAddress/Attribute:clusternetwork_name+' => '',
	'Class:lnkClusterNetworkToIPAddress/Attribute:ipaddress_id' => 'Endereço IP',
	'Class:lnkClusterNetworkToIPAddress/Attribute:ipaddress_id+' => '',
	'Class:lnkClusterNetworkToIPAddress/Attribute:usage_id' => 'Uso',
	'Class:lnkClusterNetworkToIPAddress/Attribute:usage_id+' => '',
));

//
// Class: NetworkDeviceComponent
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:NetworkDeviceComponent' => 'Componente de Dispositivo de Rede',
	'Class:NetworkDeviceComponent+' => 'Componente de hardware para dispositivo de rede',
	'Class:NetworkDeviceComponent:baseinfo' => 'Informações Gerais',
	'Class:NetworkDeviceComponent:moreinfo' => 'Mais informações',
	'Class:NetworkDeviceComponent:Date' => 'Datas',
	'Class:NetworkDeviceComponent:otherinfo' => 'Outras Informações',
	'Class:NetworkDeviceComponent/Attribute:networkdevice_id' => 'Dispositivo de rede',
	'Class:NetworkDeviceComponent/Attribute:networkdevice_id+' => 'Dispositivo de rede que hospeda o componente',
	'Class:NetworkDeviceComponent/Attribute:networkdevice_name' => 'Nome do dispositivo de rede',
	'Class:NetworkDeviceComponent/Attribute:networkdevice_name+' => '',
));

//
// Class: NetworkDevice
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:NetworkDevice/Attribute:clusternetwork_id' => 'Cluster de rede',
	'Class:NetworkDevice/Attribute:clusternetwork_id+' => 'Cluster ao qual o dispositivo de rede pertence',
	'Class:NetworkDevice/Attribute:clusternetwork_role' => 'Papel no cluster',
	'Class:NetworkDevice/Attribute:clusternetwork_role+' => 'Papel do dispositivo no cluster',
	'Class:NetworkDevice/Attribute:clusternetwork_role/Value:active' => 'Ativo',
	'Class:NetworkDevice/Attribute:clusternetwork_role/Value:active+' => '',
	'Class:NetworkDevice/Attribute:clusternetwork_role/Value:standby' => 'Standby', // Ou "Em espera"
	'Class:NetworkDevice/Attribute:clusternetwork_role/Value:standby+' => '',
	'Class:NetworkDevice/Attribute:networkdevicecomponents_list' => 'Componentes',
	'Class:NetworkDevice/Attribute:networkdevicecomponents_list+' => 'Lista de todos os componentes de dispositivo de rede anexados a este dispositivo',
	'Class:NetworkDevice/Attribute:aggregatelinks_list' => 'Links agregados',
	'Class:NetworkDevice/Attribute:aggregatelinks_list+' => 'Lista de todos os links agregados anexados a este dispositivo',
	'Class:NetworkDevice/Attribute:snmpcredentials_id' => 'Credenciais SNMP',
	'Class:NetworkDevice/Attribute:snmpcredentials_id+' => 'Credenciais que devem ser usadas para acessar o dispositivo via SNMP',
	'Class:NetworkDevice/Attribute:replacement_date' => 'Data de substituição',
	'Class:NetworkDevice/Attribute:replacement_date+' => 'Data prevista para a substituição do dispositivo',
));

//
// Class: Brand
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:Brand/Attribute:logo' => 'Logo',
	'Class:Brand/Attribute:logo+' => 'Logo da marca para facilitar sua identificação',
));

//
// Class: Model
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:Model/Attribute:type/Value:NetworkDeviceComponent' => 'Componente de Dispositivo de Rede',
	'Class:Model/Attribute:type/Value:NetworkDeviceComponent+' => '',
	'Class:Model/Attribute:picture' => 'Imagem',
	'Class:Model/Attribute:picture+' => 'Imagem do modelo para facilitar sua identificação',
));

//
// Class: AggregateLink
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:AggregateLink' => 'Link Agregado',
	'Class:AggregateLink+' => 'Combina múltiplas conexões de rede em paralelo',
	'Class:AggregateLink:peerinfo' => 'Informações do Par Remoto',
	'Class:AggregateLink/Attribute:macaddress' => 'Endereço MAC',
	'Class:AggregateLink/Attribute:macaddress+' => '',
	'Class:AggregateLink/Attribute:layer2protocol_id' => 'Protocolo',
	'Class:AggregateLink/Attribute:layer2protocol_id+' => 'Protocolo Layer 2',
	'Class:AggregateLink/Attribute:status' => 'Status',
	'Class:AggregateLink/Attribute:status+' => '',
	'Class:AggregateLink/Attribute:status/Value:active' => 'Ativo',
	'Class:AggregateLink/Attribute:status/Value:active+' => '',
	'Class:AggregateLink/Attribute:status/Value:inactive' => 'Inativo',
	'Class:AggregateLink/Attribute:status/Value:inactive+' => '',
	'Class:AggregateLink/Attribute:functionalci_id' => 'Dispositivo',
	'Class:AggregateLink/Attribute:functionalci_id+' => 'Dispositivo que hospeda o link agregado. Pode ser um CI Conectável ou uma Máquina Virtual',
	'Class:AggregateLink/Attribute:functionalci_name' => 'Nome do dispositivo',
	'Class:AggregateLink/Attribute:functionalci_name+' => '',
	'Class:AggregateLink/Attribute:description' => 'Descrição',
	'Class:AggregateLink/Attribute:description+' => '',
	'Class:AggregateLink/Attribute:peer_id' => 'Agregado remoto',
	'Class:AggregateLink/Attribute:peer_id+' => 'Link agregado do dispositivo na outra extremidade deste link',
    'Class:AggregateLink/Attribute:vlans_list' => 'VLANs',
    'Class:AggregateLink/Attribute:vlans_list+' => '',
    'Class:AggregateLink/Attribute:vrfs_list' => 'VRFs',
    'Class:AggregateLink/Attribute:vrfs_list+' => '',
	'Class:AggregateLink/Tab:ipinterfaces' => 'Interfaces IP',
	'Class:AggregateLink/Tab:ipinterfaces+' => 'Interfaces Físicas, Lógicas ou Virtuais de Dispositivo de Rede que compõem o agregado'
));

//
//class: lnkAggregateLinkToVLAN
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
    'Class:lnkAggregateLinkToVLAN' => 'Link Link Agregado / VLAN',
    'Class:lnkAggregateLinkToVLAN+' => '',
    'Class:lnkAggregateLinkToVLAN/Name' => '%1$s / %2$s',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_id' => 'Link Agregado',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_id+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_name' => 'Nome do Link Agregado',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_name+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_device_id' => 'CI funcional do Link Agregado',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_device_id+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_device_name' => 'Nome do CI funcional do Link Agregado',
    'Class:lnkAggregateLinkToVLAN/Attribute:aggregatelink_device_name+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:vlan_id' => 'VLAN',
    'Class:lnkAggregateLinkToVLAN/Attribute:vlan_id+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:vlan_tag' => 'Tag da VLAN',
    'Class:lnkAggregateLinkToVLAN/Attribute:vlan_tag+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode' => 'Modo',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode+' => 'Modo tagged ou untagged',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode/Value:tagged' => 'Tagged',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode/Value:tagged+' => '',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode/Value:untagged' => 'Untagged',
    'Class:lnkAggregateLinkToVLAN/Attribute:mode/Value:untagged+' => '',
));

//
//class: lnkAggregateLinkToVRF
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
    'Class:lnkAggregateLinkToVRF' => 'Link Link Agregado / VRF',
    'Class:lnkAggregateLinkToVRF+' => '',
    'Class:lnkAggregateLinkToVRF/Name' => '%1$s / %2$s',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_id' => 'Link Agregado',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_id+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_name' => 'Nome do Link Agregado',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_name+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_device_id' => 'CI funcional do Link Agregado',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_device_id+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_device_name' => 'Nome do CI funcional do Link Agregado',
    'Class:lnkAggregateLinkToVRF/Attribute:aggregatelink_device_name+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:vrf_id' => 'VRF',
    'Class:lnkAggregateLinkToVRF/Attribute:vrf_id+' => '',
    'Class:lnkAggregateLinkToVRF/Attribute:vrf_name' => 'Nome da VRF',
    'Class:lnkAggregateLinkToVRF/Attribute:vrf_name+' => '',
));

//
// Class: PhysicalInterface
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:PhysicalInterface/Attribute:interfaceconnector_id' => 'Conector',
	'Class:PhysicalInterface/Attribute:interfaceconnector_id+' => '',
	'Class:PhysicalInterface/Attribute:interfaceconnector_name' => 'Nome do conector',
	'Class:PhysicalInterface/Attribute:interfaceconnector_name+' => '',
	'Class:PhysicalInterface/Attribute:aggregatelink_id' => 'Link agregado',
	'Class:PhysicalInterface/Attribute:aggregatelink_id+' => 'Link agregado do qual a interface faz parte',
	'Class:PhysicalInterface/Attribute:aggregatelink_name' => 'Nome do link agregado',
	'Class:PhysicalInterface/Attribute:aggregatelink_name+' => '',
    'Class:PhysicalInterface/Attribute:networkmodule_id' => 'Network module',
    'Class:PhysicalInterface/Attribute:networkmodule_id+' => 'Transceiver to be plugged into the interface',
    'Class:PhysicalInterface/Attribute:networkmodule_name' => 'Network module name',
    'Class:PhysicalInterface/Attribute:networkmodule_name+' => '',
));

//
// Class: NetworkDeviceVirtualInterface
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
    'Class:NetworkDeviceVirtualInterface/Attribute:aggregatelink_id' => 'Link agregado',
    'Class:NetworkDeviceVirtualInterface/Attribute:aggregatelink_id+' => 'Link agregado do qual a interface faz parte',
    'Class:NetworkDeviceVirtualInterface/Attribute:aggregatelink_name' => 'Nome do link agregado',
    'Class:NetworkDeviceVirtualInterface/Attribute:aggregatelink_name+' => '',
));

//
// Class: VLAN
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:VLAN:baseinfo' => 'Informações Gerais',
	'Class:VLAN/Attribute:vlan_tag' => 'Tag',
	'Class:VLAN/Attribute:vlan_tag+' => 'Apenas valor inteiro',
	'Class:VLAN/Attribute:name' => 'Nome',
	'Class:VLAN/Attribute:name+' => '',
	'Class:VLAN/Attribute:status' => 'Status',
	'Class:VLAN/Attribute:status+' => '',
	'Class:VLAN/Attribute:status/Value:used' => 'Usada',
	'Class:VLAN/Attribute:status/Value:used+' => '',
	'Class:VLAN/Attribute:status/Value:unused' => 'Não usada',
	'Class:VLAN/Attribute:status/Value:unused+' => '',
	'Class:VLAN/Attribute:status/Value:reserved' => 'Reservada',
	'Class:VLAN/Attribute:status/Value:reserved+' => '',
	'Class:VLAN/Attribute:type' => 'Tipo',
	'Class:VLAN/Attribute:type+' => '',
	'Class:VLAN/Attribute:type/Value:port_based' => 'Baseada em porta',
	'Class:VLAN/Attribute:type/Value:port_based+' => '',
	'Class:VLAN/Attribute:type/Value:mac_based' => 'Baseada em endereço MAC',
	'Class:VLAN/Attribute:type/Value:mac_based+' => '',
	'Class:VLAN/Attribute:type/Value:network_based' => 'Baseada em rede',
	'Class:VLAN/Attribute:type/Value:network_based+' => '',
	'Class:VLAN/Attribute:type/Value:protocol_based' => 'Baseada em protocolo',
	'Class:VLAN/Attribute:type/Value:protocol_based+' => '',
));

//
// Class: SnmpCredentials
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:SnmpCredentials' => 'Credenciais SNMP',
	'SnmpCredentials:baseinfo' => 'Informações Gerais',
	'SnmpCredentials:v1-v2c' => 'SNMP V1 / V2c',
	'SnmpCredentials:v3' => 'SNMP V3',
	'Class:SnmpCredentials/Attribute:auth_passphrase' => 'Senha de autenticação',
	'Class:SnmpCredentials/Attribute:auth_passphrase+' => 'A senha usada em conjunto com o protocolo de autenticação.',
	'Class:SnmpCredentials/Attribute:auth_protocol' => 'Protocolo de autenticação',
	'Class:SnmpCredentials/Attribute:auth_protocol+' => '',
	'Class:SnmpCredentials/Attribute:auth_protocol/Value:md5' => 'MD5',
	'Class:SnmpCredentials/Attribute:auth_protocol/Value:sha' => 'SHA',
	'Class:SnmpCredentials/Attribute:auth_protocol/Value:hmac_sha_2' => 'HMAC-SHA-2',
	'Class:SnmpCredentials/Attribute:community' => 'community',
	'Class:SnmpCredentials/Attribute:community+' => 'String de community conhecida para V1 e V2',
	'Class:SnmpCredentials/Attribute:context_name' => 'Nome do contexto',
	'Class:SnmpCredentials/Attribute:context_name+' => 'String que identifica uma coleção de informações acessível por uma entidade SNMP.',
	'Class:SnmpCredentials/Attribute:description' => 'Descrição',
	'Class:SnmpCredentials/Attribute:description+' => '',
	'Class:SnmpCredentials/Attribute:device_list' => 'Dispositivos',
	'Class:SnmpCredentials/Attribute:device_list+' => 'Dispositivos usando estas credenciais.',
	'Class:SnmpCredentials/Attribute:name' => 'Nome',
	'Class:SnmpCredentials/Attribute:name+' => 'String a ser usada para nomear o objeto',
	'Class:SnmpCredentials/Attribute:org_id' => 'Organização',
	'Class:SnmpCredentials/Attribute:org_id+' => 'Organização à qual as credenciais pertencem',
	'Class:SnmpCredentials/Attribute:priv_passphrase' => 'Senha de privacidade',
	'Class:SnmpCredentials/Attribute:priv_passphrase+' => 'A senha usada em conjunto com o protocolo de privacidade.',
	'Class:SnmpCredentials/Attribute:priv_protocol' => 'Protocolo de privacidade',
	'Class:SnmpCredentials/Attribute:priv_protocol+' => '',
	'Class:SnmpCredentials/Attribute:priv_protocol/Value:aes' => 'AES',
	'Class:SnmpCredentials/Attribute:priv_protocol/Value:aes+' => 'Protocolo CFB_AES_128',
	'Class:SnmpCredentials/Attribute:priv_protocol/Value:des' => 'DES',
	'Class:SnmpCredentials/Attribute:priv_protocol/Value:des+' => 'Protocolo CBC_DES',
	'Class:SnmpCredentials/Attribute:security_level' => 'Nível de segurança',
	'Class:SnmpCredentials/Attribute:security_level+' => 'Seleção do modelo de segurança baseado em usuário (USM). Quando deixado vazio, as credenciais usam a string de community SNMP V1 / V2c.',
	'Class:SnmpCredentials/Attribute:security_level/Value:authNoPriv' => 'AuthNoPriv',
	'Class:SnmpCredentials/Attribute:security_level/Value:authNoPriv+' => 'Comunicação com autenticação e sem privacidade',
	'Class:SnmpCredentials/Attribute:security_level/Value:authPriv' => 'AuthPriv',
	'Class:SnmpCredentials/Attribute:security_level/Value:authPriv+' => 'Comunicação com autenticação e privacidade',
	'Class:SnmpCredentials/Attribute:security_level/Value:noAuthNoPriv' => 'NoAuthNoPriv',
	'Class:SnmpCredentials/Attribute:security_level/Value:noAuthNoPriv+' => 'Comunicação sem autenticação e sem privacidade',
	'Class:SnmpCredentials/Attribute:security_name' => 'Nome de segurança',
	'Class:SnmpCredentials/Attribute:security_name+' => 'String que representa o principal em nome do qual os serviços são fornecidos ou o processamento ocorre.',
));

//
// Class: NetworkFlowCapacity
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:NetworkFlowCapacity' => 'Capacidade de Fluxo',
	'Class:NetworkFlowCapacity+' => 'Especifica o tamanho máximo de pacotes ou rajadas (bursts) em um Fluxo de Rede',
	'Class:NetworkFlowCapacity/Attribute:description' => 'Descrição',
	'Class:NetworkFlowCapacity/Attribute:description+' => '',
	'Class:NetworkFlowCapacity/Attribute:networkflows_list' => 'Fluxos de rede',
	'Class:NetworkFlowCapacity/Attribute:networkflows_list+' => 'Lista de fluxos de rede que fornecem esta capacidade',
));

//
// Class: NetworkFlow
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Class:NetworkFlow' => 'Fluxo de Rede',
	'Class:NetworkFlow+' => '',
	'Class:NetworkFlow/Name' => '%1$s - %2$s / %3$s - %4$s / %5$s',
	'Class:NetworkFlow:baseinfo' => 'Informações Gerais',
    'Class:NetworkFlow:moreinfo' => 'Mais Informações',
    'Class:NetworkFlow:source' => 'Origem',
    'Class:NetworkFlow:destination' => 'Destino',
	'Class:NetworkFlow/Attribute:name' => 'Nome comum',
	'Class:NetworkFlow/Attribute:name+' => 'Fornece um nome mais amigável ou orientado a negócios para o fluxo de rede.',
	'Class:NetworkFlow/Attribute:org_id' => 'Organização',
	'Class:NetworkFlow/Attribute:org_id+' => 'Organização à qual o fluxo pertence', // Ajustado do 'credentials' para 'fluxo'
	'Class:NetworkFlow/Attribute:org_name' => 'Nome da organização',
	'Class:NetworkFlow/Attribute:org_name+' => '',
	'Class:NetworkFlow/Attribute:protocol' => 'Protocolo',
	'Class:NetworkFlow/Attribute:protocol+' => '',
	'Class:NetworkFlow/Attribute:protocol/Value:UDP' => 'UDP',
	'Class:NetworkFlow/Attribute:protocol/Value:UDP+' => 'Protocolo UDP',
	'Class:NetworkFlow/Attribute:protocol/Value:TCP' => 'TCP',
	'Class:NetworkFlow/Attribute:protocol/Value:TCP+' => 'Protocolo TCP',
	'Class:NetworkFlow/Attribute:protocol/Value:UDP/TCP' => 'UDP/TCP',
	'Class:NetworkFlow/Attribute:protocol/Value:UDP/TCP+' => 'Protocolo UDP ou TCP',
	'Class:NetworkFlow/Attribute:protocol/Value:Other' => 'Outro',
	'Class:NetworkFlow/Attribute:protocol/Value:Other+' => 'Outro protocolo',
	'Class:NetworkFlow/Attribute:source_port' => 'Porta de origem',
	'Class:NetworkFlow/Attribute:source_port+' => '',
	'Class:NetworkFlow/Attribute:dest_port' => 'Porta de destino',
	'Class:NetworkFlow/Attribute:dest_port+' => '',
	'Class:NetworkFlow/Attribute:source_ci_id' => 'CI de Origem',
	'Class:NetworkFlow/Attribute:source_ci_id+' => 'CI Funcional de onde o fluxo se origina',
	'Class:NetworkFlow/Attribute:source_ci_name' => 'Nome do CI de origem',
	'Class:NetworkFlow/Attribute:source_ci_name+' => '',
	'Class:NetworkFlow/Attribute:dest_ci_id' => 'CI de Destino',
	'Class:NetworkFlow/Attribute:dest_ci_id+' => 'CI Funcional para onde o fluxo chega',
	'Class:NetworkFlow/Attribute:dest_ci_name' => 'Nome do CI de destino',
	'Class:NetworkFlow/Attribute:dest_ci_name+' => '',
    'Class:NetworkFlow/Attribute:source_ipaddress_id' => 'IP de Origem',
    'Class:NetworkFlow/Attribute:source_ipaddress_id+' => 'Endereço IP de onde o fluxo se origina',
    'Class:NetworkFlow/Attribute:source_ipaddress_fqdn' => 'FQDN do IP de Origem',
    'Class:NetworkFlow/Attribute:source_ipaddress_fqdn+' => 'FQDN do endereço IP de origem',
    'Class:NetworkFlow/Attribute:dest_ipaddress_id' => 'IP de Destino',
    'Class:NetworkFlow/Attribute:dest_ipaddress_id+' => 'Endereço IP para onde o fluxo chega',
    'Class:NetworkFlow/Attribute:dest_ipaddress_fqdn' => 'FQDN do IP de Destino',
    'Class:NetworkFlow/Attribute:dest_ipaddress_fqdn+' => 'FQDN do endereço IP de destino',
	'Class:NetworkFlow/Attribute:status' => 'Status',
	'Class:NetworkFlow/Attribute:status+' => '',
	'Class:NetworkFlow/Attribute:status/Value:production' => 'Produção',
	'Class:NetworkFlow/Attribute:status/Value:production+' => '',
	'Class:NetworkFlow/Attribute:status/Value:implementation' => 'Implementação',
	'Class:NetworkFlow/Attribute:status/Value:implementation+' => '',
	'Class:NetworkFlow/Attribute:status/Value:obsolete' => 'Obsoleto',
	'Class:NetworkFlow/Attribute:status/Value:obsolete+' => '',
	'Class:NetworkFlow/Attribute:move2production' => 'Data de entrada em produção',
	'Class:NetworkFlow/Attribute:move2production+' => '',
	'Class:NetworkFlow/Attribute:description' => 'Descrição',
	'Class:NetworkFlow/Attribute:description+' => '',
	'Class:NetworkFlow/Attribute:business_criticity' => 'Criticidade para o negócio',
	'Class:NetworkFlow/Attribute:business_criticity+' => '',
	'Class:NetworkFlow/Attribute:business_criticity/Value:low' => 'Baixa',
	'Class:NetworkFlow/Attribute:business_criticity/Value:low+' => '',
	'Class:NetworkFlow/Attribute:business_criticity/Value:medium' => 'Média',
	'Class:NetworkFlow/Attribute:business_criticity/Value:medium+' => '',
	'Class:NetworkFlow/Attribute:business_criticity/Value:high' => 'Alta',
	'Class:NetworkFlow/Attribute:business_criticity/Value:high+' => '',
	'Class:NetworkFlow/Attribute:networkflowcapacity_id' => 'Capacidade',
	'Class:NetworkFlow/Attribute:networkflowcapacity_id+' => 'Tamanho máximo de pacotes ou rajadas (bursts)',
	'Class:NetworkFlow/Attribute:interfacespeed_id' => 'Largura de banda', // Ou "Banda"
	'Class:NetworkFlow/Attribute:interfacespeed_id+' => 'Velocidade máxima disponível',
));

//
// Class: NetworkModule
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
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

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
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
    'Class:NetworkModuleType/Attribute:optical_reach/Value:other' => 'Other',
    'Class:NetworkModuleType/Attribute:optical_reach/Value:other+' => '',
    'Class:NetworkModuleType/Attribute:wltx' => 'TX lambda',
    'Class:NetworkModuleType/Attribute:wltx+' => 'Wavelength or TX wavelength for bidirectional modules',
    'Class:NetworkModuleType/Attribute:wlrx' => 'RX lambda',
    'Class:NetworkModuleType/Attribute:wlrx+' => 'RX wavelength for bidirectional modules',
    'Class:NetworkModuleType/Attribute:networkmodules_list' => 'Network modules',
    'Class:NetworkModuleType/Attribute:networkmodules_list+' => 'List of all network modules of this type',
    'NetworkModuleType:Overview:NetworkModules' => 'List of all network modules of this type',
));

//
// Menus
//

Dict::Add('PT BR', 'Brazilian', 'Brazilian', array(
	'Menu:NetworkMgmtExtended:Typology' => 'Configuração de tipologia de rede',
	'Relation:networkflow/Description' => 'Diagrama de Fluxo de Rede',
	'Relation:networkflow/DownStream' => 'Fluxo de Saída...',
	'Relation:networkflow/DownStream+' => 'Diagrama de Fluxo de Rede de Saída',
	'Relation:networkflow/UpStream' => 'Fluxo de Entrada...',
	'Relation:networkflow/UpStream+' => 'Diagrama de Fluxo de Rede de Entrada',

    'UI:NetworkMgmtExtended:Action:CreateOrUpdate:PhysicalInterface:PointToConnectorAndModule' => 'A physical interface cannot be linked to BOTH an interface connector and a network module!',
));

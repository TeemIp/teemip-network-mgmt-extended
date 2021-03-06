<?php
// Copyright (C) 2021 TeemIp
//
//   This file is part of TeemIp.
//
//   TeemIp is free software; you can redistribute it and/or modify
//   it under the terms of the GNU Affero General Public License as published by
//   the Free Software Foundation, either version 3 of the License, or
//   (at your option) any later version.
//
//   TeemIp is distributed in the hope that it will be useful,
//   but WITHOUT ANY WARRANTY; without even the implied warranty of
//   MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
//   GNU Affero General Public License for more details.
//
//   You should have received a copy of the GNU Affero General Public License
//   along with TeemIp. If not, see <http://www.gnu.org/licenses/>

/**
 * @copyright   Copyright (C) 2021 TeemIp
 * @license     http://opensource.org/licenses/AGPL-3.0
 */

SetupWebPage::AddModule(
	__FILE__, // Path to the current file, all other file names are relative to the directory containing this file
	'teemip-network-mgmt-extended/1.1.0',
	array(
		// Identification
		//
		'label' => 'Network Management Extended',
		'category' => 'business',
		
		// Setup
		//
		'dependencies' => array(
			'teemip-network-mgmt/2.7.1',
			'teemip-config-mgmt-adaptor/2.7.0',
		),
		'mandatory' => false,
		'visible' => true,
		'installer' => 'NetworkMgmtExtendedInstaller',

		// Components
		//
		'datamodel' => array(
			'model.teemip-network-mgmt-extended.php',
		),
		'data.struct' => array(
			//'data.struct.IPAudit.xml',
		),
		'data.sample' => array(
			'data.sample.InterfaceConnector.xml',
			'data.sample.InterfaceSpeed.xml',
			'data.sample.Layer2Protocol.xml',
		),
		
		// Documentation
		//
		'doc.manual_setup' => '',
		'doc.more_information' => 'https://wiki.teemip.net/doku.php?id=extensions:teemip-network-mgmt-extended',
		
		// Default settings
		//
		'settings' => array(
		),
	)
);

if (!class_exists('NetworkMgmtExtendedInstaller'))
{
	// Module installation handler
	//
	class NetworkMgmtExtendedInstaller extends ModuleInstallerAPI
	{
		public static function BeforeWritingConfig(Config $oConfiguration)
		{
			// If you want to override/force some configuration values, do it here
			return $oConfiguration;
		}

		/**
		 * Handler called before creating or upgrading the database schema
		 * @param $oConfiguration Config The new configuration of the application
		 * @param $sPreviousVersion string PRevious version number of the module (empty string in case of first install)
		 * @param $sCurrentVersion string Current version number of the module
		 */
		public static function BeforeDatabaseCreation(Config $oConfiguration, $sPreviousVersion, $sCurrentVersion)
		{
			// If you want to migrate data from one format to another, do it here
			if ($sPreviousVersion == '1.0.0')
			{
				SetupPage::log_info("Module teemip-network-mgmt-extended: copy VLAN tags to name and reset them as they become integers only");

				$sSQL1 = "ALTER TABLE vlan ADD name varchar(255)";
				$sSQL2 = "UPDATE vlan SET name = vlan_tag";
				$sSQL3 = "UPDATE vlan SET vlan_tag = 0";
				CMDBSource::Query($sSQL1);
				CMDBSource::Query($sSQL2);
				CMDBSource::Query($sSQL3);

				SetupPage::log_info("Module teemip-network-mgmt-extended: VLAN tag migration done");
			}
		}

		/**
		 * Handler called after the creation/update of the database schema
		 *
		 * @param $oConfiguration Config The new configuration of the application
		 * @param $sPreviousVersion string PRevious version number of the module (empty string in case of first install)
		 * @param $sCurrentVersion string Current version number of the module
		 *
		 * @throws \CoreException
		 * @throws \MySQLException
		 * @throws \MySQLHasGoneAwayException
		 */
		public static function AfterDatabaseCreation(Config $oConfiguration, $sPreviousVersion, $sCurrentVersion)
		{

		}
	}
}

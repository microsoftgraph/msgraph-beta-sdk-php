<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;

/**
 * Contains properties used to assign an iOS Declarative Device Management (DDM) VPP mobile app to a group.
*/
class IosDdmVppAppAssignmentSettings extends MobileAppAssignmentSettings implements Parsable 
{
    /**
     * Instantiates a new IosDdmVppAppAssignmentSettings and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.iosDdmVppAppAssignmentSettings');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return IosDdmVppAppAssignmentSettings
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): IosDdmVppAppAssignmentSettings {
        return new IosDdmVppAppAssignmentSettings();
    }

    /**
     * Gets the allowDownloadsOverCellular property value. Specifies whether the app may be downloaded over cellular connections. Possible values are: 'alwaysOn', 'alwaysOff', 'storeSettings'. By default, this value is set to 'storeSettings'.
     * @return DdmAppAllowDownloadsOverCellular|null
    */
    public function getAllowDownloadsOverCellular(): ?DdmAppAllowDownloadsOverCellular {
        $val = $this->getBackingStore()->get('allowDownloadsOverCellular');
        if (is_null($val) || $val instanceof DdmAppAllowDownloadsOverCellular) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'allowDownloadsOverCellular'");
    }

    /**
     * Gets the associatedDomains property value. Domain names to associate with the app
     * @return array<string>|null
    */
    public function getAssociatedDomains(): ?array {
        $val = $this->getBackingStore()->get('associatedDomains');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associatedDomains'");
    }

    /**
     * Gets the associatedDomainsDirectDownloadAllowed property value. When true, the system allows direct downloads for the AssociatedDomains. When false, the system will not allow direct downloads for the AssociatedDomains. Default is false.
     * @return bool|null
    */
    public function getAssociatedDomainsDirectDownloadAllowed(): ?bool {
        $val = $this->getBackingStore()->get('associatedDomainsDirectDownloadAllowed');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'associatedDomainsDirectDownloadAllowed'");
    }

    /**
     * Gets the automaticAppUpdates property value. Specifies whether the device automatically updates the app. Possible values are: 'alwaysOn', 'alwaysOff', 'storeSettings'. By default, this value is set to 'storeSettings'.
     * @return DdmAppAutomaticAppUpdates|null
    */
    public function getAutomaticAppUpdates(): ?DdmAppAutomaticAppUpdates {
        $val = $this->getBackingStore()->get('automaticAppUpdates');
        if (is_null($val) || $val instanceof DdmAppAutomaticAppUpdates) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'automaticAppUpdates'");
    }

    /**
     * Gets the cellularSliceConfigurationId property value. The cellular slice identifier, which can be the data network name (DNN) or app category. For DNN, encode the value as 'DNN:name', where 'name' is the carrier-provided DNN name. For app category, encode the value as 'AppCategory:category', where 'category' is a carrier-provided string such as 'Enterprise1'.
     * @return string|null
    */
    public function getCellularSliceConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('cellularSliceConfigurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'cellularSliceConfigurationId'");
    }

    /**
     * Gets the contentFilterConfigurationId property value. The unique identifier of the content filter to associate with the app.
     * @return string|null
    */
    public function getContentFilterConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('contentFilterConfigurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'contentFilterConfigurationId'");
    }

    /**
     * Gets the ddmAppConfigId property value. The unique identifier of the DDM app configuration to associate with the app.
     * @return string|null
    */
    public function getDdmAppConfigId(): ?string {
        $val = $this->getBackingStore()->get('ddmAppConfigId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'ddmAppConfigId'");
    }

    /**
     * Gets the dnsProxyConfigurationId property value. The unique identifier of the DNS proxy to associate with the app.
     * @return string|null
    */
    public function getDnsProxyConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('dnsProxyConfigurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'dnsProxyConfigurationId'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'allowDownloadsOverCellular' => fn(ParseNode $n) => $o->setAllowDownloadsOverCellular($n->getEnumValue(DdmAppAllowDownloadsOverCellular::class)),
            'associatedDomains' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setAssociatedDomains($val);
            },
            'associatedDomainsDirectDownloadAllowed' => fn(ParseNode $n) => $o->setAssociatedDomainsDirectDownloadAllowed($n->getBooleanValue()),
            'automaticAppUpdates' => fn(ParseNode $n) => $o->setAutomaticAppUpdates($n->getEnumValue(DdmAppAutomaticAppUpdates::class)),
            'cellularSliceConfigurationId' => fn(ParseNode $n) => $o->setCellularSliceConfigurationId($n->getStringValue()),
            'contentFilterConfigurationId' => fn(ParseNode $n) => $o->setContentFilterConfigurationId($n->getStringValue()),
            'ddmAppConfigId' => fn(ParseNode $n) => $o->setDdmAppConfigId($n->getStringValue()),
            'dnsProxyConfigurationId' => fn(ParseNode $n) => $o->setDnsProxyConfigurationId($n->getStringValue()),
            'preventManagedAppBackup' => fn(ParseNode $n) => $o->setPreventManagedAppBackup($n->getBooleanValue()),
            'relayConfigurationId' => fn(ParseNode $n) => $o->setRelayConfigurationId($n->getStringValue()),
            'tapToPayScreenLockEnabled' => fn(ParseNode $n) => $o->setTapToPayScreenLockEnabled($n->getBooleanValue()),
            'useDeviceLicensing' => fn(ParseNode $n) => $o->setUseDeviceLicensing($n->getBooleanValue()),
            'version' => fn(ParseNode $n) => $o->setVersion($n->getIntegerValue()),
            'vpnConfigurationId' => fn(ParseNode $n) => $o->setVpnConfigurationId($n->getStringValue()),
        ]);
    }

    /**
     * Gets the preventManagedAppBackup property value. When true, indicates that the app should not be backed up to iCloud. When false, indicates that the app may be backed up to iCloud. Default is false.
     * @return bool|null
    */
    public function getPreventManagedAppBackup(): ?bool {
        $val = $this->getBackingStore()->get('preventManagedAppBackup');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'preventManagedAppBackup'");
    }

    /**
     * Gets the relayConfigurationId property value. The unique identifier of the relay to associate with the app.
     * @return string|null
    */
    public function getRelayConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('relayConfigurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'relayConfigurationId'");
    }

    /**
     * Gets the tapToPayScreenLockEnabled property value. When true, the device locks its screen after every transaction that requires a customer's card PIN. When false, the user can choose the behavior. Default value is false.
     * @return bool|null
    */
    public function getTapToPayScreenLockEnabled(): ?bool {
        $val = $this->getBackingStore()->get('tapToPayScreenLockEnabled');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'tapToPayScreenLockEnabled'");
    }

    /**
     * Gets the useDeviceLicensing property value. Whether or not to use device licensing.
     * @return bool|null
    */
    public function getUseDeviceLicensing(): ?bool {
        $val = $this->getBackingStore()->get('useDeviceLicensing');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useDeviceLicensing'");
    }

    /**
     * Gets the version property value. Specifies the version of the VPP app to install. When not set, the device installs the latest version. When set, the device installs the specified version. The device never installs an older version of the app over a newer version. This property maps to the Version key in Apple's AppManagedInstallBehaviorObject declaration.
     * @return int|null
    */
    public function getVersion(): ?int {
        $val = $this->getBackingStore()->get('version');
        if (is_null($val) || is_int($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'version'");
    }

    /**
     * Gets the vpnConfigurationId property value. The unique identifier of the VPN Configuration to apply to the app.
     * @return string|null
    */
    public function getVpnConfigurationId(): ?string {
        $val = $this->getBackingStore()->get('vpnConfigurationId');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'vpnConfigurationId'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeEnumValue('allowDownloadsOverCellular', $this->getAllowDownloadsOverCellular());
        $writer->writeCollectionOfPrimitiveValues('associatedDomains', $this->getAssociatedDomains());
        $writer->writeBooleanValue('associatedDomainsDirectDownloadAllowed', $this->getAssociatedDomainsDirectDownloadAllowed());
        $writer->writeEnumValue('automaticAppUpdates', $this->getAutomaticAppUpdates());
        $writer->writeStringValue('cellularSliceConfigurationId', $this->getCellularSliceConfigurationId());
        $writer->writeStringValue('contentFilterConfigurationId', $this->getContentFilterConfigurationId());
        $writer->writeStringValue('ddmAppConfigId', $this->getDdmAppConfigId());
        $writer->writeStringValue('dnsProxyConfigurationId', $this->getDnsProxyConfigurationId());
        $writer->writeBooleanValue('preventManagedAppBackup', $this->getPreventManagedAppBackup());
        $writer->writeStringValue('relayConfigurationId', $this->getRelayConfigurationId());
        $writer->writeBooleanValue('tapToPayScreenLockEnabled', $this->getTapToPayScreenLockEnabled());
        $writer->writeBooleanValue('useDeviceLicensing', $this->getUseDeviceLicensing());
        $writer->writeIntegerValue('version', $this->getVersion());
        $writer->writeStringValue('vpnConfigurationId', $this->getVpnConfigurationId());
    }

    /**
     * Sets the allowDownloadsOverCellular property value. Specifies whether the app may be downloaded over cellular connections. Possible values are: 'alwaysOn', 'alwaysOff', 'storeSettings'. By default, this value is set to 'storeSettings'.
     * @param DdmAppAllowDownloadsOverCellular|null $value Value to set for the allowDownloadsOverCellular property.
    */
    public function setAllowDownloadsOverCellular(?DdmAppAllowDownloadsOverCellular $value): void {
        $this->getBackingStore()->set('allowDownloadsOverCellular', $value);
    }

    /**
     * Sets the associatedDomains property value. Domain names to associate with the app
     * @param array<string>|null $value Value to set for the associatedDomains property.
    */
    public function setAssociatedDomains(?array $value): void {
        $this->getBackingStore()->set('associatedDomains', $value);
    }

    /**
     * Sets the associatedDomainsDirectDownloadAllowed property value. When true, the system allows direct downloads for the AssociatedDomains. When false, the system will not allow direct downloads for the AssociatedDomains. Default is false.
     * @param bool|null $value Value to set for the associatedDomainsDirectDownloadAllowed property.
    */
    public function setAssociatedDomainsDirectDownloadAllowed(?bool $value): void {
        $this->getBackingStore()->set('associatedDomainsDirectDownloadAllowed', $value);
    }

    /**
     * Sets the automaticAppUpdates property value. Specifies whether the device automatically updates the app. Possible values are: 'alwaysOn', 'alwaysOff', 'storeSettings'. By default, this value is set to 'storeSettings'.
     * @param DdmAppAutomaticAppUpdates|null $value Value to set for the automaticAppUpdates property.
    */
    public function setAutomaticAppUpdates(?DdmAppAutomaticAppUpdates $value): void {
        $this->getBackingStore()->set('automaticAppUpdates', $value);
    }

    /**
     * Sets the cellularSliceConfigurationId property value. The cellular slice identifier, which can be the data network name (DNN) or app category. For DNN, encode the value as 'DNN:name', where 'name' is the carrier-provided DNN name. For app category, encode the value as 'AppCategory:category', where 'category' is a carrier-provided string such as 'Enterprise1'.
     * @param string|null $value Value to set for the cellularSliceConfigurationId property.
    */
    public function setCellularSliceConfigurationId(?string $value): void {
        $this->getBackingStore()->set('cellularSliceConfigurationId', $value);
    }

    /**
     * Sets the contentFilterConfigurationId property value. The unique identifier of the content filter to associate with the app.
     * @param string|null $value Value to set for the contentFilterConfigurationId property.
    */
    public function setContentFilterConfigurationId(?string $value): void {
        $this->getBackingStore()->set('contentFilterConfigurationId', $value);
    }

    /**
     * Sets the ddmAppConfigId property value. The unique identifier of the DDM app configuration to associate with the app.
     * @param string|null $value Value to set for the ddmAppConfigId property.
    */
    public function setDdmAppConfigId(?string $value): void {
        $this->getBackingStore()->set('ddmAppConfigId', $value);
    }

    /**
     * Sets the dnsProxyConfigurationId property value. The unique identifier of the DNS proxy to associate with the app.
     * @param string|null $value Value to set for the dnsProxyConfigurationId property.
    */
    public function setDnsProxyConfigurationId(?string $value): void {
        $this->getBackingStore()->set('dnsProxyConfigurationId', $value);
    }

    /**
     * Sets the preventManagedAppBackup property value. When true, indicates that the app should not be backed up to iCloud. When false, indicates that the app may be backed up to iCloud. Default is false.
     * @param bool|null $value Value to set for the preventManagedAppBackup property.
    */
    public function setPreventManagedAppBackup(?bool $value): void {
        $this->getBackingStore()->set('preventManagedAppBackup', $value);
    }

    /**
     * Sets the relayConfigurationId property value. The unique identifier of the relay to associate with the app.
     * @param string|null $value Value to set for the relayConfigurationId property.
    */
    public function setRelayConfigurationId(?string $value): void {
        $this->getBackingStore()->set('relayConfigurationId', $value);
    }

    /**
     * Sets the tapToPayScreenLockEnabled property value. When true, the device locks its screen after every transaction that requires a customer's card PIN. When false, the user can choose the behavior. Default value is false.
     * @param bool|null $value Value to set for the tapToPayScreenLockEnabled property.
    */
    public function setTapToPayScreenLockEnabled(?bool $value): void {
        $this->getBackingStore()->set('tapToPayScreenLockEnabled', $value);
    }

    /**
     * Sets the useDeviceLicensing property value. Whether or not to use device licensing.
     * @param bool|null $value Value to set for the useDeviceLicensing property.
    */
    public function setUseDeviceLicensing(?bool $value): void {
        $this->getBackingStore()->set('useDeviceLicensing', $value);
    }

    /**
     * Sets the version property value. Specifies the version of the VPP app to install. When not set, the device installs the latest version. When set, the device installs the specified version. The device never installs an older version of the app over a newer version. This property maps to the Version key in Apple's AppManagedInstallBehaviorObject declaration.
     * @param int|null $value Value to set for the version property.
    */
    public function setVersion(?int $value): void {
        $this->getBackingStore()->set('version', $value);
    }

    /**
     * Sets the vpnConfigurationId property value. The unique identifier of the VPN Configuration to apply to the app.
     * @param string|null $value Value to set for the vpnConfigurationId property.
    */
    public function setVpnConfigurationId(?string $value): void {
        $this->getBackingStore()->set('vpnConfigurationId', $value);
    }

}

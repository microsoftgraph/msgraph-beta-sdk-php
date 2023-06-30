<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Microsoft\Kiota\Abstractions\Types\TypeUtils;
use Psr\Http\Message\StreamInterface;

class OfficeSuiteApp extends MobileApp implements Parsable 
{
    /**
     * Instantiates a new OfficeSuiteApp and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.officeSuiteApp');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return OfficeSuiteApp
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): OfficeSuiteApp {
        return new OfficeSuiteApp();
    }

    /**
     * Gets the autoAcceptEula property value. The value to accept the EULA automatically on the enduser's device.
     * @return bool|null
    */
    public function getAutoAcceptEula(): ?bool {
        $val = $this->getBackingStore()->get('autoAcceptEula');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'autoAcceptEula'");
    }

    /**
     * Gets the excludedApps property value. The property to represent the apps which are excluded from the selected Office365 Product Id.
     * @return ExcludedApps|null
    */
    public function getExcludedApps(): ?ExcludedApps {
        $val = $this->getBackingStore()->get('excludedApps');
        if (is_null($val) || $val instanceof ExcludedApps) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'excludedApps'");
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable(ParseNode): void>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'autoAcceptEula' => fn(ParseNode $n) => $o->setAutoAcceptEula($n->getBooleanValue()),
            'excludedApps' => fn(ParseNode $n) => $o->setExcludedApps($n->getObjectValue([ExcludedApps::class, 'createFromDiscriminatorValue'])),
            'installProgressDisplayLevel' => fn(ParseNode $n) => $o->setInstallProgressDisplayLevel($n->getEnumValue(OfficeSuiteInstallProgressDisplayLevel::class)),
            'localesToInstall' => function (ParseNode $n) {
                $val = $n->getCollectionOfPrimitiveValues();
                if (is_array($val)) {
                    TypeUtils::validateCollectionValues($val, 'string');
                }
                /** @var array<string>|null $val */
                $this->setLocalesToInstall($val);
            },
            'officeConfigurationXml' => fn(ParseNode $n) => $o->setOfficeConfigurationXml($n->getBinaryContent()),
            'officePlatformArchitecture' => fn(ParseNode $n) => $o->setOfficePlatformArchitecture($n->getEnumValue(WindowsArchitecture::class)),
            'officeSuiteAppDefaultFileFormat' => fn(ParseNode $n) => $o->setOfficeSuiteAppDefaultFileFormat($n->getEnumValue(OfficeSuiteDefaultFileFormatType::class)),
            'productIds' => fn(ParseNode $n) => $o->setProductIds($n->getCollectionOfEnumValues(OfficeProductId::class)),
            'shouldUninstallOlderVersionsOfOffice' => fn(ParseNode $n) => $o->setShouldUninstallOlderVersionsOfOffice($n->getBooleanValue()),
            'targetVersion' => fn(ParseNode $n) => $o->setTargetVersion($n->getStringValue()),
            'updateChannel' => fn(ParseNode $n) => $o->setUpdateChannel($n->getEnumValue(OfficeUpdateChannel::class)),
            'updateVersion' => fn(ParseNode $n) => $o->setUpdateVersion($n->getStringValue()),
            'useSharedComputerActivation' => fn(ParseNode $n) => $o->setUseSharedComputerActivation($n->getBooleanValue()),
        ]);
    }

    /**
     * Gets the installProgressDisplayLevel property value. The Enum to specify the level of display for the Installation Progress Setup UI on the Device.
     * @return OfficeSuiteInstallProgressDisplayLevel|null
    */
    public function getInstallProgressDisplayLevel(): ?OfficeSuiteInstallProgressDisplayLevel {
        $val = $this->getBackingStore()->get('installProgressDisplayLevel');
        if (is_null($val) || $val instanceof OfficeSuiteInstallProgressDisplayLevel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'installProgressDisplayLevel'");
    }

    /**
     * Gets the localesToInstall property value. The property to represent the locales which are installed when the apps from Office365 is installed. It uses standard RFC 6033. Ref: https://technet.microsoft.com/library/cc179219(v=office.16).aspx
     * @return array<string>|null
    */
    public function getLocalesToInstall(): ?array {
        $val = $this->getBackingStore()->get('localesToInstall');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, 'string');
            /** @var array<string>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'localesToInstall'");
    }

    /**
     * Gets the officeConfigurationXml property value. The property to represent the XML configuration file that can be specified for Office ProPlus Apps. Takes precedence over all other properties. When present, the XML configuration file will be used to create the app.
     * @return StreamInterface|null
    */
    public function getOfficeConfigurationXml(): ?StreamInterface {
        $val = $this->getBackingStore()->get('officeConfigurationXml');
        if (is_null($val) || $val instanceof StreamInterface) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'officeConfigurationXml'");
    }

    /**
     * Gets the officePlatformArchitecture property value. Contains properties for Windows architecture.
     * @return WindowsArchitecture|null
    */
    public function getOfficePlatformArchitecture(): ?WindowsArchitecture {
        $val = $this->getBackingStore()->get('officePlatformArchitecture');
        if (is_null($val) || $val instanceof WindowsArchitecture) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'officePlatformArchitecture'");
    }

    /**
     * Gets the officeSuiteAppDefaultFileFormat property value. Describes the OfficeSuiteApp file format types that can be selected.
     * @return OfficeSuiteDefaultFileFormatType|null
    */
    public function getOfficeSuiteAppDefaultFileFormat(): ?OfficeSuiteDefaultFileFormatType {
        $val = $this->getBackingStore()->get('officeSuiteAppDefaultFileFormat');
        if (is_null($val) || $val instanceof OfficeSuiteDefaultFileFormatType) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'officeSuiteAppDefaultFileFormat'");
    }

    /**
     * Gets the productIds property value. The Product Ids that represent the Office365 Suite SKU.
     * @return array<OfficeProductId>|null
    */
    public function getProductIds(): ?array {
        $val = $this->getBackingStore()->get('productIds');
        if (is_array($val) || is_null($val)) {
            TypeUtils::validateCollectionValues($val, OfficeProductId::class);
            /** @var array<OfficeProductId>|null $val */
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'productIds'");
    }

    /**
     * Gets the shouldUninstallOlderVersionsOfOffice property value. The property to determine whether to uninstall existing Office MSI if an Office365 app suite is deployed to the device or not.
     * @return bool|null
    */
    public function getShouldUninstallOlderVersionsOfOffice(): ?bool {
        $val = $this->getBackingStore()->get('shouldUninstallOlderVersionsOfOffice');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'shouldUninstallOlderVersionsOfOffice'");
    }

    /**
     * Gets the targetVersion property value. The property to represent the specific target version for the Office365 app suite that should be remained deployed on the devices.
     * @return string|null
    */
    public function getTargetVersion(): ?string {
        $val = $this->getBackingStore()->get('targetVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'targetVersion'");
    }

    /**
     * Gets the updateChannel property value. The Enum to specify the Office365 Updates Channel.
     * @return OfficeUpdateChannel|null
    */
    public function getUpdateChannel(): ?OfficeUpdateChannel {
        $val = $this->getBackingStore()->get('updateChannel');
        if (is_null($val) || $val instanceof OfficeUpdateChannel) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateChannel'");
    }

    /**
     * Gets the updateVersion property value. The property to represent the update version in which the specific target version is available for the Office365 app suite.
     * @return string|null
    */
    public function getUpdateVersion(): ?string {
        $val = $this->getBackingStore()->get('updateVersion');
        if (is_null($val) || is_string($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'updateVersion'");
    }

    /**
     * Gets the useSharedComputerActivation property value. The property to represent that whether the shared computer activation is used not for Office365 app suite.
     * @return bool|null
    */
    public function getUseSharedComputerActivation(): ?bool {
        $val = $this->getBackingStore()->get('useSharedComputerActivation');
        if (is_null($val) || is_bool($val)) {
            return $val;
        }
        throw new \UnexpectedValueException("Invalid type found in backing store for 'useSharedComputerActivation'");
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('autoAcceptEula', $this->getAutoAcceptEula());
        $writer->writeObjectValue('excludedApps', $this->getExcludedApps());
        $writer->writeEnumValue('installProgressDisplayLevel', $this->getInstallProgressDisplayLevel());
        $writer->writeCollectionOfPrimitiveValues('localesToInstall', $this->getLocalesToInstall());
        $writer->writeBinaryContent('officeConfigurationXml', $this->getOfficeConfigurationXml());
        $writer->writeEnumValue('officePlatformArchitecture', $this->getOfficePlatformArchitecture());
        $writer->writeEnumValue('officeSuiteAppDefaultFileFormat', $this->getOfficeSuiteAppDefaultFileFormat());
        $writer->writeCollectionOfEnumValues('productIds', $this->getProductIds());
        $writer->writeBooleanValue('shouldUninstallOlderVersionsOfOffice', $this->getShouldUninstallOlderVersionsOfOffice());
        $writer->writeStringValue('targetVersion', $this->getTargetVersion());
        $writer->writeEnumValue('updateChannel', $this->getUpdateChannel());
        $writer->writeStringValue('updateVersion', $this->getUpdateVersion());
        $writer->writeBooleanValue('useSharedComputerActivation', $this->getUseSharedComputerActivation());
    }

    /**
     * Sets the autoAcceptEula property value. The value to accept the EULA automatically on the enduser's device.
     * @param bool|null $value Value to set for the autoAcceptEula property.
    */
    public function setAutoAcceptEula(?bool $value): void {
        $this->getBackingStore()->set('autoAcceptEula', $value);
    }

    /**
     * Sets the excludedApps property value. The property to represent the apps which are excluded from the selected Office365 Product Id.
     * @param ExcludedApps|null $value Value to set for the excludedApps property.
    */
    public function setExcludedApps(?ExcludedApps $value): void {
        $this->getBackingStore()->set('excludedApps', $value);
    }

    /**
     * Sets the installProgressDisplayLevel property value. The Enum to specify the level of display for the Installation Progress Setup UI on the Device.
     * @param OfficeSuiteInstallProgressDisplayLevel|null $value Value to set for the installProgressDisplayLevel property.
    */
    public function setInstallProgressDisplayLevel(?OfficeSuiteInstallProgressDisplayLevel $value): void {
        $this->getBackingStore()->set('installProgressDisplayLevel', $value);
    }

    /**
     * Sets the localesToInstall property value. The property to represent the locales which are installed when the apps from Office365 is installed. It uses standard RFC 6033. Ref: https://technet.microsoft.com/library/cc179219(v=office.16).aspx
     * @param array<string>|null $value Value to set for the localesToInstall property.
    */
    public function setLocalesToInstall(?array $value): void {
        $this->getBackingStore()->set('localesToInstall', $value);
    }

    /**
     * Sets the officeConfigurationXml property value. The property to represent the XML configuration file that can be specified for Office ProPlus Apps. Takes precedence over all other properties. When present, the XML configuration file will be used to create the app.
     * @param StreamInterface|null $value Value to set for the officeConfigurationXml property.
    */
    public function setOfficeConfigurationXml(?StreamInterface $value): void {
        $this->getBackingStore()->set('officeConfigurationXml', $value);
    }

    /**
     * Sets the officePlatformArchitecture property value. Contains properties for Windows architecture.
     * @param WindowsArchitecture|null $value Value to set for the officePlatformArchitecture property.
    */
    public function setOfficePlatformArchitecture(?WindowsArchitecture $value): void {
        $this->getBackingStore()->set('officePlatformArchitecture', $value);
    }

    /**
     * Sets the officeSuiteAppDefaultFileFormat property value. Describes the OfficeSuiteApp file format types that can be selected.
     * @param OfficeSuiteDefaultFileFormatType|null $value Value to set for the officeSuiteAppDefaultFileFormat property.
    */
    public function setOfficeSuiteAppDefaultFileFormat(?OfficeSuiteDefaultFileFormatType $value): void {
        $this->getBackingStore()->set('officeSuiteAppDefaultFileFormat', $value);
    }

    /**
     * Sets the productIds property value. The Product Ids that represent the Office365 Suite SKU.
     * @param array<OfficeProductId>|null $value Value to set for the productIds property.
    */
    public function setProductIds(?array $value): void {
        $this->getBackingStore()->set('productIds', $value);
    }

    /**
     * Sets the shouldUninstallOlderVersionsOfOffice property value. The property to determine whether to uninstall existing Office MSI if an Office365 app suite is deployed to the device or not.
     * @param bool|null $value Value to set for the shouldUninstallOlderVersionsOfOffice property.
    */
    public function setShouldUninstallOlderVersionsOfOffice(?bool $value): void {
        $this->getBackingStore()->set('shouldUninstallOlderVersionsOfOffice', $value);
    }

    /**
     * Sets the targetVersion property value. The property to represent the specific target version for the Office365 app suite that should be remained deployed on the devices.
     * @param string|null $value Value to set for the targetVersion property.
    */
    public function setTargetVersion(?string $value): void {
        $this->getBackingStore()->set('targetVersion', $value);
    }

    /**
     * Sets the updateChannel property value. The Enum to specify the Office365 Updates Channel.
     * @param OfficeUpdateChannel|null $value Value to set for the updateChannel property.
    */
    public function setUpdateChannel(?OfficeUpdateChannel $value): void {
        $this->getBackingStore()->set('updateChannel', $value);
    }

    /**
     * Sets the updateVersion property value. The property to represent the update version in which the specific target version is available for the Office365 app suite.
     * @param string|null $value Value to set for the updateVersion property.
    */
    public function setUpdateVersion(?string $value): void {
        $this->getBackingStore()->set('updateVersion', $value);
    }

    /**
     * Sets the useSharedComputerActivation property value. The property to represent that whether the shared computer activation is used not for Office365 app suite.
     * @param bool|null $value Value to set for the useSharedComputerActivation property.
    */
    public function setUseSharedComputerActivation(?bool $value): void {
        $this->getBackingStore()->set('useSharedComputerActivation', $value);
    }

}

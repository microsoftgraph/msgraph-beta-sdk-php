<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;
use Psr\Http\Message\StreamInterface;

class OfficeSuiteApp extends MobileApp implements Parsable 
{
    /**
     * @var bool|null $autoAcceptEula The value to accept the EULA automatically on the enduser's device.
    */
    private ?bool $autoAcceptEula = null;
    
    /**
     * @var ExcludedApps|null $excludedApps The property to represent the apps which are excluded from the selected Office365 Product Id.
    */
    private ?ExcludedApps $excludedApps = null;
    
    /**
     * @var OfficeSuiteInstallProgressDisplayLevel|null $installProgressDisplayLevel The Enum to specify the level of display for the Installation Progress Setup UI on the Device.
    */
    private ?OfficeSuiteInstallProgressDisplayLevel $installProgressDisplayLevel = null;
    
    /**
     * @var array<string>|null $localesToInstall The property to represent the locales which are installed when the apps from Office365 is installed. It uses standard RFC 6033. Ref: https://technet.microsoft.com/library/cc179219(v=office.16).aspx
    */
    private ?array $localesToInstall = null;
    
    /**
     * @var StreamInterface|null $officeConfigurationXml The property to represent the XML configuration file that can be specified for Office ProPlus Apps. Takes precedence over all other properties. When present, the XML configuration file will be used to create the app.
    */
    private ?StreamInterface $officeConfigurationXml = null;
    
    /**
     * @var WindowsArchitecture|null $officePlatformArchitecture Contains properties for Windows architecture.
    */
    private ?WindowsArchitecture $officePlatformArchitecture = null;
    
    /**
     * @var OfficeSuiteDefaultFileFormatType|null $officeSuiteAppDefaultFileFormat Describes the OfficeSuiteApp file format types that can be selected.
    */
    private ?OfficeSuiteDefaultFileFormatType $officeSuiteAppDefaultFileFormat = null;
    
    /**
     * @var array<OfficeProductId>|null $productIds The Product Ids that represent the Office365 Suite SKU.
    */
    private ?array $productIds = null;
    
    /**
     * @var bool|null $shouldUninstallOlderVersionsOfOffice The property to determine whether to uninstall existing Office MSI if an Office365 app suite is deployed to the device or not.
    */
    private ?bool $shouldUninstallOlderVersionsOfOffice = null;
    
    /**
     * @var string|null $targetVersion The property to represent the specific target version for the Office365 app suite that should be remained deployed on the devices.
    */
    private ?string $targetVersion = null;
    
    /**
     * @var OfficeUpdateChannel|null $updateChannel The Enum to specify the Office365 Updates Channel.
    */
    private ?OfficeUpdateChannel $updateChannel = null;
    
    /**
     * @var string|null $updateVersion The property to represent the update version in which the specific target version is available for the Office365 app suite.
    */
    private ?string $updateVersion = null;
    
    /**
     * @var bool|null $useSharedComputerActivation The property to represent that whether the shared computer activation is used not for Office365 app suite.
    */
    private ?bool $useSharedComputerActivation = null;
    
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
        return $this->autoAcceptEula;
    }

    /**
     * Gets the excludedApps property value. The property to represent the apps which are excluded from the selected Office365 Product Id.
     * @return ExcludedApps|null
    */
    public function getExcludedApps(): ?ExcludedApps {
        return $this->excludedApps;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'autoAcceptEula' => function (ParseNode $n) use ($o) { $o->setAutoAcceptEula($n->getBooleanValue()); },
            'excludedApps' => function (ParseNode $n) use ($o) { $o->setExcludedApps($n->getObjectValue(array(ExcludedApps::class, 'createFromDiscriminatorValue'))); },
            'installProgressDisplayLevel' => function (ParseNode $n) use ($o) { $o->setInstallProgressDisplayLevel($n->getEnumValue(OfficeSuiteInstallProgressDisplayLevel::class)); },
            'localesToInstall' => function (ParseNode $n) use ($o) { $o->setLocalesToInstall($n->getCollectionOfPrimitiveValues()); },
            'officeConfigurationXml' => function (ParseNode $n) use ($o) { $o->setOfficeConfigurationXml($n->getBinaryContent()); },
            'officePlatformArchitecture' => function (ParseNode $n) use ($o) { $o->setOfficePlatformArchitecture($n->getEnumValue(WindowsArchitecture::class)); },
            'officeSuiteAppDefaultFileFormat' => function (ParseNode $n) use ($o) { $o->setOfficeSuiteAppDefaultFileFormat($n->getEnumValue(OfficeSuiteDefaultFileFormatType::class)); },
            'productIds' => function (ParseNode $n) use ($o) { $o->setProductIds($n->getCollectionOfEnumValues(OfficeProductId::class)); },
            'shouldUninstallOlderVersionsOfOffice' => function (ParseNode $n) use ($o) { $o->setShouldUninstallOlderVersionsOfOffice($n->getBooleanValue()); },
            'targetVersion' => function (ParseNode $n) use ($o) { $o->setTargetVersion($n->getStringValue()); },
            'updateChannel' => function (ParseNode $n) use ($o) { $o->setUpdateChannel($n->getEnumValue(OfficeUpdateChannel::class)); },
            'updateVersion' => function (ParseNode $n) use ($o) { $o->setUpdateVersion($n->getStringValue()); },
            'useSharedComputerActivation' => function (ParseNode $n) use ($o) { $o->setUseSharedComputerActivation($n->getBooleanValue()); },
        ]);
    }

    /**
     * Gets the installProgressDisplayLevel property value. The Enum to specify the level of display for the Installation Progress Setup UI on the Device.
     * @return OfficeSuiteInstallProgressDisplayLevel|null
    */
    public function getInstallProgressDisplayLevel(): ?OfficeSuiteInstallProgressDisplayLevel {
        return $this->installProgressDisplayLevel;
    }

    /**
     * Gets the localesToInstall property value. The property to represent the locales which are installed when the apps from Office365 is installed. It uses standard RFC 6033. Ref: https://technet.microsoft.com/library/cc179219(v=office.16).aspx
     * @return array<string>|null
    */
    public function getLocalesToInstall(): ?array {
        return $this->localesToInstall;
    }

    /**
     * Gets the officeConfigurationXml property value. The property to represent the XML configuration file that can be specified for Office ProPlus Apps. Takes precedence over all other properties. When present, the XML configuration file will be used to create the app.
     * @return StreamInterface|null
    */
    public function getOfficeConfigurationXml(): ?StreamInterface {
        return $this->officeConfigurationXml;
    }

    /**
     * Gets the officePlatformArchitecture property value. Contains properties for Windows architecture.
     * @return WindowsArchitecture|null
    */
    public function getOfficePlatformArchitecture(): ?WindowsArchitecture {
        return $this->officePlatformArchitecture;
    }

    /**
     * Gets the officeSuiteAppDefaultFileFormat property value. Describes the OfficeSuiteApp file format types that can be selected.
     * @return OfficeSuiteDefaultFileFormatType|null
    */
    public function getOfficeSuiteAppDefaultFileFormat(): ?OfficeSuiteDefaultFileFormatType {
        return $this->officeSuiteAppDefaultFileFormat;
    }

    /**
     * Gets the productIds property value. The Product Ids that represent the Office365 Suite SKU.
     * @return array<OfficeProductId>|null
    */
    public function getProductIds(): ?array {
        return $this->productIds;
    }

    /**
     * Gets the shouldUninstallOlderVersionsOfOffice property value. The property to determine whether to uninstall existing Office MSI if an Office365 app suite is deployed to the device or not.
     * @return bool|null
    */
    public function getShouldUninstallOlderVersionsOfOffice(): ?bool {
        return $this->shouldUninstallOlderVersionsOfOffice;
    }

    /**
     * Gets the targetVersion property value. The property to represent the specific target version for the Office365 app suite that should be remained deployed on the devices.
     * @return string|null
    */
    public function getTargetVersion(): ?string {
        return $this->targetVersion;
    }

    /**
     * Gets the updateChannel property value. The Enum to specify the Office365 Updates Channel.
     * @return OfficeUpdateChannel|null
    */
    public function getUpdateChannel(): ?OfficeUpdateChannel {
        return $this->updateChannel;
    }

    /**
     * Gets the updateVersion property value. The property to represent the update version in which the specific target version is available for the Office365 app suite.
     * @return string|null
    */
    public function getUpdateVersion(): ?string {
        return $this->updateVersion;
    }

    /**
     * Gets the useSharedComputerActivation property value. The property to represent that whether the shared computer activation is used not for Office365 app suite.
     * @return bool|null
    */
    public function getUseSharedComputerActivation(): ?bool {
        return $this->useSharedComputerActivation;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeBooleanValue('autoAcceptEula', $this->autoAcceptEula);
        $writer->writeObjectValue('excludedApps', $this->excludedApps);
        $writer->writeEnumValue('installProgressDisplayLevel', $this->installProgressDisplayLevel);
        $writer->writeCollectionOfPrimitiveValues('localesToInstall', $this->localesToInstall);
        $writer->writeBinaryContent('officeConfigurationXml', $this->officeConfigurationXml);
        $writer->writeEnumValue('officePlatformArchitecture', $this->officePlatformArchitecture);
        $writer->writeEnumValue('officeSuiteAppDefaultFileFormat', $this->officeSuiteAppDefaultFileFormat);
        $writer->writeCollectionOfEnumValues('productIds', $this->productIds);
        $writer->writeBooleanValue('shouldUninstallOlderVersionsOfOffice', $this->shouldUninstallOlderVersionsOfOffice);
        $writer->writeStringValue('targetVersion', $this->targetVersion);
        $writer->writeEnumValue('updateChannel', $this->updateChannel);
        $writer->writeStringValue('updateVersion', $this->updateVersion);
        $writer->writeBooleanValue('useSharedComputerActivation', $this->useSharedComputerActivation);
    }

    /**
     * Sets the autoAcceptEula property value. The value to accept the EULA automatically on the enduser's device.
     *  @param bool|null $value Value to set for the autoAcceptEula property.
    */
    public function setAutoAcceptEula(?bool $value ): void {
        $this->autoAcceptEula = $value;
    }

    /**
     * Sets the excludedApps property value. The property to represent the apps which are excluded from the selected Office365 Product Id.
     *  @param ExcludedApps|null $value Value to set for the excludedApps property.
    */
    public function setExcludedApps(?ExcludedApps $value ): void {
        $this->excludedApps = $value;
    }

    /**
     * Sets the installProgressDisplayLevel property value. The Enum to specify the level of display for the Installation Progress Setup UI on the Device.
     *  @param OfficeSuiteInstallProgressDisplayLevel|null $value Value to set for the installProgressDisplayLevel property.
    */
    public function setInstallProgressDisplayLevel(?OfficeSuiteInstallProgressDisplayLevel $value ): void {
        $this->installProgressDisplayLevel = $value;
    }

    /**
     * Sets the localesToInstall property value. The property to represent the locales which are installed when the apps from Office365 is installed. It uses standard RFC 6033. Ref: https://technet.microsoft.com/library/cc179219(v=office.16).aspx
     *  @param array<string>|null $value Value to set for the localesToInstall property.
    */
    public function setLocalesToInstall(?array $value ): void {
        $this->localesToInstall = $value;
    }

    /**
     * Sets the officeConfigurationXml property value. The property to represent the XML configuration file that can be specified for Office ProPlus Apps. Takes precedence over all other properties. When present, the XML configuration file will be used to create the app.
     *  @param StreamInterface|null $value Value to set for the officeConfigurationXml property.
    */
    public function setOfficeConfigurationXml(?StreamInterface $value ): void {
        $this->officeConfigurationXml = $value;
    }

    /**
     * Sets the officePlatformArchitecture property value. Contains properties for Windows architecture.
     *  @param WindowsArchitecture|null $value Value to set for the officePlatformArchitecture property.
    */
    public function setOfficePlatformArchitecture(?WindowsArchitecture $value ): void {
        $this->officePlatformArchitecture = $value;
    }

    /**
     * Sets the officeSuiteAppDefaultFileFormat property value. Describes the OfficeSuiteApp file format types that can be selected.
     *  @param OfficeSuiteDefaultFileFormatType|null $value Value to set for the officeSuiteAppDefaultFileFormat property.
    */
    public function setOfficeSuiteAppDefaultFileFormat(?OfficeSuiteDefaultFileFormatType $value ): void {
        $this->officeSuiteAppDefaultFileFormat = $value;
    }

    /**
     * Sets the productIds property value. The Product Ids that represent the Office365 Suite SKU.
     *  @param array<OfficeProductId>|null $value Value to set for the productIds property.
    */
    public function setProductIds(?array $value ): void {
        $this->productIds = $value;
    }

    /**
     * Sets the shouldUninstallOlderVersionsOfOffice property value. The property to determine whether to uninstall existing Office MSI if an Office365 app suite is deployed to the device or not.
     *  @param bool|null $value Value to set for the shouldUninstallOlderVersionsOfOffice property.
    */
    public function setShouldUninstallOlderVersionsOfOffice(?bool $value ): void {
        $this->shouldUninstallOlderVersionsOfOffice = $value;
    }

    /**
     * Sets the targetVersion property value. The property to represent the specific target version for the Office365 app suite that should be remained deployed on the devices.
     *  @param string|null $value Value to set for the targetVersion property.
    */
    public function setTargetVersion(?string $value ): void {
        $this->targetVersion = $value;
    }

    /**
     * Sets the updateChannel property value. The Enum to specify the Office365 Updates Channel.
     *  @param OfficeUpdateChannel|null $value Value to set for the updateChannel property.
    */
    public function setUpdateChannel(?OfficeUpdateChannel $value ): void {
        $this->updateChannel = $value;
    }

    /**
     * Sets the updateVersion property value. The property to represent the update version in which the specific target version is available for the Office365 app suite.
     *  @param string|null $value Value to set for the updateVersion property.
    */
    public function setUpdateVersion(?string $value ): void {
        $this->updateVersion = $value;
    }

    /**
     * Sets the useSharedComputerActivation property value. The property to represent that whether the shared computer activation is used not for Office365 app suite.
     *  @param bool|null $value Value to set for the useSharedComputerActivation property.
    */
    public function setUseSharedComputerActivation(?bool $value ): void {
        $this->useSharedComputerActivation = $value;
    }

}

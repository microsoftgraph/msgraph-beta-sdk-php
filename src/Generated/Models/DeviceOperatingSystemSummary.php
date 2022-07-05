<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceOperatingSystemSummary implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $androidCorporateWorkProfileCount The count of Corporate work profile Android devices. Also known as Corporate Owned Personally Enabled (COPE). Valid values -1 to 2147483647
    */
    private ?int $androidCorporateWorkProfileCount = null;
    
    /**
     * @var int|null $androidCount Number of android device count.
    */
    private ?int $androidCount = null;
    
    /**
     * @var int|null $androidDedicatedCount Number of dedicated Android devices.
    */
    private ?int $androidDedicatedCount = null;
    
    /**
     * @var int|null $androidDeviceAdminCount Number of device admin Android devices.
    */
    private ?int $androidDeviceAdminCount = null;
    
    /**
     * @var int|null $androidFullyManagedCount Number of fully managed Android devices.
    */
    private ?int $androidFullyManagedCount = null;
    
    /**
     * @var int|null $androidWorkProfileCount Number of work profile Android devices.
    */
    private ?int $androidWorkProfileCount = null;
    
    /**
     * @var int|null $aospUserAssociatedCount Number of AOSP user-associated Android devices. Valid values 0 to 2147483647
    */
    private ?int $aospUserAssociatedCount = null;
    
    /**
     * @var int|null $aospUserlessCount Number of AOSP userless Android devices. Valid values 0 to 2147483647
    */
    private ?int $aospUserlessCount = null;
    
    /**
     * @var int|null $chromeOSCount Number of Chrome OS devices. Valid values 0 to 2147483647
    */
    private ?int $chromeOSCount = null;
    
    /**
     * @var int|null $configMgrDeviceCount Number of ConfigMgr managed devices.
    */
    private ?int $configMgrDeviceCount = null;
    
    /**
     * @var int|null $iosCount Number of iOS device count.
    */
    private ?int $iosCount = null;
    
    /**
     * @var int|null $linuxCount Number of Linux OS devices. Valid values 0 to 2147483647
    */
    private ?int $linuxCount = null;
    
    /**
     * @var int|null $macOSCount Number of Mac OS X device count.
    */
    private ?int $macOSCount = null;
    
    /**
     * @var int|null $unknownCount Number of unknown device count.
    */
    private ?int $unknownCount = null;
    
    /**
     * @var int|null $windowsCount Number of Windows device count.
    */
    private ?int $windowsCount = null;
    
    /**
     * @var int|null $windowsMobileCount Number of Windows mobile device count.
    */
    private ?int $windowsMobileCount = null;
    
    /**
     * Instantiates a new deviceOperatingSystemSummary and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceOperatingSystemSummary
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceOperatingSystemSummary {
        return new DeviceOperatingSystemSummary();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the androidCorporateWorkProfileCount property value. The count of Corporate work profile Android devices. Also known as Corporate Owned Personally Enabled (COPE). Valid values -1 to 2147483647
     * @return int|null
    */
    public function getAndroidCorporateWorkProfileCount(): ?int {
        return $this->androidCorporateWorkProfileCount;
    }

    /**
     * Gets the androidCount property value. Number of android device count.
     * @return int|null
    */
    public function getAndroidCount(): ?int {
        return $this->androidCount;
    }

    /**
     * Gets the androidDedicatedCount property value. Number of dedicated Android devices.
     * @return int|null
    */
    public function getAndroidDedicatedCount(): ?int {
        return $this->androidDedicatedCount;
    }

    /**
     * Gets the androidDeviceAdminCount property value. Number of device admin Android devices.
     * @return int|null
    */
    public function getAndroidDeviceAdminCount(): ?int {
        return $this->androidDeviceAdminCount;
    }

    /**
     * Gets the androidFullyManagedCount property value. Number of fully managed Android devices.
     * @return int|null
    */
    public function getAndroidFullyManagedCount(): ?int {
        return $this->androidFullyManagedCount;
    }

    /**
     * Gets the androidWorkProfileCount property value. Number of work profile Android devices.
     * @return int|null
    */
    public function getAndroidWorkProfileCount(): ?int {
        return $this->androidWorkProfileCount;
    }

    /**
     * Gets the aospUserAssociatedCount property value. Number of AOSP user-associated Android devices. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getAospUserAssociatedCount(): ?int {
        return $this->aospUserAssociatedCount;
    }

    /**
     * Gets the aospUserlessCount property value. Number of AOSP userless Android devices. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getAospUserlessCount(): ?int {
        return $this->aospUserlessCount;
    }

    /**
     * Gets the chromeOSCount property value. Number of Chrome OS devices. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getChromeOSCount(): ?int {
        return $this->chromeOSCount;
    }

    /**
     * Gets the configMgrDeviceCount property value. Number of ConfigMgr managed devices.
     * @return int|null
    */
    public function getConfigMgrDeviceCount(): ?int {
        return $this->configMgrDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'androidCorporateWorkProfileCount' => function (ParseNode $n) use ($o) { $o->setAndroidCorporateWorkProfileCount($n->getIntegerValue()); },
            'androidCount' => function (ParseNode $n) use ($o) { $o->setAndroidCount($n->getIntegerValue()); },
            'androidDedicatedCount' => function (ParseNode $n) use ($o) { $o->setAndroidDedicatedCount($n->getIntegerValue()); },
            'androidDeviceAdminCount' => function (ParseNode $n) use ($o) { $o->setAndroidDeviceAdminCount($n->getIntegerValue()); },
            'androidFullyManagedCount' => function (ParseNode $n) use ($o) { $o->setAndroidFullyManagedCount($n->getIntegerValue()); },
            'androidWorkProfileCount' => function (ParseNode $n) use ($o) { $o->setAndroidWorkProfileCount($n->getIntegerValue()); },
            'aospUserAssociatedCount' => function (ParseNode $n) use ($o) { $o->setAospUserAssociatedCount($n->getIntegerValue()); },
            'aospUserlessCount' => function (ParseNode $n) use ($o) { $o->setAospUserlessCount($n->getIntegerValue()); },
            'chromeOSCount' => function (ParseNode $n) use ($o) { $o->setChromeOSCount($n->getIntegerValue()); },
            'configMgrDeviceCount' => function (ParseNode $n) use ($o) { $o->setConfigMgrDeviceCount($n->getIntegerValue()); },
            'iosCount' => function (ParseNode $n) use ($o) { $o->setIosCount($n->getIntegerValue()); },
            'linuxCount' => function (ParseNode $n) use ($o) { $o->setLinuxCount($n->getIntegerValue()); },
            'macOSCount' => function (ParseNode $n) use ($o) { $o->setMacOSCount($n->getIntegerValue()); },
            'unknownCount' => function (ParseNode $n) use ($o) { $o->setUnknownCount($n->getIntegerValue()); },
            'windowsCount' => function (ParseNode $n) use ($o) { $o->setWindowsCount($n->getIntegerValue()); },
            'windowsMobileCount' => function (ParseNode $n) use ($o) { $o->setWindowsMobileCount($n->getIntegerValue()); },
        ];
    }

    /**
     * Gets the iosCount property value. Number of iOS device count.
     * @return int|null
    */
    public function getIosCount(): ?int {
        return $this->iosCount;
    }

    /**
     * Gets the linuxCount property value. Number of Linux OS devices. Valid values 0 to 2147483647
     * @return int|null
    */
    public function getLinuxCount(): ?int {
        return $this->linuxCount;
    }

    /**
     * Gets the macOSCount property value. Number of Mac OS X device count.
     * @return int|null
    */
    public function getMacOSCount(): ?int {
        return $this->macOSCount;
    }

    /**
     * Gets the unknownCount property value. Number of unknown device count.
     * @return int|null
    */
    public function getUnknownCount(): ?int {
        return $this->unknownCount;
    }

    /**
     * Gets the windowsCount property value. Number of Windows device count.
     * @return int|null
    */
    public function getWindowsCount(): ?int {
        return $this->windowsCount;
    }

    /**
     * Gets the windowsMobileCount property value. Number of Windows mobile device count.
     * @return int|null
    */
    public function getWindowsMobileCount(): ?int {
        return $this->windowsMobileCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeIntegerValue('androidCorporateWorkProfileCount', $this->androidCorporateWorkProfileCount);
        $writer->writeIntegerValue('androidCount', $this->androidCount);
        $writer->writeIntegerValue('androidDedicatedCount', $this->androidDedicatedCount);
        $writer->writeIntegerValue('androidDeviceAdminCount', $this->androidDeviceAdminCount);
        $writer->writeIntegerValue('androidFullyManagedCount', $this->androidFullyManagedCount);
        $writer->writeIntegerValue('androidWorkProfileCount', $this->androidWorkProfileCount);
        $writer->writeIntegerValue('aospUserAssociatedCount', $this->aospUserAssociatedCount);
        $writer->writeIntegerValue('aospUserlessCount', $this->aospUserlessCount);
        $writer->writeIntegerValue('chromeOSCount', $this->chromeOSCount);
        $writer->writeIntegerValue('configMgrDeviceCount', $this->configMgrDeviceCount);
        $writer->writeIntegerValue('iosCount', $this->iosCount);
        $writer->writeIntegerValue('linuxCount', $this->linuxCount);
        $writer->writeIntegerValue('macOSCount', $this->macOSCount);
        $writer->writeIntegerValue('unknownCount', $this->unknownCount);
        $writer->writeIntegerValue('windowsCount', $this->windowsCount);
        $writer->writeIntegerValue('windowsMobileCount', $this->windowsMobileCount);
        $writer->writeAdditionalData($this->additionalData);
    }

    /**
     * Sets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     *  @param array<string,mixed> $value Value to set for the AdditionalData property.
    */
    public function setAdditionalData(?array $value ): void {
        $this->additionalData = $value;
    }

    /**
     * Sets the androidCorporateWorkProfileCount property value. The count of Corporate work profile Android devices. Also known as Corporate Owned Personally Enabled (COPE). Valid values -1 to 2147483647
     *  @param int|null $value Value to set for the androidCorporateWorkProfileCount property.
    */
    public function setAndroidCorporateWorkProfileCount(?int $value ): void {
        $this->androidCorporateWorkProfileCount = $value;
    }

    /**
     * Sets the androidCount property value. Number of android device count.
     *  @param int|null $value Value to set for the androidCount property.
    */
    public function setAndroidCount(?int $value ): void {
        $this->androidCount = $value;
    }

    /**
     * Sets the androidDedicatedCount property value. Number of dedicated Android devices.
     *  @param int|null $value Value to set for the androidDedicatedCount property.
    */
    public function setAndroidDedicatedCount(?int $value ): void {
        $this->androidDedicatedCount = $value;
    }

    /**
     * Sets the androidDeviceAdminCount property value. Number of device admin Android devices.
     *  @param int|null $value Value to set for the androidDeviceAdminCount property.
    */
    public function setAndroidDeviceAdminCount(?int $value ): void {
        $this->androidDeviceAdminCount = $value;
    }

    /**
     * Sets the androidFullyManagedCount property value. Number of fully managed Android devices.
     *  @param int|null $value Value to set for the androidFullyManagedCount property.
    */
    public function setAndroidFullyManagedCount(?int $value ): void {
        $this->androidFullyManagedCount = $value;
    }

    /**
     * Sets the androidWorkProfileCount property value. Number of work profile Android devices.
     *  @param int|null $value Value to set for the androidWorkProfileCount property.
    */
    public function setAndroidWorkProfileCount(?int $value ): void {
        $this->androidWorkProfileCount = $value;
    }

    /**
     * Sets the aospUserAssociatedCount property value. Number of AOSP user-associated Android devices. Valid values 0 to 2147483647
     *  @param int|null $value Value to set for the aospUserAssociatedCount property.
    */
    public function setAospUserAssociatedCount(?int $value ): void {
        $this->aospUserAssociatedCount = $value;
    }

    /**
     * Sets the aospUserlessCount property value. Number of AOSP userless Android devices. Valid values 0 to 2147483647
     *  @param int|null $value Value to set for the aospUserlessCount property.
    */
    public function setAospUserlessCount(?int $value ): void {
        $this->aospUserlessCount = $value;
    }

    /**
     * Sets the chromeOSCount property value. Number of Chrome OS devices. Valid values 0 to 2147483647
     *  @param int|null $value Value to set for the chromeOSCount property.
    */
    public function setChromeOSCount(?int $value ): void {
        $this->chromeOSCount = $value;
    }

    /**
     * Sets the configMgrDeviceCount property value. Number of ConfigMgr managed devices.
     *  @param int|null $value Value to set for the configMgrDeviceCount property.
    */
    public function setConfigMgrDeviceCount(?int $value ): void {
        $this->configMgrDeviceCount = $value;
    }

    /**
     * Sets the iosCount property value. Number of iOS device count.
     *  @param int|null $value Value to set for the iosCount property.
    */
    public function setIosCount(?int $value ): void {
        $this->iosCount = $value;
    }

    /**
     * Sets the linuxCount property value. Number of Linux OS devices. Valid values 0 to 2147483647
     *  @param int|null $value Value to set for the linuxCount property.
    */
    public function setLinuxCount(?int $value ): void {
        $this->linuxCount = $value;
    }

    /**
     * Sets the macOSCount property value. Number of Mac OS X device count.
     *  @param int|null $value Value to set for the macOSCount property.
    */
    public function setMacOSCount(?int $value ): void {
        $this->macOSCount = $value;
    }

    /**
     * Sets the unknownCount property value. Number of unknown device count.
     *  @param int|null $value Value to set for the unknownCount property.
    */
    public function setUnknownCount(?int $value ): void {
        $this->unknownCount = $value;
    }

    /**
     * Sets the windowsCount property value. Number of Windows device count.
     *  @param int|null $value Value to set for the windowsCount property.
    */
    public function setWindowsCount(?int $value ): void {
        $this->windowsCount = $value;
    }

    /**
     * Sets the windowsMobileCount property value. Number of Windows mobile device count.
     *  @param int|null $value Value to set for the windowsMobileCount property.
    */
    public function setWindowsMobileCount(?int $value ): void {
        $this->windowsMobileCount = $value;
    }

}

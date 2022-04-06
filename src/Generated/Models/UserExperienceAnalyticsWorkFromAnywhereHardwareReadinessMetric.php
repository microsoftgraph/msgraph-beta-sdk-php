<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric extends Entity 
{
    /** @var float|null $osCheckFailedPercentage The percentage of devices for which OS check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $osCheckFailedPercentage = null;
    
    /** @var float|null $processor64BitCheckFailedPercentage The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $processor64BitCheckFailedPercentage = null;
    
    /** @var float|null $processorCoreCountCheckFailedPercentage The percentage of devices for which processor hardware core count check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $processorCoreCountCheckFailedPercentage = null;
    
    /** @var float|null $processorFamilyCheckFailedPercentage The percentage of devices for which processor hardware family check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $processorFamilyCheckFailedPercentage = null;
    
    /** @var float|null $processorSpeedCheckFailedPercentage The percentage of devices for which processor hardware speed check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $processorSpeedCheckFailedPercentage = null;
    
    /** @var float|null $ramCheckFailedPercentage The percentage of devices for which RAM hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $ramCheckFailedPercentage = null;
    
    /** @var float|null $secureBootCheckFailedPercentage The percentage of devices for which secure boot hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $secureBootCheckFailedPercentage = null;
    
    /** @var float|null $storageCheckFailedPercentage The percentage of devices for which storage hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $storageCheckFailedPercentage = null;
    
    /** @var int|null $totalDeviceCount The count of total devices in an organization. Valid values -2147483648 to 2147483647 */
    private ?int $totalDeviceCount = null;
    
    /** @var float|null $tpmCheckFailedPercentage The percentage of devices for which Trusted Platform Module (TPM) hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308 */
    private ?float $tpmCheckFailedPercentage = null;
    
    /** @var int|null $upgradeEligibleDeviceCount The count of devices in an organization eligible for windows upgrade. Valid values -2147483648 to 2147483647 */
    private ?int $upgradeEligibleDeviceCount = null;
    
    /**
     * Instantiates a new userExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric
    */
    public function createFromDiscriminatorValue(ParseNode $parseNode): UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric {
        return new UserExperienceAnalyticsWorkFromAnywhereHardwareReadinessMetric();
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        return array_merge(parent::getFieldDeserializers(), [
            'osCheckFailedPercentage' => function (self $o, ParseNode $n) { $o->setOsCheckFailedPercentage($n->getFloatValue()); },
            'processor64BitCheckFailedPercentage' => function (self $o, ParseNode $n) { $o->setProcessor64BitCheckFailedPercentage($n->getFloatValue()); },
            'processorCoreCountCheckFailedPercentage' => function (self $o, ParseNode $n) { $o->setProcessorCoreCountCheckFailedPercentage($n->getFloatValue()); },
            'processorFamilyCheckFailedPercentage' => function (self $o, ParseNode $n) { $o->setProcessorFamilyCheckFailedPercentage($n->getFloatValue()); },
            'processorSpeedCheckFailedPercentage' => function (self $o, ParseNode $n) { $o->setProcessorSpeedCheckFailedPercentage($n->getFloatValue()); },
            'ramCheckFailedPercentage' => function (self $o, ParseNode $n) { $o->setRamCheckFailedPercentage($n->getFloatValue()); },
            'secureBootCheckFailedPercentage' => function (self $o, ParseNode $n) { $o->setSecureBootCheckFailedPercentage($n->getFloatValue()); },
            'storageCheckFailedPercentage' => function (self $o, ParseNode $n) { $o->setStorageCheckFailedPercentage($n->getFloatValue()); },
            'totalDeviceCount' => function (self $o, ParseNode $n) { $o->setTotalDeviceCount($n->getIntegerValue()); },
            'tpmCheckFailedPercentage' => function (self $o, ParseNode $n) { $o->setTpmCheckFailedPercentage($n->getFloatValue()); },
            'upgradeEligibleDeviceCount' => function (self $o, ParseNode $n) { $o->setUpgradeEligibleDeviceCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the osCheckFailedPercentage property value. The percentage of devices for which OS check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getOsCheckFailedPercentage(): ?float {
        return $this->osCheckFailedPercentage;
    }

    /**
     * Gets the processor64BitCheckFailedPercentage property value. The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getProcessor64BitCheckFailedPercentage(): ?float {
        return $this->processor64BitCheckFailedPercentage;
    }

    /**
     * Gets the processorCoreCountCheckFailedPercentage property value. The percentage of devices for which processor hardware core count check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getProcessorCoreCountCheckFailedPercentage(): ?float {
        return $this->processorCoreCountCheckFailedPercentage;
    }

    /**
     * Gets the processorFamilyCheckFailedPercentage property value. The percentage of devices for which processor hardware family check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getProcessorFamilyCheckFailedPercentage(): ?float {
        return $this->processorFamilyCheckFailedPercentage;
    }

    /**
     * Gets the processorSpeedCheckFailedPercentage property value. The percentage of devices for which processor hardware speed check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getProcessorSpeedCheckFailedPercentage(): ?float {
        return $this->processorSpeedCheckFailedPercentage;
    }

    /**
     * Gets the ramCheckFailedPercentage property value. The percentage of devices for which RAM hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getRamCheckFailedPercentage(): ?float {
        return $this->ramCheckFailedPercentage;
    }

    /**
     * Gets the secureBootCheckFailedPercentage property value. The percentage of devices for which secure boot hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getSecureBootCheckFailedPercentage(): ?float {
        return $this->secureBootCheckFailedPercentage;
    }

    /**
     * Gets the storageCheckFailedPercentage property value. The percentage of devices for which storage hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getStorageCheckFailedPercentage(): ?float {
        return $this->storageCheckFailedPercentage;
    }

    /**
     * Gets the totalDeviceCount property value. The count of total devices in an organization. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getTotalDeviceCount(): ?int {
        return $this->totalDeviceCount;
    }

    /**
     * Gets the tpmCheckFailedPercentage property value. The percentage of devices for which Trusted Platform Module (TPM) hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     * @return float|null
    */
    public function getTpmCheckFailedPercentage(): ?float {
        return $this->tpmCheckFailedPercentage;
    }

    /**
     * Gets the upgradeEligibleDeviceCount property value. The count of devices in an organization eligible for windows upgrade. Valid values -2147483648 to 2147483647
     * @return int|null
    */
    public function getUpgradeEligibleDeviceCount(): ?int {
        return $this->upgradeEligibleDeviceCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeFloatValue('osCheckFailedPercentage', $this->osCheckFailedPercentage);
        $writer->writeFloatValue('processor64BitCheckFailedPercentage', $this->processor64BitCheckFailedPercentage);
        $writer->writeFloatValue('processorCoreCountCheckFailedPercentage', $this->processorCoreCountCheckFailedPercentage);
        $writer->writeFloatValue('processorFamilyCheckFailedPercentage', $this->processorFamilyCheckFailedPercentage);
        $writer->writeFloatValue('processorSpeedCheckFailedPercentage', $this->processorSpeedCheckFailedPercentage);
        $writer->writeFloatValue('ramCheckFailedPercentage', $this->ramCheckFailedPercentage);
        $writer->writeFloatValue('secureBootCheckFailedPercentage', $this->secureBootCheckFailedPercentage);
        $writer->writeFloatValue('storageCheckFailedPercentage', $this->storageCheckFailedPercentage);
        $writer->writeIntegerValue('totalDeviceCount', $this->totalDeviceCount);
        $writer->writeFloatValue('tpmCheckFailedPercentage', $this->tpmCheckFailedPercentage);
        $writer->writeIntegerValue('upgradeEligibleDeviceCount', $this->upgradeEligibleDeviceCount);
    }

    /**
     * Sets the osCheckFailedPercentage property value. The percentage of devices for which OS check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the osCheckFailedPercentage property.
    */
    public function setOsCheckFailedPercentage(?float $value ): void {
        $this->osCheckFailedPercentage = $value;
    }

    /**
     * Sets the processor64BitCheckFailedPercentage property value. The percentage of devices for which processor hardware 64-bit architecture check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the processor64BitCheckFailedPercentage property.
    */
    public function setProcessor64BitCheckFailedPercentage(?float $value ): void {
        $this->processor64BitCheckFailedPercentage = $value;
    }

    /**
     * Sets the processorCoreCountCheckFailedPercentage property value. The percentage of devices for which processor hardware core count check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the processorCoreCountCheckFailedPercentage property.
    */
    public function setProcessorCoreCountCheckFailedPercentage(?float $value ): void {
        $this->processorCoreCountCheckFailedPercentage = $value;
    }

    /**
     * Sets the processorFamilyCheckFailedPercentage property value. The percentage of devices for which processor hardware family check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the processorFamilyCheckFailedPercentage property.
    */
    public function setProcessorFamilyCheckFailedPercentage(?float $value ): void {
        $this->processorFamilyCheckFailedPercentage = $value;
    }

    /**
     * Sets the processorSpeedCheckFailedPercentage property value. The percentage of devices for which processor hardware speed check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the processorSpeedCheckFailedPercentage property.
    */
    public function setProcessorSpeedCheckFailedPercentage(?float $value ): void {
        $this->processorSpeedCheckFailedPercentage = $value;
    }

    /**
     * Sets the ramCheckFailedPercentage property value. The percentage of devices for which RAM hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the ramCheckFailedPercentage property.
    */
    public function setRamCheckFailedPercentage(?float $value ): void {
        $this->ramCheckFailedPercentage = $value;
    }

    /**
     * Sets the secureBootCheckFailedPercentage property value. The percentage of devices for which secure boot hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the secureBootCheckFailedPercentage property.
    */
    public function setSecureBootCheckFailedPercentage(?float $value ): void {
        $this->secureBootCheckFailedPercentage = $value;
    }

    /**
     * Sets the storageCheckFailedPercentage property value. The percentage of devices for which storage hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the storageCheckFailedPercentage property.
    */
    public function setStorageCheckFailedPercentage(?float $value ): void {
        $this->storageCheckFailedPercentage = $value;
    }

    /**
     * Sets the totalDeviceCount property value. The count of total devices in an organization. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the totalDeviceCount property.
    */
    public function setTotalDeviceCount(?int $value ): void {
        $this->totalDeviceCount = $value;
    }

    /**
     * Sets the tpmCheckFailedPercentage property value. The percentage of devices for which Trusted Platform Module (TPM) hardware check has failed. Valid values -1.79769313486232E+308 to 1.79769313486232E+308
     *  @param float|null $value Value to set for the tpmCheckFailedPercentage property.
    */
    public function setTpmCheckFailedPercentage(?float $value ): void {
        $this->tpmCheckFailedPercentage = $value;
    }

    /**
     * Sets the upgradeEligibleDeviceCount property value. The count of devices in an organization eligible for windows upgrade. Valid values -2147483648 to 2147483647
     *  @param int|null $value Value to set for the upgradeEligibleDeviceCount property.
    */
    public function setUpgradeEligibleDeviceCount(?int $value ): void {
        $this->upgradeEligibleDeviceCount = $value;
    }

}

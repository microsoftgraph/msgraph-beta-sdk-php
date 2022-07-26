<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ManagedDeviceOverview extends Entity implements Parsable 
{
    /**
     * @var DeviceExchangeAccessStateSummary|null $deviceExchangeAccessStateSummary Distribution of Exchange Access State in Intune
    */
    private ?DeviceExchangeAccessStateSummary $deviceExchangeAccessStateSummary = null;
    
    /**
     * @var DeviceOperatingSystemSummary|null $deviceOperatingSystemSummary Device operating system summary.
    */
    private ?DeviceOperatingSystemSummary $deviceOperatingSystemSummary = null;
    
    /**
     * @var int|null $dualEnrolledDeviceCount The number of devices enrolled in both MDM and EAS
    */
    private ?int $dualEnrolledDeviceCount = null;
    
    /**
     * @var int|null $enrolledDeviceCount Total enrolled device count. Does not include PC devices managed via Intune PC Agent
    */
    private ?int $enrolledDeviceCount = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Last modified date time of device overview
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var ManagedDeviceModelsAndManufacturers|null $managedDeviceModelsAndManufacturers Models and Manufactures meatadata for managed devices in the account
    */
    private ?ManagedDeviceModelsAndManufacturers $managedDeviceModelsAndManufacturers = null;
    
    /**
     * @var int|null $mdmEnrolledCount The number of devices enrolled in MDM
    */
    private ?int $mdmEnrolledCount = null;
    
    /**
     * Instantiates a new managedDeviceOverview and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.managedDeviceOverview');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ManagedDeviceOverview
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ManagedDeviceOverview {
        return new ManagedDeviceOverview();
    }

    /**
     * Gets the deviceExchangeAccessStateSummary property value. Distribution of Exchange Access State in Intune
     * @return DeviceExchangeAccessStateSummary|null
    */
    public function getDeviceExchangeAccessStateSummary(): ?DeviceExchangeAccessStateSummary {
        return $this->deviceExchangeAccessStateSummary;
    }

    /**
     * Gets the deviceOperatingSystemSummary property value. Device operating system summary.
     * @return DeviceOperatingSystemSummary|null
    */
    public function getDeviceOperatingSystemSummary(): ?DeviceOperatingSystemSummary {
        return $this->deviceOperatingSystemSummary;
    }

    /**
     * Gets the dualEnrolledDeviceCount property value. The number of devices enrolled in both MDM and EAS
     * @return int|null
    */
    public function getDualEnrolledDeviceCount(): ?int {
        return $this->dualEnrolledDeviceCount;
    }

    /**
     * Gets the enrolledDeviceCount property value. Total enrolled device count. Does not include PC devices managed via Intune PC Agent
     * @return int|null
    */
    public function getEnrolledDeviceCount(): ?int {
        return $this->enrolledDeviceCount;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'deviceExchangeAccessStateSummary' => function (ParseNode $n) use ($o) { $o->setDeviceExchangeAccessStateSummary($n->getObjectValue(array(DeviceExchangeAccessStateSummary::class, 'createFromDiscriminatorValue'))); },
            'deviceOperatingSystemSummary' => function (ParseNode $n) use ($o) { $o->setDeviceOperatingSystemSummary($n->getObjectValue(array(DeviceOperatingSystemSummary::class, 'createFromDiscriminatorValue'))); },
            'dualEnrolledDeviceCount' => function (ParseNode $n) use ($o) { $o->setDualEnrolledDeviceCount($n->getIntegerValue()); },
            'enrolledDeviceCount' => function (ParseNode $n) use ($o) { $o->setEnrolledDeviceCount($n->getIntegerValue()); },
            'lastModifiedDateTime' => function (ParseNode $n) use ($o) { $o->setLastModifiedDateTime($n->getDateTimeValue()); },
            'managedDeviceModelsAndManufacturers' => function (ParseNode $n) use ($o) { $o->setManagedDeviceModelsAndManufacturers($n->getObjectValue(array(ManagedDeviceModelsAndManufacturers::class, 'createFromDiscriminatorValue'))); },
            'mdmEnrolledCount' => function (ParseNode $n) use ($o) { $o->setMdmEnrolledCount($n->getIntegerValue()); },
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Last modified date time of device overview
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the managedDeviceModelsAndManufacturers property value. Models and Manufactures meatadata for managed devices in the account
     * @return ManagedDeviceModelsAndManufacturers|null
    */
    public function getManagedDeviceModelsAndManufacturers(): ?ManagedDeviceModelsAndManufacturers {
        return $this->managedDeviceModelsAndManufacturers;
    }

    /**
     * Gets the mdmEnrolledCount property value. The number of devices enrolled in MDM
     * @return int|null
    */
    public function getMdmEnrolledCount(): ?int {
        return $this->mdmEnrolledCount;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeObjectValue('deviceExchangeAccessStateSummary', $this->deviceExchangeAccessStateSummary);
        $writer->writeObjectValue('deviceOperatingSystemSummary', $this->deviceOperatingSystemSummary);
        $writer->writeIntegerValue('dualEnrolledDeviceCount', $this->dualEnrolledDeviceCount);
        $writer->writeIntegerValue('enrolledDeviceCount', $this->enrolledDeviceCount);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeObjectValue('managedDeviceModelsAndManufacturers', $this->managedDeviceModelsAndManufacturers);
        $writer->writeIntegerValue('mdmEnrolledCount', $this->mdmEnrolledCount);
    }

    /**
     * Sets the deviceExchangeAccessStateSummary property value. Distribution of Exchange Access State in Intune
     *  @param DeviceExchangeAccessStateSummary|null $value Value to set for the deviceExchangeAccessStateSummary property.
    */
    public function setDeviceExchangeAccessStateSummary(?DeviceExchangeAccessStateSummary $value ): void {
        $this->deviceExchangeAccessStateSummary = $value;
    }

    /**
     * Sets the deviceOperatingSystemSummary property value. Device operating system summary.
     *  @param DeviceOperatingSystemSummary|null $value Value to set for the deviceOperatingSystemSummary property.
    */
    public function setDeviceOperatingSystemSummary(?DeviceOperatingSystemSummary $value ): void {
        $this->deviceOperatingSystemSummary = $value;
    }

    /**
     * Sets the dualEnrolledDeviceCount property value. The number of devices enrolled in both MDM and EAS
     *  @param int|null $value Value to set for the dualEnrolledDeviceCount property.
    */
    public function setDualEnrolledDeviceCount(?int $value ): void {
        $this->dualEnrolledDeviceCount = $value;
    }

    /**
     * Sets the enrolledDeviceCount property value. Total enrolled device count. Does not include PC devices managed via Intune PC Agent
     *  @param int|null $value Value to set for the enrolledDeviceCount property.
    */
    public function setEnrolledDeviceCount(?int $value ): void {
        $this->enrolledDeviceCount = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Last modified date time of device overview
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the managedDeviceModelsAndManufacturers property value. Models and Manufactures meatadata for managed devices in the account
     *  @param ManagedDeviceModelsAndManufacturers|null $value Value to set for the managedDeviceModelsAndManufacturers property.
    */
    public function setManagedDeviceModelsAndManufacturers(?ManagedDeviceModelsAndManufacturers $value ): void {
        $this->managedDeviceModelsAndManufacturers = $value;
    }

    /**
     * Sets the mdmEnrolledCount property value. The number of devices enrolled in MDM
     *  @param int|null $value Value to set for the mdmEnrolledCount property.
    */
    public function setMdmEnrolledCount(?int $value ): void {
        $this->mdmEnrolledCount = $value;
    }

}

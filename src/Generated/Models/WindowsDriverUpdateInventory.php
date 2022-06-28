<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class WindowsDriverUpdateInventory extends Entity implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var int|null $applicableDeviceCount The number of devices for which this driver is applicable.
    */
    private ?int $applicableDeviceCount = null;
    
    /**
     * @var DriverApprovalStatus|null $approvalStatus The approval status for this driver. Possible values are: needsReview, declined, approved, suspended.
    */
    private ?DriverApprovalStatus $approvalStatus = null;
    
    /**
     * @var DriverCategory|null $category The category for this driver. Possible values are: recommended, previouslyApproved, other.
    */
    private ?DriverCategory $category = null;
    
    /**
     * @var DateTime|null $deployDateTime The date time when a driver should be deployed if approvalStatus is approved.
    */
    private ?DateTime $deployDateTime = null;
    
    /**
     * @var string|null $driverClass The class of the driver.
    */
    private ?string $driverClass = null;
    
    /**
     * @var string|null $manufacturer The manufacturer of the driver.
    */
    private ?string $manufacturer = null;
    
    /**
     * @var string|null $name The name of the driver.
    */
    private ?string $name = null;
    
    /**
     * @var DateTime|null $releaseDateTime The release date time of the driver.
    */
    private ?DateTime $releaseDateTime = null;
    
    /**
     * @var string|null $version The version of the driver.
    */
    private ?string $version = null;
    
    /**
     * Instantiates a new windowsDriverUpdateInventory and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return WindowsDriverUpdateInventory
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): WindowsDriverUpdateInventory {
        return new WindowsDriverUpdateInventory();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the applicableDeviceCount property value. The number of devices for which this driver is applicable.
     * @return int|null
    */
    public function getApplicableDeviceCount(): ?int {
        return $this->applicableDeviceCount;
    }

    /**
     * Gets the approvalStatus property value. The approval status for this driver. Possible values are: needsReview, declined, approved, suspended.
     * @return DriverApprovalStatus|null
    */
    public function getApprovalStatus(): ?DriverApprovalStatus {
        return $this->approvalStatus;
    }

    /**
     * Gets the category property value. The category for this driver. Possible values are: recommended, previouslyApproved, other.
     * @return DriverCategory|null
    */
    public function getCategory(): ?DriverCategory {
        return $this->category;
    }

    /**
     * Gets the deployDateTime property value. The date time when a driver should be deployed if approvalStatus is approved.
     * @return DateTime|null
    */
    public function getDeployDateTime(): ?DateTime {
        return $this->deployDateTime;
    }

    /**
     * Gets the driverClass property value. The class of the driver.
     * @return string|null
    */
    public function getDriverClass(): ?string {
        return $this->driverClass;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'applicableDeviceCount' => function (ParseNode $n) use ($o) { $o->setApplicableDeviceCount($n->getIntegerValue()); },
            'approvalStatus' => function (ParseNode $n) use ($o) { $o->setApprovalStatus($n->getEnumValue(DriverApprovalStatus::class)); },
            'category' => function (ParseNode $n) use ($o) { $o->setCategory($n->getEnumValue(DriverCategory::class)); },
            'deployDateTime' => function (ParseNode $n) use ($o) { $o->setDeployDateTime($n->getDateTimeValue()); },
            'driverClass' => function (ParseNode $n) use ($o) { $o->setDriverClass($n->getStringValue()); },
            'manufacturer' => function (ParseNode $n) use ($o) { $o->setManufacturer($n->getStringValue()); },
            'name' => function (ParseNode $n) use ($o) { $o->setName($n->getStringValue()); },
            'releaseDateTime' => function (ParseNode $n) use ($o) { $o->setReleaseDateTime($n->getDateTimeValue()); },
            'version' => function (ParseNode $n) use ($o) { $o->setVersion($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the manufacturer property value. The manufacturer of the driver.
     * @return string|null
    */
    public function getManufacturer(): ?string {
        return $this->manufacturer;
    }

    /**
     * Gets the name property value. The name of the driver.
     * @return string|null
    */
    public function getName(): ?string {
        return $this->name;
    }

    /**
     * Gets the releaseDateTime property value. The release date time of the driver.
     * @return DateTime|null
    */
    public function getReleaseDateTime(): ?DateTime {
        return $this->releaseDateTime;
    }

    /**
     * Gets the version property value. The version of the driver.
     * @return string|null
    */
    public function getVersion(): ?string {
        return $this->version;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeIntegerValue('applicableDeviceCount', $this->applicableDeviceCount);
        $writer->writeEnumValue('approvalStatus', $this->approvalStatus);
        $writer->writeEnumValue('category', $this->category);
        $writer->writeDateTimeValue('deployDateTime', $this->deployDateTime);
        $writer->writeStringValue('driverClass', $this->driverClass);
        $writer->writeStringValue('manufacturer', $this->manufacturer);
        $writer->writeStringValue('name', $this->name);
        $writer->writeDateTimeValue('releaseDateTime', $this->releaseDateTime);
        $writer->writeStringValue('version', $this->version);
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
     * Sets the applicableDeviceCount property value. The number of devices for which this driver is applicable.
     *  @param int|null $value Value to set for the applicableDeviceCount property.
    */
    public function setApplicableDeviceCount(?int $value ): void {
        $this->applicableDeviceCount = $value;
    }

    /**
     * Sets the approvalStatus property value. The approval status for this driver. Possible values are: needsReview, declined, approved, suspended.
     *  @param DriverApprovalStatus|null $value Value to set for the approvalStatus property.
    */
    public function setApprovalStatus(?DriverApprovalStatus $value ): void {
        $this->approvalStatus = $value;
    }

    /**
     * Sets the category property value. The category for this driver. Possible values are: recommended, previouslyApproved, other.
     *  @param DriverCategory|null $value Value to set for the category property.
    */
    public function setCategory(?DriverCategory $value ): void {
        $this->category = $value;
    }

    /**
     * Sets the deployDateTime property value. The date time when a driver should be deployed if approvalStatus is approved.
     *  @param DateTime|null $value Value to set for the deployDateTime property.
    */
    public function setDeployDateTime(?DateTime $value ): void {
        $this->deployDateTime = $value;
    }

    /**
     * Sets the driverClass property value. The class of the driver.
     *  @param string|null $value Value to set for the driverClass property.
    */
    public function setDriverClass(?string $value ): void {
        $this->driverClass = $value;
    }

    /**
     * Sets the manufacturer property value. The manufacturer of the driver.
     *  @param string|null $value Value to set for the manufacturer property.
    */
    public function setManufacturer(?string $value ): void {
        $this->manufacturer = $value;
    }

    /**
     * Sets the name property value. The name of the driver.
     *  @param string|null $value Value to set for the name property.
    */
    public function setName(?string $value ): void {
        $this->name = $value;
    }

    /**
     * Sets the releaseDateTime property value. The release date time of the driver.
     *  @param DateTime|null $value Value to set for the releaseDateTime property.
    */
    public function setReleaseDateTime(?DateTime $value ): void {
        $this->releaseDateTime = $value;
    }

    /**
     * Sets the version property value. The version of the driver.
     *  @param string|null $value Value to set for the version property.
    */
    public function setVersion(?string $value ): void {
        $this->version = $value;
    }

}

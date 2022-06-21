<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use Microsoft\Kiota\Abstractions\Serialization\AdditionalDataHolder;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class DeviceEnrollmentPlatformRestriction implements AdditionalDataHolder, Parsable 
{
    /**
     * @var array<string, mixed> $AdditionalData Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
    */
    private array $additionalData;
    
    /**
     * @var array<string>|null $blockedManufacturers Collection of blocked Manufacturers.
    */
    private ?array $blockedManufacturers = null;
    
    /**
     * @var array<string>|null $blockedSkus Collection of blocked Skus.
    */
    private ?array $blockedSkus = null;
    
    /**
     * @var string|null $osMaximumVersion Max OS version supported
    */
    private ?string $osMaximumVersion = null;
    
    /**
     * @var string|null $osMinimumVersion Min OS version supported
    */
    private ?string $osMinimumVersion = null;
    
    /**
     * @var bool|null $personalDeviceEnrollmentBlocked Block personally owned devices from enrolling
    */
    private ?bool $personalDeviceEnrollmentBlocked = null;
    
    /**
     * @var bool|null $platformBlocked Block the platform from enrolling
    */
    private ?bool $platformBlocked = null;
    
    /**
     * Instantiates a new deviceEnrollmentPlatformRestriction and sets the default values.
    */
    public function __construct() {
        $this->additionalData = [];
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return DeviceEnrollmentPlatformRestriction
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): DeviceEnrollmentPlatformRestriction {
        return new DeviceEnrollmentPlatformRestriction();
    }

    /**
     * Gets the additionalData property value. Stores additional data not described in the OpenAPI description found when deserializing. Can be used for serialization as well.
     * @return array<string, mixed>
    */
    public function getAdditionalData(): array {
        return $this->additionalData;
    }

    /**
     * Gets the blockedManufacturers property value. Collection of blocked Manufacturers.
     * @return array<string>|null
    */
    public function getBlockedManufacturers(): ?array {
        return $this->blockedManufacturers;
    }

    /**
     * Gets the blockedSkus property value. Collection of blocked Skus.
     * @return array<string>|null
    */
    public function getBlockedSkus(): ?array {
        return $this->blockedSkus;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return  [
            'blockedManufacturers' => function (ParseNode $n) use ($o) { $o->setBlockedManufacturers($n->getCollectionOfPrimitiveValues()); },
            'blockedSkus' => function (ParseNode $n) use ($o) { $o->setBlockedSkus($n->getCollectionOfPrimitiveValues()); },
            'osMaximumVersion' => function (ParseNode $n) use ($o) { $o->setOsMaximumVersion($n->getStringValue()); },
            'osMinimumVersion' => function (ParseNode $n) use ($o) { $o->setOsMinimumVersion($n->getStringValue()); },
            'personalDeviceEnrollmentBlocked' => function (ParseNode $n) use ($o) { $o->setPersonalDeviceEnrollmentBlocked($n->getBooleanValue()); },
            'platformBlocked' => function (ParseNode $n) use ($o) { $o->setPlatformBlocked($n->getBooleanValue()); },
        ];
    }

    /**
     * Gets the osMaximumVersion property value. Max OS version supported
     * @return string|null
    */
    public function getOsMaximumVersion(): ?string {
        return $this->osMaximumVersion;
    }

    /**
     * Gets the osMinimumVersion property value. Min OS version supported
     * @return string|null
    */
    public function getOsMinimumVersion(): ?string {
        return $this->osMinimumVersion;
    }

    /**
     * Gets the personalDeviceEnrollmentBlocked property value. Block personally owned devices from enrolling
     * @return bool|null
    */
    public function getPersonalDeviceEnrollmentBlocked(): ?bool {
        return $this->personalDeviceEnrollmentBlocked;
    }

    /**
     * Gets the platformBlocked property value. Block the platform from enrolling
     * @return bool|null
    */
    public function getPlatformBlocked(): ?bool {
        return $this->platformBlocked;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        $writer->writeCollectionOfPrimitiveValues('blockedManufacturers', $this->blockedManufacturers);
        $writer->writeCollectionOfPrimitiveValues('blockedSkus', $this->blockedSkus);
        $writer->writeStringValue('osMaximumVersion', $this->osMaximumVersion);
        $writer->writeStringValue('osMinimumVersion', $this->osMinimumVersion);
        $writer->writeBooleanValue('personalDeviceEnrollmentBlocked', $this->personalDeviceEnrollmentBlocked);
        $writer->writeBooleanValue('platformBlocked', $this->platformBlocked);
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
     * Sets the blockedManufacturers property value. Collection of blocked Manufacturers.
     *  @param array<string>|null $value Value to set for the blockedManufacturers property.
    */
    public function setBlockedManufacturers(?array $value ): void {
        $this->blockedManufacturers = $value;
    }

    /**
     * Sets the blockedSkus property value. Collection of blocked Skus.
     *  @param array<string>|null $value Value to set for the blockedSkus property.
    */
    public function setBlockedSkus(?array $value ): void {
        $this->blockedSkus = $value;
    }

    /**
     * Sets the osMaximumVersion property value. Max OS version supported
     *  @param string|null $value Value to set for the osMaximumVersion property.
    */
    public function setOsMaximumVersion(?string $value ): void {
        $this->osMaximumVersion = $value;
    }

    /**
     * Sets the osMinimumVersion property value. Min OS version supported
     *  @param string|null $value Value to set for the osMinimumVersion property.
    */
    public function setOsMinimumVersion(?string $value ): void {
        $this->osMinimumVersion = $value;
    }

    /**
     * Sets the personalDeviceEnrollmentBlocked property value. Block personally owned devices from enrolling
     *  @param bool|null $value Value to set for the personalDeviceEnrollmentBlocked property.
    */
    public function setPersonalDeviceEnrollmentBlocked(?bool $value ): void {
        $this->personalDeviceEnrollmentBlocked = $value;
    }

    /**
     * Sets the platformBlocked property value. Block the platform from enrolling
     *  @param bool|null $value Value to set for the platformBlocked property.
    */
    public function setPlatformBlocked(?bool $value ): void {
        $this->platformBlocked = $value;
    }

}

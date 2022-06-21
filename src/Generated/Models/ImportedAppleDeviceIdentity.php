<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class ImportedAppleDeviceIdentity extends Entity implements Parsable 
{
    /**
     * @var DateTime|null $createdDateTime Created Date Time of the device
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var string|null $description The description of the device
    */
    private ?string $description = null;
    
    /**
     * @var DiscoverySource|null $discoverySource Apple device discovery source. Possible values are: unknown, adminImport, deviceEnrollmentProgram.
    */
    private ?DiscoverySource $discoverySource = null;
    
    /**
     * @var EnrollmentState|null $enrollmentState The state of the device in Intune. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked.
    */
    private ?EnrollmentState $enrollmentState = null;
    
    /**
     * @var bool|null $isDeleted Indicates if the device is deleted from Apple Business Manager
    */
    private ?bool $isDeleted = null;
    
    /**
     * @var bool|null $isSupervised Indicates if the Apple device is supervised. More information is at: https://support.apple.com/en-us/HT202837
    */
    private ?bool $isSupervised = null;
    
    /**
     * @var DateTime|null $lastContactedDateTime Last Contacted Date Time of the device
    */
    private ?DateTime $lastContactedDateTime = null;
    
    /**
     * @var Platform|null $platform The platform of the Device. Possible values are: unknown, ios, android, windows, windowsMobile, macOS.
    */
    private ?Platform $platform = null;
    
    /**
     * @var DateTime|null $requestedEnrollmentProfileAssignmentDateTime The time enrollment profile was assigned to the device
    */
    private ?DateTime $requestedEnrollmentProfileAssignmentDateTime = null;
    
    /**
     * @var string|null $requestedEnrollmentProfileId Enrollment profile Id admin intends to apply to the device during next enrollment
    */
    private ?string $requestedEnrollmentProfileId = null;
    
    /**
     * @var string|null $serialNumber Device serial number
    */
    private ?string $serialNumber = null;
    
    /**
     * Instantiates a new importedAppleDeviceIdentity and sets the default values.
    */
    public function __construct() {
        parent::__construct();
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return ImportedAppleDeviceIdentity
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): ImportedAppleDeviceIdentity {
        $mappingValueNode = $parseNode->getChildNode("@odata.type");
        if ($mappingValueNode !== null) {
            $mappingValue = $mappingValueNode->getStringValue();
            switch ($mappingValue) {
                case '#microsoft.graph.importedAppleDeviceIdentityResult': return new ImportedAppleDeviceIdentityResult();
            }
        }
        return new ImportedAppleDeviceIdentity();
    }

    /**
     * Gets the createdDateTime property value. Created Date Time of the device
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the description property value. The description of the device
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the discoverySource property value. Apple device discovery source. Possible values are: unknown, adminImport, deviceEnrollmentProgram.
     * @return DiscoverySource|null
    */
    public function getDiscoverySource(): ?DiscoverySource {
        return $this->discoverySource;
    }

    /**
     * Gets the enrollmentState property value. The state of the device in Intune. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked.
     * @return EnrollmentState|null
    */
    public function getEnrollmentState(): ?EnrollmentState {
        return $this->enrollmentState;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'createdDateTime' => function (ParseNode $n) use ($o) { $o->setCreatedDateTime($n->getDateTimeValue()); },
            'description' => function (ParseNode $n) use ($o) { $o->setDescription($n->getStringValue()); },
            'discoverySource' => function (ParseNode $n) use ($o) { $o->setDiscoverySource($n->getEnumValue(DiscoverySource::class)); },
            'enrollmentState' => function (ParseNode $n) use ($o) { $o->setEnrollmentState($n->getEnumValue(EnrollmentState::class)); },
            'isDeleted' => function (ParseNode $n) use ($o) { $o->setIsDeleted($n->getBooleanValue()); },
            'isSupervised' => function (ParseNode $n) use ($o) { $o->setIsSupervised($n->getBooleanValue()); },
            'lastContactedDateTime' => function (ParseNode $n) use ($o) { $o->setLastContactedDateTime($n->getDateTimeValue()); },
            'platform' => function (ParseNode $n) use ($o) { $o->setPlatform($n->getEnumValue(Platform::class)); },
            'requestedEnrollmentProfileAssignmentDateTime' => function (ParseNode $n) use ($o) { $o->setRequestedEnrollmentProfileAssignmentDateTime($n->getDateTimeValue()); },
            'requestedEnrollmentProfileId' => function (ParseNode $n) use ($o) { $o->setRequestedEnrollmentProfileId($n->getStringValue()); },
            'serialNumber' => function (ParseNode $n) use ($o) { $o->setSerialNumber($n->getStringValue()); },
        ]);
    }

    /**
     * Gets the isDeleted property value. Indicates if the device is deleted from Apple Business Manager
     * @return bool|null
    */
    public function getIsDeleted(): ?bool {
        return $this->isDeleted;
    }

    /**
     * Gets the isSupervised property value. Indicates if the Apple device is supervised. More information is at: https://support.apple.com/en-us/HT202837
     * @return bool|null
    */
    public function getIsSupervised(): ?bool {
        return $this->isSupervised;
    }

    /**
     * Gets the lastContactedDateTime property value. Last Contacted Date Time of the device
     * @return DateTime|null
    */
    public function getLastContactedDateTime(): ?DateTime {
        return $this->lastContactedDateTime;
    }

    /**
     * Gets the platform property value. The platform of the Device. Possible values are: unknown, ios, android, windows, windowsMobile, macOS.
     * @return Platform|null
    */
    public function getPlatform(): ?Platform {
        return $this->platform;
    }

    /**
     * Gets the requestedEnrollmentProfileAssignmentDateTime property value. The time enrollment profile was assigned to the device
     * @return DateTime|null
    */
    public function getRequestedEnrollmentProfileAssignmentDateTime(): ?DateTime {
        return $this->requestedEnrollmentProfileAssignmentDateTime;
    }

    /**
     * Gets the requestedEnrollmentProfileId property value. Enrollment profile Id admin intends to apply to the device during next enrollment
     * @return string|null
    */
    public function getRequestedEnrollmentProfileId(): ?string {
        return $this->requestedEnrollmentProfileId;
    }

    /**
     * Gets the serialNumber property value. Device serial number
     * @return string|null
    */
    public function getSerialNumber(): ?string {
        return $this->serialNumber;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeStringValue('description', $this->description);
        $writer->writeEnumValue('discoverySource', $this->discoverySource);
        $writer->writeEnumValue('enrollmentState', $this->enrollmentState);
        $writer->writeBooleanValue('isDeleted', $this->isDeleted);
        $writer->writeBooleanValue('isSupervised', $this->isSupervised);
        $writer->writeDateTimeValue('lastContactedDateTime', $this->lastContactedDateTime);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeDateTimeValue('requestedEnrollmentProfileAssignmentDateTime', $this->requestedEnrollmentProfileAssignmentDateTime);
        $writer->writeStringValue('requestedEnrollmentProfileId', $this->requestedEnrollmentProfileId);
        $writer->writeStringValue('serialNumber', $this->serialNumber);
    }

    /**
     * Sets the createdDateTime property value. Created Date Time of the device
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the description property value. The description of the device
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the discoverySource property value. Apple device discovery source. Possible values are: unknown, adminImport, deviceEnrollmentProgram.
     *  @param DiscoverySource|null $value Value to set for the discoverySource property.
    */
    public function setDiscoverySource(?DiscoverySource $value ): void {
        $this->discoverySource = $value;
    }

    /**
     * Sets the enrollmentState property value. The state of the device in Intune. Possible values are: unknown, enrolled, pendingReset, failed, notContacted, blocked.
     *  @param EnrollmentState|null $value Value to set for the enrollmentState property.
    */
    public function setEnrollmentState(?EnrollmentState $value ): void {
        $this->enrollmentState = $value;
    }

    /**
     * Sets the isDeleted property value. Indicates if the device is deleted from Apple Business Manager
     *  @param bool|null $value Value to set for the isDeleted property.
    */
    public function setIsDeleted(?bool $value ): void {
        $this->isDeleted = $value;
    }

    /**
     * Sets the isSupervised property value. Indicates if the Apple device is supervised. More information is at: https://support.apple.com/en-us/HT202837
     *  @param bool|null $value Value to set for the isSupervised property.
    */
    public function setIsSupervised(?bool $value ): void {
        $this->isSupervised = $value;
    }

    /**
     * Sets the lastContactedDateTime property value. Last Contacted Date Time of the device
     *  @param DateTime|null $value Value to set for the lastContactedDateTime property.
    */
    public function setLastContactedDateTime(?DateTime $value ): void {
        $this->lastContactedDateTime = $value;
    }

    /**
     * Sets the platform property value. The platform of the Device. Possible values are: unknown, ios, android, windows, windowsMobile, macOS.
     *  @param Platform|null $value Value to set for the platform property.
    */
    public function setPlatform(?Platform $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the requestedEnrollmentProfileAssignmentDateTime property value. The time enrollment profile was assigned to the device
     *  @param DateTime|null $value Value to set for the requestedEnrollmentProfileAssignmentDateTime property.
    */
    public function setRequestedEnrollmentProfileAssignmentDateTime(?DateTime $value ): void {
        $this->requestedEnrollmentProfileAssignmentDateTime = $value;
    }

    /**
     * Sets the requestedEnrollmentProfileId property value. Enrollment profile Id admin intends to apply to the device during next enrollment
     *  @param string|null $value Value to set for the requestedEnrollmentProfileId property.
    */
    public function setRequestedEnrollmentProfileId(?string $value ): void {
        $this->requestedEnrollmentProfileId = $value;
    }

    /**
     * Sets the serialNumber property value. Device serial number
     *  @param string|null $value Value to set for the serialNumber property.
    */
    public function setSerialNumber(?string $value ): void {
        $this->serialNumber = $value;
    }

}

<?php

namespace Microsoft\Graph\Beta\Generated\Models;

use DateTime;
use Microsoft\Kiota\Abstractions\Serialization\Parsable;
use Microsoft\Kiota\Abstractions\Serialization\ParseNode;
use Microsoft\Kiota\Abstractions\Serialization\SerializationWriter;

class AppleUserInitiatedEnrollmentProfile extends Entity implements Parsable 
{
    /**
     * @var array<AppleEnrollmentProfileAssignment>|null $assignments The list of assignments for this profile.
    */
    private ?array $assignments = null;
    
    /**
     * @var array<AppleOwnerTypeEnrollmentType>|null $availableEnrollmentTypeOptions List of available enrollment type options
    */
    private ?array $availableEnrollmentTypeOptions = null;
    
    /**
     * @var DateTime|null $createdDateTime Profile creation time
    */
    private ?DateTime $createdDateTime = null;
    
    /**
     * @var AppleUserInitiatedEnrollmentType|null $defaultEnrollmentType The defaultEnrollmentType property
    */
    private ?AppleUserInitiatedEnrollmentType $defaultEnrollmentType = null;
    
    /**
     * @var string|null $description Description of the profile
    */
    private ?string $description = null;
    
    /**
     * @var string|null $displayName Name of the profile
    */
    private ?string $displayName = null;
    
    /**
     * @var DateTime|null $lastModifiedDateTime Profile last modified time
    */
    private ?DateTime $lastModifiedDateTime = null;
    
    /**
     * @var DevicePlatformType|null $platform Supported platform types.
    */
    private ?DevicePlatformType $platform = null;
    
    /**
     * @var int|null $priority Priority, 0 is highest
    */
    private ?int $priority = null;
    
    /**
     * Instantiates a new appleUserInitiatedEnrollmentProfile and sets the default values.
    */
    public function __construct() {
        parent::__construct();
        $this->setOdataType('#microsoft.graph.appleUserInitiatedEnrollmentProfile');
    }

    /**
     * Creates a new instance of the appropriate class based on discriminator value
     * @param ParseNode $parseNode The parse node to use to read the discriminator value and create the object
     * @return AppleUserInitiatedEnrollmentProfile
    */
    public static function createFromDiscriminatorValue(ParseNode $parseNode): AppleUserInitiatedEnrollmentProfile {
        return new AppleUserInitiatedEnrollmentProfile();
    }

    /**
     * Gets the assignments property value. The list of assignments for this profile.
     * @return array<AppleEnrollmentProfileAssignment>|null
    */
    public function getAssignments(): ?array {
        return $this->assignments;
    }

    /**
     * Gets the availableEnrollmentTypeOptions property value. List of available enrollment type options
     * @return array<AppleOwnerTypeEnrollmentType>|null
    */
    public function getAvailableEnrollmentTypeOptions(): ?array {
        return $this->availableEnrollmentTypeOptions;
    }

    /**
     * Gets the createdDateTime property value. Profile creation time
     * @return DateTime|null
    */
    public function getCreatedDateTime(): ?DateTime {
        return $this->createdDateTime;
    }

    /**
     * Gets the defaultEnrollmentType property value. The defaultEnrollmentType property
     * @return AppleUserInitiatedEnrollmentType|null
    */
    public function getDefaultEnrollmentType(): ?AppleUserInitiatedEnrollmentType {
        return $this->defaultEnrollmentType;
    }

    /**
     * Gets the description property value. Description of the profile
     * @return string|null
    */
    public function getDescription(): ?string {
        return $this->description;
    }

    /**
     * Gets the displayName property value. Name of the profile
     * @return string|null
    */
    public function getDisplayName(): ?string {
        return $this->displayName;
    }

    /**
     * The deserialization information for the current model
     * @return array<string, callable>
    */
    public function getFieldDeserializers(): array {
        $o = $this;
        return array_merge(parent::getFieldDeserializers(), [
            'assignments' => fn(ParseNode $n) => $o->setAssignments($n->getCollectionOfObjectValues([AppleEnrollmentProfileAssignment::class, 'createFromDiscriminatorValue'])),
            'availableEnrollmentTypeOptions' => fn(ParseNode $n) => $o->setAvailableEnrollmentTypeOptions($n->getCollectionOfObjectValues([AppleOwnerTypeEnrollmentType::class, 'createFromDiscriminatorValue'])),
            'createdDateTime' => fn(ParseNode $n) => $o->setCreatedDateTime($n->getDateTimeValue()),
            'defaultEnrollmentType' => fn(ParseNode $n) => $o->setDefaultEnrollmentType($n->getEnumValue(AppleUserInitiatedEnrollmentType::class)),
            'description' => fn(ParseNode $n) => $o->setDescription($n->getStringValue()),
            'displayName' => fn(ParseNode $n) => $o->setDisplayName($n->getStringValue()),
            'lastModifiedDateTime' => fn(ParseNode $n) => $o->setLastModifiedDateTime($n->getDateTimeValue()),
            'platform' => fn(ParseNode $n) => $o->setPlatform($n->getEnumValue(DevicePlatformType::class)),
            'priority' => fn(ParseNode $n) => $o->setPriority($n->getIntegerValue()),
        ]);
    }

    /**
     * Gets the lastModifiedDateTime property value. Profile last modified time
     * @return DateTime|null
    */
    public function getLastModifiedDateTime(): ?DateTime {
        return $this->lastModifiedDateTime;
    }

    /**
     * Gets the platform property value. Supported platform types.
     * @return DevicePlatformType|null
    */
    public function getPlatform(): ?DevicePlatformType {
        return $this->platform;
    }

    /**
     * Gets the priority property value. Priority, 0 is highest
     * @return int|null
    */
    public function getPriority(): ?int {
        return $this->priority;
    }

    /**
     * Serializes information the current object
     * @param SerializationWriter $writer Serialization writer to use to serialize this model
    */
    public function serialize(SerializationWriter $writer): void {
        parent::serialize($writer);
        $writer->writeCollectionOfObjectValues('assignments', $this->assignments);
        $writer->writeCollectionOfObjectValues('availableEnrollmentTypeOptions', $this->availableEnrollmentTypeOptions);
        $writer->writeDateTimeValue('createdDateTime', $this->createdDateTime);
        $writer->writeEnumValue('defaultEnrollmentType', $this->defaultEnrollmentType);
        $writer->writeStringValue('description', $this->description);
        $writer->writeStringValue('displayName', $this->displayName);
        $writer->writeDateTimeValue('lastModifiedDateTime', $this->lastModifiedDateTime);
        $writer->writeEnumValue('platform', $this->platform);
        $writer->writeIntegerValue('priority', $this->priority);
    }

    /**
     * Sets the assignments property value. The list of assignments for this profile.
     *  @param array<AppleEnrollmentProfileAssignment>|null $value Value to set for the assignments property.
    */
    public function setAssignments(?array $value ): void {
        $this->assignments = $value;
    }

    /**
     * Sets the availableEnrollmentTypeOptions property value. List of available enrollment type options
     *  @param array<AppleOwnerTypeEnrollmentType>|null $value Value to set for the availableEnrollmentTypeOptions property.
    */
    public function setAvailableEnrollmentTypeOptions(?array $value ): void {
        $this->availableEnrollmentTypeOptions = $value;
    }

    /**
     * Sets the createdDateTime property value. Profile creation time
     *  @param DateTime|null $value Value to set for the createdDateTime property.
    */
    public function setCreatedDateTime(?DateTime $value ): void {
        $this->createdDateTime = $value;
    }

    /**
     * Sets the defaultEnrollmentType property value. The defaultEnrollmentType property
     *  @param AppleUserInitiatedEnrollmentType|null $value Value to set for the defaultEnrollmentType property.
    */
    public function setDefaultEnrollmentType(?AppleUserInitiatedEnrollmentType $value ): void {
        $this->defaultEnrollmentType = $value;
    }

    /**
     * Sets the description property value. Description of the profile
     *  @param string|null $value Value to set for the description property.
    */
    public function setDescription(?string $value ): void {
        $this->description = $value;
    }

    /**
     * Sets the displayName property value. Name of the profile
     *  @param string|null $value Value to set for the displayName property.
    */
    public function setDisplayName(?string $value ): void {
        $this->displayName = $value;
    }

    /**
     * Sets the lastModifiedDateTime property value. Profile last modified time
     *  @param DateTime|null $value Value to set for the lastModifiedDateTime property.
    */
    public function setLastModifiedDateTime(?DateTime $value ): void {
        $this->lastModifiedDateTime = $value;
    }

    /**
     * Sets the platform property value. Supported platform types.
     *  @param DevicePlatformType|null $value Value to set for the platform property.
    */
    public function setPlatform(?DevicePlatformType $value ): void {
        $this->platform = $value;
    }

    /**
     * Sets the priority property value. Priority, 0 is highest
     *  @param int|null $value Value to set for the priority property.
    */
    public function setPriority(?int $value ): void {
        $this->priority = $value;
    }

}
